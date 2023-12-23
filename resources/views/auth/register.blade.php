@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="col-md-4"></div>
        <div class="container p-3 col-md-4 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
            <form action="{{route('register')}}"method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid  @enderror"name="name" id="name" placeholder="Enter your name"value="{{old('name')}}"/>
                    @error('name') 
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control  @error('username') is-invalid  @enderror"name="username" id="username" placeholder="Username"value="{{old('username')}}"/>
                    @error('username') 
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid  @enderror"name="email" id="email" placeholder="abc@gmail.com"value="{{old('email')}}"/>
                    @error('email') 
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control  @error('password') is-invalid  @enderror"name="password" id="password" placeholder="Choose a password"value="{{old('password')}}"/>
                    @error('password') 
                    <div class="text-danger mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control"name="password_confirmation" id="cpassword" placeholder="Repeat a password"/>
                  </div>
                  <div class="mb-3">
                    <button type="submit"class="form-control bg-primary">Register</button>
                  </div>
            </form>
          </div>
          <div class="col-md-4"></div>

    </div>
@endsection