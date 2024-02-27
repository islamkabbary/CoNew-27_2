---
id: 20e99643-dfa4-473f-85de-905ad5434d1c
blueprint: page
title: 'About us'
author: 2a4d4039-7725-4b10-a44b-1f90e9984c00
template: components/main-layout-component
main: |-
  <div class="flex mx-10 justify-between">
              <div class="flex flex-col md:flex-row items-center :!pt-[200px] w-full justify-around">
                  <div
                      class=" text-right flex flex-col items-center md:items-end gap-5 md:gap-[50px] lg:gap-[70px] mt-7 lg:mt-[100px] md:mr-10">
                      <h1
                          class="font-[Somar Sans] font-medium text-[24px] xs:text-[30px] sm:text-[40px] md:text-[56px] lg:text-[80px] :text-[100px] text-[#8b0303] text-center md:text-right  ">
                          {{messages string="About us"}}
                      </h1>
                  </div>
                  <img class="w-auto mt-10  xs:max-w-[100%] md:max-w-[50%]" src='{{statamic name="main_image"}}'
                      alt="">
              </div>
          </div>
updated_by: 45bbdef4-30ec-4ee5-a2f6-dbc135b94cea
updated_at: 1695809542
our_goals:
  -
    id: ldvtqj8r
    type: new_set
    enabled: true
    title: 'تقديم أفضل الخدمات لتلبية احتياجات سوق العمل.'
    image: goalsone.jpg
  -
    id: ldvtqxs3
    type: new_set
    enabled: true
    title: 'تخريج كوادر محترفة للمساهمة في تحقيق رؤية المملكة.'
    image: goalstwo.jpg
  -
    id: ldvtrdxi
    type: new_set
    enabled: true
    title: 'المساهمة في تحقيق أحلام وطموحات الطلاب المهنية والشخصية.'
    image: goalsthree.jpg
  -
    id: ldvtrqra
    title: 'مساعدة المؤسسات الكبيرة والصغيرة الحجم على النهوض بموظفيها من خلال توفير خدمات تدريبية متخصصة .'
    type: new_set
    enabled: true
    image: goalsfour.jpg
main_image: logoabout.png
what_do_we_offer: who.png
custom_body: |-
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NRBHD9"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
custom_head: |-
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5NRBHD9');</script>
  <!-- End Google Tag Manager -->
seo_title: 'معهد بروليدرز | ProLeaders Institute | معهد نخبة القادة للتدريب | دورات تدريبية بجدة | من نحن'
description: 'نحن معهد بروليدرز من افضل المعاهد التعليمية بجدة حيث يقدم باقات متنوعة من الدورات التدريبية في اللغات والدورات التقنية و الادارية'
---
<!--section-->

        <div class="mt-[40px] bg-gradient-to-t from-gray-200 to-t">
            <p class="font-[Somar Sans] text-[14px] md:text-[16px] md:md:text-[#3f3f3f] text-black text-justifymx-6 md:mx-20 mx-auto leading-loose pb-10"
                style="text-align-last: center;">
                {{messages string="textAboutUs"}}
            </p>
        </div>
        <!--what we offer-->
        <div class="md:mt-[80px] mt-[30px] mx-6 md:mx-20">
            <p class="font-[Somar Sans] font-semibold text-[#8b0303] text-[24px] xs:text-[28px] md:text-[32px]">
                {{messages string="What do we offer?"}}</p>
            <div class="grid md:grid-cols-3 gap-5">
                <div class="md:col-span-2 mt-5">
                    <p class="leading-loose font-[Somar Sans] text-[14px] lg:text-[20px] md:text-[#3f3f3f] text-black  text-justify md:max-w-[95%]"
                        style="text-align-last: right;">
                        {{messages string="textWhatDoOffer"}}
                    </p>
                </div>
                <div class="md:col-span-1 mt-5 mx-auto md:mx-0 mb-5">
                    <img class="w-auto h-auto drop-shadow-lg rounded-" src='{{statamic name="what_do_we_offer"}}'
                        alt="">
                </div>
            </div>
        </div>

