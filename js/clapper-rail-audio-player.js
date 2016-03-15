	//sound player
	$(document).ready(function(){
		var wavesurfer = WaveSurfer.create({
		    container: '#wave',
		    waveColor: '#fdaaaa',
		    progressColor: '#ff0000'
		});

		var sound = new Howl({

			//note to self: can declare .ogg file here using comma
			urls: ['https://dh1rvgpokacch.cloudfront.net/atavist/9410/audio/raw/kekburcut-1403296688-31.mp3', 'http://baynature.org/wp-content/uploads/2016/03/clapperrail.ogg'],
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