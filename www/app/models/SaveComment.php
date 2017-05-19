<?php

/**
 * сохраняет в бд все данные
 *
 * @author sergey
 */
class SaveComment{
	public $link;
	public $connect;
	public function __construct(){
		$this->link=new Connectdb;
		$this->connect=$this->link->config();
		
	}
	/*метод сохраняет главные комментарии*/
    public function save($post=' ',$files=' '){

    	$name=mysqli_real_escape_string($this->connect,htmlspecialchars(strip_tags($post['username'])));
    	$email=mysqli_real_escape_string($this->connect,htmlspecialchars(strip_tags($post['email'])));
    	$homepage=mysqli_real_escape_string($this->connect,filter_var($post['homepage'],FILTER_VALIDATE_URL));
    	$comment=mysqli_real_escape_string($this->connect,htmlspecialchars(strip_tags($post['comment'])));
    	$ip=mysqli_real_escape_string($this->connect,filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP));
    	$browser=mysqli_real_escape_string($this->connect,htmlspecialchars(strip_tags($_SERVER['HTTP_USER_AGENT'])));
    	$date_comment=mysqli_real_escape_string($this->connect, htmlspecialchars(date("Y-m-d H:i:s")));
    	$file=mysqli_real_escape_string($this->connect, htmlspecialchars(strip_tags($files)));
    	$table_name='comments';


		$sql_insert_user="INSERT INTO `comments`   (username, 
			                                         email,
			                                         homepage,
			                                         comment,
			                                         ip_users,
			                                         browser,
			                                         date_comment,
			                                         files) 
			                 VALUES('$name','$email','$homepage','$comment','$ip','$browser','$date_comment','$file')";
		

			$res= mysqli_query($this->connect,$sql_insert_user);
			mysqli_close($this->connect);
    	
    }
}
