<?php include('include/header.php') ?>
<?php
		if($_SESSION['date_commande']=="")
		{	echo '<script language="javascript">';
			echo 'alert("first of all add commande")';
			echo '</script>';}
		?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.controller.php?action=dashboard&controller=admin"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
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
						<table class="table table-bordered" >
						    <thead>
						    <tr>
						        <th data-field="numCommande" data-checkbox="true" >Numéro Commande</th>
						        <th data-field="date_commande" data-sortable="true">date commande</th>
						        <th data-field="numClient"  data-sortable="true">Numéro Client</th>
								<th data-field="nomClient"  data-sortable="true">Nom Client</th>
								<th data-field="adresse_livraison" data-sortable="true">adresse de livraison</th>
								<th data-field="adresse_livraison" data-sortable="true">Action</th>
						    </tr>							
							</thead>
						
							<tr>
								<td><?php print_r($_SESSION['num_cmd']) ; ?></td>
								<td><?php print_r($_SESSION['date_commande']) ; ?></td>
								<td><?php print_r($_SESSION['id_client']) ; ?></td>
								<td><?php print_r("'cc'") ; ?></td>
								<td><?php print_r($_SESSION['adresse_livraison']) ; ?></td>								
								<td>
								<a href="index.controller.php?controller=commande&action=addDetails">Ajout Article</a>
								<a href="index.controller.php?controller=commande&action=supp">Delte</a>
								</td>
							</tr>
							
						 
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
						
		
		
	</div><!--/.main-->
<?php include('include/footer.php') ?>

