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
				<h1 class="page-header">modifier Client</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<?php 
							if($res->type_id=="0"){ ?>
                                <form role="form" action="index.controller.php?action=edit&controller=client&id=<?php echo $res->id; ?>" method="post"  controller="client" enctype="multipart/form-data">
																								
								<div class="form-group">
									<label>Nom</label>
									<input value="<?php echo $res->nom_client; ?>" name="nom_client" class="form-control" placeholder="Placeholder">
								</div>
	
								<div class="form-group">
									<label>Prénom</label>
									<input value="<?php echo $res->prenom_client; ?>" name="prenom_client" class="form-control"  placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Matricule client</label>
									<input value="<?php echo $res->mat_client; ?>" name="mat_client" class="form-control"  type="number" placeholder="Placeholder">
								</div>
	
								<div class="form-group">
									<label>Numéro client</label>
									<input value="<?php echo $res->num_tel; ?>" name="num_tel" class="form-control"  type="number" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Adresse client</label>
									<input value="<?php echo $res->adr_client; ?>" name="adr_client" class="form-control" placeholder="Placeholder">
								</div>
							<div>
								<input  type="submit" class="btn btn-primary" value="Update"/>
								<button  type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
						<?php }else if($res->type_id=="1") {?>
						       <form role="form" action="index.controller.php?action=edit&controller=client&id=<?php echo $res->id; ?>" method="post"  controller="client" enctype="multipart/form-data">
																								
								<div class="form-group">
									<label>Nom Société</label>
									<input value="<?php echo $res->nom_client; ?>" name="nom_client" class="form-control" placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>matricule fiscale</label>
									<input value="<?php echo $res->mat_fiscale; ?>" name="mat_fiscale" class="form-control" placeholder="Placeholder">
								</div>
	
								<div class="form-group">
									<label>Numéro Société</label>
									<input value="<?php echo $res->num_tel; ?>" name="num_tel" class="form-control"  placeholder="Placeholder">
								</div>
								
								<div class="form-group">
									<label>Adresse Société</label>
									<input value="<?php echo $res->adr_client; ?>" name="adr_client" class="form-control" placeholder="Placeholder">
								</div>
						

							<div>
								<input  type="submit" class="btn btn-primary" value="Update"/>
								<button  type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
						<?php }?>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->


<?php include('include/footer.php') ?>


<script>
var form = document.querySelector("#form1");


form.addEventListener("submit", function(event) {
  var data = new FormData(form);
  var output = "";
  for (const entry of data) {
    output = entry[0] + "=" + entry[1] + "\r";
	if(entry[1]=='0')
	{
		window.location.href ="index.controller.php?action=addSociete&controller=client"
	}
	else {
		window.location.href ="index.controller.php?action=addPhysique&controller=client"
	}
  };
  
  event.preventDefault();
}, false);


</script>