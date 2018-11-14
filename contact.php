<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rédacom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="bulma/css/bulma.min.css" /> 
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
            <!-- cordonnées ici -->    
            <div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input">
  </div>
</div>

<div class="field">
  <label class="label">Username</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="text" placeholder="Text input" value="bulma">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
  </div>
  <p class="help is-success">This username is available</p>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <p class="help is-danger">This email is invalid</p>
</div>

<div class="field">
  <label class="label">Subject</label>
  <div class="control">
    <div class="select">
      <select>
        <option>Select dropdown</option>
        <option>With options</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea"></textarea>
  </div>
</div>

<div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
      I agree to the <a href="#">terms and conditions</a>
    </label>
  </div>
</div>

<div class="field">
  <div class="control">
    <label class="radio">
      <input type="radio" name="question">
      Yes
    </label>
    <label class="radio">
      <input type="radio" name="question">
      No
    </label>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-text">Cancel</button>
  </div>
</div>


        </section>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>