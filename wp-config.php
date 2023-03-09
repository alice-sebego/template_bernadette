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
define( 'DB_NAME', 'tpl_bernadette' );

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
define( 'AUTH_KEY',         'q(@<R%Qq{M:r(&aJVaEe!x]<H1D{u9SU+{+S]9FJiBB!v]c/Wr v*$EI6k?BtIJ4' );
define( 'SECURE_AUTH_KEY',  'C>9*v)zngq,?|wAQuVB`oinW9<Q Bm0*4YIhw*S<jc.We3bHlQ2+gM7_y;2T?d^|' );
define( 'LOGGED_IN_KEY',    'I(J&iso9,]a2XM#+3v=WJD!.g-[^>ZLc$={#uV>W%33d:B/`lnPH/${5e^: 4Ztc' );
define( 'NONCE_KEY',        '+xWNTLs+@K*26u$fGns9O@01.Y3l,g^bSi-E5.dP9lAqlQ@^];O#Q{@f|Yz@)<N}' );
define( 'AUTH_SALT',        'W%;iM8uoQm,(l*f1Wzb&8#J=*kW+(ipLgDud4tGvusZD|,y4|}uAn6/i#!/|%h(-' );
define( 'SECURE_AUTH_SALT', '^ Cpx{,WcRo&!!>ebT8v]vPA^dENR#esApK^L^7whOcButvwmbNaCGx$4;51,|C*' );
define( 'LOGGED_IN_SALT',   '-v!5C*mrOm?=Oc|H,{<NNM9&N#M8:jU*xs8VRUpc7j_!`(@PEow&pPNnChZYa{B;' );
define( 'NONCE_SALT',       '(Z 7Xmn^r:Y0B#rbR{%pL{*uts wgT)]qd<uy<Q08hzipz%B)IUlk2.YLc/e|w{%' );
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
