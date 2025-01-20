<?php   
				session_start();
				$username=$_SESSION['username'];
				$conn = mysqli_connect("localhost","root","","dbms_p1",3306);
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				mysqli_select_db($conn,"dbms_p1");
				if(isset($_POST['submit'])){
					$username=$_POST["username"];
					$privilege=$_POST["privilege"];
					$sql="DELETE FROM inspector WHERE username='$username' and privilege='$privilege'";
					$result = $conn->query($sql);
					if (mysqli_affected_rows($conn)==1) {
								echo ("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Inspector removed successfully!!')
								window.location.href='rto_admin.php'
								</SCRIPT>");
					}
					else
					{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Enter existing Inspector data!!')
								window.location.href='rto_admin.php'
								</SCRIPT>");
					}
				}
					
?>