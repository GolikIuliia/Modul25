<p>
<img src="/images/images.png" align="left">
<a href="/">Обучение в Skillfactory</a><?=$data?><br/>
<ol>
<li>SQL и работа с базами данных</li>
<li>Базовое администрирование</li>
<li>Продвинутый Бэкэнд</li>
<li>Продвинутое администрирование</li>
</ol>

</p>

<?php

     foreach($data as $row)
     {
        echo '<tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td></tr>';
        
     }
     