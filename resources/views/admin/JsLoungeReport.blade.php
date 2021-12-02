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
                    @if(!$allReviews->isEmpty())
                        <a href="/export" class="btn btn-dark mb-1" style="display:inline-block ; float:right"> Generate Report </a>                    
                    @endif                    
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
                            <label for="endDate">Search</label>
                            <button type="submit" name="submit" class="btn btn-primary" style="display:block ; width:100%;"> Search </button>                    
                        </div>                                                
                    </form>
            </div>
        </div>
    </div>
</div>

<div class="card spur-card mt-2 ">
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
        @if($allReviews->isEmpty())
            <h4 class="mt-4"> Sorry, there are no records </h4>
        @endif
    </div>
        
</div>

</div>

@endsection

