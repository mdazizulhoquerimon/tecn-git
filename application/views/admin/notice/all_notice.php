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
            	<div class="all-notice">
		            <div class="content container-fluid">
		                <div class="row">
		                    <div class="col-xs-12">
		                        <h4 class="page-title">All Notices</h4>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-lg-12">
		                        <div class="card-box">
		                            <div class="card-block">
		                               <!--  <h6 class="card-title text-bold">Default Datatable</h6>
		                                <p class="content-group">
		                                    This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
		                                </p> -->
		                                <table id="all_notice" class="display w-100 dataTable table-bordered table table-stripped">
		                                    <thead>
		                                        <tr>
		                                            <th class="text-center">Sl</th>
		                                            <th class="text-center">Date</th>
		                                            <th class="text-nowrap text-center">Notice Type</th>
		                                            <th>Title</th>
		                                            <th>Short Description</th>
		                                            <th class="text-nowrap">Action</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                        <?php
		                                        $sl = 1;
		                                        foreach ($all_notice as $key => $n) {
		                                        ?>
		                                        <tr>
		                                            <td class="text-center"><?php echo $sl;?></td>
		                                            <td class="text-nowrap text-center"><?php echo $n['date'];?></td>
		                                            <td class="text-center"><?php echo $this->admin_model->notice_type($n['notice_type']);?></td>
		                                            <td><?php echo $n['title'];?></td>
		                                            <td><?php echo $n['description'];?></td>
		                                            <td class="text-nowrap">
	                                            		<a href="#" title="" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
	                                            		<a href="#" title="" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
	                                            		<a href="#" title="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
	                                            	</td>
		                                        </tr>
		                                        <?php
		                                        $sl++;
		                                        }
		                                        ?>
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
            	</div>
            </div>

        </div>
    </div>
</div>