@include('partial.registerheader')
<form class="vh-100 gradient-custom" action="/store" method="POST">
    @csrf
     
    @error('email')
    <b><p style="text-align:center; color:red"> Must fill up the fields</p></b>
    @enderror



            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>

              <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name"  name="name">
              </div>



              <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

              <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              </div>


              <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_confirmation">
              </div>

              

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-primary" type="submit">Register</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p style="color:black" class="mb-0">Already have an account? <a href="/login" class="text-black-50 fw-bold">Login</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>

