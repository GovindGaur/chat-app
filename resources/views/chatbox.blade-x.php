<style>
body,
html {
    height: 100%;
    margin: 0;
    background: #7F7FD5;
    background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
    background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
}

.chat {
    margin-top: auto;
    margin-bottom: auto;
}

.card {
    height: 500px;
    border-radius: 15px !important;
    background-color: rgba(0, 0, 0, 0.4) !important;
}

.contacts_body {
    padding: 0.75rem 0 !important;
    overflow-y: auto;
    white-space: nowrap;
}

.msg_card_body {
    overflow-y: auto;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
    border-bottom: 0 !important;
}

.card-footer {
    border-radius: 0 0 15px 15px !important;
    border-top: 0 !important;
}

.container {
    align-content: center;
}

.search {
    border-radius: 15px 0 0 15px !important;
    background-color: rgba(0, 0, 0, 0.3) !important;
    border: 0 !important;
    color: white !important;
}

.search:focus {
    box-shadow: none !important;
    outline: 0px !important;
}

.type_msg {
    background-color: rgba(0, 0, 0, 0.3) !important;
    border: 0 !important;
    color: white !important;
    height: 60px !important;
    overflow-y: auto;
    width: 10px;
}

.type_msg:focus {
    box-shadow: none !important;
    outline: 0px !important;
}

.attach_btn {
    border-radius: 15px 0 0 15px !important;
    background-color: rgba(0, 0, 0, 0.3) !important;
    border: 0 !important;
    color: white !important;
    cursor: pointer;
}

.send_btn {
    border-radius: 0 15px 15px 0 !important;
    background-color: rgba(0, 0, 0, 0.3) !important;
    border: 0 !important;
    color: white !important;
    cursor: pointer;
}

.search_btn {
    border-radius: 0 15px 15px 0 !important;
    background-color: rgba(0, 0, 0, 0.3) !important;
    border: 0 !important;
    color: white !important;
    cursor: pointer;
}

.contacts {
    list-style: none;
    padding: 0;
}

.contacts li {
    width: 100% !important;
    padding: 5px 10px;
    margin-bottom: 15px !important;
}

.active {
    background-color: rgba(0, 0, 0, 0.3);
}

.user_img {
    height: 70px;
    width: 70px;
    border: 1.5px solid #f5f6fa;

}

.user_img_msg {
    height: 40px;
    width: 40px;
    border: 1.5px solid #f5f6fa;

}

.img_cont {
    position: relative;
    height: 70px;
    width: 70px;
}

.img_cont_msg {
    height: 40px;
    width: 40px;
}

.online_icon {
    position: absolute;
    height: 15px;
    width: 15px;
    background-color: #4cd137;
    border-radius: 50%;
    bottom: 0.2em;
    right: 0.4em;
    border: 1.5px solid white;
}

.offline {
    background-color: #c23616 !important;
}

.user_info {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 15px;
}

.user_info span {
    font-size: 20px;
    color: white;
}

.user_info p {
    font-size: 10px;
    color: rgba(255, 255, 255, 0.6);
}

.video_cam {
    margin-left: 50px;
    margin-top: 5px;
}

.video_cam span {
    color: white;
    font-size: 20px;
    cursor: pointer;
    margin-right: 20px;
}

.msg_cotainer {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 10px;
    border-radius: 25px;
    background-color: #82ccdd;
    padding: 10px;
    position: relative;
}

.msg_cotainer_send {
    margin-top: auto;
    margin-bottom: auto;
    margin-right: 10px;
    border-radius: 25px;
    background-color: #78e08f;
    padding: 10px;
    position: relative;
}

.msg_time {
    position: absolute;
    left: 0;
    bottom: -15px;
    color: rgba(255, 255, 255, 0.5);
    font-size: 10px;
}

.msg_time_send {
    position: absolute;
    right: 0;
    bottom: -15px;
    color: rgba(255, 255, 255, 0.5);
    font-size: 10px;
}

.msg_head {
    position: relative;
}

#action_menu_btn {
    position: absolute;
    right: 10px;
    top: 10px;
    color: white;
    cursor: pointer;
    font-size: 20px;
}

.action_menu {
    z-index: 1;
    position: absolute;
    padding: 15px 0;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border-radius: 15px;
    top: 30px;
    right: 15px;
    display: none;
}

.action_menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.action_menu ul li {
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 5px;
}

.action_menu ul li i {
    padding-right: 10px;

}

.action_menu ul li:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.2);
}

@media(max-width: 576px) {
    .contacts_card {
        margin-bottom: 15px !important;
    }
}

.incoming_image {
    width: 200px;
}

.outgoing_image {
    width: 200px;
}

li:hover {
    background-color: #39406f;
}

.emoji-picker-icon {
    margin-top: 14px;
    margin-right: 585px;
}

