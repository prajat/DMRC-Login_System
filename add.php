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
    <body style="background-color:#f39c12">
        <div id="main-wrapper">
            <center>
                <h2>
                    Page for adding details
                </h2>
            </center>
            <form action="add.php" method="post">
                <div class="inner_container">
                    <label>
                        <b>
                            sno
                        </b>
                    </label>
                    <input name="sno" placeholder="type s.no." required="" type="number">
                        <label>
                            <b>
                                line
                            </b>
                        </label>
                        <input name="line" placeholder="enter line" required="" type="text">
                            <label>
                                <b>
                                    station
                                </b>
                            </label>
                            <input name="station" placeholder="enter station" required="" type="text">
                                <label>
                                    <b>
                                        tom1
                                    </b>
                                </label>
                                <input name="tom1" placeholder="type tom1" required="" type="number">
                                    <label>
                                        <b>
                                            tom2
                                        </b>
                                    </label>
                                    <input name="tom2" placeholder="type tom2" required="" type="number">
                                        <label>
                                            <b>
                                                cc
                                            </b>
                                        </label>
                                        <input name="cc" placeholder="type cc" required="" type="number">
                                            <label>
                                                <b>
                                                    tum1
                                                </b>
                                            </label>
                                            <input name="tum1" placeholder="type tum1" required="" type="number">
                                                <label>
                                                    <b>
                                                        tum2
                                                    </b>
                                                </label>
                                                <input name="tum2" placeholder="type tum2" required="" type="number">
                                                    <label>
                                                        <b>
                                                            date
                                                        </b>
                                                    </label>
                                                    <input name="date" placeholder="type date" required="" type="date">
                                                        <button class="sign_up_btn" name="add" type="submit">
                                                            ADD
                                                        </button>
                                                        <a href="homepage.php">
                                                            <button class="logout_button" type="button">
                                                                back to home
                                                            </button>
                                                        </a>
                                                    </input>
                                                </input>
                                            </input>
                                        </input>
                                    </input>
                                </input>
                            </input>
                        </input>
                    </input>
                </div>
            </form>
            <?php 
		   if(isset($_POST['add']))
		{
			$sno=$_POST['sno'];
			$line=$_POST['line'];
			$station=$_POST['station'];
			$tom1=$_POST['tom1'];
			$tom2=$_POST['tom2'];
			$cc=$_POST['cc'];
			$tum1=$_POST['tum1'];
			$tum2=$_POST['tum2'];
			$date=$_POST['date'];



			$query = "insert into rev values('$sno','$line','$station','$tom1','$tom2','$cc','$tum1','$tum2','$date')";
							$query_run = mysqli_query($con,$query);

							if($query_run)
							{
								echo '<script type="text/javascript">
            alert("add successfully")
        </div>
    </body>
</html>
';
								
							}
							else
							{
								echo '
<script type="text/javascript">
    alert("not done")
</script>
';
								
			}
		  }

		 ?>
