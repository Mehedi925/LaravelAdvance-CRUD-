@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <a href="{{route('add.category')}}" class="btn btn-danger">Add Category</a>
                <a href="{{route('all.category')}}" class="btn btn-info">All Category</a>
                <hr>
                <div>
                    <ol>
                        <li><b>Category Name:</b> {{$cat->name}}</li>
                        <li><b>Category Slug:</b> {{$cat->slug}}</li>
                        <li><b>Created At:</b> {{$cat->created_at}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection