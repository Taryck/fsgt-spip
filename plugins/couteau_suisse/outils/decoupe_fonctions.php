<?php
@define('_decoupe_NB_CARACTERES', 60);

define('_onglets_CONTENU', '<div class="onglets_contenu"><h2 class="cs_onglet"><a href="#">');
define('_onglets_DEBUT', '<div class="onglets_bloc_initial">');

// aide le Couteau Suisse a calculer la balise #INTRODUCTION
$GLOBALS['cs_introduire'][] = 'decoupe_nettoyer_raccourcis';

// filtre ajoutant 'artpage' a l'url 
function decoupe_url($url, $page, $num_pages) {
	return parametre_url($url, 'artpage',"{$page}-{$num_pages}");
}

function onglets_callback($matches) {
	// cas des onglets imbriques
	$matches[2] = preg_replace_callback(',<onglets([0-9]*)>(.*?)</onglets\1>,ms', 'onglets_callback', $matches[2]);
	// nettoyage apres les separateurs
	$matches[2] = preg_replace(','.preg_quote(_decoupe_SEPARATEUR,',').'\s+,', _decoupe_SEPARATEUR, $matches[2]);
	// au cas ou on ne veuille pas d'onglets, on remplace les '++++' par un filet et on entoure d'une classe.
	if (defined('_CS_PRINT')) {
		@define(_decoupe_FILET, '<p style="border-bottom:1px dashed #666; padding:0; margin:1em 20%; font-size:4pt;" >&nbsp; &nbsp;</p>');
		$t = preg_split(',(\n\n|\r\n\r\n|\r\r),', $matches[2], 2);
		$texte = preg_replace(','.preg_quote(_decoupe_SEPARATEUR, ',').'(.*?)(\n\n|\r\n\r\n|\r\r),ms', _decoupe_FILET."<h4>$1</h4>\n\n", $t[1]);
		// on sait jamais...
		str_replace(_decoupe_SEPARATEUR, _decoupe_FILET, $texte);
		return '<div class="onglets_print"><h4>' . textebrut(echappe_retour($t[0],'CS')) . "</h4>\n$texte</div>";
	}
	$onglets = $contenus = array();
	$pages = explode(_decoupe_SEPARATEUR, $matches[2]);
	foreach ($pages as $p) {
		$t = preg_split(',(\n\n|\r\n\r\n|\r\r),', $p, 2);
		$t = array(trim(textebrut(nettoyer_raccourcis_typo(echappe_retour($t[0],'CS')))), cs_safebalises($t[1]));
		if(strlen($t[0].$t[1])) $contenus[] = _onglets_CONTENU.$t[0]."</a></h2><div>\n".$t[1]."\n</div></div>";
	}
	return _onglets_DEBUT.join('', $contenus).'</div>'._onglets_FIN;
}

// fonction appellee sur les parties du texte non comprises entre les balises : html|code|cadre|frame|script|acronym|cite
function decouper_en_onglets_rempl($texte) {
	// compatibilite avec la syntaxe de Pierre Troll
	if (strpos($texte, '<onglet|')!==false) {
		$texte = str_replace('<onglet|fin>', '</onglets>', $texte);
		$texte = preg_replace(',<onglet\|debut[^>]*\|titre=([^>]*)>\s*,', "<onglets>\\1\n\n", $texte);
		$texte = preg_replace(',\s*<onglet\|titre=([^>]*)>\s*,', "\n\n++++\\1\n\n", $texte);
	}
	// il faut un callback pour analyser l'interieur du texte
	return preg_replace_callback(',<onglets([0-9]*)>(.*?)</onglets\1>,ms', 'onglets_callback', $texte);
}

// fonction renvoyant l'image appellee dans img/decoupe
function decoupe_image($fich, $help, $self, $off, $val, &$images, $double=false) {
	$alt = _T('couteau:'.$help);
	$alt = "title=\"$alt\" alt=\"$alt\"";
	if ($off) {
		$tmp = $images[$fich.'_off']." $alt />";
		return $double?$tmp.$tmp:$tmp;
	} else {
		$tmp=$images[$fich]." $alt />";
		return '<a href="'.parametre_url($self,'artpage', $val).'">'.($double?$tmp.$tmp:$tmp).'</a>';
	}
}

