<?php session_start();

 if ($_SESSION['auth'] == true) //если переменная тру, выполняется код
    {
        $words = [
        'ru' => ['zag' => "Главное меню", 'priv' => "Вас приветствует этот сайт!", 'but1' => "Изменить", 'but2' => "Выйти", 'but3' => ""],
        'en' => ['zag' => "Main menu", 'priv' => "This site welcomes you!", 'but1' => "Change", 'but2' => "Logout", 'but3' => ""],
        'ua' => ['zag' => "Головне меню", 'priv' => "Вас вітає цей сайт!", 'but1' => "Змінити", 'but2' => "Вийти", 'but3' => ""],
        'it' => ['zag' => "Menu principale", 'priv' => "Questo sito ti dà il benvenuto!", 'but1' => "Emendare", 'but2' => "Disconnettersi", 'but3' => ""],
        ];
        if (empty($_POST['lang'])) {
        } else {
        $_SESSION['lang'] = $_POST['lang'];
        }
        function trans($lang, $words)
        {
        return $words[$_SESSION['lang']][$lang];
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab2-Hello</title>

</head>
<body class="GOOD">
<br>
<div class="left">
    <table>

				<form class="form" method="post" action="welcome.php">
                    <select name="lang" class="dropdown">
                        <?php foreach ($words as $lang => $type) { ?>
                            <option value="<?php echo $lang ?>" <? if ($lang == $_SESSION['lang']) {
                                echo 'selected';
                            } ?>><?php echo $lang ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button class="button"
                        type="submit"><?php echo trans('but1', $words); ?></button>
            </form>
        </td>
        <td>
            <form class="form" action="logout.php">
                <button class="button"
                        type="submit"><?php echo trans('but2', $words); ?></button>
            </form>
        </td>
    </table>
</div>
<div class="auth">
    <h2 class="header">

    </h2>

    <div class="tug">
        <h1 class="=header">
            <?php echo $_SESSION['login']; ?>
            <br>
            <?php
            echo trans('priv', $words);
            ?></h1>
        <br>
    </div>

</body>
</html>
<?php
    }
 else {
     header("Location: index.php"); exit; //если фолсе то возращаемся в индекс
}