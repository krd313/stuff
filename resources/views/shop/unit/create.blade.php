@extends('layouts.master')
@section('content')




<div class="row">
    <div class="col-xl-6 mx-auto">
        
        <div class="card">
            <div class="card-body">

            <div class="card-body p-4">
                <div class="row row-cols-auto g-3">
                    <h6 class="mb-3 text-uppercase">Unit Add</h6>							
            
                            <a href="{{ route('unit.index') }}" class="btn btn-info px-5 radius-30 mb-3">Unit List</a>

                </div>

                @if(session('success'))
                <div>{{ session('success') }}</div>
                
            @endif
        
            @if($errors->any())
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            @endif

                <form class="row g-3" method="post" action="{{ route('unit.store') }}" id="myForm">
                    @csrf
           
                {{-- <form class="row g-3"> --}}
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Unit Name</label>
                        <input type="text" name="name" class="form-control" id="name" >
                    </div>
                    <div class="col-md-6">
                        <label for="input2" class="form-label">Short Description</label>
                        <input type="text" name="short" class="form-control" id="short">
                    </div>


                    


                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            {{-- <a href="{{ route('unit.index') }}" class="btn btn-info px-5 radius-30">Add Unit</a> --}}
                        </div>

                    </div>
                            <input type="submit" class="btn btn-success waves-light px-5 radius-30" value="Add Unit">
                            
                            {{-- <button type="button" class="btn btn-warning px-5 radius-30">Warning</button>
                    
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Customer"> --}}
                </form>
            </div>
        </div>






    </div>
</div>



@endsection