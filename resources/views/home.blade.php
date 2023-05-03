@extends('layout.app')

@section('main')
    <main>
        <div class="bg">
            <div class="container">
                <div class="tag position">
                    CURRENT SERIES
                </div>
                <div class="cards pt-5">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <div class="img"><img src="{{ $comic['thumb'] }}"alt="..."></div>
                            <h3><a href="{{ route('comic', ['index' => $loop->index]) }}">{{ $comic['title'] }}</a></h3>
                        </div>
                    @endforeach
                </div>
                <div class="tag load">LOAD MORE</div>
            </div>
        </div>
    </main>
@endsection