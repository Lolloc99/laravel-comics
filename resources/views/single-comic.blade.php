@extends('layouts.app')

@section('title')
    Comic
@endsection

@section('main_content')
    {{-- Striscia blu e anteprima img fumetto --}}
    <div class="blu-bg">
        <div class="container-s">
            <div class="img-chosen-comic">
                <img src="{{$comics['thumb']}}" alt="">
                <div class="up-text">Comic Book</div>
                <div class="bottom-text">View Gallery</div>
            </div>
        </div>
    </div>
    {{-- Info fumetto --}}
    <div class="deluxe-edition">
        <div class="container-s div-cont">
            <div class="col-sx">
                <h1>{{$comics['title']}}</h1>
                <div class="price-tab">
                    <div class="tab-1">
                        <span><span class="green-text">U.S Price: </span>{{$comics['price']}}</span>
                        <span class="green-text available">AVAILABLE</span>
                    </div>
                    <div class="tab-2">
                        <span>Check Availability</span>
                    </div>
                </div>
                <div class="description">
                    <p>{{$comics['description']}}</p>
                </div>
            </div>
            <div class="col-dx">
                <div>
                    <p>Advertisment</p>
                    <img src="{{ asset('images/adv.jpg') }}" alt="Advertisment">
                </div>
            </div>
        </div>
    </div>
@endsection