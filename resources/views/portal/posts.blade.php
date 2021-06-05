@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('portal.portal-header')
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-header">{{ __('Njoftimet e mia') }}
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target=".bd-example-modal-lg">Shto Ndihme</button>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kover</th>
                                <th scope="col">Titulli</th>
                                <th scope="col">Pershkrimi</th>
                                <th scope="col">Skadenca</th>
                                <th scope="col">Veprime</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td></td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->expire_at }}</td>
                                <td><button class="btn btn-success"><i class="fas fa-eye"></i></button> <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button> <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger" onclick="return confirm('Jeni i sigurte qe do e fshini kete post?');"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            @empty
                            <tr>
                                <th scope="row" colspan="5">Nuk u gjenden te dhena!</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Shto ndihme te re!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('posts.store') }}" method="POST">@csrf
            <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Titulli</label>
                        <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Titulli</label>
                        <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pershkrimi</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Skadenca</label>
                        <input type="date" name="expire_at" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Zgjidh Foton e Koverit</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                        <label for="formFileMultiple" class="form-label">Zgjidhni Fotot</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple="">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="dialog">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
