<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hóa đơn bán hàng</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body{
            font-family: DejaVu Sans;
        }
    </style>
</head>
<body>
    <div style="margin: 16px 0px;">
        <h2 style="text-align: center; margin-bottom: 8px; text-transform: uppercase; font-weight: 700; font-size: 25px">Cửa hàng công nghệ Media Market</h2>
        <div style="text-align: center">
            <span><strong>Địa chỉ:</strong> An Khánh, Hoài Đức, Hà Nội - </span>
            <span><strong>Điện thoại:</strong> 1900 2222</span>
        </div>
        <div style="text-align: center; margin: 16px 0px; font-weight: 700">
            <h3>Hóa đơn bán hàng</h3>
        </div>
        <div class="">
            <div style="margin-bottom: 8px">
                <span class=""><strong>Tên khách hàng:</strong> {{ $customer->name }}</span> &nbsp; &nbsp;
                <span class=""><strong>SĐT:</strong> {{ $customer->phone }}</span>
            </div>
            <div style="margin-bottom: 8px">
                <div style="margin-bottom: 8px">
                    <span class=""><strong>Tên người nhận:</strong> {{ $shipping->shipping_name }}</span> &nbsp; &nbsp;
                    <span class=""><strong>SĐT:</strong> {{ $shipping->shipping_phone }}</span>
                </div>
                <span ><strong>Địa chỉ nhận hàng:</strong> {{ $shipping->shipping_address }}</span>
            </div>
            <div style="margin-bottom: 16px">
                <span><strong>Mã đơn hàng:</strong> {{ $order->order_code }}</span>
            </div>
            <div>
                <div style="position: relative">
                    <table style="width: 100%; text-align: left">
                        <thead style="text-transform: uppercase; background-color: #f9fafb">
                        <tr>
                            <th scope="col" style="padding: 12px 24px;">
                                STT
                            </th>
                            <th scope="col" style="padding: 12px 24px;">
                                Sản phẩm
                            </th>
                            <th scope="col" style="padding: 12px 24px;">
                                Số Lượng
                            </th>
                            <th scope="col" style="padding: 12px 24px;">
                                Đơn giá
                            </th>
                            <th scope="col" style="padding: 12px 24px;">
                                Thành tiền
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $total_price = 0;
                        @endphp
                        @foreach($order_details as $item)
                            @php
                                $price_discount = $item->product_price - ($item->product_price * $item->product_promotion /100);
                                $into_price = $item->product_order_quantity * $price_discount;
                                $total_price += $into_price;
                            @endphp
                            <tr>
                                <th style="padding: 12px 24px; font-weight: 500;">
                                    {{ $loop->index+1 }}
                                </th>
                                <td>
                                    {{ $item->product_name }}
                                </td>
                                <td>
                                    {{ $item->product_order_quantity }}
                                </td>
                                <td>
                                    {{ number_format($price_discount, 0, ',', '.') }}
                                </td>
                                <td>
                                    {{ number_format($into_price, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                            <tr style="font-weight: 600">
                                <td></td>
                                <td></td>
                                <td></td>
                                <th style="">Tổng tiền</th>
                                <td style="padding: 12px 24px;">{{ number_format($total_price, 0, ',', '.') }}</td>
                            </tr>
                            <tr style="padding: 12px 24px;">
                                <td></td>
                                <td></td>
                                <td></td>
                                <th style="">Mã giảm giá</th>
                                <td style="padding: 12px 24px;">{{ $order->order_code_coupon }}</td>
                            </tr>
                            <tr style="font-weight: 600">
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Giá trị giảm</th>
                                <td style="padding: 12px 24px;">{{ number_format($order->order_code_value, 0, ',', '.') }}</td>
                            </tr>
                            <tr style="font-weight: 600">
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Thanh toán</th>
                                <td style="padding: 24px 12px;">{{ number_format($total_price - $order->order_code_value, 0, ',', '.') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
            <div class="mb-4" style="margin-bottom: 16px">
                <span class="inline-block"><strong>Ghi chú:</strong>&nbsp;{{ $order->shipping->shipping_note }}</span>
            </div>
            <div class="text-center" style="text-align: center">
                <span class="inline-block font-bold text-xl" style="font-weight: 700; font-size: 18px;">Media Market xin cảm ơn quý khách!</span>
            </div>
        </div>
    </div>
</body>
</html>
