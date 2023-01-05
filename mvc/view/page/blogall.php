<!-- Trang Page Blog All -->
<article class="all">
    <div class="all-head">Tất cả bài viết</div>
    <div class="all-container">
        <section class="all-main">
            <!-- All Item -->
            <div class="all-main__item">
                <div class="all-main__item-img">
                    <img src="<?= ROOT_URL ?>/public/image/post/corver-photo/owl.jfif" alt="Post-image" />
                </div>
                <div class="all-main__item-list">
                    <div class="all-main__item-tag">Thẻ<span></span>Thẻ</div>
                    <div class="all-main__item-head">
                        <a href="">REVIEW NHẸ CÁC NGÔN NGỮ, CÔNG NGHỆ, FRAMEWORK MÀ MÌNH ĐÃ VÀ
                            ĐANG DÙNG KIẾM CƠM</a>
                    </div>
                    <div class="all-main__item-date">
                        01/01/2023<span></span>123 VIEW
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="all-main__item">
                <div class="all-main__item-img">
                    <img src="<?= ROOT_URL ?>/public/image/post/corver-photo/owl.jfif" alt="Post-image" />
                </div>
                <div class="all-main__item-list">
                    <div class="all-main__item-tag">Thẻ<span></span>Thẻ</div>
                    <div class="all-main__item-head">
                        <a href="">REVIEW NHẸ CÁC NGÔN NGỮ, CÔNG NGHỆ, FRAMEWORK MÀ MÌNH ĐÃ VÀ
                            ĐANG DÙNG KIẾM CƠM</a>
                    </div>
                    <div class="all-main__item-date">
                        01/01/2023<span></span>123 VIEW
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="all-main__item">
                <div class="all-main__item-img">
                    <img src="<?= ROOT_URL ?>/public/image/post/corver-photo/owl.jfif" alt="Post-image" />
                </div>
                <div class="all-main__item-list">
                    <div class="all-main__item-tag">Thẻ<span></span>Thẻ</div>
                    <div class="all-main__item-head">
                        <a href="">REVIEW NHẸ CÁC NGÔN NGỮ, CÔNG NGHỆ, FRAMEWORK MÀ MÌNH ĐÃ VÀ
                            ĐANG DÙNG KIẾM CƠM</a>
                    </div>
                    <div class="all-main__item-date">
                        01/01/2023<span></span>123 VIEW
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="all-main__item">
                <div class="all-main__item-img">
                    <img src="<?= ROOT_URL ?>/public/image/post/corver-photo/owl.jfif" alt="Post-image" />
                </div>
                <div class="all-main__item-list">
                    <div class="all-main__item-tag">Thẻ<span></span>Thẻ</div>
                    <div class="all-main__item-head">
                        <a href="">REVIEW NHẸ CÁC NGÔN NGỮ, CÔNG NGHỆ, FRAMEWORK MÀ MÌNH ĐÃ VÀ
                            ĐANG DÙNG KIẾM CƠM</a>
                    </div>
                    <div class="all-main__item-date">
                        01/01/2023<span></span>123 VIEW
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="all-main__item">
                <div class="all-main__item-img">
                    <img src="<?= ROOT_URL ?>/public/image/post/corver-photo/owl.jfif" alt="Post-image" />
                </div>
                <div class="all-main__item-list">
                    <div class="all-main__item-tag">Thẻ<span></span>Thẻ</div>
                    <div class="all-main__item-head">
                        <a href="">REVIEW NHẸ CÁC NGÔN NGỮ, CÔNG NGHỆ, FRAMEWORK MÀ MÌNH ĐÃ VÀ
                            ĐANG DÙNG KIẾM CƠM</a>
                    </div>
                    <div class="all-main__item-date">
                        01/01/2023<span></span>123 VIEW
                    </div>
                </div>
            </div>
            <!--  -->

            <!-- Page Number -->
            <div class="home-post__numpage">
                <div class="home-post__numpage-item">
                    <a href=""><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="home-post__numpage-item home-post__numpage-item--select">
                    <a href="">1</a>
                </div>
                <div class="home-post__numpage-item"><a href="">2</a></div>
                <div class="home-post__numpage-item"><a href="">3</a></div>
                <div class="home-post__numpage-item">
                    <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- Aside Home -->
        <aside class="home-aside">
            <!-- Aside About -->
            <div class="home-aside__about">
                <div class="home-aside__about-img">
                    <img src="<?= ROOT_URL ?>/<?= $page['admin']['avatar'] ?>" alt=" About-image" />
                </div>
                <div class="home-aside__about-head">Hello I'm <?= $page['admin']['ho'] . " " . $page['admin']['ten'] ?>
                </div>
                <div class="home-aside__about-text">
                    <?= $page['admin']['gioi_thieu'] ?>
                </div>
            </div>

            <!-- Aside Comment -->
            <div class="home-aside__comment">
                <!-- Aside Comment Head -->
                <div class="home-aside__comment-head">Nhận xét cuối cùng</div>

                <?php foreach ($page['cmt'] as $item) { ?>
                    <?php $user = $page['m_user']->userSelectById($item['id_tk']) ?>
                    <!-- Aside Comment Item -->
                    <div class="home-aside__comment-item post">
                        <div class="home-aside__comment-item-img">
                            <img src="<?= ROOT_URL ?>/<?= $user['avatar'] ?>" alt="User-image" />
                        </div>
                        <div>
                            <div class="home-aside__comment-item-head">
                                <div class="home-aside__comment-item-name">
                                    <?= $user['ho'] . " " . $user['ten'] ?>
                                </div>
                                <div class="home-aside__comment-item-date"><?= date("d/m/Y", strtotime($item['ngay_capnhat'])) ?></div>
                            </div>
                            <div class="home-aside__comment-item-text">
                                <?= $item['noidung_cmt'] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </aside>
    </div>
</article>