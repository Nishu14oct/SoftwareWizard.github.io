<?php 
	if(!empty($results->type)){  ?>
        
        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20"><?php echo $results->name; ?></h1>
                    	<ul>
						<li><a href="<?=base_url('/');?>" class="" style="color:#fff;">Home</a><span style="color:#fff;"> &nbsp;/ &nbsp;<?php echo strtolower($results->name); ?></span></li>
					
					</ul>
                  </div>
            </div>
        </section>
        	<?php 
	if($results->type=='services'){  ?>
        <section class="service_details_area sec_pad_80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 pr_70">
                        <div class="job_info">
                            <div class="info_head">
                               <h6 class="f_p f_600 f_size_18 t_color3"> <i class="ti-receipt"></i> Our Services</h6>
                            </div>
                            <div class="info_item">
                                <h6>		<a href="<?=base_url('cms/mobile-apps-development');?>">
										    <img src="https://img.icons8.com/material-sharp/24/000000/today-apps.png"> Mobile Apps Development</a></h6> 
                                </div>
                            <div class="info_item">
                                <h6><a  href="<?=base_url('cms/ios-app-development');?>">
										    <img src="https://img.icons8.com/material-outlined/24/000000/ios-development.png"> IOS App Development</a></h6>
                            </div>
                            <div class="info_item">
                                <h6>	<a href="<?=base_url('cms/blockchain-development');?>">
										    <img src="https://img.icons8.com/wired/24/000000/blockchain-technology.png"> Blockchain Development</a></h6>
                                
                            </div>
                            <div class="info_item">
                                <h6>	<a href="<?=base_url('cms/online-game-development');?>">
										    <img src="https://img.icons8.com/android/24/000000/controller.png"> Online Game Development</a></h6>
                            </div>
                            <div class="info_item">
                                <h6>		<a href="<?=base_url('cms/artificial-intelligence-and-machine-learning');?>">
										    <img src="https://img.icons8.com/windows/24/000000/artificial-intelligence.png">  AI & Machine Learning</a></h6>
                                
                            </div>
                                 <div class="info_item">
                                <h6>
                                    	<a href="<?=base_url('cms/automation');?>">
										    <img src="https://img.icons8.com/material-sharp/24/000000/settings-3--v1.png"> Automation </a>
										    </h6>
                                
                            </div>
                                <div class="info_item">
                                <h6>
                                    	<a href="<?=base_url('cms/web-app-development');?>">
										    <img src="https://img.icons8.com/metro/24/000000/laptop.png"> Web App Development</a>
										    </h6>
                                
                            </div>
                            
                        </div>
                    </div>
               	<?php echo $results->html; ?>
                
                </div>
            </div>
        </section>
       
       
    }
	<?php } else { ?>
		<?php echo $results->html; ?>
	<?php } ?>
<?php } ?>

  <section class="seo_call_to_action_area sec_pad-30">
            <div class="container">
                <div class="seo_call_action_text">
                    <h2>Request quote <br><small>Our representative will call you back within 24 hrs.</small></h2>

                    <a href="<?=base_url('contact');?>" class="about_btn">Get a free Estimate</a>
                </div>
            </div>
        </section>      