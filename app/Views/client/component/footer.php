<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div style="height: 50px" class="footer__logo">
                    <img src="<?= $GLOBALS['domainPage'] ?>/public/imgs/logo.png" alt="" />
                    <p class="footer__title">Học Lập Trình Để Đi Làm</p>
                </div>
                <div class="footer__logo">
                    <i class="fa-solid fa-phone"></i>
                    <p class="text_first">0386520536</p>
                </div>
                <div class="footer__logo">
                    <i class="fa-solid fa-envelope"></i>
                    <p class="text_first">braintech0852131210@gmail.com</p>
                </div>
                <div class="footer__logo">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <p class="text_first">
                        Tòa nhà FPT Polytechnic, phố Trịnh Văn Bô, phường Phương Canh,
                        quận Nam Từ Liêm, TP Hà Nội
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="footer__desc">
                    <h3 style="height: 50px">VỀ BrainTech</h3>
                    <p>Giới thiệu</p>
                    <p>Cơ hội việc làm</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="footer__desc">
                    <h3 style="height: 50px">HỖ TRỢ</h3>
                    <p>Liên hệ</p>
                    <p>Bảo mật</p>
                    <p>Điều khoản</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="footer__desc">
                    <h3 style="height: 50px">
                        Công Ty Cổ Phần Công Nghệ Giáo Dục BrainTech
                    </h3>
                    <p>Mã số thuế: 0109922901</p>
                    <p>Ngày thành lập: 04/03/2022</p>
                    <p>
                        Lĩnh vực: Công nghệ, giáo dục, lập trình. BrainTech xây dựng
                        và phát triển những sản phẩm mang lại giá trị cho cộng đồng.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?= $GLOBALS['domainPage'] ?>/public/js/client.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= $GLOBALS['domainPage'] ?>/public/lib/owl/owl.carousel.min.js"></script>

<script>
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 16,
    autoplay: true,
    autoplayTimeout: 3000,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        },
    },
});
</script>
</body>

</html>