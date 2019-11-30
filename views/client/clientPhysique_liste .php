<?php include('include/header.php') ?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liste article</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered" data-toggle="table"   data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="num" data-checkbox="true" >Numéro</th>
						        <th data-field="lib" data-sortable="true">Libellé</th>
						        <th data-field="pHT"  data-sortable="true">Prix vente HT</th>
								<th data-field="TVA"  data-sortable="true">TVA</th>
								<th data-field="tRemise" data-sortable="true">Taux de remise</th>
						        <th data-field="qte" data-sortable="true">Quantité</th>
								<th data-field="categ" data-sortable="true">Catégorie</th>
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
<?php include('include/footer.php') ?>


