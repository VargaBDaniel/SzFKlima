particlesJS('particles-js',

    {
        "particles": {
            "number": {
                "value": 175,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#fff"
            },
            "shape": {
                "type": "image",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "./img/snowflakes.png",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.1,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 10,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 500,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 2
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "bottom",
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
                    "enable": true,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": true,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 0.5
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 4,
                    "duration": 0.3,
                    "opacity": 1,
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
    }

);

function initializeNavButtons() {
    let navButtons = document.querySelectorAll("[data-scrollto-button]");

    navButtons.forEach(button => button.addEventListener("click", getScrollToTarget));
};

function getScrollToTarget() {
    let scrollToTargetName = this.getAttribute("data-scrollto-button");
    let scrollToTargetElement = document.querySelector("[data-scrollto-target=" + scrollToTargetName + "]")

    if (this.parentElement.parentElement.classList.contains('mobile')) {
        openAndCloseNavMenu();
    }

    scrollViewportToTarget(scrollToTargetElement);
};

function scrollViewportToTarget(target) {
    window.scrollTo({
        top: target.offsetTop - 80,
        behaviors: 'smooth'
    })
};

function openAndCloseNavMenu() {
    let navMenu = document.getElementsByClassName('nav-menu mobile')[0];

    if (navMenu.classList.contains('closed')) {
        navMenu.classList.replace('closed', 'open')
    } else {
        navMenu.classList.replace('open', 'closed')
    };
};

imagesLoaded( document.querySelector('.grid'), function( instance ) {
    var elem = document.querySelector('.grid');
    var msnry = new Masonry( elem, {
    // options
    itemSelector: '.gallery-item',
    columnWidth: 300,
    gutter: 5,
    fitWidth: true,
    });
});

$(function() {
   
    $(".form-control").on('focus', function(){

        $(this).parents(".form-group").addClass('focused');

    });

    $(".form-control").on('blur', function(){

        $(this).parents(".form-group").removeClass('focused');

    });

});

function toggleContactForm() {
    let formContainer = $("#form-container")[0];

    if(formContainer.classList.contains('visible')) {
        formContainer.classList.replace('visible', 'hidden');

        $('.arrow').show();
    } else {
        formContainer.classList.replace('hidden', 'visible');
        
        let formPosition = formContainer.offsetTop;
        console.log(formPosition);
        window.scroll({
            top: formPosition - 90,
            behavior: 'smooth',
        });

        $('.arrow').hide();
    }
};

function displaySentMessage() {
    let messageSent = localStorage.getItem('messageSent');
    if (messageSent == 'true') {
        $('.message-sent-alert').text('Üzenetét sikeresen elküldte, hamarosan felvesszük Önnel a kapcsolatot!');
    };

    localStorage.setItem('messageSent', 'false');
}