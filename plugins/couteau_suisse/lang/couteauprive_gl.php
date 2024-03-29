<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined("_ECRIRE_INC_VERSION")) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// 2
	'2pts_non' => '&nbsp;:&nbsp;non',
	'2pts_oui' => '&nbsp;:&nbsp;si',

	// S
	'SPIP_liens:description' => '@puce@ Todas as ligaz&oacute;ns do web se abren predeterminadamente na mesma vent&aacute; de navegaci&oacute;n en curso. Mais pode ser &uacute;til abril ligaz&oacute;ns externas ao web nunha nova vent&aacute; exterior -- iso implica engadir {target="_blank"} a todas as balizas &lt;a&gt; dotadas por  SPIP de clases {spip_out}, {spip_url} ou {spip_glossaire}. Se cadra &eacute; necesario engadir unha destas clases nas ligaz&oacute;ns do esqueleto do web (ficheiros html) co fin de estender ao m&aacute;ximo esta funcionalidade.[[%radio_target_blank3%]]

@puce@ SPIP permite ligar palabras &aacute; s&uacute;a definici&oacute;n merc&eacute; ao atallo tipogr&aacute;fico <code>[?mot]</code>. Predeterminadamente (ou se vostede  deixa baleira a caixa seguinte), o glosario externo reenv&iacute;a sobre a enciclopedia libre wikipedia.org. Pode escoller o enderezo que se vaia utilizar. <br />Ligaz&oacute;n de test : [?SPIP][[%url_glossaire_externe2%]]',
	'SPIP_liens:nom' => 'SPIP e as ligaz&oacute;ns externas',

	// A
	'acces_admin' => 'Acceso de administraci&oacute;n :',
	'action_rapide' => 'Acci&oacute;n r&aacute;pida, unicamente se sabe do que fai!',
	'attente' => 'En espera...',
	'auteur_forum:description' => 'Invite a todos os autores a cubri (cando menos cunha letra!) o campo &laquo;@_CS_FORUM_NOM@&raquo; co fin de evitar as contribuci&oacute;ns totalmente an&oacute;nimas.',
	'auteur_forum:nom' => 'Non haber&aacute; foros an&oacute;nimos',
	'auteurs:description' => 'Esta utilidade configura a apariencia da [p&aacute;xina de autores->./?exec=auteurs], na s&uacute;a parte privada.

@puce@ Defina aqu&iacute; o n&uacute;mero m&aacute;ximo de autores que se mostrar&aacute;n no cadro central da p&aacute;xina de autores. A partir de a&iacute;, os autores ser&aacute;n mostrados mediante unha paxinaci&oacute;n.[[%max_auteurs_page%]]

@puce@ Que estados de autores poden ser listados nesta p&aacute;xina?
[[%auteurs_tout_voir%[[->%auteurs_0%]][[->%auteurs_1%]][[->%auteurs_5%]][[->%auteurs_6%]][[->%auteurs_n%]]]]',
	'auteurs:nom' => 'P&aacute;xina de autores',

	// B
	'basique' => 'B&aacute;sica',
	'blocs:aide' => 'Bloques despregables : <b>&lt;bloque&gt;&lt;/bloque&gt;</b> (alias : <b>&lt;invisible&gt;&lt;/invisible&gt;</b>) e <b>&lt;visible&gt;&lt;/visible&gt;</b>',
	'blocs:description' => '<MODIF>Perm&iacute;telle crear bloques nos que o t&iacute;tulo activo pode facelos visibles ou invisibles.

@puce@ {{Nos textos SPIP}} : os redactores te&ntilde;en a disposici&oacute;n as novas balizas &lt;bloque&gt; (ou &lt;invisible&gt;) e &lt;visible&gt; para utilizar nos seus textos, coma no caso : 

<quote><code>
<bloc>
 Un t&iacute;tulo que se far&aacute; activo,  cliquable
 
 O texto para ocultar/mostrar, despois de dous saltos de li&ntilde;a...
 </bloc>
</code></quote>

@puce@ {{Nos esqueletos}} : ten &aacute; s&uacute;a disposici&oacute;n as novas balizas #BLOC_TITRE, #BLOC_DEBUT e #BLOC_FIN para utilizar coma no caso : 
<quote><code> #BLOC_TITRE ou #BLOC_TITRE{mon_URL}
 O meu t&iacute;tulo
 #BLOC_RESUME    (facultativo)
 unha versi&oacute;n resumida do bloque seguinte
 #BLOC_DEBUT
 O meu bloque despregable (que conter&aacute; o enderezo URL punteado se for necesario)
 #BLOC_FIN</code></quote>
 
',
	'blocs:nom' => 'Bloques despregables',
	'boites_privees:description' => '<MODIF>Todas as funcionalidades abaixo descritas aparecen na parte privada.[[%cs_rss%]][[->%format_spip%]][[->%stat_auteurs%]]
[[->%bp_urls_propres%]]
- {{As revisi&oacute;ns da Navalla Su&iacute;za}} : un cadre sobre a presente p&aacute;xina de configuraci&oacute;n, indicando as &uacute;ltimas modificaci&oacute;ns achegadas ao c&oacute;digo do m&oacute;dulo ([Source->@_CS_RSS_SOURCE@]).
- {{Os artigos en formato SPIP}} : un cadro repregable suplementario para os seus artigos co fin co fin de co&ntilde;ecer o  c&oacute;digo fonte usado polos seus autores.
- {{Estado de autores}} : un cadro suplementario en [a p&aacute;xina de autores->./?exec=auteurs] que indica os &uacute;ltimos 10 conectados e as inscrici&oacute;ns non confirmadas. S&oacute; os administradores ven esta informaci&oacute;n.
- {{Ver os URL propios}} : un cadro despregable para cada obxecto de contido (artigo, secci&oacute;n, autor, ...) que indica o URL propio asociado as&iacute; como os seus alias eventuais. A ferramenta &laquo;&nbsp;[.->type_urls]&nbsp;&raquo; permite a configuraci&oacute;n dos URL.',
	'boites_privees:nom' => 'Funcionalidades privadas',
	'bp_urls_propres' => '<MODIF>Ver os URL propios',

	// C
	'cache_controle' => 'Control da cach&eacute;',
	'cache_nornal' => 'Uso normal',
	'cache_permanent' => 'Cach&eacute; permanente',
	'cache_sans' => 'Non hai cach&eacute;',
	'categ:admin' => '1. Administraci&oacute;n',
	'categ:divers' => '60. Varios',
	'categ:interface' => '10. Interface privada',
	'categ:public' => '40. Exposici&oacute;n p&uacute;blica',
	'categ:spip' => '50. Balizas, filtros, criterios',
	'categ:typo-corr' => '20. Melloramento de textos',
	'categ:typo-racc' => '30. Atallos tipogr&aacute;ficos',
	'certaines_couleurs' => 'S&oacute; as balizas definidas aqu&iacute; abaixo ci-dessous@_CS_ASTER@ :',
	'chatons:aide' => 'Chatons : @liste@',
	'chatons:description' => 'Introduce imaxes(ou chatons para que moito andan cos {tchats}) en todos os textos ou aparece unha cadea do tipo <code>:nom</code>.
_ Esta utilidade troca os atallos polas imaxes que co mesmo nome encontre no cartafol plugins/couteau_suisse/img/chatons.',
	'chatons:nom' => 'Chat&oacute;ns',
	'class_spip:description1' => 'Pode definir aqu&iacute; certos recursos de SPIP. Un valor baleiro equivale a usar o valor predeterminado.[[%racc_hr%]]',
	'class_spip:description2' => '@puce@ {{Os atallos de SPIP}}.

Pode definir aqu&iacute; certos atallos de SPIP. Un valor baleiro equivale a usar o valor predeterminado.[[%racc_hr%]][[%puce%]]',
	'class_spip:description3' => '

{Aviso : se a utilidade &laquo;&nbsp;[.->pucesli]&nbsp;&raquo; est&aacute; activada, o reemprazamento da &laquo;&nbsp;-&nbsp;&raquo; xa non ser&aacute; efectuado&nbsp;; unha lista &lt;ul>&lt;li> sera utilizada no seu lugar.}

SPIP adoita usar a baliza &lt;h3&gt; para os intert&iacute;tulos. Escolla aqu&iacute; se quixer, outra cadea de substituci&oacute;n :[[%racc_h1%]][[->%racc_h2%]]',
	'class_spip:description4' => '

SPIP escolleu usar a baliza &lt;strong> para transcribir as grosas. Pero &lt;b> poder&iacute;a tam&eacute;n convir con ou sen estilo. Vexa e valore :[[%racc_g1%]][[->%racc_g2%]]

SPIP elixiu usar a baliza &lt;i> para transcribir as it&aacute;licas. Mais &lt;em> poder&iacute;a ser igualmente adecuado, con ou sen estilo. Vexa e valore:[[%racc_i1%]][[->%racc_i2%]]

@puce@ {{Os estilos de SPIP predeterminados}}. Ata a versi&oacute;n 1.92 de SPIP, os recursos tipogr&aacute;ficos produc&iacute;an balizas sistematicamente  nomeadas co patr&oacute;n "spip". Por exemplo: <code><p class="spip"></code>. Pode definir o estilo destas balizas en funci&oacute;n das s&uacute;as follas de estilo. Un caso baleiro significa que ning&uacute;n estilo en particular lle ser&aacute; aplicado.

