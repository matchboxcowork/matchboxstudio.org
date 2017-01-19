var newsArticles = [];

function getArticles() {
    $.ajax({
        url: "newsCtl.php",
        type: "POST",
        data: { "funct": "getArticles" }
    })
    .done(function(data) { 
        newsArticles = JSON.parse(data);
        //console.log(newsArticles);

        appendRows();
    });
}

function initUpdateArt(id) {
    $('.news-admin h3 span').html('Edit');
    $('.news-admin a.button.mbxred').attr('onclick','updateArt('+id+')');
    var article = newsArticles.filter(function(art) { if(art.id == id) { return art; }})[0];
    $('.news-form input[name="title"]').val(article.title);
    $('.news-form input[name="url"]').val(article.href);
    $('.news-form textarea').val(article.description);

    var length = $('.news-form textarea').val().length;
    $('.length').html(length);
}

function updateArt(id) {
    var title = $('.news-form input[name="title"]').val();
    var href = $('.news-form input[name="url"]').val();
    var description = $('.news-form textarea').val();
    if(!checkInputs(title, href, description)) {
        $('.invalid').html('');
        $.ajax({
            url: "newsCtl.php",
            type: "POST",
            data: { "funct":"updateArticles", "id":id, "title":title, "href":href, "description":description}
        })
        .done(function(data) {
            newsArticles = JSON.parse(data);
            //console.log(newsArticles);

            appendRows();
        });
        clearNews();
    } else {
        $('.invalid').html('Please enter a title, valid URL, and description.');
    }
}

function updateActive(id, active) {
    $.ajax({
        url: "newsCtl.php",
        type: "POST",
        data: { "funct":"updateActive", "id":id, "active":active}
    })
    .done(function(data) {
        newsArticles = JSON.parse(data);
        //console.log(newsArticles);

        appendRows();
        initUpdateNew();
    });
    clearNews();
}

function updateOrder(id, order) {
    $.ajax({
        url: "newsCtl.php",
        type: "POST",
        data: { "funct":"updateOrder", "id":id, "order":order}
    })
    .done(function(data) {
        newsArticles = JSON.parse(data);
        //console.log(newsArticles);

        appendRows();
    });
    clearNews();
}

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

function appendRows() {
    $('.news-management.active tbody').html('');
    $('.news-management.inactive tbody').html('');

    reorder();
    $(newsArticles).each(function(key, article) {
        if(article.active === '1') {        
            $('.news-management.active').append('<tr class="ui-state-default" data-id="'+article.id+'">'+
                                          '<td width="15%"><span class="order">'+article.order+'</span></td>'+
                                          '<td width="50%">'+article.title+'</td>'+
                                          '<td width="15%"><input type="checkbox" checked /></td>'+
                                          '<td width="20%">'+
                                           '<i class="icon-pencil icon-large" onclick="initUpdateArt('+article.id+')"></i>&nbsp;&nbsp;<i class="icon-trash icon-large" onclick="deleteArt('+article.id+')"></i>'+
                                          '</td>'+
                                         '</tr>'
            );
        } else {
            $('.news-management.inactive').append('<tr class="ui-state-default" data-id="'+article.id+'">'+
                                          '<td width="15%"></td>'+
                                          '<td width="50%">'+article.title+'</td>'+
                                          '<td width="15%"><input type="checkbox" /></td>'+
                                          '<td width="20%">'+
                                           '<i class="icon-pencil icon-large" onclick="initUpdateArt('+article.id+')"></i>&nbsp;&nbsp;<i class="icon-trash icon-large" onclick="deleteArt('+article.id+')"></i>'+
                                          '</td>'+
                                         '</tr>'
            );
        }
    });
    $('.order').fadeIn(1000);
}

function clearNews() {
    $('.news-admin h3 span').html('Add');
    $('.news-admin a.button.mbxred').attr('onclick','createArt()');
    $('.news-form input[name="title"]').val('');
    $('.news-form input[name="url"]').val('');
    $('.news-form textarea').val('');
    $('.length').html('0');
}

function deleteArt(id) {
    $.ajax({
        url: "newsCtl.php",
        type: "POST",
        data: { "funct": "deleteArticles", "id":id}
    })
    .done(function(data) {
        newsArticles = JSON.parse(data);
        //console.log(newsArticles);

        appendRows();
        initUpdateNew();
    });
}

function initUpdateNew() {
    $('.news-management.active tr').each(function(key, value) {
        console.log($(this).attr('data-id'));
        $('td:first-child', this).html('<span class="order">'+key+'</span>');
        if(typeof($(this).attr('data-id')) != 'undefined') {
            updateOrder($(this).attr('data-id'), key);
        }
    });
    $('.order').fadeIn(1000);
}

function isEmpty(value) {
    if(value == '' || value == null || typeof(value) == 'undefined') {
        return true;
    }
}

function checkInputs(title, href, description) {
    if(isEmpty(title)) {
        return true;
    } else if(!validateURL(href)) {
        return true;
    } else if(isEmpty(description)) {
        return true;
    } else {
        return false;
    }
}

function createArt() {
    var title = $('.news-form input[name="title"]').val();
    var href = $('.news-form input[name="url"]').val();
    var description = $('.news-form textarea').val();
    if(!checkInputs(title, href, description)) {
        $('.invalid').html('');
        $.ajax({
            url: "newsCtl.php",
            type: "POST",
            data: { "funct": "createArticles", "title":title, "order":$('.news-management.active tr').length, "href":href, "description":description}
        })
        .done(function(data) {
            newsArticles = JSON.parse(data);
            //console.log(newsArticles);

            appendRows();
        });
        clearNews();
    } else {
        $('.invalid').html('Please enter a title, valid URL, and description.');
    }
}

function validateURL(url) {
    var urlregex = /^(https?|ftp):\/\/([a-zA-Z0-9.-]+(:[a-zA-Z0-9.&%$-]+)*@)*((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9][0-9]?)(\.(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])){3}|([a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(:[0-9]+)*(\/($|[a-zA-Z0-9.,?'\\+&%$#=~_-]+))*$/;
    return urlregex.test(url);
}


$(function() {
  $(".news-management.active tbody").sortable({
      update: function(event, ui) {
          initUpdateNew();
      }
  }).disableSelection();

  $(document).on('click', '.news-management input[type="checkbox"]', function() {
      var row = $(this).parent().parent().clone();
      if($(this)[0].checked) {
          $(this).parent().parent().remove();
          var num = $('.news-management.active tbody tr').length + 1;
          row.find('td:first-child').html(num);
          $('.news-management.active tbody').append(row);
          updateActive(row.attr('data-id'),'1');
      } else {
          $(this).parent().parent().remove();
          row.find('td:first-child').html('');
          $('.news-management.inactive tbody').append(row);
          updateActive(row.attr('data-id'),'0');
      }
  });

  getArticles();

  $('.news-form textarea').keyup(function() {
    var length = $(this).val().length;
    $('.length').html(length);
  });

});