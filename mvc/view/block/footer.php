<footer class="footer">
    <div class="footer-container">
        <div class="footer-list">
            <div class="footer-item">
                <div class="footer-item__head">Về chúng tôi</div>
                <div class="footer-item__content">
                    Chào các bạn, mình là Mai Tiểu Long, tác giả của blog này. Các
                    bạn có thể gọi mình là Mai Long.
                </div>
                <div class="footer-item__content">
                    <span class="footer-item__content--bold">Địa chỉ</span>
                    Nhơn Trạch/ Đồng Nai
                </div>
                <div class="footer-item__content">
                    <span class="footer-item__content--bold">Liên hệ</span>
                    Email: mailong123@gmail.com
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-item__head">Liên kết nhanh</div>
                <div class="footer-quicklink">
                    <div class="footer-quicklink__item">
                        <a href="<?= ROOT_URL ?>" class="footer-quicklink__link">Trang chủ</a>
                        <a href="<?= ROOT_URL ?>/blog" class="footer-quicklink__link">Bài viết</a>
                        <a href="<?= ROOT_URL ?>/log" class="footer-quicklink__link">Đăng nhập</a>
                    </div>
                </div>
            </div>

            <div class="footer-item">
                <div class="footer-item__head">Chủ đề</div>
                <div class="footer-tag">
                    <?php foreach ($page['nav'] as $item) { ?>
                        <!-- Item -->
                        <div class="footer-tag__item">
                            <a href="<?= ROOT_URL ?>/blog/type/<?= $item['id_tag'] ?>" class="footer-tag__link">
                                <?= $item['ten_tag'] ?>
                            </a>
                        </div>
                        <!--  -->
                    <?php } ?>
                </div>
            </div>

            <div class="footer-item">
                <div class="footer-item__head">Công cụ</div>
                <div class="footer-newslleter">
                    <div class="footer-newslleter__text">
                        Blog này là nơi mình chia sẻ những kiến thức, kinh nghiệm mà
                        mình đạt được trong quá trình học tập và làm việc.
                    </div>
                    <form action="<?= ROOT_URL ?>" method="get">
                        <input type="text" name="timkiem" id="" class="input input--half"
                            placeholder="Nhập từ khóa cần tìm..." title="Nhập từ khóa cần tìm..." />
                        <input type="submit" value="Tìm kiếm" class="btn btn--half" />
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-detail">
            <div class="footer-detail__item">
                <a href="" class="footer-detail__link">
                    © 2022, Stories - Personal Blog Mai Long
                </a>
            </div>
            <div class="footer-detail__item">
                <a href="" class="footer-detail__link"> Design by AliThemes</a>
            </div>
        </div>
    </div>
</footer>