@extends('inicio.parts.main')
@section('title','Inicio')

@section('article')
		<div class="header-bg" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"><h1><a href="index.html"> <img src="{{ asset('./inicio/images/logo.png')}}" alt="Logo"> RB Servicios.com.ve</a></h1></div>
					</div>
					<div class="col-md-8">					
	 					<div class="h_right">
	 						<div class="left">
							<ul class="menu list-unstyled">		
								<li class="active"><a href="#home" class="scroll">Inicio</a></li>
								<li><a href="#caracteristicas" class="scroll">Caracteristica</a></li>
								<li><a href="#prices" class="scroll">Precios</a></li>
								<li><a href="#faq" class="scroll">Faq</a></li>
								<li><a href="#support" class="scroll">Support</a></li>
								<li><a href="{{route('index')}}" class="btn btn-default">Ingrese</a></li>
								
							</ul>
						   </div>	
						   <!-- start login_box -->
								
												
							<!-- start smart_nav * -->
					        <nav class="nav">
					            <ul class="nav-list">
					                <li class="nav-item"><a href="#home">Home</a></li>
					                <li class="nav-item"><a href="#caracteristicas" class="scroll">Caracteristicas</a></li>
					                <li class="nav-item"><a href="#precios" class="scroll">Precios</a></li>
					                <li class="nav-item"><a href="#faq" class="scroll">Faq</a></li>
					                <li class="nav-item"><a href="#support" class="scroll">Support</a></li>				               
					                <div class="clearfix"></div>		
					            </ul>					            
				
					        <div class="nav-mobile"></div></nav>
					        
					       <!-- <script type="text/javascript" src="js/responsive.menu.js"></script>-->
							<!-- end smart_nav * -->
						</div>
						
					</div>	      
				</div>
			</div>
        </div>	
       <!----start-images-slider---->
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="{{ asset('inicio/images/banner.jpg')}}" alt=""/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title">La mejor soluci&oacute;n con</h4>	                      
		                        <h4 class="title">la mas alta excelencia</h4>
		                        <!-- /Text description -->
		                        <div class="slide-btns description">	                      
		                        </div>	
		                      <!--<a class="popup-with-zoom-anim jp-video-play-icon" href="#small-dialog1"><img src="images/play.png" alt=""></a>-->

								   <!-- start magnific-->
							    	<div id="small-dialog1" class="mfp-hide">
										<div class="pop_up">
										 	<!--<iframe src="//player.vimeo.com/video/70332985?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="100%" height="260" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/70332985">Reed</a> from <a href="http://vimeo.com/dorianwarneck">Dorian Warneck</a> on <a href="https://vimeo.com">Vimeo</a>.</p>-->
							  			</div>
									</div>
									<!-- end magnific-->
	 
		                              																																                         	                       		     							
		                       <!-- <div class="buttons">
		                        	<button class="btn btn-2 btn-2b">Start using now!</button>
		                        	<button class="btn1 btn-2 btn-2b">Features you get</button>
		                        	<div class="clearfix"></div>
		                        </div>-->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <div class="slide">
		                <img src="{{ asset('inicio/images/banner.jpg')}}" alt=""/>
		               <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title">La mejor soluci&oacute;n con</h4>	                      
		                        <h4 class="title">la mas alta excelencia</h4>
		                        <!-- /Text description -->
		                        <div class="slide-btns description">	                      
		                        </div>
		                         <!--<a class="popup-with-zoom-anim jp-video-play-icon" href="#small-dialog1"><img src="images/play.png" alt=""></a>-->

								   <!-- start magnific-->
							    	<div id="small-dialog1" class="mfp-hide">
										<div class="pop_up">
										 	<!--<iframe src="//player.vimeo.com/video/70332985?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="100%" height="260" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/70332985">Reed</a> from <a href="http://vimeo.com/dorianwarneck">Dorian Warneck</a> on <a href="https://vimeo.com">Vimeo</a>.</p>-->
							  			</div>
									</div>
									<!-- end magnific-->
		                        <!--<div class="buttons">
		                        	<button class="btn btn-2 btn-2b">Start using now!</button>
		                        	<button class="btn1 btn-2 btn-2b">Features you get</button>
		                        	<div class="clearfix"></div>
		                        </div>-->
		                    </div>
		                </div>
		            </div>
		            <!--/slide -->
		        </div>
		        <!--<div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>-->
		    </div>
		    <!--/slider -->
		</div>	
	
