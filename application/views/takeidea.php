

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



        <form action="<?php echo base_url().'user/takeidea/';?>" method="post" class="mg-auto formdiv">

            <h4 style="text-align:center">
                <u style="text-decoration-color:#ff4b6c;">Give Us A Best Idea</u>
            </h4>


            <!-- Name Section -->

            <div class="form-group wrth90 mg-auto">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control " name="name" placeholder="Enter your name">
                <label for ="" class="error-label"><?php echo form_error('name')?form_error('name') : '' ;?></label>
            </div>




            <!-- Phone Section -->

            <div class="form-group wrth90 mg-auto">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number">
                <label for ="" class="error-label"><?php echo form_error('phone')?form_error('phone') : '' ;?></label>
            </div>




            <!-- Idea Title section -->

            <div class="form-group wrth90 mg-auto">
                <label for="ideaTitle">Idea Title:</label>
                <input type="text" class="form-control" name="title" placeholder="Enter the idea title">
                <label for ="" class="error-label"><?php echo form_error('title')?form_error('title') : '' ;?></label>
            </div>




            <!-- Description section -->

            <div class="form-group wrth90 mg-auto">
                <label for="ideaDescription">Describe your idea:</label>
                <textarea class="form-control" name="description" rows="5" placeholder="Write here"></textarea>
                <label for ="" class="error-label"><?php echo form_error('description')?form_error('description') : '' ;?></label>
            </div>
     


            <div class="mt-3 mb-3 pb-3" style="text-align:center;">
                <button> Submit </button>
            </div>

        </form>




        <div class="textdiv">

            <h2 style="text-align:center" class="mt-5">
                <u style="text-decoration-color:#ff4b6c;">Let's Understand This</u>
            </h2>

            <div class="container mt-5 pt-3">

                <div class="row ">
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
                    <div class=" text col-md-6">

                    <img src="<?php echo base_url() . 'assets/images/logo2.png' ?>" class="" style="width:12rem;">

                    </div>
                    <div class="col-md-6">
                        <h4>Types Of Ideas</h4>
                        <p class="explaintion">Whatever you think should be improved in this thing or
                            what type of thing should be done like this or along with this you can also give idea for
                            the
                            content in this site that put this type of news or this type of content pour</p>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <!---------------------------------------- Footer ---------------------------------------->