{{component model="slide-about-us-component"}}

<!--our vision-->
<div class="mx-auto md:mx-20 mt-20 md:mt-[85px]">
    <p class="font-[Somar Sans] font-semibold text-[#8b0303] text-[24px] xs:text-[28px] md:text-[32px] mr-12 mt-5">
        {{messages string="Our vision"}}
    </p>
    <p
        class="font-[Somar Sans] font-medium md:text-[#3f3f3f] text-black  text-[16px] md:text-[20px] lg:text-[24px] mt-10 mr-12">
                        {{messages string="The best skills training in the Middle East with creativity and international quality:"}}
        </p>

    <div class="mt-16 grid md:grid-cols-4 grid-cols-1 gap-5 mb-12">
            <div
            class="duration-700 lg:hover:-translate-y-6 h-[245px] lg:w-[200px] bg-white rounded-md drop-shadow-[4px_4px_9px_rgba(103,191,148,0.25)] flex items-center flex-col gap-5 justify-center mx-auto">
            <img class="h-[60px] w-[60px]" 
				 src='{{images link="icons/perfect.png"}}' alt="">
            <p class="font-[Somar Sans] font-medium text-[24px] md:text-[#3f3f3f] text-black ">التميز</p>
            <p class="font-[Somar Sans] font-light text-[14px] md:text-[#3f3f3f] text-black  max-w-[80%] text-center">نسعي دائماً لتقديم خدمة متميزة بمعايير عالمية</p>
        </div>
        <div
            class="duration-700 lg:hover:-translate-y-6 h-[245px] lg:w-[200px] bg-white rounded-md drop-shadow-[4px_4px_9px_rgba(103,191,148,0.25)] flex items-center flex-col gap-5 justify-center mx-auto">
            <img class="h-[60px] w-[60px]" src='{{images link="icons/idea.png"}}' alt="">
            <p class="font-[Somar Sans] font-medium text-[24px] md:text-[#3f3f3f] text-black ">{{messages string="creativity"}}</p>
            <p class="font-[Somar Sans] font-light text-[14px] md:text-[#3f3f3f] text-black  max-w-[80%] text-center">
                 نُقدم أفكار مختلفة لتخريج طلاب مبدعين 
            </p>
        </div>
        <div
            class="duration-700 lg:hover:-translate-y-6 h-[245px] lg:w-[200px] bg-white rounded-md drop-shadow-[4px_4px_9px_rgba(103,191,148,0.25)] flex items-center flex-col gap-5 justify-center mx-auto">
                        <img class="h-[60px] w-[60px]" 
				 src='{{images link="icons/diamond.png"}}' alt="">
            <p class="font-[Somar Sans] font-medium text-[24px] md:text-[#3f3f3f] text-black ">الجودة</p>
            <p class="font-[Somar Sans] font-light text-[14px] md:text-[#3f3f3f] text-black  max-w-[80%] text-center">نلتزم بمعايير الجودة العالمية في جميع خدماتنا</p>
        </div>
        <div
            class="duration-700 lg:hover:-translate-y-6 h-[245px] lg:w-[200px] bg-white rounded-md drop-shadow-[4px_4px_9px_rgba(103,191,148,0.25)] flex items-center flex-col gap-5 justify-center mx-auto">
            <img class="h-[60px] w-[60px]" 
				 src='{{images link="icons/agreement.png"}}' alt="">
            <p class="font-[Somar Sans] font-medium text-[24px] md:text-[#3f3f3f] text-black ">الإخلاص</p>
            <p class="font-[Somar Sans] font-light text-[14px] md:text-[#3f3f3f] text-black  max-w-[80%] text-center">نغرس قيم  الإتقان والإخلاص في العمل في معاهدنا.</p>
        </div>
    </div>

</div>
