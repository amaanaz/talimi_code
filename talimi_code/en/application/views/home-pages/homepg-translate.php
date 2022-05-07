<script>
    var lang = 0;

    function changeLang(page) {
        console.log("Page Name:", page);
        if (lang == 0) {
            arabicText(page);
            lang = 1;
        } else {
            englishText(page);
            lang = 0;
        }

    }

    function arabicText(page) {

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
        }

        //! Carousel
        document.getElementsByClassName('schoooly')[0].innerText = 'مدرستي';
        document.getElementById('schoooly_txt').innerText = 'مدرستي هو حل مبتكر لسد الفجوات والنقاط الحساسة في عملية إدارة المدارس وروتينها اليومي، حيث قمنا في مدرستي بنقل التكنولوجيا الحديثة وميزاتها إلى الجانب الآخر من المشكلة - فقد تم حشد جميع المهام والعمليات في ميدان العمل المدرسي ما جعل عملياته فائقة الكفاءة، وإضاف إمكانية التتبع والإشراف عبر عمليات المدرسة اليومية.';

        document.getElementsByClassName('hafilaty')[0].innerText = 'حافلتي';
        document.getElementById('hafilaty_txt').innerText = 'حافلتي، هي منصة الأطفال الشاملة. حيث استخدمت أحدث التكنولوجيات في تطوير حافلتي لتقديم نظام تتبعي متطور وحديث يخدم الإدارات المدرسية وأولياء الأمور كل على حدة.';

        document.getElementsByClassName('HT')[0].innerText = 'وقت البيت';
        document.getElementById('HT_txt').innerText = 'وقت البيت هو نظام مخصص لأولياء الأمور وقت استلامهم للأبناء بعد فترة الدوام المدرسية. وهو نظام شامل للغاية يشرك الآباء والمعلمين ومسؤول البوابة للمساعدة في تسهيل عملية تسليم الطلاب لأوليائهم من المدرسة. والهدف الرئيسي منه هو منع الازدحام الذي تسببه السيارات في منطقة الانتظار بالقرب من المدرسة  والمساعدة في تحسين عملية مغادرة الأطفال المدرسة بعد ساعات الدوام المدرسي.';

        //! Our Plans 
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
        document.getElementsByClassName('DL1')[2].innerText = '  التنبيهات والملاحظات	';
        document.getElementsByClassName('DL1')[3].innerText = ' الواجبات المنزلية والمشاركات والمشاريع	';
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
        document.getElementsByClassName('DL1')[25].innerText = 'كشف تقييم الطلاب	';
        document.getElementsByClassName('DL1')[26].innerText = 'إرسال صورة';
        document.getElementsByClassName('DL1')[27].innerText = 'أحداث الفصل الدراسي';
        document.getElementsByClassName('DL1')[28].innerText = 'إرسال ملاحظات';
        document.getElementsByClassName('DL1')[29].innerText = 'رابط أولياء الأمور';
        document.getElementsByClassName('DL1')[30].innerText = 'منشورات عامة	';
        document.getElementsByClassName('DL1')[31].innerText = 'نقل الأحداث مباشرة';
        document.getElementsByClassName('DL1')[32].innerText = 'رحلات الباصات المدرسية';
        document.getElementsByClassName('DL1')[33].innerText = 'الرحلات المدرسية (الباصات)';
        document.getElementsByClassName('DL1')[34].innerText = 'بوابة منظم رحلات الباصات المدرسية';
        document.getElementsByClassName('DL1')[35].innerText = 'تطبيق خاص وبوابة مستقلة لإدراة وتنظيم رحلات الباصات المدرسية ';
        document.getElementsByClassName('DL1')[36].innerText = 'تطبيق مبتكر لسائق الباص';
        document.getElementsByClassName('DL1')[37].innerText = 'ملحق للرحلات المدرسية في تطبيق أولياء الأمور	';
        document.getElementsByClassName('DL1')[38].innerText = 'تقارير إدارية:';
        document.getElementsByClassName('DL1')[39].innerText = 'مسار رحلة الباص';
        document.getElementsByClassName('DL1')[40].innerText = 'كشف حضور وغياب السائقين';
        document.getElementsByClassName('DL1')[41].innerText = 'كشف حضور وغياب طلاب الباصات';
        document.getElementsByClassName('DL1')[42].innerText = 'مسافات الرحلة للباصات';
        document.getElementsByClassName('DL1')[43].innerText = 'تقييم عمل السائقين	';
        document.getElementsByClassName('DL1')[44].innerText = 'فترة انتظار الطلاب	';

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
        document.getElementById('prnt_hafilaty').innerText = 'باقة حافلتي';
        document.getElementsByClassName('DL3')[0].innerText = 'منصة السلامة الشاملة';
        document.getElementsByClassName('DL3')[1].innerText = 'انخفاض التكلفة وسهولة الاستخدام';
        document.getElementsByClassName('DL3')[2].innerText = 'تطبيق بلغات متعددة للمستخدم';
        document.getElementsByClassName('DL3')[3].innerText = 'تكنولوجيا سهولة تتبع الطالب (جيوتراك تكنولوجي)';
        document.getElementsByClassName('DL3')[4].innerText = 'تكنولوجيا النمو والتغير عند/حسب الحاجة (أدابتي بلد)';
        document.getElementsByClassName('DL3')[5].innerText = 'روتين الفصل';
        document.getElementsByClassName('DL3')[6].innerText = 'حلول متكاملة باستخدام السحاب';
        document.getElementsByClassName('DL3')[7].innerText = 'التقييم الآلي للسائق';
        document.getElementsByClassName('DL3')[8].innerText = 'مسارات مختصرة لمساعدة السائقين';

        //! How xyz Works 
        document.getElementsByClassName('how')[0].innerHTML = 'كيف يعمل  <span>مدرستي؟ </span>';
        document.getElementsByClassName('how')[1].innerHTML = 'كيف يعمل <span>برنامج حافلتي؟ </span>';
        document.getElementsByClassName('how')[2].innerHTML = 'كيف يعمل <span>برنامد وقت البيت؟ </span>';

        document.getElementById('clients').innerHTML = '<span> عملائنا  </span>';
        // document.getElementById('clients').innerText = 'زبائننا';

    }

    function englishText(page) {

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
        }

        //! Carousel
        document.getElementsByClassName('schoooly')[0].innerText = 'Schoooly';
        document.getElementById('schoooly_txt').innerText = 'SCHOOOLY is an innovative solution that bridges the gap and brings technology to the last mile – mobilizing all tasks and operations in the field making your operations super-efficient – adding accountability and trackability across the enterprise operations'

        document.getElementsByClassName('hafilaty')[0].innerText = 'Hafilaty';
        document.getElementById('hafilaty_txt').innerText = 'HAFILATY, is a comprehensive child safety platform. It leverages latest technology, coupled with a cloud enabled software platform to deliver an end-to-end school bus tracking.'

        document.getElementsByClassName('HT')[0].innerText = ' Hometime';
        document.getElementById('HT_txt').innerText = 'HOMETIME is a Parent Pick up System which is very comprehensive system that engages Parents, Teachers, and Gate Keeper to help smooth the process of dismissal. Key objective is to prevent the jam that is caused by several cars in the parking area and to help in optimizing the process of children leaving the school after school hours ';


        //! Our Plans 
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
        document.getElementsByClassName('DL2')[4].innerText = 'About School  ';
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
        document.getElementById('prnt_hafilaty').innerText = 'PARENT PLAN HAFILATY';
        document.getElementsByClassName('DL3')[0].innerText = 'Comprehensive child safety platform';
        document.getElementsByClassName('DL3')[1].innerText = 'Low cost of acquisition';
        document.getElementsByClassName('DL3')[2].innerText = 'Independent Multilanguage for different users';
        document.getElementsByClassName('DL3')[3].innerText = 'Exclusive GeoTrak technology';
        document.getElementsByClassName('DL3')[4].innerText = 'Exclusive GeoTrak technology';
        document.getElementsByClassName('DL3')[5].innerText = 'Complete Cloud Solution';
        document.getElementsByClassName('DL3')[6].innerText = 'Class Routine';
        document.getElementsByClassName('DL3')[7].innerText = 'Automated Driver Rating, FuelTracker';
        document.getElementsByClassName('DL3')[8].innerText = 'Optimized Routs';

        //! How xyz Works 
        document.getElementsByClassName('how')[0].innerHTML = 'How<span class="HT"> Schoooly</span> works?';
        document.getElementsByClassName('how')[1].innerHTML = 'How<span class="HT"> Hafilaty</span> works?';
        document.getElementsByClassName('how')[2].innerHTML = 'How<span class="HT"> Hometime</span> works?';

        document.getElementById('clients').innerHTML = 'Our <span class="HT"> Clients</span>';

    }
</script>