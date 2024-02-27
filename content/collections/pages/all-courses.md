---
id: deea791a-d997-417c-85b3-8fb83d3bc656
blueprint: page
title: 'all courses'
author: 2a4d4039-7725-4b10-a44b-1f90e9984c00
main: |-
  <div class="flex mx-10 justify-between">
              <div class="flex flex-col md:flex-row items-center :!pt-[200px] w-full justify-around">
                  <p class="font-[Somar Sans] font-medium text-[#8b0303] mt-5 text-[20px] md:text-[28px] xl:text-[40px]">
                      {{messages string="all courses"}}
                  </p>
                  <div class="absolute font-[Somar Sans] font-medium drop-shadow-[0_0px_10px_rgba(0,0,0,0.15)] shadow-inner rounded-bl-none bg-white rounded-md z-50 w-36 xl:w-44
                      right-2 top-60 py-1 xs:right-8 xs:top-64 sm:right-16 sm:top-[274px] md:right-[51.5%] md:top-[190px] md:py-0 lg:right-[55%] lg:top-[230px] lg:py-1
                      xl:right-[57%] xl:top-[54%] xl:py-2 xl:px-2">
                      <p class="inline pr-3 text-[15px] lg:text-[18px]">{{messages string="Technical courses"}}</p>
                      <img src='{{images link="icons/project-management.png"}}' class="inline w-[20%] mr-3">
                  </div>
                  <div class="absolute font-[Somar Sans] font-medium drop-shadow-[0_0px_10px_rgba(0,0,0,0.15)] shadow-inner rounded-bl-none bg-white rounded-md z-50 w-36 xl:w-44
                      left-2 top-[7.5rem] py-1 xs:left-6 xs:top-32 sm:left-5 sm:top-36 md:left-[6%] md:top-36 md:py-0 lg:left-[13%] lg:top-28 lg:py-1
                      xl:left-[14%] xl:top-[25%] xl:py-2 xl:px-2">
                      <p class="inline pr-3 text-[15px] lg:text-[18px]">{{messages string="Administrative courses"}}</p>
                      <img src='{{images link="icons/manager.png"}}' class="inline w-[20%] mr-3">
                  </div>
                  <div class="absolute font-[Somar Sans] font-medium drop-shadow-[0_0px_10px_rgba(0,0,0,0.15)] shadow-inner rounded-bl-none bg-white rounded-md z-30 w-40 xl:w-44
                      left-[-14px] top-[13.5rem] py-1 xs:left-1 xs:top-60 sm:left-7 sm:top-64 md:left-0 md:top-[82%] md:py-0 lg:left-[5%] lg:top-80 lg:py-1
                      xl:left-[7%] xl:top-[26rem] xl:py-2 xl:px-2">
                      <p class="inline pr-3 text-[15px] mr-[6px] lg:text-[18px]">{{messages string="English language pu"}}
                      </p>
                      <img src='{{images link="icons/united-kingdom.png"}}' class="inline w-[15%] mr-1">
                  </div>
                  <img class="w-auto mt-14 xs:max-w-[100%] md:max-w-[30%] z-40"
                      src='{{statamic name="main_image"}}'>
              </div>
          </div>
updated_by: 45bbdef4-30ec-4ee5-a2f6-dbc135b94cea
updated_at: 1705310582
template: components/main-layout-component
main_image: courses-women.png
seo_title: 'دورات معاهد بروليدرز |  دورات انجليزية | تصميم الجرافيك | دورات ادارية'
description: |-
  سواء كنت ترغب في تطوير حياتك المهنية، أو تحديث مهاراتك، أو بدء مهارات جديدة، معهد بروليدرز  لديه دورة تدريبية تناسبك . 
  تصفح كتالوج الدورات التدريبية لدينا في مختلف المجالات والمستويات
---
{{livewire livewire="all-course-component"}}