<?php
  define("FSGT_meta_name", "FSGT_Squelette");
  define("FSGT_Version", "V0.1.004");
  
	include_spip('base/create');
	include_spip('base/abstract_sql');
	include_spip('inc/meta');

function FSGT_ConvF2ON($Flag){
  if ( $Flag == '' ) { Return 'non'; } else { Return 'oui'; };
}

function FSGT_Find_Grp_Mot($Titre){
	global $table_prefix;
 	if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";
	
	$ID_Grp = sql_getfetsel('id_groupe', $t_prefix . 'groupes_mots', 'titre = '.sql_quote($Titre));
	Return $ID_Grp;
}

function FSGT_Add_Grp_Mot($Titre,$Desc,$Txt,$Art,$Brv,$Rub,$Site,$unseul,$G_Imp,$Adm,$Redac){
	global $table_prefix;
 	if ( $table_prefix != '' ) $t_prefix = $table_prefix . "_";

  $unseul = FSGT_ConvF2ON($unseul);
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
						, 'unseul' => $unseul
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

  ecrire_meta('articles_descriptif','oui','oui');
  ecrire_meta('articles_texte','oui','oui');
  ecrire_meta('articles_redac','oui','oui');
  ecrire_meta('articles_surtitre','non','oui');
  ecrire_meta('articles_soustitre','non','oui');
  ecrire_meta('articles_chapeau','non','oui');
  ecrire_meta('articles_ps','non','oui');
  
  ecrire_meta('post_dates','non','oui');
  ecrire_meta('articles_urlref','non','oui');
  ecrire_meta('articles_redirection','oui','oui');

	ecrire_meta('rubriques_descriptif','oui','oui');
	ecrire_meta('rubriques_texte','oui','oui');

  ecrire_meta('activer_breves','oui','oui');

  ecrire_meta('activer_logos','oui','oui');
//ecrire_meta('activer_logos_survol','non','oui');

  ecrire_meta('documents_article','oui','oui');
  ecrire_meta('documents_rubrique','oui','oui');
  ecrire_meta('documents_date','oui','oui');

  ecrire_meta('activer_sites','oui','oui');
  ecrire_meta('proposer_sites','1','oui');
  ecrire_meta('activer_syndic','oui','oui');
  ecrire_meta('moderation_sites','non','oui');
	ecrire_meta('syndication_integrale','oui','oui');

  ecrire_meta('forums_publics','abo','oui');  // posteriori, non, priori, abo
  ecrire_meta('forums_titre','oui','oui');
  ecrire_meta('forums_texte','oui','oui');
  ecrire_meta('forums_urlref','non','oui');
  ecrire_meta('forums_afficher_barre','oui','oui');
  ecrire_meta('formats_documents_forum','','oui');

  ecrire_meta('accepter_inscriptions','non','oui');
  ecrire_meta('accepter_visiteurs','oui','oui');

  ecrire_meta('forum_prive','non','oui');
  ecrire_meta('forum_prive_objets','non','oui');
  ecrire_meta('forum_prive_admin','non','oui');

  ecrire_meta('messagerie_agenda','non','oui');

// Suivi de l'activit� �ditoriale
  ecrire_meta('suivi_edito','non','oui');
//ecrire_meta('adresse_suivi','','oui');
//ecrire_meta('adresse_suivi_inscription','','oui');

// Annonce des nouveaut�s
  ecrire_meta('quoi_de_neuf','non','oui');
//ecrire_meta('adresse_neuf','','oui');
//ecrire_meta('jours_neuf','','oui');

  ecrire_meta('email_envoi','webmestre@fsgt.org','oui');

  ecrire_meta('prevenir_auteurs','non','oui');   // ,pos,pri,abo,
  
  ecrire_meta('creer_preview','oui','oui');
  ecrire_meta('taille_preview','150','oui');

  ecrire_meta('activer_statistiques','oui','oui');

//ecrire_meta('articles_modif','non','oui');

  ecrire_meta('articles_versions','oui','oui');

  ecrire_meta('preview',',0minirezo,1comite, ','oui');

  ecrire_meta('auto_compress_http','oui','oui');
  ecrire_meta('auto_compress_js','oui','oui');
  ecrire_meta('auto_compress_css','oui','oui');

/*
ecrire_meta('activer_captures_referers','non','oui');
ecrire_meta('multi_articles','non','oui');
ecrire_meta('multi_rubriques','non','oui');
ecrire_meta('multi_secteurs','non','oui');
ecrire_meta('gerer_trad','non','oui');
ecrire_meta('langues_multilingue','  ','oui');
ecrire_meta('type_urls','page ','oui');
ecrire_meta('langues_utilisees','fr ','oui');
ecrire_meta('secret_du_site','189936999149c29e28382fe2.01593781 ','oui');
ecrire_meta('tour_quota_cache','8','oui');
ecrire_meta('optimiser_table','2','oui');
ecrire_meta('gd_formats_read','gif,jpg,png ','oui');
ecrire_meta('gd_formats','gif,jpg,png ','oui');
ecrire_meta('netpbm_formats','  ','oui');
*/

//ecrire_meta('formats_graphiques','gif,jpg,png ','oui');
//ecrire_meta('image_process','gd2 ','oui');
  ecrire_meta('max_taille_vignettes','5107600','non'); // 5Mo

// m�j utiliser les mots cl�s	
  ecrire_meta('articles_mots','oui','oui');
  ecrire_meta('config_precise_groupes','oui','oui');
  ecrire_meta('mots_cles_forums','non','oui');

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
		  
		  if ($GLOBALS['meta'][FSGT_meta_name] == '') FSGT_DefaultValues();
      
//================================================================================================================================      
// Groupe : CFG.Accueil
//================================================================================================================================      
	    $Grp_Name = 'CFG.Accueil';
			$ID_Grp = FSGT_Find_Grp_Mot($Grp_Name);
			if ( $ID_Grp == '' ) {
				$Desc = <<<EOD
Ensemble des mots cl�s qui sont utilis�s dans le squelette FSGT et influent sur l'affichage du site
EOD;
;
				$Txt = <<<EOD
Se reporter au site d'aide http://spip.aide.fsgt.org/
Certains mots cl�s n'ont d'effet que sur une partie du site (ex: rubrique uniquement)
Il faut donc consulter chaque mot cl� pour bien comprendre sont fonctionnement.
En cas de mise � jour du squelette avec une nouvelle version il faudra imp�rativement contr�ler que cette liste est bien � jour.
EOD;
;
				$ID_Grp = FSGT_Add_Grp_Mot($Grp_Name,$Desc,$Txt,'Art','Brv','','','','','Adm','Redac');
			}		  

// Groupe : CFG.Accueil => cfg.ctr.event
        $Titre = 'cfg.ctr.event';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Articles ou Br�ves
Effets : Affiche dans la zone "�v�nements"
Limite : x derniers enregistrements avec ce mot cl�
EOD;
;
				$Txt = <<<EOD
Mot cl� � ajouter � un article ou � une br�ve pour que son r�sum� soit affich� dans la zone "�v�nements" (sous le message d'accueil "� la une") sur page d'accueil. Seul les x derni�res br�ves et les y derniers articles sont affich�s.
Si votre article ou votre br�ve ne s'affiche pas sa date de parution est peut-�tre trop vielle, vous pouvez alors la modifier pour faire apparaitre � nouveau l'article. Attention � ne pas ainsi cr�er de fausses nouveaut�...
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

// Groupe : CFG.Accueil => cfg.ctr.zoom
       $Titre = 'cfg.ctr.zoom';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Articles ou Br�ves
Effets : Affiche dans la zone "Zoom" (situ� apr�s la zone "�v�nements")
Limite : x derniers enregistrements avec ce mot cl�
EOD;
;
				$Txt = <<<EOD
Mot cl� � ajouter � un article ou � une br�ve pour que son r�sum� soit affich� dans la zone "Zoom" sur page d'accueil. Seul les x derni�res br�ves et les y derniers articles sont affich�s.
Si votre article ou br�ve ne s'affiche pas sa date de parution est peut-�tre trop vielle, vous pouvez alors la modifier pour faire apparaitre � nouveau l'article. Attention � ne pas ainsi cr�er de fausses nouveaut�...
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

//================================================================================================================================      
// Groupe : CFG.Forum
//================================================================================================================================      
	    $Grp_Name = 'CFG.Forum';
			$ID_Grp = FSGT_Find_Grp_Mot($Grp_Name);
			if ( $ID_Grp == '' ) {
				$Desc = <<<EOD
Ensemble des mots cl�s qui sont utilis�s dans le squelette FSGT et influent sur l'affichage du site
EOD;
;
				$Txt = <<<EOD
Se reporter au site d'aide http://spip.aide.fsgt.org/
Certains mots cl�s n'ont d'effet que sur une partie du site (ex: rubrique uniquement)
Il faut donc consulter chaque mot cl� pour bien comprendre sont fonctionnement.
En cas de mise � jour du squelette avec une nouvelle version il faudra imp�rativement contr�ler que cette liste est bien � jour.
EOD;
;
				$ID_Grp = FSGT_Add_Grp_Mot($Grp_Name,$Desc,$Txt,'Art','Brv','Rub','Site','','','Adm','Redac');
			}		  

// Groupe : CFG.Forum => cfg.ctr.event
        $Titre = 'cfg.frm.affiche';
				$Desc = <<<EOD
Page : Articles (Rubrique et br�ves � terme)
Objets : Articles (Rubrique et br�ves � terme)
Effets : Autorise l'affichage du Forum pour cet objet
EOD;
;
				$Txt = <<<EOD
Mot cl� � ajouter � une rubrique, un article ou � une br�ve pour que le forum associ� soit affich�.
Sinon le Forum n'est visible que sur la partie priv�e du site.

Voir aussi : {{cfg.frm.post}}
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

// Groupe : CFG.Forum => cfg.frm.post
        $Titre = 'cfg.frm.post';
				$Desc = <<<EOD
Page : Articles (Rubrique et br�ves � terme)
Objets : Articles (Rubrique et br�ves � terme)
Effets : Autorise l'affichage du Forum pour cet objet
EOD;
;
				$Txt = <<<EOD
En ajoutant ce mot cl� sur :
Mot cl� � ajouter � une rubrique, un article ou � une br�ve pour permettre de poster de nouveau message dans le forum associ� � l'objet.
Sinon aucun nouveau message ou r�ponse n'est possible sur le Forum.

Voir aussi : {{cfg.frm.affiche}}
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

//================================================================================================================================      
// Groupe : CFG.Menu
//================================================================================================================================      
	    $Grp_Name = 'CFG.Menu';
			$ID_Grp = FSGT_Find_Grp_Mot($Grp_Name);
			if ( $ID_Grp == '' ) {
				$Desc = <<<EOD
Ensemble des mots cl�s qui sont utilis�s dans le squelette FSGT et influent sur l'affichage du site
EOD;
;
				$Txt = <<<EOD
Se reporter au site d'aide http://spip.aide.fsgt.org/
Certains mots cl�s n'ont d'effet que sur une partie du site (ex: rubrique uniquement)
Il faut donc consulter chaque mot cl� pour bien comprendre sont fonctionnement.
En cas de mise � jour du squelette avec une nouvelle version il faudra imp�rativement contr�ler que cette liste est bien � jour.
EOD;
;
				$ID_Grp = FSGT_Add_Grp_Mot($Grp_Name,$Desc,$Txt,'Art','Brv','','Site','','','Adm','Redac');
			}		  

// Groupe : CFG.Menu => cfg.menu.lat
        $Titre = 'cfg.menu.lat';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Rubrique, Articles, Br�ves, Sites
Effets : Affiche la rubrique (avec lien) dans la barre de menu lat�rale
Limite : aucune, agrandi le menu lat�rale
EOD;
;
				$Txt = <<<EOD
Mot cl� � ajouter � une rubrique pour qu'elle s'affiche dans le menu lat�ral (� gauche) apr�s l'entr�e fixe "Connexion".
Les rubriques sont class�es par ordre alphab�tique
Ensuite les liens vers les sites sont affich� de la m�me facon.
Puis les br�ves et les articles sont affich�s (titre plus r�sum� pour les articles, titre + date pour les br�ves)
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;
//================================================================================================================================      
// Groupe : CFG.Menu.Rub
//================================================================================================================================      
	    $Grp_Name = 'CFG.Menu.Rub';
			$ID_Grp = FSGT_Find_Grp_Mot($Grp_Name);
			if ( $ID_Grp == '' ) {
				$Desc = <<<EOD
Ensemble des mots cl�s qui sont utilis�s dans le squelette FSGT et influent sur l'affichage du site
EOD;
;
				$Txt = <<<EOD
Se reporter au site d'aide http://spip.aide.fsgt.org/
Certains mots cl�s n'ont d'effet que sur une partie du site (ex: rubrique uniquement)
Il faut donc consulter chaque mot cl� pour bien comprendre sont fonctionnement.
En cas de mise � jour du squelette avec une nouvelle version il faudra imp�rativement contr�ler que cette liste est bien � jour.
EOD;
;
				$ID_Grp = FSGT_Add_Grp_Mot($Grp_Name,$Desc,$Txt,'','','Rub','','1seul','','Adm','');
			}		  

// Groupe : CFG.Menu.Rub => cfg.menu.lat
        $Titre = 'cfg.menu.lat';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Rubrique, Articles, Br�ves, Sites
Effets : Affiche la rubrique (avec lien) dans la barre de menu lat�rale
Limite : aucune, agrandi le menu lat�rale
EOD;
;
				$Txt = <<<EOD
Mot cl� � ajouter � une rubrique pour qu'elle s'affiche dans le menu lat�ral (� gauche) apr�s l'entr�e fixe "Connexion".
Les rubriques sont class�es par ordre alphab�tique
Ensuite les liens vers les sites sont affich� de la m�me facon.
Puis les br�ves et les articles sont affich�s (titre plus r�sum� pour les articles, titre + date pour les br�ves)
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

// Groupe : CFG.Menu.Rub => cfg.menu.sup.rub
        $Titre = 'cfg.menu.sup.rub';
				$Desc = <<<EOD
Page : Sommaire (accueil)
Objets : Rubrique
Effets : Affiche la rubrique (avec lien) dans la barre de menu sup�rieur
Limite : aucune, Mais attention au d�bordement du menu sur plusieurs lignes
EOD;
;
				$Txt = <<<EOD
Mot cl� � ajouter � une rubrique pour qu'elle s'affiche dans le menu sup�rieur. Les rubriques sont class�es par ordre alphab�tique
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

//================================================================================================================================      
// Groupe : CFG.Rub
//================================================================================================================================      
	    $Grp_Name = 'CFG.Rub';
			$ID_Grp = FSGT_Find_Grp_Mot($Grp_Name);
			if ( $ID_Grp == '' ) {
				$Desc = <<<EOD
Ensemble des mots cl�s qui sont utilis�s dans le squelette FSGT et influent sur l'affichage du site
EOD;
;
				$Txt = <<<EOD
Se reporter au site d'aide http://spip.aide.fsgt.org/
Certains mots cl�s n'ont d'effet que sur une partie du site (ex: rubrique uniquement)
Il faut donc consulter chaque mot cl� pour bien comprendre sont fonctionnement.
En cas de mise � jour du squelette avec une nouvelle version il faudra imp�rativement contr�ler que cette liste est bien � jour.
EOD;
;
				$ID_Grp = FSGT_Add_Grp_Mot($Grp_Name,$Desc,$Txt,'Art','','','','','','Adm','');
			}		  

// Groupe : CFG.Rub => cfg.rub.alaune
        $Titre = 'cfg.rub.alaune';
				$Desc = <<<EOD
Page : Rubriques
Objets : Articles, Br�ves
Effets : Mets en avant certains articles et br�ves
Limite : x derniers enregistrements avec ce mot cl�, Voir plug-in
EOD;
;
				$Txt = <<<EOD
Mot cl� � ajouter � une br�ve ou un article pour pour qu'il s'affiche dans la zone "� la une" de la rubrique. Les br�ves puis les articles sont affich�s et sont class�es par ordre d�croissant de parution.
L'ensemble des br�ves et des articles sont limit� par le plugin.
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;


//================================================================================================================================      
// Groupe : CFG.CuldeSac
//================================================================================================================================      
	    $Grp_Name = 'CFG.CuldeSac';
			$ID_Grp = FSGT_Find_Grp_Mot($Grp_Name);
			if ( $ID_Grp == '' ) {
				$Desc = <<<EOD
Ensemble des mots cl�s qui sont utilis�s dans le squelette FSGT et influent sur l'affichage du site
EOD;
;
				$Txt = <<<EOD
Se reporter au site d'aide http://spip.aide.fsgt.org/
Certains mots cl�s n'ont d'effet que sur une partie du site (ex: rubrique uniquement)
Il faut donc consulter chaque mot cl� pour bien comprendre sont fonctionnement.
En cas de mise � jour du squelette avec une nouvelle version il faudra imp�rativement contr�ler que cette liste est bien � jour.
EOD;
;
				$ID_Grp = FSGT_Add_Grp_Mot($Grp_Name,$Desc,$Txt,'Art','','','','','','Adm','');
			}		  

// Groupe : CFG.CuldeSac => cfg.rub.culdesac
        $Titre = 'cfg.rub.culdesac';
				$Desc = <<<EOD
Page : Rubriques
Objets : Articles
Effets : L'article d�sign� de la rubirque (normalement le seul) est d�sign� pour remplacer la rubrique
Limite : 1 unique enregistrement avec ce mot cl�
EOD;
;
				$Txt = <<<EOD
Permet d'afficher une rubrique sans article en cr�ant juste un article dans cette rubrique avec le mot ce mot cl�. Le texte de l'article prends alors la place de celui de la rubrique. La rubrique semble alors ne pas avoir d'article. Ceci est rendu n�cessaire car une rubrique sans article n'est pas affich�e.
EOD;
;
				$ID = FSGT_Add_Mot($ID_Grp,$Titre,$Desc,$Txt,$Grp_Name) ;

      ecrire_meta(FSGT_meta_name,FSGT_Version);
      ecrire_metas();
		  break;
		case 'uninstall':
		  effacer_meta(FSGT_meta_name);
   	  ecrire_metas();
		  break;
	}
}
?>