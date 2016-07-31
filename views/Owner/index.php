<?php $this->load->view('Owner/header');?>
		
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
						<a href="<?php echo base_url();?>"><img src="assets/img/sentir-logo-primary.png" alt="Sentir logo"></a>
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
								<img src="assets/img/avatar/avatar.jpg" class="avatar img-circle" alt="Avatar">
								Hi, <strong>Paris Hawker</strong>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
								<li><a href="#fakelink">Account setting</a></li>
								<li><a href="#fakelink">Payment setting</a></li>
								<li><a href="#fakelink">Change password</a></li>
								<li><a href="#fakelink">My public profile</a></li>
								<li class="divider"></li>
								<li><a href="lock-screen.html">Lock screen</a></li>
								<li><a href="destroy.me">Log out</a></li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class="collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</form>
							<!-- End nav search form -->
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
								<!-- Begin nav task -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
										<span class="badge badge-warning icon-count">3</span>
										<i class="fa fa-tasks"></i>
									</a>
									<ul class="dropdown-menu square margin-list-rounded with-triangle">
										<li>
											<div class="nav-dropdown-heading">
											Tasks
											</div><!-- /.nav-dropdown-heading -->
											<div class="nav-dropdown-content scroll-nav-dropdown">
												<ul>
													<li class="unread"><a href="#fakelink">
														<i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
														Creating documentation
														<span class="small-caps">Completed : Yesterday</span>
													</a></li>
													<li><a href="#fakelink">
														<i class="fa fa-clock-o absolute-left-content icon-task progress"></i>
														Eating sands
														<span class="small-caps">Deadline : Tomorrow</span>
													</a></li>
													<li><a href="#fakelink">
														<i class="fa fa-clock-o absolute-left-content icon-task progress"></i>
														Sending payment
														<span class="small-caps">Deadline : Next week</span>
													</a></li>
													<li><a href="#fakelink">
														<i class="fa fa-exclamation-circle absolute-left-content icon-task uncompleted"></i>
														Uploading new version
														<span class="small-caps">Deadline: 2 seconds ago</span>
													</a></li>
													<li><a href="#fakelink">
														<i class="fa fa-exclamation-circle absolute-left-content icon-task uncompleted"></i>
														Drinking coffee
														<span class="small-caps">Deadline : 2 hours ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
														Walking to nowhere
														<span class="small-caps">Completed : over a year ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
														Sleeping under bridge
														<span class="small-caps">Completed : Dec 31, 2013</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<i class="fa fa-check-circle-o absolute-left-content icon-task completed"></i>
														Buying some cigarettes
														<span class="small-caps">Completed : 2 days ago</span>
													</a></li>
												</ul>
											</div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
											<button class="btn btn-primary btn-square btn-block">See all notifications</button>
										</li>
									</ul>
								</li>
								<!-- End nav task -->
								<!-- Begin nav message -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
										<span class="badge badge-success icon-count">9</span>
										<i class="fa fa-envelope"></i>
									</a>
									<ul class="dropdown-menu square margin-list-rounded with-triangle">
										<li>
											<div class="nav-dropdown-heading">
											Messages
											</div><!-- /.nav-dropdown-heading -->
											<div class="nav-dropdown-content scroll-nav-dropdown">
												<ul>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit
														<span class="small-caps">17 seconds ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
														<span class="small-caps">10 minutes ago</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														I think so
														<span class="small-caps">40 minutes ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														Yes, I'll be waiting
														<span class="small-caps">2 hours ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														Thank you!
														<span class="small-caps">Yesterday</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														No problem! I will never remember that
														<span class="small-caps">Yesterday</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														Tak gepuk ndasmu sisan lho dab!
														<span class="small-caps">A week ago</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														Sorry bro, aku or atau sing jenenge ngono kui
														<span class="small-caps">April 15, 2014</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														Will you send me an invitation for your weeding party?
														<span class="small-caps">April 01, 2014</span>
													</a></li>
												</ul>
											</div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
											<button class="btn btn-primary btn-square btn-block">See all message</button>
										</li>
									</ul>
								</li>
								<!-- End nav message -->
								<!-- Begin nav friend requuest -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
										<span class="badge badge-info icon-count">2</span>
										<i class="fa fa-users"></i>
									</a>
									<ul class="dropdown-menu square margin-list-rounded with-triangle">
										<li>
											<div class="nav-dropdown-heading">
											Friend requests
											</div><!-- /.nav-dropdown-heading -->
											<div class="nav-dropdown-content static-list scroll-nav-dropdown">
												<ul>
													<li>
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<div class="row">
															<div class="col-xs-6">
																<strong>Craig Dixon</strong>
																<span class="small-caps">2 murtual friends</span>
															</div>
															<div class="col-xs-6 text-right btn-action">
																<button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
															</div><!-- /.col-xs-5 text-right btn-cation -->
														</div><!-- /.row -->
													</li>
													<li>
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<div class="row">
															<div class="col-xs-6">
																<strong>Mikayla King</strong>
																<span class="small-caps">20 murtual friends</span>
															</div>
															<div class="col-xs-6 text-right btn-action">
																<button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
															</div><!-- /.col-xs-5 text-right btn-cation -->
														</div><!-- /.row -->
													</li>
													<li>
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<div class="row">
															<div class="col-xs-6">
																<strong>Richard Dixon</strong>
																<span class="small-caps">1 murtual friend</span>
															</div>
															<div class="col-xs-6 text-right btn-action">
																<button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
															</div><!-- /.col-xs-5 text-right btn-cation -->
														</div><!-- /.row -->
													</li>
													<li>
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<div class="row">
															<div class="col-xs-6">
																<strong>Brenda Fuller</strong>
																<span class="small-caps">8 murtual friends</span>
															</div>
															<div class="col-xs-6 text-right btn-action">
																<button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
															</div><!-- /.col-xs-5 text-right btn-cation -->
														</div><!-- /.row -->
													</li>
													<li>
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<div class="row">
															<div class="col-xs-6">
																<strong>Ryan Ortega</strong>
																<span class="small-caps">122 murtual friends</span>
															</div>
															<div class="col-xs-6 text-right btn-action">
																<button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
															</div><!-- /.col-xs-5 text-right btn-cation -->
														</div><!-- /.row -->
													</li>
													<li>
														<img src="assets/img/avatar/avatar.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<div class="row">
															<div class="col-xs-6">
																<strong>Jessica Gutierrez</strong>
																<span class="small-caps">45 murtual friends</span>
															</div>
															<div class="col-xs-6 text-right btn-action">
																<button class="btn btn-success btn-xs">Accept</button><button class="btn btn-danger btn-xs">Ignore</button>
															</div><!-- /.col-xs-5 text-right btn-cation -->
														</div><!-- /.row -->
													</li>
												</ul>
											</div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
											<button class="btn btn-primary btn-square btn-block">See all request</button>
										</li>
									</ul>
								</li>
								<!-- End nav friend requuest -->
							</ul>
						</div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN TOP MAIN NAVIGATION -->
			<div class="top-main-navigation">
				<nav class="navbar square navbar-default no-border" role="navigation">
				  <div class="container-fluid">

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-main-navigation">
					  <ul class="nav navbar-nav">
						<li class="active">
						  <a href="<?php echo base_url('owner');?>">
							<span class="hidden-xs"><i class="fa fa-dashboard"></i></span>
							<span class="visible-xs">Dashboard</span></a>
						  </a>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
							  <span class="hidden-sm hidden-md">Users</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="<?php echo base_url('owner/register.user');?>">Add User</a></li>
							<li><a href="<?php echo base_url('owner/users.all');?>">View All</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-folder"></i></span>
							  <span class="hidden-sm hidden-md">Elements</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="element-typography.html">Typography</a></li>
							<li><a href="element-form.html">Form element</a></li>
							<li><a href="element-form-example.html">Form example</a></li>
							<li><a href="element-wyswyg.html">Form WYSWYG</a></li>
							<li><a href="element-validation.html">Form validation</a></li>
							<li><a href="element-button.html">Button</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-folder-open"></i></span>
							  <span class="hidden-sm hidden-md">More elements</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="element-icon.html">Icons <span class="badge badge-info span-sidebar">3</span></a></li>
							<li><a href="element-box-panel.html">Box &amp; panel</a></li>
							<li><a href="element-nav-dropdown.html">Nav &amp; dropdown</a></li>
							<li><a href="element-breadcrumb-pagination.html">Breadcrumb &amp; pagination</a></li>
							<li><a href="element-thumbnail-jumbotron.html">Jumbotron &amp; thumbnail</a></li>
							<li><a href="element-alert-progress-bar.html">Alert &amp; progress</a></li>
							<li><a href="element-list-media.html">List group &amp; media object</a></li>
							<li><a href="element-collapse.html">Collapse</a></li>
							<li><a href="element-grid-masonry.html">Grid &amp; masonry</a></li>
							<li><a href="element-masonry-js.html">Masonry JS</a></li>
							<li><a href="element-toastr.html">Toastr notifications</a></li>
							<li><a href="element-carousel.html">Carousel</a></li>
							<li><a href="element-calendar.html">Calendar</a></li>
							<li><a href="element-extra.html">Extra elements</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-table"></i></span>
							  <span class="hidden-sm hidden-md">Tables</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="table-static.html">Static table</a></li>
							<li><a href="table-color.html">Table color</a></li>
							<li><a href="table-datatable.html">Jquery datatable</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-bar-chart-o"></i></span>
							  <span class="hidden-sm hidden-md">Chart</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="chart-morris.html">Morris chart</a></li>
							<li><a href="chart-c3.html">C3 chart</a></li>
							<li><a href="chart-flot.html">Flot chart</a></li>
							<li><a href="chart-easy-knob.html">Easy pie chart &amp; knob</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-envelope"></i></span>
							  <span class="hidden-sm hidden-md">Mail</span><span class="hidden-sm hidden-md label label-danger span-sidebar">HOT</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="mail-inbox.html">Inbox <span class="badge badge-success span-sidebar">6</span></a></li>
							<li><a href="mail-send.html">Sent mail</a></li>
							<li><a href="mail-new.html">New mail</a></li>
							<li><a href="mail-contact.html">Mail contact</a></li>
							<li><a href="mail-read.html">Read mail</a></li>
							<li><a href="mail-reply.html">Reply mail</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-shopping-cart"></i></span>
							  <span class="hidden-sm hidden-md">Store</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="store-product-list.html">Product list</a></li>
							<li><a href="store-product-column.html">Product column</a></li>
							<li><a href="store-product-masonry.html">Product masonry</a></li>
							<li><a href="store-product-detail.html">Product detail</a></li>
							<li><a href="store-shopping-cart.html">Shopping cart</a></li>
							<li><a href="store-checkout.html">Checkout</a></li>
							<li><a href="store-new-product.html">Add new product</a></li>
							<li><a href="store-orderlist.html">Order list</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-home"></i></span>
							  <span class="hidden-sm hidden-md">Real estate</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="real-estate-property-list.html">Property list</a></li>
							<li><a href="real-estate-property-column.html">Property column</a></li>
							<li><a href="real-estate-property-masonry.html">Property masonry</a></li>
							<li><a href="real-estate-property-detail.html">Property detail</a></li>
							<li><a href="real-estate-property-search.html">Search property</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-comment"></i></span>
							  <span class="hidden-sm hidden-md">Blog</span><span class="hidden-sm hidden-md label label-success span-sidebar">TOP</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="blog-list.html">Blog list</a></li>
							<li><a href="blog-column.html">Blog column</a></li>
							<li><a href="blog-masonry.html">Blog masonry</a></li>
							<li><a href="blog-detail.html">Blog detail</a></li>
							<li><a href="blog-home.html">Featured home</a></li>
							<li><a href="blog-new.html">Add new blog</a></li>
							<li><a href="blog-comments.html">Comments</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-users"></i></span>
							  <span class="hidden-sm hidden-md">Social</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="social-home.html">Home activity</a></li>
							<li><a href="social-my-profile.html">My profile</a></li>
							<li><a href="social-friendlist.html">Friend list <span class="badge badge-info span-sidebar">5</span></a></li>
							<li><a href="social-timeline.html">Timeline</a></li>
							<li><a href="social-photos.html">Photos</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-heart"></i></span>
							  <span class="hidden-sm hidden-md">Example</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="login.html">Login</a></li>
							<li><a href="lock-screen.html">Lock screen</a></li>
							<li><a href="forgot-password.html">Forgot password</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="example-pricing-table.html">Pricing table</a></li>
							<li><a href="example-invoice.html">Invoice</a></li>
							<li><a href="example-faq.html">FAQ</a></li>
							<li><a href="example-search.html">Search page</a></li>
							<li><a href="example-media-library.html">Media library<span class="label label-danger span-sidebar">NEW</span></a></li>
							
							<li><a href="404.html">404</a></li>
							<li><a href="blank.html">Blank page</a></li>
						  </ul>
						</li>
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				<!-- End inverse navbar -->
			</div><!-- /.top-main-navigation -->
			<!-- END TOP MAIN NAVIGATION -->
			
			
			
			
			
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
				<h1 class="page-heading">DASHBOARD <!-- <small>Sub heading here</small> --></h1>
				<!-- End page heading -->
				
					<!-- BEGIN EXAMPLE ALERT -->
					<div class="alert alert-warning alert-bold-border fade in alert-dismissable">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <p><strong>Welcome!</strong></p>
					  <p class="text-muted">Welcome to the wonderful world of directory managment. With advanced features you can play with any type of data. Hope you enjoy the experience <i class="fa fa-smile-o"></i></p>
					</div>
					<!-- END EXAMPLE ALERT -->
				
					
					<!-- BEGIN SiTE INFORMATIONS -->
					<div class="row">
						<div class="col-sm-3">
							<div class="the-box no-border bg-success tiles-information">
								<i class="fa fa-users icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>NO OF POSTS</p>
									<h1 class="bolded">12,254K</h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-success -->
									</div><!-- /.progress .no-rounded -->
									<p><small>Better than yesterday ( 7,5% )</small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-primary tiles-information">
								<i class="fa fa-shopping-cart icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>TOTAL ADMINS</p>
									<h1 class="bolded">5</h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-primary -->
									</div><!-- /.progress .no-rounded -->
									<p><small>Same as yesterday</small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-danger tiles-information">
								<i class="fa fa-comments icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>TODAY LOGS</p>
									<h1 class="bolded">12</h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-danger -->
									</div><!-- /.progress .no-rounded -->
									<p><small>Less than yesterday ( <span class="text-danger">-7,5%</span> )</small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-warning tiles-information">
								<i class="fa fa-money icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>TOTAL IMAGES</p>
									<h1 class="bolded">10,241</h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-warning -->
									</div><!-- /.progress .no-rounded -->
									<p><small>Better than yesterday ( 2,5% )</small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
					</div><!-- /.row -->
					<!-- END SITE INFORMATIONS -->			
					
					<!-- BEGIN CAROUSEL ITEM -->
					<div class="the-box no-border">
					<h4 class="small-heading more-margin-bottom text-center">LASTES POSTS</h4>
						<div id="store-item-carousel-3" class="owl-carousel shop-carousel">
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
							<div class="item">
								<div class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object sm" src="assets/img/shop/img-shop.jpg" alt="Image">
									</a>
									<div class="media-body">
									  <h4 class="media-heading"><a href="#fakelink">Product name here</a></h4>
									  <p class="brand">BRAND NAME</p>
									  <p class="price text-danger"><strong>&#36;50.00</strong></p>
									</div>
								</div>
							</div><!-- /.item -->
						</div><!-- /#store-item-carousel-1 -->
					</div><!-- /.the-box .no-border -->
					<!-- END CAROUSEL ITEM -->
					
					
					
					<div class="row">
						<div class="col-sm-8">
							
							<!-- BEGIN ITEM SHOWCASE -->
							<div class="the-box full no-border item-lg">
								<div id="store-item-carousel-2" class="owl-carousel">
								  <div class="item full"><img src="assets/img/photo/large/img.jpg" class="item-image" alt="Image"></div>
								  <div class="item full"><img src="assets/img/photo/large/img.jpg" class="item-image" alt="Image"></div>
								</div>
								<div class="item-des">
									<div class="the-box transparent no-margin">
									<h4 class="small-heading more-margin-bottom">FEATURED PRODUCT</h4>
										<h1><a href="#fakelink">You product name here</a></h1>
										<h4 class="bolded">&#36;220.00</h4>
										<p class="text-muted item-des-text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</p>
										<p>
											<i class="fa fa-star text-warning"></i>
											<i class="fa fa-star text-warning"></i>
											<i class="fa fa-star text-warning"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</p>
										<button class="btn btn-success btn-block btn-add">Add to cart</button>
									</div><!-- /.the-box .transparent .no-margin -->
								</div><!-- /.item-des -->
							</div><!-- /.the-box .full -->
							<!-- END ITEM SHOWCASE -->
							
						</div><!-- /.col-sm-8 -->
						<div class="col-sm-4">
							
							<!-- BEGIN REMINDER WIDGET -->
							<div class="the-box no-border full">
								<div class="the-box bg-dark no-border no-margin">
									<p class="text-center"><i class="fa fa-clock-o icon-lg"></i></p>
									<h4 class="bolded less-distance text-danger text-center">My personal reminder</h4>
								</div><!-- /.the-box no-border no-margin -->
								<div class="the-box no-border bg-danger no-margin">
								<h4>Next week agenda</h4>
								<hr />
									<div id="tiles-slide-1" class="owl-carousel my-reminder">
									  <div class="item full text-left">
										<p>
										Eating some sand and listening alay songs in the small hole under bridge
										</p>
										<p class="small">Wrote about a month ago</p>
									  </div>
									  <div class="item full">
										<p>
										Go to school again, do homework again, meet some best friends again
										</p>
										<p class="small">Wrote about a week ago</p>
									  </div>
									  <div class="item full">
										<p>
										Finishing all my works, time to vacation, spending time with family and friends
										</p>
										<p class="small">Wrote 2 days ago</p>
									  </div>
									</div><!-- /#tiles-slide-1 -->
								</div><!-- /.the-box no-border bg-danger no-margin -->
							</div><!-- /.the-box .no-border .full -->
							<!-- END REMINDER WIDGET -->
							
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
				
				</div><!-- /.container-fluid -->
				
				
				
				<!-- BEGIN FOOTER -->
				<footer>
					&copy; <?php echo date('Y');?> <a href="#fakelink">Directory Managment</a><br />
					Design by <a href="mailto:usman.haisum@gmail.com" target="_blank">Haisum</a>.
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		<!-- BEGIN BACK TO TOP BUTTON -->
		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- END BACK TO TOP -->

<?php $this->load->view('Owner/footer');?>	