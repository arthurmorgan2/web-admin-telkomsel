@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-3 filterable-div" data-category="ntebaru">
                        @include('admin.table.table-all-type')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
