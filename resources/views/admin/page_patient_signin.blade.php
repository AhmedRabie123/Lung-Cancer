@extends('Admin.layout.app')

@section('heading', 'Edit Sign In Patient Page')

@section('button')
    <a href="{{ route('admin_patient_signin') }}" class="btn btn-primary"><i class="fa fa-eye"></i> Patient Sign In view</a>
@endsection

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_patient_signin_submit') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Patient Sign In Heading *</label>
                                        <input type="text" class="form-control mt_10" name="signin_patient_heading"
                                            value="{{ $page_data->signin_patient_heading }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Patient Sign In Status</label>
                                        <select name="signin_patient_status" class="form-control">
                                            <option value="1" @if ($page_data->signin_patient_status == 1) Selected @endif>Show
                                            </option>
                                            <option value="0" @if ($page_data->signin_patient_status == 0) Selected @endif>Hide
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
