<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_hangarfail');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');



define('WP_HOME','http://10.130.24.77:8888/hangar-fail/');
define('WP_SITEURL','http://10.130.24.77:8888/hangar-fail/');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'bQ5sC.+J%e;0}9F/_GM+YP_Fw]MK5XF|$No!e tV[Z*-6cI2H^5Ug|1}[U>&+{Hd'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '3Qx1yqy[7,mONM/i0KWK.S}j;pv6@3C4A&ww#d~t6 *;B+L&rX_Kd5h|rCo=^#9J'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '|PXY+]+`Hb:ThgIbhJ^3s0%@bO$x(nSpFH*_UQ%6&|I={SZ9%U%Xe/hUS7PeZZA+'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'yuYwZd-u@ml`47yqAMk$WW+|^9f2GxidW(4&m!~xHquq;!zpeBfj#M5u ODSPM/d'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'JA-fPWtbsUx9VcS~#|L@-Ch-[QA3{SJ-JDOk%[7i$0wpJ=<Sq@mB&+%i= @`7Q.y'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'Kh4 Fxu4NOII0&)<_rA=b2O<%h5vk ^<b:||o?qkBH4xFMG@45#GM4[0W!C!jD<s'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '_(Dc765G(!!IcM+N+0hT7=<NcrYXa3hVw{ylGok7M+PI:(_`OS.?$(pB1=nv$8D['); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'Vfiv+2Eu--9:l2iCZCq8+E{;9+OtTTVElh[|6$TPX-fh8rN,OR<P<<$|YrQe)a=w'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

