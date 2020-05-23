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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'bungee' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z+Or!0K+c4SC k1d.FyY<|#pGLG&t~eoot?Q%lD=IL] fz>@Io;.C=B$Rm4KEt,@' );
define( 'SECURE_AUTH_KEY',  '}Ufx&)^idce2gq-`|=R]M:!2J?T-x<c?Rs+}g>_Xu{d,S%i$+V:)]Xe41@-(g,bD' );
define( 'LOGGED_IN_KEY',    'N0uk2ahO?OvkYh3M^wks&1BK1,~3Pt!!Pk%!~ 7Hl+h]2[`PHZGz>b)93_{BnWby' );
define( 'NONCE_KEY',        'G7VG!pd2y%L/xO:%sg^2#9dUIBeR.2fF&,iAW8f<U8];sm-gc<d~O]e{Ndne(YIZ' );
define( 'AUTH_SALT',        'YD`@lW_S2(q:I` uSxjq^;He!u_dtE|C`[6i9BwLPmuL:sR_.4J>lyadcZhp1{#H' );
define( 'SECURE_AUTH_SALT', '^tYvX`BM8oQU]Z|..kA4E=swGMdf;c_kApe}|hyB]!f#<}`rGs>m;2:!8SBr4Vjw' );
define( 'LOGGED_IN_SALT',   ';&Sf@ezN5X&c*W056LW@vwRZqrd?pR5G=%NrM$G<OwrzStH}70^L!9c/]+hEtyBg' );
define( 'NONCE_SALT',       '^[u?w,GmZ^&FPzMiC^;6Br>D_Tk7/-7Krb)u7Vcrx``sTu%.}+WraX{le3xd_tJh' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
