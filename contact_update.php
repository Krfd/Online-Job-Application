<?php

include "contact_process.php";

if(isset($_GET['updateid'])) {
$id = $_GET['updateid'];
$sql = "SELECT * FROM contact WHERE id = $id";
$check = mysqli_query($conn, $sql);
if($check) {
    while($row = mysqli_fetch_array($check)) {
        $id = $row['id'];
        $last_name = $row['lastname'];
        $first_name = $row['firstname'];
        $phone = $row['phone'];
        $email = $row['email'];
        $address = $row['address'];

        if(isset($_POST['update'])) {

            include "contact.php";
            
            $lastname = $_POST['lname'];
            $firstname = $_POST['fname'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $update = ("UPDATE contact SET lastname = '$lastname', firstname = '$firstname', phone = '$contact', email = '$email', address = '$address' WHERE id = $id");
            $set = mysqli_query($conn, $update);

            if($set) {
                ?>
                <script>
                    alert("Data updated successfully!");
                    window.location.href = "admin_page.php";
                 </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Data update failed. Please try again!");
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
    <title>Updating Contact Information</title>

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
            .form-control:focus {
                box-shadow: none;
            }
        </style>
</head>
<body>
    <div class="container my-5">
        <h2>Update Contact</h2>
        <form method="post">
            <fieldset>
                            <label for="lname">Last Name</label>
                            <div class="col-3">
                            <input type="text"
                            name="lname"
                            class="form-control"
                            placeholder="Last Name"
                            required
                            autocomplete="off"
                            value="<?php echo $last_name; ?>"
                            />
                            </div>

                            <label for="fname">First Name</label>
                            <div class="col-3">
                            <input type="text"
                            name="fname"
                            class="form-control"
                            placeholder="First Name"
                            required
                            autocomplete="off"
                            value="<?php echo $first_name; ?>"
                            />
                            </div>

                            <label for="contact">Phone Number</label>
                            <div class="col-3">
                            <input type="tel"
                            name="contact"
                            class="form-control"
                            placeholder="Phone Number"
                            required
                            autocomplete="off"
                            value="<?php echo $phone; ?>"
                            />
                            </div>
                            <label for="email">Email</label>
                            <div class="col-3">
                            <input type="email"
                            name="email"
                            class="form-control"
                            placeholder="Email"
                            required
                            autocomplete="off"
                            value="<?php echo $email; ?>"
                            />
                            </div>
                            <label for="address">Address</label>
                            <div class="col-3">
                            <input type="text"
                            name="address"
                            class="form-control"
                            placeholder="Address"
                            required
                            autocomplete="off"
                            value="<?php echo $address; ?>"
                            />
                            </div>
                            <br>
                        <button 
                        name="update" 
                        type="submit" 
                        class="btn btn-dark w-25">
                        Update
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-outline-primary w-25" onclick="window.location.href = 'admin_page.php'">Cancel</button>
            </fieldset>
        </form>
    </div>
</body>
</html>