<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>PHP practice</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <?php include 'logo.inc.php' ?>
                <?php include 'menu.inc.php' ?>
            </div>
        </header>
        <main>
            <div class="mainWrapper">
                <div class="avatar">
                    <?php
                    echo '<img src="./media/image.webp">'
                        ?>
                </div>

                <div class="textWrapper">
                    <div class="mainInfo">
                        <h1>
                            <?php echo $greet ?>
                        </h1>
                        <p> Меня зовут
                            <?php
                            echo $name, ' ', $surname . '<br>';
                            echo 'город', ' ', $city;
                            ?>
                        </p>
                        <p> Мне
                            <?php echo $age; ?>
                            лет
                        </p>
                    </div>

                    <div class="knowledge">
                        <?php include 'knowledge.inc.php'; ?>
                        <?php
                            echo $string, ' ', $integer, ' ', $anotherString;
                        ?> <br>
                        <?php
                            $integerSum = 15;
                            $anotherIntegerSum = 49;
                            $resultSum = $integerSum + $anotherIntegerSum;
                            echo 'Результат суммы: ', $resultSum;
                        ?> <br>
                        <?php 
                            echo $result;
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, earum impedit voluptates excepturi
                magnam error explicabo asperiores cumque, quas odit unde molestias fugiat. Aperiam voluptate nam enim!
                Itaque, provident natus?</p>
            </div>
        </footer>
    </div>
</body>

</html>