<!--- features--->
<div class="container">
<div class="row">
		<div class="content-feature-grids" id="caracteristicas">
						<h3> Caracteristicas</h3>
						<p>Lorem Ipsum is simply dummy text of the printing</p>
				<div class="col-md-6">
					<div class="feature-grid">
						<div class="feature-grid-left icon1">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>All-new design</h2>
							<p>iOS 7 started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable </p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon2">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>All-new features</h2>
							<p>Control Center, AirDrop for iOS, and smarter multitasking are just a few of the great new features in iOS 7. And all your favorite apps have been enhanced</p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon3">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Date to date Update</h2>
							<p>iOS 7 started with a desire to take an experience people love and make it better. To make it even simpler, more useful, enjoyable </p>
						</div>
						<div class="clearfix"></div>		
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature-grid">
						<div class="feature-grid-left icon4">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Instant messaging</h2>
							<p>Control Center, AirDrop for iOS, and smarter multitasking are just a few of the great new features in iOS 7. And all your favorite apps</p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon5">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Digital timer</h2>
							<p>iOS 7 started with a desire to take an experience people love and make it better. To make it even simpler, more useful, enjoyable </p>
						</div>
						<div class="clearfix"></div>		
					</div>
					<div class="feature-grid">
						<div class="feature-grid-left icon6">
							<span> </span>
						</div>
						<div class="feature-grid-right">
							<h2>Statistics</h2>
							<p>Control Center, AirDrop for iOS, and smarter multitasking are just a few of the great new features in iOS 7. And all your favorite apps</p>
						</div>
						<div class="clearfix"></div>		
					</div>
				</div>
					<div class="clearfix"></div>		
				</div>
	</div>
