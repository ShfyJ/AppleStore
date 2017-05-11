<?php
class userClass{
	/*User login*/

	public function userLogin($username,$password)
	{
		try{
			$db = getDB();
			//$password="ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc9";
		//	$password= md5($password); //Password encryption
			
			$stmt = $db->prepare("SELECT uid FROM users WHERE username=:username AND password=:password"); 
			$stmt->bindParam("username", $username,PDO::PARAM_STR);
			$stmt->bindParam("password", $password,PDO::PARAM_STR) ;
			$stmt->execute();
			$count=$stmt->rowCount();
			$data=$stmt->fetch(PDO::FETCH_OBJ);
			$db = null;
			echo $count;
			if($count)
				{
				$_SESSION['uid']=$data->uid; // Storing user session value
				return true;
			}
			else
				{
				return false;
				} 
			}
		
		catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
			}

			}

	/* User Registration */
	public function userRegistration($username,$password,$email)
	{
		try{
			$db = getDB();
			$st = $db->prepare("SELECT uid FROM users WHERE username=:username OR email=:email");
			$st->bindParam("email", $email,PDO::PARAM_STR);
			$st->bindParam("username", $username,PDO::PARAM_STR);
			$st->execute();
			$count=$st->rowCount();
			if($count<1)
				{
				$hash_password= $password; //Password encryption
				$stmt = $db->prepare("INSERT INTO users(username,password,email) VALUES (:username,:hash_password,:email)");
				
			
				$stmt->bindParam("username", $username,PDO::PARAM_STR) ;
				$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
				$stmt->bindParam("email", $email,PDO::PARAM_STR) ;
				$stmt->execute();
				$uid=$db->lastInsertId(); // Last inserted row id
				$db = null;
				$_SESSION['uid']=$uid;
				return true;
				}
			else
				{
				$db = null;
				return false;	
				}

			} 
		catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}'; 
			}
		}

/* User Details */
	public function userDetails($uid)
	{
		try{
			$db = getDB();
			$uid=$_SESSION['uid'];
			$stmt = $db->prepare("SELECT username, email,vahokazo FROM users WHERE uid=:uid"); 
			$stmt->bindParam("uid", $uid,PDO::PARAM_INT);
			$stmt->execute();
			$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
			return $data;
			}
		
		catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
			}
	}
}
?>
