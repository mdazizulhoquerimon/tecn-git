<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <!-- <div class="col-xs-12">
                <h4 class="page-title">Notice</h4>
            </div> -->
            <?php if($success == 1){?>
            <script>
            	alert("Notice Successfully Inserted.");
            </script>
        	<?php }?>
        	
            <div class="card-box">
            	<div class="notice-form">
	                <h2 class="text-center">Add New Notice</h2>
	                <br>
					<?php echo validation_errors(); ?>

					<?php echo form_open_multipart('admin/insert_notice','class="form-horizontal"'); ?>

					    <div class="form-group">
	                        <label class="control-label col-lg-2">Notice Type</label>
	                        <div class="col-md-10">
	                        	<select name="notice_type" class="form-control">
                                    <option value="0">-- Select --</option>
                                    <option value="1">Notice</option> 
                                    <option value="2">News</option> 
                                    <option value="3">Event</option> 
                                </select>
	                        </div>
	                    </div>
					    <div class="form-group">
	                        <label class="control-label col-lg-2">Title</label>
	                        <div class="col-md-10">
	                            <input type="text" name="title" class="form-control" placeholder="Notice Title">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-lg-2">Description</label>
	                        <div class="col-lg-10">
	                            <textarea name="description" rows="5" cols="5" class="form-control" placeholder="Notice description here"></textarea>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-lg-2">Notice Image</label>
	                        <div class="col-lg-10">
	                            <input name="notice-image" class="form-control" type="file">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-lg-2">Date</label>
	                        <div class="col-md-10">
	                            <input type="text" name="notice-date" class="form-control" value="<?php echo date('Y-m-d H:i:s');?>">
	                        </div>
	                    </div>

	                    <div class="text-center">
	                    	<button type="submit" class="btn btn-primary">Submit</button>
	                    </div>
					</form>
            	</div>
            </div>
        </div>
    </div>
</div>