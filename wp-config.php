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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'repair_second' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'O9YGxh2sbE8YMkCU' );

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
define( 'AUTH_KEY',         '#NEl; v~wa;yk)w{!5%+E`CnsHtPg}$z!j(AKak2.n _{HR%)/ye%QXK*=h;x_Ax' );
define( 'SECURE_AUTH_KEY',  'Bv; @dr)MsIb$dWx0`=_m)t]e%_j5Cy!R=zkX9c$W<{+mL((:/Uk{ZM=!o*cORgD' );
define( 'LOGGED_IN_KEY',    'KT8^;QPnohWafAS}OGo~`O19CT&LX2|eC^QF/ZFjrbHg$U/D)%Gw?7IyQBl/)l(z' );
define( 'NONCE_KEY',        'r>9$p_A;I[*L+a5&kb$JNX$x+mK6xBvI.;[Cn]9{[0FqXFm9hpJ(EzJ*.6~RB3Y!' );
define( 'AUTH_SALT',        'Zp^~6aS+Q%NS!t5{oY_uXzAR2apo]:kFKQ815H1~q6b|ozNJo9,L.tbMdW@/-;km' );
define( 'SECURE_AUTH_SALT', 'dc~r5izSUyYLRk,3V6aD@%4<ONh_cu{ at$,iTAzNh9cnN-uW/K}fe)qG%grjN8d' );
define( 'LOGGED_IN_SALT',   '1Bl3$D}H:KM Y>=Gnc7_Z<yMKr},;jl8[$>ubG6oVYyYV&8z(,mrsT=H]#6iC)Ft' );
define( 'NONCE_SALT',       'O_Es0,ZH51  8^w +|;]`]+N.-#cMCu|N&n<ENTTU[LZLy2m[Nz{d9Xk>gq2,fz:' );

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
