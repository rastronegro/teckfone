<?php include_once("header.php");?>
   <section class="venda-produto">
    
      
        <div id="descricao-produto" class="pg-branco">
        <div class="container">
            <a href="shop">
                <i class="fa fa-reply" aria-hidden="true"></i>
                voltar à lisa
            </a>
            <div class="row">
                <div class="col-md-7">
                    <div class="imagem-produto-p text-center">
                            <ul>
                                <li class="efeito"><a href="#"><img src="_img/<?=produto['foto_principal']?>" data-produto="red-fone-gato"></a>
                                </li>
                                <li><a href="#"><img src="_img/<?=produto['foto_principal']?>" data-produto="capinhas-color"></a>
                                </li>
                                <li><a href="#"><img src="_img/<?=produto['foto_principal']?>" data-produto="headset-gamer-hyperx"></a>
                                </li>
                                <li><a href="#"><img src="_img/<?=produto['foto_principal']?>" data-produto="Relogio-band"></a>
                                </li>
                                <li><a href="#"><img src="_img/<?=produto['foto_principal']?>" data-produto="Fone-blutoof"></a>
                                </li>
                            </ul>
                    </div>
                    <div class="imagem-produto-g text-center">
                        
                            <img class="img-produto" src="_img/<?=produto['foto_principal']?>">
                    </div>   
                </div>
            

                <div class="col-md-5">
    <div class="descricao-produt">
                    
                    
<div class="estrelas" data-score="<?=produto['prod_avalidaite']?>"></div>
<p><?=produto['prod_vendido']?> vendidos</p>
        
<h3><?=produto['nome_prod_curto']?></h3>


<h6>R$ <?=produto['preco_real']?></h6>

<h3>R$ <?=produto['preco_desc']?> <span>20% OFF</span></h3>

<h5>12x R$ 26,66 sem juros</h5>

  

<h4>Mais informações:</h4>
        

<p>
<? =produto['nome_prod_longo']?> 
</p>  

<p>
Saiba os prazos de entrega e as formas de envio

Calcular o prazo de entrega

Devolução grátis

Você tem 30 dias a partir do recebimento

Saiba mais
Selecionador de variações
Cor: Preto


 Quantidade: 1 unidade  (105 disponíveis)
 
Compra Garantida, receba o produto que está esperando ou devolvemos o dinheiro.
Você ganha 106 Mercado Pontos.
</p>
                    
   </div>                 
                
                </div>
                
                
                
            </div>
            
            
            </div>
        </div>
	   
      
<div class="produtos pg-branco" ng-controller="mercadoria-controller">
        <div class="container">
            <h1 class="chamada">Produtos Semelhantes</h1>
            <hr>
            <div id="shopping" class="row thumbnails text-center owl-carousel owl-theme">

                
            <div class="item anuncio-prod " ng-repeat="produto in produtos"> <!-- 1 MODIFICADO incio do anuncio doproduto-->
				<a href="templayt?cod={{produto.codigo}}">
                <div class="img-anuncio-prod">
                    <img class="foto-produto text-center" src="_img/{{produto.foto_principal}}" alt="Produto da Loja">
                </div>
                <h3>{{produto.nome_prod_longo}}</h3>
                <p class="prod_val not"><span>DE: </span>R$ {{produto.preco_real}}</p>  
                <p class="prod_val"><span>POR: </span>R$ {{produto.preco_desc}}</p>
			    </a>
            </div> <!--MODIFICADO fim do incio do anuncio doproduto-->

           <div class="item anuncio-prod "> <!-- 2 MODIFICADO incio do anuncio doproduto-->
               <a href="templayt">
                    <div class="img-anuncio-prod text-center">
                        <img id="centro" class="foto-produto" src="_img/headfone.jpg" alt="Fone">
                    </div>
                    <h3>Headphone gamer preto c\ fio </h3>
                    <p class="prod_val not"><span>DE: </span>R$ 120,00</p>  
                    <p class="prod_val"><span>POR: </span>R$ 80,00</p>
                </a>
            </div> <!--MODIFICADO fim do incio do anuncio doproduto-->
                
                
    
				   
        </div> <!--Fim do thumbnails-->
        <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
         
        </div>
        </div>
	   
	   
  </section> 
<?php include_once("footer.php");?>