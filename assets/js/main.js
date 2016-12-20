var newsArray = [
  {
    title:'Nulla Vel Accumsan',
    description:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec rhoncus sem. Pellentesque blandit tincidunt tincidunt. Nulla vel accumsan diam.',
    href:'http://www.yahoo.com',
    active:true
  },
  {
    title:'Rhoncus Sem',
    description:'Pellentesque blandit tincidunt tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec rhoncus sem.',
    href:'http://www.google.com',
    active:true
  },
  {
    title:'Pellentesque',
    description:'Cras blandit tincidunt tincidunt nec rhoncus sem. Pellentesque blandit tincidunt tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel accumsan diam.',
    href:'http://www.bing.com',
    active:true
  },
  {
    title:'Dolor Sit Amet',
    description:'Cras nec rhoncus sem. Pellentesque blandit tincidunt tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel accumsan diam.',
    href:'http://www.askjeeves.com',
    active:false
  }
];

function updateArt(key) {
    console.log(key);
    $('.news-admin h4 span').html('Edit');
    var article = newsArray[key];
    $('.news-form input[name="title"]').val(article.title);
    $('.news-form input[name="url"]').val(article.href);
    $('.news-form textarea').val(article.description);
}

function clearNews() {
    $('.news-form input[name="title"]').val('');
    $('.news-form input[name="url"]').val('');
    $('.news-form textarea').val('');
}

function deleteArt(key) {
    console.log(key);
}

function saveArt() {
    clearNews();
}

