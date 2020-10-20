<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$title;?></title>
    <link rel="stylesheet" href="<?=base_url()?>/Semantic-UI/semantic.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>/Semantic-UI/semantic.min.js"></script>
</head>
<body>
<section class="ui container" style="display: flex; justify-content: center; align-items: center; position: fixed; width: 100%;
height: 100%; background-color: #0778ff;">
    <div class="boxLogin" style="width:30%;padding: 1em 1em; background-color: white; border-radius: 3px">
        <h2 class="ui center aligned"style="text-align: center">Fazer login</h2>

        <form class="ui form" method="post" action="<?=base_url()?>/">
           <?=session()->getFlashdata('msg')?>
            <div class="field">
                <label>E-mail</label>
                <input type="text" name="user_email">
            </div>
            <div class="field">
                <label>Senha</label>
                <input type="password" name="user_pass">
            </div>
            <input type="submit" name="sendLogin" value="Entrar" class="ui primary button fluid">
        </form>
    </div>

</section>
</body>
</html>