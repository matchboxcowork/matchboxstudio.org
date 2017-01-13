var newsArticles = [];

function reorder() {
    $(newsArticles).each(function(key, article) {
        if(article.order) {
            article.order = parseInt(article.order);
        }
    });
    newsArticles.sort(function(a, b) {
        return a.order - b.order;
    });
    //console.log(newsArticles);
}

$(function() {
  /*function prevArt() {
    //console.log('prev');
    //console.log(article_num);
    article_num = article_num-3;
    //console.log(article_num);
    if(article_num < 0) {
        console.log('length',newsArticles.length);
        article_num = newsArticles.length + article_num;
    }
    //console.log(article_num);

    var prev = newsArticles[article_num];

    $('.news-list').prepend('<div class="news-article" style="top:-90px">'+
                             '<a href="'+prev.href+'" target="_blank"><h4>'+prev.title+'</h4></a>'+
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
  }*/

  function nextArt() {
    //console.log('next');
    //console.log(article_num);
    if(article_num+1 === newsArticles.length) {
        article_num = 0;
    } else {
        article_num++;
    }
    //console.log(article_num);
    var next = newsArticles[article_num];
    $('.news-list').append('<div class="news-article" style="top:'+$('.news-list').height()+'px">'+
                             '<a href="'+next.href+'" target="_blank"><h4>'+next.title+'</h4></a>'+
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



  $.ajax({
    url: "../newsCtl.php",
    type: "POST",
    data: { "funct": "getArticles" }
  })
  .done(function(data) {
    newsArticles = JSON.parse(data).filter(function(art) { if(art.active == '1') { return art; }});

    //console.log(newsArticles);

    reorder();

    $(newsArticles).each(function(key, article) {
        if(article.active) {
            $('.news-list').append('<div class="news-article" style="top:'+top+'px">'+
                                     '<a href="'+article.href+'" target="_blank"><h4>'+article.title+'</h4></a>'+
                                     '<p>'+article.description+'</p>'+
                                   '</div>'
            );
        }
        top = top + 90;
    });
  });

  var top = 0;
  var article_num = 2;
  var pause = false;

  /* News Controls */
  /*
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
  });*/
  /* / News Controls */

  var newsSlider = setInterval(function() {
    if(!pause) {
        if(newsArticles.length > 0) {
          nextArt();
        }
    }
  },5000);


});