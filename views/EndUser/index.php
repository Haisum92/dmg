<?php $this->load->view('EndUser/header');?>

<div class="content">
	<div class="container">
		<h1 class="text-center">Filter</h1>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="filter-wrapper">
					<form action="<?php echo site_url('enduser/menu.all'); ?>" class="web_form" id="filter_form" name="filter_form" role="form" method="post" accept-charset="utf-8">
						<div class="form-group has-feedback lg left-feedback no-label">
							<select data-placeholder="Choose an Area..." class="form-control required" name="area" id="area-select" required><!--  chosen-select -->
								<option value="">Choose an Area...</option>
								<?php 
									if (count($area_list)) {
										foreach ($area_list as $key => $area) { ?>
											<option value="<?php echo $area->a_id; ?>"><?php echo $area->title; ?></option>
										<?php } 
								  	} 
							  	?>
							</select>
						</div>
						<div class="form-group has-feedback lg left-feedback no-label">
							<select data-placeholder="Choose a Branch..." class="form-control required" name="branch" id="branch-select" required><!--  chosen-select -->
								<option value="">Choose a Branch...</option>
								<?php 
									if (count($branch_list)) {
										foreach ($branch_list as $key => $branch) { ?>
											<option value="<?php echo $branch->title; ?>"><?php echo $branch->title; ?></option>
										<?php } 
								  	} 
							  	?>
							</select>
							<i style="display: none;" class="fa fa-spin fa-spinner"></i>
						</div>
						<div class="form-group">
							<button type="submit" name="form_submit" value="login_form" class="btn btn-warning btn-lg btn-perspective btn-block">DONE</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</div>

<?php $this->load->view('EndUser/footer');?>	