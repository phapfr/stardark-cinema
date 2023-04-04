<!-- footer-area -->
<footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-menu-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <a href="/">
                                <img width="80px" src="https://www.iconeasy.com/icon/png/System/I%20Love/Cinema.png"
                                    alt="Logo">
                                <b
                                    style="display:inline-block; font-size: 25px; color:white; font-family:'Poppins', sans-serif; padding-left:10px">Stardark</b>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer-menu">
                            <nav>
                                <ul class="navigation">
                                    <li><a href="/">Trang Chủ</a></li>
                                    <li><a href="/phim-dang-chieu">Phim Đang Chiếu</a></li>
                                    <li><a href="/phim-sap-chieu">Phim Sắp Chiếu</a></li>
                                    <li><a href="/bai-viet">Bài Viết</a></li>
                                    <li><a href="/lien-he">Liên Hệ</a></li>
                                </ul>
                                <div class="footer-search">
                                    <form action="/tim-kiem" method="POST">
                                        @csrf
                                        <input type="text" name="search" placeholder="Tìm phim yêu thích">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright-text">
                        <p>Copyright &copy; @php echo date('Y') @endphp . All Rights Reserved By <a href="/">Stardark
                                Cinema</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->
