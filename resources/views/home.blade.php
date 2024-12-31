<x-layout>


 <!--===== Slider Section=======-->
 <div class="hero-area4 _relative" style="background: linear-gradient(0deg, rgba(18, 49, 69, 1), rgba(216, 169, 124, 0.5)), url(assets/img/image/bg-page-title.jpg) !important;">
    <div class="container">
        <div class="space40"></div>
        <div class="row align-items-center text-center padding-150">
            <div class="col-lg-12 p-100">
                <div class="headding _relative">
                <span class="span">{{__('messages.mainTopTitle')}}</span>
                <h1>{{__('messages.mainTitle')}}</h1>
                <p>{{__('messages.mainDiscTitle')}}</p>

                <div class="space30"></div>

                <div>
                    <a href="{{ url("tel:+96560739999") }}" target="_blank" class="theme-btn7 fa-beat" style="--fa-animation-duration: 3s; --fa-beat-scale: 0.8;"><span class="span-btn"><bdo dir="ltr">+965 6073 9999</bdo></span> <span class="arrow"><i class="fa-regular fa-phone fa-flip" style="--fa-animation-duration: 2s;"></i></span></a>
                </div>

                </div>
            </div>
        </div>
        <div class="">
            <div class="headding4 head4">
                <div class="row">
                    <div class="col-lg-6 col-12 mt_5">
                        <a href="https://maps.app.goo.gl/AtToh2pktFxVkXtA7" target="_blank">
                            <div class="counter-box box">
                                <h3><span class=""><span class="arrow"><i class="fa-regular fa-location-dot fa-flip"></i></span> &nbsp {{ __('messages.mainOurLocation') }} </h3>
                                <p class="font-bold p25 mt_15">{{__('messages.address')}}</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-12 mt_5">
                        <a href="{{ url("tel:+96562220222") }}">
                            <div class="counter-box box">
                                 <h3><span class=""><span class="arrow"><i class="fa-regular fa-phone fa-flip" style="--fa-animation-duration: 2s;"></i></span> &nbsp {{__('messages.mainCallYourLawyer')}}</h3>
                                 <p class="font-bold mt_15"><span class="arrow"><i class="fa-regular fa-phone marginContactUs"></i></span><bdo dir="ltr">+965 6222 0222</bdo></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--=====About Us =======-->
<div class="about4 sp3" style="background: linear-gradient(180deg, rgba(18, 49, 69, 1), rgba(255, 255, 255, 1));">
    <div class="container">
        <div class="row align-items-center">

        <div class="col-lg-6">
            <div class="headding4">
                <span class="span" data-aos="fade-left" data-aos-duration="700" style="background: rgba(194, 148, 74, 1);color:#123145;">{{__('messages.aboutUs')}}</span>
                <h2 data-aos="fade-left" data-aos-duration="900" >{{__('messages.mainAboutUs')}}</h2>
                <div class="space16"></div>
                <p data-aos="fade-left" data-aos-duration="1100" >{{__('messages.mainDiscAboutUs')}}</p>

                <div class="space30"></div>

                <div class="" data-aos="fade-up" data-aos-duration="800">
                    <a href="{{ route('about') }}}" class="theme-btn7"><span class="span-btn">{{__('messages.seeMore')}}</span> <span class="arrow"><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="images">
                <div class="shape aniamtion-key-3">
                    <img src="{{ asset("/assets/img/shapes/logo.png") }}" alt="مجموعة طلال الصباح للمحاماة والاستشارات القانونية أحد مكاتب المحاماة الرائدة في دولة الإمارات العربية المتحدة.">
                </div>
                <div class="image img100" data-aos="flip-right" data-aos-duration="700">
                    <img style="box-shadow: 0px 0px 18px #C2944A;border-radius: 10px;" src="{{ asset("/assets/img/about/about-img.png") }}" alt="الاختيار الأمثل لمحاميك ومستشارك القانوني والطريق الأفضل لحقوقك">
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

