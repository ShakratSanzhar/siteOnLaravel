<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Главная</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head();?>


</head>

<body>
    <div class="wrapper-basic">
        <header>
            <div class="container-header">
                <div class="header__top">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-rus.svg" alt="Логотип" />
                    <p><a href="tel:+74951344200">8 495 134-42-00</a> ежедневно с 9:00 до 21:00</p>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container-header">
                    <div class="header-blocks">
                        <div class="header-blocks-menu">
                            <?php wp_nav_menu([
                                'theme_location' =>'main_menu',
                                'container'=> null,
                                'items_wrap'=> '<ul>%3$s</ul>',
                                ])
                                ?>
                        </div>
                        <div class="header-blocks-search">
                            <a href=""><i class="icon-magnifier_magnifying_glass_icon_149435"></i> Поиск</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
