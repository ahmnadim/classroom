@extends('layouts.backend.app')
@push('css')

@endpush
@section('content')
	<div class="row-fluid sortable">	
	
			<a href="{{route('admin.teachers.create')}}" class="btn btn-large btn-info">Add Teacher</a>	

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon th-large"></i><span class="break"></span> All Teachers</h2>
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
								  <th>Teacher Name</th>
								  <th>Teacher email</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  
						  <tfoot>
							  <tr>
								  <th>Id</th>
								  <th>Teacher Name</th>
								  <th>Teacher email</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </tfoot>  
						  <tbody>

						  	@foreach($teachers as $key=>$teacher)
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$teacher->name}}</td>
									<td>{{$teacher->email}}</td>
									@if($teacher->is_valid == 0)
										<td><span class="label label-important">Unauthorized</span></td>
									@endif
									@if($teacher->is_valid == 1)
										<td><span class="label label-success">Authorized</span></td>
									@endif
									<td class="center">
										
										@if($teacher->is_valid == 0)
											<button class="btn btn-info" type="button" onclick="authorizeTeacher({{$teacher->id}})"><i class="halflings-icon white ok"></i><span></span></button>
											 <form style="display: none;" id="auth-form-{{$teacher->id}}" action="{{route('admin.teacher.auth', $teacher->id)}}" method="post">
	                                            @csrf
	                                        </form>
										@endif

										@if($teacher->is_valid == 1)
											<button class="btn btn-warning" type="button" onclick="unauthorizeTeacher({{$teacher->id}})"><i class="halflings-icon white remove"></i><span></span></button>
											 <form style="display: none;" id="auth-form-{{$teacher->id}}" action="{{route('admin.teacher.unauth', $teacher->id)}}" method="post">
	                                            @csrf
	                                        </form>
										@endif

										<a class="btn btn-danger" type="button" onclick="delete_category({{$teacher->id}})"><i class="halflings-icon white trash"></i></a>
                                        <form style="display: none;" id="delete-form-{{$teacher->id}}" action="{{route('admin.teachers.destroy', $teacher->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
									</td>
								</tr>
							@endforeach
								
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
<script type="text/javascript">
        function authorizeTeacher(id){
                const swalWithBootstrapButtons = swal.mixin({
                  confirmButtonClass: 'btn btn-success',
                  cancelButtonClass: 'btn btn-danger',
                  buttonsStyling: false,
                })

                swalWithBootstrapButtons({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, Authorize it!',
                  cancelButtonText: 'No, cancel!',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                   event.preventDefault();
                   document.getElementById('auth-form-'+id).submit();

                  } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                  ) {
                    swalWithBootstrapButtons(
                      'Cancelled',
                      'Your Data is safe 🙂',
                      'error'
                    )
                  }
                })
            }

            function unauthorizeTeacher(id){
                const swalWithBootstrapButtons = swal.mixin({
                  confirmButtonClass: 'btn btn-success',
                  cancelButtonClass: 'btn btn-danger',
                  buttonsStyling: false,
                })

                swalWithBootstrapButtons({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, Unauthorize it!',
                  cancelButtonText: 'No, cancel!',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                   event.preventDefault();
                   document.getElementById('auth-form-'+id).submit();

                  } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                  ) {
                    swalWithBootstrapButtons(
                      'Cancelled',
                      'Your Data is safe 🙂',
                      'error'
                    )
                  }
                })
            }

            function delete_category(id){
                const swalWithBootstrapButtons = swal.mixin({
                  confirmButtonClass: 'btn btn-success',
                  cancelButtonClass: 'btn btn-danger',
                  buttonsStyling: false,
                })

                swalWithBootstrapButtons({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, delete it!',
                  cancelButtonText: 'No, cancel!',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                   event.preventDefault();
                   document.getElementById('delete-form-'+id).submit();

                  } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                  ) {
                    swalWithBootstrapButtons(
                      'Cancelled',
                      'Your Data is safe 🙂',
                      'error'
                    )
                  }
                })
            }
    </script>
@endpush