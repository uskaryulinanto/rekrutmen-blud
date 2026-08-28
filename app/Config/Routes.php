<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// 1. Landing Page
$routes->get('/', 'Home::index');

// 2. Custom Auth Routes (HARUS DI ATAS service auth)
$routes->get('login', static function () {
    return view('Shield/login');
});
$routes->get('register', static function () {
    return view('Shield/register');
});

// 3. Auth Routes bawaan Shield
service('auth')->routes($routes);

// 4. Halaman Protected Area (Dashboard)
// $routes->group('dashboard', ['filter' => 'session'], static function ($routes) {
//     $routes->get('/', 'Dashboard::index');
// });

// Protected Area (Hanya untuk user logged-in)
$routes->group('', ['filter' => 'session'], static function ($routes) {
    $routes->get('dashboard', 'DashboardController::index');

    $routes->get('profile', 'ProfileController::index');
    $routes->post('profile/update', 'ProfileController::update');
});
