<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rédacom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" /> 
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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<div class="form-sec">
  <h4>Contact form</h4>
  
 <form name="qryform" id="qryform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
    </div>
    
    <div class="form-group">
      <label>Phone No.:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
    </div>
	<div class="form-group">
      <label>Subject:</label>
      <input type="text" class="form-control" id="name" placeholder="Subject" name="subject">
    </div>
	 
	<div class="form-group">
      <label>Issues/query:</label>
      <textarea name="issues" class="form-control" id="iq" placeholder="Enter your Issues/query"></textarea>
    </div>
	
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>


</div>

        </section>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>