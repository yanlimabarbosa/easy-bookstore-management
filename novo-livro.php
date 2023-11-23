<form action="?page=salvar" method="POST" class="form glass">
  <h1 class="title">Cadastre um Novo Livro</h1>
  <h1 class="subtitle">Preencha os dados</h1>
  <input type="hidden" name="acao" value="cadastrar">
  <div>
    <input type="text" name="nome" placeholder="Nome" required>
  </div>
  <div>
    <input type="text" name="autor" placeholder="Autor" required
      oninvalid="setCustomValidity('Por favor, preencha este campo!')" oninput="setCustomValidity('')">
  </div>
  <div>
    <input type="date" name="data_lancamento" required oninvalid="setCustomValidity('Por favor, preencha este campo!')"
      oninput="setCustomValidity('')">
  </div>
  <div>
    <input type="number" name="qtd_estoque" placeholder="Quantidade" required
      oninvalid="setCustomValidity('Por favor, preencha este campo!')" oninput="setCustomValidity('')">
  </div>
  <div class="send-btn">
    <button type="submit">Enviar</button>
  </div>
</form>