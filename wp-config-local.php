<?php

// Set project domain
define( 'APP_DOMAIN', 'theme.dev' );

// Database
define( 'DB_NAME', 'themedev' );
define( 'DB_USER', 'wp_all' );
define( 'DB_PASSWORD', 'vagrant' );

// Debug
define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );

// Salts - https://api.wordpress.org/secret-key/1.1/salt/
define( 'AUTH_KEY', 'CwIcUJ-O/o*%j9En=w[/*)2X|x>aL@IFj>1XE+nf[85Z8RpYBB~)j]|c-G]p@CNj' );
define( 'SECURE_AUTH_KEY', 'u_#R%MtUY..Lp>~x4J#UH59{X$P1w:l9pkXy-@$o$6V{+?R$_>+.]_T/<Zvz,>F,' );
define( 'LOGGED_IN_KEY', '-V.Ws=X1z5S%dROz}z0]f,}tyVZ#Ul]=K$XiZtHj76Ihh7uk&Uv|;R_X-@eW~XBD' );
define( 'NONCE_KEY', '^>jUNM$3}}gheUZ#O}rbXpNNpWT!31KE5%%,tO-v-`[Dx_W1fs&1j|-[()d4+IhR' );
define( 'AUTH_SALT', 'x:vLHV~`@@3@->w69BMXJ(}ocBD{Z;`Za?_OlV4xxVt+D t9K-3,|AA]P-Dl#64[' );
define( 'SECURE_AUTH_SALT', 'Fuo0.3he@[--hz62yU8.CPi)eH|uA;|:nm>*qxX}X1ga*A{!kZhi9#/hFf]S10fV' );
define( 'LOGGED_IN_SALT', ' 9ti-Cm<3Gk>5&zIDKmsFUss#~?]5BiLcJ%T||)Wk,Djq <5x1K ?u`@N*|I1-M-' );
define( 'NONCE_SALT', '*CB90t{@5~L8MjW&eg&)-)|5h8dof>-|@>-_?/_-m9&Qj}T>pJI.;j_Nx_30~<Yy' );

// Make sure $_SERVER['HTTP_HOST'] is set when using WP-CLI
if ( ! isset( $_SERVER['HTTP_HOST'] ) ) {
	$_SERVER['HTTP_HOST'] = 'theme.dev';
}

