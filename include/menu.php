<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="../views/article/article_liste.php"><img src="./photos/listeArticle.png" width="15vw" height="15vh"></img> ListeArticle</a></li>
			<li><a href="article_ajout.php"><img src="./photos/ajoutArticle.png" width="15vw" height="15vh"></img> Ajout Artcile</a></li>
			<li><a href="facture.php"><img src="./photos/facture.png" width="15vw" height="15vh"></img> Facture</a></li>
			<li><a href="commande_ajout.php"><img src="./photos/commande.png" width="15vw" height="15vh"></img> Commande</a></li>
			<!-- <li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li> -->
			<li><a href="icons.html"><img src="./photos/bonLivraison.png" width="15vw" height="15vh"></img> Bon de livraison</a></li>
			<li class="parent ">
				<a href="client_liste.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Liste des clients 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="clientPhysique_liste.php">
							<img src="./photos/client.png" width="15vw" height="15vh"></img> Client physique
						</a>
					</li>
					<li>
						<a class="" href="clientSociete_liste.php">
							<img src="./photos/company.png" width="15vw" height="15vh"></img> Société
						</a>
					</li>
				</ul>
			</li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Réglements 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Liste des réglements
						</a>
					</li>
					<li>
						<a class="" href="#">
							<img src="./photos/espece.png" width="15vw" height="15vh"></img> Réglement par espéce
						</a>
					</li>
					<li>
						<a class="" href="#">
							<img src="./photos/cheque.png" width="15vw" height="15vh"></img> Réglement par chéque
						</a>
					</li>
					<li>
						<a class="" href="#">
							<img src="./photos/traite.png" width="15vw" height="15vh"></img> Réglement par traite
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->