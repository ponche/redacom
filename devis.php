<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rédacom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/design.css" />
</head>

<body>
    <?php include("includes/headerNav.html") ; ?>
    <main class="container-fluid">
        <aside>
            <q>7 bonnes raison de nous confier la rédaction de vos procès-verbaux</q>
            <ol>
                <li>Un gain de temps assuré</li>
                <li>Une qualité professionnelle</li>
                <li>Un accompagnement personnalisé</li>
                <li>Un Interlocteur unique</li>
                <li>un budget maîtrisé et ajusté</li>
                <li>Une confidentialité garantie</li>
                <li>Des délais de remise des PV adaptables à vos besoins</li>
            </ol>
        </aside>
        <section>
            <h2>Contacter nous</h2>
            <form method="post" action="#">
                <div class="field">
                    <!-- Civilité -->
                    <label for="civilite">Civilité</label>
                    <select id="civilite" name="civilite">
                        <option>Monsieur</option>
                        <option>Madame</option>
                    </select>
                </div>
                <div class="field">
                    <!-- Nom-->
                    <label for="nom">Nom : </label>
                    <input type="text" id="nom" name="nom" required />
                </div>
                <div class="field">
                    <!-- Prénom-->
                    <label for="prenom">Prénom : </label>
                    <input type="text" id="prenom" name="prenom" required />
                </div>
                <div class="field">
                    <!-- adresse mail -->
                    <label for="email">Adresse-email : </label>
                    <input type="email" id="email" name="email" required />
                </div>
                <div class="field">
                    <!-- Société -->
                    <label for="societe">Société : </lable>
                    <input type="text" id="societe" name="societe" required />
                </div>
                <div class="field">
                    <!-- Nombre de Salarié -->
                    <label for="nbworking">Nombre de Salarié : </label>
                    <input type="number"> 
                </div>
                <div class="field">
                    <!-- Téléphone Fixe -->
                    <label for="phoneGSM">Téléphone Portable : </label>
                    <input type="tel" id="phoneGSM" name="phoneGSM" />
                </div>
                <div class="field">
                    <!-- Téléphone Portable -->
                    <label for="phoneFixe">Téléphone Fixe : </label>
                    <input type="tel" id="phoneFixe" name="phoneFixe" />
                </div>

                <div class="field">
                    <!-- Votre fonction -->
                    <label for=yourJob>Votre fonction</label>
                    <input type="text" id="yourJob" name="yourJob" />
                </div>
                <div class="field">
                    <!-- Votre instance -->
                    <label for="instance">Votre Instance : </label>
                    <input type="text" id="instance" name="instance">
                </div>
                <div class="field">
                    <!-- Actuellement qui rédige vos PV -->
                    <label for="writtenPV">Actuellement qui rédige vos PV ? : </label>
                    <input type="text" id="writtenPV" name="writtenPV" />
                </div>
                <div class="field">
                    <!-- Décrivez le problème que vous rencontrez avec vos PV -->
                    <label for="problemPV">Décrivez le problème que vous rencontrz avec vos PV</label>
                    <textarea id="problemPV" name="problemPV"></textarea>
                </div>
                <div class="submit-button">
                    <input type="submit" value="envoyer" />
                </div>
            </form>

        </section>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>