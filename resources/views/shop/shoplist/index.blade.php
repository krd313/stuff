@extends('layouts.master')
@section('content')


<div class="card">
	<div class="card-body">
		<div class="row row-cols-auto g-3">
		<h6 class="mb-3 text-uppercase">Shopping List</h6>							

				<a href="{{ route('unit.create') }}" class="btn btn-info px-5 radius-30 mb-3">Add Item</a>

	</div>
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>#</th>

						<th>Name</th>
						<th>Amount</th>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td>1</td>
						<td>Tomatoes</td>
						<td>can</td>
						<td>
							<div class="row row-cols-auto g-3">
								<div class="col">

									{{-- <a href="{{ route('unit.edit',$item->id)}}"><button class="btn btn-primary">Edit</button></a> --}}
									<a href="" class="btn btn-info sm" title="Edit Data">Edit </a>
									
								</div>
								<div>
									<form action="" method="post" >
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger sm">Delete</button>
									</form>
								</div>

								{{-- <div class="col">
									<a href="{{ route('unit.destroy',$unit->id) }}" class="btn btn-danger px-4 radius-30">Delete</a>
									
								</div> --}}
							</div>		
						</td>
					</tr>

				</tbody>
			</table>

		</div>
	</div>
</div>


		<!--end page wrapper --> 




@endsection