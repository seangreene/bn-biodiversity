<html>
<head>
	<title><?php the_post(); the_title(); ?> - The Weird, the Rare and the Ugly - Bay Nature</title>
	
	<?php $id = get_the_ID(); $permalink = get_permalink($id); ?>
	<meta charset="utf-8"> 
	<meta name="viewport" content="initial-scale=1">
	<meta property="og:title" content="<?php the_title(); ?> - The Weird, the Rare and the Ugly"/>
	<meta property="og:description" content="<?php the_field('subheading'); ?>"/>
	<meta property="og:url" content="<?php echo $permalink; ?>"/>
	<meta property="og:site_name" content="Bay Nature"/>
	<meta property="fb:admins" content="1403244759"/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/media/illos/<?php echo $post->post_name; ?>.jpg"/>
	<link rel="shortcut icon" href="http://3vswoj22h2l7nt08f1ye9o4r.wpengine.netdna-cdn.com/wp-content/themes/bay-nature-responsive/images/favicon.ico"/>


	<link rel="stylesheet" href="http://3vswoj22h2l7nt08f1ye9o4r.wpengine.netdna-cdn.com/wp-content/themes/bay-nature-responsive/css/baynature.scss" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="http://3vswoj22h2l7nt08f1ye9o4r.wpengine.netdna-cdn.com/wp-content/themes/bay-nature-responsive/style.css?1435006863" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="http://3vswoj22h2l7nt08f1ye9o4r.wpengine.netdna-cdn.com/wp-content/themes/bay-nature-responsive/style-print.css" type="text/css" media="print"/>
	<link rel="stylesheet" href="http://3vswoj22h2l7nt08f1ye9o4r.wpengine.netdna-cdn.com/wp-content/themes/bay-nature-responsive/jquery.c2selectbox.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!--
	<link href="/bn-biodiversity/css/bootstrap.min.css" rel="stylesheet">
    <script src="/bn-biodiversity/js/jquery.min.js"></script>
    <script src="/bn-biodiversity/js/bootstrap.min.js"></script>


    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
	-->



    <!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!--leaflet-->
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <!--open sans headline font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--libre baskerville font-->
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<!-- PROJECT CSS FILE -->
		<!--local-->
	<link rel="stylesheet" href="/css/biodiversity-stylesheet.css">
		<!--web-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/css/biodiversity-stylesheet.css">
    <script src="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/js/jquery.lazyload.js"></script>


	<style>
	.navbar-header {
		font-family: 'Open Sans', sans-serif;
	}
	#fishFader {position:relative;}
	#fishFader img{position:absolute;z-index:1; width:100%}
	#second {display:none; z-index: -1;}
	#fishFader figcaption {position: absolute; bottom: -5;}
	#map-marsh {
		height: 400px;
	}

	</style>

	<!-- jquery cdn -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- boostrap cdn -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!--maps js -->
	<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
	<script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.3.0"></script>

	<!-- howler js for audio -->
	<script src="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/js/howler.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/js/wavesurfer.js"></script>

	<?php $id = get_the_ID(); $permalink = get_permalink($id); ?>
	<script type="text/javascript">
	function tweetbtn() {
    	window.open("https://twitter.com/share?url=<?php echo $permalink; ?>&amp;text=<?php the_title(); ?>%20via%20@BayNature", "", "width=700, height=253");
	}
	function fbbtn() {
    	window.open("http://www.facebook.com/sharer.php?u=<?php echo $permalink; ?>", "", "width=700, height=253");
	}
	</script>
	<!-- Google Analytics -->
	<script type="text/javascript">
    
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32668307-1', 'auto');
  ga('send', 'pageview');
  ga('require', 'displayfeatures');
  
  /* Track outbound links in Google Analytics */
  (function($) {
 
    "use strict";
 
    // current page host
    var baseURI = window.location.host;
 
    // click event on body
    $("body").on("click", function(e) {
 
      // abandon if link already aborted or analytics is not available
      if (e.isDefaultPrevented() || typeof ga !== "function") return;
 
      // abandon if no active link or link within domain
      var link = $(e.target).closest("a");
      if (link.length != 1 || baseURI == link[0].host) return;
 
      // cancel event and record outbound link
      e.preventDefault();
      var href = link[0].href;
      ga('send', {
        'hitType': 'event',
        'eventCategory': 'outbound',
        'eventAction': 'link',
        'eventLabel': href,
        'hitCallback': loadPage
      });
 
      // redirect after one second if recording takes too long
      setTimeout(loadPage, 1000);
 
      // redirect to outbound page
      function loadPage() {
        document.location = href;
      }
 
    });
 
  })(jQuery); // pass another library here if required
    
    </script>
