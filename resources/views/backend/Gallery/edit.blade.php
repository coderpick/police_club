@extends('backend.master')
@section('content')
    <div class="container">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div>Gallery Information Here

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <form action="{{ route('admin.gallery.update',$gallery->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-2 col-md-8 ">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Gallery</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="gallary_name" class="col-sm-2 col-form-label"> Name</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="gallary_name" name="gallary_name"
                                        placeholder="news title here" value="{{ $gallery->gallary_name }}">
                                </div>
                            </div>

                       </div>
                    </div>

                    <div class="col-md-3">
                        <label>Status:</label>
                        <div class="check-list">
                            <label class="ui-radio ui-radio-success">
                                <input type="radio" {{ $gallery->status ==1 ?'checked' :'' }} name="status" value="1">
                                <span class="input-span"></span>Active</label>
                            <label class="ui-radio ui-radio-danger">
                                <input type="radio" {{ $gallery->status ==0 ?'checked' :'' }} name="status" value="0">
                                <span class="input-span"></span>Inactive</label>
                        </div>
                    </div>

                    <div class="col-sm-2 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Picture and Other impormation</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">

                                    <input type="file" name="gallery_image" placeholder="Choose image"
                                        id="gallery_image">
                                        <img src="{{ asset('uploads/Gallery/'.$gallery->gallery_image) }}"
                                        style="height: 50px;width:50px">

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="form-group text-center mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <br><br>
    <hr>
    <div>
        <div>
            <a href="{{ route('admin.general.index') }}">Index</a><br>
            <a href="{{ route('admin.general.store') }}">Store</a>
        </div>
    </div> --}}
@endsection
