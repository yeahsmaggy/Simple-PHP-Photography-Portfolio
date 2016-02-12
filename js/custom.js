$(window).load(function() {
    $("#slideshow").carouFredSel({
        responsive: true,
        width: "variable",
        height: "variable",
        duration: 3000,
        items: {
            duration: 3000,
            visible: 1,
            width: 1280,
            height: "variable"
        },
        next: {
            key: "right",
            button: "#nextimg"
        },
        prev: {
            key: "left",
            button: "#previmg"
        },
        scroll: {
            items: 1,
            fx: "fade",
            easing: "linear",
            duration: 200,
            pauseOnHover: true
        },
        auto: 5500
    });

    jQuery("#tabs").tabs();
    jQuery('iframe').wrap('<div class="video-container">');
});