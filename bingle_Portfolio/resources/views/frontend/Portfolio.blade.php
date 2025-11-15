<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #1e1e1e; 
            color: #ffffff; 
            font-family: 'Roboto Mono', monospace;
        }

        .navbar {
            background-color: #333 !important;
        }

        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }

        .nav-link:hover {
            color: #4ecdc4 !important; 
        }

        .hero-section {
            background: linear-gradient(135deg, #2c3e50, #4ca1af); 
            padding: 150px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            animation: typing 3s steps(30, end);
            overflow: hidden;
            white-space: nowrap;
            margin: 0 auto;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .hero-section .btn {
            font-size: 1.2rem;
            padding: 10px 30px;
            border-radius: 25px;
        }

        .btn-custom-1 {
            background-color: #4ecdc4; 
            border-color: #4ecdc4;
            color: white;
        }

        .btn-custom-1:hover {
            background-color: #3d9b94; 
            border-color: #3d9b94;
        }

        .btn-custom-2 {
            background-color: #ff6b6b; 
            border-color: #ff6b6b;
            color: white;
        }

        .btn-custom-2:hover {
            background-color: #ff4757; 
            border-color: #ff4757;
        }

        .about-section, .projects-section, .skills-section, .contact-section {
            padding: 80px 0;
        }

        .skill-card {
            text-align: center;
            margin-bottom: 20px;
        }

        .skill-icon {
            font-size: 3rem;
            color: #4ecdc4;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: white;
        }

        .card {
            background-color: #2c3e50;
            color: white;
            margin-bottom: 20px;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 40px auto;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: #2c3e50;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .progress {
            height: 20px;
            margin-top: 10px;
            background-color: #1e1e1e;
        }

        .progress-bar {
            background-color: #4ecdc4;
        }

        .contact-section form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-control {
            background-color: #2c3e50;
            border: 1px solid #4ecdc4;
            color: white;
            margin-bottom: 15px;
        }

        .form-control:focus {
            background-color: #2c3e50;
            color: white;
            border-color: #4ecdc4;
            box-shadow: 0 0 0 0.2rem rgba(78, 205, 196, 0.25);
        }

        .social-media a {
            color: white;
            font-size: 2rem;
            margin: 0 10px;
        }

        .social-media a:hover {
            color: #4ecdc4;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="bingle.jpg" alt="Dangangao's Profile Picture" class="img-fluid profile2-img">
                </div>
                <div class="col-md-6">
                    <h1 class="typing-animation"></h1>
                    <p class="subtitle">As a passionate Computer Science student specializing in Software Development, I like designing and building web and mobile apps that solve real problems and make life easier.</p>
                    <a href="#about" class="btn btn-custom-1">Learn More About Me</a>
                </div>
            </div>
        </div>
    </section>
    

    <section id="about" class="about-section">
        <div class="container">
            <h2 class="text-center">About Me</h2>
            <p class="text-center">I'm Bingle John Dangangao, a Computer Science 2nd year student. Studying at City College of Angeles, I'm excited about exploring new technologies and pursuing internships that will allow me to further develop my skills.</p>
            <div class="timeline">
                <div class="timeline-item">
                    <h3>2025 - Present</h3>
                    <p>Studying Computer Science at City College Of Angeles.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="text-center mb-5">Projects</h2>
            <div class="row">
                
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://i.imgur.com/zleMeGG.png" class="card-img-top" alt="Creative Bootstrap 5.3 Showcase">
                        <div class="card-body">
                            <h5 class="card-title">Creative Bootstrap 5.3 Showcase</h5>
                            <p class="card-text">
                                
                            </p>
                            
                            <a href="https://classroom.google.com/u/2/c/NzM2NzY3NjYwMDk4/a/NzU1NjAyNjc0ODcz/details" target="_blank" class="btn btn-custom-2">Live Demo</a>
                        </div>
                    </div>
                </div>
    
                
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://i.imgur.com/ZtgVjuI.png" class="card-img-top" alt="JavaScript Login Page">
                        <div class="card-body">
                            <h5 class="card-title">JavaScript Login Page</h5>
                            <p class="card-text">
                                
                            </p>
                            
                            <a href="https://classroom.google.com/u/2/c/NzM2NzY3NjYwMDk4/a/NzUyNDkxNTYzNTQw/details" target="_blank" class="btn btn-custom-2">Live Demo</a>
                        </div>
                    </div>
                </div>
    
                
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://i.imgur.com/dzyouze.png" class="card-img-top" alt="Bootstrap x JS">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap x JS</h5>
                            <p class="card-text">   
                                
                            </p>
                            
                            <a href="https://classroom.google.com/u/2/c/NzM2NzY3NjYwMDk4/a/NzYwMDAxODcwMjIw/details" target="_blank" class="btn btn-custom-2">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="text-center">Skills</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="skill-card">
                        <i class="fab fa-js-square skill-icon"></i>
                        <p>JavaScript</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;">60%</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill-card">
                        <i class="fab fa-python skill-icon"></i>
                        <p>Python</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;">65%</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill-card">
                        <i class="fab fa-html5 skill-icon"></i>
                        <p>HTML/CSS</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;">70%</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="skill-card text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/C_Programming_Language.svg" alt="C Language" class="skill-icon" style="width: 50px; height: 50px;">
                        <p>C Language</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <form id="contact-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom-1">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="text-center py-3 bg-dark text-white">
        <p>Copyright © Bingle John Dangangao 2025</p>
        <div class="social-media text-center mt-4">
            <a href="https://www.facebook.com/share/1BhpfBvuqE/" target="_blank" class="mr-3"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/bnl.chnn/" target="_blank" class="mr-3"><i class="fab fa-instagram"></i></a>
            <a href="mailto:binglejohndangangao@gmail.com" target="_blank">
                <i class="fas fa-envelope"></i>
              </a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form submitted successfully!');
            this.reset();
        });

        const text = "Hello, I'm Bingle.";
        let i = 0;
        const speed = 100;

        function typeWriter() {
            if (i < text.length) {
                document.querySelector(".typing-animation").textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }

        window.addEventListener('load', function() {
            document.querySelector(".typing-animation").textContent = "";
            typeWriter();
        });
    </script>
        <script>
            document.getElementById("year").textContent = new Date().getFullYear();
            
            document.getElementById("contactForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let name = document.getElementById("name").value.trim();
                let email = document.getElementById("email").value.trim();
                let subject = document.getElementById("subject").value.trim();
                let message = document.getElementById("message").value.trim();
        
                if (name === "" || email === "" || subject === "" || message === "") {
                    alert("All fields are required.");
                    return;
                }
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    alert("Please enter a valid email address.");
                    return;
                }
                alert("Message sent successfully!");
                document.getElementById("contactForm").reset();
            });
        </script>

</body>
</html>
