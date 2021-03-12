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
define( 'DB_NAME', 'elo_librairie' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' n`(;::.r,r/70#vKVanU^f,V=ZJlNxoZ@Lv}-<xTf}|1mw&<cmuQ1etAT/w=zcZ' );
define( 'SECURE_AUTH_KEY',  '~OLu-#, ]%yH Dx?ZbhGlfc ~`N_+skj:f=I{NGDXbc*c-z||[IC?d>l:xu6mMK`' );
define( 'LOGGED_IN_KEY',    '&mlCFY=UMn?kDdD#-c;0r;j/Wy$INlHo`gZOe!2r{+2Ff[`n!~uUx#319$Bt[?Sg' );
define( 'NONCE_KEY',        'wC`tLuV+GN0aCh;8CDjg(aK1K?r|%uNBz/a,npHv4(%a$Hf[:/;(l){pyzcdR{~1' );
define( 'AUTH_SALT',        'Y>IwTAUnEnSxtUxS~CQ]tY_7L$Kbu`<+@HE<l`N{= y>9<}7X:BW)n-NZgX.teV0' );
define( 'SECURE_AUTH_SALT', 'V(->]e`!Y;y3d^4nuE0:VV@YH(_FSN(?-z1yw4;:51;a?M(,;PYs$R02/E^d]X<5' );
define( 'LOGGED_IN_SALT',   '(qH}`b?dcq}?O[i9ud{4~Q1QxH=!f!u@e:oQme@pY+=1-`l(~H-}&$~.Teqw<:DG' );
define( 'NONCE_SALT',       's{@dEPD]/F rI_&s?[q ec).q5b$S 8xj2)[2I9j=]*A8x^SbcjxzmaZ+KK :#5E' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'elo_lib';

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
