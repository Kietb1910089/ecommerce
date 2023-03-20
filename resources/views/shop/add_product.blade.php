<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}"  rel="stylesheet">
    <link href="{{asset('css/upfile.css')}}"  rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
    
    <title>Thêm sản phẩm</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('shop.sidebarshop')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                @include('shop.topbarshop')
                <!-- End of Topbar -->
                
                <!-- Begin Page Content -->
                
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-1 text-gray-800">Thông tin cơ bản</h1> -->
                    

                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- First Column -->
                    <form action="{{route('shop_add_product')}}" method="POST">
                        @csrf
                        <div class="col-lg-10"> 
                            
                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">Thông Tin Cơ Bản</h4>
                                </div>
                                <div class="card-body " >
                                    <div class="add_product_info"> 
                                        <p class="text-gray-900 p-3 m-0">Hình ảnh sản phẩm (tối đa 5 hình)</p>
                                        <div id="upfile">
                                            <div class="upfile" >
                                                <div class="uploadfile" id="uploadfile">
                                                    <div class="image">
                                                        <img src="" alt="Image" id="fileup" class="fileup" >
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon">
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    
                                                    </div>
                                                    <div id="cancel-btn" class="cancel-btn">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                    
                                                </div>
                                                <span onclick="defaultBtnActive()" class="custom-btn" id="custom-btn">Chọn Hình Ảnh</span>
                                                <input id="default-btn" type="file" multiple="multiple" name="product_img" accept="image/jpeg, image/png, image/jpg" hidden>
                                            </div>
                                            <div class="upfile" >
                                                <div class="uploadfile" id="uploadfile1">
                                                    <div class="image">
                                                        <img src="" alt="Image" id="fileup1" class="fileup">
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon">
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div id="cancel-btn" class="cancel-btn1">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                    
                                                </div>
                                                <span onclick="defaultBtnActive1()" class="custom-btn" id="custom-btn1">Chọn Hình Ảnh</span>
                                                <input id="default-btn1" type="file" multiple="multible" hidden name="product_img1">
                                            </div>
                                            <div class="upfile" >
                                                <div class="uploadfile" id="uploadfile2">
                                                    <div class="image">
                                                        <img src="" alt="Image" id="fileup2" >
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon">
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div id="cancel-btn" class="cancel-btn2">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                    
                                                </div>
                                                <span onclick="defaultBtnActive2()" class="custom-btn" id="custom-btn2">Chọn Hình Ảnh</span>
                                                <input id="default-btn2" type="file" multiple="multible" hidden  name="product_img2">
                                            </div>
                                            <div class="upfile" >
                                                <div class="uploadfile" id="uploadfile3">
                                                    <div class="image">
                                                        <img src="" alt="Image" id="fileup3" >
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon">
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div id="cancel-btn" class="cancel-btn3">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                    
                                                </div>
                                                <span onclick="defaultBtnActive3()" class="custom-btn" id="custom-btn3">Chọn Hình Ảnh</span>
                                                <input id="default-btn3" type="file" multiple="multible" hidden name="product_img3">
                                            </div>
                                            <div class="upfile" >
                                                <div class="uploadfile" id="uploadfile4">
                                                    <div class="image">
                                                        <img src="" alt="Image" id="fileup4" >
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon">
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div id="cancel-btn" class="cancel-btn4">
                                                        <i class="fas fa-times"></i>
                                                    </div>
                                    
                                                </div>
                                                <span onclick="defaultBtnActive4()" class="custom-btn" id="custom-btn4">Chọn Hình Ảnh</span>
                                                <input id="default-btn4" type="file" multiple="multible" hidden name="product_img4">
                                            </div>
                                        </div>
                                    </div>        
                                    <div class="add_product_info" style="display: flex;">
                                        <div class="add_product_info_t">
                                            <p class="text-gray-900 p-3 m-0" >Tên sản phẩm</p>
                                        </div>
                                        <input max="150" type="text" name="product_name" id="product_name" class="product_name" placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="add_product_info" style="display: flex;">
                                        <div class="add_product_info_t">
                                            <p class="text-gray-900 p-3 m-0" >Giá sản phẩm</p>
                                        </div>
                                        <input  type="number" min="1" max="999999999"  name="product_price" id="product_price" class="product_name" placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="add_product_info" style="display: flex;">
                                        <div class="add_product_info_t">
                                            <p class="text-gray-900 p-3 m-0" >Ngành hàng</p>
                                        </div>
                                        <select name="category" id="category" class="product_name choose_category">
                                            <option value="">--- Chọn Ngành Hàng ---</option> 
                                            @foreach($category as $category)
                                                <option value="{{$category -> id }}">{{$category -> categoryName}}</option> 
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="add_product_info" style="display: flex;">
                                        <div class="add_product_info_t">
                                            <p class="text-gray-900 p-3 m-0" >Loại hàng</p>
                                        </div>
                                        <select name="subcategory" id="subcategory" class="product_name ">
                                            <option value="">--- Chọn Loại Hàng ---</option> 

                                        </select>
                                    </div>
                                    <div class="add_product_info" style="display: flex;">
                                        <div class="add_product_info_t">
                                            <p class="text-gray-900 p-3 m-0" >Mô tả sản phẩm</p>
                                        </div>
                                        <textarea class="description_product" name="description" type="textarea" resize="none" rows="2" minrows="9" maxrows="26" autosize="true" maxlength="Infinity" restrictiontype="input" max="Infinity" min="-Infinity"  style="resize: none; min-height: 209.6px; height: 209.6px;">
                                        </textarea>                             
                                </div>
                            </div>

                            <!-- Custom Font Size Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" style="display:flex; text-align: center;">
                                    <h4 class="m-0 font-weight-bold text-primary">Thông Tin Bán Hàng (không bắt buộc)</h4>
                                    
                                </div>
                                <div class="card-body"> 
                                    <div class="add_product_info" style="display: flex;">
                                        <div class="add_product_info_t">
                                            <p class="text-gray-900 p-3 m-0" >Phân Loại Hàng</p>
                                        </div>
                                        <div class="add_product_variations">
                                        <div class="add_product_var p-3 ">
                                                <div class="variation_panel">
                                                    <div class="variation_panel_left">
                                                        Nhóm phân loại 1
                                                    </div>
                                                    <div class="variation_panel_right">
                                                        <input name="variation_option" class="variation_panel_right_normals" placeholder="Ví dụ: màu sắc v.v">
                                                        
                                                    </div>
                                                </div>   
                                                <div class="add_product_var_bot">
                                                    <div class="variation_panel_left">
                                                        Tên loại hàng
                                                    </div>
                                                    <div class="variation_panel_right">
                                                        <div class="variation_panel_right_item" >
                                                            <div class="variation_panel_right_items" id="variation_div" style="display:flex;">
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: Trắng, Đỏ v.v"  name="variation_option_name">
                                                            </div>
                                                            <div class="variation_panel_right_items" id="variation_div"  >
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: Trắng, Đỏ v.v"  name="variation_option_name1">
                                                            </div>
                                                            <div class="variation_panel_right_items" id="variation_div"  >
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: Trắng, Đỏ v.v"  name="variation_option_name2">
                                                            </div>
                                                            <div class="variation_panel_right_items" id="variation_div" >
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: Trắng, Đỏ v.v"  name="variation_option_name3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="add_product_var p-3 ">
                                                <div class="variation_panel">
                                                    <div class="variation_panel_left">
                                                        Nhóm phân loại 2
                                                    </div>
                                                    <div class="variation_panel_right">
                                                        <input name="variations_options" class="variation_panel_right_normals" placeholder="Ví dụ: Size v.v">
                                                    </div>
                                                </div>   
                                                <div class="add_product_var_bot">
                                                    <div class="variation_panel_left">
                                                        Tên loại hàng
                                                    </div>
                                                    <div class="variation_panel_right">
                                                        <div class="variation_panel_right_item">
                                                            <div class="variation_panel_right_items">
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: S, M v.v" name="variations_options_name">
                                                            </div>
                                                            <div class="variation_panel_right_items">
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: S, M v.v" name="variations_options_name1">
                                                            </div>
                                                            <div class="variation_panel_right_items">
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: S, M v.v" name="variations_options_name2">
                                                            </div>
                                                            <div class="variation_panel_right_items">
                                                                <input class="variation_panel_right_normal" placeholder="Ví dụ: S, M v.v" name="variations_options_name3">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4" style="">
                                
                                <div class="card-body" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary btn-icon-split">
                                        <!-- <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span> -->
                                        <span class="text">Lưu & Nhập Kho Hàng</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
   
