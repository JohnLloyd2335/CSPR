<?php

namespace App\Http\Controllers;

use App\Exports\CustomerSegmentationExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class ExportController extends Controller
{
    public function csv()
    {
        $file_name = time()."_"."customer_segmentation.csv";

        return FacadesExcel::download(new CustomerSegmentationExport,$file_name, Excel::CSV);
    }

    public function xlsx()
    {
        $file_name = time()."_"."customer_segmentation.xlsx";

        return FacadesExcel::download(new CustomerSegmentationExport,$file_name, Excel::XLSX);
    }
}
