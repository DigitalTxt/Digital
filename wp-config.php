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
define('DB_NAME', 'txt-site2018');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'user-site2018');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'dpXv411*');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '70.32.106.136');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ';?J zBkGeRE!kmruPeA.6>DHh_S<h%<f;7:$Z{4{D wf%=.IDsWkA&arQdsREiB)');
define('SECURE_AUTH_KEY', 'n,#8s{]R}VM?AvBlo8u9#b9(CP4+I45>9[a2jJ]qnr}A_^!m~oHPE~=K:@yWG9%_');
define('LOGGED_IN_KEY', '<4M{yKDY]E~I*1L91cqERw]BQYVHQRIfB5doD3OlHol>r:_p@hLQMEy#o>8~Rt6~');
define('NONCE_KEY', 'v~~>Z`r?w[Q:S}3]~zmPY{34e&OH4^z q8/,U`jI@JxLG:q;JO9FCNNs#RiEi[IH');
define('AUTH_SALT', '.6{AqQOFp>.r2u4r}:62%Wqp4NaOM_.E.bpr%atgx/vRzy9AaCh&HZ6kR5+U~n(b');
define('SECURE_AUTH_SALT', '$&(usvBs3Yf+Ri/{~0L=p:r<k :eBW[C`DA_EtPCUhO 2iej)zKf?.k%JEA)r4jB');
define('LOGGED_IN_SALT', 'c!oFLl%p6PqS6Ft kFul^%Rgyap7oRB&;9m|hZ|SyZB.1z_n:gdaW.9~vLOJ}Wi~');
define('NONCE_SALT', 'oe3Z,.:T.MV+:ydu? ]i| 6mC7!cciav,z=Ca90kBEBLpwTvrk/?)fKOZ5*uPLsF');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'txt_';


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

