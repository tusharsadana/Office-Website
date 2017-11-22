var images = [
  "img/gal1.JPG",
  "img/gal2.JPG",
  "img/gal3.JPG",
  "img/gal4.JPG",
  "img/gal5.JPG",
  "img/gal6.JPG",
  "img/gal7.JPG",
  "img/gal8.JPG",
  "img/gal9.JPG"
];

var gallery = document.getElementById("gallery");

for (var i = 0; i < images.length; i++) {
  var wthumbnailWrapper = document.createElement("div");
  wthumbnailWrapper.className = "wthumbnail-wrapper";

  var wthumbnail = document.createElement("a");
  wthumbnail.className = "wthumbnail";
  wthumbnail.setAttribute('style', 'background-image:url(\"' + images[i] + '\");');
  wthumbnail.setAttribute('href', images[i]);

  wthumbnailWrapper.appendChild(wthumbnail);
  gallery.appendChild(wthumbnailWrapper);
}

console.log(gallery)