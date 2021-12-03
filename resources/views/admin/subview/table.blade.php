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
    @php 
        $counter = 1
    @endphp
<tbody>
@if(($allReviews) && !$allReviews->isEmpty())    
@foreach($allReviews as $JsLounge )
    <tr>
        <th scope="row"> {{ $counter++}} </th>
        <td> {{ $JsLounge->created_at->format('d M Y ---- H:i') }} </td> 
        <td> {{ $JsLounge->foodRatings  }} </td> 
        <td> {{ $JsLounge->serviceRatings ? $JsLounge->serviceRatings : 'N/A' }} </td> 
        <td> {{ $JsLounge->comments ? $JsLounge->comments : 'N/A' }} </td> 
    </tr>
@endforeach
@endif

</tbody>
</table>