// fonction appellee sur les parties du textes non comprises entre les balises : html|code|cadre|frame|script|acronym|cite
function decouper_en_pages_rempl($texte, $pagination_seule=false) {
	// un seul id par page...
	static $id_decoupe = '';
	
	// si pas de separateur, on sort
	if (strpos($texte, _decoupe_SEPARATEUR)===false) return $pagination_seule?'':$texte;

	// au cas ou on ne veuille pas de decoupe, on remplace les '++++' par un filet.
	if (defined('_CS_PRINT') && !$pagination_seule) {
		@define(_decoupe_FILET, '<p style="border-bottom:1px dashed #666; padding:0; margin:1em 20%; font-size:4pt;" >&nbsp; &nbsp;</p>');
		return str_replace(_decoupe_SEPARATEUR, _decoupe_FILET, $texte);
	}
	// recherche du sommaire s'il existe
	if (defined('_sommaire_REM') && (substr_count($texte, _sommaire_REM)==2)) {
		$pages = explode(_sommaire_REM, $texte);
		$sommaire = $pages[0].$pages[1];
		$texte = $pages[2];
	} else $sommaire = ''; 

	// traitement des pages
	$pages = explode(_decoupe_SEPARATEUR, $texte);
	$num_pages = count($pages);
	if ($num_pages == 1) return $pagination_seule?'':$texte;
	$artpage = max(intval(artpage()), 1);
	$artpage = min($artpage, $num_pages);
/*
	// si numero illegal ou si var_recherche existe, alors renvoyer toutes les pages, separees par une ligne <hr/>.
	// la surbrillance pourra alors fonctionner correctement.
	if (strlen($_GET['var_recherche']) || $artpage < 1 || $artpage > $num_pages)
		return join("<hr/>", $pages);
*/

	// page demandee
	$page = cs_safebalises($pages[$artpage-1]);
	if (isset($_GET['decoupe_recherche'])) {
		include_spip('inc/surligne');
		$page = surligner_mots($page, $_GET['decoupe_recherche']);
	}
	decoupe_notes_orphelines($page);
	// si la balise #CS_DECOUPE est utilisee on renvoie le texte sans pagination
	if (!$pagination_seule && defined('_decoupe_BALISE')) return $sommaire.$page;

	$self = nettoyer_uri();//self();//$GLOBALS['REQUEST_URI'];

	// liens des differentes pages sous forme : 1 2 3 4
	$milieu = '';
	for ($i = 1; $i <= $num_pages; $i++) {
		$page_ = supprimer_tags(cs_safebalises(cs_introduire(echappe_retour($pages[$i-1],'CS'))));
		$title = preg_split("/[\r\n]+/", trim($page_), 2);
		$title = attribut_html(/*propre*/(couper($title[0], _decoupe_NB_CARACTERES)));//.' (...)';
		$milieu .= recuperer_fond('fonds/decoupe_item', array(
			'page'=>$i, 'artpage'=>$artpage, 'derniere_page'=>$num_pages,
			'title_page'=>_T('couteau:page_lien', array('page' => $i, 'title' => $title)), 
			'self' =>$self,
		));
	}

	// pagination finale
	$pagination = recuperer_fond('fonds/decoupe', array(
		'artpage'=>$artpage, 'derniere_page'=>$num_pages,
		'items'=>$milieu,
		'self' =>$self,
	));
	if ($pagination_seule) {
		if(trim($pagination)=="") return "";
		$pagination = "<div id='decoupe_balise$id_decoupe' class='pagination decoupe_balise'>\n$pagination\n</div>\n";
		return $pagination;
	}
	$pagination1 = "<div id='decoupe_haut$id_decoupe' class='pagination decoupe_haut'>\n$pagination\n</div>\n";
	$pagination2 = "<div id='decoupe_bas$id_decoupe' class='pagination decoupe_bas'>\n$pagination\n</div>\n";
	$id_decoupe++;
	return $sommaire.$pagination1.$page.$pagination2;
}

