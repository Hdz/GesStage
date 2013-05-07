<div class="contenu"> 
	<h3 align="center">Connexion</h3></br>
	<div id="coco">
		<form action="" method="POST">
				<div id="connexion"><table border="0">
                                        <br />
					<tr>
					<td>Login:</td>
					<td><input type="text" name="login" id="login"></td>
					</tr>
					<tr>
					<td>Mot de passe:</td>
					<td><input type="password" name="mdp" id="mdp"></td>
					</tr>
					<td></td>
					
				</table></div>
                                <center><td><input type="submit" value="Valider"></td></center>
		</form>
		<?php
			if (isset($erreurlog)) {
				echo '$erreurlog';
			}
		?>
	</div>
</div>

