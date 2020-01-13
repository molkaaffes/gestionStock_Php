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
				<h1 class="page-header">Ajout Article</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<?php // echo Sessions::get('msg') ;?>
							<form role="form" action="index.controller.php?action=add&controller=article" method="post"  controller="article" enctype="multipart/form-data">
								<div class="form-group">
									<label>Numéro Article:</label>
									<input name="num_article" class="form-control" placeholder="Placeholder">
								</div>
																
								<div class="form-group">
									<label>Libéllé Article</label>
									<input  name="lib_article" class="form-control" placeholder="Placeholder">
								</div>
	
								<div class="form-group">
									<label>Quantité</label>
									<input name="qte_article" class="form-control"  type="number" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Prix_Hors_Taxe</label>
									<input name="prix_HT" class="form-control"  type="number" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>TVA Article</label>
									<input  name="TVA" class="form-control"  type="number"placeholder="Placeholder">
								</div>
	
							</div>
							<div class="col-md-6">
							
								<div class="form-group">
									<label>photo de l'article</label>
									<input name="photo_article" type="file">
									 <p class="help-block">Choisir un fichier .png,.jpg,.gif</p>
								</div>
								
							
							<div class="form-group">
									<label>Description de l'article: </label>
									<textarea name="description_article" class="form-control" rows="3"></textarea>
								</div>
								
								
								
								
								<input  type="submit" class="btn btn-primary" value="Submit Button"/>
								<button  type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

<?php include('include/footer.php') ?>
