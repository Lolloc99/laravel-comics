@extends('layouts.app')

@section('title')
    Comic
@endsection

@section('main_content')
    {{-- Striscia blu e anteprima img fumetto --}}
    <div class="blu-bg">
        <div class="container-s">
            <div class="img-chosen-comic">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                <div class="up-text">Comic Book</div>
                <div class="bottom-text">View Gallery</div>
            </div>
        </div>
    </div>
    {{-- Info fumetto --}}
    <div class="deluxe-edition">
        <div class="container-s div-cont">
            <div class="col-sx">
                <h1>Action Comics #1000: The Deluxe Edition</h1>
                <div class="price-tab">
                    <div class="tab-1">
                        <span>U.S Price: $19.99</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="tab-2">
                        <span>Check Availability</span>
                    </div>
                </div>
                <div class="description">
                    <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
                </div>
            </div>
            <div class="col-dx"></div>
        </div>
    </div>
@endsection