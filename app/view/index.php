<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?php echo STYLESHEET.'style.css'; ?>">
    </head>
    <body>
        <form action="" method="POST">
            <header>
                <h1>EDITOR MAP JSON</h1>
            </header>

            <?php foreach($dados['map'] as $key => $value): ?>
                <section class="standard">
                    <h1><?= $key; ?></h1>
                    <?php foreach($dados['map'][$key] as $chave => $valor): ?>
                        <div class="sub">
                            <h2><?= $chave ?></h2>
                            <div class="inputs">
                                <?php foreach($dados['map'][$key][$chave] as $chave_dois => $valor_dois): ?>
                                    <div class="line">
                                        <label><?= $chave_dois; ?>:</label>
                                        <input type="text" name="<?= $chave_dois; ?>" required value="<?= $valor_dois; ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>        
            <?php endforeach; ?>

            <input type="submit" value="ENVIAR DADOS">
        </form>
    </body>
</html>