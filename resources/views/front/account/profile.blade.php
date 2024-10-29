@extends('front.layouts.app')

@section('main')
<section class="section-5 bg-light-blue mt-10">
    <div class="container py-5">
        @if ($errors->any())
        <div class="alert alert-danger rounded-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-gradient-primary rounded-3 p-3 mb-4">
                    <form action="{{ route('account.update') }}" method="POST" name="userForm" id="userForm">
                        @csrf
                        @method('PUT')
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                            <li class="breadcrumb-item active text-white">Account Settings</li>
                        </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                @include('front.account.sidebar')
            </div>

            <div class="col-lg-9">
                <!-- Profile Card -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4 bg-white rounded">
                        <h3 class="fs-4 mb-1 text-primary">My Profile</h3>

                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="mb-2 text-dark">Name*</label>
                            <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control border-primary" value="{{ $user->name }}">
                            <p id="nameError" class="text-danger"></p> 
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="mb-2 text-dark">Email*</label>
                            <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control border-primary" value="{{ $user->email }}">
                            <p id="emailError" class="text-danger"></p> 
                        </div>

                        <!-- Designation -->
                        <div class="mb-4">
                            <label for="designation" class="mb-2 text-dark">Designation*</label>
                            <input type="text" name="designation" id="designation" placeholder="Designation" class="form-control border-primary" value="{{ $user->designation }}">
                        </div>

                        <!-- Mobile -->
                        <div class="mb-4">
                            <label for="mobile" class="mb-2 text-dark">Mobile*</label>
                            <input type="text" name="mobile" id="mobile" placeholder="Mobile" class="form-control border-primary" value="{{ $user->mobile }}">
                        </div>
                    </div>

                    <div class="card-footer bg-blue-100">
                        <button type="submit" class="btn btn-gradient-primary w-100">Update</button>
                    </div>
                </form>
                </div>

                <!-- Password Change Card -->
                <div class="card border-0 shadow-sm mb-4">
                    <form action="{{ route('account.password.update') }}" method="POST">
                        @csrf
                        <div class="card-body p-4 bg-white rounded">
                            <h3 class="fs-4 mb-1 text-primary">Change Password</h3>

                            <!-- Old Password -->
                            <div class="mb-4">
                                <label for="old_password" class="mb-2 text-dark">Old Password*</label>
                                <input type="password" name="old_password" placeholder="Old Password" class="form-control border-primary">
                            </div>

                            <!-- New Password -->
                            <div class="mb-4">
                                <label for="new_password" class="mb-2 text-dark">New Password*</label>
                                <input type="password" name="new_password" placeholder="New Password" class="form-control border-primary">
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="confirm_password" class="mb-2 text-dark">Confirm Password*</label>
                                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control border-primary">
                            </div>                        
                        </div>

                        <div class="card-footer bg-blue-100">
                            <button type="submit" class="btn btn-gradient-primary w-100">Update</button>
                        </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</section>
@endsection


@section('customJs')
<script type="text/javascript">
   $('#userForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url: "{{ route('account.update') }}",
        type: "POST", // Change this to POST
        data: $('#userForm').serialize(),
        success: function(response){
            if(response.status == true){
                window.location.href = "{{ route('account.profile') }}";
                
                // Clear form fields
                $('#name').val('');
                $('#email').val('');
                $('#designation').val('');
                $('#mobile').val('');
                
                alert('User updated successfully');
            } else {
                var errors = response.errors;
                if (errors.name) {
                    $("#nameError").text(errors.name[0]);
                }
                if (errors.email) {
                    $("#emailError").text(errors.email[0]);
                }
            }
        }
    });
});

</script>
@endsection
