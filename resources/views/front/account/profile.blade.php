@extends('front.layouts.app')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <form action="{{ route('account.update') }}" method="POST" name="userForm" id="userForm">
                        @csrf
                        @method('PUT')
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Account Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
            @include('front.account.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body  p-4">
                        <h3 class="fs-4 mb-1">My Profile</h3>
                        <div class="mb-4">
                            <label for="" class="mb-2">Name*</label>
                            <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="{{ $user->name }}">
                            <p id="nameError" class="text-danger"></p> <!-- Error span for name -->
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Email*</label>
                            <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control" value="{{ $user->email }}">
                            <p id="emailError" class="text-danger"></p> <!-- Error span for email -->
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Designation*</label>
                            <input type="text" name="designation" id="designation" placeholder="Designation" class="form-control" value="{{ $user->designation }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Mobile*</label>
                            <input type="text" name="mobile" id="mobile" placeholder="Mobile" class="form-control" value="{{ $user->mobile }}">
                        </div>
                        
                    </div>
                    <div class="card-footer  p-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>

                <div class="card border-0 shadow mb-4">
                    <form action="{{ route('account.password.update') }}" method="POST">
                        @csrf
                        <div class="card-body p-4">
                            <h3 class="fs-4 mb-1">Change Password</h3>
                            <div class="mb-4">
                                <label for="" class="mb-2">Old Password*</label>
                                <input type="password" name="old_password" placeholder="Old Password" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">New Password*</label>
                                <input type="password" name="new_password" placeholder="New Password" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Confirm Password*</label>
                                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
                            </div>                        
                        </div>
                        <div class="card-footer  p-4">
                            <button type="submit" class="btn btn-primary">Update</button>
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