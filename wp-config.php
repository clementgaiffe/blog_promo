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
define('DB_NAME', 'blog_promo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'GXS-)R#^>XP2_p&I]06QU>tP8r0q|X+oT-KetJ3wwHb3E,aM2Zf[)i]/>Zq5,lP)');
define('SECURE_AUTH_KEY',  'x<#K6a<ie@ 0jzZ%L7ANGY1`2VuHkxV>jjTCDnkZLZ>l*T[iSF=|VgzD]M<~1}yK');
define('LOGGED_IN_KEY',    '>J_T#zF^|`)nIx6%OXh=^^p;fKBB$b=0`^h@`1[It) wRMZ9,Hy9ew7L><(j[b(8');
define('NONCE_KEY',        'n#<G+&r[_bEEJI=|VTaSC[d>7rkm5C.>ZoiY 4I-X3Y|C0E2fn}w ^KUiU6;hxIg');
define('AUTH_SALT',        '6&G=vkHOf*Qcu3dlMKTo;y^{RTbqvS>wMlZmDe89O.VVl{Rl5TrsIGD|t28@#:7n');
define('SECURE_AUTH_SALT', 'X_k2bOnK&+cV)z|+3w`VC)R*AJ-%U:u>J(|LAdh[Q(DT&7x<7v;fW|2~74E_LE9@');
define('LOGGED_IN_SALT',   'h5.^_?ut5I?CJof3Xm7#L},6DHVilDkE4:fD1A2+=EwvpdyT}e6O&C+goFR#GNRD');
define('NONCE_SALT',       '[Y0bL!W_A|JR LRGf/>;N2Xc+;Z:!P!m3kDo+O.gmL1T=M(jt!6uf&dup@@oeIlK');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpacs17_';

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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');