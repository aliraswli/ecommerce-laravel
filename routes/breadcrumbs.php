<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('صفحه اصلی', route('dashboard'));
});

// Cart
Breadcrumbs::for('cart.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('سبد خرید', route('cart.index'));
});

// Checkout
Breadcrumbs::for('checkout.index', function (BreadcrumbTrail $trail) {
    $trail->parent('cart.index');
    $trail->push('آدرس و زمان ارسال', route('checkout.index'));
});
