<?php 

session_start();

if(empty($_SESSION)) {
    ?>
    <script>
        alert("Session expired\nPlease login again.");
        window.location.href = "admin.html";
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin</title>

        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"
        ></script>

        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous"
        />

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Playball&family=Roboto:ital,wght@1,900&display=swap"
            rel="stylesheet"
        />

        <!-- Bootstrap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />

        <!-- Font Awesome-->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        />

        <link type="icon" rel="icon" href="background/IT Solutions.png" />

        <style>
            :root {
    --primary: hsla(100, 100%, 100%, .8);
    --primary-light: hsla(100, 100%, 100%, 0.5);
    --primary-lighter: hsla(100, 100%, 100%, 0.3);
    --secondary: hsla(0, 0%, 0%, 0.8);
    --secondary-light: hsla(0, 0%, 0%, 0.5);
    --secondary-lighter: hsla(0, 0%, 0%, 0.3);
    --blanch: hsla(36, 100%, 90%, 0.5);
}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.databases {
    margin-top: 50px;
    padding: 50px;
}
.modal-title {
    font-size: 3rem;
    font-weight: bold;
}
.content .modal .form-control {
    box-shadow: none;
    margin: 5px auto;
}
h1 {
    font-size: 6rem;
    font-weight: bold;
}
.registration {
    background: rgb(41, 97, 152);
}
.application,
.offerings,
.workingstudent, 
.contact {
    padding: 50px;
}
.table tr {
    padding: 20px;
}
h2 {
    font-size: 4rem;
    font-weight: bold;
}
h3 {
    font-size: 2.5rem;
    font-weight: bold;
}
.application, .workingstudent, .admin {
    background: cornflowerblue;
}
.services, .contact {
    background: rgb(41, 97, 152);
}
.application .container .row .col .form-control:focus {
    box-shadow: none;
}
button .btn a {
    text-decoration: none;
    color: #fff;
}
button .btn:focus {
    box-shadow: none;
}
.highlight {
    font-weight: bold;
}
.footer {
    display: flex;
    justify-content: space-between;
    border-top: 3px solid #fff;
    padding: 2% 0% 5% 0%;
}
.img {
    height: auto;
    width: 25px;
    margin: 0px 3px;
}
        </style>
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
        <div class="container-fluid">
            <div class="container content">
                <nav class="navbar navbar-expand justify-content-center bg-light fixed-top">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#registration" class="nav-link active">Registration</a></li>
                        <li class="nav-item"><a href="#application" class="nav-link">Application</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#workingstudent" class="nav-link">WS</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="#admin" class="nav-link">Admin</a></li>
                        <button class="btn btn-primary btn-sm ms-3 add-position" data-bs-toggle="modal" data-bs-target="#position">Add Position</button>
                        <button class="btn btn-dark btn-sm ms-3 logout"><a href="admin_logout.php" class="logout-button" style="text-decoration: none; color: #fff;">Log out</a></button>
                    </ul>
                </nav>
                <div class="modal fade" id="position">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title">Add Job Position</h1>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="slots.php" method="post" class="add-position">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="analyst" placeholder="System Analyst" min="0">
                                                        <label for="analyst">System Analyst</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="infosec" placeholder="Information Security" min="0">
                                                        <label for="infosec">Information Security</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="support" placeholder="Tech Support" min="0">
                                                        <label for="support">Tech Support</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="programmer" placeholder="Computer Programmer" min="0">
                                                        <label for="programmer">Computer Programmer</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="technician" placeholder="IT Technician" min="0">
                                                        <label for="technician">IT Technician</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="specialist" placeholder="Support Specialist" min="0">
                                                        <label for="specialist">Support Specialist</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="web" placeholder="Web Developer" min="0">
                                                        <label for="web">Web Developer</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="network" placeholder="Network Engineer" min="0">
                                                        <label for="network">Network Engineer</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="administrator" placeholder="Data Administrator" min="0">
                                                        <label for="administrator">Data Administrator</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="comsci" placeholder="Computer Scienctist" min="0">
                                                        <label for="comsci">Computer Scientist</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="director" placeholder="IT Director" min="0">
                                                        <label for="director">IT Director</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="system" placeholder="System Engineer" min="0">
                                                        <label for="system">System Engineer</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="security" placeholder="IT Security Specialist" min="0">
                                                        <label for="security">IT Security Specialist</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="designer" placeholder="UI/UX Designer" min="0">
                                                        <label for="designer">UI/UX Designer</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="architect" placeholder="Network Architect" min="0">
                                                        <label for="architect">Network Architect</label>
                                                    </div>
                                                    <div class="col form-floating">
                                                        <input type="number" class="form-control" name="software" placeholder="Software Engineer" min="0">
                                                        <label for="software">Software Engineer</label>
                                                    </div>
                                                </div>
                                                <button class="col btn btn-primary w-100 mt-2" type="submit" name="add">Submit</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <div class="container-fluid databases">
            <div class="title">
                <h1>Databases</h1>
                <hr>
            </div>
            <div class="container-fluid registration p-5" id="registration">
                <h2>Registered Users</h2>
                <br>
                <div class="container">
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Operations</th>
                        </tr>
                        <?php
                        include "register.php";

                            $registration = "SELECT * FROM registration";
                            $registered = mysqli_query($conn, $registration);
                        
                            if($registered) {
                                while($row = mysqli_fetch_array($registered)) {
                                    
                                    $id = $row['id'];
                                    $firstname = $row['firstname'];
                                    $lastname = $row['lastname'];
                                    $email = $row['email'];
                                    $address = $row['address'];
                                    $password = $row['password'];

                                    echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email."</td>";
                                echo "<td>".$address.'</td>
                                <td>'.$password.'</td>
                                <td>
                                <button type="button" class="btn btn-dark"><a href="register_update.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a></button>
                                <button type="button" class="btn btn-danger"><a href="register_delete.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button>
                                </td>
                                </tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="container-fluid application" id="application">
                <h2>Job Application</h2>
                <br>
                <div class="container">
                    <h3>System Analyst</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $analyst = "SELECT * FROM analyst";
                        $query = mysqli_query($conn, $analyst);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $contact = $row['contact'];
                                $city = $row['city'];
                                $address = $row['address'];
                                $message = $row['message'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_analyst.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_analyst.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Information Security</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $infosec = "SELECT * FROM infosec";
                        $query = mysqli_query($conn, $infosec);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_infosec.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_infosec.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Tech Support</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM support";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_support.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_support.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Computer Programmer</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM programmer";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_programmer.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_programmer.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>IT Technician</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM technician";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_technician.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_technician.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Support Specialist</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM specialist";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_specialist.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_specialist.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Web Developer</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM web";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_web.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_web.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Network Engineer</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM network";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_network.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_network.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Database Administrator</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM administrator";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_admin.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_admin.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Computer Scientist</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM scientist";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_scientist.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_scientist.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>IT Director</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM director";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_director.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_director.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>System Engineer</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM system";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_system.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_system.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>IT Security Specialist</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM it_security";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_it_security.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_it_security.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>UI/UX Designer</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM uiux";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_uiux.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_uiux.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Network Architect</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM architect";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_architect.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_architect.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                <br>
                <div class="container">
                    <h3>Software Engineer</h3>
                    <table class="table table-light table-striped col-12">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Resume</th>
                            <th>Details</th>
                        </tr>
                        <?php

                        include "conn.php";

                        $support = "SELECT * FROM software";
                        $query = mysqli_query($conn, $support);

                        if($query) {
                            while($row = mysqli_fetch_array($query)) {

                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                $resume = $row['resume'];

                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$firstname."</td>";
                                echo "<td>".$lastname."</td>";
                                echo "<td>".$email.'</td>
                                <td>'.$resume.'</td>
                                <td><button type="button" class="btn btn-dark"><a href="update_software.php?updateid='.$id.'" style="text-decoration: none; color: white;">View Details</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete_software.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button></td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="container-fluid services p-5" id="services">
                <h2>Services</h2>
                <br>
                <div class="container"> 
                <h3>Bootcamp</h3>
                <br>
                <div class="container">
                <table class="table table-light table-striped col-12">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Middle Name</th>
                        <th>Age</th>
                        <th>Birthdate</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Operations</th>

                    </tr>
                    <?php
                    include "conn.php";
                        
                        $bootcamp = "SELECT * FROM bootcamp";
                        $choose = mysqli_query($conn, $bootcamp);
                        
                        if($choose) {
                        while($row = mysqli_fetch_array($choose)){

                            $id = $row['id'];
                            $firstname = $row['first_name'];
                            $lastname = $row['last_name'];
                            $middlename = $row['middle_name'];
                            $age = $row['age'];
                            $birthdate = $row['birthdate'];
                            $phone = $row['phone'];
                            $address = $row['address'];
                            $email = $row['email'];

                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$firstname."</td>";
                            echo "<td>".$lastname."</td>";
                            echo "<td>".$middlename."</td>";
                            echo "<td>".$age."</td>";
                            echo "<td>".$birthdate."</td>";
                            echo "<td>".$phone."</td>";
                            echo "<td>".$address."</td>";
                            echo "<td>".$email.'</td>
                            <td>
                            <button type="button" class="btn btn-dark"><a href="bootcamp_update.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a></button>
                            <button type="button" class="btn btn-danger"><a href="bootcamp_delete.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button>
                            </td>
                            </tr>';
                        }
                        }

                    ?>
                </table>
                </div>
                </div>
                <br>
                <div class="container">
                <h3>Education</h3>
                <br>
                <div class="container">
                <table class="table table-light table-striped col-12">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Middle Name</th>
                        <th>Age</th>
                        <th>Birthdate</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Operations</th>
                    </tr>
                    <?php
                    include "conn.php";

                        $education = "SELECT * FROM education";
                        $point = mysqli_query($conn, $education);
                        
                        if($point) {
                        while($row = mysqli_fetch_array($point)){

                            $id = $row['id'];
                            $firstname = $row['first_name'];
                            $lastname = $row['last_name'];
                            $middlename = $row['middle_name'];
                            $age = $row['age'];
                            $birthdate = $row['birthdate'];
                            $phone = $row['phone'];
                            $address = $row['address'];
                            $email = $row['email'];

                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$firstname."</td>";
                            echo "<td>".$lastname."</td>";
                            echo "<td>".$middlename."</td>";
                            echo "<td>".$age."</td>";
                            echo "<td>".$birthdate."</td>";
                            echo "<td>".$phone."</td>";
                            echo "<td>".$address."</td>";
                            echo "<td>".$email.'</td>
                            <td>
                            <button type="button" class="btn btn-dark"><a href="education_update.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a></button>
                            <button type="button" class="btn btn-danger"><a href="education_delete.php?deleteid='.$id.'" style="text-decoration: none; color:#fff;">Delete</a></button>
                            </td>
                            </tr>';
                        }
                        }
                    ?>
                </table>
                </div>
                </div>
                <br>
                <div class="container">
                <h3>Training</h3>
                <br>
                <div class="container">
                <table class="table table-light table-striped col-12 ">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Middle Name</th>
                        <th>Age</th>
                        <th>Birthdate</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Operations</th>
                    </tr>
                    <?php
                    include "conn.php";

                        $training = "SELECT * FROM training";
                        $select = mysqli_query($conn, $training);

                        if($select) {

                        while($row = mysqli_fetch_array($select)){

                            $id = $row['id'];
                            $firstname = $row['first_name'];
                            $lastname = $row['last_name'];
                            $middlename = $row['middle_name'];
                            $age = $row['age'];
                            $birthdate = $row['bday'];
                            $phone = $row['phone'];
                            $address = $row['address'];
                            $email = $row['email'];

                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$firstname."</td>";
                            echo "<td>".$lastname."</td>";
                            echo "<td>".$middlename."</td>";
                            echo "<td>".$age."</td>";
                            echo "<td>".$birthdate."</td>";
                            echo "<td>".$phone."</td>";
                            echo "<td>".$address."</td>";
                            echo "<td>".$email.'</td>
                            <td>
                            <button type="button" class="btn btn-dark"><a href="training_update.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a></button>
                            <button type="button" class="btn btn-danger"><a href="training_delete.php?deleteid='.$id.'" style="text-decoration: none; color: #fff;" >Delete</a></button> 
                            </td>
                            </tr>';
                        }
                    }
                    ?>
                </table>
                </div>
                </div>
            </div>
            <div class="container-fluid workingstudent" id="workingstudent">
                <h2>Working Students</h2>
                <br>
                <div class="container">
                <table class="table table-light table-striped col-12">
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Operations</th>
                    </tr>
                    <?php
                        include "conn.php"; 

                        $data = "SELECT * FROM workingstudent";
                        $res = mysqli_query($conn, $data);

                        if($res) {
                        while($row = mysqli_fetch_array($res)){
                            $id = $row['id'];
                            $lastname = $row['lastname'];
                            $firstname = $row['firstname'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $address = $row['address'];

                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$lastname."</td>";
                            echo "<td>".$firstname."</td>";
                            echo "<td>".$phone."</td>";
                            echo "<td>".$email."</td>";
                            echo "<td>".$address.'</td>
                            <td>
                            <button type="button" class="btn btn-dark"><a href="uiws_update.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a></button>
                            <button type="button" class="btn btn-danger"><a href="uiws_delete.php?deleteid='.$id.'" style="text-decoration: none; color: #fff;">Delete</a></button>
                            </td>
                            </tr>';
                        }
                        }
                    ?>
                </table>
                </div>
            </div>
            <div class="container-fluid contact" id="contact">
                <h2>Contact</h2>
                <br>
                <div class="container">
                <table class="table table-light table-striped col-12">
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Operations</th>
                    </tr>
                    <?php
                        include "contact_process.php"; 

                        $data = "SELECT * FROM contact";
                        $res = mysqli_query($conn, $data);

                        if($res) {
                        while($row = mysqli_fetch_array($res)){
                            $id = $row['id'];
                            $lastname = $row['lastname'];
                            $firstname = $row['firstname'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $address = $row['address'];

                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$lastname."</td>";
                            echo "<td>".$firstname."</td>";
                            echo "<td>".$phone."</td>";
                            echo "<td>".$email."</td>";
                            echo "<td>".$address.'</td>
                            <td>
                            <button type="button" class="btn btn-dark"><a href="contact_update.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a></button>
                            
                            <button type="button" class="btn btn-danger"><a href="contact_delete.php?deleteid='.$id.'" style="text-decoration: none; color: #fff;">Delete</a></button>
                            </td>
                            </tr>';
                        }
                        }
                    ?>
                </table>
                </div>
            </div>
            <div class="container-fluid admin p-5" id="admin">
                <h2>Admin</h2>
                <br>
                <div class="container">
                    <table class="table table-striped table-light col-12">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Operations</th>
                                
                            </tr>
                        </thead>
                        <?php 
                        include "admin.php";

                        $admin = "SELECT * FROM admin1";
                        $select = mysqli_query($conn, $admin);

                        if($select) {
                            while($row = mysqli_fetch_array($select)) {
                                $id = $row['id'];
                                $username = $row['username'];
                                $password = $row['password'];

                                echo "<tbody>";
                                echo "<tr>";
                                echo '<td>'.$id.'</td>
                                <td>'.$username.'</td>
                                <td>'.$password.'</td>
                                <td>
                                <button class="btn btn-dark" type="button"><a href="admin_update.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a></button>
                                <button class="btn btn-danger" type="button"><a href="admin_delete.php?deleteid='.$id.'" style="text-decoration: none; color: white;">Delete</a></button>
                                </td>
                                </tr>
                                </tbody>';
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <footer class="container">
            <div class="container">
                <div class="container footer">
                    <div class="phinma">
                        <span class="highlight">PHINMA.</span>
                    </div>
                    <div class="links">
                        <a
                            href="https://www.facebook.com/messages/t/307385209447976"
                            ><img
                                src="icons/fb.png"
                                alt="Facebook"
                                class="fb img"
                        /></a>
                        <a href="https://www.instagram.com"
                            ><img
                                src="icons/ig.png"
                                alt="Instagram"
                                class="ig img"
                        /></a>
                        <a href="https://discord.com/channels/1059365294956630157/1059365295774507080">
                            <img
                                src="icons/discord.png"
                                alt="Discord"
                                class="disc img"
                        /></a>
                        <a href="mailto:phinmaonlinejobs@gmail.com"
                            ><img
                                src="icons/gmail.png"
                                alt="Gmail"
                                class="gmail img"
                        /></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
