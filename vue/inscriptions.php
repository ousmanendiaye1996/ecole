<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style1.css" />
    <link rel="stylesheet" href="../css/style2.css"/>
   
</head>
<body>
     
<header>
    <div class="barMenu">
        <ul id="barMenu">
            <li><a href="#" class="barLien">accueil</a></li>
            <li><a href="#" class="barLien">presentation</a></li>
            <li><a href="#" class="barLien">filiere</a></li>
            <li><a href="vue/inscriptions.php" class="barLien">inscriptions</a></li>
            <li><a href="#" class="barLien">contact</a></li>
            <li><a href="#" class="barLien">contact</a></li>
            <li><a href="vue/contacts.php" class="barLien">contacts</a></li>

            
        </ul>
    </div>
</header>
    <div>
        <img src="../images/logo.png" height="200px" width="90%">
    </div>

    <p><h1>Effectuer votre inscription en ligne</h1></p>
     <FIELdset>
         <legend>INFORMATIONS D' IDENTITE PERSONNELLES</legend>
      <FORM methode="" action="" enctype="multipart/form-data">
       <label for="sex">Vous êtes:</label> 
       <input type="radio" value="1" name=sex>HOMME
       <input type="radio" value="1" name=sex>FEMME<BR>
       <LABel>Prénom:</LABel><input type="text"><BR>
       <label for="">Date de naissance:</label><input type="date"><BR>
       <label for="Adresse ">Adresse </label><input type="text"><BR>
       <label for="Téléphone :">Téléphone :</label><input type="tel"><BR>
       <label for="">Email</label><input type="emial"><BR>
       <label for="">Pays de nationallité:</label><input type="text"><BR>
       
       
      </FORM>
      </FIELdset>
      
     <FIELdset>
         <legend>INFORMATIONS SCOLAIRES</legend>
      <FORM methode="" action="" enctype="multipart/form-data">
       <label for="">Nom et Adresse de l'établissement fréquenté durant la derniÃ¨re année scolaire</label>
       <input type="text"><BR>
       <label for="">Niveau </label>
           <select name="" id="">
               <optgroup for="Choisissez votre niveau"></optgroup>
               <option value="">BAC</option>
               <option value="">BAC</option>
               <option value="">BAC</option>
           </select>
          

       <label for="">Année d'obtension:</label><input type="date"><br>
       <label for="sex">Classe souhaitée:</label> 
       <input type="radio" value="0" name=sex>S
       <input type="radio" value="1" name=sex>L<BR>
       <input type="radio" value="1" name=sex>S
       <input type="radio" value="1" name=sex>L<BR>
      <label for="">Angagement et reglement interieur</label>
    </FORM>
      </FIELdset>
      <input type="submit" value="Valider"></input>
</body>
</html>