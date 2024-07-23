<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hóa đơn bán hàng</title>
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <style>

    </style>
</head>
<body>
    <div class="form-mail" style="text-align: center; width: 70%">
        <div class="title-mail" style="text-align: center; font-size: 24px; font-weight: 600">
            Chương trình khuyến mãi tri ân khách hàng của cửa hàng bán lẻ
            <a target="_blank" href="http://media.th">
                Media Market
            </a>
        </div>
        <div class="content-mail">
            <h2 style="text-align: center; color: red">Giảm giá {{ number_format($coupon['value'], 0,',', '.') }}đ cho các hóa đơn mua hàng</h2>
            <span style="text-align: center;">
                Nhận dịp <p style="font-size: 15px; font-weight: 600">{{ $coupon['name']}}</p>, tri nhân và cảm ơn quý khách hàng đã sử dụng dịch vụ và mua hàng tại Media Market, Media Market xin gửi tặng quý khách hàng voucher giảm giá.
                Quý khách sử dụng tài khoản mua hàng vào nhập mã phía dưới đ được giảm giá khi mua hàng.
                Xin cảm ơn quý khách đã đồng hành cùng cửa hàng!
            </span>
        </div>
        <div class="footer-mail">
            <div class="coupon-code">Mã voucher:<strong>{{ $coupon['code']}}</strong></div>
            <div class="end_date">Từ ngày: <strong>{{ $coupon['start_date']}}</strong> - Đến ngày:<strong>{{ $coupon['end_date']}}</strong></div>
        </div>
    </div>
</body>
</html>
