<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up Page
        </title>
        <link href="css/style.css" rel="stylesheet">
        </link>
    </head>
    <body style="background-color:#bdc3c7">
        <div id="main-wrapper">
            <center>
                <h2>
                    Sign Up Form
                </h2>
            </center>
            <form action="register.php" method="post">
                <div class="imgcontainer">
                    <img alt="Avatar" class="avatar" src="imgs/avatar.png">
                    </img>
                </div>
                <div class="inner_container">
                    <label>
                        <b>
                            Username
                        </b>
                    </label>
                    <input name="username" placeholder="Enter Username" required="" type="text">
                        <label>
                            <b>
                                Password
                            </b>
                        </label>
                        <input name="password" placeholder="Enter Password" required="" type="password">
                            <label>
                                <b>
                                    Confirm Password
                                </b>
                            </label>
                            <input name="cpassword" placeholder="Enter Password" required="" type="password">
                                <button class="sign_up_btn" name="register" type="submit">
                                    Sign Up
                                </button>
                                <a href="index.php">
                                    <button class="back_btn" type="button">
                                        Back to Login
                                    </button>
                                </a>
                            </input>
                        </input>
                    </input>
                </div>
            </form>
            <?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from userinfotbl where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>
            0)
						{
							echo '
            <script type="text/javascript">
                alert("This Username Already exists.. Please try another username!")
            </script>
            ';
						}
						else
						{
							$query = "insert into userinfotbl values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '
            <script type="text/javascript">
                alert("User Registered.. Welcome")
            </script>
            ';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: homepage.php");
							}
							else
							{
								echo '
            <p class="bg-danger msg-block">
                Registration Unsuccessful due to server error. Please try later
            </p>
            ';
							}
						}
					}
					else
					{
						echo '
            <script type="text/javascript">
                alert("DB error")
            </script>
            ';
					}
				}
				else
				{
					echo '
            <script type="text/javascript">
                alert("Password and Confirm Password do not match")
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