<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
</style>


<html>

<head>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
        rel="stylesheet" </head>

<body>

    <div class="container">
        @csrf
        <h3 class=" text-center">Messaging</h3>

        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                            <h4>Recent</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <input type="text" class="search-bar" placeholder="Search">
                                <span class="input-group-addon">
                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </span>
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
                                    <h5>{{$user_list->name}}</h5>
                                    <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <input type="text" name="from_to" id="from_to"> -->
                        <button style="margin-left: 370px;margin-top: 35px;"><a href="/logout">Logout</a></button>
                    </div>
                </div>
                <div class="mesgs">
                    <div class="msg_history">
                        <!-- <div class="incoming_msg">
                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                    alt="sunil"> </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Test which is a new approach to have all
                                        solutions</p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                        </div> -->
                        <div id="chat_message">
                            <h3>Please select user to start chat</h3>
                        </div>
                        <!-- @foreach($users_message as $messages)
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p> {{$messages->message}}</p>
                                <span class="time_date"> {{$messages->created_at}}</span>
                            </div>
                        </div>
                        @endforeach -->
                    </div>

                    <div class="type_msg">
                        <div class="input_msg_write">
                            <input type="text" class="write_msg" name="message" id="message"
                                placeholder="Type a message" />
                            <button class="msg_send_btn" type="button" onclick="save_message()"><i
                                    class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
<script>
let toUserId = null;

function reloadPage() {
    location.reload(true);
}

function save_message() {
    if (!toUserId) {
        alert("Plz select user to chat...");
        return;
    }
    // alert(toUserId);
    // return
    var message = $('#message').val();
    var from_to = toUserId;
    console.log(from_to);
    $.ajax({
        type: "POST",
        url: 'save_chat',
        data: {
            "_token": "{{ csrf_token() }}",
            message: message,
            from_to: from_to

        },
        success: function(data) {
            $('#message').val('');
            console.log('message SuccessFully Sent');
            open_chat_messages(toUserId);
        }
    });
}

// function open_chat_list(user_id) {
//     // alert(user_id);
//     // open_chat_messages($id)
//     toUserId = user_id;
//     $.ajax({
//         type: "GET",
//         url: 'open_chat_messages',
//         data: {
//             toUserId: user_id // "_token": "{{ csrf_token() }}",

//         },
//         success: function(data) {
//             console.log(data);
//             $('#chat_message').append(`

//             <div class="outgoing_msg">
//                             <div class="sent_msg">



//                             </div>
//                         </div>
//               `);
//         }
//     });



function open_chat_messages(user_id) {
    // alert(user_id);
    toUserId = user_id;
    var from_id = $('#from_id').val();
    // $('#chat_message').append("");
    $.ajax({
        type: "GET",
        url: 'open_chat_messages',
        data: {
            toUserId: user_id // "_token": "{{ csrf_token() }}",

        },
        success: function(data) {
            console.log(data);
            if (data && data.length) {
                let msgData = ""
                for (i = 0; i < data.length; i++) {
                    let dataValue = data[i]
                    msgData = msgData + `  
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>${dataValue.message}</p>
                                <span class="time_date">${dataValue.created_at}</span>
                            </div>
                        </div>
                    `;
                }
                $('#chat_message').html(msgData)
            }
        }
    });
}
</script>