<?php
function lang($pharse)
{
    static $lang = array(

        //main page and navigation and footer
        //caterogey and lists
        'security_systems' => 'Security systems',
        'fire_alarms'=>'Fire Alarms',
        'theft_alarms'=>'Interuder Alarm System',
        'cctv'=>'CCTV',
        'security_gates_and_metal_detectors'=>'Security gates and metal detectors',

        'office_equipment'=>'Office equipment',
        'cash_counting_machines'=>'Cash Counting Machines',
        'phingerprint_for_attendance_and_leave'=>'Time Attendance System',
        'photocopier'=>'Photocopier',
        'iron_storage_document_shredder'=>'Iron storage & Document shredder',

        'solar_energy_applications'=>'Solar energy applications',
        'solar_heaters'=>'Solar Heaters',
        'solar_power_generation'=>'Solar Power Generation',

        'it_solutions'=>'IT Solutions',
        'web_applications'=>'Web Applications',
        'desktop_applications'=>'Desktop Applications',
        'mobile_apllications'=>'Mobile Apllications',

        'communication_systems'=>'Communication systems',
        'internal_central'=>'PDX Communication System',
        'information_networks'=>'Information Networks',
        'sound_systems'=>'Sound Systems',
        'fax_intercome'=>'Fax & Intercome',

        'educational_systems'=>'Educational systems',
        'language_labs'=>'Language Labs',
        'data_show_devices'=>'Data Show devices',
        'interactive_whiteboard'=>'Interactive whiteboard',

        //navigation bar
        'order'=>'Order',
        'contact_us'=>'Contact us',
        'works'=>'Works',
        'register'=>'Register',
        'programs'=>'Programs',
        'login'=>'Log In',
        'logout'=>'Log Out',
        'main'=>'Main',
        'control_panel'=>'Control Panel',
        'upload'=>'Upload',
        'home_page'=>'Home Page',

        //main app
        'what_we_offer'=>'What We Offer',
        'our_service'=>'Our Service',
        'we_offer_one'=>'-: We have highly trained staff available that implement security measures around any Retail, Commercial or Industrial Site.',
        'we_offer_two'=>' -: Genuine parts with warranty & Maintenance contracts.',
        
        //footer
        'main_branch'=>'Main Branch',
        'footer_adress'=>'El Ekhlas Tower El Nahas St. 9Th floor Tanta',
        'footer_phone'=>'Tele : 0106 548 0522 - 0128 096 9095',


        //login page
        'user_name'=>'User Name',
        'password'=>'Password',
        'login_btn'=>'Login Now',
        'login_no_account'=>"Didn't have account? register now",

        //contact us page
        'contact'=>'Contact',
        'us'=>' us',
        'contact_phone_1'=>'0106 548 0522',
        'contact_phone_2'=>'0128 096 9095',
        'contact_name'=>'Name *',
        'contact_phone'=>'Phone Number *',
        'contact_mail'=>'Mail *',
        'contact_messege'=>'Your Messege *',
        'contact_send'=>'Send',

        //past works page
        'our_past_works'=>'Our Past Works',
        'place_location'=>'Place Location ',
        'place_name'=>'Place Name',
        'no'=>' NO.',
        'hotels'=>'Hotels',
        'Private Orqanization'=>' Private Orqanization',
        'hospitals'=>'Hospitals',
        'Government Orqanization'=>'Government Orqanization',
        'City ​​Council'=>'City ​​Council',

        //order page
        'my_cart'=>'My Cart',
        'PURCHASE'=>'PURCHASE',
        'quantity'=>'Quantity',
        'model'=>'Model',
        'brand'=>'Brand',
        'close'=>'Close',
        'add_to_cart'=>'Add To Cart',
        'see_more'=>'See More',
        'cart'=>'Cart',
        'noitems'=>'No Items',

        //alerts 
        'please_login'=>'Please Login Frist',

        //register
        'first_name'=>'First Name',
        'last_name'=>'Last Name',
        'confirm_password'=>'Confirm Password',
        'email'=>'E-Mail',
        'phone_number'=>'Phone number',
        'company_name'=>'Company Name (optional)',
        'private_organization'=>'Private Organization',
        'government_organization'=>'Government Organization',
        'submit'=>'Submit',
        'already'=>'already have account? sign In now',
        'guest'=>'Guest',
        'manager'=>'Manager',
        'owner'=>'Owner',
        'sales'=>'Sales Officer',
        'maintaince'=>'Maintaince Officer',

        //show contact us
        'contacts'=>'Contacts',
        'messege'=>'Messege',
        'sender_email'=>'E-Mail',
        'sender_phone'=>'Phone Number',
        'sender_name'=>'Sender Name',

        //show download history
        'downloads'=>'Download History',
        'user_name'=>'User Name',
        'file_name'=>'File Name',
        'date'=>'Date'
        

    );
    return $lang[$pharse];
}
