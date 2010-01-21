<?php
  define("FSGT_meta_name", "FSGT_Squelette");
  define("FSGT_Version", "V0.1");
  
	include_spip('base/create');
	include_spip('base/abstract_sql');
	include_spip('inc/meta');

function FSGT_Find_Grp_Mot($Titre){
	global $table_prefix;
 	if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";
	
	$ID_Grp = sql_getfetsel('id_groupe', $t_prefix . 'groupes_mots', 'titre = '.sql_quote($Titre));
	return $ID_Grp;
}

function FSGT_ConvF2ON($Flag) {
  if ( $Flag == '' ) { Return 'non'; } else { Return 'oui'; };
}

function FSGT_Add_Grp_Mot($Titre,$Desc,$Txt,$Art,$Brv,$Rub,$Site,$1seul,$G_Imp,$Adm,$Redac){
	global $table_prefix;
 	if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";

  $1seul = FSGT_ConvF2ON($1seul);
  $G_Imp = FSGT_ConvF2ON($G_Imp);
  $Adm = FSGT_ConvF2ON($Adm);
  $Redac = FSGT_ConvF2ON($Redac);
  If ( $Art != '' ) $tables = $tables . 'articles,';
  If ( $Brv != '' ) $tables = $tables . 'breves,';
  If ( $Rub != '' ) $tables = $tables . 'rubriques,';
  If ( $Site != '' ) $tables = $tables . 'syndic,';

	$Fields = array('titre' => $Titre
						, 'descriptif' => $Desc
    				, 'texte' => $Txt
						, 'unseul' => $1seul
						, 'obligatoire' => $G_Imp
						, 'tables_liees' => $tables
						, 'minirezo' => $Adm
						, 'comite' => $Redac
						);
	$ID_Grp = sql_insertq($t_prefix . 'groupes_mots', $Fields );
  echo "Groupe de mot '<b>$Titre</b>' cr&eacute;&eacute; : <b>$ID_Grp</b><br>";
	return $ID_Grp;
}

function FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_T){
	global $table_prefix;
 	if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";
	
	$ID = sql_getfetsel('id_mot', $t_prefix . 'mots', 
	                    array('titre='.sql_quote($Titre),
	                          'id_groupe='.sql_quote($ID_Grp))
	                    );
	if ( $ID == '' ) {
		$ID = sql_insertq($t_prefix . 'mots', 
		array('titre' => $Titre
		,'descriptif' => $Desc
		,'texte' => $Txt
		,'id_groupe' => $ID_Grp
		,'type' => $Grp_T
		));
 	  echo "Mot '<b>$Titre</b>' cr&eacute;&eacute; : <b>$ID</b> dans Groupe de mots <b>$Grp_T</b><br>";
	}
	return $ID;
}

function FSGT_DefaultValues(){
//	global $FSGT_meta_name;
// màj utiliser les mots clés	
  ecrire_meta('articles_mots','oui','oui');
  ecrire_meta('config_precise_groupes','oui','oui');
  ecrire_meta('mots_cles_forums','non','oui');
  ecrire_meta(FSGT_meta_name,FSGT_Version);
  ecrire_metas();
}
/***********
 * INSTALL *
 ***********/
 
