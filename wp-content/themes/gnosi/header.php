<?php $theme_dir = get_template_directory_uri();?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo wp_title(); ?> - Gnosi</title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href="<?php echo $theme_dir; ?>/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo $theme_dir; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $theme_dir; ?>/js/tether.min.js"></script>
        <script type="text/javascript" src="<?php echo $theme_dir; ?>/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?php site_url(); ?>">
                            <img class="logo" alt="logo" src="<?php echo $theme_dir; ?>/images/gnosi-logo.png"/>
                        </a>    
                    </div>
                    <div class="col-md-4 offset-md-4 menu">
                        <ul class="nav nav-inline">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Eventos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Noticias</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Merchandising</a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>