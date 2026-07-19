<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../my-portfolio-web/assets/css/style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonard Nava</title>
</head>
<body>
    <header class="header">
        <nav class="nav-bar">
            <div><p>nadxyz</p></div>
            <div class="nav-links">
                <a class="active" href="#home">Home</a>
                <a href="#about">About Me</a>
                <a href="#skills">Skills</a>
                <a href="#education">Education</a>
            </div>
        </nav>
    </header>
    <main>
        <!-- SABI KO WALA E AHAHAH -->
        <section id="home" class="home-section"> <?php include "../my-portfolio-web/assets/sections/home.php" ?> </section>
        <section id="about" class="about-me-section"> <?php include "../my-portfolio-web/assets/sections/about-me.php" ?> </section>
        <section id="skills" class="skills-section"><?php include "../my-portfolio-web/assets/sections/skills.php" ?></section>
        <section id="education" class="education-section"><?php include "../my-portfolio-web/assets/sections/education.php" ?></section>
    </main>
    <script src="/assets/js/script.js"></script>
</body>
</html>

<script>
    let navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
    link.addEventListener('click', function() {
        navLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>