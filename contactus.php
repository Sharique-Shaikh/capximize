<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<?php include('assets/includes/metatags.php'); ?>
	<title>Contact Us</title>
	<?php include('assets/includes/header-links.php'); ?>
</head>
<body>
	<?php include('assets/includes/header.php'); ?>

     <main>

	 <section class="jumbotron-container pt-5">
		 <div class="container">
		 <div class="equal-padding-T ">
			 <div class="jumbotron-head">
				 <h1>Contact us</h1>
				 <div class="contactInfo text-center mt-3">
					 <ul>
						 <li><a href="tel:+912226301256">+91 22 2630 1256 </a></li>
						 <li><a href="mailto:contactus@capximize.com"> contactus@capximize.com</a>
						</li>
					 </ul>
			    
				</div>
</div>
			 </div>
			
		 </div>
	 </section>

	 <section class=" role-container">
		 <div class="container">
			 <div class="equal-padding-T equal-padding-B">
				 

	<div class="">
<form name="contactus" id="contactusform" class="capximizeForm" method="post"  autocomplete="off">
  <div class="text-center"><p>Kindly fill your contact details. The concerned executive will get in touch with you shortly.</p></div>
    <div class="contactusformWrapper">
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
        <input name="name" placeholder="Enter full name *" type="text" class="form-control customInput" />
        </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
        <input name="email" placeholder="Enter email ID *" type="email" class="form-control customInput" />
        </div>
        </div>
		
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
        <input  name="mobileno" placeholder="Enter the contact number*" type="text" class="form-control customInput" />
        </div>
        </div>
        
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
        <textarea name="message" placeholder="Enter Message... *" rows="2" class="form-control customInput"></textarea>
        </div>
        </div>
      
    </div>
    <div class="formbutton"><input type="submit" class="c-btn bg-dark-color text-white w-100" name="SUBMIT" value="SUBMIT"></div>
    </div>
    </form>
				 </div>
				 
			 </div>
		 </div>
	 </section>



     	
     </main>
	<?php include('assets/includes/footer.php'); ?>
	<?php include('assets/includes/footers-links.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
	  <script>
		  $.validator.addMethod('noemail', function (value) {
    return /^([\w-.]+@(?!gmail\.com)(?!gmail\.in)(?!gmail\.co)(?!yahoo\.com)(?!yahoo\.co)(?!yahoo\.co.in)(?!yahoo\.in)(?!hotmail\.in)(?!hotmail\.co)(?!hotmail\.com)(?!outlook\.com)(?!outlook\.co)(?!outlook\.in)(?!mail\.ru)(?!yandex\.ru)(?!mail\.com)([\w-]+.)+[\w-]{2,4})?$/.test(value);
}, 'Please enter your work email address.');

      $.validator.addMethod("emailExt", function(value, element, param) {
            return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
            },'Your email id is not correct format');


$("form[name='contactus']").validate({
   rules: {
name:{
  required:true,
   minlength:3
},

email:{
  required:true,
  email:true,
  noemail:true,
  emailExt:true
},

 mobileno: {
   required:true,
   minlength:10,
   maxlength:10,
   number:true
 },
message:{
   required:true,
   minlength:3

},
     

},
     
    submitHandler: function(form) {
      form.submit();
    }
  });
	  </script>

</body>
</html>