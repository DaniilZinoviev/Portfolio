;(function($) {

    // Event Listeners
    document.addEventListener('DOMContentLoaded', init);
    document.addEventListener('resize', resize);
    document.addEventListener('scroll', scroll);

    // Global variables
    var navHeight = 56;
    var isScrolling = false;

    // Functions
    /**
     * Initial function that fires after DOM will be ready to be changed from JS
     */
    function init() {

        initMenu();
        initMenuSmoothScroll();
        initMenuSticky();

        initWorksIsotope();
        initModals();
        initParticles();
        // sendMail();
    }

    function resize() {
        
    }

    function scroll() {
        initMenuSticky();
    }

    function initMenu() {
        var menuEl = document.querySelector('nav.navbar'),
            menuBtn = document.querySelector('a[href="#menu-btn"]');
        var menu = new MmenuLight(menuEl, "(max-width: 768px)");

        var navigator = menu.navigation({
            title: '',
            theme: 'dark',
            selected: 'active'
        });
        var drawer = menu.offcanvas();

        menuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            drawer.open();
        });

        
        document.querySelectorAll('.close-menu').forEach(function(el) {
            el.addEventListener('click', function() {
                drawer.close();
            })
        });
    }

    function initMenuSmoothScroll() {
        $('a[data-scroll]').on('click', function() {
            isScrolling = true;
            $('html').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top - navHeight
            }, 1000);
            // Fix for blinking
            setTimeout(function() {
                isScrolling = false;
            }, 100);
        });
    }

    function initMenuSticky() {
        var headerHeight = $('header').outerHeight();
        if (isScrolling) {
            return;
        }
        if (window.scrollY >= (headerHeight - navHeight)) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }
    }

    function initWorksIsotope() {
        var $grid = $('#works-container');
        $grid.isotope({
            itemSelector: '.work-wrap',
            layoutMode: 'fitRows',
        });

        $('#works-filters a').on('click', function(e) {
            e.preventDefault();
            // Filter
            var filter = $(this).attr('data-filter');
            $grid.isotope({ filter: filter});

            // Change active
            $(this).parent().find('a').removeClass('active');
            $(this).addClass('active');
        });
    }

    function initModals() {
        $('a.popup').magnificPopup({
            type: 'inline',
            midClick: true
        })
    }

    function sendMail() {
        $.ajax('/contact.php', {
            method: 'GET',
            complete: function(response, status) {
                console.log([response, status]);
            },
            error: function(response, status) {
                console.log([response, status]);
            },
            success: function(response, status) {
                console.log([response, status]);
            },
        });
    }

    function initParticles() {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS('particles', {
            "particles": {
                "number": {
                    "value": 60,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.1,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 6,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.1,
                    "width": 2
                },
                "move": {
                    "enable": true,
                    "speed": 1.5,
                    "direction": "top",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    }

})(jQuery);
