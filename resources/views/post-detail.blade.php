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
