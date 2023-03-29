<!-- include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- include jQuery validate library -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    const plus = document.querySelector('#plus');
    const minus = document.querySelector('#minus');
    const number = document.querySelector('#number');
    var a = 1;
    plus.addEventListener('click', () => {
        a++;
        number.value = a;
    });
    minus.addEventListener('click', () => {
        if(a > 1){
            a--;
            number.value = a;
        }
    });
</script>

<script>
    $(document).ready(function(){
        $('.choose_variation').on('click',function(){
            var avaiable_stock = $(this).attr('data-avai_stock');
            $('.show_avaiable').html(avaiable_stock.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' sản phẩm có sẵn');
        });
    })
</script>
<script>
    $(document).ready(function(){
        $('.add-to-cart').click(function(){
            var id = $(this).data('id_product');
            var product_id = $('.product_id_' + id).val();
            var shop_id = $('.shop_id_' + id).val();
            var productName = $('.productName' + id).val();
            var previewImage = $('.previewImage' + id).val();
            var price = $('.price' + id).val();
            var quantity = $('.quantity' + id).val();
            var combination = $("input[type='radio'][name='combination']:checked").val();
            var avaiable_stock = $("input[type='radio'][name='combination']:checked").attr('data-avai_stock');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{route('add_cart_ajax')}}',
                method: 'POST',
                data:{
                    id_: product_id,
                    shop_id: shop_id,
                    productName: productName,
                    previewImage: previewImage,
                    price: price,
                    quantity: quantity,
                    combination: combination,
                    avaiable_stock:avaiable_stock,
                    _token: _token,
                },
                success: function(data){
                    
                    $status = data.status;
                    $message = data.message;
                    $count_cart = data.count_cart;
                    //console.log($count_cart);
                    if($status == true){
                        swal({
                            title: "Thêm vào giỏ hàng thành công",
                            text: "Bạn có muốn xem giỏ hàng không?",
                            icon: "success",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location.href = '{{route('show_cart_ajax') }}';
                            } 
                            
                        });
                        $('#count').html($count_cart);
                    }
                    else{
                        swal("Thất bại!", $message, "error");
                    }
                    if (parseInt(quantity)  > parseInt(avaiable_stock)){
                        swal("Thất bại!", "Số lượng sản phẩm trong kho không đủ", "error");
                    }
                    
                    if(quantity <= 0){
                        swal("Thất bại!", "Số lượng sản phẩm không hợp lệ!", "error");
                    }
                    if(avaiable_stock <= 0){
                        swal({
                            title: "Thất bại!",
                            text: "Sản phẩm này đã hết hàng. Vui lòng chọn sản phẩm khác!",
                            icon: "error",
                            
                        })
                    }
                }
            });
        });
    });
</script>
