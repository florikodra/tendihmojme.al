@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('portal.portal-header')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Njoftimet e mia') }}
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Shto Njoftim</button>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kover</th>
                            <th scope="col">Titulli</th>
                            <th scope="col">Pershkrimi</th>
                            <th scope="col">Veprime</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Otto</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Otto</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Shto njoftim te ri!</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="form-group">
                    <label for="formGroupExampleInput">Titulli</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Pershkrimi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" multiple>
                    <label class="custom-file-label" for="customFile">Choose Images</label>
                </div>
              </form>
            </div>
          </div>
    </div>
  </div>
@endsection
