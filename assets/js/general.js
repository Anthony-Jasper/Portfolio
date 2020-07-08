jQuery( document ).ready(function( $ ) {
  $( document ).foundation();
  // Theme JS here

  $(".hamburger").click(function () {
    if($(this).hasClass('is-active')){
			$('.hamburger').removeClass('is-active');
			$('#page-overlay').css({
				'background': 'transparent',
				'pointer-events': 'none'
			});
    }else{
			$(this).addClass('is-active');
			$('#page-overlay').css({
				'background': 'rgba(0, 0, 0, 0.80)',
				'pointer-events': 'fill'
			});
    }
	});
	shootingStars();
	var boxContent = ["coding", "design", "private", "knowledge", "entertainment", "Director", "Developer", "Mail sorter", "Developer"];
	var boxContentSpan = ["projects", "projects", "personal", "skills", "interests", "cloudyne limited", "music streaming app", "royal mail", "match'em up app"];
	var roles = ["Director", "Financer", "front-end developer", "hosting managament", "legal", "customer support"];

	for(var i = 0; i < $('.boxstyle-content').length; i++){
		if(i <= 8){
			$('.boxstyle-content').eq(i).html("<span>" + boxContent[i] + "</span>" + boxContentSpan[i]);
		}else{
			$('.boxstyle-content').eq(i).text(roles[i-9]);
		}
	}
	$('.open-projects'). click(function(){
		$('#home').css('overflow', 'hidden');
		$('#page-overlay').css('visibility', 'hidden');
	});
	$('.close-button'). click(function(){
		$('#home').css('overflow', 'visible');
		$('#page-overlay').css('visibility', 'visible');
	});
	
});
