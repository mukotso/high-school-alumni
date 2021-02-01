<?php 
	session_start();

	// variable declaration
    $id_number = "";
    $adm_no = "";
    $name = "";
    $date_of_birth = "";
    $phone = "";
    $email = "";
    $county = "";
    $photo_file_name = "";
    $cv_file_name = "";
    $bio = "";
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'alumni');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$id_number = mysqli_real_escape_string($db, $_POST['id_number']);
        $admission_number = mysqli_real_escape_string($db, $_POST['admission_number']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $completion_year = mysqli_real_escape_string($db, $_POST['completion_year']);
        $tel = mysqli_real_escape_string($db, $_POST['tel']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $city = mysqli_real_escape_string($db, $_POST['city']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
       
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);
                
			$query = "INSERT INTO users (id_number,admission_number,name,completion_year,tel,email ,city,gender,address,password) 
					  VALUES('$id_number','$admission_number','$name','$completion_year','$tel','$email' ,'$city','$gender','$address','$password')";

				if(mysqli_query($db , $query)){
          
        $_SESSION['success_messages']="You have Successfully Created an Account";
					header('Location: login.php');
				}else{
					//header('Location: register.php');
				}
			
			
		}

	}

	// ... 

	//logging in (from loginpage)
if(isset($_POST['login']))
{
  $username = $_POST['email'];
  $password = $_POST['password'];


  //  array_push($errors, " ");
  // }
  if(count($errors)<=0)
  {
    $password= md5($password); // encrypting password for security.
    $query= "SELECT * FROM users WHERE email= '$username' AND password='$password' ";
    $result = mysqli_query($db,$query);

    if(mysqli_num_rows($result)==1)
    {

      while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];
        $tel = $row["tel"];
        $address = $row["address"];
        $admission_number = $row["admission_number"];
        $city = $row["city"];
        $gender = $row["gender"];
        $id_number = $row["id_number"];
        $completion_year = $row["completion_year"];
        

         //log user in
        $_SESSION['user_id']=$id;
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['tel']=$tel;
        $_SESSION['address']=$address;
        $_SESSION['admission_number']=$admission_number;
        $_SESSION['city']=$city;
        $_SESSION['gender']=$gender;
        $_SESSION['id_number']=$id_number;
        $_SESSION['completion_year']=$completion_year;
        $_SESSION['success_messages']="You have Successfully Logged In";
        
          header('location: dashboard.php');
          break;
        }

       
      }
     
      else
      {
        $query1 = "SELECT name FROM users WHERE email = '$username'";
           $result1 = mysqli_query($db,$query1);
           //$row1 = pg_fetch_array($result1,PG_ASSOC);
           $count1 = mysqli_num_rows($result1);
  
        array_push($errors, "The username/password combination is incorrect.");
        if($count1==0)
        {
          array_push($errors," The Username does not exist.");
        }
        else if ($count1==1)
        {
          array_push($errors, "Incorrect password.");
        }
      }
    }
   
  }



  //Logout
  if(isset($_GET['logout']))
  {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
    // $home_url = 'http://' . $_SERVER['HTTP_HOST'] .'/COM_415HCI/kenya_airways/index.php';
    // header('Location: ' . $home_url);
  }

  ?>
