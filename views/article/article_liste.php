
<?php include('include/header.php') ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.controller.php?action=dashboard&controller=admin"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liste article</h1>
			</div>
		</div><!--/.row-->
				
<form action="article.controller.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered" data-toggle="tablee"   data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="num" data-checkbox="true" >Numéro</th>
						        <th data-field="lib" data-sortable="true">Libellé</th>
						        <th data-field="pHT"  data-sortable="true">Prix vente HT</th>
								<th data-field="TVA"  data-sortable="true">TVA</th>
								<th data-field="tRemise" data-sortable="true">Taux de remise</th>
						        <th data-field="qte" data-sortable="true">Quantité</th>
								<th data-field="description" data-sortable="true">description</th>
								<th data-field="action" data-sortable="true">Action</th>
						    </tr>							
							</thead>
	
							<?php  
							//var_dump($res);
							foreach($res as $article){
							?>		
							<tr>
							<td><?php echo $article->num_article; ?></td>
							<td> <?php echo $article->lib_article; ?></td>
							<td><?php echo $article->prix_HT; ?></td>
							<td><?php echo $article->TVA; ?></td>
							<td><?php echo "2%"; ?></td>
							<td><?php echo $article->qte_article; ?></td>
							<td><?php echo $article->description_article; ?></td>
							<td>
							<a href="index.controller.php?controller=article&action=showEdit&id=<?php echo $article->id; ?>">Modifier</a>
							<a href="index.controller.php?controller=article&action=supp&id=<?php echo $article->id; ?>">Supprimer</a>
							</td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
							</form>
		
		
	</div><!--/.main-->
	<?php include('include/footer.php') ?>

