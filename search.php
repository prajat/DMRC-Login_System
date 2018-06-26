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
                        page for search a record
                    </h2>
                </b>
            </center>
            <center>
                <b>
                    <h2>
                        enter the serial no to search a record
                    </h2>
                </b>
            </center>
            <form action="search.php" method="post">
                <div class="inner_container">
                    <label>
                        <b>
                            sno
                        </b>
                    </label>
                    <input name="sno" placeholder="type s.no." required="" type="number">
                        <button class="sign_up_btn" name="search" type="submit">
                            SEARCH
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


									
									if(isset($_POST['search'])) 
					  {?>
            <center>
                <table border="5" cellpadding="3" cellspacing="1" width="50%">
                </table>
            </center>
            <?php

					  	echo "<tr>
            <th>
                SNo
            </th>
            <th>
                Line
            </th>
            <th>
                Station
            </th>
            <th>
                Tom 1
            </th>
            <th>
                Tom 2
            </th>
            <th>
                CC
            </th>
            <th>
                Tum 1
            </th>
            <th>
                Tum 2
            </th>
            <th>
                Date
            </th>
        </div>
    </body>
</html>
";
					  	
					  	
					  		  



					  		
						      $sno=$_POST['sno'];

						           $query="select * from rev where sno='$sno'";
						           $query_run = mysqli_query($con,$query);

						                        if($query_run)
										         {
											if(mysqli_num_rows($query_run)>0)
											{
												echo '
<script type="text/javascript">
    alert("record found")
</script>
';
								
							}
							else
							{
								echo '
<script type="text/javascript">
    alert("not found")
</script>
';
								
			}
								}
								while($row = mysqli_fetch_array($query_run, MYSQLI_ASSOC))
			{
				echo "
<tr>
    <td>
        ";
				echo $row['sno'];
				echo "
    </td>
    <td>
        ";
				echo $row['line'];
				echo "
    </td>
    <td>
        ";
				echo $row['station'];
				echo "
    </td>
    <td>
        ";
				echo $row['tom1'];
				echo "
    </td>
    <td>
        ";
				echo $row['tom2'];
				echo "
    </td>
    <td>
        ";
				echo $row['cc'];
				echo "
    </td>
    <td>
        ";
				echo $row['tum1'];
				echo "
    </td>
    <td>
        ";
				echo $row['tum2'];
				echo "
    </td>
    <td>
        ";
				echo $row['date'];
				echo "
    </td>
</tr>
";
			}
			
			echo "
";
							}

									

									 ?>
