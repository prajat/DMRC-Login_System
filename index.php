<?php
	session_start();
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Page
        </title>
        <link href="css/style.css" rel="stylesheet">
        </link>
    </head>
    <body style="background-color:#34495e">
        <div id="main-wrapper">
            <center>
                <h2>
                    Delhi Metro Rail Corporation
                </h2>
            </center>
            <div class="imgcontainer">
                <img alt="Avatar" class="avatar" src="imgs/avatar1.png">
                </img>
            </div>
            <form action="index.php" method="post">
                <div class="inner_container">
                    <label>
                        <b>
                            Username
                        </b>
                    </label>
                    <input name="username" placeholder="Enter Your Username" required="" type="text">
                        <label>
                            <b>
                                Password
                            </b>
                        </label>
                        <input name="password" placeholder="Enter Password" required="" type="password">
                            <button class="login_button" name="login" type="submit">
                                Login
                            </button>
                            <a href="register.php">
                                <button class="register_btn" type="button">
                                    Register
                                </button>
                            </a>
                        </input>
                    </input>
                </div>
            </form>
            <?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from userinfotbl where username='$username' and password='$password' ";
				$query_run = mysqli_query($con,$query);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>
            0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: homepage.php");
					}
					else
					{
						echo '
            <script type="text/javascript">
                alert("No such User exists. Invalid Credentials");
            </script>
            ';
					}
				}
				else
				{
					echo '
            <script type="text/javascript">
                alert("Database Error");
            </script>
            ';
				}
			}
			else
			{
			}
		?>
        </div>
    </body>
</html>
