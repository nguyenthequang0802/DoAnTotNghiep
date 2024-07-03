<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediaMarket-Sự lựa chọn hoàn hảo</title>
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
        <main id="main-container" class="container mx-auto xl:px-20 relative z-0">
            @yield('content')
        </main>
        <!-- Footer container -->
        <div class="back-top fixed right-0 bottom-3" id="back-top">
            <button type="button" class="text-white bg-[#009981] hover:bg-[#00483d] focus:outline-none font-medium rounded-full text-sm px-5 py-3 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
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
                let storage_product_qty = $('.storage_product_qty_' + id).val();
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
                        storage_product_qty: storage_product_qty,
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
                                window.location.reload();
                            }
                        });
                    }
                })
            })
        })
    </script>
    <script>
        $(document).ready(function(){
            $('.send_order').click(function (e){
                e.preventDefault();
                Swal.fire({
                    title: "Bạn muốn xác nhận đơn hàng?",
                    text: "Bạn vui lòng kiểm tra lại chính xác thông tin người nhận hàng!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Xác nhận!",
                    cancelButtonText: "Đóng!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        let shipping_name = $('.shipping_name').val();
                        let shipping_phone = $('.shipping_phone').val();
                        let province = $('.shipping_province option:selected').text();;
                        let district = $('.shipping_district option:selected').text();;
                        let ward = $('.shipping_ward option:selected').text();
                        let address = $('.shipping_address').val();
                        const shipping_address = `${address}, ${ward}, ${district}, ${province}`;

                        // if (province === "Chọn tỉnh thành" || district === "Chọn quận/huyện" || ward === "Chọn phường/xã"){
                        //     alert('Vui lòng điền đầy đủ địa chỉ!');
                        // } else {
                        // }
                        let paymentMethod = $('input[name="method_payment"]:checked').val();
                        let order_coupon = $('.order_coupon').val();
                        let shipping_note = $('.shipping_note').val();
                        let order_coupon_value = $('.order_coupon_value').val();
                        let order_total_price = $('.order_total_price').val();

                        let _token = $('input[name="_token"]').val();
                        $.ajax({
                            url: '{{ route("user.confirm_checkout") }}',
                            method: 'POST',
                            data: {
                                _token: _token,
                                shipping_name: shipping_name,
                                shipping_phone: shipping_phone,
                                shipping_address: shipping_address,
                                paymentMethod: paymentMethod,
                                order_coupon: order_coupon,
                                shipping_note: shipping_note,
                                order_coupon_value: order_coupon_value,
                                order_total_price: order_total_price
                            },
                            success:function (response) {
                                if(response.redirect){
                                    window.location.href = response.redirect
                                } else {
                                    Swal.fire({
                                        title: "Thành công!",
                                        text: "Đơn hàng của bạn đã được gửi đi, Cảm ơn bạn đã mua hàng!",
                                        icon: "success"
                                    });
                                    window.setTimeout(function(){
                                        location.reload();
                                    }, 3000);
                                }
                            },
                        });
                    }
                });

            })
        })
    </script>
    <script>
        $('.form_search').on('input', function (e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route('user.search_product') }}',
                data: $('.form_search').serialize(),
                success: function(response){
                    console.log(response)
                    let products = response;
                    let html = '';
                    let urlTemplate = `{{ route('user.product_detail', ':slug') }}`;
                    for (let i = 0; i < products.length; i++){
                        let formattedPrice = parseFloat(products[i].price).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                        let productDetailUrl = urlTemplate.replace(':slug', products[i].slug);
                        let previewImage = products[i].first_image_path ? '{{ asset(':path') }}'.replace(':path', products[i].first_image_path) : '';
                        if (products[i].promotion == 0){
                            html += `
                            <a href="${productDetailUrl}" class="search-results_item grid grid-cols-4 items-center mt-0 mx-4 mb-4 text-[14px] font-normal leading-normal">
                                <div class="search-results_item-image col-span-1 me-2">
                                    <span class="image_style relative block" style="padding-top: 92%">
                                        <img src="${previewImage}" class="absolute left-0 top-0 h-full w-full max-w-full">
                                    </span>
                                </div>
                                <div class="search-results_item-info col-span-3">
                                    <div class="search-results_item-title text-gray-900 text-[14px] font-bold mb-[10px] hover:text-[#0a6e5f]">${products[i].name}</div>
                                        <div class="search-results_item-price flex items-center justify-start flex-wrap font-normal text-[#343f49] text-[20px]">
                                            <div class="text-[20px] text-[#dc3545] me-[12px]">${formattedPrice}</div>
                                        </div>
                                    </div>
                            </a>`
                        } else {
                            let price_discount = parseFloat(products[i].price - (products[i].price * products[i].promotion /100)).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                            html += `
                                <a href="${productDetailUrl}" class="search-results_item grid grid-cols-4 items-center mt-0 mx-4 mb-4 text-[14px] font-normal leading-normal">
                                    <div class="search-results_item-image col-span-1 me-2">
                                        <span class="image_style relative block" style="padding-top: 92%">
                                            <img src="${products[i].first_image_path}" class="absolute left-0 top-0 h-full w-full max-w-full">
                                        </span>
                                    </div>
                                    <div class="search-results_item-info col-span-3">
                                        <div class="search-results_item-title text-gray-900 text-[14px] font-bold mb-[10px] hover:text-[#0a6e5f]">${products[i].name}</div>
                                        <div class="search-results_item-price flex items-center justify-start flex-wrap font-normal text-[#343f49] text-[20px]">
                                            <div class="price-sale text-[20px] text-[#dc3545] me-[12px]">${price_discount}</div>
                                            <del class="price-compare text-[12px] text-[#848484]">${formattedPrice}</del>
                                        </div>
                                    </div>
                                </a>`
                        }
                    }
                    if(products.length == 0){
                        html = `<div class="search-result_empty p-[20px] text-center text-[#333e48] hover:text-[#ffd400]">Không có sản phầm bạn đang tìm kiếm.</div>`
                    }
                    $('.search-results_group').html(html);
                }
            })
        })
    </script>
</body>
</html>
