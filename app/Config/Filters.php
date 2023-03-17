<?php

namespace Config;

use App\Filters\AuthFilter;
use App\Filters\SuperadminFilter;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,

        //'auth'       => \Fluent\Auth\Filters\AuthenticationFilter::class,
        'auth'       => AuthFilter::class,
        'auth.basic' => \Fluent\Auth\Filters\AuthenticationBasicFilter::class,
        'can'        => \Fluent\Auth\Filters\AuthorizeFilter::class,
        'confirm'    => [
            \Fluent\Auth\Filters\AuthenticationFilter::class,
            \Fluent\Auth\Filters\ConfirmPasswordFilter::class,
        ],
        'guest'    => \Fluent\Auth\Filters\RedirectAuthenticatedFilter::class,
        'throttle' => \Fluent\Auth\Filters\ThrottleFilter::class,
        'verified' => \Fluent\Auth\Filters\EmailVerifiedFilter::class,

        'superadmin' => [
            AuthFilter::class,
            SuperadminFilter::class
        ],
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            'csrf' => ['except' => ['api/*']],
            // 'invalidchars',
        ],
        'after' => [
            'toolbar' => ['except' => ['api/*']],
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
