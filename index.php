<?php $v->layout("_theme"); ?>

<!-- Popular Content news -->
<section class="bg-content">
    <div class="container">
        <div class="row">
            <!-- Col-08 -->
            <div class="col-md-8">
                <!-- Banner ads -->
                <figure class="mb-4">
                    <div class="card__post-carousel">
                        <?php if(!$homeTopSliders):?>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=5567984188044&text=Ol%C3%A1%20Jos%C3%A9%2C%20gostaria%20de%20um%20or%C3%A7amento%20para%20o%20banner%20950x150%20no%20do%20topo%20do%20site\" title="Fale agora com a equipe de vendas"><img src="<?= theme("/assets/images/placeholder/950x150.jpg"); ?>"></a>
                        <?php else: foreach ($homeTopSliders as $homeTopSlider):?>
                            <a target="_blank" href="<?= $homeTopSlider->link; ?>" title="<?= $homeTopSlider->title; ?>">
                                <img src="<?= image($homeTopSlider->cover, 950, 150); ?>" alt="">
                            </a>
                        <?php endforeach; endif; ?>
                    </div>
                </figure>
                <!-- End Banner ads -->

                <!-- Popular news carousel -->
                <div class="card__post-carousel">
                    <?php
                    foreach ($carrousels as $carrousel): ?>
                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body">
                                    <a title="Ler mais sobre <?= $carrousel->title; ?>" href="<?= url("/artigos/artigo/{$carrousel->uri}"); ?>">
                                        <img src="<?= image($carrousel->cover, 800, 600) ?>" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category"><?= $carrousel->category()->title; ?></div>
                                        <div class="card__post__title">
                                            <h2><a title="Ler mais sobre <?= $carrousel->title; ?>" href="<?= url("/artigos/artigo/{$carrousel->uri}"); ?>">
                                                    <?= str_limit_chars($carrousel->title, 50); ?>
                                                </a></h2>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="#">by <?= $carrousel->author()->fullName(); ?></a></li>
                                                <li class="list-inline-item"><span><?= date("d/m/Y", strtotime($carrousel->post_at)); ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
                <!-- End Popular news carousel -->

                <!-- Banner ads -->
                <figure class="mt-4 mb-4">
                    <div class="card__post-carousel">
                        <?php if(!$homeDownSliders):?>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=5567984188044&text=Ol%C3%A1%20Jos%C3%A9%2C%20gostaria%20de%20um%20or%C3%A7amento%20para%20o%20banner%20950x150%20no%20do%20topo%20do%20site\" title="Fale agora com a equipe de vendas"><img src="<?= theme("/assets/images/placeholder/950x150.jpg"); ?>"></a>
                        <?php else: foreach ($homeDownSliders as $homeTopSlider):?>
                            <a target="_blank" href="<?= $homeTopSlider->link; ?>" title="<?= $homeTopSlider->title; ?>">
                                <img src="<?= image($homeTopSlider->cover, 950, 150); ?>" alt="">
                            </a>
                        <?php endforeach; endif; ?>
                    </div>
                </figure>
                <!-- End Banner ads -->

                <!-- Principais notícias da semana -->
                <div class="wrapper__list__article">
                    <h4 class="border_section">Principais notícias da semana</h4>

                    <div class="row ">
                        <div class="col-lg-6 pd-0">
                            <?php
                            foreach ($principals as $principal): ?>
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                            <img src="<?= image($principal->cover, 500, 400) ?>" alt="">
                                        </a>
                                    </div>

                                    <div class="article__content">
                                        <div class="article__category"><?= $principal->category()->title; ?></div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="text-primary">by <?= $principal->author()->fullName(); ?></span></li>
                                            <li class="list-inline-item"><span class="text-dark text-capitalize"><?= date("d/m/Y", strtotime($principal->post_at)); ?></span></li>
                                        </ul>
                                        <h5><a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                                <?= str_limit_chars($principal->title, 50); ?>
                                            </a></h5>
                                        <div class="htmlchars"><?= html_entity_decode(str_limit_chars($principal->content, 130)); ?></div>
                                        </div>
                                </div>
                            <?php
                            endforeach;
                            ?>

                            <?php
                            foreach ($principalsTwo as $principal): ?>
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
                                                    <h6><a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
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

                        <div class="col-lg-6 pd-0">
                            <?php
                            foreach ($principalsTree as $principal): ?>
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                            <img src="<?= image($principal->cover, 500, 400) ?>" alt="">
                                        </a>
                                    </div>

                                    <div class="article__content">
                                        <div class="article__category"><?= $principal->category()->title; ?></div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="text-primary">by <?= $principal->author()->fullName(); ?></span></li>
                                            <li class="list-inline-item"><span class="text-dark text-capitalize"><?= date("d/m/Y", strtotime($principal->post_at)); ?></span></li>
                                        </ul>
                                        <h5><a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
                                                <?= str_limit_chars($principal->title, 50); ?>
                                            </a></h5>
                                        <div class="htmlchars"><?= html_entity_decode(str_limit_chars($principal->content, 130)); ?></div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>

                            <?php
                            foreach ($principalsFor as $principal): ?>
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
                                                    <h6><a title="Ler mais sobre <?= $principal->title; ?>" href="<?= url("/artigos/artigo/{$principal->uri}"); ?>">
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
                <!-- End Principais notícias da semana -->

                <!-- Popular 3 news carousel -->
                <div class="wrapper__list__article">
                    <h4 class="border_section">Fique por dentro</h4>
                    <div class="row ">
                        <div class="col-lg-12 pd-0">
                            <div class="article__entry-carousel-three">
                                <?php
                                foreach ($fiquePorDentro as $fique): ?>
                                    <div class="item">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a title="Ler mais sobre <?= $fique->title; ?>" href="<?= url("/artigos/artigo/{$fique->uri}"); ?>">
                                                    <img src="<?= image($fique->cover, 500, 400) ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><span class="text-primary">by <?= $fique->author()->fullName(); ?></span></li>
                                                    <li class="list-inline-item"><span class="text-dark text-capitalize"><?= date("d/m/Y", strtotime($fique->post_at)); ?></span></li>
                                                </ul>
                                                <h5><a title="Ler mais sobre <?= $fique->title; ?>" href="<?= url("/artigos/artigo/{$fique->uri}"); ?>">
                                                        <?= str_limit_chars($fique->title, 50); ?>
                                                    </a></h5>
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
                <!-- End Popular 3 news carousel -->

                <?php if($homeVideos): ?>
                    <!-- Popular 3 news carousel -->
                    <div class="wrapper__list__article">
                        <h4 class="border_section">Fique ligado</h4>
                        <div class="row ">
                            <div class="col-lg-12 pd-0">
                                <div class="article__entry-carousel-three">
                                    <?php
                                    foreach ($homeVideos as $video): ?>
                                        <div class="item">
                                            <!-- Post Article -->
                                            <div class="article__entry">
                                                <div class="article__image">
                                                    <div class="embed">
                                                        <iframe src="https://www.youtube.com/embed/<?= $video->video_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <div class="article__content">
                                                    <h5><?= str_limit_chars($video->title, 50); ?></h5>
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
                    <!-- End Popular 3 news carousel -->
                <?php endif; ?>

            </div>
            <!-- End Col-08 -->

            <!-- Col-04 -->
            <!-- SIDEBAR -->
            <?php $v->insert("inc/sidebar.php"); ?>

            <!-- End Col-04 -->
        </div>
    </div>
</section>
<!-- End Popular Content news -->
