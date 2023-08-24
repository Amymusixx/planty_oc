<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'g%Qt`gQ,k!+P~qfOM82Lm0{v.Fbo SGe+p!dh;{Avs`}d{BQGyKvO5aS_I<+o73^' );
define( 'SECURE_AUTH_KEY',  'i+Pa;,-W]CJM8:3TEmiM}:&Uxw`<z)2GJp}&FET_^v+?j>MEYJ5.^NU@Nr$P$@ll' );
define( 'LOGGED_IN_KEY',    ']gZvVXs,Tf1H:Tdslj,(LQE+[%|=+$Dx<_]C^V>{O@5,rt>2s=LBGePP.i1K{R~c' );
define( 'NONCE_KEY',        ',.e,B.v3H*]BXo+txlZQ`6g.Jkfh(Oq[% L2(rKps!4Ox6M{EYL,mgiS65s15aW=' );
define( 'AUTH_SALT',        'Wrp,{`N[Q.J?#$oMf`3pg~cHiLL4.p>>VbDK)bpI,cH,^LHV5I^o<.5s+V*|ji}J' );
define( 'SECURE_AUTH_SALT', 'nrLK^+OPiIx*]-g|WEURZmsIW9^lyHG*(7mzdjw|K<dTrGaO3WXNJ-B!A.A$}{(#' );
define( 'LOGGED_IN_SALT',   'tg)lq+tWRyNtOyMc6Z4(;0Ky>@RtA@RaeAp>=/(`?Mg+`L+gW/%m/{_9g]|fw=nb' );
define( 'NONCE_SALT',       'N8uNWNe-]D;6Fx)MJ$z}Ce}uq&]N D>u,{W[5g1mS+Q&s|*J3AvdZRn3xz/E/iMY' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
