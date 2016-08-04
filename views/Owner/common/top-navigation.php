<!-- BEGIN TOP MAIN NAVIGATION -->
			<div class="top-main-navigation">
				<nav class="navbar square navbar-default no-border" role="navigation">
				  <div class="container-fluid">

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-main-navigation">
					  <ul class="nav navbar-nav">
						<li class="<?php if(strpos($active_nav,'dashboard') !== false){?>active<?php }?>">
						  <a href="<?php echo base_url('owner');?>">
							<span class="hidden-xs"><i class="fa fa-dashboard"></i></span>
							<span class="visible-xs">Dashboard</span></a>
						  </a>
						</li>
						
						<li class="dropdown <?php if(strpos($active_nav,'user') !== false){?>active<?php }?>">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-flask"></i></span>
							  <span class="hidden-sm hidden-md">Users</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li <?php if(strpos($active_nav,'add_user') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/register.user');?>">Add User</a></li>
							<li <?php if(strpos($active_nav,'user_list') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/users.all');?>">View All</a></li>
						  </ul>
						</li>
						
						<li class="dropdown <?php if(strpos($active_nav,'area') !== false){?>active<?php }?>">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-folder"></i></span>
							  <span class="hidden-sm hidden-md">Areas</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li <?php if(strpos($active_nav,'add_area') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/register.area');?>">Add Area</a></li>
							<li <?php if(strpos($active_nav,'area_list') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/area.all');?>">View All</a></li>
						  </ul>
						</li>

						<li class="dropdown <?php if(strpos($active_nav,'branch') !== false){?>active<?php }?>">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-folder"></i></span>
							  <span class="hidden-sm hidden-md">Branches</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li <?php if(strpos($active_nav,'add_branch') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/register.branch');?>">Add Branch</a></li>
							<li <?php if(strpos($active_nav,'branch_list') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/branch.all');?>">View All</a></li>
						  </ul>
						</li>

						<li class="dropdown <?php if( (strpos($active_nav,'menu') !== false)){?>active<?php }?>">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-folder"></i></span>
							  <span class="hidden-sm hidden-md">Menu</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li <?php if(strpos($active_nav,'add_menu') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/register.menu');?>">Add Menu</a></li>
							<!-- <li <?php if(strpos($active_nav,'add_menu_section') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/register.menu.section');?>">Assign Menu Sections</a></li> -->
							<li <?php if(strpos($active_nav,'menu_list') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/menu.all');?>">View All</a></li>
						  </ul>
						</li>

						<li class="dropdown <?php if( (strpos($active_nav,'section') !== false)  && $active_nav != 'add_menu_section'){?>active<?php }?>">
						  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-folder"></i></span>
							  <span class="hidden-sm hidden-md">Sections</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li <?php if(strpos($active_nav,'add_section') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/register.section');?>">Add section</a></li>
							<li <?php if(strpos($active_nav,'section_list') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/section.all');?>">View All</a></li>
						  </ul>
						</li>

						<li class="dropdown <?php if( (strpos($active_nav,'post') !== false)){?>active<?php }?>">
						  <a href="posts.all" class="dropdown-toggle" data-toggle="dropdown">
							  <span class="visible-sm visible-md"><i class="fa fa-folder"></i></span>
							  <span class="hidden-sm hidden-md">Posts</span>
						  </a>
						  <ul class="dropdown-menu square margin-list-rounded with-triangle">
							<li <?php if(strpos($active_nav,'add_post') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/register.post');?>">Add Posts</a></li>
							<li <?php if(strpos($active_nav,'post_list') !== false){?>class="active"<?php }?>><a href="<?php echo base_url('owner/posts.all');?>">View All</a></li>
						  </ul>
						</li>
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
				<!-- End inverse navbar -->
			</div><!-- /.top-main-navigation -->
			<!-- END TOP MAIN NAVIGATION -->