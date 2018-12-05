<html>

<head>
    <title>Artykuły</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <style>
        img {
            height: 200px;
            width: 300px;
        }

    </style>
</head>

<body>
    <?php
        if(isset($t['menu']))
            echo $t['menu'];
    ?>
        <div class='container'>
        <?php
            if(isset($t['error'])){
                echo $t['error'];
            }
            if(isset($t['tresc']))
                echo $t['tresc'];
        ?>
        </div>
<!--        <footer class='footer'>
            <div class='col-sm-12 text-center' style="position: fixed; left: 0;bottom: 0;">
                <span>Łukasz Mól - 2018</span>
            </div>
        </footer>-->
        </div>
</body>

</html>
