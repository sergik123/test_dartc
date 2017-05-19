<?php require_once('header.php'); ?>
	<h2>Гостевая книга</h2>
	<ul>
	<?php for ($i=0; $i <count($error); $i++): ?>
		<li><?=$error[$i]; ?></li>
	<?php endfor; ?>
	</ul>
	<?php if(empty($_POST['id_request'])): ?>
	<form action="" method="post" enctype="multipart/form-data"  id="form_comment">
		<div class="form-group">
		  <label for="usr">UserName:</label>
		  <input type="text" class="validation form-control" name="username" required="введите имя" value="<?=$_POST['username']?>" id="usr">
		  <label for="email">Email:</label>
		  <input type="email" class="validation form-control" name="email" value="<?=$_POST['email']?>" required id="email">
		  <label for="homepage">Homepage:</label>
		  <input type="url" class="form-control" name="homepage" value="<?=$_POST['homepage']?>" id="homepage">
		    <label for="comment">Text:</label>
  		  <textarea class="validation form-control" rows="5" name="comment" value="<?=$_POST['comment']?>" id="comment" required></textarea>

  		  <label for="file">Прикрепить картинку:</label>
		  <input type="file" accept="image/jpeg,image/gif,image/png, .txt" class="form-control" name="file" value="" id="file">

		  <img style="margin-left: 10px;" class="img-thumbnail" src= '/../captcha.php'  alt= 'Пример каптчи на php' />
		  <input type= 'text' name= 'user_code' value="<?=$_POST['user_code']?>" class="validation" id="user_code" required>
		  <input type="submit" class="submit btn btn-primary btn-md " name="save_comment" value="Отправить">
		</div>
	</form>
<?php endif; ?>
	<hr>
	<?php if (empty($result) || $result==1): ?>
		<h4>Еще никто не оставил здесь комментарий</h4>
	<?php else: ?>
		<div id="sort">
			<span>Сортировка </span><a href="/index/main/username/">по имени</a><a href="/index/main/email/">по email</a><a href="/index/main/date_comment/">по дате</a> <a href="/index/main/<?=$uri?>/ASC">&#8593</a><a href="/index/main/<?=$uri?>/DESC">&#8595</a>
		</div>
		
	<ul id="comment_text">
		<?php foreach ($result as $key => $value): ?>
			<li><img src="/../img/avatar.png" alt="admin"><span><?=$value['username']; ?> </span> <span style="color:gray; font-size:12px;"><?=$value['date_comment']; ?> </span></li>
			<p><?=$value['comment'] ?> </p>
			<?php if(!empty($value['files'])): ?>
			<a href="/../files/<?=$value['files']?>" target="_blank">Прикрепленный файл</a><br><br>
		<?php endif; ?>
			
			

		<?php endforeach ?>
		
	</ul>
	<?php endif; ?>
 	
<div>
     <?=$pagination->get(); ?>  
</div>

<?php require_once('footer.php'); ?>