<?php
/**
 * Admin Plugin
 *
 * @package blesta
 * @subpackage blesta.language.uk_ua
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminPlugin.integrations.features'] = 'Далі - Додаткові функції';
$lang['AdminPlugin.features.confirm'] = 'Далі - Підтвердження';
$lang['AdminPlugin.features.text_remove'] = 'Видалити';
$lang['AdminPlugin.features.text_options'] = 'Параметри';
$lang['AdminPlugin.features.cron_task_row_add'] = 'Додати завдання Cron';
$lang['AdminPlugin.features.service_tab_row_add'] = 'Додати вкладку "Керування послугами';
$lang['AdminPlugin.features.placeholder_time'] = 'наприклад, 14:25 або 60';
$lang['AdminPlugin.features.placeholder_cron_label'] = 'наприклад, приклад завдання Cron';
$lang['AdminPlugin.features.placeholder_name'] = 'наприклад, cron_task_example';
$lang['AdminPlugin.features.placeholder_tab_label'] = 'наприклад, Змінити пароль';
$lang['AdminPlugin.features.placeholder_method_name'] = 'наприклад, вкладка ChangePassword';
$lang['AdminPlugin.features.tooltip_time'] = 'Щоденний 24-годинний час, коли має виконуватися це завдання (наприклад, "14:25") АБО Інтервал у хвилинах, з яким має виконуватися це завдання cron';
$lang['AdminPlugin.features.tooltip_type'] = 'Тип таймінгу для завдання cron (час або інтервал)';
$lang['AdminPlugin.features.tooltip_description'] = 'Опис, показаний на сторінці списку завдань cron';
$lang['AdminPlugin.features.tooltip_cron_label'] = 'Відображення назви завдання cron';
$lang['AdminPlugin.features.tooltip_name'] = 'Ім\'я завдання cron у кодовій базі у зміїному регістрі (наприклад, cron_task_example)';
$lang['AdminPlugin.features.tooltip_level'] = 'Рівень інтерфейсу, на якому відображатиметься вкладка (персонал або клієнт)';
$lang['AdminPlugin.features.tooltip_tab_label'] = 'Ім\'я вкладки сервісу на екрані';
$lang['AdminPlugin.features.tooltip_method_name'] = 'Ім\'я методу, який буде згенеровано для цієї вкладки в базі коду (у вигляді camelCaseMethodName)';
$lang['AdminPlugin.features.time'] = 'Час запуску/інтервал';
$lang['AdminPlugin.features.type'] = 'Тип';
$lang['AdminPlugin.features.description'] = 'Опис';
$lang['AdminPlugin.features.name'] = 'Ім\'я';
$lang['AdminPlugin.features.level'] = 'Рівень';
$lang['AdminPlugin.features.label'] = 'Етикетка';
$lang['AdminPlugin.features.method_name'] = 'Назва методу';
$lang['AdminPlugin.features.heading_optional_functions'] = 'Додаткові функції';
$lang['AdminPlugin.features.heading_cron_tasks'] = 'Завдання Cron';
$lang['AdminPlugin.features.heading_service_tabs'] = 'Вкладки керування послугами';
$lang['AdminPlugin.features.heading_features'] = 'Додаткові функції';
$lang['AdminPlugin.integrations.placeholder_link'] = 'наприклад, plugin/support_manager/client_tickets/';
$lang['AdminPlugin.integrations.placeholder_label'] = 'наприклад, квитки';
$lang['AdminPlugin.integrations.placeholder_card_callback'] = 'наприклад, getClientTickets';
$lang['AdminPlugin.integrations.placeholder_event_callback'] = 'наприклад, myClientAddHandlerMethod';
$lang['AdminPlugin.integrations.placeholder_event'] = 'наприклад, Клієнти.Додати';
$lang['AdminPlugin.integrations.placeholder_name'] = 'наприклад, Генератор розширень';
$lang['AdminPlugin.integrations.placeholder_action'] = 'наприклад, індекс';
$lang['AdminPlugin.integrations.placeholder_controller'] = 'наприклад, admin_main';
$lang['AdminPlugin.integrations.tooltip_link'] = 'URI, на який потрібно посилатися, коли клієнт натискає на картку клієнта';
$lang['AdminPlugin.integrations.tooltip_card_callback'] = 'Назва методу, який потрібно створити в головному класі плагіна для отримання значення картки';
$lang['AdminPlugin.integrations.tooltip_level'] = 'Рівень інтерфейсу, на якому відображати картку клієнта';
$lang['AdminPlugin.integrations.tooltip_label'] = 'Рядок, що з\'являється під значенням у вигляді мітки';
$lang['AdminPlugin.integrations.tooltip_event_callback'] = 'Назва методу обробника події, який потрібно створити в головному класі плагіна';
$lang['AdminPlugin.integrations.tooltip_event'] = 'Подія, для якої потрібно додати обробник (наприклад, Clients.add). Список основних подій, зареєстрованих у blesta, можна знайти за посиланням https://docs.blesta.com/display/dev/Event+Handlers';
$lang['AdminPlugin.integrations.tooltip_name'] = 'Назва дії на екрані (текст навігації, заголовок віджету або текст посилання, залежно від місця розташування дії)';
$lang['AdminPlugin.integrations.tooltip_action'] = 'Дія для URI, з якого потрібно витягнути вміст для цієї дії (наприклад, індекс)';
$lang['AdminPlugin.integrations.tooltip_controller'] = 'Контролер для URI, з якого потрібно отримати вміст для дії (наприклад, admin_main)';
$lang['AdminPlugin.integrations.tooltip_location'] = 'Місце в інтерфейсі для відображення дії';
$lang['AdminPlugin.integrations.text_remove'] = 'Видалити';
$lang['AdminPlugin.integrations.text_options'] = 'Параметри';
$lang['AdminPlugin.integrations.text_cards_more_info'] = 'Картки клієнта - це невеликі блоки, що відображаються в профілі клієнта (в кабінеті клієнта або адміністратора) і використовуються в основному для відображення різної статистики (наприклад, кількість послуг, квитків або замовлень). Вони складаються зі значення, підпису, фону та посилання.  Мітка відображається під значенням, яке витягується з функції зворотного виклику.';
$lang['AdminPlugin.integrations.text_events_more_info'] = 'Це система хуків у Blesta.  Події реєструються або ядром, або плагіном, потім плагіни прослуховують ці події і визначають для них методи обробки.  Оскільки будь-який плагін може реєструвати події, їх може бути будь-яка кількість, однак список основних подій, визначених ядром Blesta, можна знайти тут https://docs.blesta.com/display/dev/Event+Handlers.';
$lang['AdminPlugin.integrations.text_actions_more_info'] = '"Дії" - це сторінки плагіна, доступні через основний інтерфейс. Сюди входять навігаційні посилання в області адміністратора і клієнта, віджети в області адміністратора і посилання на бічній панелі профілю клієнта. Внесені тут контролери і дії будуть використані для створення простих файлів контролерів. Крім того, для кожної дії будуть створені зразки файлів подання.';
$lang['AdminPlugin.integrations.link'] = 'Посилання';
$lang['AdminPlugin.integrations.card_callback'] = 'Метод зворотного виклику';
$lang['AdminPlugin.integrations.level'] = 'Рівень';
$lang['AdminPlugin.integrations.label'] = 'Етикетка';
$lang['AdminPlugin.integrations.event_callback'] = 'Метод зворотного виклику';
$lang['AdminPlugin.integrations.event'] = 'Подія';
$lang['AdminPlugin.integrations.name'] = 'Ім\'я';
$lang['AdminPlugin.integrations.action'] = 'Дія';
$lang['AdminPlugin.integrations.controller'] = 'Контролер';
$lang['AdminPlugin.integrations.location'] = 'Місцезнаходження';
$lang['AdminPlugin.integrations.heading_more_info'] = 'Більше інформації';
$lang['AdminPlugin.integrations.heading_cards'] = 'Картки клієнта';
$lang['AdminPlugin.integrations.heading_events'] = 'Обробники подій';
$lang['AdminPlugin.integrations.heading_actions'] = 'Дії';
$lang['AdminPlugin.integrations.card_row_add'] = 'Додати картку клієнта';
$lang['AdminPlugin.integrations.event_row_add'] = 'Додати обробник подій';
$lang['AdminPlugin.integrations.action_row_add'] = 'Додати дію';
$lang['AdminPlugin.integrations.heading_integrations'] = 'Основні інтеграції';
$lang['AdminPlugin.database.integrations'] = 'Далі - Основні інтеграції';
$lang['AdminPlugin.database.text_remove'] = 'Видалити';
$lang['AdminPlugin.database.text_options'] = 'Параметри';
$lang['AdminPlugin.database.text_more_info'] = 'Ця сторінка використовується для створення схеми для таблиць бази даних, що генеруються і управляються цим плагіном. Буде згенеровано код для додавання та видалення цих таблиць під час встановлення та видалення плагіна. Крім того, для цих таблиць будуть створені файли моделей з деякими основними функціями.';
$lang['AdminPlugin.database.placeholder_length'] = 'наприклад, 64 або \'a\', \'b\', \'c\'';
$lang['AdminPlugin.database.placeholder_column_name'] = 'наприклад, ім\'я_стовпця';
$lang['AdminPlugin.database.tooltip_primary'] = 'Позначає цей стовпець як первинний ключ для стовпця. Складені ключі наразі не підтримуютьсяm. Якщо ви бажаєте мати складений ключ або не мати первинного ключа, зверніться до методу install() згенерованого файлу ***_plugin.php.';
$lang['AdminPlugin.database.tooltip_nullable'] = 'Дозволяти чи ні нульове значення для цього стовпця.';
$lang['AdminPlugin.database.tooltip_default'] = 'Значення за замовчуванням, яке буде вставлено для цього стовпця. Поля, які можна обнулити, з порожнім значенням за замовчуванням матимуть значення NULL.';
$lang['AdminPlugin.database.tooltip_length'] = 'Задає максимальну кількість символів у полі. Якщо тип стовпця "перерахування", введіть значення у цьому форматі: \'a\', \'b\', \'c\'...';
$lang['AdminPlugin.database.tooltip_type'] = 'Тип стовпця в базі даних.';
$lang['AdminPlugin.database.tooltip_column_name'] = 'Назва стовпця в базі даних (наприклад, column_name).';
$lang['AdminPlugin.database.primary'] = 'Первинний ключ';
$lang['AdminPlugin.database.nullable'] = 'Nullable';
$lang['AdminPlugin.database.default'] = 'За замовчуванням';
$lang['AdminPlugin.database.length'] = 'Довжина/Значення';
$lang['AdminPlugin.database.type'] = 'Тип';
$lang['AdminPlugin.database.column_name'] = 'Назва стовпчика';
$lang['AdminPlugin.database.placeholder_table_name'] = 'наприклад, ім\'я_таблиці_розширення';
$lang['AdminPlugin.database.tooltip_table_name'] = 'Ім\'я таблиці в базі даних (наприклад, ім\'я_таблиці_розширення)';
$lang['AdminPlugin.database.table_name'] = 'Назва таблиці';
$lang['AdminPlugin.database.column_row_add'] = 'Додати стовпець';
$lang['AdminPlugin.database.table_row_add'] = 'Додати таблицю бази даних';
$lang['AdminPlugin.database.heading_more_info'] = 'Більше інформації';
$lang['AdminPlugin.database.heading_database'] = 'Таблиці бази даних';
$lang['AdminPlugin.basic.confirm'] = 'Далі - Підтвердження';
$lang['AdminPlugin.basic.database'] = 'Далі - Інформація про базу даних';
$lang['AdminPlugin.basic.placeholder_author_url'] = 'наприклад, https://blesta.com/';
$lang['AdminPlugin.basic.placeholder_author_name'] = 'наприклад, Blesta';
$lang['AdminPlugin.basic.tooltip_logo'] = 'Логотип відображається в списку плагінів. Зображення не змінюються, тому ідеальні розміри - 150x70';
$lang['AdminPlugin.basic.tooltip_description'] = 'Опис, показаний у списку плагінів';
$lang['AdminPlugin.basic.text_remove'] = 'Видалити';
$lang['AdminPlugin.basic.author_row_add'] = 'Додати автора';
$lang['AdminPlugin.basic.text_options'] = 'Параметри';
$lang['AdminPlugin.basic.author_url'] = 'URL-адреса автора';
$lang['AdminPlugin.basic.author_name'] = 'Ім\'я автора Ім\'я автора';
$lang['AdminPlugin.basic.logo'] = 'Логотип';
$lang['AdminPlugin.basic.description'] = 'Опис';
$lang['AdminPlugin.basic.heading_authors'] = 'Автори';
$lang['AdminPlugin.basic.heading_basic'] = 'Основна інформація';
$lang['AdminPlugin.index.boxtitle_extension_generator'] = 'Генератор розширень - плагін';
$lang['AdminPlugin.index.page_title'] = 'Генератор розширень - %1$s';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissionGroups'] = 'Повертає всі групи дозволів, які потрібно налаштувати для цього плагіна (викликається після install(), upgrade() та uninstall(), перезаписує всі наявні групи дозволів)';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissions'] = 'Повертає всі дозволи, які потрібно налаштувати для цього плагіна (викликається після install(), upgrade() та uninstall(), перезаписує всі наявні дозволи)';
$lang['AdminPlugin.getoptionalfunctions.tooltip_upgrade'] = 'Виконує міграцію даних з $current_version (поточної встановленої версії) до заданої версії файлового набору. Встановлює помилки введення у разі невдачі, запобігаючи оновленню модуля.';
$lang['AdminPlugin.getcardlevels.staff'] = 'Персонал';
$lang['AdminPlugin.getcardlevels.client'] = 'Клієнт';
$lang['AdminPlugin.getactionlocations.widget_staff_billing'] = 'Віджет - Огляд рахунків (персонал)';
$lang['AdminPlugin.getactionlocations.widget_client_home'] = 'Віджет - Профіль клієнта (Клієнт)';
$lang['AdminPlugin.getactionlocations.widget_staff_client'] = 'Віджет - Профіль клієнта (Персонал)';
$lang['AdminPlugin.getactionlocations.widget_staff_home'] = 'Віджет - Панель управління (Персонал)';
$lang['AdminPlugin.getactionlocations.action_staff_client'] = 'Бічна панель профілю клієнта (Персонал)';
$lang['AdminPlugin.getactionlocations.nav_secondary_staff'] = 'Підменю Навігація (Персонал)';
$lang['AdminPlugin.getactionlocations.nav_primary_staff'] = 'Первинна навігація (персонал)';
$lang['AdminPlugin.getactionlocations.nav_primary_client'] = 'Первинна навігація (клієнт)';
