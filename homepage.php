<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Home Page
        </title>
        <link href="css/style.css" rel="stylesheet">
        </link>
    </head>
    <body style="background-color: #bdc3c7">
        <div id="main-wrapper">
            <center>
                <h2>
                    Home Page
                </h2>
            </center>
            <center>
                <h3>
                    Welcome
                    <?php echo $_SESSION['username']; ?>
                </h3>
            </center>
            <form action="index.php" method="post">
                <div class="imgcontainer">
                    <img alt="Avatar" class="avatar" src="imgs/avatar1.png">
                    </img>
                </div>
                <div class="inner_container">
                    <a href="index.php">
                        <button class="logout_button" name="logout" type="button">
                            LOG OUT
                        </button>
                    </a>
                    <a href="revenue.php">
                        <button class="logout_button" type="button">
                            show complete revenue generated list
                        </button>
                    </a>
                    <a href="add.php">
                        <button class="logout_button" type="button">
                            add record
                        </button>
                    </a>
                    <a href="del.php">
                        <button class="logout_button" type="button">
                            delete record
                        </button>
                    </a>
                    <a href="search.php">
                        <button class="logout_button" type="button">
                            search record
                        </button>
                    </a>
                    <a href="update.php">
                        <button class="logout_button" type="button">
                            update record
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </body>
</html>