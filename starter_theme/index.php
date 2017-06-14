<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_theme
 */

get_header(); ?>


<section id="top">

 <div class="slideshow-container">

		 <div class="logo"><img src="<?php echo get_template_directory_uri() . '/imgs/logo.png'?>">
		 </div>

		 <div class="mySlides fade">
			 <div id="grad1" style="color:white;text-align:center;"></div>
			 <div class="text">BRANDING</div>
		 </div>

		 <div class="mySlides fade">
			 <div id="grad2" style="color:white;text-align:center;"></div>
			 <div class="text">GRAPHIC DESIGN</div>
		 </div>

		 <div class="mySlides fade">
			 <div id="grad3" style="color:white;text-align:center;"></div>
			 <div class="text">WEB DESIGN</div>
		 </div>

		 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		 <a class="next" onclick="plusSlides(1)">&#10095;</a>


		 <span class="dot" onclick="currentSlide(1)"></span>
		 <span class="dot" onclick="currentSlide(2)"></span>
		 <span class="dot" onclick="currentSlide(3)"></span>


		 <header>
				 <ul div class="nav">
					 <li><a href="index.html" class="active">home</a></li>
					 <li><a href="#services">services</a></li>
					 <li><a href="#portfólio">portfólio</a></li>
					 <li><a href="#contacts">contacts</a></li>
				 </ul>
		 </header>

 </div>

 </section>
	


			<div class="mouse">
					<div class="scroll"></div>
			</div>

			<div class="title"><h1>about</h1></div>

			<div class="container2">
					<p class="h2"><i>Lara Ribeiro | Graphic Designer</i></p>
                    <div class="textrun">
					<p>Hello, my name is Lara Ribeiro, I live in Braga and I am 21 years old. I have finished in 2016 a three years a Graphic Design graduation, on IPCA (Instituto Politécnico do Cávado e do Ave). Actually, I am frequenting a master degree on Digital Design on IPCA and now also working as Photo Editor at Farfetch.But, my work is focused on Web Design, Branding, Editorial Design, Tipography, Photography, Video e Montion Graphics.</p>
                    </div>
                
            <div class="title2"><h1>skills</h1></div>    
               
            <div class="skills">
            <div id="bars">
                <div class="bar" data-percent="100">
                    <h4>photoshop</h4>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="90">
                    <h4>illustrator</h4>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="90">
                    <h4>indesign</h4>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="80">
                    <h4>premiere</h4>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
                <div class="bar" data-percent="70">
                    <h4>html e css</h4>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
            </div>
            </div>
                

			<div class="title2"><h1>my portfólio</h1></div>

					<div class="myprojects">

					<div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-01.jpg'?>" alt="braga" class="image">
                        <a href="pagina-dinamica/">
                        <div class="overlay">
                            <div class="desc">photography</div>
                        </div>
                        </a>
                      </div>
                    </div>

                    <div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-02.jpg'?>" alt="odm" class="image">
                        <a href="pagina-dinamica2/">
                        <div class="overlay">
                            <div class="desc">computational design</div>
                        </div>
                        </a>
                      </div>
                    </div>

                    <div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-03.jpg'?>" alt="rua" class="image">
                        <a href="pagina-dinamica3/">
                        <div class="overlay">
                            <div class="desc">tipography</div>
                        </div>
                        </a>
                      </div>
                    </div>

                    <div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-04.jpg'?>" alt="casa dos crivos" class="image">
                        <a href="pagina-dinamica4/">
                        <div class="overlay">
                            <div class="desc">branding</div>
                        </div>
                        </a>
                      </div>
                    </div>

                    <div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-05.jpg'?>" alt="vinil" class="image">
                        <a href="pagina-dinamica5/">
                        <div class="overlay">
                            <div class="desc">packaging</div>
                        </div>
                        </a>
                      </div>
                    </div>

                    <div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-06.jpg'?>" alt="jogo" class="image">
                        <a href="pagina-dinamica6/">
                        <div class="overlay">
                            <div class="desc">packaging</div>
                        </div>
                        </a>
                      </div>
                    </div>

                    <div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-07.jpg'?>" alt="livro de receitas" class="image">
                        <a href="pagina-dinamica7/">
                        <div class="overlay">
                            <div class="desc">editorial</div>
                        </div>
                        </a>
                      </div>
                    </div>

                    <div class="responsive">
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri() . '/imgs/projeto-08.jpg'?>" alt="avatar" class="image">
                        <a href="pagina-dinamica8/">
                        <div class="overlay">
                            <div class="desc">computational design</div>
                        </div>
                        </a>
                      </div>
                    </div>

					<div class="clearfix"></div>
			</div>


			<div class="footer1">
			<div class="container-fluid">
					<h1>segue-me</h1>

					<center>
					<div class="footer-social-icons">

							<div class="social">
							<a href="https://www.facebook.com/lara.ribeiro.3110" target="_blank" title="facebook"><i class="fa fa-facebook size-60"></i></a>
							</div>

							<div class="social">
							<a href="https://twitter.com" target="_blank" title="twitter"><i class="fa fa-twitter size-60"></i></a>
							</div>

							<div class="social">
							<a href="https://pt.pinterest.com/lararibeiro16/" target="_blank" title="pinterest"><i class="fa fa-pinterest size-60"></i></a>
							</div>

							<div class="social">
							<a href="https://www.instagram.com/lararrribeiro/" target="_blank" title="instagram"><i class="fa fa-instagram size-60"></i></a>
							</div>

							<div class="social">
							<a href="https://pt.linkedin.com/" target="_blank" title="linkedin"><i class="fa fa-linkedin size-60"></i></a>
							</div>

					</div>
					</center>
                
                    <div class="footer2">
                        <div class="container-fluid">
                            <p class="copyright">Copyright © Lara Ribeiro | Portfolio 2017</p>
                        </div>
                    </div>

			</div>
			</div>
            </div>
                
<?php

get_footer();
