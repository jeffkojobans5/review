<?php

namespace App\Exports;

use App\Models\Review;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReviewsExport implements FromQuery , WithMapping , WithHeadings , WithColumnWidths , WithStyles
{
    use Exportable;

    public function forStartYear(string $startYear)
    {
        $this->startYear = $startYear;
        
        return $this;
    }    

    public function forEndYear(string $endYear)
    {
        $this->endYear = $endYear;
        
        return $this;
    }

    public function orderby(string $order)
    {
        $this->order = $order;
        
        return $this;
    }
    
    
    public function query()
    {
        return Review::query()->whereBetween('created_at',[$this->startYear, $this->endYear ])->orderby('created_at' , 'ASC') ;        
    }

    public function map($review): array
    {
        return [
            $review->created_at,
            $review->foodRatings,
            $review->serviceRatings,
            $review->comments,
            $review->branch,
        ];
    }    

    public function headings(): array
    {
        return [
            'Date',
            'Food Ratings',
            'Service Ratings',
            'Comments',
            'Branch',
        ];
    }    

    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 20,            
            'C' => 20,            
            'D' => 50,            
            'E' => 20,            
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true] ],
        ];
    }    
    


}


