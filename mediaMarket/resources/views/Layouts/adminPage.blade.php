<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Media Market</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <style>
        body {
            padding: 0!important;
            margin: 0!important;
        }
    </style>
</head>
<body>
    @include('partials.admin.navbar')
    @include('partials.admin.sideBar')
    <div class="p-4 sm:ml-64 bg-[#eff7f8]">
        <div class="mt-20">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/gg1e9n4g1buqmn8sl1h7l4l1q35tdtxjb9lv09mqfxwb7i7v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('/backend/js/simple.money.format.js') }}"></script>
    <script>
        $('.price_format').simpleMoneyFormat();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        function fmSetLink($url) {
            // cấu hình link
            document.getElementById('image_label').value = $url;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.btn-sell_quantity').click(function (e) {
                e.preventDefault();
                let order_product_id = $(this).data('product_id');
                let product_sell_quantity = $('.sell_quantity_'+order_product_id).val();
                let order_code = $('.order_code').val();
                let _token = $('input[name="_token"]').val();

                $.ajax({
                    url: '{{ route("admin.order.update_qty") }}',
                    method: 'POST',
                    data: {
                        order_product_id: order_product_id,
                        product_sell_quantity: product_sell_quantity,
                        order_code: order_code,
                        _token: _token
                    },
                    success: function (response) {
                        turnOnNotifications(response.message, "success");
                        location.reload();
                    }
                })
            })
        })
    </script>
    <script>
        $(document).ready(function(){
            $('.order_status').change(function (e){
                e.preventDefault();
                let order_status = $(this).val();
                let order_id = $(this).children(":selected").data('id');
                let _token = $('input[name="_token"]').val();

                quantity = [];
                $('input[name="product_sell_quantity"]').each(function (){
                   quantity.push($(this).val());
                });

                order_product_id = [];
                $('input[name="order_product_id"]').each(function(){
                   order_product_id.push($(this).val());
                });
                let temp = 0;
                for(let i = 0; i < order_product_id.length; i++){
                    var order_qty = $('.sell_quantity_'+order_product_id[i]).val();
                    var quantity_storage = $('.quantity_storage_'+order_product_id[i]).val();
                    if(parseInt(order_qty) > parseInt(quantity_storage)){
                        temp += 1;
                        if(temp === 1){
                            turnOnNotifications('Kiểm tra lại số lượng đặt hàng!', "error")
                        }
                        $('.color_qty_'+order_product_id[i]).css('background', 'rgb(251 113 133)');
                    }
                }
                if(temp === 0){
                    $.ajax({
                        url: '{{ route("admin.order.update_status") }}',
                        method: 'POST',
                        data: {
                            order_status: order_status,
                            order_id: order_id,
                            quantity: quantity,
                            order_product_id: order_product_id,
                            _token: _token,
                        },
                        success:function (response) {
                            turnOnNotifications(response.message, "success");
                            location.reload();
                        },
                    });
                }
            })
        })
    </script>
</body>
</html>
