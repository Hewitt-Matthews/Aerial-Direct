var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var icon = this.querySelector('span');
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
            icon.innerHTML = "+";
        } else {
            icon.innerHTML = "-";
            panel.style.display = "block";
        }
    });
}