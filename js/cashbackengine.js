//--------(autocomplete)-----------------------------------------------------------------------------------------------
function formatItem(row) {
	console.log(row);
	return '<div style=position:relative;float:left>' + row[0] + '</div>';
}

function searchSubmit() {
	document.forms['searchfrm'].submit();
}

/**
 * Added by Brian to create a custom widget for the autocomplete
 */
$.widget( "custom.multicomplete", $.ui.autocomplete, {
	_renderMenu: function( ul, items ) {
		var that = this,
		currentType = "retailer";
		ul.append( "<li class=\'ui-autocomplete-category\'>Retailers</li>" );
		$.each( items, function( index, item ) {
			if ( item.type != currentType ) {
				ul.append( "<li class=\'ui-autocomplete-category\'>Coupons</li>" );
				currentType = "coupon";
			}
			that._renderItemData( ul, item );
		});
	}
});
/**
 * End Added by Brian
 */

$(document).ready(function() {
	$("#searchtext").multicomplete({
		"select": function(event, ui) {
			console.log(ui.item);
			if(ui.item_retailer_id == 0){
				$("#searchfrm_original_term").val($(this).val());
				$("#searchfrm_search_type").val(ui.item.type); 
				$(this).val(ui.item.value); 
				searchSubmit();
			} else {
				window.location.href = '/view_retailer.php?rid=' + ui.item.retailer_id;
			}
		},
		"minLength":"2",
		"source":"/autocomplete.php"
	});
});

///---------(tooltip)--------------------------------------------------------------------------------------------------

$(document).ready(function() {
	    $(".cashbackengine_tooltip").hover(
	        function() { $(this).contents("span:last-child").css({ display: "block" }); },
	        function() { $(this).contents("span:last-child").css({ display: "none" }); }
	    );
	    $(".cashbackengine_tooltip").mousemove(function(e) {
	        // var mousex = e.pageX + 10;
	        // var mousey = e.pageY + 10;
	        var mousex = 90;
	        var mousey = 0;
	        $(this).contents("span:last-child").css({  top: mousey, left: mousex });
	    });
});

///---------(top)-------------------------------------------------------------------------------------------------------

 $(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
		});
 
		$('.scrollup').click(function() {
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});
});

///---------(tabs)------------------------------------------------------------------------------------------------------
$(document).ready(function(){

	$(".tab_content").hide(); // Hide all content
	$("#tabs li:first").addClass("active").show(); // Activate first tab
	$(".tab_content:first").show(); // Show first tab content

	$("#tabs li").click(function() {
		//	First remove class "active" from currently active tab
		$("#tabs li").removeClass('active');

		//	Now add class "active" to the selected/clicked tab
		$(this).addClass("active");

		//	Hide all tab content
		$(".tab_content").hide();

		//	Here we get the href value of the selected tab
		var selected_tab = $(this).find("a").attr("href");

		//	Show the selected tab content
		$(selected_tab).fadeIn();
		return false;
	});
});

///---------(scroll)------------------------------------------------------------------------------------------------------
// $(document).ready(function() {
// 	$('#scrollstores').jsCarousel({
// 		autoscroll: true, 
// 		circular: true, 
// 		masked: false, 
// 		itemstodisplay: 8, 
// 	});
// });

$("#homescroll").owlCarousel({
 
	//Basic Speeds
	slideSpeed : 200,
	paginationSpeed : 800,
	 
	//Autoplay
	autoPlay : true,
	goToFirst : true,
	goToFirstSpeed : 1000,
	 
	// Navigation
	navigation : false,
	navigationText : ["prev","next"],
	pagination : true,
	paginationNumbers: false,
	 
	// Responsive
	responsive: true,
	items : 10,
	itemsDesktop : [1280,5],
	itemsDesktopSmall : [980,5],
	itemsTablet: [768,2],
	itemsMobile : [479,1],
	// CSS Styles
	baseClass : "owl-carousel",
	theme : "owl-theme"
 
})


$("#scrollstores").owlCarousel({
 
	//Basic Speeds
	slideSpeed : 200,
	paginationSpeed : 800,
	 
	//Autoplay
	autoPlay : true,
	goToFirst : true,
	goToFirstSpeed : 1000,
	 
	// Navigation
	navigation : true,
	navigationText : ["prev","next"],
	pagination : false,
	paginationNumbers: false,
	 
	// Responsive
	responsive: false,
	items : 4,
	itemsDesktop : [1199,4],
	itemsDesktopSmall : [980,5],
	itemsTablet: [768,2],
	itemsMobile : [479,1],
	// CSS Styles
	baseClass : "owl-carousel",
	theme : "owl-theme",

    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
 
})