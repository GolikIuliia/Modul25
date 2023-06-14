<? if( $data['authed']) : ?> 
<p>Вы авторизованы</p>
<form id="upload">
    <input type="file" id="image">
    <input type="submit" value="Загрузить">
</form>
<? else: ?> 
<p>Вы не авторизованы</p> 
<? endif; ?>
<?php
$pid = 0;
foreach($data['images'] as $link) :
?>
<img src='<?=$link?>' alt='<?=$link?>'>
<?php
if( $data['authed']) :
?>
<form id="delete">
    <input type="hidden" name="image" id="image" value="<?=$link?>">
    <input type="submit" value="Удалить">
</form>
<? endif; ?>
<?php
foreach($data['comments'] as $key=>$comment) :
?>
<p><?=$comment['name']?> </br> <?=$comment['comment']?> </br> <?=$comment['created_at']?></br></p>
<?php
if( $data['authed']) :
?>
<form id="delete_comment">
    <input type="hidden" id="comment" value="<?=$key?>">
    <input type="submit" value="Удалить">
</form>
<? endif; ?>
<?php endforeach;?>

<? if( $data['authed']): ?> 
<form id="comment">
    <div class="form-group">
        <p><?=$data["name"]?></p>
        <div class="form-control-feedback"></div>
    </div>
    <div class="form-group">
        <label for="text">Комментарий</label>
        <input type="text" class="form-control" id="comment" name="comment" placeholder="Текст">
        <div class="form-control-feedback"></div>
    </div>
    <button type="submit" class="btn btn-primary">Оставить комментарий</button>
</form>
<? endif; ?>

<?php endforeach;?>
<?php
var_dump($data);
?>
<div id="result">
 <!-- Результат из upload.php -->
</div>

<script src="assets/js/upload.js"></script>
<script src="assets/js/comment.js"></script>