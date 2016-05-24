! function(e) {
    var n = e("#primary-menu").offset().top,
        o = function() {
            var o = e(window).scrollTop();
            o > n && e(window).width() > 768 ? e("#header").addClass("sticky") : e("#header").removeClass("sticky")
        };
    o(), e(window).scroll(function() {
        o()
    })
}(jQuery)