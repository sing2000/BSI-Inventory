@extends('layouts.header')

@section('content')
<h2 class="pt-4 header-title"><b>INVENTORY MANAGEMENT SYSTEM<b></h2>
    <div class="pt-4 container container-login">
        <div class="left-side">
            <div class="header">
                <div> <img  class="company-logo" src="images/official_logo.png" alt="Company Logo"></div>
                <h3><b>HOMETOWN CAFÉ</b></h3>
                <p class="address">Address: Banteay meanchey</p>
            </div>
        </div>
        <div class="right-side">
            <div class="login-form over-sty">
                <h4>User Information</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="U_name" type="U_name" class="form-control @error('U_name') is-invalid @enderror" name="U_name" value="{{ old('U_name') }}" required placeholder="U_name" autocomplete="U_name" autofocus>

                        @error('U_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="password" autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                </form>
            </div>
        </div>
    </div>
@endsection