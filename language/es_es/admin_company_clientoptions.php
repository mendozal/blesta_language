<?php
/**
 * Admin Company Clientoptions
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyClientOptions.!success.field_updated'] = 'El campo personalizado del cliente se ha actualizado correctamente.';
$lang['AdminCompanyClientOptions.!success.field_created'] = 'El campo personalizado del cliente se ha creado correctamente.';
$lang['AdminCompanyClientOptions.!success.field_deleted'] = 'El campo personalizado del cliente se ha eliminado correctamente.';
$lang['AdminCompanyClientOptions.!success.requiredfields_updated'] = 'Los campos obligatorios se han actualizado correctamente.';
$lang['AdminCompanyClientOptions.!success.general_updated'] = 'La configuración general se ha actualizado correctamente.';
$lang['AdminCompanyClientOptions.!notice.group_settings'] = 'NOTA: Estos ajustes sólo se aplican a los Grupos de Clientes que heredan sus ajustes de la Compañía.';
$lang['AdminCompanyClientOptions.!error.clients_format'] = 'El formato de ID de cliente debe contener {num}.';
$lang['AdminCompanyClientOptions.!tooltip.read_only'] = 'Si está marcada, el campo no puede ser modificado por el cliente si contiene algún dato.';
$lang['AdminCompanyClientOptions.!tooltip.state'] = 'Tenga cuidado cuando requiera que se seleccione un Estado/Provincia. Algunos países no tienen estados. Los clientes de esos países no podrían guardar sus datos de contacto. Le recomendamos que no seleccione este campo.';
$lang['AdminCompanyClientOptions.!tooltip.unique_contact_emails'] = 'Restringe las direcciones de correo electrónico de los contactos. Contactos principales significa que no puede haber dos contactos principales (es decir, clientes) con la misma dirección de correo electrónico. Todos los contactos significa que ningún contacto de ningún tipo puede tener la misma dirección de correo electrónico que otro contacto.';
$lang['AdminCompanyClientOptions.!tooltip.force_email_usernames'] = 'Los clientes deben utilizar su dirección de correo electrónico como nombre de usuario en lugar de definir uno propio. Los clientes existentes pueden seguir iniciando sesión con su nombre de usuario actual.';
$lang['AdminCompanyClientOptions.!tooltip.email_verification'] = 'Marque esta opción para enviar un correo electrónico de verificación cuando se cree un nuevo inicio de sesión o un cliente cambie su dirección de correo electrónico. Aparecerá un aviso en el perfil del cliente hasta que se verifique.';
$lang['AdminCompanyClientOptions.!tooltip.clients_format'] = 'Formato de ID de Cliente es el formato de la ID de Cliente. Un valor de ABC-{num} dará como resultado un ID de Cliente de ABC-1500, donde 1500 es el valor de ID del Cliente.';
$lang['AdminCompanyClientOptions.!tooltip.clients_start'] = 'Inicio de ID de Cliente es el valor inicial de los ID de Cliente. Los nuevos clientes tendrán este valor, a menos que sea inferior al valor del Cliente creado más recientemente.';
$lang['AdminCompanyClientOptions.!tooltip.clients_increment'] = 'Los números de ID de cliente posteriores se incrementarán en este valor.';
$lang['AdminCompanyClientOptions.!tooltip.client_group_id'] = 'El campo personalizado sólo se aplicará a los miembros del grupo de clientes seleccionado.';
$lang['AdminCompanyClientOptions.!tooltip.name'] = 'Es el nombre para mostrar este campo. Puede ser una definición lingüística.';
$lang['AdminCompanyClientOptions.!tooltip.is_lang'] = 'Marque esta casilla sólo si ha añadido una definición de idioma para este campo personalizado en el archivo de idioma personalizado.';
$lang['AdminCompanyClientOptions.!tooltip.link'] = 'Un enlace personalizado que se puede insertar en el nombre del campo. Encierre el texto al que desea aplicar el enlace entre corchetes (es decir, [términos]).';
$lang['AdminCompanyClientOptions.!tooltip.type'] = 'El campo personalizado aparecerá como el tipo de formulario seleccionado.';
$lang['AdminCompanyClientOptions.!tooltip.show_client'] = 'Marque esta casilla para permitir que los clientes vean y actualicen este campo.';
$lang['AdminCompanyClientOptions.!tooltip.read_only_field'] = 'Al marcar esta casilla, el cliente no podrá modificar este campo personalizado. Los campos de sólo lectura se establecerán automáticamente en su valor predeterminado asignado.';
$lang['AdminCompanyClientOptions.!tooltip.required'] = 'Seleccione "Sí" para asegurarse de que se da un valor a este campo; para los tipos desplegables, la opción debe aparecer en la lista de opciones. Seleccione "No" para aceptar cualquier valor para este campo. Seleccione "Regex personalizada" para utilizar una expresión regular personalizada para validar este campo.';
$lang['AdminCompanyClientOptions.!tooltip.regex'] = 'Esta opción aparecerá si "Obligatorio" está configurado como "Expresión regular personalizada". Introduzca aquí la expresión regular personalizada para validar este campo.';
$lang['AdminCompanyClientOptions.!tooltip.encrypted'] = 'Marque esta casilla para almacenar el valor cifrado. Esto es muy recomendable si se almacena cualquier información sensible o de identificación personal.';
$lang['AdminCompanyClientOptions.!tooltip.checkbox_value'] = 'El valor enviado cuando se marca la casilla de verificación.';
$lang['AdminCompanyClientOptions.!tooltip.default_text'] = 'El texto introducido aquí será el valor por defecto establecido para esta opción cuando se añada este campo personalizado para un cliente.';
$lang['AdminCompanyClientOptions.!tooltip.default_checkbox'] = 'Si está marcada, esta casilla se marcará por defecto cuando se añada este campo personalizado para un cliente.';
$lang['AdminCompanyClientOptions.!tooltip.select_default'] = 'El valor de la opción marcada será el valor por defecto seleccionado cuando se añada esta opción para un cliente.';
$lang['AdminCompanyClientoptions.general.page_title'] = 'Configuración > Empresa > Opciones de cliente > General';
$lang['AdminCompanyClientOptions.general.boxtitle'] = 'Configuración general del cliente';
$lang['AdminCompanyClientOptions.general.field_unique_contact_emails'] = 'Imponer direcciones de correo electrónico de contacto únicas';
$lang['AdminCompanyClientOptions.general.field_unique_contact_emails_none'] = '-- Ninguno --';
$lang['AdminCompanyClientOptions.general.field_unique_contact_emails_primary'] = 'Contactos principales';
$lang['AdminCompanyClientOptions.general.field_unique_contact_emails_all'] = 'Todos los contactos';
$lang['AdminCompanyClientOptions.general.field_force_email_usernames'] = 'Forzar nombres de usuario de correo electrónico';
$lang['AdminCompanyClientOptions.general.field_email_verification'] = 'Activar la verificación del correo electrónico';
$lang['AdminCompanyClientOptions.general.field_clients_format'] = 'Formato de ID de cliente';
$lang['AdminCompanyClientOptions.general.field_clients_start'] = 'ID de cliente Valor inicial';
$lang['AdminCompanyClientOptions.general.field_clients_increment'] = 'Valor de incremento de ID de cliente';
$lang['AdminCompanyClientOptions.general.prevent_unverified_payments'] = 'Evitar pagos de clientes no verificados';
$lang['AdminCompanyClientOptions.general.text_submit'] = 'Enviar';
$lang['AdminCompanyClientoptions.customfields.page_title'] = 'Configuración > Empresa > Opciones de cliente > Campos personalizados de cliente > Examinar';
$lang['AdminCompanyClientOptions.customfields.boxtitle_browse'] = 'Examinar campos personalizados de cliente';
$lang['AdminCompanyClientOptions.customfields.categorylink_addfield'] = 'Crear campo';
$lang['AdminCompanyClientOptions.customfields.text_name'] = 'Nombre';
$lang['AdminCompanyClientOptions.customfields.text_type'] = 'Tipo';
$lang['AdminCompanyClientOptions.customfields.text_required'] = 'Requerido';
$lang['AdminCompanyClientOptions.customfields.text_visible'] = 'Visible para los clientes';
$lang['AdminCompanyClientOptions.customfields.text_read_only'] = 'Sólo lectura para clientes';
$lang['AdminCompanyClientOptions.customfields.text_options'] = 'Opciones';
$lang['AdminCompanyClientOptions.customfields.option_edit'] = 'Editar';
$lang['AdminCompanyClientOptions.customfields.option_delete'] = 'Borrar';
$lang['AdminCompanyClientOptions.customfields.confirm_delete'] = 'Al eliminar este campo personalizado se eliminarán todos los datos almacenados para él para cada cliente dentro de este grupo. ¿Está seguro de que desea eliminar este campo personalizado?';
$lang['AdminCompanyClientOptions.customfields.no_results'] = 'No hay campos personalizados.';
$lang['AdminCompanyClientoptions.addcustomfield.page_title'] = 'Configuración > Empresa > Opciones de cliente > Campos personalizados de cliente > Añadir campo personalizado';
$lang['AdminCompanyClientOptions.addcustomfield.boxtitle_add'] = 'Añadir campo personalizado';
$lang['AdminCompanyClientOptions.addcustomfield.field.client_group_id'] = 'Grupo de clientes';
$lang['AdminCompanyClientOptions.addcustomfield.field.name'] = 'Nombre';
$lang['AdminCompanyClientOptions.addcustomfield.field.is_lang'] = 'El nombre es una definición lingüística';
$lang['AdminCompanyClientOptions.addcustomfield.field.link'] = 'Enlace';
$lang['AdminCompanyClientOptions.addcustomfield.field.type'] = 'Tipo';
$lang['AdminCompanyClientOptions.addcustomfield.field.show_client'] = 'Visible para los clientes';
$lang['AdminCompanyClientOptions.addcustomfield.field.read_only'] = 'Sólo lectura para clientes';
$lang['AdminCompanyClientOptions.addcustomfield.field.required'] = 'Requerido';
$lang['AdminCompanyClientOptions.addcustomfield.field.regex'] = 'Regex personalizada';
$lang['AdminCompanyClientOptions.addcustomfield.field.encrypted'] = 'Cifrar valores';
$lang['AdminCompanyClientOptions.addcustomfield.field.addsubmit'] = 'Añadir campo personalizado';
$lang['AdminCompanyClientOptions.addcustomfield.field.checkbox_value'] = 'Valor';
$lang['AdminCompanyClientOptions.addcustomfield.field.default_checkbox'] = 'Valor por defecto Comprobado';
$lang['AdminCompanyClientOptions.addcustomfield.field.default_text'] = 'Valor de texto por defecto';
$lang['AdminCompanyClientOptions.addcustomfield.configuration_warning'] = 'Requerir este campo sin que sea visible para los clientes hará que éstos no puedan registrarse o actualizar la información de su cuenta.';
$lang['AdminCompanyClientOptions.addcustomfield.categorylink_select'] = 'Añadir opción adicional';
$lang['AdminCompanyClientOptions.addcustomfield.heading_select_value'] = 'Valor';
$lang['AdminCompanyClientOptions.addcustomfield.heading_select_option'] = 'Nombre de la opción';
$lang['AdminCompanyClientOptions.addcustomfield.heading_select_default'] = 'Por defecto';
$lang['AdminCompanyClientOptions.addcustomfield.text_remove'] = 'Eliminar';
$lang['AdminCompanyClientoptions.editcustomfield.page_title'] = 'Configuración > Empresa > Opciones de cliente > Campos personalizados de cliente > Editar campo personalizado';
$lang['AdminCompanyClientOptions.editcustomfield.boxtitle_edit'] = 'Editar campo personalizado';
$lang['AdminCompanyClientOptions.editcustomfield.field.name'] = 'Nombre';
$lang['AdminCompanyClientOptions.editcustomfield.field.is_lang'] = 'El nombre es una definición lingüística';
$lang['AdminCompanyClientOptions.editcustomfield.field.link'] = 'Enlace';
$lang['AdminCompanyClientOptions.editcustomfield.field.type'] = 'Tipo';
$lang['AdminCompanyClientOptions.editcustomfield.field.show_client'] = 'Visible para los clientes';
$lang['AdminCompanyClientOptions.editcustomfield.field.read_only'] = 'Sólo lectura para clientes';
$lang['AdminCompanyClientOptions.editcustomfield.field.required'] = 'Requerido';
$lang['AdminCompanyClientOptions.editcustomfield.field.regex'] = 'Regex personalizada';
$lang['AdminCompanyClientOptions.editcustomfield.field.encrypted'] = 'Cifrar valores';
$lang['AdminCompanyClientOptions.editcustomfield.field.editsubmit'] = 'Editar campo personalizado';
$lang['AdminCompanyClientOptions.editcustomfield.field.checkbox_value'] = 'Valor';
$lang['AdminCompanyClientOptions.editcustomfield.field.default_checkbox'] = 'Valor por defecto Comprobado';
$lang['AdminCompanyClientOptions.editcustomfield.field.default_text'] = 'Valor de texto por defecto';
$lang['AdminCompanyClientOptions.editcustomfield.categorylink_select'] = 'Añadir opción adicional';
$lang['AdminCompanyClientOptions.editcustomfield.heading_select_value'] = 'Valor';
$lang['AdminCompanyClientOptions.editcustomfield.heading_select_option'] = 'Nombre de la opción';
$lang['AdminCompanyClientOptions.editcustomfield.heading_select_default'] = 'Por defecto';
$lang['AdminCompanyClientOptions.editcustomfield.text_remove'] = 'Eliminar';
$lang['AdminCompanyClientOptions.getRequired.no'] = 'No';
$lang['AdminCompanyClientOptions.getRequired.yes'] = 'Sí';
$lang['AdminCompanyClientOptions.getRequired.regex'] = 'Regex personalizada';
$lang['AdminCompanyClientoptions.requiredfields.page_title'] = 'Configuración > Empresa > Opciones de cliente > Campos personalizados de cliente > Campos obligatorios de cliente';
$lang['AdminCompanyClientOptions.requiredfields.boxtitle'] = 'Campos obligatorios del cliente';
$lang['AdminCompanyClientOptions.requiredfields.description'] = 'Marque los campos que deben ser obligatorios al crear o actualizar un cliente o contacto.';
$lang['AdminCompanyClientOptions.requiredfields.heading_field'] = 'Campo';
$lang['AdminCompanyClientOptions.requiredfields.heading_required'] = 'Requerido';
$lang['AdminCompanyClientOptions.requiredfields.heading_show'] = 'Mostrar';
$lang['AdminCompanyClientOptions.requiredfields.heading_read_only'] = 'Sólo lectura';
$lang['AdminCompanyClientOptions.requiredfields.field_first_name'] = 'Nombre';
$lang['AdminCompanyClientOptions.requiredfields.field_last_name'] = 'Apellido';
$lang['AdminCompanyClientOptions.requiredfields.field_company'] = 'Empresa/Org.';
$lang['AdminCompanyClientOptions.requiredfields.field_title'] = 'Título';
$lang['AdminCompanyClientOptions.requiredfields.field_address1'] = 'Dirección 1';
$lang['AdminCompanyClientOptions.requiredfields.field_address2'] = 'Dirección 2';
$lang['AdminCompanyClientOptions.requiredfields.field_city'] = 'Ciudad';
$lang['AdminCompanyClientOptions.requiredfields.field_country'] = 'País';
$lang['AdminCompanyClientOptions.requiredfields.field_state'] = 'Estado/Provincia';
$lang['AdminCompanyClientOptions.requiredfields.field_zip'] = 'Código postal';
$lang['AdminCompanyClientOptions.requiredfields.field_email'] = 'Correo electrónico';
$lang['AdminCompanyClientOptions.requiredfields.field_phone'] = 'Teléfono';
$lang['AdminCompanyClientOptions.requiredfields.field_fax'] = 'Fax';
$lang['AdminCompanyClientOptions.requiredfields.text_submit'] = 'Actualizar ajustes';