<!-- include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script>
    $('#fileup').css('display','none');
     const wrapper = document.querySelector("#uploadfile");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector(".cancel-btn ");
         const img = document.querySelector("#fileup");
         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               
               img.src = result;
               wrapper.classList.add("active");
               $('#fileup').css('display','block');
               

             }
             cancelBtn.addEventListener("click", function(){
                defaultBtn.value = "";
               img.src = "";
               wrapper.classList.remove("active");
               $('#fileup').css('display','none');
               })
             reader.readAsDataURL(file);
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             
           }
         });
    
</script>
<script>
    $('#fileup1').css('display','none');
    const wrapper1 = document.querySelector("#uploadfile1");
    const defaultBtn1 = document.querySelector("#default-btn1");
    const customBtn1 = document.querySelector("#custom-btn1");
    const cancelBtn1 = document.querySelector(".cancel-btn1");
    const img1 = document.querySelector("#fileup1");
    let regExp1 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
    function defaultBtnActive1(){
        defaultBtn1.click();
    }
    defaultBtn1.addEventListener("change", function(){
        const file1 = this.files[0];
        if(file1){
            const reader1 = new FileReader();
            reader1.onload = function(){
                const result1 = reader1.result;
                img1.src = result1;
                wrapper1.classList.add("active");
                $('#fileup1').css('display','block');
            }
            cancelBtn1.addEventListener("click", function(){
                defaultBtn1.value = "";
                img1.src = "";
                wrapper1.classList.remove("active");
                $('#fileup1').css('display','none');
            })
            reader1.readAsDataURL(file1);
        }
           if(this.value){
             let valueStore1 = this.value.match(regExp1);
            
           }
         });
