@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <hr>
                <div>
                        <h2>{{$post->title}}</h2>
                        <img src="{{URL::to($post->image)}}" style="height: 340px;">
                    <p><b>Category Name:</b> {{$post->name}}</p>
                        <p>{{$post->details}}</p>

                </div>
            </div>
        </div>
    </div>
@endsection