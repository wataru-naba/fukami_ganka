<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'fgank_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'fgank' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'gRDzy-S8mDe9Nf' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%7wUn234)nP2cDt12]9Mx3A/y*{g!l,_5;1O%+*v*zC*co)~bh/,q`}F?$1R<V}/' );
define( 'SECURE_AUTH_KEY',  '>`I/dMQz8SV8%8;bk|b{=8[Nq^VJw~#B`97>_GF[P+/yq},n1>nE4HU2$^x6O5cl' );
define( 'LOGGED_IN_KEY',    'MUh^b^6=dhH(fhskn~f%Xq2`DQ6XRk]6w,YOGN d/FyF/)COdp0p0o(~y1W}zIN1' );
define( 'NONCE_KEY',        '$q|`la,-?qmv4wqC(r!:jp,T}.s=1B@Zg1Jnp[{0f^S,Ze!quLZ2nDhk<)K?0r6I' );
define( 'AUTH_SALT',        't%{DI(^aVRJ9!n$Z,b551vyl~0M>)kH4E[L@BJjB%!P[Yhg_H[#Kv8|BDiZ6>o%$' );
define( 'SECURE_AUTH_SALT', ']F%sO=upa l{%olXY8w.GIHc9=UVqg:r J7G8_U|`7%K>e,tbt1kJZHp`40e@z$8' );
define( 'LOGGED_IN_SALT',   'nE17e^i^@2C5+%J.U:#.;M8S{wo4xw][KP|Ph. Fr5v#.s}ms3M4^FN>,#q5#ey#' );
define( 'NONCE_SALT',       ':hkh)&lFPHrn>)/Sr@^v6Ad%~]rXloRyhk@+R2$*/(U`wlohO%C.s.{Ldd1Xg$-r' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'fg_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_SITEURL', 'https://fukami-ganka.jp/news/');
define('WP_HOME', 'https://fukami-ganka.jp/news/');