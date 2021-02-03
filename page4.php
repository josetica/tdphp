
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <form method="POST" action="">

                <label for="Mat">Matricule</label>
                <input type="text" id="Mat" name="matricule" placeholder=""><br><br>

                <label for="Nom">Nom</label>
                <input type="email" id="Nom" name="nom" placeholder=""><br><br>

                <label for="Prénom">Prénom</label>
                <input type="text" id="Prénom" name="Prénom" placeholder=""><br><br>

                SEXE :
                <input type="radio" id="Masculin" name="sexe" value="sexe">
                <label for="Féminin">Masculin</label>

                <input type="radio" id="Féminin" name="sexe" value="sexe">
                <label for="Féminin">Féminin</label><br><br>

                Adresse <textarea></textarea><br><br>

                <td><label for="service">Service</label></td>
                <td>
                    <select name="servise" id="service">
                        <option value="I don't">I don't</option>
                        <option value="Saint-Louis">Know</option>
                        <option value="Mbour">What</option>
                        <option value="Zig">To put</option>
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

    </form>

</body>
</html>