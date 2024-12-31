<x-layout>



        <!--===== PEGIGNATION =======-->
 <div class="common-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="headding">
                    <h1>{{__('messages.partnerTwoTitle')}}</h1>

                    <div class="list-area">
                        <a href="{{ route('home') }}">{{__('messages.home')}}</a>
                        <p class="icon"><i class="fa-regular fa-angle-right"></i></p>
                        <p class="page-text">{{__('messages.partners')}}</p>
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
                                <img src="{{ asset('assets/img/lutfi/lutfi2.png') }}"  alt="القضايا المدنية - مستشارون قانونيون" >
                                <div class="shapes aniamtion-key-3">
                                    <img src="../assets/img/shapes/logo.png" alt="مكتب سعيد الشرمي للمحاماة والاستشارات القانونية أحد مكاتب المحاماة الرائدة في دولة الإمارات العربية المتحدة.">
                                </div>
                            </div>
                            <div class="space24"></div>
                            <div class="headding4">
                                <h3>{{__('messages.partnerTwoTitle')}}</h3>
                                <div class="space16"></div>
                                <p>
                                    {{__('messages.partnerTwoDisc')}}
                                </p>
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
                                            <li><span><i class="fa-regular fa-check"></i></span> {{__('messages.whyUsfirst')}}</li>
                                            <li><span><i class="fa-regular fa-check"></i></span> {{__('messages.whyUsSecond')}}</li>
                                            <li><span><i class="fa-regular fa-check"></i></span> {{__('messages.whyUsThird')}}</li>
                                            <li><span><i class="fa-regular fa-check"></i></span> {{__('messages.whyUsForth')}}</li>
                                        </ul>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="space40"></div>
                                            <div class="image">
                                                <img src="https://alsherbinylawfirm.com/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-28-at-13.55.49_7f44d390.jpg"  alt="القضايا المدنية - مستشارون قانونيون" >
                                            </div>
                                            <div class="space20"></div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="space40"></div>
                                            <div class="image">
                                                <img src="https://alsherbinylawfirm.com/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-23-at-11.33.37_e67e2c4b.jpg"  alt="القضايا المدنية - مستشارون قانونيون" >
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
                <div  class="single-sidebar-post">
                    <h3>العنوان</h3>
                    <iframe   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.6299582068873!2d31.244499599999994!3d30.0474723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840bebbb73f43%3A0xd00a629998ff6346!2zMTIg2LHYtNiv2Yog2KjYp9i02KfYjCDYp9mE2YHZiNin2YTYqdiMINi52KfYqNiv2YrZhtiMINmF2K3Yp9mB2LjYqSDYp9mE2YLYp9mH2LHYqeKArCA0MjgyMDEw2Iwg2YXYtdix!5e0!3m2!1sar!2s!4v1733076027796!5m2!1sar!2s" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



                                        </div>

                <div class="single-sidebar-post">
                    <h3> {{__('messages.downloadTheBook')}}</h3>
                    <p>{{__('messages.downloadTheBookDisc')}}</p>
                    <div class="space20"></div>
                        <a  href="../assets/files/Saeed%20Al%20Sharmi%20Law%20Company%20Profile%20Arabic.pdf" class="donload-btn1" target="_blank"><img src="../assets/img/icons/service-side-btn-icon1.png" alt="تحميل PDF">{{__('messages.download')}} PDF</a>
                        <a   href="../assets/files/Saeed%20Al%20Sharmi%20Law%20Company%20Profile%20English.pdf" class="donload-btn1" target="_blank"><img src="../assets/img/icons/service-side-btn-icon1.png" alt="تحميل DOC">{{__('messages.download')}} DOC</a>
                </div>


                <div class="single-sidebar-post">
                    <h3>{{__('messages.ifYouNeedAnyHelp')}}<br>{{__('messages.contactUs')}}</h3>
                        <a href="tel:+96562220222" class="donload-btn2"><img src="../assets/img/icons/service-side-btn-icon2.png" alt="اتصل الآن"> <bdo dir="ltr">+965 6222 0222</bdo></a>
                </div>

            </div>

        </div>
    </div>
</div>




</x-layout>
