<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Livos e pessoas</title>
</head>
<body>
    <?php
    
    require_once "./classes/Livro.php";
    
    $pessoa[0] = new Pessoa("Joaquina", 56, "Ela/dela");
    $livros[0] = new Livro("Alice no País das Maravilhas", "Lewis Carroll", 112, $pessoa[0]);
    $livros[0]->detalhes();

    $livros[1] = new Livro("A menina que roubava livros", "Markus Zusak",480);
    $livros[1]->detalhes();

    $pessoa[1] = new Pessoa("Julio", 22, "Eles/deles");
    $pessoa[1]->fazerAniversario();

    $livros[1]->folhear(45);
    $livros[1]->avancarPag();
    $livros[1]->folhear(480);
    $livros[1]->folhear(481);
    $livros[1]->avancarPag();

    $livros[1]->abrir();
    $livros[0]->fechar();

    echo "<pre>";
    print_r($livros[0]);
    print_r($livros[1]);
    echo "</pre>";

    ?>
    
</body>
</html>