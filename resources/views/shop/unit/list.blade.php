@extends('layouts.master')
@section('content')




<div class="card">
	<div class="card-body">
		<div class="row row-cols-auto g-3">
		<h6 class="mb-3 text-uppercase">Unit List</h6>							

				<a href="{{ route('unit.create') }}" class="btn btn-info px-5 radius-30 mb-3">Create Unit</a>

	</div>
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Short</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($units as $key=> $item ) 
					<tr>
						<td>{{ $key+1 }}</td>
						<td> {{ $item->name }} </td>
						<td> {{ $item->short }} </td>
						<td>
							<div class="row row-cols-auto g-3">
								<div class="col">

									{{-- <a href="{{ route('unit.edit',$item->id)}}"><button class="btn btn-primary">Edit</button></a> --}}
									<a href="{{ route('unit.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">Edit </a>
								</div>
								<div class="col">
									<a href="{{ route('unit.create') }}" class="btn btn-danger px-4 radius-30">Delete</a>
									
								</div>
							</div>		
						</td>
					</tr>
					@endforeach 
				</tbody>
			</table>

		</div>
	</div>
</div>


		<!--end page wrapper -->





@endsection