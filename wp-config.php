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
define( 'DB_NAME', 'BigBen' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3TUADe6[94:ED(^-q`V)]adZ&@79hI.cl`9.]!{CluN&X<]HfZ&0BteR47V[m}u?' );
define( 'SECURE_AUTH_KEY',  'uCS<_PlyPO%`T>:FlhgjP-FxD*^A 2;yAZCxyGzm9A2vP*PARME&eLhpnIQ~-wvY' );
define( 'LOGGED_IN_KEY',    '~ubM/OD:W=D5EU5T4=bSzRvQ]q#9I)dVXhrfpH;MObMF98lTlAbcie>f+^&W_hqV' );
define( 'NONCE_KEY',        '*0tBVo|,L/$(F5!~c$Ef~u;#3MZz&ROJxi+,co2t-AX(gGE<x:bU<R,[^J(G.O@.' );
define( 'AUTH_SALT',        ']S@X:/Ou?t;H1rfgt6UZ}tf$3IG8$.}.q%yJ^8}`YjM$bFcs&jj2%^kA7}Yt<FX>' );
define( 'SECURE_AUTH_SALT', ' OSg#bw`S1}FZmq|65Md|9N-EyqNg?&P;@@/`N@&9%QT|T@,YMg=tN=-]O.<PH|S' );
define( 'LOGGED_IN_SALT',   '{h6SIY;/j;/gE*Ly? ra]CCu9CsU:pU7o5zq-Qq<}..YXZWnx6_}>:gwA|4KwTgR' );
define( 'NONCE_SALT',       '.zTLwX?arT2>z-zPVctYXl~KS:xIVGm()I%|_I1{pYtsNIGpdg4.-qWBrVOaX{a`' );

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
