<?php 

function exec_FSGT_admin() {
	 include_spip("inc/presentation");
// vérifier les droits
   global $connect_statut;
   global $liste_des_statuts;
	 global $connect_toutes_rubriques;
   if ( ($connect_statut != '0minirezo' AND $connect_statut != $liste_des_statuts[St_WebMestre] ) OR !$connect_toutes_rubriques) {    
		  debut_page(_T('titre'), "saveauto_admin", "plugin");
		  echo _T('avis_non_acces_page');
		  fin_page();
		  exit;
	 }

	echo debut_page(_T('FSGT:titre_page'));	 
  echo "<br />";
  echo gros_titre(_T('FSGT:gros_titre_page'));
  echo debut_gauche();
	
  echo debut_boite_info();
	echo 'contenu de la boite info du plugin FSGT';
  echo fin_boite_info();
	
	echo debut_raccourcis();
	echo 'contenu de la boite des raccourcis du plugin FSGT';
	echo fin_raccourcis();
		
	echo debut_droite();
	echo debut_cadre_trait_couleur("plugin-24.gif", false, "", _T('titre_boite_principale'));       
	echo debut_cadre_couleur();
// simple test de lire_cfg()
  echo '<strong>lire_cfg(FSGT) retourne :</strong> ';
  print_r(lire_config('FSGT'));
/*	echo '<br /><br /><strong>lire_cfg(aa/id_aa) =</strong> '.lire_cfg('aa/id_aa');
	echo '<br /><br /><strong>lire_cfg(aa/chapo) =</strong> '.lire_cfg('aa/chapo');
	
	echo '<br /><br /><strong>une boucle dans lire_cfg(aa)</strong> ';
	foreach(lire_cfg('aa') as $cle => $val) {
	    echo '<br />$cle = '.$cle.' $val = '.$val;
	}
*/	
	echo fin_page();

}				 

?>