<!--=====Our Services=======-->
<div class="works7 sp5" style="background: linear-gradient(0deg, rgba(18, 49, 69, 1) 5%, rgba(255, 255, 255, 1) 5%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="headding7">
                <span class="span" data-aos="fade-up" data-aos-duration="700">{{__('messages.mainServicesTopTitle')}}</span>
                <h2 data-aos="fade-up" data-aos-duration="900"> {{__('messages.mainServicesTitle')}}</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('services') }}">
                    <div class="image">
                                                    <img src="{{ asset("/storage/services/real-estate-cases-arabic.jpg") }}" alt="القضايا العقارية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number">1</span>
                    <h4><a href="{{ route('real-estate-issues') }}">{{__('messages.realEstateIssues')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route("legal-representation") }}">
                    <div class="image">
                                                    <img src="{{ asset("/storage/services/legal-representation-arabic.jpg") }}" alt="العقود والاتفاقيات - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number">2</span>
                    <h4><a href="{{ route('legal-representation') }}">{{__('messages.legalRepresentation')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('contracts-issues') }}">
                    <div class="image">
                                                    <img src="{{ asset("/storage/services/contracts-and-agreements-arabic.jpg") }}" alt="قضايا العقود والاتفاقيات - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number">3</span>
                    <h4><a href="{{ route('contracts-issues') }}">{{__('messages.contractAndAgreementsIssues')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('family-law') }}">
                    <div class="image">
                                                    <img src="{{ asset("/storage/services/family-law-arabic.jpg") }}" alt="قانون الأسرة - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number">4</span>
                    <h4><a href="{{ route('family-law') }}">{{__('messages.familyLaw')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('labour-issues') }}">
                    <div class="image">
                                                    <img src="{{ asset("/storage/services/work-law-arabic.jpg") }}" alt="القضايا العمالية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number">5</span>
                    <h4><a href="{{ route('labour-issues')}}">{{__('messages.labourIssues')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('criminal-issues') }}">
                    <div class="image">
                                                    <img src="{{ asset("/storage/services/companies-laws-arabic.jpg") }}" alt="القضايا الجزائية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number">6</span>
                    <h4><a href="{{ route("criminal-issues") }}">{{__('messages.criminalCases')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('civil-cases') }}">
                    <div class="image">
                                                    <img src="{{ asset("/storage/services/real-estate-law-arabic.jpg") }}" alt="القضايا المدنية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number">7</span>
                    <h4><a href="{{ route('civil-cases') }}">{{__('messages.civilCases')}}</a></h4>
                </div>
                </div>
            </div>
                    </div>
    </div>
</div>

