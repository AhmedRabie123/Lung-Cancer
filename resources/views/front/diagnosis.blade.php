@extends('front.layout.app')

@section('main_content')

    <div id="div-appointment" class="div-appointment">
        <h3 class="head-afterloginpatient">Appointment Scheduling :</h3>
        <form class="form-afterloginpatient">
            <h4 class="headform-afterloginpatient"><label for="patient-name" class="label1-afterloginpatient">Patient
                    Name:</label></h4>
            <input type="text" id="patient-name" name="patient-name" required>
            <h4 class="headform-afterloginpatient"><label for="doctor-name" class="label2-afterloginpatient">Doctor
                    Name:</label></h4>
            <select class="form-select" aria-label="Default select example" required>
                <option selected>Choose Your Doctor</option>
                <option value="1">D.Ahmed</option>
                <option value="2">D.Ayman</option>
                <option value="3">D.Samir</option>
            </select>
            <h4 class="headform-afterloginpatient"><label for="appointment-date"
                    class="label3-afterloginpatient">Appointment Date:</label></h4>
            <input type="date" id="appointment-date" name="appointment-date" required>

            <input type="submit" value="Schedule Appointment" class="button-afterloginpatient">
        </form>
    </div>
    <h2 class="testdiagnosis-head1 text-center">Check This Please.</h2>
    <h3 class="testdiagnosis-head2 text-center">If You Have More Than One Of These Symptoms Do BloodTests : </h3>
    <div class="testdiagnosis-consymptoms">
        <div>
            <p class="testdiagnosis-para">Air_Pollution</p>
            <p class="testdiagnosis-para">Alcohol_Use</p>
            <p class="testdiagnosis-para">Dust_Allergy</p>
            <p class="testdiagnosis-para">Occupational_Hazards</p>
            <p class="testdiagnosis-para">Genetic_Risk</p>
            <p class="testdiagnosis-para">Chronic_Lung_Disease</p>
            <p class="testdiagnosis-para">Balanced_Diet</p>
            <p class="testdiagnosis-para">Obesity</p>
        </div>
        <div>
            <p class="testdiagnosis-para">Smoking</p>
            <p class="testdiagnosis-para">Passive_Smoker</p>
            <p class="testdiagnosis-para">Chest_Pain</p>
            <p class="testdiagnosis-para">Coughing_Of_Blood</p>
            <p class="testdiagnosis-para">Fatigue</p>
            <p class="testdiagnosis-para">Shortness_Of_Breath</p>
            <p class="testdiagnosis-para">Frequent_Cold</p>
            <div class="btn btn-primary"> <a class="nav-link" href="{{ route('test_cancer') }}">Check This</a></div>
        </div>
    @endsection
