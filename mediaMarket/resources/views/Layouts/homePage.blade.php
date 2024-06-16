<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        body {
            padding: 0!important;
            margin: 0!important;
        }
        .item-top::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 0;
            height: 15px;
            width: 1px;
            background: #9d9d9d;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <div class="main bg-[#f2f2f2]">
        <div class="" id="shopify-header relative z-50">
            @include('partials.user.header')
        </div>
        <main id="main-container" class="container mx-auto lg:px-20 relative z-0">
            @yield('content')
        </main>
        <!-- Footer container -->
        <div class="back-top fixed right-0 bottom-3" id="back-top">
            <button type="button" class="text-white bg-[#be1e2d] hover:bg-[#d70018] focus:outline-none font-medium rounded-full text-sm px-5 py-3 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                <i class="fa-solid fa-arrow-up"></i>
            </button>
        </div>
        <footer
            class="bg-zinc-50 text-center text-surface/75 dark:bg-neutral-700 dark:text-white/75 lg:text-left">
            @include(('partials.user.footer'))
        </footer>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    $("#back-top").fadeIn();
                    $('#header-bottom').addClass('fixed top-0');
                } else{
                    $("#back-top").fadeOut();
                    $('#header-bottom').removeClass('fixed top-0 ');

                }
            });
            $("#back-top").on("click", function(){
                $("html, body").animate({scrollTop: 0}, 1000)
            });
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="{{ asset('/backend/js/simple.money.format.js') }}"></script>
    <script>
        $('.price_format').simpleMoneyFormat();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.btn-add_to_cart').click(function (e){
                e.preventDefault();
                let id = $(this).data('id_product');
                let cart_product_id = $('.cart_product_id_' + id).val();
                let cart_product_name = $('.cart_product_name_' + id).val();
                let cart_product_quantity = $('.cart_product_quantity_' + id).val();
                let cart_product_color = $('.cart_product_color_' + id).val();
                let cart_product_price = $('.cart_product_price_' + id).val();
                let cart_product_promotion = $('.cart_product_promotion_' + id).val();
                let cart_product_image = $('.cart_product_image_' + id).val();
                let _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ route("user.add_to_cart") }}',
                    method: 'POST',
                    data: {
                        _token: _token,
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_quantity: cart_product_quantity,
                        cart_product_color: cart_product_color,
                        cart_product_price: cart_product_price,
                        cart_product_promotion: cart_product_promotion,
                        cart_product_image: cart_product_image,
                    },
                    success:function (data){
                        Swal.fire({
                            title: "Đã thêm vào giỏ hàng",
                            text: "Bạn có muốn xem giỏ hàng?",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            cancelButtonText: "Tiếp tục mua hàng",
                            confirmButtonText: "Xem giỏ hàng!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('user.showCart') }}";
                            } else {
                                window.location.href = "{{ route('user.index') }}";

                            }
                        });
                    }
                })
            })
        })
    </script>
</body>
</html>
