
<style>
    .navbar-light .navbar-nav .nav-link {
        color: white;
    }

    .bodt {
        border: 3px solid #b7b7b7;
        border-radius: 10px;
    }

    .row {
        justify-content: center;
    }

    .flx { 
        justify-content: center;
    }

    .jcc {
        justify-content: center;
    }
    .img{
        width: 128px;
    }
    .w70{
        padding:11px 0px 4px 0px;
    }
    .w60{
        padding:11px 0px 4px 0px;
    }
    .w50{
        padding:11px 0px 4px 0px;
    }

    
</style>

    <div class="container-fluid">
        <div class="poratal mb-5">
            <h1>Welcome To Ghumo</h1>
            <h1>Jaipur Portal</h1>
            <p>खम्मा घणी</p>
            <div class="icondiv">
                <a href="<?= base_url() .'idea' ?>">
                    <button class="idea">
                        <i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>
                        <span class="button-text">Contribute Your Creative Ideas</span>
                    </button>
                </a>
            </div>

            <div class="icondiv">
                <a class="update-link" href="<?= base_url() .'cityupdates' ?>">
                    <button class="update">
                        <i class="icon fa fa-building" aria-hidden="true"></i>
                        <span class="button-text">Contribute City Updates</span>
                    </button>
                </a>
            </div>
            <div class="icondiv">
                <a class="work-link" href="<?= base_url() .'workwithus' ?>">
                    <button class="work">
                        <i class="icon fa fa-users" aria-hidden="true"></i>
                        <span class="button-text">Work With Us</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="container text-center ">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="flx jcc bodt">
                        <div class="w70">
                            <div class="flx">
                                <img src="<?php echo base_url() . 'assets/images/idea.png' ?>" class="img" style="" />
                            </div>
                            <div class="improve">
                                <ul class="ideaex">
                                    <h4><b style="color:#EE1139;">Button 1 - Innovative Ideas:</b></h4>
                                    <li>Recommendations for enhancing</li>
                                    <li>Requests for new features</li>
                                    <li>Reports on identified bugs</li>
                                    <li>Additional ideas for consideration</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 ">
                    <div class="flx jcc bodt">
                        <div class="w60">
                            <div class="flx">
                                <img src="<?php echo base_url() . 'assets/images/city.png' ?>" class="img" style="" />
                            </div>
                            <div class="city">
                                <ul class="updateex">
                                    <h4><b style="color:#EE1139;">Button 2 - Cityscape Highlights:</b></h4>
                                    <li>Environmental and sustainability</li>
                                    <li>Highlights of cultural activities</li>
                                    <li>Calendar of upcoming events</li>
                                    <li>City updates and announcements</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 ">
                    <div class="flx jcc bodt">
                        <div class="w50">
                            <div class="flx">
                                <img src="<?php echo base_url() . 'assets/images/work.png' ?>" class="img" style="" />
                            </div>
                            <div class="join">
                                <ul class="workex">
                                    <h4><b style="color:#EE1139;" >Button 3 - Work With Us:</b></h4>
                                    <li>Collaborating on projects</li>
                                    <li>Finding like-minded individuals</li>
                                    <li>Sharing skills and ideas</li>
                                    <li>Expanding opportunities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
 