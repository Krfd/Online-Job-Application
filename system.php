<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Application Form</title>

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

        <link type="icon" rel="icon" href="background/Information Technology.png" />

        <!-- External CSS-->
        <link rel="stylesheet" href="apply.css" />
    </head>
    <body>
        <div class="container-fluid main">
            <div class="container top">
                <div class="title">
                    <h1>PHINMA - Online Job Application for IT Graduates</h1>
                </div>
                <div class="navbar-brand">
                    <img src="background/Information Technology.png" alt="logo" class="logo" />
                </div>
            </div>
            <hr />
            <?php
            include "slots.php";

            $sql = "SELECT * FROM slots";
            $result = mysqli_query($conn, $sql);

            if($result) {
                while($row = mysqli_fetch_array($result)) {
                    $system = $row['system'];
                }
            }

            ?>
            <div class="container position">
                <h2>System Engineer | <?php echo $system; ?> slots</h2>
                <br>
                <h3>Job Description</h3>
                <p>
                    A Systems Engineer, or System Engineer, is in charge of designing, implementing and maintaining the information technology systems for an organization. 
                    Their duties include designing the basic computing infrastructure to accomplish key tasks, establishing networking rules for cybersecurity and troubleshooting network errors or other technical issues.
                </p>
                <br>
                <h3>Qualifications</h3>
                <ul>
                    <li>Candidates need creativity to imagine innovative, effective new solutions and designs.</li>
                    <li>Logic and reasoning are important when troubleshooting difficult issues.</li>
                    <li>Candidates must be able to develop solutions to problems, as well as manage multiple issues at the same time.</li>
                    <li>Understanding and appropriately responding to feedback is an important aspect of this position.</li>
                    <li>Calculus, trigonometry and other advanced math skills are commonly used in analysis and design.</li>
                    <li>Both oral and written communication skills are vital to relaying important information, training new staff members and communicating about solutions to complex problems.</li>
                </ul>
            </div>
            <div class="container position">
                <h2>Application Form</h2>
            </div>
            <div class="container form">
                <form
                    action="systems.php"
                    method="post"
                    enctype="multipart/form-data"
                    class="application"
                >
                    <fieldset>
                        <div class="row">
                            <div class="col">
                                <label for="fname">*First Name</label>
                                <input
                                    type="text"
                                    name="fname"
                                    placeholder="First Name"
                                    class="form-control"
                                    required
                                    maxlength="50"
                                />
                            </div>
                            <div class="col">
                                <label for="lname">*Last Name</label>
                                <input
                                    type="text"
                                    name="lname"
                                    placeholder="Last Name"
                                    class="form-control"
                                    required
                                    maxlength="50"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">*Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Email"
                                    class="form-control"
                                    required
                                    maxlength="50"
                                />
                            </div>
                            <div class="col">
                                <label for="contact">*Contact</label>
                                <input
                                    type="tel"
                                    name="contact"
                                    placeholder="Contact Number"
                                    class="form-control"
                                    required
                                    maxlength="11"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="city">*City</label>
                                <input
                                    type="text"
                                    name="city"
                                    placeholder="City"
                                    class="form-control"
                                    required
                                    maxlength="50"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="address">*Home Address</label>
                                <input
                                    type="text"
                                    name="address"
                                    placeholder="Home Address"
                                    class="form-control"
                                    required
                                    maxlength="50"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea
                                    name="message"
                                    cols="30"
                                    rows="10"
                                    class="form-control"
                                    placeholder="Additional Info"
                                    maxlength="250"
                                ></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group">
                                <input
                                    type="file"
                                    name="resume"
                                    class="form-control"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col buttons">
                                <button type="reset" class="btn btn-dark w-25">
                                    Reset
                                </button>
                                <button
                                    type="submit"
                                    name="apply"
                                    class="btn btn-dark w-25"
                                >
                                    Submit
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div class="container apply">
                    <div class="content">
                        <h2>Online Job Application</h2>
                        <small
                            >Developed by:
                            <span class="highlight"
                                >Karl Fredriech Getuya</span
                            ></small
                        >
                        <br />
                        <br />
                        <p>
                            <span class="highlight"
                                >Online Job Application</span
                            >
                            has developed a platform which aims to help and
                            provide a job application for its fresh grad
                            students taken a course of IT to apply for a job
                            that suits to them according to what skils they
                            possessed. In this matter, the <span class="highlight">Company</span> encourage
                            every IT fresh graduates to visit this new website
                            due to the opportunities offered by the partnered
                            comapanies of the said university.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container">
            <div class="container">
                <div class="container footer">
                    <div class="phinma">
                        <span class="highlight">Karl.</span>
                    </div>
                    <div class="links">
                        <a
                            href="https://www.facebook.com"
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
                        <a
                            href="https://discord.com"
                        >
                            <img
                                src="icons/discord.png"
                                alt="Discord"
                                class="disc img"
                        /></a>
                        <a href="mailto:karlfredriechgetuya@gmail.com"
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
