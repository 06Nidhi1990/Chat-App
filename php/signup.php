<?php
session_start();
include_once 'config.php';
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password))
{
	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
		if(mysqli_num_rows($sql) > 0)
		{
			echo "$email - This email address already exists!";
		}
		else
		{
			if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png', 'jpg', 'jpeg'];
                    if(in_array($img_ext, $extensions) == true)
                    {
                    	$time = time();
                    	$new_img_name = $time.$img_name;

                    	if(move_uploaded_file($tmp_name, "images/".$new_img_name))
                    	{
                    		$status = "Active now";
                    		$rand_id = rand(time(), 1000000);
							$encrypt_pass = md5($password);
                            $sql2 =  mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, image, status)
												VALUES ({$rand_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");

							if($sql2)
							{
								$sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
								if(mysqli_num_rows($sql3) > 0)
								{
									$row = mysqli_fetch_assoc($sql3);
									$_SESSION['unique_id'] = $row['unique_id'];
									echo "success";
								}
							}
							else
							{
								echo "Something went wrong";
							}
                    	}
                    }
                    else
                    {
                    	echo "Please select an Image file - jpeg, png, jpg";
                    } 
            }
            else
            {
            	echo "Please select an Image file";
            }
		}
	}
	else
	{
		echo "email - This is not a valid email";
	}
}
else
{
	echo "All input fields are required";
}
?>