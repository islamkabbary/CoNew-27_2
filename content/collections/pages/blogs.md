---
id: 1db4ffa1-a946-4187-b784-d94dc78648f1
blueprint: page
title: blogs
author: 95f07c81-c6e4-4760-a030-986a6afd6a34
template: components/main-layout-component
updated_by: 45bbdef4-30ec-4ee5-a2f6-dbc135b94cea
updated_at: 1695809567
main: |-
  <div class="flex mx-10 justify-between">
              <div class="flex flex-col md:flex-row items-center w-full justify-around">
                  <div
                      class="text-right flex flex-col items-center md:items-end gap-5 md:gap-[50px] lg:gap-[70px] mt-7 lg:mt-[100px] md:mr-10">
                      <h1
                          class="font-[Somar Sans] font-medium text-[24px] xs:text-[30px] sm:text-[40px] md:text-[56px] lg:text-[80px] text-[#8b0303] text-center md:text-right">
                          {{messages string="blog"}}
                      </h1>
                  </div>
                  <img class="z-20 w-auto mt-10 xs:max-w-[100%] md:max-w-[50%]" src='{{statamic name="main_image"}}'>
              </div>
          </div>
main_image: blog-man.png
seo_title: 'المدونة - معهد بروليدرز'
---
{{livewire livewire="blog-component"}}
