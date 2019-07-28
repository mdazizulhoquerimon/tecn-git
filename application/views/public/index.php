<?php 
//include('head.php');
//include('header.php');
?>
<!-- start slider-area -->
<div class="slider-area">
	<div class="flexslider">
	  	<ul class="slides">
		    <li>
		      <img src="<?php echo base_url();?>assets/images/slider/slide1.jpg" />
		    </li>
		    <li>
		      <img src="<?php echo base_url();?>assets/images/slider/slide2.jpg" />
		    </li>
		    <li>
		      <img src="<?php echo base_url();?>assets/images/slider/slide3.jpg" />
		    </li>
		    <li>
		      <img src="<?php echo base_url();?>assets/images/slider/slide4.jpg" />
		    </li>
	  	</ul>
	</div>
	<div class="slider-area-notice">
		<div class="slider-area-notice-title">
			<h3>Notice</h3>
		</div>
		<div class="slider-area-notice-body">
			<ul class="list-group list-group-flush" id="scroller">
				<?php 
				//print_r($all_news_events);
				foreach($all_notice as $n){
				?>
			  	<li><a class="list-group-item" href="<?php echo base_url();?>notice/single_notice/<?php echo $n['id'];?>" title="" target="_blank">
			  			<div class="slider-notice-date">
			  				<span class="slider-notice-date-day">
			  					<?php echo date('d M',strtotime($n['date']));?>
			  				</span>
			  				<span class="slider-notice-date-year">
			  					<?php echo date('Y',strtotime($n['date']));?>
			  				</span>
			  					
		  				</div>
			  			<div class="slider-notice-title"><?php echo $n['title'];?></div>
			  			<div class="clearfix"></div>
			  			<!-- <h6 class="card-title m-0"><?php echo $n['title'];?></h6>
						<p class="card-text"><small class="text-muted"><?php echo $n['date'];?></small></p> -->
			  		</a>
			  	</li>
			  	<!-- <li>
			  		<a class="list-group-item" href="<?php echo base_url();?>notice/single_notice/<?php echo $n['id'];?>" title="" target="_blank">
			  			<h6 class="card-title m-0"><?php echo $n['title'];?></h6>
						<p class="card-text"><small class="text-muted"><?php echo $n['date'];?></small></p>
			  		</a>
			  	</li> -->
			  	<?php
				}
			  	?>
			</ul>
		</div>
	</div>
</div>
<!-- end slider-area -->

<!-- start main-four-links -->
<div class="main-four-links">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="main-four-links-single">
					<a href="<?php echo base_url();?>about" title="" class="text-decoration-none">
						<div class="card text-white mb-2">
						  	<div class="card-header main-bg"><h4 class="m-0">About TECN</h4></div>
						  	<div class="card-body sub-bg">
						    	<img src="<?php echo base_url();?>assets/images/logo-only.png" alt="TECN">
						  	</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="main-four-links-single">
					<a href="#" title="" class="text-decoration-none">
						<div class="card text-white mb-2">
						  	<div class="card-header main-bg"><h4 class="m-0">Administration</h4></div>
						  	<div class="card-body sub-bg">
						    	<i class="fas fa-hotel"></i>
						  	</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="main-four-links-single">
					<a href="#" title="" class="text-decoration-none">
						<div class="card text-white mb-2">
						  	<div class="card-header main-bg"><h4 class="m-0">Library</h4></div>
						  	<div class="card-body sub-bg">
						    	<i class="fas fa-book-open"></i>
						  	</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="main-four-links-single">
					<a href="#" title="" class="text-decoration-none">
						<div class="card text-white mb-2">
						  	<div class="card-header main-bg"><h4 class="m-0">Mission & Vision</h4></div>
						  	<div class="card-body sub-bg">
						    	<i class="fas fa-road"></i>
						  	</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end main-four-links -->

<!-- start facts-counting -->
<div class="facts-counting-area" id="facts_counting">
	<div class="container">
		<div><h2 class="pb-2">Some Important Facts About Us</h2></div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mb-2">
				<div class="counting-single">
					<h1><span class="counter-value" data-count="171">0</span>+</h1>
					<h4>Acres Area</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mb-2">
				<div class="counting-single">
					<h1><span class="counter-value" data-count="4">0</span></h1>
					<h4>Departments</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mb-2">
				<div class="counting-single">
					<h1><span class="counter-value" data-count="200">0</span>+</h1>
					<h4>Faculty Members</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mb-2">
				<div class="counting-single">
					<h1><span class="counter-value" data-count="3000">0</span>+</h1>
					<h4>Students</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end facts-counting -->

