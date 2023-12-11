<?php
namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerSegmentationExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Customer::select('customer_id','recency','frequency','monetary','labels')->get();
    }

    public function headings(): array
    {
        return ['Customer ID','Recency','Frequency','Monetary','Labels'];
    }

}