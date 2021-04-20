$('body').on('click', '.button_disc', function (e) {
    var id = $(this).data('id'),
        page = $(this).data('page'),
        arr = {},
        mass = {},
        i = 0,
        form = $(this).parent().parent(),
        array = $(this).parent().parent().serializeArray();


    $.each(array, function (key, val) {
        arr[val.name] = val.value;
        if (val.value) {
            i++;
        }
    });

    if (id=='technology'){
        var name = $(this).parent().find('input[name="name"]');
        arr['name'] = name.val();
    }

    mass['page'] = page;
    mass['block'] = id;
    mass['info'] = arr;

    if (i>0) {
        $.ajax({
            type: "POST",
            url: "/admin/add_block_v2",
            data: mass,
            dataType: 'html',
            success: function (response) {
                $('#' + id).html(response);
                form.trigger("reset");
            }
        });
    }
});

$('body').on('click', '.button_not_mass', function (e) {
    var id = $(this).data('id'),
        page = $(this).data('page'),
        arr = {},
        mass = {},
        input = $(this).parent().parent().find('input[name="icon"]'),
        edit = $(this).data('edit');
    if (edit) {
        var textarea = CKEDITOR.instances[edit].getData();
    }else{
        var textarea = $(this).parent().parent().find('textarea').val();
    }

    if (input&& typeof (input)!=='undefined') {
        arr['icon'] = input.val();
    }

    arr['content'] = textarea;

    mass['page'] = page;
    mass['block'] = id;
    mass['info'] = arr;
console.log(arr);
    $.ajax({
        type: "POST",
        url: "/admin/add_block",
        data: mass,
        dataType: 'html',
        success: function(response){
            $('.modal').modal('hide');
            $("#modal-info").modal('show');
            setTimeout(function() {$('#modal-info').modal('hide') }, 1000);
        }
    });
});

$('body').on('click', '.edit_button', function (e) {
    if($(this).text() == '')
    {
        $(this).text('Ok');
    }
    else {
        var id = $(this).data('id'),
            page = $(this).data('page'),
            arr = {},
            mass = {},
            i = 0,
            form = $(this).parent(),
            array = form.serializeArray(),
            rank = $(this).data('rank');

        $.each(array, function (key, val) {
            arr[val.name] = val.value;
            if (val.value) {
                i++;
            }
        });

        mass['page'] = page;
        mass['block'] = id;
        mass['info'] = arr;
        mass['rank'] = rank;
        
        if (i>0) {
            $.ajax({
                type: "POST",
                url: "/admin/add_block_v2",
                data: mass,
                dataType: 'html',
                success: function (response) {
                    $('#' + id).html(response);
                }
            });
        }
    }

    $(this).parent().find('span').toggleClass('unactive');
    $(this).parent().find('input').toggleClass('active');
    $(this).parent().find('textarea').toggleClass('active');

});

$('body').on('click', '.del_button', function (e) {
    var id = $(this).data('id'),
        page = $(this).data('page'),
        rank = $(this).data('rank');

    $.ajax({
        type: "POST",
        url: "/admin/del_block_v2",
        data: {block:id,rank:rank,page:page},
        dataType: 'html',
        success: function(response){
            $('#'+id).html(response);
        }
    });

});