.emoji-menu {
    margin-right: 354px;
    margin-top: -226px;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example1/colorbox.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/emoji-picker/1.1.5/js/util.min.js"
        integrity="sha512-rTVSXeGNtYZ5y59UtVTHvenNsJ6xkNiaft0eM38EjZBMDPmVkMsxpmDLYZ1y0DJQ5F9lm3a8yQMMw2HIXyEOeQ=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emoji-picker/1.1.5/css/emoji.min.css"
        integrity="sha512-g85Z5r0tA1tvV9xX6Ox6ZLhJPkX1k0diGsJcVm56Zd++P69y82MJ0qG6BAMeKfHrDWE+0DoFl7TUqEha63u5GA=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emoji-picker/1.1.5/js/config.min.js"
        integrity="sha512-byA8FwGXZ9uZ/S17exCzIxYz9obk57h608OIbDkDpGzO/IfU1mhQoihqLW+IK19J/gBT/inpG2ohYZCGxuO4VA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emoji-picker/1.1.5/js/jquery.emojiarea.min.js"
        integrity="sha512-mGa/ehqlsnXVGkJJhvP0t1+UFDqm8FtZHkJdDUhMbircdEe+unkimR2UL7V7uRFe9Yf/kul+naEh65I9p43R5w=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emoji-picker/1.1.5/js/emoji-picker.min.js"
        integrity="sha512-EDnYyP0SRH/j5K7bYQlIQCwjm8dQtwtsE+Xt0Oyo9g2qEPDlwE+1fbvKqXuCoMfRR/9zsjSBOFDO6Urjefo28w=="
        crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


</head>
<!--Coded With Love By Mutiullah Samim-->

<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search" />
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body contacts_body">
                        <ui class="contacts">
                            @foreach($users as $user_list)
                            <input type="hidden" name="from_to" id="from_to" value="{{$user_list->id}}">
                            <li>
                                <div class="d-flex bd-highlight" onclick="open_chat_messages({{$user_list->id}})">
                                    <div class="img_cont">
                                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                            class="rounded-circle user_img" />
                                        <!-- <span class="online_icon active"></span> -->
                                    </div>
                                    <div class="user_info">
                                        <span>{{$user_list->name}}</span>
                                        <p>{{$user_list->messageObj ? $user_list->messageObj->message : "Start chatting"}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ui>
                    </div>

                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-8 col-xl-6 chat">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                    class="rounded-circle user_img" />
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">

                                <span id='chating_user_name'>Select User</span>
                                <p>1767 Messages</p>
                            </div>
                            <div class="video_cam">
                                <span><i class="fas fa-video"></i></span>
                                <span><i class="fas fa-phone"></i></span>
                            </div>
                        </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="action_menu">
                            <ul>
                                <li><i class="fas fa-user-circle"></i> View profile</li>
                                <li><i class="fas fa-users"></i> Add to close friends</li>
                                <li><i class="fas fa-plus"></i> Add to group</li>
                                <li><i class="fas fa-ban"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body msg_card_body">
                        <div id="chat_message">
                            <h3>Please select user to start chat</h3>
                        </div>
                        <!-- <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                    class="rounded-circle user_img_msg" />
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div> -->
                        <!-- <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="https://ptetutorials.com/images/user-profile.png "
                                    class="rounded-circle user_img_msg" />
                            </div>
                        </div> -->

                    </div>
                    <div class="card-footer" id="type_msg_box">
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text attach_btn">
                                </span>
                                <!-- <label data-emojiable="true"></label> -->
                            </div>

                            <textarea class="form-control type_msg" placeholder="Type your message..." id="message"
                                name="message"></textarea>


                            <div class="input-group-append">
                                <span class="input-group-text send_btn" id="msg_send_button" onclick="save_message()"><i
                                        class="fas fa-location-arrow"></i></span>
                            </div>
                            <div class="input-group-append">
                                <div class="image-upload ">
                                    <label for="image">
                                        <span class="input-group-text send_btn" id="msg_send_button" style="margin-top: 1px;
                                            height: 51px;"> <img
                                                src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"
                                                class="image_ssj" width=25 /></span>
                                    </label>
                                    <input type="file" name="image" id="image" onchange="preview()" hidden />
                                    <img id="thumb" src="" width="80px" height="70px" onclick="viewImgs(this)" />
                                </div>
                            </div>
                            <!-- <div class="image-upload ">
                                    <label for="image">
                                        <!-- <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"
                                            class="image_ssj" width=25 /> -->
                            <!-- </label> -->
                            <!-- <input type="file" name="image" id="image" onchange="preview()" hidden />
                            <img id="thumb" src="" width="150px" onclick="viewImgs(this)" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<!-- Modal -->
<div class="modal fade" id="imagePreview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background: orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                        class="ion-android-close"></span></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <img id="imgPrev" style="width: 770px;" />
            </div>
        </div>
    </div>

</html>

<script>
$(document).ready(function() {
    $('#action_menu_btn').click(function() {
        $('.action_menu').toggle();
    });
});

let toUserId = null;
$('#type_msg_box').hide('slow');
$('#thumb').hide('slow');
$('#message').keypress(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        $('#msg_send_button').click();

    }
});

