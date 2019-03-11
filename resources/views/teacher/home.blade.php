@extends('layouts.backend.app')

@section('content')
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon th-large"></i><span class="break"></span> All Posts</h2>
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
								  <th>Post Title</th>
								  <th>Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  
						  <tfoot>
							  <tr>
								  <th>Id</th>
								  <th>Post Title</th>
								  <th>Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </tfoot>  
						  <tbody>

						  	@foreach($posts as $key=>$post)
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$post->title}}</td>
									<td class="center">{!! str_limit($post->body, 40) !!}</td>
									<td class="center">
										@if($post->status == false)
								  			<span class="label label-success">Published </span>
								  		@else
								  			<span class="label label-warning">Pending </span>
								  		@endif
									</td>
									<td class="center">
										<a class="btn btn-success" href="#">
											<i class="halflings-icon white zoom-in"></i>  
										</a>
										<a class="btn btn-info" href="#">
											<i class="halflings-icon white edit"></i>  
										</a>
										<a class="btn btn-danger" href="#">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>
								</tr>
							@endforeach
								
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection
