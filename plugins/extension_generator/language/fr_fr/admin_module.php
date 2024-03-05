<?php
/**
 * Admin Module
 *
 * @package blesta
 * @subpackage blesta.language.fr_fr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminModule.getoptionalfunctions.tooltip_cancelService'] = 'Appelé pour effectuer les actions du module lors de l\'annulation du service.';
$lang['AdminModule.getoptionalfunctions.tooltip_suspendService'] = 'Appelé pour effectuer les actions du module lors de la suspension du service.';
$lang['AdminModule.getoptionalfunctions.tooltip_unsuspendService'] = 'Appelé pour effectuer des actions de module sur la non-suspension de service.';
$lang['AdminModule.getoptionalfunctions.tooltip_renewService'] = 'Appelé pour effectuer les actions du module lorsqu\'un service est renouvelé.';
$lang['AdminModule.getoptionalfunctions.tooltip_addPackage'] = 'Effectue toute action nécessaire pour ajouter le paquet sur le serveur distant. Définit les erreurs d\'entrée en cas d\'échec, ce qui empêche l\'ajout du paquet.';
$lang['AdminModule.getoptionalfunctions.tooltip_editPackage'] = 'Effectue toute action nécessaire pour éditer le paquet sur le serveur distant. Définit les erreurs d\'entrée en cas d\'échec, ce qui empêche la modification du paquet.';
$lang['AdminModule.getoptionalfunctions.tooltip_deletePackage'] = 'Supprime le paquet sur le serveur distant. Définit des erreurs d\'entrée en cas d\'échec, empêchant la suppression du paquet.';
$lang['AdminModule.getoptionalfunctions.tooltip_deleteModuleRow'] = 'Supprime la ligne du module sur le serveur distant. Définit des erreurs d\'entrée en cas d\'échec, empêchant la suppression de la ligne.';
$lang['AdminModule.getoptionalfunctions.tooltip_manageAddRow'] = 'Renvoie la vue rendue de la page de la rangée du module d\'ajout.';
$lang['AdminModule.getoptionalfunctions.tooltip_manageEditRow'] = 'Renvoie la vue rendue de la page de la rangée du module d\'édition.';
$lang['AdminModule.getoptionalfunctions.tooltip_upgrade'] = 'Effectue la migration des données de $current_version (la version installée actuelle) vers la version du jeu de fichiers donnée. Sets Erreurs d\'entrée en cas d\'échec, empêchant la mise à niveau du module.';
$lang['AdminModule.getoptionalfunctions.tooltip_getGroupOrderOptions'] = 'Renvoie un tableau des méthodes de commande de délégation de service disponibles. Le module détermine la manière dont chaque méthode est définie. Par exemple, la méthode "first" peut être implémentée de telle sorte qu\'elle renvoie la ligne du module à laquelle le moins de services ont été attribués.';
$lang['AdminModule.getoptionalfunctions.tooltip_selectModuleRow'] = 'Détermine quelle ligne de module doit être tentée lorsqu\'un service est fourni pour le groupe donné, en fonction de la méthode de commande définie pour ce groupe.';
$lang['AdminModule.getoptionalfunctions.tooltip_getAdminServiceInfo'] = 'Récupère le contenu HTML à afficher lors de l\'affichage des informations sur le service dans l\'interface d\'administration.';
$lang['AdminModule.getoptionalfunctions.tooltip_getClientServiceInfo'] = 'Récupère le contenu HTML à afficher lors de l\'affichage des informations sur le service dans l\'interface client.';
$lang['AdminModule.getoptionalfunctions.tooltip_checkAvailability'] = 'Vérifie si un nom de domaine est disponible ou non, renvoie un booléen.';
$lang['AdminModule.getoptionalfunctions.tooltip_checkTransferAvailability'] = 'Vérifie si un nom de domaine peut être transféré, renvoie un booléen.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainInfo'] = 'Récupère les informations relatives à un nom de domaine donné.';
$lang['AdminModule.getoptionalfunctions.tooltip_getExpirationDate'] = 'Renvoie la date d\'expiration d\'un nom de domaine donné.';
$lang['AdminModule.getoptionalfunctions.tooltip_getTldPricing'] = 'Retourne un tableau contenant le prix de revient de tous les TLD disponibles';
$lang['AdminModule.getoptionalfunctions.tooltip_registerDomain'] = 'Effectue toute action nécessaire à l\'enregistrement d\'un nouveau nom de domaine. Définit les erreurs d\'entrée en cas d\'échec, empêchant l\'enregistrement du nom de domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_renewDomain'] = 'Effectue toute action nécessaire au renouvellement d\'un nom de domaine existant. Définit les erreurs d\'entrée en cas d\'échec, empêchant le renouvellement du nom de domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_transferDomain'] = 'Effectue toute action requise pour transférer un nom de domaine. Définit les erreurs d\'entrée en cas d\'échec, empêchant le transfert du nom de domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainContacts'] = 'Renvoie un tableau contenant tous les contacts associés au nom de domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainIsLocked'] = 'Indique si le domaine est verrouillé ou non, renvoie un booléen.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainNameServers'] = 'Renvoie les serveurs de noms du domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_lockDomain'] = 'Effectue toute action nécessaire pour verrouiller le domaine. Définit les erreurs d\'entrée en cas d\'échec, empêchant le verrouillage du domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_unlockDomain'] = 'Effectue toute action nécessaire pour déverrouiller le domaine. Définit les erreurs d\'entrée en cas d\'échec, empêchant le déverrouillage du domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_updateEppCode'] = 'Effectue toute action nécessaire pour mettre à jour le code EPP ou le code d\'autorisation du domaine. Définit des erreurs d\'entrée en cas d\'échec, empêchant la mise à jour du code.';
$lang['AdminModule.getoptionalfunctions.tooltip_restoreDomain'] = 'Effectue toute action nécessaire à la restauration d\'un domaine. Définit les erreurs d\'entrée en cas d\'échec, ce qui empêche la restauration du domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_setNameserverIps'] = 'Définit les serveurs de noms pour un nom de domaine donné.';
$lang['AdminModule.getoptionalfunctions.tooltip_sendEppEmail'] = 'Effectue toute action nécessaire à l\'envoi d\'un courrier électronique contenant le code EPP.';
$lang['AdminModule.getoptionalfunctions.tooltip_resendTransferEmail'] = 'Renvoie l\'e-mail de vérification du transfert de domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_setDomainContacts'] = 'Met à jour la liste des contacts associés à un domaine.';
$lang['AdminModule.getoptionalfunctions.tooltip_setDomainNameservers'] = 'Attribue de nouveaux serveurs de noms au domaine.';
$lang['AdminModule.index.page_title'] = 'Générateur d\'extension - %1$s';
$lang['AdminModule.index.boxtitle_extension_generator'] = 'Générateur d\'extension - Module';
$lang['AdminModule.basic.heading_basic'] = 'Informations de base';
$lang['AdminModule.basic.heading_authors'] = 'Auteurs';
$lang['AdminModule.basic.heading_tlds'] = 'TLD pris en charge';
$lang['AdminModule.basic.description'] = 'Description';
$lang['AdminModule.basic.logo'] = 'Logo';
$lang['AdminModule.basic.module_row'] = 'Nom de la ligne du module';
$lang['AdminModule.basic.module_row_plural'] = 'Nom de la ligne du module (pluriel)';
$lang['AdminModule.basic.module_group'] = 'Étiquette du groupe de modules';
$lang['AdminModule.basic.module_type'] = 'Type de module';
$lang['AdminModule.basic.module_type_generic'] = 'Générique';
$lang['AdminModule.basic.module_type_registrar'] = 'Greffier';
$lang['AdminModule.basic.author_name'] = 'Nom de l\'auteur';
$lang['AdminModule.basic.author_url'] = 'URL de l\'auteur';
$lang['AdminModule.basic.text_options'] = 'Options';
$lang['AdminModule.basic.author_row_add'] = 'Ajouter un auteur';
$lang['AdminModule.basic.text_remove'] = 'Retirer';
$lang['AdminModule.basic.static_tlds'] = 'Définition statique des TLD';
$lang['AdminModule.basic.tlds'] = 'TLDs';
$lang['AdminModule.basic.placeholder_tlds'] = '.com, .net, .org';
$lang['AdminModule.basic.tooltip_description'] = 'La description figurant dans la liste des modules';
$lang['AdminModule.basic.tooltip_logo'] = 'Le logo affiché dans la liste des modules';
$lang['AdminModule.basic.tooltip_module_row'] = 'Terme par lequel on se réfère à une seule ligne de module pour ce module';
$lang['AdminModule.basic.tooltip_module_row_plural'] = 'Terme par lequel on se réfère à plusieurs rangées de modules pour ce module';
$lang['AdminModule.basic.tooltip_module_group'] = 'Terme utilisé pour désigner les groupes de rangées de modules pour ce module.';
$lang['AdminModule.basic.tooltip_module_type'] = 'S\'il s\'agit d\'un module générique ou d\'un module de registraire de domaine';
$lang['AdminModule.basic.tooltip_static_tlds'] = 'Définir les TLD pris en charge par ce module sous la forme d\'une liste séparée par des virgules (par exemple, .com, .net, .org).';
$lang['AdminModule.basic.placeholder_module_row'] = 'par exemple, le serveur';
$lang['AdminModule.basic.placeholder_module_row_plural'] = 'Par exemple, les serveurs';
$lang['AdminModule.basic.placeholder_module_group'] = 'par exemple, le groupe de serveurs';
$lang['AdminModule.basic.placeholder_author_name'] = 'par exemple, Blesta';
$lang['AdminModule.basic.placeholder_author_url'] = 'par exemple : https://blesta.com/';
$lang['AdminModule.basic.fields'] = 'Suivant - Champs du module';
$lang['AdminModule.basic.confirm'] = 'Suivant - Confirmation';
$lang['AdminModule.fields.heading_module_row_fields'] = 'Champs de la ligne de module';
$lang['AdminModule.fields.heading_package_fields'] = 'Champs du paquet';
$lang['AdminModule.fields.heading_service_fields'] = 'Champs de service';
$lang['AdminModule.fields.name'] = 'Nom';
$lang['AdminModule.fields.label'] = 'Étiquette';
$lang['AdminModule.fields.type'] = 'Type';
$lang['AdminModule.fields.tooltip'] = 'Texte de l\'infobulle';
$lang['AdminModule.fields.name_key'] = 'Clé de nom';
$lang['AdminModule.fields.tooltip_name'] = 'Le nom du champ dans la base de code';
$lang['AdminModule.fields.tooltip_label'] = 'Nom d\'affichage du champ';
$lang['AdminModule.fields.tooltip_type'] = 'Le type de champ à créer (case à cocher, texte, etc.)';
$lang['AdminModule.fields.tooltip_tooltip'] = 'Le texte de l\'infobulle à afficher à côté du champ (laisser vide pour ne pas avoir d\'infobulle)';
$lang['AdminModule.fields.tooltip_name_key'] = 'Le champ par lequel Blesta détermine le nom d\'une ligne de paquetage/service/module';
$lang['AdminModule.fields.placeholder_module_name'] = 'par exemple, module_field';
$lang['AdminModule.fields.placeholder_module_label'] = 'Par exemple, champ du module';
$lang['AdminModule.fields.placeholder_package_name'] = 'par exemple : package_field';
$lang['AdminModule.fields.placeholder_package_label'] = 'par exemple, le champ du paquet';
$lang['AdminModule.fields.placeholder_service_name'] = 'par exemple : service_field';
$lang['AdminModule.fields.placeholder_service_label'] = 'par exemple, domaine des services';
$lang['AdminModule.fields.module_row_add'] = 'Ajouter un champ de ligne de module';
$lang['AdminModule.fields.package_row_add'] = 'Ajouter un champ de paquet';
$lang['AdminModule.fields.service_row_add'] = 'Ajouter un champ de service';
$lang['AdminModule.fields.text_options'] = 'Options';
$lang['AdminModule.fields.text_remove'] = 'Retirer';
$lang['AdminModule.fields.features'] = 'Suivant - Caractéristiques supplémentaires';
$lang['AdminModule.fields.package_fields_epp_code_label'] = 'Code EPP';
$lang['AdminModule.fields.package_fields_epp_code_tooltip'] = 'Permet ou non aux utilisateurs de demander un code EPP par l\'intermédiaire de l\'interface de service Blesta.';
$lang['AdminModule.fields.service_fields_domain_label'] = 'Domaine';
$lang['AdminModule.features.heading_features'] = 'Caractéristiques supplémentaires';
$lang['AdminModule.features.heading_service_tabs'] = 'Onglets de gestion des services';
$lang['AdminModule.features.heading_cron_tasks'] = 'Tâches Cron';
$lang['AdminModule.features.heading_optional_functions'] = 'Fonctions optionnelles';
$lang['AdminModule.features.method_name'] = 'Nom de la méthode';
$lang['AdminModule.features.label'] = 'Étiquette';
$lang['AdminModule.features.level'] = 'Niveau';
$lang['AdminModule.features.name'] = 'Nom';
$lang['AdminModule.features.description'] = 'Description';
$lang['AdminModule.features.type'] = 'Type';
$lang['AdminModule.features.time'] = 'Heure de début/intervalle';
$lang['AdminModule.features.tooltip_method_name'] = 'Le nom de la méthode à générer pour cet onglet dans la base de code (sous la forme camelCaseMethodName)';
$lang['AdminModule.features.tooltip_tab_label'] = 'Nom d\'affichage de l\'onglet de service';
$lang['AdminModule.features.tooltip_level'] = 'Le niveau d\'interface sur lequel l\'onglet doit être affiché (personnel ou client)';
$lang['AdminModule.features.tooltip_name'] = 'Le nom de la tâche cron dans la base de code';
$lang['AdminModule.features.tooltip_cron_label'] = 'Le nom d\'affichage de la tâche cron';
$lang['AdminModule.features.tooltip_description'] = 'La description affichée sur la page de la liste des tâches cron';
$lang['AdminModule.features.tooltip_type'] = 'Le type de timing à utiliser pour la tâche cron (temps ou intervalle)';
$lang['AdminModule.features.tooltip_time'] = 'L\'heure quotidienne (24 heures) à laquelle cette tâche doit être exécutée (par exemple "14:25") OU L\'intervalle, en minutes, à l\'intérieur duquel cette tâche cron doit être exécutée';
$lang['AdminModule.features.placeholder_method_name'] = 'par exemple : tabChangePassword';
$lang['AdminModule.features.placeholder_tab_label'] = 'Par exemple : Modifier le mot de passe';
$lang['AdminModule.features.placeholder_name'] = 'par exemple, ma_tâche_cron';
$lang['AdminModule.features.placeholder_cron_label'] = 'Par exemple, My Cron Task';
$lang['AdminModule.features.placeholder_time'] = 'par exemple 14:25 ou 60';
$lang['AdminModule.features.service_tab_row_add'] = 'Ajouter l\'onglet Gestion des services';
$lang['AdminModule.features.cron_task_row_add'] = 'Ajouter une tâche Cron';
$lang['AdminModule.features.text_options'] = 'Options';
$lang['AdminModule.features.text_remove'] = 'Retirer';
$lang['AdminModule.features.confirm'] = 'Suivant - Confirmation';
