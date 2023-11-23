<?php
$sql = "SELECT * FROM livros WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST" class="form glass">
  <h1 class="title">Edite seu livro</h1>
  <h1 class="subtitle">Preencha os dados</h1>
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id ?>">
  <div>
    <label class="label-title">Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>" required
      oninvalid="setCustomValidity('Por favor, preencha este campo!')" oninput="setCustomValidity('')">
  </div>
  <div>
    <label class="label-title">Autor</label>
    <input type="text" name="autor" value="<?php print $row->autor; ?>" required
      oninvalid="setCustomValidity('Por favor, preencha este campo!')" oninput="setCustomValidity('')">
  </div>
  <div>
    <label class="label-title">Data de Lançamento</label>
    <input type="date" name="data_lancamento" value="<?php print $row->data_lancamento; ?>" required
      oninvalid="setCustomValidity('Por favor, preencha este campo!')" oninput="setCustomValidity('')">
  </div>
  <div>
    <label class="label-title">Quantidade em Estoque</label>
    <input type="number" name="qtd_estoque" value="<?php print $row->qtd_estoque; ?>" required
      oninvalid="setCustomValidity('Por favor, preencha este campo!')" oninput="setCustomValidity('')">
  </div>
  <div class="send-btn">
    <button type="submit">Enviar</button>
  </div>
</form>

<script>
  function setCustomValidity(message) {
    this.setCustomValidity(message);
  }
</script>