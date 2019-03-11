@extends('layouts.backend.app')

@section('content')
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Assignments</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form method="post" action="{{route('student.assignment.submit')}} " class="form-horizontal" enctype="multipart/form-data">
							@csrf
						  <fieldset>
							<div class="control-group">
							<label class="control-label" for="selectError1">Teacher's Name</label>
							<div class="controls">
							  <select id="selectError1" name="teacher" id="course" multiple="multiple" data-rel="chosen">
								
                                    <option value="{{$teacher->name}}">{{$teacher->name}}</option>
                                	
							  </select>
							</div>
						  </div>

							<div class="control-group">
							<label class="control-label" for="selectError2">Course Name</label>
							<div class="controls">
							  <select id="selectError2" name="course" id="course" multiple="multiple" data-rel="chosen">
								 
                                    <option value="{{$course->name}}">{{$course->name}}</option>
                               
							  </select>
							</div>
						  </div>

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Assignment</label>
							  <div class="controls">
								<input name="assignment" class="input-file uniform_on" id="fileInput" type="file">
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