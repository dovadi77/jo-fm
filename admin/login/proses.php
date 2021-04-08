<?php
    session_start();
	if(isset($_POST['submit'])){
        include "../../config.php"; 
		//set login attempt if not set
		if(!isset($_SESSION['attempt'])){
			$_SESSION['attempt'] = 0;
		}
		//check if there are 3 attempts already
		if($_SESSION['attempt'] == 3){
            $_SESSION['error'] = 'Attempt limit reach';
            header('location: login.php');
		}
		else{
			$uname =  $_POST['uname'];
			$pass = md5($_POST['pass']);
			$sql = "SELECT * FROM users WHERE username = '$uname'";
			$query = $con->query($sql);
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				$_SESSION['username'] = $uname;
				//verify password
				if($pass == $row['password']){
					//unset our attempt
                    unset($_SESSION['attempt']);
                    header('location: ../main.php');
				}
				else{
					$_SESSION['error'] = 'Password incorrect';
					//this is where we put our 3 attempt limit
					$_SESSION['attempt'] += 1;
					//set the time to allow login if third attempt is reach
					if($_SESSION['attempt'] == 3){
						$_SESSION['attempt_again'] = time() + (5*60);
                        //note 5*60 = 5mins, 60*60 = 1hr, to set to 2hrs change it to 2*60*60
                        
                    }
                    header('location: login.php');
				}
			}
			else{
                $_SESSION['error'] = 'No account with that username';
                header('location: login.php');
			}

		}

	}
	else{
        $_SESSION['error'] = 'Fill up login form first';
        header('location: login.php');
	}
    
	

?>