<!--=====Our Partners =======-->
<div class="works7 sp5" style="background: linear-gradient(0deg, rgba(18, 49, 69, 1) 5%, rgba(255, 255, 255, 1) 5%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div style="padding-top: 2rem;" class="headding7">
                {{-- <span class="span" data-aos="fade-up" data-aos-duration="700">مناطق خدمتنا - الإمارات العربية المتحدة</span> --}}
                <h2 data-aos="fade-up" data-aos-duration="900">{{__('messages.mainPartnersTitle')}}</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
                        {{-- <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route("partners-first") }}">
                    <div style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;" class="image">
                                                    <img src="{{ asset("/storage/services/real-estate-cases-arabic.jpg") }}" alt="القضايا العقارية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number"><i style="" class="fa-solid fa-handshake"></i></span>
                    <h4><a href="{{ url("our-services/real-estate-issues.html") }}"> المكتب المصري</a></h4>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ url("our-services/legal-representation.html") }}">
                    <div style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;"  class="image">
                                                    <img src="{{ asset("/storage/services/legal-representation-arabic.jpg") }}" alt="العقود والاتفاقيات - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number"><i style="" class="fa-solid fa-handshake"></i></span>
                    <h4><a href="{{ url("our-services/legal-representation.html") }}">المكتب الكويتي</a></h4>
                </div>
                </div>
            </div> --}}
            <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('partners-first') }}">
                    <div style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;"  class="image">
                                                    <img src="{{ asset("assets/img/partners/partner3.png") }}" alt="قضايا العقود والاتفاقيات - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number"><i style="" class="fa-solid fa-handshake"></i></span>
                    <h4><a href="{{ route("contracts-issues") }}">{{__('messages.cairo')}}/{{__('messages.partnerCairo')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('partners-fifth') }}">
                    <div style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;" class="image">
                                                    <img src="{{ asset("assets/img/partners/partners_raeed_kwit.jpeg") }}" alt="قانون الأسرة - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number"><i style="" class="fa-solid fa-handshake"></i></span>
                    <h4><a href="{{ route('partners-fifth') }}">{{ __('messages.kuwait') }}/{{__('messages.partnerKuwait') }} </a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('partners-forth') }}">
                    <div style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;"  class="image">
                                                    <img src="{{ asset("assets/img/partners/partners_mohammed_abdullah_saudi.jpeg") }}" alt="القضايا العمالية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number"><i style="" class="fa-solid fa-handshake"></i></span>
                    <h4><a href="{{ route('partners-forth') }}">{{__('messages.saudi')}}/{{__('messages.partnerSaudi')}} </a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('partners-third') }}">
                    <div style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;"  class="image">
                                                    <img src="{{ asset("assets/img/partners/partner2.png") }}" alt="القضايا الجزائية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number"><i style="" class="fa-solid fa-handshake"></i></span>
                    <h4><a href="{{ route('partners-third') }}">{{__('messages.oman')}}/{{__('messages.partnerOman')}}</a></h4>
                </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6 col-6">
                <div class="works-box" data-aos="fade-up" data-aos-duration="400">
                <a href="{{ route('partners-second') }}">
                    <div style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;"  class="image">
                                                    <img src="{{ asset("assets/img/partners/partner1.png") }}" alt="القضايا المدنية - مستشارون قانونيون">
                                            </div>
                </a>
                <div class="headding7">
                    <span class="number"><i style="" class="fa-solid fa-handshake"></i></span>
                    <h4><a href="{{ route('partners-second') }}">{{__('messages.uae')}}/{{__('messages.partnerUAE')}}</a></h4>
                </div>
                </div>
            </div>
                    </div>
    </div>
</div>
<!--=====End Our Partners =======-->
<div class="about4 sp5">
    <div class="container">
        <div class="col-lg-8 m-auto text-center">
          <div class="headding4">
            <h6 data-aos="zoom-in-up" data-aos-duration="700" class="aos-init aos-animate" style="line-height:26px;">{{__('messages.mainStaticTopTitle')}}</h6>
            <div class="space20"></div>
            <h3 data-aos="zoom-in-up" data-aos-duration="700" class="aos-init aos-animate" style="color:#F0F0DC">{{__('messages.mainStaticTitle')}}</h3>
            <div class="space40"></div>
          </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="headding4">
                    <h6 data-aos="fade-left" data-aos-duration="900" >{{__('messages.mainStaticSubTitle1')}}</h6>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100" >{{__('messages.mainStaticDisc1')}}</p>
                    <div class="space40"></div>
                    <h6 data-aos="fade-left" data-aos-duration="900" >{{__('messages.mainStaticSubTitle2')}}</h6>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100" >{{__('messages.mainStaticDisc2')}}</p>
                    <div class="space40"></div>
                    <h6 data-aos="fade-left" data-aos-duration="900" >{{__('messages.mainStaticSubTitle3')}}</h6>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100" >{{__('messages.mainStaticDisc3')}}</p>

                </div>
            </div>

            <div class="col-lg-6 headding4">
                <div class="row text-center" style="padding: 0 20px;">

                    <div class="col-md-6 col-6 border-1">
                        <div class="counter-box" data-aos="zoom-in-up" data-aos-duration="500" style="margin-bottom: 30px;">
                             <h3 class="color-white"><span class="counter">70</span>+</h3>
                            <p class="font-bold color-gold">{{__('messages.legalCases')}}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 border-1">
                        <div class="counter-box" data-aos="zoom-in-up" data-aos-duration="500" style="margin-bottom: 30px;">
                             <h3 class="color-white"><span class="counter">94</span>%</h3>
                            <p class="font-bold color-gold">{{__('messages.successfulCases')}}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 border-1">
                        <div class="counter-box" data-aos="zoom-in-up" data-aos-duration="500" style="margin-bottom: 30px;">
                             <h3 class="color-white"><span class="counter">11</span>+</h3>
                            <p class="font-bold color-gold">{{__('messages.lawyerAndLegalAdvisor')}}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 border-1">
                        <div class="counter-box" data-aos="zoom-in-up" data-aos-duration="500" style="margin-bottom: 30px;">
                             <h3 class="color-white"><span class="counter">488</span>+</h3>
                            <p class="font-bold color-gold">{{__('messages.legalConsultation')}}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!--=====Legal Consultant Section======-->
