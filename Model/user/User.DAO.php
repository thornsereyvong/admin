<?php
	class User{
		public function login($email,$password){
			try{
				$dbh = DBConnection::getInstance();
				$sql = "
						 SELECT * FROM z_users WHERE Email = :email AND Password = :password
					   ";
				$req = $dbh->prepare($sql);
				$req->bindParam(":email", $email);
				$req->bindParam(":password", $password);
				$req->execute();
				$num = $req->rowCount();
				if($num != 0){
					$rows = $req->fetch(PDO::FETCH_ASSOC);
					$_SESSION['ZOBENZ_USERID'] = $rows['UserID'];
					$_SESSION['ZOBENZ_USER'] = $rows['Username'];
					$_SESSION['ZOBENZ_USER_ROLE'] = $rows['Role'];
					echo "success";
				}else{
					echo "Error";
				}
				$req->closeCursor();
			}catch(PDOException $e){
				echo "Error";
			}
		}
		public function register($username,$password,$email){
			try{
				$dbh = DBConnection::getInstance();
				$sql = "
						 INSERT INTO tbluser(Username,Password,Email,code) VALUES(:username,:password,:email,:code);
					   ";
				$code = $this->generateCode();
				$password = $cryption->IMD5($password);
				$req = $dbh->prepare($sql);
				$req->bindParam(":username", $username);
				$req->bindParam(":password", $password);
				$req->bindParam(":email", $email);
				$req->bindParam(":code", $code);
				$req->execute();
				$num = $req->rowCount();
				if($num != 0){
					$_SESSION['C_USERID'] = $dbh->lastInsertId();
					
					echo "success";
				}else{
					echo "Error";
				}
				$req->closeCursor();
			}catch(PDOException $e){
				echo "Error";
			}
		}
		
		public function active($dbh,$userid){
			try{
				$sql = "UPDATE tbluser SET active = 1-active WHERE UID=:userid;";
				$req = $dbh->prepare($sql);
				$req->bindParam(":userid", $userid);
				$req->execute();
				$num = $req->rowCount();
				if($num != 0){
					$_SESSION['C_STATUS'] = 1;
					return true;
				}else{
					return false;
				}
				$req->closeCursor();
			}catch(PDOException $e){
				return false;
			}
		}
		
		public function checkUserEmail($dbh,$str,$option){
			try{
				if($option == 'username'){
					$sql = "SELECT * FROM tbluser WHERE Username = :username";
					$req = $dbh->prepare($sql);
					$req->bindParam(":username", $str);
					$req->execute();
					$num = $req->rowCount();
					if($num != 0){
						return true;
					}else{
						return false;
					}
					$req->closeCursor();
				}else if($option == 'email'){
					$sql = "SELECT * FROM tbluser WHERE Email = :email";
					$req = $dbh->prepare($sql);
					$req->bindParam(":email", $str);
					$req->execute();
					$num = $req->rowCount();
					if($num != 0){
						return true;
					}else{
						return false;
					}
					$req->closeCursor();
				}
			}catch(PDOException $e){
				return true;
			}
			return true;
		}
	}