<!-- start notice-event-area -->
<div class="notice-event-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card text-dark bg-default mb-3">
					<div class="card-header text-center text-light main-bg">
						<h5 class="mb-0">News & Events</h5>
					</div>
					<div class="card-body p-0">
						<ul class="list-group list-group-flush">
							<?php 
							//print_r($all_news_events);
							foreach($all_news_events as $n){
							?>
						  	<li>
						  		<a class="list-group-item" href="<?php echo base_url();?>notice/single_notice/<?php echo $n['id'];?>" title="" target="_blank">
						  			<h6 class="card-title m-0"><?php echo $n['title'];?></h6>
									<p class="card-text"><small class="text-muted"><?php echo $n['date'];?></small></p>
						  		</a>
						  	</li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-dark bg-default mb-3">
					<div class="card-header text-center text-light main-bg">
						<h5 class="mb-0">Notice Board</h5>
					</div>
					<div class="card-body p-0">
						<ul class="list-group list-group-flush">
							<?php 
							//print_r($all_news_events);
							foreach($all_notice as $n){
							?>
						  	<li>
						  		<a class="list-group-item" href="<?php echo base_url();?>notice/single_notice/<?php echo $n['id'];?>" title="" target="_blank">
						  			<h6 class="card-title m-0"><?php echo $n['title'];?></h6>
									<p class="card-text"><small class="text-muted"><?php echo $n['date'];?></small></p>
						  		</a>
						  	</li>
						  	<?php
							}
						  	?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end notice-event-area -->

<!-- start dept-area -->
<div class="dept-area">
	<div class="sec-title text-light">
		<h1 class="text-center text-uppercase pb-5">Our Departments</h1>
	</div>
	<div class="container">
		<div class="owl-carousel">
			<div class="dept-area-single"> 
				<a href="<?php echo base_url();?>dept/ame" title="Apparel Manufacturing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/ame.jpg" />
					</div>
					<div class="dept-area-title">
						Apparel Manufacturing Engineering
					</div>
				</a>
			 </div>
			<div class="dept-area-single"> 
				<a href="<?php echo base_url();?>dept/fme" title="Fabric Manufacturing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/cse_home.jpg" />
					</div>
					<div class="dept-area-title">
						Fabric Manufacturing Engineering
					</div>
				</a>
			 </div>
			<div class="dept-area-single">
				<a href="<?php echo base_url();?>dept/wpe" title="Wet Processing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/cwre_home.jpg" />
					</div>
					<div class="dept-area-title">
						Wet Processing Engineering
					</div>
				</a>
			</div>
			<div class="dept-area-single"> 
				<a href="<?php echo base_url();?>dept/yme" title="Yarn Manufacturing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/preeng_home.jpg" />
					</div>
					<div class="dept-area-title">
						Yarn Manufacturing Engineering
					</div>
				</a>
			 </div>
			<div class="dept-area-single"> 
				<a href="<?php echo base_url();?>dept/ame" title="Apparel Manufacturing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/ame.jpg" />
					</div>
					<div class="dept-area-title">
						Apparel Manufacturing Engineering
					</div>
				</a>
			 </div>
			<div class="dept-area-single"> 
				<a href="<?php echo base_url();?>dept/fme" title="Fabric Manufacturing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/cse_home.jpg" />
					</div>
					<div class="dept-area-title">
						Fabric Manufacturing Engineering
					</div>
				</a>
			 </div>
			<div class="dept-area-single">
				<a href="<?php echo base_url();?>dept/wpe" title="Wet Processing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/cwre_home.jpg" />
					</div>
					<div class="dept-area-title">
						Wet Processing Engineering
					</div>
				</a>
			</div>
			<div class="dept-area-single"> 
				<a href="<?php echo base_url();?>dept/yme" title="Yarn Manufacturing Engineering">
					<div class="dept-area-img">
			      		<img src="<?php echo base_url();?>assets/images/dept/preeng_home.jpg" />
					</div>
					<div class="dept-area-title">
						Yarn Manufacturing Engineering
					</div>
				</a>
			 </div>
		</div>
  </div>
</div>
<!-- end dept-area -->

<!-- start contact-us -->
<div class="contact-us-area">
	<div class="sec-title text-dark">
		<h1 class="text-center text-uppercase pb-5">Get In Touch</h1>
	</div> 
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="contact-us-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14696.836387659838!2d91.09558283167728!3d22.942525215215788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea4e8aeba39f9cde!2sTextile+Engineering+College%2C+Noakhali!5e0!3m2!1sen!2sbd!4v1562473990807!5m2!1sen!2sbd" width="750" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					<!-- <iframe src="https://www.google.com/maps/d/embed?mid=1fTDD5Fywo9FaRorSO53U83BhBz6AQGyW" width="640" height="480"></iframe> -->
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-us-right">
					<div class="contact-us-right-titile">
						<h4><i class="fab fa-buffer"></i> Textile Engineering College, Noakhali</h4>
					</div>
					<h6><i class="fas fa-map-marker-alt"></i> Chowrasta, Begumgonj, Noakhali, Chittagong, Bangladesh</h6>
					<h6><i class="fas fa-phone-square"></i> Phone: +88 0321-51758 Fax:</h6>
					<h6><i class="far fa-envelope"></i> Email: info@tecn.gov.bd</h6>
					<h6><i class="fas fa-globe"></i> https://tecn.gov.bd</h6>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end contact-us -->


<script>
/* start .facts-counting-area*/
var a = 0;
$(window).scroll(function() {  
	/*var oTop = window.innerHeight - jQuery('#facts_counting').offset().top;*/
	var oTop = window.innerHeight - $('#facts_counting').offset().top;
  	if (a == 0 && $(window).scrollTop() > oTop) {
    	$('.counter-value').each(function() {
	      	var $this = $(this),
	        	countTo = $this.attr('data-count');
	      	$({
	        	countNum: $this.text()
	      	})
	      	.animate({
	          	countNum: countTo
	        },
	        
	        {
	          	duration: 2500,
	          	easing: 'swing',
	          	step: function() {
	            	$this.text(Math.floor(this.countNum));
	          	},
	          	complete: function() {
	            	$this.text(this.countNum);
	            	//alert('finished');
	          	}
	        });
    	});
    	a = 1;
  }
});
/* end .facts-counting-area*/
	
</script>
<?php
//include('footer.php');
?>