<?php 
			   session_start();
			   require_once('dbconfig/config.php');
			 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            delete
        </title>
        <link href="css/style.css" rel="stylesheet">
        </link>
    </head>
    <body style="background-color:#34495e">
        <div id="main-wrapper">
            <center>
                <b>
                    <h2>
                        page for delete a record
                    </h2>
                </b>
            </center>
            <center>
                <b>
                    <h2>
                        enter the serial no to delete a record
                    </h2>
                </b>
            </center>
            <form action="del.php" method="post">
                <div class="inner_container">
                    <label>
                        <b>
                            sno
                        </b>
                    </label>
                    <input name="sno" placeholder="type s.no." required="" type="number">
                        <button class="sign_up_btn" name="delete" type="submit">
                            DELETE
                        </button>
                        <a href="homepage.php">
                            <button class="logout_button" type="button">
                                back to home
                            </button>
                        </a>
                    </input>
                </div>
            </form>
            <?php 

					if(isset($_POST['delete'])) 
					  {


						      $sno=$_POST['sno'];

						           $query="delete from rev where sno='$sno'";
						           $query_run = mysqli_query($con,$query);

									if($query_run)
									{
										echo '<script type="text/javascript">
            alert("delete successfully")
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