// supprime les notes devenues orphelines
function decoupe_notes_orphelines(&$texte) {
	if($GLOBALS['les_notes']=='') return;
	$notes = $GLOBALS['les_notes'];
/*	if(function_exists('tester_variable')) tester_variable('ouvre_note', '['); // tester_variable() depreciee sous SPIP 2.0
	else*/ if (!isset($GLOBALS['ouvre_note'])) $GLOBALS['ouvre_note'] = '[';
	$ouvre = preg_quote($GLOBALS['ouvre_note']);
	$appel = "<p[^>]*>$ouvre<a [^>]*name=\"nb([0-9]+)\" class=\"spip_note\" [^>]+>[^<]+</a>.*?</p>";
	preg_match_all(",$appel,", $GLOBALS['les_notes'], $tableau);
	for($i=0;$i<count($tableau[0]);$i++) {
		if (!preg_match(",<a href=\"#nb{$tableau[1][$i]}\",",$texte)) 
			$notes = str_replace($tableau[0][$i], '', $notes);
	}
	$GLOBALS['les_notes'] = trim($notes);
}

function cs_decoupe_compat($texte){
	// surcharge possible de _decoupe_SEPARATEUR par _decoupe_COMPATIBILITE
	$rempl = ',\s*('
		. preg_quote(_decoupe_SEPARATEUR,',')
		. (defined('_decoupe_COMPATIBILITE')?'|'.preg_quote(_decoupe_COMPATIBILITE,','):'')
		. ')\s*,';
	// mise au clair des separateurs : pour les onglets ET la decoupe en page
	$texte = preg_replace($rempl, "\n\n"._decoupe_SEPARATEUR."\n\n", $texte);
	// si pas d'onglets ou pagination seule demandee, on sort
	if (strpos($texte, '<onglet')===false) return $texte;
	// traitement des onglets
	return decouper_en_onglets_rempl($texte);
}

// ici on est en pre_propre, tests de compatibilite requis, puis traitement des onglets
function cs_onglets($texte){
	return cs_echappe_balises('html|code|cadre|frame|script|cite|jeux', 'cs_decoupe_compat', $texte);
}

// ici on est en post_propre, tests de compatibilite effectues
function cs_decoupe($texte, $pagination_seule=false){
	// si pas de separateur, on sort
	if (strpos($texte, _decoupe_SEPARATEUR)===false) return $pagination_seule?'':$texte;
	return cs_echappe_balises('html|code|cadre|frame|script|cite|table|jeux', 'decouper_en_pages_rempl', $texte, $pagination_seule);
}

// Compatibilite
function decouper_en_pages($texte){ return cs_decoupe($texte); }

// Balises pour des onglets en squelette
function balise_ONGLETS_DEBUT($p) {
	$arg = interprete_argument_balise(1,$p);
	eval("\$arg=_onglets_DEBUT._onglets_CONTENU.$arg.'</a></h2>';");
	$p->code = "'$arg'";
	return $p;
}
function balise_ONGLETS_TITRE($p) {
	$arg = interprete_argument_balise(1,$p);
	eval("\$arg='</div>'._onglets_CONTENU.$arg.'</a></h2>';");
	$p->code = "'$arg'";
	return $p;
}
function balise_ONGLETS_FIN($p) {
	$p->code = "'</div></div>'";
	return $p;
}

// decode le parametre artpage=page-total
// attention, artpage n'est pas toujours present
function artpage($t=false, $index=0) {
	if($t===false) $t=_request('artpage');
	$t=strlen($t)?explode('-', $t, 2):array('1','0');
	return $t[$index];
}
function artpage_fin($t=false) {
	if($t===false) $t=_request('artpage');
	$t=strlen($t)?explode('-', $t, 2):array('1','0');
	return $t[0]>0 && $t[0]==$t[1];
}
function artpage_debut($t=false) {
	return artpage($t)==1;
}

// si on veut la balise #CS_DECOUPE (pagination uniquement)
if (defined('_decoupe_BALISE')) {
	function balise_CS_DECOUPE_dist($p) {
		if ($p->type_requete == 'articles') {
			$p->code = 'cs_decoupe(propre(cs_onglets(cs_supprime_notes('.champ_sql('texte', $p).'))), true)';
		} else {
			$p->code = "''";
		}
		$p->interdire_scripts = true;
		return $p;
	}
}

?>