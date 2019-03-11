@extends('layouts.backend.app')

@section('content')
	<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon th-large"></i><span class="break"></span> Add Course</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					  <form method="post" action="{{route('student.courses.store')}} " class="form-horizontal" >
						@csrf
					  <fieldset>
						
						<div class="control-group">
							<label class="control-label" for="selectError1">Course Name</label>
							<div class="controls">
							  <select id="selectError1" name="course" id="course" multiple="multiple" data-rel="chosen">
								 @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
							  </select>
							</div>
						  </div>

						<div class="form-actions">
						  <button type="submit" class="btn btn-primary"> Add</button>
						  <button type="reset" class="btn">Cancel</button>
						</div>
					  </fieldset>
					</form>         
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection