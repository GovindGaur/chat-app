<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<style>
.container {
    max-width: 1170px;
    margin: auto;
}

img {
    max-width: 100%;
}

.inbox_people {
    background: #f8f8f8 none repeat scroll 0 0;
    float: left;
    overflow: hidden;
    width: 40%;
    border-right: 1px solid #c4c4c4;
}

.inbox_msg {
    border: 1px solid #c4c4c4;
    clear: both;
    overflow: hidden;
}

.top_spac {
    margin: 20px 0 0;
}


.recent_heading {
    float: left;
    width: 40%;
}

.srch_bar {
    display: inline-block;
    text-align: right;
    width: 60%;
}

.headind_srch {
    padding: 10px 29px 10px 20px;
    overflow: hidden;
    border-bottom: 1px solid #c4c4c4;
}

.recent_heading h4 {
    color: #05728f;
    font-size: 21px;
    margin: auto;
}

.srch_bar input {
    border: 1px solid #cdcdcd;
    border-width: 0 0 1px 0;
    width: 80%;
    padding: 2px 0 4px 6px;
    background: none;
}

.srch_bar .input-group-addon button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    padding: 0;
    color: #707070;
    font-size: 18px;
}

.srch_bar .input-group-addon {
    margin: 0 0 0 -27px;
}

.chat_ib h5 {
    font-size: 15px;
    color: #464646;
    margin: 0 0 8px 0;
}

.chat_ib h5 span {
    font-size: 13px;
    float: right;
}

.chat_ib p {
    font-size: 14px;
    color: #989898;
    margin: auto
}

.chat_img {
    float: left;
    width: 11%;
}

.chat_ib {
    float: left;
    padding: 0 0 0 15px;
    width: 88%;
}

.chat_people {
    overflow: hidden;
    clear: both;
}

.chat_list {
    border-bottom: 1px solid #c4c4c4;
    margin: 0;
    padding: 18px 16px 10px;
}

.inbox_chat {
    height: 550px;
    overflow-y: scroll;
}

.active_chat {
    background: #ebebeb;
}

.incoming_msg_img {
    display: inline-block;
    width: 6%;
}

.received_msg {
    display: inline-block;
    padding: 0 0 0 10px;
    vertical-align: top;
    width: 92%;
}

.received_withd_msg p {
    background: #ebebeb none repeat scroll 0 0;
    border-radius: 3px;
    color: #646464;
    font-size: 14px;
    margin: 0;
    padding: 5px 10px 5px 12px;
    width: 100%;
}

.time_date {
    color: #747474;
    display: block;
    font-size: 12px;
    margin: 8px 0 0;
}

.received_withd_msg {
    width: 57%;
}

.mesgs {
    float: left;
    padding: 30px 15px 0 25px;
    width: 60%;
}

.sent_msg p {
    background: #05728f none repeat scroll 0 0;
    border-radius: 3px;
    font-size: 14px;
    margin: 0;
    color: #fff;
    padding: 5px 10px 5px 12px;
    width: 100%;
}

.outgoing_msg {
    overflow: hidden;
    margin: 26px 0 26px;
}

.sent_msg {
    float: right;
    width: 46%;
}

.input_msg_write input {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #4c4c4c;
    font-size: 15px;
    min-height: 48px;
    width: 100%;
}

.type_msg {
    border-top: 1px solid #c4c4c4;
    position: relative;
}

.msg_send_btn {
    background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    position: absolute;
    right: 0;
    top: 11px;
    width: 33px;
}

.messaging {
    padding: 0 0 50px 0;
}

.msg_history {
    height: 516px;
    overflow-y: auto;
}

.chat_list:hover {
    background-color: #c4c4c4;
}

.emoji-menu {
    bottom: 50px !important;
    transform: none !important;
    /* position: fixed !important; */
    right: 100px !important;
    left: 400px !important;
    top: auto !important;
}

.emoji-picker-icon {
    margin-right: -313px;
    margin-top: 10px;
}

.image-upload>input {
    display: none;
}


.fake-input {
    position: relative;
    width: 240px;
}

.fake-input input {
    border: none;
    background-color: #fff;
    display: block;
    width: 100%;
    /* box-sizing: border-box */
}

.fake-input img {
    position: absolute;
    top: 10px;
    right: 10px
}

.emoji-wysiwyg-editor {
    height: 48px;
    width: 625;
}

.write_msg {
    width: 543px;
    border: inset;
}
</style>


<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
        rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example1/colorbox.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
</head>

<body>

    <div class="container">
        @csrf
        <h3 class=" text-center">Messaging</h3>
        @if(Session::has('user'))
        <label for="" style="margin-left: 980px;">{{Session::get('user')['name']}}
        </label>
        <button><a href="{{url('/logout')}}">Logout</a></button>
        @else
        <a href="/login" style="margin-left: 1100px;">login</a>

        @endif
        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                            <h4>Recent</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <!-- <input type="text" class="search-bar" placeholder="Search">
                                <span class="input-group-addon">
                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </span> -->
                            </div>
                        </div>
                    </div>
                    <div class="inbox_chat">
                        <!-- <div class="chat_list active_chat">

                        </div> -->
                        @foreach($users as $user_list)
                        <input type="hidden" name="from_to" id="from_to" value="{{$user_list->id}}">
                        <div class="chat_list" onclick="open_chat_messages({{$user_list->id}})" id="chat_list">
                            <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    <p>{{$user_list->name}}</p>
                                    <p>{{$user_list->messageObj ? $user_list->messageObj->message : "Start chatting"}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- <input type="text" name="from_to" id="from_to"> -->

                    </div>
                </div>
                <div class="mesgs">
                    <div class="msg_history">
                        <div class="chat_list sticky-top" style="background: #ffffff;">
                            <div class="chat_people" style="position: relative;">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    <h2 id='chating_user_name'></h2>
                                </div>
                            </div>

                        </div>
                        <div id="chat_message">
                            <h3>Please select user to start chat</h3>
                        </div>

                        <!-- <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p> </p>
                                <span class="time_date"> </span>
                            </div>data-emojiable="true" data-emoji-input="unicode"
                        </div> -->

                    </div>

                    <div class="type_msg" id="type_msg_box">
                        <div class="input_msg_write">
                            <form enctype="multipart/form-data">
                                <div class="fake-input">
                                    <input type="text" class="write_msg image-upload" name="message" id="message"
                                        placeholder="Type a message" />
                                    <div class="image-upload ">
                                        <label for="image">
                                            <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"
                                                width=25 style="margin-right:
                                        -351px;" />
                                        </label>
                                        <input type="file" name="image" id="image" onchange="preview()" hidden />
                                        <img id="thumb" src="" width="150px" onclick="viewImgs(this)" />
                                    </div>
                                </div>
                                <button class="msg_send_btn" type="button" onclick="save_message()"
                                    id="msg_send_button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                <!-- <input type="file" name="image" id="image"> -->
                                <!-- <div class="image-upload ">
                                    <label for="image">
                                        <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"
                                            class="write_msg" style="width: 28px; margin: right 100px;" />
                                    </label>
                                    <input type="file" name="image" id="image" />
                                </div> -->

                                <!-- <div class="fake-input">
                                    <input type="text">
                                    <img src="https://ptetutorials.com/images/user-profile.png" width=25 />
                                </div> -->


                            </form>
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
            </div> <!-- Modal Body -->
            <div class="modal-body">
                <img id="imgPrev" />
            </div>
        </div>
    </div>

</html>
<script>
let toUserId = null;
$('#type_msg_box').hide('slow');
$('#thumb').hide('slow');

function reloadPage() {
    location.reload(true);
}

function preview() {
    thumb.src = URL.createObjectURL(event.target.files[0]);
    $('#thumb').show('slow');
    // readURL(event.target.files[0]);
    // $('#imagePreview').modal('show');
    // $("#previewImg").attr("href", URL.createObjectURL(event.target.files[0]));
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



// $("#message").keydown(function(e) {

//     if (e.keyCode == 13) {
//         console.log("put function call here");
//         e.preventDefault();
//         submitchat();
//     }

// });

// function submitchat() {
//     console.log("SUBMITCHAT function");
// }
// function readURL(input) {
//     console.log(input)
//     if (input) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#imgPrev').attr('src', e.target.result);
//         }
//         reader.readAsDataURL(input);
//     }
// }

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
                        msgData = msgData + `<div class="incoming_msg">
                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                    alt="sunil"> </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                <p>${dataValue.message}</p>
                                ${dataValue.image ? "<img onclick=viewImgs('this') src='"+imageUrl+"'>" : ""}
                                <span class="time_date">${dataValue.created_at}</span>
                                </div>
                            </div>
                        </div>`;
                    } else {
                        msgData = msgData + `  
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>${dataValue.message}</p>
                                ${dataValue.image ? "<img onclick=viewImgs(this) src='"+imageUrl+"'>" : ""}
                                <span class="time_date">${dataValue.created_at}</span>
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





// function viewImgsPreview(imageId) {
//     console.log(imageId);
//     if (imageId == 'new') {

//         const viewer = new Viewer(document.getElementById('thumb'), {
//             inline: false,
//             loading: true,
//             toolbar: false,
//             toggleOnDblclick: true,
//             viewed() {
//                 viewer.zoomTo(1);
//             },
//         });
//     } else {
//         const viewer = new Viewer(document.getElementById('img_preview_' + imageId), {
//             inline: false,
//             loading: true,
//             toolbar: false,
//             toggleOnDblclick: true,
//             viewed() {
//                 viewer.zoomTo(1);
//             },
//         });
//     }
// }
</script>