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
define( 'DB_NAME', 'mixconseil' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'sisi' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'sisi' );

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
define( 'AUTH_KEY',         'O^4u^**wVj^~P(%`Q%uvq*q2X@m.ZY&o3f)kLpLhjS+7P+L<U9|q9$iSe}k)vyZt' );
define( 'SECURE_AUTH_KEY',  'XEEt=7>zJi Ggt4HAI->FU~FoX:kiH=lt)6AD4.HH-*$kR?ZXh~YWJ<?pU8{ZP`F' );
define( 'LOGGED_IN_KEY',    'B.]spKFEK)%-Nl cNy8-LKLSnglj5|j3N9wM<6)?)7:/{:]H12XnUwIu_e[ ~lVh' );
define( 'NONCE_KEY',        'n+1{WPl$/9r#r~CSw4A[V#,qikQx#t;)OBS&dXW-`Af ];Ux[&.qqI8h&<m[,*Bn' );
define( 'AUTH_SALT',        '_9m&;65XRa:C?I5gGf@n4-kUj}[s<v*!N,=hAsD7S:Ns6_tWJVxO9a;c[5:O)/%>' );
define( 'SECURE_AUTH_SALT', 'n/? 8AzcV:Kiz6cXg.E!DW|X~;e<u<Fo5Zd4%GgzM,{R+y8e:Z>1ng#1xcmyw.K3' );
define( 'LOGGED_IN_SALT',   'RFPiXCSB?]_~*$quXo*^aQi?cgp{z3::wHLF@h&4+19MO6SSv8gDAv{joEoUnH7T' );
define( 'NONCE_SALT',       'w&=&~!+&|cCimLQj{jFN>CaQtSW7A/Eu`kh92M7A{Hs8[YWkd@~1R9$n6!YNzYlR' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