<div class="about4 sp3" style="background: #fff">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12 text-center">
                <div class="headding4">
                    <h4 data-aos="fade-left" data-aos-duration="900" >{{__('messages.mainConsultantTopTitle')}}</h4>
                    <div class="space40"></div>
                    <div class="phones" style="display:flex;justify-content: space-evenly;">
                        <a href="{{ url("tel:+96560739999") }}" target="_blank" style="border:1px solid #123145; border-radius:10px; padding: 20px 10px 10px 10px;margin-right:5px">
                            <h2 class="legal_consultant" style="color:#123145;" data-aos="fade-left"  data-aos-duration="1100" ><span class="arrow"><i class="fa-regular fa-phone" style="margin:0px 5px;"></i></span> <bdo dir="ltr">+965 6222 0222</bdo></h2>
                        </a>
                        <a href="https://wa.me/+96560739999/?text=%d9%83%d9%8a%d9%81%20%d9%8a%d9%85%d9%83%d9%86%d9%86%d9%8a%20%d9%85%d8%b3%d8%a7%d8%b9%d8%af%d9%83%d8%9f" target="_blank" style="border:1px solid #123145; border-radius:10px; padding: 20px 10px 10px 10px;">
                            <h2 class="legal_consultant" style="color:#123145;" data-aos="fade-left"  data-aos-duration="1100" ><span class="arrow"><i class="fa-brands fa-whatsapp" style="margin:0px 5px;"></i></span> <bdo dir="ltr">+965 6073 9999</bdo></h2>
                        </a>
                    </div>
                    <div class="elementor-element elementor-element-a8368d9 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
    							    <span class="elementor-divider__text elementor-divider__element">او</span>
    						    </span>
                            </div>
                        </div>
                    </div>
                    <div class="space40"></div>
                    <h4 data-aos="fade-left" data-aos-duration="900" >{{__('messages.mainConsultantDownTitle')}}</h4>
                    <div class="space40"></div>
                    <div class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="800" bis_skin_checked="1">
                        <a href="https://wa.me/+96560739999/?text=%d9%83%d9%8a%d9%81%20%d9%8a%d9%85%d9%83%d9%86%d9%86%d9%8a%20%d9%85%d8%b3%d8%a7%d8%b9%d8%af%d9%83%d8%9f" target="_blank" class="theme-btn8" bis_skin_checked="1"><span class="span-btn">{{__('messages.mainConsultantButton')}}</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="service4 sp3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center headding7">
                <h2>{{__('messages.planTitle')}}</h2>
                <p>{{__('messages.planSubTitle')}}<p>
            </div>
        </div>
        <div class="space50"></div>
        <div class="row">

                        <div class="col-lg-3 col-md-6">
                <div class="">
                    <div class="service4-box">
                        <div class="custome-icon">
                            <img src="{{ asset("/assets/img/icons/Bronze.png") }}"  alt="الباقه البرونزية - مستشارون قانونيون"  >
                        </div>
                        <div class="headding" style="text-align:center">
                            <div class="bottomBP">
                                <h4><a href="{{ url("our-packages-details/bronze-package.html") }}">{{__('messages.planBronze')}}</a></h4>
                            </div>
                                                            <p>{{__('messages.planBronzeAmount')}} {{__('messages.aed')}} / {{__('messages.annually')}}</p>
                                                            <p>30 {{__('messages.legalConsultation')}}</p>
                                                            <p>20 {{__('messages.electronicWarning')}}</p>
                                                            <p>5 {{__('messages.preparingCommercialContractsAndAgreements')}}</p>
                                                        <a href="{{ url("our-packages-details/bronze-package.html") }}" class="learn"> {{__('messages.readMore')}} <span><i class="fa-regular fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6">
                <div class="">
                    <div class="service4-box">
                        <div class="custome-icon">
                            <img src="{{ asset("/assets/img/icons/Silver.png") }}"  alt="الباقه الفضية - مستشارون قانونيون"  >
                        </div>
                        <div class="headding" style="text-align:center">
                            <div class="bottomBP">
                                <h4><a href="{{ url("our-packages-details/silver-package.html") }}">{{__('messages.planSilver')}}</a></h4>
                            </div>
                                                            <p> {{__('messages.planSilverAmount')}} {{__('messages.aed')}} / {{__('messages.annually')}}</p>
                                                            <p>50 {{__('messages.legalConsultation')}}</p>
                                                            <p>35 {{__('messages.electronicWarning')}}</p>
                                                            <p>10 {{__('messages.preparingCommercialContractsAndAgreements')}}</p>
                                                        <a href="{{ url("our-packages-details/silver-package.html") }}" class="learn">{{__('messages.readMore')}}<span><i class="fa-regular fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6">
                <div class="">
                    <div class="service4-box">
                        <div class="custome-icon">
                            <img src="{{ asset("/assets/img/icons/Gold.png") }}"  alt="الباقة الذهبية - مستشارون قانونيون"  >
                        </div>
                        <div class="headding" style="text-align:center">
                            <div class="bottomBP">
                                <h4><a href="{{ url("our-packages-details/gold-package.html") }}">{{__('messages.planGold')}}</a></h4>
                            </div>
                                                            <p>{{__('messages.planGoldAmount')}} {{__('messages.aed')}} / {{__('messages.annually')}}</p>
                                                            <p>120 {{__('messages.legalConsultation')}}</p>
                                                            <p>100 {{__('messages.electronicWarning')}}</p>
                                                            <p>15 {{__('messages.preparingCommercialContractsAndAgreements')}}</p>
                                                        <a href="{{ url("our-packages-details/gold-package.html") }}" class="learn"> {{__('messages.readMore')}} <span><i class="fa-regular fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-md-6">
                <div class="">
                    <div class="service4-box">
                        <div class="custome-icon">
                            <img src="{{ asset("/assets/img/icons/Platinum.png") }}"  alt="الباقة البلاتينية - مستشارون قانونيون"  >
                        </div>
                        <div class="headding" style="text-align:center">
                            <div class="bottomBP">
                                <h4><a href="{{ url("our-packages-details/platinum-package.html") }}">{{__('messages.planPlatinum')}}</a></h4>
                            </div>
                                                            <p>{{__('messages.planPlatinumAmount')}} {{__('messages.aed')}} / {{__('messages.annually')}}</p>
                                                            <p>{{__('messages.legalConsultation')}}  {{__('messages.unlimited')}}</p>
                                                            <p> {{__('messages.electronicWarning')}}  {{__('messages.unlimited')}}</p>
                                                            <p>25 {{__('messages.preparingCommercialContractsAndAgreements')}}</p>
                                                        <a href="{{ url("our-packages-details/platinum-package.html") }}" class="learn">{{__('messages.readMore')}}<span><i class="fa-regular fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
    </div>
