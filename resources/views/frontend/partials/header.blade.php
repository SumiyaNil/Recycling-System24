<section id="header">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow_box" id="navbar_sticky">
  <div class="container-xl">
    <a class="text-black p-0 navbar-brand fw-bold me-0" href="index.html"><i class="fa fa-recycle me-1 col_green align-middle"></i> Recycling</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	   <ul class="navbar-nav mb-0 nav_left ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
		 
		<li class="nav-item">
          <a class="nav-link" href="about.html">About </a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="services.html">Services </a>
        </li>
		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Team
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="team.html"> Team</a></li>
            <li><a class="dropdown-item border-0" href="detail.html"> Team Detail</a></li>
          </ul>
        </li>
	
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-target="#loginModal" href="#" data-toggle="modal">
            login
          </a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-target="#regModal" href="#" data-toggle="modal">
            Register
          </a>

        </li>

		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="faq.html"> Faq</a></li>
            <li><a class="dropdown-item border-0" href="contact.html"> Contact Us</a></li>
          </ul>
        </li>
		
      </ul>
      <ul class="navbar-nav mb-0 ms-auto mt-1">
		<li class="nav-item">
          <a class="nav-link social_link" href="#"><i class="fa fa-facebook"></i></a>
        </li>
		<li class="nav-item">
          <a class="nav-link social_link mx-2" href="#"><i class="fa fa-instagram"></i></a>
        </li>
		<li class="nav-item">
          <a class="nav-link social_link" href="#"><i class="fa fa-linkedin"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>

<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{route('frontend.register')}}"  method="post">
       
      @csrf
        <div class="modal-body">
          <div>
            <label for="">Enter your name:</label>
            <input required type="text" name="customer_name" placeholder="Enter your name" class="form-control">
          </div>

          <div>
            <label for="">Enter your email:</label>
            <input required type="email" name="email" placeholder="Enter your email" class="form-control">
          </div>

          <div>
            <label for="">Enter your password:</label>
            <input required type="password" name="password" placeholder="Enter your password" class="form-control">
          </div>


          <div>
            <label for="">Retype your password:</label>
            <input required type="password" name="password_confirmation" placeholder="Retype your password" class="form-control">
          </div>

          <div>
            <label for="">Enter your Mobile Number:</label>
            <input required type="number" name="mobile_number" placeholder="Enter your Mobile number" class="form-control">
          </div>
          
          </select>
        </div>
       
 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary active" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary active">Register now</button>
      </div>
      </form>
    </div>
  </div>
</div>



 <!--login Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{route('frontend.login')}}"  method="post">
       
      @csrf
        <div class="modal-body">
         

          <div>
            <label for="">Enter your email:</label>
            <input required type="email" name="email" placeholder="Enter your email" class="form-control">
          </div>

          <div>
            <label for="">Enter your password:</label>
            <input required type="password" name="password" placeholder="Enter your password" class="form-control">
          </div>


          
 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary active" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary active" >login</button>
      </div>
      </form>
    </div>
  </div>
</div>
