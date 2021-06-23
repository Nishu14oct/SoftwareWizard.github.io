 <section class="breadcrumb_area" 
        style="background-image: url('<?php echo base_url();?>/assets/img/breadcrumb/Img-01.jpg');background-position:  center center; background-repeat: no-repeat; background-size: cover;" >
               <img class="breadcrumb_shap" src="<?php echo base_url('assets/img/breadcrumb/banner_bg.png');?>" alt="">
        <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Browse jobs</h1>
               
                </div>
            </div>
        </section>
     
        <section class="job_listing_area bg_color sec_pad">
            <div class="container"> 
                <div class="sec_title">
                    <h2 class="f_p f_size_24 l_height28 f_700 t_color3 mb_20">Job Requirements</h2>
                    <p class="f_400 f_size_15">Join our diverse group of innovators, working together to solve industries’ and organizations’ most challenging problems. Use leading-edge technologies and strategies to reinvent the way every job is done and help improve the way the world works and lives.</p>
                </div>
              
                <div class="job_listing" style="margin-top: 50px;">
                    <h3 class="f_p f_size_24 l_height28 f_500 t_color3 mb-30">Open Job Positions</h3>
                    <!--<div id="job_filter" class="job_list_tab">-->
                    <!--    <div data-filter="*" class="list_item_tab active">All</div>-->
                    <!--    <div data-filter=".del" class="list_item_tab">Delhi</div>-->
                    <!--    <div data-filter=".ban" class="list_item_tab">Bangalore</div>-->
                    <!--</div>-->
                    <div class="listing_tab" id="tab_filter">
                        <?php 
                        if(count($jobs)>0) {  
                        $count = 1;
                        foreach ($jobs as $job) {  ?>
                        <div class="item del new">
                            <div class="list_item">
                                <figure><a href="#">
                                    <img src="<?php echo base_url('assets/img/process/'.$job->image);?>" alt="">
                                    </a>
                                </figure>
                                <div class="joblisting_text">
                                    <div class="job_list_table">
                                        <div class="jobsearch-table-cell">
                                            <h4><a href="#" class="f_500 t_color3"><?php echo $job->name; ?></a></h4>
                                            <ul class="list-unstyled">
                                                <li class="<?php echo ($count%3=='0') ? 'gold_color' : (($count%2=='0') ? 'g_color' : 'p_color');?>"><?php echo $job->type; ?></li>
                                                <li>Experience 
                                                    <?php 
                                                    $expFrom = $job->experience_year_from;
                                                    $expTo   = $job->experience_year_to;
                                                    if($job->experience_months_from>0){
                                                        $expFrom = $expFrom.'.'.$job->experience_months_from;
                                                    }

                                                    if($job->experience_months_to>0){
                                                        $expTo = $expTo.'.'.$job->experience_months_to;
                                                    } 
                                                    echo $expFrom.'-'.$expTo; ?> Years   
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="jobsearch-table-cell">
                                            <div class="jobsearch-job-userlist">
                                                <a href="<?=base_url('job-apply/'.$job->id);?>" class="apply_btn">Apply Now</a>  
                                                <!--<div class="like-btn">-->
                                                <!--    <a href="javascript:void(0);" class="shortlist"> <i class="ti-heart"></i> </a>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php $count++; } } else { ?>
                        <div class="item del new">
                            <p> No Record Found</p>
                        </div>
                       <?php } ?>
                        
                       
                      
                    </div>
                  
                </div>
            </div>
        </section>


<section class="seo_call_to_action_area sec_pad-30" style="margin-top: 100px">
            <div class="container">
                <div class="seo_call_action_text">
                    <h2>Request quote <br><small>Our representative will call you back within 24 hrs.</small></h2>

                    <a href="#" class="about_btn">Get a free Estimate</a>
                </div>
            </div>
        </section>

       