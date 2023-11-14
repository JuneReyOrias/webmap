<link rel="stylesheet" href="landing_page/assets/css/login.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<!-- endinject -->

  <!-- Layout styles -->  

  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
{{-- @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif --}}
<!-- boostrap company model -->
<div class="modal fade" id="login-modal" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content"style=" background-image: url(https://watchmendailyjournal.com/wp-content/uploads/2023/04/da.jpg);">
<div class="modal-header">
<h4 class="modal-title" id="loginModal"></h4>
</div>
<div class="modal-body">
    
      <div class="main_div">
        <div class="title">Login Form</div>
        

        {{-- <div class="social_icons">
          <a href="#"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
          <a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a>
        </div> --}}
        <form class="agrimap " method="post" action="{{ route('login') }}">
            @csrf
          <div class="input_box">
            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="email" required>
            <div class="icon"><i class="fas fa-user"></i></div>
          </div>
          <div class="input_box">
            <input input id="password" class="form-control"
            type="password"
            name="password"
            required autocomplete="current-password" required>
            <div class="icon"><i class="fas fa-lock"></i></div>
          </div>
          <div class="option_div">
            <div class="check_box">
              <input type="checkbox">
              <span>Remember me</span>
            </div>
            <div class="forget_div">
              <a href="#">Forgot password?</a>
            </div>
          </div>
          <div class="input_box button">
            <input type="submit" value="Login">
          </div> 
         
          <div class="sign_up">
            Not a member? <a href="{{route('register')}}">Signup now</a>
          </div>
        </form>
      </div>
      
  
<div class="modal-footer">

</div>
</div>
</div>
</div>
<!-- end bootstrap model -->
