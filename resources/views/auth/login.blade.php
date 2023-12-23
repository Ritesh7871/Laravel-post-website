@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <div class="col-md-4"></div>
        <div class="container p-3 col-md-4 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
          <div class="text-danger">
          @if (session('status'))
              {{session('status')}}
          </div>
          @endif
            <form action="{{route('login')}}"method="post">
                @csrf
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
                    <input type="checkbox"name="remember"id="remember"class="mr-2">
                    <label for="remember">Remember me</label>
                  </div>
                  <div class="mb-3">
                    <button type="submit"class="form-control bg-primary">login</button>
                  </div>
            </form>
          </div>
          <div class="col-md-4"></div>

    </div>
@endsection