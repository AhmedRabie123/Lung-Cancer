@extends('front.layout.app')

@section('main_content')

<div id="table-container"></div>
<div id="Resources-doctor" >
    <div class="cardscontainer" id="cardscontainer">
        
            <div class="card w-75 mb-3 ">
            <div class="card-body">
              <h5 class="card-title cardtitleafter">Free Materials Online</h5>
              <p class="card-text carddesc">Learn the basics about lung cancer and how it’s treated by reading our flagship booklet for newly diagnosed patients and their caregivers.</p>
              <a href="https://www.lungcancerresearchfoundation.org/for-patients/free-educational-materials/" class="cardlink">Free Materials</a>
            </div>
          </div>
          <div class="card w-75 mb-3 ">
            <div class="card-body">
                <h5 class="card-title cardtitleafter">Articles Of Lung Cancer</h5>
                <p class="card-text  carddesc">Lung Cancer Research Results and Study Updates.</p>
                <a href="https://www.cancer.gov/types/lung/research/articles"class="cardlink" >Articles About Lung Cancer</a>
              </div>
          </div>
        
            <div class="card w-75 mb-3">
                <div class="card-body">
                  <h5 class="card-title cardtitleafter">Articles Of Lung Cancer Treatement</h5>
                  <p class="card-text  carddesc">Challenges in Diagnosis and Treatment of Lung Cancer in People with Intellectual Disabilities: Current State of Knowledge.</p>
                  <a href="https://www.hindawi.com/journals/lci/2016/6787648/?msclkid=7513a7bd62cc1e05fb2fc318b41723fb&utm_source=bing&utm_medium=cpc&utm_campaign=HDW_MRKT_GBL_SUB_BNGA_PAI_DYNA_JOUR_X_PJ_VMI&utm_term=treatment&utm_content=JOUR_X_PJ_Veterinary%20Medicine%20International"class="cardlink" >Articles About Lung Cancer Treatement</a>
                </div>
              </div>
              <div class="card w-75 mb-3">
                <div class="card-body">
                  <h5 class="card-title cardtitleafter">Online Course</h5>
                  <p class="card-text  carddesc">Some useful links of different courses and webinars.</p>
                  <div><a href="https://www.accc-cancer.org/projects/asco-direct/lung-cancer-online-course"class="cardlink">Course of Lung Cancer</a></div>
                  <a href="https://www.lungcancereurope.eu/webinars/"class="cardlink">Another one</a>

                </div>
              </div>
        
    </div>
</div>

@endsection