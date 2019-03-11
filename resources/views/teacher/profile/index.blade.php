@extends('layouts.backend.app')

@section('content')
<div class="row-fluid sortable">
		<div class="box span8">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span> Profile</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form method="post" action="{{route('teacher.profile.update')}} " class="form-horizontal" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				  <fieldset>
					<div class="control-group">
					  <label class="control-label" for="typeahead">Name </label>
					  <div class="controls">
						<input type="text" name="name" value="{{$teacher->name}}" class="span6 typeahead" id="typeahead">
						
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="typeahead">About </label>
					  <div class="controls">
						<input type="text" name="about" value="{{$teacher->about}}" class="span6 typeahead" id="typeahead">
						
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="typeahead">E-mail </label>
					  <div class="controls">
						<input type="text" name="email" value="{{$teacher->email}}" class="span6 typeahead" id="typeahead">
						
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="fileInput">Image</label>
					  <div class="controls">
						<input name="image" value="{{$teacher->image}}" class="input-file uniform_on" id="fileInput" type="file">
					  </div>
					</div>   
				
					<div class="form-actions">
					  <button type="submit" class="btn btn-primary"> Update Profile</button>
					  <button type="reset" class="btn">Cancel</button>
					</div>

				  </fieldset>
				</form>   

			</div>

			

		</div><!--/span-->

		<div class="box span4">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span> Profile Picture</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>

			<div class="box-content">
				<div class="masonry-gallery">
					<div id="image-1" class="masonry-thumb">
						<img class="grayscale" src="{{URL::asset('/teacherprofile/'.$teacher->image)}} " alt="Sample Image 1">
					</div>
											
				</div>
			</div>

		</div>

				

</div>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Password</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						<form method="post" action="{{route('teacher.password.update')}} " class="form-horizontal" enctype="multipart/form-data">
							@csrf
							@method('PUT')
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Old Password </label>
							  <div class="controls">
								<input type="password" name="old_password" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">New Password </label>
							  <div class="controls">
								<input type="password" name="password" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Confirm Password </label>
							  <div class="controls">
								<input type="password" name="password_confirmation" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>
						
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"> Update Password</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div>
@endsection