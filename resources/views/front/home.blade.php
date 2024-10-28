@extends('front.layouts.app')
@section('main')
<section class="text-center py-16">
    <h3 class="text-blue-500 text-sm uppercase tracking-wide mb-2">#1 Job Portal</h3>
    <h1 class="text-4xl md:text-5xl font-bold mb-4">
      Build your very own job portal with <span class="text-blue-600">Jobtale</span>
    </h1>
    <p class="text-gray-600 mb-8">
      Discover your next career move with confidence and ease.
    </p>

    <!-- Search Bar -->
    <div class="max-w-xl mx-auto flex items-center justify-center mb-6 space-x-4">
      <input type="text" placeholder="Search job" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      <input type="text" placeholder="Location" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Search</button>
    </div>

    <!-- Reviews Section -->
    <div class="flex items-center justify-center mb-12 space-x-4">
      <div class="flex items-center space-x-2">
        <img class="h-8 w-8 rounded-full" src="https://xsgames.co/randomusers/assets/avatars/male/46.jpg" alt="User Image">
        <img class="h-8 w-8 rounded-full" src="data:image/jpeg;base64,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" alt="User Image">
        <img class="h-8 w-8 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6viDn9fezJJzWefONMNyvIXmolTugrI5n6w2gD9qxb35P8OZKKoFeE_-SPPnrFgA6X7k&usqp=CAU" alt="User Image">
        <img class="h-8 w-8 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6viDn9fezJJzWefONMNyvIXmolTugrI5n6w2gD9qxb35P8OZKKoFeE_-SPPnrFgA6X7k&usqp=CAU" alt="User Image">
      </div>
      <div class="text-gray-500 text-lg font-medium">
        <span class="text-yellow-500">★ 4.9</span> Over 100+ reviews
      </div>
    </div>

    <!-- Illustration Area (Use SVGs or placeholder images) -->
    <div class="flex flex-col items-center space-y-4">
      <img class="w-full max-w-4xl" src="https://images.unsplash.com/photo-1653669485599-e7eb1fcd143f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Illustration">
    </div>
  </section>

  <!-- Trusted by Companies Section -->
<!-- Trusted by Companies Section -->
<section class="bg-blue-600 py-8">
    <div class="text-center text-white mb-4">
      <h3 class="text-lg font-semibold">Trusted by 100+ world's best companies</h3>
    </div>
    <div class="flex items-center justify-center space-x-8 p-2">
      <!-- Company Logo 1 -->
      <div class="bg-white p-2 rounded-lg">
        <img class="h-20 w-20 object-contain" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png" alt="Google Logo">
      </div>
      <!-- Company Logo 2 -->
      <div class="bg-white p-2 rounded-lg">
        <img class="h-20 w-20 object-contain" src="https://static.vecteezy.com/system/resources/thumbnails/027/127/592/small/microsoft-logo-microsoft-icon-transparent-free-png.png" alt="Microsoft Logo">
      </div>
      <!-- Company Logo 3 -->
      <div class="bg-white p-2 rounded-lg">
        <img class="h-20 w-20 object-contain" src="https://static.vecteezy.com/system/resources/previews/019/766/240/non_2x/amazon-logo-amazon-icon-transparent-free-png.png" alt="Company Logo 3">
      </div>
      <!-- Company Logo 4 -->
      <div class="bg-white p-2 rounded-lg">
        <img class="h-20 w-20 object-contain" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6ZFSATimXj03ykvR7pPYjbdwEPOaGNaZ1iw&s" alt="Company Logo 4">
      </div>
      <div class="bg-white p-2 rounded-lg">
        <img class="h-20 w-20 object-contain" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdUIhQCTegyuo6ZuTmrG8m2Qt73AXaVN9z2w&s" alt="Company Logo 4">
      </div>
      <div class="bg-white p-2 rounded-lg">
        <img class="h-20 w-20 object-contain" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Reliance_Jio_Logo.svg/1024px-Reliance_Jio_Logo.svg.png" alt="Company Logo 4">
      </div>
      <!-- Company Logo 5 -->
      <div class="bg-white p-2 rounded-lg">
        <img class="h-20 w-20 object-contain" src="https://blog.logomaster.ai/hs-fs/hubfs/ibm-logo-2.jpg?width=672&height=448&name=ibm-logo-2.jpg" alt="Company Logo 5">
      </div>
    </div>
  </section>
  

