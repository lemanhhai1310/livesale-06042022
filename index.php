<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative home__content">
    <div class="uk-grid-collapse" uk-grid>
        <div class="uk-width-auto home__left">
            <div class="" uk-sticky="offset: 62">
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
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                            <ul class="uk-slider-items uk-grid uk-grid-small">
                                <?php
                                $data = array(
                                    array(
                                        'src' => '',
                                    ),
                                    array(
                                        'src' => '',
                                    ),
                                    array(
                                        'src' => '',
                                    ),
                                );
                                foreach ($data as $k=>$v):?>
                                <li class="uk-width-3-5">

                                </li>
                                <?php endforeach; ?>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-auto home__right">
            <div uk-sticky="offset: 62">
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