<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_base' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qH,o!J cyZm3h,|h |r6G$37|oGww-$f:$4;.@SaxEh}Xfr)O?e*iC)66$`Jyhjh' );
define( 'SECURE_AUTH_KEY',  ',VM/X0AHOeO*swOyc1HR4#e.cu-u^mo*a>A4tfc%f?sPSzZ10Csr^1d]U0Yb^D4L' );
define( 'LOGGED_IN_KEY',    '2Yc=T?bkW~Fmz07mS#b~ny7B9%]&?yLFd+6,(d]Kt+5 >b7Ny.S,=N=U;H@e5p2Q' );
define( 'NONCE_KEY',        '&aLx<2g-bNh8(b9q#YPFX23W@x}q)h8&QGMQ>&Y1no>05P-oHM#a[K#tr)kq3C4U' );
define( 'AUTH_SALT',        'y]fwtOqz[[wx[}yxDJ8x1h?yDZJ;<iC?.@LwYy}q;cpc%8.EL_J/SlH,>Me5_GL/' );
define( 'SECURE_AUTH_SALT', 'CTKm.63)2C+^wUlL>kI/o>-1m^!]]eTe9lS2}p-O{PP8LHX?pVztmB_%:Y.DA90}' );
define( 'LOGGED_IN_SALT',   'yZ/GHfp<Nl*$wO`/;-72vO<yOsvGB-T_bDo-qg}t)dBI3*8GY;JG1)JS^Zr]YDl_' );
define( 'NONCE_SALT',       '*Ea,AUH<#WhKP{^5_V0o}QoNfDGzp>v_3<Lq+-S-H[rOjc1l#ADB`yDhu94B)nx;' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
