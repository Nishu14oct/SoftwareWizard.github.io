
    <div class="body_wrapper">
        <header class="header_area"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <nav class="navbar navbar-expand-lg menu_one menu_four">
                <div class="container custom_container p0">
                    <a class="navbar-brand" href="#"><!-- img src="<?php echo base_url('img/logo.png')?>" srcset="<?php echo base_url('img/logo2x.png 2x')?>" alt="logo"> -->Software Wizards</a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto menu <?php if(!in_array($this->uri->segment(1), ['','index'])) { echo 'w_menu'; } ?>">
                            <li class="nav-item dropdown submenu mega_menu mega_menu_two <?php if(in_array($this->uri->segment(1), ['','index'])) { echo 'active'; } ?>">
                                <a class="nav-link" href="<?=base_url('index');?>">
                                    Home
                                </a>
                               
                            </li>
                              <li class="nav-item dropdown submenu mega_menu mega_menu_two <?php if($this->uri->segment(1)=='about-us') { echo 'active'; } ?>">
                                <a class="nav-link" href="<?=base_url('about-us');?>">
                                    About us
                                </a>
                               
                            </li>
                          
                            <!--<li class="nav-item dropdown submenu mega_menu <?php if($this->uri->segment(1)=='portfolio') { echo 'active'; } ?>">-->
                            <!--    <a class="nav-link" href="<?=base_url('portfolio');?>" >-->
                            <!--        Portfolio-->
                            <!--    </a>-->
                            <!--</li>-->
                        
                            <!--<li class="nav-item dropdown submenu <?php if($this->uri->segment(1)=='blog') { echo 'active'; } ?>">-->
                            <!--    <a class="nav-link" href="<?=base_url('services');?>">-->
                            <!--        Services-->
                            <!--    </a>-->
                               
                            <!--</li>-->
                               
                          <li class="dropdown submenu nav-item">
                                <a title="Career" href="<?=base_url('services');?>" class="dropdown-toggle nav-link mega_menu <?php if($this->uri->segment(1)=='job-listing') { echo 'active'; } ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Services <span class="arrow_carrot-right"></span> </a>
                                <ul class="dropdown-menu width-half" id="mega-menu-wrapper">
									<!--<li  class="nav-item"> -->
									<!--	<a class="nav-link f-18"   href="<?=base_url('cms/services');?>">All Services</a>-->
									<!--</li> -->
										<li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/artificial-intelligence-and-machine-learning');?>"><img src="https://img.icons8.com/windows/24/000000/artificial-intelligence.png"> Artificial Intelligence and Machine Learning</a>
							     	</li>
									<li  class="nav-item"> 
										<a class="nav-link f-18" href="<?=base_url('cms/mobile-apps-development');?>"><img src="https://img.icons8.com/material-sharp/24/000000/today-apps.png"> Mobile Apps Development</a>
							     	</li>
							     		<li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/blockchain-development');?>"><img src="https://img.icons8.com/wired/24/000000/blockchain-technology.png"> Blockchain Development</a>
							     	</li>
							     			<!-- <li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/iot-development');?>"><img src="https://img.icons8.com/wired/24/000000/blockchain-technology.png"> IOT Development</a>
							     	</li> -->
							     		<li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/ios-app-development');?>"><img src="https://img.icons8.com/material-outlined/24/000000/ios-development.png"> IOS App Development</a>
							     	</li>
							     	
							     		<li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/online-game-development');?>"><img src="https://img.icons8.com/android/24/000000/controller.png"> Online Game Development</a>
							     	</li>
							     	
							     		<li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/automation');?>"><img src="https://img.icons8.com/material-sharp/24/000000/settings-3--v1.png"> Automation </a>
							     	</li>
							     		<li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/web-app-development');?>"><img src="https://img.icons8.com/metro/24/000000/laptop.png"> Web App Development</a>
							     	</li>
							     		<li  class="nav-item">
										<a class="nav-link f-18" href="<?=base_url('cms/deep-learning');?>"><img src="https://img.icons8.com/metro/24/000000/laptop.png"> Deep Learning</a>
							     	</li>
								
								</ul>
                            </li>
                          
                        
                             
                            <!-- <li class="dropdown submenu nav-item">
                                <a title="Career" class="dropdown-toggle nav-link mega_menu <?php if($this->uri->segment(1)=='job-listing') { echo 'active'; } ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Career <span class="arrow_carrot-right"></span> </a>
                                        <ul class=" dropdown-menu">
                                            <li class="nav-item"><a title="Job Listing" class="nav-link" href="<?=base_url('job-listing');?>"><img src="https://img.icons8.com/material-rounded/24/000000/new-job.png"> Job Listing</a></li>
                                            <li class="nav-item"><a title="Job Details" class="nav-link" href="<?=base_url('internship');?>"><img src="https://img.icons8.com/material-sharp/24/000000/training.png"> Internship</a></li>
                                          
                                        </ul>
                                    </li> -->

                        </ul>
                        <a class="btn_get btn_hover" href="<?=base_url('contact');?>">Contact us</a>
                    </div>
                </div>
            </nav>
        </header>