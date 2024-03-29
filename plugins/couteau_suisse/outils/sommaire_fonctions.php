<?php

@define('_sommaire_NB_TITRES_MINI', 2);
@define('_sommaire_SANS_FOND', '[!fond]');

// aide le Couteau Suisse a calculer la balise #INTRODUCTION
$GLOBALS['cs_introduire'][] = 'sommaire_nettoyer_raccourcis';

// renvoie le sommaire d'une page d'article
// $page=false reinitialise le compteur interne des ancres
function sommaire_d_une_page(&$texte, &$nbh3, $page=0, $num_pages=0) {
	static $index; if(!$index || $page===false) $index=0;
	if($page===false) return;
	// trouver quel <hx> est utilise
	$hierarchie = preg_match(',<h(\d),',$GLOBALS['debut_intertitre'],$regs)?$regs[1]:'3';
	@define('_sommaire_NB_CARACTERES', 30);
	$self = nettoyer_uri();//self();//$GLOBALS['REQUEST_URI'];
	// si on n'est pas en mode impression, on calcule l'image de retour au sommaire
	if(!defined('_CS_PRINT')) {
		$titre = _T('couteau:sommaire_titre');
		$haut = "<a title=\"$titre\" href=\"".$self."#outil_sommaire\" class=\"sommaire_ancre\">&nbsp;</a>";
	} else $haut = '';
	// traitement des intertitres <hx>
	preg_match_all(",(<h{$hierarchie}[^>]*)>(.*)</h{$hierarchie}>,Umsi",$texte, $regs);
	$nbh3 += count($regs[0]);
	$pos = 0; $sommaire = '';
	// calcul de la page
	$p = $page?_T('couteau:sommaire_page', array('page'=>$page)):'';
	for($i=0;$i<count($regs[0]);$i++,$index++){
		$ancre = " id=\"outil_sommaire_$index\">";
		if (($pos2 = strpos($texte, $regs[0][$i], $pos))!==false) {
			$titre = preg_replace(',^<p[^>]*>(.*)</p>$,Umsi', '\\1', trim($regs[2][$i]));
			$texte = substr($texte, 0, $pos2) . $regs[1][$i] 
				. $ancre . $haut . $titre
				. substr($texte, $pos2 + strlen($regs[1][$i])+1 + strlen($regs[2][$i]));
			$pos = $pos2 + strlen($ancre) + strlen($regs[0][$i]);
			$brut = preg_replace(',[\n\r]+,',' ',textebrut(echappe_retour($regs[2][$i],'CS')));
			$lien = cs_propre(couper($brut, _sommaire_NB_CARACTERES));
			$lien = preg_replace('/(&nbsp;|\s)*[!?,;.:]+$/', '', $lien); // eviter une ponctuation a la fin
			$titre = attribut_html(couper($brut, 100));
			// si la decoupe en page est active...
			$artpage = function_exists('decoupe_url')?decoupe_url($self, $page, $num_pages):$self;
			$sommaire .= "<li><a $st title=\"$titre\" href=\"{$artpage}#outil_sommaire_$index\">$lien</a>$p</li>";
		}
	}
	return $sommaire;
}

// fonction appellee sur les parties du textes non comprises entre les balises : html|code|cadre|frame|script|acronym|cite
function sommaire_d_article_rempl($texte0, $sommaire_seul=false) {
	// pour sommaire_nettoyer_raccourcis()
	include_spip('outils/sommaire');
	// si le sommaire est malvenu ou s'il n'y a pas de balise <hx>, alors on laisse tomber
	$inserer_sommaire =  defined('_sommaire_AUTOMATIQUE')
		?strpos($texte0, _CS_SANS_SOMMAIRE)===false
		:strpos($texte0, _CS_AVEC_SOMMAIRE)!==false;
	if (!$inserer_sommaire || strpos($texte0, '<h')===false) 
		return $sommaire_seul?'':sommaire_nettoyer_raccourcis($texte0);
	// on retire les raccourcis du texte
	$texte = sommaire_nettoyer_raccourcis($texte0);
	// on masque les onglets s'il y en a
	if(defined('_onglets_FIN'))
		$texte = preg_replace_callback(',<div class="onglets_bloc_initial.*'._onglets_FIN.',Ums', 'sommaire_echappe_onglets_callback', $texte);
	// et la, on y va...
	$sommaire = ''; $i = 1; $nbh3 = 0;
	// reinitialisation de l'index interne de la fonction
	sommaire_d_une_page($texte, $nbh3, false);
	// couplage avec l'outil 'decoupe_article'
	if(defined('_decoupe_SEPARATEUR') && !defined('_CS_PRINT')) {
		$pages = explode(_decoupe_SEPARATEUR, $texte);
		if (($num_page=count($pages)) == 1) $sommaire = sommaire_d_une_page($texte, $nbh3);
		else {
			foreach($pages as $p=>$page) { $sommaire .= sommaire_d_une_page($page, $nbh3, $i++, $num_page); $pages[$p] = $page; }
			$texte = join(_decoupe_SEPARATEUR, $pages);
		}
	} else $sommaire = sommaire_d_une_page($texte, $nbh3);
	if(!strlen($sommaire) || $nbh3<_sommaire_NB_TITRES_MINI) 
		return $sommaire_seul?'':sommaire_nettoyer_raccourcis($texte0);

	// calcul du sommaire
	include_spip('public/assembler');
	$sommaire = recuperer_fond('fonds/sommaire', array(
		'sommaire'=>$sommaire,
		'fond_css'=>strpos($texte0, _sommaire_SANS_FOND)===false ?'avec':'sans',
	));

	// si on ne veut que le sommaire, on renvoie le sommaire
	// sinon, on n'insere ce sommaire en tete de texte que si la balise #CS_SOMMAIRE n'est pas activee
	if($sommaire_seul) return $sommaire;
	if(defined('_sommaire_BALISE')) return $texte;
	return _sommaire_REM.$sommaire._sommaire_REM.$texte;
}

// fonction de callback qui echappe les onglets
function sommaire_echappe_onglets_callback($matches) {
 return cs_code_echappement($matches[0], 'CS');
}

// fonction appelee par le traitement de #TEXTE/articles
function sommaire_d_article($texte) {
	// s'il n'y a aucun intertitre, on ne fait rien
	// si la balise est utilisee, il faut quand meme inserer les ancres de retour
	if((strpos($texte, '<h')===false)) return $texte;
		else return cs_echappe_balises('html|code|cadre|frame|script|acronym|cite|onglets|table', 'sommaire_d_article_rempl', $texte, false);
}

// fonction appelee par le traitement post_propre de #CS_SOMMAIRE
function sommaire_d_article_balise($texte) {
	// si la balise n'est pas utilisee ou s'il n'y a aucun intertitre, on ne fait rien
	if(!defined('_sommaire_BALISE') || (strpos($texte, '<h')===false)) return '';
	return cs_echappe_balises('html|code|cadre|frame|script|acronym|cite|onglets|table', 'sommaire_d_article_rempl', $texte, true);
}

// si on veut la balise #CS_SOMMAIRE
if (defined('_sommaire_BALISE')) {
	function balise_CS_SOMMAIRE_dist($p) {
		if ($p->type_requete == 'articles') {
			$p->code = 'cs_supprime_notes('.champ_sql('texte', $p).')';
		} else {
			$p->code = "''";
		}
		$p->interdire_scripts = true;
		return $p;
	}
}
?>