<?php
/*included files*/
//--------------------------------------------------------------
include './resource/template.php';
/*-------------------------------------------------------------*/

/*object create*/
//--------------------------------------------------------------
$template = new Template();
/*-------------------------------------------------------------*/
 
/* stylesheets*/
//--------------------------------------------------------------
$template->assign('page_title', 'Octo Soft BD'); //page title
$template->assign('css', $template->css('app')); //stylesheets
/*-------------------------------------------------------------*/

/* scripts*/
//--------------------------------------------------------------
$template->assign('js', $template->js('main')); //scripts
/*-------------------------------------------------------------*/

/* cdns*/
//--------------------------------------------------------------
$template->assign('fontawesome', '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">'); //fontawesome cdn
$template->assign('googlefonts', '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">'); //google font cdn
/*-------------------------------------------------------------*/

/* image assets*/
//--------------------------------------------------------------
$template->assign('companylogo', $template->image("company-logo.png")); //
$template->assign('herocover', $template->image("hero-cover.jpg")); //
/*-------------------------------------------------------------*/


/* dynamic content*/
//--------------------------------------------------------------
$template->assign('add-your-short-code', 'fetch-your-content'); //
//social icons
$template->assign('facebook-address', 'https://facebook.com/'); //
$template->assign('youtube-address', 'https://youtube.com/'); //
$template->assign('twitter-address', 'https://twitter.com/'); //
$template->assign('instagram-address', 'https://instagram.com/'); //

//contects
$template->assign('contact-number', '+880 1754-443303'); //
$template->assign('contact-email', 'info@octosoftbd.com'); //

//cover image
$template->assign('herocover', $template->image("hero-cover.jpg")); //

//company slogan
$template->assign('slogan', 'To Infinity And Beyond');


/*-------------------------------------------------------------*/


/* authorize */
//--------------------------------------------------------------
function useraction()
{
    $elements = '
    <div class="user-action">
        <ul>
            <li><a href=""><i class="far fa-user"></i></a></li>
            <li><a href=""><i class="fas fa-search"></i></a></li>
            <li><a href="" class="Join-Us">Join Us</a></li>
        </ul>
    </div>
    ';
    // return $elements;
    return '';
}
$template->assign('user-action', useraction());
/*-------------------------------------------------------------*/


/* template final render*/
//--------------------------------------------------------------
$template->render('index'); //page rendering
/*-------------------------------------------------------------*/