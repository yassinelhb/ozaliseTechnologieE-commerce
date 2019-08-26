<?php
class user {
private $db; 
function __construct($DB_con) {
 $this->db = $DB_con;
}

public function register($uname,$umail,$upass,$datee,$city,$State) {
 try {

$new_password = password_hash($upass, PASSWORD_DEFAULT);


$sql = "INSERT INTO users(user_name,user_email,user_pass,user_date,user_city,user_loc)
VALUES(:uname, :umail, :upass, :datee, :sexe)";
$req = $this->db->prepare($sql);
$req->bindparam(":uname", $uname);
$req->bindparam(":umail", $umail);
$req->bindparam(":upass", $new_password);
$req->bindparam(":datee", $datee);
$req->bindparam(":sexe", $sexe);


$req->execute();

 return $req;
 echo $req;
}catch(PDOException $e) {
echo $e->getMessage(); }
}
public function login($uname,$umail,$upass) {
try {

$req = $this->db->prepare("SELECT * FROM users WHERE
user_name=:uname OR user_email=:umail LIMIT 1");

$req->execute(array(':uname'=>$uname, ':umail'=>$umail));

$ligne=$req->fetch(PDO::FETCH_ASSOC);

if($req->rowCount() > 0) {

if(password_verify($upass, $ligne['user_pass'])) {

$_SESSION['user_session'] = $ligne['user_id'];
return true;
} else {
return false;
}
}
 }catch(PDOException $e) {
 echo $e->getMessage();
 }
}

public function is_loggedin() {

	if(isset($_SESSION['user_session'])) {
		return true;
}
}
public function redirect($url) {
	header("Location: $url");
}

public function logout() {

	session_destroy();
	unset($_SESSION['user_session']);
	return true;
 }
}
?>