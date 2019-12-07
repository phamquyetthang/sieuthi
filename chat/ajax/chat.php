<?php
require "../core/init.php";
if(isset($_POST['method'])=== true && empty($_POST['method']) === false){
    $chat = new Chat();
    $method = trim($_POST['method']);

    if($method==='fetch'){
        //fetch messages and output
        $messages = $chat->fetchMessages();
        if(empty($messages)===true){
            echo 'there are currently no message in the chat';
        }else{
            foreach($messages as $message){
                ?>
                <div class="message">
                    <b><u style="color: blue"><?php
                    echo nl2br($message['fullname']);
                     ?></u> </b>:
                    <p><?php echo $message['message']; ?></p>
                </div>
                <?php
            }
        }
    }else if ($method==='throw' && isset($_POST['message']) === true){
        //throw message into database
        $message =trim($_POST['message']);
        if(empty($message)===false){
            //throw it
            $chat->throwMessage($_SESSION['empid'], $message);
        }
    }
}
