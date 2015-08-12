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
        <link rel="stylesheet" href="menu.css" type="text/css" media="screen" />
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <title>welcome - <?php print($userRow['user_email']); ?></title>
    </head>
    <body>

        <ul id="menu">
            <li><a href="#" class="drop" title="Profil">
                    <img src="img/ligne.png"/>
                    <h2><?php print($userRow['user_name']); ?></h2>
                </a>
            </li><!-- End Home Item -->
            <li class="menu_right"><a href="#" class="drop"> 
                    <a href="logout.php?logout=true"><h2> logout </h2></a>
                </a>
            </li>

            <li class="menu_right"><a href="#" class="drop">
                    <img src="img/notification.png" style="width: 32px; height: 32px"/>
                </a><!-- Begin 3 columns Item -->

                <div class="dropdown_3columns align_right"><!-- Begin 3 columns container -->
                    <h2>salem</h2>
                </div><!-- End 3 columns container -->

            </li><!-- End 3 columns Item -->

            <li class="menu_right"><a href="#" class="drop">
                    <img src="img/msg.png" style="width: 38px; height: 45px; margin:-10px 0px 0px 5px;"/>
                </a><!-- Begin 3 columns Item -->

                <div class="dropdown_3columns align_right"><!-- Begin 3 columns container -->
                    <h2>salem</h2>
                </div><!-- End 3 columns container -->

            </li><!-- End 3 columns Item -->
        </ul>

        <div class="right">
        </div>
        <div class="chat_box">
            <div class="chat_head"> Chat Box</div>
            <div class="chat_body"> 
                <!--get user chat 01-->

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dblogin";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="user" alt="';
                        echo $row["user_name"];
                        echo '" id="';
                        echo $row["user_id"];
                        echo '">';
                        echo $row["user_name"];
                        echo '</div>';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>   
                <!-- end get user chat 01-->
            </div>
        </div>
        <script>
            $(document).ready(function () {

                $('.user').click(function () {
                    var chaine1 = "<div class='msg_box'><div class='msg_head'>";
                    var chaine2 = $(this).attr("alt");
                    var chaine3 = "<div class='close'>x</div></div><div class='msg_wrap'><div class='msg_body'><div class='msg_a'><img class='profil_photo' src='images/souhail.jpg' alt='Smiley face'>This is from A</div><div class='msg_b'><img class='profil_photo_b' src='images/images.jpg' alt='Smiley face'>know it even i liked it :)</div><div class='msg_a'><img class='profil_photo' src='images/souhail.jpg' alt='Smiley face'>Wow, Thats great to hear from you man </div><div class='msg_push'></div></div><div class='msg_footer'><textarea class='msg_input' rows='4'></textarea></div></div></div>";
                    $("#msgs").append(chaine1 + chaine2 + chaine3);
                });

                $('.close_test').click(function () {
//        $(this).parent().remove();
                    alert("chat");
                });
            });
        </script>
        <div id="msgs"></div>
    </body>
</html>
