<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css "/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/brands.min.css "/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/solid.min.css "/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/regular.min.css "/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">
 
    <title>Giỏ Hàng</title>
</head>
<body>
    
    <header>
        @include('header')  
    </header>
    <main >
       <div class="cart-center">
            <div class="page-cart">
                <div class="cart-title">
                    <h3 class="cart-title-h">Giỏ hàng của bạn (1)</h1>
                </div>
                <div class="cart-table">
                    <div class="cart-table-left">
                        <div class="cart-table-left-all">
                            <div class="cart-table-left-shop">
                                <div class="cart-table-left-shop-info">
                                    <div class="cart-table-left-shop-icon">
                                        <div class="cart-table-left-shop-img">
                                            <a href="#">
                                                <img id="cart-table-left-shop-img" src="https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/cataluna/camp-nou-barcelona-c-fcbarcelona.jpg_604889389.jpg" alt="">
                                            </a>    
                                            </div>
                                        <div class="cart-table-left-shop-name">
                                            <a  id="cart-table-left-shop-name" href="#">
                                                <span >Shop Kenji</span>
                                            </a>
                                        </div>   
                                    </div>
                                    <div class="cart-table-left-shop-choice">
                                        <input type="radio" name="choice-shop">
                                        <span class="cart-choice-shop">
                                            Chọn tất cả sản phẩm  
                                        </span>
                                    </div>
                                </div>  
                                <div class="cart-table-left-product">
                                    <div class="table-left-product">
                                        <div class="table-left-product-info colum-5">
                                            <div class="table-left-product-img">
                                                <a href="#">
                                                    <img id="table-left-product-img" src="https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/cataluna/camp-nou-barcelona-c-fcbarcelona.jpg_604889389.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="table-left-product-name">
                                                <a id="table-left-product-name" href="#">
                                                    <span>Áo thun nam Áo thun nam đẹp vccc</span>
                                                </a>
                                                <div class="table-left-product-type">
                                                    Phân Loại: <span id="table-left-product-type">Đen,M</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-left-product-price colum-2">
                                            <span id="table-left-product-price">100.000đ</span> 
                                        </div>
                                        <div class="table-left-product-quantity colum-2">
                                            <input id="table-left-product-quantity" type="number">
                                        </div>
                                        <div class="table-left-product-tool colum-1">
                                            <a href="#" id="table-left-product-tool">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                  </svg>
                
                                            </a>
                                            <a href="#" id="table-left-product-tool">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-table-right">
                        <div class="cart-table-right-top">
                            <div class="cart-table-right-coupon">
                                <div class="cart-table-right-coupon-name">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                                        <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"/>
                                        <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
                                      </svg>
                                    <span id="cart-table-right-coupon-name">
                                        Mã giảm giá
                                    </span>
                                </div>
                                <div class="cart-table-right-coupon-choice">
                                    <span>
                                        Chọn mã
                                    </span>
                                </div>
                            </div>  
                        </div>
                        <div class="cart-table-right-bot">
                            <span class="cart-table-right-bot-span">
                                Tạm tính (2 sản phẩm): 
                            </span>
                            <div class="cart-table-right-bot-price">
                                <div class="cart-table-right-bot-price-new">
                                    <span id="cart-table-right-bot-price-new">270.000đ </span>
                                </div>
                                <!-- <div class="cart-table-right-bot-price-old">
                                    <span id="cart-table-right-bot-price-old">300.000đ</span>
                                </div> -->
                            </div>
                        </div>
                        <div class="cart-table-right-bot">
                            <div class="cart-table-right-bot-btn">
                                <button id="cart-table-right-bot-btn">
                                    <span id="table-right-bot-btn-span">Mua ngay</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </main>
    <footer>
       <div class="footer">
            <section class="d7ed-IB_g3V chanthatsu">   
                <div class="a258-M5dPaP d7ed-fdSIZS d7ed-OoK3wU d7ed-w9YXDo">
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="">
                        <img data-src="https://media3.scdn.vn/img4/2020/12_16/gJwXr6FFZKZCGKWaz4RB.png" src="https://media3.scdn.vn/img4/2020/12_16/gJwXr6FFZKZCGKWaz4RB.png" alt="Siêu nhiều hàng tốt" class="conmeno-img lazyloaded">
                        <div class="  d7ed-fdSIZS d7ed-Bwn8O5 d7ed-UkcyG6">
                            <span class="d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">Siêu nhiều hàng tốt</span>
                            <span class="d7ed-oz4bcc d7ed-bjQW4F d7ed-JAhcuC">Cần gì cũng có 26 ngành hàng &amp; 10 triệu sản phẩm</span>
                        </div>
                    </a>
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="">
                        <img data-src="https://media3.scdn.vn/img4/2020/12_16/EfZWQVfV6nQzu2vMmnwC.png" src="https://media3.scdn.vn/img4/2020/12_16/EfZWQVfV6nQzu2vMmnwC.png" alt="Siêu yên tâm" class="conmeno-img lazyloaded">
                        <div class="d7ed-fdSIZS d7ed-Bwn8O5 d7ed-UkcyG6">
                            <span class="d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">Siêu yên tâm</span>
                            <span class="d7ed-oz4bcc d7ed-bjQW4F d7ed-JAhcuC">Miễn phí đổi trả 48h</span>
                        </div>
                    </a>
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="">
                        <img data-src="https://media3.scdn.vn/img4/2020/12_16/j5C6IQz7gIXPgjFJxmRz.png" src="https://media3.scdn.vn/img4/2020/12_16/j5C6IQz7gIXPgjFJxmRz.png" alt="Siêu tiện lợi" class="conmeno-img lazyloaded">
                        <div class="d7ed-fdSIZS d7ed-Bwn8O5 d7ed-UkcyG6">
                            <span class="d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">Siêu tiện lợi</span>
                            <span class="d7ed-oz4bcc d7ed-bjQW4F d7ed-JAhcuC">Mang thế giới mua sắm của Kenji trong tầm tay bạn</span>
                        </div>
                    </a>
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="">
                            <img data-src="https://media3.scdn.vn/img4/2020/12_16/7AJFQGQ5qvS7gGOz8P7a.png" src="https://media3.scdn.vn/img4/2020/12_16/7AJFQGQ5qvS7gGOz8P7a.png" alt="Siêu tiết kiệm" class="conmeno-img lazyloaded">
                            <div class="d7ed-fdSIZS d7ed-Bwn8O5 d7ed-UkcyG6">
                                <span class="d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">Siêu tiết kiệm</span>
                                <span class="d7ed-oz4bcc d7ed-bjQW4F d7ed-JAhcuC">Giá hợp lý, vừa túi tiền. Luôn có nhiều chương trình khuyến mãi</span>
                            </div>
                        </a>
                </div>
            </section>
            <section class="a258-qe99Bj">
                <div class="d7ed-IB_g3V vaicailz">
                    <div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-JyJa1G">
                        <span class="a258-DKZyJU d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">VỀ CHÚNG TÔI</span>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Giới thiệu Kenji.vn</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Giới thiệu SenMall</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Quy chế hoạt động</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Chính sách bảo mật</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Giao hàng và Nhận hàng</a>
                    </div>
                    <div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-JyJa1G">
                        <span class="a258-DKZyJU d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">DÀNH CHO NGƯỜI MUA</span>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Giải quyết khiếu nại</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Hướng dẫn mua hàng</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Chính sách đổi trả</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Chăm sóc khách hàng</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Nạp tiền điện thoại</a></div><div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-JyJa1G">
                            <span class="a258-DKZyJU d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">DÀNH CHO NGƯỜI BÁN</span>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Quy định đối với người bán</a>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Chính sách bán hàng</a>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Hệ thống tiêu chí kiểm duyệt</a>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="">Mở shop trên Kenji</a></div><div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-JyJa1G">
                                <span class="a258-DKZyJU d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">TẢI ỨNG DỤNG Kenji</span><span class="a258-ynyK1p d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa">Mang thế giới mua sắm của Kenji trong tầm tay bạn</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="a258-fvNoTN">
                <div class="d7ed-IB_g3V">
                    <div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-hNprrG">
                        <span class="a258-pBVzm0 d7ed-oz4bcc d7ed-AHa8cD d7ed-p5UgTj">Công ty Cổ phần Công nghệ Kenji, thành viên của Tập đoàn CTU</span>
                        <span class="a258-sxi_fZ d7ed-oz4bcc d7ed-bjQW4F d7ed-p5UgTj">Số ĐKKD:  - Ngày cấp: 13/05/2014, được sửa đổi lần thứ 20, ngày 26/04/2022.</span><span class="a258-sxi_fZ d7ed-oz4bcc d7ed-bjQW4F d7ed-p5UgTj">Cơ quan cấp: Sở Kế hoạch và Đầu tư TPHCM.</span>
                        <span class="a258-sxi_fZ d7ed-oz4bcc d7ed-bjQW4F d7ed-p5UgTj">Địa chỉ: Tầng 5, Tòa nhà A, Vườn Ươm Doanh Nghiệp, Lô D.01, Đường Tân Thuận, Khu chế xuất Tân Thuận, Phường Tân Thuận Đông, Quận 7, Thành phố Hồ Chí Minh, Việt Nam.</span>
                        <span class="a258-sxi_fZ d7ed-oz4bcc d7ed-bjQW4F d7ed-p5UgTj">Email: 
                            <a class="a258-sxi_fZ d7ed-oz4bcc d7ed-bjQW4F d7ed-p5UgTj" href="">lienhe@kenji.vn</a>
                        </span>
                        <div class="a258-FdFl_j">
                            <a href="">
                                <img data-src="https://media3.scdn.vn/img4/2020/12_16/XhpGDnvWqrlKeHLst3aS.png" src="https://media3.scdn.vn/img4/2020/12_16/XhpGDnvWqrlKeHLst3aS.png" alt="Bộ Công Thương" class="a258-qXDOtl lazyloaded">
                            </a>
                            <a href="">
                                <img data-src="https://media3.scdn.vn/img4/2020/12_16/h6lEMGIAt4Uapd0Mls34.png" src="https://media3.scdn.vn/img4/2020/12_16/h6lEMGIAt4Uapd0Mls34.png" alt="Bộ Công Thương - Nói không với hàng giả" class="a258-qXDOtl ls-is-cached lazyloaded">
                            </a>
                        </div>
                    </div>
                    <div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-ZfrH5c">
                        <span class="a258-gVUP7W d7ed-oz4bcc d7ed-AHa8cD d7ed-p5UgTj">Đăng ký nhận bản tin ưu đãi khủng từ Kenji</span>
                        <form class="a258-SlW74A d7ed-fdSIZS d7ed-UkcyG6">
                            <label class="a258-tdXkrc" for="subscription-email">Email</label>
                            <div class="d7ed-OoK3wU d7ed-ZfrH5c">
                                <div class="d7ed-trb8Db d7ed-w9iqdd" role="presentation">
                                    <div class="d7ed-tV3JH6">
                                        <input id="subscription-email" placeholder="Email của bạn là" type="text" inputmode="email" class="d7ed-T0Aa7w d7ed-IMD1Rj" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="d7ed-OoK3wU d7ed-qeWlce">
                                <button type="submit" value="Submit" class="d7ed-s0YDb1 d7ed-jQXTxb d7ed-N12D1Z d7ed-hulWpQ a258-d4RAL9 d7ed-bTLFAv">
                                    <span class="d7ed-dZeDhd">Đăng ký</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
       </div>

    </footer>
</body>
</html>



