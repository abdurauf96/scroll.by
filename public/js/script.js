//форма подписаться на новости
$(document).ready(function () {
    $("#subs_form").submit(function (event) {
      event.preventDefault();
     
      var email = new FormData(this);
      var form = $(this);
      if(email!=''){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/subscribe",
            data: email,
            cache:false,
            contentType: false,
            processData: false,
          }).done(function (response) {
            location.reload();
            $("#modal-succses-subs").modal('show');
            setTimeout(function() {$('#modal-succses-subs').modal('hide') }, 3000);
            form.trigger('reset');
            
          });
      }
    });
  });

  
  //форма оставить заявку
  $(document).ready(function() {
    $('form[id*="zayafka_form"]').submit(function( event ) {
        event.preventDefault();
        form = $(this);
        var formData = new FormData(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/zayafka",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(response){
                location.reload();
                $('.modal').modal('hide');
                $("#modal-succses").modal('show');
                setTimeout(function() {$('#modal-succses').modal('hide') }, 3000);
                form.trigger('reset');
            }
        });
    });
});

//оставить отзыв
$(document).ready(function() {
    $('form[id*="review_form"]').submit(function( event ) {
        event.preventDefault();
        form = $(this);
        var formData = new FormData(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/send_review",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(response){
                location.reload();
                $('.modal').modal('hide');
                $("#modal-succses-review").modal('show');
                setTimeout(function() {$('#modal-succses-review').modal('hide') }, 3000);
                form.trigger('reset');
                
            }
        });
    });
});

//Получить консультацию
$(document).ready(function() {
    $('form[id*="get_consult"]').submit(function( event ) {
        event.preventDefault();
        form = $(this);
        var formData = new FormData(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/get_consult",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(response){
                location.reload();
                $('.modal').modal('hide');
                $("#modal-succses-question").modal('show');
                setTimeout(function() {$('#modal-succses-question').modal('hide') }, 3000);
                form.trigger('reset');
            }
        });
    });
});

//Задайте вопрос
$(document).ready(function() {
    $('form[id*="send_question"]').submit(function( event ) {
        event.preventDefault();
        form = $(this);
        var formData = new FormData(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/send_question",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(response){
                location.reload();
                $('.modal').modal('hide');
                $("#modal-succses-question").modal('show');
                setTimeout(function() {$('#modal-succses-question').modal('hide') }, 3000);
                form.trigger('reset');
            }
        });
    });
});

$(function(){
    $('body').on('click', '.btn_our_work', function (e) {
        var mass = {};

        mass['count_add'] = $(this).data('items_count');
       
        $.ajax({
            type: "POST",
            url: "/app/blog_items",
            data: mass,
            dataType: 'html',
            success: function(response) {
                $('.blog-show').remove();
                $('#news_items').append(response);
            }
        });

    });
    $('body').on('click', '.btn_reviews', function (e) {
        var mass = {};

        mass['count_add'] = $(this).data('items_count');
	
        $.ajax({
            type: "POST",
            url: "/app/reviews_items",
            data: mass,
            dataType: 'html',
            success: function(response) {
                $('.btn_reviews').remove();
                $('#items_reviews').append(response);
            }
        });

    });

    // $('body').on('click', '.portfolio_items', function (e) {
    //     var mass = {};

    //     mass['count_add'] = $(this).data('items_count');

    //     var search = decodeURI(window.location.search).slice(1);
    //     var items_pred = search.split('=');

    //     mass['filter'] = items_pred[1];
     

	// // $('.portfolio-item').last().toggleClass("active");
    //     $.ajax({
    //         type: "GET",
    //         url: "/app/portfolio_items",
    //         data: mass,
    //         dataType: 'html',
    //         success: function(response) {
    //             $('.portfolio_items').remove();
    //             $('#portfolio').append(response);
	// 			update_img();
	// 		}
    //     });

    // });

    $('.block_nav').on('click', 'a', function (e) {
        e.preventDefault();
        // var url = decodeURI(window.location.search),
        //     other = $(this).data('other'),
        //     page = $(this).data('page'),
        //     mass = {};

        // $(this).parent().toggleClass('active');

        // mass['filter'] = searhes($(this).data('name'), 'filter');
        // console.log(mass['filter']);

        // if ($(this).data('name')=='all'){
        //     var li_mass = $(this).parent().parent().find('li[class="active"]');
        //     for (var i=0;i<li_mass.length;i++){
        //         li_mass[i].className = '';
        //     }
        //     $(this).parent().addClass('active');
        // }else{
        //     $(this).parent().parent().find('a[data-name="all"]').parent().removeClass('active');
        // }

        // mass['js'] = 'yes';
        // mass['other'] = other;

        // if (page=='portfolio') {
        //     $.ajax({
        //         type: "GET",
        //         url: "/app/portfolio_items",
        //         data: mass,
        //         dataType: 'html',
        //         success: function (response) {
        //             $('#portfolio').html(response);
		// 			update_img();
        //         }
        //     });
        // }

        // if (page=='blog') {
        //     $.ajax({
        //         type: "GET",
        //         url: "/app/blog_items",
        //         data: mass,
        //         dataType: 'html',
        //         success: function (response) {
        //             $('#news_items').html(response);
        //         }
        //     });
        // }
        // return false;
    });
});

// 

// $(document).ready(function() {
//     $('form[id="question"]').submit(function( event ) {
//         event.preventDefault();
//         var array = $(this).serializeArray(),
//             form = $(this);

//         $.ajax({
//             type: "POST",
//             url: "/app/mail",
//             data: array,
//             dataType: 'html',
//             success: function(response){
//                 $('.modal').modal('hide');
//                 $("#modal-succses-question").modal('show');
//                 setTimeout(function() {$('#modal-succses-question').modal('hide') }, 3000);
//                 form.trigger('reset');
//             }
//         });
//         return false;
//     });

// });

function searhes(number,naim){
    var result = '';
    if (window.location.search){
        search = decodeURI(window.location.search).slice(1);
        var searchs = search.split('&'),
            k=0;

        for (var i=0;i<searchs.length;i++){
            if (searchs[i].indexOf(naim)>=0){
                var items_pred = searchs[i].split('='),
                    h = 0;
                var items = items_pred[1].split(',');
                if (items) {
                    for (var j = 0; j < items.length; j++) {
                        if (number == items[j]) {
                            items.splice(j, 1);
                            h = 1;
                        }
                    }
                }
                    if (h==0){
                        if (items) {
                            items[items.length] = number;
                        }else{
                            items[0] = number;
                        }
                    }

                    if (items[0]) {
                        searchs[i] = naim + '=' + items.join(',');
                        result = items.join(',');
                    }else{
                        searchs.splice(i, 1);
                        result = '';
                    }
                    if (!number) {
                        searchs.splice(i, 1);
                    }

                k = 100;
            }
        }


        search = searchs.join('&');

        if (number!='all') {
            if (k == 0) {
                updateURL(window.location.search + '&' + naim + '=' + number);
                result = number;
            } else {
                updateURL('?' + search);
            }
        }else{
            updateURL('?');
            result = '';
        }
    }else{
        updateURL('?'+naim+'='+number);
        result = number;
    }

    return result;
}

function updateURL(search) {
    if (history.pushState) {
        var baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
        var newUrl = baseUrl + search;
        history.pushState(null, null, newUrl);
    }else {
        console.warn('History API не поддерживается');
    }
}

function update_img(){
	[].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
				  img.setAttribute('src', img.getAttribute('data-src'));
				  img.onload = function() {
				 img.removeAttribute('data-src');
				  };
	});
}