</div>

<!--=====Testimonial Section=======-->
<div class="tes7 sp3" style="background: linear-gradient(0deg, rgba(18, 49, 69, 1), rgba(255, 255, 255, 1));">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 m-auto text-center">
            <div class="headding7">
            <span class="span" data-aos="fade-right" data-aos-duration="700">{{__('messages.testimonials')}} - {{__('messages.recommendations')}}</span>
            <h2 data-aos="fade-right" data-aos-duration="900">{{__('messages.recommendationsTitle')}}</h2>
            </div>
        </div>
        </div>

        <div class="space60"></div>
        <div class="row" dir="ltr">
        <div class="col-lg-12">
            <div class="tes7-slider-all" data-aos="fade-up" data-aos-duration="500">
                        <div class="single-slider">
                <div class="box">
                <div class="icon">
                    <img src="{{ asset("/assets/img/icons/tes7-icon.png") }}" alt="">
                </div>

                <ul class="review">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                    </ul>

                <p class="pera">"يسعى مكتب سعيد الشرمى  للمحاماة والاستشارات القانونية إلى تزويد جميع العملاء بالخدمات القانونية بطريقة احترافية من خلال بيئة قانونية داخلية تتميز بالجودة والاحتراف"</p>
                </div>

                <div class="bottom-headding">
                <div class="headding">
                    <h5><a href="{{ url("#") }}">سعيد الشرمى</a></h5>
                    <p> الكويت </p>
                </div>
                </div>
            </div>
                        <div class="single-slider">
                <div class="box">
                <div class="icon">
                    <img src="{{ asset("/assets/img/icons/tes7-icon.png") }}" alt="">
                </div>

                <ul class="review">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                    </ul>

                <p class="pera">"نحن في مكتب سعيد الشرمى  للمحاماة والاستشارات القانونية نسعى دوما لتقديم افضل خدمات قانونية تتميز في مستواها الاحترافي والمتقدم لتوفير افضل الطرق والاساليب الاحترافية لتسيير جميع فريق العمل بشكل متجانس يصب في مصلحة الموكل بحصوله على افضل نتائج ممكنة في صا"</p>
                </div>

                <div class="bottom-headding">
                <div class="headding">
                    <h5><a href="{{ url("#") }}">محمد على</a></h5>
                    <p> الكويت </p>
                </div>
                </div>
            </div>
                        <div class="single-slider">
                <div class="box">
                <div class="icon">
                    <img src="{{ asset("/assets/img/icons/tes7-icon.png") }}" alt="">
                </div>

                <ul class="review">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                    </ul>

                <p class="pera">"أنا معجب بجودة الخدمة المقدمة 👍🏻 سريعة جدًا، احترافية، بنهج شخصي وبتكلفة معقولة. الحصول على توكيل من الشخص بالخارج. نوصي بشدة 👍🏻"</p>
                </div>

                <div class="bottom-headding">
                <div class="headding">
                    <h5><a href="{{ url("#") }}">صديق عمر</a></h5>
                    <p> الكويت </p>
                </div>
                </div>
            </div>
                        <div class="single-slider">
                <div class="box">
                <div class="icon">
                    <img src="{{ asset("/assets/img/icons/tes7-icon.png") }}" alt="">
                </div>

                <ul class="review">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                    </ul>

                <p class="pera">"لقد كانت لي تجربة إيجابية مع مجموعة طلال الصباح للمحاماة والاستشارات القانونية. قدم فريقهم القانوني خدمة ممتازة وكان على دراية كبيرة بقضيتي. لقد استجابوا لاستفساراتي وأبقوني على اطلاع جيد طوال العملية القانونية. أوصي بشدة بمجموعة طلال الصباح للمحاماة والاستشا"</p>
                </div>

                <div class="bottom-headding">
                <div class="headding">
                    <h5><a href="{{ url("#") }}">راجو كيزاداثو</a></h5>
                    <p> الكويت </p>
                </div>
                </div>
            </div>
                        <div class="single-slider">
                <div class="box">
                <div class="icon">
                    <img src="{{ asset("/assets/img/icons/tes7-icon.png") }}" alt="">
                </div>

                <ul class="review">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                    </ul>

                <p class="pera">"بداية أود أن أشكر مجموعة طلال الصباح للمحاماة والاستشارات القانونية وجميع العاملين بالمكتب، وأؤكد أنكم أهل للثقة ولديكم الخبرة والكفاءة العالية لحل كل قضية مهما كانت صعوبتها."</p>
                </div>

                <div class="bottom-headding">
                <div class="headding">
                    <h5><a href="{{ url("#") }}">حسام كمال</a></h5>
                    <p> الكويت </p>
                </div>
                </div>
            </div>
                        </div>
        </div>
        </div>

    </div>
