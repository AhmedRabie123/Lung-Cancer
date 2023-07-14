@extends('patient.layout.app')

@section('heading', 'Edit Patient Profile')

@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('patient_profile_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    @if (Auth::guard('patient')->user()->photo == null)
                                        <img src="{{ asset('uploads/default.png') }}"
                                            alt="" class="profile-photo w_100_p">
                                    @else
                                        <img src="{{ asset('uploads/' . Auth::guard('patient')->user()->photo) }}"
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
                                                    value="{{ Auth::guard('patient')->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Email *</label>
                                                <input type="text" class="form-control" name="email"
                                                    value="{{ Auth::guard('patient')->user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">State </label>
                                                <input type="text" class="form-control" name="state"
                                                    value="{{ Auth::guard('patient')->user()->state }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Phone </label>
                                                <input type="text" class="form-control" name="phone"
                                                    value="{{ Auth::guard('patient')->user()->phone }}">
                                            </div>
                                        </div>
                                    </div>
  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">City </label>
                                                <input type="text" class="form-control" name="city"
                                                    value="{{ Auth::guard('patient')->user()->city }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Country </label>
                                                <input type="text" class="form-control" name="country"
                                                    value="{{ Auth::guard('patient')->user()->country }}">
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
