<?php include_once("header.php");?>
   <section ng-controller="mercadoria-controller">
    
      
        <div id="descricao-produto" >
        <div class="container">
            <a href="shop">
                <i class="fa fa-reply" aria-hidden="true"></i>
                voltar à lisa
            </a>
            <div class="row">
                <div class="col-md-7">
                    <div class="imagem-produto-p text-center">
						<ul>
							<?php 
								for ($i = 0; $i < $linha; $i++){ 
									if($i == 0){
										$class = "efeito";
									}else{
										$class = "";
									};
							
							?>
							<li class="<?php echo $class; ?>">
								<a href="#">
								<img src="_img/produto/<?php print_r($imagen[$i]['id_caminho']); ?>" data-produto="<?php print_r($imagen[$i]['id_caminho']); ?>">
								</a>
							</li>
							<?php
									
								};
							?>
						</ul>
                    </div>
                    <div class="imagem-produto-g text-center">
                        
                            <img class="img-produto" src="_img/produto/<?php echo $imagen[0][0]; ?>">
                    </div>   
                </div>
            

                <div class="col-md-5">
    <div class="descricao-produt">
                                 
<div class="estrelas" data-score= "<?=$produto['classificacao']?>"> 
	 
	 </div>
	
<p><?=$produto['prod_vendido']?> - vendidos</p>
     
		
		
		
<h3><?=$produto['nome_prod_longo']?></h3>


<h6>R$ <?=$produto['preco_real']?></h6>

<h3>R$ <?=$produto['preco_desc']?> <span>20% OFF</span></h3>

<h5><?=$produto['parcelas'];?> x R$ <?=$produto['parcela'] ?> sem juros</h5>

  

<h4>Mais informações:</h4>
        
	

<div class="form-group">
	<label for="select-cor">Cor:</label>
	<select class="form-control" id="select-cor">
		<option>Preto</option>
		<option>Azul</option>
	</select>
</div> 

<p>
Saiba os prazos de entrega e as formas de envio

Calcular o prazo de entrega

Devolução grátis

Você tem 30 dias a partir do recebimento

Saiba mais
Selecionador de variações


 Quantidade: 1 unidade  (105 disponíveis)
 
Compra Garantida, receba o produto que está esperando ou devolvemos o dinheiro.
Você ganha 106 Mercado Pontos.
</p>
                    
		</div>                 

		</div>

		</div>

		</div>
	</div>
	   
	   
<div class="produtos pg-branco">
	
	<button type="button" id="btn-acessorios-prev" class="btn-owl-prev"><i class="fa fa-angle-left"></i></button>
	<button type="button" id="btn-acessorios-next" class="btn-owl-next"><i class="fa fa-angle-right"></i></button>
	
        <div class="container">
            <h1 class="chamada">Produtos Semelhantes</h1>
            <hr>
            <div id="shop-cat-acessorios" class="row thumbnails text-center owl-carousel owl-theme">

                
            <div class="item anuncio-prod " ng-repeat="produto in acessorios"> <!-- 1 MODIFICADO incio do anuncio doproduto-->
				<a href="produto-{{produto.id_prod}}">
                <div class="img-anuncio-prod">
                    <img class="foto-produto text-center" src="_img/produto/{{produto.prod_foto_principal}}" alt="Produto da Loja">
                </div>
                <h3>{{produto.nome_prod_longo}}</h3>
                <p class="prod_val not"><span>DE: </span>R$ {{produto.preco_real}}</p>  
                <p class="prod_val"><span>POR: </span>R$ {{produto.preco_desc}}</p>
			    </a>
            </div> <!--MODIFICADO fim do incio do anuncio doproduto-->
				   
        </div> <!--Fim do thumbnails-->

         
        </div>
        </div>
	   
	   
  </section> 
<?php include_once("footer.php");?>

<script src="js/controle-carousel-owl-vitrine.js"></script>
