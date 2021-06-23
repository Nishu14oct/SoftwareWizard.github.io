
        <section class="breadcrumb_area" style="background-image: url('<?php echo base_url();?>/assets/img/Img-01.jpg');background-position:  center center; background-repeat: no-repeat; background-size: cover;" >
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Job apply</h1>
                    <!--<p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> -->
                    <!--Jeffrey bodge barney some dodgy.!!</p>-->
                </div>
            </div>
        </section>
        <section class="job_apply_area sec_pad bg_color">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-2 pl_70">
               
                    </div>
                    <?php if(count($jobs)!='1') {  ?>
                         <div class="item del new">
                            <p> No Record Found</p>
                        </div>
                    <?php } else { ?>
                        
                        <div class="col-lg-8">
                            <div class="job_apply">
                                <div class="sec_title mb_70">
                                    <h3 class="f_p f_size_22 f_600 t_color3 mb_20">Apply Now</h3>
                                    <p class="f_400 f_size_15">Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky panky a blinding shot the little rotter, bubble and squeak vagabond cheeky bugger at public school pardon you bloke the BBC. Tickety-boo Elizabeth plastered matie.!</p>
                                </div>

                                <div class="item del new">
                                    <div class="list_item">
                                        <div class="joblisting_text">
                                            <div class="job_list_table">
                                                <div class="jobsearch-table-cell">
                                                    <h4><a href="#" class="f_500 t_color3">Job Name : <?php echo $jobs['0']->name; ?></a></h4>
                                                    <ul class="list-unstyled">
                                                        <li class="p_color">Job Type : <?php echo $jobs['0']->type; ?></li>
                                                        <li>Experience : 
                                                            <?php 
                                                            $expFrom = $jobs['0']->experience_year_from;
                                                            $expTo   = $jobs['0']->experience_year_to;
                                                            if($jobs['0']->experience_months_from>0){
                                                                $expFrom = $expFrom.'.'.$jobs['0']->experience_months_from;
                                                            }

                                                            if($jobs['0']->experience_months_to>0){
                                                                $expTo = $expTo.'.'.$jobs['0']->experience_months_to;
                                                            } 
                                                            echo $expFrom.'-'.$expTo; ?> Years   
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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

                                <form action="<?php echo base_url('job-apply/'.$jobs['0']->id); ?>" class="row apply_form" method="post" id="job_form" enctype="multipart/form-data">
                                    <input type="hidden" name="job_id" value="<?php echo $jobs['0']->id; ?>">
                                    <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Your Name" name="name"  value="<?php echo set_value('name'); ?>">
                                        <?php echo form_error('name', '<label class="error">', '</label>'); ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Your Email" name="email" value="<?php echo set_value('email'); ?>">
                                        <?php echo form_error('email', '<label class="error">', '</label>'); ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Contact Number" name="contact_no" value="<?php echo set_value('contact_no'); ?>">
                                        <?php echo form_error('contact_no', '<label class="error">', '</label>'); ?>
                                    </div>
                                      <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Highest Qualification" name="highest_qualification" value="<?php echo set_value('highest_qualification'); ?>">
                                        <?php echo form_error('highest_qualification', '<label class="error">', '</label>'); ?>
                                    </div>
                                   
                                <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Resident Location" name="resident_location" value="<?php echo set_value('resident_location'); ?>">
                                        <?php echo form_error('resident_location', '<label class="error">', '</label>'); ?>
                                    </div>
                                 <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Current Location" name="current_location" value="<?php echo set_value('current_location'); ?>">
                                        <?php echo form_error('current_location', '<label class="error">', '</label>'); ?>
                                    </div>
                                         
                                   <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Current Company" name="current_companyname" value="<?php echo set_value('current_companyname'); ?>">
                                        <?php echo form_error('current_companyname', '<label class="error">', '</label>'); ?>
                                    </div>
                                 <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Total Experience" name="experience" value="<?php echo set_value('experience'); ?>">
                                        <?php echo form_error('experience', '<label class="error">', '</label>'); ?>
                                    </div>
                                   
                                    <div class="form-group col-lg-12">
                                        <div class="upload_box"> Upload Your Resume Here :
                                            <input type="file" id="File" name="upload_resume" placeholder="Choose File (pdf/doc/docx)">
                                            <?php echo form_error('upload_resume', '<label class="error">', '</label>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!--<p>By clicking apply job you agree to our terms that you have read in our<br> <a href="#">Terms & Conditions</a> page.</p>-->
                                        <button type="submit" class="btn_three" name="submit" value="submit">Apply Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                     <div class="col-lg-2 pl_70">
               
                    </div>
                </div>
            </div>
        </section>

<script type="text/javascript">
    $("#job_form").validate({
        rules: {
            name: {required:true, maxlength:200},
            email: {required:true, email:true},
            contact_no: {required:true, maxlength:10, digits: true},
            highest_qualification: {required:true, maxlength:200},
            resident_location: {required:true, maxlength:200},
            current_location: {required:true, maxlength:200},
            current_companyname: {required:true, maxlength:200},
            experience: {required:true, maxlength:200},
            upload_resume: {required:true},
        },
    });
</script>  