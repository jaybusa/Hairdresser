        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<div class="row page-links">
					<div class="col-sm-6 text-left">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url(); ?>car-types"><?php echo lang('car_types'); ?></a></li>
							<li><?php echo lang('edit'); ?></li>
						</ul>
					</div>
					<div class="col-sm-6 text-right">
						<a href="<?php echo base_url(); ?>car-types" class="btn btn-default btn-sm"><i class="fa fa-list"></i> 
							<?php echo lang('list_car_types'); ?>
						</a>
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1><small><?php echo lang('edit'); ?></small> <?php echo lang('car_type'); ?></h1>
                    </div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<?php if(!empty($alertMsg)) { echo $alertMsg; } ?>
					</div>
				</div>
				<form action="#" method="post" enctype="multipart/form-data">
				<div class="row form vertical-form">
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="name"><?php echo lang('name'); ?> <span class="required">*</span></label>
							<input type="text" class="form-control" name="name" placeholder="<?php echo lang('name'); ?>" value="<?php echo $car_type_data->name; ?>" required />
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="status"><?php echo lang('status'); ?></label>
							<label class="switch">
							  <input type="checkbox" name="status" value="1" <?php if($car_type_data->status==1) echo "checked"; ?>>
							  <div class="slider round"></div>
							</label>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="picture"><?php echo lang('picture'); ?> <span class="required">*</span></label>
							<?php if($car_type_data->picture!=NULL) { ?>
								<img src="<?php echo base_url(); ?>uploads/car_types/<?php echo $car_type_data->picture;?>" style="max-width:120px;" />
							<?php } else { ?>
								Not Image Uploaded
							<?php } ?>
							<input type="file" class="form-control" name="picture" />
						</div>
					</div>
					<div class="col-md-12 submit text-center">
						<input type="submit" class="btn btn-primary" name="edit_car_type_btn" value="<?php echo lang('save'); ?>" />
					</div>
                </div>
				</form>
				<hr />
				<div class="row instructions">
					<div class="col-sm-12">
						<ul>
							<li>* <?php echo lang('required_fields'); ?>
						</ul>
					</div>
				</div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->