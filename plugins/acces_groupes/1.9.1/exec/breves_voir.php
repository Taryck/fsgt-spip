<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2006                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/presentation');
include_spip('inc/rubriques');
include_spip('inc/mots');
include_spip('inc/date');
include_spip('base/abstract_sql');
include_spip("inc/indexation");


// http://doc.spip.org/@afficher_breves_voir
function afficher_breves_voir($id_breve, $changer_lang, $cherche_mot, $select_groupe)
{
	global $champs_extra, $options, $connect_statut, $les_notes,$spip_display;
	$result = spip_query("SELECT * FROM spip_breves WHERE id_breve='$id_breve'");


if ($row = spip_fetch_array($result)) {
	$id_breve=$row['id_breve'];
	$date_heure=$row['date_heure'];
	$titre_breve=$row['titre'];
	$titre=$row['titre'];
	$texte=$row['texte'];
	$extra=$row['extra'];
	$lien_titre=$row['lien_titre'];
	$lien_url=$row['lien_url'];
	$statut=$row['statut'];
	$id_rubrique=$row['id_rubrique'];
}

$flag_editable = (($connect_statut == '0minirezo' AND acces_rubrique($id_rubrique)) OR $statut == 'prop');

pipeline('exec_init',array('args'=>array('exec'=>'breves_voir','id_breve'=>$id_breve),'data'=>''));

debut_page("&laquo; $titre_breve &raquo;", "naviguer", "breves", "", "", $id_rubrique);

debut_grand_cadre();

afficher_hierarchie($id_rubrique);

fin_grand_cadre();


// MODIF ACCESGROUPES : d�but du contr�le d'acces � la rubrique
    
    $acces = accesgroupes_verif_acces($id_rubrique, 'prive'); 
//echo '<br>$acces = '.$acces;
//echo '<br>accesgroupes_RubPrive(42, "prive") = '.accesgroupes_RubPrive(42, 'prive');		
    if ($acces == 1 || $acces == 2) { 
			 accesgroupes_affichage_acces_restreint();
    } 
		else { 

// FIN de la premiere partie d'ACCESGROUPES 


if (!$row) {echo _T('public:aucune_breve'); exit;}
debut_gauche();

debut_boite_info();

echo "<CENTER>";
echo "<FONT FACE='Verdana,Arial,Sans,sans-serif' SIZE='1'><B>"._T('info_gauche_numero_breve')."&nbsp;:</B></FONT>";
echo "<BR><FONT FACE='Verdana,Arial,Sans,sans-serif' SIZE='6'><B>$id_breve</B></FONT>";
echo "</CENTER>";

voir_en_ligne ('breve', $id_breve, $statut);

fin_boite_info();


//////////////////////////////////////////////////////
// Logos de la breve
//

 if (($spip_display != 4) AND $id_breve>0 AND ($connect_statut == '0minirezo' AND acces_rubrique($id_rubrique))) {
	include_spip('inc/chercher_logo');
	echo afficher_boite_logo('id_breve', $id_breve,
			    _T('logo_breve').aide ("breveslogo"),
			    _T('logo_survol'), 'breves_voir'); 
 }

debut_raccourcis();
icone_horizontale(_T('icone_nouvelle_breve'), generer_url_ecrire("breves_edit","new=oui&id_rubrique=$id_rubrique"), "breve-24.gif","creer.gif");
fin_raccourcis();

echo pipeline('affiche_gauche',array('args'=>array('exec'=>'breves_voir','id_breve'=>$id_breve),'data'=>''));
creer_colonne_droite();
echo pipeline('affiche_droite',array('args'=>array('exec'=>'breves_voir','id_breve'=>$id_breve),'data'=>''));
debut_droite();

debut_cadre_relief("breve-24.gif");
echo "<TABLE WIDTH=100% CELLPADDING=0 CELLSPACING=0 BORDER=0>";
echo "<TR><td class='serif'>";



echo "\n<table cellpadding=0 cellspacing=0 border=0 width='100%'>";
echo "<tr width='100%'><td width='100%' valign='top'>";
gros_titre($titre);
echo "</td>";

if ($flag_editable) {
	echo "<td>", http_img_pack("rien.gif", ' ', "width='5'") ."</td>\n";
	echo "<td  align='right'>";
	icone(_T('icone_modifier_breve'), generer_url_ecrire("breves_edit","id_breve=$id_breve&retour=nav"), "breve-24.gif", "edit.gif");
	echo "</td>";
}
echo "</tr></table>\n";

if ($flag_editable AND ($options == 'avancees' OR $statut == 'publie')) {

	if ($statut == 'publie') {	
		echo "<p>";

		if (ereg("([0-9]{4})-([0-9]{2})-([0-9]{2})", $date_heure, $regs)) {
		        $mois = $regs[2];
		        $jour = $regs[3];
		        $annee = $regs[1];
		}


		debut_cadre_enfonce();
		echo afficher_formulaire_date("breves_voir", "id_breve=$id_breve&options=$options",
					      _T('texte_date_publication_article'), $jour, $mois, $annee);
		fin_cadre_enfonce();	
	}
	else {
		echo "<br /><FONT FACE='Verdana,Arial,Sans,sans-serif' SIZE='3'><B>".affdate($date_heure)."&nbsp;</B></FONT><P>";
	}
}



if ($GLOBALS['meta']["articles_mots"]!='non' AND $flag_editable AND $options == 'avancees') {
  echo formulaire_mots('breve', $id_breve, $cherche_mot, $select_groupe, $flag_editable);
}


//
// Langue de la breve
//
if (($GLOBALS['meta']['multi_articles'] == 'oui') AND ($flag_editable)) {
	$row = spip_fetch_array(spip_query("SELECT lang FROM spip_rubriques WHERE id_rubrique=$id_rubrique"));
	$langue_parent = $row['lang'];

	if ($changer_lang) {
		if ($changer_lang != "herit")
			spip_query("UPDATE spip_breves SET lang=" . spip_abstract_quote($changer_lang) . ", langue_choisie='oui' WHERE id_breve=$id_breve");
		else
			spip_query("UPDATE spip_breves SET lang=" . spip_abstract_quote($langue_parent) . ", langue_choisie='non' WHERE id_breve=$id_breve");
		calculer_langues_utilisees();
	}

	$row = spip_fetch_array(spip_query("SELECT lang, langue_choisie FROM spip_breves WHERE id_breve=$id_breve"));
	$langue_breve = $row['lang'];
	$langue_choisie_breve = $row['langue_choisie'];

	if ($langue_choisie_breve == 'oui') $herit = false;
	else $herit = true;

	debut_cadre_enfonce('langues-24.gif');

	echo "<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=3 WIDTH=100% BACKGROUND=''><TR><TD BGCOLOR='#EEEECC' class='serif2'>";
	echo bouton_block_invisible('languesbreve');
	echo "<B>";
	echo _T('titre_langue_breve');
	echo "&nbsp; (".traduire_nom_langue($langue_breve).")";
	echo "</B>";
	echo "</TD></TR></TABLE>";

	echo debut_block_invisible('languesbreve');
	echo "<center><font face='Verdana,Arial,Sans,sans-serif' size='2'>";
	echo menu_langues('changer_lang', $langue_breve, '', $langue_parent);
	echo "</font></center>\n";
	echo fin_block();

	fin_cadre_enfonce();
}




echo justifier(propre($texte))."\n";

$texte_case = ($lien_titre.vider_url($lien_url)) ? "{{"._T('lien_voir_en_ligne')."}} [".$lien_titre."->".$lien_url."]" : '';
	echo propre($texte_case);

if ($les_notes) {
	echo "<hr width='70%' height=1 align='left'><font size=2>$les_notes</font>\n";
}

	// afficher les extra
	if ($champs_extra AND $extra) {
		include_spip('inc/extra');
		extra_affichage($extra, "breves");
	}

if ($connect_statut=="0minirezo" AND acces_rubrique($id_rubrique) AND ($statut=="prop" OR $statut=="prepa")){
	echo "<div align='right'>";
	
	echo "<table>";
	echo "<td  align='right'>";
	icone(_T('icone_publier_breve'), 
	      redirige_action_auteur('instituer_breve',"$id_breve-publie","breves_voir","id_breve=$id_breve"), "breve-24.gif", "racine-24.gif");
	echo "</td>";
	
	echo "<td>", http_img_pack("rien.gif", ' ', "width='5'") ."</td>\n";
	echo "<td  align='right'>";
	icone(_T('icone_refuser_breve'), 
	      redirige_action_auteur('instituer_breve', "$id_breve-refuse", "breves_voir","id_breve=$id_breve"), "breve-24.gif", "supprimer.gif");
	echo "</td>";
	echo "</table>";	

	echo "</div>";
	
}	

echo "</TD></TR></TABLE>";

fin_cadre_relief();

//////////////////////////////////////////////////////
// Forums
//

 $tm = rawurlencode($titre);

 echo "<br /><br />";

 echo "\n<div align='center'>";
 icone(_T('icone_poster_message'), generer_url_ecrire("forum_envoi", "statut=prive&id_breve=$id_breve&titre_message=$tm&url=".generer_url_retour("breves_voir", "id_breve=$id_breve")),
       "forum-interne-24.gif", "creer.gif");
 echo "</div>";

 echo "<br />";

 echo afficher_forum(spip_query("SELECT * FROM spip_forum WHERE statut='prive' AND id_breve='$id_breve' AND id_parent=0 ORDER BY date_heure DESC LIMIT 20"), "breves_voir", "id_breve=$id_breve");

 
// ACCESGROUPES : � placer avant fin_page(); 
	 		} 
// FIN ACCESGROUPES

 
fin_page();
}

