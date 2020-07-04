<?php
function lang($pharse)
{
    static $lang = array(

        //main page and navigation and footer
        //caterogey and lists
        'security_systems' => 'انظمة حماية',
        'fire_alarms'=>'انذار حريق',
        'theft_alarms'=>'انذار سرقة',
        'cctv'=>'كاميرات مراقبه',
        'security_gates_and_metal_detectors'=>'بوابات امنية وكاشف معادن',

        'office_equipment'=>'تجهيزات مكتبية',
        'cash_counting_machines'=>'مكينة عد النقود',
        'phingerprint_for_attendance_and_leave'=>'ماكينات بصمة حضور وانصراف',
        'photocopier'=>'مكينات تصوير',
        'iron_storage_document_shredder'=>'خزن حديدية و مكينات فرم المستندات',

        'solar_energy_applications'=>'تطبيقات الطاقة الشمسية',
        'solar_heaters'=>'سخانات شمسية',
        'solar_power_generation'=>'الواح طاقة شمسية',

        'it_solutions'=>'برمجيات',
        'web_applications'=>'تطبيقات مواقع',
        'desktop_applications'=>'برامج محاسبة ومخازن وكومبيوتر',
        'mobile_apllications'=>'تطبيقات الهاتف المحمول',

        'communication_systems'=>'انظمة الاتصالات',
        'internal_central'=>'سنترالات داخلية',
        'information_networks'=>'شبكة معلومات',
        'sound_systems'=>'انظمة صوتية',
        'fax_intercome'=>'فاكس وانتركم',

        'educational_systems'=>'انظمة تعليمية',
        'language_labs'=>'معامل اللغات',
        'data_show_devices'=>'اجهزة عرض بروجكتور',
        'interactive_whiteboard'=>'سبورة تفاعلية',

        //navigation bar
        'order'=>'منتجات',
        'contact_us'=>'اتصل بنا',
        'works'=>'سابقة الاعمال',
        'register'=>'تسجيل',
        'programs'=>'برامج',
        'login'=>'دخول',
        'logout'=>'خروج',
        'main'=>'الرئيسية',
        'control_panel'=>'لوحة التحكم',
        'upload'=>'رفع',
        'home_page'=>'الصفحة الرئيسية',

        //main app
        'what_we_offer'=>' ما نقدمة من',
        'our_service'=>'خدماتنا',
        'we_offer_two'=>' حيث اننا متخصصون فى توريد وتركيب وصيانة الانظمة الاتية يدعمنا فريق مهندسين وفنيين على أعلى مستوى من الاحترافيه :-',
        'we_offer_one'=>' نتشرف بوضع خبرتنا تحت تصرف سيادتكم وذلك لتغطية كافة احتياجاتكم :-',
        
        //footer
        'main_branch'=>'الفرع الرئيسي',
        'footer_adress'=>'برج الاخلاص من شارع النحاس,الدور التاسع طنطا',
        'footer_phone'=>'هاتف: 0106 548 0522 - 0128 096 9095 ',


        //login page
        'user_name'=>'اسم المستخدم',
        'password'=>'كلمة المرور',
        'login_btn'=>'تسجيل الدخول',
        'login_no_account'=>"ليس لديك حساب؟ سجل الان!",

        //contact us page
        'contact'=>'اتصل',
        'us'=>' بنا',
        'contact_phone_1'=>'0106 548 0522',
        'contact_phone_2'=>'0128 096 9095',
        'contact_name'=>'الاسم *',
        'contact_phone'=>'رقم التلفون *',
        'contact_mail'=>'البريد الالكترونى *',
        'contact_messege'=>'رسالتك *',
        'contact_send'=>'ارسال',

        //past works page
        'our_past_works'=>'سابقة الاعمال',
        'place_location'=>'مكان العميل ',
        'place_name'=>'اسم المؤسسة',
        'no'=>' رقم.',
        'hotels'=>'فنادق',   
        'Private Orqanization'=>' مؤسسات خاصة',
        'hospitals'=>' مستشفيات',
        'Government Orqanization'=>' مؤسسات حكومية',
        'City ​​Council'=>'مجالس مدينة',

        //order page
        'my_cart'=>'حقيبة التسوق',
        'PURCHASE'=>'طلب',
        'quantity'=>'الكمية',
        'model'=>'الموديل',
        'brand'=>'البراند',
        'close'=>'غلق',
        'add_to_cart'=>'اضف الى العربة',
        'see_more'=>'شاهد المزيد',
        'cart'=>'حقيبة التسوق',
        'noitems'=>'لا يوجد منتجات',

        //alerts 
        'please_login'=>'من فضلك سجل الدخول اولا',

        //register
        'first_name'=>'الاسم الاول',
        'last_name'=>'الاسم الاخير',
        'confirm_password'=>'تاكيد كلمة المرور',
        'email'=>'البريد الالكترونى',
        'phone_number'=>'رقم التلفون',
        'company_name'=>'(اسم الشركة(اختياري',
        'private_organization'=>'مؤسسة خاصة',
        'government_organization'=>'مؤسسة حكومية',
        'submit'=>'تاكيد',
        'already'=>'لديك حساب بالفعل؟ سجل دخولك الان',
        'guest'=>'زائر',
        'manager'=>'مدير',
        'owner'=>'مالك المؤسسة',
        'sales'=>'مسؤل المبيعات',
        'maintaince'=>'مسؤل الصيانة',

        //show contact us
        'contacts'=>'الرسائل',
        'messege'=>'الرسالة',
        'sender_email'=>'البريد الالكترونى',
        'sender_phone'=>'رقم التلفون',
        'sender_name'=>'اسم الرسل',

        //show download history
        'downloads'=>'التحميلات السابقة',
        'user_name'=>'اسم المستخدم',
        'file_name'=>'اسم الملف',
        'date'=>'تاريخ التحميل'
        

    );
    return $lang[$pharse];
}
