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
define('DB_NAME', 'icos');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'wMaBLhK;-Ge35/qXLp#Tj7dw4bn((;l0EZ]:52R`a~>JWAXP4;{%vYnoS@RaD50R');
define('SECURE_AUTH_KEY',  'k]V.qHeO%kDs<Gx!-}m[ Rm>538yU|boD~,9yNd0~2b87G).qoZy~bMay8[+O8(2');
define('LOGGED_IN_KEY',    '#F^`<PSCavQf%Lc%_2>v(I!.{^}Y%xX5S*EF`y5@rBN[pkQdVY%j2u`x hq}IJnZ');
define('NONCE_KEY',        'R8+;^ 7zea*/M@FukCXvMS8LF1&{Guu#YHmHXf%]9VSQz. Yfmjpg6awKD85kP*d');
define('AUTH_SALT',        '^|sNd<eox2a;iO0mq)TmXXi70]>7U~i[QrnZP&M{D0LnA6U{c_BBH:I~tnrwn[~D');
define('SECURE_AUTH_SALT', 'T s W>#owJo&?xVjFtvB+r#1ZEe6>3qLL7KNR&N(%5&%FUBwxcKDlsZD0+9X#_S-');
define('LOGGED_IN_SALT',   'bee32LmNVt2F@C`%kz0ugo6@hPz2s9)mTtN#p/iNW.@Hgf.2{0GF1+fm]w8Ps0~q');
define('NONCE_SALT',       'Lic9da=boax-_eElz7@^py$~L.C+J6qO>p4z@tFf J69iQ,pv&4nfU6yqMpij%ni');

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
