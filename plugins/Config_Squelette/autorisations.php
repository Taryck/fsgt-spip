<?php

/*
<pipeline>
    <nom>autoriser</nom>
    <inclure>autorisations.php</inclure>
</pipeline>       	
*/

# faut-il tracer les autorisations dans tmp/spip.log ?
define ('_DEBUG_AUTORISER_FSGT', ( _DEBUG_AUTORISER and false ));

function FSGT_RedacP($qui){
  global $connect_toutes_rubriques;	

  $result = ( $qui['statut'] == St_Admin OR 
              $qui['statut'] == St_WebMestre OR
              $qui['statut'] == St_Valideur OR
              $qui['statut'] == St_Redac );
	if (_DEBUG_AUTORISER_FSGT) spip_log("FSGT_RedacP $qui : ".($result?'OK':'niet'));
  return $result;
}

function FSGT_AdminRP($qui){
  global $connect_toutes_rubriques;	

  $result = ( $qui['statut'] == St_Admin OR 
              $qui['statut'] == St_WebMestre );
	if (_DEBUG_AUTORISER_FSGT) spip_log("FSGT_AdminRP $qui : ".($result?'OK':'niet'));
  return $result;
}

function FSGT_WebMP($qui){
  global $connect_toutes_rubriques;	
  
  if ( $qui['id_auteur'] == $GLOBALS['visiteur_session']['id_auteur'] ) {
  	$result = ( ( $qui['statut'] == St_Admin and $connect_toutes_rubriques )
    	         OR $qui['statut'] == St_WebMestre );
  } else {
  	$result = ( $qui['statut'] == St_WebMestre );
  	if (!$result and ( $qui['statut'] == St_Admin) ) {
// persone n'est pas la personne connecté et est admin (full ou restreint ?) il faut lire la base
			$Rubriques = liste_rubriques_auteur($qui['id_auteur']);
	    $debug_v = print_r($Rubriques,true);
			spip_log("FSGT_WebMP $debug_v");
  	}
  }
	if (_DEBUG_AUTORISER_FSGT) spip_log("FSGT_WebMP $qui : ".($result?'OK':'niet'));
  return $result;
}

function FSGT_Admin($qui){
  global $connect_toutes_rubriques;	

  if ( $qui['id_auteur'] == $GLOBALS['visiteur_session']['id_auteur'] ) {
	  $result = ( $qui['statut'] == St_Admin and $connect_toutes_rubriques );
  } else {
  	if ( $qui['statut'] == St_Admin) {
// persone n'est pas la personne connecté et est admin (full ou restreint ?) il faut lire la base
			$rubriques = liste_rubriques_auteur($qui['id_auteur']);
	    $debug_v = print_r($rubriques,true);
			$result = empty($rubriques); // Full admin
  	}
  }
	if (_DEBUG_AUTORISER_FSGT) spip_log("FSGT_Admin $qui : ".($result?'OK':'niet'));
  return $result;
}
//============================================================================
// Securité à revoir

function autoriser_auteur_modifier($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) {
// selon status de l'utilisateur modifié $id
		$user_modif = sql_fetsel("*", "spip_auteurs", "id_auteur=".$id);
		$result = (!FSGT_Admin($user_modif));
  	if (_DEBUG_AUTORISER_FSGT) spip_log("autoriser_auteur_modifier $id n'est pas FULL admin ? ".($result?'OK':'niet'));
   $debug_v = print_r($opt,true);
// array(1) {
//  ["statut"]=>
//  string(9) "0minirezo"
		if ($result) {  // si la cible n'est pas full admin à la base on peut continuer
			$result = (!isset($opt["statut"])); // si on modifie pas les droits OK
			if (!$result) { // sinon interdiction de mettre full admin
				$result = ( ($opt["statut"] <> St_WebMestre) and ($opt["statut"] <> St_Admin) );
//		    $result = ( ($opt["statut"] <> St_Admin) );
  	if (_DEBUG_AUTORISER_FSGT) spip_log("FSGT_AdminRP $qui : ".($result?'OK':'niet'));
  	spip_log("FSGT autoriser_auteur_modifier [$debug_v] : ".($result?'OK':'niet'));
  	  }
  	}
		return $result;
  }
	return autoriser_auteur_modifier_dist($faire, $type, $id, $qui, $opt);
}

