<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/4acb7377c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css12/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        /* Styling for the container holding the video */
        .video-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #f4f4f4;
        }

        /* Styling for making the video responsive */
        .video-wrapper {
            position: relative;
            width: 100%;
            max-width: 800px;
            /* You can set this to the max width you want for the video */
            height: 0;
            padding-bottom: 56.25%;
            /* Aspect ratio 16:9 */
        }

        .video-wrapper iframe,
        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>

<body>
    <section id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img style="height:5rem; width:7rem;" src="img/IMG-20240729-WA0021-removebg-preview.png" alt=""></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item text-dark"><a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item text-dark"><a class="nav-link" href="{{url('/gallery')}}">Gallery</a></li>
                    </ul>
                    <form class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success" type="submit">Search</button></form>
                </div>
            </div>
        </nav>
    </section>
    <section class="container-fluid" id="intro">
        <img class="top-right-img" src="img/IMG-20240729-WA0021.jpg" alt="" data-aos="fade-left" data-aos-duration="1500">

        <div data-aos="fade-up" data-aos-duration="1500">
            <div class="text-top">
                <h1 class="highlighted-text"><span style="color:#ffadad">Making</span><span style="color:black">better</span></h1>
                <h1 class="highlighted-text" style="margin-left:2rem; margin-top: 0rem;"><span style="color:#745ef0">Tomorrow</span></h1>
            </div>

            <div style="
 background-image: url(../img/wallpaper.webp);
        background-position: center;
        background-size:auto;
        " class="col-md-6 col-lg-6 col-sm-12">
                <div data-aos="fade-up" data-aos-duration="1500"></div>
            </div>
        </div>
    </section>
    <section class="container-fluid intro-section">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6" data-aos="fade-right" data-aos-duration="1500">
                <h2 class="intro-section-h2">By Education</h2>
                <h4 class="intro-section-h4">I mean an <br>all-round drawing <br>of the best in child <br>and man in body ,mind and spirit- <span style="color: grey; font-style: italic;">Mahatma Gandhi</span></h4>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6" data-aos="fade-left" data-aos-duration="1500">
                <img class="second-logo" src="img/IMG-20240729-WA0021.jpg" alt="">
            </div>
        </div>
        <p class="intro-section-p" data-aos="fade-up" data-aos-duration="1500">Preschool plays a crucial role in a child's early development, laying the foundational skills necessary for future academic and social success. During these formative years, children experience rapid cognitive, emotional, and social growth. A
            high-quality preschool program provides a structured environment where young learners can engage in activities that enhance their language abilities, critical thinking, and problem-solving skills. Additionally, preschool fosters socialization
            by encouraging children to interact with peers, navigate group dynamics, and develop essential social skills such as sharing and empathy. This early exposure to structured learning and social environments helps ease the transition to primary
            school, making children more adaptable and confident. Ultimately, investing in preschool education sets the stage for lifelong learning and personal development, equipping children with the tools they need to thrive in an increasingly complex
            world. </p>
    </section>
    <h3 style="text-align: center;">Our Gvmr ❤️</h3>
    <section class="video-section">

        <iframe src="https://player.vimeo.com/video/1003987298?autoplay=1&muted=1&badge=0&autopause=0&player_id=0&app_id=58479" width="506" height="900" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" title="GVMR School (1)"></iframe>
    </section>

    <section class="container-fluid why">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12" data-aos="fade-right" data-aos-duration="1500">
                <h2 style=" color: beige;">Why GVMR <i class="fa-solid fa-school fa-flip"></i>?</h2><br><br><br><br><br><br>
                <img class="rainbow" src="img/2deacf2918d8d5acf75d1ee36532e2c5.png" alt="" data-aos="zoom-in" data-aos-duration="1500">
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12" data-aos="fade-left" data-aos-duration="1500">
                <div style=" background: linear-gradient(to right, #cfe6fa, #cecede, #fb7e7e); margin-left:4rem; box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px;" class="points">
                    <p><i class="fa-solid fa-school fa-flip"></i><br>Homely Environment in a beautiful locality.</p>
                </div>
                <div style=" background: linear-gradient(to right, #cfe6fa, #cecede, #f8f68c); box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; margin-right:5rem; margin-top: 2rem;" class="points"><i class="fa-brands fa-soundcloud fa-flip"></i><br>Modern mini theater and audio-visual room. </div>
                <div style=" background: linear-gradient(to right, #cfe6fa, #cecede, #82febc); box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; margin-left:4rem; margin-top: 2rem;" class="points"><i class="fa-solid fa-brain fa-flip"></i><br>Focusing on different skills. </div>
                <div style=" background: linear-gradient(to right, #cfe6fa, #cecede, #bacff1); box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; margin-right:5rem; margin-top: 2rem;" class="points"><i class="fa-solid fa-person-dress fa-flip"></i><br>Exclusive female staff. </div>
                <div style=" background: linear-gradient(to right, #cfe6fa, #cecede, #fccde2); box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; margin-left:4rem; margin-top: 2rem;" class="points"><i class="fa-solid fa-school fa-flip"></i><br>Fully air conditioned campus </div>
                <div style=" background: linear-gradient(to right, #cfe6fa, #cecede, #f17c7c); box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; margin-right:5rem; margin-top: 2rem;" class="points"><i class="fa-solid fa-school fa-flip"></i><br>Qualified and experienced academic facilitators. </div>
            </div>
        </div>
    </section>
    <section class="container-fluid campus">
        <h2 style="text-align: center; padding: 3rem;" data-aos="fade-up" data-aos-duration="1500">Our Campus</h2>
        <p class="campus-p" style="  box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px;" data-aos="fade-up" data-aos-duration="1500">GVMR campus is designed to allow learning to take place in a stimulating and safe environment... </p>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12" data-aos="fade-left" data-aos-duration="1500">
                <img class="teacher-image" src="img/transparent-little-girl-girl-happily-plays-with-building-blocks-tower65e5a477aed781.6325153917095486637162.png" alt="">
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1500">
                <h4 style=" padding: 1rem;">Social Skills </h4>
                <ul style=" background: linear-gradient(to right, #cfe6fa, #cecede, #fffafa);  box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; padding: 2rem;">
                    <li>Ask for help.</li>
                    <li>Develop a healthy relationship.</li>
                    <li>Protect themselves.</li>
                    <li>Interact with society.</li>
                </ul>
                <h4 style=" padding: 1rem;">Self-Help Skills </h4>
                <ul style=" background: linear-gradient(to right, #cfe6fa, #e0b485, #fffafa);  box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; padding: 2rem;">
                    <li>Self-feeding.</li>
                    <li>Independent dressing and grooming.</li>
                    <li>Hygiene and toileting.</li>
                    <li>Interact with society.</li>
                </ul>
                <h4 style=" padding: 1rem;">Cognitive Skills </h4>
                <ul style=" background: linear-gradient(to right, #cfe6fa, #87dcdc, #fffafa);   box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; padding: 2rem;">
                    <li>Exercise the sequences of actions.</li>
                    <li>Develop a healthy relationship.</li>
                    <li>Identify colors and shapes.</li>
                    <li>Interact with society.</li>
                </ul>
                <h4 style="padding: 1rem;">Gross Motor Skills </h4>
                <ul style=" background: linear-gradient(to right, #cfe6fa, #d8b3c9, #fffafa);  box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; padding: 2rem;">
                    <li>Can jump with feet.</li>
                    <li>Can ride a tricycle.</li>
                    <li>Catches a ball reliably.</li>
                </ul>
            </div>
        </div>
    </section>
    <section style="background-color: #99fcb4e6;" class="container-fluid sports">
        <h1 class="text-success" style=" padding: 3rem;">Facilities</h1>
        <div class="row">

            <img class="players" src="img/bc644df543f95bd1dd424728305e559c.png" alt="">
            <div class="facility" style="background-color: white; border-radius: 3rem; padding:5rem 0rem;" class="text-dark col-md-6 col-lg-6 col-sm-12">
                <p>Welcome to GVMR International School, Mowa, Raipur, Chhattisgarh, India. where learning is a joyful journey. We integrate Jolly Phonics, Karate, dance, yoga, and art and craft into our curriculum to nurture holistic development. Our vibrant
                    school culture embraces competitions and celebrates all festivals, fostering cultural understanding. Students enjoy educational visits to various places like malls and museums, enriching their learning through audio-visual experiences.
                    At GVMR International School, every day is filled with exploration, creativity, and meaningful learning experiences </p>
                <p>At GVMR International School, we are committed to nurturing young minds and fostering holistic development through a blend of modern and traditional educational practices</p>
                <p>Key Highlights:</p>
                <ul>
                    <li>
                        <p>
                            <strong>Jolly Phonics:</strong> Our Jolly Phonics program uses a fun and interactive method to teach children the foundational skills of reading and writing through sounds and actions.
                        </p>
                    </li>
                    <li>
                        <p><strong>Karate:</strong> We offer karate classes to promote physical fitness, self-discipline, and confidence in our students, helping them develop both mentally and physically.</p>
                    </li>
                    <li>
                        <p><strong>Dance: </strong> dance program encourages students to express themselves creatively while improving their coordination, flexibility, and cultural appreciation.. </p>
                    </li>
                    <li>
                        <p>
                            <strong>Yoga:</strong> Yoga sessions at GVMR help students achieve mental clarity, physical well-being, and emotional balance, fostering a peaceful and focused mind.
                        </p>
                    </li>
                    <p>
                        <Strong>Art and Craft:</Strong> We provide a vibrant art and craft curriculum that inspires creativity, enhances fine motor skills, and allows students to explore their artistic potential.
                    </p>
                    </li>
                </ul>
                <p>Inspiring Excellence, Nurturing Potential, Creating Leaders of Tomorrow.</p>
                <p>Join GVMR International School, where education meets excellence, and every child is prepared to succeed in a dynamic world</p>
            </div>
        </div>
    </section>
    <header>
        <div class="row">
            <div style=" box-shadow: 0px 10px 40px rgb(239, 173, 85); border-radius: 20px; border-radius: 3rem;" class="bg-light col-sm-12 col-lg-6 col-md-6">
                <h1 class="text-success" style="font-style: italic;">Visit Us</h1>
                <p>We solemnly invite parents and their children to visit the campus to experience the GVMR learning and playing area.</p>
                <p>Parents are welcomed to contact us at our registration desk for their queries. We welcome them with their wards to our campus for a visit.</p>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 "><img class="header-image" style="height: 15rem; width: 14rem; " src="img/exercise-unscreen.gif " alt="Student studying "></div>
        </div>
    </header>
    <div class="container-fluid ">
        <div class="map-container "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.0937352506508!2d81.67293067472083!3d21.26775687952803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dddf4379ed85%3A0x237be61277e4d055!2sGVMR%20International%20Play%20School!5e0!3m2!1sen!2sin!4v1724921494874!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="info ">
            <div style=" background: linear-gradient(to right, #87c7ff, #60609b, #ffc8c8); box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; border-radius: 3rem; " class="info-item ">
                <h2 class="text-light " style="margin-top: 3rem; margin-left: 2rem; ">Our Location</h2>
                <p class="text-light " style="margin-left: 2rem; ">Beside orange city, Mowa main road, Mowa, Raipur, Chhattisgarh
                </p>
                <p class="text-light " style="margin-left: 2rem; ">Phone:+91 9109001099</p>
                <p class="text-light " style="margin-left: 2rem; ">Email:gvmrinternational@gmail.com</p>
            </div>
            <div style=" background: linear-gradient(to right, #87c7ff, #60609b, #ffc8c8); box-shadow: 0px 10px 40px rgb(215, 218, 249); border-radius: 20px; border-radius: 3rem; padding: 3rem; " class="info-item ">
                <h2 class="tex-light " style="color:white; ">Directions</h2>
                <p class="tex-light " style="color:white; ">Our office is located in the heart of the city, just a short walk from the main transportation hub. Parking is available in the nearby public garage.</p>
                <p class="tex-light " style="color:white; ">If you need any help finding us, don't hesitate to give us a call!</p>
            </div>
        </div>
        <div class="hours ">
            <h2>Office Hours</h2>
            <table class="hours-table ">
                <tr>
                    <th>Day</th>
                    <th>Hours</th>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>9:00 AM - 1:30 PM</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>9:00 AM - 1:30 PM</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>9:00 AM - 1:30 PM</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>9:00 AM - 1:30 PM</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>9:00 AM - 1:30 PM</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>9:00 AM - 1:00 PM</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Closed</td>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js "></script>
    <script>
        AOS.init();
    </script>
</body>

</html>