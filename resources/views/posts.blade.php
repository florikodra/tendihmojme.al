@extends('layouts.app')

@section('content')
 @foreach($posts->chunk(3) as $postChunk)
    <div class="row">
        @foreach($postChunk as $post)
        <div class="col-sm-6 cold-md-4">
            <div  class="thumbnail">
                <img src="" alt=""  class="img-responsive">
                <div class="caption">
                    <h3>{{$post->title}}</h3>
                    <div class="pershkrim">{{$post->description}}</div>
                    <div class="skadon">{{$post->expire_at}}</div>
                    <div class="clearfix">
                    <p><a href="#" class="btn btn-success pull-right" role="button">Merre</a> </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
 @endforeach
@endsection
