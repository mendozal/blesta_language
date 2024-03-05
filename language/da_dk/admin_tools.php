<?php
/**
 * Admin Tools
 *
 * @package blesta
 * @subpackage blesta.language.da_dk
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminTools.!success.currency_converted'] = '%1$s = %2$s';
$lang['AdminTools.!success.collation_updated'] = 'Databasens sortering er blevet opdateret.';
$lang['AdminTools.!success.max_updated'] = 'Maksimum for fornyelsesforsøg blev opdateret med succes.';
$lang['AdminTools.!success.dequeue'] = 'Tjenesten blev fjernet fra fornyelseskøen.';
$lang['AdminTools.getlognames.text_module'] = 'Modul';
$lang['AdminTools.getlognames.text_messenger'] = 'Budbringer';
$lang['AdminTools.getlognames.text_gateway'] = 'Gateway';
$lang['AdminTools.getlognames.text_email'] = 'E-mail';
$lang['AdminTools.getlognames.text_users'] = 'Brugerlogin';
$lang['AdminTools.getlognames.text_contacts'] = 'Kontaktpersoner';
$lang['AdminTools.getlognames.text_client_settings'] = 'Klientindstillinger';
$lang['AdminTools.getlognames.text_accountaccess'] = 'Adgang til konto';
$lang['AdminTools.getlognames.text_transactions'] = 'Transaktioner';
$lang['AdminTools.getlognames.text_cron'] = 'Cron';
$lang['AdminTools.getlognames.text_invoice_delivery'] = 'Levering af fakturaer';
$lang['AdminTools.convertcurrency.page_title'] = 'Værktøjer Konverter valuta';
$lang['AdminTools.convertcurrency.boxtitle_currency'] = 'Konverter valuta';
$lang['AdminTools.convertcurrency.field_amount'] = 'Beløb';
$lang['AdminTools.convertcurrency.field_from'] = 'Fra';
$lang['AdminTools.convertcurrency.field_to'] = 'Til';
$lang['AdminTools.convertcurrency.field_currencysubmit'] = 'Konverter valuta';
$lang['AdminTools.utilities.page_title'] = 'Værktøjer Utilities';
$lang['AdminTools.utilities.boxtitle_utilities'] = 'Hjælpeprogrammer';
$lang['AdminTools.utilities.heading_utility'] = 'Forsyning';
$lang['AdminTools.utilities.heading_description'] = 'Beskrivelse';
$lang['AdminTools.utilities.heading_options'] = 'Valgmuligheder';
$lang['AdminTools.utilities.update_collation'] = 'Opdater database-sortering';
$lang['AdminTools.utilities.field_update_to_utf8mb4'] = 'Opdatering til utf8mb4';
$lang['AdminTools.utilities.text_update_to_utf8mb4'] = 'Opdater tegnsættet og sorteringen af din database, tabeller og kolonner til utf8mb4 for at understøtte 4 byte-tegn som emojis.  Det kan tage flere minutter.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_requirements'] = 'Opgrader venligst MySQL til 5.7+ eller MariaDB til 10.2.2+ for at understøtte utf8mb4-tegn som emojis.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_supported'] = 'Databasen understøtter allerede utf8mb4.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_config'] = 'For at indsætte og hente utf8mb4-tegn skal du opdatere din blesta.php-konfigurationsfil til at bruge \'charset_query\' => "SET NAMES \'utf8mb4\'".';
$lang['AdminTools.logs.page_title'] = 'Værktøjer Logs';
$lang['AdminTools.logs.boxtitle_logs'] = 'Logfiler';
$lang['AdminTools.renewals.page_title'] = 'Kø til fornyelse';
$lang['AdminTools.renewals.boxtitle_renewals'] = 'Kø til servicefornyelse';
$lang['AdminTools.renewals.heading_client'] = 'Kunde';
$lang['AdminTools.renewals.heading_service_id'] = 'Service-ID';
$lang['AdminTools.renewals.heading_failed_attempts'] = 'Mislykkede forsøg';
$lang['AdminTools.renewals.heading_maximum_attempts'] = 'Maksimale forsøg';
$lang['AdminTools.renewals.heading_invoice'] = 'Faktura';
$lang['AdminTools.renewals.heading_options'] = 'Valgmuligheder';
$lang['AdminTools.renewals.confirm_dequeue'] = 'Er du sikker på, at du vil fjerne denne service fra fornyelseskøen?';
$lang['AdminTools.renewals.option_view'] = 'Se fakturaen';
$lang['AdminTools.renewals.option_dequeue'] = 'Dequeue';
$lang['AdminTools.renewals.option_change_max'] = 'Ændring Maksimum';
$lang['AdminTools.renewals.no_results'] = 'Der er i øjeblikket ingen tjenester i kø til fornyelse.';
$lang['AdminTools.change_max_attempts.boxtitle_change_max_attempts'] = 'Ændre maksimale forsøg';
$lang['AdminTools.change_max_attempts.field_max_attempts'] = 'Maksimale forsøg';
$lang['AdminTools.change_max_attempts.field_cancel'] = 'Annuller';
$lang['AdminTools.change_max_attempts.btn_save'] = 'Gem';
$lang['AdminTools.logmodule.page_title'] = 'Værktøjer Logs';
$lang['AdminTools.logmodule.text_name'] = 'Navn';
$lang['AdminTools.logmodule.text_staffname'] = 'Personale';
$lang['AdminTools.logmodule.text_date'] = 'Dato';
$lang['AdminTools.logmodule.no_results'] = 'Der er ingen modul-logfiler.';
$lang['AdminTools.moduleloglist.text_direction'] = 'Retning';
$lang['AdminTools.moduleloglist.text_data'] = 'Data';
$lang['AdminTools.moduleloglist.text_date'] = 'Dato';
$lang['AdminTools.moduleloglist.text_status'] = 'Status';
$lang['AdminTools.moduleloglist.text_input'] = 'Input';
$lang['AdminTools.moduleloglist.text_output'] = 'Output';
$lang['AdminTools.moduleloglist.text_error'] = 'Fejl';
$lang['AdminTools.moduleloglist.text_success'] = 'Succes';
$lang['AdminTools.moduleloglist.no_results'] = 'Der er ingen data for denne modullog.';
$lang['AdminTools.logmessenger.page_title'] = 'Værktøj Logs';
$lang['AdminTools.logmessenger.text_name'] = 'Navn';
$lang['AdminTools.logmessenger.text_recipient'] = 'Modtager';
$lang['AdminTools.logmessenger.text_date'] = 'Dato';
$lang['AdminTools.logmessenger.no_results'] = 'Der er ingen messenger-logfiler.';
$lang['AdminTools.messengerloglist.text_direction'] = 'Retning';
$lang['AdminTools.messengerloglist.text_data'] = 'Data';
$lang['AdminTools.messengerloglist.text_date'] = 'Dato';
$lang['AdminTools.messengerloglist.text_status'] = 'Status';
$lang['AdminTools.messengerloglist.text_input'] = 'Input';
$lang['AdminTools.messengerloglist.text_output'] = 'Output';
$lang['AdminTools.messengerloglist.text_error'] = 'Fejl';
$lang['AdminTools.messengerloglist.text_success'] = 'Succes';
$lang['AdminTools.messengerloglist.no_results'] = 'Der er ingen data for denne messenger-log.';
$lang['AdminTools.loggateway.page_title'] = 'Værktøj Logs';
$lang['AdminTools.loggateway.text_name'] = 'Navn';
$lang['AdminTools.loggateway.text_staffname'] = 'Personale';
$lang['AdminTools.loggateway.text_date'] = 'Dato';
$lang['AdminTools.loggateway.no_results'] = 'Der er ingen gateway-logfiler.';
$lang['AdminTools.gatewayloglist.text_direction'] = 'Retning';
$lang['AdminTools.gatewayloglist.text_data'] = 'Data';
$lang['AdminTools.gatewayloglist.text_date'] = 'Dato';
$lang['AdminTools.gatewayloglist.text_status'] = 'Status';
$lang['AdminTools.gatewayloglist.text_input'] = 'Input';
$lang['AdminTools.gatewayloglist.text_output'] = 'Output';
$lang['AdminTools.gatewayloglist.text_error'] = 'Fejl';
$lang['AdminTools.gatewayloglist.text_success'] = 'Succes';
$lang['AdminTools.gatewayloglist.no_results'] = 'Der er ingen data for denne gateway-log.';
$lang['AdminTools.logemail.page_title'] = 'Værktøj Logs';
$lang['AdminTools.logemail.text_date'] = 'Dato';
$lang['AdminTools.logemail.text_subject'] = 'Emne';
$lang['AdminTools.logemail.text_summary'] = 'Resumé';
$lang['AdminTools.logemail.text_status'] = 'Status';
$lang['AdminTools.logemail.text_to'] = 'Til';
$lang['AdminTools.logemail.text_cc'] = 'CC';
$lang['AdminTools.logemail.text_from'] = 'Fra';
$lang['AdminTools.logemail.text_resend'] = 'Send igen';
$lang['AdminTools.logemail.text_sent'] = 'Sendt';
$lang['AdminTools.logemail.text_unsent'] = 'Ikke sendt';
$lang['AdminTools.logemail.no_results'] = 'Der er ingen e-mail-logfiler.';
$lang['AdminTools.logusers.page_title'] = 'Værktøj Logs';
$lang['AdminTools.logusers.text_name'] = 'Navn';
$lang['AdminTools.logusers.text_username'] = 'Brugernavn';
$lang['AdminTools.logusers.text_type'] = 'Type';
$lang['AdminTools.logusers.text_result'] = 'Resultat';
$lang['AdminTools.logusers.text_ipaddress'] = 'IP-adresse';
$lang['AdminTools.logusers.text_date'] = 'Dato';
$lang['AdminTools.logusers.text_staff'] = 'Personale';
$lang['AdminTools.logusers.text_client'] = 'Kunde';
$lang['AdminTools.logusers.text_contact'] = 'Kontakt';
$lang['AdminTools.logusers.text_success'] = 'Succes';
$lang['AdminTools.logusers.text_failure'] = 'Svigt';
$lang['AdminTools.logusers.text_location'] = 'Placering';
$lang['AdminTools.logusers.no_results'] = 'Der er ingen logfiler for brugerlogin.';
$lang['AdminTools.logcontacts.page_title'] = 'Værktøj Logs';
$lang['AdminTools.logcontacts.text_name'] = 'Navn';
$lang['AdminTools.logcontacts.text_date'] = 'Dato';
$lang['AdminTools.logcontacts.text_field'] = 'Mark';
$lang['AdminTools.logcontacts.text_previous'] = 'Tidligere værdi';
$lang['AdminTools.logcontacts.text_new'] = 'Ny værdi';
$lang['AdminTools.logcontacts.no_results'] = 'Der er ingen kontaktlogfiler.';
$lang['AdminTools.logclientsettings.page_title'] = 'Værktøj Logs';
$lang['AdminTools.logclientsettings.text_client'] = 'Kunde';
$lang['AdminTools.logclientsettings.text_user'] = 'Udført af';
$lang['AdminTools.logclientsettings.text_ip_address'] = 'IP-adresse';
$lang['AdminTools.logclientsettings.text_date'] = 'Dato';
$lang['AdminTools.logclientsettings.text_field'] = 'Mark';
$lang['AdminTools.logclientsettings.text_previous'] = 'Tidligere værdi';
$lang['AdminTools.logclientsettings.text_new'] = 'Ny værdi';
$lang['AdminTools.logclientsettings.no_results'] = 'Der er ingen logfiler over klientindstillinger.';
$lang['AdminTools.logtransactions.page_title'] = 'Værktøjer Logs';
$lang['AdminTools.logtransactions.text_client_name'] = 'Kunde';
$lang['AdminTools.logtransactions.text_staff_name'] = 'Personale';
$lang['AdminTools.logtransactions.text_date'] = 'Dato';
$lang['AdminTools.logtransactions.text_field'] = 'Mark';
$lang['AdminTools.logtransactions.text_previous'] = 'Tidligere værdi';
$lang['AdminTools.logtransactions.text_new'] = 'Ny værdi';
$lang['AdminTools.logtransactions.no_results'] = 'Der er ingen transaktionslogfiler.';
$lang['AdminTools.logaccountaccess.page_title'] = 'Værktøjer Logs';
$lang['AdminTools.logaccountaccess.name'] = 'Personale';
$lang['AdminTools.logaccountaccess.type'] = 'Type';
$lang['AdminTools.logaccountaccess.date'] = 'Dato';
$lang['AdminTools.logaccountaccess.text_cc'] = 'Kreditkort';
$lang['AdminTools.logaccountaccess.text_ach'] = 'ACH';
$lang['AdminTools.logaccountaccess.no_results'] = 'Der er ingen logfiler over kontoadgang.';
$lang['AdminTools.accountaccess.name'] = 'Navn';
$lang['AdminTools.accountaccess.type'] = 'Type';
$lang['AdminTools.accountaccess.last4'] = 'De sidste 4';
$lang['AdminTools.accountaccess.type_cc'] = '%1$s - %2$s';
$lang['AdminTools.accountaccess.type_ach'] = '%1$s - %2$s';
$lang['AdminTools.accountaccess.no_results'] = 'Der er ingen kontooplysninger for denne post.';
$lang['AdminTools.logcron.page_title'] = 'Værktøj Logs';
$lang['AdminTools.logcron.task'] = 'Opgave';
$lang['AdminTools.logcron.start_date'] = 'Startdato';
$lang['AdminTools.logcron.end_date'] = 'Slutdato';
$lang['AdminTools.logcron.output'] = 'Output';
$lang['AdminTools.logcron.no_output'] = 'Intet output registreret for denne log.';
$lang['AdminTools.logcron.no_results'] = 'Der er ingen cron-logfiler.';
$lang['AdminTools.loginvoicedelivery.page_title'] = 'Værktøj Logs';
$lang['AdminTools.loginvoicedelivery.invoice_id_code'] = 'Faktura #';
$lang['AdminTools.loginvoicedelivery.first_name'] = 'Kunde';
$lang['AdminTools.loginvoicedelivery.method'] = 'Leveringsmetode';
$lang['AdminTools.loginvoicedelivery.date_sent'] = 'Dato sendt';
$lang['AdminTools.loginvoicedelivery.no_results'] = 'Der er ingen logfiler over fakturaleverancer.';
$lang['AdminTools.!success.rule_removed'] = 'Reglen er blevet fjernet med succes.';
$lang['AdminTools.!success.rule_added'] = 'Reglen er blevet tilføjet med succes.';
$lang['AdminTools.!tooltip.rule'] = 'Dette kan være en e-mailadresse (f.eks. joe@example.com), jokertegn (f.eks. *@example.com), IP-adresse (ipv4 eller ipv6) eller CIDR-regel (f.eks. 192.168.0.0/24 eller 2001:db8:1234::/48).';
$lang['AdminTools.renewals.heading_date_renews'] = 'Dato for fornyelse';
$lang['AdminTools.renewals.heading_date_next_attempt'] = 'Næste forsøg';
$lang['AdminTools.blacklist.boxtitle_blacklist'] = 'Sort liste';
$lang['AdminTools.blacklist.heading_rule'] = 'Regel';
$lang['AdminTools.blacklist.heading_type'] = 'Type';
$lang['AdminTools.blacklist.heading_list'] = 'Liste';
$lang['AdminTools.blacklist.heading_note'] = 'Bemærk';
$lang['AdminTools.blacklist.heading_options'] = 'Valgmuligheder';
$lang['AdminTools.blacklist.text_type_ip'] = 'IP-adresse';
$lang['AdminTools.blacklist.text_type_email'] = 'E-mail-adresse';
$lang['AdminTools.blacklist.text_system'] = 'System';
$lang['AdminTools.blacklist.option_delete'] = 'Slet';
$lang['AdminTools.blacklist.modal_delete'] = 'Er du sikker på, at du vil slette denne regel?';
$lang['AdminTools.blacklist.no_results'] = 'Der er ingen regler for sortlister.';
$lang['AdminTools.blacklistadd.boxtitle_addrule'] = 'Tilføj regel';
$lang['AdminTools.blacklistadd.field_rule'] = 'Regel';
$lang['AdminTools.blacklistadd.field_type'] = 'Type';
$lang['AdminTools.blacklistadd.field_note'] = 'Bemærk';
$lang['AdminTools.blacklistadd.field_submit'] = 'Tilføj regel';
