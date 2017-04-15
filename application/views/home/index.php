<?php $this->load->view('shared/header'); ?>
<body>
	<header id="navigation">
        <div class="navbar navbar-static-top" role="banner">
            <div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html">
								<h1><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/logo.png" alt="logo"></h1>
							</a>							
						</div>
					</div>				
					<div class="col-sm-9">
						<nav class="collapse navbar-collapse navbar-right">					
							<ul class="nav navbar-nav">
								<li class="active dropdown"><a href="<?php echo base_url(); ?>" >Início </a>
									
								</li>
								<li class=""><a href="index.html" >Como funciona? </a>
									
								</li>
								<li class=""><a href="tel:+5567999015679" >Ligar </a>
									
								</li>
								<li class=""><a href="https://fb.me/msg/agilphonems" >Chat </a>
									
								</li>									
								
									
								</li>
							</ul>					
						</nav>
						
						<div class="search">
							<form role="form">
								<input type="text" class="search-form" autocomplete="off" placeholder="Write something and press enter">
								<span class="search-close"><i class="fa fa-times"></i></span>
							</form>
						</div>
					</div>
				</div>
            </div>
        </div>
    </header><!--/#navigation--> 
	
	<div id="carousel-wrapper">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/images/home/bg/slider-bg.png); ">
					<div class="carousel-caption container"> 
						<div class="row">
							<div class="col-sm-7">
								<h2 style=" color:#2c3e50;  font-size:42px;">Seu celular quebrou?</h2>
								<p style="color:black; font-weight:bold;">Reparos em smartphones e tablets. A qualquer momento, em qualquer lugar!</p>
								<div class="purchased-button">
									<a href="https://fb.me/msg/agilphonems" class="btn btn-primary" style="background:#0a79e8; color:black;">Reparar meu dispositivo</a>
								</div>
							</div>
							
						</div>
					</div>					
				</div>
				
				<!--
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> -->
			</div>		
		</div> <!--/#home-carousel--> 
    </div><!--/#carousel-wrapper--> 	
	
	<div id="service" class="padding-top">		
		<div class="container">
			<div class="row">
				<div class="text-center section-title">
					<h2>O que <span>fazemos!</span></h2>					
				</div>				
			</div>
			<div class="row text-center">				
				<div class="col-sm-4 service-content">					
					<div class="service-icon">
						<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/icons/service-icon1.png" alt="" />								
					</div>
					<div class="service-text">
						<h4>Seu celular danificou</h4>
						<p>Envie para nós informações sobre o que está acontecendo com seu telefone, qual o modelo, marca e sua localização.</p>
					</div>					
				</div>
				<div class="col-sm-4 service-content">					
					<div class="service-icon">
						<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/icons/service-icon2.png" alt="" />							
					</div>
					<div class="service-text">
						<h4>Orçamento e Agendamento</h4>
						<p>Você já saberá quanto custará o reparo e poderá marcar para a visita do técnico.</p>
					</div>					
				</div>
				<div class="col-sm-4 service-content">					
					<div class="service-icon">
						<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/icons/service-icon3.png" alt="" />						
					</div>
					<div class="service-text">
						<h4>Reparo com agilidade e rapidez</h4>
						<p>O reparo é realizado na hora e em sua frente. Levamos o técnico até você. E pagará o técnico após a realização do serviço, podendo ser em dinheiro, cartão de débito ou crédito.</p>
					</div>					
				</div>
			</div>
		</div>
	</div><!--/#Our Service-->
	
	<div id="projects">
		<div class="container text-center ">
			<div class="row">
				<div class="section-title">
					<h2>Últimos <span>Reparos</span></h2>					
				</div>				
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="project-content">
						<div class="project big-content">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/project/p1.png" alt="" />
							<div class="overlay">
								
								<h3>iPhone 5S</h3>
								<h4>Troca de Display</h4>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-sm-6">
					<div class="project-content">
						<div class="project big-content">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/project/p2.png" alt="" />
							<div class="overlay">
								
								<h3>iPhone 4</h3>
								<h4>Troca de Display</h4>
							</div>
						</div>						
					</div>
				</div>
				
				
			</div>
			<!--<a href="#" class="btn btn-primary">View All</a>-->
		</div>
	</div><!--/Projects-->	
	<br /><br /><br /><br /><br />
	<div id="promotion" class="parallax-section" style="">		
		<div class="overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>Consertamos seu celular na <span>Hora!</span> </h1>
					<h2>Reparo rapido e ágil</h2>	
					<a href="https://fb.me/msg/agilphonems" class="btn btn-primary" style="margin-top:-20px;">Solicitar Reparo</a>
				</div>
				<div class="col-sm-6">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/ipad.png" alt=""  />
				</div>
			</div>
		</div>
	</div><!--/promotion-->	

	<div class="quote-section" style="background:rgb(44, 62, 80);" style="color:white;">
		<div class="container text-center">
			<div class="quote-content">
			

	



                
                    <img src="<?php echo base_url(); ?>assets/images/home/cert.png" class="attachment-post-thumbnail wp-post-image" alt="icon-certificado" height="150" width="150">
                        <div class="content clearfix">

                            <h2 class="title" style="color:white; font-weight:bold;">A assistência técnica para seu smartphone mais confiável</h2>

                            <div class="content__list">
                                <ul class="list-group">
							<li style="color:white; ">Serviço com garantia de <strong>6 meses contra quaisquer defeitos de fabricação</strong></li>
							<li style="color:white; ">Total <strong>segurança</strong> de suas fotos, mensagens e dados pessoais</li>
							<li style="color:white; "><strong>Troca de tela quebrada</strong> feita na sua frente</li>
							<li style="color:white; "><strong>Assistência técnica especializada Apple e Samsung</strong></li>
							</ul>
                            </div>
                            <br/>
                            <a href="https://fb.me/msg/agilphonems" class="btn btn-primary">

                                Veja o preço para consertar o seu smartphone ou tablet

                            </a>

            

                        
            </div>

			</div>
		</div>
	</div><!--/quote-section-->

