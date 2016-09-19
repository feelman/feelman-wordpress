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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'databasename');

/** Имя пользователя MySQL */
define('DB_USER', 'wpuser');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'password');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~AB <Gjonx.8,?xNQ){=Y>u)&pT5#:7P>`3PEol[OzyZA! Ud+?[B(2F4j25$jZo');
define('SECURE_AUTH_KEY',  'sxr8!MgzoH45eYr@/1qioVLRC4O%R>I=D9*[K5xggG;o>g;i-oZ `W^5}{|T:~d ');
define('LOGGED_IN_KEY',    'I#whc(1J2NciGo(( b 2!EE`o/zW8Mv9^#$wDWh)!gYw6E#e/l;PEZN,mz+.5d|u');
define('NONCE_KEY',        'F8Sxf][GML4Uu_({,ihO8+8~mqA=lWu*`)Kx%e<3>P56skL!FbPK/qSp]oc65F;U');
define('AUTH_SALT',        'hG~XX$Z_QTr2*%/TkjB;BQ$h&Hfb_UA %J V^,`)7NINmR3DWLJF~g%78^}={r+M');
define('SECURE_AUTH_SALT', '[b6=!|n202NPnCbzr%)J6e|Dat.L;uO^.j|pFSC]K9@xJNU{<(b9oeflQv$ww]?W');
define('LOGGED_IN_SALT',   'VHx9fxd-N;!-=mqczv506~oYE@1;!l$5e$1*Y8Tc!>GE{m%OcKpNx%i,[k}f`=E%');
define('NONCE_SALT',       'beSdnOdVZfUD/iGY({:{C*cPAYAx*CTm]a0& lsNxHSjJR#QsY$$.%36M51=1{-}');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
