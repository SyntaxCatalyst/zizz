<?php

namespace Core;

// use Core\AppRouter\set403;


class Middleware
{
    /**
     * Check if the user is authenticated.
     * Redirect to sign-in page if not logged in.
     */
    public static function requireAuth()
    {
        if (!isset($_SESSION['user'])) {
            // $_SESSION['errors']['auth'][] = "You must be signed in to access this page.";
            header("Location: sign-in");
            exit;
        }

        // Auto logout if inactive for too long
        self::checkSessionTimeout();
    }

    /**
     * Handle 403 Forbidden response
     */
    public static function set403()
    {
        http_response_code(403);
        require __DIR__ . '/../pages/403.php';
        exit;
    }

    /**
     * only Admin role can acces pages.
     */ 

    public static function adminOnly()
    {
        self::requireAuth();
        if ($_SESSION['user']['role'] !== 'admin') {
            self::set403();
        }
    }

    /**
     * Ensure a guest (unauthenticated user) is accessing certain pages.
     * Redirect logged-in users away from sign-in/sign-up pages.
     */
    public static function guestOnly()
    {
        if (isset($_SESSION['user'])) {
            header("Location: home");
            exit;
        }
    }

    /**
     * Check if the user has a specific role.
     *
     * @param string|array $roles A single role or an array of roles.
     */
    public static function requireRole($roles)
    {
        self::requireAuth(); // Ensure user is authenticated first

        if (!isset($_SESSION['user']['role'])) {
            // No role set for the user, deny access
            header("Location: home"); // Or a 403 Forbidden page
            exit;
        }

        $userRole = $_SESSION['user']['role'];
        if (is_string($roles)) {
            $roles = [$roles]; // Convert single role to array
        }

        if (!in_array($userRole, $roles)) {
            // User does not have the required role
            header("Location: home"); // Or a 403 Forbidden page
            exit;
        }
    }

    /**
     * Auto logout inactive users.
     */
    private static function checkSessionTimeout()
    {
        $timeout_duration = 900; // 15 minutes
        if (
            isset($_SESSION['user']['last_activity']) &&
            (time() - $_SESSION['user']['last_activity']) > $timeout_duration
        ) {
            session_unset();
            session_destroy();
            header("Location: sign-in");
            exit;
        }

        $_SESSION['user']['last_activity'] = time();
    }
    public static function logout()
    {
        session_unset();
        session_destroy();
        setcookie("remember_me", "", time() - 3600, "/", "", true, true);
        header("Location: sign-in");
        exit;
    }
}