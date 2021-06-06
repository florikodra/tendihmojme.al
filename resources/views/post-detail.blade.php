@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-lg-8 col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/background.jpg" height="400" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/banner.jpg" height="400" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
                </div>

                <div class="card-footer @if (isset($_GET['request'])) bg-primary text-white  @endif" id="reserve">
                    <form action="{{ route('request.store') }}" method="POST">@csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group">
                            <label for="">Mesazhi</label>
                            <textarea class="form-control" name="description" rows=4></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn  @if (isset($_GET['request'])) btn-light @else btn-dark  @endif btn-block"><i class="fas fa-handshake"></i> Rezervo Tani</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-4">

            @forelse ($latestPosts as $post)
            <div class="col-sm-4">
            <div class="card">
                <img class="card-img-top" src="/img/help.jpg" alt="Card image cap">
                <div class="card-body">
                <p>Nga: {{ $post->user->first_name }} {{ $post->user->last_name }}</p>
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->description }}</p>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-between">

                        <a href="{{route("posts.show", $post->id)}}" class="btn btn-primary col-sm-4"><i class="fas fa-eye"></i></a>
                        <a href="{{route("posts.show", $post->id)}}/?request=true#reserve" class="btn btn-success col-sm-4"><i class="fas fa-check"></i></a>
                    </div>


                </div>
              </div>
            </div>
            @empty
              <div>nodata</div>
            @endforelse
        </div>

        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/img/avatar.png" alt="Card image cap" width="50%">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->user->first_name }} {{ $post->user->last_name }}</h5>
                    <p class="card-text">Address:</p>
                    <a href="tel: {{ $post->user->mobile }}" class="btn btn-primary btn-block"><i class="fas fa-mobile mr-3"></i> {{ $post->user->mobile }}</a>

                </div>
                <div class="card-footer">
                    <form action="">
                        <div class="form-group">
                            <label for="">Celulari:</label>
                            <input type="number" class="form-control" name="subject" >
                        </div>
                        <div class="form-group">
                            <label for="">Mesazhi</label>
                            <textarea class="form-control" name="subject" rows=4></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-paper-plane"></i> Dergo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