// http://doc.spip.org/@exec_breves_voir_dist
function exec_breves_voir()
{
global $id_breve, $id_parent, $texte, $titre, $statut,
  $annee, $mois, $jour, $lien_titre, $lien_url,$champs_extra,
  $new, $modifier_breve, $changer_lang, $cherche_mot,  $select_groupe,  
  $connect_statut;

$id_breve = intval($id_breve);

if (($id_breve == 0) AND ($new == "oui")) {
	$id_rubrique = intval($id_parent);
	$row = spip_fetch_array(spip_query("SELECT lang FROM spip_rubriques WHERE id_rubrique=$id_rubrique"));
	$langue_new = $row ? $row["lang"] : "";
	if (!$langue_new) $langue_new = $GLOBALS['meta']['langue_site'];

	$id_breve = spip_abstract_insert("spip_breves",
		"(titre, date_heure, id_rubrique, statut, lang, langue_choisie)", 
		"('"._T('item_nouvelle_breve')."', NOW(), '$id_rubrique', 'refuse', '$langue_new', 'non')");
}

 $calculer_rubriques = false;

 if (($connect_statut=="0minirezo" OR $statut=="prop" OR $new == "oui") AND
     strval($titre)) {
	$id_rubrique = intval($id_parent);

	// recoller les champs du extra
	if ($champs_extra) {
		include_spip('inc/extra');
		$add_extra = extra_recup_saisie("breves");
	} else
		$add_extra = '';

	spip_query("UPDATE spip_breves SET titre=" . spip_abstract_quote($titre) . ", texte=" . spip_abstract_quote($texte) . ", lien_titre=" . spip_abstract_quote($lien_titre) . ", lien_url=" . spip_abstract_quote($lien_url) . ", statut=" . spip_abstract_quote($statut) . ", id_rubrique=$id_rubrique " . (!$add_extra ? '' : (", extra = " . spip_abstract_quote($add_extra))) . " WHERE id_breve=$id_breve");

	// invalider et reindexer
	include_spip('inc/invalideur');
	suivre_invalideur("id='id_breve/$id_breve'");

	if ($GLOBALS['meta']['activer_moteur'] == 'oui') {
		include_spip("inc/indexation");
		marquer_indexer('spip_breves', $id_breve);
	}
	$calculer_rubriques = true;
	
	
	// Changer la langue heritee
	if ($id_rubrique != id_rubrique_old) {
		$row = spip_fetch_array(spip_query("SELECT lang, langue_choisie FROM spip_breves WHERE id_breve=$id_breve"));
		$langue_old = $row['lang'];
		$langue_choisie_old = $row['langue_choisie'];
		
		if ($langue_choisie_old != "oui") {
			$row = spip_fetch_array(spip_query("SELECT lang FROM spip_rubriques WHERE id_rubrique=$id_rubrique"));
			$langue_new = $row['lang'];
	
			if ($langue_new != $langue_old) {
				spip_query("UPDATE spip_breves SET lang = '$langue_new' WHERE id_breve = $id_breve");
			}
		}
	}
}

if ($jour AND $connect_statut == '0minirezo') {
	if ($annee == "0000") $mois = "00";
	if ($mois == "00") $jour = "00";
	spip_query("UPDATE spip_breves SET date_heure='$annee-$mois-$jour' WHERE id_breve=$id_breve");
	$calculer_rubriques = true;
}

 if ($calculer_rubriques) calculer_rubriques();

	if ($new == 'oui')
		redirige_par_entete(
			generer_url_ecrire('breves_voir', 'id_breve='.$id_breve, '&'));
			
			
	afficher_breves_voir($id_breve, $changer_lang, $cherche_mot, $select_groupe);

}
?>