function FSGT_install($action){
	global $table_prefix;
//	global $FSGT_meta_name;
 	if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";

	switch ($action){
		case 'test':
		  if ($GLOBALS['meta'][FSGT_meta_name] == FSGT_Version) return true;
			break;
		case 'install':
		
      FSGT_DefaultValues();
// Groupe : CFG.Accueil
	    $Grp_Name = 'CFG.Accueil';
			$ID_Grp = FSGT_Find_Grp_Mot($Grp_Name);
			if ( $ID_Grp == '' ) {
				$Desc = <<<EOD
Ensemble des mots clés qui sont utilisés dans le squelette FSGT et influent sur l'affichage du site
EOD;
;
				$Txt = <<<EOD
Se reporter au site d'aide http://spip.aide.fsgt.org/
Certains mots clés n'ont d'effet que sur une partie du site (ex: rubrique uniquement)
Il faut donc consulter chaque mot clé pour bien comprendre sont fonctionnement.
En cas de mise à jour du squelette avec une nouvelle version il faudra impérativement contrôler que cette liste est bien à jour.
EOD;
;
				$ID_Grp = FSGT_Add_Grp_Mot($Grp_Name,$Desc,$Txt,'Art','Brv','','','','','Adm','Redac');
			}		  

// Groupe : CFG.Accueil => cfg.ctr.event
        $Titre = 'cfg.ctr.event';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Articles ou Brèves
Effets : Affiche dans la zone "Événements"
Limite : x derniers enregistrements avec ce mot clé
EOD;
;
				$Txt = <<<EOD
Mot clé à ajouter à un article ou à une brève pour que son résumé soit affiché dans la zone "Événements" (sous le message d'accueil "à la une") sur page d'accueil. Seul les x dernières brèves et les y derniers articles sont affichés.
Si votre article ou votre brève ne s'affiche pas sa date de parution est peut-être trop vielle, vous pouvez alors la modifier pour faire apparaitre à nouveau l'article. Attention à ne pas ainsi créer de fausses nouveauté...
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

// Groupe : CFG.Accueil => cfg.ctr.zoom
        $Titre = 'cfg.ctr.zoom';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Articles ou Brèves
Effets : Affiche dans la zone "Zoom" (situé après la zone "Événements")
Limite : x derniers enregistrements avec ce mot clé
EOD;
;
				$Txt = <<<EOD
Mot clé à ajouter à un article ou à une brève pour que son résumé soit affiché dans la zone "Zoom" sur page d'accueil. Seul les x dernières brèves et les y derniers articles sont affichés.
Si votre article ou brève ne s'affiche pas sa date de parution est peut-être trop vielle, vous pouvez alors la modifier pour faire apparaitre à nouveau l'article. Attention à ne pas ainsi créer de fausses nouveauté...
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

/*
        $Titre = 'cfg.frm.affiche';
				$Desc = <<<EOD
Page : Articles (Rubrique et brèves à terme)
Objets : Articles (Rubrique et brèves à terme)
Effets : Autorise l'affichage du Forum pour cet objet
EOD;
;
				$Txt = <<<EOD
Mot clé à ajouter à une rubrique, un article ou à une brève pour que le forum associé soit affiché.
Sinon le Forum n'est visible que sur la partie privée du site.

Voir aussi : {{cfg.frm.post}}
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

        $Titre = 'cfg.frm.post';
				$Desc = <<<EOD
Page : Articles (Rubrique et brèves à terme)
Objets : Articles (Rubrique et brèves à terme)
Effets : Autorise l'affichage du Forum pour cet objet
EOD;
;
				$Txt = <<<EOD
En ajoutant ce mot clé sur :
Mot clé à ajouter à une rubrique, un article ou à une brève pour permettre de poster de nouveau message dans le forum associé à l'objet.
Sinon aucun nouveau message ou réponse n'est possible sur le Forum.

Voir aussi : {{cfg.frm.affiche}}
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

        $Titre = 'cfg.menu.lat';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Rubrique, Articles, Brèves, Sites
Effets : Affiche la rubrique (avec lien) dans la barre de menu latérale
Limite : aucune, agrandi le menu latérale
EOD;
;
				$Txt = <<<EOD
Mot clé à ajouter à une rubrique pour qu'elle s'affiche dans le menu latéral (à gauche) après l'entrée fixe "Connexion".
Les rubriques sont classées par ordre alphabétique
Ensuite les liens vers les sites sont affiché de la même facon.
Puis les brèves et les articles sont affichés (titre plus résumé pour les articles, titre + date pour les brèves)
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

        $Titre = 'cfg.menu.sup.rub';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Rubrique
Effets : Affiche la rubrique (avec lien) dans la barre de menu supérieur
Limite : aucune, Mais attention au débordement du menu sur plusieurs lignes
EOD;
;
				$Txt = <<<EOD
Mot clé à ajouter à une rubrique pour qu'elle s'affiche dans le menu supérieur. Les rubriques sont classées par ordre alphabétique
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

        $Titre = 'cfg.rub.alaune';
				$Desc = <<<EOD
Page : Rubriques
Objets : Articles, Brèves
Effets : Mets en avant certains articles et brèves
Limite : x derniers enregistrements avec ce mot clé, Voir plug-in
EOD;
;
				$Txt = <<<EOD
Mot clé à ajouter à une brève ou un article pour pour qu'il s'affiche dans la zone "à la une" de la rubrique. Les brèves puis les articles sont affichés et sont classées par ordre décroissant de parution.
L'ensemble des brèves et des articles sont limité par le plugin.
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

        $Titre = 'cfg.rub.culdesac';
				$Desc = <<<EOD
Page : Rubriques
Objets : Articles
Effets : L'article désigné de la rubirque (normalement le seul) est désigné pour remplacer la rubrique
Limite : 1 unique enregistrement avec ce mot clé
EOD;
;
				$Txt = <<<EOD
Permet d'afficher une rubrique sans article en créant juste un article dans cette rubrique avec le mot ce mot clé. Le texte de l'article prends alors la place de celui de la rubrique. La rubrique semble alors ne pas avoir d'article. Ceci est rendu nécessaire car une rubrique sans article n'est pas affichée.
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;
*/
			break;
		case 'uninstall':
		  effacer_meta(FSGT_meta_name);
   	  ecrire_metas();
		  break;
	}
}
?>