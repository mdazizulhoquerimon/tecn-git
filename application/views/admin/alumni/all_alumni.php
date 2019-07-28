<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="card-box">
            	<div class="wrapper-body">
		            <div class="content container-fluid">
		                <div class="row">
		                    <div class="col-xs-12">
		                        <h4 class="page-title">All Alumni</h4>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-lg-12">
		                        <div class="card-box">
		                            <div class="card-block">
		                                <table id="all_teacher" class="display w-100 dataTable table-bordered table table-stripped all_teacher">
		                                    <thead>
		                                        <tr>
		                                            <th class="text-center">Sl</th>
		                                            <th class="text-nowrap text-center">Name</th>
		                                            <th class="text-center">Dept</th>
		                                            <th class="text-center">Phone</th>
		                                            <th class="text-center">Membership Type</th>
		                                            <th class="text-nowrap text-center">Action</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                        <?php
		                                        $sl = 1;
		                                        foreach ($all_alumni as $key => $a) {
		                                        ?>
		                                        <tr>
		                                            <td class="text-center"><?php echo $sl;?></td>
		                                            <td class="text-nowrap text-center"><?php echo $a['name'];?></td>
		                                            <td class="text-center"><?php echo $this->common->getSpecificField('dept','id',$a['dept'],'short_name');?></td>
		                                            <td class="text-center"><?php echo $a['phone'];?></td>
		                                            <td class="text-center"><?php echo $this->common->getSpecificField('type_list','id',$this->common->getSpecificField('alumni','student_id',$a['id'],'membership'),'name');?></td>
		                                            <td class="text-nowrap text-center">
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