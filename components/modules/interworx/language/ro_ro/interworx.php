<?php
/**
 * Interworx
 *
 * @package blesta
 * @subpackage blesta.language.ro_ro
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Interworx.!error.api.no_domain'] = 'Lipsește câmpul Domain în API. Câmpul Domeniu este obligatoriu';
$lang['Interworx.!error.api.no_accounts'] = 'Nu s-au găsit conturi.';
$lang['Interworx.!error.api.no_reseller_id'] = 'acest apel API necesită reseller_id';
$lang['Interworx.!error.api.create_reseller.missing_fields'] = 'createReseller necesită un nume de utilizator, un e-mail și o parolă';
$lang['Interworx.!error.api.create_reseller.no_array'] = 'createReseller are nevoie de o matrice care îi este transmisă.';
$lang['Interworx.!error.api.no_reseller_access'] = 'Acest apel API nu este disponibil pentru distribuitori. Trebuie să fiți Administrator.';
$lang['Interworx.!error.api.duplicate_email'] = 'Duplicate Email, Acest e-mail există deja. Vă rugăm să alegeți un alt e-mail.';
$lang['Interworx.!error.api.duplicate_username'] = 'Nume de utilizator duplicat, Acest nume de utilizator există deja. Vă rugăm să alegeți un alt nume de utilizator.';
$lang['Interworx.!error.api.duplicate_domain'] = 'Duplicate Domain, Acest domeniu există deja. Vă rugăm să alegeți un alt domeniu.';
$lang['Interworx.!error.api.no_packages'] = 'Recuperarea informațiilor despre pachete, Nu s-au găsit pachete pentru acest utilizator';
$lang['Interworx.!error.api.no_ips'] = 'Recuperarea informațiilor IP, Nu există IP-uri disponibile pentru acest utilizator Interworx';
$lang['Interworx.!error.api.create_account.username_characters'] = 'Numele de utilizator nu poate conține spații sau caractere speciale.';
$lang['Interworx.!error.api.create_account.username_length'] = 'Numele de utilizator trebuie să aibă între 1 și 8 caractere.';
$lang['Interworx.!error.api.create_account.missing_fields'] = 'createAccount necesită un nume de utilizator, o adresă de e-mail, o parolă și un domeniu.';
$lang['Interworx.!error.api.create_account.no_array'] = 'createAccount are nevoie de o matrice care îi este transmisă.';
$lang['Interworx.!error.api.package_types'] = 'Tipurile de pachete nu se potrivesc. Nu puteți schimba între pachetele Reseller și Non-Reseller.';
$lang['Interworx.!error.api.reported_error'] = 'API Call a raportat o eroare:';
$lang['Interworx.!error.api.soap_error'] = 'Eroare SOAP. Verificați dacă aveți instalat și configurat corect soap. De asemenea, verificați dacă setările HOST și PORT sunt corecte.';
$lang['Interworx.!error.api.no_action'] = 'API necesită transmiterea unei acțiuni.';
$lang['Interworx.!error.api.no_controller'] = 'API-ul necesită un api_controller care să îi fie transmis.';
$lang['Interworx.!error.api.internal'] = 'A apărut o eroare internă sau serverul nu a răspuns la cerere.';
$lang['Interworx.!error.interworx_email.format'] = 'Vă rugăm să introduceți o adresă de e-mail validă.';
$lang['Interworx.!error.interworx_confirm_password.matches'] = 'Parolele nu se potrivesc.';
$lang['Interworx.!error.interworx_password.length'] = 'Parola trebuie să aibă o lungime de cel puțin 6 caractere.';
$lang['Interworx.!error.interworx_password.format'] = 'Vă rugăm să introduceți o parolă.';
$lang['Interworx.!error.interworx_username.length'] = 'Numele de utilizator trebuie să aibă o lungime cuprinsă între 1 și 8 caractere.';
$lang['Interworx.!error.interworx_username.format'] = 'Numele de utilizator poate conține numai caractere alfanumerice.';
$lang['Interworx.!error.interworx_domain.format'] = 'Vă rugăm să introduceți un nume de domeniu valid de forma: domain.com';
$lang['Interworx.!error.meta[package].empty'] = 'Este necesar un pachet Interworx.';
$lang['Interworx.!error.meta[type].valid'] = 'Tipul de cont trebuie să fie standard sau reseller.';
$lang['Interworx.!error.name_servers_count'] = 'Trebuie să definiți cel puțin 2 servere de nume.';
$lang['Interworx.!error.name_servers_valid'] = 'Unul sau mai multe dintre serverele de nume introduse nu sunt valide.';
$lang['Interworx.!error.account_limit_valid'] = 'Account Limit (Limita contului) trebuie lăsată în alb (pentru conturi nelimitate) sau setată la o valoare întreagă.';
$lang['Interworx.!error.remote_key_valid_connection'] = 'Nu a putut fi stabilită o conexiune cu serverul. Vă rugăm să verificați dacă numele gazdei, numărul de port și cheia de la distanță sunt corecte.';
$lang['Interworx.!error.remote_key_valid'] = 'Cheia de la distanță pare să nu fie valabilă.';
$lang['Interworx.!error.user_name_valid'] = 'Se pare că numele de utilizator nu este valid.';
$lang['Interworx.!error.host_name_valid'] = 'Numele de gazdă pare a fi invalid.';
$lang['Interworx.!error.server_name_valid'] = 'Trebuie să introduceți o etichetă de server.';
$lang['Interworx.service_info.option_login'] = 'Autentificare';
$lang['Interworx.service_info.options'] = 'Opțiuni';
$lang['Interworx.service_info.server'] = 'Server';
$lang['Interworx.service_info.password'] = 'Parola';
$lang['Interworx.service_info.email'] = 'Email';
$lang['Interworx.tab_client_actions.field_password_submit'] = 'Actualizarea parolei';
$lang['Interworx.tab_client_actions.field_interworx_confirm_password'] = 'Confirmați parola';
$lang['Interworx.tab_client_actions.field_interworx_password'] = 'Parola';
$lang['Interworx.tab_client_actions.change_password'] = 'Schimbă parola';
$lang['Interworx.tab_client_actions'] = 'Acțiuni';
$lang['Interworx.tab_unavailable.message'] = 'Aceste informații nu sunt încă disponibile.';
$lang['Interworx.tab_stats.package_info.opt_unlimited'] = 'Nelimitat';
$lang['Interworx.tab_stats.package_info.opt_siteworx_accounts'] = 'Numărul de cont poate vinde';
$lang['Interworx.tab_stats.package_info.opt_oversell_storage'] = 'Oversell Storage';
$lang['Interworx.tab_stats.package_info.opt_oversell_bandwidth'] = 'Lățime de bandă de supravânzare';
$lang['Interworx.tab_stats.package_info.opt_save_xfer_logs'] = 'Salvați jurnalele XFER';
$lang['Interworx.tab_stats.package_info.opt_burstable'] = 'Burstabil';
$lang['Interworx.tab_stats.package_info.opt_ssl'] = 'SSL';
$lang['Interworx.tab_stats.package_info.opt_resolve_xferlog_dns'] = 'Rezolvarea DNS XFERLOG';
$lang['Interworx.tab_stats.package_info.opt_dns_records'] = 'Acces DNS';
$lang['Interworx.tab_stats.package_info.opt_crontab'] = 'Acces Cron';
$lang['Interworx.tab_stats.package_info.opt_cgi_access'] = 'Acces CGI';
$lang['Interworx.tab_stats.package_info.opt_backup'] = 'Copii de rezervă activate';
$lang['Interworx.tab_stats.package_info.opt_subdomains'] = 'Subdomenii';
$lang['Interworx.tab_stats.package_info.opt_slave_domains'] = 'Domenii slave';
$lang['Interworx.tab_stats.package_info.opt_pointer_domains'] = 'Redirecționarea domeniilor';
$lang['Interworx.tab_stats.package_info.opt_mysql_db_users'] = 'Utilizatori MySQL';
$lang['Interworx.tab_stats.package_info.opt_mysql_dbs'] = 'Baze de date MySQL';
$lang['Interworx.tab_stats.package_info.opt_ftp_accounts'] = 'Conturi FTP';
$lang['Interworx.tab_stats.package_info.opt_email_groups'] = 'Grupuri de e-mail';
$lang['Interworx.tab_stats.package_info.opt_email_boxes'] = 'Conturi de e-mail';
$lang['Interworx.tab_stats.package_info.opt_email_autoresponders'] = 'Răspunsuri automate de e-mail';
$lang['Interworx.tab_stats.package_info.opt_email_aliases'] = 'Aliasuri de e-mail';
$lang['Interworx.tab_stats.package_info.opt_bandwidth'] = 'Lățime de bandă';
$lang['Interworx.tab_stats.package_info.opt_storage'] = 'Spațiu pe disc';
$lang['Interworx.tab_stats.package_info.name'] = 'Nume';
$lang['Interworx.tab_stats.package_info.id'] = 'ID';
$lang['Interworx.tab_stats.package_title'] = 'Informații despre pachet';
$lang['Interworx.tab_stats.disk_unlimited'] = 'Nelimitat';
$lang['Interworx.tab_stats.disk_value'] = '%1$s MB';
$lang['Interworx.tab_stats.disk_heading.limit'] = 'Limitați';
$lang['Interworx.tab_stats.disk_heading.used'] = 'Folosit';
$lang['Interworx.tab_stats.disk_title'] = 'Discul';
$lang['Interworx.tab_stats.bandwidth_unlimited'] = 'Nelimitat';
$lang['Interworx.tab_stats.bandwidth_value'] = '%1$s GB';
$lang['Interworx.tab_stats.bandwidth_heading.limit'] = 'Limitați';
$lang['Interworx.tab_stats.bandwidth_heading.used'] = 'Folosit';
$lang['Interworx.tab_stats.bandwidth_title'] = 'Lățime de bandă';
$lang['Interworx.tab_stats.info.ip'] = 'Adresa IP';
$lang['Interworx.tab_stats.info.domain'] = 'Domeniu';
$lang['Interworx.tab_stats.info.server'] = 'Server';
$lang['Interworx.tab_stats.info_heading.value'] = 'Valoare';
$lang['Interworx.tab_stats.info_heading.field'] = 'Domeniul';
$lang['Interworx.tab_stats.info_title'] = 'Informații';
$lang['Interworx.service_field.tooltip.password'] = 'Puteți lăsa parola goală pentru a genera automat una.';
$lang['Interworx.service_field.tooltip.username'] = 'Puteți lăsa numele de utilizator gol pentru a genera automat unul.';
$lang['Interworx.service_field.tooltip.email'] = 'Puteți lăsa emailul necompletat pentru a utiliza automat adresa de email a clientului.';
$lang['Interworx.service_field.tooltip.domain'] = 'Domeniul va fi modificat numai la nivel local. Acesta nu va fi modificat în Interworx.';
$lang['Interworx.service_field.tooltip.interworx_reseller_id'] = 'ID-ul de revânzător va fi modificat numai la nivel local. Acesta nu va fi modificat în Interworx.';
$lang['Interworx.service_field.confirm_password'] = 'Confirmați parola';
$lang['Interworx.service_field.password'] = 'Parola';
$lang['Interworx.service_field.email'] = 'Email';
$lang['Interworx.service_field.username'] = 'Nume utilizator';
$lang['Interworx.service_field.domain'] = 'Domeniu';
$lang['Interworx.service_field.reseller_id'] = 'ID de revânzător';
$lang['Interworx.package_fields.package'] = 'Pachetul Interworx';
$lang['Interworx.package_fields.type_reseller'] = 'Revânzător';
$lang['Interworx.package_fields.type_standard'] = 'Standard';
$lang['Interworx.package_fields.type'] = 'Tipul de cont';
$lang['Interworx.row_meta.use_ssl'] = 'Utilizați SSL atunci când vă conectați la API (recomandat)';
$lang['Interworx.row_meta.debug.print'] = 'Imprimare';
$lang['Interworx.row_meta.debug.log'] = 'Jurnal';
$lang['Interworx.row_meta.debug.none'] = 'Nici unul';
$lang['Interworx.row_meta.debug'] = 'Depanare';
$lang['Interworx.row_meta.account_limit'] = 'Limita contului';
$lang['Interworx.row_meta.key'] = 'Cheie de la distanță';
$lang['Interworx.row_meta.default_port'] = '2443';
$lang['Interworx.row_meta.port'] = 'Numărul portului';
$lang['Interworx.row_meta.host_name'] = 'Nume gazdă';
$lang['Interworx.row_meta.server_name'] = 'Eticheta serverului';
$lang['Interworx.edit_row.add_btn'] = 'Editați serverul';
$lang['Interworx.edit_row.remove_name_server'] = 'Eliminați';
$lang['Interworx.edit_row.name_server'] = 'Server de nume %1$s';
$lang['Interworx.edit_row.name_server_host_col'] = 'Nume gazdă';
$lang['Interworx.edit_row.name_server_col'] = 'Nume de server';
$lang['Interworx.edit_row.name_server_btn'] = 'Adăugați un server de nume suplimentar';
$lang['Interworx.edit_row.notes_title'] = 'Note';
$lang['Interworx.edit_row.name_servers_title'] = 'Servere de nume';
$lang['Interworx.edit_row.basic_title'] = 'Setări de bază';
$lang['Interworx.edit_row.box_title'] = 'Editați serverul Interworx';
$lang['Interworx.add_row.add_btn'] = 'Adăugați un server';
$lang['Interworx.add_row.remove_name_server'] = 'Eliminați';
$lang['Interworx.add_row.name_server'] = 'Server de nume %1$s';
$lang['Interworx.add_row.name_server_host_col'] = 'Nume gazdă';
$lang['Interworx.add_row.name_server_col'] = 'Nume de server';
$lang['Interworx.add_row.name_server_btn'] = 'Adăugați un server de nume suplimentar';
$lang['Interworx.add_row.notes_title'] = 'Note';
$lang['Interworx.add_row.name_servers_title'] = 'Servere de nume';
$lang['Interworx.add_row.basic_title'] = 'Setări de bază';
$lang['Interworx.add_row.box_title'] = 'Adăugați serverul Interworx';
$lang['Interworx.order_options.roundrobin'] = 'Distribuiți în mod egal între servere';
$lang['Interworx.order_options.first'] = 'Primul server incomplet';
$lang['Interworx.manage.module_groups_no_results'] = 'Nu există grupuri de servere.';
$lang['Interworx.manage.module_rows_no_results'] = 'Nu există servere.';
$lang['Interworx.manage.module_groups.confirm_delete'] = 'Sunteți sigur că doriți să ștergeți acest grup de servere?';
$lang['Interworx.manage.module_rows.confirm_delete'] = 'Sunteți sigur că doriți să ștergeți acest server?';
$lang['Interworx.manage.module_groups.delete'] = 'Ștergeți';
$lang['Interworx.manage.module_rows.delete'] = 'Ștergeți';
$lang['Interworx.manage.module_groups.edit'] = 'Editați';
$lang['Interworx.manage.module_rows.edit'] = 'Editați';
$lang['Interworx.manage.module_rows.count'] = '%1$s / %2$s';
$lang['Interworx.manage.module_groups_heading.options'] = 'Opțiuni';
$lang['Interworx.manage.module_groups_heading.servers'] = 'Număr de servere';
$lang['Interworx.manage.module_groups_heading.name'] = 'Numele grupului';
$lang['Interworx.manage.module_rows_heading.options'] = 'Opțiuni';
$lang['Interworx.manage.module_rows_heading.accounts'] = 'Conturi';
$lang['Interworx.manage.module_rows_heading.hostname'] = 'Nume gazdă';
$lang['Interworx.manage.module_rows_heading.name'] = 'Eticheta serverului';
$lang['Interworx.manage.module_groups_title'] = 'Grupuri de servere';
$lang['Interworx.manage.module_rows_title'] = 'Servere';
$lang['Interworx.add_module_group'] = 'Adăugați grupul de servere';
$lang['Interworx.add_module_row'] = 'Adăugați un server';
$lang['Interworx.tab_stats'] = 'Statistici';
$lang['Interworx.module_group'] = 'Grup de servere';
$lang['Interworx.module_row_plural'] = 'Servere';
$lang['Interworx.module_row'] = 'Server';
$lang['Interworx.description'] = 'InterWorx Web Control Panel este un panou de control pentru găzduire web VPS și servere dedicate bazat pe Linux. Acesta este bogat în funcții atât pentru administratorii de sistem, cât și pentru administratorii de site-uri web.';
$lang['Interworx.!error.soap_required'] = 'Extensia SOAP este necesară pentru acest modul.';
$lang['Interworx.!error.libxml_required'] = 'Extensia libxml este necesară pentru acest modul.';
$lang['Interworx.name'] = 'Interworx';
