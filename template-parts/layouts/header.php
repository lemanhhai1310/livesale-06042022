<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Livesale - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<nav class="header uk-navbar-container uk-navbar-transparent uk-background-default" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item uk-logo"><img src="images/Livesale.com/Livesale.com/livesaleLogo-021.png" alt=""></a>
    </div>
    <div class="uk-navbar-center">
        <a href="" class="uk-navbar-item uk-active"><span class="header__icon header__icon--home"></span></a>
        <a href="" class="uk-navbar-item"><span class="header__icon header__icon--categori"></span></a>
        <a href="" class="uk-navbar-item"><span class="header__icon header__icon--news"></span></a>
    </div>
    <div class="uk-navbar-right">
        <div class="uk-navbar-item">
            <form class="uk-search uk-search-default header__search">
                <span class="uk-search-icon-flip header__search__icon" uk-search-icon></span>
                <input class="uk-search-input header__search__input" type="search" placeholder="Tìm kiếm">
            </form>
        </div>
        <div class="uk-navbar-item">
            <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                <div>
                    <a href="" class="header__right__icon header__right__icon--cart" data-count="3"></a>
                </div>
                <div>
                    <a href="" class="header__right__icon header__right__icon--chat"></a>
                </div>
                <div>
                    <a href="" class="header__right__icon header__right__icon--notify" data-count="3"></a>
                </div>
            </div>
        </div>
        <div class="uk-navbar-item">
            <div class="uk-cover-container uk-border-circle">
                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                <canvas width="36" height="36"></canvas>
            </div>
        </div>
    </div>
</nav>