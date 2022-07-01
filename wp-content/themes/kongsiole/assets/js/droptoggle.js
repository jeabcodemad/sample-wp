function dropToggle() {
    var x = document.getElementById("mobile-dropdown");
    var y = document.getElementById("menu-icon");
    if (x.style.display === "block") {
        x.style.display = "none";
        y.src = "images/icon-hamburger.svg";
    } else {
        x.style.display = "block";
        y.src = "images/icon-close.svg";
    }
}