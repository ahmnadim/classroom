@extends('layouts.backend.app')

@section('content')

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Add Teacher</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form method="post" action="{{route('admin.teachers.store')}} " class="form-horizontal">
							@csrf
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Teacher Name </label>
							  <div class="controls">
								<input type="text" name="name" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Teacher Email </label>
							  <div class="controls">
								<input type="email" name="email" class="span6 typeahead" id="typeahead">
								
							  </div>
							</div>
								
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">About Teacher</label>
							  <div class="controls">
								<textarea name="about" class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Teacher Password </label>
							  <div class="controls">
								<input type="text" name="password" class="span6 typeahead" id="typeahead">
								
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