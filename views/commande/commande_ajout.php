<?php include('header.php') ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajout Commande</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
							
								<div class="form-group">
									<label>Numéro Commande:</label>
									<input class="form-control" placeholder="Placeholder">
								</div>
																
								<div class="form-group">
									<label>Date de Commande:</label>
									<input class="form-control" type="date"  placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Numero du client:</label>
									<input class="form-control"   placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Nom du client:</label>
									<input class="form-control"   placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Adresse livraison:</label>
									<input class="form-control"  placeholder="Placeholder">
								</div>
																
							
																
							</div>
							<div class="col-md-6">
							
								<div class="form-group">
									<label>Numero d'article:</label>
									<input class="form-control"  type="number" placeholder="Placeholder">
								</div>
								
							<div class="form-group">
									<label>Quantité commandée:</label>
									<input class="form-control"   type="number"   placeholder="Placeholder">
								</div>
								
								
								
								
								<button  type="submit" class="btn btn-primary">Submit Button</button>
								<button  type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
<?php include('footer.php') ?>