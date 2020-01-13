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
				<h1 class="page-header">Ajout d'un client</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form"  method="post"  controller="client"  enctype="multipart/form-data" id="form1">
							
							<div class="form-group">
									<label>Choisir le type du client: </label>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="0" checked>Société
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="1">Personne Physique
										</label>
									</div>
								</div>					
								<button  type="submit" class="btn btn-primary" value="Submit Button">Suivant</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

<script>
var form = document.querySelector("#form1");


form.addEventListener("submit", function(event) {
  var data = new FormData(form);
  var output = "";
  for (const entry of data) {
    output = entry[0] + "=" + entry[1] + "\r";
	if(entry[1]=='0')
	{
		window.location.href ="index.controller.php?action=ajoutSociete&controller=client"
	}
	else {
		window.location.href ="index.controller.php?action=ajoutPhysique&controller=client"
	}
  };
  
  event.preventDefault();
}, false);


</script>
		
	</div><!--/.main-->
	<?php include('include/footer.php') ?>