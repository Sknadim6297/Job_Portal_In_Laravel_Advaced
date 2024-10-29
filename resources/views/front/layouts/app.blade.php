<!DOCTYPE html>
<html class="no-js" lang="en_AU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CareerVibe | Find Best Jobs</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    @vite('resources/css/app.css')
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">

	<header>
		<nav class="fixed top-0 left-0 right-0 flex items-center justify-between py-3 px-8 shadow-md bg-white z-50">
			<!-- Logo -->
			<div class="flex items-center space-x-2">
				<img src="https://s3-alpha.figma.com/hub/file/1913095808/a7bdc469-cd70-4ea1-bb57-b59204ad8182-cover.png" alt="Jobtale Logo" class="w-10 h-10">
				<span class="text-2xl font-bold text-blue-800">Sk.Jobs.com</span>
			</div>
		
			<!-- Navigation Links -->
			<ul class="flex space-x-6 text-gray-700">
				<li class="relative group">
					<button class="focus:outline-none hover:text-blue-800">Features</button>
					<div class="absolute hidden group-hover:block mt-2 w-32 bg-white shadow-md rounded">
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Feature 1</a>
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Feature 2</a>
					</div>
				</li>
				<li><a href="#" class="hover:text-blue-800">Pricing</a></li>
				<li><a href="#" class="hover:text-blue-800">About Us</a></li>
				<li><a href="#" class="hover:text-blue-800">Blog</a></li>
			</ul>
	
			<!-- Check if User is Authenticated -->
			@if(Auth::check())
			<div class="flex items-center space-x-3">
				@if(Auth::user()->image)
					<img src="{{ asset('profile_pic/'.Auth::user()->image) }}" alt="{{ Auth::user()->name }}" class="w-10 h-10 rounded-full">
				@else
					<img src="https://via.placeholder.com/40" alt="{{ Auth::user()->name }}" class="w-10 h-10 rounded-full">
				@endif
				<span class="text-gray-700 text-sm"><a href="{{ route('account.profile') }}">{{ Auth::user()->name }}</a></span>
				<i class="fa-solid fa-chevron-down"></i>
			</div>
			@else
			<div class="flex items-center space-x-4">
				<a href="{{ route('account.login') }}" class="text-blue-800 hover:text-blue-900">Login</a>
				<a href="{{ route('account.register') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Sign Up</a>
			</div>
			@endif
		</nav>
	</header>
	

<!-- Main Content -->
@yield('main')

<!-- Modal for Changing Profile Picture -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="profilePicForm" id="profilePicForm" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="profileImage" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <p id="imageError" class="text-danger"></p> <!-- Error span for image -->
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mx-3">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="bg-white py-10">
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-8 items-center justify-center ml-20">
            <!-- Logo Section -->
            <div class="space-y-4">
                <img src="https://s3-alpha.figma.com/hub/file/1913095808/a7bdc469-cd70-4ea1-bb57-b59204ad8182-cover.png" alt="Jobtale Logo" class="w-10 h-10">
                <span class="text-lg font-bold text-blue-800">Sk.Job.com</span>
            </div>

            <!-- For Job Seekers -->
            <div class="space-y-4">
                <h4 class="font-bold text-gray-900">For Job Seekers</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Jobs</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Postdoc Section</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Companies</a></li>
                </ul>
            </div>

            <!-- For Employers -->
            <div class="space-y-4">
                <h4 class="font-bold text-gray-900">For Employers</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Events</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Recruitment</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Talent Pool</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="space-y-4">
                <h4 class="font-bold text-gray-900">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">About Us</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Join Us</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">News</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-blue-500">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t mt-8 pt-8 text-center">
            <!-- Bottom Links -->
            <div class="flex justify-center space-x-8 mb-4">
                <a href="#" class="text-gray-500 hover:text-blue-500">Account</a>
                <a href="#" class="text-gray-500 hover:text-blue-500">Mentoring</a>
                <a href="#" class="text-gray-500 hover:text-blue-500">Support</a>
            </div>

            <!-- Copyright and Social Links -->
            <div class="text-gray-500 space-y-2">
                <p>&copy; 2024 Sk.Job.com, all rights reserved</p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-gray-500 hover:text-blue-500">
						<i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-500">
						<i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-500">
						<i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" class="text-gray-500 hover:text-blue-500">User Agreement</a>
                    <a href="#" class="text-gray-500 hover:text-blue-500">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- JavaScript Assets -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.17.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
$("#profilePicForm").submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "{{ route('account.updateprofilepic') }}",
        type: 'POST',
        data: formData,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response) {
     if(response.status == true){
         window.location.href = "{{ route('account.profile') }}";

        }else{
            var errors = response.errors;
            if(errors.image){
                $('#imageError').html(errors.image);
            }
        }
    }
    });
});
</script>


<!-- Yield for Additional Custom Scripts -->
@yield('customJs')

</body>
</html>
