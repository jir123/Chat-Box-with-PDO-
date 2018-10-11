
<?php 
    include 'inc/header.php';
    include 'lib/Chat.php';
?>
<?php
    $chat = new Chat();
?>
    <div class="container">
        <div class="chat-box">
            
            <ul>
                <?php
                    foreach($chat->readAll() as $value){

                ?>
                <li><span class="time"><?php echo $value['time'];?></span><span class="name"><?php echo $value['name'];?></span><span class="chat-text"><?php echo $value['text'];?></span></li>
                

                <?php }?>
            </ul>
        </div>
        <div class="chat-from">
            <form action="">
            <table>
                <tr>
                    <td><input type="text" name="name" placeholder="Your Name" required/></td>
                </tr>
                <tr>
                    <td><input type="text" name="body" placeholder="Your Comment ... " required/></td>
                </tr>
                <tr>
                    <td><input type="submit"  vlaue="Shout It"/></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
<?php include 'inc/footer.php'?>