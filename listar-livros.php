<?php
$sql = "SELECT * FROM livros";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
  print "<table class='content-table'>";
  print "<tr>";
  print "<th> Id </th>";
  print "<th> Nome </th>";
  print "<th> Autor </th>";
  print "<th> Data de Lançamento </th>";
  print "<th> Estoque </th>";
  print "<th> Ações </th>";
  print "</tr>";
  while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>" . $row->id . "</td>";
    print "<td>" . $row->nome . "</td>";
    print "<td>" . $row->autor . "</td>";
    print "<td>" . $row->data_lancamento . "</td>";
    print "<td>" . $row->qtd_estoque . "</td>";
    print "<td class='acoes'>
            <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\">Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\">Excluir</button>
          </td>";
    print "</tr>";
  }
  print "</table>";

} else {
  print "<p class='title'>Ainda não há livros a serem listados!</p>";
}

?>