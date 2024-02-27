---
id: deea791a-d997-417c-85b3-8fb83d3bc659
blueprint: page
title: 'all offers'
author: 2a4d4039-7725-4b10-a44b-1f90e9984c00
main: |-
  <div class="flex mx-10 justify-between">
              <div class="flex flex-col md:flex-row items-center :!pt-[200px] w-full justify-around">
                  <div
                      class=" text-right flex flex-col items-center md:items-end mt-7 lg:mt-[30px] md:mr-10">
                      <h1
                          class="font-[Somar Sans] font-medium text-[24px] xs:text-[30px] sm:text-[40px] md:text-[56px] lg:text-[80px] :text-[100px] text-[#8b0303] text-center md:text-right  ">
                          {{messages string="all offers"}}
                      </h1>
  				              <p class="mt-4 text-[#797979] text-[16px] font-normal ml-auto">
                  <a href="/" class="mt-3 text-[#8B0303] text-[16px] font-semibold">{{messages string="page_home"}}</a>
  								>>
  {{messages string="all offers"}}
              </p>
                  </div>
                  <img class="w-auto mt-10 xs:max-w-[100%] md:max-w-[50%]" src='{{statamic name="main_image"}}'
                      alt="">
              </div>
          </div>
updated_by: 45bbdef4-30ec-4ee5-a2f6-dbc135b94cea
updated_at: 1705310647
template: components/main-layout-component
main_image: offers.png
seo_title: 'عروض دورات اللغة الانجليزية | عروض الدورات الإداريه  | عروض وخصومات علي  الدورات الاون لاين والحضوري'
description: '- لا تفوت عروض وخصومات دوراتنا. سجل في دورات اللغة الانجليزية - الإدارية و التصميم الجرافيكي والأمن السيبراني والمزيد -احصل على أفضل الصفقات. سجل الان'
---
{{livewire livewire="all-offers-component"}}