<!--
	
	<div id="blog" class="padding-bottom">
		<div class="container">
			<div class="row">
				<div class="text-center section-title">
					<h2>Últimas do <span>Blog</span></h2>					
				</div>				
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="entry-content">	
						<a href="blog-detail.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/blog/post1.jpg" alt="" /></a>
						<h2 class="entry-title"><a href="blog-detail.html">Free Lifetime Updates Free Support</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisi- cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						<div class="entry-meta">
							<p>17 January 2015, <span><a href="#">Stories</a></span></p>
						</div>
						<a href="blog-detail.html" class="read-more"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="entry-content">	
						<a href="blog-detail.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/blog/post2.jpg" alt="" /></a>
						<h2 class="entry-title"><a href="blog-detail.html">Many web sites still in their infancy</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisi- cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						<div class="entry-meta">
							<p>21 December 2014, <span><a href="#">Creative</a></span></p>
						</div>
						<a href="blog-detail.html" class="read-more"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="entry-content">	
						<a href="blog-detail.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home/blog/post3.jpg" alt="" /></a>
						<h2 class="entry-title"><a href="blog-detail.html">Many desktop publishing packages</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisi- cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						<div class="entry-meta">
							<p>12 December 2014, <span><a href="#">Art & Design</a></span></p>
						</div>
						<a href="blog-detail.html" class="read-more"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#blog--> 	
	
	-->
	

	
	<footer id="footer">
		<div class="text-center footer-top">
			<div class="overlay-bg"></div>
			<div class="container">
				<h2>Você é técnico? Quer trabalhar conosco?</h2>
				<a href="https://fb.me/msg/agilphonems" class="btn btn-primary">Enviar Currículo</a>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-5">
						<p class="copyright">&copy; 2017 <a href="#" style="color:black;">ÁgilPhone.</a> Todos os direitos reservados.</p>
					</div>
					<div class="col-md-6 col-sm-7">
						<div class="footer-menu">
							<ul class="nav navbar-nav">
								<li class=""><a href="index.html" >Como funciona? </a>
									
								</li>
								<li class=""><a href="tel:+5567999015679" >Ligar </a>
									
								</li>
								<li class=""><a href="https://fb.me/msg/agilphonems" >Chat </a>
									
								</li>	
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-md-offset-0 col-sm-7 col-sm-offset-5">
						<div class="bottom-socials">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!--/#footer--> 
	
<?php $this->load->view('shared/footer'); ?>