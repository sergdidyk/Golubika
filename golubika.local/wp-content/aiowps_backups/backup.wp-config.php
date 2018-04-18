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
define('DB_NAME', 'golubika');

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
define('AUTH_KEY',         't#!8!84pDhEypy?Q-,/Fx@stD`I)D}L0_3m8{[_JG!3QUGPvypfqY1t+8$S7l}8=');
define('SECURE_AUTH_KEY',  '2~ShG7SrS?yIAAAxBb-6#Fpw?^_xbo*T&ec2k#@}zPC|Ml&~F~!pOQ,E(l}yOKp2');
define('LOGGED_IN_KEY',    '58rB/)8DDqML>A~mi^rpsrhAz<6_RxcNWku&hM)G?o61I3nr cRl orT}W^4~k8,');
define('NONCE_KEY',        '|90@n%nx-Ifh!FE%R{w.4I1Deam}YhL]~C_&$*@04T6OFeLg )Q)@/:>xXA6T:sv');
define('AUTH_SALT',        'lw))kHAc:5mr`)D4 $Y<PJBONLzR~`ux8ce f)3VS`q}$B{SraIu7/xAZ?+Z 5WB');
define('SECURE_AUTH_SALT', 'y +pQD:J,aX>]p?Ktq0%DA8T,1|pSX:B_3Q7ch3>QNmrrwqDptXo?)RDG:+A}DfC');
define('LOGGED_IN_SALT',   '>81TihBo57O{dA71E=b@SrFW$cIaK+1f5yL!hz,y>.U<80),fG@:;K_r4;F!-o$[');
define('NONCE_SALT',       'yqFIoRjSCIjW_UmP~Kb98w3H$O.BolTJal)6D$xNUK)HaOSy>F!D]lLzfDs9NNfl');

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
define( 'WC_REMOVE_ALL_DATA', true); //полное удаление Woocommerce


/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

/** Удаление всех оставшихся данных после установки и удаления Woocommerce */
