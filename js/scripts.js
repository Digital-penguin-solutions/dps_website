$(document).ready(on_ready);

$(window).resize(on_resize);

/*=================================== Nav start =================================*/
// Nav menu variables
var fade_duration = 0;
var nav_menu_visible = true;
var button_open_color = "white";
var button_closed_color = "#4A4544";

// page slider variables
var current_page = [];
var all_sliders = [];
var slider_speed = 0;

// cart menu variables
var cart_speed = 0;
var cart_visible = true;

var selected_background = "#1c2d84";
var not_selected_background = "#AAAAAA";

var selected_color = "white";
var not_selected_color = "black";

var dot_selected_background = "white";
var dot_not_selected_background = "gray";

var border_selected_color = "gray";
var border_not_selected_color = "gray";

var slider_dot_width = 0;

function on_ready() {
    init_mc_button();

    init_nav_links();

    init_sliders();

    // puts all the sliders to the first page
    for (var i = 0; i < all_sliders.length; i++) {
        slider_go_to_page(i, 0);
    }

    slider_speed = 600; // sets the slider speed to a value after the first initialisation has been done. This is so that the animations wont be shown when the page is loaded

    toggle_nav_menu();
    fade_duration = 500; // same as for slider_speed

    init_add_to_cart();

    // defailt is small
    if (typeof cart_size === 'undefined') {
        cart_size = "small";
    }

    load_cart(cart_size);

}

var nav_in_animation = false; // if the nav is currently being opened or closed

function toggle_nav_menu() {
    nav_menu_visible = !nav_menu_visible;

    $(".nav_menu_container").fadeToggle(fade_duration);

    // changes the color on the hamburger menu
    if (nav_menu_visible) {
        jQuery(".McButton b").animate({"background-color": button_open_color}, fade_duration);
    }
    else {
        jQuery(".McButton b").animate({"background-color": button_closed_color}, fade_duration);
    }
}

function init_mc_button() {

    // hamburger menu
    var McButton = $("[data=hamburger-menu]");
    var McBar1 = McButton.find("b:nth-child(1)");
    var McBar2 = McButton.find("b:nth-child(2)");
    var McBar3 = McButton.find("b:nth-child(3)");


    $(McButton).click(function () {
        toggle_nav(false);
    });
}

// if override animation is true. It means the nav should be toggled regardless of weather it is currently being animated or not
function toggle_nav(override_animation) {

    // hamburger menu
    var McButton = $("[data=hamburger-menu]");
    var McBar1 = McButton.find("b:nth-child(1)");
    var McBar2 = McButton.find("b:nth-child(2)");
    var McBar3 = McButton.find("b:nth-child(3)");

    console.log(McButton.hasClass("active"));
    ;
    if (!nav_in_animation || override_animation) {
        nav_in_animation = true;
        var speed_scale = 0.8;

        toggle_nav_menu();

        $(McButton).toggleClass("active");

        if (McButton.hasClass("active")) {
            console.log(123123);
            McBar1.velocity({top: "50%"}, {duration: 200 * speed_scale, easing: "swing"});
            McBar3.velocity({top: "50%"}, {duration: 200 * speed_scale, easing: "swing"})
                .velocity({rotateZ: "90deg"}, {duration: 800 * speed_scale, delay: 200, easing: [500, 20]});
            McButton.velocity({rotateZ: "135deg"}, {
                duration: 800 * speed_scale, delay: 200, easing: [500, 20],
                complete: function () {
                    nav_in_animation = false; // when the animation is done
                }
            });
        } else {
            McButton.velocity("reverse");
            McBar3.velocity({rotateZ: "0deg"}, {duration: 800 * speed_scale, easing: [500, 20]})
                .velocity({top: "100%"}, {duration: 200 * speed_scale, easing: "swing"});

            McBar1.velocity("reverse", {
                delay: 800 * speed_scale,
                complete: function () {
                    nav_in_animation = false;// when the animation is done
                }
            });

        }
    }

}

function init_nav_links() {
    $(".nav_link").click(function () {
        toggle_nav(true);
    });
}

/*=================================== Nav End ===================================*/

//aouto skroll
var items = $(".item");
var animating = false;

$(window).scroll(function () {
    clearTimeout($.data(this, 'scrollTimer'));
    if (!animating) {
        $.data(this, 'scrollTimer', setTimeout(function () {
            items.each(function (key, value) {
                if ($(value).offset().top > $(window).scrollTop()) {
                    animating = true;
                    $('body').animate({scrollTop: $(value).offset().top + 'px'}, 250);
                    setTimeout(function () {
                        animating = false;
                    }, 300);
                    return false;
                }
            });
        }, 200));
    }
});
