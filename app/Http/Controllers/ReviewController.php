<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Exports\ReviewsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromView;

class ReviewController extends Controller
{
    public function index() {
        // $allReviews = Review::orderBy('created_at' , 'DESC')->get();
        // $impressed = Review::where('foodRatings' , 'Very Satisfied')->get();
        // $satisfied = Review::where('serviceRatings' , 'Satisfied')->get();
        // $ok = Review::where('ratings' , 'Ok')->get();
        // $notImpressed = Review::where('ratings' , 'Not Impressed')->get();
        // $poorService = Review::where('ratings' , 'Poor Service')->get();

        // $PearlsDeli = Review::where('branch' , 'PearlsDeli')->get();
        // $JsLounge = Review::where('branch' , 'JsLounge')->get();
        // $Linaks = Review::where('branch' , 'Linaks')->get();

        // return view('admin.dashboard')->with('allReviews' , $allReviews)->with('veryImpressed' , $impressed)
        // ->with('satisfied' , $satisfied)->with('ok' , $ok)->with('notImpressed' , $notImpressed)->with('poorService' , $poorService)
        // ->with('PearlsDeli' , $PearlsDeli)->with('JsLounge' , $JsLounge)->with('Linaks' , $Linaks);
    }



    public function DashJsLounge () {

        $allReviews = Review::where('branch' , 'JsLounge')->get();

        return view('admin.dashboard')->with('allReviews' , $allReviews);
    }


    public function PearlsDeli(Request $request) {
        $review = new Review;
        $review->ratings = $request->ratings;
        $review->branch = $request->branch;
        $review->comment = $request->comment;
        $review->save();
        return view('shops.PearlsDeli.thankyou');
    }


    public function Linaks(Request $request) {
        $review = new Review;
        $review->ratings = $request->ratings;
        $review->branch = $request->branch;
        $review->comment = $request->comment;
        $review->save();
        return view('shops.Linaks.thankyou');
    }
    
    public function JsLounge(Request $request) {
        $review = new Review;
        $review->foodRatings = $request->foodRatings;
        $review->serviceRatings = $request->serviceRatings;
        $review->branch = $request->branch;
        $review->comments = $request->comments;
        $review->save();
        return view('shops.JsLounge.thankyou');
    }


    public function reviewsPearlsDeli() {
        $allReviews = Review::where('branch' , 'PearlsDeli')->orderBy('created_at' , 'DESC')->paginate(10);
        $impressed = Review::where('ratings' , 'Very Impressed')->where('branch' , 'PearlsDeli')->get();
        $satisfied = Review::where('ratings' , 'Satisfied')->where('branch' , 'PearlsDeli')->get();
        $ok = Review::where('ratings' , 'Ok')->where('branch' , 'PearlsDeli')->get();
        $notImpressed = Review::where('ratings' , 'Not Impressed')->where('branch' , 'PearlsDeli')->get();
        $poorService = Review::where('ratings' , 'Poor Service')->where('branch' , 'PearlsDeli')->get();

        return view('admin.PearlsDeli')->with('allReviews' , $allReviews)->with('veryImpressed' , $impressed)
        ->with('satisfied' , $satisfied)->with('ok' , $ok)->with('notImpressed' , $notImpressed)->with('poorService' , $poorService);
    }    

    public function reviewsJsLounge() {
        $allReviews = Review::where('branch' , 'JsLounge')->paginate(10);
        $allRev = Review::where('branch' , 'JsLounge')->get();

        
        $verySatisfiedFood = Review::where('foodRatings' , 'Very Satisfied')->where('branch' , 'JsLounge')->get();
        $satisfiedFood = Review::where('foodRatings' , 'Satisfied')->where('branch' , 'JsLounge')->get();
        $neutralFood = Review::where('foodRatings' , 'Neutral')->where('branch' , 'JsLounge')->get();
        $unsatisfiedFood = Review::where('foodRatings' , 'Unsatisfied')->where('branch' , 'JsLounge')->get();
        $veryUnsatisfiedFood = Review::where('foodRatings' , 'Very Unsatisfied')->where('branch' , 'JsLounge')->get();

        $verySatisfiedService = Review::where('serviceRatings' , 'Very Satisfied')->where('branch' , 'JsLounge')->get();
        $satisfiedService = Review::where('serviceRatings' , 'Satisfied')->where('branch' , 'JsLounge')->get();
        $neutralService = Review::where('serviceRatings' , 'Neutral')->where('branch' , 'JsLounge')->get();
        $unsatisfiedService = Review::where('serviceRatings' , 'Unsatisfied')->where('branch' , 'JsLounge')->get();
        $veryUnsatisfiedService = Review::where('serviceRatings' , 'Very Unsatisfied')->where('branch' , 'JsLounge')->get();

        
        return view('admin.JsLounge')->with('allReviews' , $allReviews)->with('verySatisfiedFood' , $verySatisfiedFood)->with('satisfiedFood' , $satisfiedFood)->with('neutralFood' , $neutralFood)
                ->with('unsatisfiedFood' , $unsatisfiedFood)->with('veryUnsatisfiedFood' , $veryUnsatisfiedFood)->with('verySatisfiedService' , $verySatisfiedService)
                ->with('satisfiedService' , $satisfiedService)->with('neutralService' , $neutralService)->with('unsatisfiedService' , $unsatisfiedService)
                ->with('veryUnsatisfiedService' , $veryUnsatisfiedService)->with('allRev' , $allRev);
    }    


    public function reviewsLinaks() {
        $allReviews = Review::where('branch' , 'Linaks')->paginate(10);
        $impressed = Review::where('ratings' , 'Very Impressed')->where('branch' , 'Linaks')->get();
        $satisfied = Review::where('ratings' , 'Satisfied')->where('branch' , 'Linaks')->get();
        $ok = Review::where('ratings' , 'Ok')->where('branch' , 'Linaks')->get();
        $notImpressed = Review::where('ratings' , 'Not Impressed')->where('branch' , 'Linaks')->get();
        $poorService = Review::where('ratings' , 'Poor Service')->where('branch' , 'Linaks')->get();

        return view('admin.Linaks')->with('allReviews' , $allReviews)->with('veryImpressed' , $impressed)
        ->with('satisfied' , $satisfied)->with('ok' , $ok)->with('notImpressed' , $notImpressed)->with('poorService' , $poorService);
    }      


    

    public function JsLoungeReport ( Request $request)  {

        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Date($request->end_date . " " ."23:23:59");
            return (new ReviewsExport)->forStartYear($start_date)->forEndYear($end_date)->download('ReviewReport.xlsx');;                    
        } 

        return view('admin.JsLoungeReport');
    }

    
    public function export (Request $request) {

        $startDate = $request->start_date ? Carbon::parse(request()->start_date)->toDateTimeString() : Date('Y-m-d 00:00:00');
        $endDate = $request->end_date ? Date($request->end_date . " " ."23:23:59") : Date('Y-m-d 23:59:59');

        return (new ReviewsExport)->forStartYear($startDate)->forEndYear($endDate)->download('ReviewReport.xlsx');        

    }




    public function clickRate () {
        return view('clickRate');
    }


    public function dealRate () {
        
        $min = 1;
        $max = 100000;
        $id = rand($min,$max);

        return view('shops.JsLounge.JsLounge' , ['id' => $id]);
    }
}

