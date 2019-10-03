<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'amyal' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );


/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'WP_MEMORY_LIMIT', '96M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
define( 'AUTH_KEY',         '<_8@GuRs;UL0b#&s)Vtugn&i:bX)TET=@I2P{&K4:fa8;?-Fq 1|>D,1hN&@IjUB' );
define( 'SECURE_AUTH_KEY',  '**rY?.E]q2cw5{5DyOX0&*k];^b;6uVB_Wzss@%{9OEUec$ieR_^t*(B-$kC3)1T' );
define( 'LOGGED_IN_KEY',    ' ~@=4vb?wA%=s78y&+PDvYDIgcd`?mY4r#]c%L<X6Zoh|)oZ8,%#|*l%Yw=y<<Bb' );
define( 'NONCE_KEY',        'I5E${t`:J`ajBV-qu<OIsO6HY%5[3{Nx@P9A>V#UhCVZJRLqbw+RE?#X):cS%aG>' );
define( 'AUTH_SALT',        '<.E9.%bb_;Fn8MyDX?9l{sIe{pI}<t6sR_-iMpHa^rYEYN3xn.|k.Dd^hhS JQpV' );
define( 'SECURE_AUTH_SALT', '~=C+m7VI<bLo>6!}30+6AGy@xl(P/%u}3FDdEEJ1SlY.`?$Um}_6FOi#;s|*RdV6' );
define( 'LOGGED_IN_SALT',   '3qLin@6GovDJsMWGegj,_EVr<2%6FBlDusXR/l<p=GSC<R(<~*1hPj&O?Zhs#7Bd' );
define( 'NONCE_SALT',       'o}@b6cFvnN!xZ<(3;u>Fylw>=>rsnd|-[Nxp%H `dta(/gQVubc*)Iqp?k}bBw;J' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );


/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
