<?php
/*
	Template Name: About Page
*/

?>

<?php get_header();?>

<div class="about-container cards no-padding no-margin-bottom ">
	<div class="about-img-wrap">
		<div class="about-img"><img src="http://localhost:8888/wp-content/uploads/2014/12/IMG_3058.jpg" alt=""></div>
		<div class="about-badge-wrap">

			<a href="https://twitter.com/kylevalenzuela">
				<div class="badge badge-twitter">
					<div class="badge-number"><?php twitter_word_count(); ?></div>
					<div class="badge-content content-twitter">
						Tweets Containing the Word <em>"Taco"</em> 
						<span>(Out of the last 100 tweets)</span>
					</div>		
				</div>
			</a>
			
			<a href="https://untappd.com/user/valenzuelakyle">
				<div class="badge badge-untappd">
						<div class="badge-number"><?php utappd_beer_counter(); ?></div>
						<div class="badge-content content-untappd">
							Badges on <em>Untappd</em>
						</div>	
				</div>
			</a>

			<a href="http://instagram.com/kylev">
				<div class="badge badge-instagram">
					<div class="badge-number"><?php insta_count();?></div>
					<div class="badge-content content-insta">
						Photos on <em>Instagram</em>
					</div>	
				</div>
			</a>
			<a href="https://www.goodreads.com/user/show/10848992-kyle-valenzuela">
				<div class="badge badge-goodreads">
					<div class="badge-number"><?php currently_reading_img(); ?></div>		
					<div class="badge-content content-goodreads">
						Currently Reading: <em><?php currently_reading_text(); ?></em>
					</div>	
				</div>
			</a>
		</div>
	</div>
</div>

<div class="cards no-margin-bottom no-padding">
	<div class="about-about-main ">
	<div class="cloud1"><?php include('icons/cloud.svg'); ?></div>
	<div class="cloud2"><?php include('icons/cloud.svg'); ?></div>
		<div class="about-left">
			<h4>About Me</h4>
			<p>
				I'm Kyle Valenzuela, a user experience designer and front-end developer from Los Angeles, California. I'm a builder of products for the web, writer of <a href="http://bakingbrew.com/">beer bread</a>, and tinkerer of the Raspberry Pi. 
			</p>
			<p>
				Although deeply embedded in the web, I have not given up on my dream of working to help humans reach the stars. The first time we went to the moon, design took a back seat to practicality. However, Mars will be another story. I want help design a future in space! 
			</p>
		</div>
		<div class="about-right">
			<h4>UX of Life</h4>
			<p>
				Communicating with information technology should be as easy as moving your index finger. I believe that every thought that goes into a project should have, not only the end user in mind, but also never have that user out of sight.
			</p>
			<p>
				My skills include whatever is necessary to get the job done, whether it be CSS, Javascript, Angular JS, or simply a hamer and nail. 
			</p>
		</div>
		<div class="mountains"></div>
	</div>

	<div class="about-data-wrap">
		<div class="about-timeline" >
			<h4 class="timeline-header">2020</h4>
			<ul>
				<li class="timeline-content">
					<h5>NASA / SpaceX</h5>
					<div class="description">
						UI Designer for the Mars Space Ship
					</div>
					<time></time>
				</li>
				
			</ul>
			<h4 class="timeline-header">2014</h4>
			<ul>
				<li class="timeline-content">
					<h5>Inteligy</h5>
					<div class="description">
						Contract Front-End Developer
					</div>
					<time class="timeline-time">June 2018</time>
				</li>
				<li class="timeline-content">
					<h5>Trip to Prague</h5>
					<div class="timeline-img">
						<img src="http://localhost:8888/wp-content/uploads/2015/01/prague.jpg">
					</div>
					<div class="description">
						Na Zdraví
					</div>
					<time class="timeline-time">June 2018</time>
				</li>
				<li class="timeline-content">
					<h5>Baking Brew Launch</h5>
					<div class="timeline-img">
						<?php include('images/bakingbrew.svg'); ?>
					</div>
					<div class="description">
						Site dedicated to beer recipes and craft beer
					</div>
					<time class="timeline-time">August 2014</time>
				</li>
				<li class="timeline-content">
					<h5>Startup Weekend CSULA</h5>
					<div class="description">
						Recieved 3rd Place for Bountee
					</div>
					<time class="timeline-time">July 2014</time>
				</li>
				<li class="timeline-content">
					<h5>IDG Advertising</h5>
					<div class="description">
						Front-End Developer
					</div>
					<time class="timeline-time">February 2014</time>
				</li>
			</ul>
			<h4 class="timeline-header">2013</h4>
			<ul>
				<li class="timeline-content">
					<h5>Freelance Designer / Developer</h5>
					<div class="description">
						Getting my feet wet!
					</div>
					<time class="timeline-time">January 2013</time>
				</li>
			</ul>
			<h4 class="timeline-header">2012</h4>
			<ul>
				<li class="timeline-content">
					<h5>Trip to Japan</h5>
					<div class="timeline-img">
						<img src="http://localhost:8888/wp-content/uploads/2015/01/osaka2.jpg">
					</div>
					<div class="description" style="font-weight: bold;">
						こんにちは
					</div>
					<time class="timeline-time">December 2012</time>
				</li>
				<li class="timeline-content">
					<h5>Panasonic Avionics</h5>
					<div class="timeline-img">
						<img src="http://localhost:8888/wp-content/uploads/2015/01/PAClogo.jpg">
					</div>
					<div class="description">
						UI Designer / Tester
					</div>
					<time class="timeline-time">February 2012</time>
				</li>
				
			</ul>
			<h4 class="timeline-header">2011</h4>
			<ul>
				<li class="timeline-content">
						<h5>Artificial Ignorance Launch</h5>
						<div class="timeline-img">
							<img src="http://localhost:8888/wp-content/uploads/2015/01/AI.jpg">
						</div>
						<div class="description">
							Webcomic about robots trying to understand their existence.
						</div>
						<time class="timeline-time">June 2011</time>
				</li>
			</ul>	
			<h4 class="timeline-header"><div class="about-resume"><a href="#">Click here for my <em>Resume</em></a></div></h4>
		</div>
	</div>
	
</div>
<div class="cards no-padding no-margin-bottom ">
	<div class="about-contact">
		<div class="contact-header">
			<h1>Have something to Say?</h1>
			<h4>Contact me regarding anything.</h4>
		</div>
		<?php echo do_shortcode('[contact-form subject="Kylevalenzuela.com Inquiry" submit_button_text="Send"][contact-field label="Name" type="name" class="taco" placeholder="Name" required="1"/][contact-field label="Email" type="email" placeholder="Email" required="1"/][contact-field label="Lets Talk!"" type="textarea" placeholder="I have a question about...." required="1"/][/contact-form]'); ?>
	</div>
</div>

	