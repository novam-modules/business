@extends('business::layouts.master')

@section('content')
    <h1>Business</h1>

    <div class="card-deck mb-3">
        <div class="card">
            <div class="card-header card-primary">
                <h4 class="card-title m-0">
                    Company
                    <a href="/admin/personell/employees" class="float-right btn btn-sm btn-outline-primary">
                        <i class="fa fa-external-link"></i>
                    </a>
                </h4>
            </div>
            <div class="card-body">

            </div>
        </div>
        <div class="card">
            <div class="card-header card-primary">
                <h4 class="card-title m-0">Contractors</h4>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="card-deck my-3">
            <div class="card">
                <div class="card-header card-primary">
                    <h4 class="card-title m-0">Suppliers</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card">
                <div class="card-header card-primary">
                    <h4 class="card-title m-0">Agencies</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
@stop
