<?php
/**
 * Default Ukrainian Lexicon Entries for miniShop2
 *
 * @package minishop2
 * @subpackage lexicon
 */

include_once('setting.inc.php');
$files = scandir(dirname(__FILE__));
foreach ($files as $file) {
    if (strpos($file, 'msp.') === 0) {
        @include_once($file);
    }
}

$_lang['minishop2'] = 'miniShop2';
$_lang['ms2_menu_desc'] = 'Зручний інтернет-магазин';
$_lang['ms2_order'] = 'Замовлення';
$_lang['ms2_orders'] = 'Замовлення';
$_lang['ms2_orders_intro'] = 'Панель керування замовленнями. Ви можете вибирати одразу декілька замовлень через Shift або Ctrl(Cmd).';
$_lang['ms2_orders_desc'] = 'Управління замовленнями';
$_lang['ms2_settings'] = 'Налаштування';
$_lang['ms2_settings_intro'] = 'Панель керування налаштуваннями магазину. Тут ви можете вказати способи оплати, доставки та статуси замовлень.';
$_lang['ms2_settings_desc'] = 'Статуси замовлень, параметри оплати і доставки';
$_lang['ms2_payment'] = 'Оплата';
$_lang['ms2_payments'] = 'Способи оплати';
$_lang['ms2_payments_intro'] = 'Ви можете створювати будь-які способи оплати замовлень. Логіка оплати (відправка покупця на сторонній сервіс, приймання оплати та ін.) реалізується в класі, що ви зазначите.<br/>Для методів оплати параметр "клас" є обовʼязковим.';
$_lang['ms2_delivery'] = 'Доставка';
$_lang['ms2_deliveries'] = 'Варіанти доставки';
$_lang['ms2_deliveries_intro'] = 'Доступні варіанти доставки. Логіка розрахунку вартості доставки в залежності від відстані та ваги реалізується класом, що ви зазначите в налаштуваннях.<br/>Якщо ви не вкажете свій клас, розрахунки будуть проводитись за алгоритмом по-замовчуванню.';
$_lang['ms2_statuses'] = 'Статуси замовлення';
$_lang['ms2_statuses_intro'] = 'Існує декілька обовʼязкових статусів замовлення: "нове", "сплачене", "відправлене" и "відмінене". Їх можливо налаштовувати, але не можна видаляти, так як вони необхідні для роботи магазина. Ви можете вказати свої статуси для розширеної логіки роботы з замовленнями.<br/>Статус може бути кінцевим, це означає, що його неможливо переключити на інший, наприклад "відправлено" та "відмінено". Статус може бути зафіксованим, тобто з нього неможливо переключитися на статуси, що йому передують, наприклад "сплачене" неможливо переключити на "нове".';
$_lang['ms2_vendors'] = 'Виробники товарів';
$_lang['ms2_vendors_intro'] = 'Перелік доступних виробників товарів. Те, що буде додано тут, можна вибрати в полі "vendor" товару.';
$_lang['ms2_link'] = 'Звʼязок товарів';
$_lang['ms2_links'] = 'Звʼязки товарів';
$_lang['ms2_links_intro'] = 'Перелік доступних звʼязків товарів один з одним. Тип звʼязку характеризує те, як саме він буде працювати, його неможливо створювати, можна тільки вибрати із переліку.';
$_lang['ms2_option'] = 'Опція товару';
$_lang['ms2_options'] = 'Опції товарів';
$_lang['ms2_options_intro'] = 'Перелік можливих опцій товарів. Дерево категорій використовується для фільтрації опцій обраних категорій.<br/>Щоб призначити категоріям одразу декілька опцій, виберіть їх через Ctrl(Cmd) або Shift.';
$_lang['ms2_options_category_intro'] = 'Перелік можливих опцій товарів в даній категорії.';
$_lang['ms2_default_value'] = 'Значення за замовчуванням';
$_lang['ms2_customer'] = 'Покупець';
$_lang['ms2_all'] = 'Всі';
$_lang['ms2_type'] = 'Тип';

