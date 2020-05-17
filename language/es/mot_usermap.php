<?php
/**
*
* @package Usermap v0.5.x
* @copyright (c) 2020 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'PLURAL_RULE'					=> 1,
	// Module
	'USERMAP'						=> 'Mapa del Usuario',
	'USERMAP_NOT_AUTHORIZED'		=> 'No estás autorizado para ver el Mapa del Usuario.',
	'USERMAP_SEARCHFORM'			=> 'Formulario de búsqueda',
	'USERMAP_LEGEND'				=> 'Leyenda',
	'USERMAP_CREDENTIALS'			=> 'Las georeferencias usadas por Mapa del Usuario son cortesía de ',
	'USERMAP_LEGEND_TEXT'			=> 'Haz zoom utilizando los botones de enfoque.',
	'MAP_USERS'						=> array(
		1	=> 'Actualmente hay %1$s miembro mostrado en el mapa.',
		2	=> 'Actualmente hay %1$s miembros mostrados en el mapa.',
	),
	'MAP_SEARCH'					=> 'Buscar miembros en el código postal %1$s en un rango de ',
	'MAP_RESULT'					=> 'muestra el siguiente resultado: ',
	'MAP_NORESULT'					=> 'No se encontraron miembros dentro del rango de ',
	// ACP
	'ACP_USERMAP'					=> 'Mapa del Usuario',
	'ACP_USERMAP_SETTINGS'			=> 'Opciones',
	'ACP_USERMAP_SETTINGS_EXPLAIN'	=> 'Aquí es donde personalizas tu Mapa del Usuario.',
	'ACP_USERMAP_SETTING_SAVED'		=> 'Configuración para el Mapa del Usuario guardada con éxito.',
	'ACP_USERMAP_MAPSETTING_TITLE'	=> 'Configuraciones del mapa',
	'ACP_USERMAP_MAPSETTING_TEXT'	=> 'Centro y enfoque al inicio del Mapa del Usuario.',
	'ACP_USERMAP_LAT'				=> 'Latitud del centro del mapa',
	'ACP_USERMAP_LAT_EXP'			=> 'Valores entre 90.0 (Polo Norte) y -90.0 (Polo Sur)',
	'ACP_USERMAP_LON'				=> 'Longitud del centro del mapa',
	'ACP_USERMAP_LON_EXP'			=> 'Valores entre 180.0 (Este) y -180.0 (Oeste)',
	'ACP_USERMAP_ZOOM'				=> 'Zoom inicial del Mapa del Usuario',
	'ACP_USERMAP_GEONAMES_TITLE'	=> 'Nombre de usuario para geonames.org',
	'ACP_USERMAP_GEONAMES_TEXT'		=> 'Mapa del Usuario se basa en los servicios de geonames.org para obtener las coordenadas geográficas de la ubicación del miembro identificado por el código postal y el país, además de la ubicación proporcionada en el perfil del miembro.
										Por lo tanto hay que registrarse en
										<a href="http://www.geonames.org/login" target="_blank">
										<span style="text-decoration: underline;">geonames.org/login</span></a>
										de forma obligatoria. El nombre de usuario registrado debe de ingresarse aquí.<br>
										Cada solicitud cuesta 1 crédito, con el servicio gratuito está limitado a un máximo de
										1,000 crédito por hora; si tienes un foro con más de 1,000 miembros se recomienda
										registrar un usuario por 1,000 a 1,500 miembros. De lo contrario, tus usuarios puede que vean un
										mensaje de error al ingresar sus datos de perfil (código postal y país).<br>
										Múltiples nombres de usuario deben estar separados por comas.<br>
										¡ATENCIÓN: debes habilitar (activar) el servicio deseado después del primer inicio de sesión
										en geonames.org usando el enlace con su "nombre de usuario"!',
	'ACP_USERMAP_GEONAMESUSER'		=> 'Nombre(s) de usuario(s) para geonames.org',
	'ACP_USERMAP_GEONAMESUSER_ERR'	=> '¡Es obligatorio proporcionar al menos un nombre de usuario válido para geonames.org!',
	'ACP_USERMAP_PROFILE_ERROR'		=> 'Esta acción no pudo concluirse con éxito ya que no se proporcionó un usuario de Geonames.org en la pestaña de configuración de Mapa de usuario. ¡Por favor hazlo inmediatamente!',
	'ACP_USERMAP_LANGS'				=> 'Paquetes de idiomas',
	'ACP_USERMAP_LANGS_EXPLAIN'		=> 'Aquí es donde puedes instalar los paquetes de idiomas adicionales para el Mapa del Usuario. Esto puede ser necesario después de agregar
										paquetes de idiomas para el Mapa del Usuario después de su primera activación porque los datos no han sido
										incorporados en la lista desplegable para seleccionar el país; esto puedes hacerlo aquí después de cargar el paquete de idioma
										con un programa ftp en el subdirectorio <italic>language</italic>  de esta extensión.',
	'ACP_USERMAP_INSTALLABLE_LANG'	=> 'Paquetes de idiomas listos para la instalación',
	'ACP_USERMAP_INSTALL_LANG_EXP'	=> 'Paquetes de idioma de Mapa del Usuario esperando para instalarse.',
	'ACP_USERMAP_MISSING_LANG'		=> 'Paquetes de idiomas faltantes',
	'ACP_USERMAP_MISSING_LANG_EXP'	=> 'Idiomas instalados dentro del foro pero que faltan en la extensión de Mapa del Usuario.',
	'ACP_USERMAP_ADDITIONAL_LANG'	=> 'Paquetes de idiomas adicionales para Mapa del Usuario',
	'ACP_USERMAP_ADD_LANG_EXP'		=> 'Paquetes de idiomas de la extensión para los que no existe ningún idioma dentro de este foro.',
	'ACP_USERMAP_LANGPACK_NAME'		=> 'Nombre',
	'ACP_USERMAP_LANGPACK_LOCAL'	=> 'Nombre local',
	'ACP_USERMAP_LANGPACK_ISO'		=> 'ISO',
	'ACP_USERMAP_NO_ENTRIES'		=> 'No se han encontrado paquetes de idiomas',
	// UCP
	'MOT_ZIP'						=> 'Código Postal',
	'MOT_ZIP_EXP'					=> 'Por favor ingresa el código postal de tu ubicación para ser listado en el Mapa del Usuario.<br>(Solo mayúsculas, números y guiones)',
	'MOT_LAND'						=> 'País',
	'MOT_LAND_EXP'					=> 'Por favor selecciona el país dondes vives para ser listado en el Mapa del Usuario.',
	'MOT_UCP_GEONAMES_ERROR'		=> '¡El administrador no proporcionó un usuario de Geonames.org, por lo tanto, no se pudieron recuperar los datos del mapa de usuario!',
));