</div>

<!--=====Contact Us=======-->
<div class="contact5 sp5" style="background: #123145;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="headding4">
                    <span class="span aos-init aos-animate" data-aos="fade-right" data-aos-duration="400">{{__('messages.requestAQuote')}}</span>
                    <h2 data-aos="fade-right" data-aos-duration="500" class="aos-init aos-animate">{{__('messages.requestTitle')}}</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="700" class="aos-init aos-animate">{{__('messages.requestSubTitle1')}}</p>
                    <div class="space10"></div>
                    <p data-aos="fade-right" data-aos-duration="400" class="aos-init">{{__('messages.requestSubTitle2')}}</p>
                    <div class="space30"></div>
                    <div class="aos-init" data-aos="fade-right" data-aos-duration="500">
                        <a href="{{ route('contact') }}" class="theme-btn8"><span class="span-btn">{{__('messages.requestButton')}}</span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="border-form">
                    <div class="contact5-form aos-init aos-animate" data-aos="zoom-out-up" data-aos-duration="400">
                        <div class="headding">
                            <h3>{{__('messages.mesgTitle')}}</h3>
                            <p>{{__('messages.mesgSubTitle')}}</p>
                        </div>

                        <form action="http://www.alsharmilaw.com/contact-us-submit" method="POST">
                            <input type="hidden" name="_token" value="oPbECrs8Os2UuTswKddvEonjG3vf5p80lwnLgG8a">                            <div class="form-inputs">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="F_name" placeholder="{{__('messages.firstName')}}" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="L_name" placeholder="{{__('messages.lastname')}}" required>
                                </div>

                                <div class="col-6">
                                    <input type="number" name="phone" placeholder="{{__('messages.phone')}}" required>
                                </div>

                                <div class="col-6">
                                    <input type="email" name="email" placeholder="{{__('messages.email')}}" required>
                                </div>

                                <div class="col-lg-12">
                                <select class="wide" style="display: none;" name="service" required>
                                    <option value="">{{__('messages.serviceType')}}</option>
                                                                        <option value="القضايا العقارية" >{{__('messages.realEstateIssues')}}</option>
                                                                        <option value="العقود والاتفاقيات" >{{__('messages.legalCases')}}</option>
                                                                        <option value="قضايا العقود والاتفاقيات" >{{__('messages.contractAndAgreementsIssues')}}</option>
                                                                        <option value="قانون الأسرة" >{{__('messages.familyLaw')}}</option>
                                                                        <option value="القضايا العمالية" >{{__('messages.labourIssues')}}</option>
                                                                        <option value="القضايا الجزائية" >{{__('messages.criminalCases')}}</option>
                                                                        <option value="القضايا المدنية" >{{__('messages.civilCases')}}</option>
                                                                    </div>

                                <div class="col-lg-12">
                                <textarea cols="30" rows="4" placeholder="{{__('messages.message')}}" name="message" required></textarea>
                                </div>


                                <div class="space20"></div>
                                <div class="col-lg-12">
                                <button class="theme-btn8" name="submit"><span class="span-btn">{{__('messages.sendNow')}}</span></button>
                                </div>

                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=====Blog=======-->




</x-layout>
