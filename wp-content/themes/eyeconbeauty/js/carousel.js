
var galleryElems = document.querySelectorAll('.carousel');

for ( var i=0, len = galleryElems.length; i < len; i++ ) {
  var galleryElem = galleryElems[i];
  new Flickity( galleryElem, {
    // options...
    "wrapAround": true,
    contain: true
  });
};