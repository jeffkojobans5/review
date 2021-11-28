@extends('layout.default');

@section('content')

<div class="col-lg-12 ">
    <h1 class="dash-title"> Pearls Deli <span class="badge badge-pill badge-warning"> {{ count($allReviews) }} </span> </h1>
    <a href="#" class="btn btn-dark mb-1"> &#128512;  <span class="badge badge-pill badge-light ml-2"> {{ count($veryImpressed)}} </span></a>
    <a href="#" class="btn btn-dark mb-1"> &#128522;  <span class="badge badge-pill badge-light ml-2"> {{ count($satisfied)}} </span></a>
    <a href="#" class="btn btn-dark mb-1"> &#128528;  <span class="badge badge-pill badge-light ml-2"> {{ count($ok) }} </span></a>
    <a href="#" class="btn btn-dark mb-1"> &#128533;  <span class="badge badge-pill badge-light ml-2"> {{ count($notImpressed) }} </span></a>
    <a href="#" class="btn btn-dark mb-1"> &#128544;  <span class="badge badge-pill badge-light ml-2"> {{ count($poorService) }} </span></a> 

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
                        <th scope="col"> Ratings </th> 
                        <th scope="col"> Comment </th>
                    </tr>
                </thead>

<tbody>
    @foreach($allReviews as $PearlsDeli => $value)
    <tr>
        <th scope="row"> {{ $allReviews->firstItem() + $PearlsDeli }} </th>
        <td> {{ $allReviews[$PearlsDeli]->created_at->format('d M Y ---- H:i') }} </td> 
        <td> {{ $allReviews[$PearlsDeli]->ratings }} </td> 
        <td> {{ $allReviews[$PearlsDeli]->comments ? $PearlsDeli->comments : 'N/A' }} </td> 
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