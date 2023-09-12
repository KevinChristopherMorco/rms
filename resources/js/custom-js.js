var currentTab = 0;
showTab(currentTab);
const elements = document.querySelectorAll('.step');
elements[0].classList.add('active');
var y = document.querySelectorAll(".account-indicator");


function showTab(n) {
    var x = document.getElementsByClassName("tab");
    var register = document.getElementById("register");
    register.style.display = "none";
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        register.style.display = "block";

    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
        document.getElementById("nextBtn").style.display = "block";

    }
}


function nextTab() {
    var x = document.getElementsByClassName("tab");

    currentTab += 1;
    showTab(currentTab);

    for (let i = 1; i < elements.length; i++) {
        elements[currentTab].classList.add('active');
        elements[currentTab - 1].classList.remove('active');

    }

    if (currentTab < x.length) {
        x[currentTab].style.display = 'block';
        x[currentTab - 1].style.display = 'none';

    }

    if (currentTab != 0) {
        y[0].style.display = 'none';
    }

}

function prevTab() {
    var x = document.getElementsByClassName("tab");

    currentTab -= 1;
    showTab(currentTab);
    x[currentTab + 1].style.display = 'none';
    for (let i = 1; i < elements.length; i++) {
        elements[currentTab].classList.add('active');
        elements[currentTab + 1].classList.remove('active');
    }

    if (currentTab == 0) {
        y[0].style.display = 'block';
    }
}