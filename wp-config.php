<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'my_cv');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'k3j8mbbDkRcJ36e');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5AWCw&L[Vpq&Wbm=Z|yyLo!ZpEaTD|h/h.$5J=gu0bNFr`g]f{ me3wnqh[Z,un4');
define('SECURE_AUTH_KEY',  'ZJ/4Tp_he(yb[(j($s?$:wH*yQ}lyRWXB>Y*&v@M[bqMH/SWW!elVeBj%X,_!cz;');
define('LOGGED_IN_KEY',    'kDS6>$3s8jNV(L?soT#w#|~n>S2pf:za0rx9^VQLm=GCuU88!eY[|.d(1dF~:R`j');
define('NONCE_KEY',        '=.UGm=vY17=Q!dpYf/S#%bh{.@Ejy|F.(IPdp498e7dcH=TJ.%6VczDTC.4!/#zN');
define('AUTH_SALT',        'aVlNeZl,|*;Q.Rw(7Cub=/G)ZN?V{+<U6_Bc9P,!j~.*iuvz._^%kc{D57fgADk#');
define('SECURE_AUTH_SALT', '_SccCRm_m/TqVi=o!.U#dmT8mMjPCOVE*>t^kZG<xvHf$ 8iS3,]QAxl{.us=*S`');
define('LOGGED_IN_SALT',   'B;)5}dm56y  #EJ|p@ygn?L:OU~.im|/ls|~r)JW)ow0C_~I5n@h0R%Y]OcQR7=s');
define('NONCE_SALT',       '1GSP9b5~e!xsh+zVm0_t[<BY2y*xi>|fcOJ5v,f>|8^|/o`mCyY)`(#&KXJa>}35');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');