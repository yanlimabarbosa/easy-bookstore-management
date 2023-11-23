<?php
switch ($_REQUEST["acao"]) {
  case "cadastrar":
    $nome = $_POST["nome"];
    $autor = $_POST["autor"];
    $data_lancamento = $_POST["data_lancamento"];
    $qtd_estoque = $_POST["qtd_estoque"];

    $sql = "INSERT INTO livros (nome, autor, data_lancamento, qtd_estoque) VALUES ('{$nome}', '{$autor}', '{$data_lancamento}', '{$qtd_estoque}')";
    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Cadastro com sucesso');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('Não foi possível cadastrar');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;

  case "editar":
    $nome = $_POST["nome"];
    $autor = $_POST["autor"];
    $data_lancamento = $_POST["data_lancamento"];
    $qtd_estoque = $_POST["qtd_estoque"];


    $sql = "UPDATE livros SET nome='{$nome}', autor='{$autor}', data_lancamento='{$data_lancamento}', qtd_estoque='{qtd_estoque}' WHERE id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Editado com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('Não foi possível editar!');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;

  case "excluir":
    $sql = "DELETE FROM livros WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Excluido com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('Não foi possível excluir!');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;
}