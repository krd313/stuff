@extends('layouts.master')
@section('content')




<div class="row">
    <div class="col-xl-6 mx-auto">
        
        <div class="card">
            <div class="card-body">

            <div class="card-body p-4">
                <div class="row row-cols-auto g-3">
                    <h6 class="mb-3 text-uppercase">Unit Edit</h6>							
            
                            <a href="{{ route('unit.index') }}" class="btn btn-info px-5 radius-30 mb-3">Unit List</a>

                </div>

                <form class="row g-3" method="post" action="{{ route('unit.update',$unit->id) }}" id="myForm" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')

                    {{-- <input type="hidden" name="id" value="{{ $unit->id }}"> --}}
                {{-- <form class="row g-3"> --}}
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Unit Name</label>
                        <input type="text" name="name" value="{{ $unit->name }}" class="form-control" id="name" >
                    </div>
                    <div class="col-md-6">
                        <label for="input2" class="form-label">Short Description</label>
                        <input type="text" name="short" value="{{ $unit->short }}" class="form-control" id="short">
                    </div>


                    


                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            {{-- <a href="{{ route('unit.index') }}" class="btn btn-info px-5 radius-30">Add Unit</a> --}}
                        </div>

                    </div>
                            <input type="submit" class="btn btn-success waves-light px-5 radius-30" value="Update Unit">
                            {{-- <button type="button" class="btn btn-warning px-5 radius-30">Warning</button>
                    
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Customer"> --}}
                </form>
            </div>
        </div>






    </div>
</div>



@endsection