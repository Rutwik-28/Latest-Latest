<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['user'];
        $DOB = $_POST['Date'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $number= $_POST['number'];
        $email = $_POST['email'];
        $skill = $_POST['skill'];
        $username1 = $_POST['username'];
        $password2 = $_POST['password'];
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "cricket_1";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        
         $sql = "INSERT INTO `player_info` ( `p_name`, `DOB`, `age`, `address`, `ph_no`, `email_id`, `skill`, `username`, `password`)
         VALUES ('$name', '$DOB', '$age', '$address', '$number', '$email', '$skill', '$username1', '$password2');";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Cricket Website!</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">  
    </script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" class="css">


    <link rel="stylesheet" href="css/main.css">



</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark my-nav">
        <p class="h3 navbar-brand"><a href="home.html">Run Machine</a></p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html">Home</a></li>
            <li class="nav-item"><a href="about.html">About</a></li>
            <li class="nav-item"><a href="login.html">Login</a></li>
            <li class="nav-item"><a href="Registration.html">Register</a></li>
            <li class="nav-item"><a href="Contact.html">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Registration Form</h2>

                <form action="" method="POST">

                    <div class="form-group">
                        <label>Player Name</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Date of birth</label>
                        <input type="date" name="Date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input type="Age" name="age" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="Address" name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email-ID</label>
                        <input type="Email" name="email" class="form-control">
                    </div>

                    <!-- <div class="form-group">
                            <label>Select Skill</label>
                            
                               <input type="radio" name="batsman" class="form-control">
                                <option>Bowler</option>
                                <option>All-Rounder</option>
                           
                        </div> -->

                    <div class="form-group">

                        <p>Please select your skill:</p>
                        <input type="radio" id="batsman" name="skill" value="batsman">
                        <label for="batsman">batsman</label><br>
                        <input type="radio" id="bowler" name="skill" value="bowler">
                        <label for="Bowler">bowler</label><br>
                        <input type="radio" id="allrounder" name="skill" value="All-Rounder">
                        <label for="All-Rounder">All-Rounder</label>

                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="Username" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>

                    <div>
                        <input type="submit" class="btnRegister" name="submit" value="Register">
                    </div>

                </form>


            </div>
        </div>
    </div>
    <div class="container my-4">


        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">SR NO </th>
                    <th scope="col">NAME</th>
                    <th scope="col">DOB</th>
                    <th scope="col">AGE</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">NUMBER</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SKILL</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                </tr>
            </thead>
            <tbody>
                <?php 
    //   $sql = "SELECT * FROM `player_info`";
    //   $result = mysqli_query($conn, $sql);
    //   $sno = 0;
    //   while($row = mysqli_fetch_assoc($result)){
    //     $sno = $sno + 1;
    //     echo "<tr>
    //     <th scope='row'>". $row['sno']. "</th>
    //     <td>". $row['p_name'] . "</td>
    //     <td>". $row['DOB'] . "</td>
    //     <td>". $row['age'] . "</td>
    //     <td>". $row['address'] . "</td>
    //     <td>". $row['ph_no'] . "</td>
    //     <td>". $row['email'] . "</td>
    //     <td>". $row['skill'] . "</td>
    //     <td>". $row['username'] . "</td>
    //     <td>". $row['password'] . "</td>
        
    //     <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button>
    //      <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
    //   </tr>";
    // } 
    //   ?>
                <?php 
          $sql = "SELECT * FROM `player_info`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['p_name'] . "</td>
            <td>". $row['DOB'] . "</td>
            <td>". $row['age'] . "</td>
            <td>". $row['address'] . "</td>
            <td>". $row['ph_no'] . "</td>
            <td>". $row['email_id'] . "</td>
            <td>". $row['skill'] . "</td>
            <td>". $row['username'] . "</td>
            <td>". $row['password'] . "</td>
           
          </tr>";
        } 
            
          ?>

        </table>

    </div>
    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src = "//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>


</body>



</html>