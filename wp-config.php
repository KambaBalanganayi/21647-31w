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
define( 'DB_NAME', '31w-21647' );

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
define( 'AUTH_KEY',         'fat3K!Z_M87`UtWi3Ydk|Jwo}@XKyib>l}u3$6eUQ3sX]^r*1=ZAvs3e1F*?eXh6' );
define( 'SECURE_AUTH_KEY',  'q1akZ/I?[E8`uj89F+~-4gD,3D$^xC-dmppk1kqRKq^G%3`Vk^;(L5sbyR91jDSi' );
define( 'LOGGED_IN_KEY',    '%r,I|3U=5*8#F$0y&o6GOS;eKDh^;-0paXi:lhfRc^K|0QP3_GAOz;ND^UXFW/|+' );
define( 'NONCE_KEY',        'y;-{#eApAe^#Z`(Dr8nptNi_R@ZYb70+FMq6OKf)N*[vH]a^.df}V.gEa(CEz8#j' );
define( 'AUTH_SALT',        'herxK5hbS]wxr>D%Ih$PGi-104HBFJn;TX1V*4POe,.P@nn$}VB d_|i= j>Nc1s' );
define( 'SECURE_AUTH_SALT', '~ksOB@MMWEz;J!2iPa_N8~K,Swo1dk~sT]{MZ*A%kD4Yri(g1}Ub.RsR%E@w|`B*' );
define( 'LOGGED_IN_SALT',   '6E7<1<y~Rlc*rt**fPs#DYcM%x<Yf740jYDM7Q]Kr$Lr|Wb/pa_w>xk3t8K77N|g' );
define( 'NONCE_SALT',       '0E53EaHi~:Ae;YLy!89A#uQ7_P: NL9kdmis^j$DFMDtpaMn+*=@0`ANZqC5t#|,' );
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
