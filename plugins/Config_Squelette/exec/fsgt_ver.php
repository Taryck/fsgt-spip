<?php 

if (!defined("_ECRIRE_INC_VERSION")) return;

function exec_fsgt_ver() {

	if (!autoriser('bouton', 'FSGT_Ver')) {
		include_spip('inc/minipres');
		echo minipres();
	} else {

  $filename = "ver.fsgt";
  $filename = find_in_path($filename, 'FSGT_Ver/', false) ;  
//  echo $filename;
//  echo "<br />";
  $fhandle = fopen($filename,"r");
  $ver = fread ($fhandle, filesize($filename));
//  echo $ver;
//  echo "<br />";
  fclose($fhandle) ;

  $filename = "build.fsgt";
  $filename = find_in_path($filename, 'FSGT_Ver/', false) ;  
//  echo $filename;
//  echo "<br />";
  $fhandle = fopen($filename,"r");
  $build = fread ($fhandle, filesize($filename));
  $build = trim($build);
//  echo $build;
//  echo "<br />";
  fclose($fhandle) ;
	$config = charger_fonction('config', 'inc');
	$config();

	pipeline('exec_init',array('args'=>array('exec'=>'configuration'),'data'=>''));

	$commencer_page = charger_fonction('commencer_page', 'inc');
//	echo $commencer_page(_T('titre_page_configuration'), "configuration", "configuration");
	echo $commencer_page('Version Squelette FSGT');
	
	echo "<br /><br /><br />\n";
	echo gros_titre('Version Squelette FSGT : '.$ver.' ('.$build.')','', false);
	
	echo fin_gauche(), fin_page();
	}
}

?>