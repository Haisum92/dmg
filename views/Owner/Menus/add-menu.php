<?php $this->load->view('Owner/Areas/header');?>
<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar dark-color">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<h1>DMG</h1>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content main-top-nav-layout">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-main-navigation" data-toggle="collapse" data-target="#top-main-navigation">
							<i class="fa fa-bars"></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
						
						<!-- Begin button sidebar right toggle -->
						<div class="btn-collapse-sidebar-right">
							<i class="fa fa-bullhorn"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button sidebar right toggle -->
						
						<!-- Begin button nav toggle -->
						<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
							<i class="fa fa-plus icon-plus"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button nav toggle -->
						
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right">
							<li class="dropdown">
							  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $this->config->item('base_url_assets')?>img/avatar/avatar.jpg" class="avatar img-circle" alt="Avatar">
								Hi, <strong>Paris Hawker</strong>
							  </a>
							  <ul class="dropdown-menu square info margin-list-rounded with-triangle">
								<li><a href="#fakelink">Account setting</a></li>
								<li><a href="#fakelink">Payment setting</a></li>
								<li><a href="#fakelink">Change password</a></li>
								<li><a href="#fakelink">My public profile</a></li>
								<li class="divider"></li>
								<li><a href="lock-screen.html">Lock screen</a></li>
								<li><a href="<?php echo base_url('destroy.me');?>">Log out</a></li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class="collapse navbar-collapse" id="main-fixed-nav">
							
							<ul class="nav navbar-nav navbar-left">
								<!-- Begin nav notification -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
										<span class="badge badge-danger icon-count">7</span>
										<i class="fa fa-bell"></i>
									</a>
									<ul class="dropdown-menu square with-triangle">
										<li>
											<div class="nav-dropdown-heading">
											Notifications
											</div><!-- /.nav-dropdown-heading -->
											<div class="nav-dropdown-content scroll-nav-dropdown">
												<ul>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Thomas White</strong> posted on your profile page
														<span class="small-caps">17 seconds ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Doina Slaivici</strong> uploaded photo
														<span class="small-caps">10 minutes ago</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Harry Nichols</strong> commented on your post
														<span class="small-caps">40 minutes ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Mihaela Cihac</strong> send you a message
														<span class="small-caps">2 hours ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Harold Chavez</strong> change his avatar
														<span class="small-caps">Yesterday</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Elizabeth Owens</strong> posted on your profile page
														<span class="small-caps">Yesterday</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Frank Oliver</strong> commented on your post
														<span class="small-caps">A week ago</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Mya Weastell</strong> send you a message
														<span class="small-caps">April 15, 2014</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Carl Rodriguez</strong> joined your weekend party
														<span class="small-caps">April 01, 2014</span>
													</a></li>
												</ul>
											</div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
											<button class="btn btn-primary btn-square btn-block">See all notifications</button>
										</li>
									</ul>
								</li>
								<!-- End nav notification -->
							</ul>
						</div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			<?php $this->load->view('owner/common/top-navigation');?>
			
			
			<!-- BEGIN SIDEBAR RIGHT HEADING -->
			<div class="sidebar-right-heading">
				<ul class="nav nav-tabs square nav-justified">
				  <li class="active"><a href="#online-user-sidebar" data-toggle="tab"><i class="fa fa-comments"></i></a></li>
				  <li><a href="#notification-sidebar" data-toggle="tab"><i class="fa fa-bell"></i></a></li>
				  <li><a href="#task-sidebar" data-toggle="tab"><i class="fa fa-tasks"></i></a></li>
				  <li><a href="#setting-sidebar" data-toggle="tab"><i class="fa fa-cogs"></i></a></li>
				</ul>
			</div><!-- /.sidebar-right-heading -->
			<!-- END SIDEBAR RIGHT HEADING -->
			
			
			
			<!-- BEGIN SIDEBAR RIGHT -->
			<div class="sidebar-right sidebar-nicescroller">
				<div class="tab-content">
				  <div class="tab-pane fade in active" id="online-user-sidebar">
					<ul class="sidebar-menu online-user">
						<li class="static">ONLINE USERS</li>
						<li><a href="#fakelink">
							<span class="user-status success"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-mobile-phone device-status"></i>
							Thomas White 
							<span class="small-caps">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status success"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							Doina Slaivici
							<span class="small-caps">Duis autem vel eum iriure dolor in hendrerit in </span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status success"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-android device-status"></i>
							Harry Nichols
							<span class="small-caps">I think so</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status success"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-mobile-phone device-status"></i>
							Mihaela Cihac
							<span class="small-caps">Yes, I'll be waiting</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status success"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-apple device-status"></i>
							Harold Chavez
							<span class="small-caps">Thank you!</span>
						</a></li>
						
						<li class="static">IDLE USERS</li>
						<li><a href="#fakelink">
							<span class="user-status warning"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-windows device-status"></i>
							Elizabeth Owens
							<span class="small-caps">2 hours</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status warning"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-apple device-status"></i>
							Frank Oliver
							<span class="small-caps">4 hours</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status warning"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							Mya Weastell
							<span class="small-caps">15 minutes</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status warning"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-mobile-phone device-status"></i>
							Carl Rodriguez
							<span class="small-caps">20 hours</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status warning"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<i class="fa fa-mobile-phone device-status"></i>
							Nikita Carter
							<span class="small-caps">2 minutes</span>
						</a></li>
						
						<li class="static">OFFLINE USERS</li>
						<li><a href="#fakelink">
							<span class="user-status danger"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							Craig Dixon
							<span class="small-caps">Last seen 2 hours ago</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status danger"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							Mikayla King
							<span class="small-caps">Last seen yesterday</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status danger"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							Richard Dixon
							<span class="small-caps">Last seen Feb 20, 2014 05:45:50</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status danger"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							Brenda Fuller
							<span class="small-caps">Last seen Feb 15, 2014 11:35:50</span>
						</a></li>
						<li><a href="#fakelink">
							<span class="user-status danger"></span>
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							Ryan Ortega
							<span class="small-caps">Last seen Jan 20, 2014 03:45:50</span>
						</a></li>
					</ul>
				  </div>
				  <div class="tab-pane fade" id="notification-sidebar">
					<ul class="sidebar-menu sidebar-notification">
						<li class="static">TODAY</li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Karen Wallace" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Posted something on your profile page</span>
							<span class="small-caps">17 seconds ago</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Phillip Lucas" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Uploaded a photo</span>
							<span class="small-caps">2 hours ago</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Sandra Myers" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Commented on your post</span>
							<span class="small-caps">5 hours ago</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Charles Guerrero" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Send you a message</span>
							<span class="small-caps">17 hours ago</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Maria Simpson" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Change her avatar</span>
							<span class="small-caps">20 hours ago</span>
						</a></li>
						
						<li class="static">YESTERDAY</li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Jason Crawford" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Posted something on your profile page</span>
							<span class="small-caps">Yesterday 10:45:12</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Cynthia Mendez" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Uploaded a photo</span>
							<span class="small-caps">Yesterday 08:00:05</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Peter Ramirez" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Commented on your post</span>
							<span class="small-caps">Yesterday 07:49:08</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Jessica Gutierrez" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Send you a message</span>
							<span class="small-caps">Yesterday 07:35:19</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="Ryan Ortega" data-placement="left">
							<img src="assets/img/avatar/avatar.jpg" class="ava-sidebar img-circle" alt="Avatar">
							<span class="activity">Change her avatar</span>
							<span class="small-caps">Yesterday 06:00:00</span>
						</a></li>
						
						<li class="static text-center"><button class="btn btn-primary btn-sm">See all notifications</button></li>
					</ul>
				  </div>
				  <div class="tab-pane fade" id="task-sidebar">
					<ul class="sidebar-menu sidebar-task">
						<li class="static">UNCOMPLETED</li>
						<li><a href="#fakelink" data-toggle="tooltip" title="in progress" data-placement="left">
							<i class="fa fa-clock-o icon-task-sidebar progress"></i>
							Creating documentation
							<span class="small-caps">Deadline : Next week</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="uncompleted" data-placement="left">
							<i class="fa fa-exclamation-circle icon-task-sidebar uncompleted"></i>
							Eating sand
							<span class="small-caps">Deadline : 2 hours ago</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="uncompleted" data-placement="left">
							<i class="fa fa-exclamation-circle icon-task-sidebar uncompleted"></i>
							Sending payment
							<span class="small-caps">Deadline : 2 seconds ago</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="in progress" data-placement="left">
							<i class="fa fa-clock-o icon-task-sidebar progress"></i>
							Uploading new version
							<span class="small-caps">Deadline : Tomorrow</span>
						</a></li>
						
						<li class="static">COMPLETED</li>
						<li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
							<i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
							Drinking coffee
							<span class="small-caps">Completed : 10 hours ago</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
							<i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
							Walking to nowhere
							<span class="small-caps">Completed : Yesterday</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
							<i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
							Sleeping under bridge
							<span class="small-caps">Completed : Feb 10 2014</span>
						</a></li>
						<li><a href="#fakelink" data-toggle="tooltip" title="completed" data-placement="left">
							<i class="fa fa-check-circle-o icon-task-sidebar completed"></i>
							Buying some cigarettes
							<span class="small-caps">Completed : Jan 15 2014</span>
						</a></li>
						
						<li class="static text-center"><button class="btn btn-success btn-sm">See all tasks</button></li>
					</ul>
				  </div><!-- /#task-sidebar -->
				  <div class="tab-pane fade" id="setting-sidebar">
					<ul class="sidebar-menu">
						<li class="static">ACCOUNT SETTING</li>
						<li class="text-content">
							<div class="switch">
								<div class="onoffswitch blank">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onlinestatus" checked>
									<label class="onoffswitch-label" for="onlinestatus">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
							Online status
						</li>
						<li class="text-content">
							<div class="switch">
								<div class="onoffswitch blank">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="offlinecontact" checked>
									<label class="onoffswitch-label" for="offlinecontact">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
							Show offline contact
						</li>
						<li class="text-content">
							<div class="switch">
								<div class="onoffswitch blank">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="invisiblemode">
									<label class="onoffswitch-label" for="invisiblemode">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
							Invisible mode
						</li>
						<li class="text-content">
							<div class="switch">
								<div class="onoffswitch blank">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="personalstatus" checked>
									<label class="onoffswitch-label" for="personalstatus">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
							Show my personal status
						</li>
						<li class="text-content">
							<div class="switch">
								<div class="onoffswitch blank">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="deviceicon">
									<label class="onoffswitch-label" for="deviceicon">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
							Show my device icon
						</li>
						<li class="text-content">
							<div class="switch">
								<div class="onoffswitch blank">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="logmessages">
									<label class="onoffswitch-label" for="logmessages">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
							Log all message
						</li>
					</ul>
				  </div><!-- /#setting-sidebar -->
				</div><!-- /.tab-content -->
			</div><!-- /.sidebar-right -->
			<!-- END SIDEBAR RIGHT -->
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content no-left-sidebar">
				<div class="container-fluid">
				
				<!-- Begin page heading -->
					<h1 class="page-heading">Menu Managment <!-- <small>Sub heading here</small> --></h1>
					<!-- End page heading -->
				
					<!-- Begin breadcrumb -->
					<ol class="breadcrumb default square rsaquo sm">
						<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
						<li><a href="<?php echo base_url('owner/branch.all');?>">Menus</a></li>
						<li class="active">Add Menu</li>
					</ol>
					<!-- End breadcrumb -->


					<div class="row">
						<div class="col-sm-12">
							<div class="the-box">
								<h4 class="small-title">Register Menu</h4>
								<?php if(validation_errors())
									  {
									  	echo validation_errors();
									  }
								?>
								<?php if ($this->session->flashdata('success') != ""){?>
                                    <div class="alert alert-success">
                                        <?php echo $this->session->flashdata('success');?>
                                    </div>
                                <?php }?>
                                <?php if ($this->session->flashdata('failure') != ""){?>
                                    <div class="alert alert-danger">
                                        <?php echo $this->session->flashdata('failure');?>
                                    </div>
                                <?php }?>
								<form id="add_branch_form" method="post" name="branch_registration_form" class="form-horizontal" action="register.menu">
									
									<div class="form-group">
										<label class="col-lg-3 control-label">Title</label>
										<div class="col-lg-5">
											<input type="text" class="form-control" name="title" placeholder="xxXXxx" required data-bv-notempty-message="Title is required and cannot be empty" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Status</label>
										<div class="col-lg-5">
											<select data-placeholder="Choose a status..." class="form-control chosen-select" tabindex="4" name="status">
												<option value="">&nbsp;</option>
												<option value="active">Active</option>
												<option value="suspended" disabled="disabled">Suspended</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-9 col-lg-offset-3">
											<button type="submit" name="register_branch" class="btn btn-info">Submit</button>
										</div>
									</div>
								</form>
							</div><!-- /.the-box -->
						</div><!-- /.col-sm-12 -->
						
					</div><!-- /.row -->
				
				</div><!-- /.container-fluid -->
				
				
				
				<!-- BEGIN FOOTER -->
				<footer>
					&copy; <?php echo date('Y');?> - All Rights Reserved.
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->

<?php $this->load->view('Owner/Users/footer');?>	