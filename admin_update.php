<?php 

include "admin.php";

if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM admin1 WHERE id = $id";
    $check = mysqli_query($conn, $sql);

    if($check) {
        while($row = mysqli_fetch_array($check)) {
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];

            if(isset($_POST['update'])) {

                $uname = $_POST['uname'];
                $pass = $_POST['pass'];

                $encrypted = md5($pass, TRUE);

                $update = mysqli_query($conn, "UPDATE admin1 SET username = '$uname', password = '$encrypted' WHERE id = $id");

                if($update == TRUE) {
                    ?>
                    <script>
                        alert("Admin updated successfully");
                        window.location.href = "admin_page.php";
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Admin update failed");
                        window.location.hreef = "admin_page.php";
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
    <title>Updating Bootcamp Enrollment Information</title>

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
        <h2>Admin Update</h2>
        <form method="post">
            <fieldset>
                <div class="col">
                    <div class="col">
                            <label for="uname">Username</label>
                            <div class="col">
                            <input type="text"
                            name="uname"
                            class="form-control"
                            placeholder="Username"
                            required
                            autocomplete="off"
                            value="<?php echo $username; ?>"
                            />
                            </div>
                    </div>
                    <br>
                    <div class="col">
                            <label for="pass">Password</label>
                            <div class="col">
                            <input type="password"
                            id="password"
                            name="pass"
                            class="form-control"
                            placeholder="Password"
                            required
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one UPPERCASE 
                   and lowercase letter, and at least 8 or more characters."
                            autocomplete="off"
                            value="<?php echo $password;
                            ?>"
                            />
                            </div>
                            <input type="checkbox" onclick="show()"> Show Password
                            <script>
                                function show() {
                                    var x = document.getElementById("password");

                                    if(x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
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