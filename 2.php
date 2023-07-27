<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

    $color="kırmızı";

    echo "evimizin rengi $color dı";

    echo "<br>";
    
    $x = 5;
    $y = -4;

    echo $x+$y."<br>";

    $age = 40;
    $Age = 30;

    echo $age."<br>".$Age;
    
    //global değişkenlere fonksiyon içerisinden ulaşamayız...global bir değişkene fonksiyon dışından ulaşırız

    //lokal değişkenlere ise fonksiyon içerisinden erişebiliyorken fonksiyon dışından erişemeyiz

    $x = 7;//global variable
    function Test(){
        echo "<p>X değişkenine fonksiyon içerisinden ulaştım:$x</p>";
    }
    Test();
       echo "x değişkenine fonksiyon dışında ulaştım: $x.<br>";


    function Test2(){
        $t = 15;//local variable
        echo "t değişkenine lokalden ulaştım:$t.<br>";
    }

    Test2();
    echo "t değişkenine dışarıdan ulaştım: $t.<br>";

    //global değişkenini bir fonksiyon içerisinde kullanma nasıl olur? global yazarak önüne bunu yapabiliriz....

    $q = 12;
    $k = 13;

    function Ax(){
        global $q;
       
        echo "q'ye ulaştım: $q.<br>";
    }

    Ax();

    //fonksiyon içerisinde tanımlanan bir yerel değişkeni her zaman kullanmak istersek statik olarak kullanmalıyız...static ile biz diyoruz ki silme aklında tut

    function Test3(){
        static $z=45;
        echo $z;
        $z++."<br>";
    };

    Test3();
    echo "<br>";
    Test3();
    echo "<br>";
    Test3()."<br>";


    function Test4()
    {
        $z = 45;
        echo $z;
        $z++;
    };

    Test4();
    echo "<br>";
    Test4();
    echo "<br>";
    Test4();
    ?>


</body>
</html>