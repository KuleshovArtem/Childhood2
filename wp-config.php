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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OSPanel\domains\Childhood2\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'childhood2' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '_TgZe?c_NyH <;IF?aC%C.R3M bzQ)cFQtLAg|!v@VliI!oztZ[PQmIp44ORwbJe' );
define( 'SECURE_AUTH_KEY',  'vRDE0jUk0HIZOM)bYzt|T/>[OVE+k 16,X 9zO% C4bmsLuUffu7G6xMS^tB2d V' );
define( 'LOGGED_IN_KEY',    '~};dhSj^f#6S]DLrET&MJ3UAi5gBg,y7R[|(Zd6cQG/m@dt+,s(_H<@{rMuy-{/_' );
define( 'NONCE_KEY',        '6J|7[Wko8]bqmoZLQ#EQk~|$l5fipLGjao)<v~)H,68SkTO]&,^e3D Tcp6_BRF%' );
define( 'AUTH_SALT',        'M(wnvaAu-Q@sJga^.YF1D;(9*^lmg&w p5 N|%[~J^6vz]}3`kw.?;yqVe/K.pTu' );
define( 'SECURE_AUTH_SALT', 'RJ:Njb<6Jbdn>sUJ7/zPVGX;7JO4&EXtt#c6p+g`/sA;W(QY0NII;wr#>IU4Xt`X' );
define( 'LOGGED_IN_SALT',   '6O 7o2WHlY._nt^x:e3p`?:C*p(}P-yj9?.=APBhOuWL$~,SM+[v;sm$LSN<Z l9' );
define( 'NONCE_SALT',       'hurB9pp %d<q_iZ%<|4<<|uvcs<%gxHUUs,}0F!d.+uT/X0/-kPr{-iDYiyk/k;t' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
