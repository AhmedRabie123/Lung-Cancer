@extends('Admin.layout.app')

@section('heading', 'Edit Sign Up Patient Page')

@section('button')
    <a href="{{ route('admin_patient_signup') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Patient Sign Up view</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_patient_signup_update') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Patient Sign Up Heading *</label>
                                        <input type="text" class="form-control mt_10" name="signup_patient_heading"
                                            value="{{ $page_data->signup_patient_heading }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Patient Sign Up Status</label>
                                        <select name="signup_patient_status" class="form-control">
                                            <option value="1" @if ($page_data->signup_patient_status == 1) Selected @endif>Show
                                            </option>
                                            <option value="0" @if ($page_data->signup_patient_status == 0) Selected @endif>Hide
                                            </option>
                                        </select>
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
