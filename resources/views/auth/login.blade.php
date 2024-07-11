@extends('layouts.header')
@vite('resources/css/app.css')
@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-background text-foreground">
    <div class="flex-grow mt-24">
        <div class="w-full max-w-3xl p-8 space-y-6 bg-card rounded-lg shadow-lg flex flex-col pb-6">
            <div class="flex justify-center mb-3">
                <h1 class="text-2xl font-bold">INVENTORY MANAGEMENT SYSTEM</h1>
            </div>
            <div class="flex flex-col sm:flex-row lg:items-center lg:justify-between">
                <div class="w-full flex flex-col items-center justify-center space-y-2 lg:w-1/2">
                    <img src="images/official_logo.png" alt="Company Logo" class="rounded-lg" style="max-width: 150px; height: auto;" />
                    <h2 class="text-lg font-semibold">HOMETOWN CAFÉ</h2>
                    <p class="text-muted-foreground">Address:</p>
                </div>
                <div class="w-full lg:w-1/2 sm:pl-4">
                    <div class="w-full border border-border p-2 rounded-lg">
                        <h3 class="text-center text-lg font-semibold pb-2">User Information</h3>
                        <form class="space-y-2" method="POST" action="{{ route('login') }}">
                            @csrf
                            <input placeholder="username" class="w-full p-2 border border-input rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="email" autocomplete="email" autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input placeholder="password" class="w-full p-2 border border-input rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="password" autocomplete="current-password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="w-full text-slate-50 py-2 rounded-lg hover:bg-primary-dark transition duration-300 ease-in-out bg-blue-600">LOG IN</button>
                        </form>
                    </div>
                    <div class="text-center text-muted-foreground mt-2">
                        <p>BSI Inventory System</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('layouts.footer')

</div>

@endsection