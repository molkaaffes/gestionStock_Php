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
				<div class="panel panel-default">
				<div class="panel-heading">Ajout d'une société</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form"  method="post" action="index.controller.php?action=afficheForm&controller=client" controller="client" enctype="multipart/form-data">
							
								<div class="form-group">
									<label>Nom Société:</label>
									<input class="form-control" name="nom_societe" placeholder="Placeholder">
								</div>
																
								<div class="form-group">
									<label>Matricule fiscale:</label>
									<input class="form-control" name="mat_fiscale"  placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Numero de téléphone:</label>
									<input class="form-control" name="num_tel"   placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Adresse:</label>
									<input class="form-control" name="adr_client" placeholder="Placeholder">
								</div>

                                <button  type="submit" class="btn btn-primary" value="Submit Button">Submit Button</button>
								<button  type="reset" class="btn btn-default">Reset Button</button>		

                                <div class="form-group" style=" visibility:hidden">
									<label>Nom :</label>
									<input class="form-control" name="nom_client" placeholder="Placeholder">
								</div>

								<div class="form-group"  style=" visibility:hidden">
									<label>Prénom :</label>
									<input class="form-control" name="prenom_client" placeholder="Placeholder">
								</div>			
																
								<div class="form-group"  style=" visibility:hidden">
									<label>Matricule :</label>
									<input class="form-control"  name="mat_client" placeholder="Placeholder">
								</div>

                              																						
								
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->


        </div><!--/.main-->
	<?php include('include/footer.php') ?>