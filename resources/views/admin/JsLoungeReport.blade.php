@extends('layout.default')

@section('content')

<div class="col-md-12">
<div class="row">
    <div class="col-xl-12">
        <div class="card spur-card">
            <div class="card-header">
                <div class="spur-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="spur-card-title col-md-6"> Generate Report </div>
                <div class="spur-card-title col-md-6">  
                    {{-- @if(($allReviews))
                    <form action="/export" method="get">
                        <input type="hidden" id="exportStart" name="start_date" value="">                    
                        <input type="hidden" id="exportEnd" name="end_date" value="">                    
                        <button type="submit" name="submit" class="btn btn-dark mb-1" style="display:inline-block ; float:right"> Generate Report </a>                    
                        </form>                            
                    @endif                     --}}
                </div>
            </div>
            <div class="card-body ">
                    <form action=" {{ route('GenerateJsLoungeReport')  }} " method="GET" class="form-row">
                        {{-- @csrf --}}
                        <div class="form-group col-md-4">
                            <label for="startDate">Start Date</label>
                            <input type="date" class="form-control" id="startDate" name="start_date" placeholder="Start Date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="endDate">End Date</label>
                            <input type="date" class="form-control" id="endDate" name="end_date" placeholder="End Date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="endDate">Generate</label>
                            <button type="submit" name="submit" class="btn btn-primary" style="display:block ; width:100%;"> <i class="fas fa-file"></i> Generate </button>                    
                        </div>                                                
                    </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="card spur-card mt-2 ">
    <div class="card-header">
        <div class="spur-card-menu">
            @if (session('status'))
                <div class="alert alert-success">
                    <p> hi </p>
                </div>
            @endif
        </div>                                            
    </div>     
    <div class="card-body">
        @include('admin.subview.table')
        @if(($allReviews))        
            @if($allReviews->isEmpty())
                <h4 class="mt-4"> Sorry, there are no records to generate</h4>
            @endif
        @endif    
    </div>
        
</div> --}}

</div>


@endsection

@section('scripts')
<script type="text/javascript">
    // let queryStartDate = document.getElementById('startDate');
    // let queryEndDate = document.getElementById('endDate');
    // let exportStartDate = document.getElementById('exportStart');
    // let exportEndDate = document.getElementById('exportEnd');

    
    // const handleChange = (e) => {
    //     if(e.target.id === "startDate" ) {
    //         exportStartDate.value = e.target.value;
    //     } 
    //     if (e.target.id === "endDate") {
    //         exportEndDate.value = e.target.value;
    //     }
    //  }
     

    // queryStartDate.addEventListener('change' , (e)=>handleChange(e) , false)
    // queryEndDate.addEventListener('change' , (e)=>handleChange(e) , false)

</script>
@stop

