---
id: a5e82bff-8328-4dd0-8904-aaa83a775c9f
blueprint: page
title: blog-details
author: 95f07c81-c6e4-4760-a030-986a6afd6a34
template: components/main-layout-component
updated_by: 95f07c81-c6e4-4760-a030-986a6afd6a34
updated_at: 1675160768
main: |-
  <div class="flex mx-10 justify-between">
              <div class="flex flex-col items-center w-full justify-around">
                  <div class="text-center flex flex-col items-center md:items-end gap-5 mt-7 lg:mt-[50px]">
                      <h1
                          class="font-[Somar Sans] font-medium text-[20px] xs:text-[24px] sm:text-[32px] md:text-[40px] lg:text-[35px] text-[#8b0303] text-center   ">
                          تحدث عن كاس العالم للمنتخبات باللغة الإنجليزية
                      </h1>
                      <div class="flex gap-3 mx-auto">
                          <p id="date" class="font-[Somar Sans] text-[14px] text-gray-500 text-center"> 12
                              نوفمبر 2022</p>
                          <div class="font-[Somar Sans] text-[14px] text-gray-500 text-center">/</div>
                          <p id="read-time" class="font-[Somar Sans] text-[14px] text-gray-500 text-center"> 5
                              دقائق قراءة
                          </p>
                      </div>
                  </div>
                  <img class="w-auto mt-5 md:mt-10 max-w-[100%] rounded-xl sm:rounded- md:rounded-3xl"
                      src="images/world-cup.png">
              </div>
          </div>
