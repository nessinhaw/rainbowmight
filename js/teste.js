$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 365,
  isFitWidth: true,
  gutter: 10,
  horizontalOrder: true
});

$('.carousel').flickity({
  // options
  cellAlign: 'center',
  wrapAround: true,
  imagesLoaded: true,
  setGallerySize: false
});


$("a#toggle").click(function(){
   	$(".footer").slideToggle();
    return false;
}); 

$("a#toggle2").click(function(){
   	$(".search-bar").slideToggle();
    return false;
}); 