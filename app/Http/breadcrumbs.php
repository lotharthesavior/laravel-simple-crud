<?php 

// Home ------------

Breadcrumbs::register('home', function($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
});

// / Home ----------


// Auth ------------

Breadcrumbs::register('login', function($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Login', route('login'));
});

Breadcrumbs::register('register', function($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Login', route('login'));
    $breadcrumbs->push('Register', route('register'));
});

// / Auth ----------


// Messages ------------

Breadcrumbs::register('messages', function($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Messages', route('messages'));
});

Breadcrumbs::register('editmessage', function($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Messages', route('messages'));
    $breadcrumbs->push('Edit Message', route('editmessage'));
});

Breadcrumbs::register('newmessage', function($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Messages', route('messages'));
    $breadcrumbs->push('New Message', route('newmessage'));
});

// / Messages ----------