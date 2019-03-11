@extends('layouts.backend.app')
@push('css')

@endpush
@section('content')
	<div class="row-fluid sortable">	
	
			<a href="{{route('teacher.course.create')}}" class="btn btn-large btn-info">Add Course</a>	

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon th-large"></i><span class="break"></span> All Course</h2>
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
								  <th>Course Name</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  
						  <tfoot>
							  <tr>
								  <th>Id</td>
								  <th>Course Name</th>
								  <th>Actions</th>
							  </tr>
						  </tfoot>  
						  <tbody>

						  	@foreach($courses as $key=>$course)
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$course->name}}</td>
									<td class="center">
										<a class="btn btn-info" title="Edit" href="{{route('teacher.course.edit',$course->id)}}">
											<i class="halflings-icon white edit"></i>  
										</a>

										<a class="btn btn-info" title="View" href="{{route('teacher.course.showdetails',$course->id)}}">
											<i class="halflings-icon white view"></i>  
										</a>

										<button class="btn btn-danger" type="button" onclick="delete_category({{$course->id}})"><i class="material-icons">delete</i><span></span></button>
                                        <form id="delete-form-{{$course->id}}" action="{{route('teacher.course.destroy', $course->id)}}" method="post">
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