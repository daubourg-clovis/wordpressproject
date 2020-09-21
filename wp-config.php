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
define( 'DB_NAME', 'wordpressproject' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '[6p&F~ekX5. >Q]taX@A63sbJtG`dv[8Ut8)jm_@gNrLJA2:cVI(e4=&b|;Fi$Wo' );
define( 'SECURE_AUTH_KEY',  '{D=1IXS$O,Ti,98wj9nQP*@FwspwWf^)&c/h{J$~P!@hS3xIwMG>/j.Jpf5$h#df' );
define( 'LOGGED_IN_KEY',    'aPEv.9z.54RH>jg2U[o7@2T1deV=p@qc~v2Y0t2hjt1~jD-1wXGI`aloa&](@rAS' );
define( 'NONCE_KEY',        'R_&kootO1G%-#?&4Zb!X$,*^G=7Hy/t4v5FdxAIna$a$bx5;H2I?2_kLiQ&`x2zO' );
define( 'AUTH_SALT',        '(xl<)P)bj:2,jM=r:X]!`F i5^HrcIl/%XHrxin[v-gsWUS,k:rF@*C}tNF`1Wv}' );
define( 'SECURE_AUTH_SALT', '8x5,{jN3*SUPb+bA8Q0vG;.,1^WU]qnlT-|`ORJ1DG-*b)[x%m##}T_-Bz(y`ph4' );
define( 'LOGGED_IN_SALT',   '(cCfc_s~iG]3u#vTvoASA(i?=_q`cj06WEx9$3R7p[Ih^rK$3#V]}654TCvHW1@]' );
define( 'NONCE_SALT',       'uabJSj[^?p,0C/?E15{5].;Oo<&S jy])AD%`2.9)C-F$!D/Un)@?]y=W=sf(TY{' );
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
