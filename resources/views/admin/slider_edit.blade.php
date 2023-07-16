@extends('Admin.layout.app')

@section('heading', 'Edit Slider')

@section('button')
    <a href="{{ route('admin_slider_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Slider view</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_slider_update', $slider_single->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Existing Photo </label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $slider_single->photo) }}" alt="" class="w_200">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Change Photo </label>
                                        <input type="file" class="form-control mt_10" name="photo">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Heading</label>
                                        <input type="text" class="form-control" name="heading"
                                            value="{{ $slider_single->heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">text</label>
                                        <textarea name="text" class="form-control snote" cols="30" rows="10">{{ $slider_single->text }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Button Text</label>
                                        <input type="text" class="form-control" name="button_text"
                                            value="{{ $slider_single->button_text }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Button Url</label>
                                        <input type="text" class="form-control" name="button_url"
                                            value="{{ $slider_single->button_url }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection