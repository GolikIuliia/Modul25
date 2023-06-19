<? if( $data['authed']) : ?> 
<p>Вы авторизованы</p>
<form id="upload">
    <input type="file" id="image">
    <input type="submit" value="Загрузить">
</form>
<? else: ?> 
<p>Вы не авторизованы</p> 
<? endif; ?>
<?foreach($data['images'] as $link):?>
    <img src='<?=$link?>' alt='<?=$link?>'>

    <?if( $data['authed']):?> <!-- такое надо писать в одну строчку --> 
        <form class="deleteImage">
            <input type="hidden" name="image" id="image" value="<?=$link?>">
            <input type="submit" value="Удалить">
        </form>
    <?endif;?>
    <?if(is_array($data['comments']) && is_array($data['comments'][$link])):?> 
        <?$comments = $data['comments'][$link];?> 
        <?foreach($comments as $comment):?> <!-- слово php можно не использовать в конструкции <"?php -->
            <p><?=$comment['name']?> </br> <?=$comment['comment']?> </br> <?=$comment['created_at']?></br></p>
            <?if( $data['authed']):?>
                <form class="deleteComment">
                    <input type="hidden" id="comment" name = "comment" value="<?=$comment['id']?>">
                    <input type="submit" value="Удалить">
                </form>
            <? endif; ?>
        <?endforeach;?>
    <?endif;?>

    <?if( $data['authed']):?> 
        <form class="comment">
            <div class="form-group">
                <p><?=$data["name"]?></p>
                <div class="form-control-feedback"></div>
            </div>
            <div class="form-group">
                <label for="text">Комментарий</label>
                <input type="text" class="form-control" id="comment" name="comment" placeholder="Текст">
                <input type="hidden" id="image_id" name="image_id" value="<?=$link?>">
                <div class="form-control-feedback"></div>
            </div>
            <button type="submit" class="btn btn-primary">Оставить комментарий</button>
        </form>
    <?endif;?>
<?endforeach;?>

<?php
var_dump($data);
?>
<div id="result">
 <!-- Результат из upload.php -->
</div>

<script src="assets/js/upload.js"></script>
<script src="assets/js/comment.js"></script>