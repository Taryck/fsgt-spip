<?php

  define('St_Admin',"0minirezo");
  define('St_WebMestre','0webmestre');
  define('St_Valideur','1Valid');
  define('St_Redac',"1comite");
  define('St_Visit',"6forum");
  
// Définition du répertoire du squelette  
  global $dossier_squelettes;
  $dossier_squelettes='squelettes/Actif';

// Définition des ID des admin du site (necessaire pour certains plug_in  
  define ("_ID_WEBMESTRES", "1:2") ;

// Ajout de statut auteur
	global $liste_des_statuts;
	$liste_des_statuts['Web Mestre']=St_WebMestre;
	$liste_des_statuts['Valideur']=St_Valideur;
  define('AUTEURS_DEFAUT', St_WebMestre.',');
  
// Pour supprimer les numéros des titres
  global $table_des_traitements;
//  $table_des_traitements['TITRE']['rubriques']= 'supprimer_numero( typo(%s, "TYPO", $connect) )';
  $table_des_traitements['TITRE']['rubriques']= 'typo(supprimer_numero( %s ), "TYPO", $connect)';
//  var_dump($table_des_traitements);
	
?>