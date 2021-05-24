<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>messages like material design - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
        font-family: Roboto, sans-serif;
        font-size: 13px;
        line-height: 1.42857143;
        color: #767676;
        background-color: #edecec;
    }

    #messages-main {
        position: relative;
        margin: 0 auto;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }

    #messages-main:after,
    #messages-main:before {
        content: " ";
        display: table;
    }

    #messages-main .ms-menu {
        position: absolute;
        left: 0;
        top: 0;
        border-right: 1px solid #eee;
        padding-bottom: 50px;
        height: 100%;
        width: 240px;
        background: #fff;
    }

    @media (min-width:768px) {
        #messages-main .ms-body {
            padding-left: 240px;
        }
    }

    @media (max-width:767px) {
        #messages-main .ms-menu {
            height: calc(100% - 58px);
            display: none;
            z-index: 1;
            top: 58px;
        }

        #messages-main .ms-menu.toggled {
            display: block;
            m
        }

        #messages-main .ms-body {
            overflow: hidden;
        }
    }

    #messages-main .ms-user {
        padding: 15px;
        background: #f8f8f8;
    }

    #messages-main .ms-user>div {
        overflow: hidden;
        padding: 3px 5px 0 15px;
        font-size: 11px;
    }

    #messages-main #ms-compose {
        position: fixed;
        bottom: 120px;
        z-index: 1;
        right: 30px;
        box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
    }

    #ms-menu-trigger {
        user-select: none;
        position: absolute;
        left: 0;
        top: 0;
        width: 50px;
        height: 100%;
        padding-right: 10px;
        padding-top: 19px;
    }

    #ms-menu-trigger i {
        font-size: 21px;
    }

    #ms-menu-trigger.toggled i:before {
        content: '\f2ea'
    }

    .fc-toolbar:before,
    .login-content:after {
        content: ""
    }

    .message-feed {
        padding: 20px;
    }

    #footer,
    .fc-toolbar .ui-button,
    .fileinput .thumbnail,
    .four-zero,
    .four-zero footer>a,
    .ie-warning,
    .login-content,
    .login-navigation,
    .pt-inner,
    .pt-inner .pti-footer>a {
        text-align: center;
    }

    .message-feed.right>.pull-right {
        margin-left: 15px;
    }

    .message-feed:not(.right) .mf-content {
        background: #03a9f4;
        color: #fff;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }

    .message-feed.right .mf-content {
        background: #eee;
    }

    .mf-content {
        padding: 12px 17px 13px;
        border-radius: 2px;
        display: inline-block;
        max-width: 80%
    }

    .mf-date {
        display: block;
        color: #B3B3B3;
        margin-top: 7px;
    }

    .mf-date>i {
        font-size: 14px;
        line-height: 100%;
        position: relative;
        top: 1px;
    }

    .msb-reply {
        box-shadow: 0 -20px 20px -5px #fff;
        position: relative;
        margin-top: 30px;
        border-top: 1px solid #eee;
        background: #f8f8f8;
    }

    .four-zero,
    .lc-block {
        box-shadow: 0 1px 11px rgba(0, 0, 0, .27);
    }

    .msb-reply textarea {
        width: 100%;
        font-size: 13px;
        border: 0;
        padding: 10px 15px;
        resize: none;
        height: 60px;
        background: 0 0;
    }

    .msb-reply button {
        position: absolute;
        top: 0;
        right: 0;
        border: 0;
        height: 100%;
        width: 60px;
        font-size: 25px;
        color: #2196f3;
        background: 0 0;
    }

    .msb-reply button:hover {
        background: #f2f2f2;
    }

    .img-avatar {
        height: 37px;
        border-radius: 2px;
        width: 37px;
    }

    .list-group.lg-alt .list-group-item {
        border: 0;
    }

    .p-15 {
        padding: 15px !important;
    }

    .btn:not(.btn-alt) {
        border: 0;
    }

    .action-header {
        position: relative;
        background: #f8f8f8;
        padding: 15px 13px 15px 17px;
    }

    .ah-actions {
        z-index: 3;
        float: right;
        margin-top: 7px;
        position: relative;
    }

    .actions {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .actions>li {
        display: inline-block;
    }

    .actions:not(.a-alt)>li>a>i {
        color: #939393;
    }

    .actions>li>a>i {
        font-size: 20px;
    }

    .actions>li>a {
        display: block;
        padding: 0 10px;
    }

    .ms-body {
        background: #fff;
    }

    #ms-menu-trigger {
        user-select: none;
        position: absolute;
        left: 0;
        top: 0;
        width: 50px;
        height: 100%;
        padding-right: 10px;
        padding-top: 19px;
        cursor: pointer;
    }

    #ms-menu-trigger,
    .message-feed.right {
        text-align: right;
    }

    #ms-menu-trigger,
    .toggle-switch {
        -webkit-user-select: none;
        -moz-user-select: none;
    }

    /* .ms-body {
        height: 500px;
        overflow-y: scroll;
    } */
    .incoming_image {
        width: 200px;
    }

    .outgoing_image {
        width: 200px;
    }

    .ml {
        margin-left: 200px
    }

    /* .portimg {
        display: none;
        max-width: 130px;
        max-height: 173px;
        margin-top: -428px;
    } */

    .AClass {
        right: 17px;
        top: -135px;
        position: absolute;
        color: red
    }

    .image-upload>input {
        display: none;
    }
    </style>
</head>

<body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.9.0/viewer.min.js"
        integrity="sha512-0goo56vbVLOJt9J6TMouBm2uE+iPssyO+70sdrT+J5Xbb5LsdYs31Mvj4+LntfPuV+VlK0jcvcinWQG5Hs3pOg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.9.0/viewer.min.css"
        integrity="sha512-1cfqrTRQ8V1TnQsSu97+x7PoylALHKOQuwpFaa6lwe6lo5EOUmGNmX3LBq/yxUokfGaUtWkjZJGmuXqG5THgdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container bootstrap snippets bootdey">
        <div class="tile tile-alt" id="messages-main">
            <div id="toggle_tag" class="ms-menu">
                <div class="ms-user clearfix">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-avatar pull-left">
                    @if(Session::has('user'))
                    <div>
                        <h5> {{Session::get('user')['name']}}</h5>
                    </div>
                    @endif
                </div>

                <!-- <div class="p-40">
                    <div class="dropdown">
                        <a class="btn btn-primary btn-block" href="" data-toggle="dropdown">Messages <i
                                class="caret m-l-5"></i></a>

                        <ul class="dropdown-menu dm-icon w-100">
                            <li><a href=""><i class="fa fa-envelope"></i> Messages</a></li>
                            <li><a href=""><i class="fa fa-users"></i> Contacts</a></li>
                            <li><a href=""><i class="fa fa-format-list-bulleted"> </i>Todo Lists</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- <div class="container" "> -->
                <div class=" list-group lg-alt" style="height: 459px;overflow-y:scroll">
                    @foreach($users as $user_list)
                    <input type="hidden" name="from_to" id="from_to" value="{{$user_list->id}}">
                    <a class="list-group-item media" onclick="mesd({{$user_list->id}})" href="#">
                        <div class=" lv-avatar pull-left">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="img-avatar">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">{{$user_list->name}}</div>
                            <small
                                class="list-group-item-text c-gray">{{$user_list->messageObj ? $user_list->messageObj->message : "Start chatting"}}</small>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>

            <!-- </div> -->

            <div class="ms-body">
                <div class="action-header clearfix">
                    <div class="visible-xs" id="ms-menu-trigger">
                        <i class="fa fa-bars"></i>
                    </div>

                    <div class="pull-left hidden-xs ">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="img-avatar m-r-10">
                        <div class="lv-avatar pull-left ">

                        </div>
                        <span id="chating_user_name">Select User</span>
                    </div>

                    <ul class="ah-actions actions">
                        <!-- <li>
                            <a href="">
                                <i class="fa fa-trash"></i>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="">
                                <i class="fa fa-check"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-clock-o"></i>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-sort"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="">Latest</a>
                                </li>
                                <li>
                                    <a href="">Oldest</a>
                                </li>
                            </ul>
                        </li> -->
                        @if(Session::has('user'))

                        <a href="{{url('/logout')}}"><label>
                                <h3>Sign out</h3>
                            </label></a>

                        @else
                        <a href="/login" style="margin-left: 1100px;">login</a>

                        @endif

                    </ul>
                </div>

                <div id="chat_message" style="height: 460px;overflow-y: scroll;">
                    @if(Session::has('user'))

                    <center>
                        <h3>Welcome To {{Session::get('user')['name']}}</h3>
                    </center>
                    @endif
                    <!-- <img src="{{ URL::to('/') }}/images/chat_background_image1.jpg" alt=""> -->
                </div>


                <!-- <button class="mb-5" id="remove_img" onclick="remove()"><i class="fa fa-close"></i> -->
                </button>
                <div class="msb-reply" id="type_msg_box">
                    <textarea name="message" id="message" placeholder="Type a message"></textarea>

                </div>

                <div class="chat_bottom" id="type_msg_box1">
                    <span class="pull-left">
                        <div class="image-upload">
                            <label for="image">
                                <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"
                                    width=25 style="margin-right:
                            -351px;" />
                            </label>
                            <input type="file" name="image" id="image" onchange="preview()" hidden
                                style="position: relative" />
                            <div style="position:relative;">

                                <!-- <button id="remove_img" onclick="remove()"><i class="fa fa-close"></i> -->
                                <button type="button" id="remove_img" onclick="remove()" class="fa fa-close AClass">
                                    <!-- <span></span> -->
                                </button>
                                <img id="thumb" style="margin-top: -353px;" height="100px" width="200px"
                                    onclick="viewImgsPreview('new')" />
                            </div>
                    </span>
                </div>
            </div>
            <button class="pull-right btn btn-success" onclick="save_message()" id="msg_send_button"><i
                    class="fa fa-paper-plane-o"></i>
            </button>
        </div>
    </div>
    </div>
    </div>
    <!-- <div class="image-upload">
        <label for="file-input">
            <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg" />
        </label>

        <input id="file-input" type="file" />
    </div> -->
</body>

<script type="text/javascript">
$(function() {
    if ($('#ms-menu-trigger')[0]) {
        $('body').on('click', '#ms-menu-trigger', function() {
            $('.ms-menu').toggleClass('toggled');
        });
    }
});

let toUserId = null;
$('#type_msg_box').hide('slow');
$('#type_msg_box1').hide('slow');
$('#msg_send_button').hide('slow');
$('#thumb').hide('slow');
$('#remove_img').hide('slow');

function reloadPage() {
    location.reload(true);
}

function remove() {
    // $("#thumb").clear();
    // $("#image").clear();
    $('#thumb').val('');
    $('#image').val('');
    $('#thumb').attr('src', '');
    $('#thumb').hide('slow');
    $('#remove_img').hide('slow');
}

function preview() {
    // thumb.src = URL.createObjectURL(event.target.files[0]);
    const reader = new FileReader();
    reader.readAsDataURL(event.target.files[0]);
    reader.onload = () =>
        thumb.src = reader.result;
    $('#thumb').show('slow');
    $('#remove_img').show('slow');
}


function viewImgsPreview(imageId) {
    console.log(imageId);
    if (imageId == 'new') {

        const viewer = new Viewer(document.getElementById('thumb'), {
            inline: false,
            loading: true,
            toolbar: false,
            toggleOnDblclick: true,
            viewed() {
                // viewer.zoomTo(1);
            },
        });
    } else {
        const viewer = new Viewer(document.getElementById('img_preview_' + imageId), {
            inline: false,
            loading: true,
            toolbar: false,
            toggleOnDblclick: true,

            viewed() {
                // viewer.zoomTo(1);
            },
        });
    }
}
$('#message').keypress(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        $('#msg_send_button').click();

    }
});


