@extends('layouts.header')

@section('content')
<div class="container container-register">
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Shop Information Section -->
            <div class="col-md-6 form-section" >
                <h4><strong> INFORMATION SECTION:</strong></h4>
                <div class="form-group">
                    <label for="s_name">Name:</label>
                    <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Name of your shop" required>
                </div>
                <div class="form-group">
                    <label for="s_address">Address:</label>
                    <input type="text" class="form-control" id="s_address" name="s_address" placeholder="Shop address" required>
                </div>
                <div class="form-group">
                    <label for="s_logo">Logo:</label>
                    <div>
                        <button class="select-logo" onclick="document.getElementById('s_logo').click()">Browse</button>
                        <input type='file' id="s_logo" name="s_logo" style="display:none">
                    </div>
                </div>
                  <!-- owner Information Section -->
                  <div class="pt-4">
                    <h4><strong> INFORMATION SECTION:</strong></h4>
                    <div class="form-group">
                        <label for="o_name">Name:</label>
                        <input type="text" class="form-control" id="o_name" name="o_name" placeholder="Owner's name" required>
                    </div>
                    <div class="form-group">
                        <label for="o_email">Email:</label>
                        <input type="email" class="form-control" id="o_email" name="o_email" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <label for="o_contact">Phone:</label>
                        <input type="text" class="form-control" id="o_contact" name="o_contact" placeholder="Owner's contact number" required>
                    </div>
                    <div class="form-group">
                        <label for="o_address">Address:</label>
                        <input type="text" class="form-control" id="o_address" name="o_address" placeholder="Owner's address" required>
                    </div>
                </div>
            </div>
            <!-- User Section -->
            <div class="col-md-6 form-section">
                <h4><strong>USER SECTION:</strong></h4>
                <div class="form-group">
                    <label for="user_name">Name:</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Owner's name" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="user_email">Email:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="user_phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="09283774" required>
                </div>
                <div class="form-group">
                    <label for="system_name">System Name:</label>
                    <input type="text" class="form-control" id="system_name" name="system_name" placeholder="System Name" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="*********" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm Password:</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="system_role">System Role:</label>
                    <input type="text" class="form-control" id="system_role" name="system_role" placeholder="ADMIN" required>
                </div>
                <div class="submit-button pt-4">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
<style>
.form-group {
    display: flex;
    align-items: center; 
    margin-bottom: 15px; 
}
label {
    min-width: 100px;
    margin-right: 15px; 
}
.select-logo{
    display: block;
    width: 120px;
    height: 30px;
    border-radius: 5px;
    background-clip: padding-box;
    border: 0.25px solid #ced4da;
    background-color: #fff;
}
</style>
