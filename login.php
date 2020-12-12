<!DOCTYPE html>
<html>

<head>
    <title>My Cricket Website!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark my-nav">
        <p class="h3 navbar-brand"><a href="home.html">Run Machine</a></p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html">Home</a></li>
            <li class="nav-item"><a href="about.html">About</a></li>
            <li class="nav-item"><a href="login.html">Login</a></li>
            <li class="nav-item"><a href="Registration.php">Register</a></li>
            <li class="nav-item"><a href="Contact.html">Contact</a></li>

        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Login Form</h2>

                <form action="validation.php" method="post">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>

                    <button class="btn btn-primary my-nav"> Login </button>
                    <p>If new user?<button class="btn btn-primary my-nav"><a href="registration.html"> Register
                            </a></button></p>


                </form>

            </div>
        </div>
    </div>


</body>

</html>