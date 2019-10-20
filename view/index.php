<?php include_once("header.php");?>
<section ng-controller="mercadoria-controller">
<div class="banner-logo">
	<img class="banner-img" alt="teckfone" src="_img/banner_teckfone_3.png">
</div>
		
<div id="pesquisa" class="container drop"><!-- pesquisa para pg-->
	
	<form action="view/busca.php" method="get" class="busca-prod">
		<input name="busca" type="search" class="form-control ds-input" placeholder="procuro por..." required>
		<button type="submit" id="bnt-busca"><i class="fa fa-search"></i></button>
	</form>
</div> <!--fim da  pesquisa para pg-->


<div class="produtos pg-branco">
<button type="button" id="btn-celular-prev" class="btn-owl-prev"><i class="fa fa-angle-left"></i></button>
<button type="button" id="btn-celular-next" class="btn-owl-next"><i class="fa fa-angle-right"></i></button>
	<div class="container">
	<h1 class="chamada">Celulares - SmartPhones</h1>
	<hr>
		<div id="shop-cat-celular" class="row thumbnails text-center owl-carousel owl-theme">
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
<button type="button" id="btn-carregadores-prev" class="btn-owl-prev"><i class="fa fa-angle-left"></i></button>
<button type="button" id="btn-carregadores-next" class="btn-owl-next"><i class="fa fa-angle-right"></i></button>
	<div class="container">
	<h1 class="chamada">Carregadores - Cabos</h1>
	<hr>
		<div id="shop-cat-carregadores" class="row acessorios text-center owl-carousel owl-theme">
			<div class="item anuncio-prod " ng-repeat="fontes in carregadores"> <!-- 1 MODIFICADO incio do anuncio doproduto-->
				<a href="produto-{{fontes.id_prod}}">
					<div class="img-anuncio-prod">
						<img class="foto-produto text-center" src="_img/produto/{{fontes.prod_foto_principal}}" alt="Produto da Loja">
					</div>
				<h3>{{fontes.nome_prod_longo}}</h3>
				<p class="prod_val not"><span>DE: </span>R$ {{fontes.preco_real}}</p>  
				<p class="prod_val"><span>POR: </span>R$ {{fontes.preco_desc}}</p>
				</a>
			</div> <!--MODIFICADO fim do incio do anuncio doproduto-->
		</div> <!--Fim do Acessorios-->
	</div>
</div>



<div class="produtos pg-branco">
<button type="button" id="btn-acessorios-prev" class="btn-owl-prev"><i class="fa fa-angle-left"></i></button>
<button type="button" id="btn-acessorios-next" class="btn-owl-next"><i class="fa fa-angle-right"></i></button>
	<div class="container">
	<h1 class="chamada">Acessorios</h1>
	<hr>
		<div id="shop-cat-acessorios" class="row acessorios text-center owl-carousel owl-theme">
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
	       
<div class="banner-home borda-laranja">
	<img class="banner-footer" src="_img/banner-footer.png" title="novas tecnologias">
</div>
  </section>       
<?php include_once("footer.php");?>
<script src="js/controle-carousel-owl-shop.js"></script>