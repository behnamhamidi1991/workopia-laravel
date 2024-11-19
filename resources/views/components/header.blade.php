<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-semibold">
        <a href="{{url('/')}}">Workopia</a>
      </h1>
      <nav class="hidden md:flex items-center space-x-4">

        <x-nav-link url="/" :active="request()->is('/')">
            Home
        </x-nav-link>

        <x-nav-link url="/jobs" :active="request()->is('jobs')">
            All Jobs
        </x-nav-link>

        <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')">
            Saved Jobs
        </x-nav-link>

        <x-nav-link url="/login" :active="request()->is('login')">
            Login
        </x-nav-link>

        <x-nav-link url="/register" :active="request()->is('jobs/saved')">
            Register
        </x-nav-link>

        <x-nav-link url="/dashboard" :active="request()->is('dashboard')">
            <i class="fa fa-gauge mr-1"></i> Dashboard
            
        </x-nav-link>
        <a
          href="{{url('/jobs/create')}}"
          class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"
        >
          <i class="fa fa-edit"></i> Create Job
        </a>
      </nav>
      <button id="hamburger" class="text-white md:hidden flex items-center">
        <i class="fa fa-bars text-2xl"></i>
      </button>
    </div>
    <!-- Mobile Menu -->
    <div
      id="mobile-menu"
      class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
    >
      <a href="jobs.html" class="block px-4 py-2 hover:bg-blue-700">All Jobs</a>
      <a href="saved-jobs.html" class="block px-4 py-2 hover:bg-blue-700"
        >Saved Jobs</a
      >
      <a href="dashboard.html" class="block px-4 py-2 hover:bg-blue-700"
        >Dashboard</a
      >
      <a href="login.html" class="block px-4 py-2 hover:bg-blue-700">Login</a>
      <a href="register.html" class="block px-4 py-2 hover:bg-blue-700"
        >Register</a
      >
      <a
        href="create-job.html"
        class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"
      >
        <i class="fa fa-edit"></i> Create Job
      </a>
    </div>
  </header>