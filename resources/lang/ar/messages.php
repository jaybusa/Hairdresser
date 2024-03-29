<?php

return [

/*
|--------------------------------------------------------------------------
| Pagination Language Lines
|--------------------------------------------------------------------------
|
| The following language lines are used by the paginator library to build
| the simple pagination links. You are free to change them to anything
| you want to customize your views to better match your application.
|
*/
'common' => [
'invalid_auth_token' => 'مصادقة المستخدم غير صالحة',
'valid_auth_token' => 'مصادقة مستخدم صالحة',
'token_expired' => 'انتهت صلاحية جلسة العمل الخاصة بك , يرجى تسجيل الدخول من جديد',
'invalid_token' => 'رمز المستخدم غير صالح.',
'token_blocked' => 'رمز محظور',
'token_required' => 'الرمز مطلوب'
],
'login_left_title'=>'الرجاء استخدام بيانات الاعتماد الخاصة بك لتسجيل الدخول.',
'site_name'=>'اخصائية',
'admin_text'=>'مشرف',
'pending_orders_text'=>' طلب معلق',
'completed_order_text'=>'طلب مكتمل',
'today_income_text'=>"الايراد اليوم",
'week_income_text'=>'أسبوع الإيرادات',
'select_theme_text'=>'اختر نمطا',
'select_language_text'=>'اختر اللغة',
'light_theme_text'=>'إضاءة',
'dark_theme_text'=>'داكن',
'english_text'=>'English',
'arabic_text'=>'اللغة العربية',
'email_text'=>'البريد الالكتروني',
'password_text'=>'كلمة المرور',
'login_text'=>'تسجيل الدخول',
'dark_mode_text'=>'الوضع المظلم',
'sidebar_dashboard_text'=>'لوحة التحكم',
'sidebar_orders_text'=>'الطلبات',
'sidebar_users_text'=>'الحسابات',
'sidebar_categories_text'=>'الفئات',
'sidebar_settings_text'=>'الإعدادات',
'home_text'=>'الصفحة الرئيسية',
'sidebar_users_hairdresser_text'=>'اخصائية',
'sidebar_users_customer_text'=>'العميل',
'sidebar_parent_categories_text'=>'القسم الرئيسي',
'sidebar_category_text'=>'فئة',
'login_otp_enable_disable_text'=>'رمز تسجيل الدخول تمكين / تعطيل',
'enable_text'=>'تفعيل',
'disable_text'=>'تعطيل',
'tax_text'=>'الضريبة (٪)',
'commission_text'=>'عمولة (٪)',
'support_email_text'=>'البريد الإلكتروني للدعم',
'support_phone_text'=>'هاتف الدعم',
'copyright_text'=>'نص حقوق النشر',
'submit_text'=>'تأكيد',
'name_required'=>'الرجاء إدخال الاسم.',
'email_required'=>'الرجاء إدخال البريد الإلكتروني.',
'email_valid'=>'\'الرجاء إدخال عنوان بريد إلكتروني صالح.',
'email_already_register'=>'البريد الإلكتروني مسجل مسبقا',
'phone_number_required'=>'الرجاء إدخال رقم الهاتف.',
'password_required'=>'الرجاء إدخال كلمة المرور.',
'password_min'=>'الرجاء إدخال كلمة مرور لا تقل عن 6 أحرف.',
'new_password_required'=>'الرجاء إدخال كلمة المرور الجديدة.',
'new_password_min'=>'الرجاء إدخال كلمة مرور جديدة مكونة من 6 أحرف على الأقل.',
'role_id_required'=>'يرجى إدخال نوع الحساب الخاص بك ',
'user_register_success'=>'تم تسجيل المستخدم بنجاح.',
'user_login_success'=>'تسجيل دخول المستخدم بنجاح.',
'login_invalid_credential'=>'بيانات الدخول حاطئه يرجى التأكد',
'user_inactive_by_admin'=>'حسابك غير نشط من قبل المسؤول.',
'otp_required'=>'يرجى إدخال رمز التأكيد',
'otp_send_success'=>'تم إرسال الرمز بنجاح',
'change_password_success'=>'تم تغيير كلمة المرور بنجاح',
'invalid_current_password'=>'كلمة مرور غير صحيحة.',
'admin_setting_success'=>'تم العثور على الإعدادات بنجاح.',
'user_email_not_found'=>'البريد الإلكتروني للمستخدم غير موجود.',
'otp_subject'=>'الرمز الخاص بك',
'logout'=>'تم تسجيل الخروج بنجاح',
'login_failed'=>'هذه البيانات لاتتطابق مع السجلات الخاصة بنا ',
'tax_required'=>'الرجاء إدخال الضريبة.',
'tax_valid'=>'يجب أن تكون الضريبة أكبر من الصفر.',
'commission_required'=>'الرجاء إدخال العمولة.',
'commission_valid'=>'يجب أن تكون العمولة أكبر من الصفر.',
'setting_success'=>'تم تحديث الإعدادات بنجاح.',
'profile_success'=>'الحساب الشخصي بنجاح',
'profile_update_success'=>'تم تحديث الملف الشخصي بنجاح.',
'category_list_success'=>'قائمة الفئات بنجاح.',
'category_id_required'=>'الرجاء تحديد الفئة.',
'price_required'=>'الرجاء إدخال السعر.',
'save_service_success'=>'حفظ الخدمة بنجاح',
'service_id_required'=>'الرجاء إدخال معرف الخدمة.',
'delete_service_success'=>'تم حذف الخدمة بنجاح.',
'service_list_success'=>'قائمة الخدمة بنجاح.',
'logout_text'=>'تسجيل الخروج',
'cancel_text'=>'الغاء',
'logout_body_text'=>'هل أنت متأكد أنك تريد تسجيل الخروج ؟',
'parent_categories_list_text'=>'قائمة الفئات الأصل',
'add_parent_categories_text'=>'إضافة فئة الأصل',
'data_table_search_placeholder_text'=>'يبحث...',
'data_table_item_per_page_text'=>'مواد لكل صفحة',
'data_table_pagination_showing_text'=>'عرض',
'data_table_pagination_to_text'=>'الى',
'data_table_pagination_of_text'=>'من',
'data_table_pagination_entries_text'=>'المدخلات',
'add_parent_categories_name_text'=>'الاسم',
'add_parent_categories_name_text_ar'=>'الاسم بالعربي',
'save_text'=>'حفظ',
'close_text'=>'اغلاق',
'image_required'=>'يرجى إختيار صورة',
'accept_image_type'=>'يرجى تحديد صورة jpg و jpeg و png فقط',
'parent_categories_already_exits'=>'الاسم موجود بالفعل. الرجاء إدخال اسم مختلف ',
'parent_categories_save_success'=>'تم حفظ فئة الأصل بنجاح',
'edit_parent_categories_text'=>'تحرير فئة الأصل',
'delete_parent_categories_text'=>'حذف فئة الأصل',
'delete_parent_categories_title_text'=>'هل أنت متأكد أنك تريد حذف هذه الفئة الرئيسية؟',
'ok_text'=>'نعم',
'delete_parent_categories_success'=>'تم حذف الفئة الرئيسية بنجاح',
'categories_list_text'=>'قائمة الفئات',
'add_categories_text'=>'إضافة فئة',
'categories_already_exits'=>'الاسم موجود بالفعل. الرجاء إدخال اسم مختلف ',
'categories_save_success'=>'تم حفظ الفئة بنجاح',
'edit_categories_text'=>'تحرير الفئة',
'delete_categories_text'=>'حذف الفئة',
'delete_categories_title_text'=>'هل أنت متأكد أنك تريد حذف هذه الفئة؟',
'delete_categories_success'=>'تم حذف الفئة بنجاح.',
'parent_category_id_required'=>'الرجاء تحديد فئة الأصل',
'image_text'=>'صورة',
'created_at_text'=>'تاريخ الإنشاء',
'action_text'=>'عمل',
'status_text'=>'الحالة',
'phone_number_text'=>' رقم الهاتف',
'name_text'=>'الاسم',
'address_text'=>'العنوان',
'maximum_cash_limit'=>'الحد الأقصى للنقد',
'parent_category_text'=>'القسم الرئيسي',
'service_ids_required'=>'الرجاء إدخال service_ids',
'service_ids_json_required'=>'يجب أن تكون Service_ids بتنسيق json',
'latitude_required'=>'الرجاء إدخال خط العرض',
'longitude_required'=>'الرجاء إدخال خط الطول',
'hairdresser_id_required'=>'الرجاء إدخال معرف الاخصائية',
'services_required'=>'الرجاء إدخال الخدمات',
'services_json_required'=>'الرجاء إدخال الخدمات مثل json',
'address_required'=>'الرجاء إدخال العنوان',
'order_request_success'=>'تم الطلب بنجاح',
'order_id_required'=>'يرجى إدخال رقم الطلب',
'order_timeout_success'=>'انتهت مهلة الطلب بنجاح',
'order_detail_not_found'=>'تفاصيل الطلب غير موجودة',
'order_cancel_success'=>'تم إلغاء الطلب بنجاح',
'order_accept_success'=>'قبول الطلب بنجاح',
'order_on_the_way_success'=>'اطلب في الطريق بنجاح',
'order_processing_success'=>'معالجة الطلب بنجاح',
'order_complete_success'=>'اكتمل الطلب بنجاح',
'order_list_success'=>'قائمة الطلبات بنجاح',
'customer_list_text'=>'قائمة العملاء',
'hairdresser_list_text'=>' قائمة الاخصائيات',
'customer_not_found'=>'تفاصيل العميل غير موجود',
'hairdresser_not_found'=>'تفاصيل مصفف الشعر غير موجود',
'customer_detail_text'=>'تفاصيل العميل عربي',
'hairdresser_detail_text'=>'تفاصيل مصفف الشعر عربي',
'summary_text'=>'الملخص',
'lat_text'=>'خط العرض',
'long_text'=>'خط الطول',
'about_text'=>'حول',
'orders_text'=>'الطلبات',
'order_number_text'=>'رقم الطلب',
'customer_name_text'=>'اسم العميل',
'mechanic_name_text'=>'الاخصائية',
'total_text'=>'المجموع',
'order_detail_text'=>'تفاصيل الطلب',
'orders_not_found'=>'تفاصيل الطلب غير موجودة',
'orders_service_text'=>'تفاصيل خدمة الطلب',
'order_service_text'=>'اسم التصنيف',
'order_price_text'=>'السعر',
'order_quntity_text'=>'الكمية',
'order_total_text'=>'المجموع',
'order_final_total_text'=>'المجموع النهائي',
'hairdresser_detail_success'=>'تم العثور على تفاصيل مصفف الشعر بنجاح',
'tax_percentage_required'=>'الرجاء إدخال نسبة الضريبة',
'tax_amount'=>'الرجاء إدخال مبلغ الضريبة',
'commision_percentage_required'=>'الرجاء إدخال نسبة العمولة',
'commision_amount_required'=>'الرجاء إدخال مبلغ العمولة',
'promo_code_required'=>'الرجاء إدخال الرمز الترويجي',
'amount_required'=>'الرجاء إدخال مبلغ الطلب',
'invalid_promocode'=>'الرمز الترويجي غير صالح',
'promocode_already_used'=>'بروموكود مستخدم بالفعل',
'promocode_amount_min_required'=>'يجب أن يكون إجمالي الطلب مساويًا أو أكبر من ذلك الحين',
'promocode_apply_sucess'=>'تم تطبيق الكود الترويجي بنجاح',
'payment_method_required'=>'الرجاء إدخال طريقة الدفع',
'due_amount_required'=>'الرجاء إدخال طريقة الدفع',
'add_wallet_records'=>'افراج عن مبلغ',
'wallet_balance_lbl'=>'الرصيد',
'wallet_title'=>'تاريخ المحفظة',
'wallet_type_text'=>'النوع',
'wallet_amount_text'=>'الكمية',
'wallet_order_text'=>'الطلب',
'wallet_description_text'=>'الوصف',
'order_transaction_text'=>'تفاصيل صفقة الطلب',
'order_transaction_id_text'=>'رقم المعاملة',
'order_due_amount_text'=>'مبلغ مستحق',
'order_final_amount_text'=>'القيمة النهائية',
'order_payment_method_text'=>'طريقة الدفع او السداد',
'promocode_text'=>'رمز ترويجي',
'promocode_amount_text'=>'مبلغ الرمز الترويجي',
'hairdressor_amount'=>'مبلغ تصفيف الشعر',
'admin_amount'=>'مبلغ المسؤول',
'wallet_history_success'=>'سجل المحفظة بنجاح',
'sender_id_required'=>'الرجاء إدخال معرف المرسل',
'receiver_id_required'=>'الرجاء إدخال معرف المتلقي',
'rating_required'=>'الرجاء إدخال التصنيف',
'comment_required'=>'الرجاء إدخال تعليق',
'order_review_save'=>'تم حفظ مراجعة الطلب بنجاح',
'notification_list_success'=>'قائمة الإخطارات بنجاح',
'hairdressor_id_required'=>'يرجى إدخال معرف الاخصائية',
'favorite_success'=>'تفضيل الاخصائية بنجاح',
'unfavorite_success'=>'إلغاء تفضيل الاخصائية بنجاح',
'favorite_list_success'=>'قائمة المفضلة بنجاح',
'order_reject_success'=>'تم رفض الطلب بنجاح',
'banner_list_success'=>'قائمة البانر بنجاح',
'sidebar_promocodes_text'=>'رمز ترويجي',
'promocode_save_success'=>'تم حفظ الرمز الترويجي بنجاح',
'delete_promocode_success'=>'تم حذف الرمز الترويجي بنجاح',
'promocode_list_text'=>'قائمة الرموز الترويجية',
'add_promocode_text'=>'إضافة رمز ترويجي',
'promode_name_text'=>'الاسم',
'promocode_code_text'=>'الرمز',
'promocode_min_total_text'=>'إجمالي الحد الأدنى',
'edit_promcode_text'=>'تعديل الرمز الترويجي ',
'promocde_already_exits'=>'الرمز الترويجي موجود بالفعل',
'promo_min_total_required'=>'الرجاء إدخال الحد الأدنى من إجمالي الطلب',
'promocode_min_total_required'=>"الرجاء إدخال إجمالي اكبر من صفر",
'promocode_percentage_text'=>'النسبة',
'percentage_required'=>'يرجى إدخال النسبة',
'promocode_min_percentage_required'=>'الرجاء إدخال نسبة اكبر من صفر',
'delete_promocode_text'=>'حذف رمز ترويجي',
'delete_promocode_title_text'=>'هل أنت متأكد أنك تريد حذف هذا الرمز الترويجي؟',
'dispute_reason_required'=>'الرجاء إدخال السبب',
'order_dispute_success'=>'تم إرسال طلب النزاع الخاص بك إلى المسؤول. المشرف سيعود إليك قريبا',
'withdraw_request_success'=>'تم إرسال طلب السحب إلى المشرف. المشرف سيعود إليك قريبا',
'sidebar_banner_text'=>'لافتة',
'delete_banner_success'=>'تم حذف البانر بنجاحBanner deleted successfully',
'banner_save_success'=>'تم حفظ البانر بنجاح',
'banner_list_text'=>'قائمة البانر',
'add_banner_text'=>'إضافة بانر',
'edit_banner_text'=>'تعديل البانر',
'edit_title'=>'تعديل',
'delete_title'=>'حذف',
'delete_banner_text'=>'حذف البانر',
'banner_title_text'=>'العنوان',
'banner_desc_text'=>'الوصف',
'delete_banner_title_text'=>'هل أنت متأكد أنك تريد حذف هذا الشعار؟',
'title_required'=>'الرجاء إدخال العنوان',
'desc_required'=>'الرجاء إدخال الوصف',
'cash_limit'=>'الحد النقدي',
'cash_limit_required'=>'الرجاء إدخال الحد النقدي',
'cash_limit_valid'=>'يجب أن يكون الحد النقدي أكبر من الصفر.',
'promocode_total_user_limit_min_required'=>'ادخل اكبر من صفر',
'promocode_total_user_limit_min_num_required'=>'ادخل ارقام فقط ',
'promocode_total_user_text'=>'إجمالي حد المستخدم',
'promocode_expired_date_text'=>'تاريخ انتهاء الصلاحية',
'promocode_expired'=>'الرمز الترويجي انتهى',
'promocode_use_limit_over'=>'تجاوز حد وصول المستخدم للرمز الترويجي',
'order_payment_success'=>'دفع الطلب بنجاح.',
'user_inactive_by_admin_24_hours'=>'المشرف غير نشط حسابك قبل 24 ساعة.',
'minimum_cash_limit'=>'الحد الأدنى للنقد',
'app_fee'=>'رسوم التطبيق',
'card_pay' => 'الدفع اونلاين',
'cash_pay' => ' الدفع نقدا',
'sidebar_withdrawal_req_text'=>'السحوبات',
'order_request' => "ارسال الطلب",
'order_timeout' => "انتهى الوقت",
'order_cancel' => "طلب ملغي",
'order_accept' => "طلب مقبول",
'order_on_the_way' => "في الطريق  ",
'order_processing' => "جاري العمل",
'order_complete' => "طلب مكتمل",
'order_rejected' => "طلب مرفوض",
'order_paid' => "طلب مدفوع",
'payment_timeout' => "انتظار الدفع",
'wallet_customer_paid_text' => 'مدفوعات العميل',
'not_active_account'=>'حسابك تحت المراجعه من قبل الاداره يرجى الانتظار وسيتم ابلاغك حال التفعيل',
'mobile_already_registered'=>'رقم هاتف الجوال مستخدم مسبقا اذا كنت صاحب الحساب يمكنك استعادة كلمة المرور',

'dresser_register_success'=>"تم تسجيل المستخدم بنجاح. تجري المراجعه من قبل المشرف.",
'dresser_busy' => "الاخصائية لديها طلب اخر، يرجى اختيار اخصائية أخرى أو الانتظار حتى تكمل الاخصائية  طلبها.",
'sidebar_report_text' => "تقارير",
'from_date'=>"من تاريخ",
'selectusersLbl'=>"اختر الاخصائية",
'to_date'=>"الى يوم",
'search'=>"بحث",
'all'=>"الجميع",

'phone_already_register'=>"رقم الهاتف مسجل مسبقا",
'bank_account_lbl'=> "رقم الايبان",
'dresser_amount_report'=> "مستحقات الاخصائيات",
'wallet_report'=> "تقرير الحساب",

];
