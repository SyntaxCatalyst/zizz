<?php

namespace Core;

use App\Controllers\ResetPassword;
use App\Controllers\VerifyEmail;
use App\Controllers\SignUp;
use App\Controllers\SignIn;
use App\Controllers\UpdateProfile;
use Utils\Helper;

use Bramus\Router\Router;

class AppRouter
{
    private static $router;

    public static function init()
    {
        if (!self::$router) {
            self::$router = new Router();
        }
        return self::$router;
    }

    public static function defineRoutes()
    {
        $router = self::init();

        // Landing Page Route - Atur ini sebagai default
        $router->get('/', function () {
            require __DIR__ . '/../pages/landing.php'; // Arahkan ke landing.php
        });


        // Home route (jika sudah login)
        $router->get('/home', function () {
            Middleware::requireAuth();
            require __DIR__ . '/../pages/home.php';
        });

        // Admin Dashboard route ( jika sudah login dan dia admin)
        $router->get('/admin', function () {
            Middleware::adminOnly();
            require __DIR__ . '/../pages/admin/dashboard.php';
        });

        $router->get('/admin/products-manager', function() {
            Middleware::adminOnly();
            require __DIR__ . '/../pages/admin/products.php';
        });
        $router->get('/admin/category-manager', function() {
            Middleware::adminOnly();
            require __DIR__ . '/../pages/admin/categories.php';
        });
        $router->get('/admin/users-manager', function() {
            Middleware::adminOnly();
            require __DIR__ . '/../pages/admin/users.php';
        });
        $router->get('/admin/settings', function() {
            Middleware::adminOnly();
            require __DIR__ . '/../pages/admin/settings.php';
        });
        $router->get('/admin/orders-manager', function() {
            Middleware::adminOnly();
            require __DIR__ . '/../pages/admin/orders.php';
        });

        // Authentication routes
        $router->get('/sign-in', function () {
            require __DIR__ . '/../pages/auth/signin.php';
            Middleware::guestOnly();
        });

        $router->get('/sign-up', function () {
            require __DIR__ . '/../pages/auth/signup.php';
            Middleware::guestOnly();
        });

        $router->get('/verify-email', function () {
            require __DIR__ . '/../pages/auth/verify.php';
            Middleware::guestOnly();
        });

        $router->get('/reset-password', function () {
            Middleware::guestOnly();
            $require_verification = Config::get('auth.require_verification');
            if ($require_verification) {
                require __DIR__ . '/../pages/auth/recover.php';
            } else {
                $_SESSION['errors']["general"] = "Enable email verification on config";
                Helper::redirect('sign-in');
            }
        });

        $router->get('/logout', function () {
            Middleware::logout();
        });

        $router->get('/email-confirmation', function () {
            Middleware::guestOnly();
            require __DIR__ . '/../pages/auth/email-confirmation.php';
        });


        //profile route
        $router->get('/profile', function () {
            Middleware::requireAuth();
            require __DIR__ . '/../pages/user/profile.php';
        });



        //post routes

        $router->post('/sign-up', function () {
            SignUp::signUp();
        });
        $router->post('/sign-in', function () {
            SignIn::signIn();
        });
        $router->post('/reset-password', function () {
            $controller = new ResetPassword();
            $controller->handleRequest();
        });
        $router->post('/update-profile', function () {
            UpdateProfile::updateProfile();
        });




        $router->post('/verify-email', function () {
            $controller = new VerifyEmail();
            $controller->handleRequest();
        });


        //worldcard
        $router->set404(function () {
            require __DIR__ . '/../pages/404.php';
        });
    }

    public static function run()
    {
        self::defineRoutes();
        self::$router->run();
    }
}