$_lang['ms2_btn_create'] = 'Створити';
$_lang['ms2_btn_copy'] = 'Скопіювати';
$_lang['ms2_btn_save'] = 'Зберегти';
$_lang['ms2_btn_edit'] = 'Змінити';
$_lang['ms2_btn_view'] = 'Перегляд';
$_lang['ms2_btn_delete'] = 'Видалити';
$_lang['ms2_btn_undelete'] = 'Відновити';
$_lang['ms2_btn_publish'] = 'Увімкнути';
$_lang['ms2_btn_unpublish'] = 'Вимкнути';
$_lang['ms2_btn_cancel'] = 'Відміна';
$_lang['ms2_btn_back'] = 'Назад (alt + &uarr;)';
$_lang['ms2_btn_prev'] = 'Попередній товар (alt + &larr;)';
$_lang['ms2_btn_next'] = 'Наступний товар (alt + &rarr;)';
$_lang['ms2_btn_help'] = 'Допомога';
$_lang['ms2_btn_duplicate'] = 'Зробити копію товару';
$_lang['ms2_btn_addoption'] = 'Додати';
$_lang['ms2_btn_assign'] = 'Призначити';

$_lang['ms2_actions'] = 'Дії';
$_lang['ms2_search'] = 'Пошук';
$_lang['ms2_search_clear'] = 'Очистити';

$_lang['ms2_category'] = 'Категорія товарів';
$_lang['ms2_category_tree'] = 'Дерево категорій';
$_lang['ms2_category_type'] = 'Категорія товарів';
$_lang['ms2_category_create'] = 'Додати категорію';
$_lang['ms2_category_create_here'] = 'Категорію з товарами';
$_lang['ms2_category_manage'] = 'Управління товарами';
$_lang['ms2_category_duplicate'] = 'Копіювати категорію';
$_lang['ms2_category_publish'] = 'Опублікувати категорію';
$_lang['ms2_category_unpublish'] = 'Зняти з публікації';
$_lang['ms2_category_delete'] = 'Видалити категорію';
$_lang['ms2_category_undelete'] = 'Відновити категорію';
$_lang['ms2_category_view'] = 'Переглянути на сайті';
$_lang['ms2_category_new'] = 'Нова категорія';
$_lang['ms2_category_option_add'] = 'Додати характеристику';
$_lang['ms2_category_option_rank'] = 'Порядок сортування';
$_lang['ms2_category_show_nested'] = 'Показувати вкладені товари';

$_lang['ms2_product'] = 'Товар магазину';
$_lang['ms2_product_type'] = 'Товар магазину';
$_lang['ms2_product_create_here'] = 'Товар магазину';
$_lang['ms2_product_create'] = 'Додати товар';

$_lang['ms2_option_type'] = 'Тип опції';

$_lang['ms2_frontend_currency'] = 'грн.';
$_lang['ms2_frontend_weight_unit'] = 'кг.';
$_lang['ms2_frontend_count_unit'] = 'шт.';
$_lang['ms2_frontend_add_to_cart'] = 'Додати до кошика';
$_lang['ms2_frontend_tags'] = 'Теги';
$_lang['ms2_frontend_colors'] = 'Кольори';
$_lang['ms2_frontend_color'] = 'Колір';
$_lang['ms2_frontend_sizes'] = 'Розміри';
$_lang['ms2_frontend_size'] = 'Розмір';
$_lang['ms2_frontend_popular'] = 'Популярний товар';
$_lang['ms2_frontend_favorite'] = 'Рекомендуємо';
$_lang['ms2_frontend_new'] = 'Новинка';
$_lang['ms2_frontend_deliveries'] = 'Варіанти доставки';
$_lang['ms2_frontend_delivery'] = 'Доставка';
$_lang['ms2_frontend_payments'] = 'Способи оплати';
$_lang['ms2_frontend_payment'] = 'Оплата';
$_lang['ms2_frontend_delivery_select'] = 'Виберіть доставку';
$_lang['ms2_frontend_payment_select'] = 'Виберіть оплату';
$_lang['ms2_frontend_credentials'] = 'Дані отримувача';
$_lang['ms2_frontend_address'] = 'Адреса доставки';

$_lang['ms2_frontend_comment'] = 'Коментарій';
$_lang['ms2_frontend_receiver'] = 'Отримувач';
$_lang['ms2_frontend_email'] = 'Email';
$_lang['ms2_frontend_phone'] = 'Телефон';
$_lang['ms2_frontend_index'] = 'Поштовий індекс';
$_lang['ms2_frontend_region'] = 'Область';
$_lang['ms2_frontend_city'] = 'Місто';
$_lang['ms2_frontend_street'] = 'Вулиця';
$_lang['ms2_frontend_building'] = 'Дім';
$_lang['ms2_frontend_room'] = 'Квартира';