</div>
<!-----------start-pricing----------->
<div class="pricing-plans" id="prices">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<h3>Our Price</h3>
						<p>Lorem Ipsum is simply dummy text of the printing</p>
						<div class="pricing-grids">
						<div class="pricing-grid">							
							<div class="price-value">
								<a href="#">Wesite hosting</a>
							</div>
							<h4><a href="#">$5.01/month</a></h4>
							<ul class="list-unstyled">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Dolor sitamet, Consect</a></li>
								<li><a href="#">Adipiscing elit</a></li>
								<li><a href="#">Proin commodo turips</a></li>
								<li><a href="#">Laws pulvinarvel</a></li>
								<li><a href="#">Prnare nisi pretium</a></li>
							</ul>
							<div class="cart">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>
						<div class="pricing-grid">
							<div class="price-value">
								<a href="#">Reseller cloud</a>
							</div>
							<h4><a href="#">$10.01/month</a></h4>
							<ul class="list-unstyled">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Dolor sitamet, Consect</a></li>
								<li><a href="#">Adipiscing elit</a></li>
								<li><a href="#">Proin commodo turips</a></li>
								<li><a href="#">Laws pulvinarvel</a></li>
								<li><a href="#">Prnare nisi pretium</a></li>
							</ul>
							<div class="cart">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>
						<div class="pricing-grid">							
							<div class="price-value">
								<a href="#">Dedicated hosting</a>
							</div>
							<h4><a href="#">$20.01/month</a></h4>
							<ul class="list-unstyled">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Dolor sitamet, Consect</a></li>
								<li><a href="#">Adipiscing elit</a></li>
								<li><a href="#">Proin commodo turips</a></li>
								<li><a href="#">Laws pulvinarvel</a></li>
								<li><a href="#">Prnare nisi pretium</a></li>
							</ul>
							<div class="cart">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>
							<div class="clearfix"></div>		
							
							<div class="pricing-grids">
						<div class="pricing-grid1">							
							<div class="price-value">
								<a href="#">Wesite hosting</a>
							</div>
							<h4><a href="#">$5.01/month</a></h4>
							<ul class="list-unstyled">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Dolor sitamet, Consect</a></li>
								<li><a href="#">Adipiscing elit</a></li>
								<li><a href="#">Proin commodo turips</a></li>
								<li><a href="#">Laws pulvinarvel</a></li>
								<li><a href="#">Prnare nisi pretium</a></li>
							</ul>
							<div class="cart1">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>
						<div class="pricing-grid1">							
							<div class="price-value">
								<a href="#">Wesite hosting</a>
							</div>
							<h4><a href="#">$5.01/month</a></h4>
							<ul class="list-unstyled">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Dolor sitamet, Consect</a></li>
								<li><a href="#">Adipiscing elit</a></li>
								<li><a href="#">Proin commodo turips</a></li>
								<li><a href="#">Laws pulvinarvel</a></li>
								<li><a href="#">Prnare nisi pretium</a></li>
							</ul>
							<div class="cart1">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>
						<div class="pricing-grid1">							
							<div class="price-value">
								<a href="#">Wesite hosting</a>
							</div>
							<h4><a href="#">$5.01/month</a></h4>
							<ul class="list-unstyled">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Dolor sitamet, Consect</a></li>
								<li><a href="#">Adipiscing elit</a></li>
								<li><a href="#">Proin commodo turips</a></li>
								<li><a href="#">Laws pulvinarvel</a></li>
								<li><a href="#">Prnare nisi pretium</a></li>
							</ul>
							<div class="cart1">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>
						<div class="pricing-grid1">							
							<div class="price-value">
								<a href="#">Wesite hosting</a>
							</div>
							<h4><a href="#">$5.01/month</a></h4>
							<ul class="list-unstyled">
								<li><a href="#">Lorem ipsum</a></li>
								<li><a href="#">Dolor sitamet, Consect</a></li>
								<li><a href="#">Adipiscing elit</a></li>
								<li><a href="#">Proin commodo turips</a></li>
								<li><a href="#">Laws pulvinarvel</a></li>
								<li><a href="#">Prnare nisi pretium</a></li>
							</ul>
							<div class="cart1">
								<div class="span3"><a class="popup-with-zoom-anim" href="#small-dialog"><i>Purchase</i></a>
							</div>	
							</div>
						</div>																			
							<!-----pop-up-grid---->
								 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
												<h4><span class="shipping"> </span>Shipping</h4>
												<ul class="list-unstyled">
													<li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul class="list-unstyled">
													<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
												</ul>
												<ul class="list-unstyled">
													<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
													<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<div class="clearfix"></div>		
												</ul>
												<div class="clearfix"></div>		
											<ul class="payment-type list-unstyled">
												<h4><span class="payment"> </span> Payments</h4>
												<li><span class="col_checkbox">
													<input id="3" class="css-checkbox1" type="checkbox">
													<label for="3" name="demo_lbl_1" class="css-label1"> </label>
													<a class="visa" href="#"> </a>
													</span>
													
												</li>
												<li>
													<span class="col_checkbox">
														<input id="4" class="css-checkbox2" type="checkbox">
														<label for="4" name="demo_lbl_2" class="css-label2"> </label>
														<a class="paypal" href="#"> </a>
													</span>
												</li>
												<div class="clearfix"></div>		
											</ul>
												<ul class="list-unstyled">
													<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
													<div class="clearfix"></div>		
												</ul>
												<ul class="list-unstyled">
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
													<div class="clearfix"></div>		
												</ul class="list-unstyled">
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Cancel"></li>
													<li><input type="submit" value="Process order"></li>
												</ul>
												<div class="clearfix"></div>		
											</form>
										</div>
						  			</div>
								</div>
								<!-----pop-up-grid---->
							</div>
						<div class="clearfix"></div>		
					</div>
				</div>
			</div>
		</div>
