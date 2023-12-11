<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerSegmentationTable extends Component
{

    use WithPagination;

    public $selectedOption = 'all';

 

    public function mounted()
    {
        
      


    }
   
    public function filterRecords($option)
    {
        $this->selectedOption = $option;
    }
    

    public function render()
    {

        $loyal_regulars_count = Customer::where('labels','Loyal Regulars')->count();
        $frequent_spenders_count = Customer::where('labels','Frequent Spenders')->count();
        $exclusive_elite_count = Customer::where('labels','Exclusive Elite')->count();
        $occasional_shoppers_count = Customer::where('labels','Occasional Shoppers')->count();

        // Calculate total number of customers
        $total_customers = $loyal_regulars_count + $frequent_spenders_count + $exclusive_elite_count + $occasional_shoppers_count;

        // Calculate percentage for each label
        $loyal_regulars_percentage = round(($loyal_regulars_count / $total_customers) * 100, 2);
        $frequent_spenders_percentage = round(($frequent_spenders_count / $total_customers) * 100, 2);
        $exclusive_elite_percentage = round(($exclusive_elite_count / $total_customers) * 100, 2);
        $occasional_shoppers_percentage = round(($occasional_shoppers_count / $total_customers) * 100, 2);
    

        $customers = ($this->selectedOption === 'all')
            ? Customer::paginate(10)
            : Customer::where('labels', $this->selectedOption)->paginate(10);
    
        return view('livewire.customer-segmentation-table', compact('customers','loyal_regulars_count','frequent_spenders_count','exclusive_elite_count','occasional_shoppers_count','loyal_regulars_percentage','frequent_spenders_percentage','exclusive_elite_percentage','occasional_shoppers_percentage'));
    }

    public function CsvExport()
    {
        return redirect()->route('com_seg.export.csv');
    }

    public function XlsxExport()
    {
        return redirect()->route('com_seg.export.xlsx');
    }
    
}
