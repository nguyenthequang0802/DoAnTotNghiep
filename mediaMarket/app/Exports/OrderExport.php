<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OrderExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }

    public function headings(): array {
        return [
            'ID',
            'Order_code',
            'Customer_name',
            'Shipping_name',
            "Status",
            "Payment_method",
            "Coupon",
            "Total_bill"
        ];
    }

    public function map($order): array {
        return [
            $order->id,
            $order->order_code,
            $order->user->name,
            $order->shipping->shipping_name,
            $order->order_status,
            $order->order_payment_method,
            $order->order_code_value,
            $order->order_total - $order->order_code_value,
        ];
    }
}
