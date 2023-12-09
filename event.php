<?php
$conn = mysqli_connect("localhost", "root", "", "upload");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Jaikranti</title>
    <link rel="icon" href="http://jaikranticollege.com/Design/extra-images/logo_2.png" type="image/png" />
  </head>
  <body>

  <!--Nav Bar -->
  <link rel="stylesheet" href="nav.css">
    <header>
        <div class="containe">
            <nav class="navbar">
                <a href="" class="nav-branding"><img class="navimg"
                        src="http://jaikranticollege.com/Design/extra-images/logo_2.png" alt="jkc" /></a>
                <h1>
                    <b><a href="#" class="name"><u>Jaikranti College</u></a></b>
                </h1>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html"><i class="fa-solid fa-house fa-sm"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="streams.html"><i
                                class="fa-sharp fa-solid fa-graduation-cap fa-sm"></i>Stream</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="addmission.html"><i
                                class="fa-solid fa-building-columns fa-sm"></i>Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php"><i class="fa-solid fa-calendar-week fa-sm"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.html"><i class="fa-solid fa-comment fa-sm"></i> Feedback</a>
                    </li>
                    <li class="nav-item">
                        <div class="about">
                            <a class="nav-link" href="about.html"><i class="fa-sharp fa-solid fa-circle-info fa-sm"></i>
                                About</a>
                            <div class="inner">
                            <a href="FACULTY.html"> <i class="fa-solid fa-users"></i> Faculty</a>
                            <a href="feature.html"> <i class="fa-solid fa-star"></i> Features</a>
                            </div>
                        </div>
          </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"><i class="fa-solid fa-phone fa-sm"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html"><i class="fa-solid fa-user fa-sm"></i>Admin</a>
                    </li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
    <script src="./script.js"></script>


    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Arial;
        }
        body{
            background: linear-gradient(to bottom right, #86fcfc 0%, #fb60bd 100%);
        }
        .header{
            /* margin-top:-5px; */
        }
        .header img {
            /* border:1px solid black; */
            width:100%;
        }
        .header .con{
            position: absolute;
            top: 30%;
            right: 40%;
            left: 20%;
            transform: translate(50%-50%);
            color: black;
            text-align: center;
            /* border:1px solid black; */
            width:450px;
            font-weight: 500;
            font-style: italic;
        }
        .header .con h1{
            font-size: 50px;
            margin-bottom: 20px;
        }
        .header .con span{
            font-size:20px;
        }
        .container{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-gap: 20px;
            margin-left: 180px;
        }
        .item{
            display:block;
            margin-top:20px;
            /* border:1px solid black; */
            width:450px;
            height:400px;
            box-shadow: rgba(0, 0, 0, 0.315) 4px 4px 5px 5px;
            /* box-shadow: 10px 10px 20px #ddd; */
            border-radius: 15px;
            padding:10px;
            background-color:white;
        }
        .item .con{
            margin:8px;
            margin-top:0.5px;
            height: 75px;
            background-color:rgba(247, 218, 176, 0.795);
            padding:5px;
            width:420px;
            margin-top:300px;
            border-radius:8px;
            display:none;
            font-weight:bold;
        }
        .item:hover .con{
            display:block;
            position:relative;animation:animatebottom 0.8s;
        }
        @keyframes animatebottom{
            from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}
        }
        
        
    </style>
    <!--event -->
    <div class="header">
        <img src="https://i.ibb.co/3dqN9NZ/Whats-App-Image-2023-07-02-at-11-27-47-AM.jpg" alt="">
        <div class="con">
        <h1>Event Page</h1>
        <span>
          College lnfrastructure, Corporater Get Togethers,
          Alumni Meet, Outbound Trip,
          Induction, Foundation Day Celebration, Batch Farewell, NSS.
        </span>
        </div>
    </div>
    <div class="container">
        <?php
            $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC");
        ?>

        <?php while ($row = mysqli_fetch_assoc($rows)) : ?>
            <div class="item" style="background-image: url('img/<?php echo $row["image"]; ?>'); background-size: cover; background-position: center;">
                <div class="con"> <?php echo $row["name"]; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
  </body>
</html>
    <!-- footer -->
<link rel="stylesheet" href="footer.css">
<footer>
    <center>
        <div class="footcon">
            <div class="footcol">
                <div class="subcol">
                    <ul type="none">
                        <a href="home.html" class="footli">
                            <li>Home</li>
                        </a>
                        <a href="about.html" class="footli">
                            <li>About Us</li>
                        </a>
                        <a href="streams.html" class="footli">
                            <li>Streams</li>
                        </a>
                        <a href="" class="footli">
                            <li>Placements</li>
                        </a>
                        <a href="addmission.html" class="footli">
                            <li>Admission</li>
                        </a>
                        <a href="feature.html" class="footli">
                            <li>Facilities</li>
                        </a>
                        <a href="" class="footli">
                            <li>Powered By Developers</li>
                        </a><br>
                        <a href="contact.html" class="footli">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>

                <div class="subcol">
                    <ul type="none">
                        <li>
                            <p class="footpara">Jaikrant College Of Computer Science & Management Studies. <br><br> BRT
                                Bus
                                Stand
                                Katraj Pune <br>Tal:
                                Haveli (corporation Area) <br>Dist: Pune Pincode: 411046</p>
                        </li><br>
                        <li>
                            <p class="footpara">Phone: (020) 24317168</p>
                        </li>
                        <li>
                            <p class="footpara"> Email: <a href="" class="email">principal@jaikranticollege.com</a>
                            </p>
                        </li>
                        <ul></ul>
                </div>
            </div>


            <div class="footcol">
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2202.2414088267255!2d73.85683946855102!3d18.44672941970081!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eaea485f3abb%3A0xc0dca6d9b2adb08e!2sJaikranti%20College!5e0!3m2!1sen!2sin!4v1688126970648!5m2!1sen!2sin"
                    width="500" height="200" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </center>
</footer>

  </body>
</html>
