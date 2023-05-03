@extends('layout.app')

@section('main')
    <main>
        <div class="bg white">
            <div class="container">
                <div class="tag position comic-img">
                    <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
                </div>
                <div class="row">
                    <div class="col-8">
                        <h3>{{$comic['title']}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection