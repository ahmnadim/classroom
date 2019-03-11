@extends('layouts.frontend.app')

@section('slider')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
        	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Course Details</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="courses.html">Course</a>
						<a href="course-details.html">Course Details</a>
					</div>
				</div>
			</div>
        </div>
    </section>
@endsection



@section('courses')
        <!--================Course Details Area =================-->
        <section class="course_details_area p_120">
        	<div class="container">
        		<div class="row course_details_inner">
        			<div class="col-lg-8">
        				<div class="c_details_img">
        					<img class="img-fluid" src="{{asset('frontend/img/courses/course-details.jpg')}}" alt="">
        				</div>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Objectives</a>
							</li>
<!-- 							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Eligibility</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Course Outline</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="objctive_text">
								{{$course->details}}
								</div>
							</div>
<!-- 							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="objctive_text">
									<p>HTML,CSS,Basic PHP</p>
									<p>Object Oriented PHP</p>
								</div>
							</div> -->
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
								<div class="objctive_text">
									<ul class="list">
										<li class="list-group-item active">{{$course->name}}</li>
										@foreach($courses as $key=>$ps)
										
											<li>{{$key+1}}{{". "}}<a href="#">{{$ps->title}}</a></li>
											<li><a href="#">{!!$ps->course_link!!}</a></li>

										@endforeach
									</ul>
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="c_details_list">
        					<ul class="list">
        						<li><a href="#">Trainer’s Name <span>{{$course->teacher->name}}</span></a></li>
        						<li><a href="#">Course Fee <span>Free</span></a></li>
        					</ul>
        					<a class="main_btn" href="#">Enroll the Course</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
@endsection

