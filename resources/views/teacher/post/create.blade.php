@extends('layouts.backend.app')

@section('content')
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Add Post</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form method="post" action="{{route('teacher.post.store')}} " class="form-horizontal" enctype="multipart/form-data">
							@csrf
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Post Title </label>
							  <div class="controls">
								<input type="text" name="title" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError1">Course Name</label>
								<div class="controls">
								  <select id="selectError1" name="course_id" id="course" multiple="multiple" data-rel="chosen">
									 @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
								  </select>
								</div>
							  </div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Video Lecture </label>
							  <div class="controls">
								<input type="text" name="course_link" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>
							

							<div class="control-group">
							  <label class="control-label" for="fileInput"> Post Image</label>
							  <div class="controls">
								<input name="image" class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Post Details</label>
							  <div class="controls">
								<textarea name="body" class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"> Post</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div>
@endsection