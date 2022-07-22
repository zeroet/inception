<?php

define( 'DB_NAME', MARIADB_ID );

/** Database username */
define( 'DB_USER', MARIADB_USER );

/** Database password */
define( 'DB_PASSWORD', MARIADB_PW );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('AUTH_KEY',         'spsJW$|Jy>C|31jPL||KIQo{nUeXH2@!$j$1SIB`PV:/1YA^[P|%.@$)QGf_lW@3');
define('SECURE_AUTH_KEY',  '0lN`0|;T.^^+pHOj<]9Y3G-%A !g0G~pH{O^dCh{1 lJls7U5%[P[6KvncPVa`e>');
define('LOGGED_IN_KEY',    'v2Zy-oKe?|B@}_*|sc3mY~ye|I$xGz.WhaK?%bw_3XDRZwWC*,:(-S&ZVd4 |(`8');
define('NONCE_KEY',        '+y#+j7eI<*x&{by4Q,RW^9D{sV$B+kjVh;%Y}7#U]fBUo%h+vvT|]g[J5&[[B.K|');
define('AUTH_SALT',        'LIJaonXWDn-cV2)C~idD~7-i.7k10$%r-(s:BYFT^6NM<yA*6j>=TAX^;W(-YVh<');
define('SECURE_AUTH_SALT', 'lhl&sm%=>]QynaLbYT$u|<^Y }iPJkPo1@|Hx63iRLq2i#[7T=nz?#*e vfNsT`b');
define('LOGGED_IN_SALT',   'EHy0Ea5/fY`ns-nCnQBui}2uHJ4UNSdgvg<gQJkv#S1qT+pT>TCVmb9#I9qD2KV_');
define('NONCE_SALT',       '&u~D#<xRrA/`}:}1XfrUtK~!r$TvA6nX6JO(bB~%8||[C|^d4,n!RttC_F6+U(X0');

$table_prefix = 'wp_';


define( 'WP_DEBUG', ture );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
