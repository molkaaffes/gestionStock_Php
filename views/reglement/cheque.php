<?php include('include/header.php') ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.controller.php?action=dashboard&controller=admin"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		

<div >
	<!--	<input type="submit" name="Ajouter_cheque" value="Ajouter cheque" id="Ajouter_cheque">
		<input type="submit" name="Ajouter_traite" value="Ajouter traite" id="Ajouter_traite">-->
	</div>
<form role="form" action="index.controller.php?action=add&controller=reglement" method="post"  controller="reglement" enctype="multipart/form-data">
	<div >
		<div>
			<h3>Liste des bordereaux chéques</h3>

				<table  style="margin:50px;margin-top:0px">
					<th>Num cheque</th><th>Banque client</th><th>client</th><th>Montant</th><th>date echeance</th>
				
				<?php  
				foreach($res as $cheque){
					
				
			?>					
						<tr>
					
							<td> <?php echo $cheque->num_cheq; ?></td>
							<td> <?php echo $cheque->nom_banque; ?></td>
							<td> <?php echo $cheque->nom_client; ?></td>
							<td> <?php echo $cheque->montant; ?></td>
							<td> <?php echo $cheque->date_echeance ; ?></td>
							<td>
							<!-- <a href="index.controller.php?controller=reglement&action=Edit&id=<?php echo $cheque->id; ?>">Edit</a> -->
							<a href="index.controller.php?controller=reglement&action=supp&id=<?php echo $cheque->id; ?>"> delete</a>
							</td>
							
						</tr>
			<?php } ?>
			
						 <tr>
							 <td><input type="text" class="form-control" name="num_cheq" /></td>
							 <td><input type="text" class="form-control" name="nom_banque" /></td>
							 <td><input type="text" class="form-control" name="nom_client" /></td>
							 <td><input type="text" class="form-control" name="montant" /></td>
							 <td><input type="date" class="form-control" name="date_echeance" /></td>
							 
				<?php  
				
				
				
			?>		
							 <td><input  type="submit" class="btn btn-primary" value="Ajouter"/></td>

						</tr>

				</table>
		</div>
	</div>
</form>

<?php include('include/footer.php') ?>