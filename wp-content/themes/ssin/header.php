<?php
include 'inc/Mobile_Detect.php';
$detect = new Mobile_Detect;
global $tp_options; ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css"/>
</head>
<body <?php echo body_class() ?>>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="top-header">

                        <div class="col-12 col-sm-4">
                            <div class="logo">
                                <a href="<?php echo home_url('/'); ?>">
                                    <img src="<?php echo $tp_options['logo-image']['url'] ?>">
                                </a>
                            </div>
                            <div class="mobile-button-menu ">
                                <div class="btn-menu btn-open-menu"></div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-8">

                            <div class="main-menu-top">
                                <nav>
                                    <?php wp_nav_menu(array('theme_location' => 'main-nav')) ?>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="banner">
                <?php
                $url = '';
                if ( $detect->isMobile() ) {
                    $banner = get_field('home_banner_mobile',$post->ID);
                    if ($banner != ''){
                        $url = $banner;
                    }
                    if (is_tax('procedure_category')){
                        $term = $wp_query->get_queried_object();
                        $url = get_field('banner_mobile',$term);
                        if ($url == ''){
                            $url = get_template_directory_uri().'/images/MOB-Breast_Reduction-Top_Banner-375x450px-v1@3x.png';
                        }
                    }
                    if (is_singular('procedure')){
                        $url = get_field('banner_mobile',$post->ID);
                        if ($url == ''){
                            $url = get_template_directory_uri().'/images/MOB-Breast_Reduction-Top_Banner-375x450px-v1@3x.png';
                        }
                    }
                }
                else{
                    $banner = get_field('home_banner',$post->ID);
                    if ($banner != ''){
                        $url = $banner;
                    }
                    if (is_tax('procedure_category')){
                        $term = $wp_query->get_queried_object();
                        $url = get_field('banner',$term);
                    }
                    if (is_singular('procedure')){
                        $url = get_field('banner',$post->ID);
                        if ($url == ''){
                            $url = get_template_directory_uri().'/images/WEB-Breast Reduction-Top Banner-1905x500px-v1.png';
                        }
                    }
                }


                ?>
                <img src="<?php echo $url; ?>">
            </div>
        </div>
    </div>
</header>
