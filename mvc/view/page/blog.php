<!-- Trang Page Blog All -->
<article class="all">
    <?php if (isset($page['name']['ten_tag'])) { ?>
        <div class="all-head">
            <?= $page['name']['ten_tag'] ?>
        </div>
    <?php } else if (isset($page['timkiem'])) { ?>
            <div class="all-head">
                <small><small>Tìm kiếm:</small></small>
            <?= $page['timkiem'] ?>
            </div>
    <?php } else { ?>
            <div class="all-head">Bài viết</div>
    <?php } ?>

    <div class="all-container">
        <section class="all-main">

            <?php foreach ($page['post'] as $item) { ?>
                <!-- All Item -->
                <div class="all-main__item">
                    <div class="all-main__item-img">
                        <img src="<?= ROOT_URL ?>/<?= $item['anh_bia'] ?>" alt="Post-image" />
                    </div>
                    <div class="all-main__item-list">
                        <div class="all-main__item-tag">
                            <?php
                            $tag = $page['m_tag']->tagSelectById($item['id_bv']);
                            foreach ($tag as $t) { ?>
                                <?= $t['ten_tag'] ?><span></span>
                            <?php } ?>
                        </div>
                        <div class="all-main__item-head">
                            <a href="<?= ROOT_URL ?>/blog/detail/<?= $item['id_bv'] ?>">
                                <?= $item['tieu_de'] ?>
                            </a>
                        </div>
                        <div class="all-main__item-date">
                            <?= date("d/m/Y", strtotime($item['ngay_capnhat'])) ?><span></span>
                            <?= $item['luot_xem'] ?> Lượt xem
                        </div>
                    </div>
                </div>
                <!--  -->
            <?php } ?>

            <!-- Page Number -->
            <?php page_number(count($page['post']), 1) ?>
        </section>

        <!-- Aside Home -->
        <?php require_once("./mvc/view/block/aside.php") ?>
    </div>
</article>