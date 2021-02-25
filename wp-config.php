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
define( 'DB_NAME', 'boutique_gaec' );

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
define( 'AUTH_KEY',         'Kd@e(1PC+%tpJbaz(HiCWgnn+`)Pi#)c_&$Y)< xxq!UUl3@bjxn%}r@yi-UE60&' );
define( 'SECURE_AUTH_KEY',  'LwxC0F%w3Bc+|=>_5:v`=]jVGt`zRX/(`{/oO+;Y=NOla*>U80L`|=if llz_XH)' );
define( 'LOGGED_IN_KEY',    'Cb7?Nk[~gC_$:>jg6af,_QD~ETn8rDWoU&z/MP/jDxYa*@~dgL<h>ZG`g5>n&U;{' );
define( 'NONCE_KEY',        'f0iikF<T#oDw|18((O5]Mq- {MhyYtH@S1D@oX.s_)(}n*(|^Lc{De+r/Wfoc8yl' );
define( 'AUTH_SALT',        'K1o+)o;4`zY)$X>*IZoG?8QE*} z@_Fb`4M1ZD3IY8<}P+cU=i6:uKHbT>NEb==.' );
define( 'SECURE_AUTH_SALT', 'O{X:XXwn|,tm_vp[4;? $-Rjfzc`i&4]8vMBX+m2YC[x;:$@4G#Ddt-d`)ea%s4C' );
define( 'LOGGED_IN_SALT',   '_u.W ?}+zsim)`g@d=?Vl#0MGb5V6vn8 svy/>dxM}]b(u|d(@Hk6z8]M>@gx0Mc' );
define( 'NONCE_SALT',       'w*dG;fv[@(5Pz>!sZG>5+bEg1L&P_:;Clg,9A8?V>>skrN*Z5?};^7(5olh$dmx8' );
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
