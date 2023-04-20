<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <link rel="stylesheet" href="<?= url("/shared/styles/boot.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NWXZ94C');</script>
    <!-- End Google Tag Manager -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWXZ94C"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<div class="modals_pub">
    <button class="btn_close btn">X</button>
    <div class="box">
        <figure>
            <div class="card__post-carousel">
                <?php if(!$modals):?>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=5567984188044&text=Ol%C3%A1%20Jos%C3%A9%2C%20gostaria%20de%20um%20or%C3%A7amento%20para%20o%20banner%20950x150%20no%20do%20topo%20do%20site\" title="Fale agora com a equipe de vendas"><img src="<?= theme("/assets/images/placeholder/950x150.jpg"); ?>"></a>
                <?php else: foreach ($modals as $modal):?>
                    <a target="_blank" href="<?= $modal->link; ?>" title="<?= $modal->title; ?>">
                        <img src="<?= image($modal->cover, 1170, 90); ?>" alt="">
                    </a>
                <?php endforeach; endif; ?>
            </div>
        </figure>
    </div>
</div>

<!-- Header news -->
<header>
    <!-- Navbar  -->
    <div class="topbar d-none d-sm-block">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="topbar-left">
                        <div class="topbar-text">
                            Naviraí/MS, <?= date_fmt_full(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="list-unstyled topbar-right">
                        <ul class="topbar-link">
                            <li></li>
                        </ul>
                        <ul class="topbar-sosmed">
                            <?php
                            echo '<li><a class="facebook" target="_blank" href="https://www.facebook.com/' . CONF_SOCIAL_FACEBOOK_PAGE . '" title="No Facebook"><i class="fa fa-facebook"></i></a></li>';

                            echo '<li><a class="instagram" target="_blank" href="https://instagram.com/' . CONF_SOCIAL_INSTAGRAM_PAGE . '" title="No Instagram"><i class="fa fa-instagram"></i></a></li>';

                            echo '<li><a class="youtube" target="_blank" href="https://www.youtube.com/' . CONF_SOCIAL_YOUTUBE_PAGE . '" title="No YouTube"><i class="fa fa-youtube"></i></a></li>';
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- logo -->
    <div class="bg-white ">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 col-md-4 my-auto d-none d-sm-block ">
                    <figure class="mb-0">
                        <a href="<?= url(); ?>">
                            <img src="<?= theme("/assets/images/logo.png"); ?>" alt="" class="img-fluid logo">
                        </a>
                    </figure>
                </div>
                <div class="col-md-8 d-none d-sm-block ">
                    <figure class="mt-3">
                        <div class="card__post-carousel">
                            <a target="_blank" href="<?= $homeTop->link; ?>" title="<?= $homeTop->title; ?>">
                                <img src="<?= imagesGif($homeTop->cover); ?>" alt="">
                            </a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo -->

    <!-- NAVBAR -->
    <div class="navigation-wrap navigation-shadow bg-white">
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
            <div class="container">
                <div class="offcanvas-header">
                    <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                        <span class="navbar-toggler-icon"></span>
                    </div>
                </div>

                <figure class="mb-0 mx-auto d-block d-sm-none sticky-logo">
                    <a href="<?= url(); ?>">
                        <img src="<?= theme("/assets/images/logo.png"); ?>" alt="" class="img-fluid logo">
                    </a>
                </figure>

                <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url(); ?>">Página Inicial</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= url("/artigos"); ?>">Últimas Notícias</a>
                        </li>

                        <?php foreach($menus as $menu):
                            $subMenus = $menu->subCategories();
                            ?>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link <?= $subMenus ? "dropdown-toggle" : "" ?>"

                                    href="<?= url("/artigos/em/{$menu->uri}"); ?>"><?= $menu->title; ?>
                                </a>

                                <?php if($menu->subCategories()): ?>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <?php foreach($menu->subCategories() as $subMenu): ?>
                                            <li><a class="dropdown-item" href="<?= url("/artigos/em/{$subMenu->uri}"); ?>"><?= $subMenu->title; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>

                        <!-- PESQUISA -->
                        <!-- Search bar.// -->
                        <ul class="navbar-nav ">
                            <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>

                        <!-- Search content bar.// -->
                        <div class="top-search navigation-shadow">
                            <div class="container">
                                <div class="input-group ">
                                    <form name="search" action="<?= url("/artigos/buscar"); ?>" method="post" enctype="multipart/form-data">
                                        <div class="row no-gutters mt-3">
                                            <div class="col">
                                                <input class="form-control border-secondary border-right-0 rounded-0" type="text" name="s" placeholder="Pesquisar matérias: " required />
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </ul><!-- Search content bar.// -->
                </div>
            </div>
        </nav>
    </div>

    <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-aside" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="widget__form-search-bar  ">
                        <form name="search" action="<?= url("/artigos/buscar"); ?>" method="post" enctype="multipart/form-data">
                            <div class="row no-gutters">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" type="text" name="s" placeholder="Pesquisar matérias: " required />
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <nav class="list-group list-group-flush">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?= url(); ?>"> Página Inicial</a>
                            </li>

                            <?php foreach($menus as $menu):
                                $subMenus = $menu->subCategories();
                                ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link <?= $subMenus ? "dropdown-toggle" : "" ?>"
                                       href="<?= url("/artigos/em/{$menu->uri}"); ?>"><?= $menu->title; ?>
                                    </a>

                                    <?php if($menu->subCategories()): ?>
                                        <ul class="dropdown-menu dropdown-menu-left">
                                            <?php foreach($menu->subCategories() as $subMenu): ?>
                                                <li><a class="dropdown-item" href="<?= url("/artigos/em/{$subMenu->uri}"); ?>"><?= $subMenu->title; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> <!-- modal-bialog .// -->
    </div> <!-- modal.// -->
    <!-- End Navbar  -->
</header>
<!-- End Header news -->

<!--CONTENT-->
<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<section class="wrapper__section p-0">
    <div class="wrapper__section__components">
        <!-- Footer  -->
        <footer>
            <div class="wrapper__footer bg__footer ">
                <div class=" container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget__footer">
                                <!-- <h4 class="footer-title">company info</h4> -->
                                <figure>
                                    <img src="<?= theme("/assets/images/logo-footer.png"); ?>" alt=""
                                         class="logo-footer">
                                </figure>
                            </div>
                            <div class="border-line"></div>
                            <div class="widget__footer">
                                <h4 class="footer-title">Siga-Nos</h4>
                                <p>
                                    <?php
                                    echo '<a class="btn btn-social btn-social-o facebook mr-1" target="_blank" href="https://www.facebook.com/' . CONF_SOCIAL_FACEBOOK_PAGE . '" title="No Facebook"><i class="fa fa-facebook"></i></a>';

                                    echo '<a class="btn btn-social btn-social-o instagram mr-1" target="_blank" href="https://instagram.com/' . CONF_SOCIAL_INSTAGRAM_PAGE . '" title="No Instagram"><i class="fa fa-instagram"></i></a>';

                                    echo '<a class="btn btn-social btn-social-o youtube mr-1" target="_blank" href="https://www.youtube.com/' . CONF_SOCIAL_YOUTUBE_PAGE . '" title="No YouTube"><i class="fa fa-youtube"></i></a>';
                                    ?>
                                </p>
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="col-md-4">
                            <div class="widget__footer">
                                <h4 class="footer-title">Mais vistos</h4>

                                <?php
                                foreach ($otherViews as $principal): ?>
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                                    <img src="<?= image($principal->cover, 500, 400) ?>" alt="">
                                                </a>
                                            </div>

                                            <div class="card__post__body ">
                                                <div class="card__post__content">
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><span class="text-primary">by <?= $principal->author()->fullName(); ?></span></li>
                                                            <li class="list-inline-item"><span class="text-dark text-capitalize"><?= date("d/m/Y", strtotime($principal->post_at)); ?></span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6 class="bg-white"><a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                                                <?= str_limit_chars($principal->title, 50); ?>
                                                            </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="widget__footer">
                                <h4 class="footer-title">Fique por dentro</h4>
                                <?php
                                foreach ($viewPlusTwo as $principal): ?>
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                                    <img src="<?= image($principal->cover, 500, 400) ?>" alt="">
                                                </a>
                                            </div>

                                            <div class="card__post__body ">
                                                <div class="card__post__content">
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><span class="text-primary">by <?= $principal->author()->fullName(); ?></span></li>
                                                            <li class="list-inline-item"><span class="text-dark text-capitalize"><?= date("d/m/Y", strtotime($principal->post_at)); ?></span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6 class="bg-white"><a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                                                <?= str_limit_chars($principal->title, 50); ?>
                                                            </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="bg__footer-bottom ">
                <div class="container">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-6">
                            <span>
                                © 2011 - <?= date("Y"); ?> | <?= CONF_SITE_NAME; ?> - Todos os direitos reservados.
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span>Desenvolvido por: <a target="_blank" href="https://www.instagram.com/samuel.andrade.fogaca">Samuel Andrade Fogaça</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer  -->
    </div>
</section>


<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<script src="https://kit.fontawesome.com/bf9074caa2.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cc3d171406.js" crossorigin="anonymous"></script>
</body>
</html>
