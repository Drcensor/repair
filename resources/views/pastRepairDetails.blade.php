@extends('layouts.app')

@section('style')

   <style>
   .bigger4 {
     width: 145px;
   }

   .bigger2 {
     width: 110px;
   }

   .bigger3 {
     width: 100px;
   }
   </style>
   @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif


                </div>

                <div class="card-body">
                    @include('partials.search')
                </div>
                <div class="card-body">


                </div>
                <div class="card-body">

                    @include('partials.pastRepairDetailsCont')
                </div>
            </div>
        </div>
    </div>

</div>

<div class="card-body">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Previous or Repair Details
                </div>

                <div class="card-body">
                  @include('partials.repairDescription')
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-body">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Repair Details
                </div>

                <div class="card-body">
                  @include('partials.newRepair')
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
