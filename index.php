<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative home__content">
    <div class="uk-grid-collapse" uk-grid>
        <div class="uk-width-auto home__left">
            <div class="" uk-sticky="offset: 62;bottom: true;">
                <div class="item__12">
                    <div class="uk-background-default uk-padding-small home__boxUser">
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-border-circle">
                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                    <canvas width="60" height="60"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="item__10">
                                    <div class="home__boxUser__name">Hoàng Thùy Linh</div>
                                </div>
                                <div class="item__10">
                                    <div style="--background: url('images/Livesale.com/Livesale.com/image27.png')" class="home__boxUser__txt uk-border-pill">Kim cương xanh</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item__12">
                    <div class="home__boxNav uk-overflow-auto uk-padding-small uk-background-default">
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple:true">
                            <li class="uk-parent uk-open">
                                <a href="#">Sản phẩm</a>
                                <ul class="uk-nav-sub">
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--categori uk-border-circle" data-count="3"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Danh mục sản phẩm</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--timer uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Sản phẩm mới</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--timer uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Top đề xuất</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--timer uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Top bán chạy</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--liked uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Sản phẩm đã thích</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--salelike uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Livesaler đã thích</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="uk-parent uk-open">
                                <a href="#">Đơn hàng</a>
                                <ul class="uk-nav-sub">
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--timer uk-border-circle" data-count="3"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Chờ xác nhận</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--pickup uk-border-circle" data-count="3"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Chờ lấy hàng</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--delivery uk-border-circle" data-count="3"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Đang giao hàng</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--receive uk-border-circle" data-count="3"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Đã nhận hàng</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--receive uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Trả hàng</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="uk-parent uk-open">
                                <a href="#">Công cụ khác</a>
                                <ul class="uk-nav-sub">
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--timer uk-border-circle" data-count="3"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Học viện livesale</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--timer uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Chờ lấy hàng</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="home__boxNav__li">
                                        <a class="home__boxNav__a" href="#">
                                            <div class="uk-flex-middle uk-grid-27" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="home__boxNav__icon home__boxNav__icon--timer uk-border-circle"></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="home__boxNav__txt">Bán hàng cùng Affiliate Livesale</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-expand">
            <div class="uk-container uk-container-small">
                <div class="home__box1 uk-background-default item__10">
                    <div class="home__box1__header">
                        <div class="home__box1__header__title uk-position-relative uk-text-center"><span>Danh mục</span></div>
                    </div>
                    <div class="home__box1__body">
                        <div uk-slider>

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-match uk-grid-small" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/balo.png',
                                                'txt' => 'Ba lô  & Túi ví nam',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/bachhoa.png',
                                                'txt' => 'Bách hoá online',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/thucung.png',
                                                'txt' => 'Chăm sóc thú cưng',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/giaydep.png',
                                                'txt' => 'Giày dép nam',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/giaydepnu.png',
                                                'txt' => 'Giày dép nữ',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/maytinh.png',
                                                'txt' => 'Máy  tính & Laptop',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/giatgiu.png',
                                                'txt' => 'Giặt giũ & Nhà cửa ',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/suckhoe.png',
                                                'txt' => 'Sức khỏe',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/tuivi.png',
                                                'txt' => 'Túi ví nữ',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/phukien.png',
                                                'txt' => 'Phụ kiện',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/sach.png',
                                                'txt' => 'Sách',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/lamdep.png',
                                                'txt' => 'Làm đẹp',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/balo.png',
                                                'txt' => 'Ba lô  & Túi ví nam',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/bachhoa.png',
                                                'txt' => 'Bách hoá online',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/thucung.png',
                                                'txt' => 'Chăm sóc thú cưng',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/giaydep.png',
                                                'txt' => 'Giày dép nam',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/giaydepnu.png',
                                                'txt' => 'Giày dép nữ',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/maytinh.png',
                                                'txt' => 'Máy  tính & Laptop',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/giatgiu.png',
                                                'txt' => 'Giặt giũ & Nhà cửa ',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/suckhoe.png',
                                                'txt' => 'Sức khỏe',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/tuivi.png',
                                                'txt' => 'Túi ví nữ',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/phukien.png',
                                                'txt' => 'Phụ kiện',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/sach.png',
                                                'txt' => 'Sách',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/lamdep.png',
                                                'txt' => 'Làm đẹp',
                                            ),
                                        );
                                        foreach ($data as $k=>$v): ?>
                                        <?php if ($k%2==0): ?>
                                            <li class="uk-text-center uk-flex uk-flex-column">
                                                <div class="home__box1__body__item item__15 uk-flex-1 uk-flex uk-flex-column">
                                                    <div class="item__8">
                                                        <img src="<?= $v['src'] ?>" alt="">
                                                    </div>
                                                    <div class="item__8 uk-flex-auto">
                                                        <div class="home__box1__body__name"><a href=""><?= $v['txt'] ?></a></div>
                                                    </div>
                                                </div>
                                        <?php else: ?>
                                                <div class="home__box1__body__item item__15 uk-flex-1 uk-flex uk-flex-column">
                                                    <div class="item__8">
                                                        <img src="<?= $v['src'] ?>" alt="">
                                                    </div>
                                                    <div class="item__8 uk-flex-auto">
                                                        <div class="home__box1__body__name"><a href=""><?= $v['txt'] ?></a></div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="uk-hidden@s uk-light">
                                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s">
                                    <a class="home__box1__body__nav home__box1__body__nav--prev uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="home__box1__body__nav home__box1__body__nav--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                            </div>

                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

                        </div>
                    </div>
                </div>
                <div class="home__box2 uk-background-default item__10">
                    <div class="item__20">
                        <div class="home__box2__title">Top đề xuất</div>
                    </div>
                    <div class="item__20">
                        <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true">

                            <ul class="uk-slider-items uk-grid uk-grid-small">
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/top1.png',
                                    ),
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/top1.png',
                                    ),
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/top1.png',
                                    ),
                                );
                                foreach ($data as $k=>$v):?>
                                <li class="uk-width-3-5">
                                    <div class="uk-grid-match uk-grid-collapse" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="uk-cover-container">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                <canvas width="116" height="116"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-padding-small home__box2__box">
                                                <div class="home__box2__item home__box2__name"><a href="">Máy chăm sóc da đa chức năng Dr.Glatt Dua Fit...</a></div>
                                                <div class="home__box2__item">
                                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/Livesale.com/Livesale.com/logobrand.png" alt="" uk-cover="">
                                                                <canvas width="35" height="35"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="home__box2__name">Blerluti Clother</div>
                                                            <div class="home__box2__txt">Standard</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="home__box2__item home__box2__price">238.000đ</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin home__box2__dot"></ul>

                        </div>
                    </div>
                </div>
                <div class="uk-background-default item__10 home__boxToplivesaler">
                    <div class="home__boxToplivesaler__header">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="home__boxToplivesaler__header__title">Top Livesaler</div>
                            </div>
                            <div class="uk-width-auto">
                                <a href="" class="home__boxToplivesaler__header__linkmore">xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="home__boxToplivesaler__body">
                        <div uk-slider>

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/beautiful-asian-business-woman-is-working-with-her-computer-home 1.png',
                                                'name' => 'Huyền Trang Thu',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/lifestyle-beautiful-asian-business-young-woman-using-laptop-computer-office-desk 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/portrait-young-asia-lady-with-positive-expression-arms-crossed-smile-broadly-dressed-casual-clothing-looking-camera-pink-background 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/young-asian-woman-smiling-pointing-finger 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/beautiful-asian-business-woman-is-working-with-her-computer-home 1.png',
                                                'name' => 'Huyền Trang Thu',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/lifestyle-beautiful-asian-business-young-woman-using-laptop-computer-office-desk 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/portrait-young-asia-lady-with-positive-expression-arms-crossed-smile-broadly-dressed-casual-clothing-looking-camera-pink-background 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/young-asian-woman-smiling-pointing-finger 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                        );
                                        foreach ($data as $k=>$v): ?>
                                            <li>
                                                <div class="uk-padding-small home__boxToplivesaler__body__box">
                                                    <div class="home__boxToplivesaler__body__item">
                                                        <div class="uk-cover-container">
                                                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                            <canvas width="134" height="147"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="home__boxToplivesaler__body__item">
                                                        <div class="home__boxToplivesaler__body__name"><?= $v['name'] ?></div>
                                                        <div class="home__boxToplivesaler__body__kimcuong uk-border-pill">
                                                            <img class="uk-position-center-left" src="images/Livesale.com/Livesale.com/kimc.png" alt="">
                                                            Kim cương xanh
                                                        </div>
                                                    </div>
                                                    <div class="home__boxToplivesaler__body__item">
                                                        <div class="uk-child-width-auto uk-flex-center uk-flex-middle" uk-grid>
                                                            <div>
                                                                <div class="uk-text-center">
                                                                    <div class="home__boxToplivesaler__body__label">Follower</div>
                                                                    <div class="home__boxToplivesaler__body__value">1.5M</div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-text-center">
                                                                    <div class="home__boxToplivesaler__body__label">Đã bán</div>
                                                                    <div class="home__boxToplivesaler__body__value">1000</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home__boxToplivesaler__body__item">
                                                        <div class="uk-grid-10 uk-child-width-1-2" uk-grid>
                                                            <div>
                                                                <a href="" class="home__boxToplivesaler__body__btn uk-border-pill uk-button uk-button-default uk-button-small">Xem trang</a>
                                                            </div>
                                                            <div>
                                                                <a href="" class="home__boxToplivesaler__body__btn uk-border-pill uk-button uk-button-default uk-button-small">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="uk-hidden@s uk-light">
                                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s">
                                    <a class="home__box1__body__nav home__box1__body__nav--prev uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="home__box1__body__nav home__box1__body__nav--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                            </div>

                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin home__box2__dot"></ul>

                        </div>
                    </div>
                </div>
                <div class="item__10 home__box3">
                    <div class="uk-grid-small uk-grid-match" uk-grid>
                        <div class="uk-width-1-3@m">
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">

                                <ul class="uk-slider-items uk-child-width-1-1">
                                    <li>
                                        <div class="uk-cover-container">
                                            <img src="images/sp/Livesale.com/Livesale.com/banner.png" alt="" uk-cover="">
                                            <canvas width="248" height="304"></canvas>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-cover-container">
                                            <img src="images/sp/Livesale.com/Livesale.com/banner.png" alt="" uk-cover="">
                                            <canvas width="248" height="304"></canvas>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-cover-container">
                                            <img src="images/sp/Livesale.com/Livesale.com/banner.png" alt="" uk-cover="">
                                            <canvas width="248" height="304"></canvas>
                                        </div>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center home__box2__dot"></ul>

                            </div>
                        </div>
                        <div class="uk-width-expand">

                        </div>
                    </div>
                </div>
                <div class="item__10 home__boxSp uk-background-default">
                    <div class="home__boxSp__header">
                        <div class="uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-expand uk-first-column">
                                <div class="home__boxToplivesaler__header__title">Top bán chạy</div>
                            </div>
                            <div class="uk-width-auto">
                                <a href="" class="home__boxToplivesaler__header__linkmore">Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                    <div class="home__boxSp__body">
                        <div class="uk-grid-small uk-child-width-1-5@m uk-grid-row-medium" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp1.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp2.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp3.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp4.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp5.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp6.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp7.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp8.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp9.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp10.png',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <div>
                                <div class="item__5">
                                    <div class="uk-cover-container">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                        <canvas width="140" height="164"></canvas>
                                    </div>
                                </div>
                                <div class="item__5">
                                    <div class="home__boxSp__name"><a href="">Bộ 10 cọ trang điểm và 1 hộp đứng hồng</a></div>
                                </div>
                                <div class="item__5">
                                    <div class="home__boxSp__price">350.000 đ</div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="item__10"><img src="images/Livesale.com/Livesale.com/banner1.png" alt=""></div>
                <div class="item__10 home__boxSp uk-background-default">
                    <div class="home__boxSp__header">
                        <div class="uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-expand uk-first-column">
                                <div class="home__boxToplivesaler__header__title">Sản phẩm mới</div>
                            </div>
                            <div class="uk-width-auto">
                                <a href="" class="home__boxToplivesaler__header__linkmore">Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                    <div class="home__boxSp__body">
                        <div class="uk-grid-small uk-child-width-1-5@m uk-grid-row-medium" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp1.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp2.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp3.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp4.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp5.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp6.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp7.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp8.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp9.png',
                                ),
                                array(
                                    'src' => 'images/sp/Livesale.com/Livesale.com/sp10.png',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                                <div>
                                    <div class="item__5">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                            <canvas width="140" height="164"></canvas>
                                        </div>
                                    </div>
                                    <div class="item__5">
                                        <div class="home__boxSp__name"><a href="">Bộ 10 cọ trang điểm và 1 hộp đứng hồng</a></div>
                                    </div>
                                    <div class="item__5">
                                        <div class="home__boxSp__price">350.000 đ</div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!--ƯU ĐÃI HOT-BỘ SƯU TẬP-->
                <div class="item__10">
                    <div><img class="uk-width-1-1" src="images/Livesale.com/Livesale.com/chuongngayle.png" alt=""></div>
                    <div class="home__blockUudaihot__card uk-card uk-card-body">

                        <div uk-slider>

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/beautiful-asian-business-woman-is-working-with-her-computer-home 1.png',
                                                'name' => 'Huyền Trang Thu',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/lifestyle-beautiful-asian-business-young-woman-using-laptop-computer-office-desk 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/portrait-young-asia-lady-with-positive-expression-arms-crossed-smile-broadly-dressed-casual-clothing-looking-camera-pink-background 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/young-asian-woman-smiling-pointing-finger 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/beautiful-asian-business-woman-is-working-with-her-computer-home 1.png',
                                                'name' => 'Huyền Trang Thu',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/lifestyle-beautiful-asian-business-young-woman-using-laptop-computer-office-desk 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/portrait-young-asia-lady-with-positive-expression-arms-crossed-smile-broadly-dressed-casual-clothing-looking-camera-pink-background 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                            array(
                                                'src' => 'images/Livesale.com/Livesale.com/young-asian-woman-smiling-pointing-finger 1.png',
                                                'name' => 'Mai Thanh Trang',
                                            ),
                                        );
                                        foreach ($data as $k=>$v): ?>
                                            <li>
                                                <div class="home__blockUudaihot__box">
                                                    <div class="uk-cover-container">
                                                        <img src="images/Livesale.com/Livesale.com/uudai1.png" alt="" uk-cover="">
                                                        <canvas width="147" height="143"></canvas>
                                                    </div>
                                                    <div class="home__blockUudaihot__box__boxItem">
                                                        <div class="home__boxSp__name"><a href="">Bộ 10 cọ trang điểm và 1 hộp đứng hồng</a></div>
                                                        <div class="home__blockUudaihot__box__date">13 - 19/9/2021</div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="uk-hidden@s uk-light">
                                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s">
                                    <a class="home__box1__body__nav home__box1__body__nav--prev uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="home__box1__body__nav home__box1__body__nav--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                            </div>

                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin home__box2__dot uk-hidden"></ul>

                        </div>
                    </div>
                </div>
                <!--/ƯU ĐÃI HOT-BỘ SƯU TẬP-->
                <!--Đề xuất hôm nay-Sản phẩm kèm video-Nhà cung cấp-->
                <div class="item__10 uk-background-default uk-card home__blockDexuat__card">
                    <div class="home__blockDexuat__card__body uk-card-body">
                        <div class="item__15">
                            <ul class="uk-child-width-expand home__blockDexuat__tabNav uk-margin-remove-bottom" uk-tab>
                                <li class="uk-active"><a href="#">Đề xuất hôm nay</a></li>
                                <li><a href="#">Sản phẩm kèm video</a></li>
                                <li><a href="#">Nhà cung cấp</a></li>
                            </ul>
                        </div>
                        <div class="item__15">
                            <div class="uk-grid-5 uk-flex-middle uk-flex-right" uk-grid>
                                <div>
                                    <div class="home__blockDexuat__fillter" uk-form-custom="target: > * > span:nth-child(2)">
                                        <select>
                                            <option value="0">Giá từ cao tới thấp</option>
                                            <option value="1">Giá từ thấp tới cao</option>
                                        </select>
                                        <button class="home__blockDexuat__fillter__btn uk-button uk-button-default" type="button" tabindex="-1">
                                            <span>sắp xếp theo:</span>
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <a href="" class="home__blockDexuat__navIcon home__blockDexuat__navIcon--grid"></a>
                                    <a href="" class="home__blockDexuat__navIcon home__blockDexuat__navIcon--list"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item__15">
                            <div class="uk-grid-small uk-child-width-1-5@m uk-grid-row-medium" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp1.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp2.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp3.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp4.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp5.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp6.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp7.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp8.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp9.png',
                                    ),
                                    array(
                                        'src' => 'images/sp/Livesale.com/Livesale.com/sp10.png',
                                    ),
                                );
                                foreach ($data as $k=>$v): ?>
                                    <div>
                                        <div class="item__5">
                                            <div class="uk-cover-container">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                <canvas width="140" height="164"></canvas>
                                            </div>
                                        </div>
                                        <div class="item__5">
                                            <div class="home__boxSp__name"><a href="">Bộ 10 cọ trang điểm và 1 hộp đứng hồng</a></div>
                                        </div>
                                        <div class="item__5">
                                            <div class="home__boxSp__price">350.000 đ</div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Đề xuất hôm nay-Sản phẩm kèm video-Nhà cung cấp-->
            </div>
        </div>
        <div class="uk-width-auto home__right">
            <div uk-sticky="offset: 62;bottom: true;">
                <div class="item__9">
                    <a href=""><img src="images/Livesale.com/Livesale.com/banner.png" alt=""></a>
                </div>
                <div class="item__9">
                    <div class="uk-card uk-background-default home__card">
                        <div class="uk-padding-small home__card__header">
                            <ul class="home__card__subnav uk-subnav uk-subnav-divider" uk-margin>
                                <li class="uk-active"><a href="#">Sản phẩm mới</a></li>
                                <li><a href="#">Top đề xuất</a></li>
                                <li><a href="#">Top bán chạy</a></li>
                            </ul>
                        </div>
                        <div class="uk-card-body uk-padding-small home__card__body">
                            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/img1.png',
                                    ),
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/img2.png',
                                    ),
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/img3.png',
                                    ),
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/img4.png',
                                    ),
                                    array(
                                        'src' => 'images/Livesale.com/Livesale.com/img5.png',
                                    ),
                                );
                                foreach ($data as $k=>$v):?>
                                    <div>
                                        <div class="uk-grid-match uk-grid-27" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="uk-cover-container">
                                                    <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                    <canvas width="64" height="78"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex-1">
                                                    <div class="home__card__name"><a href="">Bộ 10 cọ trang điểm và 1 hộp đứng hồng</a></div>
                                                </div>
                                                <div class="home__card__price uk-flex-auto">350.000 đ</div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a href="" class="home__card__linkMore">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>