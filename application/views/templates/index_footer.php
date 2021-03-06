 <!-- contact_location  -->
 <div class="contact_location">
   <div class="container">
     <div class="row">
       <div class="col-xl-6 col-lg-6 col-md-6">
         <div class="location_left">
           <div class="logo">
             <img src="<?= base_url('assets/'); ?>img/logo-rms.png" alt="">
           </div>
           <ul>
             <li>
               <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fas fa-envelope"></i></a>
             </li>
             <l><?= $mail; ?></l>
           </ul>
         </div>
       </div>
       <div class="col-xl-3 col-md-3">
         <div class="single_location">
           <h3><img src="<?= base_url('assets/'); ?>img/icon/address.svg" alt=""> Location</h3>
           <p><?= $addres; ?></p>
         </div>
       </div>
       <div class="col-xl-3 col-md-3">
         <div class="single_location">
           <h3> <img src="<?= base_url('assets/'); ?>img/icon/support.svg" alt=""> Location</h3>
           <p><?= $phone; ?> <br>
             <?= $mail; ?></p>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!--/ contact_location  -->

 <!-- footer start -->
 <footer class="footer">
   <div class="footer_top">
     <div class="container">
       <div class="row">
         <div class="col-xl-3 col-lg-3">
           <div class="footer_widget">
             <h3 class="footer_title mb-2">
               Services
             </h3>
             <ul>
               <li><a href="<?= base_url('auth/service_details'); ?>#service">Air Transportation</a></li>
               <li><a href="<?= base_url('auth/service_details'); ?>#service">Ocean Cargo</a></li>
               <li><a href="<?= base_url('auth/service_details'); ?>#service">Logistics</a></li>
             </ul>
           </div>
         </div>
         <div class="col-xl-2 col-lg-2">
           <div class="footer_widget">
             <h3 class="footer_title mb-2">
               Company
             </h3>
             <ul>
               <li><a href="#">News</a></li>
               <li><a href="<?= base_url('auth'); ?>#testi">Testimonials</a></li>
               <li><a href="<?= base_url('auth'); ?>">Home</a></li>
             </ul>
           </div>
         </div>
       </div>
       <div class="footer">
         <div class="container">
           <div class="copy-right_text">
             <div class="footer_border mt-50"></div>
             <p class="copy_right text-center ">
               Copyright &copy;<script>
                 document.write(new Date().getFullYear());
               </script> <?= $copyright; ?>
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </footer>
 <!--/ footer end  -->
 <!-- JS here -->
 <script src="<?= base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/isotope.pkgd.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/ajax-form.js"></script>
 <script src="<?= base_url('assets/'); ?>js/waypoints.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/jquery.counterup.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/imagesloaded.pkgd.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/scrollIt.js"></script>
 <script src="<?= base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/wow.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/nice-select.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/jquery.slicknav.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/plugins.js"></script>
 <script src="<?= base_url('assets/'); ?>js/gijgo.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/slick.min.js"></script>



 <!--contact js-->
 <script src="<?= base_url('assets/'); ?>js/contact.js"></script>
 <script src="<?= base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/jquery.form.js"></script>
 <script src="<?= base_url('assets/'); ?>js/jquery.validate.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/mail-script.js"></script>
 <script src="<?= base_url('assets/'); ?>js/main.js"></script>




 </body>

 </html>