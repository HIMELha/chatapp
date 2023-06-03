
<?php
    session_start();
    include_once "conn.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM user_info WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
                if($password == $cpassword){
                $sql = "INSERT INTO `user_info` (`fname`, `lname`, `email`, `cpass`) VALUES ('$fname', '$lname', '$email', '$cpassword')";
                $run = mysqli_query($conn, $sql);

                $run2 = mysqli_query($conn, "SELECT * FROM user_info WHERE email = '{$email}' ");

                $row = mysqli_fetch_assoc($run2);

                $_SESSION['email'] = $row["email"];

                echo "success";
                }else{
                echo "password doesnot match!";
                }
               
                if(!isset($_FILES['images'])){
                    
                echo "avatar not selected";
                }else{
                   $img_name = $_FILES['images']['name'];
                    $img_type = $_FILES['images']['type'];
                    $tmp_name = $_FILES['images']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"avaters/".$new_img_name)){
                            echo "suucess";
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }

            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>