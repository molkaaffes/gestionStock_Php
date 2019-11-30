<?php include('include/header.php') ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liste des Commandes</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered" data-toggle="table"   data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="numCommande" data-checkbox="true" >Numéro Commande</th>
						        <th data-field="date_commande" data-sortable="true">date commande</th>
						        <th data-field="numClient"  data-sortable="true">Numéro Client</th>
								<th data-field="nomClient"  data-sortable="true">Nom Client</th>
								<th data-field="adresse_livraison" data-sortable="true">adresse de livraison</th>
								<th data-field="numArticle" data-sortable="true">Numéro article</th>
						        <th data-field="qte" data-sortable="true">Quantité commandé</th>
						    </tr>							
							</thead>
							<?php foreach ($res as $commande) { ?>
							<tr>
							<td><?php echo $commande->id; ?></td>
							<td><?php echo $commande->date_commande; ?></td>
							<td>Cli002</td>
							<td>Jamil</td>
							<td><?php echo $commande->adresse_livraison; ?></td>
							<td>Art001</td>
							<td>6</td>
							<td><input type="button" name="modifier" value="modifier" onclick="window.location.href='controller.php?action=edit1&id=<?php echo $commande->id; ?>'"></td>
							</tr>
								<?php }?>
						 
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
						
		
		
	</div><!--/.main-->
<?php include('include/footer.php') ?>

