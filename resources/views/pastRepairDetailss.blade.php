@extends('layouts.app')

@section('content')


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
