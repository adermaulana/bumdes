<html>
  <head>
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    @media (max-width: 992px) { 

    img {
            display: flex;
            justify-content: center;
            align-items: center;
    }


    }
  </style>

  </head>
  <body>
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main  class="form-signin">
      <img class="mt-5 mb-2" src="/images/nepo.jpg" alt="" width="100" style="margin-left:127px;">
      <h1 class="h4 mb-3 fw-normal text-center">Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating mt-4">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
    
        <button style="background-color:#588157;" class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
  </div>
</div>
</div>
  </body>
</html>


<style>
  @media (max-width: 768px) { 
    .container {
      margin-top:100px;
      margin-bottom:70px;
    }
   }
</style>

