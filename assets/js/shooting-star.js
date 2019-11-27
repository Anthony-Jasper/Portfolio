function shootingStars(){
  for(i = 0; i < jQuery('.shooting-star').length; i++){
    var shootingStarPosition = Math.floor(Math.random() * (100 - 0) + 0);
    var randomDuration = Math.floor(Math.random() * (15 - 5) + 5);
    jQuery('.shooting-star').eq(i).css({
      "top": shootingStarPosition + '%',
      "animation-duration": randomDuration + 's'
    });
  }
}