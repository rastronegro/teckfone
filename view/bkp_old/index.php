<?php include_once("header.php");?>
    <section class="btn-controlle"  ng-controller="mercadoria-controller">
        <div class="banner-logo">
            <img class="banner-img" alt="teckfone" src="_img/banner_teckfone_3.png">
        </div>
		
<div id="pesquisa" class="container drop"><!-- pesquisa para pg-->
	

	<form method="post" action="lista-de-mercadorias" class="busca-prod">
		<input type="search" class="form-control ds-input" placeholder="Pesquisar...">
		<button type="submit" id="bnt-busca"><i class="fa fa-search"></i></button>
	</form>
</div> <!--fim da  pesquisa para pg-->


       
        <div class="produtos pg-branco">
			<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
			<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
        <div class="container">
            <h1 class="chamada">Celulares - SmartPhones</h1>
            <hr>
            <div id="shop-cat-fone" class="row thumbnails text-center owl-carousel owl-theme">

                
            <div class="item anuncio-prod " ng-repeat="celular in celulares"> <!-- 1 MODIFICADO incio do anuncio doproduto-->
				<a href="produto-{{celular.id_prod}}">
                <div class="img-anuncio-prod">
                    <img class="foto-produto text-center" src="_img/produto/{{celular.prod_foto_principal}}" alt="Produto da Loja">
                </div>
                <h3>{{celular.nome_prod_longo}}</h3>
                <p class="prod_val not"><span>DE: </span>R$ {{celular.preco_real}}</p>  
                <p class="prod_val"><span>POR: </span>R$ {{celular.preco_desc}}</p>
			    </a>
            </div> <!--MODIFICADO fim do incio do anuncio doproduto-->
				   
        </div> <!--Fim do thumbnails-->

         
        </div>
        </div>
        
        <div class="produtos pg-branco">

        <button type="button" id="btn-acessorio-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-acessorio-next"><i class="fa fa-angle-right"></i></button>
			
        <div class="container">
            <h1 class="chamada">Acessorios</h1>
            <hr>
            <div id="shop-cat-smartphones" class="row acessorios text-center owl-carousel owl-theme">
            
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
               
            
        </div> <!--Fim do Acessorios-->
            

         
        </div>
        </div>

            <!--fim dos produtos-->
        
        <div class="banner-home borda-laranja">
            <img class="banner-footer" src="_img/banner-footer.png" title="novas tecnologias">
        </div>
  </section>       
<?php include_once("footer.php");?>
<script src="js/controle-carousel-owl-index.js"></script>









































