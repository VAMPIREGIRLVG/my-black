<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aamir Akram | Software Engineer & Security Researcher</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    :root {
      --primary: #0d6efd;
      --bg: #080808;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      scroll-behavior: smooth;
      background-color: var(--bg);
      color: #fff;
    }

    a {
      text-decoration: none;
    }

    /* Navbar */
    .navbar {
      background-color: #111;
    }

    .navbar .nav-link {
      color: #fff;
    }

    .navbar .nav-link:hover {
      color: var(--primary);
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
                  url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1950&q=80') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 120px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
    }

    /* Sections */
    section {
      padding: 80px 0;
    }

    /* Cards */
    .card img {
      height: 200px;
      object-fit: cover;
    }

    /* Footer */
    footer {
      background: var(--primary);
      color: white;
      padding: 40px 0;
      text-align: center;
    }

    /* Certifications */
    .badge-container {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
    }

    .badge {
      background-color: var(--primary);
      color: #fff;
      padding: 10px 15px;
      border-radius: 5px;
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }
      section {
        padding: 60px 5%;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">SE Hub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="#certs">Certifications</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="container">
      <h1>Software Engineering Solutions</h1>
      <p>Building scalable, secure, and modern applications</p>
      <a href="#services" class="btn btn-primary btn-lg">Explore More</a>
    </div>
  </section>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <h2 class="text-center mb-5">Our Expertise</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Web Development">
            <div class="card-body">
              <h5 class="card-title">Web Development</h5>
              <p class="card-text">Modern, responsive, and high-performance web apps.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Backend Engineering">
            <div class="card-body">
              <h5 class="card-title">Backend Engineering</h5>
              <p class="card-text">Secure APIs, databases, and scalable systems.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1504639725590-34d0984388bd?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="DevOps & Cloud">
            <div class="card-body">
              <h5 class="card-title">DevOps & Cloud</h5>
              <p class="card-text">CI/CD, cloud deployment, and infrastructure automation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section id="news" class="bg-light text-dark">
    <div class="container">
      <h2 class="text-center mb-5">Latest Tech News</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">AI in Software Engineering</h5>
              <p class="card-text">How AI is transforming coding, testing, and deployment.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Cloud Native Apps</h5>
              <p class="card-text">Why microservices and containers dominate modern systems.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Cybersecurity Trends</h5>
              <p class="card-text">Security-first development is no longer optional.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section id="experience">
    <div class="container">
      <h2 class="text-center mb-5">Verified Experience</h2>
      <div class="card p-4 mb-4">
        <h3>Cybersecurity Intern • YHills</h3>
        <p style="color: var(--primary); margin-bottom: 1rem;">March 2025 — May 2025</p>
        <p>Executed ethical hacking techniques and vulnerability assessments in simulated real-world scenarios.</p>
      </div>
    </div>
  </section>

  <!-- Certifications Section -->
  <section id="certs">
    <div class="container">
      <h2 class="text-center mb-4">Professional Certifications</h2>
      <div class="badge-container">
        <div class="badge">Red Team Mastery</div>
        <div class="badge">Black Hat Python (2025)</div>
        <div class="badge">HackerOne Verified</div>
        <div class="badge">SQLi Specialist</div>
        <div class="badge">Deep Web & Cyber Intelligence</div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center mb-5">Contact Me</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <input class="form-control mb-3" placeholder="Your Name" required>
            <input class="form-control mb-3" placeholder="Your Email" type="email" required>
            <textarea class="form-control mb-3" placeholder="Message" rows="5" required></textarea>
            <button class="btn btn-primary w-100" type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>Located in Roorkee, Uttarakhand, India</p>
    <p>aamirakram252003@gmail.com • 9368209325</p>
    <p style="margin-top: 1rem; font-size: 0.8rem; opacity: 0.8;">© 2026 | Aamir Akram</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
