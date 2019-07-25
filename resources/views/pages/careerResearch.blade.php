@extends("templates/basePage")
@section("title", ucfirst(__('miscellaneous.careerResearch')))
@section("content")
    <p>{{ __('careerResearch.text1') }}</p>
    <div class="container">
        <img src="{{secure_asset("images/hbo_i.jpg")}}" class="img-fluid"/>
    </div>
    <p class="text-center font-italic">{{ __('careerResearch.imageText1') }}</p>
    <p>{{ __('careerResearch.text2') }}</p>
    <div class="container">
        <img src="{{secure_asset("images/rabobank.jpg")}}" class="img-fluid" />
    </div>
    <p class="text-center font-italic">{{ __('careerResearch.imageText2') }}</p>
    <p>{{ __('careerResearch.text3') }}</p>
    <div class="container d-flex justify-content-center">
        <img src="{{secure_asset("images/stroopwafel.jpg")}}" class="img-fluid" />
    </div>
    <p class="text-center font-italic">{{ __('careerResearch.imageText3') }}</p>
    <p>{{ __('careerResearch.text4') }}</p>
    <div class="container">
        <img src="{{secure_asset("images/dongit.jpg")}}" class="img-fluid" />
    </div>
    <p class="text-center font-italic">{{ __('careerResearch.imageText4') }}</p>
    <p>{{ __('careerResearch.text5') }}</p>
    <p>{{ __('careerResearch.text6') }}</p>
    <div class="container">
        <img src="{{secure_asset("images/arcade.jpg")}}" class="img-fluid" />
    </div>
    <p class="text-center font-italic">{{ __('careerResearch.imageText5') }}</p>
    <p>{{ __('careerResearch.text7') }}</p>
    <ol>
        <li>
            <p>{{ __('careerResearch.text8') }}</p>
        </li>
        <li>
            <p>{{ __('careerResearch.text9') }}</p>
        </li>
        <li>
            <p>{{ __('careerResearch.text10') }}</p>
            <div class="container">
                <img src="{{secure_asset("images/scanner.jpg")}}" class="img-fluid" />
            </div>
            <p class="text-center font-italic">{{ __('careerResearch.imageText6') }}</p>
        </li>
        <li>
            <p>{{ __('careerResearch.text11') }}</p>
        </li>
        <li>
            <p>{{ __('careerResearch.text12') }}</p>
            <div class="container">
                <img src="{{secure_asset("images/magazijn.jpg")}}" class="img-fluid" />
            </div>
            <p class="text-center font-italic">{{ __('careerResearch.imageText7') }}</p>
            <div class="container">
                <img src="{{secure_asset("images/sorteer.jpg")}}" class="img-fluid" />
            </div>
            <p class="text-center font-italic">{{ __('careerResearch.imageText8') }}</p>
        </li>
    </ol>
@endsection
