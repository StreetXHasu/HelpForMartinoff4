
var Stage = 'Main';
var refreshChat = 1;

$(document).ready(function(){
    $("#ChatInput").validate({
        rules:{
            chatNick:"required",
            chatMessage:"required"
        },
        messages:{
            chatNick:"Sie müssen einen Namen angeben",
            chatMessage:"Das Feld für Nachricht darf nicht leer sein"
        },
        submitHandler:function(){
            var channel = Stage;
            var chatmd5 = $('#chatmd5').val();
            var chatNick = $('#chatNick').val();
            var chatMessage = $('#chatMessage').val();
            $.post("index.php?AJAX=1&R=chat&A=add",{
            /*$.post("var/chatAddMSG.php",{*/
                channel:channel,
                chatmd5:chatmd5,
                chatNick:chatNick,
                chatMessage:chatMessage
            },
            function(data,status){
                if(status === 'success' && data === '0') {}
                else if(status === 'error') {
                    LoadContent('index.php?AJAX=1&R=_error&A=200');
                }
                //console.log("Data: " + chatMessage + "\nStatus: " + status);
                $('#chatMessage').val('');
            });
        }
    });
    
    $('body').on('click','#chatOldLoader',function(e){
        e.preventDefault();
        loadOldChat(Stage);
    });
});

function loadChat(){
    var lastPost = $("#ChatMessages").children('li').first().attr('data-time');
    $.post("var/chat.php",{
        channel:Stage,
        lastPost:lastPost
    },
    function(data,status){
        $('#ChatMessages').prepend(data);
        //console.log("Data: " + data + "\nStatus: " + status + "\nStage: " + Stage + "\nlastPost: " + lastPost);
    });
}
var refreshChat = setInterval(function(){ loadChat() }, 5000);

function loadOldChat(channel){
    var lastPost = $("#ChatMessages").children('li').first().attr('data-time');
    $.post("res/php/chatback.php",{
        channel:channel,
        lastPost:lastPost
    },
    function(data,status){
        $('#ChatMessages').prepend(data);
        //console.log("Data: " + data + "\nStatus: " + status);
    });
}
