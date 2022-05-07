<script>
    // import axios from 'axios';
    //! API Key Mongo::
    //! m3FUuHm5p3MM1WXFdc1psBePDcuSvkZ4cEYmuepr7dTkjgiotsXBAEYyS6X2arQw
    //! m3FUuHm5p3MM1WXFdc1psBePDcuSvkZ4cEYmuepr7dTkjgiotsXBAEYyS6X2arQw


    arb = document.getElementById("arbTranslate");
    eng = document.getElementById("engTranslate");

    var lang = 0;

    console.log("first lang", lang);

    function changeLang() {
        if (lang == 0) {
            //! Converting to Arb
            lang = 1;
            console.log("DB lang Arb", lang);
            // location.reload();
            translate();
        } else if (lang == 1) {
            //! Converting to Eng
            lang = 0;
            console.log("DB lang Eng", lang);
            // location.reload();
            translate();
        }
    }


    // function translate() {
    window.onload = function translate() {
        if (lang == 1) {

            // eng.style.display = "block";
            // arb.style.display = "none";

            var page;
            if (document.location.href.match(/[^\/]+$/)[0] != null)
                page = document.location.href.match(/[^\/]+$/)[0];
            else
                page = "home";

            // if (lang == "1") {

            var faq_arb = [{
                    key: 0,
                    faq_question: "هي يمكن لأي طالب/ولي أمر الإشتراك في تعليمي؟",
                    faq_answer: 'يمكن حصريا للطلاب/أولياء الأمور المنتسبين للمدارس المعتمدين في قائمة المدارس على موقع تعليمي (www.taalimibahrain.com)',
                },
                {
                    key: 1,
                    faq_question: 'ماذا يعني الإشتراك السنوي؟',
                    faq_answer: 'الإشتراك السنوي هو المبلغ المدفوع لقاء استخدام خدمات ومميزات تطبيق تعليمي للسنة الدراسية المحددة من قبل المشترك.',
                },
                {
                    key: 2,
                    faq_question: 'هل يمكن استرجاع النقد المدفوع للإشتراك؟',
                    faq_answer: 'جميع إشتراكات برنامج تعليمي غير قابلة للإسترجاع.'
                },
                {
                    key: 3,
                    faq_question: 'ماذا لو اشتركت خلال منتصف العام الدراسي. هل مازلت ملزما بدفع كامل الإشتراك؟',
                    faq_answer: 'نعم، تدفع الإشتراكات لاستخدام خدمات البرنامج لكل السنة الدراسية المحددة أو جزء منها.',
                },
                {
                    key: 4,
                    faq_question: 'هل تعليمي بحرين منشأة خاصة أم حكومية؟',
                    faq_answer: 'تعليمي بحرين هو اسم تجاري لمنشأة قانونية مسجلة في البحرين، وهي الموزع الحصري في البحرين لبرامج تعليمي الخاصة بشركة فاليوتيك.',
                }
            ]

            document.getElementById('homeNav').innerText = 'الرئيسية';
            document.getElementById('faqNav').innerText = 'استفسارات متكررة';
            document.getElementById('planNav').innerText = 'الباقات والأسعار';
            document.getElementById('privacy_policyNav').innerText = 'سياسة الخصوصية';
            document.getElementById('contact_us_Nav').innerText = 'اتصل بنا';
            document.getElementById('loginNav').innerText = 'تسجيل الدخول';
            document.getElementById('registerationNav').innerText = 'التسجيل';


            let pageHead = document.getElementById('pageHeading').innerText;
            if (pageHead == '' || pageHead == 'HOME') {
                document.getElementById('pageHeading').innerText = 'الرئيسية';
            } else if (pageHead == 'FAQ') {
                document.getElementById('pageHeading').innerText = 'استفسارات متكررة';
            } else if (pageHead == 'PLANS') {
                document.getElementById('pageHeading').innerText = 'الباقات والأسعار';
            } else if (pageHead == 'PRIVACYPOLICY') {
                document.getElementById('pageHeading').innerText = 'سياسة الخصوصية';
            } else if (pageHead == 'CONTACT_US') {
                document.getElementById('pageHeading').innerText = 'اتصل بنا';
            } else if (pageHead == 'REGISTRATION') {
                document.getElementById('pageHeading').innerText = 'التسجيل';
            }


            if (page == "contact_us") {

                document.getElementById('email').innerText = 'البريد الإلكتروني';
                document.getElementById('mobile').innerText = 'الهاتف الخلوي';
                document.getElementById('bahrain').innerText = 'البحرين';
                document.getElementById('KSA').innerText = 'المملكة العربية السعودية';
                document.getElementById('UAE').innerText = 'الإمارات العربية المتحدة';
                document.getElementById('india').innerText = 'الهند';
            } else if (page == "plans") {

                document.getElementById('plans').innerHTML = '<span class="HT"> خططنا </span>';

                document.getElementsByClassName('currency')[0].innerHTML = 'د.ب &nbsp;&nbsp;';
                document.getElementsByClassName('currency')[1].innerHTML = 'د.ب &nbsp;&nbsp;';
                document.getElementById('prnt_price1').innerText = '٢٤.٠٠';
                document.getElementById('prnt_price2').innerText = '١١.٠٠';

                document.getElementsByClassName('features')[0].innerText = 'المميزات';
                document.getElementsByClassName('features')[1].innerText = 'المميزات';
                document.getElementsByClassName('features')[2].innerText = 'المميزات';

                document.getElementsByClassName('sub_per_user')[0].innerText = 'الإشتراك السنوي لكل مستخدم';
                document.getElementsByClassName('sub_per_user')[1].innerText = 'الإشتراك السنوي لكل مستخدم';
                document.getElementsByClassName('showMore')[0].innerText = 'أظهر المزيد';
                document.getElementsByClassName('showMore')[1].innerText = 'أظهر المزيد';
                document.getElementsByClassName('showMore')[2].innerText = 'أظهر المزيد';
                document.getElementById('quote').innerText = 'الحصول على الاقتباس';

                document.getElementsByClassName('subNow')[0].innerText = 'إشترك الآن';
                document.getElementsByClassName('subNow')[1].innerText = 'إشترك الآن';

                //! School PLan
                document.getElementById('scl_mngmt_plan').innerText = 'باقة إدارة المدرسة';
                document.getElementById('annual_sub').innerText = 'الإشتراك السنوي';
                document.getElementsByClassName('DL1')[0].innerText = 'تسجيل الحضور والغياب للطلاب والمدرسين';
                document.getElementsByClassName('DL1')[1].innerText = ' قناة التواصل بين المعلمين وأولياء الأمور';
                document.getElementsByClassName('DL1')[2].innerText = ' التنبيهات والملاحظات ';
                document.getElementsByClassName('DL1')[3].innerText = ' الواجبات المنزلية والمشاركات والمشاريع ';
                document.getElementsByClassName('DL1')[4].innerText = ' لوحة مشاركات تفاعلية اون لاين';
                document.getElementsByClassName('DL1')[5].innerText = ' برنامج تخطيط أكاديمي ذكي';
                document.getElementsByClassName('DL1')[6].innerText = 'ملف الطالب والتقييمات الخاصة به';
                document.getElementsByClassName('DL1')[7].innerText = 'تطبيق خاص بالمشرفين';
                document.getElementsByClassName('DL1')[8].innerText = 'مسار عمل المعلمين وتنظيم إعادة جدولة حصصهم';
                document.getElementsByClassName('DL1')[9].innerText = 'برنامج ذكي لتخطيط مسار عمل المعلمين';
                document.getElementsByClassName('DL1')[10].innerText = 'كشف حضور وغياب المعلمين';
                document.getElementsByClassName('DL1')[11].innerText = 'الملاحظات والتنبيهات';
                document.getElementsByClassName('DL1')[12].innerText = 'كشف درجات الطلاب';
                document.getElementsByClassName('DL1')[13].innerText = 'الطلاب الأوائل';
                document.getElementsByClassName('DL1')[14].innerText = ' تقرير عمل المعلمين';
                document.getElementsByClassName('DL1')[15].innerText = ' كشف المعلمين البدلاء';
                document.getElementsByClassName('DL1')[16].innerText = 'كشف شكاوي أولياء الأمور';
                document.getElementsByClassName('DL1')[17].innerText = 'كشف طلبات أولياء الأمور';
                document.getElementsByClassName('DL1')[18].innerText = 'بوابة المعلمين';
                document.getElementsByClassName('DL1')[19].innerText = 'كشف حضور وغياب الطلاب';
                document.getElementsByClassName('DL1')[20].innerText = 'خطة التعليم';
                document.getElementsByClassName('DL1')[21].innerText = 'كشف الحضور والغياب ';
                document.getElementsByClassName('DL1')[22].innerText = ' إنشاء واجب منزلي';
                document.getElementsByClassName('DL1')[23].innerText = 'جدول الحصص اليومي';
                document.getElementsByClassName('DL1')[24].innerText = 'ملفات الطلاب';
                document.getElementsByClassName('DL1')[25].innerText = 'كشف تقييم الطلاب ';
                document.getElementsByClassName('DL1')[26].innerText = 'إرسال صورة';
                document.getElementsByClassName('DL1')[27].innerText = 'أحداث الفصل الدراسي';
                document.getElementsByClassName('DL1')[28].innerText = 'إرسال ملاحظات';
                document.getElementsByClassName('DL1')[29].innerText = 'رابط أولياء الأمور';
                document.getElementsByClassName('DL1')[30].innerText = 'منشورات عامة ';
                document.getElementsByClassName('DL1')[31].innerText = 'نقل الأحداث مباشرة';
                document.getElementsByClassName('DL1')[32].innerText = 'رحلات الباصات المدرسية';
                document.getElementsByClassName('DL1')[33].innerText = 'الرحلات المدرسية (الباصات)';
                document.getElementsByClassName('DL1')[34].innerText = 'بوابة منظم رحلات الباصات المدرسية';
                document.getElementsByClassName('DL1')[35].innerText = 'تطبيق خاص وبوابة مستقلة لإدراة وتنظيم رحلات الباصات المدرسية ';
                document.getElementsByClassName('DL1')[36].innerText = 'تطبيق مبتكر لسائق الباص';
                document.getElementsByClassName('DL1')[37].innerText = 'ملحق للرحلات المدرسية في تطبيق أولياء الأمور ';
                document.getElementsByClassName('DL1')[38].innerText = 'تقارير إدارية:';
                document.getElementsByClassName('DL1')[39].innerText = 'مسار رحلة الباص';
                document.getElementsByClassName('DL1')[40].innerText = 'كشف حضور وغياب السائقين';
                document.getElementsByClassName('DL1')[41].innerText = 'كشف حضور وغياب طلاب الباصات';
                document.getElementsByClassName('DL1')[42].innerText = 'مسافات الرحلة للباصات';
                document.getElementsByClassName('DL1')[43].innerText = 'تقييم عمل السائقين ';
                document.getElementsByClassName('DL1')[44].innerText = 'فترة انتظار الطلاب ';

                //! Parent Plan
                document.getElementById('prnt_plan').innerText = 'باقة أولياء الأمور';
                document.getElementsByClassName('DL2')[0].innerText = 'الحضور والغياب';
                document.getElementsByClassName('DL2')[1].innerText = 'المقررات';
                document.getElementsByClassName('DL2')[2].innerText = 'الواجبات المنزلية';
                document.getElementsByClassName('DL2')[3].innerText = 'الحصص اليومية';
                document.getElementsByClassName('DL2')[4].innerText = 'عن المدرسة';
                document.getElementsByClassName('DL2')[5].innerText = ' المشاركات';
                document.getElementsByClassName('DL2')[6].innerText = ' معرض الصور';
                document.getElementsByClassName('DL2')[7].innerText = ' ما يدور في الفصل';
                document.getElementsByClassName('DL2')[8].innerText = ' الملاحظات';
                document.getElementsByClassName('DL2')[9].innerText = 'رابط المعلم';
                document.getElementsByClassName('DL2')[10].innerText = 'الفعاليات';
                document.getElementsByClassName('DL2')[11].innerText = 'أحداث مباشرة من المدرسة';
                document.getElementsByClassName('DL2')[12].innerText = 'باقة وقت المنزل الخاصة باستلام التلاميذ';
                document.getElementsByClassName('DL2')[13].innerText = 'إرسال شكوى للإدارة';
                document.getElementsByClassName('DL2')[14].innerText = 'إرسال طلب للإدارة';
                document.getElementsByClassName('DL2')[15].innerText = 'كشف العلامات للطالب';

                //! Hafelaty Plan
                document.getElementById('hafilaty').innerText = 'باقة حافلتي';
                document.getElementsByClassName('DL3')[0].innerText = 'منصة السلامة الشاملة';
                document.getElementsByClassName('DL3')[1].innerText = 'انخفاض التكلفة وسهولة الاستخدام';
                document.getElementsByClassName('DL3')[2].innerText = 'تطبيق بلغات متعددة للمستخدم';
                document.getElementsByClassName('DL3')[3].innerText = 'تكنولوجيا سهولة تتبع الطالب (جيوتراك تكنولوجي)';
                document.getElementsByClassName('DL3')[4].innerText = 'تكنولوجيا النمو والتغير عند/حسب الحاجة (أدابتي بلد)';
                document.getElementsByClassName('DL3')[5].innerText = 'روتين الفصل';
                document.getElementsByClassName('DL3')[6].innerText = 'حلول متكاملة باستخدام السحاب';
                document.getElementsByClassName('DL3')[7].innerText = 'التقييم الآلي للسائق';
                document.getElementsByClassName('DL3')[8].innerText = 'مسارات مختصرة لمساعدة السائقين';

            } else if (page == "faq") {

                //! FAQ ARB
                document.getElementById('faq_eng').style.display = 'none';
                document.getElementById('faq_arb').style.display = 'block';

                faq_arb.forEach(i => {

                    document.getElementById('faq_arb').innerHTML += `
                <div class="panel panel-default">

                    <div class="panel-heading" role="tab" id="heading${i.key}">

                        <h4 class="panel-title asd">

                            `;
                    if (i.key == 0) {

                        document.getElementById('faq_arb').innerHTML += `

                            <a class="pa_italic " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse${i.key}" aria-expanded="true" aria-controls="collapse${i.key}">

                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>

                                ${i.faq_question}

                            </a>

                            `;
                    } else {

                        document.getElementById('faq_arb').innerHTML += `

                            <a class="pa_italic " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse${i.key}" aria-expanded="true" aria-controls="collapse${i.key}">

                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>

                                ${i.faq_question}

                            </a>
                            `;
                    }
                    document.getElementById('faq_arb').innerHTML += `

                        </h4>

                    </div>
                    `;
                    if (i.key == 0) {
                        document.getElementById('faq_arb').innerHTML += `

                    <div id="collapse${i.key}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading${i.key}">

                        <div class="panel-body panel_text">

                            ${i.faq_answer}

                        </div>

                    </div>

                    `;
                    } else {
                        document.getElementById('faq_arb').innerHTML += `
                    <div id="collapse${i.key}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading${i.key}">

                        <div class="panel-body panel_text">

                            ${i.faq_answer}

                        </div>

                    </div>
                    `;
                    }
                    document.getElementById('faq_arb').innerHTML += `
                </div>

                `;

                })

            } else if (page == "registration") {
                document.getElementsByClassName('cname')[0].innerText = 'اسم الشركة :';
                document.getElementsByClassName('sname')[0].innerText = 'أسم الطالب :';
                document.getElementsByClassName('sadd')[0].innerText = 'عنوان الطالب :';
                document.getElementsByClassName('cnum')[0].innerText = 'رقم الاتصال :';
                document.getElementsByClassName('email')[0].innerText = 'عنوان الايميل :';
                document.getElementsByClassName('stdnum')[0].innerText = 'عدد الطلاب في المدرسة:';
                document.getElementsByClassName('trnum')[0].innerText = 'عدد المعلمين في المدرسة:';
                document.getElementsByClassName('edtype')[0].innerText = 'نوع التعليم :';
                document.getElementById('building').innerText = 'بناء :';
                document.getElementById('road').innerText = 'طريق :';
                document.getElementById('block').innerText = 'منع :';
                document.getElementById('boy').innerText = 'أولاد';
                document.getElementById('girl').innerText = 'فتيات';
                document.getElementById('mix').innerText = 'مختلط';
                document.getElementById('registrationBtn').innerText = 'إرسال';
            } else if (page == "privacypolicy") {
                document.getElementById('p0').innerText = 'يرجى قراءة الشروط والأحكام التالية بعناية قبل النقر فوق الزر "أوافق على الشروط والأحكام العامة للمبيعات عبر الإنترنت". عن طريق تثبيت أو نسخ أو توزيع أو استخدام كل أو أي جزء من هذا البرنامج (كما هو محدد أدناه) ، فإنك (المشار إليه فيما يلي باسم "العميل" ، كما هو محدد أدناه) توافق على جميع شروط وأحكام هذه الاتفاقية. وحال عدم الموافقة على شروط هذه الاتفاقية ، لن يسمح لك باستخدام البرنامج. البرنامج مرخص وليس مباعًا ، فقط وفقًا لبنود هذه الاتفاقية.';

                document.getElementById('h1').innerText = '1. تعاريف:';
                document.getElementById('p1').innerText = 'كلمة "مالك تعليمي" تعني شركة قيمة التقنية للتجارة ، 3102 مركز صفوى التجاري، السليمانية، الرياض، المملكة العربية السعودية. حتى في حال إبرام هذه الاتفاقية أثناء وجودك في مملكة البحرين. كلمة "موزع تعليمي" تعني مؤسسة العامرة للتجارة العامة، سجل تجاري رقم 3-87618، البديع، مجمع 552، طريق 5219، بناية 616، حتى في حال إبرام هذه الإتفاقية أثناء وجودك في مملكة البحرين.  يعرض "موزع تعليمي" برامجه ويقدمها للترخيص أو التجربة أو العرض التوضيحي عبر المبيعات المباشرة أو متجره عبر الإنترنت أو عبر شبكة الموزعين في مملكة البحرين. يحكم استخدام برامج / تطبيقات تعليمي ترخيص رقمي المتضمّن في البرنامج. يُقصد بمصطلح "العميل" أو "أنت" أنت وأي كيان قانوني حصل على البرنامج وتم استخدامه نيابة عنه ؛ على سبيل المثال ، وحسب الاقتضاء ، صاحب العمل الخاص بك. يمكن للعميل ، عن طريق الاتصال المباشر مع تعليمي ، عبر موقعه على الإنترنت ومتجره http://www.taalimibahrain.com ، والاشتراك في باقة ترخيص البرنامج أو ترقية الباقة أو تجديد الاشتراك (يُشار إليها مجتمعةً باسم المنتج). يمكن للعميل أيضًا طلب الدعم الفني والمساعدة وخدمات التدريب (يشار إليها مجتمعةً بالخدمات). يُقصد بمصطلح "الكمبيوتر" جهازًا افتراضيًا أو جهازًا إلكترونيًا شخصيًا ماديًا يقبل المعلومات في شكل رقمي أو ما شابه ويتعامل معها للحصول على نتيجة محددة بناءً على سلسلة من الإرشادات ، بما في ذلك على سبيل المثال لا الحصر أجهزة الكمبيوتر المكتبية وأجهزة الكمبيوتر المحمولة والأجهزة اللوحية والأجهزة المحمولة وأجهزة الاتصالات السلكية واللاسلكية ، الأجهزة المتصلة بالإنترنت ومنتجات الأجهزة القادرة على تشغيل مجموعة متنوعة من برامج الإنتاجية أو الترفيه أو تطبيقات البرامج الأخرى التي تتوافق مع متطلبات النظام الخاصة بالبرنامج كما هو محدد في الوثائق. يُقصد بمصطلح "الوثائق" إرشادات الاستخدام الفنية وأوصاف البرنامج التي تنشرها تعليمي. "التوثيق" لا يشمل أي منتدى أو محتوى من قبل أي طرف ثالث. يُقصد بمصطلح "تكامل البرامج" عرض منتج فريد يجمع بين البرنامج ومنتج إضافي أو خدمة أو مكون إضافي. يُقصد بمصطلح "الاستخدام" الوصول إلى وظائف البرنامج أو تثبيتها أو تنزيلها أو الاستفادة منها بأي طريقة أخرى.';

                document.getElementById('h2').innerText = '2. ترخيص البرنامج:';
                document.getElementById('p2').innerHtml = '<p> منح الترخيص. إذا حصلت على البرنامج من "مالك تعليمي" أو أحد المرخص لهم ، ورهناً بامتثالك لشروط هذه الاتفاقية ، بما في ذلك القيود (إن وجدت) الواردة في القسم 3 ، يمنحك "مالك تعليمي" حقًا محدودًا -غير حصري وغير مجير للغير غير قابل للتحويل وغير قابل للترخيص من الباطن وغير قابل لاسترداد رسومه وقابل لإلغاء الرخصة -  لاستخدام البرنامج بطريقة تتفق مع تصميمه والغرض المقصود منه. بالنقر فوق الزر "شراء الآن" ، ترسل إلينا عرضًا ملزمًا لإبرام اتفاقية الشراء هذه مع "مالك تعليمي" بخصوص البرنامج.</p><p> استخدام عام. يجوز لك تثبيت نسخ متعددة من البرنامج واستخدامها على جهاز الكمبيوتر أو الكمبيوتر المحمول أو الجهاز اللوحي أو الهاتف الذكي.</p><p> استخدام الخادم. تسمح لك هذه الاتفاقية بتثبيت البرنامج أو استخدامه على خادم افتراضي ، أو خادم محلي.</p><p> التوزيع. لا يمنحك هذا الترخيص الحق في ترخيص البرنامج أو توزيعه.</p><p> تكامل البرمجيات. قد يتم توفير البرنامج لك كجزء من تكامل البرامج ويخضع استخدامك لتكامل البرامج لأي شروط إضافية قابلة للتطبيق.</p><p>حدود التوفر. قد لا يتوفر البرنامج بجميع اللغات أو للمقيمين من جميع البلدان.</p>';

                document.getElementById('h3').innerText = '3. القيود والمتطلبات:';
                document.getElementById('p3').innerHTML = '<p>التزامات الإستخدام. أنت توافق على أنك لن تستخدم البرنامج بخلاف ما تسمح به هذه الاتفاقية وأنك لن تستخدم البرنامج بطريقة لا تتفق مع تصميمه أو وثائقه.</p><p>قيود التكامل. لن تقوم بدمج البرنامج أو استخدامه مع أي برنامج أو مكون إضافي أو تحسين آخر ما لم نوفر التكامل أو نسمح به صراحة.</p><p>قيود المكونات. لن تدمج البرنامج أو تستخدمه مع أي برنامج إضافي لم يتم توفيره أو اعتماده مسبقًا من قبل "مالك تعليمي".</p><p>الميزات المعطلة. قد يحتوي البرنامج على ميزات أو وظائف مخفية أو تظهر معطلة أو "رمادية اللون" (إجمالاً ، "الميزات المعطلة"). سيتم تنشيط الميزات المعطلة فقط عند تمكين التكنولوجيا المتاحة فقط من "مالك تعليمي". لن تتمكن من الوصول إلى أو محاولة الوصول إلى أي ميزات معطلة بوسائل أخرى غير استخدام تقنيات التمكين هذه ، ولن تعتمد على البرنامج لإنشاء ميزة مشابهة إلى حد كبير لأي ميزة معطلة أو تتحايل بطريقة أخرى على التقنية التي تتحكم في تنشيط أي ميزة من هذا القبيل.</p><p>ملاحظة. لا يجوز لك تغيير أو إزالة أي حقوق نشر أو إشعار ملكية آخر يظهر على البرنامج أو فيه.</p><p>عدم السماح بالتعديل أو الهندسة العكسية. لا يسمح لك أن تقوم بتعديل أو تكييف أو ترجمة أو إنشاء أعمال مشتقة بناءً على البرنامج. لا يجوز لك إجراء هندسة عكسية أو فك تجميع أو تفكيك أو محاولة اكتشاف الكود المصدري للبرنامج بأي طريقة أخرى.</p>';
                document.getElementById('h4').innerText = '4. عدم جواز تحويل الإشتراك للغير';
                document.getElementById('p4').innerText = 'لا يسمح للمشترك بأن  يقوم بتأجير أو إعارة أو بيع أو ترخيص من الباطن أو التنازل عن حقوقه في البرنامج أو نقلها ، أو تفويض أي جزء من البرنامج ليتم نسخه على جهاز كمبيوتر أو جهاز لوحي أو هاتف محمول تابع لشخص أو كيان أو كيان قانوني آخر باستثناء ما هو مسموح به صراحةً هنا.';
                document.getElementById('h5').innerText = '5. ملكية الملكية الفكرية ، الاحتفاظ بالحقوق:';
                document.getElementById('p5').innerText = 'البرنامج هو ملكية فكرية لـ"مالك تعليمي". تعتبر بنية البرنامج وتنظيمه ورمزه ملكية فكرية قيّمة (على سبيل المثال ، الأسرار التجارية والمعلومات السرية) لـ "مالك تعليمي". البرنامج محمي بموجب القانون ، بما في ذلك على سبيل المثال لا الحصر قوانين حقوق النشر للمملكة العربية السعودية ومملكة البحرين ، وأحكام المعاهدات الدولية. باستثناء ما هو منصوص عليه صراحةً هنا ، لا تمنحك هذه الاتفاقية أي حقوق ملكية فكرية للبرنامج ، وجميع الحقوق غير الممنوحة صراحةً محفوظة بواسطة "مالك تعليمي".';
                document.getElementById('h6').innerText = '6. الإقتراحات والملاحظات:s';
                document.getElementById('p6').innerText = 'ليس لديك أي التزام بتزويدنا بأفكار أو اقتراحات أو مقترحات ("التعليقات"). إذا قررت إرسال ملاحظات إلينا ، فأنت تمنحنا ترخيصًا دوليا غير حصري، خالي من حقوق الملكية وقابل للترخيص من الباطن وقابل للتحويل لإجراء واستخدام وبيع وتقديم وعرض البيع والاستيراد وإعادة الإنتاج بشكل عام وعرض التعليقات وتوزيعها وتعديلها وتنفيذها علنًا.';
                document.getElementById('h7').innerText = '7. الاتصال بالإنترنت والخصوصية :';
                document.getElementById('p7').innerHtml = '<p>اتصالات تلقائية بالإنترنت. قد يتسبب البرنامج في اتصال جهاز الكمبيوتر أو الجهاز اللوحي أو الهاتف المحمول الخاص بك دون إشعار تلقائيًا بالإنترنت والتواصل مع موقع ويب تعليمي أو مجال تعليمي لأغراض مثل تزويدك بمعلومات أو ميزات أو وظائف إضافية. ما لم ينص هذا القسم على خلاف ذلك ، تنطبق الأحكام التالية على جميع اتصالات الإنترنت التلقائية بواسطة البرنامج.</p><p>جمع المعلومات. عندما يتصل البرنامج بـ مجال تعليمي عبر الإنترنت ، يتم جمع معلومات معينة وإرسالها بواسطة البرنامج إلى تعليمي وفقًا لسياسة الخصوصية عبر الإنترنت لـ تعليمي البحرين والمتوفرة على http://www.taalimibahrain.com/privacy ("سياسة الخصوصية") ، والتي قد يتم تحديثها من وقت لآخر.</p><p>التحديث. يجوز لنا تعديل البرنامج أو تحديثه أو إيقافه (بما في ذلك أي أجزاء أو ميزات) في أي وقت ، دون أي مسؤولية تجاهك أو تجاه أي شخص آخر. قد يتسبب البرنامج في اتصال جهاز الكمبيوتر أو الجهاز اللوحي أو الهاتف المحمول الخاص بك دون إشعار إضافي تلقائيًا بالإنترنت (بشكل متقطع أو على أساس منتظم) من أجل: (أ) التحقق من وجود تحديثات متاحة للتنزيل والتثبيت على جهاز الكمبيوتر أو الجهاز اللوحي أو الهاتف المحمول ؛ (ب) تنزيل التحديثات وتثبيتها تلقائيًا ؛ و (ج) إخطار تعليمي بنتائج محاولات التثبيت. قد تتخذ هذه التحديثات شكل إصلاحات للأخطاء أو ميزات جديدة أو إصدارات جديدة. أنت توافق على تلقي مثل هذه التحديثات من برامج تعليمي كجزء من استخدامك للبرنامج.</p><p>بيانات استخدام تطبيقات الهاتف المحمول / الجهاز اللوحي. لديك خيار مشاركة المعلومات معنا حول كيفية استخدام تطبيقات الهاتف المحمول / الجهاز اللوحي الخاصة بنا. حيثما يسمح القانون ، يتم تشغيل هذا الخيار افتراضيًا ، وترتبط المعلومات بحساب برامج تعليمي الخاصة بك. تسمح لنا هذه المعلومات بتزويدك بتجربة أكثر تخصيصًا وتساعدنا على تقييم عروضنا وتطوير خدماتنا وتعديلها وتحسينها ودعمها وتخصيصها وتشغيلها بناءً على استخدامك لأي خدمات ، حسب الاقتضاء. يمكنك تغيير تفضيلاتك في أي وقت على صفحة إدارة حساب برامج تعليمي الخاصة بك. لمعرفة المزيد حول بيانات استخدام تطبيقات الهاتف المحمول / الجهاز اللوحي ، انتقل إلى https://help.taalimibahrain.com.</p>';
                document.getElementById('h8').innerText = '8. عروض الطرف الثالث:';
                document.getElementById('p8').innerhTML = '<p>قد يسمح لك البرنامج بالوصول والتعامل مع محتوى الطرف الثالث وتطبيقات البرامج وخدمات البيانات ("عروض الطرف الثالث"). يخضع وصولك إلى أي عرض من طرف ثالث واستخدامه ، بما في ذلك أي خدمات أو معلومات ، للشروط والأحكام المتعلقة بهذه العروض ولقوانين حقوق النشر في المملكة العربية السعودية ومملكة البحرين. عروض الطرف الثالث ليست مملوكة أو مقدمة من "مالك تعليمي". أنت توافق على أنك لن تستخدم أيًا من عروض الطرف الثالث بما ينتهك قوانين حقوق الطبع والنشر في المملكة العربية السعودية أو مملكة البحرين. يجوز لـ "مالك تعليمي" أو الطرف الثالث في أي وقت ولأي سبب تعديل أو إيقاف إتاحة أي من عروض الأطراف الثالثة. لا تتحكم "مالك تعليمي" في عروض الجهات الخارجية أو تصادق عليها أو تقبل المسؤولية عنها. أي معاملات بينك وبين أي طرف ثالث فيما يتعلق بأي عروض من جهات خارجية ، بما في ذلك سياسات الخصوصية الخاصة بهذا الطرف واستخدام معلوماتك الشخصية ، وتقديم الخدمات والدفع مقابلها ، وأي أحكام أو شروط أو ضمانات أو إقرارات أخرى مرتبطة بهذه التعاملات بينك وبين الطرف الثالث فقط. قد لا تكون عروض الطرف الثالث متاحة بجميع اللغات أو للمقيمين من جميع البلدان ، ويجوز لـ "مالك تعليمي" أو الطرف الثالث ، في أي وقت ولأي سبب ، تعديل أو إيقاف إتاحة أي من عروض الطرف الثالث.</p><p>باستثناء ما تم الاتفاق عليه صراحةً بواسطة "مالك تعليمي" في اتفاقية منفصلة ، فإن استخدامك لـ برامج تعليمي وعروض الطرف الثالث يكون على مسؤوليتك الخاصة.</p>';
                document.getElementById('h9').innerText = '9. إخلاء المسؤولية عن الضمانات:';
                document.getElementById('p9').innerText = '<p>يتم توفير البرامج "كما هي". إلى أقصى حد يسمح به القانون ؛ تتنصل "مالك تعليمي" من جميع الضمانات ، الصريحة أو الضمنية ، بما في ذلك الضمانات الضمنية لعدم الانتهاك ، والقابلية للتسويق ، والملاءمة لغرض معين. تتنصل "مالك تعليمي" كذلك من أي ضمان (أ) بأن البرنامج سوف يفي بمتطلباتك أو سيكون متاحًا باستمرار أو غير متقطع أو في الوقت المناسب أو آمن أو خالي من الأخطاء ؛ (ب) ستكون النتائج التي تم الحصول عليها من استخدام البرنامج فعالة أو دقيقة أو موثوقة ؛ (ج) ستلبي جودة البرنامج توقعاتك ؛ أو (د) سيتم تصحيح أي أخطاء أو عيوب في البرنامج.</p><p>تخلي "مالك تعليمي" على وجه التحديد مسؤوليتها عن أي إجراءات ناتجة عن استخدامك للبرنامج. يجوز لك استخدام البرنامج والوصول إليه وفقًا لتقديرك الخاص وعلى مسؤوليتك الخاصة ، وأنت وحدك المسؤول عن أي ضرر يلحق بجهاز الكمبيوتر أو الجهاز اللوحي أو نظام تشغيل الهاتف المحمول أو فقدان البيانات الناتج عن استخدام البرنامج والوصول إليه.</p>';
                document.getElementById('h10').innerText = '10. تحديد الإلتزامات:';
                document.getElementById('p10').innerHTML = '<p>باستثناء التزام الطرف بتقديم تعويض بموجب هذه الاتفاقية والتزامات السرية لكل طرف ، لا يتحمل أي طرف بأي حال من الأحوال ، أو المرخصين أو الموردين التابعين له بموجب هذه الاتفاقية ، أي مسؤولية تجاه أي طرف آخر عن أي خسارة في الأرباح أو التكاليف. شراء خدمات بديلة ، أو عن أي أضرار عرضية أو عقابية أو غير مباشرة أو خاصة أو تبعية ، مهما كان سببها وبموجب أي نظرية مسؤولية (بما في ذلك الإهمال) وما إذا كان هذا الطرف قد تم إخطاره بإمكانية حدوث مثل هذا الضرر أم لا. لا تنطبق القيود المنصوص عليها في هذا القسم 10 على أي انتهاك أو اختلاس من قبل أي من الطرفين أو المتعاقدين معه لحقوق الملكية الفكرية للطرف الآخر. لا يجوز بأي حال من الأحوال أن تكون "مالك تعليمي" أو مسؤوليها أو مديريها أو موظفيها أو وكلائها أو مرخصيها أو مورديها مسؤولين أمام العملاء عن أكثر من مبلغ المبالغ المدفوعة بموجب هذه الاتفاقية من قبل العميل. لا ينطبق القيد السابق على الأضرار المباشرة على أي خرق من جانب "مالك تعليمي" لالتزاماتها المتعلقة بالسرية أو التزامات تعويض الملكية الفكرية لـ"مالك تعليمي" بموجب المادة 5. يتفق الطرفان على أن هذا القسم 10 يمثل توزيعًا معقولًا للمخاطر.</p><p>تقتصر مسؤولية "مالك تعليمي" الإجمالية في أي مسألة تنشأ عن هذه الاتفاقية أو تتعلق بها على المبالغ المدفوعة بموجب هذه الاتفاقية. سيتم تطبيق هذا القيد بغض النظر عن شكل أو مصدر المطالبة أو الخسارة ، سواء كانت المطالبة أو الخسارة متوقعة ، وما إذا كان قد تم إخطار أحد الأطراف بإمكانية المطالبة أو الخسارة.</p><p>تنطبق القيود والاستثناءات الواردة في هذا القسم إلى أقصى حد يسمح به القانون.</p><p>لا تتحمل "مالك تعليمي" أي مسؤولية تجاهك أو تجاه أي شخص آخر عن أي خسارة في الاستخدام أو البيانات أو الشهرة أو الأرباح ، على الإطلاق ، وأي أضرار خاصة أو عرضية أو غير مباشرة أو تبعية أو عقابية على الإطلاق ، بغض النظر عن السبب (حتى إذا تم إخطار "مالك تعليمي" بذلك احتمال الخسارة أو الأضرار) ، بما في ذلك الخسائر والأضرار (أ) الناتجة عن فقدان الاستخدام أو البيانات أو الأرباح ، سواء كانت متوقعة أم لا ؛ (ب) استنادًا إلى أي نظرية للمسؤولية ، بما في ذلك خرق العقد أو الضمان أو الإهمال أو أي إجراء ضار آخر ؛ أو (ج) التي تنشأ عن أي مطالبة أخرى أو فيما يتعلق باستخدامك أو وصولك إلى البرنامج.</p>';
                document.getElementById('h11').innerText = '11. قواعد التصدير:';
                document.getElementById('p11').innerText = 'يخضع البرنامج واستخدامك للبرنامج للمملكة العربية السعودية ومملكة البحرين. بالإضافة إلى القوانين والقيود واللوائح الدولية التي قد تحكم استيراد وتصدير واستخدام البرنامج. أنت توافق على الامتثال لجميع هذه القوانين والقيود واللوائح.';
                document.getElementById('h12').innerText = '12. التحديثات وتوفر المحتوى:s';
                document.getElementById('p12').innerText = 'يجوز لنا تعديل هذه الاتفاقية ، على سبيل المثال ، لتعكس التغييرات على القانون أو التغييرات على برامجنا. يجب عليك الاطلاع على هذه الاتفاقية بانتظام. سننشر إشعارًا بالتعديلات على هذه الاتفاقية من خلال هذه الصفحة. الاستمرار في استخدام البرنامج وبعد ادراج التعديلات سارية المفعول ، فإنك توافق على الالتزام بالشروط المعدلة للاتفاقية المحدثة.';
                document.getElementById('h13').innerText = '13. متفرقات:';
                document.getElementById('p13').innerHTML = '<p>النسخة الإنجليزية. ستكون النسخة الإنجليزية من هذه الاتفاقية أو النسخة العربية المترجمة من قبل أي مكتب قانوني في المملكة العربية السعودية هي النسخ المستخدمة عند تفسير أو شرح شروط هذه الاتفاقية.</p><p>العناوين. يتم توفير العناوين المستخدمة في هذه الاتفاقية للتسهيل فقط ولن يتم استخدامها لتفسير المعنى أو القصد.</p><p>المدفوعات والتحصيلات. يحق لـ"مالك تعليمي" تعيين موزع حصري وتفويضه لجمع واستلام جميع رسوم الاشتراك من العملاء نيابة عن "مالك تعليمي" (في الحسابات المصرفية للموزع الحصري) في الأقاليم المحددة لهم ، دون أي اعتراضات من أي طرف مرتبط بهذه المعاملة.</p><p>خيارات الدفع والأسعار والضرائب والعملة. سهلت "مالك تعليمي" للعملاء المحتملين معظم طرق الدفع الشائعة مثل (بطاقات الائتمان (فيزا ، ماستر كارد ، أمريكان إكسبريس) ، بنفت ، باي بال ، بطاقات الخصم) لباقاتها المقدمة (الغير شاملة لضريبة القيمة المضافة٪) بالدينار البحريني.</p><p>الاستقلالية. إذا تم اعتبار أي بند من أحكام هذه الاتفاقية غير صالح أو غير قابل للتنفيذ لأي سبب من الأسباب ، فستظل هذه الاتفاقية سارية المفعول والتأثير.</p><p>مسؤوليات الموزع المعتمد. من الواضح والمفهوم والمقبول لجميع الأطراف في اتفاقية الشروط والأحكام هذه أن الموزع الحصري والمعتمد من قبل "مالك تعليمي" في مملكة البحرين لديه مسؤوليات والتزامات محدودة تجاه العملاء ، والتي تغطي تسويق وبيع الاشتراكات للعملاء المحتملين ، والتحصيل نيابة عن "مالك تعليمي" عبر المتجر الإلكتروني ، لجميع الاشتراكات المتعلقة بإقليم البحرين. الموزع الحصري مسؤول عن الترويج للبرامج ، وتثبيت التطبيقات الخاصة بها ، وجمع الاشتراكات نيابة عن "مالك تعليمي".</p><p>لا تنازل. لا يُعد فشلنا في تنفيذ أو ممارسة أي حكم من أحكام هذه الاتفاقية تنازلاً عن هذا البند.</p>';
                document.getElementById('h14').innerText = '14. الاستمرارية:';
                document.getElementById('p14').innerText = 'عند انتهاء أو إنهاء هذه الاتفاقية ، قد يتوقف البرنامج عن العمل دون إشعار مسبق. ستظل التزامات التعويض الخاصة بك وإخلاء المسؤولية عن الضمان أو قيود الالتزامات وأحكام تسوية المنازعات المنصوص عليها في هذه الاتفاقية من "مالك تعليمي" سارية.';
                document.getElementById('h15').innerText = '15. فسخ العقد:';
                document.getElementById('p15').innerText = 'يحق لـ"مالك تعليمي" إنهاء هذه الاتفاقية لأي سبب أو بدون سبب عند تقديم إشعار كتابي قبل ثلاثين (30) يومًا على الأقل وإعادة الرسوم غير المُستخدمة للمدة المتبقية من هذا العقد إذا كان ذلك ممكنًا. ساريًا عند الإنهاء ، ستتوقف فورًا عن استخدامك للبرنامج وستتلف (بناءً على طلب من "مالك تعليمي") نسختك من البرنامج. ستتوقف جميع التراخيص الممنوحة لك من "مالك تعليمي" فور فسخ العقد.';
                document.getElementById('h16').innerText = '16. القانون الحاكم وفض المنازعات:';
                document.getElementById('p16').innerText = '  تخضع هذه الاتفاقية لقوانين للمملكة العربية السعودية ، بغض النظر عن تعارضها مع مبادئ القانون. يحتكم الأطراف بشكل غير قابل للنقض حصريا للمحاكم المختصة في المملكة العربية السعودية. فلا يجوز تطبيق أي خيار من قواعد القوانين لأي سلطة قضائية أخرى على هذه الاتفاقية. ويؤكد الطرفان أنهما يرغبان في صياغة هذه الاتفاقية باللغة الإنجليزية.s';
                document.getElementById('h17').innerText = '17. القوى القاهرة:';
                document.getElementById('p17').innerText = '  باستثناء التزامات كل طرف بدفع المال ، لن يتم اعتبار أي طرف مخالفًا لهذه الاتفاقية بسبب أي فشل أو تأخير في الأداء ناتج لأسباب خارجة عن إرادته المعقولة ، بما في ذلك على سبيل المثال لا الحصر ، القضاء والقدر والزلازل والحروب والإرهاب أو فشل الاتصال أو الإضرابات أو نقص المواد.';
                document.getElementById('h18').innerText = '18. التعليق:';
                document.getElementById('p18').innerHtml = '<p>تحتفظ "مالك تعليمي" بالحق في تعليق الوصول إلى البرنامج و / أو الخدمة من قبل الضباط أو المديرين أو الفريق الفني المعتمد ، ودون تعويض:</p><p>من أجل إجراء الصيانة على البرامج / التطبيقات. تتعهد "مالك تعليمي" ببذل كل ما في وسعها لاستعادة الخدمة بأسرع ما يمكن ؛</p><p>بسبب المشكلات الفنية التي تسببها البنية التحتية. تتعهد "مالك تعليمي" ببذل كل ما في وسعها لاستعادة الخدمة بأسرع ما يمكن ؛</p><p>خلال الفترة السابقة لقبول أو رفض التعديلات على شروط وأحكام تطبيق البرنامج من قبل المستخدم الأول المعتمد من جانب العميل.</p>';
                document.getElementById('h19').innerText = '19. حماية البيانات:';
                document.getElementById('p19').innerText = 'تلتزم "مالك تعليمي" بأحكام قانون حماية البيانات للمملكة العربية السعودية ومملكة البحرين ، وتتخذ جميع التدابير المعقولة للحفاظ على سرية وأمان معلومات العميل الشخصية.';
                document.getElementById('h20').innerText = '20. تقنيات التتبع وملفات تعريف الارتباط:';
                document.getElementById('p20').innerText = '';
                document.getElementById('h21').innerText = '';
                document.getElementById('p21').innerText = '';
                document.getElementById('h22').innerText = '';
                document.getElementById('p22').innerText = '';
                document.getElementById('h23').innerText = '';
                document.getElementById('p23').innerText = '';
                document.getElementById('h24').innerText = '';
                document.getElementById('p24').innerText = '';
                document.getElementById('h25').innerText = '';
                document.getElementById('p25').innerText = '';
                document.getElementById('h26').innerText = '';
                document.getElementById('p26').innerText = '';
                document.getElementById('h27').innerText = '';
                document.getElementById('p27').innerText = '';
                document.getElementById('h28').innerText = '';
                document.getElementById('p28').innerText = '';

            }

            // }
            // }
        } else if (lang == "0") {
            // function translateEng() {

            // arb.style.display = "block";
            // eng.style.display = "none";

            var page;
            if (document.location.href.match(/[^\/]+$/)[0] != null)
                page = document.location.href.match(/[^\/]+$/)[0];
            else
                page = "home";

            document.getElementById('homeNav').innerText = 'Home';
            document.getElementById('faqNav').innerText = 'Faqs';
            document.getElementById('planNav').innerText = 'Plans';
            document.getElementById('privacy_policyNav').innerText = 'Privacy Policy ';
            document.getElementById('contact_us_Nav').innerText = 'Contact Us';
            document.getElementById('loginNav').innerText = 'Login';
            document.getElementById('registerationNav').innerText = 'Registration';

            let pageHead = document.getElementById('pageHeading').innerText;
            if (pageHead == 'الرئيسية') {
                document.getElementById('pageHeading').innerText = 'HOME';
            } else if (pageHead == 'استفسارات متكررة') {
                document.getElementById('pageHeading').innerText = 'FAQ';
            } else if (pageHead == 'الباقات والأسعار') {
                document.getElementById('pageHeading').innerText = 'PLANS';
            } else if (pageHead == 'اتصل بنا') {
                document.getElementById('pageHeading').innerText = 'CONTACT_US';
            } else if (pageHead == 'التسجيل') {
                document.getElementById('pageHeading').innerText = 'REGISTRATION';
            }


            if (page == "contact_us") {

                document.getElementById('mobile').innerText = 'Mobile';
                document.getElementById('email').innerText = 'Email';
                document.getElementById('bahrain').innerText = 'Bahrain';
                document.getElementById('KSA').innerText = 'Saudi Arabia';
                document.getElementById('UAE').innerText = 'United Arab Emirates';
                document.getElementById('india').innerText = 'India';
            } else if (page == "plans") {

                document.getElementById('plans').innerHTML = 'Our <span class="HT"> PLans </span>';

                document.getElementsByClassName('currency')[0].innerText = 'BD';
                document.getElementsByClassName('currency')[1].innerText = 'BD';
                document.getElementById('prnt_price1').innerText = '24.00';
                document.getElementById('prnt_price2').innerText = '11.00';

                document.getElementsByClassName('features')[0].innerText = 'Features';
                document.getElementsByClassName('features')[1].innerText = 'Features';
                document.getElementsByClassName('features')[2].innerText = 'Features';

                document.getElementsByClassName('sub_per_user')[0].innerText = 'Annual subscription per user';
                document.getElementsByClassName('sub_per_user')[1].innerText = 'Annual Subscription per User';
                document.getElementsByClassName('showMore')[0].innerText = 'Show More';
                document.getElementsByClassName('showMore')[1].innerText = 'Show More';
                document.getElementsByClassName('showMore')[2].innerText = 'Show More';
                document.getElementById('quote').innerText = 'Get Quote';

                document.getElementsByClassName('subNow')[0].innerText = 'Subscribe Now';
                document.getElementsByClassName('subNow')[1].innerText = 'Subscribe Now';

                //! School PLan
                document.getElementById('scl_mngmt_plan').innerText = 'School Management Plan';
                document.getElementById('annual_sub').innerText = 'Annual Subscription';
                document.getElementsByClassName('DL1')[0].innerText = 'App based Teacher/Students Attendance';
                document.getElementsByClassName('DL1')[1].innerText = 'Teacher-Parent Communication';
                document.getElementsByClassName('DL1')[2].innerText = 'Alerts & Notifications';
                document.getElementsByClassName('DL1')[3].innerText = 'Homework & Project Assignments';
                document.getElementsByClassName('DL1')[4].innerText = 'Online interactive activity walls';
                document.getElementsByClassName('DL1')[5].innerText = 'Smart Academic Planner';
                document.getElementsByClassName('DL1')[6].innerText = 'Student Profile & Evaluation ';
                document.getElementsByClassName('DL1')[7].innerText = 'Supervisor App';
                document.getElementsByClassName('DL1')[8].innerText = 'Teacher Progress & Re-schedule';
                document.getElementsByClassName('DL1')[9].innerText = 'Smart Teach Plan (Teacher Progress)';
                document.getElementsByClassName('DL1')[10].innerText = 'Teachers Attendance';
                document.getElementsByClassName('DL1')[11].innerText = 'Notifications & Alerts';
                document.getElementsByClassName('DL1')[12].innerText = 'Students Pass Report';
                document.getElementsByClassName('DL1')[13].innerText = 'Students Toppers';
                document.getElementsByClassName('DL1')[14].innerText = 'Teachers Progress';
                document.getElementsByClassName('DL1')[15].innerText = 'Substitute Teachers';
                document.getElementsByClassName('DL1')[16].innerText = 'Parents Complains';
                document.getElementsByClassName('DL1')[17].innerText = 'Parents Requests';
                document.getElementsByClassName('DL1')[18].innerText = 'TEACHERS (PORTAL)';
                document.getElementsByClassName('DL1')[19].innerText = 'Students Attendance';
                document.getElementsByClassName('DL1')[20].innerText = 'Teach plans';
                document.getElementsByClassName('DL1')[21].innerText = 'Attendance';
                document.getElementsByClassName('DL1')[22].innerText = 'Post Homework';
                document.getElementsByClassName('DL1')[23].innerText = 'Class Routine';
                document.getElementsByClassName('DL1')[24].innerText = 'Student Profile';
                document.getElementsByClassName('DL1')[25].innerText = 'Evaluations';
                document.getElementsByClassName('DL1')[26].innerText = 'Post Pictures';
                document.getElementsByClassName('DL1')[27].innerText = 'Class Feed';
                document.getElementsByClassName('DL1')[28].innerText = 'Send Notices';
                document.getElementsByClassName('DL1')[29].innerText = 'Parents Link';
                document.getElementsByClassName('DL1')[30].innerText = 'Broadcast';
                document.getElementsByClassName('DL1')[31].innerText = 'Live Feed';
                document.getElementsByClassName('DL1')[32].innerText = 'Transport';
                document.getElementsByClassName('DL1')[33].innerText = 'TRANSPORTATION (BUSES)';
                document.getElementsByClassName('DL1')[34].innerText = 'Transport Admin Portal';
                document.getElementsByClassName('DL1')[35].innerText = 'Dedicated School Transport Admin App and Portal ';
                document.getElementsByClassName('DL1')[36].innerText = 'Innovative Driver App';
                document.getElementsByClassName('DL1')[37].innerText = 'Connected Parent App';
                document.getElementsByClassName('DL1')[38].innerText = 'Management Reports';
                document.getElementsByClassName('DL1')[39].innerText = 'Bus Travel Rout';
                document.getElementsByClassName('DL1')[40].innerText = 'Drivers Attendance';
                document.getElementsByClassName('DL1')[41].innerText = 'Students Attendance';
                document.getElementsByClassName('DL1')[42].innerText = 'Bus Travel Distance';
                document.getElementsByClassName('DL1')[43].innerText = 'Drivers Performance';
                document.getElementsByClassName('DL1')[44].innerText = 'Waiting Time of Students ';

                //! Parent Plan
                document.getElementById('prnt_plan').innerText = 'PARENT PLAN SCHOOOLY & HOMETIME';
                document.getElementsByClassName('DL2')[0].innerText = 'Attendance';
                document.getElementsByClassName('DL2')[1].innerText = 'Syllabus';
                document.getElementsByClassName('DL2')[2].innerText = 'Homework ';
                document.getElementsByClassName('DL2')[3].innerText = 'Class Routine ';
                document.getElementsByClassName('DL2')[4].innerText = 'About School ';
                document.getElementsByClassName('DL2')[5].innerText = 'Assignments';
                document.getElementsByClassName('DL2')[6].innerText = 'Gallery ';
                document.getElementsByClassName('DL2')[7].innerText = 'Class Feed ';
                document.getElementsByClassName('DL2')[8].innerText = 'Notices';
                document.getElementsByClassName('DL2')[9].innerText = 'Teacher Link';
                document.getElementsByClassName('DL2')[10].innerText = 'Events';
                document.getElementsByClassName('DL2')[11].innerText = 'Live Feed';
                document.getElementsByClassName('DL2')[12].innerText = 'HomeTime Complete package';
                document.getElementsByClassName('DL2')[13].innerText = 'Parent Post Complain';
                document.getElementsByClassName('DL2')[14].innerText = 'Parent Post Request';
                document.getElementsByClassName('DL2')[15].innerText = 'Marks Card';

                //! Hafelaty Plan
                document.getElementById('hafilaty').innerText = 'PARENT PLAN HAFILATY';
                document.getElementsByClassName('DL3')[0].innerText = 'Comprehensive child safety platform';
                document.getElementsByClassName('DL3')[1].innerText = 'Low cost of acquisition';
                document.getElementsByClassName('DL3')[2].innerText = 'Independent Multilanguage for different users';
                document.getElementsByClassName('DL3')[3].innerText = 'Exclusive GeoTrak technology';
                document.getElementsByClassName('DL3')[4].innerText = 'Exclusive GeoTrak technology';
                document.getElementsByClassName('DL3')[5].innerText = 'Complete Cloud Solution';
                document.getElementsByClassName('DL3')[6].innerText = 'Class Routine';
                document.getElementsByClassName('DL3')[7].innerText = 'Automated Driver Rating, FuelTracker';
                document.getElementsByClassName('DL3')[8].innerText = 'Optimized Routs';

            } else if (page == "faq") {
                document.getElementById('faq_arb').style.display = 'none';
                document.getElementById('faq_eng').style.display = 'block';
                document.getElementById('faq_arb').innerHTML = ' ';

            } else if (page == "registration") {
                document.getElementsByClassName('cname').innerText = 'Company Name :';
                document.getElementsByClassName('sname').innerText = 'School Name :';
                document.getElementsByClassName('sadd').innerText = 'School Address :';
                document.getElementsByClassName('cnum').innerText = 'Contact Number :';
                document.getElementsByClassName('email').innerText = 'Email Id :';
                document.getElementsByClassName('stdnum').innerText = 'Number of Students in the school :';
                document.getElementsByClassName('trnum').innerText = 'Number of Teachers in the school :';
                document.getElementsByClassName('edtype').innerText = 'Education Type :';

                document.getElementById('building').innerText = 'Building: ';
                document.getElementById('road').innerText = 'Road: ';
                document.getElementById('block').innerText = 'Block: ';

                document.getElementById('boy').innerText = 'Boys';
                document.getElementById('girl').innerText = 'Girls';
                document.getElementById('mix').innerText = 'Mixed';
                document.getElementById('registrationBtn').innerText = 'Submit';
            }
            // }
        }
    }
</script>