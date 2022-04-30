<?php
    require 'header.php';
?>

    <div class="inicio">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Contato</h1>
         </div>
    </div>

    <form action="destino.php" method="POST">

  <div class="form-group">
    <div class="form-group col-md-6">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Fulano de Tal">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>

    <div class="form-group col-md-6">
      <label for="inputMensagem">Mensagem</label>
      <input type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem...">
    </div>
  </div>
  
  <hr>
  <button type="submit" class="btn btn-primary">Salvar</button>
  </div>

</form>

<?php
    require 'footer.php';
?>