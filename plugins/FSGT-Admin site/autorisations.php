<?php

# faut-il tracer les autorisations dans tmp/spip.log ?

define('St_WebMestre','0webmestre');
define('St_Admin',"0minirezo");
//define ('_DEBUG_AUTORISER_FSGT', ( _DEBUG_AUTORISER and false ));

function FSGT_admin_site_isroot($qui) {
	if ( $qui['statut'] == St_WebMestre ) return true;
	if ( defined('_ID_WEBMESTRES') AND in_array($qui['id_auteur'], explode(':', _ID_WEBMESTRES)) ) return true;
	return false;
}

// API pour une fonction generique d'autorisation :
// $qui est : vide (on prend alors visiteur_session)
//            un id_auteur (on regarde dans la base)
//            un tableau auteur complet, y compris [restreint]
// $faire est une action ('modifier', 'publier'...)
// $type est un type d'objet ou nom de table ('article')
// $id est l'id de l'objet sur lequel on veut agir
// $opt (inutilise pour le moment) = options sous forme de tableau associatif
// (par exemple pour preciser si l'autorisation concerne tel ou tel champ)
//
// Seul le premier argument est obligatoire
//
// http://doc.spip.org/@autoriser_dist

function FSGT_admin_site_autoriser($faire, $type='', $id=0, $qui = NULL, $opt = NULL) {
	
	// Qui ? visiteur_session ?
	// si null ou '' (appel depuis #AUTORISER) on prend l'auteur loge
	if ($qui === NULL OR $qui==='')
	  $qui = $GLOBALS['visiteur_session'] ? $GLOBALS['visiteur_session'] : array('statut' => '', 'id_auteur' =>0);
	elseif (is_numeric($qui)) {
		$qui = sql_fetsel("*", "spip_auteurs", "id_auteur=".$qui);
	}
  
  $a = NULL ;
// Copie du code standard ci dessus
// Webmestre à tout les droits
  if ( FSGT_admin_site_isroot($qui) ) $a = true;
//	if ( $qui['statut'] == St_WebMestre ) return true;

// Reste à restreindre les droits de l'admin standard

	if ( is_null($a) AND $qui['statut'] == St_Admin) {
		switch($faire) {
				case "modifier";  
					switch($type) {
						case "auteur";
						  $v = var_export($opt["statut"],true);
						  spip_log($v);
						  if ( isset($opt["statut"]) ) {
						  	if ($opt["statut"] == St_WebMestre) {
					$a = false;
						  	}
						  }
							break;
					}
					break;
				case "detruire";  // Effacer la base de donnée
					$a = false;
					break;
				case "configurer";
					switch($type) {
						case "admin_vider";
							break;
						case "contenu";
							break;
						case "configuration";
							break;
						case "admin_tech";
							$a = false;
							break;
						case "lang";
							$a = false;
							break;
						case "plugins";
							$a = false;
							break;
						case "admin_plugin";
							$a = false;
							break;
						case "fonctions";
							$a = false;
							break;
					}
			}
	} 
  
  if ( is_null($a) ) {
// Sinon exécution code standard
		$args = func_get_args();
		return call_user_func_array('autoriser_dist', $args);
// Fonction non encore définie :(		
//  return autoriser_dist($faire, $type, $id, $qui, $opt) 
  } else {
  	if (_DEBUG_AUTORISER) spip_log("FSGT_admin_site_autoriser($faire,$type,$id,$qui[nom]): ".($a?'OK':'niet'));
	  return $a;
	}

}

?>
