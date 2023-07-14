@extends('doctor.layout.app')

@section('heading', 'Edit Doctor Profile')

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('doctor_profile_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    @if (Auth::guard('doctor')->user()->photo == null)
                                        <img src="{{ asset('uploads/default.png') }}"
                                            alt="" class="profile-photo w_100_p">
                                    @else
                                        <img src="{{ asset('uploads/' . Auth::guard('doctor')->user()->photo) }}"
                                            alt="" class="profile-photo w_100_p">
                                    @endif

                                    <input type="file" class="form-control mt_10" name="photo">
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Name *</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ Auth::guard('doctor')->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Email *</label>
                                                <input type="text" class="form-control" name="email"
                                                    value="{{ Auth::guard('doctor')->user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                
                                

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Specialization </label>
                                                <input type="text" class="form-control" name="specialization"
                                                    value="{{ Auth::guard('doctor')->user()->specialization }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Graduation Year </label>
                                                <input type="text" class="form-control" name="graduation_year"
                                                    value="{{ Auth::guard('doctor')->user()->graduation_year }}">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">University </label>
                                                <input type="text" class="form-control" name="university"
                                                    value="{{ Auth::guard('doctor')->user()->university }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Phone </label>
                                                <input type="text" class="form-control" name="phone"
                                                    value="{{ Auth::guard('doctor')->user()->phone }}">
                                            </div>
                                        </div>
                                    </div>
  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">City </label>
                                                <input type="text" class="form-control" name="city"
                                                    value="{{ Auth::guard('doctor')->user()->city }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Country </label>
                                                <input type="text" class="form-control" name="country"
                                                    value="{{ Auth::guard('doctor')->user()->country }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">State </label>
                                                <input type="text" class="form-control" name="state"
                                                    value="{{ Auth::guard('doctor')->user()->state }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Zip Code </label>
                                                <input type="text" class="form-control" name="zip_code"
                                                    value="{{ Auth::guard('doctor')->user()->zip_code }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Retype Password</label>
                                                <input type="password" class="form-control" name="retype_password">
                                            </div>
                                        </div>
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
