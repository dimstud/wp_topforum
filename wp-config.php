<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
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
define( 'DB_NAME', 'topforum' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'tf_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7*yd}FyV1go7,=Kyo)kjh}#bD;{pT>e$j] W~r!b?z/JO3&?AN*>|DxBJ.&pVT!T' );
define( 'SECURE_AUTH_KEY',  'JxFU*@wB9/.3J9u$akA=,PF2Iq!q0C 8:IK8X}nX=W?fT>,{Yy`MakY:U}3*]n|*' );
define( 'LOGGED_IN_KEY',    'Dm8I<k. {vRn?}4x7X8Nzxg;4O&18Q/SCSd4ZzES l}Y99Mwg1FEbmyw}>d}UCbB' );
define( 'NONCE_KEY',        'QJGUFsR=SDIFizJ&xyDg GhB%hH<9zn+j>PQFK91/=4GgpCPYh`^jk|LOphwJa[B' );
define( 'AUTH_SALT',        'I88rOF%i N$Ct k^KdzN1r6,Pno9R<u~U$~gLbREBKUR0SG-id(=^-Ug02/vL1cw' );
define( 'SECURE_AUTH_SALT', 'S7H>JvWJE7s8<PGt0DBlD;[)ElE/V^}u$+B,^y~N9I&fgxd`gK`SrOy5Hr^~WFMP' );
define( 'LOGGED_IN_SALT',   'JZqJ}*?d|*I/XH^Fj)?&MOD8k@o.c`:L:YkNW{>RdBp>vNuRyIB[AVgoOaNjc |a' );
define( 'NONCE_SALT',       'n* vPUb7nO69)8MyJ}&A&6Yy>XgW:YtZSH{jNIFTG3W| %Y<|<*c)_Gk()z9jCN&' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
