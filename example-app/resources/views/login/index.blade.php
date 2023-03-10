@extends ('layouts.main')

@section ('container')

<div class="row justify-content-center align-items-center">
    <div class="col-lg-4">

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <form class="shadow p-3 mb-5 bg-white rounded" method="post" action="/login">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <small class="d-block text-center mt-2">Not Registered? <a href="/register">Register Now!</a></small>
            </form>
            <p class="mt-5 mb-3 text-muted text-center">raftech&copy; 2022–2023</p>

        </main>
    </div>
</div>


@endsection