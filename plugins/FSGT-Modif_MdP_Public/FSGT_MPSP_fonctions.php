<?php

if (!defined("_ECRIRE_INC_VERSION")) return; // Sécurité

function balise_AUTEUR_SESSION($p) {
// Pour SPIP 1.9	
	global $auteur_session;

// Sécurité sur session ouverte
	If ( $auteur_session == NULL ) return $p ;
	If ( $auteur_session['id_auteur'] == NULL ) return $p ;
	If ( $auteur_session['id_auteur'] <= 0 ) return $p ;
	
//	var_dump($auteur_session) ;
// Si pas de 1er arg => prendre nom par defaut
	if (!$arg = interprete_argument_balise(1,$p)) {
	  $arg = "nom" ;
	} else {
		$arg = str_replace("'","",$arg);
	}
	
//  var_dump($arg) ;
//  echo 'valeur : ' . $auteur_session[$arg] ;
//	$p->interdire_scripts = false;
	$p->code = "'" . $auteur_session[$arg] . "'";

  return $p;
}

function balise_URL_NOUVMDP($p) {
	global $table_prefix;
	global $auteur_session;
//	global $spip_version_code;
	global $spip_version_branche;

// Sécurité sur session ouverte
	If ( $auteur_session == NULL ) return $p ;
	If ( $auteur_session['id_auteur'] == NULL ) return $p ;
	If ( $auteur_session['id_auteur'] <= 0 ) return $p ;
	
	
// 1er arg code page saisie mot de passe : Valeur par défaut "spip_pass"
	if (!$arg = interprete_argument_balise(1,$p)) {
	  if ( $p->param[0] == NULL) $p->param[0][0] = "";
    $p->param[0][1][0] = new Texte();
		if (version_compare($spip_version_branche,'2.','<')) {
// "pass" version 1.9
			$p->param[0][1][0]->texte = "pass";
		} else {
// "spip_pass" Version 2.0 & +
			$p->param[0][1][0]->texte = "spip_pass";
		}
	}

//  echo '$spip_version_code = ' . $spip_version_code .'</br>';
//  echo '$spip_version_branche = ' . $spip_version_branche .'</br>';
  
	if (version_compare($spip_version_branche,'2.','<')) {
// cookie_oubli n'existe pas ni alea_future dans $auteur_session
		include_spip('base/abstract_sql');
 		if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";
		$row = sql_fetsel(array('cookie_oubli', 'alea_futur'), $t_prefix . 'auteurs', 'id_auteur='.$auteur_session['id_auteur']);
  	If ( $row['cookie_oubli'] != '' ) {
	  	$C_Id = $row['cookie_oubli'];
//  		echo 'cookie_oubli' . $row['cookie_oubli'];
  	} else {
	  	$C_Id = $row['alea_futur'];
//  		echo 'alea_futur' . $row['alea_futur'];
			sql_updateq($t_prefix . 'auteurs', array('cookie_oubli' => $C_Id), 'id_auteur='.$auteur_session['id_auteur']);
    }
    
// SPIP 1.9 ^^		
	} else {
// SPIP 2.0 vv		
		
  	If ( $auteur_session['cookie_oubli'] != '' ) {
	  	$C_Id = $auteur_session['cookie_oubli'];
//  		echo 'cookie_oubli' . $auteur_session['cookie_oubli'];
  	} else {
			include_spip('base/abstract_sql');
 			if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";
 			$C_Id = $auteur_session['alea_futur'];
//  		echo 'alea_futur' . $auteur_session['alea_futur'];
			sql_updateq($t_prefix . 'auteurs', array('cookie_oubli' => $C_Id), 'id_auteur='.$auteur_session['id_auteur']);
 		}
 	}
 	
  $p->param[0][2][0] = new Texte();
  $p->param[0][2][0]->texte = "p=".$C_Id;
  
	if (version_compare($spip_version_branche,'2.','<')) {
		$p->param[0][2][0]->texte = $p->param[0][2][0]->texte. "&action=".$p->param[0][1][0]->texte;
		$p->param[0][1][0]->texte = "";
	  return calculer_balise('URL_PAGE',$p);
// SPIP 1.9 ^^		
	} else {
// SPIP 2.0 vv		
//	return balise_URL_PAGE_dist($p); // Ne marche pas tout le temps :( ou erreur de NEWBIE
	  return calculer_balise('URL_PAGE',$p);
 	}
}

?>
