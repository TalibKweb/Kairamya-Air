// use a script tag or an external JS file
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollSmoother, ScrollTrigger);
    // gsap code here!

    ScrollSmoother.create({
        smooth: 3, // how long (in seconds) it takes to "catch up" to the native scroll position
        effects: true, // looks for data-speed and data-lag attributes on elements
        smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
    });

    /********************************************************************************************/
});


if (window.innerWidth > 768) {

    if ($(".lc-hero-plane").length && $(".luxury-charters").length) {
        gsap.from(".lc-hero-plane", {
            scrollTrigger: {
                trigger: ".luxury-charters",
                // scroller: "body",
                start: "top 80%",
                end: "bottom 50%",
                markers: false,
                scrub: true,
                toggleActions: "restart none none none",

            },

            x: -200,
            y: 200,
            // duration: 10
        })

    }


    if ($(".who-bg").length && $(".who-we-are").length) {

        ScrollTrigger.create({
            trigger: ".who-we-are",        // section2 is the trigger
            start: "top 10%",
            end: "bottom 65%",            // when section2's top hits 50% of viewport
            pin: ".who-bg",            // pin section1
            pinSpacing: false,           // optional: no extra space left behind
            markers: false,                // for debugging (optional)
        });

    }

}


