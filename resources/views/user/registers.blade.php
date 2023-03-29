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
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <title>Đăng Ký</title>
</head>
<body>
    
    <header>
        @include('header')
        
    </header>
    <main >
        <div class="distance" style="font-family: Roboto, sans-serif; padding-top: 20px;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                      <h2 class="text-uppercase text-center mb-5">ĐĂNG KÝ TÀI KHOẢN</h2>
                      <form action="{{route('registers_user')}}" method="POST">
                        @csrf
                        
                        <div class="form-outline mb-4">
                          <input type="text"  class="form-control form-control-lg"  placeholder="Nhập Họ" required style="font-size: 17px;" name="firstname"/>
                        </div>  
                        <div class="form-outline mb-4">
                            <input type="text"  class="form-control form-control-lg"  placeholder="Nhập Tên" required style="font-size: 17px;" name="lastname"/>
                          </div>        
                        <div class="form-outline mb-4">
                          <input type="email"  class="form-control form-control-lg" placeholder="Nhập Email" style="font-size: 17px;" required name="email"/>                           
                        </div>   
                        

                        <div class="form-outline mb-4">
                          <input type="password"  class="form-control form-control-lg" placeholder="Nhập Mật Khẩu" style="font-size: 17px;" required name="password"/>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="password"  class="form-control form-control-lg" placeholder="Nhập Lại Mật Khẩu" style="font-size: 17px;" required name="password_confirm"/>
                        </div>
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="form2Example3cg"
                          />
                          <label class="form-check-label" for="form2Example3g">
                            Tôi đồng ý với điều khoản của <a href="#!" class="text-body"><u>Dịch vụ</u></a>
                          </label>
                        </div>
                        
                        <div class="d-flex justify-content-center">
                          <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-white " style="width: 100%;background-color: var(--theme-color); font-size: larger;"  >ĐĂNG KÝ</button>
                        </div>
        
                        <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a href="{{route('login') }}" class="fw-bold text-infor" style="text-decoration: none;">Đăng nhập tại đây</a></p>
        
                      </form>
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



