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
				<h1 class="page-header">Ajout Article</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
							
								<div class="form-group">
									<label>Numéro Article:</label>
									<input class="form-control" placeholder="Placeholder">
								</div>
																
								<div class="form-group">
									<label>Libéllé Article</label>
									<input class="form-control" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Quantité</label>
									<input class="form-control"  type="number" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Prix_Hors_Taxe</label>
									<input class="form-control"  type="number" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>TVA Article</label>
									<input class="form-control"  type="number"placeholder="Placeholder">
								</div>
																
							
								
								
								<!--<label>Validation</label>
								<div class="form-group has-success">
									<input class="form-control" placeholder="Success">
								</div>
								<div class="form-group has-warning">
									<input class="form-control" placeholder="Warning">
								</div>
								<div class="form-group has-error">
									<input class="form-control" placeholder="Error">
								</div>-->
								
							</div>
							<div class="col-md-6">
							
								<div class="form-group">
									<label>photo de l'article</label>
									<input type="file">
									 <p class="help-block">Choisir un fichier .png,.jpeg,.gif....</p>
								</div>
								
							
							<div class="form-group">
									<label>Description de l'article: </label>
									<textarea class="form-control" rows="3"></textarea>
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