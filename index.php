<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Livro</title>
  </head>

  <body>
    <nav>
      <div class="logo"><a href="#">Gerenciamento Fácil</a> </div>
      <ul>
        <li>
          <a aria-current="page" href="index.php">Início</a>
        </li>
        <li>
          <a href="?page=novo">Novo Livro</a>
        </li>
        <li>
          <a href="?page=listar">Todos os Livros</a>
        </li>
      </ul>


    </nav>

    <div>
      <div>
        <div>
          <?php
          include("config.php");
          switch (@$_REQUEST["page"]) {
            case "novo":
              include("novo-livro.php");
              break;
            case "listar":
              include("listar-livros.php");
              break;
            case "salvar":
              include("salvar-livro.php");
              break;
            case "editar":
              include("editar-livro.php");
              break;
            default:
              include("inicio.php");
          }
          ?>
        </div>
      </div>
    </div>
  </body>

</html>