function save_message() {
    if (!toUserId) {
        alert("Plz select user to chat...");
        return;
    }
    // alert(toUserId);
    // return
    var message = $('#message').val() ? $('#message').val() : "";
    console.log(message);
    var from_to = toUserId;
    var image = $('#image').val();
    var fdata = new FormData()
    if ($("#image")[0].files.length > 0)
        fdata.append("file", $("#image")[0].files[0])
    fdata.append("message", message ? message : "");
    fdata.append("from_to", from_to);
    fdata.append("_token", "{{ csrf_token() }}");
    d = $("#add_new_product").serialize();
    if ((image == null || image == "") && (message == null || message == "")) {
        alert('Please enter message or select file');
        return;
    }
    // console.log(image, d);
    $.ajax({
        type: "POST",
        url: 'msg_save',
        // data: {
        //     "_token": "{{ csrf_token() }}",
        //     message: message,
        //     from_to: from_to,
        //     image: image
        // },
        data: fdata,
        contentType: false,
        processData: false,
        success: function(data) {
            // if (!data) {
            // alert('hd');
            // }
            $('#message').val('');
            $('#thumb').val('');
            $('#thumb').attr('src', '');
            $('#thumb').hide('slow');
            $('#remove_img').hide('slow');
            console.log('message SuccessFully Sent');
            remove();
            mesd(toUserId);
        }
    });
}
// const interval = setInterval(function() {
//     if (toUserId && 1 == 2) {
//         mesd(user_id);
//     }
// }, 2000);