$(document).ready(function () {
    function prevArt() {
        //console.log('prev');
        //console.log(article_num);
        article_num = article_num-3;
        //console.log(article_num);
        if(article_num < 0) {
            console.log('length',newsArray.length);
            article_num = newsArray.length + article_num;
        }
        //console.log(article_num);

        var prev = newsArray[article_num];

        $('.news-list').prepend('<div class="news-article" style="top:-90px">'+
                                 '<a href="'+prev.href+'"><h4>'+prev.title+'</h4></a>'+
                                 '<p>'+prev.description+'</p>'+
                               '</div>'
        );
        $('.news-article').each(function(key,value) {
            $(this).animate({
                top:"+=90"
            },900);
        });

        setTimeout(function() {
            $('.news-article').last().remove();
        },1000);
    }
    function nextArt() {
        //console.log('next');
        //console.log(article_num);
        if(article_num+1 === newsArray.length) {
            article_num = 0;
        } else {
            article_num++;
        }
        //console.log(article_num);
        var next = newsArray[article_num];
        $('.news-list').append('<div class="news-article" style="top:'+$('.news-list').height()+'px">'+
                                 '<a href="'+next.href+'"><h4>'+next.title+'</h4></a>'+
                                 '<p>'+next.description+'</p>'+
                               '</div>'
        );
        $('.news-article').each(function(key,value) {
            $(this).animate({
                top:"-=90"
            },900);
        });
        setTimeout(function() {
            $('.news-article').first().remove();
        },1000);
    }

    var top = 0;
    var article_num = 2;
    var pause = false;

    $(newsArray).each(function(key, article) {
        if(article.active) {
            $('.news-list').append('<div class="news-article" style="top:'+top+'px">'+
                                     '<a href="'+article.href+'"><h4>'+article.title+'</h4></a>'+
                                     '<p>'+article.description+'</p>'+
                                   '</div>'
            );
        }
        top = top + 90;
    });

    $(newsArray).each(function(key, article) {
        var num = key + 1;
        if(article.active === true) {
            var checked = 'checked';
        } else {
            var checked = '';
        }
        $('.news-management').append('<tr class="ui-state-default">'+
                                      '<td width="15%">'+num+'</td>'+
                                      '<td width="50%">'+article.title+'</td>'+
                                      '<td width="15%"><input type="checkbox" '+checked+' /></td>'+
                                      '<td width="20%">'+
                                       '<i class="icon-pencil icon-large" onclick="updateArt('+key+')"></i>&nbsp;&nbsp;<i class="icon-trash icon-large" onclick="deleteArt('+key+')"></i>'+
                                      '</td>'+
                                     '</tr>'
        );
        top = top + 90;
    });

    $(".news-management tbody").sortable({
        update: function(event, ui) {
            $('.news-management tr').each(function(key, value) {
                $('td:first-child', this).html('<span class="order">'+key+'</span>');
            });
            $('.order').fadeIn(1000);
        }
    }).disableSelection();

    $('#prev').click(function() {
        pause = true;
        prevArt();
        setTimeout(function() {
            pause = false;
        },5000);
    });

    $('#next').click(function() {
        pause = true;
        nextArt();
        setTimeout(function() {
            pause = false;
        },5000);
    });

    var newsSlider = setInterval(function() {
        if(!pause) {
            nextArt();
        }
    },5000);





    $("#topVideo").height($(window).height()-74);
    $("#topVideo").width($(window).width());

    $('.super').supersized({

        // Functionality
        slide_interval: 5000, // Length between transitions
        transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed: 700, // Speed of transition

        // Components             
        slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')

        slides: [{
            image: '',
            title: 'MatchBOX Video'
        }]

    });


    $('div#flickrImages').flickrush({
        limit: 8,
        id:'52617155@N08',
        random: true,
        style: 'img-frame'
    });


    $("#ticker").tweet({
        username: "matchboxcowork",
        page: 1,
        avatar_size: 32,
        count: 3,
        loading_text: "loading ..."
    }).bind("loaded", function () {
        var ul = $(this).find(".tweet_list");
        var ticker = function () {
            setTimeout(function () {
                ul.find('li:first').animate({
                    marginTop: '-500'
                }, 500, function () {
                    $(this).detach().appendTo(ul).removeAttr('style');
                });
                ticker();
            }, 5000);
        };
        ticker();
    });



    /////////////////////// END EDITING /////////////////////


    $('.slide-panel .toggle').click(function () {

        $('.slide-panel').slideUp();
        $('.toggle-panel a').removeClass("opened").addClass("closed").html("<i class=\"icon-plus\"></i><span class=\"arrow\"></span>");
    })


    $('.toggle-panel a').click(function (e) {
        e.preventDefault();

        var curA = $(this);

        if (curA.hasClass("closed")) {
            console.log("closed");
            curA.removeClass("closed").addClass("opened").html("<i class=\"icon-minus\"></i><span class=\"arrow\"></span>");
            $(".slide-panel").slideDown();
        } else {
            console.log("opened");
            curA.removeClass("opened").addClass("closed").html("<i class=\"icon-plus\"></i><span class=\"arrow\"></span>");
            $(".slide-panel").slideUp();

        }


    });


    $("a[class^='prettyPhoto']").prettyPhoto();


    $(".menu").sticky({
        topSpacing: 0,
        wrapperClassName: 'menu'
    });


    var pose = -73;
    $.localScroll({
        offset: {
            left: 0,
            top: pose
        }
    });

    $("#main-menu li:not('.toggle-panel')").click(function () {
        $("#main-menu li").removeClass("active");
        $(this).addClass("active");
    });


    $("#foot a").click(function () {
        $("#menu li").removeClass("active");
        $("#menu li:first").addClass("active");
    });


    $('.successMessage').hide();
    $("#contactForm").validate({
        submitHandler: function (form) {
            jQuery(form).ajaxSubmit({
                url: 'assets/php/form.php',
                target: ".successMessage"
            });
            $('#contactForm').hide(0, function () {
                $('.successMessage').css("text-indent", 0).fadeIn('slow').delay(2000).fadeOut('slow', function () {
                    $('#contactForm').fadeIn('slow');
                    $("#contactForm input[name='email']").val("Enter email here.");
                });
            });
        }
    });


    var $filterType = $('#filterOptions li.active a').attr('class');
    var $holder = $('ul.holder');
    var $data = $holder.clone();

    $('#filterOptions li a').click(function (e) {

        $('#filterOptions li').removeClass('active');

        var $filterType = $(this).attr('class');
        $(this).parent().addClass('active');

        if ($filterType == 'all') {
            var $filteredData = $data.find('li');
        } else {
            var $filteredData = $data.find('li[data-type~=' + $filterType + ']');
        }


        $holder.quicksand($filteredData, {
            duration: 800,
            easing: 'easeInOutQuad'
        },

        function () {
            $("a[class^='prettyPhoto']").prettyPhoto();
        });
        return false;
    });


});

var lastId,
    topMenu = $("#main-menu"),
    topMenuHeight = topMenu.outerHeight() + 15,

    menuItems = topMenu.find("a"),

    scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });

