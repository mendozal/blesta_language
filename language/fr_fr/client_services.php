<?php
/**
 * Client Services
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['ClientServices.!error.password_mismatch'] = 'Le mot de passe ne correspond pas à votre mot de passe de connexion.';
$lang['ClientServices.!error.invoices_manage_options'] = 'Les options configurables ne peuvent pas être modifiées tant que toutes les factures contenant ce service n\'ont pas été payées.';
$lang['ClientServices.!error.invoices_change_term'] = 'La durée ne peut pas être modifiée tant que toutes les factures relatives à ce service n\'ont pas été payées.';
$lang['ClientServices.!error.invoices_renew_service'] = 'Le service ne peut pas être renouvelé tant que toutes les factures relatives à ce service n\'ont pas été payées.';
$lang['ClientServices.!error.invoices_upgrade_package'] = 'Le forfait ne peut pas être modifié tant que toutes les factures contenant ce service n\'ont pas été payées.';
$lang['ClientServices.!error.tab_unavailable'] = 'Cette section n\'est pas accessible lorsque le service est dans un état %1$s.';
$lang['ClientServices.!warning.invoices_upgrade_package'] = 'Les forfaits ne peuvent pas être modifiés tant que toutes les factures relatives à ce service n\'ont pas été payées.';
$lang['ClientServices.!warning.invoices_change_term'] = 'La durée ne peut pas être modifiée tant que toutes les factures relatives à ce service n\'ont pas été payées.';
$lang['ClientServices.!warning.invoices_manage_options'] = 'Les options configurables ne peuvent pas être modifiées tant que toutes les factures relatives à ce service n\'ont pas été payées.';
$lang['ClientServices.!notice.queued_service_change'] = 'Ce service fait l\'objet de modifications en cours. Des modifications supplémentaires ne peuvent pas être apportées tant que les modifications en cours n\'ont pas été traitées.';
$lang['ClientServices.!notice.client_limit'] = 'Impossible d\'attribuer le paquet. Vous avez déjà atteint la limite de service pour le paquet cible.';
$lang['ClientServices.!success.manage.tab_updated'] = 'Les données ont été mises à jour avec succès.';
$lang['ClientServices.!success.service_canceled'] = 'Le service a été annulé avec succès.';
$lang['ClientServices.!success.service_schedule_canceled'] = 'Il est prévu que le service soit annulé à la fin de sa durée.';
$lang['ClientServices.!success.service_not_canceled'] = 'Le service ne sera pas annulé.';
$lang['ClientServices.!success.service_term_updated'] = 'La durée du service a été mise à jour et prendra effet à la prochaine date de renouvellement.';
$lang['ClientServices.!success.addon_service_created'] = 'Le service complémentaire a été créé avec succès. Cependant, il ne sera activé qu\'après réception du paiement.';
$lang['ClientServices.!success.service_package_updated'] = 'Le paquet de services a été mis à jour.';
$lang['ClientServices.!success.config_options_updated'] = 'Les options configurables ont été mises à jour avec succès.';
$lang['ClientServices.!success.service_queue_pay'] = 'La mise à jour du service a été mise en file d\'attente pour être traitée. Toutefois, elle ne sera traitée qu\'après réception d\'un paiement.';
$lang['ClientServices.!success.service_queue'] = 'La mise à jour du service a été mise en file d\'attente et sera traitée sous peu.';
$lang['ClientServices.!success.service_renewed'] = 'Le service a été renouvelé avec succès.';
$lang['ClientServices.index.page_title'] = 'Services du client #%1$s';
$lang['ClientServices.index.boxtitle_services'] = 'Services';
$lang['ClientServices.index.category_active'] = 'Actif';
$lang['ClientServices.index.category_pending'] = 'En attente';
$lang['ClientServices.index.category_suspended'] = 'Suspendu';
$lang['ClientServices.index.category_canceled'] = 'Annulé';
$lang['ClientServices.index.heading_addons'] = 'Compléments';
$lang['ClientServices.index.heading_status'] = 'Statut';
$lang['ClientServices.index.heading_package'] = 'Paquet';
$lang['ClientServices.index.heading_label'] = 'Étiquette';
$lang['ClientServices.index.heading_term'] = 'Durée';
$lang['ClientServices.index.heading_datecreated'] = 'Date de création';
$lang['ClientServices.index.heading_daterenews'] = 'Date Renouvellement';
$lang['ClientServices.index.heading_datesuspended'] = 'Date de suspension';
$lang['ClientServices.index.heading_datecanceled'] = 'Date d\'annulation';
$lang['ClientServices.index.heading_options'] = 'Options';
$lang['ClientServices.index.option_manage'] = 'Gérer';
$lang['ClientServices.index.recurring_term'] = '%1$s %2$s @ %3$s';
$lang['ClientServices.index.text_never'] = 'Jamais';
$lang['ClientServices.index.no_results'] = 'Vous n\'avez pas de %1$s Services.';
$lang['ClientServices.serviceinfo.no_results'] = 'Ce service n\'est pas détaillé.';
$lang['ClientServices.serviceinfo.cancellation_reason'] = 'Motif de l\'annulation : %1$s';
$lang['ClientServices.manage.page_title'] = 'Client #%1$s Gérer le service';
$lang['ClientServices.manage.boxtitle_manage'] = 'Gérer %1$s - %2$s';
$lang['ClientServices.manage.tab_service_info'] = 'Informations';
$lang['ClientServices.manage.tab_addons'] = 'Addons';
$lang['ClientServices.manage.tab_service_return'] = 'Retour au tableau de bord';
$lang['ClientServices.manage.button_active'] = 'Actif';
$lang['ClientServices.manage.button_pending'] = 'En attente';
$lang['ClientServices.manage.button_suspended'] = 'Suspendu';
$lang['ClientServices.manage.button_in_review'] = 'En revue';
$lang['ClientServices.manage.button_canceled'] = 'Annulé';
$lang['ClientServices.manage.button_renew'] = 'Renouveler maintenant';
$lang['ClientServices.manage.button_cancel'] = 'Annuler les options';
$lang['ClientServices.manage.button_change_service_term'] = 'Modifier la durée';
$lang['ClientServices.manage.button_change_service_package'] = 'Paquet de modifications';
$lang['ClientServices.manage.button_config_options'] = 'Modifier les options configurables';
$lang['ClientServices.manage.heading_package'] = 'Paquet';
$lang['ClientServices.manage.heading_date_added'] = 'Date de création';
$lang['ClientServices.manage.heading_package_term'] = 'Cycle de facturation';
$lang['ClientServices.manage.heading_service_name'] = 'Étiquette';
$lang['ClientServices.manage.heading_date_renews'] = 'Date de renouvellement';
$lang['ClientServices.manage.heading_date_next_invoice'] = 'Facture suivante';
$lang['ClientServices.manage.heading_price_initial'] = 'Montant';
$lang['ClientServices.manage.heading_price'] = 'Montant récurrent';
$lang['ClientServices.manage.heading_setup_fee'] = 'Frais de mise en place';
$lang['ClientServices.manage.heading_price_onetime'] = 'Montant';
$lang['ClientServices.manage.heading_recurring_coupon'] = 'Coupon récurrent';
$lang['ClientServices.manage.text_coupon_percent'] = '%1$s (%2$s%%)';
$lang['ClientServices.manage.text_coupon_amount'] = '%1$s (%2$s)';
$lang['ClientServices.manage.text_price'] = '%1$sx %2$s';
$lang['ClientServices.manage.text_date_never'] = 'Jamais';
$lang['ClientServices.manage.text_date_suspended'] = 'Ce service a été suspendu le %1$s.';
$lang['ClientServices.manage.text_date_canceled'] = 'Ce service a été annulé le %1$s.';
$lang['ClientServices.manage.text_date_to_cancel'] = 'L\'annulation de ce service est prévue le %1$s.';
$lang['ClientServices.manage.heading_options'] = 'Actions';
$lang['ClientServices.manage.heading_config_options'] = 'Options configurables';
$lang['ClientServices.renew.page_title'] = 'Client #%1$s Renouveler le service';
$lang['ClientServices.renew.heading_renew'] = 'Renouveler le service';
$lang['ClientServices.renew.field_pricing_id'] = 'Période de renouvellement';
$lang['ClientServices.renew.field_password'] = 'Mot de passe de connexion pour confirmer les changements';
$lang['ClientServices.renew.field_renew_cancel'] = 'Annuler, ne pas renouveler';
$lang['ClientServices.renew.field_renew_submit'] = 'Renouveler';
$lang['ClientServices.renew.confirm_renew'] = 'En cliquant sur "Enregistrer", une nouvelle facture sera générée pour le renouvellement du service pour la durée "%1$s", qui couvrira le service jusqu\'à "%2$s". En cliquant sur "Enregistrer", vous serez redirigé vers la page de paiement pour régler la facture générée.';
$lang['ClientServices.cancel.page_title'] = 'Client #%1$s Annuler le service';
$lang['ClientServices.cancel.heading_cancel'] = 'Annuler le service';
$lang['ClientServices.cancel.field_term_date'] = 'A la fin de la période (%1$s)';
$lang['ClientServices.cancel.field_term'] = 'A la fin de la période';
$lang['ClientServices.cancel.field_now'] = 'Immédiatement';
$lang['ClientServices.cancel.field_do_not'] = 'Ne pas annuler';
$lang['ClientServices.cancel.field_cancellation_reason'] = 'Raison de l\'annulation';
$lang['ClientServices.cancel.field_password'] = 'Mot de passe de connexion pour confirmer les changements';
$lang['ClientServices.cancel.field_cancel_cancel'] = 'Annuler, ne pas modifier';
$lang['ClientServices.cancel.field_cancel_submit'] = 'Économiser';
$lang['ClientServices.cancel.confirm_cancel'] = 'Êtes-vous sûr de vouloir résilier ce service à la fin de sa durée ?';
$lang['ClientServices.cancel.confirm_cancel_now'] = 'Êtes-vous sûr de vouloir annuler ce service ?';
$lang['ClientServices.cancel.confirm_cancel_now_fee'] = 'L\'annulation immédiate de ce service entraîne des frais d\'annulation de %1$s.';
$lang['ClientServices.cancel.confirm_cancel_now_fee_tax'] = 'L\'annulation immédiate de ce service entraîne des frais d\'annulation de %1$s plus taxes.';
$lang['ClientServices.changeterm.page_title'] = 'Client #%1$s Change Term';
$lang['ClientServices.change_term.boxtitle'] = 'Changer de terme pour %1$s - %2$s';
$lang['ClientServices.change_term.field_current_term'] = 'Mandat en cours';
$lang['ClientServices.change_term.field_pricing_id'] = 'Nouveau mandat';
$lang['ClientServices.change_term.cancel'] = 'Annuler';
$lang['ClientServices.change_term.review'] = 'Révision';
$lang['ClientServices.get_package_terms.term'] = '%1$s %2$s - %3$s';
$lang['ClientServices.get_package_terms.term_recurring'] = '%1$s %2$s - %3$s (renouvellement @ %4$s)';
$lang['ClientServices.get_package_terms.term_onetime'] = '%1$s - %2$s';
$lang['ClientServices.upgrade.page_title'] = 'Client #%1$s Change Package';
$lang['ClientServices.upgrade.boxtitle'] = 'Changer de paquet de %1$s - %2$s';
$lang['ClientServices.upgrade.btn_make_payment'] = 'Effectuer un paiement';
$lang['ClientServices.upgrade.field_current_package'] = 'Paquet actuel';
$lang['ClientServices.upgrade.field_pricing_id'] = 'Nouveau paquet';
$lang['ClientServices.upgrade.field_cancel'] = 'Annuler';
$lang['ClientServices.upgrade.field_submit'] = 'Révision';
$lang['ClientServices.upgrade.text_prorate'] = 'Si le nouveau forfait que vous choisissez coûte plus cher, vous serez facturé au prorata de la différence.';
$lang['ClientServices.upgrade.current_package'] = '%1$s (%2$s %3$s - %4$s)';
$lang['ClientServices.upgrade.current_package_onetime'] = '%1$s (%2$s - %3$s)';
$lang['ClientServices.addons.page_title'] = 'Client #%1$s Addons';
$lang['ClientServices.addons.boxtitle_addons'] = 'Addons pour %1$s - %2$s';
$lang['ClientServices.addons.create_addon'] = 'Ajouter un addon';
$lang['ClientServices.addons.no_results'] = 'Aucun module complémentaire n\'est associé à ce service.';
$lang['ClientServices.!error.addon_invalid'] = 'Veuillez sélectionner un addon valide.';
$lang['ClientServices.addaddon.page_title'] = 'Client #%1$s Add Addon';
$lang['ClientServices.addaddon.boxtitle_addons'] = 'Ajouter un addon pour %1$s - %2$s';
$lang['ClientServices.addaddon.header_add'] = 'Addons';
$lang['ClientServices.addaddon.term'] = '%1$s %2$s';
$lang['ClientServices.addaddon.term_price'] = '%1$s - %2$s';
$lang['ClientServices.addaddon.term_price_recurring'] = '%1$s - %2$s (renouvellement @ %3$s)';
$lang['ClientServices.addaddon.term_price_setupfee'] = '%1$s - %2$s + %3$s setup';
$lang['ClientServices.addaddon.term_price_setupfee_recurring'] = '%1$s - %2$s + %3$s setup (renouvellements @ %4$s)';
$lang['ClientServices.addaddon.submit_add'] = 'Créer';
$lang['ClientServices.getaddonoptions.field_module_group_id'] = 'Groupe';
$lang['ClientServices.configure_addon.header_options'] = 'Options configurables';
$lang['ClientServices.manageoptions.page_title'] = 'Client #%1$s Gérer les options configurables';
$lang['ClientServices.manageoptions.boxtitle_options'] = 'Gérer les options configurables pour %1$s - %2$s';
$lang['ClientServices.manageoptions.heading_current'] = 'Options actuelles';
$lang['ClientServices.manageoptions.heading_new'] = 'Nouvelles options';
$lang['ClientServices.manageoptions.no_options'] = 'Il n\'y a pas d\'options configurables disponibles pour la mise à jour.';
$lang['ClientServices.manageoptions.cancel'] = 'Annuler';
$lang['ClientServices.manageoptions.review'] = 'Révision';
$lang['ClientServices.review.page_title'] = 'Service d\'examen du client #%1$s';
$lang['ClientServices.review.boxtitle_review'] = 'Réviser les modifications apportées à %1$s - %2$s';
$lang['ClientServices.review.heading_current_service'] = 'Service actuel';
$lang['ClientServices.review.heading_updated_service'] = 'Service actualisé';
$lang['ClientServices.review.heading_label'] = 'Option';
$lang['ClientServices.review.heading_old_value'] = 'Valeur actuelle';
$lang['ClientServices.review.heading_new_value'] = 'Nouvelle valeur';
$lang['ClientServices.review.value'] = '%1$s (%2$sx %3$s)';
$lang['ClientServices.review.value_setup_fee'] = '%1$s (%2$sx %3$s, %4$s Frais d\'installation)';
$lang['ClientServices.review.none'] = '-';
$lang['ClientServices.review.cancel'] = 'Annuler';
$lang['ClientServices.review.update'] = 'Économiser';
$lang['ClientServices.totals.subtotal'] = 'Sous-total :';
$lang['ClientServices.totals.total'] = 'Total à payer aujourd\'hui :';
$lang['ClientServices.totals.total_recurring'] = 'Total au moment du renouvellement :';
$lang['ClientServices.!tooltip.total_recurring'] = 'Le prix total lors du renouvellement représente le coût total de ce service et de toutes ses options prévu lors du prochain renouvellement.';