</head>
<body>


<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container-fluid">
		
		<div class="navbar-header navbar-left">
	    	<a id="logo" class="navbar-brand navbar-left hide-small" href="http://baynature.org" >
	        	<img alt="Bay Nature" src="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/css/bnlogo.png">
	    	</a>

	    	<div class="nav-head navbar-link navbar-left">
	    		<a href="<?php echo get_bloginfo('url'); ?>/biodiversity">Weird, Ugly, Rare</a>
	    	</div>

    	</div>

    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<i class="fa fa-bars fa-lg"></i>
    	</button>

		<button type="button" onclick="tweetbtn()" class="navbar-toggle nav-share" data-toggle="collapse" data-target=".share-collapse">
			<i class="fa fa-twitter fa-lg"></i>
		</button>

		<button onclick="fbbtn()" type="button" class="navbar-toggle nav-share" data-toggle="collapse" data-target=".share-collapse">
			<i class="fa fa-facebook fa-lg"></i>
		</button>

		<a 	href="mailto:?Subject=The Weird, the Rare and the Ugly&amp;Body=Check%20out%20these%20Bay%20Nature%20stories <?php echo $permalink; ?>">
			<button type="button" class="navbar-toggle nav-share hide-small" data-toggle="collapse" data-target=".share-collapse">
				<i class="fa fa-envelope fa-lg"></i>
			</button>
		</a>

    	<div class="clear"></div>

 		<div class="navbar-collapse collapse">
      		<ul class="nav navbar-nav"><?php
      			$args = array( 'post_type' => 'biodiversity' );
				$loop = new WP_Query( $args );
				$count = 1;
				while ( $loop->have_posts() ) : $loop->the_post();
					global $post;
					echo '
				<div class="nav-item nav' . $count . ' col-sm-2 col-xs-6">
					<li>';
					the_field('name');
					echo '</li>
					<a href="' . site_url() . '/biodiversity/' . $post->post_name . '" class="thumbnail"><img src="' . get_template_directory_uri() . '/bn-biodiversity/media/illos/' . $post->post_name . '.jpg"></a>
				</div>';
				$count++;
				endwhile;
				wp_reset_query(); ?>
			</ul>
		</div>
	</div>
</nav>

<header>
	<div class="row">

		<div class="col-sm-10 col-sm-offset-1 col-xs-12">

			<div class="museum-card col-sm-6">

				<h1><?php the_title(); ?></h1>

				<h2><?php the_field('name'); ?></h2>

				<hr></hr>

				<div class="card-info">
					<p>Habitat: <span><?php the_field('habitat'); ?></span></p>
					<p>Population: <span><?php the_field('population'); ?></span></p>
					<p>Protection status: <span><?php the_field('protection_status'); ?></span></p>
				</div>
			</div>

			<div class="art-box col-sm-6">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/media/illos/<?php global $post; echo $post->post_name; ?>.jpg" />
				</figure>

			</div>

		</div>
	</div>
</header>

<article>
<div class="container">
	<div class="row">

		<div class="story">
			<h2><?php the_field('subheading'); ?></h2>
			<p class="byline">by <?php the_author_link(); ?></p>
			<?php the_content(); ?>
		</div>

	</div>
			
	<div class="row" >
		<div class="more">
			<span>More    </span> <i class="fa fa-bars fa-3x"></i> 
		</div>

	</div>
