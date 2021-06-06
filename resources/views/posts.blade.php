@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    @forelse ($posts as $post)
    <div class="col-sm-3 mb-5">
    <div class="card">
        <img class="card-img-top" src="/img/help.jpg" alt="Card image cap">
        <div class="card-body">
        <p>Nga: {{ $post->user->first_name }} {{ $post->user->last_name }}</p>
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->description }}</p>
        </div>
        <div class="card-footer">
            <div class="row justify-content-between">

                <a href="{{route("posts.show", $post->id)}}" class="btn btn-primary col-sm-4"><i class="fas fa-eye"></i> Shiko</a>
                <a href="{{route("posts.show", $post->id)}}/?request=true#reserve" class="btn btn-success col-sm-5"><i class="fas fa-check"></i> Rezervo</a>
            </div>


        </div>
      </div>
    </div>
    @empty
      <div>nodata</div>
    @endforelse

    </div>
    {{ $posts->links('pagination::bootstrap-4') }}
</div>


@endsection
