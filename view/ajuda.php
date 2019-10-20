<?php include_once("header.php");?>
  <section>
    <div class="container">
        <h1 class="chamada">Ajuda e Suporte</h1>
        <hr>
        <div class="row">
 <div class="col-md-6">           
<form>

  <div class="form-group">
    <label for="Nome">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
  </div>
        <div class="form-group">
    <label for="enderecoNumero">Cidade</label>
    <input type="text" class="form-control" id="enderecoNumero" placeholder="Sua Cidade - UF">
  </div>
        <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" placeholder="Seu Bairro">
  </div>
 <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" id="endereco" placeholder="Seu Endereço">
  </div>
</form>   
</div>
<div class="col-md-6">
    <form>
     <div class="form-group">
    <label for="enderecoNumero">Numero</label>
    <input type="text" class="form-control" id="enderecoNumero" placeholder="Numero da Residencia ou AP">
  </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
        <small id="emailHelp" class="form-text text-muted">Não se Preocupe Nunca iremos compartilhar seu email, com ninguém.</small>
    </div>
    
      <div class="form-group">
    <label for="duvida">Deixe aqui sua Duvida</label>
    <textarea class="form-control" id="duvida" rows="3"></textarea>
  </div>
    
      <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Quero o contato via <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>

    </form>  
  </div>              
        </div>
      </div>      
    
  </section>  
<?php include_once("footer.php");?>