<?php
/**
 * Admin Plugin
 *
 * @package blesta
 * @subpackage blesta.language.ru_ru
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminPlugin.features.confirm'] = 'Далее - Подтверждение';
$lang['AdminPlugin.features.text_remove'] = 'Удалить';
$lang['AdminPlugin.features.text_options'] = 'Опции';
$lang['AdminPlugin.features.cron_task_row_add'] = 'Добавить задачу Cron';
$lang['AdminPlugin.features.service_tab_row_add'] = 'Добавить вкладку "Управление услугами';
$lang['AdminPlugin.features.placeholder_time'] = 'Например, 14:25 или 60';
$lang['AdminPlugin.features.placeholder_cron_label'] = 'Например, пример задачи Cron';
$lang['AdminPlugin.features.placeholder_name'] = 'Например, cron_task_example';
$lang['AdminPlugin.features.placeholder_tab_label'] = 'Например, Изменить пароль';
$lang['AdminPlugin.features.placeholder_method_name'] = 'Например, tabChangePassword';
$lang['AdminPlugin.features.tooltip_time'] = 'Ежедневное 24-часовое время, когда должно выполняться это задание (например, "14:25") ИЛИ Интервал в минутах, через который должно выполняться это задание cron';
$lang['AdminPlugin.features.tooltip_type'] = 'Тип времени, используемый для задачи cron (время или интервал).';
$lang['AdminPlugin.features.tooltip_description'] = 'Описание, отображаемое на странице списка задач cron';
$lang['AdminPlugin.features.tooltip_cron_label'] = 'Отображаемое имя задачи cron';
$lang['AdminPlugin.features.tooltip_name'] = 'Имя задачи cron в кодовой базе в случае со змеей (например, cron_task_example)';
$lang['AdminPlugin.features.tooltip_level'] = 'Уровень интерфейса, на котором отображается вкладка (персонал или клиент)';
$lang['AdminPlugin.features.tooltip_tab_label'] = 'Отображаемое имя вкладки службы';
$lang['AdminPlugin.features.tooltip_method_name'] = 'Имя метода, который будет сгенерирован для этой вкладки в кодовой базе (в форме camelCaseMethodName)';
$lang['AdminPlugin.features.time'] = 'Время начала/интервал';
$lang['AdminPlugin.features.type'] = 'Тип';
$lang['AdminPlugin.features.description'] = 'Описание';
$lang['AdminPlugin.features.name'] = 'Имя';
$lang['AdminPlugin.features.level'] = 'Уровень';
$lang['AdminPlugin.features.label'] = 'Этикетка';
$lang['AdminPlugin.features.method_name'] = 'Название метода';
$lang['AdminPlugin.features.heading_optional_functions'] = 'Дополнительные функции';
$lang['AdminPlugin.features.heading_cron_tasks'] = 'Задачи Cron';
$lang['AdminPlugin.features.heading_service_tabs'] = 'Вкладки управления услугами';
$lang['AdminPlugin.features.heading_features'] = 'Дополнительные функции';
$lang['AdminPlugin.integrations.features'] = 'Далее - Дополнительные возможности';
$lang['AdminPlugin.integrations.placeholder_link'] = 'Например, plugin/support_manager/client_tickets/';
$lang['AdminPlugin.integrations.placeholder_label'] = 'Например, билеты';
$lang['AdminPlugin.integrations.placeholder_card_callback'] = 'например, getClientTickets';
$lang['AdminPlugin.integrations.placeholder_event_callback'] = 'Например, myClientAddHandlerMethod';
$lang['AdminPlugin.integrations.placeholder_event'] = 'например, Clients.Add';
$lang['AdminPlugin.integrations.placeholder_name'] = 'Например, Extension Generator';
$lang['AdminPlugin.integrations.placeholder_action'] = 'например, индекс';
$lang['AdminPlugin.integrations.placeholder_controller'] = 'например, admin_main';
$lang['AdminPlugin.integrations.tooltip_link'] = 'URI, на который нужно ссылаться при нажатии на карточку клиента';
$lang['AdminPlugin.integrations.tooltip_card_callback'] = 'Имя метода, который нужно создать в основном классе плагина для получения значения карты';
$lang['AdminPlugin.integrations.tooltip_level'] = 'Уровень интерфейса, на котором отображается карта клиента';
$lang['AdminPlugin.integrations.tooltip_label'] = 'Строка, отображаемая под значением в качестве метки';
$lang['AdminPlugin.integrations.tooltip_event_callback'] = 'Имя метода обработчика событий, который нужно создать в основном классе плагина';
$lang['AdminPlugin.integrations.tooltip_event'] = 'Событие, для которого нужно добавить обработчик (например, Clients.add). Список основных событий, зарегистрированных blesta, смотрите на https://docs.blesta.com/display/dev/Event+Handlers.';
$lang['AdminPlugin.integrations.tooltip_name'] = 'Отображаемое имя этого действия (текст навигации, заголовок виджета или текст ссылки в зависимости от расположения действия)';
$lang['AdminPlugin.integrations.tooltip_action'] = 'Действие для URI, из которого нужно получить содержимое для действия (например, индекс).';
$lang['AdminPlugin.integrations.tooltip_controller'] = 'Контроллер для URI, из которого нужно взять содержимое для действия (например, admin_main)';
$lang['AdminPlugin.integrations.tooltip_location'] = 'Место в интерфейсе для отображения действия';
$lang['AdminPlugin.integrations.text_remove'] = 'Удалить';
$lang['AdminPlugin.integrations.text_options'] = 'Опции';
$lang['AdminPlugin.integrations.text_cards_more_info'] = 'Карточки клиентов - это небольшие поля, отображаемые в профиле клиента (в клиентской или администраторской зоне) и служащие в основном для отображения различных статистических данных (например, количества услуг, билетов или заказов). Они состоят из значения, метки, фона и ссылки.  Метка отображается под значением, которое подтягивается из функции обратного вызова.';
$lang['AdminPlugin.integrations.text_events_more_info'] = 'Это система крючков в Blesta.  События регистрируются либо ядром, либо плагином, затем плагины прослушивают эти события и определяют методы-обработчики для них.  Поскольку любые плагины могут регистрировать события, их может быть любое количество, однако список основных событий, определенных в Blesta, можно найти здесь https://docs.blesta.com/display/dev/Event+Handlers.';
$lang['AdminPlugin.integrations.text_actions_more_info'] = '"Действия" - это страницы плагина, доступные через основной интерфейс. Сюда входят навигационные ссылки в админке и клиентской зоне, виджеты в админке и ссылки на боковой панели профиля клиента. Введенные здесь контроллеры и действия будут использованы для создания простых файлов контроллеров. Кроме того, для каждого действия будут созданы примеры файлов представлений.';
$lang['AdminPlugin.integrations.link'] = 'Ссылка';
$lang['AdminPlugin.integrations.card_callback'] = 'Метод обратного вызова';
$lang['AdminPlugin.integrations.level'] = 'Уровень';
$lang['AdminPlugin.integrations.label'] = 'Этикетка';
$lang['AdminPlugin.integrations.event_callback'] = 'Метод обратного вызова';
$lang['AdminPlugin.integrations.event'] = 'Событие';
$lang['AdminPlugin.integrations.name'] = 'Имя';
$lang['AdminPlugin.integrations.action'] = 'Действие';
$lang['AdminPlugin.integrations.controller'] = 'Контроллер';
$lang['AdminPlugin.integrations.location'] = 'Расположение';
$lang['AdminPlugin.integrations.heading_more_info'] = 'Дополнительная информация';
$lang['AdminPlugin.integrations.heading_cards'] = 'Карточки клиента';
$lang['AdminPlugin.integrations.heading_events'] = 'Обработчики событий';
$lang['AdminPlugin.integrations.heading_actions'] = 'Действия';
$lang['AdminPlugin.integrations.card_row_add'] = 'Добавить карту клиента';
$lang['AdminPlugin.integrations.event_row_add'] = 'Добавить обработчик событий';
$lang['AdminPlugin.integrations.action_row_add'] = 'Добавить действие';
$lang['AdminPlugin.integrations.heading_integrations'] = 'Основные интеграции';
$lang['AdminPlugin.database.integrations'] = 'Далее - Основные интеграции';
$lang['AdminPlugin.database.text_remove'] = 'Удалить';
$lang['AdminPlugin.database.text_options'] = 'Опции';
$lang['AdminPlugin.database.text_more_info'] = 'Эта страница используется для создания схемы таблиц базы данных, создаваемых и управляемых этим плагином. Будет сгенерирован код для добавления и удаления этих таблиц при установке и удалении. Кроме того, для этих таблиц будут созданы файлы моделей с некоторыми базовыми функциями.';
$lang['AdminPlugin.database.placeholder_length'] = 'Например, 64 или \'a\', \'b\', \'c\'';
$lang['AdminPlugin.database.placeholder_column_name'] = 'например, имя_столбца';
$lang['AdminPlugin.database.tooltip_primary'] = 'Отмечает этот столбец как первичный ключ для столбца. Составные ключи в настоящее время не поддерживаютсяm. Если вы хотите иметь составной ключ или не иметь первичного ключа, обратитесь к методу install() сгенерированного файла ***_plugin.php.';
$lang['AdminPlugin.database.tooltip_nullable'] = 'Разрешать или нет нулевое значение для этого столбца.';
$lang['AdminPlugin.database.tooltip_default'] = 'Значение по умолчанию для вставки в этот столбец. Для полей с нулевым значением, имеющих пустое значение по умолчанию, будет использоваться значение NULL.';
$lang['AdminPlugin.database.tooltip_length'] = 'Устанавливает максимальное количество символов в поле. Если тип столбца - "перечисление", введите значения в таком формате: \'a\', \'b\', \'c\'...';
$lang['AdminPlugin.database.tooltip_type'] = 'Тип столбца в базе данных.';
$lang['AdminPlugin.database.tooltip_column_name'] = 'Имя столбца в базе данных (например, имя_столбца).';
$lang['AdminPlugin.database.primary'] = 'Первичный ключ';
$lang['AdminPlugin.database.nullable'] = 'Nullable';
$lang['AdminPlugin.database.default'] = 'По умолчанию';
$lang['AdminPlugin.database.length'] = 'Длина/значения';
$lang['AdminPlugin.database.type'] = 'Тип';
$lang['AdminPlugin.database.column_name'] = 'Имя колонки';
$lang['AdminPlugin.database.placeholder_table_name'] = 'Например, extention_table_name';
$lang['AdminPlugin.database.tooltip_table_name'] = 'Имя таблицы в базе данных (например, extention_table_name)';
$lang['AdminPlugin.database.table_name'] = 'Название стола';
$lang['AdminPlugin.database.column_row_add'] = 'Добавить колонку';
$lang['AdminPlugin.database.table_row_add'] = 'Добавить таблицу базы данных';
$lang['AdminPlugin.database.heading_more_info'] = 'Дополнительная информация';
$lang['AdminPlugin.database.heading_database'] = 'Таблицы базы данных';
$lang['AdminPlugin.basic.confirm'] = 'Далее - Подтверждение';
$lang['AdminPlugin.basic.database'] = 'Далее - Информация о базе данных';
$lang['AdminPlugin.basic.placeholder_author_url'] = 'например, https://blesta.com/';
$lang['AdminPlugin.basic.placeholder_author_name'] = 'например, Блеста';
$lang['AdminPlugin.basic.tooltip_logo'] = 'Логотип, отображаемый в листинге плагина. Изображения не изменяются по размеру, поэтому идеальные размеры - 150x70.';
$lang['AdminPlugin.basic.tooltip_description'] = 'Описание, отображаемое в листинге плагинов';
$lang['AdminPlugin.basic.text_remove'] = 'Удалить';
$lang['AdminPlugin.basic.author_row_add'] = 'Добавить автора';
$lang['AdminPlugin.basic.text_options'] = 'Опции';
$lang['AdminPlugin.basic.author_url'] = 'Автор URL';
$lang['AdminPlugin.basic.author_name'] = 'Имя автора';
$lang['AdminPlugin.basic.logo'] = 'Логотип';
$lang['AdminPlugin.basic.description'] = 'Описание';
$lang['AdminPlugin.basic.heading_authors'] = 'Авторы';
$lang['AdminPlugin.basic.heading_basic'] = 'Основная информация';
$lang['AdminPlugin.index.boxtitle_extension_generator'] = 'Генератор расширений - плагин';
$lang['AdminPlugin.index.page_title'] = 'Генератор расширений - %1$s';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissionGroups'] = 'Возвращает все группы разрешений, которые должны быть настроены для этого плагина (вызывается после установки(), обновления() и удаления(), перезаписывает все существующие группы разрешений)';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissions'] = 'Возвращает все разрешения, которые должны быть настроены для этого плагина (вызывается после установки(), обновления() и удаления(), перезаписывает все существующие разрешения)';
$lang['AdminPlugin.getoptionalfunctions.tooltip_upgrade'] = 'Выполняет миграцию данных с $current_version (текущей установленной версии) на заданную версию набора файлов. При неудаче выдает ошибки ввода, не позволяя обновить модуль.';
$lang['AdminPlugin.getcardlevels.staff'] = 'Персонал';
$lang['AdminPlugin.getcardlevels.client'] = 'Клиент';
$lang['AdminPlugin.getactionlocations.widget_staff_billing'] = 'Виджет - Обзор счетов (персонал)';
$lang['AdminPlugin.getactionlocations.widget_client_home'] = 'Виджет - Профиль клиента (Клиент)';
$lang['AdminPlugin.getactionlocations.widget_staff_client'] = 'Виджет - Профиль клиента (персонал)';
$lang['AdminPlugin.getactionlocations.widget_staff_home'] = 'Виджет - приборная панель (персонал)';
$lang['AdminPlugin.getactionlocations.action_staff_client'] = 'Боковая панель профиля клиента (персонал)';
$lang['AdminPlugin.getactionlocations.nav_secondary_staff'] = 'Подменю Nav (Персонал)';
$lang['AdminPlugin.getactionlocations.nav_primary_staff'] = 'Первичная навигация (персонал)';
$lang['AdminPlugin.getactionlocations.nav_primary_client'] = 'Основной навигатор (клиент)';
