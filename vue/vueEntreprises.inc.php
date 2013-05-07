<?php
$NOMORG = $res['NOM_ORGANISATION'];
$VILLEORG = $res['VILLE_ORGANISATION'];
$ADRESSEORG = $res['ADRESSE_ORGANISATION'];
$CODEPOST = $res['CP_ORGANISATION'];
$TELORG = $res['TEL_ORGANISATION'];
$MAIL = $res['MAIL'];
?>
<div class="contenu"> 
    <div class="topEnt">
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Rechercher une entreprise :</td>
                    <td><input input id="entreprise" type="text" value="" name="entreprise"></td>
                    <td><input type="submit" value="Chercher"></td>
                </tr>
            </table>
        </form>
        <div class="separation"></div>

        <table>
            <tr>
                <td>Nom Organisation :</td>
                <td class="rep"><?php echo $NOMORG; ?></td>
            </tr>
            <tr>
                <td>Ville Organisation :</td>
                <td class="rep"><?php echo $VILLEORG; ?></td>
            </tr>
            <tr>
                <td>Adresse Organisation :</td>
                <td class="rep"><?php echo $ADRESSEORG; ?></td>
            </tr>
            <tr>
                <td>Téléphone Organisation :</td>
                <td class="rep"><?php echo $TELORG; ?></td>
            </tr>
            <tr>
                <td>Mail Organisation :</td>
                <td class="rep"><?php echo $CODEPOST; ?></td>
            </tr>
            <tr>
                <td>Code Postal Organisation :</td>
                <td class="rep"><?php echo $MAIL; ?></td>


        </table>
    </div>
</div>