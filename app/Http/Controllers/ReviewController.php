<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index() {
        $allReviews = Review::orderBy('created_at' , 'DESC')->get();
        $impressed = Review::where('ratings' , 'Very Impressed')->get();
        $satisfied = Review::where('ratings' , 'Satisfied')->get();
        $ok = Review::where('ratings' , 'Ok')->get();
        $notImpressed = Review::where('ratings' , 'Not Impressed')->get();
        $poorService = Review::where('ratings' , 'Poor Service')->get();

        $PearlsDeli = Review::where('branch' , 'PearlsDeli')->get();
        $JsLounge = Review::where('branch' , 'JsLounge')->get();
        $Linaks = Review::where('branch' , 'Linaks')->get();

        return view('admin.dashboard')->with('allReviews' , $allReviews)->with('veryImpressed' , $impressed)
        ->with('satisfied' , $satisfied)->with('ok' , $ok)->with('notImpressed' , $notImpressed)->with('poorService' , $poorService)
        ->with('PearlsDeli' , $PearlsDeli)->with('JsLounge' , $JsLounge)->with('Linaks' , $Linaks);
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
        $review->ratings = $request->ratings;
        $review->branch = $request->branch;
        $review->comment = $request->comment;
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
        $impressed = Review::where('ratings' , 'Very Impressed')->where('branch' , 'JsLounge')->get();
        $satisfied = Review::where('ratings' , 'Satisfied')->where('branch' , 'JsLounge')->get();
        $ok = Review::where('ratings' , 'Ok')->where('branch' , 'JsLounge')->get();
        $notImpressed = Review::where('ratings' , 'Not Impressed')->where('branch' , 'JsLounge')->get();
        $poorService = Review::where('ratings' , 'Poor Service')->where('branch' , 'JsLounge')->get();

        return view('admin.JsLounge')->with('allReviews' , $allReviews)->with('veryImpressed' , $impressed)
        ->with('satisfied' , $satisfied)->with('ok' , $ok)->with('notImpressed' , $notImpressed)->with('poorService' , $poorService);
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
}

