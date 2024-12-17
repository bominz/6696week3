<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <style>
    body{
        font-family: "K2D", sans-serif;
        font-weight: 600;
        font-style: normal;
        margin: right 100px; ;
    }

    </style>
    <!-- สิ้นสุดเพิ่ม font -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 1</title>
</head>
<body>
    <h1>โปรแกรม ภาษา PHP </h1>
    664485010 ประกฤษฎิ์ ปลัดโส <br>
    หมู่เรียน 66/96

    <?php
        echo "<h2>สวัสดีปีใหม่</h2>";
        echo "<br>ขอให้ทุกคนมีความสุข";
        $name="ประกฤษฎิ์";
        $surname="ปลัดโส";
        echo "<br>ชื่อของคุณคือ".$name." ".$surname;
        $x=15;
        $y=7;
        $z=$x+$y;
        echo "<br>ค่าผลบวกเท่ากับ".$z;
        $x=15;
        $y=7;
        $z=$x*$y;
        echo "<br>ค่าผลคูณเท่ากับ".$z;
    ?>
</body>
</html>