$(document).ready(function(){
    // animation start
    AOS.init();

    //menu button toggle
    $(document).on('click', '#menu-icon', function(){
        var icon_menu_content = $('#icon-menu').attr('class');
        if(icon_menu_content == 'fa fa-bars') {
            $('#icon-menu').removeClass('fa-bars');
            $('#icon-menu').addClass('fa-times');
        }
        else if(icon_menu_content == 'fa fa-times') {
            $('#icon-menu').removeClass('fa-times');
            $('#icon-menu').addClass('fa-bars');
            
        }
        else {
            $('#icon-menu').removeClass('fa-bars');
            $('#icon-menu').addClass('fa-times'); 
        }
    });


    // back to top function 
    var btn = $('#buttonToTop');

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    // end back to top function 
    
    


    $('#sendmessage').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "/sendmessage",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function (data) {
                alert(data.error);
            }
        })
    });

    //active menu on user web page
    new ActiveMenuLink(".navbar", {
        // selector of menu item
        itemTag: ".menu-link",
        // active class
        activeClass: "activemenu",
        // in pixels
        scrollOffset: 0,
        // duration in ms
        scrollDuration: 1000,
        // easing function
        ease: "out-circ",
        // specifies the header height
        headerHeight: null,
        // string
        default: null,
        // shows hash tag
        showHash: false
    });

    //page loader fade out
    $(".se-pre-con").fadeOut("slow");

    
});


var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function () {
        that.tick();
    }, delta);
};

window.onload = function () {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid var(--main)";
    document.body.appendChild(css);
};