var accordions = document.getElementsByClassName('accordion');
for (var i = 0; i < accordions.length; i++) {
    accordions[i].addEventListener("click", function() {
        // close all
        for (var j = 0; j < accordions.length; j++) {
            if (accordions[j] !== this) {
                accordions[j].classList.remove('active');
            }
        }
        // open or close
        this.classList.toggle('active');
    });
}
