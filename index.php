<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <title>SMS - POULIE Rémi</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">SMS</a>
        </div>
        </nav>
    </header>
    <div class="body">
        <div class="container">
            <div class="row justify-content-md-center">
                <form class="col-md-6" action="send.php" method="POST">
                <div class="form-group">
                    <label for="phoneInput">Phone Number</label>
                    <input name="phoneInput" type="text" class="form-control" id="phoneInput" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="messageInput">Message</label>
                    <textarea name="messageInput" class="form-control" id="messageInput" placeholder="Message" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-6 text-center"><a href="https://github.com/guiz26/SMS_test" target="_blank"><i class="fab fa-github"></i> GitHub</a></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>