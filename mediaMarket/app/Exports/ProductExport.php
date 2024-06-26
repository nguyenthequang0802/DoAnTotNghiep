<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }
    public function headings(): array {
        return [
            'ID',
            'Category_ID',
            'Brand_ID',
            'Name',
            "Info_product",
            "Color",
            "Price",
            "Quantity",
            "Quantity_sold",
            "Status",
            "Description",
            "Promotion"
        ];
    }

    public function map($product): array {
        return [
            $product->id,
            $product->category->name,
            $product->brand->name,
            $product->name,
            $product->info_product,
            $product->color,
            $product->price,
            $product->quantity,
            $product->quantity_sold,
            $product->status,
            $product->description,
            $product->promotion
        ];
    }
}
