<?php include('include/header.php') ?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="../index/index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liste des personnes</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered"    data-sort-name="name" data-sort-order="desc">
						    <thead>
								
								 <tr>
								   <th>Numéro</th>
								   <th>Numero Téléphone</th>
								   <th>Adresse</th>
								   <th>Matricule</th>
								   <th>Nom</th>
								   <th>Prénom</th>
								 </tr>					
							</thead>
							<?php foreach ($res as $client) {
							if($client->type_id=="0"){  ?>
							<tr>
							<td><?php echo $client->id; ?></td>
							<td><?php echo $client->num_tel; ?></td>
							<td><?php echo $client->adr_client; ?></td>
							<td><?php echo $client->mat_client; ?></td>
							<td><?php echo $client->nom_client; ?></td>
							<td><?php echo $client->prenom_client; ?></td>
						
							<td>
							<a href="index.controller.php?controller=client&action=showEdit&id=<?php echo $client->id; ?>">Edit</a>
							<a href="index.controller.php?controller=client&action=suppPhysique&id=<?php echo $client->id; ?>"> delete</a>
							</td>
							</tr>					
								<?php }}?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	


						
		
		
	</div><!--/.main-->


<?php include('include/footer.php') ?>