$(window).scroll(function () {

    if ($('.slide-panel').css("position") == "fixed") {

        $('.slide-panel').slideUp();

    } else {
        $('.slide-panel').show();
    }

    $('.toggle-panel a').removeClass("opened").addClass("closed");
    $("li.toggle-panel a").html("<i class=\"icon-plus\"></i> <span class=\"arrow\"></span>");


    var fromTop = $(this).scrollTop() + topMenuHeight;

    var cur = scrollItems.map(function () {
        if ($(this).offset().top < fromTop) return this;
    });
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        menuItems.parent().removeClass("active")
            .end().filter("[href=#" + id + "]").parent().addClass("active");
    }
});




$(window).load(function () {
    $('.fullwidthbanner').revolution({
        delay: 9000,
        startwidth: 960,
        startheight: 500,

        onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

        thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
        thumbHeight: 50,
        thumbAmount: 3,

        hideThumbs: 0,
        navigationType: "none", //bullet, thumb, none, both  (No Shadow in Fullwidth Version !)
        navigationArrows: "verticalcentered", //nexttobullets, verticalcentered, none
        navigationStyle: "round", //round,square,navbar

        touchenabled: "on", // Enable Swipe Function : on/off

        navOffsetHorizontal: 0,
        navOffsetVertical: 20,

        stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
        stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic



        fullWidth: "on",

        shadow: 0 //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

    });

});

function validateMembershipApp() {

    var errors = false;


    if (checkSingleItem(document.getElementById('appFullName'), document.getElementById('appFullNameError')) == false)
    {
        errors = true;
    }

    if (checkSingleItem(document.getElementById('appStreet'), document.getElementById('appStreetError')) == false)
    {
        errors = true;
    }

    if (checkSingleItem(document.getElementById('appEmail'), document.getElementById('appEmailError')) == false)
    {
        errors = true;
    }

    if (checkSingleItem(document.getElementById('appJob'), document.getElementById('appJobError')) == false)
    {
        errors = true;
    }

    if (checkSingleItem(document.getElementById('appWork'), document.getElementById('appWorkError')) == false)
    {
        errors = true;
    }

    if (checkSingleItem(document.getElementById('appOffer'), document.getElementById('appOfferError')) == false)
    {
        errors = true;
    }

    if (checkSingleItem(document.getElementById('appHear'), document.getElementById('appHearError')) == false)
    {
        errors = true;
    }

    if (checkSingleItem(document.getElementById('appRelationship'), document.getElementById('appRelationshipError')) == false)
    {
        errors = true;
    }

    if (document.getElementById('appPromise').checked == false)
    {
        var errorMessage_element = document.getElementById('appPromiseError');
        errorMessage_element.style.display = 'block';
        errorMessage_element.style.color = '#F05241';
        errors = true;
    }
    else
    {
        var errorMessage_element = document.getElementById('appPromiseError');
        errorMessage_element.style.display = 'none';
    }

    if (errors == true)
    {
        var errorMessage_element = document.getElementById('appErrorMessage');
        errorMessage_element.style.display = 'block';
        errorMessage_element.style.color = '#F05241';
        return false;
    }
    else
    {	
        document.forms['membershipForm'].submit();
    }
}

function checkSingleItem(item, errorMessage)
{
    if (item.value == "")
    {
        errorMessage.style.display = 'block';
        errorMessage.style.color = '#F05241';
        return false;
    }
    else
    {
        errorMessage.style.display = 'none';
        return true;
    }
}

function manageSection(sectionID) {

    var section = document.getElementById(sectionID);

    if(sectionID==='virtualTour') {
        var html = '<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1424526264707!6m8!1m7!1sVIUz6TEPGp8AAAQWtNuo5A!2m2!1d40.416799!2d-86.890355!3f128!4f0!5f1.4214797185029173" width="100%" height="700" frameborder="0" style="border:0"></iframe>';
        section.innerHTML = html;
    }	

    if (section.className == "collapsed"){
        section.className = "expanded";
    }
    else{
        section.className = "collapsed";				
        return true;
    }
}

function moveTo(contentArea){
    var goPosition = $(contentArea).offset().top - 73;
    $('html,body').animate({ scrollTop: goPosition}, 'slow');
}
