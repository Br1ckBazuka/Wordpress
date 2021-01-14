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
define( 'DB_NAME', 'wpru' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WS}CR;Aw922Ga.Hl]<G_&;[wPZ,(b_ObmfW8&C}S-OL/iEqVV%Tr7OVB(s2E`C89' );
define( 'SECURE_AUTH_KEY',  'mfAKaENXBV8^`i%[-0Ys=!dOtJ*rPlu#[Vr}dC:B=Ly*6(!/$QuHh#Jh#1*}oHW~' );
define( 'LOGGED_IN_KEY',    'WT}@r>MIYEa_-4?QNCQjUK{>-k;bpH_AY[ZVK$%nJK!(+LroU;otU5kY3(sTIk*<' );
define( 'NONCE_KEY',        'm^4DxI{9_KfT=ah!<t<HJsTY#GGyOeONN5mP]/fl=z-!O==#77dL1W$1dH7^Q-.>' );
define( 'AUTH_SALT',        'YBE-T05M4E^Y]BKW:<,E8BKX*lm31VZiWb4:R%@aG&9N_GO&<GdlWXDi8laUU/^,' );
define( 'SECURE_AUTH_SALT', 'F]m>wPNA;FG[y6e.6m]erf:{]j-0XTW/{enHYQlsO:>Ya$*W=$#iZ(xd1m>5vV(Z' );
define( 'LOGGED_IN_SALT',   '8.RtbC@YXt;*:w{8&)Hn60Gw~09E_0GhW<=#e~G9pk+$oTXVJpf`SD#{+)g;,u1N' );
define( 'NONCE_SALT',       ':.&0cZ{RU~_?sduliuzKYt1{t(v4@`g.ck1_2Wyo prBEv2p ^M@0Nd!X,aETl=0' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_wpru_';

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
