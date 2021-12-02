<?php

namespace App\Exports;

use App\Models\Review;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReviewsExport implements FromView
{
    
    public function view(): View
    {
        return view('admin.subview.table', [
            'allReviews' => Review::all()
        ]);
    }
}