<section class="section-2 bg-2 py-5">
    <div class="container">
        <h2>Popular Categories</h2>
        <div class="row pt-5">
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Design &amp; Creative</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Finance</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Banking</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Data Science</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Marketing</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Digital Marketing</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Digital Marketing</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="jobs.html"><h4 class="pb-2">Digital Marketing</h4></a>
                    <p class="mb-0"> <span>50</span> Available position</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- //Fetured Jobs --}}
<div class="max-w-6xl mx-auto py-12 px-4">
    <!-- Section Title -->
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-8">Latest job opportunities</h1>

    <!-- Job Cards Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center space-x-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsqlQZDqRCw728N38gbjWxhwXJJ8p0OPSomw&s" alt="Huawei Logo" class="w-10 h-10 rounded-full">
            <div>
              <p class="text-sm text-gray-500">Company</p>
              <h3 class="text-lg font-semibold text-gray-800">Huawei Technology</h3>
            </div>
          </div>
          <a href="#" class="text-blue-500 hover:text-blue-600">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M14 2h8v8h-2V5.414l-9.293 9.293-1.414-1.414L18.586 4H14V2z"></path>
              <path d="M5 6a1 1 0 00-1 1v11a1 1 0 001 1h11a1 1 0 001-1v-4h2v4a3 3 0 01-3 3H5a3 3 0 01-3-3V7a3 3 0 013-3h4v2H5z"></path>
            </svg>
          </a>
        </div>
        <p class="text-gray-500 mb-4">Jobs available</p>
        <p class="text-xl font-semibold text-gray-800 mb-4">25 Job opportunities</p>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Tech Startups</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Innovators</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">+3</span>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center space-x-3">
            <img src="https://cdn0.iconfinder.com/data/icons/most-usable-logos/120/Amazon-512.png" alt="Amazon Logo" class="w-10 h-10 rounded-full">
            <div>
              <p class="text-sm text-gray-500">Company</p>
              <h3 class="text-lg font-semibold text-gray-800">Amazon</h3>
            </div>
          </div>
          <a href="#" class="text-blue-500 hover:text-blue-600">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M14 2h8v8h-2V5.414l-9.293 9.293-1.414-1.414L18.586 4H14V2z"></path>
              <path d="M5 6a1 1 0 00-1 1v11a1 1 0 001 1h11a1 1 0 001-1v-4h2v4a3 3 0 01-3 3H5a3 3 0 01-3-3V7a3 3 0 013-3h4v2H5z"></path>
            </svg>
          </a>
        </div>
        <p class="text-gray-500 mb-4">Jobs available</p>
        <p class="text-xl font-semibold text-gray-800 mb-4">30 Job opportunities</p>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Tech Startups</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Ecommerce</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">+4</span>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center space-x-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREFG_shbxV7ib4ezJAaos2DcQ95T6j_AC8ng&s" alt="Stripe Logo" class="w-10 h-10 rounded-full">
            <div>
              <p class="text-sm text-gray-500">Company</p>
              <h3 class="text-lg font-semibold text-gray-800">Stripe Finance</h3>
            </div>
          </div>
          <a href="#" class="text-blue-500 hover:text-blue-600">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M14 2h8v8h-2V5.414l-9.293 9.293-1.414-1.414L18.586 4H14V2z"></path>
              <path d="M5 6a1 1 0 00-1 1v11a1 1 0 001 1h11a1 1 0 001-1v-4h2v4a3 3 0 01-3 3H5a3 3 0 01-3-3V7a3 3 0 013-3h4v2H5z"></path>
            </svg>
          </a>
        </div>
        <p class="text-gray-500 mb-4">Jobs available</p>
        <p class="text-xl font-semibold text-gray-800 mb-4">30 Job opportunities</p>
        <div class="flex flex-wrap gap-2">
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Tech Startups</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Finance</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Innovators</span>
          <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">+2</span>
        </div>
      </div>
    </div>

    <!-- More Opportunities Button -->
    <div class="text-center mt-8">
      <a href="#" class="px-6 py-3 text-blue-400 border border-blue-500 text-lg rounded hover:bg-blue-700 hover:text-white">
        More Opportunities
      </a>
    </div>
  </div>

    <!-- Testimonials Section -->
    <div class="max-w-5xl mx-auto py-12 px-4">
        <!-- Section Title -->
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-8">Job picks for you</h1>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
          <!-- Featured Card -->
          <div class="bg-white rounded-lg shadow p-6 relative border border-blue-500 flex flex-col h-full min-h-[400px]"> <!-- Added min-h-[400px] -->
            <div class="flex items-start space-x-4 mb-4">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Xiaomi_logo_%282021-%29.svg/2048px-Xiaomi_logo_%282021-%29.svg.png" alt="Xiaomi Logo" class="w-12 h-12 rounded-full">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Mobile App Developer</h3>
                <p class="text-gray-500">Xiaomi</p>
              </div>
              <button class="ml-auto text-gray-400 hover:text-gray-600">
                <i class="fa-regular fa-bookmark w-5 h-5 p-2"></i> 
              </button>
            </div>
            <div class="text-gray-500 space-y-2 mb-4">
              <p><span class="inline-block mr-2"><i class="fa-solid fa-building p-1"></i> Xiaomi</span> <span><i class="fa-solid fa-location-dot p-1"></i> Beijing</span></p>
              <p><i class="fa-solid fa-indian-rupee-sign p-1 border rounded-full bg-gray-300"></i> 15-20k</p>
            </div>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Fortune 500</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Innovation Hub</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Global Presence</span>
            </div>  
            <p class="text-sm text-gray-500">4 Days Ago</p>
            
            <!-- Job Details button aligned to the bottom -->
            <a href="#" class="block w-full text-center bg-blue-500 text-white text-sm font-semibold rounded py-2 hover:bg-blue-600 mt-auto">Job Details</a>
          </div>
    
          <!-- Similar structure for other cards -->
          <!-- Card 2 -->
          <div class="bg-white rounded-lg shadow p-6 flex flex-col h-full min-h-[400px]">
            <div class="flex items-start space-x-4 mb-4">
              <img src="samsung-logo.png" alt="Samsung Logo" class="w-12 h-12 rounded-full">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Hardware Design Engineer</h3>
                <p class="text-gray-500">Samsung</p>
              </div>
              <button class="ml-auto text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M19 21H5a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM13 11h-2V3h2v8z"></path>
                </svg>
              </button>
            </div>
            <div class="text-gray-500 space-y-2 mb-4">
                <p><span class="inline-block mr-2"><i class="fa-solid fa-building p-1"></i> Xiaomi</span> <span><i class="fa-solid fa-location-dot p-1"></i> Beijing</span></p>
                <p><i class="fa-solid fa-indian-rupee-sign p-1 border rounded-full bg-gray-300"></i> 15-20k</p>
              </div>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Global Tech Leader</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Hardware Innovation</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Global Presence</span>
            </div>
            <p class="text-sm text-gray-500 mb-4">1 Week Ago</p>
            <a href="#" class="block w-full text-center bg-blue-500 text-white text-sm font-semibold rounded py-2 hover:bg-blue-600 mt-auto">Job Details</a>
          </div>
          <div class="bg-white rounded-lg shadow p-6 flex flex-col h-full min-h-[400px]">
            <div class="flex items-start space-x-4 mb-4">
              <img src="samsung-logo.png" alt="Samsung Logo" class="w-12 h-12 rounded-full">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Hardware Design Engineer</h3>
                <p class="text-gray-500">Samsung</p>
              </div>
              <button class="ml-auto text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M19 21H5a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM13 11h-2V3h2v8z"></path>
                </svg>
              </button>
            </div>
            <div class="text-gray-500 space-y-2 mb-4">
              <p><span class="inline-block mr-2">📍 Samsung</span> <span>📍 Seoul</span></p>
            </div>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Global Tech Leader</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Hardware Innovation</span>
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Global Presence</span>
            </div>
            <p class="text-sm text-gray-500 mb-4">1 Week Ago</p>
            <a href="#" class="block w-full text-center bg-blue-500 text-white text-sm font-semibold rounded py-2 hover:bg-blue-600 mt-auto">Job Details</a>
          </div>
        </div>
    
        <!-- More Opportunities Button -->
        <div class="text-center mt-8">
            <a href="#" class="px-6 py-3 text-blue-400 border border-blue-500 text-lg rounded hover:bg-blue-700 hover:text-white mt-20\">
              More Opportunities
            </a>
        </div>
      </div>
@endsection