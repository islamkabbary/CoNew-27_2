---
id: 4cf7a74b-0e8e-455a-a1e9-84d97b528f20
blueprint: page
title: 'All packages'
author: 2a4d4039-7725-4b10-a44b-1f90e9984c00
template: components/main-layout-component
main: |-
  <div class="flex mx-10 justify-between">
              <div class="flex flex-col md:flex-row items-center :!pt-[200px] w-full justify-around">
                  <div
                      class=" text-right flex flex-col items-center md:items-end gap-5 md:gap-[50px] lg:gap-[70px] mt-7 lg:mt-[30px] md:mr-10">
                      <h1
                          class="font-[Somar Sans] font-medium text-[24px] xs:text-[30px] sm:text-[40px] md:text-[56px] lg:text-[80px] :text-[100px] text-[#8b0303] text-center md:text-right  ">
                          {{messages string="All packages"}}
                      </h1>
                  </div>
                  <img class="w-auto mt-10  xs:max-w-[100%] md:max-w-[50%]" src='{{statamic name="main_image"}}'
                      alt="">
              </div>
          </div>
updated_by: 45bbdef4-30ec-4ee5-a2f6-dbc135b94cea
updated_at: 1705310623
main_image: offers.png
seo_title: 'باقات معاهد بروليدرز للغة الانجليزية | دورات لغة انجليزية حضوري او عن بعد'
description: 'اختر من بين باقات الدورات الانجليزية سواء حضوري او عن بعد مع بروليدرز افضل معهد لغة انجليزية على واحصل علي إمكانية الوصول إلى دورات متعددة تناسب احتياجك  وفر المال والوقت مع باقاتنا المرنة وبأسعار معقولة'
---
{{livewire livewire="all-packages-component"}}