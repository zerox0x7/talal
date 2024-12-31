<x-layout>


          <!--===== PEGIGNATION =======-->
 <div class="common-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="headding">
                    <h1>{{ __('messages.criminalCases')}}</h1>

                    <div class="list-area">
                        <a href="{{ route('home') }}">{{__('messages.home')}}</a>
                        <p class="icon"><i class="fa-regular fa-angle-right"></i></p>
                        <p class="page-text">{{__('messages.criminalCases')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-details-left sp5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="single-service-post-area padding-left">
                    <article>
                        <div class="service-single-post">
                            <div class="image-area">
                                <img src="../storage/services/real-estate-cases-in-uae.jpg"  alt="القضايا العقارية - مستشارون قانونيون" >
                                <div class="shapes aniamtion-key-3">
                                    <img src="../assets/img/shapes/logo.png" alt="مكتب سعيد الشرمي للمحاماة والاستشارات القانونية أحد مكاتب المحاماة الرائدة في دولة الإمارات العربية المتحدة.">
                                </div>
                            </div>
                            <div class="space24"></div>
                            <div class="headding4">
                                <h3>{{__('messages.criminalCases')}}</h3>
                                <div class="space16"></div>
                                <p>{{__('messages.criminalCasesDisc')}}</p>
                            </div>
                        </div>
                    </article>
                    <div class="details-border"></div>
                    <article>
                        <div class="service-single-post">
                            <div class="headding4">
                                <h3>{{__('messages.whyUs')}}</h3>
                                <div class="space16"></div>
                                <p>{{__('messages.whyUsDisc')}}</p>
                            </div>
                            <div class="space10"></div>
                            <div class="choose-list">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>{{__('messages.whyUsfirst')}}</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>{{__('messages.whyUsSecond')}}</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>{{__('messages.whyUsThird')}}</li>
                                            <li><span><i class="fa-regular fa-check"></i></span>{{__('messages.whyUsForth')}}</li>
                                        </ul>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="space40"></div>
                                            <div class="image">
                                                <img src="../storage/services/random/service-details-img2.jpg"  alt="القضايا العقارية - مستشارون قانونيون" >
                                            </div>
                                            <div class="space20"></div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="space40"></div>
                                            <div class="image">
                                                <img src="../storage/services/random/service-details-img1.jpg"  alt="القضايا العقارية - مستشارون قانونيون" >
                                            </div>
                                            <div class="space20"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <p>       </p>
                </div>
            </div>

<div class="col-lg-4">
               <div class="single-sidebar-post">
                    <h3>{{__('messages.services')}}</h3>
                    <ul class="sidebar-list">
                                                <li>
                            <a class="active" href="{{ route('real-estate-issues') }}"> {{__('messages.realEstateIssues')}}
                                <span><i class="fa-regular fa-angle-left"></i></span>
                            </a>
                        </li>
                                                <li>
                            <a class="" href="{{ route('legal-representation') }}"> {{__('messages.legalRepresentation')}}
                                <span><i class="fa-regular fa-angle-left"></i></span>
                            </a>
                        </li>
                                                <li>
                            <a class="" href="{{ route('contracts-issues') }}">{{__('messages.contractAndAgreementsIssues')}}
                                <span><i class="fa-regular fa-angle-left"></i></span>
                            </a>
                        </li>
                                                <li>
                            <a class="" href="{{ route('family-law') }}">{{__('messages.familyLaw')}}
                                <span><i class="fa-regular fa-angle-left"></i></span>
                            </a>
                        </li>
                                                <li>
                            <a class="" href="{{ route('labour-issues') }}">{{__('messages.labourIssues')}}
                                <span><i class="fa-regular fa-angle-left"></i></span>
                            </a>
                        </li>
                                                <li>
                            <a class="" href="{{ route('criminal-issues') }}">{{__('messages.criminalCases')}}
                                <span><i class="fa-regular fa-angle-left"></i></span>
                            </a>
                        </li>
                                                <li>
                            <a class="" href="{{ route('civil-cases') }}"> {{__('messages.civilCases')}}
                                <span><i class="fa-regular fa-angle-left"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="single-sidebar-post">
                    <h3>{{__('messages.downloadTheBook')}}</h3>
                    <p>{{__('messages.downloadTheBookDisc')}}</p>
                    <div class="space20"></div>
                        <a href="../assets/files/Saeed%20Al%20Sharmi%20Law%20Company%20Profile%20Arabic.pdf" class="donload-btn1" target="_blank"><img src="../assets/img/icons/service-side-btn-icon1.png" alt="تحميل PDF">{{__('messages.download')}} PDF</a>
                        <a href="../assets/files/Saeed%20Al%20Sharmi%20Law%20Company%20Profile%20English.pdf" class="donload-btn1" target="_blank"><img src="../assets/img/icons/service-side-btn-icon1.png" alt="تحميل DOC">{{__('messages.download')}} DOC</a>
                </div>


                <div class="single-sidebar-post">
                    <h3> {{__('messages.ifYouNeedAnyHelp')}}<br>{{__('messages.contactUs')}}</h3>
                        <a href="tel:+97148345000" class="donload-btn2"><img src="../assets/img/icons/service-side-btn-icon2.png" alt="اتصل الآن"> <bdo dir="ltr">+971 4 834 5000</bdo></a>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="service4 sp5">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="headding4">
                    <h2>{{__('messages.serviceWatchMore')}}</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
                        <div class="col-lg-4 col-md-6">
                <div class="">
                    <div class="service4-box">
                        <div class="icon">
                            <img src="../assets/img/icons/service6-icon3.png" alt="العقود والاتفاقيات - مستشارون قانونيون ">
                        </div>
                        <div class="headding">
                            <h4><a href="{{ route('legal-representation') }}">{{__('messages.legalRepresentation')}}</a></h4>
                            <p>{{__('messages.legalRepresentationDisc')}}</p>
                            <a href="{{ route('legal-representation') }}" class="learn">{{__('messages.readMore')}}<span><i class="fa-regular fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-md-6">
                <div class="">
                    <div class="service4-box">
                        <div class="icon">
                            <img src="../assets/img/icons/service6-icon2.png" alt="قضايا العقود والاتفاقيات - مستشارون قانونيون ">
                        </div>
                        <div class="headding">
                            <h4><a href="{{ route('contracts-issues') }}">{{__('messages.contractAndAgreementsIssues')}}</a></h4>
                            <p>{{__('messages.contractAndAgreementsIssuesDisc')}}</p>
                            <a href="{{ route('contracts-issues') }}" class="learn">{{__('messages.readMore')}}<span><i class="fa-regular fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-md-6">
                <div class="">
                    <div class="service4-box">
                        <div class="icon">
                            <img src="../assets/img/icons/service7-icon4.png" alt="قانون الأسرة - مستشارون قانونيون ">
                        </div>
                        <div class="headding">
                            <h4><a href="{{ route('family-law') }}">{{__('messages.familyLaw')}}</a></h4>
                            <p>{{__('messages.familyLawDisc')}}</p>
                            <a href="{{ route('family-law') }}" class="learn">{{__('messages.readMore')}}<span><i class="fa-regular fa-arrow-left"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
                    </div>

    </div>
</div>



</x-layout>
