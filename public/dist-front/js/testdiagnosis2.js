var Patient_Id=document.getElementById("Patient-Id");
var Air_Pollution=document.getElementById("Air_Pollution");
var Alcohol_Use=document.getElementById("Alcohol_Use");
var Dust_Allergy=document.getElementById("Dust_Allergy");
var Occupational_Hazards=document.getElementById("Occupational_Hazards");
var Genetic_Risk=document.getElementById("Genetic_Risk");
var Chronic_Lung_Disease=document.getElementById("Chronic_Lung_Disease");
var Balanced_Diet=document.getElementById("Balanced_Diet");
var Obesity=document.getElementById("Obesity");
var Smoking=document.getElementById("Smoking");
var Passive_Smoker=document.getElementById("Passive_Smoker");
var Chest_Pain=document.getElementById("Chest_Pain");
var Coughing_Of_Blood=document.getElementById("Coughing_Of_Blood");
var Fatigue=document.getElementById("Fatigue");
var Shortness_Of_Breath=document.getElementById("Shortness_Of_Breath");
var Frequent_Cold=document.getElementById("Frequent_Cold");
var submit = document.getElementById("testdiagnosis-submitbutton");

var selectbuttons=[Patient_Id,Air_Pollution,Alcohol_Use,Dust_Allergy,Occupational_Hazards,Genetic_Risk,
    Chronic_Lung_Disease,Balanced_Diet,Obesity,Smoking,Passive_Smoker,Chest_Pain,Coughing_Of_Blood,Fatigue,Shortness_Of_Breath,Frequent_Cold]

var changeDetected = false;
for (var i = 0; i < selectbuttons.length; i++) {
    selectbuttons[i].addEventListener("change", function() {
        changeDetected = true;
    });
}
submit.addEventListener("click", function() {
    if (changeDetected) {
        alert("Successfully send we will check result for you !");
        //attach to machine learning
    } else {
        alert("No changes detected!");
    }
});