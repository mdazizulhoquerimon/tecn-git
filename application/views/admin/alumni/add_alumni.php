<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <!-- <div class="col-xs-12">
                <h4 class="page-title">Notice</h4>
            </div> -->
            <?php if($success == 1){?>
            <script>
            	alert("New Alumni Successfully added.");
            </script>
        	<?php }?>
        	
            <div class="card-box">
            	<div class="notice-form">
	                <h2 class="text-center">Add New Alumni</h2>
	                <br>
					<?php echo validation_errors(); 
						//$p = ddd;
						//$p = 'bb123';
        				//echo 'hash of '.$p.': '. md5(sha1(md5($p)));
					?>

					<form action="<?php echo base_url();?>admin/insert_alumni" enctype="multipart/form-data" method="post">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Name</label>
		                            <input type="text" name="name" class="form-control" placeholder="Student Name">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Roll</label>
		                            <input type="text" name="roll" class="form-control" placeholder="Roll Number">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
							    <div class="form-group">
			                        <label class="control-label">Department</label>
		                        	<select name="dept" class="form-control">
	                                    <option value="0">-- Select Department --</option>
	                                    <?php 
	                                    foreach ($all_dept as $key => $d) {
	                                    ?>
	                                    <option value="<?php echo $d['id'];?>"><?php echo $d['name'];?></option>}
	                                    <?php
	                                    }
	                                    ?>
	                                </select>
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Phone</label>
		                            <input type="text" name="phone" class="form-control" placeholder="Phone">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Email</label>
		                            <input type="email" name="email" class="form-control" placeholder="Email">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group"> 
                                    <label class="display-block">Gender</label>
                                    <label class="radio-inline" style="margin-top: 10px;margin-bottom: 10px;">
                                        <input type="radio" name="gender" value="1" checked="checked"> Male
                                    </label>
                                    <label class="radio-inline" style="margin-top: 10px;margin-bottom: 10px;">
                                        <input type="radio" name="gender" value="2"> Female
                                    </label>
		                        	<!-- <select name="gender" class="form-control">
	                                    <option value="1">Male</option>
	                                    <option value="2">Female</option>
	                                </select> -->
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Date of Birth</label>
		                            <input type="text" name="dob" class="datepicker form-control" placeholder="dob" autocomplete="off">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">NID</label>
		                            <input type="text" name="nid" class="form-control" placeholder="NID">
			                    </div>
							</div>
							<!-- <div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Image</label>
		                            <input name="image" class="form-control" type="file">
			                    </div>
							</div> -->
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Father's Name</label>
		                            <input type="text" name="father_name" class="form-control" placeholder="Father Name">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Mother's Name</label>
		                            <input type="text" name="mother_name" class="form-control" placeholder="Mother's Name">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Present Address</label>
		                            <input type="text" name="present_addr" class="form-control" placeholder="Present Address">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Permanent Address</label>
		                            <input type="text" name="permanent_addr" class="form-control" placeholder="Permanent Address">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Starting Date</label>
		                            <input type="text" name="starting_date" class="datepicker form-control" placeholder="Starting Date">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">Ending Date</label>
		                            <input type="text" name="ending_date" class="datepicker form-control" placeholder="Ending Date">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
							    <div class="form-group">
			                        <label class="control-label">Studentship</label>
		                        	<select name="is_student" class="form-control">
	                                    <option value="2">Alumni</option>
	                                </select>
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
							    <div class="form-group">
			                        <label class="control-label">Membership Type</label>
		                        	<select name="membership" class="form-control">
	                                    <option value="0">-- Select Membership --</option>
	                                    <?php 
	                                    foreach ($membership_type as $key => $m) {
	                                    ?>
	                                    <option value="<?php echo $m['id'];?>"><?php echo $m['name'];?></option>}
	                                    <?php
	                                    }
	                                    ?>
	                                </select>
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
							    <div class="form-group">
			                        <label class="control-label">Password</label>
		                            <input type="password" name="pass" class="form-control" placeholder="Password">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
							    <div class="form-group">
			                        <label class="control-label">Confirm Password</label>
		                            <input type="password" name="con_pass" class="form-control" placeholder="Confirm Password">
			                    </div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
			                    <div class="form-group">
			                        <label class="control-label">&nbsp;</label>
			                    	<button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
			                    </div>
							</div>
						</div>
					</form>
            	</div>
            </div>
        </div>
    </div>
</div>