@include('admin.includes.head')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
       <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
             <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                   <h3 class="card-title text-left mb-3">Admin Registration</h3>
                   <form action="{{url ('admin.register')}}" method="POST">
                    @csrf
                      <div class="form-group">
                         <label>Username</label>
                         <input type="text" class="form-control p_input" name="name" placeholder="Username" autocomplete="off">
                         <span style="color: red">@error('name'){{ $message}}@enderror</span>
                      </div>
                      <div class="form-group">
                         <label>Email</label>
                         <input type="email" class="form-control p_input" name="email"  placeholder="Email id" autocomplete="off">
                         <span style="color: red">@error('email'){{ $message}}@enderror</span>
                      </div>
                      <div class="form-group">
                         <label>Password</label>
                         <input type="password" class="form-control p_input" name="password"  placeholder="Password" autocomplete="off">
                         <span style="color: red">@error('password'){{ $message}}@enderror</span>
                      </div>
                      <div class="form-group">
                         <label>Retype Password</label>
                         <input type="password" class="form-control p_input" name="cpassword" placeholder="Retype Password" autocomplete="off">
                         <span style="color: red">@error('cpassword'){{ $message}}@enderror</span>
                      </div>
                      <div class="text-center">
                         <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                      </div>
                      <!-- Register via social link -->
                        <div class="d-flex">
                         <button class="btn btn-facebook col mr-2">
                             <i class="mdi mdi-facebook"></i> Facebook </button>
                         <button class="btn btn-google col">
                             <i class="mdi mdi-google-plus"></i> Google plus </button>
                        </div>
                      <p class="sign-up text-center">Already have an Account?<a href="{{url ('admin.login')}}">Log In</a></p>
                   </form>
                </div>
             </div>
          </div>

       </div>

    </div>
</div>
@include('admin.includes.js')
