<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.es_es
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.!success.invoices_updated'] = 'Los ajustes de Facturación y Cargo se han actualizado correctamente.';
$lang['AdminCompanyBilling.!success.notices_updated'] = 'Los avisos se han actualizado correctamente.';
$lang['AdminCompanyBilling.!success.coupon_created'] = 'El cupón se ha creado correctamente.';
$lang['AdminCompanyBilling.!success.coupon_updated'] = 'El cupón se ha actualizado correctamente.';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = 'El cupón se ha eliminado correctamente.';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = 'La configuración del tipo de pago aceptado se ha actualizado correctamente.';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = 'La configuración de la entrega de facturas se ha actualizado correctamente.';
$lang['AdminCompanyBilling.!success.latefees_updated'] = 'La configuración de las tasas por retraso se ha actualizado correctamente.';
$lang['AdminCompanyBilling.!success.customization_updated'] = 'Los ajustes de personalización de la factura se han actualizado correctamente.';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = 'El valor inicial de la factura debe ser un número.';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = 'El valor de incremento de la factura debe ser un número.';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = 'El valor de inicio de cotización debe ser un número.';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = 'El valor de incremento de la cotización debe ser un número.';
$lang['AdminCompanyBilling.!error.amount.format'] = 'La tasa Importe debe ser un número.';
$lang['AdminCompanyBilling.!error.minimum.format'] = 'Tasa El importe mínimo debe ser un número.';
$lang['AdminCompanyBilling.!error.extension_zlib'] = 'La extensión Zlib es necesaria para la compresión de facturas.';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = 'Los términos deben introducirse como una lista CSV (por ejemplo, "1,3,4" significa 1 día, 3 días y 4 días cuando se introducen en la fila "Día").';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = 'La cantidad representa el número máximo de veces que se puede utilizar este cupón antes de que caduque.';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = 'El número de días antes de que se renueve un servicio o una factura recurrente para generar una factura.';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = 'El número de días después de emitir una cotización para establecerla como caducada.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = 'El número de días después de que caduque una cotización para establecerla como muerta.';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = 'El porcentaje de depósito inicial por defecto para una cotización.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = 'El número de días antes del vencimiento de una factura para el cargo automático en la cuenta de pago predeterminada del cliente (si el cliente está configurado para el cargo automático).';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = 'El número de días que hay que esperar tras el vencimiento de una factura por un servicio antes de suspender el servicio.';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = 'El número de intentos y fallos para procesar una cuenta de pago antes de que dicha cuenta de pago quede inhabilitada para el cargo automático.';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = 'Número de intentos y fallos para procesar la renovación de un servicio antes de que se desactive la renovación automática de dicho servicio.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = 'Los cambios de servicio en cola se cancelarán automáticamente cuando su factura permanezca impagada durante el número de días seleccionado.';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = 'Aplique un recargo por demora a las facturas abiertas un número determinado de días después de su vencimiento.';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = 'Permite el adeudo automático de un cliente cuando vence el pago.';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = 'Marque esta opción para permitir que el cliente elija el método de entrega de facturas que prefiera (por ejemplo, papel o email).';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = 'Marque esta casilla para seguir facturando los servicios suspendidos.';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = 'Crea una única factura para los servicios que se renuevan el mismo día para un cliente. Si se desmarca, se creará una factura independiente para cada servicio.';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = 'Marque esta casilla para añadir la versión de texto de las descripciones de los paquetes a las partidas de servicio.';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = 'Marque esta casilla para incluir el intervalo de fechas de servicio para cada partida de factura de opción configurable.';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = 'Marque esta casilla para permitir a los clientes cancelar sus propios servicios.';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = 'Marque para permitir a los clientes renovar sus propios servicios por adelantado.';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = 'Si esta opción está seleccionada, los servicios adicionales creados recientemente que coincidan con los términos mensuales o anuales del padre se prorratearán a la fecha de renovación del padre.';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = 'Marque esta opción para permitir a los clientes solicitar complementos para cualquiera de sus servicios que los admitan.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = 'Marque esta casilla para permitir a los clientes cambiar el plazo de los servicios recurrentes.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = 'Marque esta opción para permitir a los clientes cambiar el paquete de servicios recurrentes.';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = 'Marque esta opción para permitir créditos prorrateados para servicios, u opciones configurables de servicios, que hayan bajado de categoría.';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = 'Marque esta opción para permitir que Blesta aplique créditos automáticamente a las facturas abiertas (primero las más antiguas).';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = 'Marque esta opción para permitir que Blesta aprovisione automáticamente los servicios que estén pendientes y que tengan una factura pagada.';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = 'Si se selecciona esta opción, las cancelaciones de servicios también anularán cualquier factura abierta asociada al servicio cancelado. Si dicha factura contiene partidas no asociadas al servicio, las partidas del servicio se eliminarán en su lugar y la factura no se anulará.';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = 'Si la factura asociada a un servicio anulado está vencida, sólo se anulará si no está vencida más del número de días seleccionado.';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = 'Marque esta casilla para mostrar el campo ID fiscal en la interfaz de cliente.';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = 'Si está marcada, los cambios de servicio (es decir, ampliaciones/reducciones) se pondrán en cola y se aprovisionarán sólo después de haber sido pagados. En caso contrario, se activarán inmediatamente.';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = 'Si el tipo de comisión es porcentual, active esta casilla para calcular la comisión en función del importe total de la factura. Si no está marcada, la comisión se calculará únicamente sobre el importe impagado.';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = 'Esta opción establece si se puede enviar a los clientes alguno de los avisos de pago disponibles.';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = 'Esta opción establece si se pueden enviar avisos de cancelación de servicio a los clientes.';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = 'El número de días antes o después del vencimiento de una factura para enviar el primer email de aviso de retraso.';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = 'El número de días antes o después del vencimiento de una factura para enviar el segundo email de aviso de retraso.';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = 'El número de días antes o después del vencimiento de una factura para enviar el tercer email de aviso de retraso.';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = 'El número de días antes de que se realice un cargo automático en una cuenta para enviar el email de aviso de cargo automático pendiente.';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = 'Tipo de factura que se crea por defecto. Las facturas pro forma cambian a facturas estándar después de haber sido pagadas y cerradas.';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = 'Las etiquetas disponibles son: {num} - el número de factura (obligatorio); {year} - el año de cuatro dígitos; {month} - el mes de dos dígitos; {day} - el día del mes de dos dígitos.';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = 'Las etiquetas disponibles son: {num} - el número de factura (obligatorio); {year} - el año de cuatro dígitos; {month} - el mes de dos dígitos; {day} - el día del mes de dos dígitos.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = 'Las etiquetas disponibles son: {num} - el número de factura (obligatorio); {year} - el año de cuatro dígitos; {month} - el mes de dos dígitos; {day} - el día del mes de dos dígitos.';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = 'Los números de factura comenzarán (y se incrementarán) a partir de este valor inicial.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = 'Los números de factura comenzarán (y se incrementarán) a partir de este valor inicial.';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = 'Los números de factura posteriores se incrementarán en este valor.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = 'El tamaño de relleno de la factura establece la longitud mínima de los caracteres de los números de factura.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = 'Los números de factura cuya longitud de caracteres sea inferior al tamaño de relleno de la factura se rellenarán a la izquierda con el carácter indicado.';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = 'Guarda en disco una copia en caché de cada factura.';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = 'Comprime los archivos PDF almacenados en caché para ahorrar espacio en disco. Activar esta opción puede disminuir el rendimiento.';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = 'Cargue el logotipo que aparecerá en la factura.';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = 'Cargue el fondo que aparecerá en la factura.';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = 'El tamaño del papel de la factura.';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = 'La plantilla de factura que se utilizará para generar la factura.';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = 'El tipo de archivo de la factura. Las plantillas de factura pueden admitir varios tipos de archivo.';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = 'Para obtener fuentes adicionales, descomprima sus fuentes TCPDF personalizadas en el directorio /vendors/tecnickcom/tcpdf/fonts/ de su instalación.';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = 'Introduzca las condiciones de pago o cualquier otra información que desee que aparezca en la factura.';
$lang['AdminCompanyBilling.!notice.group_settings'] = 'NOTA: Estos ajustes sólo se aplican a los Grupos de Clientes que heredan sus ajustes de la Compañía.';
$lang['AdminCompanyBilling.invoices.page_title'] = 'Configuración > Empresa > Facturación/Pago > Opciones de facturación y cargos';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = 'Opciones de facturación y cobro';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = 'Días de facturación antes de la renovación';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = 'Días de caducidad de la cotización';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = 'Cotización Días muertos después de la expiración';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = 'Cotización Porcentaje de depósito por defecto (%)';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = 'Adeudo automático Días antes del vencimiento';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = 'Suspender los servicios días después del vencimiento';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = 'Intentos de adeudo automático';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = 'Intentos de renovación del servicio';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = 'Cancelar cambios de servicio días después del vencimiento';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = 'Aplicar recargo por demora a las facturas abiertas después de su vencimiento';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = 'Activar débito automático';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = 'Permitir que el cliente establezca el método de facturación';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = 'Facturación de servicios suspendidos';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = 'Facturar juntos los servicios';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = 'Incluir descripciones de los paquetes en las facturas';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = 'Mostrar el intervalo de fechas de servicio para las opciones configurables';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = 'Permitir a los clientes cancelar servicios';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = 'Permitir que los clientes renueven manualmente los servicios';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = 'Permitir que los servicios complementarios se sincronicen con sus servicios principales';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = 'Permitir a los clientes crear complementos para los servicios existentes';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = 'Permitir a los clientes cambiar las condiciones del servicio';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = 'Permitir a los clientes cambiar de paquete de servicios';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = 'Permitir la concesión de créditos prorrateados para las reducciones de servicio';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = 'Aplicar automáticamente créditos sueltos';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = 'Aprovisionamiento de servicios pendientes de pago';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = 'Anular facturas pendientes al cancelar un servicio';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = 'Anular facturas pendientes días después del vencimiento';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = 'Mostrar el campo de identificación fiscal en la interfaz de cliente';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = 'Cambios en el servicio de colas hasta que se pague';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = 'Actualizar ajustes';
$lang['AdminCompanyBilling.invoices.text_any'] = '- Cualquier...';
$lang['AdminCompanyBilling.invoices.text_never'] = 'Nunca';
$lang['AdminCompanyBilling.invoices.text_sameday'] = 'El mismo día';
$lang['AdminCompanyBilling.invoices.text_day'] = '%1$s Día';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s Días';
$lang['AdminCompanyBilling.notices.page_title'] = 'Configuración > Empresa > Facturación/Pago > Avisos';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = 'Avisos';
$lang['AdminCompanyBilling.notices.text_notices'] = 'Los avisos de pago pueden utilizarse como avisos de demora o recordatorios de pago.';
$lang['AdminCompanyBilling.notices.text_before'] = 'Antes de';
$lang['AdminCompanyBilling.notices.text_after'] = 'En';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = 'Fecha de vencimiento de la factura';
$lang['AdminCompanyBilling.notices.text_day'] = '%1$s Día';
$lang['AdminCompanyBilling.notices.text_days'] = '%1$s Días';
$lang['AdminCompanyBilling.notices.text_duedate'] = 'Fecha de vencimiento';
$lang['AdminCompanyBilling.notices.text_disabled'] = 'Deshabilitado';
$lang['AdminCompanyBilling.notices.text_edit_template'] = 'Editar plantilla de email';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = 'Permitir el envío de avisos de cancelación de servicio';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = 'Permitir el envío de notificaciones de pago';
$lang['AdminCompanyBilling.notices.field.first_notice'] = 'Primer aviso';
$lang['AdminCompanyBilling.notices.field.second_notice'] = 'Segundo aviso';
$lang['AdminCompanyBilling.notices.field.third_notice'] = 'Tercer aviso';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = 'Aviso de débito automático pendiente';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = 'Actualizar ajustes';
$lang['AdminCompanyBilling.coupons.page_title'] = 'Configuración > Empresa > Facturación/Pago > Cupones';
$lang['AdminCompanyBilling.coupons.no_results'] = 'No hay cupones.';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = 'Añadir cupón';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = 'Cupones';
$lang['AdminCompanyBilling.coupons.text_code'] = 'Código';
$lang['AdminCompanyBilling.coupons.text_discount'] = 'Descuento';
$lang['AdminCompanyBilling.coupons.text_used'] = 'Usado';
$lang['AdminCompanyBilling.coupons.text_max'] = 'Max';
$lang['AdminCompanyBilling.coupons.text_start_date'] = 'Fecha de inicio';
$lang['AdminCompanyBilling.coupons.text_end_date'] = 'Fecha final';
$lang['AdminCompanyBilling.coupons.text_options'] = 'Opciones';
$lang['AdminCompanyBilling.coupons.text_currency'] = 'Moneda';
$lang['AdminCompanyBilling.coupons.text_multiple'] = 'Múltiples';
$lang['AdminCompanyBilling.coupons.option_edit'] = 'Editar';
$lang['AdminCompanyBilling.coupons.option_delete'] = 'Borrar';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = '¿Estás seguro de que quieres eliminar este cupón?';
$lang['AdminCompanyBilling.addcoupon.page_title'] = 'Configuración > Empresa > Facturación/Pago > Nuevo cupón';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = 'Nuevo cupón';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = 'Básico';
$lang['AdminCompanyBilling.addcoupon.field_status'] = 'Activado';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = 'Aplicar sólo cuando se añade el servicio';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = 'Aplicar cuando se añade o renueva el servicio';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = 'Aplicar a opciones configurables';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = 'Sólo para uso interno';
$lang['AdminCompanyBilling.addcoupon.field_code'] = 'Código de cupón';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = 'Generar código';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = 'Limitaciones';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = 'Fecha de inicio';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = 'Fecha final';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = 'Cantidad';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = 'Las limitaciones no se aplican a la renovación de servicios';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = 'Se aplican limitaciones a la renovación de servicios';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = 'Opciones de descuento';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = 'Añadir moneda adicional';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = 'Moneda';
$lang['AdminCompanyBilling.addcoupon.text_type'] = 'Tipo';
$lang['AdminCompanyBilling.addcoupon.text_value'] = 'Valor';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = 'Limitaciones de plazo';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = 'Este cupón sólo puede aplicarse a servicios que se soliciten para uno de los términos/períodos seleccionados. Si no se activa ninguno, se ignorará el plazo del servicio al evaluar las limitaciones del cupón.';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = 'Activado';
$lang['AdminCompanyBilling.addcoupon.text_period'] = 'Periodo';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = 'Términos';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = 'Eliminar';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = 'Paquetes';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = 'Filtro de grupos de paquetes';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = 'Crear cupón';
$lang['AdminCompanyBilling.addcoupon.text_all'] = 'Todos';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = 'Paquetes asignados';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = 'Paquetes disponibles';
$lang['AdminCompanyBilling.editcoupon.page_title'] = 'Configuración > Empresa > Facturación/Pago > Editar cupón';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = 'Editar cupón';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = 'Básico';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = 'Aplicar sólo cuando se añade el servicio';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = 'Aplicar cuando se añade o renueva el servicio';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = 'Aplicar a opciones configurables';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = 'Sólo para uso interno';
$lang['AdminCompanyBilling.editcoupon.field_code'] = 'Código de cupón';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = 'Generar código';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = 'Limitaciones';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = 'Fecha de inicio';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = 'Fecha final';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = 'Cantidad';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = 'Las limitaciones no se aplican a la renovación de servicios';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = 'Se aplican limitaciones a la renovación de servicios';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = 'Opciones de descuento';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = 'Añadir moneda adicional';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = 'Moneda';
$lang['AdminCompanyBilling.editcoupon.text_type'] = 'Tipo';
$lang['AdminCompanyBilling.editcoupon.text_value'] = 'Valor';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = 'Términos';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = 'Este cupón sólo puede aplicarse a servicios que se soliciten para uno de los términos/períodos seleccionados. Si no se activa ninguno, se ignorará el plazo del servicio al evaluar las limitaciones del cupón.';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = 'Activado';
$lang['AdminCompanyBilling.editcoupon.text_period'] = 'Periodo';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = 'Términos';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = 'Eliminar';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = 'Paquetes';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = 'Filtro de grupos de paquetes';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = 'Editar cupón';
$lang['AdminCompanyBilling.editcoupon.text_all'] = 'Todos';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = 'Paquetes asignados';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = 'Paquetes disponibles';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(utilizado %1$s)';
$lang['AdminCompanyBilling.customization.page_title'] = 'Configuración > Empresa > Facturación/Pago > Personalización de la factura';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = 'Personalización de facturas';
$lang['AdminCompanyBilling.customization.heading_general'] = 'Opciones básicas';
$lang['AdminCompanyBilling.customization.heading_quotations'] = 'Opciones de cotización';
$lang['AdminCompanyBilling.customization.heading_cache'] = 'Caché';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = 'Apariencia y estilo';
$lang['AdminCompanyBilling.customization.field.inv_format'] = 'Formato de factura';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = 'Formato de borrador de factura';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = 'Formato de factura pro forma';
$lang['AdminCompanyBilling.customization.field.inv_start'] = 'Valor inicial de la factura';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = 'Valor inicial de la factura pro forma';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = 'Valor de incremento de la factura';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = 'Tamaño del relleno de la factura';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = 'Carácter de relleno de la factura';
$lang['AdminCompanyBilling.customization.field.inv_type'] = 'Tipo de factura';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = 'Formato del presupuesto';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = 'Valor inicial de la oferta';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = 'Valor de incremento de la cotización';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = 'Método de caché de facturas';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = 'Comprimir facturas PDF';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = 'Logotipo';
$lang['AdminCompanyBilling.customization.field.inv_background'] = 'Fondo';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = 'Términos';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = 'Tamaño del papel';
$lang['AdminCompanyBilling.customization.field.inv_template'] = 'Plantilla de factura';
$lang['AdminCompanyBilling.customization.field.inv_display'] = 'Visualización en factura';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = 'Logotipo';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = 'Empresa/Dirección';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = 'Marca de agua de PAGO';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = 'Pagos/Créditos';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = 'Fecha de vencimiento - Borradores';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = 'Fecha de vencimiento - Pro Forma';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = 'Fecha de vencimiento - Estándar';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = 'Tipo de archivo de factura';
$lang['AdminCompanyBilling.customization.field.inv_font'] = 'Familia de fuentes';
$lang['AdminCompanyBilling.customization.remove'] = 'Eliminar';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = 'Actualizar ajustes';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = 'Configuración > Empresa > Facturación/Pago > Tipos de pago aceptados';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = 'Formas de pago aceptadas';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = 'Sólo los tipos de pago seleccionados están disponibles para su procesamiento a través de pasarelas, o pueden añadirse como cuentas de pago, incluso si una pasarela activa admite el tipo. Si se desmarca un tipo que ya se acepta, los pagos de ese tipo no se procesarán.';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = 'Tarjeta de crédito';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = 'Cámara de compensación automatizada';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = 'Eliminar anulaciones de cliente';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = 'Eliminar los tipos de pago aceptados actualmente en los clientes';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = 'Actualizar ajustes';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = 'Al marcar esta casilla, se eliminarán todas las anulaciones de tipo de pago aceptadas establecidas en el cliente si están desactivadas en la empresa.';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = 'Configuración > Empresa > Facturación/Pago > Entrega de facturas';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = 'Entrega de facturas';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = 'Opciones básicas';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'InterFax le permite enviar facturas por fax a través de Internet. <a href="http://www.interfax.net/" target="_blank">Regístrese</a> para obtener una cuenta de InterFax y empiece a enviar facturas por fax hoy mismo.';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = 'Métodos postales';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'PostalMethods imprime, rellena y envía las facturas a sus clientes por usted. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">Regístrese</a> en PostalMethods y empiece a enviar facturas hoy mismo.';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = 'Métodos de entrega de facturas';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = 'Nombre de usuario';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = 'Contraseña';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'Clave secreta API';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = 'Impresión a doble cara';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = 'Impresión en color';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = 'Actualizar ajustes';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = 'Postal Methods enviará un sobre de respuesta con cada envío.';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = 'Asegúrese de utilizar la clave secreta del entorno de prueba proporcionada por PostalMethods al realizar las pruebas.';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = 'Si esta opción está marcada, las facturas enviadas a PostalMethods se imprimirán en el anverso y el reverso de la página.';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = 'Tenga en cuenta que si esta opción está marcada, todas las facturas enviadas a PostalMethods serán en color en lugar de en blanco y negro.';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = 'Recargos por mora';
$lang['AdminCompanyBilling.latefees.heading_basic'] = 'Opciones básicas';
$lang['AdminCompanyBilling.latefees.text_enabled'] = 'Activado';
$lang['AdminCompanyBilling.latefees.text_currency'] = 'Moneda';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = 'Tipo de tasa';
$lang['AdminCompanyBilling.latefees.text_amount'] = 'Importe';
$lang['AdminCompanyBilling.latefees.text_minimum'] = 'Mínimo';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = 'Aplicar al importe total de la factura';
$lang['AdminCompanyBilling.latefees.field.percent'] = 'Porcentaje';
$lang['AdminCompanyBilling.latefees.field.fixed'] = 'Fijo';
$lang['AdminCompanyBilling.latefees.field_submit'] = 'Actualizar ajustes';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = 'El número de renovaciones de servicio a intentar antes de retrasar el espaciado de intentos Espaciado de intentos de renovación 1 hora de diferencia';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = 'El número de renovaciones de servicio a intentar antes de retrasar el espaciamiento de los intentos de renovación Espaciamiento de los intentos de renovación con un intervalo de 2 horas';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = 'Umbral de espaciamiento del 1er intento de renovación';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = '1er intento de renovación';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = 'Umbral de espaciamiento del 2º intento de renovación';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = '2º intento de renovación';
$lang['AdminCompanyBilling.invoices.text_none'] = 'Ninguno';
$lang['AdminCompanyBilling.invoices.text_hour'] = '%1$s Hora';
$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s Horas';

