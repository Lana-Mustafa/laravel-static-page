<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  



</head>
<body  class="bg-light" >
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('index')}}"> Batman</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact')}}">Contact US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services')}}">Services</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>

<section class="contact py-5 bg-light mb-5" id="contact">
<div class="container">
	<div class="row">
	    <div class="col-md-12">
	        <h4>Contact Us</h4>
		    <hr>
	    </div>
		<div class="col-md-6">
		    <div class="address">
		        
		    <h5>Address:</h5>
		    <ul class="list-unstyled">
		        <li> T-Mobile Customer Relations</li>
		        <li> PO Box 37380</li>
		        <li> Albuquerque, NM 87176-7380</li>
		    </ul>
		    <p>Please don't send anything to this address.</p>
		    </div>
		    <div class="email">
		    <h5>Email:</h5>
		    <ul class="list-unstyled">
		        <li> info@email.com</li>
		        <li> info@email.com</li>
		    </ul>
		    </div>
		    <div class="phone">
		        <h5>Phone:</h5>
		        <ul class="list-unstyled">
		        <li> +91- 8800XXXXXX34</li>
		        <li> +91- 8800XXXXXX34</li>
		    </ul>
		    </div>
		    <hr>
		    <div class="social">
	        <ul class="list-inline list-unstyled">
	            <li class="list-inline-item">
	                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
	            </li>
	            <li class="list-inline-item">
	                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
	            </li>
	            <li class="list-inline-item">
	                <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
	            </li>
	        </ul>
	    </div>
		</div>
		<div class="col-md-6">
		    <div class="card">
		        <div class="card-body">
		             <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                      
                                      <select id="inputState" class="form-control">
                                        <option selected>Choose ...</option>
                                        <option> New Buyer</option>
                                        <option> Auction</option>
                                        <option> Complaint</option>
                                        <option> Feedback</option>
                                      </select>
                            </div>
                            <div class="form-group col-md-12">
                                      <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Your Message"class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="button" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
		        </div>
		    </div>
		</div>
	</div>
	
	
</div>
</section>

<footer class="bg-light pb-5 ">
  <div class="container text-center">
    <p class="font-italic text-muted mb-0">&copy; Copyrights Company.com All rights reserved.</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
</body>
</html>