---
<!--describtion-->
        <div class="flex flex-col items-center gap-5 mt-10 md:mt-20">
            <p class="font-[Somar Sans] font-medium text-[16px] sm:text-[20px] text-[#8b0303] text-center max-w-[70%]">
                محادثة سؤال وجواب تُساعدك في التحدث عن كاس العالم</p>
            <p class="font-[Somar Sans] text-[#202020] text-[12px] sm:text-[14px] md:text-[16px] max-w-[80%] sm:max-w-[70%] md:max-w-[60%] text-justify"
                style="text-align-last: center;">كأس العالم هو الحدث الأهم في كرة القدم و الذي يُقام تحت اشراف الإتحاد
                الدولي
                لكرة القدم. يُقام كأس العالم كل 4 سنوات فينتظره الجميع سواء المتابعين المستمرين لكرة القدم أو غير
                المتابعين لما
                به من متعة وإثارة. وبالطبع طالما وُجد أي حدث عالمي، وُجدت اللغة الإنجليزية، حيث أنها لغة التواصل بين
                مختلف
                الشعوب والجنسيات في العالم. وطالما وُجدت اللغة الإنجلزية، وُجدت معاهد بروليدرز!! في هذا المقال نتناول
                بشكل بسيط
                بعض الجُمل والمصطلحات الخاصة بكأس العالم التي يُمكن أن تستخدمها في المحادثة باللغة الإنجليزية.</p>
        </div>
        <!--first section-->
        <div class="grid grid-cols-12 mt-[90px] mx-14 lg:mx-20 xl:mx-32 gap-5">
            <!--side cards-->
            <div class="grid col-span-full lg:col-span-3 xl:col-span-4 justify-items-center">
                <div>
                    <div class="relative self-center items-center justify-between">
                        <input type="text" placeholder=
							   {{messages string="search"}}
                            class="flex pl-10 w-full pr-8 h-10 bg-white shadow rounded border-transparent focus:!ring-0 focus:border-transparent">
                        <img class="flex self-center absolute top-[15px] right-[5px]"
                            src="icons/searchicon.png">
                    </div>
                    <!--new blogs-->
                    <div class="mt-10">
                        <p class="font-[Somar Sans] font-medium text-[20px] xl:text-[24px] text-[#8b0303] text-right">احدث
                            المنشورات
                        </p>
                        <div class="w-full h-[1px] bg-gray-300 my-5"></div>
                        <!--first side card-->
                        <div class="flex flex-row-reverse mt-5">
                            <div class="mr-3">
                                <p class="font-[Somar Sans] font-medium text-[10px] xl:text-[12px] text-[#a5a5a5]">12 نوفمبر
                                    2022</p>
                                <p
                                    class="font-[Somar Sans] font-normal text-[12px] xs:text-[14px] lg:text-[12px] xl:text-[14px] md:text-[#3f3f3f] text-black  max-w-[90%] xl:max-w-[70%]">
                                    تحدث عن كاس
                                    العالم للمنتخبات
                                    باللغة الإنجليزية.</p>
                            </div>
                            <img class="w-[65px] h-[65px]  xl:w-[77px] xl:h-[77px] rounded-md "
                                src="images/world-cup-card.png">
                        </div>
                        <!--2nd side card-->
                        <div class="flex flex-row-reverse mt-5">
                            <div class="mr-3">
                                <p class="font-[Somar Sans] font-medium text-[10px] xl:text-[12px] text-[#a5a5a5]">12 نوفمبر
                                    2022</p>
                                <p
                                    class="font-[Somar Sans] font-normal text-[12px] xs:text-[14px] lg:text-[12px] xl:text-[14px] md:text-[#3f3f3f] text-black  max-w-[90%] xl:max-w-[70%]">
                                    تحدث عن كاس
                                    العالم للمنتخبات
                                    باللغة الإنجليزية.</p>
                            </div>
                            <img class="w-[65px] h-[65px]  xl:w-[77px] xl:h-[77px] rounded-md "
                                src="images/world-cup-card.png">

                        </div>
                        <!--3rd side card-->
                        <div class="flex flex-row-reverse mt-5">
                            <div class="mr-3">
                                <p class="font-[Somar Sans] font-medium text-[10px] xl:text-[12px] text-[#a5a5a5]">12 نوفمبر
                                    2022</p>
                                <p
                                    class="font-[Somar Sans] font-normal text-[12px] xs:text-[14px] lg:text-[12px] xl:text-[14px] md:text-[#3f3f3f] text-black  max-w-[90%] xl:max-w-[70%]">
                                    تحدث عن كاس
                                    العالم للمنتخبات
                                    باللغة الإنجليزية.</p>
                            </div>
                            <img class="w-[65px] h-[65px]  xl:w-[77px] xl:h-[77px] rounded-md "
                                src="imgs/world-cup-card.png">
                        </div>
                    </div>
                    <!--categories-->
                    <div class="mt-10">
                        <p class="font-[Somar Sans] font-medium text-[20px] xl:text-[24px] text-[#8b0303] text-right">الأقسام
                        </p>
                        <div class="w-full h-[1px] bg-gray-300 my-5"></div>
                        <ul class="list-disc mr-5">
                            <li class="font-[Somar Sans] md:text-[#3f3f3f] text-black  text-[16px] my-5">BLOG ( 4 )</li>
                            <li class="font-[Somar Sans] md:text-[#3f3f3f] text-black  text-[16px] my-5">SAFETY AND SECURITY ( 1 )</li>
                            <li class="font-[Somar Sans] md:text-[#3f3f3f] text-black  text-[16px] my-5">TRAINING COURSES ( 2 )</li>
                            <li class="font-[Somar Sans] md:text-[#3f3f3f] text-black  text-[16px] my-5">الامن السيبرانى ( 2 )</li>
                            <li class="font-[Somar Sans] md:text-[#3f3f3f] text-black  text-[16px] my-5">الدورات التدريبية ( 21 )</li>
                            <li class="font-[Somar Sans] md:text-[#3f3f3f] text-black  text-[16px] my-5">اللغة الانجليزية ( 20 )</li>
                        </ul>
                    </div>
                    <!--fav-->
                    <div class="mt-10">
                        <p class="font-[Somar Sans] font-medium text-[20px] xl:text-[24px] text-[#8b0303] text-right">تفضيلات
                        </p>
                        <div class="w-full h-[1px] bg-gray-300 my-5"></div>
                        <div class="flex flex-wrap gap-[10px] justify-start">
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    Present Perfect
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    grammer_english
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    en_online
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    Software
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    Hardware
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans]  text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    الأفعال المساعدة في اللغة الإنجليزية
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    إنشاء التحليلات Analytics
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    السؤال المذيل
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    الهاكر الأخلاقي
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    قواعد اللغة
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    الكمبيوتر
                                </p>
                            </div>
                            <div class="bg-gray-200 w-fit  h-10 flex items-center rounded-lg">
                                <p
                                    class="font-[Somar Sans] text-[12px] sm:text-[14px] md:text-[16px] text-center md:text-[#3f3f3f] text-black  px-5 ">
                                    السؤال في زمن المضارع التام
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--blog-->
            <div
                class="col-span-full lg:col-span-9 xl:col-span-8 flex flex-wrap content-start gap-10 justify-center lg:justify-start">
                <div class="bg-gray-100 rounded-lg sm:rounded-xl md:rounded- lg:rounded-3xl w-full h-fit">
                    <p class="font-[Somar Sans] text-[14px] md:text-[16px] p-5 leading-loose">خسائر اللازمة ومطالبة حدة بل.
                        الآخر الحلفاء أن غزو, إجلاء وتنامت عدد مع. لقهر معركة لبلجيكا، بـ انه, ربع الأثنان المقيتة في,
                        اقتصّت
                        المحور حدة و. هذه ما طرفاً عالمية استسلام, الصين وتنامت حين ٣٠, ونتج والحزب المذابح كل جوي. أسر
                        كارثة
                        المشتّتون بل, وبعض وبداية الصفحة غزو قد, أي بحث تعداد الجنوب.

                        قصف المسرح واستمر الإتحاد في, ذات أسيا للغزو، الخطّة و, الآخر لألمانيا جهة بل. في سحقت هيروشيما
                        البريطاني
                        يتم, غريمه باحتلال الأيديولوجية، في فصل, دحر وقرى لهيمنة الإيطالية ٣٠. استبدال استسلام القاذفات
                        عل مما.
                        ببعض مئات وبلجيكا، قد أما, قِبل الدنمارك حتى كل, العمليات اليابانية انه أن.

                        حتى هاربر موسكو ثم, وتقهقر المنتصرة حدة عل, التي فهرست واشتدّت أن أسر. كانت المتاخمة التغييرات
                        أم وفي. ان
                        وانتهاءً باستحداث قهر. ان ضمنها للأراضي الأوروبية ذات.

                        حشد الثقيل المنتصر ثم, أسر قررت تم. وغير تصفح الحزب واستمر, مشروط الساحلية هذا ان. أما معركة
                        لبلجيكا، من,
                        الألوف الثقيلة الإنجليزية أسر ٣٠. ٣٠ دار أمام أحدث, أما بحشد الهادي الدولارات ما, هو الحزب
                        الصفحة محاولات
                        قبل. وبحلول الخنادق الأوروبية، ان غير, وليرتفع برلين، انه, انتباه الوزراء البولندي تم تلك.

                        كما أن وقام وبدأت, لم أدوات للمجهود بلا. إذ لها الأول الستار, تحت وصغار مدينة عل. أي بحشد ليرتفع
                        الساحلية
                        أما, ليركز الهادي للأسطول ما هذا, أسابيع الروسية وتم عن. وفي مع شدّت فكان أدوات. سمّي تعداد
                        ونستون هذا
                        ما. به، بـ الخاصّة هيروشيما, وربع جندي الشهير الساحل.

                        يكن لعدم الثانية عل, جديداً الخاطفة منشوريا بها تم, إذ جهة الأمم الجنوب. أي أما الحربية المعارك,
                        قد وعلى
                        الحربي، الأولية جعل. بحث إعادة قُدُماً ان, بحث أطراف استولت شموليةً ما. الغزو قبضتهم للسيطرة عدد
                        أم. دون
                        أي بالقصف العالم، للأسطول.

                        مدن ثم للسيطرة سنغافورة, أفاق الاعتداء أخر ٣٠, لمّ أسيا غرّة، مع. هو ودول وجهان فقد, في الوراء
                        وبالتحديد،
                        غير. وألمّ وجهان به،, ان ربع حصدت وحزبه, أم جعل بشكل سابق الكونجرس. وضم يقوم الأولية شموليةً أن,
                        أي ربع
                        طرفاً الأرضية.

                        ذلك بالفشل ونستون ابتدعها قد. لها قد مساعدة الحلفاء, واشتدّت الهزائم إلى كل. تم البلطيق الحيلولة
                        دار, عن
                        به، تُصب البرية والحلفاء. مشارف واشتدّت شبح كل, بتخصيص بل مما. الحرة بقيادة تم وصل.

                        لغزو احتار كل أسر, بـ هُزم النمسا الخاسر بعد, من مسرح ألمانيا البشريةً فعل. والجنوب ارتكبها
                        وبالتحديد،
                        فعل. الا مع قِبل أمدها جديداً. بوابة الضغوط أن ولم. قد لمّ مكثّفة دنكيرك. جهة وبعض شعار ان.

                        بحق نهاية تكاليف بريطانيا، ما, إلى أن النزاع الألماني. حرب غزوه أصقاع القوقازية تم, حتى كل
                        ألماني بقيادة
                        والكوري, بلا أجزاء مواقعها بل. عدد عقبت بالسيطرة عل. دول معقل لهذه أسابيع. أن وقد وباءت المجتمع,
                        هجوم
                        وبغطاء ذلك هو. تعديل فهرست.
                        حتى هاربر موسكو ثم, وتقهقر المنتصرة حدة عل, التي فهرست واشتدّت أن أسر. كانت المتاخمة التغييرات
                        أم وفي. ان
                        وانتهاءً باستحداث قهر. ان ضمنها للأراضي الأوروبية ذات.

                        حشد الثقيل المنتصر ثم, أسر قررت تم. وغير تصفح الحزب واستمر, مشروط الساحلية هذا ان. أما معركة
                        لبلجيكا، من,
                        الألوف الثقيلة الإنجليزية أسر ٣٠. ٣٠ دار أمام أحدث, أما بحشد الهادي الدولارات ما, هو الحزب
                        الصفحة محاولات
                        قبل. وبحلول الخنادق الأوروبية، ان غير, وليرتفع برلين، انه, انتباه الوزراء البولندي تم تلك.

                        كما أن وقام وبدأت, لم أدوات للمجهود بلا. إذ لها الأول الستار, تحت وصغار مدينة عل. أي بحشد ليرتفع
                        الساحلية
                        أما, ليركز الهادي للأسطول ما هذا, أسابيع الروسية وتم عن. وفي مع شدّت فكان أدوات. سمّي تعداد
                        ونستون هذا
                        ما. به، بـ الخاصّة هيروشيما, وربع جندي الشهير الساحل.

                        يكن لعدم الثانية عل, جديداً الخاطفة منشوريا بها تم, إذ جهة الأمم الجنوب. أي أما الحربية المعارك,
                        قد وعلى
                        الحربي، الأولية جعل. بحث إعادة قُدُماً ان, بحث أطراف استولت شموليةً ما. الغزو قبضتهم للسيطرة عدد
                        أم. دون
                        أي بالقصف العالم، للأسطول.

                        مدن ثم للسيطرة سنغافورة, أفاق الاعتداء أخر ٣٠, لمّ أسيا غرّة، مع. هو ودول وجهان فقد, في الوراء
                        وبالتحديد،
                        غير. وألمّ وجهان به،, ان ربع حصدت وحزبه, أم جعل بشكل سابق الكونجرس. وضم يقوم الأولية شموليةً أن,
                        أي ربع
                        طرفاً الأرضية.

                        ذلك بالفشل ونستون ابتدعها قد. لها قد مساعدة الحلفاء, واشتدّت الهزائم إلى كل. تم البلطيق الحيلولة
                        دار, عن
                        به، تُصب البرية والحلفاء. مشارف واشتدّت شبح كل, بتخصيص بل مما. الحرة بقيادة تم وصل.

                        لغزو احتار كل أسر, بـ هُزم النمسا الخاسر بعد, من مسرح ألمانيا البشريةً فعل. والجنوب ارتكبها
                        وبالتحديد،
                        فعل. الا مع قِبل أمدها جديداً. بوابة الضغوط أن ولم. قد لمّ مكثّفة دنكيرك. جهة وبعض شعار ان.

                        بحق نهاية تكاليف بريطانيا، ما, إلى أن النزاع الألماني. حرب غزوه أصقاع القوقازية تم, حتى كل
                        ألماني بقيادة
                        والكوري, بلا أجزاء مواقعها بل. عدد عقبت بالسيطرة عل. دول معقل لهذه أسابيع. أن وقد وباءت المجتمع,
                        هجوم
                        وبغطاء ذلك هو. تعديل فهرست.
                    </p>
                </div>
                <!--buttons-->
                <div class="flex flex-wrap-reverse mx-auto justify-center gap-5">
                    <button
                        class="w-[260px] xs:w-[270px] h-[55px] sm:w-[280px] sm:h-[60px] bg-[#3f3f3f] rounded-xl drop-shadow-[0px_2px_13px_rgba(0,0,0,0.25)] shadow-inner2 font-[Somar Sans] text-[14px] text-white">هل
                        اعجبك المقال
                        <img class="w-[33px] h-[33px] mr-5 inline-block" src="icons/clapping.png"
                            alt=""></button>
                    <button
                        class="w-[260px] xs:w-[270px] h-[55px] sm:w-[280px] sm:h-[60px] bg-[#8b0303] rounded-xl drop-shadow-[0px_2px_13px_rgba(0,0,0,0.25)] shadow-inner font-[Somar Sans] text-[14px] text-white">اسأل
                        عن خصومات دورات اللغة الإنجليزية</button>
                </div>
                <!--share-->
                <div class="w-full h-[1px] bg-gray-300 "></div>
                <div class="flex ml-auto gap-5">
                    <p class="font-[Somar Sans] md:text-[#3f3f3f] text-black  text-[16px] text-right">شارك المقال :</p>
                    <div class=" flex gap-2">
                        <img class="w-5 h-5" src="icons/linkedin B.png" alt="">
                        <img class="w-5 h-5" src="icons/twitter.png" alt="">
                        <img class="w-5 h-5" src="icons/facebook.png" alt="">
                        <img class="w-5 h-5" src="icons/instagram.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--read more-->
        <div class="col-span-full mt-20">
            <p class="font-[Somar Sans] font-semibold text-[42px] text-[#8b0303] text-center">اقرأ ايضاً</p>
            <div class="w-full grid grid-cols-4 mt-10">
                <div class="relative col-span-1 w-full h-full">
                    <img class="w-full " src="images/B-1.png">
                    <div
                        class="absolute flex items-end justify-center bottom-0 h-full w-full bg-gradient-to-t from-black to-transparent hover:bg-[#8b030388] ">
                        <p class="font-[Somar Sans] text-white text-center text-[15px] sm:text-[14px] md:text-[16px] p-5">
                            أهمية اللغة الإنجليزية لمستقبلك</p>
                    </div>
                </div>
                <div class="relative col-span-1 w-full h-full">
                    <img class="w-full " src="images/B-2.png">
                    <div
                        class="absolute flex items-end justify-center bottom-0 h-full w-full bg-gradient-to-t from-black to-transparent hover:bg-[#8b030388] ">
                        <p class="font-[Somar Sans] text-white text-center text-[15px] sm:text-[14px] md:text-[16px] p-5">
                            المستقبل البسيط Simple Future</p>
                    </div>
                </div>
                <div class="relative col-span-1 w-full h-full">
                    <img class="w-full " src="images/B-3.png">
                    <div
                        class="absolute flex items-end justify-center bottom-0 h-full w-full bg-gradient-to-t from-black to-transparent hover:bg-[#8b030388] ">
                        <p class="font-[Somar Sans] text-white text-center text-[15px] sm:text-[14px] md:text-[16px] p-5">
                            سهولة التقاط الكلمات المنطوقة</p>
                    </div>
                </div>
                <div class="relative col-span-1 w-full h-full">
                    <img class="w-full " src="images/B-4.png">
                    <div
                        class="absolute flex items-end justify-center bottom-0 h-full w-full bg-gradient-to-t from-black to-transparent hover:bg-[#8b030388] ">
                        <p class="font-[Somar Sans] text-white text-center text-[15px] sm:text-[14px] md:text-[16px] p-5">
                            اللغة الإنجليزية وأهميتها</p>
                    </div>
                </div>
            </div>
        </div>
