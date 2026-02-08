from flask import Flask, render_template_string

app = Flask(__name__)

HTML = """
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Software Engineering Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { scroll-behavior: smooth; }
        .hero {
            background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
                        url('https://images.unsplash.com/photo-1518770660439-4636190af475');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
        }
        .card img { height: 200px; object-fit: cover; }
        footer { background: #0d6efd; color: white; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Software Engineering Solutions</h1>
    <p class="lead">Building scalable, secure, and modern applications</p>
    <a href="#services" class="btn btn-primary btn-lg">Explore More</a>
  </div>
</section>

<!-- Services -->
<section id="services" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Our Expertise</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text">Modern, responsive, and high-performance web apps.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Backend Engineering</h5>
            <p class="card-text">Secure APIs, databases, and scalable systems.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1504639725590-34d0984388bd" class="card-img-top">
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
<section id="news" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Latest Tech News</h2>
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

<!-- Contact -->
<section id="contact" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <input class="form-control mb-3" placeholder="Your Name">
          <input class="form-control mb-3" placeholder="Your Email">
          <textarea class="form-control mb-3" placeholder="Message"></textarea>
          <button class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-4">
  <div class="container text-center">
    <p class="mb-0">© 2026 Software Engineering Hub | Built with Python & Flask</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
"""

@app.route("/")
def home():
    return render_template_string(HTML)

if __name__ == "__main__":
    app.run(debug=True)
