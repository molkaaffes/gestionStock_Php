<?php include('../../include/header.php') ?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="../index/index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liste des clients</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered"    data-sort-name="name" data-sort-order="desc">
						    <thead>
								<tr>
								 
								 
								   <th colspan="3" scope="colgroup">Information commune</th>
								   <th colspan="3" scope="colgroup">Personne physique</th>
								   <th colspan="1" scope="colgroup">Société</th>
								</tr>
								 <tr>
								   <th>Numéro</th>
								   <th>Numero Téléphone</th>
								   <th>Adresse</th>
								   <th scope="col">Matricule</th>
								   <th scope="col">Nom</th>
								   <th scope="col">Prénom</th>
								   <th scope="col">Matricule Fiscale</th>
								 </tr>					
							</thead>
							<tr>
							<td>A001</td>
							<td>Art1</td>
							<td>1,520</td>
							<td>1,14</td>
							<td>2%</td>
							<td>100</td>
							<td>Santé</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	


						
		
		
	</div><!--/.main-->


<?php include('../../include/footer.php') ?>