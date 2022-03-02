<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'sofia_test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~rSoEVdHpWVz*h`mg<S?=`@]Cgfc)o2#Rh-V>=XV/><f6!HC=UgUx2X4y6K?kg!g' );
define( 'SECURE_AUTH_KEY',  'yJY>Y:P#:tG;L>-5^ v<C?u(C.K(8W+/q(L<l#ho$ljQCbZsm7~[:B:8RAUC4PH1' );
define( 'LOGGED_IN_KEY',    '-..Z@Q@Tt$OvA,;@}`kJC6/)S (b|/>GK?-ndv?CZNH96YLdPae8ifP7xTPwQf/X' );
define( 'NONCE_KEY',        'w(k(68WX;wn#s1Y*l@lh#{D}$/H&bF<+l|X+RdTD/snzly_Z;,_UDDko<lyd.za}' );
define( 'AUTH_SALT',        '|XB[w+j*rH$[ Noz{KklXjYkd?={nVCkSo2Zs@Xyj.yhdSy@[|E~,y?w4.CT?krs' );
define( 'SECURE_AUTH_SALT', '(-F+yh%b{wX8]Yk`oYh=C%Obr/L.%V<D*EKFwP{/rUfNAm7a n&T~,?IXLaCWr{-' );
define( 'LOGGED_IN_SALT',   '[r<tIIYIlmHQesHq.9El^+$ODY|Rj+[z^r]G3@3=XTJ9_A&{[KS~>/`AaLNTnA<;' );
define( 'NONCE_SALT',       '[(GtJ}FUD7ySNHOE_Fs+]N1<*CSkPLGYqKW$1VRHyx4sF-1$:Z3gz((psJ>IbpNB' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