{Ollo : se alg&uacute;ns recursos (li&ntilde;a horizontal, intert&iacute;tulo, it&aacute;lica, negra) son modificados, os estilos seguintes xa non ser&aacute;n aplicados.}

<q1>
_ {{1.}} Balizas &lt;p&gt;, &lt;i&gt;, &lt;strong&gt; :[[%style_p%]]
_ {{2.}} Balizas &lt;tables&gt;, &lt;hr&gt;, &lt;h3&gt;, &lt;blockquote&gt; e as listas (&lt;ol&gt;, &lt;ul&gt;, etc.) :[[%style_h%]]

Ollo : modificando este segundo par&aacute;metro, p&eacute;rdense os estilos est&aacute;ndares asociados a estas balizas.</blockquote>',
	'class_spip:nom' => 'SPIP e os seus atallos',
	'code_css' => 'CSS',
	'code_fonctions' => 'Funci&oacute;ns',
	'code_jq' => 'jQuery',
	'code_js' => 'Javascript',
	'code_options' => 'Opci&oacute;ns',
	'code_spip_options' => 'Opci&oacute;ns de SPIP',
	'contrib' => 'M&aacute;is informaci&oacute;n: @url@',
	'couleurs:aide' => 'Colorear : <b>[coul]texte[/coul]</b>@fond@ con <b>coul</b> = @liste@',
	'couleurs:description' => 'Permite aplicar doadamente cores a todos os textos do web (artigos, breves, t&iacute;tulos, foro, ) usando balizas en atallos.

Dou exemplos id&eacute;nticos para trocar a cor do texto :@_CS_EXEMPLE_COULEURS2@

Idem para trocar o fondo, se a opci&oacute;n seguinte o permite :@_CS_EXEMPLE_COULEURS3@

[[%couleurs_fonds%]]
[[%set_couleurs%]][[->%couleurs_perso%]]
@_CS_ASTER@ O formato destas balizas personalizadas debe listar as cores existentes ou definir parellas &laquo;balise=couleur&raquo;, sempe separadas por v&iacute;rgulas. Exemplos : &laquo;gris, rouge&raquo;, &laquo;faible=jaune, fort=rouge&raquo;, &laquo;bas=#99CC11, haut=brown&raquo; ou mesmo &laquo;gris=#DDDDCC, rouge=#EE3300&raquo;. Para o primeiro e o derradeiro exemplo, as balizas autorizadas son : <code>[gris]</code> et <code>[rouge]</code> (<code>[fond gris]</code> e <code>[fond rouge]</code> se os fondos son permitidos).',
	'couleurs:nom' => 'Todo en cores',
	'couleurs_fonds' => ', <b>[fond&nbsp;coul]texte[/coul]</b>, <b>[bg&nbsp;coul]texte[/coul]</b>',
	'cs_comportement:description' => '@puce@ {{Logs.}} Obter moita informaci&oacute;n a prop&oacute;sito do funcionamento da Navalla Su&iacute;za nos ficheiros {spip.log} que se poden consultar no cartafol : {@_CS_DIR_TMP@}[[%log_couteau_suisse%]]

@puce@ {{Opci&oacute;ns SPIP.}} SPIP ordena os plugins nunha orde espec&iacute;fica. Co fin de estar seguro de que A Navalla Su&iacute;za est&aacute; na cabeceira e xera certas opci&oacute;ns de SPIP, escolla a opci&oacute;n seguinte. Se os dereitos do seu servidor o permiten, o ficheiro {@_CS_FILE_OPTIONS@} ser&aacute; automaticamente modificado para inclu&iacute;r o ficheiro {@_CS_DIR_TMP@couteau-suisse/mes_spip_options.php}.
[[%spip_options_on%]]

@puce@ {{Consultas externas.}} A Navalla Su&iacute;za verifica regularmente a existencia dunha versi&oacute;n m&aacute;is recente do seu c&oacute;digo e informa na s&uacute;a p&aacute;xina de configuraci&oacute;n dunha actualizaci&oacute;n eventualmente dispo&ntilde;ible. Se as consultas externas do seu servidor dan problemas, escolla a caixa seguinte.[[%distant_off%]]',
	'cs_comportement:nom' => 'Comportamentos da Navalla Su&iacute;za',
	'cs_distant_off' => 'Comprobaci&oacute;n de versi&oacute;ns distantes',
	'cs_log_couteau_suisse' => 'Os logs detallados da Navalla Su&iacute;za',
	'cs_spip_options_on' => 'As opci&oacute;ns SPIP en &laquo;@_CS_FILE_OPTIONS@&raquo;',

	// D
	'decoration:aide' => 'Decoraci&oacute;n&nbsp;: <b>&lt;balise&gt;test&lt;/balise&gt;</b>, con <b>balise</b> = @liste@',
	'decoration:description' => 'Novos estilos parametrables nos seus textos e acces&iacute;beis merc&eacute; &aacute;s balizas con comas angulares. Exemplo : 
&lt;mabalise&gt;texte&lt;/mabalise&gt; ou : &lt;mabalise/&gt;.<br /> Defina seguidamente os estilos CSS dos que te&ntilde;a necesidade, unha baliza por li&ntilde;a, consonte as expresi&oacute;ns seguintes :
- {type.mabalise = meu estilo CSS}
- {type.mabalise.class = mi&ntilde;a clase CSS}
- {type.mabalise.lang = mi&ntilde;a lingua (ex : fr)}
- {unalias = minhabaliza}

O par&aacute;metro {type} seguinte pode ter tres valores:
- {span} : baliza para o interior dun par&aacute;grafo (tipo Inline)
- {div} : baliza asociada a un novo par&aacute;grafo (tipo Block)
- {auto} : baliza determinada automaticamente polo plugin

[[%decoration_styles%]]',
	'decoration:nom' => 'Decoraci&oacute;n',
	'decoupe:aide' => 'Bloque de pestanas : <b>&lt;onglets>&lt;/onglets></b><br/>Separador de p&aacute;xinas ou pestanas&nbsp;: @sep@',
	'decoupe:aide2' => 'Alias&nbsp;:&nbsp;@sep@',
	'decoupe:description' => '<MODIF>@puce@ Parte a presentaci&oacute;n p&uacute;blica dun artigo en varias p&aacute;xinas mediante unha paxinaci&oacute;n autom&aacute;tica. Sit&uacute;e simplemente no seu artigo catro signos de m&aacute;is consecutivos (<code>++++</code>) no lugar que debe recibir o corte.

En principio, A Navalla Su&iacute;za insire a paxinaci&oacute;n automaticamente na cabeceira e no rodap&eacute; do artigo mais vostede ten a posibilidade de situar esta paxinaci&oacute;n en calquera outro sitio do seu esqueleto merc&eacute; a unha baliza #CS_DECOUPE que pode activar aqu&iacute;:
[[%balise_decoupe%]]

@puce@ De utilizar este separador no interior das balizas &lt;pestanas&gt; e &lt;/pestanas&gt; obter&aacute; un xogo de pestanas.

_ Nos esqueletos : ten &aacute; s&uacute;a disposici&oacute;n as novas balizas #ONGLETS_DEBUT, #ONGLETS_TITRE e #ONGLETS_FIN.

_ Esta utilidade pode ser emparellada con &laquo;&nbsp;[.->sommaire]&nbsp;&raquo;.',
	'decoupe:nom' => 'Partici&oacute;n en p&aacute;xinas e pestanas',
	'desactiver_flash:description' => 'Suprime os obxectos flash das p&aacute;xinas do seu web e substit&uacute;eas polo contido alternativo asociado.',
	'desactiver_flash:nom' => 'Desactiva os obxectos flash',
	'detail_balise_etoilee' => '{{Aviso}} : Comprobe a utilizaci&oacute;n feita polos seus esqueletos das balizas estreladas. O tratamento desta ferramenta non se aplicar&aacute;n sobre : @bal@.',
	'detail_fichiers' => 'Ficheiros :',
	'detail_inline' => 'C&oacute;digo inline :',
	'detail_jquery1' => '{{Aviso}} : esta utilidade precisa o m&oacute;dulo {jQuery} para funcionar con esta versi&oacute;n de SPIP.',
	'detail_jquery2' => 'Esta ferramenta necesita a librar&iacute;a {jQuery}.',
	'detail_jquery3' => '{{Aviso}} : esta utilidade necesita o plugin [jQuery para SPIP 1.92->http://files.spip.org/spip-zone/jquery_192.zip] para funcionar correctamente con esta versi&oacute;n de  SPIP.',
	'detail_pipelines' => 'Tubar&iacute;as (pipelines) :',
	'detail_traitements' => 'Tratamentos :',
	'dossier_squelettes:description' => 'Modifica o cartafol do esqueleto usado. Por exemplo : "squelettes/monsquelette". Pode rexistrar varios cartafoles separ&aacute;ndoos polos dous puntos <html>&laquo;&nbsp;:&nbsp;&raquo;</html>. Deixando baleira caixa seguinte (ou escribindo "dist"), vai ser o esqueleto orixinal "dist" fornecido por SPIP o que ser&aacute; usado.[[%dossier_squelettes%]]',
	'dossier_squelettes:nom' => 'Cartafol do esqueleto',

	// E
	'effaces' => 'Borrados',
	'en_travaux:description' => 'Permite mostrar unha mensaxe personalizable durante unha fase de mantemento sobre todo o web p&uacute;blico.
