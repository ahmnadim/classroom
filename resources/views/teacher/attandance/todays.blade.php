@extends('layouts.backend.app')
@push('css')

@endpush
@section('content')
	<div class="row-fluid sortable">	
	
			<a href="{{route('teacher.attandance')}}" class="btn btn-large btn-info">Back</a>	

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon th-large"></i><span class="break"></span>Today's Attendance</h2>
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
								  <th>Name</th>
								  <th>Attendance</th>
							  </tr>
						  </thead>  
						  <tfoot>
							  <tr>
								  <th>Id</th>
								  <th>Name</th>	
								  <th>Attendance</th>		
							  </tr>
						  </tfoot>  
						  <tbody>
						  	
						  	@foreach($students as $student)
						  		<tr>
						  		<td>{{$student->id}}</td>
						  		<td>{{$student->name}}</td>
								<td class="center">
										
										<button class="btn btn-primary" type="button" onclick="add({{$student->id}})"><i class="halflings-icon white ok"></i><span></span></button>
										 <form style="display: none;" id="add-form-{{$student->id}}" action="{{route('teacher.attandance.add', $student->id)}}" method="post">
									        @csrf
									    </form>

									    

										<button class="btn btn-danger" type="button" onclick="remove({{$student->id}})"><i class="halflings-icon white remove"></i><span></span></button>
										 <form style="display: none;" id="remove-form-{{$student->id}}" action="{{route('teacher.attandance.remove', $student->id)}}" method="post">
									        @csrf
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
        function add(id){
                   event.preventDefault();
                   document.getElementById('add-form-'+id).submit();
                }

            function remove(id){
                event.preventDefault();
                document.getElementById('remove-form-'+id).submit();
            }

            
    </script>

@endpush