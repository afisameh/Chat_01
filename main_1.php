<?php
include_once 'dbconfig.php';
if (!$user->is_loggedin()) {
    $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="facivon.ico">

        <title>Facebook like chat</title>
        <link href="style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="script.js"></script>
        <title>welcome - <?php print($userRow['user_email']); ?></title>
    </head>
    <body>
        <div class="right">
            <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
        </div>
        welcome : <?php print($userRow['user_name']); ?>
        <div class="chat_box">
            <div class="chat_head"> Chat Box</div>
            <div class="chat_body"> 
                <!--get user chat 01-->

                <?php
//                $stmt_users = $DB_con->prepare("SELECT * FROM users");
//                $stmt_users->execute();
//                $userRow_users = $stmt_users->fetch(PDO::FETCH_ASSOC);

                $site_events = $DB_con->query("SELECT * FROM users");

                    while ($events = $site_events->fetch_assoc()) {

                        //then display others like a normal list..
                        echo $events['title'], '<br />';
                    }


//                var_dump($userRow_users);
//                die();
                ?>   



                <!-- end get user chat 01-->








                <div class="user"> sam</div>
            </div>
        </div>

        <div class="msg_box" style="right:290px">
            <div class="msg_head">Krishna Teja
                <div class="close">x</div>
            </div>
            <div class="msg_wrap">
                <div class="msg_body">
                    <div class="msg_a">This is from A	</div>
                    <div class="msg_b">know it even i liked it :)</div>
                    <div class="msg_a">Wow, Thats great to hear from you man </div>	
                    <div class="msg_push"></div>
                </div>
                <div class="msg_footer"><textarea class="msg_input" rows="4"></textarea></div>
            </div>
        </div>
    </body>
</html>
