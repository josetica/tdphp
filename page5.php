<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
            <style>
                    
                    table{
                        border-collapse: collapse;
                        width: 50%;
                        caption-side: TOP;
                    }
                    td{
                        border: solid 1px navy;
                    }
                    th{
                        border: solid 1px black;
                        text-decoration: underline;
                    }
                    td table{
                        caption-side: bottom;
                    }
            </style>

</head>
<body>
    <form method="POST" action="">

                <label for="Mat">Matricule</label>
                <input type="number" id="Mat" name="matricule" placeholder=""><br><br>

                <label for="Nom">Nom</label>
                <input type="text" id="Nom" name="nom" placeholder=""><br><br>

                <label for="Prénom">Prénom</label>
                <input type="text" id="Prénom" name="prénom" placeholder=""><br><br>

                Sexe:
                <label for="Masculin">Masculin</label>
                <input type="radio" id="Masculin" name="sexe" value="sexe">

                <label for="Féminin">Féminin</label>
                <input type="radio" id="Féminin" name="sexe" value="sexe"><br>
                
                <label for="Adress" >Adresse</label>
                <textarea name="adresse" id="Adresse"></textarea><br><br>

                <td><label for="service">Service</label></td>
                <td>
                    <select name="servise" id="service">
                        <option value="I don't">I don't</option>
                        <option value="Know">Know</option>
                        <option value="What">What</option>
                        <option value="To put">To put</option>
                    </select>
                </td><br><br>

                <td><label for="fonction">Fonction</label></td>
                <td>
                    <select name="fonction" id="fonction">
                        <option value="I don't">I don't</option>
                        <option value="Know">Know</option>
                        <option value="What">What</option>
                        <option value="To put">To put</option>
                    </select>
                </td><br><br>

                <input type="submit" value="Valider!">
                <input type="reset" value="Réinitialiser!">

    </form><br><br><br>

    <table style="border: solid;" align="">
        <caption><b>Table HTML</b></caption>
        <tr>
            <th>Matricule</th><th>Prénom</th><th>Nom</th><th>Sexe</th><th>Adresse</th><th>Service</th><th>Fonction</th>
        </tr>
        <tr>
            <td><?php echo $_POST["matricule"]?></td><td><?php echo $_POST["nom"]?></td><td><?php echo $_POST["prénom"]?></td><td><?php echo $_POST["sexe"]?></td><td><?php echo $_POST["adresse"]?></td><td><?php echo $_POST["service"]?></td><td><?php echo $_POST["fonction"]?></td>
        </tr>
    </table>


</body>
</html>