</div>
</article>


<footer>
	<div class="row" id="more-drawer">
			<i class="fa fa-times fa-3x"></i>

		<div class="col-sm-12" id="more-stories">
			
			<h3><a href="/bn-biodiversity">Weird, Rare, Ugly</a></h3><?php
      			$args = array( 'post_type' => 'biodiversity' );
				$loop = new WP_Query( $args );
				$count = 1;
				while ( $loop->have_posts() ) : $loop->the_post();
					global $post;
					echo '
				<div class="more' . $count . ' thumbnail">
					<a href="' . $post->post_name . '">
					<img src="' . get_template_directory_uri() . '/bn-biodiversity/media/illos/' . $post->post_name . '.jpg" class="img-thumbnail" />
					<h4>'; the_field('name'); echo '</h4>
					</a>
				</div>';
				$count++;
				endwhile; 
				wp_reset_query(); ?>
		</div>
	</div>

</footer>

<!--IMPORTANT: Project scripts: -->
<script src="<?php echo get_template_directory_uri(); ?>/bn-biodiversity/js/biodiversity-scripts.js"></script>


<script>
	$("img.lazy").lazyload({
		threshold: 900,
		effect : "fadeIn"
	});

	//nav and more drawer active states
	$('.nav3').addClass('active');
	$('.more3').addClass('current_story');

	//balancing lead box and museum card widths and heights
	var cw = $('.lead-box figure').width();
	$('.lead-box').css({'height':cw+'px'});
	$('.museum-card').css({'height':cw+'px'});

	//sound player
	$(document).ready(function(){
		var wavesurfer = WaveSurfer.create({
		    container: '#wave',
		    waveColor: '#fdaaaa',
		    progressColor: '#ff0000'
		});

		var sound = new Howl({

			//note to self: can declare .ogg file here using comma
			urls: ['http://baynature.org/wp-content/uploads/2016/03/kekburcut-1403296688-31.mp3','http://baynature.org/wp-content/uploads/2016/03/clapperrail.ogg'],
			volume: 0.5,
		 //    onend: function() {
			//     $('i').replaceWith('<i class="fa fa-play"></i>');
			//     $('.audio-controller').removeClass('playing');
			//   },
		 //    onplay: function() {
			//     $('i').replaceWith('<i class="fa fa-pause"></i>');
			//     $('.audio-controller').addClass('playing');
			//   },
			// onpause: function(){
			//     $('i').replaceWith('<i class="fa fa-play"></i>');
			//     $('.audio-controller').removeClass('playing');					 
			// },
			// onloaderror: function(){
			//     $('i').replaceWith('<p style="font-family:Arial, sans-serif;">Sorry! This sound failed to load.</p>');
			// }
		});

		wavesurfer.load(sound['_src']);
		//wavesurfer.setVolume(0.5);

		wavesurfer.on('play', function(){
			    $('i').replaceWith('<i class="fa fa-pause"></i>');
			    $('.audio-controller').addClass('playing');
		});
		wavesurfer.on('pause', function(){
			    $('i').replaceWith('<i class="fa fa-play"></i>');
			    $('.audio-controller').removeClass('playing');	
		});
		wavesurfer.on('error', function(){
			    $('i').replaceWith('<p style="font-family:Arial, sans-serif;">Sorry! This sound failed to load.</p>');
		});
		wavesurfer.on('finish', function(){
			    $('i').replaceWith('<i class="fa fa-play"></i>');
			    $('.audio-controller').removeClass('playing');
		});		
		$('.audio-controller').on('click', function(){
		    if ( $(this).hasClass("playing") ) {
		    	//sound.pause();
		    	wavesurfer.pause();
		    } else {
				// sound.stop().play();
				wavesurfer.play();
		    }
		});
		
	})

</script>

</body>

</html>