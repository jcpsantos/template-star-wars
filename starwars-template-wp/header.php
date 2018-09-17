<?php
    /**
     * O header do template
     * 
     * @package Star Wars
     */

?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width: device-width, initial-scale=1">
		<meta name="author" content="Juan Caio">
        <title>Star Wars</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Google Icon Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet"><!--Font Poppins-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--Materialize 1.0-->
        <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css"><!--Css Shake-->
        <link rel="stylesheet" href="wp-content/themes/starwars-template-wp/css/style.css">
        <!--Favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="wp-content/themes/starwars-template-wp/img/favicon.ico">
        <?php wp_head(); ?>
    </head>
    <body>
        <header id="menu" class="menu-sw">
            <div class="navbar-fixed navbar-sw"><!--Menu-->
                <nav class="nav-menu-sw nav-sw" id="nav">
                    <div class="container-sw">
                        <div class="nav-wrapper">
                            <a href="#menu" class="brand-logo">
                                <img src="wp-content/themes/starwars-template-wp/img/logo-home.png" class="responsive-img logo-mobile-sw">
                            </a>
                            <a href="#" data-target="mobile-demo" class="dropdown-trigger menu-responsivo-sw"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down hover-menu-sw nav-sw">
                                <li><a href="#menu">Home</a></li>
                                <li><a href="#sobre">Sobre</a></li>
                                <li><a href="#noticias">Notícias</a></li>
                                <li><a href="#contato">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <ul class="dropdown-content" id="mobile-demo">
                    <li><a href="#menu">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#noticias">Notícias</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
            <div>
                <section class="home-sw"><!--Home-->
                    <div class="content-sw">
                        <div id="large-header" class="large-header-sw">
                            <canvas id="canvas"></canvas>
                            <div class="container-sw ">
                                <div class="row">
                                    <div class="col s12 m6 l6 xl6 valign-wrapper title-sw">
                                        <div class="row">
                                            <div class="col s12">
                                                <h1>THE LAST JEDI</h1>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, cum ne omnes delectus. 
                                            An pro mutat tractatos, eu quo debitis intellegam. </p>
                                            <a class="btn btn-home-sw">Assista agora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="center-align btn-expand-sw nav-sw shake-opacity shake-constant shake-constant--hover">
                                    <a href="#sobre">
                                        <i class="medium material-icons">expand_more</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>