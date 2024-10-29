<div class="card border-0 shadow mb-4 p-3" style="background-color: #f0f8ff;">
    <div class="s-body text-center mt-3 flex flex-col items-center">
        @if(Auth::user()->image != '')
        <img src="{{ asset('profile_pic/'.Auth::user()->image) }}" 
             alt="avatar" 
             class="rounded-circle img-fluid shadow" 
             style="width: 150px; height: 150px; object-fit: cover;;">
    @else
        <img src="{{ asset('assets/assets/images/avatar7.png') }}" 
             alt="avatar" 
             class="rounded-circle img-fluid shadow" 
             style="width: 150px; height: 150px; object-fit: cover;">
    @endif
    
        <h5 class="mt-3 pb-0" style="color: #007bff;">{{ Auth::user()->name }}</h5>
        <p class="text-muted mb-1 fs-6">{{ Auth::user()->designation }}</p>
        <div class="d-flex justify-content-center mb-2">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="bg-blue-500 px-4 py-2 text-white shadow-sm" style="background-color: #007bff; border-radius: 30px;">Change Profile Picture</button>
        </div>
    </div>
</div>

<div class="card account-nav border-0 shadow mb-4 mb-lg-0" style="background-color: #e0f7ff;">
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between p-3" style="background-color: #e0f7ff; border-bottom: 1px solid #007bff;">
                <a href="account.html" class="text-primary" style="color: #007bff; text-decoration: none;">Account Settings</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="background-color: #e0f7ff; border-bottom: 1px solid #007bff;">
                <a href="post-job.html" class="text-primary" style="color: #007bff; text-decoration: none;">Post a Job</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="background-color: #e0f7ff; border-bottom: 1px solid #007bff;">
                <a href="my-jobs.html" class="text-primary" style="color: #007bff; text-decoration: none;">My Jobs</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="background-color: #e0f7ff; border-bottom: 1px solid #007bff;">
                <a href="job-applied.html" class="text-primary" style="color: #007bff; text-decoration: none;">Jobs Applied</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="background-color: #e0f7ff; border-bottom: 1px solid #007bff;">
                <a href="saved-jobs.html" class="text-primary" style="color: #007bff; text-decoration: none;">Saved Jobs</a>
            </li>             
            <li class="list-group-item d-flex justify-content-between align-items-center p-3" style="background-color: #e0f7ff; border-bottom: 1px solid #007bff;">
                <a href="{{ route('account.logout') }}" class="text-danger" style="color: #ff4d4d; text-decoration: none;">Logout</a>
            </li>                                                
        </ul>
    </div>
</div>
