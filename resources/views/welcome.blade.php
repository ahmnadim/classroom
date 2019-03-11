@extends('layouts.frontend.app')

@section('slider')
<section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h3>We Ensure better education <br />for a better world</h3>
                        <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
                        <a class="main_btn" href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
@endsection



@section('courses')
<section class="blog_categorie_area">
            <div class="container">
                <div class="main_title">
                    <h2>Our Free Courses</h2>
                    
                </div>
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

@section('team')
<section class="team_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Meet Our Faculty</h2>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                </div>
                        

                <div class="row team_inner">
                    @foreach($teachers as $user)
                    <div class="col-lg-3 col-sm-6">

                        <div class="team_item">
                            <div class="team_img">
                                <img class="rounded-circle" src="{{asset('teacherprofile/'.$user->image)}}" alt="">
                                <div class="hover">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team_name">
                                <h4>{{$user->name}}</h4>
                                <p>{{$user->about}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

@endsection

@section('testimoni')
<!-- <section class="testimonials_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2>Our Free Courses</h2>
                    
                </div>
                <div class="testi_slider owl-carousel">
                    @foreach($courses as $course)
                    <div class="item">
                        <div class="testi_item">
                            <h4>{{$course->name}}</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>{{$course->slug}}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section> -->
@endsection

@section('pakages')
 <section class="packages_area p_120">
            <div class="container">
                <div class="row packages_inner">
                    <div class="col-lg-4">
                        <div class="packages_text">
                            <h3>Choose <br />Course Packages</h3>
                            <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="lnr lnr-graduation-hat"></i>
                                <h3>Premium</h3>
                                <p>For the individuals</p>
                            </div>
                            <div class="pack_body">
                                <ul class="list">
                                    <li><a href="#">Secure Online Transfer</a></li>
                                    <li><a href="#">Unlimited Styles for interface</a></li>
                                    <li><a href="#">Reliable Customer Service</a></li>
                                </ul>
                            </div>
                            <div class="pack_footer">
                                <h4>£399.00</h4>
                                <a class="main_btn" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="packages_item">
                            <div class="pack_head">
                                <i class="lnr lnr-diamond"></i>
                                <h3>Exclusive</h3>
                                <p>For the individuals</p>
                            </div>
                            <div class="pack_body">
                                <ul class="list">
                                    <li><a href="#">Secure Online Transfer</a></li>
                                    <li><a href="#">Unlimited Styles for interface</a></li>
                                    <li><a href="#">Reliable Customer Service</a></li>
                                </ul>
                            </div>
                            <div class="pack_footer">
                                <h4>£399.00</h4>
                                <a class="main_btn" href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection