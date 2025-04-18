<?php

return 
[
    "login" => [
        "success" => "تم تسجيل الدخول بنجاح",
        "failed" => "فشل تسجيل الدخول",
        "invalid_credentials" => "بيانات الاعتماد غير صحيحة",
    ],
    "logout" => [
        "success" => "تم تسجيل الخروج بنجاح",
        "failed" => "فشل تسجيل الخروج",
    ],
    "renew" => [
        "success" => "تم تحديث كلمة المرور بنجاح",
        "failed" => "فشل تحديث كلمة المرور",
        "user_not_found" => "المستخدم غير موجود",
    ],
    "user" => [
        "success" => "تم استرجاع معلومات المستخدم بنجاح",
        "not_found" => "المستخدم غير موجود",
    ],
    "register" => [
        "success" => "تم تسجيل المستخدم بنجاح",
        "failed" => "فشل تسجيل المستخدم",
        "email_exists" => "البريد الإلكتروني موجود بالفعل",
    ],
    "validation" =>
     [
        "name_required" => "حقل الاسم مطلوب.",
        "email_required" => "حقل البريد الإلكتروني مطلوب.",
        "email_email" => "يجب أن يكون البريد الإلكتروني عنوان بريد إلكتروني صالح.",
        "email_unique" => "تم أخذ البريد الإلكتروني بالفعل.",
        "password_required" => "حقل كلمة المرور مطلوب.",
        "password_confirmed" => "تأكيد كلمة المرور غير متطابق.",
        'title_required' => 'حقل العنوان مطلوب.',
        'title_string' => 'يجب أن يكون العنوان نصًا.',
        'title_max' => 'لا يمكن أن يزيد العنوان عن 255 حرفًا.',
        'description_required' => 'حقل الوصف مطلوب.',
        'description_string' => 'يجب أن يكون الوصف نصًا.',
        'status_required' => 'حقل الحالة مطلوب.',
        'status_in' => 'الحالة المحددة غير صالحة.',
        'due_date_date' => 'يجب أن يكون تاريخ الاستحقاق تاريخًا صالحًا.',
        'file_required' => 'مطلوب رفع ملف.',
        'file_type' => 'يجب أن يكون الملف المرفوع صالحًا.',
        'file_mimes' => 'مسموح فقط بملفات من نوع: :xlsx,xls,csv.',





    ],

   "task" =>
    [
        "get_all" => "تم استرجاع المهام بنجاح",
        "get" => "تم استرجاع المهمة بنجاح",
        "get_failed" => "فشل في استرجاع المهام",
        "not_found" => "المهمة غير موجود",
        "created" => "تم إنشاء المهمة بنجاح",
        "create_failed" => "فشل في إنشاء المهمة",
        "updated" => "تم تحديث المهمة بنجاح",
        "update_failed" => "فشل في تحديث المهمة",
        "deleted" => "تم حذف المهمة بنجاح",
        "delete_failed" => "فشل في حذف المهمة",
        "restored" => "تم استعادة المهمة بنجاح",
        "restore_failed" => "فشل في استعادة المهمة",
        "get_all_deleted" => "تم استرجاع المهام المحذوفة بنجاح",
        "no_ids_provided" => "لم يتم توفير معرفات للحذف الجماعي",
        "bulk_deleted" => "تم حذف المهام بنجاح",
        "bulk_delete_failed" => "فشل في حذف المهام",
        "bulk_restored" => "تم استعادة المهام بنجاح",
        "bulk_restore_failed" => "فشل في استعادة المهام",
        "bulk_force_delete_failed" => "فشل في الحذف النهائي للمهام",
        "partial_bulk_deleted" => "بعض المهام لم يتم حذفها بنجاح",
        "partial_bulk_restored" => "بعض المهام لم يتم استعادتها بنجاح",
        "partial_bulk_force_deleted" => "بعض المهام لم يتم حذفها نهائيًا بنجاح",
        "bulk_force_deleted" => "تم حذف المهام نهائيًا بنجاح",
        "force_deleted"=>"تم حذف المهمة نهائيًا بنجاح",
        'imported' => 'تم استيراد الملف بنجاح',
        'import_failed' => 'فشل استيراد الملف',
        'reordered' => 'تم إعادة ترتيب المهام بنجاح',
        'reorder_failed' => 'فشل إعادة ترتيب المهام',
        'task_first_task_id_required' => 'معرف المهمة الأولى مطلوب.',
        'task_first_task_id_exists' => 'المهمة الأولى غير موجودة.',
        'task_second_task_id_required' => 'معرف المهمة الثانية مطلوب.',
        'task_second_task_id_exists' => 'المهمة الثانية غير موجودة.',
        'no_trashed_tasks'=>'المهام غير موجودة بالمحذوفات'
        
    ],


];
