<!-- <?php include('../components/header.php') ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <title>Register Form</title>
</head>

<body>
    <div class="container-fluid px-0">
        <row>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Webconia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Program <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Sponsorship</a>
                        <a class="nav-item nav-link" href="#">Register</a>
                    </div>
                </div>
            </nav>
        </row>
        <row>
            <div class="jumbotron jumbotron-fluid px-0">
                <div class="container">
                    <h1 class="title display-4">WEBCONIA</h1>
                    <h1 class="title display-4">TECHNOLOGY</h1>
                    <h1 class="title display-4">CONFERENCE</h1>
                    <h1 class="title display-4">JOIN NOW</h1>

                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
            </div>
        </row>
    </div>
    <div id="jetzt-div" class="container-fluid px-0">
        <row class="anmeldung-titel">
            <h3 class="pb-2">Jetzt registrieren!</h3>
        </row>
    </div>
    <div id="form-div" class="container">
        <form action='../database/register_function.php' method='POST'>
            <div class="form-row">
                <div class="col-md-6 col-xs-12">
                    <label for="inputVorname">Vorname</label>
                    <input type="text" class="form-control" placeholder="Vorname" name='vorname' required>
                </div>
                <div class="col-md-6 col-xs-12">
                    <label for="inputNachname">Nachname</label>
                    <input type="text" class="form-control" placeholder="Nachname" name='nachname' required>
                </div>
            </div>
            <br />
            <div class="form-row">
                <div class="form-group col-md-6 col-xs-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name='email' required>
                </div>
                <br />
                <div class="form-group col-md-6 col-xs-12">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name='password' required>
                </div>
            </div>
            <br />
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputAddress">Firma</label>
                    <input type="text" class="form-control" id="inputFirma" name='firma' placeholder="Firma">
                </div>
                <br />
                <div class="form-group col">
                    <label for="inputState">Workshops</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Tech 1</option>
                        <option>Tech 2</option>
                        <option>Tech 3</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="datenschutz">
                    <label class="form-check-label" for="gridCheck">
                        Ich bin einverstanden mit der <a href="https://www.webconia.de/datenschutzerklaerung/">Datenschuterklärung</a>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrieren</button>
        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>