$_lang['ms2_frontend_order_cost'] = 'Разом, з доставкою';
$_lang['ms2_frontend_order_submit'] = 'Зробити замовлення!';
$_lang['ms2_frontend_order_cancel'] = 'Очистити форму';
$_lang['ms2_frontend_order_success'] = 'Дякуємо за замовлення <b>#[[+num]]</b> на нашому сайті <b>[[++site_name]]</b>!';

$_lang['ms2_message_close_all'] = 'закрити все';
$_lang['ms2_err_unknown'] = 'Невідома помилка';
$_lang['ms2_err_ns'] = 'Це поле обовʼязкове';
$_lang['ms2_err_ae'] = 'Це поле повинно бути унікальним';
$_lang['ms2_err_json'] = 'Це поле потребує JSON';
$_lang['ms2_err_order_nf'] = 'Замовлення з таким ідентифікатором не знайдено.';
$_lang['ms2_err_status_nf'] = 'Статус з таким ідентифікатором не знайдено.';
$_lang['ms2_err_delivery_nf'] = 'Спосіб доставки з таким ідентифікатором не знайдено.';
$_lang['ms2_err_payment_nf'] = 'Спосіб оплати з таким ідентифікатором не знайдено.';
$_lang['ms2_err_status_final'] = 'Встановлено фінальний статус. Його неможливо змінювати.';
$_lang['ms2_err_status_fixed'] = 'Встановлено фіксуючий статус. Ви не можете змінити його на більш ранній.';
$_lang['ms2_err_status_wrong'] = 'Невірний статус замовлення.';
$_lang['ms2_err_status_same'] = 'Цей статус вже встановлено.';
$_lang['ms2_err_register_globals'] = 'Помилка: php параметр <b>register_globals</b> має бути вимкненим.';
$_lang['ms2_err_link_equal'] = 'Ви намагаєтесь додати товару посилання на самого себе';
$_lang['ms2_err_value_duplicate'] = 'Ви не ввели значення, або ввели повтор.';

$_lang['ms2_err_gallery_save'] = 'Не можу зберегти, файл не був збережений (див. системний журнал).';
$_lang['ms2_err_gallery_ns'] = 'Передано пустий файл';
$_lang['ms2_err_gallery_ext'] = 'Невірне розширення файлу';
$_lang['ms2_err_gallery_exists'] = 'Таке зображення вже є в галереї товару.';
$_lang['ms2_err_gallery_thumb'] = 'Не вдалося згенерувати мініатюри. Див. системний лог.';
$_lang['ms2_err_wrong_image'] = 'Файл не є коректним зображенням.';

$_lang['ms2_email_subject_new_user'] = 'Ви зробили замовлення #[[+num]] на сайті [[++site_name]]';
$_lang['ms2_email_subject_new_manager'] = 'У вас нове замовлення #[[+num]]';
$_lang['ms2_email_subject_paid_user'] = 'Ви сплатили замовлення #[[+num]]';
$_lang['ms2_email_subject_paid_manager'] = 'Замовлення #[[+num]] було сплачено';
$_lang['ms2_email_subject_sent_user'] = 'Ваше замовлення #[[+num]] було відправлено';
$_lang['ms2_email_subject_cancelled_user'] = 'Ваше замовлення #[[+num]] було скасовано';

$_lang['ms2_payment_link'] = 'Якщо ви випадково перервали процедуру оплати, ви завжди можете <a href="[[+link]]" style="color:#348eda;">продовжити її по цьому посиланню</a>.';

$_lang['ms2_category_err_ns'] = 'Категорія не вибрана';
$_lang['ms2_option_err_ns'] = 'Опція не вибрана';
$_lang['ms2_option_err_nf'] = 'Опція не знайдена';
$_lang['ms2_option_err_ae'] = 'Опція вже існує';
$_lang['ms2_option_err_save'] = 'Помилка збереження опції';
$_lang['ms2_option_err_reserved_key'] = 'Такий ключ опції використовувати неможливо';
$_lang['ms2_option_err_invalid_key'] = 'Невірний ключ для опції';
