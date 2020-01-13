<?php include('include/header.php') ?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.controller.php?action=dashboard&controller=admin"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajout d'une Commande</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post"  controller="commande" enctype="multipart/form-data">
							
								<div class="form-group">
									<label>Numéro  commande:</label>
									<input class="form-control" name="id_commande" placeholder="Placeholder" required>
								</div>	
																								
								<div class="form-group">
									<label>Numero du client:</label>
									<input class="form-control" name="id_client"  placeholder="Placeholder" required>
								</div>
																
								<div class="form-group">
									<label>Adresse livraison:</label>
									<input class="form-control" name="adresse_livraison" placeholder="Placeholder" required>
								</div>
																
							<button style="float:left;margin-top:2vw" type="reset" class="btn btn-default">Réinitialiser</button>
								<!--	<a class="btn btn-success" href="index.controller.php?controller=commande&action=verif" style="margin-top:2vw;" role="button">Vérifier</a>-->
								<button style="float:right;margin-top:2vw" type="submit" class="btn btn-primary" value="Submit Button">Valider</button>							
							</div>
							<div class="col-md-6">
							
								<div class="form-group">
									<label>Taux de remises accordé:</label>
									<input class="form-control" name="taux_remise_accorde"  required placeholder="Placeholder">
								</div>

								<div class="form-group">
									<label>Date de Commande:</label>
									<input class="form-control" type="date" name="date_commande" required placeholder="Placeholder">
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	<?php include('include/footer.php') ?>