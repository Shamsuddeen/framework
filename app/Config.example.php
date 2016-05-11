<?php
/**
 * Config - an example for setting up system settings.
 * When you are done editing, rename this file to 'Config.php'.
 *
 * @author David Carr - dave@daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 3.0
 */

use Core\Config;

/**
 * Define the complete site URL.
 */
define('SITEURL', 'http://novaframework.dev/');

/**
 * Define relative base path.
 */
define('DIR', '/');

/**
 * Set the Application Router.
 */
// Default Routing
define('APPROUTER', '\Core\Router');
// Classic Routing
// define('APPROUTER', '\Core\ClassicRouter');

/**
 * Set timezone.
 */
define('DEFAULT_TIMEZONE', 'Europe/London');

/**
 * Set default controller and method for legacy calls.
 */
define('DEFAULT_CONTROLLER', 'Welcome');
define('DEFAULT_METHOD', 'index');

/**
 * Set the default template.
 */
define('TEMPLATE', 'Default');

/**
 * Set a default language.
 */
define('LANGUAGE_CODE', 'en');

//database details ONLY NEEDED IF USING A DATABASE

/**
 * Database engine default is mysql.
 */
define('DB_TYPE', 'mysql');

/**
 * Database host default is localhost.
 */
define('DB_HOST', 'localhost');

/**
 * Database name.
 */
define('DB_NAME', 'dbname');

/**
 * Database username.
 */
define('DB_USER', 'root');

/**
 * Database password.
 */
define('DB_PASS', 'password');

/**
 * PREFER to be used in database calls default is smvc_
 */
define('PREFIX', 'nova_');

/**
 * Set prefix for sessions.
 */
define('SESSION_PREFIX', 'nova_');

/**
 * Optional create a constant for the name of the site.
 */
define('SITETITLE', 'Nova V3.0');

/**
 * Define a 32 bits Encryption Key.
 */
define('ENCRYPT_KEY', '');

/**
 * Optional set a site email address.
 */
// define('SITEEMAIL', 'email@domain.com');

/**
 * Setup the Database configuration.
 */
Config::set('database', array(
    'default' => array(
        'driver'    => DB_TYPE,
        'hostname'  => DB_HOST,
        'database'  => DB_NAME,
        'username'  => DB_USER,
        'password'  => DB_PASS,
        'prefix'    => PREFIX,
        'charset'   => 'utf8',
        'collation' => 'utf8_general_ci',
    ),
));

/**
 * Setup the (class) Aliases configuration.
 */
Config::set('classAliases', array(
    'Errors'        => '\Core\Error',
    'Language'      => '\Core\Language',
    'Response'      => '\Core\Response',
    'Redirect'      => '\Core\Redirect',
    'Mail'          => '\Helpers\PhpMailer\Mail',
    'Assets'        => '\Helpers\Assets',
    'Arr'           => '\Helpers\Arr',
    'Cookie'        => '\Helpers\Cookie',
    'Csrf'          => '\Helpers\Csrf',
    'Date'          => '\Helpers\Date',
    'Document'      => '\Helpers\Document',
    'Form'          => '\Helpers\Form',
    'Ftp'           => '\Helpers\Ftp',
    'GeoCode'       => '\Helpers\GeoCode',
    'Hooks'         => '\Helpers\Hooks',
    'Inflector'     => '\Helpers\Inflector',
    'Number'        => '\Helpers\Number',
    'Paginator'     => '\Helpers\Paginator',
    'Password'      => '\Helpers\Password',
    'RainCaptcha'   => '\Helpers\RainCaptcha',
    'Request'       => '\Helpers\Request',
    'ReservedWords' => '\Helpers\ReservedWords',
    'Session'       => '\Helpers\Session',
    'SimpleCurl'    => '\Helpers\SimpleCurl',
    'TableBuilder'  => '\Helpers\TableBuilder',
    'Tags'          => '\Helpers\Tags',
    'Url'           => '\Helpers\Url',
    'DB'            => '\Database\Facade',
    'Auth'          => '\Auth\Auth',
));

/**
 * Setup the Auth configuration.
 */
Config::set('authentication', array(
    'guard'      => 'Auth\Guard',
    'model'      => 'Auth\Model',
    // The used Database Table information.
    'table'      => 'users',
    'primaryKey' => 'id'
));