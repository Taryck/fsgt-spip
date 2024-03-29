<?php
	
/* Trois ou quatre balises pour creer des blocs depliables : 

#BLOC_TITRE{fragment}     / fragment si ajax, pas de fragment sinon /
Mon titre
#BLOC_RESUME              / facultatif /
Mon resume qui disparait si on clique
#BLOC_DEBUT
Mon bloc depliable        / qui est aussi l'emplacement pour l'Ajax si le fragment est donne /
#BLOC_FIN

*/

// Un bloc titre numerote : #BLOC_TITRE_NUM{numero} ou #BLOC_TITRE_NUM{numero, fragment}
function balise_BLOC_TITRE_NUM($p) {
	// statut binaire : bit1=ajax bit2=titre bit3=resume bit4=debut
	global  $bloc_stade; /* 2 = ajax; 1 = titre pas d'ajax */
	if ($fragment = interprete_argument_balise(2, $p)!==NULL){
		$ajax=' blocs_ajax ';
		$bloc_stade[]=2;
	} else {
		$fragment="'javascript:;'";
		$ajax="";
		$bloc_stade[]=1;
	}
	$numero = interprete_argument_balise(1, $p);
	$numero = $numero===NULL?"''":"bloc_is_num($numero)";
	
 	$p->code=" '<div class=\"cs_blocs'.$numero.'\"><h4 class=\"blocs_titre blocs_replie $ajax\"><a href=\"'.".$fragment.".'\">' ";
	return $p;
}

// Un bloc titre simple : #BLOC_TITRE ou #BLOC_TITRE{fragment}
function balise_BLOC_TITRE($p) {
	// statut binaire : bit1=ajax bit2=titre bit3=resume bit4=debut
	global  $bloc_stade; /* 2 = ajax; 1 = titre pas d'ajax */
	if (($fragment = interprete_argument_balise(1,$p))!==NULL){
		$ajax=' blocs_ajax ';
		$bloc_stade[]=2;
	} else {
		$fragment="'javascript:;'";
		$ajax="";
		$bloc_stade[]=1;
	}
	$p->code=" '<div class=\"cs_blocs\"><h4 class=\"blocs_titre blocs_replie $ajax\"><a href=\"'.".$fragment.".'\">' ";
	return $p;
}

function balise_BLOC_RESUME($p) {
	global $bloc_stade;
	$k=count($bloc_stade)-1;
	$stade=$bloc_stade[$k];
	
	if($stade<1 || $stade>2)
		die("erreur de compilation #BLOC_RESUME sans #BLOC_TITRE_($stade)");
	$p->code = "'</a></h4><div class=\"blocs_resume\">'";
	$bloc_stade[$k]=3;	/* 3 = resume */
	
	return $p;
}

function balise_BLOC_DEBUT($p) {
	global $bloc_stade;
	$k=count($bloc_stade)-1;
	$stade=$bloc_stade[$k];

	if($stade == 3)	/* on arrive du resume, fermer la div resume seulement */
		$p->code = "'</div><div class=\"blocs_invisible blocs_destination\">'";
	else	{
		if($stade<1 || $stade>2)
					/* on DOIT arriver de titre */
			die("erreur de compilation #BLOC_DEBUT sans #BLOC_TITRE_($stade)");
		$p->code = "'</a></h4><div class=\"blocs_invisible blocs_destination\">'";
		}
	$bloc_stade[$k]=4; /* 4=debut */
	return $p;
}

function balise_BLOC_FIN($p) {
	global $bloc_stade;
	$k=array_pop($bloc_stade);
	if($k!=4)	
		die("erreur de compilation #BLOC_FIN sans #BLOC_DEBUT_($k)");

	$p->code = "'</div></div>'";
	return $p;
}

// fonction pour le calcul de la balise #BLOC_TITRE_NUM
function bloc_is_num($num) {
	 return preg_match(',^\s*(\d+)\s*$,', $num, $regs)?" cs_bloc$regs[1]":"''";
}
?>