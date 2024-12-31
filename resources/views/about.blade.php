  <x-layout>

<!--===== PEGIGNATION =======-->
 <div class="common-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="headding">
                    <h1>{{__('messages.aboutUs')}}</h1>

                    <div class="list-area">
                        <a href="{{ route('home') }}">{{__('messages.home')}}</a>
                        <p class="icon"><i class="fa-regular fa-angle-left"></i></p>
                        <p class="page-text">{{__('messages.aboutUs')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-tabs sp5" style="background: #123145 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 text-center m-auto">
                <div class="headding4">
                    <h2>{{__('messages.pageAboutUsTitle')}}</h2>
                    <p>
{{__('messages.pageAboutUsDisc')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="space60"></div>
        <div class="row">
            <div class="col-lg-10 m-auto text-center">
                <ul class="nav nav-pills tab-header-all mb-3" id="pills-tab" role="tablist">
                    <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="about-tab1-tab" data-bs-toggle="pill" data-bs-target="#about-tab1" type="button" role="tab" aria-controls="about-tab1" aria-selected="true">مهمة</button>
                    </li> -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="about-tab2-tab" data-bs-toggle="pill" data-bs-target="#about-tab2" type="button" role="tab" aria-controls="about-tab2" aria-selected="false">رؤية</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="about-tab3-tab" data-bs-toggle="pill" data-bs-target="#about-tab3" type="button" role="tab" aria-controls="about-tab3" aria-selected="false">رسالة</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="tab-content" id="pills-tabContent">
                    <!-- <div class="tab-pane fade show active" id="about-tab1" role="tabpanel" aria-labelledby="about-tab1-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tab-content-box">
                                    <div class="headding">
                                        <h3>نبذة عن المكتب</h3>
                                        <div class="space24"></div>
                                        <p>مكتب سعيد الشرمي للمحاماة والاستشارات القتنونية في دولة الامارات العربية المتحدة تاسس عام ****, تبنى مكتبنامسئولية تقديم خدمات احترافية من خلال استقطاب فريق عمل مؤهل وكفء من محامين واستشاريين مخضرمين و ذوي خبرة واسعة في الحلول والاستشارات القانونية في شتى المجالات, للافراد والشركات, وللموكلين امام مختلف الجهات القضائية و مختلف المحاكم, وانشاء وصياغة العقود المحلية والدولية وخدمات الوساطة والتحكيم. </p>
                                        <div class="space16"></div>
                                        <p>إن توظيف الخبرات والمهارات والكفاءات الفردية ضمن فريق عمل متميز يعتبر من أهم أُسس العمل في مهنة المحاماة والاستشارات القانونية، وقد انطلق المكتب من هذا الأساس بعملٍ احترافي لتقديم أفضل الخدمات القانونية ليتماشى مع التطور الاقتصادي الذي تشهده المنطقة</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="image" data-aos="flip-right" data-aos-duration="700">
                                    <img src="http://www.alsharmilaw.com/assets/img/about/about-img-mission.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade show active" id="about-tab2" role="tabpanel" aria-labelledby="about-tab2-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-content-box">
                                    <div class="headding">
                                        <h3>{{__('messages.ourVision')}}</h3>
                                        <div class="space24"></div>
                                        <p>
                                            {{__('messages.ourVisionOne')}}
                                            <br>
                                            <br>
                                            {{__('messages.ourVisionTwo')}}

                                        </p>

    <div class="space16"></div>
                                        <p>
                                            {{__('messages.ourVisionThree')}}
                                            <br>
                                            <br>
                                            {{__('messages.ourVisionFour')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="about-tab3" role="tabpanel" aria-labelledby="about-tab3-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-content-box">
                                    <div class="headding">
                                        <h3>{{__('messages.ourMessage')}} </h3>
                                        <div class="space24"></div>
                                        <p>
                                            {{__('messages.ourMessageOne')}}
                                            <br>
                                            <br>
                                            {{__('messages.ourMessageTwo')}}

                                        </p>

    <div class="space16"></div>
                                        <p>
                                            {{__('messages.ourMessageThree')}}
                                            <br>
                                            <br>
                                            {{__('messages.ourMessageFour')}}

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====ABOUT START=======-->
<div class="about4 sp5" style="background-image: url('assets/img/logo/background.png');">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="headding4">
                    <span class="span" data-aos="fade-left" data-aos-duration="700">من نحن</span>
                    <h2 data-aos="fade-left" data-aos-duration="900">الاختيار الأمثل لمحاميك ومستشارك القانوني والطريق الأفضل لحقوقك</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100" >تبنى مكتبنا مسئولية تقديم خدمات احترافية من خلال استقطاب فريق عمل مؤهل وكفء من محامين واستشاريين مخضرمين و ذوي خبرة واسعة في الحلول والاستشارات القانونية في شتى المجالات, للافراد والشركات, وللموكلين امام مختلف الجهات القضائية و مختلف المحاكم, وانشاء وصياغة العقود المحلية والدولية وخدمات الوساطة والتحكيم</p>

                    <div class="row">
                        <div class="col-md-4 col-6">
                            <div class="counter-box" data-aos="zoom-in-up" data-aos-duration="900">
                                <h3 class="color-white"><span class="counter">70</span>+</h3>
                                <p class="font-bold">قضية قانونية</p>
                            </div>
                            </div>

                            <div class="col-md-4 col-6">
                            <div class="counter-box" data-aos="zoom-in-up" data-aos-duration="700">
                                <h3 class="color-white"><span class="counter">94</span>%</h3>
                                <p class="font-bold">قضايا ناجحة</p>
                            </div>
                            </div>

                            <div class="col-md-4 col-6">
                            <div class="counter-box" data-aos="zoom-in-up" data-aos-duration="800">
                                <h3 class="color-white"><span class="counter">11</span>+</h3>
                                <p class="font-bold">محامي ومستشار قانوني</p>
                            </div>
                        </div>
                    </div>

                    <div class="space30"></div>

                    <div class="" data-aos="fade-up" data-aos-duration="800">
                        <a href="{{ route('contact') }}" class="theme-btn7"><span class="span-btn">احصل على استشارة مجانية</span> <span class="arrow"><i class="fa-regular fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="images">
                    <div class="shape aniamtion-key-3">
                        <img src="assets/img/shapes/logo.png" alt="مكتب سعيد الشرمي للمحاماة والاستشارات القانونية أحد مكاتب المحاماة الرائدة في دولة الإمارات العربية المتحدة.">
                    </div>
                    <div class="image img100" data-aos="flip-right" data-aos-duration="700">
                        <img src="assets/img/about/about-img.png" alt="الاختيار الأمثل لمحاميك ومستشارك القانوني والطريق الأفضل لحقوقك - مستشارون قانونيون">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




</x-layout>
