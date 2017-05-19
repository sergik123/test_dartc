<?php 
/**
 * Данный контроллер отвечает за всю обработку входных данных. 
 * Также он подключает нужный view
 * @author sergey
 */
	class IndexController extends ViewController{
		protected $model;
		public function mainAction($id=""){
			
			session_start();
			

			if(isset($_POST['save_comment'])){

				if(!empty($_FILES)){
					$filename=$_FILES['file']['name'];
					$uploadfile = ROOT.'/files/'. basename($_FILES['file']['name']);
					if($_FILES['file']['type']=='image/jpeg'){
						$file=$this->imageresizejpeg($uploadfile,$_FILES['file']['tmp_name'],320,240,75);
					}
					if($_FILES['file']['type']=='image/png'){
						$file=$this->imageresizepng($uploadfile,$_FILES['file']['tmp_name'],320,240,0);
					}
					if($_FILES['file']['type']=='image/gif'){
						$file=$this->imageresizegif($uploadfile,$_FILES['file']['tmp_name'],320,240,75);
					}
					if($_FILES['file']['type']=='text/plain'){
						$file_size=filesize($_FILES['file']['tmp_name']);
						if($file_size<102400){
							$file=$_FILES['file']['tmp_name'];
						}
						
					}
					move_uploaded_file($file, $uploadfile);
				}else{
					$filename='';
				}
				$error=$this->validation($_POST);
				
				if(empty($error)){
					 $this->model=new SaveComment;
					 $this->model->save($_POST,$filename);  
					array_push($error, "Вы успешно добавили комментарий");
					$email=htmlspecialchars(strip_tags($_POST['email']));
					$message=htmlspecialchars(strip_tags($_POST['comment']));
					$username=htmlspecialchars(strip_tags($_POST['username']));
					$this->mailto('admin@mail.ru',$email,$message,$username);
					$_POST="";
				}
			}
			
			$this->model=new GetComment;
			
			$current_page=preg_split('/(page-)/', $_SERVER['REQUEST_URI']);
			$val_current=$current_page[1];
			if($val_current!=NULL){
				$val_current=$current_page[1];
			}else{
				$val_current=1;
			}
			$result= $this->model->get('comments',$id[0],$id[1],$val_current,25);

			$result_all= $this->model->getall();
			$size=count($result_all);
			$pagination = new Pagination($size, $val_current, 25,'page-',$id[0]);
			$this->generateviewAction('index',$error,$result,$request,$id[0],$pagination);
		}

		public function mailto($to,$email,$msg,$username){
			
			$subject = "Letter for admin"; 

			$message = ' 
			<html> 
			    <head> 
			        <title>Letter from '.$username.'</title> 
			    </head> 
			    <body> 
			        <p>'.$msg.'</p> 
			    </body> 
			</html>'; 

			$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
			$headers .= "From: $username <$email>\r\n"; 

			mail($to, $subject, $message, $headers); 
		}
	public function imageresizejpeg($outfile,$infile,$neww,$newh,$quality) {

	    $im=imagecreatefromjpeg($infile);
	    $im1=imagecreatetruecolor($neww,$newh);
	    imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));

	    imagejpeg($im1,$outfile,$quality);
	    imagedestroy($im);
	    imagedestroy($im1);
    }
    public function imageresizepng($outfile,$infile,$neww,$newh,$quality) {

	    $im=imagecreatefrompng($infile);
	    $im1=imagecreatetruecolor($neww,$newh);
	    $this->setTransparency($im1, $im); 
	    imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));

	    imagepng($im1,$outfile);
	    imagedestroy($im);
	    imagedestroy($im1);
    }
     public function imageresizegif($outfile,$infile,$neww,$newh,$quality) {

		    $im=imagecreatefromgif($infile);
		    $im1=imagecreatetruecolor($neww,$newh);
		    imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));

		    imagegif($im1,$outfile,$quality);
		    imagedestroy($im);
		    imagedestroy($im1);
    }
    public function setTransparency($new_image, $image_source)
		{
		        $transparencyIndex = imagecolortransparent($image_source);
		        $transparencyColor = array('red' => 255, 'green' => 255, 'blue' => 255);
		        
		        if ($transparencyIndex >= 0)
		            $transparencyColor = imagecolorsforindex($image_source, $transparencyIndex);   
		        
		        $transparencyIndex = imagecolorallocate($new_image, $transparencyColor['red'], $transparencyColor['green'], $transparencyColor['blue']);
		        imagefill($new_image, 0, 0, $transparencyIndex);
		        imagecolortransparent($new_image, $transparencyIndex);
		}

		
	}
 ?>