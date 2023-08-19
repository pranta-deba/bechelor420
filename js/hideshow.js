let form1 = document.getElementById("form1");
let form2 = document.getElementById("form2");

form1.style.display = "none";

function showform() {
    form2.style.display = "none";
    form1.style.display = "block";
};
function showform2() {
    form2.style.display = "block";
    form1.style.display = "none";
};

