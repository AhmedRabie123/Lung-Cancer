@extends('Admin.layout.app')

@section('heading', 'Edit Heading Doctor Reset Password Page')

@section('button')
    <a href="{{ route('admin_doctor_reset_password') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Doctor Heading view</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_doctor_reset_password_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Short Heading *</label>
                                        <input type="text" class="form-control mt_10" name="doctor_reset_password_heading"
                                            value="{{ $page_data->doctor_reset_password_heading }}">
                                    </div>

                                    {{-- <div class="mb-4">
                                        <label class="form-label">Heading Status</label>
                                        <select name="heading_status" class="form-control">
                                            <option value="1" @if ($page_data->heading_status == 1) Selected @endif>Show
                                            </option>
                                            <option value="0" @if ($page_data->heading_status == 0) Selected @endif>Hide
                                            </option>
                                        </select>
                                    </div> --}}

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