</script>
<script>
    $('#fileup2').css('display','none');
    const wrapper2 = document.querySelector("#uploadfile2");
    const defaultBtn2 = document.querySelector("#default-btn2");
    const customBtn2 = document.querySelector("#custom-btn2");
    const cancelBtn2 = document.querySelector(".cancel-btn2");
    const img2 = document.querySelector("#fileup2");
    let regExp2 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
    function defaultBtnActive2(){
        defaultBtn2.click();
    }
    defaultBtn2.addEventListener("change", function(){
        const file2 = this.files[0];
        if(file2){
            const reader2 = new FileReader();
            reader2.onload = function(){
                const result2 = reader2.result;
                img2.src = result2;
                wrapper2.classList.add("active");
                $('#fileup2').css('display','block');
            }
            cancelBtn2.addEventListener("click", function(){
                defaultBtn2.value = "";
                img2.src = "";
                wrapper2.classList.remove("active");
                $('#fileup2').css('display','none');
            })
            reader2.readAsDataURL(file2);
        }
           if(this.value){
             let valueStore2 = this.value.match(regExp2);
            
           }
         });
</script>
<script>
    $('#fileup3').css('display','none');
    const wrapper3 = document.querySelector("#uploadfile3");
    const defaultBtn3 = document.querySelector("#default-btn3");
    const customBtn3 = document.querySelector("#custom-btn3");
    const cancelBtn3 = document.querySelector(".cancel-btn3");
    const img3 = document.querySelector("#fileup3");
    let regExp3 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
    function defaultBtnActive3(){
        defaultBtn3.click();
    }
    defaultBtn3.addEventListener("change", function(){
        const file3 = this.files[0];
        if(file3){
            const reader3 = new FileReader();
            reader3.onload = function(){
                const result3 = reader3.result;
                img3.src = result3;
                wrapper3.classList.add("active");
                $('#fileup3').css('display','block');
            }
            cancelBtn3.addEventListener("click", function(){
                defaultBtn3.value = "";
                img3.src = "";
                wrapper3.classList.remove("active");
                $('#fileup3').css('display','none');
            })
            reader3.readAsDataURL(file3);
        }
           if(this.value){
             let valueStore3 = this.value.match(regExp3);
            
           }
         });
</script>
<script>
    $('#fileup4').css('display','none');
    const wrapper4 = document.querySelector("#uploadfile4");
    const defaultBtn4 = document.querySelector("#default-btn4");
    const customBtn4 = document.querySelector("#custom-btn4");
    const cancelBtn4 = document.querySelector(".cancel-btn4");
    const img4 = document.querySelector("#fileup4");
    let regExp4 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
    function defaultBtnActive4(){
        defaultBtn4.click();
    }
    defaultBtn4.addEventListener("change", function(){
        const file4 = this.files[0];
        if(file4){
            const reader4 = new FileReader();
            reader4.onload = function(){
                const result4 = reader4.result;
                img4.src = result4;
                wrapper4.classList.add("active");
                $('#fileup4').css('display','block');
            }
            cancelBtn3.addEventListener("click", function(){
                defaultBtn4.value = "";
                img4.src = "";
                wrapper4.classList.remove("active");
                $('#fileup4').css('display','none');
            })
            reader4.readAsDataURL(file4);
        }
           if(this.value){
             let valueStore4 = this.value.match(regExp4);
            
           }
         });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.choose_category').on('change',function(){
            
            var category_id = $(this).val();
            $.ajax({
                url: '{{route('select_category')}}',
                method: 'GET',
                data:{category_id:category_id},
                success:function(data){
                    $('#subcategory').html('');
                    var select ='';
                    $.each(data,function(key,value){
                        select += '<option value="'+value.id+'">'+value.subCategoryName	+'</option>';
                    });
                    $('#subcategory').append(select);
                },
            });
        });
    })
</script>
</body>

</html>