<?php

include "conn.php";

if(isset($_GET['updateid'])) {
$id = $_GET['updateid'];
$sql = "SELECT * FROM education WHERE id = $id";
$check = mysqli_query($conn, $sql);
if($check) {
    while($row = mysqli_fetch_array($check)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $middle_name = $row['middle_name'];
        $age = $row['age'];
        $birthdate = $row['birthdate'];
        $phone = $row['phone'];
        $address = $row['address'];
        $email = $row['email'];

        if(isset($_POST['update'])) {

            include "services.php";
            
            $lastname = $_POST['lname'];
            $firstname = $_POST['fname'];
            $middlename = $_POST['mname'];
            $age = $_POST['age'];
            $birthday = $_POST['birthdate'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $email = $_POST['email'];

            $update = ("UPDATE education SET first_name = '$firstname', last_name = '$lastname', middle_name = '$middlename', age = '$age', birthdate = '$birthday', phone = '$contact',  address = '$address', email = '$email' WHERE id = $id");
            $set = mysqli_query($conn, $update);

            if($set) {
                ?>
                <script>
                    alert("Education enrollment updated successfully!");
                    window.location.href = "admin_page.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Education enrollment invalid update. Please try again!");
                    window.location.href = "admin_page.php";
                </script>
                <?php
            }
        }
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating Training Application Information</title>

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
            .container {
                width: 50%;
                margin: 100px auto;
            }
            .form-control:focus {
                box-shadow: none;
            }
        </style>
</head>
<body>
    <div class="container my-5">
        <h2>Update Education Enrollment</h2>
        <form method="post">
            <fieldset>
                <div class="row">
                    <div class="col">
                            <label for="fname">First Name</label>
                            <div class="col">
                            <input type="text"
                            name="fname"
                            class="form-control"
                            placeholder="First Name"
                            required
                            autocomplete="off"
                            value="<?php echo $first_name; ?>"
                            />
                            </div>
                    </div>
                    <div class="col">
                            <label for="lname">Last Name</label>
                            <div class="col">
                            <input type="text"
                            name="lname"
                            class="form-control"
                            placeholder="Last Name"
                            required
                            autocomplete="off"
                            value="<?php echo $last_name; ?>"
                            />
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <label for="mname">Middle Name</label>
                            <div class="col">
                            <input type="text"
                            name="mname"
                            class="form-control"
                            placeholder="Middle Name"
                            required
                            autocomplete="off"
                            value="<?php echo $middle_name; ?>"
                            />
                            </div>
                    </div>
                    <div class="col">
                            <label for="age">Age</label>
                            <div class="col">
                            <input type="number"
                            name="age"
                            class="form-control"
                            placeholder="Age"
                            required
                            autocomplete="off"
                            value="<?php echo $age; ?>"
                            />
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <label for="bday">Birthdate</label>
                            <div class="col">
                            <input type="date"
                            name="birthdate"
                            class="form-control"
                            placeholder="Birthdate"
                            required
                            autocomplete="off"
                            value="<?php echo $birthdate; ?>"
                            />
                            </div>
                    </div>
                    <div class="col">

                            <label for="contact">Phone Number</label>
                            <div class="col">
                            <input type="tel"
                            name="contact"
                            class="form-control"
                            placeholder="Phone Number"
                            required
                            autocomplete="off"
                            value="<?php echo $phone; ?>"
                            />
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <label for="address">Address</label>
                            <div class="col">
                            <input type="text"
                            name="address"
                            class="form-control"
                            placeholder="Address"
                            required
                            autocomplete="off"
                            value="<?php echo $address; ?>"
                            />
                            </div>
                    </div>
                    <div class="col">
                            <label for="email">Email</label>
                            <div class="col">
                            <input type="email"
                            name="email"
                            class="form-control"
                            placeholder="Email"
                            required
                            autocomplete="off"
                            value="<?php echo $email; ?>"
                            />
                            </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-outline-primary w-100" onclick="window.location.href='admin_page.php'">Cancel</button>
                    </div>
                    <div class="col">
                        <button 
                        name="update" 
                        type="submit" 
                        class="btn btn-dark w-100">
                        Update
                        </button>
                    </div>
            </fieldset>
        </form>
    </div>
</body>
</html>