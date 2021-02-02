<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

get('/', 'view/home.php');
get('/admin', 'view/admin.php');
get('/dashboard', 'view/dashboard.php');
get('/logoutaction', 'view/logoutaction.php');

post('/loginaction', 'view/loginaction.php');


any('/404','view/404.html');