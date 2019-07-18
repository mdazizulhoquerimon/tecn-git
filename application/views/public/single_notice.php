<div class="single-notice-area wrapper-area">
	<div class="section-top-banner">
		<!-- <img src="images/campus-img.jpg" alt="TECN"> -->
		<div class="container">
			<div class="section-top-banner-links">
				<h1>Notice</h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
				    <li class="breadcrumb-item"><a href="<?php echo base_url();?>notice">Notice</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Single Notice</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>

	<div class="single-notice-body wrapper-area-body">
		<div class="container">
			<div class="row">
		   		<div class="col-md-12">
		   			<?php 
		   			foreach ($single_notice as $key => $s) {
		   			?>
		   			<div class="single-notice-body-in">
		   				<div class="single-notice-body-title">
		   					<h3><?php echo $s['title'];?></h3>
		   				</div>
		   				<div>
		   					<p class="text-mute"><?php echo $s['date_time'];?></p>
		   				</div>
		   				<div class="single-notice-body-desccription">
		   					<?php echo $s['description'];?>
		   				</div>	
		   			</div>
		   			<?php
		   			}
		   			?>
		   		</div>
			</div>
		</div>
	</div>
</div>