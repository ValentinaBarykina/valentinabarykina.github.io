$('body').scrollspy({target: ".navbar", offset: 20});   
$("#myNavbar a").on('click', function(event) {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
      window.location.hash = hash;
    });
  });

$(".portfolio-holder").mouseover(function() {
    $(this).fadeTo("fast", 0.7);
    $(this).find(".portfolio-panel").slideDown("fast");
  });
  $(".portfolio-holder").mouseleave(function() {
    $(this).fadeTo("fast", 1);
    $(this).find(".portfolio-panel").slideUp("fast");
  });

// Get the modal
var modal = document.getElementById('myModal');
modal.onclick = function() {
	modal.style.display = "none";
}

// Get all images and insert the clicked image inside the modal
var images = document.getElementsByTagName('img');
var modalImg = document.getElementById("img01");
var i;
for (i = 0; i < images.length; i++) {
	images[i].onclick = function() {
		modal.style.display = "block";
		modalImg.src = this.src;
		modalImg.alt = this.alt;
	}
}