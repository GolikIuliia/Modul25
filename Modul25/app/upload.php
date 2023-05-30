<?php
$uploadDir="./images/"
$uploadFile=$uploadDir . basename($_FILES['userfile']['name']);

echo "fileupload"

move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Не удалось\n";
}
var_dump($_FILES);

<form method='post' action="/index.php" enctype="multipart/form-data">          <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type='file' name='file[]' class='file-drop' id='file-drop' multiple required><br> 
<input type='submit' value='Загрузить' >
</form>
 
<div class='message-div message-div_hidden' id='message-div'></div>