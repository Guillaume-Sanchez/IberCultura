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
define( 'DB_NAME', 'IberiaCultura' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'ibercultura' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'iber116' );

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
define( 'AUTH_KEY',         'e0I1^((?&M )d9u6gd_adq@%PqXkPj OWcZm2mY#.=:HM>jBrUiSUjV:u_mld)fr' );
define( 'SECURE_AUTH_KEY',  ' (-~|vq7E}.{9t,KQ?Fl2T/9lvS|zk@*7VI4d?ld{AzA|EnIb0H?4BmI3r~I}V$D' );
define( 'LOGGED_IN_KEY',    '20wb%,gth0yd2iJ-epk+q^CKj!8O*~?IDf/<K7pbg#Ne?IV$C6G,RH3`7aNBmI]<' );
define( 'NONCE_KEY',        'Rp8@$u7>u6Rkxb?6fAg7CD}Bmd[Fh[KuXmTNUoZL[LN_LCZW<O(_6?:?wrP7]!9n' );
define( 'AUTH_SALT',        'Byr[tD:8/F5``bF(|8Gy|o{nhM]P^B/:(^LV$zWW^P[>y&Ol&w 2zr(5/pmZK(Nm' );
define( 'SECURE_AUTH_SALT', '6{B=rgt}+?Cbf8XOC&D%kn8/zaG$gd6S..zrO]SqDihc UdkZEt)%k;8!j!Fr*,;' );
define( 'LOGGED_IN_SALT',   '2ORtBx}^@^r!Z$WjnpPVQ{K]ecjIL:mR8S&ikhM9N;M>d;cMcbfa8_db6}>M6YXG' );
define( 'NONCE_SALT',       '2nW ~VOYFavuW(Hk,wDmgxRq}#Xcu#;/hTL[vQLujkaOwnf9gTN*]@)l$doMyT_L' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
