<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <title>Mary Josette Academy</title>
    <link rel="stylesheet" href="landing-page2-style.css"/>
    <link rel="icon" href="img/mja-logo.png" type="image/x-icon"/>
</head>
<body>
    <div class="main-bg">
        <header>
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-lg bg-brown navbar-dark py-3 fixed-top">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <a href="#home" class="logo-container">
                            <img src="img/mja-logo.png" alt="Mary Josette Academy" style="width: 50px; height: 50px; margin-right: 10px; margin-top: 5px;">
                        </a>
                        <div class="d-flex flex-column">
                            <a href="#" class="navbar-brand fw-bold">Mary Josette Academy</a>
                            <small class="navbar-address">Tigbe, Norzagaray, Bulacan, Philippines, 3013</small>
                        </div>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse navbar-collapse-center" id="navmenu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="#home" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contacts" class="nav-link">Contacts</a>
                            </li>
                            <button class="btn btn-custom-yellow ms-2" onclick="window.location.href='login.php'">Sign In</button>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    

        <!-- HOME -->
        <main id="home">
            <section class="welcome"> 
                <div>
                <h1 class="big-welcome">Welcome back to Evalu8, <br>MJAIANS!</h1>
                <p class="quote">“Evaluation is not just a measurement tool; it's a compass guiding continuous<br> improvement in education.”</p>
                <br><br><br><br><br>
                <button 
                    style="
                        background-color: #fdd835; 
                        color: #333; 
                        border: none; 
                        border-radius: 5px; 
                        font-size: 16px; /* Base font size */
                        font-weight: bold; 
                        padding: 10px 20px; /* Base padding */
                        text-align: center; 
                        text-decoration: none; 
                        display: inline-block; 
                        transition: background-color 0.3s, transform 0.3s;
                        width: auto; /* Allows button width to adjust based on content */
                        max-width: 100%; /* Ensures button doesn't exceed container width */
                        box-sizing: border-box;" /* Includes padding and border in the element’s total width and height */

                    onclick="window.location.href='login.php'">
                    Sign In to Faculty Evaluation
                </button>
                </div>
            </section>

    </div>

             <!-- ABOUT -->
            <section id="about" class="about">
                <div class="container">
                    <div class="about-text">
                        <h2>About</h2>
                        <p>
                            Mary Josette is a family corporation headed by the late Brgy. Capt Jose Sp
                            Gravador Sr, the corporate president then and Mrs. Remedios SM Gravador, a public
                            elementary school Principal that time. Year 2004 when it was opened, with only three
                            teachers and thirty-eight students in Pre-Elem and Grade One. With that felt need of
                            the community to send their High School children at a nearer school, a secondary
                            course was oragnized 2007, 3 years after its opening and was recognized by the
                            government 2009.<br><br>
                            The ultimate aims of the administrators are to cater the young pupils with a quality
                            education at a very affordable tuition fee and to help the marginalized community
                            having an institution where they could finish secondary schooling at less expense,
                            effort and time<br><br>
                            Fortunately, MJA has been enjoying the government subsidy, FAPE-ESC for 13 years,
                            and SHS voucher Program for 6 years. To meet the goals of the school, MJA continues
                            to gear towards excellence by adhering to its Vision and Mission of providing quality
                            and descent education with very affordable tuition fees.
                        </p>
                    </div>
                    <img src="img/about.png" alt="about">
                </div>
            </section>
        </main>

         <!-- CONTACTS -->
        <footer id="contacts">
            <div class="container">
                <div class="contacts">
                    <h3>Contacts</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <h4>Address</h4><br>
                            <p>Mary Josette Academy</p>
                            <p>Mataas na Kahoy</p>
                            <p>Tigbe, Norzagaray</p>
                            <p>Bulacan, Philippines 3013</p>
                        </div>
                        <div class="contact-item">
                            <h4>Contact Number</h4><br>
                            <p>Mobile</p>
                            <p>0917 526 9933</p>
                        </div>
                        <div class="contact-item">
                            <h4>School Hours</h4><br>
                            <p>Monday - Friday</p>
                            <p>6:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
