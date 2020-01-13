<?php include('include/header.php') ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post"  controller="detailsCommande" enctype="multipart/form-data">
							
								<div class="form-group">
                                    <label>Article:</label>
                                    <select name='article' class='form-control select2-single'>
                                        <?php foreach ($articles as $article){ ?>
                                    <option value='<?php echo $article->id;?>'> <?php echo $article->lib_article ; ?> </option>
                                    <?php ?>
                                    <option></option>
                                        <?php } ;?>
                                    </select>

								</div>	
										
							<button style="float:left;margin-top:2vw" type="reset" class="btn btn-default">Réinitialiser</button>
								<!--	<a class="btn btn-success" href="index.controller.php?controller=commande&action=verif" style="margin-top:2vw;" role="button">Vérifier</a>-->
								<button style="float:right;margin-top:2vw" type="submit" class="btn btn-primary" value="Submit Button">Valider</button>							
							</div>
							<div class="col-md-6">
							
															
                            <div class="form-group">
									<label>quantité commander:</label>
									<input type="number" class="form-control" name="quantite_cmd" placeholder="Placeholder">
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	<?php include('include/footer.php') ?>