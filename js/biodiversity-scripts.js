//some scripts for the navigation
var imageURL = [
	'media/illos/tarweed.jpg',
	'media/illos/azurina.jpg',
	'http://racheldiazbastin.com/wp-content/gallery/birds/nf8x10kestreletsy.jpg',
	'http://racheldiazbastin.com/wp-content/gallery/birds/quail-etsy.jpg',
	'media/illos/missionblue.jpg',
	'http://racheldiazbastin.com/wp-content/gallery/plants/flower-paradise-etsy.jpg',
	'http://racheldiazbastin.com/wp-content/gallery/plants/pickleweed-web.jpg',
	'http://racheldiazbastin.com/wp-content/gallery/insects/longhornbeetleetsy.jpg',
	'http://racheldiazbastin.com/wp-content/gallery/insects/etsy_sternotomis-mirabilis.jpg',
	'http://racheldiazbastin.com/wp-content/gallery/reptiles/geckoetsy.jpg',
];

//loop to add illustrations
$('.nav-item img').each(function(i){
	$(this).attr("src", imageURL[i])
})

//nav-item height = img width
var cw = $('img').width();
$('.nav-item').css({'height':cw+'px'});
//balancing lead box and museum card widths and heights
var cw = $('.lead-box figure').width();
$('.lead-box').css({'height':cw+'px'});
$('.museum-card').css({'height':cw+'px'});

//opens more drawer and fades out the link
$('.more').click(function(){
	//opens drawer
	$('#more-drawer').animate({'height':'500px'}, {duration: 300});
	//fades out more hamburger
	$('.more').fadeOut("slow", "swing");
	//fades in close button
	$('.fa-times').fadeIn("slow", "swing");
	//makes the stories visible
	$('#more-drawer #more-stories').css({'display':'block'});
	//scrolls you to the bottom of the page as the drawer opens up
	$("html, body").animate({ scrollTop: $(document).height() }, "slow", "swing");
		return false;
});

//closes the more drawer and fadesin the more link
$('.fa-times').click(function(){
	//closes drawer
	$('#more-drawer').animate({'height':'0px'}, {duration:300});
	//fades back in hamburger
	$('.more').fadeIn("slow", "swing");
	//fades out close button
	$('.fa-times').fadeOut("slow", "swing");
	//hides the stories again
	$('#more-drawer #more-stories').css({'display':'none'});
});

$(document).ready(function(){
	if ( $('#more-stories div').hasClass('current_story') ) {
		$('.current_story a').contents().unwrap();
	}

});
