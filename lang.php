<?php session_start();
if ($_SESSION['auth'] == true) //если переменная тру, выполняется код
    {

        $lang = [
            'ru' => "Русский",
            'en' => "English",
            'ua' => "Ukrainian",
            'it' => "Italiano",
        ];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab2-Welcome</title>
</head>
<body>
<div class="auth">
    <h2>
        Выбор языка
    </h2>

    <div class="gut">
        <h1 class="header">
            <?php echo $_SESSION['login']; ?>
            <br>
            This site welcomes you!<br><br>
            <form class="form" method="post" action="welcome.php">
                <div class="field">
                    <label>
                        <h2 class="header">Choose your language</h2>
                    </label>
                    <select name="lang" class="dropdown">
                        <?php foreach ($lang as $l => $type) { ?>
                            <option value="<?php echo $l ?>"><?php echo $type ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button class="button" type="submit">Change</button>
            </form>
        </h1>
    </div>
</div>
</body>
</html>
<?php
    }
 else {
     header("Location: index.php"); exit; //если фолсе то возращаемся в индекс
        }
?>