function reloadPage() {
    location.reload(true);
}

function preview() {
    thumb.src = URL.createObjectURL(event.target.files[0]);
    $('#thumb').show('slow');
}

function viewImgs(imgUrlSrc) {
    console.log(imgUrlSrc)
    $('#imgPrev').attr('src', imgUrlSrc.src);
    $('#imagePreview').modal('show');
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
    var message = $('#message').val();
    var from_to = toUserId;
    var image = $('#image').val();
    var fdata = new FormData()
    if ($("#image")[0].files.length > 0)
        fdata.append("file", $("#image")[0].files[0])
    fdata.append("message", message);
    fdata.append("from_to", from_to);
    fdata.append("_token", "{{ csrf_token() }}");
    d = $("#add_new_product").serialize();
    // console.log(image, d);
    $.ajax({
        type: "POST",
        url: 'save_chat',
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
            $('#message').val('');
            $('#thumb').val('');
            $('#thumb').attr('src', '');
            $('#thumb').hide('slow');
            console.log('message SuccessFully Sent');
            open_chat_messages(toUserId);

        }
    });
}

const interval = setInterval(function() {
    var user_id = $('#fromto').val();
    if (user_id) {
        open_chat_messages(user_id);
    }
}, 2000);

function open_chat_messages(user_id) {
    chat_user_name(user_id);
    toUserId = user_id;
    $('#thumb').attr('src', '');
    $('#type_msg_box').show('slow');
    $('#thumb').hide('slow');
    // var from_id = $('#from_id').val();
    // var message = $('#message').val();
    $.ajax({
        type: "GET",
        url: 'open_chat_messages',
        data: {
            toUserId: user_id, // "_token": "{{ csrf_token() }}",

        },
        success: function(data) {

            console.log(data);
            if (data && data.length) {
                let msgData = ""
                for (i = 0; i < data.length; i++) {
                    let dataValue = data[i];
                    let imageUrl = "{{ URL::to('/') }}/images/" + dataValue.image;
                    console.log(imageUrl);
                    if (user_id === dataValue.from) {
                        msgData = msgData + `
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                    class="rounded-circle user_img_msg" />
                            </div>
                            <div class="msg_cotainer">
                            <p>${dataValue.message}</p>
                            <a href="${imageUrl}" >
                            ${dataValue.image ? "<img class=incoming_image preview src='"+imageUrl+"'>" : ""}
                            </a>   
                                <span class="time_date">${dataValue.created_at}</span>
                            </div>
                        </div>
                      `;
                    } else {
                        msgData = msgData + ` 

                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                            <p>${dataValue.message}</p>
                            <a href="${imageUrl}" class="preview" >
                            ${dataValue.image ? "<img class=outgoing_image  src='"+imageUrl+"'>" : ""}</a>
                                <span class="msg_time_send">${dataValue.created_at}</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="https://ptetutorials.com/images/user-profile.png "
                                    class="rounded-circle user_img_msg" />
                            </div>
                        </div>




                        
                    `;
                    }
                }
                $('#chat_message').html(msgData)

            }
        }
    });

}

$(".preview").colorbox({
    iframe: false,
    innerWidth: 200,
    innerHeight: 200,
});


function chat_user_name(user_id) {
    toUserId = user_id;
    console.log(toUserId);
    // var from_id = $('#from_id').val();
    // var message = $('#message').val();
    $.ajax({
        type: "GET",
        url: 'chat_user_name',
        data: {
            toUserId: user_id, // "_token": "{{ csrf_token() }}",

        },
        success: function(data) {
            console.log(data.name);
            // $('#chating_user_name').append(`<h2>${data.name}</h2>`);
            $('#chating_user_name').html(`<h2>${data.name}</h2>`)
        }
    });
}


$(function() {
    // Initializes and creates emoji set from sprite sheet
    window.emojiPicker = new EmojiPicker({
        emojiable_selector: '[data-emojiable=true]',
        assetsPath: 'http://localhost/chat-app/lib/img',
        popupButtonClasses: 'fa fa-smile-o'
    });
    // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
    // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
    // It can be called as many times as necessary; previously converted input fields will not be converted again
    window.emojiPicker.discover();
});
// Google Analytics
(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-49610253-3', 'auto');
ga('send', 'pageview');
</script>

</script>