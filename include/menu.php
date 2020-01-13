<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search" >
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">

			<li class="active"><a href="index.controller.php?action=dashboard&controller=admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="index.controller.php?action=liste&controller=article"><img src="photos/listeArticle.png" width="15vw" height="15vh"></img> Liste Article</a></li>

			<li><a href="index.controller.php?action=afficheForm&controller=article"><img src="photos/ajoutArticle.png" width="15vw" height="15vh"></img> Ajout Artcile</a></li>

			<!-- <li><a href="views/facture/facture.php"><img src="photos/facture.png" width="15vw" height="15vh"></img> Facture</a></li> -->

			<li><a href="index.controller.php?action=afficheForm&controller=commande"><img src="photos/commande.png" width="15vw" height="15vh"></img> Ajouter Commande</a></li>

			<li><a href="index.controller.php?action=liste&controller=commande"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Liste Commande</a></li> 
			<!--<li><a href="icons.html"><img src="../photos/bonLivraison.png" width="15vw" height="15vh"></img> Bon de livraison</a></li>-->
			
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Gestion des clients 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="index.controller.php?action=afficheForm&controller=client">
							<img src="photos/client.png" width="15vw" height="15vh"></img>Ajouter Client 
						</a>
					</li>
					

					<li class="parent ">
				<a href="index.controller.php?action=listeClient&controller=client">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Liste des clients 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="index.controller.php?action=listePhysique&controller=client">
							<img src="photos/client.png" width="15vw" height="15vh"></img> Client physique
						</a>
					</li>
					<li>
						<a class="" href="index.controller.php?action=listeSociete&controller=client">
							<img src="photos/company.png" width="15vw" height="15vh"></img> Société
						</a>
					</li>
				</ul>
			</li>

				</ul>
			</li>
			

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Réglements 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Liste des réglements
						</a>
					</li>
					<li>
						<a class="" href="#">
							<img src="photos/espece.png" width="15vw" height="15vh"></img> Réglement par espéce
						</a>
					</li>
					<li>
						<a class="" href="index.controller.php?action=listeCheque&controller=reglement">
							<img src="photos/cheque.png" width="15vw" height="15vh"></img> Réglement par chéque
						</a>
					</li>
					<li>
						<a class="" href="#">
							<img src="photos/traite.png" width="15vw" height="15vh"></img> Réglement par traite
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="index.controller.php?action=login1&controller=admin"><svg class="glyph stroked male-user"></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->