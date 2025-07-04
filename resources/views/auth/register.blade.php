@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white fs-4">
                    {{ __('Register Form') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Date of Birth --}}
                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">{{ __('Date of Birth') }}</label>
                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                   id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                            @error('date_of_birth')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Gender --}}
                        <div class="mb-3">
                            <label class="form-label d-block">{{ __('Gender') }}</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('gender') is-invalid @enderror"
                                       type="radio" name="gender" id="genderMale" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderMale">{{ __('Male') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('gender') is-invalid @enderror"
                                       type="radio" name="gender" id="genderFemale" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderFemale">{{ __('Female') }}</label>
                            </div>
                            @error('gender')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Phone Number --}}
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                                   id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required placeholder="e.g., 09123456789">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
                        </div>

                        {{-- City --}}
                        <div class="mb-3">
                            <label for="city" class="form-label">{{ __('City') }}</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror"
                                   id="city" name="city" value="{{ old('city') }}" required>
                            @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Address --}}
                        <div class="mb-3">
                            <label for="address" class="form-label">{{ __('Address') }}</label>
                            <textarea class="form-control @error('address') is-invalid @enderror"
                                      id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
        

                       {{-- Buttons --}}
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary btn-lg w-25">
                                {{ __('Register') }}
                            </button>
                            <a href="{{ url('/') }}" class="btn btn-secondary btn-lg w-25">
                                {{ __('Cancel') }}
                            </a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
