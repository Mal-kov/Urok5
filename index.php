<meta charset="utf8" />
<?php
$x='Четыре новосибирские компании вошли в сотню лучших работодателей
Выставка университетов США: открой новые горизонты
Оценку «неудовлетворительно» по качеству получает каждая 5-я квартира в новостройке
Студент-изобретатель раскрыл запутанное преступление
Хоккей: «Сибирь» выстояла против «Ак Барса» в пятом матче плей-офф
Здоровое питание: вегетарианская кулинария
День святого Патрика: угощения, пивной теннис и уличные гуляния с огнем
«Красный факел» пустит публику на ночные экскурсии за кулисы и по закоулкам столетнего здания
Звезды телешоу «Голос» Наргиз Закирова и Гела Гуралиа споют в «Маяковском»
Новость № 10
Новость № 11
Новость № 12';
$news= explode("\n", $x );

    function one_news($news){
        $n = $_GET['id'];
        tables();
       // echo "<table border=1>
       //         <tbody>
       //         <tr align=center>
       //         <td>№</td>
       //         <td>Новость</td></tr>";
        echo"<tr align=center>
                <td>",$n,"</td>
                <td>",($news [$_GET['id']-1]),"</td></tr>";
    
    }
    function all_news($news){
       // echo "<table border=1>
       //         <tbody>
       //         <tr align=center>
       //         <td>№</td>
       //         <td>Новость</td></tr>";
    tables();
    foreach ($news as $keys => $param){
        echo"<tr align=center>
                <td>",$keys+1,"</td>
                <td>",$param,"</td></tr>";
    }
    }
    
    function tables(){
        echo "<table border=1>
                <tbody>
                <tr align=center>
                <td>№</td>
                <td>Новость</td></tr>";  
    }
    
 if (!isset($_GET['id'])){
     all_news($news);
 } elseif (is_numeric($_GET['id'])){
     $n= $_GET['id'];
    switch ($n){
        case (array_key_exists($n, $news)): 
        {
            one_news($news);
        }
        break;
        default : 
        {
            echo 'Ошибка 404'; //header("HTTP/1.0 404 Not Found");
        }
        break;
    }
 }else {  
    all_news($news);
}
  
?>
