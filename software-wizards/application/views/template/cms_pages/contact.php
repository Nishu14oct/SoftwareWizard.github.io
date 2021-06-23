
<section class="breadcrumb_area" 
       style="background-position:  center center; background-repeat: no-repeat; background-size: cover;" >
            <img class="breadcrumb_shap" src="<?php echo base_url('assets/img/breadcrumb/banner_bg.png');?>" alt="">
        <div class="container">
                <div class="breadcrumb_content text-center">
                        <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Contact Us</h1>
                    <!--<p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear -->
                    <!--shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>-->
                 </div>
            </div>
        </section>
        <section class="contact_info_area sec_pad bg_color" style="padding-bottom:0px!important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pr-0">
                        <div class="contact_info_item">
                            <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Office Address</h6>
                            <p class="f_400 f_size_15">E-20040,Tower E, 14th Avenue, Gaur City 2 <br>Greater Noida West 201009</p>
                        </div>
                        <div class="contact_info_item">
                            <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Contact Info</h6>
                            <p class="f_400 f_size_14"><span class="f_400 t_color3">Phone:</span> <a href="tel:8800214267">(+91) 8800214267</a></p>
                            <!--<p class="f_400 f_size_15"><span class="f_400 t_color3">Fax:</span> <a href="tel:3024437488">(+096) 204 353 6684</a></p>-->
                            <p class="f_400 f_size_14"><span class="f_400 t_color3">Email:</span> <a href="mailto:wizardssoftware0@gmail.com">wizardssoftware0@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="mapbox">
                           <!--  
                                <div id="contact-google-map" class="row m0" data-map-lat="40.925372" data-map-lng="-74.276544" data-icon-path="images/logo/map.png" data-map-title="Find Map" data-map-zoom="12"></div>
                                
                            -->
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="750" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q=R-22%2C%203rd%20cross%2C%20Above%20Canara%20Bank%2C%20Electronic%20City%20Prathik%20Tech%20Park%2C%20Electronics%20City%20Phase%201%2C%20Opp%2C%20Bengaluru%2C%20Karnataka%20560100&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div></div>
                        </div>

                            
                    </div>
                </div>

            
                <div class="contact_form">
                    <h2 clas-s="f_p f_size_22 t_color3 f_600 l_height28 mt_100 mb_40"></h2>

                    <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php  echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php  echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php } ?> 

                    <form action="<?php echo base_url('contact'); ?>" class="contact_form_box sec_pad-30" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group text_box">
                                    <input type="text" id="name" name="name" placeholder="Your Name"  value="<?php echo set_value('name'); ?>">
                                     <?php echo form_error('name', '<label class="error">', '</label>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group text_box">
                                    <input type="text" name="email" id="email" placeholder="Your Email" value="<?php echo set_value('email'); ?>">
                                    <?php echo form_error('email', '<label class="error">', '</label>'); ?>
                                </div>
                            </div>
                             <div class="col-lg-4">
                                <div class="form-group text_box">
                                    <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number" value="<?php echo set_value('contact_number'); ?>">
                                     <?php echo form_error('contact_number', '<label class="error">', '</label>'); ?>
                                </div>
                                </div>
                                
                                 </div>
                                <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text_box">
                                    <input type="text" id="subject" name="subject" placeholder="Subject" value="<?php echo set_value('subject'); ?>">
                                     <?php echo form_error('subject', '<label class="error">', '</label>'); ?>
                                </div>
                            </div>
                               <div class="col-lg-6">
                                <div class="form-group">
                                    
                                     
                                     
                                     <?php 
                                    $technology= [
                                        ''   => 'Tehnology',
                                        'IOT' => 'IOT',
                                        'Android' => 'Android',
                                        'Machine Learning' => 'Machine Learning',
                                        'Artificial Intelligence' => 'Artificial Intelligence',
                                        'Cloud Computing' => 'Cloud Computing',
                                        'Python' => 'Python',
                                        'Web Development' => 'Web Development',
                                        'Big Data' => 'Big Data',
                                        'Cyber Security' => 'Cyber Security',
                                        'Block Chain' => 'Block Chain',
                                        'other' => 'Other',
                                    ]; 
                                    ?>
                                    <select class="selectpickers" name="stream" class="form-group">
                                        <?php foreach ($technology as $key => $tech) {  ?>
                                            <option value="<?php echo $key;?>" <?php echo set_select('tech',$key);?>><?php echo $tech; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('stream', '<label class="error">', '</label>'); ?>
                                      </div>
                            </div>
                            
                            
                            </div>
                             <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text_box">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message . . ."><?php echo set_value('message'); ?></textarea>
                                     <?php echo form_error('message', '<label class="error">', '</label>'); ?>
                                </div>
                            </div>
                             </div>
                        </div>
                        <button type="submit" class="btn_three" name="submit" value="submit">Send Message</button>
                    </form>
                    <div id="success">Your message succesfully sent!</div>
                    <div id="error">Opps! There is something wrong. Please try again</div>
                </div>
            </div>
        </section>


<script type="text/javascript">
    $("#contactForm").validate({
        rules: {
            name: {required:true, maxlength:200},
            email: {required:true, email:true},
            subject: {required:true, maxlength:200},
            contact_number: {required:true, digits: true, maxlength:10, minlength:10},
            message: {required:true, maxlength:200},
        },
    });
</script>