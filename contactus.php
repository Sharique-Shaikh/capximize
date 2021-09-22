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
                        <div class="text-center">
                           <h3 class="mb-2">Enquiry Form</h3>
                           <p>Kindly fill your contact details. The concerned executive will get in touch with you shortly.</p>
                        </div>
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
                                    <textarea name="message" placeholder="Enter Message... *" rows="4" class="form-control customInput"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="formbutton">
                              <input type="hidden" name="action" value="contactus">
                              <input type="submit" class="c-btn bg-dark-color text-white w-100" name="SUBMIT" value="SUBMIT">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
         <div class="modal fade form-pop-container" id="thankyou-mdal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal ">
            <div class="modal-content pop-main pb-4">
               <div class="modal-header pb-0 border-0 ">
                  <!--  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                  <button type="button" class="close-btn " data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
               </div>
               <div class="modal-body text-center">
                  <div class="form-pop-top pb-3">
                     <h2>Thank You!</h2>
                     <p class="mt-3">Your submission has been received.<br/> We will be in touch and contact you soon.</p>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <?php include('assets/includes/footer.php'); ?>
      <?php include('assets/includes/footers-links.php'); ?>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
      <script>
         $.validator.addMethod("emailExt", function(value, element, param) {
               return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
               },'Your email id is not correct format');
         
            $.validator.addMethod("mobileValidation", function (value, element) {
        return !/^\d{8}$|^\d{10}$/.test(value) ? false : true;
    }, "Mobile number invalid");
    
         $("form[name='contactus']").validate({
         rules: {
         name:{
         required:true,
         minlength:3
         },
         
         email:{
         required:true,
         email:true,
         emailExt:true
         },
         
         mobileno: {
         required:true,
         minlength:10,
         maxlength:10,
         number:true,
         mobileValidation: true
         },
         message:{
         required:true,
         minlength:3
         
         },
         
         
         },
         
         submitHandler: function(form) {
         //form.submit();
         
           $.ajax({
           url:"process.php",
           type: "post",
           data:$("form[name=contactus]").serialize(),           
           dataType:"JSON",
           success: function(response) {
                //$("#popForm").modal("hide");
                 if(response.error==1){
                        $("form[name='contactus']")[0].reset();
                        $('#thankyou-mdal').modal('show');
                    }
                    else{
                        alert("something is wrong");
                    }
                    
             }
         });
         }
         });
      </script>
   </body>
</html>