 <section class="breadcrumb_area" 
        style="background-image: url('<?php echo base_url();?>assets/img/breadcrumb/internship.jpg');background-position:  center center; background-repeat: no-repeat; background-size: cover;" >
              <img class="breadcrumb_shap" src="<?php echo base_url('assets/img/breadcrumb/banner_bg.png');?>" alt="">
        <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Apply For Internship Jobs</h1>
                    <!--<p class="f_400 w_color f_size_16 l_height26">Unleash your talents and apply the new, now with a career that<br> disrupts and transforms -->
                    <!--every industry in every country.</p>-->
                </div>
            </div>
        </section>
     
    <section class="job_apply_area sec_pad bg_color">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-2 pl_70"></div>
                    <!--<div class="col-lg-4 pl_70">-->
                    <!--    <div class="job_info">-->
                    <!--        <div class="info_head">-->
                    <!--            <i class="ti-receipt"></i>-->
                    <!--            <h6 class="f_p f_600 f_size_18 t_color3">Job Detail</h6>-->
                    <!--        </div>-->
                    <!--        <div class="info_item">-->
                    <!--            <i class="ti-ruler-pencil"></i>-->
                    <!--            <h6>Department</h6>-->
                    <!--            <p>Senior Web Designer</p>-->
                    <!--        </div>-->
                    <!--        <div class="info_item">-->
                    <!--            <i class="ti-location-pin"></i>-->
                    <!--            <h6>Location</h6>-->
                    <!--            <p>United Kingdom</p>-->
                    <!--        </div>-->
                    <!--        <div class="info_item">-->
                    <!--            <i class="ti-layout-tab-window"></i>-->
                    <!--            <h6>Job Type:</h6>-->
                    <!--            <p>Planning</p>-->
                    <!--        </div>-->
                    <!--        <div class="info_item">-->
                    <!--            <i class="ti-pencil-alt"></i>-->
                    <!--            <h6>Qualifications</h6>-->
                    <!--            <p>Associate</p>-->
                    <!--        </div>-->
                    <!--        <div class="info_item">-->
                    <!--            <i class="ti-cup"></i>-->
                    <!--            <h6>Experience</h6>-->
                    <!--            <p>4 Years</p>-->
                    <!--        </div>-->
                    <!--        <div class="info_item">-->
                    <!--            <i class="ti-ruler-pencil"></i>-->
                    <!--            <h6>Offered Salary</h6>-->
                    <!--            <p>100k</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-lg-8">
                        <div class="job_apply">
                            <div class="sec_title mb_70">
                                <h3 class="f_p f_size_22 f_600 t_color3 mb_20">Apply Now</h3>
                                <p class="f_400 f_size_15">
                                    Are you computer Science /Electronics &amp; Communications /IT /MCA/BCA student and want
                                    to work on cutting edge, Are you looking for practical exposure of latest technologies. Get
                                    trained by our senior developers with real time projects. Do you believe in learn and
                                    implement then we are one of the best company to join as Internship trainee.
                                    Apply now and If shortlisted, We will offer you to join us as our Internship Trainee.</p>
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

                            <form action="<?php echo base_url('internship'); ?>" class="row apply_form" method="post" id="internship_form" enctype="multipart/form-data">
                                <div class="form-group col-lg-6">
                                    <input type="text" placeholder="First Name" name="name"  value="<?php echo set_value('name'); ?>">
                                    <?php echo form_error('name', '<label class="error">', '</label>'); ?>
                                </div>
                                    <div class="form-group col-lg-6">
                                    <input type="text" placeholder="Last Name" name="last_name"  value="<?php echo set_value('last_name'); ?>">
                                    <?php echo form_error('last_name', '<label class="error">', '</label>'); ?>
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
                                    <input type="text" placeholder="College Name" name="college_name" value="<?php echo set_value('college_name'); ?>">
                                    <?php echo form_error('college_name', '<label class="error">', '</label>'); ?>
                                </div>
                               
                                <div class="form-group col-md-6">
                                    <?php 
                                    $streams= [
                                        ' '   => 'Stream/Branch',
                                        'cse' => 'CSE',
                                        'ece' => 'ECE',
                                        'it' => 'IT',
                                        'mca' => 'MCA',
                                        'bca' => 'BCA',
                                        'other' => 'Other',
                                    ]; 
                                    ?>
                                    <select class="selectpickers" name="stream">
                                        <?php foreach ($streams as $key => $stream) {  ?>
                                            <option value="<?php echo $key;?>" <?php echo set_select('stream',$key);?>><?php echo $stream; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('stream', '<label class="error">', '</label>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <?php 
                                    $semesters= [
                                        ' '   => 'Semester',
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                    ]; 
                                    ?>
                                    <select class="selectpickers" name="semester">
                                        <?php foreach ($semesters as $key => $semester) {  ?>
                                            <option value="<?php echo $key;?>" <?php echo set_select('semester',$key);?>><?php echo $semester; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('semester', '<label class="error">', '</label>'); ?>
                                </div>
                                     
                                <div class="form-group col-md-6">
                                    <?php 
                                    $interest_areas= [
                                        ' '   => 'Area of Internship',
                                        'iot' => 'IOT',
                                        'android' => 'Android',
                                        'machine learning' => 'Machine Learning',
                                        'artificial intelligence' => 'Artificial Intelligence',
                                        'cloud computing' => 'Cloud Computing',
                                        'python' => 'Python',
                                        'big data' => 'Big Data',
                                        'cyber security' => 'Cyber Security',
                                        'web development' => 'Web Development',
                                        'java' => 'Java',
                                        
                                    ]; 
                                    ?>
                                    <select class="selectpickers" name="interest_area">
                                        <?php foreach ($interest_areas as $key => $interest_area) {  ?>
                                            <option value="<?php echo $key;?>" <?php echo set_select('interest_area',$key);?>><?php echo $interest_area; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('interest_area', '<label class="error">', '</label>'); ?>
                                </div>
                               
                                  <div class="form-group col-md-4"> 
                                
                                 <input type="number" placeholder="10 CGPA Score" name="cgpa_10" value="<?php echo set_value('cgpa_10'); ?>"> 
                                 <?php echo form_error('cgpa_10', '<label class="error">', '</label>'); ?>
                                </div>
                                  <div class="form-group col-md-4">
                                
                                 <input type="number" placeholder="12 CGPA Score" name="cgpa_12" value="<?php echo set_value('cgpa_12'); ?>"> 
                                 <?php echo form_error('cgpa_12', '<label class="error">', '</label>'); ?>
                                </div>
                                  <div class="form-group col-md-4">
                                
                                 <input type="number" placeholder="Till semester CGPA Score" name="sem_cgpa" value="<?php echo set_value('sem_cgpa'); ?>"> 
                                 <?php echo form_error('sem_cgpa', '<label class="error">', '</label>'); ?>
                                </div>
                                
                                  <div class="form-group col-md-12">
                                    <?php 
                                    $internship_durations= [
                                        ' '    => 'Minimum Duration of Internship',
                                        '30 ays' => '30 days',
                                        '45 ays' => '45 days',
                                    ]; 
                                    ?>
                                    <select class="selectpickers" name="internship_duration">
                                        <?php foreach ($internship_durations as $key => $internship_duration) {  ?>
                                            <option value="<?php echo $key;?>" <?php echo set_select('internship_duration',$key);?>><?php echo $internship_duration; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('internship_duration', '<label class="error">', '</label>'); ?>
                                </div>
                                  <div class="form-group col-md-12">
                                    <?php 
                                    $looking_for_classs= [
                                        ' '    => 'Are you looking for GRE/GMAT/IELETS /TOEFL Class during Internship?',
                                        'yes' => 'Yes',
                                        'no' => 'No',
                                    ]; 
                                    ?>
                                    <select class="selectpickers" name="looking_for">
                                        <?php foreach ($looking_for_classs as $key => $looking_for_class) {  ?>
                                            <option value="<?php echo $key;?>" <?php echo set_select('looking_for',$key);?>><?php echo $looking_for_class; ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('looking_for', '<label class="error">', '</label>'); ?>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="upload_box"> Upload Your Resume Here :
                                        <input type="file" id="File" name="upload_resume" placeholder="Choose File (pdf/doc/docs)">
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
                    <div class="col-lg-2 pl_70"></div>
                </div>
            </div>
        </section>


         <section class="seo_call_to_action_area sec_pad-30"  style="margin-top: 100px">
            <div class="container">
                <div class="seo_call_action_text">
                    <h2>Request quote <br><small>Our representative will call you back within 24 hrs.</small></h2>
                    <a href="#" class="about_btn">Get a free Estimate</a>
                </div>
            </div>
        </section>

<script type="text/javascript">
    $("#internship_form").validate({
        rules: {
            name: {required:true, maxlength:200},
            email: {required:true, email:true},
            contact_no: {required:true, maxlength:10, digits: true},
            college_name: {required:true, maxlength:200},
            stream: {required:true},
            semester: {required:true},
            interest_area: {required:true},
            cgpa_10: {required:true},
            cgpa_12: {required:true},
            sem_cgpa: {required:true},
            internship_duration: {required:true},
            looking_for: {required:true},
            upload_resume: {required:true},
        },
    });
</script>  