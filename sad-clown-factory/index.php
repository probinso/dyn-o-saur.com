<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <title>Sad Clown Factory</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <script src="https:///ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <div class="container">
    <h2> Welcome to the Sad Clown Factory</h2>
    <div class="pull-right">
      <img src="http://smbc-comics.com/comics/1443191530-20150925after.png" /> 
      <!-- <img class="img-responsive" src="scf.png" /> -->
    </div>


    <?php echo file_get_contents('./mission-statement.txt',true); ?>

    </div>
    <div class="container">
    <ul class="nav nav-pills">
      <li><a href="#" data-toggle="tab">About Sad Clown Factory</a></li>
      <li><a href="#" data-toggle="tab">Submit Factory Clown</a></li>
      <li><a href="#" data-toggle="tab">Factory Gallery</a></li>
    </ul>
    </div>
  </body>
</html>
