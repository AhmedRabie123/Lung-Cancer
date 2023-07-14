 @extends('front.layout.app')

 @section('main_content')
     <h1 class="head-profiledoctor1 text-center">Welcome Dr: {{ Auth::guard('doctor')->user()->name }}</h1>
     <h2 class="head-profiledoctor2 text-center">Here Are Aims Of Our Application : </h2>
     <div>
         <p class="para-profiledoctor text-center">Early detection: An application for lung cancer may aim to help detect the disease at
             an early stage when it is more treatable. This could involve providing information about the symptoms of lung
             cancer and encouraging people to seek medical attention if they experience any of these symptoms.</p>
         <p class="para-profiledoctor text-center">Education and awareness: The application may aim to educate people about the causes,
             risk factors, and prevention strategies for lung cancer. This could involve providing information about smoking
             cessation programs, avoiding exposure to environmental toxins, and other lifestyle changes that can reduce the
             risk of developing lung cancer.</p>
         <p class="para-profiledoctor text-center">Treatment support: The application may aim to provide support to people undergoing
             treatment for lung cancer. This could include information about treatment options, managing side effects, and
             connecting patients with support groups.</p>
         <p class="para-profiledoctor text-center">Clinical trial matching: The application may aim to help patients find clinical trials
             that are relevant to their specific type of lung cancer and treatment history.</p>
         <p class="para-profiledoctor text-center">Survivorship support: The application may aim to provide support to lung cancer
             survivors, such as helping them manage ongoing symptoms, connecting them with other survivors, or finding
             resources for post-treatment care</p>
         <p class="para-profiledoctor text-center">Research and data collection: The application may aim to collect data about lung
             cancer diagnoses, treatment outcomes, and patient experiences, which can be used to improve lung cancer care
             and develop new treatments.</p>

     </div>
 @endsection
