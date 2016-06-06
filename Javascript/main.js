
// Toggles the sidebar when on small screens
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

// For dropdown list of recipes
$("#recipe-toggle").click(function(e){
	e.preventDefault();
	$("#recipe-menu").toggle();

	if($("#recipe-menu").is(":visible")){
		$(this).text("");
		$(this).text("Recipes");
		$(this).append("<span class=\"dropup\"><span class=\"caret\"></span></span>");
	}
	else{
		$(this).text("");
		$(this).text("Recipes");
		$(this).append("<span class=\"dropdown\"><span class=\"caret\"></span></span>");
	}
});

// For the about section
$('.nav-stacked li').on('click', function(){
    var target = $(this).children().attr("href");
    $(target).show().siblings().hide();
    $(this).addClass("active").siblings().removeClass("active");
});

// Used to zoom text when clicked
$(".zoom-article").click(function(){
	$(this).toggleClass("increase-font");
});
