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

// Payment
Breadcrumbs::for('payment.index', function (BreadcrumbTrail $trail) {
    $trail->parent('cart.index');
    $trail->push('پرداخت نهایی', route('payment.index'));
});

// Payment
Breadcrumbs::for('about-us', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('درباره ما', route('static.about-us'));
});

Breadcrumbs::for('shop', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('فروشگاه', route('product.index'));
});
Breadcrumbs::for('product-details', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('shop');
    $trail->push('جزییات محصول', route('product.details', $id));
});