[[%message_travaux%]][[%titre_travaux%]][[%admin_travaux%]]',
	'en_travaux:nom' => 'Web en obras',
	'erreur:bt' => '<span style=\\"color:red;\\">Aviso:</span> a barra tipogr&aacute;fica (version @version@) parece antiga.<br />A Navalla Su&iacute;za &eacute;  compatible cunha versi&oacute;n superior ou igual a @mini@.',
	'erreur:description' => 'Falta o id na definici&oacute;n da ferramenta!',
	'erreur:distant' => 'O servidor remoto',
	'erreur:jquery' => '<MODIF>{{Nota}} : a librar&iacute;a {jQuery} parece inactiva nesta p&aacute;xina. Consulte [aqu&iacute;->http://www.spip-contrib.net/?article2166] o par&aacute;grafo acerca das dependencias do plugin.',
	'erreur:js' => 'Un erro de JavaScript parece terse producido nesta p&aacute;xina e impide o seu funcionamento correcto. Active JavaScript no seu navegador ou desactive alg&uacute;ns m&oacute;dulos do seu web.',
	'erreur:nojs' => 'O JavaScript est&aacute; desactivado nesta p&aacute;xina.',
	'erreur:nom' => 'Erro !',
	'erreur:probleme' => 'Problema en : @pb@',
	'erreur:traitements' => 'A Navalla Su&iacute;za - Erro de compilation dos tratamentos : mestura \'typo\' e \'propre\' prohibida !',
	'erreur:version' => 'Esta ferramenta non est&aacute; dispo&ntilde;&iacute;bel nesta versi&oacute;n de SPIP.',
	'etendu' => 'Estendido',

	// F
	'f_jQuery:description' => 'Impide a instalaci&oacute;n de {jQuery} na parte p&uacute;blica co fin de economizar un pouco de &laquo;tempo m&aacute;quina&raquo;. Esta librar&iacute;a ([->http://jquery.com/]) achega numerosas comodidades na programaci&oacute;n de Javascript e poder ser usada por certos m&oacute;dulos. SPIP usa dela na &aacute;rea privada.

Aviso : alg&uacute;nhas ferramentas de A Navalla Su&iacute;za necesitan as funci&oacute;ns de {jQuery}. ',
	'f_jQuery:nom' => 'Desactiva jQuery',
	'filets_sep:aide' => 'Filetes de separaci&oacute;n&nbsp;: <b>__i__</b> ou <b>i</b> &eacute; un n&uacute;mero.<br />Outros filetes dipo&ntilde;&iacute;beis : @liste@',
	'filets_sep:description' => 'Insire filetes de separaci&oacute;n, personalizables mediante as follas de estilo, en todos os textos de SPIP.
_ A sintaxe &eacute; : "__code__", ou "code" representa ben o n&uacute;mero de identificaci&oacute;n (de 0 &agrave; 7) do filete inserible en relaci&oacute;n directa cos estilos correspondentes, ben o nome dunha imaxe situada no cartafol plugins/couteau_suisse/img/filets.',
	'filets_sep:nom' => 'Filetes de separaci&oacute;n',
	'filtrer_javascript:description' => 'Para xerar a inserci&oacute;n de javascript nos artigos, son tres os modos :
- <i>nunca</i> : o javascript &eacute; rexeitado en todas partes
- <i>predeterminado</i> : o javascript m&aacute;rcase en vermello na zona privada
- <i>sempre</i> : o javascript &eacute; aceptado por todas as partes.

Aviso : nos foros, petici&oacute;ns, fluxos afiliados, etc., a xesti&oacute;n do javascript &eacute; <b>sempre</b> securizada.[[%radio_filtrer_javascript3%]]',
	'filtrer_javascript:nom' => 'Xesti&oacute;n do javascript',
	'flock:description' => 'Desactiva o bloqueo de ficheiros neutralizando a funci&oacute;n PHP {flock()}. Alg&uacute;s aloxadores dan de feito problemas graves sexa por un sistema de ficheiros inadaptados ou sexa por unha falta de sincronizaci&oacute;n. Non active esta utilidade  se este funciona normalmente.',
	'flock:nom' => 'Non bloquear os ficheiros',
	'fonds' => 'Fondos :',
	'forcer_langue:description' => 'Forza o contexto de lingua para os xogos de esqueletos multiling&uuml;es que dispo&ntilde;en dun formulario ou dun men&uacute; de linguas que saiban xera a cookie de linguas.',
	'forcer_langue:nom' => 'Forzar lingua',
	'format_spip' => 'Artigos en formato SPIP',
	'forum_lgrmaxi:description' => 'De modo predeterminado as mensaxes de foros non se limitan en tama&ntilde;o. De activar esta ferramenta, unha mensaxe de erro mostrarase cando algu&eacute;n queira introducir unha mensaxe de tama&ntilde;o superior ao especificado, e a mensaxe, e a mensaxe ser&aacute; rexeitada. Un valor baleiro ou igual a  0 significa no entanto que ning&uacute;n l&iacute;mite se aplica.[[%forum_lgrmaxi%]]',
	'forum_lgrmaxi:nom' => 'Tama&ntilde;o dos foros',

	// G
	'glossaire:aide' => 'Un texto sen glosario : <b>@_CS_SANS_GLOSSAIRE@</b>',
	'glossaire:description' => '<MODIF>@puce@ Xesti&oacute;n dun glosario interno ligado a un ou varios grupos de palabras-clave. Rexistre aqu&iacute; o nome dos grupos, separados por dous puntos &laquo;&nbsp;:&nbsp;&raquo;. Deixando a caixa baleira, o que se crea (ou ao escribir "Glosario") &eacute; o grupo "Glosario" para ser usado.[[%glossaire_groupes%]]

@puce@ Para cada palabra, pode escoller o n&uacute;mero m&aacute;ximo de ligaz&oacute;ns creadas nos seus textos. Calquera valor nulo ou negativo implica que todas as palabras reco&ntilde;ecidas ser&aacute;n tratadas. [[%%glossaire_limite por palavra-clave]]

@puce@ D&uacute;as soluci&oacute;ns se ofrecen para xerar a pequena xanela autom&aacute;tica que aparece cando se sobrevoa &aacute; ocorrencia. [[%glossaire_js%]]',
	'glossaire:nom' => 'Glosario interno',
	'glossaire_css' => 'Soluci&oacute;n CSS',
	'glossaire_js' => 'Soluci&oacute;n Javascript',
	'guillemets:description' => 'Substituci&oacute;n autom&aacute;tica das comas dereitas (") polas tipogr&aacute;ficas da lingua de composici&oacute;n. A substituci&oacute;n, transparente para o usuario, non modifica o texto orixinal sen&oacute;n que soamente cambia a presentaci&oacute;n final.',
	'guillemets:nom' => 'V&iacute;rgulas tipogr&aacute;ficas',

	// H
	'help' => '{{Esta p&aacute;xina s&oacute; &eacute; accesible para o responsable do web.}}<p>D&aacute; acceso &aacute;s diferentes funci&oacute;ns suplementarias achegadas polo m&oacute;dulo &laquo;{{Le&nbsp;Couteau&nbsp;Suisse}}&raquo;.',
	'help0' => '{{Esta p&aacute;xina s&oacute; &eacute; acces&iacute;bel para os respons&aacute;beis do web.}}<p>D&aacute; acceso a diferentes funci&oacute;ns suplementarias achegadas polo m&oacute;dulo &laquo;{{Le&nbsp;Couteau&nbsp;Suisse}}&raquo;.</p><p>Ligaz&oacute;n de documentaci&oacute;n :<br/> [Le&nbsp;Couteau&nbsp;Suisse->http://www.spip-contrib.net/?article2166]</p><p>Reinicializaci&oacute;n:
_  [De todo o m&oacute;dulo->@reset@]
</p>',
	'help2' => 'Versi&oacute;n local: @version@',
	'help3' => '<p>Ligaz&oacute;ns de documentaci&oacute;n:<br/> [A&nbsp;Navalla&nbsp;Suiza->http://www.spip-contrib.net/?article2166]@contribs@</p><p>Reinicios:
_  [Ferramentas cacheadas|Volver &aacute; apariencia inicial desta p&aacute;xina->@hide@]
_  [De todo o m&oacute;dulo|Volver ao estado inicial do m&oacute;dulo->@reset@]@install@
</p>',

	// I
	'icone_visiter:description' => 'Substit&uacute;a a imaxe do bot&oacute;n est&aacute;ndar &laquo;&nbsp;Visitar&nbsp;&raquo; (arriba &aacute; dereita desta p&aacute;xina) polo logo do web, se existe.

