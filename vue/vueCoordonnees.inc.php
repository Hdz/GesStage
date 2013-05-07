<div class="contenue">
   <div class="topCoord">
       <table>
           <tr>
               <td>Nom :<newEmptyPHP</td>
               <td class="rep"><?php echo $nomCoor; ?></td>
           </tr>
           <tr>
               <td>Prénom :</td>
               <td class="rep"><?php echo $prenomCoor; ?></td>
           </tr>
           <tr>
               <td>Téléphone :</td>
               <td class="rep"><?php echo $telCoor; ?></td>
           </tr>
           <tr>
               <td>Adresse e-mail :</td>
               <td class="rep"><?php echo $addCoor; ?></td>
           </tr>
       </table>
       <div class="separation"></div>
       <form method="POST" action="">
           <table>
               <tr>
                   <td>Nom :</td>
                   <td><input id="nom" type="text" value="" name="nom"></td>
               </tr>
               <tr>
                   <td>Prénom :</td>
                   <td><input id="prenom" type="text" value="" name="prenom"></td>
               </tr>
               <tr>
                   <td>Téléphone :</td>
                   <td><input id="tel" type="text" value="" name="tel"></td>
               </tr>
               <tr>
                   <td>Adresse e-mail :</td>
                   <td><input id="email" type="text" value="" name="email"></td>
               </tr>
           </table>
           <input class="submit" type="submit" value="Modifier">
       </form>
   </div>
</div>