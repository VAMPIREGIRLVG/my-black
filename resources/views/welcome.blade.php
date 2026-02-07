<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aamir Akram | Software Engineer & Security Researcher</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #00ff41; /* Matrix Green */
            --bg: #080808;
            --card-bg: #121212;
            --text-primary: #ffffff;
            --text-secondary: #b0b0b0;
            --border: #222222;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: var(--bg); color: var(--text-primary); line-height: 1.6; }

        /* Navigation */
        nav {
            padding: 1.5rem 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(8, 8, 8, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            border-bottom: 1px solid var(--border);
            z-index: 1000;
        }
        .logo { font-family: 'Fira Code', monospace; font-weight: 700; color: var(--primary); }

        /* Hero Section */
        header {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 10%;
            background: radial-gradient(circle at 50% 50%, #1a1a1a 0%, #080808 100%);
        }
        h1 { font-size: 4rem; margin-bottom: 0.5rem; letter-spacing: -1px; }
        .tagline { color: var(--primary); font-family: 'Fira Code', monospace; font-size: 1.2rem; margin-bottom: 2rem; }

        /* Sections */
        section { padding: 5rem 10%; }
        h2 { font-size: 2rem; margin-bottom: 3rem; border-left: 4px solid var(--primary); padding-left: 1rem; }

        /* Skills Grid */
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; }
        .card { 
            background: var(--card-bg); 
            padding: 2rem; 
            border-radius: 12px; 
            border: 1px solid var(--border); 
            transition: all 0.3s ease;
        }
        .card:hover { border-color: var(--primary); transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0, 255, 65, 0.1); }
        .card h3 { margin-bottom: 1rem; color: var(--primary); }

        /* Certification Badges */
        .badge-container { display: flex; flex-wrap: wrap; gap: 10px; }
        .badge { 
            background: #1a1a1a; 
            border: 1px solid var(--primary); 
            color: var(--primary); 
            padding: 6px 14px; 
            border-radius: 20px; 
            font-size: 0.85rem;
            font-family: 'Fira Code', monospace;
        }

        /* Footer */
        footer { padding: 3rem 10%; border-top: 1px solid var(--border); text-align: center; color: var(--text-secondary); }
        .btn { 
            display: inline-block; 
            padding: 12px 24px; 
            background: var(--primary); 
            color: #000; 
            text-decoration: none; 
            font-weight: 700; 
            border-radius: 6px;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            section { padding: 4rem 5%; }
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">AAMIR.SH</div>
    <div class="nav-links">
        <a href="mailto:aamirakram252003@gmail.com" style="color:var(--text-primary); text-decoration:none; font-weight:bold;">Contact</a>
    </div>
</nav>

<header>
    <h1>Aamir Akram</h1>
    <p class="tagline">Software Engineer | Red Team Practitioner</p>
    <p style="color: var(--text-secondary); max-width: 600px;">
        Focused on building secure architecture and automating offensive security workflows.
    </p>
    <a href="https://github.com/VAMPIREGIRLVG" class="btn">View Source Code</a>
</header>

<section id="expertise">
    <h2>Technical Arsenal</h2>
    <div class="grid">
        <div class="card">
            <h3>Development</h3>
            <p>Proficient in Python, C++, and JavaScript for building scalable applications and automation tools.</p>
        </div>
        <div class="card">
            <h3>Offensive Security</h3>
            <p>Specialized in Ethical Hacking, SQL Injection, and Advanced Red Team Mastery.</p>
        </div>
        <div class="card">
            <h3>Cloud & Systems</h3>
            <p>Knowledge of Google Cloud Security, Cryptography, and Identity & Access Management (IAM).</p>
        </div>
    </div>
</section>

<section id="experience">
    <h2>Verified Clearances</h2>
    <div class="card">
        <h3>Cybersecurity Intern • YHills</h3>
        <p style="color: var(--primary); margin-bottom: 1rem;">March 2025 — May 2025</p>
        <p>Executed ethical hacking techniques and vulnerability assessments in simulated real-world scenarios.</p>
    </div>
</section>

<section id="certs">
    <h2>Professional Certifications</h2>
    <div class="badge-container">
        <div class="badge">Red Team Mastery</div>
        <div class="badge">Black Hat Python (2025)</div>
        <div class="badge">HackerOne Verified</div>
        <div class="badge">SQLi Specialist</div>
        <div class="badge">Deep Web & Cyber Intelligence</div>
    </div>
</section>

<footer>
    <p>Located in Roorkee, Uttarakhand, India</p>
    <p>aamirakram252003@gmail.com • 9368209325</p>
    <p style="margin-top: 1rem; font-size: 0.8rem; opacity: 0.5;">© 2026 | Aamir Akram</p>
</footer>

</body>
</html>