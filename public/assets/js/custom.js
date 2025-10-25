$(document).ready(function(){

	// Our Doctor
	var $owl = $('#ourdoctor');
    var totalItems = $owl.find('.item').length;

    // Determine loop condition dynamically
    var loopSetting = false;

    if (totalItems > 4) { // More than visible items on largest screen
        loopSetting = true;
    }

    $owl.owlCarousel({
        loop: loopSetting, // ✅ Only loop when enough items
        margin: 30,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                loop: totalItems > 1
            },
            576: {
                items: 2,
                loop: totalItems > 2
            },
            992: {
                items: 3,
                loop: totalItems > 3
            },
            1200: {
                items: 4,
                loop: totalItems > 4
            }
        }
    });

    // Custom SVG navigation icons
    $("#ourdoctor .owl-prev").html(`
        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="14" viewBox="0 0 19 14" fill="none">
            <path d="M17.5 6.15C17.9694 6.15 18.35 6.53056 18.35 7C18.35 7.46944 17.9694 7.85 17.5 7.85V6.15ZM0.39896 7.60104C0.0670128 7.2691 0.0670128 6.7309 0.39896 6.39896L5.80833 0.989592C6.14027 0.657647 6.67846 0.657647 7.01041 0.989592C7.34235 1.32154 7.34235 1.85973 7.01041 2.19167L2.20208 7L7.01041 11.8083C7.34235 12.1403 7.34235 12.6785 7.01041 13.0104C6.67846 13.3424 6.14027 13.3424 5.80833 13.0104L0.39896 7.60104ZM17.5 7.85H1V6.15H17.5V7.85Z" fill="#0E264F"/>
        </svg>
    `);
    $("#ourdoctor .owl-next").html(`
        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 6.15C0.530558 6.15 0.15 6.53056 0.15 7C0.15 7.46944 0.530558 7.85 1 7.85V6.15ZM18.101 7.60104C18.433 7.2691 18.433 6.7309 18.101 6.39896L12.6917 0.989592C12.3597 0.657647 11.8215 0.657647 11.4896 0.989592C11.1576 1.32154 11.1576 1.85973 11.4896 2.19167L16.2979 7L11.4896 11.8083C11.1576 12.1403 11.1576 12.6785 11.4896 13.0104C11.8215 13.3424 12.3597 13.3424 12.6917 13.0104L18.101 7.60104ZM1 7.85H17.5V6.15H1V7.85Z" fill="#0E264F"/>
        </svg>
    `);

	// Testimonials
	$('#testimonial').owlCarousel({
	    loop:true,
	    margin:31,
	    nav:false,
	    dots:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        768:{
	            items:2
	        }
	    }
	})

});