<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row pt-4 bg-dark">
        <div class="col-6 card offset-3">
          <div class="card-body">
             <form method="post" action="{{ route('store.contact') }}">
              @csrf

            
             <div class="form-floating mb-3 ">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInputValue"  placeholder="Name" name="name" value="{{ old('name')}}">
                  <label for="floatingInputValue">Name</label>
                  @error('name')
    <div class="text-danger">{{ $message }}</div>
@enderror



              </div>

             <div class="form-floating mb-3 pt-4">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="email" name="email" value="{{ old('email')}}">
                  <label for="floatingInput">Email address</label>
                  @error('email')
                  <div class="text-danger">{{ $message }}</div>
              @enderror

              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" value="{{ old('password')}}">
                  <label for="floatingPassword">Password</label>
                  @error('password')
    <div class="text-danger">{{ $message }}</div>
@enderror



              </div>
              <div class="form-floating pt-4">
               <button class="btn btn-info">submit</button>
                
              </div>
           </form>
          </div>
          
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>