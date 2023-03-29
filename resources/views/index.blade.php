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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Trang Chủ</title>
</head>
<body>
    
    <header>
        <div class="shop-top">
            <div class="nav-bar-top">
                <div class="nav-bar-top-left colum-5">
                    <div class="nav-bar-top-left-select colum-2-5">
                        <a href="{{route('register_shop') }}" class="nav-bar-top-left-select-a">
                            Kênh Người Bán
                        </a>
                    </div>
                    <div class="nav-bar-top-left-select colum-3">
                        <a href="#" class="nav-bar-top-left-select-a">
                            Chăm sóc khách hàng
                        </a>
                    </div>
                    <div class="nav-bar-top-left-select colum-3">
                        <a href="#" class="nav-bar-top-left-select-a">
                            Về Kenji
                        </a>
                    </div>
                </div>
                <div class="nav-bar-top-right colum-5">
                    <div class="nav-bar-top-right-connect colum-5">
                        <!-- <div class="nav-bar-top-right-connects colum-3">
                            <a href="{{route('registers')}}" class="span-user-login">
                                <span id="span-user-login">Đăng Ký</span>
                            </a>
                        </div>
                     
                        <div class="nav-bar-top-right-connects colum-3 ">
                            <a href="{{route('login')}}" class="span-user-login">
                                <span id="span-user-login" >Đăng Nhập</span>
                            </a>
                        </div> -->
                        <?php
                        $user = Session::get('user_id');
                        if ($user == NULL){
                        ?>
                            <div class="nav-bar-top-right-connects colum-3">
                                <a href="{{route('registers')}}" class="span-user-login">
                                    <span id="span-user-login">Đăng Ký</span>
                                </a>
                            </div>
                            <div class="nav-bar-top-right-connects colum-3 ">
                                <a href="{{route('login')}}" class="span-user-login">
                                    <span id="span-user-login" >Đăng Nhập</span>
                                </a>
                            </div>
                        <?php
                            }
                            else{
                        ?>   
                            <div class="nav-bar-top-right-connects colum-3">
                                <a href="" class="span-user-login">
                                    <span id="span-user-login">Chào {{Session::get('user_name')}}</span>
                                </a>
                            </div>
                        
                            <div class="nav-bar-top-right-connects colum-3 ">
                                <a href="{{route('logout_user')}}" class="span-user-login">
                                    <span id="span-user-login" >Đăng Xuất</span>
                                </a>
                            </div>
                           
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="nav-bar-bottom">
                <div class="nav-bar-bottom-with-search">
                    <div class="nav-bar-bottom-left">
                        <a href="#">
                            <img src="{{asset('img/icon.jpg')}} " alt="" class="icon-ecommerce">
                        </a>
                    </div>
                    <div class="nav-bar-bottom-center">
                        <div class="nav-bar-bottom-center-menu colum-0-5">
                            <div class="colum-10">
                                <svg  class="icon-menu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                                    <path  d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z"/>
                                    <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="nav-bar-bottom-center-search colum-9-5">
                            <div class="colum-9">
                                <input type="text" name="" class="input-search" placeholder=" Tìm kiếm trên Kenji...">
                            </div>
                            <div class="colum-1">
                                <button type="submit" value="Submit" aria-label="button submit" class="button-icon-search">
                                    <svg width="24" height="24"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="d7ed-SwZDZ2 d7ed-w34diS"><path d="M10 2a8 8 0 0 1 6.32 12.905l5.387 5.388-1.414 1.414-5.388-5.386A8 8 0 1 1 10 2Zm0 2a6 6 0 1 0 0 12 6 6 0 0 0 0-12Z" fill="#6F787E" fill-rule="nonzero" ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar-bottom-right">
                        <div class="nav-bar-bottom-right-cart colum-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check icon-cart" viewBox="0 0 16 16">
                                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <main >
        
        <div class="shop-index-center">
            <div class="body-banner">
                <div class="body-banner-detail">
                    <div class="body-banner-detail-left">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <img class="img-banner-left"  src="https://brandinfo.biz/images/companies//engq1salesstaffchocngtynhtmithnhlplngupto100020190620145357-16194213920321657467488.jpg" alt="">
                              </div>
                              <div class="swiper-slide">
                                <img class="img-banner-left" src="https://www.lec4you.com/wp-content/uploads/2019/11/US-New-Home-Sales-See-an-Unexpected-Increase.jpg" alt="">
                              </div>
                              
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="body-banner-detail-right">
                        <div class="body-banner-detail-right-top">
                            <img class="img-banner-right" src="https://hrchannels.com/uptalent/attachments/images/20211129/083646562_sales-la-gi-1.png" alt="" >
                        </div>
                        <div class="body-banner-detail-right-bot">
                            <img class="img-banner-right" src="https://hrchannels.com/uptalent/attachments/images/20211201/101637165_vi-tri-cong-viec-nganh-sales-7.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-index">
                <div class="body-index-menu">
                    <div class="body-index-menu-top">
                        <div class="body-index-menu-title">
                            DANH MỤC
                        </div>
                    </div>
                    <div class="body-index-menu-center">
                        <a href="" class="body-index-menu-link ">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/687f3967b7c2fe6a134a2c11894eea4b_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Thời Trang Nam
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/31234a27876fb89cd522d7e3db1ba5ca_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Điện thoại & Phụ Kiện
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/978b9e4cb61c611aaaf58664fae133c5_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Thiết Bị Điện Tử
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/c3f3edfaa9f6dafc4825b77d8449999d_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Máy Tính & Laptop
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/ec14dd4fc238e676e43be2a911414d4d_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Máy Ảnh & Máy Quay Phim
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/86c294aae72ca1db5f541790f7796260_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Đồng Hồ
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/74ca517e1fa74dc4d974e5d03c3139de_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Giày Dép Nam
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/7abfbfee3c4844652b4a8245e473d857_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Thiết Bị Gia Dụng
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/6cb7e633f8b63757463b676bd19a50e4_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Thể Thao & Du Lịch
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/18fd9d878ad946db2f1bf4e33760c86f_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Balo & Túi Ví Nam
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/75ea42f9eca124e9cb3cde744c060e4d_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Thời Trang Nữ
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/ce8f8abc726cafff671d0e5311caa684_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Đồ Chơi
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/24b194a695ea59d384768b7b471d563f_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Nhà Cửa & Đời Sống
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/49119e891a44fa135f5f6f5fd4cfc747_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Sức Khỏe
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/ef1f336ecc6f97b790d5aae9916dcb72_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Sắc Đẹp
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/48630b7c76a7b62bc070c9e227097847_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Giày Dép Nữ
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/fa6ada2555e8e51f369718bbc92ccc52_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Túi Ví Nữ
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/36013311815c55d303b0e6c62d6a8139_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Nhà Sách Online
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/4540f87aa3cbe99db739f9e8dd2cdaf0_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Thời Trang Trẻ
                                </div>
                            </div>
                        </a>
                        <a href="" class="body-index-menu-link">
                            <div class="body-index-menu-product">
                                <div class="body-index-menu-product-img">
                                    <img src="https://cf.shopee.vn/file/8e71245b9659ea72c1b4e737be5cf42e_tn" alt="" height="83px" width="88px">
                                </div>
                                <div class="body-index-menu-product-category">
                                    Phụ Kiện & Trang Sức Nữ
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="body-index">
                @foreach($products as $product)
                <div class="body-index-products colum-1-6">
                    <a href="{{route('detail_product', $product -> id)}}">
                        <div class="body-index-products-info">
                            <div class="body-index-products-img ">
                                <img src="{{asset('storage/'.$product -> previewImage)}}" alt="" class="product-img-index">
                            </div>
                            <div class="body-index-products-detail">
                                <div class="body-index-products-detail-name">
                                    <div id="body-index-products-detail-name-span">
                                        {{$product -> productName}}
                                    </div>
                                </div>
                                <div class="body-index-products-detail-price">
                                    <div id="body-index-products-detail-price-span">
                                        {{number_format($product -> price)}} đ
                                    </div>
                                </div>
                                <div class="body-index-products-detail-sold">
                                    <div id="body-index-products-detail-sold-span">
                                        Đã bán 100
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </main>
    <footer>
       <div class="footer">
            <section class="d7ed-IB_g3V chanthatsu">   
                <div class="a258-M5dPaP d7ed-fdSIZS d7ed-OoK3wU d7ed-w9YXDo">
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="https://www.sendo.vn/huong-dan/ve-sendo">
                        <img data-src="https://media3.scdn.vn/img4/2020/12_16/gJwXr6FFZKZCGKWaz4RB.png" src="https://media3.scdn.vn/img4/2020/12_16/gJwXr6FFZKZCGKWaz4RB.png" alt="Siêu nhiều hàng tốt" class="conmeno-img lazyloaded">
                        <div class="  d7ed-fdSIZS d7ed-Bwn8O5 d7ed-UkcyG6">
                            <span class="d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">Siêu nhiều hàng tốt</span>
                            <span class="d7ed-oz4bcc d7ed-bjQW4F d7ed-JAhcuC">Cần gì cũng có 26 ngành hàng &amp; 10 triệu sản phẩm</span>
                        </div>
                    </a>
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="https://www.sendo.vn/huong-dan/ve-sendo">
                        <img data-src="https://media3.scdn.vn/img4/2020/12_16/EfZWQVfV6nQzu2vMmnwC.png" src="https://media3.scdn.vn/img4/2020/12_16/EfZWQVfV6nQzu2vMmnwC.png" alt="Siêu yên tâm" class="conmeno-img lazyloaded">
                        <div class="d7ed-fdSIZS d7ed-Bwn8O5 d7ed-UkcyG6">
                            <span class="d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">Siêu yên tâm</span>
                            <span class="d7ed-oz4bcc d7ed-bjQW4F d7ed-JAhcuC">Miễn phí đổi trả 48h</span>
                        </div>
                    </a>
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="https://www.sendo.vn/huong-dan/ve-sendo">
                        <img data-src="https://media3.scdn.vn/img4/2020/12_16/j5C6IQz7gIXPgjFJxmRz.png" src="https://media3.scdn.vn/img4/2020/12_16/j5C6IQz7gIXPgjFJxmRz.png" alt="Siêu tiện lợi" class="conmeno-img lazyloaded">
                        <div class="d7ed-fdSIZS d7ed-Bwn8O5 d7ed-UkcyG6">
                            <span class="d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">Siêu tiện lợi</span>
                            <span class="d7ed-oz4bcc d7ed-bjQW4F d7ed-JAhcuC">Mang thế giới mua sắm của Sendo trong tầm tay bạn</span>
                        </div>
                    </a>
                    <a class="conmeno a258-DO4HOc d7ed-fdSIZS d7ed-d4keTB d7ed-OoK3wU d7ed-Bwn8O5 d7ed-UkcyG6 d7ed-ZfrH5c d7ed-GgWJaN d7ed-d2C3_E" href="https://www.sendo.vn/huong-dan/ve-sendo">
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
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Giới thiệu Sendo.vn</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Giới thiệu SenMall</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Quy chế hoạt động</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Chính sách bảo mật</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Giao hàng và Nhận hàng</a>
                    </div>
                    <div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-JyJa1G">
                        <span class="a258-DKZyJU d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">DÀNH CHO NGƯỜI MUA</span>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Giải quyết khiếu nại</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Hướng dẫn mua hàng</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Chính sách đổi trả</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Chăm sóc khách hàng</a>
                        <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Nạp tiền điện thoại</a></div><div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-JyJa1G">
                            <span class="a258-DKZyJU d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">DÀNH CHO NGƯỜI BÁN</span>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Quy định đối với người bán</a>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Chính sách bán hàng</a>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Hệ thống tiêu chí kiểm duyệt</a>
                            <a class="a258-ynyK1p a258-lAQS_H d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa" href="#">Mở shop trên Sendo</a></div><div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-JyJa1G">
                                <span class="a258-DKZyJU d7ed-oz4bcc d7ed-AHa8cD d7ed-mzOLVa">TẢI ỨNG DỤNG SENDO</span><span class="a258-ynyK1p d7ed-oz4bcc d7ed-bjQW4F d7ed-mzOLVa">Mang thế giới mua sắm của Sendo trong tầm tay bạn</span>
                                
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
                            <a class="a258-sxi_fZ d7ed-oz4bcc d7ed-bjQW4F d7ed-p5UgTj" href="#">lienhe@sendo.vn</a>
                        </span>
                        <div class="a258-FdFl_j">
                            <a href="#">
                                <img data-src="https://media3.scdn.vn/img4/2020/12_16/XhpGDnvWqrlKeHLst3aS.png" src="https://media3.scdn.vn/img4/2020/12_16/XhpGDnvWqrlKeHLst3aS.png" alt="Bộ Công Thương" class="a258-qXDOtl lazyloaded">
                            </a>
                            <a href="#">
                                <img data-src="https://media3.scdn.vn/img4/2020/12_16/h6lEMGIAt4Uapd0Mls34.png" src="https://media3.scdn.vn/img4/2020/12_16/h6lEMGIAt4Uapd0Mls34.png" alt="Bộ Công Thương - Nói không với hàng giả" class="a258-qXDOtl ls-is-cached lazyloaded">
                            </a>
                        </div>
                    </div>
                    <div class="d7ed-fdSIZS d7ed-OoK3wU d7ed-Bwn8O5 d7ed-ZfrH5c">
                        <span class="a258-gVUP7W d7ed-oz4bcc d7ed-AHa8cD d7ed-p5UgTj">Đăng ký nhận bản tin ưu đãi khủng từ Sendo</span>
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
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        loop: true,
        mousewheel: true,
        keyboard: true,
      });
    </script>

</html>



