<html lang="ja">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flickity.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <?php if( is_user_logged_in() ) : ?>
        <style type="text/css">
            header {
                margin-top: 32px;
            }
            @media screen and (max-width: 800px){
                header {
                    margin-top: 45px;
                }
                .smartphone-nav{
                    padding-top: 45px;
                }
            }

        </style>
        <?php endif; ?>
    </head>
    <body>
        <header>
            <div class="header-into-box">
                <a href="/">
                    <div class="top-icons-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/computer_man.png" class="top-icon">
                        <h2 class="top-text">KuroonRails</h2>
                    </div>
                </a>
                <nav class="desktop-nav">
                    <div class="nav-box">
                        <a href="/#Profile" class="move-link animation top">
                            <li class="li-top-text">
                                <h4>Profile</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="/#Assign" class="move-link animation top">
                            <li class="li-top-text">
                                <h4>Assign</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="/#Service" class="move-link animation top">
                            <li class="li-top-text">
                                <h4>Service</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="/blogs/">
                            <li class="li-top-text">
                                <h4>Blogs</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="https://twitter.com/Kuro_on_Rails" target="_blank">
                            <li class="li-top-text">
                                <h4>Twitter</h4>
                            </li>
                        </a>           
                    </div>
                </nav>
                <img src="<?php echo get_template_directory_uri(); ?>/img/smartphoneMenu.png" class="smart-phone-button smartphone-view">
                <nav class="smartphone-nav">
                    <div class="nav-box forwards">
                        <a href="/#Profile">
                            <li class="li-top-text">
                                <h4>Profile</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="/#Assign">
                            <li class="li-top-text">
                                <h4>Assign</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="/#Service">
                            <li class="li-top-text">
                                <h4>Service</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="/blogs/">
                            <li class="li-top-text">
                                <h4>Blogs</h4>
                            </li>
                        </a>           
                    </div>
                    <div class="nav-box">
                        <a href="https://twitter.com/Kuro_on_Rails" target="_blank">
                            <li class="li-top-text">
                                <h4>Twitter</h4>
                            </li>
                        </a>           
                    </div>
                </nav>
            </div>
        </header>
        <div class="content-space">
        </div>