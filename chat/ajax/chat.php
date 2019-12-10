<?php
require "../core/init.php";
$idnv=$_SESSION['empid'];
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
                    
                    if($message['id']===$idnv){
                        ?>
                        <?php
                        if($message['position']==='2'){
                            echo('
                            <div class="message messr">
                            <p   style="color: red" class="tdmess">
                            <span>
                        ');
                        }else{
                            echo('
                            <div class="message messr">
                            <p   style="color: blue" class="tdmess">
                            <span>
                        ');
                        }
                        ?>
                            <?php
                            echo nl2br($message['fullname']);
                            ?> 
                            </span>
                            </p>
                            <p class="ndmess"><span><?php echo $message['message']; ?></span></p>
                        </div>
                        <?php
                    }else{
                        ?>
                        <?php
                        if($message['position']==='2'){
                            echo('
                            <div class="message">
                            <p  style="color: red">
                            <span>
                        ');
                        }else{
                            echo('
                            <div class="message">
                            <p  style="color: blue">
                            <span>
                        ');
                        }
                        ?>
                                <?php
                                echo nl2br($message['fullname']);
                                ?> 
                            </span>
                            </p>
                            <p><span><?php echo $message['message']; ?></span></p>
                        </div>
                        <?php
                    }
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
