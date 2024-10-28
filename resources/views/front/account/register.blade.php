@extends('front.layouts.app')
@section('main')
<div class="flex items-center justify-center min-h-screen mt-10">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl  mb-4 text-center">
            Sign Up to <span class="font-bold text-blue-500">Sk.Jobs.com</span>
        </h1>
    
        
        <form id="registrationForm">
            @csrf
            <div class="mb-3">
                <label class="block text-sm font-medium" for="name">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Name">
                <small id="nameError" class="text-red-500 text-sm"></small> <!-- Error placeholder -->
            </div>
            
            <div class="mb-3">
                <label class="block text-sm font-medium" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email">
                <small id="emailError" class="text-red-500 text-sm"></small> <!-- Error placeholder -->
            </div>
            
            <div class="mb-3">
                <label class="block text-sm font-medium" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password">
                <small id="passwordError" class="text-red-500 text-sm"></small> <!-- Error placeholder -->
            </div>
            
            <div class="mb-3">
                <label class="block text-sm font-medium" for="Cpassword">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm Password">
                <small id="cPasswordError" class="text-red-500 text-sm"></small> 
            </div>
            
            <div class="flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-500">
                    <span class="ml-2 text-sm">Remember me</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
            </div>
            
            <button class="mt-2 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Sign Up</button>
        </form>
        
        <div class="my-2 text-center text-gray-500">Or Register with</div>
        <div class="flex gap-3 items-center justify-center">
            <button class="border py-2 px-3 rounded-full border-black">
                <i class="fa-brands fa-google text-xl"></i>
            </button>
            <button class="border py-2 px-3 rounded-full border-black">
                <i class="fa-brands fa-apple text-2xl"></i>
            </button>
        </div>
        
        <div class="mt-2 text-center">
            <p class="text-gray-500 text-sm">Don't have an account? <a href="{{ route('account.login') }}" class="text-blue-500 hover:underline">Sign in</a></p>
        </div>
    </div>
</div>
@endsection

@section('customJs')
<script>
$(document).ready(function() {
    $("#registrationForm").submit(function(e) {
        e.preventDefault();
        $(".text-danger").text(''); // Clear previous errors
        
        $.ajax({
            url: "{{ route('account.processregister') }}",
            type: "POST",
            data: $("#registrationForm").serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status === false) {
                    var errors = response.errors;
                    
                    if (errors.name) {
                        $("#nameError").text(errors.name[0]);
                    }
                    if (errors.email) {
                        $("#emailError").text(errors.email[0]);
                    }
                    if (errors.password) {
                        $("#passwordError").text(errors.password[0]);
                    }
                    if (errors.Cpassword) {
                        $("#cPasswordError").text(errors.Cpassword[0]);
                    }
                } else {
                    window.location.href = "{{ route('account.login') }}";
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                alert("Something went wrong. Please try again later.");
            }
        });
    });
});
</script>
@endsection

