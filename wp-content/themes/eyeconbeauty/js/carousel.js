var galleryElems = document.querySelectorAll('.carousel');

for ( var i=0, len = galleryElems.length; i < len; i++ ) {
  var galleryElem = galleryElems[i];
  new Flickity( galleryElem, {
    // options...
    wrapAround: true,
    contain: true
  });
};

var productElems = document.querySelectorAll('.left-carousel');

for ( var i=0, len = productElems.length; i < len; i++ ) {
  var productElem = productElems[i];
  new Flickity( productElem, {
    // options...
    cellAlign: 'left',
    wrapAround: true,
    contain: true
  });
};