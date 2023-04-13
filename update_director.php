<?php 

include "conn.php";

if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM director WHERE id = $id";
    $validate = mysqli_query($conn, $sql);

    if($validate) {
        while($row = mysqli_fetch_array($validate)) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $contact = $row['contact'];
            $city = $row['city'];
            $address = $row['address'];
            $resume = $row['resume'];

            if(isset($_POST['update'])) {

                $firstname = $_POST['fname'];
                $lastname = $_POST['lname'];
                $email = $_POST['email'];
                $contact = $_POST['contact'];
                $city = $_POST['city']; 
                $address = $_POST['address'];
                
                $update = ("UPDATE director SET firstname = '$firstname', lastname = '$lastname', email = '$email', contact = '$contact', city = '$city', address = '$address' WHERE id = $id");
                $set = mysqli_query($conn, $update);

                if($set) {
                    ?>
                    <script>
                        alert("Applicant's detail updated successfully!");
                        window.location.href = "admin_page.php";
                    </script>
                    <?php
                } else {
                    ?>
                        <script>
                            alert("Applicant's detail invalid update. Please try again!");
                            window.location.href = "view.php";
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
    <title>Applicant's Detail</title>

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
                width: 75%;
                margin: 100px auto;
            }
            h1 {
                font-weight: bold;
                font-size: 3rem;
            }
            .flex {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }
            .form {
                width: 50%;
                margin: 0px 20px;
            }
            .form-control {
                margin: 10px 0px;
            }
            .resume {
                height: 500px;
                width: 100%;
                object-fit: cover;
            }
            .form-control:focus {
                box-shadow: none;
            }
            .btn {
                width: 100%;
            }
        </style>
</head>
<body>
    <div class="container my-5">
        <h1>Applicant's Detail</h1>
        <hr>
        <div class="flex">
        <form action="" method="post" class="form">
        <fieldset>
            <div class="col">
                <div class="col form-floating">
                    <input type="text" name="fname" class="form-control" placeholder="Firstname" value="<?php echo $firstname ?>">
                    <label for="fname">Firstname</label>
                </div>
                <div class="col form-floating">
                    <input type="text" name="lname" class="form-control" placeholder="Lastname" value="<?php echo $lastname ?>">
                    <label for="lname">Lastname</label>
                </div>
                <div class="col form-floating">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
                    <label for="email">Email</label>
                </div>
                <div class="col form-floating">
                    <input type="tel" name="contact" class="form-control" placeholder="Contact Number" maxlength="15" value="<?php echo $contact ?>">
                    <label for="contact">Contact Number</label>
                </div>
                <div class="col form-floating">
                    <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $city ?>">
                    <label for="city">City</label>
                </div>
                <div class="col form-floating">
                    <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $address ?>">
                    <label for="address">Address</label>
                </div>
                
            </div>
            <div class="row buttons mt-3">
                <div class="col">
                    <button type="button" class="btn btn-dark w-100" onclick="cancel()">
                        Cancel
                    </button>
                    <script>
                        function cancel() {
                            window.location.href = "admin_page.php";
                        }
                    </script>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary d-block w-100" name="update">Update</button>
                </div>
            </div>
        </fieldset>
        </form>
        <div class="col">
            <img src="<?php echo "director/resume/".$resume; ?>" alt="A document file" class="resume">
        </div>
        </div>
    </div>
</body>
</html>