//============================================================================
// OK
function autoriser_detruire($faire, $type, $id, $qui, $opt){
	return false;
}

function autoriser_ecrire($faire, $type, $id, $qui, $opt){
 return FSGT_RedacP($qui);
}

function autoriser_previsualiser($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_previsualiser_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_rubrique_publierdans($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_rubrique_publierdans_dist($faire, $type, $id, $qui, $opt);
}	


function autoriser_rubrique_creerrubriquedans($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_rubrique_creerrubriquedans_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_rubrique_creerarticledans($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_rubrique_creerarticledans_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_rubrique_creerbrevedans($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_rubrique_creerbrevedans_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_rubrique_creersitedans($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_rubrique_creersitedans_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_site_modifier($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_site_modifier_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_site_voir($faire, $type, $id, $qui, $opt){
	return autoriser_site_modifier($faire, $type, $id, $qui, $opt);
}

function autoriser_rubrique_modifier($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_rubrique_modifier_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_joindredocument($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_joindredocument_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_document_modifier($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_document_modifier_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_breve_modifier($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_breve_modifier_dist($faire, $type, $id, $qui, $opt);
}
/*
function autoriser_article_modifier($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_article_modifier_dist($faire, $type, $id, $qui, $opt);
}*/

function autoriser_groupemots_creer($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_groupemots_creer_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_groupemots_modifier($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) {
		$r = sql_fetsel("titre", "spip_groupes_mots", "id_groupe=".sql_quote($id));
    If ( ereg('^CFG.', $r['titre']) ) return false;
		return true;
	}
	return autoriser_groupemots_modifier_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_mot_modifier($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_mot_modifier_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_voirstats($faire, $type, $id, $qui, $opt){
 return FSGT_RedacP($qui);
}

function autoriser_voir($faire, $type, $id, $qui, $opt){
 return FSGT_RedacP($qui);
}

function autoriser_voirrevisions($faire, $type, $id, $qui, $opt) {
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_voirrevisions_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_article_modifier($faire, $type, $id, $qui, $opt){
  global $connect_toutes_rubriques;	
	if ( $qui['statut'] == St_WebMestre ) return true;
	return autoriser_article_modifier_dist($faire, $type, $id, $qui, $opt);
}

function autoriser_sauvegarder($faire, $type, $id, $qui, $opt){
 return FSGT_AdminRP($qui);
}

function autoriser_configurer($faire, $type, $id, $qui, $opt){

// var_dump($faire);
// var_dump($type);
// var_dump($qui['statut']);
// var_dump($qui['restreint']);
// var_dump($qui);
// var_dump($id);
// var_dump($opt);
 
/* Ordre :
	Admin site
	webmestre
	admin restreint
*/ 
  
	if ($faire != 'configurer') {
	  $result = true;
	} else {
	switch($type) {
		case "admin_vider";
		case "contenu";
		case "configuration";
		  $result = FSGT_AdminRP($qui);
		  break;
		case "admin_tech";
		  $result = FSGT_Admin($qui);
		  break;
		case "lang";
		case "plugins";
		case "admin_plugin";
		case "fonctions";
		  $result = FSGT_Admin($qui);
		  break;
		default:
		  $result = true;
		  break;
		}
	}
	return $result;
}

function FSGT_autoriser($faire, $type, $id, $qui, $opt){
  return true;
}

function autoriser_FSGT_Root_bouton($faire, $type, $id, $qui, $opt){
  return FSGT_WebMP($qui);
}

function autoriser_FSGT_Aide_bouton($faire, $type, $id, $qui, $opt){
  return FSGT_RedacP($qui);
}
function autoriser_Aide_FSGT_bouton($faire, $type, $id, $qui, $opt){
  return FSGT_RedacP($qui);
}

function autoriser_FSGT_Config_bouton($faire, $type, $id, $qui, $opt){
  return FSGT_WebMP($qui);
}
         
function autoriser_FSGT_Google_bouton($faire, $type, $id, $qui, $opt){
  return FSGT_Admin($qui);
}

function autoriser_FSGT_Ver_bouton($faire, $type, $id, $qui, $opt){
  return true;
}
?>