// function loadChating() {
//     const interval = setInterval(function() {
//         if (toUserId) {
//             mesd(toUserId);
//             // loadChating();
//         }
//     }, 10000);
// }

function mesd(user_id) {
    chatsessad(user_id);
    toUserId = user_id;
    $('#thumb').attr('src', '');
    $('#type_msg_box').show('slow');
    $('#type_msg_box1').show('slow');
    $('#msg_send_button').show('slow');
    $('#thumb').hide('slow');
    var element = document.getElementById("toggle_tag");
    element.classList.remove("toggled");
    // $('#chat_message').html('')
    // var from_id = $('#from_id').val();
    // var message = $('#message').val();
    $.ajax({
        type: "GET",
        url: 'msg',
        data: {
            toUserId: user_id, // "_token": "{{ csrf_token() }}",

        },
        success: function(data) {
            if (data && data.length) {
                let msgData = ""
                for (i = 0; i < data.length; i++) {
                    let dataValue = data[i];
                    let imageUrl = "{{ URL::to('/') }}/images/" + dataValue.image;
                    console.log(imageUrl);
                    if (user_id === dataValue.from) {
                        msgData = msgData + `
                        <div class="message-feed media">
                <div class="pull-left">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-avatar">
                </div>
                <div class="media-body">
                    <div class="mf-content" style="border-radius: 13px;">
                    ${dataValue.message}
                    </div><br><br>
                    ${dataValue.image ? "<img id='img_preview_"+dataValue.id+"' onclick=viewImgsPreview("+dataValue.id+")  class=incoming_image src='"+imageUrl+"'>" : ""}
                    <small class="mf-date"><i class="fa fa-clock-o"></i>>  ${dataValue.created_at}</small>
                </div>
            </div>
                           
       `;
                    } else {
                        msgData = msgData + `
                        <div class="message-feed right">
                <div class="pull-right">
                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="img-avatar">
                </div>
                <div class="media-body">
                    <div class="mf-content">
                    ${dataValue.message}
                    </div><br><br>
                    ${dataValue.image ? "<img id='img_preview_"+dataValue.id+"' onclick=viewImgsPreview("+dataValue.id+")  class=incoming_image src='"+imageUrl+"'>" : ""}
                    <small class="mf-date"><i class="fa fa-clock-o"></i> ${dataValue.created_at}</small>
                </div>
            </div>
                    `;
                    }
                }
                $('#chat_message').html(msgData);


            } else {
                $('#chat_message').html('<center><h4>Start Conversion</h4></center>');
            }

        }

    });
    // loadChating();
}


function chatsessad(user_id) {
    toUserId = user_id;
    $.ajax({
        type: "GET",
        url: 'msg_send',
        data: {
            toUserId: user_id, // "_token": "{{ csrf_token() }}",

        },
        success: function(data) {
            // $('#chating_user_name').append(`<h2>${data.name}</h2>`);
            $('#chating_user_name').html(` <span>${data.name}</span>`)
        }
    });
}
</script>


</html>