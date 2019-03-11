@extends('layouts.backend.app')

@section('content')
	<div class="row-fluid sortable">		

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon th-large"></i><span class="break"></span> All Assignments</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Courses</th>
								  <th>Submitted To</th>
							  </tr>
						  </thead>  
						  <tfoot>
							  <tr>
								  <th>Id</th>
								  <th>Courses</th>
								  <th>Submitted To</th>
							  </tr>
						  </tfoot>  
						  <tbody>
						  	@foreach($assignments as $key=>$assignment)
						  		<tr>
									<td>{{$key+1}}</td>
									<td>{{$assignment->course}}</td>
									<td>{{$assignment->teacher}}</td>
						  		</tr>
							@endforeach	
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection