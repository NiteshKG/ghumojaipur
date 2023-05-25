
<!-- Footer -->
<footer class="futterdarkcolor bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <div>
        <h3>connect with us.</h3>
      </div>
      <section class="mb-4 socialicon">
        <!-- Facebook -->
        <a class="btn boostrapfacebook btn-outline-light btn-floating m-1" href="https://www.facebook.com/profile.php?id=100090620859878&mibextid=ZbWKwL" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/RisingPoll" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a> -->
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/risingpoll?igshid=ZDdkNTZiNTM=" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a> -->

      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
      <?php echo validation_errors(); ?>
        <form method="post" action="<?php echo base_url('manage/email_newsletter'); ?>">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2 margin0">
                <strong>Sign up for join us in tracking.</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline emaildiv form-white mb-4">
                <input type="email" name="email" placeholder="Email Address" class="form-control" />
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p class="margin0">
        Witness the unseen places in jaipur by joining us on our tracking event and make incredible amount of memories.
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
        
          
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #ff4b6c;">
        <a class="text-white" href="https://risingpoll.com/">© <?= date("Y") ?> ghumojaipur. All rights reserved.</a>
    </div>
    <!-- Copyright -->
  </footer>