$(document).ready(function(){
    $('form[id*="forms"]').submit(function( event ) {
        event.preventDefault();
        var array = $(this).serializeArray(),
            page = $(this).data('page'),
            arr = {};

        $.each(array, function (key, val) {
            arr[key] = {};
            arr[key]['alias'] = val.name;
            arr[key]['info'] = val.value;
        });

        arr['page'] = page;
        $.ajax({
            type: "POST",
            url: "/admin/submit_block",
            data: arr,
            dataType: 'html',
            success: function(response){
                $('.modal').modal('hide');
                $("#modal-info").modal('show');
                setTimeout(function() {$('#modal-info').modal('hide') }, 3000);
            }
        });
        return false;
    });

    $('form[id="add_reviews"]').submit(function( event ) {
        event.preventDefault();
        var array = $(this).serializeArray(),
            arr = {};

        $.each(array, function (key, val) {
            arr[val.name] = val.value;
        });

        $(this).closest('form')[0].reset();

        $.ajax({
            type: "POST",
            url: "/admin/setreview",
            data: arr,
            dataType: 'html',
            success: function(response){
                $('.modal').modal('hide');
                $("#modal-info").modal('show');
                setTimeout(function(){
                    $('#modal-info').modal('hide');
                }, 1500);
                setTimeout(function(){
                    location.reload();
                }, 1500);
            }
        });
        return false;
    });

    $('form[id="edit_reviews"]').submit(function( event ) {
        event.preventDefault();
        var array = $(this).serializeArray(),
            id = '',
            arr = {};

        $.each(array, function (key, val) {
            if (val.name=='id'){
                id = val.value;
            }else {
                arr[val.name] = val.value;
            }
        });


        if (id){
            $.ajax({
                type: "POST",
                url: "/admin/editreview",
                data: {id:id,data:arr},
                dataType: 'html',
                success: function(response) {
                    $('.modal').modal('hide');
                    $("#modal-info").modal('show');

                    setTimeout(function () {
                        $('#modal-info').modal('hide');
                    }, 1500);

                    setTimeout(function () {
                        location.reload();
                    }, 1500);
                }
            });
        }else{
            $('.modal').modal('hide');
            alert('Что-то пошло нетак(');
        }
        return false;
    });
});

$('body').on('click', '.del_reviews', function (e) {
    var id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: "/admin/delreview",
        data: {id:id},
        dataType: 'html',
        success: function(response){
            location.reload();
        }
    });

});

$('body').on('click', '.edit_reviews', function (e) {
    var id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: "/admin/getreview",
        data: {id:id},
        dataType: 'html',
        success: function(response){
            $('#reviews_edit').html(response);
            $("#modal-edit-reviews").modal('show');
        }
    });

});

$('body').on('click', '.del_item', function (e) {
    var id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: "/item/item_delete",
        data: {id:id},
        dataType: 'html',
        success: function(response){
            location.reload();
        }
    });

});

$('body').on('click', '.del_portf', function (e) {
    var id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: "/portfolio/item_delete",
        data: {id:id},
        dataType: 'html',
        success: function(response){
            location.reload();
        }
    });

});

$('body').on('click', '#add_spisok', function (e) {
    var nazv = $(this).parent().find('input[name="icon"]').val(),
        img = $(this).parent().find('input[name="image"]').val(),
        url = $(this).parent().find('input[name="url"]').val();

    $.ajax({
        type: "POST",
        url: "/admin/add_spisok",
        data: {nazv:nazv,image:img, url:url},
        dataType: 'html',
        success: function(response){
            location.reload();
        }
    });

});

$('body').on('click', '.del_title_button', function (e) {
    var id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: "/admin/del_title_button",
        data: {id:id},
        dataType: 'html',
        success: function(response){
            location.reload();
        }
    });

});

$('body').on('click', '.edit_title_button', function (e) {
    if($(this).text() == '')
    {
        $(this).text('Ok');
    }
    else {
        var id = $(this).data('id'),
            mass = {};

        mass['id'] = id;
        mass['title'] = $(this).parent().find('input[name="title"]').val();
        mass['image'] = $(this).parent().find('input[name="image"]').val();
        mass['url'] = $(this).parent().find('input[name="url"]').val();

            $.ajax({
                type: "POST",
                url: "/admin/edit_title_button",
                data: mass,
                dataType: 'html',
                success: function (response) {
                    location.reload();
                }
            });

    }

    $(this).parent().find('span').toggleClass('unactive');
    $(this).parent().find('input').toggleClass('active');
    $(this).parent().find('textarea').toggleClass('active');

});

