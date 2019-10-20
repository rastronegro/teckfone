<?php include_once("header.php");?>
<secion ng-controller="shop-controller"> 
	<div class="container">
<div id="pesquisa" class="mangen-buton"><!-- pesquisa para pg-->
	
	<form action="view/busca.php" method="get" class="busca-prod">
		<input name="busca" type="search" class="form-control ds-input" placeholder="procuro por..." required>
		<button type="submit" id="bnt-busca"><i class="fa fa-search"></i></button>
	</form>
</div> <!--fim da  pesquisa para pg-->
<?php if($linhas == 0){  ?>
<div class="alert alert-danger">
  <strong>"<?php echo $name ?>" Não encontrado!</strong> Sua busca não retornou resultados para exibição.
</div>
		
		
				<?php
	  };
		
		
					for ($i = 0; $i < $linhas; $i++){ 
				?>

	<div id="produto-list">
		<div class="row list-prod">
			<div class="md-col-4">
				<a href="produto-<?php print_r($data[$i]['id_prod']); ?>">
					<img class="foto" src="_img/produto/<?php print_r($data[$i]['prod_foto_principal']); ?>">
				</a>
			</div>
			
			<div class="ms-col-8 conteudo">
					
				<a href="produto-<?php print_r($data[$i]['id_prod']); ?>">
					<h3><?php print_r($data[$i]['nome_prod_curto']); ?></h3>
					<h4>R$ <?php print_r($data[$i]['preco_real']); ?>,<?php print_r($data[$i]['centavos']); ?></h4>
					<p> <?php print_r($data[$i]['parcelamento']); ?> X R$ <?php print_r($data[$i]['parcelas']); ?></p>
					</a>
					<span>
						<div class="estrelas" data-score= "<?php print_r($data[$i]['classificacao']); ?>">
						</div>
					</span>
					<p><?php print_r($data[$i]['prod_vendido']); ?> - Vendidos</p>
				
				<button type="submit" id="bnt-cesta"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Comprar</button>
			</div>	
		</div>
	</div>
		<?php 
			
			}
		
		?>
		<nav class="pagineiton" aria-label="...">
			<ul class="pagination">
				<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Anterior</a>
				</li>
				<li class="page-item active">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2<span class="sr-only">(current)</span></a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">Próxima</a>
				</li>
			</ul>
		</nav>
</div>

</secion>
<?php include_once("footer.php");?>
<script src="js/controle-busca-produtos.js"></script>