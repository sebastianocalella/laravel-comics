@extends('layouts.app')

@section('main-content')
    <section class="comic">
        <div class="container">
            <div class="row position-relative">
                <div class="position-absolute my-cover">
                    <img src="{{$comics[0]['thumb']}}" alt="">
                </div>
                <div class="col-9">
                    <h2>
                        {{$comics[0]["title"]}}
                    </h2>
                    <div class="col-12 price-container">
                        <p>U. S. price: {{$comics[0]["price"]}}</p>
                    </div>
                    <p>
                        {{$comics[0]["description"]}}
                    </p>
                </div>
                <div class="col-3">
                    <img src="{{$comics[0]['thumb']}}" alt="advertisment">
                </div>
            </div>
        </div>    
    </section>
@endsection