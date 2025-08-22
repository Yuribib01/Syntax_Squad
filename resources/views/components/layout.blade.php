<style>
    :root {
        --primary: #4f46e5;   /* Indigo */
        --secondary: #6366f1; /* Lighter Indigo */
        --dark: #1f2937;
        --light: #f9fafb;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        background-color: var(--light);
        color: var(--dark);
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

  /* Global Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  h2, h3, h5 {
    margin-bottom: 15px;
    color: #222;
  }

    /* Navbar */
    /* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    background: var(--dark);
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 1000;
}
.navbar .logo {
    display: flex;
    align-items: center;
    gap: 10px;
}
.navbar .logo img {
    height: 40px;
    border-radius: 50%;
}
.navbar .logo span {
    font-size: 1.2rem;
    font-weight: bold;
}
.nav-links {
    list-style: none;
    display: flex;
    gap: 25px;
}
.nav-links a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}
.nav-links a:hover {
    color: #ffd369;
}

    /* Hero */
.hero {
    background: url("{{ asset('images/herobg.jpg') }}") no-repeat center/cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
}

    .hero h1 { font-size: 3rem; margin-bottom: 1rem; }
    .hero p { font-size: 1.25rem; max-width: 600px; margin: 0 auto; }



.team-grid, .services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.team-card, .service-box {
  background: #fff;
  border-radius: 12px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.team-card img {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  margin-bottom: 15px;
}


/* About Section */
#about {
  padding: 60px 20px;
}

.about-container {
  display: flex;
  align-items: center;       /* Aligns image and text vertically */
  justify-content: center;   /* Centers whole content */
  max-width: 1100px;
  margin: 0 auto;            /* Center section in page */
  gap: 40px;                 /* Space between image and text */
}

.about-img img {
  width: 280px;
  height: 280px;
  border-radius: 10px;
  object-fit: cover;
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.about-details {
  flex: 1;
}

.about-details h1 {
  font-size: 2rem;
  margin-bottom: 10px;
  color: #222;
}

.about-details h3 {
  font-size: 1.2rem;
  color: #666;
  margin-bottom: 20px;
}

.about-details p {
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 20px;
}

.about-details ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.about-details ul li {
  margin-bottom: 8px;
  font-size: 0.95rem;
}

.about-details ul li strong {
  color: #000;
  margin-right: 6px;
}


/* Timeline */
.text-center {
  text-align: center;
}

.timeline {
  position: relative;
  margin: 40px auto;
  max-width: 700px;
}

.timeline::after {
  content: "";
  position: absolute;
  width: 6px;
  background: #3a2d2d;
  top: 0;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}

.timeline-item {
  padding: 20px;
  position: relative;
  width: 50%;
}

.timeline-item.left { left: 0; }
.timeline-item.right { left: 50%; }

.timeline-item .content-box {
  display: flex;
  flex-direction: column; /* stack items vertically */
  align-items: center; /* center everything horizontally */
  background: #fff;
  padding: 15px 20px;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.timeline-item.left .content-box { margin-right: 30px; }
.timeline-item.right .content-box { margin-left: 30px; }

.school-logo {
  width: 50px;
  height: 50px;
  object-fit: contain;
  margin-bottom: 5px; /* space between logo and school name */
}

.school-info p {
  margin: 0 0 10px 0; /* space after school name before description */
  text-align: center;
}

.edu-text p, .edu-text h5 {
  text-align: center;
}


/* Skills */
.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 20px;
  margin-top: 30px;
}
.skill-card {
  background: #fff;
  padding: 20px;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.skill-card img { width: 40px; margin-bottom: 10px; }

/* Projects */
.projects-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}
.project-card {
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.project-card img { width: 100%; height: 180px; object-fit: cover; }
.project-info { padding: 15px; }




    /* Footer */
    .footer {
        background: var(--dark);
        color: white;
        text-align: center;
        padding: 1rem;
        margin-top: 3rem;
    }

/* Homepage design */
/* Hero Section */
.home-hero {
    background: url("{{ asset('images/herobg.jpg') }}") no-repeat center/cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    padding: 0 20px;
}
.home-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
}
.home-hero h1 span {
    color: var(--accent);
}
.home-hero p {
    font-size: 1.2rem;
    max-width: 600px;
    margin: 0 auto 1.5rem auto;
}

/* About Section */
/* About Us Section */
.home-about {
  padding: 60px 20px;
  background: #f9f9f9;
  text-align: center;
}

.home-about-row {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap; /* mobile responsive */
}

.about-card {
  flex: 1;
  min-width: 250px;
  max-width: 300px;
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid #ddd;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  transition: transform 0.2s;
  text-align: center;
}

.about-card:hover {
  transform: translateY(-5px);
}

.about-header {
  width: 100%;
  background: transparent;
  border: none;
  padding: 25px 20px 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  cursor: pointer;
}

.about-icon {
  font-size: 2rem;
  color: #3a2d2d;
  margin-bottom: 10px;
}

.about-header span {
  font-size: 1.1rem;
  font-weight: bold;
  color: #333;
}

.toggle-icon {
  position: absolute;
  right: 15px;
  top: 15px;
  transition: transform 0.3s;
  color: #666;
}

/* Rotate chevron when active */
.about-card.active .toggle-icon {
  transform: rotate(180deg);
}

.about-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.3s ease;
  padding: 0 20px;
}

.about-card.active .about-content {
  max-height: 200px;
  padding: 15px 20px;
}


/* Team Section */
.home-team {
    padding: 80px 20px;
    background: var(--light);
}
.home-team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
.home-team-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}
.home-team-card:hover {
    transform: translateY(-5px);
}
.home-team-card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-bottom: 15px;
    object-fit: cover;
}

/* Services Section */
.home-services {
    padding: 80px 20px;
    background: #fff;
}
.home-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
.home-service-box {
    background: #fff;
    border-radius: 12px;
    padding: 25px 20px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}
.home-service-box i {
    font-size: 2rem;
    color: var(--primary);
    margin-bottom: 15px;
}
.home-service-box:hover {
    transform: translateY(-5px);
}

/* Contact Section */
.home-contact {
    padding: 80px 20px;
    background: var(--secondary);
    color: #fff;
    text-align: center;
}
.home-contact p {
    margin-bottom: 20px;
}



/* Buttons */
.btn-primary,
.btn-secondary {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}
.btn-primary {
    background: var(--primary);
    color: #fff;
}
.btn-primary:hover {
    background: var(--secondary);
}
.btn-secondary {
    background: #fff;
    border: 2px solid var(--primary);
    color: var(--primary);
}
.btn-secondary:hover {
    background: var(--primary);
    color: #fff;
}
</style>
