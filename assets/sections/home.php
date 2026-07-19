<div class="hero">
    <div class="image-box">
        <img src="../my-portfolio-web/assets/img/dp-white-bg.png" alt="">
    </div>
    <span class="divider"></span>
    <div class="info">
        <h1>Hello!</h1>
        <h1>My name is <span>Jonard</span></h1>
        <p>I'm a <span id="role"></span></p>
        <div class="contact-details">
            <a href="">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i> Jonard Nava</a>
            <a href=""><i class="fa-brands fa-tiktok"></i> nadxyz</a>
            <a href=""><i class="fa-solid fa-envelope"></i> jonardnava2gmail.com</a>
            <a href=""><i class="fa-solid fa-phone"></i> +63 991 8059 651</a>
        </div>
    </div>
</div>  

<script>
    let roleElementTC = document.getElementById('role');
    let typoRoles = ["Programmer! ", "Pogramm ", "Programmee ", "progra ", "Peogr ", "Proble "]
    let role = typoRoles[Math.floor(Math.random() * typoRoles.length)];
    roleElementTC.style.marginLeft = "5px"
    roleElementTC.textContent = "";

    function textCursorSet() {
        roleElementTC.style.backgroundColor = "red"
        let style = getComputedStyle(roleElementTC);
        setInterval(() => {
            if (style.borderWidth !== "0px") {
                roleElementTC.style.borderRight = "none"
            }else{
                roleElementTC.style.borderRight = "solid white 2px"
            }
        }, 500)
    }

    let index = 0;
    let deleting = false;

    function typeAndDelete() {
        
        
        if (!deleting) {
            roleElementTC.textContent = role.slice(0, index + 1);
            index++;

            if (index == role.length) {
                
                deleting = true;
                setTimeout(typeAndDelete, 2000);
                return;
            }
        } else {
            roleElementTC.textContent = role.slice(0, index - 1);
            index--;

            if (index === 0) {
                deleting = false;
                role = typoRoles[Math.floor(Math.random() * typoRoles.length)], 0
            }
        }

        setTimeout(typeAndDelete, 300);
    }

typeAndDelete();

    typeAndDelete()
    textCursorSet()
</script>