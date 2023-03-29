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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">

    <title>Chi tiết sản phẩm</title>
</head>
<style>
    input[type="radio"] {
        display: none;
    }
    input[type="radio"]:checked + label {
        color: #FBBC05;
        color: var(--theme-color, #FBBC05);
        border-color: #FBBC05;
        border-color: var(--theme-color, #FBBC05);
    }
</style>
<body>
    
    <header>
        @include('header')
    </header>
    <main >
        <div class="detail-center">
            <form method="POST">
                @csrf
                <div class="page-product">
                <div class="page-product-detail">
                    <div class="page-product-detail-left">
                        <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
                            thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
                            @foreach($products_images as $key => $image)
                            <swiper-slide>
                                <img src="{{asset('storage/'.$image->imageProduct)}}" style="height:525px"/>
                            </swiper-slide>
                            @endforeach
                        </swiper-container>

                        <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                            watch-slides-progress="true">
                            @foreach($products_images as $key => $image)
                            <swiper-slide>
                                <img src="{{asset('storage/'.$image->imageProduct)}}" style="height:100px"/>
                            </swiper-slide> 
                            @endforeach
                        </swiper-container>
                    </div>
                    <div class="flex flex-auto RBf1cu">
                    
                        <div class="flex-auto flex-column swTqJe ">
                            <div class="product-detail-title">
                                <span>
                                    {{$products->productName}}
                                </span>
                            </div>
                            <div class="product-detail-proper">
                                <div class="product-detail-rate">
                                    <span class="checked" style="font-size: 16px"><u>5</u></span> 
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="product-detail-number-review">
                                    <div style="font-size: 17px; margin-right: 5px;">
                                        <u>100 </u>
                                    </div>
                                    <div style="color:darkgrey; ">
                                        Đánh Giá
                                    </div>
                                </div>
                                <div class="product-detail-number-review">
                                    <div style="font-size: 17px; margin-right: 5px;">
                                        <u>100 </u>
                                    </div>
                                    <div style="color:darkgrey;  ">
                                        Đã Bán
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail-price">
                                <div id="product-detail-price">
                                    {{$products->price}} VNĐ
                                
                                </div>
                            </div>
                            <div class="h-y3ij">
                                <div class="flex flex-column">
                                    <div class="flex rY0UiC j9be9C">
                                        <div class="flex flex-column">
                                            @if(isset($var_option))
                                                <div class="flex items-center" style="margin-bottom: 8px; align-items: baseline;">
                                                    <label class="oN9nMU">
                                                        @foreach($var_option as $key => $var_option)
                                                            {{$var_option->variationName}}
                                                        @endforeach
                                                    </label>
                                                    <div class="flex items-center bR6mEk">
                                                        @if(($combination_string[0]->combination_string)=='')
                                                            @foreach($combination_string as $key => $combination)
                                                                <input hidden checked type="radio" data-avai_stock="{{$combination -> avaiable_stock}}"  id="{{$combination->combination_string}}" value="{{$combination->combination_string}}" name="combination" class="choose_variation" >
                                                            @endforeach
                                                        @else
                                                            @foreach($combination_string as $key => $combination)
                                                                <input type="radio" data-avai_stock="{{$combination -> avaiable_stock}}"  id="{{$combination->combination_string}}" value="{{$combination->combination_string}}" name="combination" class="choose_variation" >
                                                                <label class="product-variation"  for="{{$combination->combination_string}}"> {{$combination->combination_string}}</label>
                                                                <input type="hidden" name="avaiable_stock"  value="{{$combination->avaiable_stock}}" class="avaiable_stock_{{$combination -> id}}">
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="flex items-center _6lioXX">
                                                <div class="oN9nMU">Số lượng</div>
                                                <div class="flex items-center">
                                                    <div style="margin-right: 15px;">
                                                        <div class="Z+JGL3 shopee-input-quantity">
                                                            <span id="minus" class="EquXA8" >
                                                                <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon">
                                                                    <polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon>
                                                                </svg>
                                                            </span>
                                                            <input id="number"  class="EquXA8 Wrmraq quantity{{$products -> id}}" type="text" role="spinbutton" aria-valuenow="1" value="1" required number>
                                                            <span id="plus" class="EquXA8">
                                                                <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign">
                                                                    <polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="show_avaiable">{{$sum_avaialbe}} sản phẩm có sẵn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>               
                                </div>
                            </div>
                            <div style="margin-top: 15px;">
                                <div class="ThEIyI">
                                    <div class="p+UZsF">
                                        <button type="button" data-id_product="{{$products->id }}" class="btn btn-tinted btn--l iFo-rx QA-ylc add-to-cart" aria-disabled="false" >
                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon tDviDD icon-add-to-cart">
                                                <g>
                                                    <g>
                                                        <polyline fill="none" points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                        <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                        <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                                    </g>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5" x2="10.5" y1="7" y2="7"></line>
                                                    <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9" x2="9" y1="8.5" y2="5.5"></line>
                                                </g>
                                            </svg>
                                            
                                            <input type="hidden"  value="{{$products->shop_id}}" class="shop_id_{{$products -> id}}">
                                            <input type="hidden"  value="{{$products->id}}" class="product_id_{{$products -> id}}">
                                            <input type="hidden"  value="{{$products->productName }}" class="productName{{$products -> id }}">
                                            <input type="hidden"  value="{{ asset('storage/'.$products -> previewImage)}}" class="previewImage{{$products -> id }}">
                                            <input type="hidden"  value="{{$products->price}}" class="price{{$products -> id }}">
                                            
                                            <span>Thêm Vào Giỏ Hàng</span>
                                        </button>
                                        <span type="button" class="btn btn-solid-primary btn--l iFo-rx" aria-disabled="false">Mua Ngay</span>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            </form>
            <div class=" page-product-shop">
                <div class="NLeTwo page-product__shop" data-testid="product_shop_pdp">
                    <div class="jwlMoy">
                        <a class="W0LQye" href="/ducchimse297?categoryId=100011&amp;entryPoint=ShopByPDP&amp;itemId=18459535951">
                            <div class="shopee-avatar UadQpu" data-testid="shop_avatar_image_pdp">
                                <div class="shopee-avatar__placeholder">
                                    <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-headshot">
                                        <g>
                                            <circle cx="7.5" cy="4.5" fill="none" r="3.8" stroke-miterlimit="10"></circle>
                                            <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                        </g>
                                    </svg>
                                </div>
                                <img class="shopee-avatar__img" src="https://cf.shopee.vn/file/bdfff5ba25c66c995af2b9a57ab9ce4d_tn">
                            </div>
                        </a>
                        <div class="oAVg4E">
                            <div class="VlDReK" data-testid="shop_name_pdp">ducchimse297</div>
                            <div class="TaEoi4">
                                <div class="zSXxlI" data-testid="seller_active_time_pdp">Online 3 giờ trước</div>
                            </div>
                            <div class="Uwka-w">
                                <button type="button" class="btn btn-tinted btn--s btn--inline Q-sdJs" data-testid="shop_chat_now_button_pdp">
                                    <svg viewBox="0 0 16 16" class="shopee-svg-icon JWAQyX">
                                        <g fill-rule="evenodd">
                                        <path d="M15 4a1 1 0 01.993.883L16 5v9.932a.5.5 0 01-.82.385l-2.061-1.718-8.199.001a1 1 0 01-.98-.8l-.016-.117-.108-1.284 8.058.001a2 2 0 001.976-1.692l.018-.155L14.293 4H15zm-2.48-4a1 1 0 011 1l-.003.077-.646 8.4a1 1 0 01-.997.923l-8.994-.001-2.06 1.718a.5.5 0 01-.233.108l-.087.007a.5.5 0 01-.492-.41L0 11.732V1a1 1 0 011-1h11.52zM3.646 4.246a.5.5 0 000 .708c.305.304.694.526 1.146.682A4.936 4.936 0 006.4 5.9c.464 0 1.02-.062 1.608-.264.452-.156.841-.378 1.146-.682a.5.5 0 10-.708-.708c-.185.186-.445.335-.764.444a4.004 4.004 0 01-2.564 0c-.319-.11-.579-.258-.764-.444a.5.5 0 00-.708 0z"></path>
                                        </g>
                                    </svg>Chat ngay
                                </button>
                                <a class="btn btn-light btn--s btn--inline btn-light--link Vf+pt4" data-testid="btn_light" href="/ducchimse297?categoryId=100011&amp;entryPoint=ShopByPDP&amp;itemId=18459535951">
                                    <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" stroke-width="0" class="shopee-svg-icon _9Sz-n3">
                                        <path d="m13 1.9c-.2-.5-.8-1-1.4-1h-8.4c-.6.1-1.2.5-1.4 1l-1.4 4.3c0 .8.3 1.6.9 2.1v4.8c0 .6.5 1 1.1 1h10.2c.6 0 1.1-.5 1.1-1v-4.6c.6-.4.9-1.2.9-2.3zm-11.4 3.4 1-3c .1-.2.4-.4.6-.4h8.3c.3 0 .5.2.6.4l1 3zm .6 3.5h.4c.7 0 1.4-.3 1.8-.8.4.5.9.8 1.5.8.7 0 1.3-.5 1.5-.8.2.3.8.8 1.5.8.6 0 1.1-.3 1.5-.8.4.5 1.1.8 1.7.8h.4v3.9c0 .1 0 .2-.1.3s-.2.1-.3.1h-9.5c-.1 0-.2 0-.3-.1s-.1-.2-.1-.3zm8.8-1.7h-1v .1s0 .3-.2.6c-.2.1-.5.2-.9.2-.3 0-.6-.1-.8-.3-.2-.3-.2-.6-.2-.6v-.1h-1v .1s0 .3-.2.5c-.2.3-.5.4-.8.4-1 0-1-.8-1-.8h-1c0 .8-.7.8-1.3.8s-1.1-1-1.2-1.7h12.1c0 .2-.1.9-.5 1.4-.2.2-.5.3-.8.3-1.2 0-1.2-.8-1.2-.9z"></path>
                                    </svg>xem shop
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="Po6c6I">
                        <div class="Odudp+">
                            <div class="R7Q8ES _07yPll" data-testid="shop_ratings_section_pdp">
                                <label class="siK1qW">Đánh giá</label>
                                <span class="Xkm22X">3,3k</span>
                            </div>
                            <a class="p48aHT _07yPll" data-testid="shop_products_section_pdp" href="/ducchimse297#product_list">
                                <label class="siK1qW">Sản phẩm</label>
                                <span class="Xkm22X vUG3KX">51</span>
                            </a>
                        </div>
                        <div class="Odudp+">
                            <div class="R7Q8ES _07yPll" data-testid="shop_response_rate_section_pdp">
                                <label class="siK1qW">tỉ lệ phản hồi</label>
                                <span class="Xkm22X">87%</span>
                            </div>
                            <div class="R7Q8ES _07yPll" data-testid="shop_response_time_section_pdp">
                                <label class="siK1qW">thời gian phản hồi</label>
                                <span class="Xkm22X">trong vài giờ</span>
                            </div>
                        </div>
                        <div class="Odudp+">
                            <div class="R7Q8ES _07yPll" data-testid="shop_joined_section_pdp">
                                <label class="siK1qW">tham gia</label>
                                <span class="Xkm22X">6 năm trước</span>
                            </div>
                            <div class="R7Q8ES _07yPll" data-testid="shop_follower_section_pdp">
                                <label class="siK1qW">Người theo dõi</label>
                                <span class="Xkm22X">4,6k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-product__content">
                <div class="page-product__content--left colum-7-5">
                    <div class="product-detail page-product__detail">
                        <div class="U9rGd1">
                            <div class="Iv7FJp">CHI TIẾT SẢN PHẨM</div>
                            <div class="MCCLkq">
                                <div class="dR8kXc">
                                    <label class="zquA4o">Danh Mục</label>
                                    <div class="flex items-center RnKf-X">
                                        <a class="akCPfg KvmvO1" href="/">Shopee</a>
                                        <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon xprSzi icon-arrow-right">
                                            <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                        </svg>
                                        <a class="akCPfg KvmvO1" href="/Thời-Trang-Nam-cat.11035567">Thời Trang Nam</a>
                                        <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon xprSzi icon-arrow-right">
                                            <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                        </svg>
                                        <a class="akCPfg KvmvO1" href="/Áo-Khoác-cat.11035567.11035568">Áo Khoác</a>
                                        <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon xprSzi icon-arrow-right">
                                            <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                        </svg>
                                        <a class="akCPfg KvmvO1" href="/Áo-Khoác-Mùa-Đông-Áo-Choàng-cat.11035567.11035568.11035569">Áo Khoác Mùa Đông &amp; Áo Choàng</a>
                                    </div>
                                </div>
                                <div class="dR8kXc">
                                    <label class="zquA4o">Địa chỉ tổ chức chịu trách nhiệm sản xuất</label>
                                    <div>Đang cập nhật</div>
                                </div>
                                <div class="dR8kXc">
                                    <label class="zquA4o">Chất liệu</label>
                                    <div>Nỉ, Da</div>
                                </div>
                                <div class="dR8kXc">
                                    <label class="zquA4o">Chiều dài tay áo</label>
                                    <div>Khác</div>
                                </div><div class="dR8kXc"><label class="zquA4o">Mẫu</label><div>Sọc</div></div><div class="dR8kXc"><label class="zquA4o">Phong cách</label><div>Thể thao, Hàn Quốc, Đường phố</div></div><div class="dR8kXc"><label class="zquA4o">Xuất xứ</label><div>Việt Nam</div></div><div class="dR8kXc"><label class="zquA4o">Kiểu Áo khoác</label><div>Áo khoác bomber</div></div><div class="dR8kXc"><label class="zquA4o">Tên tổ chức chịu trách nhiệm sản xuất</label><div>Đang cập nhật</div></div><div class="dR8kXc"><label class="zquA4o">Kho hàng</label><div>91377</div></div><div class="dR8kXc"><label class="zquA4o">Gửi từ</label><div>Huyện Xuân Trường, Nam Định</div></div></div></div>
                    </div>
                </div>
                <div class="page-product__content--right colum-2-5">
                    <div style="display: contents;">
                        <div class="product-shop-vouchers page-product__shop-voucher"><div class="product-shop-vouchers__header">Mã giảm giá của Shop</div><div class="product-shop-vouchers__list" tabindex="-1" style="max-height: 23.25rem;"><div class="vc_Card_container vc_product-detail-page-vouchers_pcProductVoucher nBBX45 Y56Uu-"><div class="vc_Card_card"><div class="vc_Card_left"><div class="vc_Card_sawtooth"></div></div><div class="vc_Card_right"></div><div class="vc_VoucherStandardTemplate_hideOverflow"></div><div class="vc_VoucherStandardTemplate_template"><div class="vc_product-detail-page-vouchers_pcProductVoucherMiddle vc_VoucherStandardTemplate_middle"><div class="vc_MainTitle_mainTitle"><div class="vc_MainTitle_text">Giảm ₫3k</div></div><div class="vc_Subtitle_subTitle">Đơn Tối Thiểu ₫150k</div><div class="vc_Label_label"></div><div class="vc_ProgressBarExpiry_progressBarExpiry"><div class="vc_ProgressBarExpiry_usageLimitedText"><span class="vc_ProgressBarExpiry_validUntil vc_ProgressBarExpiry_capitalize">HSD: 17.03.2023</span></div></div></div><div class="vc_product-detail-page-vouchers_pcProductVoucherRight vc_VoucherStandardTemplate_right"><div></div><div class="vc_VoucherStandardTemplate_center"><div class="vc_RectButton_rectButton"><div class="vc_RectButton_btn vc_RectButton_claim">Lưu</div></div></div><div></div></div></div></div></div><div class="vc_Card_container vc_product-detail-page-vouchers_pcProductVoucher nBBX45 Y56Uu-"><div class="vc_Card_card"><div class="vc_Card_left"><div class="vc_Card_sawtooth"></div></div><div class="vc_Card_right"></div><div class="vc_VoucherStandardTemplate_hideOverflow"></div><div class="vc_VoucherStandardTemplate_template"><div class="vc_product-detail-page-vouchers_pcProductVoucherMiddle vc_VoucherStandardTemplate_middle"><div class="vc_MainTitle_mainTitle"><div class="vc_MainTitle_text">Giảm ₫5k</div></div><div class="vc_Subtitle_subTitle">Đơn Tối Thiểu ₫250k</div><div class="vc_Label_label"></div><div class="vc_ProgressBarExpiry_progressBarExpiry"><div class="vc_ProgressBarExpiry_usageLimitedText"><span class="vc_ProgressBarExpiry_validUntil vc_ProgressBarExpiry_capitalize">HSD: 18.03.2023</span></div></div></div><div class="vc_product-detail-page-vouchers_pcProductVoucherRight vc_VoucherStandardTemplate_right"><div></div><div class="vc_VoucherStandardTemplate_center"><div class="vc_RectButton_rectButton"><div class="vc_RectButton_btn vc_RectButton_claim">Lưu</div></div></div><div></div></div></div></div></div></div></div></div></div>
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
@include('javascript')
</body> 
</html>


