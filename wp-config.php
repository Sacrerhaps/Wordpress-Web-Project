<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınzı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değitirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'tasv_db45');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'tasv_us76');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', '3bt-ltsidMqB%%Hm');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar iin veritabanı karakter seti. */
define('DB_CHARSET', 'utf8');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmal!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{p8G#&ylI-c!uHB8oj $21JAfe86r>m-~u=G#7)?nUc+J5L+!|IT E,fn UiwCnY');
define('SECURE_AUTH_KEY',  '-OjOiCCUF`lY(|5]7M#asUKg8y$pO/eWHEKl1-pp26H6Ap:r?Er_mZY(x1Lvx2Q.');
define('LOGGED_IN_KEY',    '@Nh?,cyA++7u0($[s L=XVz~{qve|0aG-o~a#3HS(+f.L=P/zx(kso|l:/M_3+Z?');
define('NONCE_KEY',        'd@MR<M|e%@fq5Ewj+.<?;95%R3O_;Eli|j+DVa `,l1CwY,n9c$iTY.io-<:V8{X');
define('AUTH_SALT',        'nny[7e^yE&x;%X}@n -h@ziVOGPyf5nIueBrAl>HOG86M@N.QW{1&-XVjn,^*zpD');
define('SECURE_AUTH_SALT', 'uh&|al)_pnC?]>bP@O>-wP#pz:/,/mRxY %Q{mJ?-jRQFoYDfW^NTys+ocA2w`bL');
define('LOGGED_IN_SALT',   '[ZEQDq i&H+go#65mCpx4O({_]04P|YO5a+j~Ksfg$Ft|6E5xZq3<@}{H8++vT5|');
define('NONCE_SALT',       'QB4{PG9?b`pW%qHfVLYTS.WAawvcLVA[9f;,9RD`=%0|@smF)bhWRY-{?(0NGgYc');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'bm_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
