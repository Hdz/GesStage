<?php if($_SESSION['role']=="professeur"){  ?>

<div class="contenu2">
	<div id="stageG">
		<h3>Renseigner un stage</h3>
		<form action="">
		<table>
			<tr>
				<td>Organisation :</td>
				<td><input id="organisation" type="text" value="" name="oraganisation"></td>
			</tr>
			<tr>
				<td>Etudiant :</td>
				<td><input id="etudiant" type="text" value="" name="etudiant"></td>
			</tr>
			<tr>
				<td>Professeur :</td>
                                <td><input id="professeur" type="text" value="" name="professeur"></td>
			</tr>
			<tr>
				<td>Maitre de stage :</td>
				<td><input id="Mstage" type="text" value="" name="Mstage"></td>
			</tr>
			<tr>
				<td>Date début :</td>
				<td><input id="DateDeb" type="text" value="" name="DateDeb"></td>
			</tr>
			<tr>
				<td>Date Fin :</td>
				<td><input id="DateFin" type="text" value="" name="DateFin"></td>
			</tr>
			<tr>
				<td>Date de la visite :</td>
				<td><input id="DateVis" type="text" value="" name="DateVis"></td>
			</tr>
			<tr>
				<td>Avis de la visite :</td>
				<td><input id="AvisVis" type="text" value="" name="AvisVis"></td>
			</tr>
			<tr>
				<td><input id="submit" type="submit" value="Envoyer"></td>
			</tr>
		</table>
		</form>
	</div>
	<div id="stageD">
		<h3>Rechercher un stage</h3>
		<form action="">
		<table>
			<tr>
				<td>Nom élève :</td>
				<td><input id="nomEl" type="text" value="" name="nomEl"></td>
                                <td><input type="submit" value="Rechercher"></td>
			</tr>
			<tr>
				<td>Stage :</td>
				<td>
					<select name="nom" size="1">
						<option>Stage1
						<option>Stage2
					</select>
				</td>
			</tr>
			<tr>
				<td>Entreprise :</td>
                                <td><div name="entreprise" id="entreprise"></div></td>
			</tr>
			<tr>
				<td>Etudiant :</td>
                                <td><div name="etudiant" id="etudiant"></div></td>
			</tr>			
			<tr>
				<td>Maitre de stage :</td>
                                <td><div name="maitre" id="maitre"></div></td>
			</tr>
			<tr>
				<td>Date début :</td>
                                <td><div name="debut" id="debut"></div></td>
			</tr>
			<tr>
				<td>Date Fin :</td>
                                <td><div name="fin" id="fin"></div></td>
			</tr>
			<tr>
				<td>Date de la visite :</td>
                                <td><div name="visite" id="visite"></div></td>
			</tr>
			<tr>
				<td>Avis de la visite :</td>
                                <td><div name="avis" id="avis"></div></td>
			</tr>
		</table>
		</form>
	</div>
</div>

<?php }elseif($_SESSION['role']=="admin"){ ?>
<div class="contenu2">
	<div id="stageG">
		<h3>Renseigner un stage</h3>
		<form action="">
		<table>
			<tr>
				<td>Organisation :</td>
				<td><input id="organisation" type="text" value="" name="oraganisation"></td>
			</tr>
			<tr>
				<td>Etudiant :</td>
				<td><input id="etudiant" type="text" value="" name="etudiant"></td>
			</tr>
			<tr>
				<td>Professeur :</td>
                                <td><input id="professeur" type="text" value="" name="professeur"></td>
			</tr>
			<tr>
				<td>Maitre de stage :</td>
				<td><input id="Mstage" type="text" value="" name="Mstage"></td>
			</tr>
			<tr>
				<td>Date début :</td>
				<td><input id="DateDeb" type="text" value="" name="DateDeb"></td>
			</tr>
			<tr>
				<td>Date Fin :</td>
				<td><input id="DateFin" type="text" value="" name="DateFin"></td>
			</tr>
			<tr>
				<td>Date de la visite :</td>
				<td><input id="DateVis" type="text" value="" name="DateVis"></td>
			</tr>
			<tr>
				<td>Avis de la visite :</td>
				<td><input id="AvisVis" type="text" value="" name="AvisVis"></td>
			</tr>
			<tr>
				<td><input id="submit" type="submit" value="Envoyer"></td>
			</tr>
		</table>
		</form>
	</div>
	<div id="stageD">
		<h3>Rechercher un stage</h3>
		<form action="">
		<table>
			<tr>
				<td>Nom élève :</td>
				<td><input id="nomEl" type="text" value="" name="nomEl"></td>
                                <td><input type="submit" value="Rechercher"></td>
			</tr>
			<tr>
				<td>Stage :</td>
				<td>
					<select name="nom" size="1">
						<option>Stage1
						<option>Stage2
					</select>
				</td>
			</tr>
			<tr>
				<td>Entreprise :</td>
                                <td><div name="entreprise" id="entreprise"></div></td>
			</tr>
			<tr>
				<td>Etudiant :</td>
                                <td><div name="etudiant" id="etudiant"></div></td>
			</tr>			
			<tr>
				<td>Maitre de stage :</td>
                                <td><div name="maitre" id="maitre"></div></td>
			</tr>
			<tr>
				<td>Date début :</td>
                                <td><div name="debut" id="debut"></div></td>
			</tr>
			<tr>
				<td>Date Fin :</td>
                                <td><div name="fin" id="fin"></div></td>
			</tr>
			<tr>
				<td>Date de la visite :</td>
                                <td><div name="visite" id="visite"></div></td>
			</tr>
			<tr>
				<td>Avis de la visite :</td>
                                <td><div name="avis" id="avis"></div></td>
			</tr>
		</table>
		</form>
	</div>
</div>

<?php }elseif($_SESSION['role']=="secretaire"){ ?>

<div class="contenu2">
	<div id="stageG">
		<h3>Renseigner un stage</h3>
		<form action="">
		<table>
			<tr>
				<td>Organisation :</td>
				<td><input id="organisation" type="text" value="" name="oraganisation"></td>
			</tr>
			<tr>
				<td>Etudiant :</td>
				<td><input id="etudiant" type="text" value="" name="etudiant"></td>
			</tr>
			<tr>
				<td>Professeur :</td>
                                <td><input id="professeur" type="text" value="" name="professeur"></td>
			</tr>
			<tr>
				<td>Maitre de stage :</td>
				<td><input id="Mstage" type="text" value="" name="Mstage"></td>
			</tr>
			<tr>
				<td>Date début :</td>
				<td><input id="DateDeb" type="text" value="" name="DateDeb"></td>
			</tr>
			<tr>
				<td>Date Fin :</td>
				<td><input id="DateFin" type="text" value="" name="DateFin"></td>
			</tr>
			<tr>
				<td><input id="submit" type="submit" value="Envoyer"></td>
			</tr>
		</table>
		</form>
	</div>
	<div id="stageD">
		<h3>Rechercher un stage</h3>
		<form action="">
		<table>
			<tr>
				<td>Nom élève :</td>
				<td><input id="nomEl" type="text" value="" name="nomEl"></td>
                                <td><input type="submit" value="Rechercher"></td>
			</tr>
			<tr>
				<td>Stage :</td>
				<td>
					<select name="nom" size="1">
						<option>Stage1
						<option>Stage2
					</select>
				</td>
			</tr>
			<tr>
				<td>Entreprise :</td>
                                <td><div name="entreprise" id="entreprise"></div></td>
			</tr>
			<tr>
				<td>Etudiant :</td>
                                <td><div name="etudiant" id="etudiant"></div></td>
			</tr>			
			<tr>
				<td>Maitre de stage :</td>
                                <td><div name="maitre" id="maitre"></div></td>
			</tr>
			<tr>
				<td>Date début :</td>
                                <td><div name="debut" id="debut"></div></td>
			</tr>
			<tr>
				<td>Date Fin :</td>
                                <td><div name="fin" id="fin"></div></td>
			</tr>
			<tr>
				<td>Date de la visite :</td>
                                <td><div name="visite" id="visite"></div></td>
			</tr>
			<tr>
				<td>Avis de la visite :</td>
                                <td><div name="avis" id="avis"></div></td>
			</tr>
		</table>
		</form>
	</div>
</div>

<?php }else{ ?>

<div class="contenu3">
	<div id="stageE">
		<center><h3>Sélectionner votre stage</h3>
                    </br>
                <select name="nom" size="1">
			<option>Stage1
			<option>Stage2
		</select></center>
                </br>
		<form action="">
                    <table>
                        <tr>
                                    <td>Entreprise :</td>
                                    <td><div name="entreprise" id="entreprise"></div></td>
                            </tr>
                            <tr>
                                    <td>Etudiant :</td>
                                    <td><div name="etudiant" id="etudiant"></div></td>
                            </tr>			
                            <tr>
                                    <td>Maitre de stage :</td>
                                    <td><div name="maitre" id="maitre"></div></td>
                            </tr>
                            <tr>
                                    <td>Date début :</td>
                                    <td><div name="debut" id="debut"></div></td>
                            </tr>
                            <t
r>
                                    <td>Date Fin :</td>
                                    <td><div name="fin" id="fin"></div></td>
                            </tr>
                            <tr>
                                    <td>Date de la visite :</td>
                                    <td><div name="visite" id="visite"></div></td>
                            </tr>
                            <tr>
                                    <td>Avis de la visite :</td>
                                    <td><div name="avis" id="avis"></div></td>
                            </tr>
                    </table>
                </form>
        </div>
</div>

<?php } ?>