Para definir o logo, vaia &aacute; p&aacute;xina &laquo;&nbsp;Configuraci&oacute;n do web&nbsp;&raquo; premendo sobre o bot&oacute;n &laquo;&nbsp;Configuraci&oacute;n&nbsp;&raquo;.',
	'icone_visiter:nom' => 'Bot&oacute;n &laquo;&nbsp;Visitar&nbsp;&raquo;',
	'insert_head:description' => 'Activa automaticamente a baliza [#INSERT_HEAD->http://www.spip.net/fr_article1902.html] en todos os esqueletos, que te&ntilde;an ou non esta baliza entre &lt;head&gt; e &lt;/head&gt;. Merc&eacute; a esta opci&oacute;n, os plugins poder&aacute;n inserir javascript (.js) ou follas de estilo (.css).',
	'insert_head:nom' => 'Baliza #INSERT_HEAD',
	'insertions:description' => 'AVISO : ferramenta en proceso de desenvolvemento !! [[%insertions%]]',
	'insertions:nom' => 'Correcci&oacute;ns autom&aacute;ticas',
	'introduction:description' => 'Esta baliza situable nos esqueletos serve xeralmente para unha &uacute;ltima hora ou nas secci&oacute;ns co fin de producir un resumo de artigos, de breves, etc..</p>
<p>{{Aviso}} : Antes de activar esta funcionalidade, comprobe ben que ningunha funci&oacute;n {balise_INTRODUCTION()} exista xa no seu esqueleto ou nos m&oacute;dulos, a sobrecarga producir&iacute;a un erro de compilaci&oacute;n.</p>
@puce@ Pode precisar (porcentualmente en relaci&oacute;n co valor usado de modo predeterminado) a lonxitude do texto reeenviado pola baliza #INTRODUCTION. Un valor nulo ou igual a 100 non modifica o aspecto da introduci&oacute;n e usa daquela os valores predeterminados seguintes : 500 caracteres para os artigos, 300 para as breves e 600 para os foros ou as secci&oacute;ns.
[[%lgr_introduction%&nbsp;%]]
@puce@ De modo predeterminado, os puntos suspensivos engadidos ao resultado da baliza #INTRODUCTION se o texto &eacute; demasiado longo son : <html>&laquo;&amp;nbsp;()&raquo;</html>. Pode precisar aqu&iacute; a s&uacute;a propia cadea de caracteres que indiquen ao lector que o texto truncado ten unha continuidade.
[[%suite_introduction%]]
@puce@ Se a baliza #INTRODUCTION se emprega para resumir un artigo, ent&oacute;n A Navalla Su&iacute;za pode fabricar unha ligaz&oacute;n sobre eses puntos suspensivos definidos a seguir co fin de levar o lector ao texto orixinal. Por exemplo : &laquo;Ler a continuidade deste artigo&raquo;
[[%lien_introduction%]]
',
	'introduction:nom' => 'Baliza #INTRODUCTION',

	// J
	'jcorner:description' => '&laquo;&nbsp;Jolis Coins&nbsp;&raquo; &eacute; unha ferramenta que permite modificar doadamente o aspecto das esquinas dos {{cadros coloreados}} na parte p&uacute;blica do seu web. Todo &eacute; posible ou case!
