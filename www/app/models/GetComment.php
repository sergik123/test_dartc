<?php

/**
 * Получает все комментарии из бд
 *
 * @author sergey
 */
class GetComment{
	public $link;
	public $connect;
	public function __construct(){
		$this->link=new Connectdb;
		$this->connect=$this->link->config();
		
	}
    public function get($table=" ", $sort="",$change=" ", $offset=1,$count=1){

 		if(empty($change)){
 			$change="DESC";
 		}
    	if($table=='comments' && empty($sort)){
    		$sort=" ORDER BY id $change";
    	}else if($table=='comments' && !empty($sort)){
    		$sort=" ORDER BY $sort $change";

    	}else{
    		$sort="";
    	}
    	$tbl=$table;
    	$result_array=array();
    	$page=($offset-1)*$count;

			 $sql_select_user="SELECT * FROM `$tbl` $sort LIMIT ".$count.' OFFSET '.$page; 

			 $res= mysqli_query($this->connect,$sql_select_user);
		
			 if($res!=NULL){
			 	 while($r=$res->fetch_assoc()){
				array_push($result_array, $r);
				}
				return $result_array;
			 }else{
				return $result_array['error']=1;
			 }
			
			 mysqli_close($this->connect);
    	
    }
    public function getall(){
    
    	$result_array=array();
    	$sql_select_user="SELECT * FROM `comments`"; 

    	 $res= mysqli_query($this->connect,$sql_select_user);
		
			 if($res!=NULL){
			 	 while($r=$res->fetch_assoc()){
				array_push($result_array, $r);
				}
				return $result_array;
			 }else{
				return $result_array['error']=1;
			 }
			
			 mysqli_close($this->connect);
    }

    

}
