<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined("_ECRIRE_INC_VERSION")) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// 2
	'2pts_non' => '&nbsp;:&nbsp;no',
	'2pts_oui' => '&nbsp;:&nbsp;s&iacute;',

	// S
	'SPIP_liens:description' => '@puce@ Todos los enlaces del sitio se abren, por omisi&oacute;n, en la ventana actual del navegador. Pero puede ser &uacute;til abrir los enlaces externos en una nueva ventana de navegaci&oacute;n -- esto se reduce a a&ntilde;adir {target="_blank"} en todas las balizas &lt;a&gt; a las que SPIP asigna las clases {spip_out}, {spip_url} o {spip_glossaire}. A veces hace falta a&ntilde;adir una de estas clases a los enlaces del esqueleto del sitio (archivos html) para extender al m&aacute;ximo esta caracter&iacute;stica.[[%radio_target_blank3%]]

@puce@ SPIP permite enlazar palabras con su definici&oacute;n gracias al atajo tipogr&aacute;fico <code>[?palabra]</code>. Por omisi&oacute;n (o si dejas en blanco este cuadro), el glosario externo reenv&iacute;a hacia la enciclopedia libre wikipedia.org. Aqu&iacute; puedes elegir la direcci&oacute;n que se utilizar&aacute;. <br />Enlace de prueba: [?SPIP][[%url_glossaire_externe2%]]',
	'SPIP_liens:nom' => 'SPIP y los enlaces� externos',

	// A
	'acces_admin' => 'Acceso de administradores:',
	'action_rapide' => 'Acci&oacute;n r&aacute;pida, &iexcl;s&oacute;lo si sabes lo que haces!',
	'attente' => 'Espera...',
	'auteur_forum:description' => 'Pide a todos los autores de mensajes p&uacute;blicos que rellenen (&iexcl;al menos con una letra!) el campo &laquo;@_CS_FORUM_NOM@&raquo; para evitar las contribuciones completamente an&oacute;nimas.',
	'auteur_forum:nom' => 'Sin foros an&oacute;nimos',
	'auteurs:description' => 'Esta herramienta configura la apariencia de [la p&aacute;gina de los autores->./?exec=auteurs], en el espacio privado.

@puce@ Define aqu&iacute; el n&uacute;mero m&aacute;ximo de autores que se ver&aacute;n en el cuadro central de la p&aacute;gina de autores. A partir de ah&iacute;, se realiza la compaginaci&oacute;n.[[%max_auteurs_page%]]

