@extends('layouts.frontend.app')

@section('slider')
<section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="blog_b_text text-center">
                        <h2>All of Our Free <br /> Courses</h2>
                        <p>There is a moment in the life of any aspiring Student that it is time to buy that first</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
@endsection
@section('content')     
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    @foreach($courses as $course)
                    <div class="col-lg-4"  style="margin-bottom: 20px;">
                        <div class="categories_post">
                            <img src="{{Storage::url('course/'.$course->image)}}" alt="cousre">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="{{ route('course.details', $course->id) }}"><h5>{{$course->name}}</h5></a>
                                    <div class="border_line"></div>
                                    <p>{!!str_limit($course->details, 20)!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection        