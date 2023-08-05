<div class="containers">
    <?php
    $msg = $this->session->flashdata('msg');
    if ($msg != "") {
        echo "<div class='alert alert-success'>
              $msg
              <span class='close'>&times;</span>
          </div>";
    }
    ?>

</div>

<!-------------------------------- </Form> -------------------------------->



<form class="mg-auto formdiv" method="Post" action="<?php echo base_url() . 'user/workwithus/'; ?>">

    <h4 style="text-align:center">
        <u style="text-decoration-color:#ff4b6c;">Join Our Team</u>
    </h4>


    <!-- Name Section -->

    <div class="form-group wrth90 mg-auto">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control " name="name" placeholder="Enter your name">
        <label for="" class="error-label">
            <?php echo form_error('name') ? form_error('name') : ''; ?>
        </label>
    </div>




    <!-- Phone Section -->

    <div class="form-group wrth90 mg-auto">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number">
        <label for="" class="error-label">
            <?php echo form_error('phone') ? form_error('phone') : ''; ?>
        </label>
    </div>




    <!-- Idea Title section -->

    <div class="form-group wrth90 mg-auto">
        <label for="areaOfInterest">Area of Interest:</label>
        <select class="form-control" id="areaOfInterest" name="areaOfInterest">
            <option value="">Select an Area of Interest</option>
            <option value="EventPlanning">Event Planning and Coordination</option>
            <option value="Trekking">Trekking and Outdoor Adventures</option>
            <option value="LiveMusic">Live Music Performances</option>
            <option value="LiveMusic">Art and Culture Promotion</option>
            <option value="LiveMusic">Social Media Marketing and Promotion</option>
            <option value="LiveMusic">Photography and Videography</option>
            <option value="LiveMusic">Volunteer Management and Coordination</option>
            <option value="LiveMusic">Graphic Design and Visual Content Creation</option>
            <option value="LiveMusic">Public Relations and Communications</option>
            <option value="LiveMusic">Sponsorship and Fundraising</option>
            <option value="LiveMusic">For Volunteer</option>
            <!-- Add more options as per your needs -->
        </select>
        <label for="" class="error-label">
            <?php echo form_error('areaOfInterest') ? form_error('areaOfInterest') : ''; ?>
        </label>
    </div <!-- Description section -->

    <div class="form-group wrth90 mg-auto">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Enter a message"></textarea>
    </div>



    <div class="mt-3 mb-3 pb-3" style="text-align:center;">
        <button> Submit </button>
    </div>

</form>




<div class="textdiv">

    <h2 style="text-align:center" class="mt-5">
        <u style="text-decoration-color:#ff4b6c;">Let's Understand This</u>
    </h2>

    <div class="container mt-5 pt-5">

        <div class="row">
            <div class=" col-md-6 px-4">
                <h4>About Form</h4>
                <p class="explaintion">Give us best ideas for Improvment in our website Ghumo.jaipur</p>
            </div>
            <div class="logo1 col-md-6 text-center ">
                <img src="<?php echo base_url() . 'assets/images/logo.png' ?>" class=" " style="width:12rem;">

            </div>
        </div>

    </div>
    <div class="container mt-5 mb-5 pb-3">
        <div class="row mg-auto">
            <div class="text col-md-6 ">

                <img src="<?php echo base_url() . 'assets/images/join.png' ?>" class="" style="width:15rem;">

            </div>
            <div class="col-md-6">
                <h4>What Is This</h4>
                <p class="explaintion">This form provides you with an opportunity to explore various ways to join
                    forces with us. Whether you're interested in career opportunities, volunteering, partnerships,
                    or vendor collaborations, we invite you to share your details and interests with us.</p>
            </div>

        </div>
    </div>
</div>
