@extends('layout.default');

@section('content')

<div class="col-lg-12 row">
    <div class="col-md-6">
        <h1 class="dash-title"> Js Lounge Food <span class="badge badge-pill badge-warning"> {{ count($allReviews) }} </span> </h1>
        <a href="#" class="btn btn-dark mb-1"> &#128512;  <span class="badge badge-pill badge-light ml-2"> {{ count($verySatisfiedFood)}} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128522;  <span class="badge badge-pill badge-light ml-2"> {{ count($satisfiedFood)}} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128528;  <span class="badge badge-pill badge-light ml-2"> {{ count($neutralFood) }} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128533;  <span class="badge badge-pill badge-light ml-2"> {{ count($unsatisfiedFood) }} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128544;  <span class="badge badge-pill badge-light ml-2"> {{ count($veryUnsatisfiedFood) }} </span></a> 
    </div>

    <div class="col-md-6">
        <h1 class="dash-title"> Js Lounge Service <span class="badge badge-pill badge-warning"> {{ count($allReviews) }} </span> </h1>
        <a href="#" class="btn btn-dark mb-1"> &#128512;  <span class="badge badge-pill badge-light ml-2"> {{ count($verySatisfiedService)}} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128522;  <span class="badge badge-pill badge-light ml-2"> {{ count($satisfiedService)}} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128528;  <span class="badge badge-pill badge-light ml-2"> {{ count($neutralService) }} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128533;  <span class="badge badge-pill badge-light ml-2"> {{ count($unsatisfiedService) }} </span></a>
        <a href="#" class="btn btn-dark mb-1"> &#128544;  <span class="badge badge-pill badge-light ml-2"> {{ count($veryUnsatisfiedService) }} </span></a> 
    </div>
</div>

    <div class="card spur-card mt-4 ">
        <div class="card-header">
            <div class="spur-card-menu">
            </div>                                            
        </div>     
        <div class="card-body">
            <table class="table table-striped table-in-card">
                <thead>
                    <tr>
                        <th scope="col"> # </th>
                        <th scope="col"> Date</th>
                        <th scope="col"> Food Ratings </th> 
                        <th scope="col"> Service Ratings </th> 
                        <th scope="col"> Comments </th>
                    </tr>
                </thead>

<tbody>
    @foreach($allReviews as $JsLounge => $value)
    <tr>
        <th scope="row"> {{ $allReviews->firstItem() + $JsLounge }} </th>
        <td> {{ $allReviews[$JsLounge]->created_at->format('d M Y ---- H:i') }} </td> 
        <td> {{ $allReviews[$JsLounge]->foodRatings  }} </td> 
        <td> {{ $allReviews[$JsLounge]->serviceRatings ? $allReviews[$JsLounge]->serviceRatings : 'N/A' }} </td> 
        <td> {{ $allReviews[$JsLounge]->comments ? $allReviews[$JsLounge]->comments : 'N/A' }} </td> 
    </tr>
    @endforeach
</tbody>
</table>
        <div class="container mt-5">
            <?php echo $allReviews->links() ?>
        </div>
        </div>
    </div>
</div>
@endsection