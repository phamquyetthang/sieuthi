var chat={}

chat.fetchMessages =function(){
    $.ajax({
        url: 'chat/ajax/chat.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('.chat .message').html(data);
        }
    });
}
chat.throwMessage= function(message){
    if($.trim(message).length !=0){
        $.ajax({
            url: 'chat/ajax/chat.php',
            type: 'post',
            data: { method: 'throw', message: message},// kiểu dữ liệu trả về, có thể là json, xml, script hoặc text
            success: function(data){//là hàm xử lý kết quả trả về
                chat.fetchMessages();
                chat.entry.val('');
            }
        });
    }
}

chat.entry= $('.chat .entry');
chat.entry.bind('keydown', function(e){
    if(e.keyCode === 13 && e.shiftKey=== false){
        //throw message
        chat.throwMessage($(this).val());
        e.preventDefault();
    }
});
chat.interval = setInterval(chat.fetchMessages, 2000);
chat.fetchMessages();