jQuery(document).ready(function(){

    jQuery(document).on("click", ".deleteImage", function(){
        var id = $(this).data("id"),
            hitURL = baseURL + "deleteImage",
            currentRow = $(this);

            jQuery.ajax({
                type : "POST",
                dataType : "json",
                url : hitURL,
                data : { id : id }
            }).done(function(data){
                console.log(data);
                currentRow.parents('tr').remove();
                if(data.status = true) { alert("Image successfully deleted"); }
                else if(data.status = false) { alert("Image deletion failed"); }
                else { alert("Access denied..!"); }
            });
    });

    $('body').on('click', '.edit_button_other', function (e) {
        if($(this).text() == '')
        {
            $(this).text('Ok');
        }
        else {
            var id = $(this).data('id'),
                arr = {},
                mass = {},
                i = 0,
                form = $(this).parent(),
                array = form.serializeArray(),
                rank = $(this).data('rank');

            $.each(array, function (key, val) {
                arr[val.name] = val.value;
                if (val.value) {
                    i++;
                }
            });

            mass['block'] = id;
            mass['info'] = arr;
            mass['rank'] = rank;

            if (i>0) {
                $.ajax({
                    type: "POST",
                    url: "/admin/add_infoOther",
                    data: mass,
                    dataType: 'html',
                    success: function (response) {
                        $('#' + id).html(response);
                    }
                });
            }
        }

        $(this).parent().find('span').toggleClass('unactive');
        $(this).parent().find('input').toggleClass('active');
        $(this).parent().find('textarea').toggleClass('active');

    });

    $('body').on('click', '.button_disc_other', function (e) {
        var id = $(this).data('id'),
            arr = {},
            mass = {},
            i = 0,
            form = $(this).parent().parent(),
            array = $(this).parent().parent().serializeArray();


        $.each(array, function (key, val) {
            arr[val.name] = val.value;
            if (val.value) {
                i++;
            }
        });

        mass['block'] = id;
        mass['info'] = arr;

        if (i>0) {
            $.ajax({
                type: "POST",
                url: "/admin/add_infoOther",
                data: mass,
                dataType: 'html',
                success: function (response) {
                    $('#' + id).html(response);
                    form.trigger("reset");
                }
            });
        }
    });

    $('body').on('click', '.del_button_other', function (e) {
        var id = $(this).data('id'),
            rank = $(this).data('rank');

        $.ajax({
            type: "POST",
            url: "/admin/del_infoOther",
            data: {block:id,rank:rank},
            dataType: 'html',
            success: function(response){
                $('#'+id).html(response);
            }
        });

    });

    $('body').on('click', '.button_service_other', function (e) {
        var id = $(this).data('id'),
            arr = {},
            i = 0,
            array = $(this).parent().parent().serializeArray();


        $.each(array, function (key, val) {
            arr[val.name] = val.value;
            if (val.value) {
                i++;
            }
        });

        arr['id'] = id;

        if (i>0) {
            $.ajax({
                type: "POST",
                url: "/admin/editservice",
                data: arr,
                dataType: 'html',
                success: function (response) {
                    location.reload();
                }
            });
        }
    });
    
    $('body').on('click', '.button_menu_other', function (e) {
        var id = $(this).data('id'),
            arr = {},
            i = 0,
            array = $(this).parent().parent().serializeArray();


        $.each(array, function (key, val) {
            arr[val.name] = val.value;
            if (val.value) {
                i++;
            }
        });

        arr['id'] = id;

        if (i>0) {
            $.ajax({
                type: "POST",
                url: "/admin/editMenu",
                data: arr,
                dataType: 'html',
                success: function (response) {
                    location.reload();
                }
            });
        }
    });
    
    $('body').on('click', '.edit_mail', function (e) {
        if($(this).text() == '')
        {
            $(this).text('Ok');
        }
        else {
            var mass = {};
            
            mass['id'] = $(this).data('id');
            mass['mail'] = $(this).parent().find('input').val();
            console.log(mass);
                $.ajax({
                    type: "POST",
                    url: "/admin/edit_mail",
                    data: mass,
                    dataType: 'html',
                    success: function (response) {
                        location.reload();
                    }
                });
            }
    
        $(this).parent().find('span').toggleClass('unactive');
        $(this).parent().find('input').toggleClass('active');
        $(this).parent().find('textarea').toggleClass('active');

    });
    
    $('body').on('click', '.del_mail', function (e) {
        var id = $(this).data('id');
    
        $.ajax({
            type: "POST",
            url: "/admin/del_mail",
            data: {id:id},
            dataType: 'html',
            success: function(response){
                location.reload();
            }
        });
    
    });

});