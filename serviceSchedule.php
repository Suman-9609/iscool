<?php
include('./php/include/service_header.php');
include('./php/include/navbar3.php');
include('./php/include/serviceSidebar.php');
?>


<div class="col-sm-12 col-lg-9 col-md-8">
   <div class="main_box mt-5 mb-5">

      <div class="mb-5 text-right" style="font-size: 15px; color: #537895"><a href="serviceCenter.php" class="text-uppercase">Service Center</a> &nbsp;&nbsp;/&nbsp;&nbsp;<i><b>Book your schedule</b></i></div>


   
      <div class="col-sm-12 col-md-11 col-lg-11 m-auto service_box card">
         <div class="card-header">
            <h2 class="text-center">Book Your Schedule</h2>
         </div>
         <div class="card-body">
            <form action="" method="POST" id="schedule_form">
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a href="" class="nav-link active_tab1" style="border: 1px solid #ccc;" id="list_personal_details">Personal Details</a>
                  </li>
                  <li class="nav-item">
                     <a href="" class="nav-link inactive_tab1" style="border: 1px solid #ccc;" id="list_product_details">Product Details</a>
                  </li>
               </ul>

               <div class="tab-content" style="margin-top: 16px;">
                  <div class="tab-pane active" id="personal_details">
                     <div class="panel panel-primary">
                        <div class="panel-heading">Personal Details</div>
                        <div class="panel-body">
                           <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="service_name" id="service_name" class="form-control">
                              <span id="service_error_name" style="font-size: 1.1rem;" class="text-danger"></span>
                           </div>
                           <!-- </> form-group -->
                           <div class="form-group">
                              <label for="">Phone Number</label>
                              <input type="text" name="service_phone" id="service_phone" class="form-control">
                              <span id="service_error_phone" style="font-size: 1.1rem;" class="text-danger"></span>
                           </div>
                           <!-- </> form-group -->
                           <div class="form-group">
                              <label for="">Email Id</label>
                              <input type="email" name="service_email" id="service_email" class="form-control">
                              <span id="service_error_email" style="font-size: 1.1rem;" class="text-danger"></span>
                           </div>
                           <!-- </> form-group -->
                           <div class="row">
                              <div class="col-6">
                                 <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="service_address" id="service_address" class="form-control">
                                 </div>
                                 <!-- </> form-group -->
                              </div>
                              <div class="col-6">
                                 <div class="form-group">
                                    <label for="">Landmark</label>
                                    <input type="text" name="service_address_landmark" id="service_address_landmark" class="form-control">
                                 </div>
                                 <!-- </> form-group -->
                              </div>
                           </div>
                           <div class="text-center">
                              <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg"> Next </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- </> tab-pane -->
                  <div class="tab-pane" id="product_details">
                     <div class="panel panel-default">
                        <div class="panel-heading">Fill Product Details</div>
                        <div class="panel-body">
                           <div class="form-group">
                              <label class="visually-hidden" for="inlineFormSelectPref">Select Product</label>
                              <select class="form-control" name="product" id="product">
                                 <option value="">Select Product</option>
                                 <option value="">Desktop</option>
                                 <option value="">Laptop</option>
                                 <option value="">Printer</option>
                                 <option value="">Monitor</option>
                                 <option value="">SMPS</option>
                              </select>
                           </div>
                           <!-- </> form-group -->
                           <div class="form-group">
                              <label class="visually-hidden" for="inlineFormSelectPref">Select Problem</label>
                              <select class="form-control" name="problem" id="problem">
                                 <option value="">Select Problem</option>
                                 <option value="">No Display</option>
                                 <option value="">Dead Condition</option>
                                 <option value="">Power Supply fault</option>
                              </select>
                           </div>
                           <!-- </> form-group -->
                           <div class="form-group">
                              <label for="">Others</label>
                              <textarea name="" id="" class="form-control" placeholder="Enter Problem"></textarea>
                           </div>
                           <!-- </> form-group -->
                           <div class="text-center">
                              <button type="button" name="previous_btn_product_details" id="previous_btn_product_details" class="btn btn-default btn-lg"> Previous </button>
                              <button type="button" name="btn_product_details" id="btn_product_details" class="btn btn-success btn-lg"> Submit </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>


   </div>
   <!-- </> main_box -->
</div>
<!-- </> col -->
</div>
<!-- </> row -->
</div>
<!-- </> container-fluid -->



<!-- ===================== footer ===================== -->
<?php
include('./php/include/footer_section.php');
?>

<?php
include('./php/include/footer.php');
// include('./php/include/training_footer.php');
?>
<script>
   $(document).ready(function() {
      $('#btn_personal_details').click(function() {
         var service_error_email = '';
         var service_error_name = '';
         var serice_error_phone = '';
         var service_address = '';
         var service_address_landmark = '';
         var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

         // for Email Validation
         if ($.trim($('#service_email').val()).length === 0) {
            service_error_email = 'Email is required';
            $('#service_error_email').text(service_error_email);
            $('#service_email').addClass('has-error');
         } else {
            if (!filter.test($('#service_email').val())) {
               service_error_email = 'Invalid Email';
               $('#service_error_email').text(service_error_email);
               $('#service_email').addClass('has-error');
            } else {
               service_error_email = '';
               $('#service_error_email').text(service_error_email);
               $('#service_email').removeClass('has-error');
            }
         }

         // for Name validation
         if ($.trim($('#service_name').val()).length === 0) {
            service_error_name = 'Name is Required';
            $('#service_error_name').text(service_error_name);
            $('#service_name').addClass('has-error');
         } else {
            service_error_name = '';
            $('#service_error_name').text(service_error_name);
            $('#service_name').removeClass('has-error');
         }

         // for Phone Number Validation
         if ($.trim($('#service_phone').val()).length === 0) {
            service_error_phone = 'Phone number is Required';
            $('#service_error_phone').text(service_error_phone);
            $('#service_phone').addClass('has-error');
         } else {
            service_error_phone = '';
            $('#service_error_phone').text(service_error_phone);
            $('#service_phone').removeClass('has-error');
         }

         if (service_error_email != '' || service_error_name != '' || service_error_phone != '' || service_address != '' || service_address_landmark != '') {
            return false;
         } else {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_product_details').removeClass('inactive_tab1');
            $('#list_product_details').addClass('active_tab1 active');
            $('#list_product_details').attr('href', '#product_details');
            $('#list_product_details').attr('data-toggle', 'tab');
            $('#product_details').addClass('active in');
         }
      });

      $('#previous_btn_product_details').click(function() {
         $('#list_product_details').removeClass('active active_tab1');
         $('#list_product_details').removeAttr('href', 'data-toggle');
         $('#list_product_details').addClass('inactive_tab1');
         $('#product_details').removeClass('active in');
         $('#list_personal_details').addClass('active active_tab1');
         $('#list_personal_details').attr('href', '#personal_details');
         $('#list_personal_details').attr('data-toggle', 'tab');
         $('#personal_details').addClass('active');
      });


      // product Details
      $('#btn_product_details').click(function() {
         var service_error_product = '';
         var service_error_prblem = '';

         if (service_error_product != '' || service_error_prblem != '') {
            return false;
         } else {
            $('#btn_product_details').attr("disabled", "disabled");
            $(document).css('cursor', 'progress');
            $('#schedule_form').submit();
            alert("Successfully submitted");
         }
      });

   });
</script>