</div>
<!--- faq--->
<div class="container">
<div class="row">
		<div class="content-feature-grids" id="faq">
						<h3> Faq</h3>
						<p>Lorem Ipsum is simply dummy text of the printing</p>
				<div class="col-md-6">
				   <div class="faq-grid">									
							<h5>1. Lorem Ipsum is simply dummy text of the printing and typesetting ?</h5>
							<p>A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable </p>								
					</div>
					<div class="faq-grid">									
							<h5>2. To make it even simpler, more useful, and more enjoyable ?</h5>
							<p>A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>								
					</div>
					<div class="faq-grid">									
							<h5>3. Lorem Ipsum is simply dummy text of the printing and typesetting ?</h5>
							<p>A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable </p>								
					</div>
					<div class="faq-grid">									
							<h5>4. To make it even simpler, more useful, and more enjoyable ?</h5>
							<p>A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable </p>								
					</div>
					<div class="faq-grid">									
							<h5>5. Lorem Ipsum is that it has a more-or-less normal distribution of letters ?</h5>
							<p>A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>								
					</div>
				</div>
				<div class="col-md-6">
				   <div class="faq-grid">									
							<h5>6. Lorem Ipsum is simply dummy text of the printing and typesetting ?</h5>
							<p>A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable </p>								
					</div>
					<div class="faq-grid">									
							<h5>7. To make it even simpler, more useful, and more enjoyable ?</h5>
							<p>A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>								
					</div>
					<div class="faq-grid">									
							<h5>8. Lorem Ipsum is simply dummy text of the printing and typesetting ?</h5>
							<p>A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable </p>								
					</div>
					<div class="faq-grid">									
							<h5>9. To make it even simpler, more useful, and more enjoyable ?</h5>
							<p>A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable </p>								
					</div>
					<div class="faq-grid">									
							<h5>10. Lorem Ipsum is that it has a more-or-less normal distribution of letters ?</h5>
							<p>A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>								
					</div>
				</div>
					<div class="clearfix"></div>		
				</div>
	</div>
</div>
<div class="contact s6" id="support">
<div class="container">
<div class="row">
 	<div class="col-md-6">			
 		<div class="contact-left">		
 		     <h3>CONTACT ME</h3>
 		     <p class="style">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
			<div class="get-intouch-left-address">
		 		  	    <p>2345 Setwant natrer, 1234</p>
						<p>consectetur adipisicing.</p>
						<p>2345 Setwant natrer, 1234</p>					
						<p class="style1">Email: <a href="mailto:info@mycompany.com"> info@gmail.com</a></p>
						<p class="style2">Phone: 1.306.24565489</p>
					</div>
 		</div>	
 	</div>
 	<div class="col-md-6">
 		<div class="contact-right">		
 		    <div class="form">				
				  			<form method="post" action="#">
							    	<input type="text" class="textbox" value=" Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							    	<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
										<div class="clearfix"></div>	
								    <div>
								    	<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Message';}">Message</textarea>
								    </div>
								<div class="span4">
							    	<a href="#">
							    		<i><input type="submit" value="CONTACT ME"></i>
							    		<div class="clearfix"></div>	
							    	</a>
							    </div>								
							</form>
						</div>
 		    	 </div>	
 	    	</div>	
 			<div class="clearfix"></div>	
 		</div>	
	</div>
</div>

<div class="footer">
	<div class="container">
		<div class="row">
 			<div class="col-md-12">	
				<div class="copy-right">
					<p>&#169Todos los derechos reservados RB Sevicios</p>	
				</div>	
			</div>
		</div>
    </div>
</div>
@stop