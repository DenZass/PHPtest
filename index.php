<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP test</title>
    <link rel="stylesheet" href="st.css">
</head>
<body>
    <h1>Hello PHP</h1>
    <p>Дан массив из 100 элементов. Требуется вывести количество последовательных пар одинаковых элементов<br>
        Например:<br>
        1, 1, 2, 3, 4, -51, 12, 12, 12, -51<br>
        Для примера ответ "3"
    </p>
    <?php 

        $arr = array(1, 1, 2, 3, 4, -51, 12, 12, 12, -51);

        function countDouble($arr){
            $variable = null;
            $count = null;
            foreach($arr as $item){
                if($item == $variable){
                    $count++;
                }
                $variable = $item;
            }
            echo "<script>
                console.log('$count');
            </script>";
            return $count;
        }
    
        echo 'Для теста выбран этот же массив<br>
        Выводим решение на страницу:' . ' ' . countDouble($arr) . ' ' . '( + решение в консоли)'; 

    ?>
</body>
</html>