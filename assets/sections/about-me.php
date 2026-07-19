<?php $birthDate = new DateTime('2003-10-26');
$today = new DateTime('today');

$age = $birthDate->diff($today)->y;  ?>

<div class="abt-me-wrapper">
    <h1>About me</h1>
    <div>
        <div>
            <p>
                My name is <b><i>Jonard Nava</i></b>! I lived in Kita-kita, Balungao, Pangasinan, Philippines <br><br>
                My birth day is on October 26, 2003 and I'm <?php echo $age; ?> years old now<br><br>
                <b>My hobby is:</b> <br>
                - Watching movies <br>
                - Playing online games <br>
                - Video editing <br> <br>
                <i>I'm an aspiring web developer with a passion for creating <b><u>clean, responsive, and user-friendly websites</u></b>. I enjoy turning ideas into functional web applications while continuously learning new technologies and improving my skills. I value <b><u>attention to detail</u></b>, <b><u>problem-solving</u></b>, and <b><u>writing organized code</u></b> that delivers a great user experience. My goal is to <b><u>grow as a developer</u></b> by contributing to meaningful projects and continuously expanding my knowledge.</i>
            </p>
            <br> <br> <br>
            <span><a href="../my-portfolio-web/assets/pdf/JONARD NAVA CV.pdf" download><i class="fa-solid fa-download"></i> Download my CV</a></span>
        </div>
        <div>
            <img src="../my-portfolio-web/assets/img/about-me-img.jpg" alt="">
        </div>
    </div>
</div>