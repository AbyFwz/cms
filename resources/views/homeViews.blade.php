@extends('layouts.frontLayouts.front_design')

@section('title')
    Home
@endsection

@section('content')
    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">Page Heading
            
        </h1>
        @foreach($articlesAll as $art)
        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="{{ $art->featured_image }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $art->title }}</h2>
            <p class="card-text">{{ Str::limit($art->content, 100, '...') }}</p>
                <a href="{{ '/article/'.$art->id }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{ $art->created_at->format('d M, Y') }} by
                <a href="#">Start Bootstrap</a>
            </div>
        </div>
        @endforeach
        <!-- Pagination -->
        @if($articlesAll->count() > 5)
        <ul class="pagination justify-content-center mb-4">
            {{-- <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li> --}}
            {{ $articlesAll->links() }}
        </ul>
        @endif

    </div>
@endsection