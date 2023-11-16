<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>VietNam History</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-main">
                <div class="header-logo">
                    <img src="https://fullstack.edu.vn/static/media/f8-icon.18cd71cfcfa33566a22b.png" alt="logo">
                    <p class="logo-text">Học lịch sử trực tuyến</p>
                </div>
                <div class="header-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Tìm kiếm khóa học">
                </div>
                <div class="header-action">
                    <button class="btn btn-white">Đăng nhập</button>
                    <button class="btn header-btn">Đăng ký</button>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="main-layout">
                <div class="sidebar">
                    <div class="sidebar-list">
                        <div class="sidebar-item active">
                            <i class="fa-solid fa-house"></i>
                            <a href="">Trang chủ</a>
                        </div>
                        <div class="sidebar-item">
                            <i class="fa-solid fa-road"></i>
                            <a href="">Lộ trình</a>
                        </div>
                        <div class="sidebar-item">
                            <i class="fa-solid fa-paste"></i>
                            <a href="">Bài viết</a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <section class="slide-show">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/200/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/200/500" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/200/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/200/300" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </section>

                    <section class="lesson">
                        <h2 class="lesson-title">Danh sách khóa học</h2>
                        <div class="lesson-list">
                            <a class="lesson-item">
                                <div class="lesson-img">
                                    <img src="https://files.fullstack.edu.vn/f8-prod/courses/7.png" alt="">
                                </div>
                                <h4 class="lesson-name">Khoa hoc nhap mon</h4>
                                <div class="lesson-number">
                                    <i class="fa-solid fa-users"></i>
                                    <p>1234</p>
                                </div>
                                <div class="overlay">
                                    <button class="learn-now-btn">Xem Khóa Học</button>
                                </div>
                            </a>
                        </div>
                    </section>

                    <section class="post">
                        <h2 class="post-title">Bài viết nổi bật</h2>
                        <div class="post-list">
                            <a class="post-item">
                                <div class="post-img">
                                    <img src="https://files.fullstack.edu.vn/f8-prod/courses/7.png" alt="">
                                </div>
                                <h4 class="post-name">Khoa hoc nhap mon</h4>
                                <div class="post-info">
                                    <h4 class="user-name">Người tạo:Nguyen Quang Huy</h4>
                                    <p class="post-time">Thời gian:15-11-2023</p>
                                </div>
                                <div class="overlay">
                                    <button class="learn-now-btn">Xem bài viết</button>
                                </div>
                            </a>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-column">
                    <h3 class="footer-heading">VietNam History</h3>
                    <a href="">Điện thoại: 0352223905</a>
                    <a href="">Email: huynqph37225@fpt.edu.vn</a>
                    <a href="">Cao đẳng FPT Phố Trịnh Văn Bô, Phường Phương Canh, Quận Từ Liêm, Hà Nội</a>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">Về chúng tôi</h3>
                    <a href="">Giới thiệu</a>
                    <a href="">Liên hệ</a>
                    <a href="">Điều khoản</a>
                    <a href="">Bảo mật</a>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">Liên hệ với chúng tôi</h3>
                    <a href="">
                        <i class="fa-brands fa-square-facebook"></i>
                        Facebook
                    </a>
                    <a href="">
                        <i class="fa-brands fa-youtube"></i>
                        Youtube
                    </a>
                    <a href="">
                        <i class="fa-solid fa-envelope"></i>
                        Gmail
                    </a>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">Nhận thông báo</h3>
                    <div>
                        <input class="footer-input" placeholder="Enter your email">
                        <button class="footer-btn">Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../js/home.js"></script>

</html>