@extends('front.layouts.app')
@section('main')
<div class="flex items-center justify-center min-h-screen mt-10">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
      @if(Session::has('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
      </div>
  @endif
  
  @if(Session::has('error'))
      <div class="alert alert-danger">
          {{ Session::get('error') }}
      </div>
  @endif
      <h1 class="text-2xl font-semibold mb-6 text-center">Sign in to <span class="font-bold text-blue-500">Sk.Jobs.com</span> </h1>
      <form action="{{ route('account.authenticate') }}" method="post">
        @csrf
        <div class="mb-4">
          <label class="block text-sm font-medium mb-1" for="email">Email</label>
          <input type="email" id="email" value="{{old('email')}}"  name="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email">
          
          @error('email')
          <p class="text-danger">{{ $message }}</p>
      @enderror

        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium mb-1" for="password">Password</label>
          <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password">
          
          @error('password')
          <p class="text-danger">{{ $message }}</p>
      @enderror

        </div>
        <div class="flex items-center justify-between mb-2">
          <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox text-blue-500">
            <span class="ml-2 text-sm">Remember me</span>
          </label>
          <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
        </div>
        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Sign in</button>
      </form>
      <div class="my-3 text-center text-gray-500">Or login with</div>
      <div class=" flex gap-3 items-center justify-center">
        <button class="border py-2 px-3 rounded-full border-black">
            <i class="fa-brands fa-google text-xl"></i>
        </button>
        <button class="border  py-2 px-3 rounded-full border-black">
            <i class="fa-brands fa-apple text-2xl"></i>
        </button>
      </div>
      <div class="mt-2 text-center">
        <p class="text-gray-500 text-sm">Don't have an account? <a href="{{route('account.register')}}" class="text-blue-500 hover:underline">Sign Up </a></p>
      </div>
    </div>
  </div>
@endsection
