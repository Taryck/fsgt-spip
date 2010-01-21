<?php

# faut-il tracer les autorisations dans tmp/spip.log ?
define ('_DEBUG_AUTORISER_FSGT', ( _DEBUG_AUTORISER and false ));

function autoriser() {
		// Charger les fonctions d'autorisation supplementaires
		static $pipe;
		if (!isset($pipe)) { $pipe = 1; pipeline('autoriser'); }

		$args = func_get_args();
//		if ( $qui['statut'] == St_WebMestre ) return true;
//		return call_user_func_array('autoriser_dist', $args);
		return call_user_func_array('FSGT_admin_site_autoriser', $args);
}

?>
