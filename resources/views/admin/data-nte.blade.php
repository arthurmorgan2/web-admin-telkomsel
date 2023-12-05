@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="containter-fluid">
                <div class="row">
                    <div class="col-md-12 mx-3">
                        <label class="name-location" for="location">Location</label>
                    </div>
                    <div class="col-md-2 mx-3">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-solid fa-magnifying-glass fa-lg"></i></span>
                            <select class="form-select" name="location" id="filterSelect">
                                <option value="all" selected>all</option>
                                <option value="ntebaru">NTE Baru</option>
                                <option value="dismantling">Dismantling</option>
                                <option value="refurbished">Refurbished</option>
                            </select>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 px-3 filterable-div" data-category="ntebaru">
                        @include('admin.table.table-1')
                    </div>
                    <div class="col-md-12 px-3 filterable-div" data-category="dismantling">
                        @include('admin.table.table-2')
                    </div>
                    <div class="col-md-12 px-3 filterable-div" data-category="refurbished">
                        @include('admin.table.table-3')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function filterDivs() {
                var selectedCategory = document.getElementById('filterSelect').value;

                document.querySelectorAll('.filterable-div').forEach(function(div) {
                    var category = div.getAttribute('data-category');

                    if (selectedCategory === 'all' || selectedCategory === category) {
                        div.style.display = 'block';
                    } else {
                        div.style.display = 'none';
                    }
                });
            }

            filterDivs();

            document.getElementById('filterSelect').addEventListener('change', filterDivs);
        });
    </script>
@endsection