_ Vexa o resultado nest&aacute; p&aacute;xina: [->http://www.malsup.com/jquery/corner/].

Liste aqu&iacute; abaixo os obxectos do seu esqueleto a redondear usando a sintaxe CSS (.class, #id, etc. ). Utilice o signo &laquo;&nbsp;=&nbsp;&raquo; para especificar o comando jQuery a usar e unha dobre barra (&laquo;&nbsp;//&nbsp;&raquo;) para o comentarios. En ausencia do signo igual, as esquinas redondeadas ser&aacute;n aplicadas (equivalent e : <code>.ma_classe = .corner()</code>).[[%jcorner_classes%]]

Atenci&oacute;n, esta ferramenta, precisa para funcionar do m&oacute;dulo {jQuery} : {Round Corners}. A Navalla Su&iacute;za p&oacute;dea instalar directamente se marca a caixa seguinte. [[%jcorner_plugin%]]',
	'jcorner:nom' => 'Jolis Coins',
	'jcorner_plugin' => '&laquo;M&oacute;dulo&nbsp;Round Corners&nbsp;&raquo;',
	'jq_localScroll' => 'jQuery.LocalScroll ([demo->http://demos.flesler.com/jquery/localScroll/])',
	'jq_scrollTo' => 'jQuery.ScrollTo ([demo->http://demos.flesler.com/jquery/scrollTo/])',
	'js_defaut' => 'Predeterminado',
	'js_jamais' => 'Nunca',
	'js_toujours' => 'Sempre',

	// L
	'label:admin_travaux' => 'Pechar o web para :',
	'label:auteurs_tout_voir' => '@_CS_CHOIX@',
	'label:auto_sommaire' => 'Creaci&oacute;n sistem&aacute;tica de sumario :',
	'label:balise_decoupe' => 'Activar a baliza #CS_DECOUPE :',
	'label:balise_sommaire' => 'Activar a baliza #CS_SOMMAIRE :',
	'label:bloc_unique' => 'Un s&oacute; bloque aberto na p&aacute;xina:',
	'label:couleurs_fonds' => 'Permitir os fondos :',
	'label:cs_rss' => 'Activar :',
	'label:debut_urls_libres' => '<:label:debut_urls_propres:>',
	'label:debut_urls_propres' => 'Comezo dos URL :',
	'label:debut_urls_propres2' => '<:label:debut_urls_propres:>',
	'label:decoration_styles' => 'As s&uacute;as balizas de estilo pesonalizado :',
	'label:derniere_modif_invalide' => 'Recalcular s&oacute; despois dunha modificaci&oacute;n :',
	'label:distant_off' => 'Desactivar :',
	'label:dossier_squelettes' => 'Cartafol para utilizar :',
	'label:duree_cache' => 'Duraci&oacute;n da cach&eacute; local :',
	'label:duree_cache_mutu' => 'Duraci&oacute;n da cach&eacute; en mutualizaci&oacute;n :',
	'label:expo_bofbof' => 'Mostrar en super&iacute;ndice cando : <html>St(e)(s), Bx, Bd(s) e Fb(s)</html>',
	'label:forum_lgrmaxi' => 'Valor (en caracteres) :',
	'label:glossaire_groupes' => 'Grupo(s) usado(s) :',
	'label:glossaire_js' => 'T&eacute;cnica usada :',
	'label:glossaire_limite' => 'N&uacute;mero m&aacute;ximo de ligaz&oacute;ns creadas :',
	'label:insertions' => 'Correcci&oacute;ns autom&aacute;ticas :',
	'label:jcorner_classes' => 'Mellorar as esquinas dos selectores seguintes:',
	'label:jcorner_plugin' => 'Instalar o m&oacute;dulo {jQuery} seguinte:',
	'label:lgr_introduction' => 'Lonxitude do resumo :',
	'label:lgr_sommaire' => 'Lonxitude do sumario (9 a 99) :',
	'label:lien_introduction' => 'Puntos suspensivos de continuidade activos :',
	'label:liens_interrogation' => 'Protexer os URL :',
	'label:liens_orphelins' => 'Ligaz&oacute;ns activas :',
	'label:log_couteau_suisse' => 'Activar :',
	'label:marqueurs_urls_propres' => 'Engadir os marcadores disociando os obxectos (SPIP>=2.0) :<br/>(ex. : &laquo;&nbsp;-&nbsp;&raquo; para -Mi&ntilde;a-seccion-, &laquo;&nbsp;@&nbsp;&raquo; para @Meu-web@) ',
	'label:marqueurs_urls_propres2' => '<:label:marqueurs_urls_propres:>',
	'label:marqueurs_urls_propres_qs' => '<:label:marqueurs_urls_propres:>',
	'label:max_auteurs_page' => 'Autors por p&aacute;xina :',
	'label:message_travaux' => 'A s&uacute;a mensaxe de mantemento :',
	'label:moderation_admin' => 'Validar automaticamente as mensaxes desde: ',
	'label:paragrapher' => 'Paragrafar sempre :',
	'label:puce' => 'Vi&ntilde;eta p&uacute;blica &laquo;<html>-</html>&raquo; :',
	'label:quota_cache' => 'Valor de quota :',
	'label:racc_g1' => 'Entrada e sa&iacute;da da presentaci&oacute;n en &laquo;<html>{{negra}}</html>&raquo; :',
	'label:racc_h1' => 'Entrada e sa&iacute;da dun &laquo;<html>{{{intert&iacute;tulo}}}</html>&raquo; :',
	'label:racc_hr' => 'Li&ntilde;a horizontal &laquo;<html>----</html>&raquo; :',
	'label:racc_i1' => 'Entrada e sa&iacute;da dunha &laquo;<html>{it&aacute;lica}</html>&raquo; :',
	'label:radio_desactive_cache3' => 'Uso da cach&eacute;:',
	'label:radio_desactive_cache4' => 'Uso da cach&eacute;:',
	'label:radio_filtrer_javascript3' => '@_CS_CHOIX@',
	'label:radio_set_options4' => '@_CS_CHOIX@',
	'label:radio_suivi_forums3' => '@_CS_CHOIX@',
	'label:radio_target_blank3' => 'Nova xanela para as ligaz&oacute;ns externas :',
	'label:radio_type_urls3' => 'Formato dos URL :',
	'label:scrollTo' => 'Instalar os m&oacute;dulos {jQuery} seguintes :',
	'label:separateur_urls_page' => 'Car&aacute;cter de separaci&oacute;n \'type-id\'<br/>(ex. : ?article-123) :',
	'label:set_couleurs' => 'Conxunto para usar :',
	'label:spam_mots' => 'Secuencias prohibidas :',
	'label:spip_options_on' => 'Inclu&iacute;r :',
	'label:spip_script' => 'Script de chamada :',
	'label:style_h' => 'O seu estilo :',
	'label:style_p' => 'O seu estilo :',
	'label:suite_introduction' => 'Puntos de continuidade :',
	'label:terminaison_urls_arbo' => '<:label:terminaison_urls_page:>',
	'label:terminaison_urls_libres' => '<:label:terminaison_urls_page:>',
	'label:terminaison_urls_page' => 'Terminaci&oacute;n dos URL (ex : &laquo;&nbsp;.html&nbsp;&raquo;) :',
	'label:terminaison_urls_propres' => '<:label:terminaison_urls_page:>',
	'label:terminaison_urls_propres_qs' => '<:label:terminaison_urls_page:>',
	'label:titre_travaux' => 'T&iacute;tulo da mensaxe :',
	'label:tri_articles' => 'A s&uacute;a elecci&oacute;n :',
	'label:url_arbo_minuscules' => 'Conservar a altura tipogr&aacute;fica dos t&iacute;tulos nos URL :',
	'label:url_arbo_sep_id' => 'Car&aacute;cter de separaci&oacute;n \'titulo-id\' para o caso de repetici&oacute;n (doublon) :<br/>(non empregue \'/\')',
	'label:url_glossaire_externe2' => 'Ligaz&oacute;n sobre o glosario externo :',
	'label:urls_arbo_sans_type' => 'Mostrar o tipo de obxecto SPIP nos URL :',
	'label:webmestres' => 'Lista de webm&aacute;sters do web:',
	'liens_en_clair:description' => 'Pon &aacute; s&uacute;a disposici&oacute;n o filtro : \'liens_en_clair\'. O seu texto cont&eacute;n probablemente ligaz&oacute;ns de hipertexto que non son visibles tras unha impresi&oacute;n. Este filtro engade entre corchetes o destino de cada ligaz&oacute;n activa (ligaz&oacute;ns externas ou correos). Atenci&oacute;n : en modo de impresi&oacute;n (par&aacute;metro \'cs=print\' ou \'page=print\' no url da p&aacute;xina), esta funcionalidade apl&iacute;case automaticamente.',
	'liens_en_clair:nom' => 'Ligaz&oacute;ns en claro',
	'liens_orphelins:description' => 'Esta ferramenta ten d&uacute;as funci&oacute;ns :

@puce@ {{Ligaz&oacute;ns correctas}}.

SPIP ten por h&aacute;bito inserir un espazo diante dos puntos de interrogaci&oacute;n ou de exclamaci&oacute;n, tipograf&iacute;a francesa obriga. Velaqu&iacute; unha ferramenta que protexe o punto de interrogaci&oacute;n nos url dos seus textos.[[%liens_interrogation%]]

@puce@ {{Ligaz&oacute;ns orfas}}.

Substit&uacute;e sistematicamente todos os url deixados en texto polos usuarios (nomeadamente nos foros) e que non son clicables, polas ligaz&oacute;ns de hipertexto en formato  SPIP. Por exemplo : {<html>www.spip.net</html>} substit&uacute;ese por [->www.spip.net].

Podedes escoller o tipo de substituci&oacute;n :
_  {B&aacute;sica} : son substitu&iacute;das as ligaz&oacute;ns do tipo {<html>http://spip.net</html>} (inclu&iacute;do o protocolo) ou {<html>www.spip.net</html>}.
_  {Estendido} : son substitu&iacute;das ademais as ligaz&oacute;ns do tipo {<html>moi@spip.net</html>}, {<html>mailto:monmail</html>} ou {<html>news:mesnews</html>}.
[[%liens_orphelins%]]',
	'liens_orphelins:nom' => 'URL fermosas',

	// M
	'mailcrypt:description' => 'Oculta todas as ligaz&oacute;ns de correo presentes nos seus textos e substit&uacute;eos por unha ligaz&oacute;n Javascript que permite activara a aplicaci&oacute;n de correo do lector. Esta ferramenta antispam tenta impedir os robots de colleita de enderezos electr&oacute;nicos deixados en claro nos foros ou nas balizas dos seus esqueletos.',
	'mailcrypt:nom' => 'MailCrypt',
	'message_perso' => 'Un profundo reco&ntilde;ecemento para os tradutores que pasaran por aqu&iacute;. Pat ;-)',
	'moderation_admins' => 'administradores autenticados',
	'moderation_moderee:description' => 'Permite moderar a moderaci&oacute;n dos foros para os usuarios inscritos. [[%moderation_admin%]][[-->%moderation_redac%]][[-->%moderation_visit%]]',
	'moderation_moderee:nom' => 'Moderaci&oacute;n moderada',
	'moderation_redacs' => 'redactores autenticados',
	'moderation_visits' => 'visitantes autenticados',
	'modifier_vars' => 'Modificar os par&aacute;metros @nb@',
	'modifier_vars_0' => 'Modificar estes par&aacute;metros',

	// N
	'no_IP:description' => 'Desactiva o mecanismo de rexistro autom&aacute;tico de enderezos IP dos visitantes do seu web por raz&oacute;ns de confidencialidade : SPIP non conservar&aacute; daquela ning&uacute;n n&uacute;mero IP, nin temporalmente logo das visitas (para xerar as estat&iacute;sticas ou alimentar o spip.log), nin nos foros (responsabilidade).',
	'no_IP:nom' => 'Non conservar IP',
	'nouveaux' => 'Novos',

	// O
	'orientation:description' => '3 criterios novos para os seus esqueletos : <code>{portrait}</code>, <code>{carre}</code> e <code>{paysage}</code>. Ideal para a ordenaci&oacute;n de fotos en funci&oacute;n da s&uacute;a forma.',
	'orientation:nom' => 'Orientaci&oacute;n das imaxes',
	'outil_actif' => 'Utilidade activa',
	'outil_activer' => 'Activar',
	'outil_activer_le' => 'Activar a ferramenta',
	'outil_cacher' => 'Non volver a mostrar',
	'outil_desactiver' => 'Desactivar',
	'outil_desactiver_le' => 'Desactivar a ferramenta',
	'outil_inactif' => 'Utilidade inactiva',
	'outil_intro' => '<MODIF>Esta p&aacute;xina lista as caracter&iacute;sticas do m&oacute;dulo postos &aacute; s&uacute;a disposici&oacute;n. <br /> <br /> Ao premer sobre o nome das ferramentas que aparecen a seguir, seleccione, as que pode cambiar o estado usando o bot&oacute;n central: as ferramentas activadas ser&aacute;n desactivadas e <i> viceversa </ i>. Con cada click, a descrici&oacute;n aparece a seguir das listas. As categor&iacute;as son pregables e as ferramentas p&oacute;dense ocultar. O dobre clic permite trocar rapidamente unha ferramenta. <br /> <br /> Nun primeiro uso, recom&eacute;ndase activar as ferramentas unha por unha, no caso de apareceren certas incompatibilidades co seu esqueleto, con SPIP ou con outros m&oacute;dulos. <br /> <br /> Nota: a simple carga desta p&aacute;xina compila o conxunto das ferramentas da Navalla Su&iacute;za .',
	'outil_intro_old' => 'Esta interface &eacute; antiga.<br /><br />Se vostede encontra problema coa utilizaci&oacute;n da <a href=\'./?exec=admin_couteau_suisse\'>nova     interface</a>, non dubide en fac&eacute;rnolo saber no foro <a href=\'http://www.spip-contrib.net/?article2166\'>Spip-Contrib</a>.',
	'outil_nb' => '@pipe@ : @nb@ ferramenta',
	'outil_nbs' => '@pipe@ : @nb@ ferramentas',
	'outil_permuter' => 'Cambiar a ferramenta : &laquo; @text@ &raquo; ?',
	'outils_actifs' => 'Ferramentas activas :',
	'outils_caches' => 'Ferramentas ocultas :',
	'outils_cliquez' => 'Prema sobre o nome das ferramentas seguintes para mostrar aqu&iacute; a s&uacute;a descrici&oacute;n.',
	'outils_inactifs' => 'Ferramentas inactivas :',
	'outils_liste' => 'Lista de ferramentas da Navalla Su&iacute;za',
	'outils_permuter_gras1' => 'Trocar as ferramentas en negra',
	'outils_permuter_gras2' => 'Trocar as @nb@ ferramentas en negra ?',
	'outils_resetselection' => 'Reinicializar a selecci&oacute;n',
	'outils_selectionactifs' => 'Seleccionar todas as ferramentas activas',
	'outils_selectiontous' => 'TODOS',

	// P
	'pack_alt' => 'Ver os par&aacute;metros de configuraci&oacute;n en curso',
	'pack_descrip' => 'O seu "Pack de configuraci&oacute;n actual" recolle o conxunto dos par&aacute;metros de configuraci&oacute;n relativos &aacute; Navalla Su&iacute;za: a activaci&oacute;n de ferramentas e o valor das s&uacute;as eventuais variables.

Este c&oacute;digo PHP pode po&ntilde;erase no ficheiror /config/mes_options.php e engadir&aacute; unha ligaz&oacute;n de reinicializaci&oacute;n sobre esta p&aacute;xina "do paquete {Pack Actuel}". Desde logo p&oacute;delle cambiar o nome a seguir.

De reinicializar o m&oacute;dulo premendo sobre un paquete, a Navalla Su&iacute;za reconfigurarase automaticamente en funci&oacute;n dos par&aacute;metros predeterminado no paquete.',
	'pack_du' => ' do paquete @pack@',
	'pack_installe' => 'Actualizaci&oacute;n dun paquete de configuraci&oacute;n',
	'pack_titre' => 'Configuraci&oacute;n actual',
	'par_defaut' => 'Predeterminado',
	'paragrapher2:description' => 'A funci&oacute;n SPIP <code>paragrapher()</code> insere balizas &lt;p&gt; e &lt;/p&gt; en todos os textos que son que est&aacute;n desprovistos de par&aacute;grafos. Co fin de xerar m&aacute;is finamente os seus estilos e os dese&ntilde;os, ten a posibilidade de uniformizar o aspecto dos textos do seu  web.[[%paragrapher%]]',
	'paragrapher2:nom' => 'Paragrafar',
	'pipelines' => 'Tubar&iacute;as (pipelines usadas)&nbsp;:',
	'pucesli:description' => 'Substit&uacute;a as vi&ntilde;etas &laquo;-&raquo; (gui&oacute;n simple) dos artigos por listas les par des listes nominadas &laquo;-*&raquo; (traducidas en  HTML por : &lt;ul>&lt;li>&lt;/li>&lt;/ul>) e nas que o estilo pode ser personalizado por css.',
	'pucesli:nom' => 'Vi&ntilde;etas fermosas',

	// R
	'raccourcis' => 'Atallos tipogr&aacute;ficos activos da Navalla Su&iacute;za&nbsp;:',
	'raccourcis_barre' => 'Os atallo tipogr&aacute;ficos da Navalla Su&iacute;za',
	'reserve_admin' => 'Acceso reservado aos administradores.',
	'rss_actualiser' => 'Actualizar',
	'rss_attente' => 'Espera RSS...',
	'rss_desactiver' => 'Desactivar as &laquo; Revisi&oacute;ns da Navalla Su&iacute;za &raquo;',
	'rss_edition' => 'Flux RSS actualizado o :',
	'rss_source' => 'Fonte RSS',
	'rss_titre' => '&laquo;&nbsp;A Navalla Su&iacute;za&nbsp;&raquo; en desenvolvemento :',
	'rss_var' => 'As revisi&oacute;n da Navalla Su&iacute;za',

	// S
	'sauf_admin' => 'Todos, ag&aacute;s os administradores',
	'set_options:description' => 'Seleccione o tipo de interface privada predeterminada (simplificada ou avanzada) para todos os redactores xa existentes ou futuros e suprima o bot&oacute;n correspondente da barra de iconas.[[%radio_set_options4%]]',
	'set_options:nom' => 'Tipo de interface privada',
	'sf_amont' => 'Fluxo ascendente',
	'sf_tous' => 'Todos',
	'simpl_interface:description' => 'Desactive o cambio r&aacute;pido de estado dun artigo sobrevoando a s&uacute;a vi&ntilde;eta de cor. Iso &eacute; &uacute;til se vostede procura obter unha  interface privada o m&aacute;is limpa co fin de optimizar o rendemento do lado do cliente.',
	'simpl_interface:nom' => 'Alixeiramento da interfacer privada',
	'smileys:aide' => 'Riso&ntilde;os : @liste@',
	'smileys:description' => '<MODIF>Inserir riso&ntilde;os en todos os textos onde aparece un atallo de estilo <acronym>:-)</acronym>. Ideal para os foros.
_ Est&aacute; dispo&ntilde;ible unha baliza para mostrar unha t&aacute;boa de riso&ntilde;os nos seus esqueletos : #SMILEYS.
_ Dese&ntilde;os : [Sylvain Michel->http://www.guaph.net/]',
	'smileys:nom' => 'Riso&ntilde;os',
	'soft_scroller:description' => 'Ofrece na parte p&uacute;blica do seu web un esvaramento suavizado da p&aacute;xina logo de que o visitante prema sobre unha ligaz&oacute;n que apunte sobre unha &aacute;ncora: resulta moi &uacute;til para evitar perderse nunha p&aacute;xina complexa ou un texto moi longo...

Aviso, esta utilidade precisa para funcionar p&aacute;xinas con &laquo;DOCTYPE XHTML&raquo; (non HTML !) e que haxa dous m&oacute;dulos instalados {jQuery} : {ScrollTo} e {LocalScroll}. A Navalla Su&iacute;za p&oacute;deos instalar directamente se vostede selecciona as opci&oacute;ns seguintes. [[%scrollTo%]][[-->%LocalScroll%]]
@_CS_PLUGIN_JQUERY192@',
	'soft_scroller:nom' => '&Aacute;ncoras suaves',
	'sommaire:description' => '<MODIF>Constr&uacute;e un sumario para os seus artigos e das s&uacute;as secci&oacute;ns co fin de acceder rapidamente  a t&iacute;tulos de alto tama&ntilde;o (balizas HTML &lt;h3>Un intert&iacute;tulo&lt;/h3> ou a atallos de SPIP : intert&iacute;tulos do estilo :<code>{{{Un t&iacute;tulo grande}}}</code>).

@puce@ Pode definir aqu&iacute; o n&uacute;mero m&aacute;ximo de caracteres retidos dos intert&iacute;tulos para constru&iacute;r o sumario:[[%lgr_sommaire% caract&egrave;res]]

@puce@ Pode fixar tam&eacute;n o comportamento do m&oacute;dulo concernente &aacute; creaci&oacute;n do sumario: 
_  Sistematicamente para cada artigo (unha baliza <code>@_CS_SANS_SOMMAIRE@</code> situada en calquera lugar ou no interior do texto do artigo crear&aacute; unha excepci&oacute;n).
_  Unicamente para os artigos que conte&ntilde;an a baliza <code>@_CS_AVEC_SOMMAIRE@</code>.

[[%auto_sommaire%]]

@puce@ De modo predeterminado, A Navalla Su&iacute;za insire o sumario na cabeceira do artigo automaticamente. Vostede ten a posibilidade de situar este sumario no seu esqueleto grazas a unha baliza #CS_SOMMAIRE que pode activar aqu&iacute; :
[[%balise_sommaire%]]

Este sumario pode ser aparellado con : &laquo;&nbsp;[.->decoupe]&nbsp;&raquo;.',
	'sommaire:nom' => 'Un sumario para os seus artigos',
	'sommaire_avec' => 'Un artigo con sumario&nbsp;: <b>@_CS_AVEC_SOMMAIRE@</b>',
	'sommaire_sans' => 'Un artigo sen sumario&nbsp;: <b>@_CS_SANS_SOMMAIRE@</b>',
	'spam:description' => 'Tenta loitar contra os env&iacute;os de mensaxes autom&aacute;ticas e impertinentes na parte p&uacute;blica. Algunhas palabras e as balizas &lt;a>&lt;/a> est&aacute;n prohibidas.

Liste aqu&iacute; as secuencias prohibidas @_CS_ASTER@ separ&aacute;ndoas por espazos. [[%spam_mots%]]
@_CS_ASTER@Para especificar unha palabra enteira, p&oacute;&ntilde;aa entre par&eacute;nteses. Para unha expresi&oacute;n con espazos, sit&uacute;ea entre comas.',
	'spam:nom' => 'Loita contra o SPAM',
	'spip_cache:description' => '@puce@ A cach&eacute; ocupa un certo espazo de disco e SPIP pode limitalo. Un valor baleiro ou igual a 0 significa que non se lle aplica ningunha cota.[[%quota_cache% Mo]]

@puce@ Tras unha modificaci&oacute;n do contido do web, SPIP invalida inmediatamente a cach&eacute; sen agardar ao c&aacute;lculo peri&oacute;dico establecido. Se o seu web ten problemas de rendemento por unha carga moi elevada, pode establecer como &laquo;&nbsp;non&nbsp;&raquo; esta opci&oacute;n.[[%derniere_modif_invalide%]]

@puce@Se a baliza #CACHE non se encontra nos seus esqueletos locais, SPIP considera de modo predeterminado que a cach&eacute; dunha p&aacute;xina ten unha duraci&oacute;n de vida de 24 horas antes de a recalcular. Co fin de xestionar mellor a carga do seu servidor, pode modificar aqu&iacute; este valor.[[%duree_cache% heures]]

@puce@ Se vostede ten varios webs en mutualizaci&oacute;n, pode especificar aqu&iacute; o valor predeterminado tomado en conta por todos os web locais (SPIP 2.0 m&iacute;nimo).[[%duree_cache_mutu% heures]]',
	'spip_cache:description1' => '@puce@ De modo predeterminado, SPIP calcula todas as p&aacute;xinas p&uacute;blicas e col&oacute;caas na cach&eacute; co fin de acelerar a consulta. Desactivar temporariamente a cach&eacute; pode axudar ao desenvolvemento do web. @_CS_CACHE_EXTENSION@[[%radio_desactive_cache3%]]',
	'spip_cache:description2' => '@puce@ Catro opci&oacute;ns para orientar o funcionamento da cach&eacute; de SPIP : <q1>
_  {Uso normal} : SPIP calcula todas as p&aacute;xinas p&uacute;blicas e col&oacute;caas na cach&eacute; co fin de acelerar con iso a consulta. Tras un certo per&iacute;odo, a cach&eacute; recalc&uacute;lasae e almac&eacute;nase.
_  {Cach&eacute; permanente} : os per&iacute;odos de invalidaci&oacute;n da cach&eacute; son ignorados.
_  {Sen cach&eacute;} : desactivar temporariamente a cach&eacute; pode axudar ao desenvolvemento do web. Aqu&iacute;, nada &eacute; gardado no disco.
_  {Control da cach&eacute;} : opci&oacute;n id&eacute;ntica &aacute; precedente, con unha escritura sobre o disco de todos os resultados co fin de poder controlalos eventualmente.</q1>[[%radio_desactive_cache4%]]',
	'spip_cache:nom' => 'SPIP e a memoria cach&eacute;',
	'stat_auteurs' => 'Os estado dos autores',
	'statuts_spip' => 'Unicamente os estados SPIP seguintes :',
	'statuts_tous' => 'Todos os estados',
	'suivi_forums:description' => 'Un autor de artigo ser&aacute; sempre informado cando apareza unha mensaxe no foro p&uacute;blico asociado. Tam&eacute;n &eacute; posible adverter ademais : todoso os participantes no foro ou soamente os autores de mensaxes en fluxo ascendente.[[%radio_suivi_forums3%]]',
	'suivi_forums:nom' => 'Seguimento dos foros p&uacute;blicos',
	'supprimer_cadre' => 'Suprimir este cadro',
	'supprimer_numero:description' => 'Aplique a funci&oacute;n SPIP supprimer_numero() ao conxunto dos {{t&iacute;tulos}} e dos {{nomes}} do web p&uacute;blico, sen que o filtro supprimer_numero estea presente nos esqueletos.<br />Velaqu&iacute; a sintaxe que se vai usar no cadro dun web multiling&uuml;e : <code>1. <multi>O Meu T&iacute;tulo[fr]Mon Titre[de]Mein Titel</multi></code>',
	'supprimer_numero:nom' => 'Suprime o n&uacute;mero',

	// T
	'titre' => 'A Navalla Su&iacute;za',
	'titre_tests' => 'A Navalla Su&iacute;za - P&aacute;xina de tests',
	'tous' => 'Todos',
	'toutes_couleurs' => 'As 36 cores dos estilos css :@_CS_EXEMPLE_COULEURS@',
	'toutmulti:aide' => 'Bloques multiling&uuml;es&nbsp;: <b><:trad:></b>',
	'toutmulti:description' => 'Para instar isto pode facelo xa desde os esqueletos, a utilidade permite usar librementemente nos contidos as cadeas de linguas (bloques multi) de SPIP ou dos seus esqueletos: nos contidos do seu web (artigos, t&iacute;tulos, mensaxes, etc.) coa axuda co atallo <code><:chaine:></code>.

Consulte [aqui->http://www.spip.net/fr_article2128.html] a documentaci&oacute;n de SPIP sobre este asunto.

Esta ferramenta acepta igualmente os argumentos introducidos por SPIP 2.0. Por exemplo, o atallo <code><:mi&ntilde;a_cadea{nome=Charles Martin, idade=37}:></code> permite pasar dous par&aacute;metros &aacute; cadea seguinte: <code>\'mi&ntilde;a_cadea\'=>"Bos d&iacute;as, eu son @nome@ e te&ntilde;o @idade@ anos\\"</code>.

_ A funci&oacute;n SPIP usada en PHP &eacute; : <code>_T(\'chaine\')</code>. sen argumento, e <code>_T(\'chaine\', array(\'arg1\'=>\'un texto\', \'arg2\'=>\'un outro texto\'))</code> con argumentos.

Non esqueza verificar que a clave <code>\'cadea\'</code> est&aacute; ben definida nos ficheiros de lingua.',
	'toutmulti:nom' => 'Bloques multiling&uuml;es',
	'travaux_nom_site' => '@_CS_NOM_SITE@',
	'travaux_prochainement' => 'Este web ser&aacute; restablecido axi&ntilde;a.
_ Grazas pola s&uacute;a comprensi&oacute;n.',
	'travaux_titre' => '@_CS_TRAVAUX_TITRE@',
	'tri_articles:description' => 'En navegando o web na zona privada([->./?exec=auteurs]), escolla aqu&iacute; a ordenaci&oacute;n que usar&aacute; para mostrar os artigos no interior das secci&oacute;ns.

As propostas que seguen est&aacute;n baseadas na funcionalidade SQL \'ORDER BY\' : non empregue unha ordenaci&oacute;n personalizada se non est&aacute; seguro do que est&aacute; a facer (campos dispo&ntilde;&iacute;beis : {id_article, id_rubrique, titre, soustitre, surtitre, statut, date_redac, date_modif, lang, etc.})
[[%tri_articles%]][[->%tri_perso%]]',
	'tri_articles:nom' => 'Ordenaci&oacute;n de artigos',
	'tri_modif' => 'Ordenaci&oacute;n coa data de modificaci&oacute;n (ORDER BY date_modif DESC)',
	'tri_perso' => 'Ordenaci&oacute;n SQL personalizada, ORDER BY segundo a estrutura :',
	'tri_publi' => 'Ordenaci&oacute;n sobre a data de publicaci&oacute;n (ORDER BY date DESC)',
	'tri_titre' => 'Ordenaci&oacute;n sobre o t&iacute;tulo (ORDER BY 0+titre,titre)',
	'type_urls:description' => '<MODIF>@puce@ SPIP ofrece unha elecci&oacute;n entre varios xogos de URL para facer as ligaz&oacute;ns de acceso &aacute;s p&aacute;xinas do seu web :

M&aacute;is info : [->http://www.spip.net/fr_article765.html]
. A ferramenta &laquo;&nbsp;[.->boites_privees]&nbsp;&raquo; permite ver na p&aacute;xina de cada obxecto SPIP o URL propio asociado.
[[%radio_type_urls3%]]
<q3>@_CS_ASTER@para usar os formatos {html}, {proprias} ou {proprias2}, {libres} ou {arborescentes} copie o ficheiro "htaccess.txt" do cartafol ra&iacute;z de SPIP co nome ".htaccess" (preste atenci&oacute;n a non borrar outras regraxes que vostede te&ntilde;a posto nese ficheiro); se o seu web est&aacute; nun subcartafol, deber&aacute; tam&eacute;n editar a li&ntilde;a "RewriteBase" neste ficheiro. Os URL definidos ser&aacute;n logo redirixidos cara aos ficheiros de SPIP.</q3>

<radio_type_urls3 valeur="page">@puce@{{URLs &laquo;p&aacute;xina&raquo;}} : estas son as ligaz&oacute;ns predeterminadas, utilizadas por SPIP desde a s&uacute;a version 1.9x.
_ Exemplo : <code>/spip.php?article123</code>.
[[%terminaison_urls_page%]][[%separateur_urls_page%]]</radio_type_urls3>

<radio_type_urls3 valor="html">@puce@ {{URLs &laquo;html&raquo;}} : as ligaz&oacute;ns te&ntilde;en a forma de p&aacute;xinas html cl&aacute;sicas.
_ Exemplo : <code>/article123.html</code>.</radio_type_urls3>

<radio_type_urls3 valor="propias">@puce@ {{URLs &laquo;propias&raquo;}} : as ligaz&oacute;ns son calculadas conforme o t&iacute;tulo dos obxectos demandados. Os marcadores (_, -, +, etc.) encadran os t&iacute;tulos en funci&oacute;n do tipo de obxecto.
_ Exemplos : <code>/Meu-titulo-de-artigo</code> ou <code>/-Mi&ntilde;a-seccion-</code> ou <code>/@Meu-web@</code>[[%terminaison_urls_propres%]][[%debut_urls_propres%]][[%marqueurs_urls_propres%]]</radio_type_urls3>

<radio_type_urls3 valor="propres2">@puce@ {{URLs &laquo;propres2&raquo;}} : a extensi&oacute;n \'.html\' eng&aacute;dese &aacute;s ligaz&oacute;ns {&laquo;propias&raquo;}.
_ Exemplo : <code>/Meu-titulo-de-artigo.html</code> ou <code>/-Mi&ntilde;a-seccion-.html</code>
[[%debut_urls_propres2%]][[%marqueurs_urls_propres2%]]</radio_type_urls3>

<radio_type_urls3 valor="libres">@puce@ {{URL &laquo;libres&raquo;}} : as ligaz&oacute;ns son {&laquo;propias&raquo;}, mais sen marcadores (_, -, +, etc.).
_ Exemplo : <code>/Meu-titulo-de-artigo</code> ou <code>/Mi&ntilde;a-secci&oacute;n</code>
[[%terminaison_urls_libres%]][[%debut_urls_libres%]]</radio_type_urls3>
<radio_type_urls3 valor="arbo">@puce@ {{URLs &laquo;arborescentes&raquo;}} : as ligaz&oacute;ns {&laquo;propias&raquo;}, mais de tipo arborescente.
_ Exemplo : <code>/sectour/seccion/seccion2/Meu-titulo-de-artigo</code>[[%url_arbo_minuscules%]][[%urls_arbo_sans_type%]][[%url_arbo_sep_id%]][[%terminaison_urls_arbo%]]</radio_type_urls3>

<radio_type_urls3 valeur="propres-qs">@puce@ {{URLs &laquo;propres-qs&raquo;}} : este sistema funciona en "Query-String", &eacute; dicir sen utilizaci&oacute;n .htaccess ; as ligaz&oacute;ns son {&laquo;propias&raquo;}.
_ Exemplo : <code>/?Meu-titulo-de-artigo</code>[[%terminaison_urls_propres_qs%]]</radio_type_urls3>

<radio_type_urls3 valor="propres_qs">@puce@ {{URL &laquo;propias_qs&raquo;}} : este sistema funciona en "Query-String", &eacute; dicir sen utilizaci&oacute;n de .htaccess ; as ligaz&oacute;ns son {&laquo;propias&raquo;}.
_ Exemplo : <code>/?Meu-titulo-de-artigo</code>
[[%terminaison_urls_propres_qs%]][[%marqueurs_urls_propres_qs%]]</radio_type_urls3>

<radio_type_urls3 valor="standard">@puce@ {{URL &laquo;estandar&raquo;}} : estas ligaz&oacute;ns desde agora obsoletas eran empregadas por  SPIP ata a versi&oacute;n 1.8.
_ Exemplo : <code>article.php3?id_article=123</code></radio_type_urls3>

@puce@ Se vostede emprega o formato {p&aacute;xina} seguinte ou se o obxecto demandado non &eacute; reco&ntilde;ecido, &eacute; posible escoller {{o script de chamada }} a SPIP. De modo predeterminado, SPIP escolle {spip.php}, mais {index.php} (exemplo de formato: <code>/index.php?article123</code>) ou un valor baleiro (formato : <code>/?article123</code>) funcionan tam&eacute;n. Para calquera outro valor, c&oacute;mpre crear o ficheiro correspondente na raiz de SPIP, a imaxe daquel que xa existe: {index.php}.
[[%spip_script%]]',
	'type_urls:nom' => 'Formato das URL',
	'typo_exposants:description' => 'Textos franceses : mellora o rendemento tipogr&aacute;fico das abreviaci&oacute;ns correntes, metendo en super&iacute;ndice os elementos necesarios (as&iacute;, {<acronym>Mme</acronym>} produce {M<sup>me</sup>}) e corrixindo os erros correntes ({<acronym>2&egrave;me</acronym>} ou  {<acronym>2me</acronym>}, por exemplo, produce {2<sup>e</sup>}, s&oacute; abreviatura correcta).

As abreviaci&oacute;ns obtidas est&aacute;n conformes con aquelas da Imprenta nacional como constan en {Lexique des r&egrave;gles typographiques en usage &agrave; l\'Imprimerie nationale} (artigo &laquo;&nbsp;Abr&eacute;viations&nbsp;&raquo;, imprentas da Imprimerie nationale, Paris, 2002).
Tam&eacute;n son tratadas as expresi&oacute;ns seguintes: <html>Dr, Pr, Mgr, m2, m3, Mn, Md, St&eacute;, &Eacute;ts, Vve, Cie, 1o, 2o, etc.</html> 

Escolla aqu&iacute; se quere po&ntilde;er en super&iacute;ndice certos atallos suplementarios, malia que sexa desaconsellado pola Imprimerie nationale :[[%expo_bofbof%]]

{{Textos ingleses}} : en super&iacute;ndice os n&uacute;meros ordinaux : <html>1st, 2nd</html>, etc.',
	'typo_exposants:nom' => 'Super&iacute;ndices tipogr&aacute;ficos',

	// U
	'url_arbo' => 'arborescentes@_CS_ASTER@',
	'url_html' => 'html@_CS_ASTER@',
	'url_libres' => 'libres@_CS_ASTER@',
	'url_page' => 'p&aacute;xina',
	'url_propres' => 'propias@_CS_ASTER@',
	'url_propres-qs' => 'propias-qs',
	'url_propres2' => 'propias2@_CS_ASTER@',
	'url_propres_qs' => 'propias_qs',
	'url_standard' => 'est&aacute;ndar',
	'urls_base_total' => 'Hai actualmente @nb@ URL na base',
	'urls_base_vide' => 'A base dos URL est&aacute; baleira',
	'urls_choix_objet' => 'Edici&oacute;n con base no URL dun obxecto espec&iacute;fico&nbsp;:',
	'urls_edit_erreur' => 'O formato actual dos URL (&laquo;&nbsp;@type@&nbsp;&raquo;) non permite a edici&oacute;n.',
	'urls_enregistrer' => 'Rexistrar esta URL na base',
	'urls_nouvelle' => '<MODIF>Editar o URL &laquo;&nbsp;propre&nbsp;&raquo;&nbsp;:',
	'urls_num_objet' => 'N&uacute;mero&nbsp;:',
	'urls_purger' => 'Baleirar todo',
	'urls_purger_tables' => 'Baleirar as t&aacute;boas seleccionadas',
	'urls_purger_tout' => 'Reiniciar os URL gardados na base&nbsp;:',
	'urls_rechercher' => 'Procurar este obxecto na base',
	'urls_titre_objet' => 'T&iacute;tulo rexistrado&nbsp;:',
	'urls_type_objet' => 'Obxecto&nbsp;:',
	'urls_url_calculee' => 'URL p&uacute;blico &laquo;&nbsp;@type@&nbsp;&raquo;&nbsp;:',
	'urls_url_objet' => '<MODIF>URL &laquo;&nbsp;propre&nbsp;&raquo; rexistrado&nbsp;:',
	'urls_valeur_vide' => '(Un valor baleiro provoca a supresi&oacute;n do URL)',

	// V
	'validez_page' => 'Para acceder &aacute;s modificaci&oacute;ns :',
	'variable_vide' => '(Baleiro)',
	'vars_modifiees' => 'Os datos foron correctamente modificados',
	'version_a_jour' => 'A s&uacute;a versi&oacute;n est&aacute; actualizada.',
	'version_distante' => 'Versi&oacute;n remota...',
	'version_distante_off' => 'Comprobaci&oacute;n distante desactivada',
	'version_nouvelle' => 'Nova versi&oacute;n : @version@',
	'version_revision' => 'Revisi&oacute;nn : @revision@',
	'version_update' => 'Actualizaci&oacute;n autom&aacute;tica',
	'version_update_chargeur' => 'Descarga autom&aacute;tica',
	'version_update_chargeur_title' => 'Descarga a &uacute;ltima versi&oacute;n do plugin grazas ao &laquo;T&eacute;l&eacute;chargeur&raquo;',
	'version_update_title' => 'Descarga a &uacute;ltima versi&oacute;n do m&oacute;dulo e lanza a s&uacute;a posta ao d&iacute;a autom&aacute;tica',
	'verstexte:description' => '2 filtros para os seus esqueletos, que permiten producir p&aacute;xinas m&aacute;is lixeiras.
_ version_texte : extrae o contido de texto dunha p&aacute;xina html coa exclusi&oacute;n dalgunhas balizas elementares.
_ version_plein_texte : extrae o contido de texto dunha p&aacute;xina html para manter o texto pleno.',
	'verstexte:nom' => 'Versi&oacute;n de texto',
	'visiteurs_connectes:description' => 'Ofrece un elemento para o seu esqueleto que mostra o n&uacute;mero de visitantes conectados ao web p&uacute;blico.

Engada simplemente<code><INCLURE{fond=fonds/visiteurs_connectes}></code> nas s&uacute;as p&aacute;xinas.',
	'visiteurs_connectes:nom' => 'Visitantes conectados',
	'voir' => 'Ver: @voir@',
	'votre_choix' => 'A s&uacute;a elecci&oacute;n :',

	// W
	'webmestres:description' => 'Un/unha {{webmaster}} no senso de SPIP &eacute; un {{administrador}} que ten acceso ao espazo FTP. De modo predeterminado e a partir de SPIP 2.0, &eacute; o administrador <code>id_auteur=1</code> do web. Os webm&aacute;steres aqu&iacute; definidos te&ntilde;en o privilexio de non estaren obrigados a pasar polo FTP para validar as operaci&oacute;ns sensibles do web, como a actualizaci&oacute;n da base de datos ou a restauraci&oacute;n dun dump.

Webm&aacute;ster(es) actual(is) : {@_CS_LISTE_WEBMESTRES@}.
_ Administrador(es) elixible(s) : {@_CS_LISTE_ADMINS@}.

En tanto que webm&aacute;ster, ten dereito a modificar esta lista de id -- separados por dous puntos &laquo;&nbsp;:&nbsp;&raquo; de seren varios. Exemplo : &laquo;1:5:6&raquo;.[[%webmestres%]]',
	'webmestres:nom' => 'Lista de webm&aacute;sters',

	// X
	'xml:description' => 'Activa o validador xml para o espazo p&uacute;blico tal como se describe na [documentaci&oacute;n->http://www.spip.net/fr_article3541.html]. Un bot&oacute;n titulado &laquo;&nbsp;Analise XML&nbsp;&raquo; foi engadido aos outros bot&oacute;ns de administraci&oacute;n.',
	'xml:nom' => 'Validador XML'
);

?>
