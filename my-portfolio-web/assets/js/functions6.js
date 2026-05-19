function fetchFile(parentId, filePath) {
    fetch(filePath)
        .then(res => res.text())
        .then(data => {
            $("#"+parentId).html(data)
            animateHome()
        })
}



function loadComponents() {
    let header = $("#header");
    let nav = document.createElement('nav')
    nav.id = "navBar"
    let navBtns = {
        "Home":"home.php",
        "About Me":"about-me.php",
        "Skills":"skills.php",
        "Projects":"projects.php",
        "Experience":"experiance.php",
        "Education":"education.php"
    }
    let buttons = []
    let currentIndex = 0
    Object.entries(navBtns).forEach(([btnDispalyName, file], index) => {
        let btn = document.createElement('button');
        btn.textContent = btnDispalyName;
        btn.type = "button";
        btn.onclick = () => {
            fetchFile("main", "./components/main/"+file)
            currentIndex = index;
            updateActiveButton();
        };
        nav.appendChild(btn);
        buttons.push(btn);
        btn.style.color = "white";
    });

    function updateActiveButton() {
            buttons.forEach((btn, i) => {
                btn.style.fontWeight = (currentIndex===i)? "bolder":"normal";
                
            });
        }

    updateActiveButton()
    header.append(nav);

    if ($("#main").children().length ==0) {
        fetchFile("main", "./components/main/home.php")
    }

    
}


function animateHome() {
    let homeIds = [
        "profilePicture",
        "homeName",
        "homeRole",
        "homeTools",
        "homeToolWrapper",
        "socialsSection"
    ]
    for (let i = 0; i < homeIds.length; i++) {
        if ($("#"+homeIds[i]).length > 0) {
                let pp = $("#"+homeIds[i]);
                pp.removeClass('animateHome')
                requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    pp.addClass("animateHome");
                });
            });
            }
    }
}

loadComponents()
