<!-- BEGIN TOP MAIN NAVIGATION -->
			<div class="top-main-navigation">
				<nav class="navbar square navbar-default no-border" role="navigation">
				  <div class="container-fluid">

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-main-navigation">
					  <ul class="nav navbar-nav">
						
						<?php 
							$menu_items = array(
										0 => array(
												'parent_item'		  => array(
												'label'		  => 'Dashboard', 
												'link'		  => base_url('owner'), 
												'class_link'		  => '', 
												'icon'		  => '<span class="hidden-xs"><i class="fa fa-dashboard"></i></span>', 
												'class_label' => 'visible-xs', 
												'class_li' 	  => ''
												)
											), 
										1 => array(
												'parent_item'		  => array(
												'label'		  => 'Users', 
												'link'		  => '#', 
												'class_link'  => 'dropdown-toggle', 
												'icon'		  => '<span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>', 
												'class_label' => 'hidden-sm hidden-md', 
												'class_li' 	  => 'dropdown'
												), 
												'child_items'				=> array(
													'class_ul' => 'dropdown-menu square margin-list-rounded with-triangle', 
													0 => array(
															'label' => 'Add User', 
															'link'	=> base_url('owner/register.user')
														), 
													1 => array(
															'label' => 'View All', 
															'link'	=> base_url('owner/users.all')
														)
												)
											)
										); 
						?>

						<li>
						  <a href="<?php echo base_url('owner');?>">
							<span class="hidden-xs"><i class="fa fa-dashboard"></i></span>
							<span class="visible-xs">Dashboard</span>
						  </a>
						</li>
						
						<li class="dropdown active">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
							  <span class="hidden-sm hidden-md">Users</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li><a href="<?php echo base_url('owner/register.user');?>">Add User</a></li>
							<li class="active"><a href="<?php echo base_url('owner/users.all');?>">View All</a></li>
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