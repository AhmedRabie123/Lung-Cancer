function toggleDiv(divId) {
    const div = document.getElementById(divId);
    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
};

document.getElementById("testdiagnosis-symptomsbutton").addEventListener("click", function() {
    window.location.href='testdiagnosis2.html'
});


