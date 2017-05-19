<?php 
/**
 * Контроллер подключает необходимую страницу и отвечает за валидацию полей
 *
 * @author sergey
 */
	class ViewController{

		public function generateviewAction($view=" ", $error=" ",$result=" ", $request=" ",$uri="",$pagination=" "){
			include_once ROOT."/app/views/$view".'.php';
		}
		public function validation($post){
			$error=array();
				if(!preg_match("/^[a-zA-Z0-9]+$/", $post['username'])){
					array_push($error, "Введите правильное имя");
				}
				if(preg_match('~[a-zA-Z0-9]~', $post['user_code'])){
					if($_SESSION['code']!=$post['user_code']){
						array_push($error, "Введите правильный код");
					}
					
				}else{
					array_push($error, "Введите код в правильном формате");
				}
				if($_FILES['file']['type']=='text/plain'){
						$file=filesize($_FILES['file']['tmp_name']);
						if($file>102400){
							array_push($error, "Файл должен быть не больше 100 кб");
						}
						
					}
				return $error;
		}
		

	}
 ?>