<?php
/*included files*/
//--------------------------------------------------------------
include './resource/template.php';
include './resource/auth.php';
/*-------------------------------------------------------------*/

/*object create*/
//--------------------------------------------------------------
$template = new Template();
$auth = new auth();
/*-------------------------------------------------------------*/

/* authorize */
//--------------------------------------------------------------

if ($auth->session()) {
    header('location:/dashboard');
} else {
    $pagetitle = 'Login';
    $formtype = 'loginform';
    $pagename = 'login';
}

/*-------------------------------------------------------------*/


/* stylesheets*/
//--------------------------------------------------------------
$template->assign('page_title', $pagetitle . ' | Octo Soft BD'); //page title
$template->assign('css', $template->css('admin.app')); //stylesheets
/*-------------------------------------------------------------*/

/* scripts*/
//--------------------------------------------------------------
$template->assign('js', $template->js('main')); //scripts
$template->assign('loginscript', $template->js('login')); //scripts
/*-------------------------------------------------------------*/

/* cdns*/
//--------------------------------------------------------------
$template->assign('fontawesome', '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">'); //fontawesome cdn
$template->assign('googlefonts', '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">'); //google font cdn
$template->assign('jquery','<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>');
/*-------------------------------------------------------------*/

/* image assets*/
//--------------------------------------------------------------
$template->assign('companylogo', $template->image("company-logo.png")); //
/*-------------------------------------------------------------*/


/* dynamic content*/
//--------------------------------------------------------------
$template->assign('add-your-short-code', 'fetch-your-content'); //

function myform($template){
    //login form
    $template->assign('action-title', 'Login'); //
    $template->assign('input1', 'email'); //
    $template->assign('input2', 'password'); //
    $template->assign('submit', 'Login'); //
}

if ($formtype = 'loginform') {
    myform($template);
}

/*-------------------------------------------------------------*/



/* template final render*/
//--------------------------------------------------------------
$template->render($pagename); //page rendering
/*-------------------------------------------------------------*/