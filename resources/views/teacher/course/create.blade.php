@extends('layouts.backend.app')

@section('content')

<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Forms</a>
	</li>
</ul>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Add Course</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form method="post" action="{{route('teacher.course.store')}} " class="form-horizontal" enctype="multipart/form-data">
							@csrf
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Course Name </label>
							  <div class="controls">
								<input type="text" name="name" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Course Details </label>
							  <div class="controls">
								<input type="text" name="details" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Course Image</label>
							  <div class="controls">
								<input name="image" class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>   
						
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"> Submit</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

</div>
@endsection