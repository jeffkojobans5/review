@extends('layout.default');

@section('content')
    <div class="container-fluid">
        <h1 class="dash-title"> Total <span class="badge badge-pill badge-warning"> {{ count($allReviews ?? '') }} </span> </h1>
        {{-- <a href="#" class="btn btn-dark mb-1"> &#128512;  <span class="badge badge-pill badge-light ml-2"> {{ count($veryImpressed)}} </span></a> --}}
        {{-- <a href="#" class="btn btn-dark mb-1"> &#128522;  <span class="badge badge-pill badge-light ml-2"> {{ count($satisfied)}} </span></a> --}}
        {{-- <a href="#" class="btn btn-dark mb-1"> &#128528;  <span class="badge badge-pill badge-light ml-2"> {{ count($ok) }} </span></a> --}}
        {{-- <a href="#" class="btn btn-dark mb-1"> &#128533;  <span class="badge badge-pill badge-light ml-2"> {{ count($notImpressed) }} </span></a> --}}
        {{-- <a href="#" class="btn btn-dark mb-1"> &#128544;  <span class="badge badge-pill badge-light ml-2"> {{ count($poorService) }} </span></a>      --}}
    <div class="row dash-row mt-4">
        <div class="col-xl-4">
            <div class="stats stats-primary">
                <h3 class="stats-title"> Js Lounge</h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"> {{ count($allReviews) }} </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-4">
            <div class="stats stats-success ">
                <h3 class="stats-title"> JsLounge </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"> {{ count($JsLounge) }} </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="stats stats-danger">
                <h3 class="stats-title"> Linaks Collections </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"> {{ count($Linaks) }} </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

</div>

@endsection

@section('scripts')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RKLPBDLLCN"></script>
<script type="text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RKLPBDLLCN');
</script>
@stop

