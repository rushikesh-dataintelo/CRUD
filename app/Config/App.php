<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /*
    |----------------------------------------------------------------------
    | Base Site URL
    |----------------------------------------------------------------------
    | URL to your CodeIgniter root. Typically this will be your base URL,
    | WITH a trailing slash:
    |
    |   http://example.com/
    |
    | If this is not set, CodeIgniter will try to guess the protocol, domain
    | and path to your installation. However, you should always configure this
    | explicitly and never rely on auto-guessing, especially in production.
    */
    public $baseURL = 'http://localhost/product_app/';

    /*
    |----------------------------------------------------------------------
    | Index File
    |----------------------------------------------------------------------
    | Typically this will be your index.php file, unless you've renamed it
    | to something else. If you are using mod_rewrite to remove the page,
    | set this variable to blank.
    |
    | Leave it as 'index.php' if you're not using mod_rewrite.
    | If using mod_rewrite, leave it empty.
    */
    public $indexPage = ''; // Empty to remove "index.php" from URLs.

    /*
    |----------------------------------------------------------------------
    | URI Protocol
    |----------------------------------------------------------------------
    | This item determines which getServer global should be used to retrieve
    | the URI string. 'REQUEST_URI' is the default and works on most servers.
    */
    public $uriProtocol = 'REQUEST_URI';

    /*
    |----------------------------------------------------------------------
    | Default Locale
    |----------------------------------------------------------------------
    | The Locale roughly represents the language and location that your
    | visitor is viewing the site from. It affects language strings and
    | other things like currency markers, numbers, etc.
    */
    public $defaultLocale = 'en';

    /*
    |----------------------------------------------------------------------
    | Negotiate Locale
    |----------------------------------------------------------------------
    | If true, the current Request object will automatically determine the
    | language to use based on the value of the Accept-Language header.
    */
    public $negotiateLocale = false;

    /*
    |----------------------------------------------------------------------
    | Supported Locales
    |----------------------------------------------------------------------
    | If $negotiateLocale is true, this array lists the locales supported
    | by the application in descending order of priority.
    */
    public $supportedLocales = ['en'];

    /*
    |----------------------------------------------------------------------
    | Application Timezone
    |----------------------------------------------------------------------
    | The default timezone used in your application.
    */
    public $appTimezone = 'America/Chicago';

    /*
    |----------------------------------------------------------------------
    | Default Character Set
    |----------------------------------------------------------------------
    | The character set used by default in various methods that require
    | a character set to be provided.
    */
    public $charset = 'UTF-8';

    /*
    |----------------------------------------------------------------------
    | Force Global Secure Requests
    |----------------------------------------------------------------------
    | If true, forces every request to be made via HTTPS. If the incoming
    | request is not secure, it will redirect to the secure version.
    */
    public $forceGlobalSecureRequests = false;

    /*
    |----------------------------------------------------------------------
    | Session Variables
    |----------------------------------------------------------------------
    | Settings for session handling, including the driver, cookie name,
    | expiration time, and where to store sessions.
    */
    public $sessionDriver            = 'CodeIgniter\Session\Handlers\FileHandler';
    public $sessionCookieName        = 'ci_session';
    public $sessionExpiration        = 7200;
    public $sessionSavePath          = WRITEPATH . 'session'; // Ensure this directory is writable.
    public $sessionMatchIP           = false;
    public $sessionTimeToUpdate      = 300;
    public $sessionRegenerateDestroy = false;

    /*
    |----------------------------------------------------------------------
    | CSRF Protection
    |----------------------------------------------------------------------
    | Enables CSRF protection. This will automatically protect your forms.
    | Make sure your forms include `csrf_field()` for proper CSRF token.
    */
    public $CSRFTokenName  = 'csrf_test_name';
    public $CSRFHeaderName = 'X-CSRF-TOKEN';
    public $CSRFCookieName = 'csrf_cookie_name';
    public $CSRFExpire     = 7200;
    public $CSRFRegenerate = true;
    public $CSRFRedirect   = true;

    /*
    |----------------------------------------------------------------------
    | Cookie Related Variables
    |----------------------------------------------------------------------
    | Cookie settings for sessions and other cookie operations.
    */
    public $cookiePrefix   = '';
    public $cookieDomain   = '';
    public $cookiePath     = '/';
    public $cookieSecure   = false;
    public $cookieHTTPOnly = false;

    /*
    |----------------------------------------------------------------------
    | Reverse Proxy IPs
    |----------------------------------------------------------------------
    | List of IPs trusted as reverse proxies for headers like HTTP_X_FORWARDED_FOR.
    */
    public $proxyIPs = '';

    /*
    |----------------------------------------------------------------------
    | Content Security Policy
    |----------------------------------------------------------------------
    | Enables the Response's Content Security Policy to restrict the sources
    | for images, scripts, CSS files, audio, video, etc.
    */
    public $CSPEnabled = false;
}