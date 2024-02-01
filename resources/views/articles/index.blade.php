@extends('layouts.master')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="row row-cols-auto g-3">
            <span class="d-inline-block" style="width: 180px">
		<h4 class=" d-inline text-uppercase">Articles</h4>
            </span>
            <span class="d-inline-block">
        <a href="{{ route('articles.create') }}" class="btn btn-info px-3 radius-30 ">Add Articles</a>
            </span>
    </div>

<hr class="border-top" />
<div class="row row-cols-1 row-cols-md-12 row-cols-lg-2 row-cols-xl-12">
    <div class="col">
        @forelse ($articles as $article)
        <div class="card">


            <div class="card-body">
                <div>
                    <span class="d-inline-block " style="width: 60%">
                    <a href="{{ route('articles.show',$article->slug ) }}" class="card-title"><h5> {{ $article->title }}</h5></a>
                    </span>
                    <span class="d-inline-block">
                        {{ $article->created_at->format("jS-M-Y") }}, by {{ $article->user->name }}
                        </span>
                </div>
                <a>
                <p class="card-text">{{ $article->excerpt }}</p>	
                </a>
            </div>

            <div class="row row-cols-auto g-3">
                @foreach ( $article->tags as $tag) 
                <div class="col">
                    <a href="" type="badge" class="badge bg-danger mx-2 mb-2">
                        {{ $tag->name }}
                    </a>
                </div>
                @endforeach
                <br>

            </div>

        </div>
            @empty
            <p class="card-text">Unfortunatley, we have not found any Articles.</p>	
            @endforelse

        @if ($articles->hasPages())
            <div class="pagination-wrapper">
                 {{ $articles->links() }}
            </div>
        @endif
            


    </div>

</div>

		<!--end page wrapper --> 
    </div>
</div>





@endsection