@puce@ &iquest;Que estatutos de autores pueden listarse en esta p&aacute;gina?
[[%auteurs_tout_voir%[[->%auteurs_0%]][[->%auteurs_1%]][[->%auteurs_5%]][[->%auteurs_6%]][[->%auteurs_n%]]',
	'auteurs:nom' => 'P&aacute;gina de los autores',

	// B
	'basique' => 'B&aacute;sico',
	'blocs:aide' => '<Bloques Desplegables : <b>&lt;bloc&gt;&lt;/bloc&gt;</b> (alias : <b>&lt;invisible&gt;&lt;/invisible&gt;</b>) et <b>&lt;visible&gt;&lt;/visible&gt;</b>',
	'blocs:description' => '<MODIF>Te permite de crear bloques que pueden hacerse visibles o invisibles al pulsar en su t&iacute;tulo.

@puce@ {{En los textos de SPIP}}: los redactores disponen de las  nuevas balizas &lt;bloc&gt; (o &lt;invisible&gt;) y &lt;visible&gt; para utilizarlas en sus textos as&iacute;: 

<quote><code>
<bloc>
 Un t&iacute;tulo que se puede pulsar
 
 El texto que se esconde/muestra, tras dos saltos de l&iacute;nea...
 </bloc>
</code></quote>

@puce@ {{En los esqueletos}}: dispones de las  nuevas balizas #BLOC_TITRE, #BLOC_DEBUT y #BLOC_FIN que se utilizan as&iacute;: 
<quote><code> #BLOC_TITRE o #BLOC_TITRE{mi_URL}
 Mi t&iacute;tulo
 #BLOC_RESUME    (opcional)
 versi&oacute;n resumida del bloque siguiente
 #BLOC_DEBUT
 Mi bloque desplegable (que contendr&aacute; la URL a la que apunta el t&iacute;tulo si es necesario)
 #BLOC_FIN</code></quote>
 
@puce@ Marcando &laquo;si&raquo; m&aacute;s abajo, la apertura de un bloque causar&aacute; el cierre de los dem&aacute;s bloques de la p&aacute;gina, para tener solamente uno abierto cada vez.[[%bloc_unique%]]
',
	'blocs:nom' => 'Bloques Desplegables',
	'boites_privees:description' => '<MODIF>Todas las cajas descritas a continuaci&oacute;n aparecen en la parte privada.[[%cs_rss%]][[->%format_spip%]][[->%stat_auteurs%]][[->%bp_urls_propres%]]
- {{Las revisiones de la Navaja Suiza}}: un cuadro sobre esta p&aacute;gina de configuraci&oacute;n, que indica las &uacute;ltimas modificaciones efectuadas en el c&oacute;digo del plugin ([Fuente->@_CS_RSS_SOURCE@]).
- {{Los art&iacute;culos en formato SPIP}} : un cuadro desplegable suplementario para tus art&iacute;culos con el fin de ver el c&oacute;digo fuente utilizado por sus autores.
- {{Los autores en cifras}} : un cuadro suplementario en [la p&aacute;gina de los autores->./?exec=auteurs] que indica los 10 &uacute;ltimos conectados y las inscripciones no confirmadas. S&oacute;lo los administradores ven esta informaci&oacute;n.
- {{Ver las URLs propias}} : un cuadro desplegable para cada objeto de contenido (art&iacute;culo, secci&oacute;n, autor, ...) que indica la URL propia asociada, as&iacute; como sus alias eventuales. La herramienta &laquo;&nbsp;[.->type_urls]&nbsp;&raquo; te permite la configuraci&oacute;n de las URLs.',
	'boites_privees:nom' => 'Cajas privadas',
	'bp_urls_propres' => '<MODIF>Ver las URLs propias',

	// C
	'cache_controle' => 'Control de la cach&eacute;',
	'cache_nornal' => 'Uso normal',
	'cache_permanent' => 'Cach&eacute; permanente',
	'cache_sans' => 'Sin cach&eacute;',
	'categ:admin' => '1. Administraci&oacute;n',
	'categ:divers' => '60. Varios',
	'categ:interface' => '10. Interfaz privada',
	'categ:public' => '40. Publicaci&oacute;n',
	'categ:spip' => '50. Balizas, filtros, criterios',
	'categ:typo-corr' => '20. Mejoras en los textos',
	'categ:typo-racc' => '30. Atajos tipogr&aacute;ficos',
	'certaines_couleurs' => 'S&oacute;lo las balizas definidas aqu&iacute;@_CS_ASTER@ :',
	'chatons:aide' => 'Caritas: @liste@',
	'chatons:description' => 'Inserta im&aacute;genes (o caritas para los {chats}) en todos los textos donde aparezca una cadena de tipo <code>:nombre</code>.
_ Esta herramienta reemplaza estos atajos con las im&aacute;genes con el mismo nombre que encuentre en la carpeta plugins/couteau_suisse/img/chatons.',
	'chatons:nom' => 'Caritas',
	'class_spip:description1' => 'Aqu&iacute; puedes definir ciertos atajos de SPIP. Un valor vac&iacute;o equivale a utilizar el valor por omisi&oacute;n.[[%racc_hr%]]',
	'class_spip:description2' => '@puce@ {{Los atajos de SPIP}}.

Aqu&iacute; puedes definir ciertos atajos de SPIP. Un valor vac&iacute;o equivale a utilizar el valor por omisi&oacute;n.[[%racc_hr%]][[%puce%]]',
	'class_spip:description3' => '

{Atenci&oacute;n: si la herramienta &laquo;&nbsp;[.->pucesli]&nbsp;&raquo; est&aacute; activada, el reemplazo del gui&oacute;n &laquo;&nbsp;-&nbsp;&raquo; ya no se efectuar&aacute;; en su lugar se usar&aacute; una lista &lt;ul>&lt;li>.}

SPIP utiliza habitualmente la baliza &lt;h3&gt; para los intert&iacute;tulos. Elige aqu&iacute; otra alternativa: [[%racc_h1%]][[->%racc_h2%]]',
	'class_spip:description4' => '

SPIP ha elegido usar la baliza &lt;strong> para transcribir las negritas. Pero &lt;b> tambi&eacute;n podr&iacute;a ser conveniente, con o sin estilo. A tu elecci&oacute;n:[[%racc_g1%]][[->%racc_g2%]]

SPIP ha elegido usar la baliza &lt;i> para transcribir las it&aacute;licas. Pero &lt;em> tambi&eacute;n podr&iacute;a ser conveniente, con o sin estilo. A tu elecci&oacute;n:[[%racc_i1%]][[->%racc_i2%]]

@puce@ {{Los estilos por omisi&oacute;n de SPIP}}. Hasta la versi&oacute;n 1.92 de SPIP, los atajos tipogr&aacute;ficos produc&iacute;an balizas con el estilo "spip" asignado siempre. Por ejemplo: <code><p class="spip"></code>. Aqu&iacute; puedes definir el estilo de estas balizas en funci&oacute;n de tus hojas de estilo. Un cuadro vac&iacute;o significa que no se aplica ning&uacute;n estilo en particular.
{Atenci&oacute;n: si ciertos atajos (linea horizontal, intert&iacute;tulo, it&aacute;lica, negrita) se han modificado m&aacute;s abajo, los estilos siguientes no se aplicar&aacute;n.}

<q1>
_ {{1.}} Balizas &lt;p&gt;, &lt;i&gt;, &lt;strong&gt; :[[%style_p%]]
_ {{2.}} Balizas &lt;tables&gt;, &lt;hr&gt;, &lt;h3&gt;, &lt;blockquote&gt; y las listas (&lt;ol&gt;, &lt;ul&gt;, etc.) :[[%style_h%]]

Nota: al modificar este segundo estilo, tambi&eacute;n pierdes los estilos est&aacute;ndar de SPIP asociados con estas balizas.</blockquote>',
	'class_spip:nom' => 'SPIP y sus atajos�',
	'code_css' => 'CSS',
	'code_fonctions' => 'Funciones',
	'code_jq' => 'jQuery',
	'code_js' => 'Javascript',
	'code_options' => 'Opciones',
	'code_spip_options' => 'Opciones de SPIP',
	'contrib' => 'M&aacute;s informaci&oacute;n: @url@',
	'couleurs:aide' => 'Asignar colores: <b>[coul]texto[/coul]</b>@fond@ en <b>color</b>= @liste@',
	'couleurs:description' => 'Permite aplicar facilmente des colores a todos los textos del sitio (art&iacute;culos, breves, t&iacute;tulos, foro, �) utilizando balizas de atajo.

Dos ejemplos id&eacute;nticos para cambiar el color del texto:@_CS_EXEMPLE_COULEURS2@

Lo mismo para cambiar el fondo, si la opci&oacute;n de abajo lo permite:@_CS_EXEMPLE_COULEURS3@

[[%couleurs_fonds%]]
[[%set_couleurs%]][[->%couleurs_perso%]]
@_CS_ASTER@El formato de estas balizas personalizadas debe listar colores existentes o definir parejas &laquo;baliza=color&raquo;, todo ello separado por comas. Ejemplos: &laquo;gris, rouge&raquo;, &laquo;suave=jaune, fuerte=rouge&raquo;, &laquo;bajo=#99CC11, alto=brown&raquo; o incluso &laquo;gris=#DDDDCC, rouge=#EE3300&raquo;. Para el primer y el &uacute;ltimo ejemplo, las balizas autorizadas son: <code>[gris]</code> y <code>[rouge]</code> (<code>[fond gris]</code> y <code>[fond rouge]</code> si se permiten los fondos).',
	'couleurs:nom' => 'Todo en colores',
	'couleurs_fonds' => ', <b>[fond&nbsp;coul]texto[/coul]</b>, <b>[bg&nbsp;coul]texto[/coul]</b>',
	'cs_comportement:description' => '@puce@ {{Logs.}} Obtener abundante informaci&oacute;n sobre el funcionamiento de la Navaja Suiza en los archivos {spip.log} que se pueden encontrar en el directorio: {@_CS_DIR_TMP@}[[%log_couteau_suisse%]]

@puce@ {{Opciones de SPIP.}} SPIP ordena los plugins en un orden determinado. Para asegurarse de que la Navaja Suiza sea el primero y gestione desde el principio ciertas opciones de SPIP, marca la opci&oacute;n siguiente. Si los permisos de tu servidor lo permiten, se modificar&aacute; autom&aacute;ticamente el archivo {@_CS_FILE_OPTIONS@} para incluir el archivo {@_CS_DIR_TMP@couteau-suisse/mes_spip_options.php}.
[[%spip_options_on%]]

@puce@ {{Consultas externas.}} La Navaja Suiza verifica regularmente la existencia de una versi&oacute;n m&aacute;s reciente de su c&oacute;digo e informa en su p&aacute;gina de configuraci&oacute;n de una actualizaci&oacute;n que est&eacute; disponible. Si las consultas externas de tu servidor causan problemas, marca la casilla siguiente.[[%distant_off%]]',
	'cs_comportement:nom' => 'Comportamiento de la Navaja Suiza',
	'cs_distant_off' => 'Las comprobaciones de versiones externas',
	'cs_log_couteau_suisse' => 'Los registros detallados de la Navaja Suiza',
	'cs_spip_options_on' => 'Las opciones de SPIP en &laquo;@_CS_FILE_OPTIONS@&raquo;',

	// D
	'decoration:aide' => 'Decoraci&oacute;n: <b>&lt;balise&gt;prueba&lt;/balise&gt;</b>, con <b>balise</b> = @liste@',
	'decoration:description' => 'Nuevos estilos param&eacute;tricos en tus textos, accesibles mediante balizas entre angulares. Ejemplo:
&lt;mibaliza&gt;texto&lt;/mibaliza&gt; o: &lt;mibaliza/&gt;.<br />Define debajo los estilos CSS que necesites, una baliza por l&iacute;nea, seg&uacute;n las sintaxis siguientes:
- {type.mibaliza = mi estilo CSS}
- {type.mibaliza.class = mi clase CSS}
- {type.mibaliza.lang = mi idioma (p. ej: es)}
- {unalias = mibaliza}

El par&aacute;metro {type} puede tomar tres valores:
- {span} : baliza dentro de un p&aacute;rrafo (tipo Inline)
- {div} : baliza que crea un p&aacute;rrafo nuevo (tipo Block)
- {auto} : baliza determinada autom&aacute;ticamente por el plugin

[[%decoration_styles%]]',
	'decoration:nom' => 'Decoraci&oacute;n',
	'decoupe:aide' => 'Bloque de pesta&ntilde;as: <b>&lt;onglets>&lt;/onglets></b><br/>Separador de p&aacute;ginas o de pesta&ntilde;as: @sep@',
	'decoupe:aide2' => 'Alias:&nbsp;@sep@',
	'decoupe:description' => '<MODIF>@puce@ Divide la presentaci&oacute;n p&uacute;blica de un art&iacute;culo en varias p&aacute;ginas mediante una compaginaci&oacute;n autom&aacute;tica. Simplemente sit&uacute;a en tu art&iacute;culo cuatro signos de suma consecutivos (<code>++++</code>) en el lugar donde haya que cortar.

Por omisi&oacute;n, la Navaja Suiza inserta la numeraci&oacute;n de p&aacute;gina en el encabezado y en el pie del art&iacute;culo autom&aacute;ticamente. Pero tienes la posibilidad de situar esta numeraci&oacute;n en otro lugar del esqueleto gracias a la baliza #CS_DECOUPE que puedes activar aqu&iacute;:
[[%balise_decoupe%]]

@puce@ Si utilizas este separador entre las balizas &lt;onglets&gt; y &lt;/onglets&gt; lo que obtienes es un conjunto de pesta&ntilde;as.

En los esqueletos: tienes a tu disposici&oacute;n las nuevas balizas #ONGLETS_DEBUT, #ONGLETS_TITRE y #ONGLETS_FIN.

Esta herramienta puede acoplarse con &laquo;&nbsp;[.->sommaire]&nbsp;&raquo;.',
	'decoupe:nom' => 'Dividir en p&aacute;ginas y pesta&ntilde;as',
	'desactiver_flash:description' => 'Suprime los objetos flash de las p&aacute;ginas de tu sitio y las reemplaza por el contenido alternativo asociado.',
	'desactiver_flash:nom' => 'Desactiva los objetos flash',
	'detail_balise_etoilee' => '{{Atenci&oacute;n}} : Revisa bien el uso que tus esqueletos hacen de las balizas con asteriscos. El procesado con esta herramienta no se aplicar&aacute; sobre: @bal@.',
	'detail_fichiers' => 'Ficheros:',
	'detail_inline' => 'C&oacute;digo en l&iacute;nea:',
	'detail_jquery1' => '{{Atenci&oacute;n}}: esta herramienta necesita el plugin {jQuery} para funcionar con esta versi&oacute;n de SPIP.',
	'detail_jquery2' => 'Esta herramienta necesita la biblioteca {jQuery}.',
	'detail_jquery3' => '{{Atenci&oacute;n}}: esta herramienta necesita el plugin [jQuery para SPIP 1.92->http://files.spip.org/spip-zone/jquery_192.zip] para funcionar correctamente con esta versi&oacute;n de SPIP.',
	'detail_pipelines' => 'Pipelines:',
	'detail_traitements' => 'Procesado:',
	'dossier_squelettes:description' => 'Modifica la carpeta de esqueleto utilizada. Por ejemplo: "esqueletos/miesqueleto". Puedes registrar varias carpetas separ&aacute;ndolas con dos puntos <html>&laquo;&nbsp;:&nbsp;&raquo;</html>. Si se deja vac&iacute;o el siguiente cuadro (o escribiendo "dist"), se usar&aacute; el esqueleto original "dist" proporcionado por SPIP.[[%dossier_squelettes%]]',
	'dossier_squelettes:nom' => 'Carpeta del esqueleto',

	// E
	'effaces' => 'Borrados',
	'en_travaux:description' => 'Permite mostrar un mensaje personalizable durante una fase de mantenimiento en todas las p&aacute;ginas p&uacute;blicas.
[[%message_travaux%]][[%titre_travaux%]][[%admin_travaux%]]',
	'en_travaux:nom' => 'Sitio en mantenimiento',
	'erreur:bt' => '<span style=\\"color:red;\\">Atenci&oacute;n:</span> la barra de tipograf&iacute;as (version @version@) parece antigua.<br />La Navaja Suiza es compatible con una versi&oacute;n superior o igual a @mini@.',
	'erreur:description' => '&iexcl;falta la id en la definici&oacute;n de la herramienta!',
	'erreur:distant' => 'el servidor externo',
	'erreur:jquery' => '<MODIF>{{Note}} : la biblioteca {jQuery} parece estar inactiva para esta p&aacute;gina. Consulta [aqu&iacute;->http://www.spip-contrib.net//La-navaja-suiza] el p&aacute;rrafo sobre las dependencias del plugin.',
	'erreur:js' => 'Parece que ha ocurrido un error de JavaScript en esta p&aacute;gina que impide su buen funcionamiento. Intenta activar JavaScript en tu navegador o desactivar ciertos plugins de SPIP de tu sitio web.',
	'erreur:nojs' => 'JavaScript est&aacute; desactivado en esta p&aacute;gina.',
	'erreur:nom' => '&iexcl;Error!',
	'erreur:probleme' => 'Problema en: @pb@',
	'erreur:traitements' => 'La Navaja Suiza - Error de compilaci&oacute;n en el procesado: &iexcl;mezclar \'typo\' y \'propre\' est&aacute; prohibido!',
	'erreur:version' => 'Esta herramienta no est&aacute; disponible en esta versi&oacute;n de SPIP.',
	'etendu' => 'Extendido',

	// F
	'f_jQuery:description' => 'Impide la instalaci&oacute;n de {jQuery} en el espacio p&uacute;blico para economizar un poco de &laquo;tiempo de m&aacute;quina&raquo;. Esta biblioteca ([->http://jquery.com/]) aporta numerosas facilidades en la programaci&oacute;n con Javascript y puede utilizarse por ciertos plugins. SPIP la utiliza en su espacio privado.

Atenci&oacute;n: algunas herramientas de la Navaja Suiza necesitan las funciones de {jQuery}. ',
	'f_jQuery:nom' => 'Desactivar jQuery',
	'filets_sep:aide' => 'Filetes de Separaci&oacute;n: <b>__i__</b> o <b>i</b> es un n&uacute;mero.<br />Otros filetes disponibles: @liste@',
	'filets_sep:description' => 'Inserta filetes de separaci&oacute;n, personalizables con hojas de estilo, en todos los textos de SPIP.
_ La sintaxis es: "__c&oacute;digo__", donde "c&oacute;digo" representa o bien el n&uacute;mero de identificaci&oacute;n (de 0 a 7) del filete a insertar, relativo al estilo correspondiente, o el nombre de una imagen situada en la carpeta plugins/couteau_suisse/img/filets.',
	'filets_sep:nom' => 'Filetes de Separaci&oacute;n',
	'filtrer_javascript:description' => 'Hay tres modos disponibles Para gestionar la inserci&oacute;n de javascript en los art&iacute;culos:
- <i>jamais</i>: el javascript se rechaza en todo lugar
- <i>d&eacute;faut</i>: el javascript se marca en rojo en el espacio privado
- <i>toujours</i>: el javascript se acepta siempre.

Atenci&oacute;n: en los foros, peticiones, flujos sindicados, etc., la gesti&oacute;n de javascript es <b>siempre</b> en modo seguro.[[%radio_filtrer_javascript3%]]',
	'filtrer_javascript:nom' => 'Gesti&oacute;n de javascript',
	'flock:description' => 'Desactiva el sistema de bloqueo de ficheros neutralizando la funci&oacute;n PHP {flock()}. Ciertos alojamientos web producen problemas graves por causa de un sistema de ficheros inadaptado por falta de sincronizaci&oacute;n. No actives esta herramienta si tu sitio funciona normalmente.',
	'flock:nom' => 'Sin bloqueo de ficheros',
	'fonds' => 'Fondos:',
	'forcer_langue:description' => 'Fuerza el contexto de idioma en los juegos de esqueletos multiling&uuml;es que dispongan de un formulario o de un men&uacute; de idiomas que sepan manejar la cookie de idioma.',
	'forcer_langue:nom' => 'Forzar idioma',
	'format_spip' => 'Art&iacute;culos en formato SPIP',
	'forum_lgrmaxi:description' => 'Por omisi&oacute;n no se limita el tama&ntilde;o de los mensajes del foro. Si se activa esta herramienta, se mostrar&aacute; un mensaje de error cuando alguien quiera publicar un mensaje  de tama&ntilde;o superior al valor especificado, y se rechazar&aacute; el mensaje. Un valor en blanco o igual a 0 significa que no se aplica ning&uacute;n l&iacute;mite.[[%forum_lgrmaxi%]]',
	'forum_lgrmaxi:nom' => 'Tama&ntilde;o de los foros',

	// G
	'glossaire:aide' => 'Un texto sin glosario: <b>@_CS_SANS_GLOSSAIRE@</b>',
	'glossaire:description' => '<MODIF>@puce@ Gesti&oacute;n de un glosario interno ligado a uno o m&aacute;s grupos de palabras-clave. Escribe aqu&iacute; el nombre de los grupos separ&aacute;ndolos mediante dos puntos &laquo;&nbsp;:&nbsp;&raquo;. Si se deja vac&iacute;o el cuadro siguiente (o escribiendo "Glossaire"), se utilizar&aacute; el grupo "Glossaire".[[%glossaire_groupes%]]

@puce@ Para cada palabra, tendr&aacute;s la posibilidad de elegir el n&uacute;mero m&aacute;ximo de enlaces creados en los textos. Cualquier valor nulo o negativo implica que se procesar&aacute;n todas las palabras reconocidas. [[%glossaire_limite% par mot-cl&eacute;]]

@puce@ Se ofrecer&aacute;n dos soluciones para generar la peque&ntilde;a ventana autom&aacute;tica que aparece al pasar el rat&oacute;n por encima. [[%glossaire_js%]]',
	'glossaire:nom' => 'Glosario interno',
	'glossaire_css' => 'Soluci&oacute;n CSS',
	'glossaire_js' => 'Soluci&oacute;n Javascript',
	'guillemets:description' => 'Reemplaza autom&aacute;ticamente las comillas rectas (") por las comillas tipogr&aacute;ficas en el idioma de composici&oacute;n. El reemplazo, transparente para el usuario, no modifica el texto original sino s&oacute;lo su presentaci&oacute;n final.',
	'guillemets:nom' => 'Comillas tipogr&aacute;ficas',

	// H
	'help' => '{{Esta p&aacute;gina s&oacute;lo es accesible para los responsables del sitio.}} Permite la configuraci&oacute;n de las diversas funciones suplementarias aportadas por el plugin &laquo;{{La&nbsp;Navaja&nbsp;Suiza}}&raquo;.',
	'help0' => '{{Esta p&aacute;gina s&oacute;lo es accesible para los responsables del sitio.}}<p>Ofrece acceso a las diferentes funciones suplementarias aportadas por el plugin &laquo;{{La&nbsp;Navaja&nbsp;Suiza}}&raquo;.</p><p>Enlace a la documentaci&oacute;n :<br/>� [La&nbsp;Navaja&nbsp;Suiza->http://www.spip-contrib.net/?article2166]</p><p>Reinicializaci&oacute;n :
_ � [De todo el plugin->@reset@]
</p>',
	'help2' => 'Version local: @version@',
	'help3' => '<p>Enlaces a documentaci&oacute;n:<br/>� [La&nbsp;Navaja&nbsp;Suisza->http://www.spip-contrib.net/La-navaja-suiza]@contribs@</p><p>Reinicializaciones:
_ � [De las herramientas ocultas|Volver al aspecto inicial de esta p&aacute;gina->@hide@]
_ � [De todo el plugin|Volver al estado inicial del plugin->@reset@]@install@
</p>',

	// I
	'icone_visiter:description' => 'Reemplaza la imagen del bot&oacute;n est&aacute;ndar &laquo;Visitar&raquo; (en la esquina superior derecha de esta p&aacute;gina)  por el logo del sitio, si existe.

Para definir el logo, entra en la p&aacute;gina de &laquo;Configuraci&oacute;n de sitio&raquo; pulsando el bot&oacute;n &laquo;Configuraci&oacute;n&raquo;.',
	'icone_visiter:nom' => 'Bot&oacute;n &laquo;Visitar&raquo;',
	'insert_head:description' => 'Activa autom&aacute;ticamente la baliza [#INSERT_HEAD->http://www.spip.net/fr_article1902.html] en todos los esqueletos, tengan o no esta baliza entre &lt;head&gt; y &lt;/head&gt;. Gracias a esta opci&oacute;n, los plugins podr&aacute;n insertar javascript (.js) u hojas de estilo (.css).',
	'insert_head:nom' => 'Baliza #INSERT_HEAD',
	'insertions:description' => 'ATENCI&Oacute;N : &iexcl;&iexcl;herramienta en fase de desarrollo!! [[%insertions%]]',
	'insertions:nom' => 'Correcciones autom&aacute;ticas',
	'introduction:description' => 'Esta baliza situada en los esqueletos se usa, en general, en portada o en las secciones para producir un resumen de los art&iacute;culos, noticias breves, etc.</p>
<p>{{Atenci&oacute;n}} : Antes de activar esta funci&oacute;n, comprueba bien que no exista ninguna otra funci&oacute;n {balise_INTRODUCTION()} en tu esqueleto o en tus plugins, porque entonces la sobrecarga producir&aacute; un error de compilaci&oacute;n.</p>
@puce@ Puedes precisar (en porcentaje respecto al valor utilizado por omisi&oacute;n) la longitud del texto devuelto por la baliza #INTRODUCTION. Un valor nulo o igual a 100 no modifica el aspecto de la introducci&oacute;n utilizando en este caso los siguientes valores por omisi&oacute;n: 500 caracteres para los art&iacute;culos, 300 para las breves y 600 para los foros o las secciones.
[[%lgr_introduction%&nbsp;%]]
@puce@ Por omisi&oacute;n, los puntos de seguir a&ntilde;adidos al resultado de la baliza #INTRODUCTION si el texto es m&aacute;s largo son: <html>&laquo;&amp;nbsp;(�)&raquo;</html>. Puedes precisar aqu&iacute; tu propia cadena de caracteres para indicar al lector que el texto truncado contin&uacute;a.
[[%suite_introduction%]]
@puce@ Si se usa la baliza #INTRODUCTION para resumir un art&iacute;culo, la Navaja Suiza puede fabricar un enlace de hipertexto en los puntos de seguir definidos anteriormente para dirigir al lector hacia el texto original. Por ejemplo: &laquo;Leer el resto del art&iacute;culo�&raquo;
[[%lien_introduction%]]
',
	'introduction:nom' => 'Baliza #INTRODUCTION',

	// J
	'jcorner:description' => '&laquo;Esquinas Bonitas&raquo; es una herramienta que permite modificar f&aacute;cilmente el aspecto de las esquinas de los {{recuadros coloreados}} en la parte p&uacute;blica del sitio web. &iexcl;Todo es posible, o casi!
_ Comprueba el resultado en esta p&aacute;gina: [->http://www.malsup.com/jquery/corner/].

Pon en la lista de m&aacute;s abajo los objetos de tu esqueleto a redondear, utilizando la sintaxis CSS (.class, #id, etc. ). Utiliza el signo &laquo;&nbsp;=&nbsp;&raquo; para especificar la orden jQuery a utilizar y una doble barra (&laquo;&nbsp;//&nbsp;&raquo;) para los comentarios. En ausencia del signo igual, se aplicar&aacute;n esquinas redondeadas (equivalente a: <code>.ma_classe = .corner()</code>).[[%jcorner_classes%]]

Atenci&oacute;n, esta herramienta necesita el plugin {jQuery} : {Round Corners} para funcionar. La Navaja Suiza puede instalarlo directamente si marcas la casilla siguiente. [[%jcorner_plugin%]]',
	'jcorner:nom' => 'Esquinas Bonitas',
	'jcorner_plugin' => '&laquo;&nbsp;Plugin Round Corners&nbsp;&raquo;',
	'jq_localScroll' => 'jQuery.LocalScroll ([demo->http://demos.flesler.com/jquery/localScroll/])',
	'jq_scrollTo' => 'jQuery.ScrollTo ([demo->http://demos.flesler.com/jquery/scrollTo/])',
	'js_defaut' => 'Por omisi&oacute;n',
	'js_jamais' => 'Nunca',
	'js_toujours' => 'Siempre',

	// L
	'label:admin_travaux' => 'Cerrar el sitio p&uacute;blico por:',
	'label:auteurs_tout_voir' => '@_CS_CHOIX@',
	'label:auto_sommaire' => 'Crear un sumario autom&aacute;ticamente:',
	'label:balise_decoupe' => 'Activar la baliza #CS_DECOUPE :',
	'label:balise_sommaire' => 'Activar la baliza #CS_SOMMAIRE:',
	'label:bloc_unique' => 'Un solo bloque abierto en la p&aacute;gina:',
	'label:couleurs_fonds' => 'Permitir los fondos:',
	'label:cs_rss' => 'Activar:',
	'label:debut_urls_libres' => '<:label:debut_urls_propres:>',
	'label:debut_urls_propres' => 'Comienzo de las URLs:',
	'label:debut_urls_propres2' => '<:label:debut_urls_propres:>',
	'label:decoration_styles' => 'Tus balizas de estilo personalizado:',
	'label:derniere_modif_invalide' => 'Recalcular inmediatamente despu&eacute;s de una modificaci&oacute;n:',
	'label:distant_off' => 'Desactivar:',
	'label:dossier_squelettes' => 'Carpeta(s) a utilizar:',
	'label:duree_cache' => 'Duraci&oacute;n de la cach&eacute; local:',
	'label:duree_cache_mutu' => 'Duraci&oacute;n de la cach&eacute; en mutualizaci&oacute;n:',
	'label:expo_bofbof' => 'Escritura como exponentes para: <html>St(e)(s), Bx, Bd(s) y Fb(s)</html>',
	'label:forum_lgrmaxi' => 'Valor (en caracteres):',
	'label:glossaire_groupes' => 'Grupo(s) utilizado(s):',
	'label:glossaire_js' => 'T&eacute;cnica utilizada:',
	'label:glossaire_limite' => 'N&uacute;mero m&aacute;ximo de enlaces creados:',
	'label:insertions' => 'Correcciones autom&aacute;ticas:',
	'label:jcorner_classes' => 'Mejorar las esquinas de las selecciones siguientes:',
	'label:jcorner_plugin' => 'Instalar el siguiente plugin {jQuery}:',
	'label:lgr_introduction' => 'Tama&ntilde;o del resumen:',
	'label:lgr_sommaire' => 'Tama&ntilde;o del sumario (9 a 99):',
	'label:lien_introduction' => 'Puntos de seguir pulsables:',
	'label:liens_interrogation' => 'Proteger las URLs:',
	'label:liens_orphelins' => 'Enlaces pulsables:',
	'label:log_couteau_suisse' => 'Activar:',
	'label:marqueurs_urls_propres' => 'A&ntilde;adir los marcadores que separan los objetos (SPIP>=2.0) :<br/>(ej. : &laquo;&nbsp;-&nbsp;&raquo; para -Mi-secci&oacute;n-, &laquo;&nbsp;@&nbsp;&raquo; para @Mi-sitio@) ',
	'label:marqueurs_urls_propres2' => '<:label:marqueurs_urls_propres:>',
	'label:marqueurs_urls_propres_qs' => '<:label:marqueurs_urls_propres:>',
	'label:max_auteurs_page' => 'Autores por p&aacute;gina:',
	'label:message_travaux' => 'Tu mensaje de mantenimiento:',
	'label:moderation_admin' => 'Validar autom&aacute;ticamente los mensajes de los: ',
	'label:paragrapher' => 'Siempre hacer p&aacute;rrafos:',
	'label:puce' => 'Vi&ntilde;eta gr&aacute;fica p&uacute;blica &laquo;<html>-</html>&raquo;:',
	'label:quota_cache' => 'Valor de la cuota de cach&eacute;:',
	'label:racc_g1' => 'Entrada y salida del cambio a &laquo;<html>{{negrita}}</html>&raquo;:',
	'label:racc_h1' => 'Entrada y salida de un &laquo;<html>{{{intert&iacute;tulo}}}</html>&raquo;:',
	'label:racc_hr' => 'L&iacute;nea horizontal &laquo;<html>----</html>&raquo;:',
	'label:racc_i1' => 'Entrada y salida del cambio a &laquo;<html>{it&aacute;lica}</html>&raquo;:',
	'label:radio_desactive_cache3' => 'Uso de la cach&eacute;:',
	'label:radio_desactive_cache4' => 'Uso de la cach&eacute;:',
	'label:radio_filtrer_javascript3' => '@_CS_CHOIX@',
	'label:radio_set_options4' => '@_CS_CHOIX@',
	'label:radio_suivi_forums3' => '@_CS_CHOIX@',
	'label:radio_target_blank3' => 'Enlaces externos en ventana nueva:',
	'label:radio_type_urls3' => 'Formato de las URLs:',
	'label:scrollTo' => 'Instalar los plugins {jQuery} siguientes:',
	'label:separateur_urls_page' => 'Car&aacute;cter de separaci&oacute;n \'type-id\'<br/>(ej.: ?article-123):',
	'label:set_couleurs' => 'Esquema a utilizar:',
	'label:spam_mots' => 'Secuencias prohibidas:',
	'label:spip_options_on' => 'Incluir:',
	'label:spip_script' => 'Script de llamada:',
	'label:style_h' => 'Tu estilo:',
	'label:style_p' => 'Tu estilo:',
	'label:suite_introduction' => 'Puntos de seguir:',
	'label:terminaison_urls_arbo' => '<:label:terminaison_urls_page:>',
	'label:terminaison_urls_libres' => '<:label:terminaison_urls_page:>',
	'label:terminaison_urls_page' => 'Terminaci&oacute;n de las URLs (ej.: &laquo;.html&raquo;):',
	'label:terminaison_urls_propres' => '<:label:terminaison_urls_page:>',
	'label:terminaison_urls_propres_qs' => '<:label:terminaison_urls_page:>',
	'label:titre_travaux' => 'T&iacute;tulo del mensaje:',
	'label:tri_articles' => 'Tu elecci&oacute;n:',
	'label:url_arbo_minuscules' => 'Conservar los espacios de los t&iacute;tulos en las URLs:',
	'label:url_arbo_sep_id' => 'Car&aacute;cter de separaci&oacute;n \'titre-id\' en caso de duplicidad:<br/>(no utilizar \'/\')',
	'label:url_glossaire_externe2' => 'Enlace al glosario externo:',
	'label:urls_arbo_sans_type' => 'Mostrar el tipo de objeto SPIP en las URLs:',
	'label:webmestres' => 'Lista de los y las webmasters del sitio:',
	'liens_en_clair:description' => 'Pone a tu disposici&oacute;n el filtro: \'liens_en_clair\'. Probablemente tu texto contiene enlaces de hipertexto que no son visibles al imprimir. Este filtro a&ntilde;ade entre corchetes el destino de cada enlace pulsable (enlaces externos o de correo). Atenci&oacute;n: en el modo de impresi&oacute;n (par&aacute;metro \'cs=print\' o \'page=print\' en la url de la p&aacute;gina), esta caracter&iacute;stica se aplica autom&aacute;ticamente.',
	'liens_en_clair:nom' => 'Ver enlaces',
	'liens_orphelins:description' => 'Esta herramienta tiene dos aplicaciones:

@puce@ {{Enlaces correctos}}.

SPIP habitualmente inserta un espacio antes de los signos de interrogaci&oacute;n o de exclamaci&oacute;n, seg&uacute;n la ortograf&iacute;a francesa. Esta herramienta protege el signo de interrogaci&oacute;n en las URLs de tus textos.[[%liens_interrogation%]]

@puce@ {{Enlaces hu&eacute;rfanos}}.

Reemplaza autom&aacute;ticamente todas las URLs escritas como texto por los usuarios (sobre todo en los foros) y que, por lo tanto, no son pulsables, por enlaces de hipertexto en formato SPIP. Por ejemplo: {<html>www.spip.net</html>} se reemplaza por [->www.spip.net].

Puedes elegir el tipo de reemplazo:
_ � {B&aacute;sico}: se reemplazan los enlaces del tipo {<html>http://spip.net</html>} (todos los protocolos) o {<html>www.spip.net</html>}.
_ � {Extendido}: se reemplazan adem&aacute;s los enlaces del tipo {<html>yo@spip.net</html>}, {<html>mailto:micorreo</html>} o {<html>news:misnews</html>}.
[[%liens_orphelins%]]',
	'liens_orphelins:nom' => 'Buenas URLs',

	// M
	'mailcrypt:description' => 'Enmascara todos los enlaces de correo presentes en los textos y los reemplaza por un enlace Javascript que permite activar igual la aplicaci&oacute;n de correo del lector. Esta herramienta antispam intenta impedir que los robots recojan las direcciones electr&oacute;nicas escritas en claro en los foros o en las balizas de tus esqueletos.',
	'mailcrypt:nom' => 'MailCrypt',
	'message_perso' => 'Muchas gracias a los traductores que pasaron por aqu&iacute;. Pat ;-)',
	'moderation_admins' => 'administradores autentificados',
	'moderation_moderee:description' => 'Permite moderar la moderaci&oacute;n de los foros por los usuarios inscritos. [[%moderation_admin%]][[-->%moderation_redac%]][[-->%moderation_visit%]]',
	'moderation_moderee:nom' => 'Moderaci&oacute;n moderada',
	'moderation_redacs' => 'redactores autentificados',
	'moderation_visits' => 'visitantes autentificados',
	'modifier_vars' => 'Modificar estos @nb@ par&aacute;metros',
	'modifier_vars_0' => 'Modificar estos par&aacute;metros',

	// N
	'no_IP:description' => 'Desactiva el mecanismo de registro autom&aacute;tico de las direcciones IP de los visitantes de tu sitio para mantener la confidencialidad: SPIP ya no guardar&aacute; ning&uacute;n n&uacute;mero IP, ni temporalmente durante las visitas (para gestionar las estad&iacute;sticas o alimentar spip.log), ni en los foros (responsabilidad).',
	'no_IP:nom' => 'No almacenar IP',
	'nouveaux' => 'Nuevos',

	// O
	'orientation:description' => '3 nuevos criterios para tus esqueletos : <code>{portrait}</code> (retrato), <code>{carre}</code> (cuadrado) y <code>{paysage}</code> (paisaje). Ideal para la clasificaci&oacute;n de las fotos en funci&oacute;n de su forma.',
	'orientation:nom' => 'Orientaci&oacute;n de las im&aacute;genes',
	'outil_actif' => 'Herramienta activa',
	'outil_activer' => 'Activar',
	'outil_activer_le' => 'Activar la herramienta',
	'outil_cacher' => 'No volver a mostrar',
	'outil_desactiver' => 'Desactivar',
	'outil_desactiver_le' => 'Desactivar la herramienta',
	'outil_inactif' => 'Herramienta inactiva',
	'outil_intro' => '<MODIF>Esta p&aacute;gina lista las funciones que el plugin pone a tu disposici&oacute;n.<br /><br />Pulsando sobre el nombre de los &uacute;tiles de m&aacute;s abajo, los seleccionas y podr&aacute;s cambiar su estado co ayuda del bot&oacute;n central: los &uacute;tiles activados se desactivar&aacute;n y <i>viceversa</i>. Con cada clic, aparece la descripci&oacute;n bajo las listas. Las categor&iacute;as son desplegables y los &uacute;tiles se pueden ocultar. El doble-clic permite cambiar r&aacute;pidamente de herramienta.<br /><br />En la primera utilizaci&oacute;n, se recomienda activar las herramientas una a una, por si acaso apareciese alguna incompatibilidad con tu esqueleto, con SPIP o con otros plugins.<br /><br />Nota: la simple cargar de esta p&aacute;gina recompila el conjunto de herramientas de la Navaja Suiza.',
	'outil_intro_old' => 'Esta interfaz est&aacute; anticuada.<br /><br />Si encuentras problemas para utilizar la <a href=\'./?exec=admin_couteau_suisse\'>nueva interfaz</a>, no dudes en avisarnos en el foro de <a href=\'http://www.spip-contrib.net/?article2166\'>Spip-Contrib</a>.',
	'outil_nb' => '@pipe@: @nb@ &uacute;til',
	'outil_nbs' => '@pipe@ : @nb@ &uacute;tiles',
	'outil_permuter' => '&iquest;Cambiar la herramienta: &laquo; @text@ &raquo;?',
	'outils_actifs' => 'Herramientas activadas:',
	'outils_caches' => 'Herramientas ocultas:',
	'outils_cliquez' => 'Pulsa sobre el nombre de los &uacute;tiles de arriba para ver aqu&iacute; su descripci&oacute;n.',
	'outils_inactifs' => 'Herramientas inactivas:',
	'outils_liste' => 'Lista de herramientas de La Navaja Suiza',
	'outils_permuter_gras1' => 'Cambiar los &uacute;tiles en negrita',
	'outils_permuter_gras2' => '&iquest;Cambiar los @nb@ &uacute;tiles en negrita?',
	'outils_resetselection' => 'Reinicializar la selecci&oacute;n',
	'outils_selectionactifs' => 'Seleccionar todos los &uacute;tiles activos',
	'outils_selectiontous' => 'TODOS',

	// P
	'pack_alt' => 'Ver los par&aacute;metros de configuraci&oacute;n actual',
	'pack_descrip' => 'Tu "Pack de configuraci&oacute;n actual" reune el conjunto de par&aacute;metros de configuraci&oacute;n en actual relativos a la Navaja Suiza: la activaci&oacute;n de los &uacute;tiles y el valor de sus eventuales variables.

Este c&oacute;digo PHP puede situarse en el fichero /config/mes_options.php y a&ntilde;adir&aacute; un enlace de reinicializaci&oacute;n en esta p&aacute;gina "del pack {Pack Actual}". Por supuesto puedes cambiar su nombre m&aacute;s arriba.

Si reinicializas el plugin en pulsando en un pack, la Navaja Suiza volver&aacute; a configurarse autom&aacute;ticamente en funci&oacute;n de los par&aacute;metros predefinidos en el pack.',
	'pack_du' => '� del pack @pack@',
	'pack_installe' => 'Colocaci&oacute;n de un pack de configuraci&oacute;n',
	'pack_titre' => 'Configuraci&oacute;n Actual',
	'par_defaut' => 'Por omisi&oacute;n',
	'paragrapher2:description' => 'La funci&oacute;n SPIP <code>paragrapher()</code> inserta balizas &lt;p&gt; y &lt;/p&gt; en todos los textos desprovistos de p&aacute;rrafo. Para de un ajuste m&aacute;s fino de tus estilos y compaginaciones, tienes la posibilidad de uniformizar el aspecto de los textos de tu sitio.[[%paragrapher%]]',
	'paragrapher2:nom' => 'P&aacute;rrafos',
	'pipelines' => 'Pipelines utilizadas:',
	'pucesli:description' => 'Reemplaza las vi&ntilde;etas &laquo;-&raquo; (gui&oacute;n simple) de los art&iacute;culos por listas anotadas &laquo;-*&raquo; (traducidas en HTML como: &lt;ul>&lt;li>�&lt;/li>&lt;/ul>) cuyo estilo puede personalizars mediante css.',
	'pucesli:nom' => 'Vi&ntilde;etas mejoradas',

	// R
	'raccourcis' => 'Atajos tipogr&aacute;ficos activos de la Navaja Suiza:',
	'raccourcis_barre' => 'Los atajos tipogr&aacute;ficos de la Navaja Suiza',
	'reserve_admin' => 'Acceso reservado a los administradores.',
	'rss_actualiser' => 'Actualizar',
	'rss_attente' => 'Esperando RSS...',
	'rss_desactiver' => 'Desactivar las &laquo; Revisiones de la Navaja Suiza &raquo;',
	'rss_edition' => 'Flujo RSS actualizado el:',
	'rss_source' => 'Origen RSS',
	'rss_titre' => '&laquo;&nbsp;La Navaja Suiza&nbsp;&raquo; en desarrollo:',
	'rss_var' => 'Las revisiones de La Navaja Suiza',

	// S
	'sauf_admin' => 'Todos, salvo los administradores',
	'set_options:description' => 'Selecciona autom&aacute;ticamente el tipo de interfaz privada (simplificada o avanzada) para todos los redactores existentes o futuros y suprime el bot&oacute;n correspondiente de la banda de peque&ntilde;os iconos.[[%radio_set_options4%]]',
	'set_options:nom' => 'Tipo de interfaz privada',
	'sf_amont' => 'Anterior',
	'sf_tous' => 'Todos',
	'simpl_interface:description' => 'Desactiva el men&uacute; de cambio r&aacute;pido del estado de un art&iacute;culo al pasar sobre su icono de color. Esto resulta &uacute;til si buscas obtener una interfaz privada lo m&aacute;s sencilla posible para optimizar el rendimiento del cliente.',
	'simpl_interface:nom' => 'Aligerar la interfaz privada',
	'smileys:aide' => 'Smileys: @liste@',
	'smileys:description' => '<MODIF>Inserta smileys en todos los textos donde aparezca un atajo de tipo <acronym>:-)</acronym>. Ideal para los foros.
_ Hay una baliza disponible para mostrar una tabla de smileys en tus esqueletos: #SMILEYS.
_ Dibujos : [Sylvain Michel->http://www.guaph.net/]',
	'smileys:nom' => 'Smileys',
	'soft_scroller:description' => 'A&ntilde;ade al sitio p&uacute;blico un desplazamiento suave de la p&aacute;gina cuando el visitante hace clic en un enlace que apunta a un ancla: muy &uacute;til para evitar perderse en una p&aacute;gina compleja u en un texto muy largo...

Atenci&oacute;n, para que funcione esta herramienta se necesitan p&aacute;ginas con &laquo;DOCTYPE XHTML&raquo; (&iexcl;no HTML!) y dos plugins {jQuery}: {ScrollTo} y {LocalScroll}. La Navaja Suiza puede instalarlos directamente si marcas las casillas siguientes. [[%scrollTo%]][[->%LocalScroll%]]
@_CS_PLUGIN_JQUERY192@',
	'soft_scroller:nom' => 'Anclas suaves',
	'sommaire:description' => '<MODIF>Construye un sumario para el texto de tus art&iacute;culos y secciones con el fin de acceder r&aacute;pidamente a los intert&iacute;tulos (etiquetas HTML &lt;h3>Un intert&iacute;tulo&lt;/h3> o atajos de SPIP: intert&iacute;tulos de la forma: <code>{{{Un intert&iacute;tulo}}}</code>).

@puce@ Aqu&iacute; puedes definir el n&uacute;mero m&aacute;ximo de caracteres tomados de los intert&iacute;tulos para construir el sumario: [[%lgr_sommaire% caracteres]]

@puce@ Tambi&eacute;n puedes regular el comportamiento del plugin respecto a la creaci&oacute;n de sumario: 
_ � Por sistema para cada art&iacute;culo (una baliza <code>>@_CS_SANS_SOMMAIRE@</code> situada en cualquier lugar del texto del art&iacute;culo crear&aacute; una excepci&oacute;n).
_ � &Uacute;nicamente para los art&iacute;culos que contengan la baliza <code>@_CS_AVEC_SOMMAIRE@</code>.

[[%auto_sommaire%]]

@puce@ Por omisi&oacute;n, la Navaja Suiza inserta el sumario autom&aacute;ticamente en el encabezamiento del art&iacute;culo. Pero tienes la posibilidad situar este sumario en otro lugar de tu esqueleto gracias a una baliza #CS_SOMMAIRE que puedes activar aqu&iacute;:
[[%balise_sommaire%]]

Este sumario puede combinarse con: &laquo;&nbsp;[.->decoupe]&nbsp;&raquo;.',
	'sommaire:nom' => 'Un sumario para tus art&iacute;culos',
	'sommaire_avec' => 'Un texto con sumario: <b>@_CS_AVEC_SOMMAIRE@</b>',
	'sommaire_sans' => 'Un texto sin sumario: <b>@_CS_SANS_SOMMAIRE@</b>',
	'spam:description' => 'Intenta luchar contra los env&iacute;os de mensajes autom&aacute;ticos y malintencionados en la parte p&uacute;blica. Ciertas palabras y las etiquetas &lt;a>&lt;/a> est&aacute;n prohibidas.

Lista aqu&iacute; las secuencias prohibidas@_CS_ASTER@ separ&aacute;ndolas por espacios. [[%spam_mots%]]
@_CS_ASTER@Para especificar una palabra completa, ponla entre par&eacute;ntesis. Para una expresi&oacute;n con espacios, ponla entre comillas.',
	'spam:nom' => 'Lucha contra el SPAM',
	'spip_cache:description' => '@puce@ La cach&eacute; ocupa un cierto espacio en disco y SPIP puede limitar su extensi&oacute;n. Un valor vac&iacute;o o igual a 0 significa que no se aplica ninguna cuota.[[%quota_cache% Mo]]

@puce@ Cuando se hace una modificaci&oacute;n del contenido del sitio, SPIP invalida inmediatamente la cach&eacute; sin esperar el siguiente c&aacute;lculo peri&oacute;dico. Si tu sitio tiene problemas de rendimiento debidos a una carga muy alta, puedes marcar &laquo;&nbsp;no&nbsp;&raquo; en esta opci&oacute;n.[[%derniere_modif_invalide%]

@puce@ Si la baliza #CACHE no se encuentra en tus esqueletos locales, SPIP considera por omisi&oacute;n que la cach&eacute; de una p&aacute;gina tiene un tiempo de vida de 24 horas antes de recalcularla. Para gestionar mejor la carga en tu servidor, puedes modificar este valor aqu&iacute;.[[%duree_cache% heures]]

@puce@ Si tienes varios sitios mutualizados, puedes especificar aqu&iacute; el valor por omisi&oacute;n que se toma para todos los sitios locales (SPIP 2.0 mini).[[%duree_cache_mutu% horas]]',
	'spip_cache:description1' => '@puce@ Por omisi&oacute;n, SPIP calcula todas las p&aacute;ginas p&uacute;blicas y las sit&uacute;a en la cach&eacute; para acelerar la consulta. Desactivar temporalmente la cach&eacute; puede ayudar durante el desarrollo del sitio. @_CS_CACHE_EXTENSION@[[%radio_desactive_cache3%]]',
	'spip_cache:description2' => '@puce@ Cuatro opciones para orientar el funcionamiento de la cach&eacute; de SPIP: <q1>
_ � {Uso normal}: SPIP calcula todas las p&aacute;ginas p&uacute;blicas y las pone en la cach&eacute; para acelerar la consulta. Tras un cierto intervalo, la cach&eacute; se recalcula y se guarda.
_ � {Cach&eacute; permanente}: los intervalos de invalidaci&oacute;n de la cach&eacute; se ignoran.
_ � {Sin cach&eacute;}: desactivar temporalmente la cach&eacute; puede ayudar mientras se desarrolla el sitio. Aqu&iacute;, no se guarda nada en el disco.
_ � {Control de la cach&eacute;}: opci&oacute;n id&eacute;ntica a la anterior, con escritura en el disco de todos los resultados para poder controlarlos si hace falta.</q1>[[%radio_desactive_cache4%]]',
	'spip_cache:nom' => 'SPIP y la cach&eacute;�',
	'stat_auteurs' => 'Estado de los autores',
	'statuts_spip' => '&Uacute;nicamente los siguientes estados SPIP:',
	'statuts_tous' => 'Todos los estados',
	'suivi_forums:description' => 'El autor de un art&iacute;culo siempre es informado cuando se publique un mensaje en el foro p&uacute;blico asociado. Pero es posible avisar adem&aacute;s: a todos los participantes en el foro, o solamente a los autores de los mensajes previos del hilo.[[%radio_suivi_forums3%]]',
	'suivi_forums:nom' => 'Seguimiento de los foros p&uacute;blicos',
	'supprimer_cadre' => 'Suprimir este cuadro',
	'supprimer_numero:description' => 'Aplica la funci&oacute;n SPIP supprimer_numero() al conjunto de {{t&iacute;tulos}}  de {{nombres}} del sitio p&uacute;blico, sin que el filtro supprimer_numero est&eacute; presente en los esqueletos.<br />Esta es la sintaxis a utilizar en el caso de un sitio multiling&uuml;e: <code>1. <multi>Mi T&iacute;tulo[en]My Title[fr]Mon Titre[de]Mein Titel</multi></code>',
	'supprimer_numero:nom' => 'Suprime el n&uacute;mero',

	// T
	'titre' => 'La Navaja Suiza',
	'titre_tests' => 'La Navaja Suiza - P&aacute;gina de pruebas�',
	'tous' => 'Todos',
	'toutes_couleurs' => 'Los 36 colores de los estilos css: @_CS_EXEMPLE_COULEURS@',
	'toutmulti:aide' => 'Bloques multiling&uuml;es: <b><:trad:></b>',
	'toutmulti:description' => 'Del mismo modo que puedes hacer en los esqueletos, esta herramienta te permite utilizar libremente las cadenas de idioma (de SPIP o de tus esqueletos) en todos los contenidos del sitio (art&iacute;culos, t&iacute;tulos, mensajes, etc.) con ayuda del atajo <code><:cadena:></code>.

Consulta [aqu&iacute; ->http://www.spip.net/es_article2247.html] la documentaci&oacute;n de SPIP sobre el tema.

Esta herramienta tambi&eacute;n acepta argumentos introducidos por SPIP 2.0. Por ejemplo, el atajo <code><:cadena{nombre=Jos&eacute; Garc&iacute;a, edad=37}:></code> permite pasar dos par&aacute;metros en la cadena siguiente: <code>\'cadena\'=>"Hola, soy @nombre@ y tengo @edad@ a&ntilde;os\\"</code>.

La funci&oacute;n de SPIP utilizada en PHP es  <code>_T(\'cadena\')</code> sin argumentos, y <code>_T(\'cadena, array(\'arg1\'=>\'un texto\', \'arg2\'=>\'otro texto\'))</code> con argumentos.

No te olvides de verificar que la clave <code>\'cadena\'</code> est&eacute; bien definida en los ficheros de idiomas. ',
	'toutmulti:nom' => 'Bloques multiling&uuml;es',
	'travaux_nom_site' => '@_CS_NOM_SITE@',
	'travaux_prochainement' => 'Este sitio se reactivar&aacute; en breve.
_ Gracias por la comprensi&oacute;n.',
	'travaux_titre' => '@_CS_TRAVAUX_TITRE@',
	'tri_articles:description' => 'Elige aqu&iacute; la ordenaci&oacute;n que se usar&aacute; para mostrar tus art&iacute;culos dentro de las secciones cuando navegues por la parte privada del sitio ([->./?exec=auteurs]).

Las propuestas siguientes se basan en la funci&oacute;n SQL \'ORDER BY\': utiliza la ordenaci&oacute;n personalizada s&oacute;lo si sabes muy bien lo que haces (campos disponibles: {id_article, id_rubrique, titre, soustitre, surtitre, statut, date_redac, date_modif, lang, etc.})
[[%tri_articles%]][[->%tri_perso%]]',
	'tri_articles:nom' => 'Ordenaci&oacute;n de los art&iacute;culos',
	'tri_modif' => 'Ordenar por fecha de modificaci&oacute;n (ORDER BY date_modif DESC)',
	'tri_perso' => 'Ordenaci&oacute;n SQL personalizada, ORDER BY seguido por:',
	'tri_publi' => 'Ordenar por fecha de publicaci&oacute;n (ORDER BY date DESC)',
	'tri_titre' => 'Ordenar por t&iacute;tulo (ORDER BY 0+titre,titre)',
	'type_urls:description' => '<MODIF>@puce@ SPIP te permite elegir entre varios tipos de URLs para crear los enlaces de acceso a las p&aacute;ginas de tu sitio:

M&aacute;s informaci&oacute;n: [->http://www.spip.net/es_article2024.html]. La utilidad &laquo;&nbsp;[.->boites_privees]&nbsp;&raquo; te permite ver en la p&aacute;gina de cada objeto SPIP la URL propia asociada.
[[%radio_type_urls3%]]
<q3>@_CS_ASTER@para utilizar los formatos {html}, {propre}, {propre2}, {libres} o {arborescentes}, copia el archivo "htaccess.txt" de la carpeta base del sitio SPIP y ponle el nombre ".htaccess" (primero haz una copia de seguridad, y ten cuidado para no borrar otros ajustes que podr&iacute;as haber puesto en ese archivo); si tu sitio est&aacute; como "subdirectorio", tendr&aacute;s que editar tambi&eacute;n la l&iacute;nea "RewriteBase" de ese fichero. Las URLs definidas ahora se redirigir&aacute;n hacia los ficheros de SPIP.</q3>

<radio_type_urls3 valeur="page">@puce@ {{URLs &laquo;page&raquo;}}: son los enlaces por omisi&oacute;n, utilizados por SPIP desde su versi&oacute;n 1.9x.
_ Ejemplo: <code>/spip.php?article123</code>[[%terminaison_urls_page%]][[%separateur_urls_page%]]</radio_type_urls3>

<radio_type_urls3 valeur="html">@puce@ {{URLs &laquo;html&raquo;}}: los enlaces tienen forma de p&aacute;ginas html cl&aacute;sicas.
_ Ejemplo: <code>/article123.html</code></radio_type_urls3>

<radio_type_urls3 valeur="propres">@puce@ {{URLs &laquo;propres&raquo;}}: los enlaces se calculan mediante el t&iacute;tulo de los objetos solicitados. Los t&iacute;tulos se rodean con marcadores (_, -, +, @, etc.) en funci&oacute;n del tipo de objeto.
_ Ejemplos: <code>/Mi-titulo-de-articulo</code> o <code>/-Mi-seccion-</code> o <code>/@Mi-sitio@</code>[[%terminaison_urls_propres%]][[%debut_urls_propres%]][[%marqueurs_urls_propres%]]</radio_type_urls3>

<radio_type_urls3 valeur="propres2">@puce@ {{URLs &laquo;propres2&raquo;}}: se a&ntilde;ade la extension \'.html\' a los enlaces {&laquo;propres&raquo;}.
_ Ejemplo: <code>/Mi-titulo-de-articulo.html</code> o <code>/-Mi-seccion-.html</code>
[[%debut_urls_propres2%]][[%marqueurs_urls_propres2%]]</radio_type_urls3>

<radio_type_urls3 valeur="libres">@puce@ {{URLs &laquo;libres&raquo;}}: los enlaces son {&laquo;propres&raquo;}, pero sin marcadores separando los objetos (_, -, +, @, etc.).
_ Ejemplo: <code>/Mi-titulo-de-articulo</code> o <code>/Mi-seccion</code>
[[%terminaison_urls_libres%]][[%debut_urls_libres%]]</radio_type_urls3>

<radio_type_urls3 valeur="arbo">@puce@ {{URLs &laquo;arborescentes&raquo;}}: los enlaces son {&laquo;propres&raquo;}, pero de tipo ramificado.
_ Ejemplo: <code>/sector/seccion1/seccion2/Mi-titulo-de-articulo</code>
[[%url_arbo_minuscules%]][[%urls_arbo_sans_type%]][[%url_arbo_sep_id%]][[%terminaison_urls_arbo%]]</radio_type_urls3>

<radio_type_urls3 valeur="propres-qs">@puce@ {{URLs &laquo;propres-qs&raquo;}}: este sistema funciona en "Query-String", es decir, sin utilizar .htaccess ; los enlaces son {&laquo;propres&raquo;}.
_ Ejemplo: <code>/?Mi-titulo-de-articulo</code>
[[%terminaison_urls_propres_qs%]]</radio_type_urls3>

<radio_type_urls3 valeur="propres-qs">@puce@ {{URLs &laquo;propres-qs&raquo;}}: este sistema funciona en "Query-String", es decir, sin utilizar .htaccess ; los enlaces son {&laquo;propres&raquo;}.
_ Ejemplo: <code>/?Mi-titulo-de-articulo</code>
[[%terminaison_urls_propres_qs%]][[%marqueurs_urls_propres_qs%]]</radio_type_urls3>

<radio_type_urls3 valeur="standard">@puce@ {{URLs &laquo;standard&raquo;}}: estos enlaces, que ya son obsoletos, se utilizaron por SPIP hasta su versi&oacute;n 1.8.
_ Ejemplo: <code>article.php3?id_article=123</code></radio_type_urls3>

@puce@ Si utilizas el formato {page} de m&aacute;s arriba o si no se reconoce el objeto solicitado, te ser&aacute; posible elegir {{el script de llamada}} a SPIP. Por omisi&oacute;n, SPIP usa {spip.php}; pero {index.php} (ejemplo de formato: <code>/index.php?article123</code>) o un valor nulo (formato: <code>/?article123</code>) tambi&eacute;n funcionan. Para cualquier otro valor, te ser&aacute; absolutamente necesario crear el fichero correspondiente en la ra&iacute;z de SPIP, a imagen del que ya existe: {index.php}.
[[%spip_script%]]',
	'type_urls:nom' => 'Formato de las URLs',
	'typo_exposants:description' => '{{Textos en franc&eacute;s}}: mejora la presentaci&oacute;n tipogr&aacute;fica de las abreviaturas corrientes, poniendo como super&iacute;ndices los elementos necesarios (as&iacute;, {<acronym>Mme</acronym>} se transforma en {M<sup>me</sup>}) y corrigiendo los errores comunes ({<acronym>2&egrave;me</acronym>} o  {<acronym>2me</acronym>}, por ejemplo, se transforman en {2<sup>e</sup>}, &uacute;nica abreviatura correcta).

Las abreviaturas obtenidas son conformes con las de la Imprenta nacional francesa, tal como se indican en el {Lexique des r&egrave;gles typographiques en usage &agrave; l\'Imprimerie nationale} (art&iacute;culo &laquo;&nbsp;Abr&eacute;viations&nbsp;&raquo;, presses de l\'Imprimerie nationale, Paris, 2002).

Tambi&eacute;n se procesan las expresiones siguientes: <html>Dr, Pr, Mgr, m2, m3, Mn, Md, St&eacute;, &Eacute;ts, Vve, Cie, 1o, 2o, etc.</html>

Aqu&iacute; puedes escoger escribir como super&iacute;ndices otras abreviaturas suplementarias, que se desaconsejan por l\'Imprimerie nationale :[[%expo_bofbof%]]

{{Textos en ingl&eacute;s}}: paso a super&iacute;ndice de los n&uacute;meros ordinales: <html>1st, 2nd</html>, etc.',
	'typo_exposants:nom' => 'Abreviaturas tipogr&aacute;ficas',

	// U
	'url_arbo' => 'arborescentes@_CS_ASTER@',
	'url_html' => 'html@_CS_ASTER@',
	'url_libres' => 'libres@_CS_ASTER@',
	'url_page' => 'p&aacute;gina',
	'url_propres' => 'propres@_CS_ASTER@',
	'url_propres-qs' => 'propres-qs',
	'url_propres2' => 'propres2@_CS_ASTER@',
	'url_propres_qs' => 'propres_qs',
	'url_standard' => 'standard',
	'urls_base_total' => 'Actualmente hay @nb@ URL(s) en la base',
	'urls_base_vide' => 'La base de datos de URLs est&aacute; vac&iacute;a',
	'urls_choix_objet' => 'Edici&oacute;n basada en la URL de un objeto espec&iacute;fico:',
	'urls_edit_erreur' => 'El formato actual de las URLs (&laquo;&nbsp;@type@&nbsp;&raquo;) no permite la edici&oacute;n.',
	'urls_enregistrer' => 'Grabar esta URL en la base',
	'urls_nouvelle' => '<MODIF>Editar la URL &laquo;propia&raquo;:',
	'urls_num_objet' => 'N&uacute;mero:',
	'urls_purger' => 'Vaciar todo',
	'urls_purger_tables' => 'Vaciar las tablas seleccionadas',
	'urls_purger_tout' => 'Reinicializar las URLs guardadas en la base:',
	'urls_rechercher' => 'Buscar este objeto en la base',
	'urls_titre_objet' => 'T&iacute;tulo grabado:',
	'urls_type_objet' => 'Objeto:',
	'urls_url_calculee' => 'URL p&uacute;blica &laquo;&nbsp;@type@&nbsp;&raquo;:',
	'urls_url_objet' => '<MODIF>URL &laquo;propia&raquo; grabada:',
	'urls_valeur_vide' => '(Un valor vac&iacute;o implica la supresi&oacute;n de la URL)',

	// V
	'validez_page' => 'Para acceder a las modificaciones:',
	'variable_vide' => '(Vac&iacute;o)',
	'vars_modifiees' => 'Los datos se han modificado correctamente',
	'version_a_jour' => 'Tu versi&oacute;n est&aacute; actualizada.',
	'version_distante' => 'Versi&oacute;n distante...',
	'version_distante_off' => 'Comprobaci&oacute;n externa desactivada',
	'version_nouvelle' => 'Nueva versi&oacute;n: @version@',
	'version_revision' => 'Revisi&oacute;n: @revision@',
	'version_update' => 'Actualizaci&oacute;n autom&aacute;tica',
	'version_update_chargeur' => 'Descarga autom&aacute;tica',
	'version_update_chargeur_title' => 'Descargar la &uacute;ltima versi&oacute;n del plugin mediante el plugin &laquo;Descargador&raquo;',
	'version_update_title' => 'Descarga la &uacute;ltima versi&oacute;n del plugin y efect&uacute;a su actualizaci&oacute;n autom&aacute;tica',
	'verstexte:description' => '2 filtros para tus esqueletos, que permiten producir p&aacute;ginas m&aacute;s ligeras.
_ version_texte : extrae el texto contenido en una p&aacute;gina html excluyendo algunas balizas elementales.
_ version_plein_texte : extrae el texto contenido en una p&aacute;gina html para mostrarlo como texto puro.',
	'verstexte:nom' => 'Versi&oacute;n texto',
	'visiteurs_connectes:description' => 'A&ntilde;ade un fragmento a tu esqueleto que muestra el n&uacute;mero de visitantes conectados en el sitio p&uacute;blico.

A&ntilde;ade sencillamente <code><INCLURE{fond=fonds/visiteurs_connectes}></code> en tus p&aacute;ginas.',
	'visiteurs_connectes:nom' => 'Visitantes conectados',
	'voir' => 'Ver: @voir@',
	'votre_choix' => 'Tu elecci&oacute;n:',

	// W
	'webmestres:description' => 'Un {{webmaster}} en el sentido de SPIP es un {{administrador}} que tiene acceso al espacio FTP. Por omisi&oacute;n, y a partir de SPIP 2.0, el administrador es el <code>id_auteur=1</code> del sitio. Los webmasters definidos aqu&iacute; tienen el privilegio de no estar obligados a pasar por el FTP para validar las operaciones delicadas del sitio, como la actualizaci&oacute;n de la base de datos o la restauraci&oacute;n de un volcado.

Webmaster(s) actual(es): {@_CS_LISTE_WEBMESTRES@}.
_ Administrador(es) elegible(s): {@_CS_LISTE_ADMINS@}.

Al ser webmaster tu mismo, aqu&iacute; tienes permisos para modificar esta lista de ids -- separadas por dos puntos &laquo;&nbsp;:&nbsp;&raquo; si son varias. Ejemplo: &laquo;1:5:6&raquo;.[[%webmestres%]]',
	'webmestres:nom' => 'Lista de webmasters',

	// X
	'xml:description' => 'Activa el validador de xml para el espacio p&uacute;blico como se describe en la [documentaci&oacute;n->http://www.spip.net/fr_article3541.html]. Se a&ntilde;ade un bot&oacute;n titulado &laquo;&nbsp;An&aacute;lisis XML&nbsp;&raquo; a los botones de administraci&oacute;n.',
	'xml:nom' => 'Validador de XML'
);

?>
