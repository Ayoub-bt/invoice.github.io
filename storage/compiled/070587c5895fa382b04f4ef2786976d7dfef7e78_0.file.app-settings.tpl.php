<?php
/* Smarty version 4.3.0, created on 2023-05-05 20:46:21
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\app-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64555d0d955b30_70596964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070587c5895fa382b04f4ef2786976d7dfef7e78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\app-settings.tpl',
      1 => 1683278756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64555d0d955b30_70596964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77282289964555d0d91da52_30826373', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211545884664555d0d954df8_85715241', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_77282289964555d0d91da52_30826373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_77282289964555d0d91da52_30826373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        #settings-row label {
            margin-bottom: 7px;
        }
    </style>
    
    <div class="row" style="justify-content: center;" id="settings-row">
        <div class="col-md-9">
            
            <!-- Panel - General Settings -->
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['General Settings'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app-post">

                            <!-- Application Name -->
                            <div class="mb-3">
                                <label for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application Name'];?>
</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    value="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['This Name will be'];?>
</span>
                            </div>

                            <!-- Phone -->
                            <div class="mb-3">
                                <label for="company_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                <input type="text" class="form-control" id="company_phone" name="company_phone"
                                    value="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyPhone'];?>
">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="company_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application Name'];?>
</label>
                                <input type="text" class="form-control" id="company_email" name="company_email"
                                    value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sysEmail'];?>
">
                            </div>

                            <!-- Default Landing Page -->
                            <!-- <div class="mb-3">
                                <label for="default_landing_page"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default Landing Page'];?>
</label>
                                <select name="default_landing_page" id="default_landing_page" class="form-select">
                                    <option value="login"
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['default_landing_page'] == 'login') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Admin Login'];?>
</option>
                                    <option value="client/login"
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['default_landing_page'] == 'client/login') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</option>
                                    <option value="client/home"
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['default_landing_page'] == 'client/home') {?>selected="selected" <?php }?>><?php echo __('Client Home');?>
</option>
                                </select>
                            </div> -->

                            <!-- Dashboard -->
                            <!-- <div class="mb-3">
                                <label for="opt_dashboard"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</label>
                                <select name="dashboard" id="opt_dashboard" class="form-select">
                                    <option value="canvas" <?php if ($_smarty_tpl->tpl_vars['config']->value['dashboard'] == 'canvas') {?>selected="selected" <?php }?>>Canvas</option>
                                </select>
                            </div> -->

                            <?php if (empty($_smarty_tpl->tpl_vars['config']->value['disable_invoicing'])) {?>
                                <hr>

                                <!-- Pay To Address -->
                                <div class="mb-3">
                                    <label for="caddress"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pay To Address'];?>
</label>
                                    <textarea class="form-control" id="caddress" name="caddress" rows="2"><?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>
</textarea>
                                </div>

                                <!-- Address Format -->
                                <div class="mb-3" style="display: none;">
                                    <label for="inputAddressFormat"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address Format'];?>
</label>
                                    <select name="address_format" id="inputAddressFormat" class="form-select">
                                        <option value="default" <?php if (!(isset($_smarty_tpl->tpl_vars['config']->value['address_format'])) || $_smarty_tpl->tpl_vars['config']->value['address_format'] == 'default') {?>selected="selected" <?php }?>>Default / USA / Australia / India & Other Counntries</option>
                                        <option value="eu" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['address_format'])) && $_smarty_tpl->tpl_vars['config']->value['address_format'] == 'eu') {?>selected="selected" <?php }?>>UK / EU / Brazil / Mexico / Israel / Russia / Turkey / China / Hongkong</option>
                                    </select>
                                </div>

                                <!-- Tax System -->
                                <div class="mb-3" style="display: none;">
                                    <label for="inputTaxSystem"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax System'];?>
</label>
                                    <select name="tax_system" id="inputTaxSystem" class="form-select">
                                        <option value="default" <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'default') {?>selected="selected" <?php }?>>Default</option>
                                        <!-- <option value="ca_quebec" <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'ca_quebec') {?>selected="selected" <?php }?>>Quebec Canada</option> -->
                                        <!-- <option value="India" <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>selected="selected" <?php }?>>India</option> -->
                                    </select>
                                </div>

                                <!-- Business Location -->
                                <!-- <div class="mb-3" style="display: none;">
                                    <label for="inputBusinessLocation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Business Location'];?>
</label>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'default') {?>
                                        <input type="text" class="form-control" id="inputBusinessLocation" name="business_location"
                                            value="<?php echo $_smarty_tpl->tpl_vars['config']->value['business_location'];?>
">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>
                                        <select name="business_location" id="inputBusinessLocation" class="form-select">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Tax::indianStates(), 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['business_location'] == $_smarty_tpl->tpl_vars['state']->value['name']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" id="inputBusinessLocation" name="business_location"
                                            value="<?php echo $_smarty_tpl->tpl_vars['config']->value['business_location'];?>
">
                                    <?php }?>
                                </div> -->

                                <!-- TAX/VAT Number -->
                                <!-- <div class="mb-3">
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>
                                        <label for="vat_number">GSTIN</label>
                                    <?php } else { ?>
                                        <label for="vat_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX/VAT Number'];?>
</label>
                                    <?php }?>
                                    <input type="text" class="form-control" id="vat_number" name="vat_number"
                                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['vat_number']))) {?> value="<?php echo $_smarty_tpl->tpl_vars['config']->value['vat_number'];?>
" <?php }?>>
                                </div> -->

                                <!-- Tax/VAT Number Label -->
                                <!-- <div class="mb-3">
                                    <label><?php echo __('Tax/VAT Number Label');?>
</label>
                                    <input type="text" class="form-control" id="label_tax_number" name="label_tax_number"
                                        value="<?php echo sp_config_or_default('label_tax_number');?>
">
                                </div> -->

                                <!-- Default Invoice Terms -->
                                <div class="mb-3">
                                    <label for="invoice_terms"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default Invoice Terms'];?>
</label>
                                    <textarea class="form-control" id="invoice_terms" name="invoice_terms" rows="3">
                                        <?php echo $_smarty_tpl->tpl_vars['config']->value['invoice_terms'];?>

                                    </textarea>
                                </div>

                                <!-- Show quantity as -->
                                <div class="mb-3">
                                    <label for="show_quantity_as"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default'];?>
: <?php echo $_smarty_tpl->tpl_vars['_L']->value['Show quantity as'];?>
</label>
                                    <input type="text" class="form-control" id="show_quantity_as" name="show_quantity_as" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['show_quantity_as'];?>
">
                                </div>

                                <!-- PDF Font -->
                                <div class="mb-3">
                                    <label for="pdf_font"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF Font'];?>
</label>
                                    <select name="pdf_font" id="pdf_font" class="form-select">
                                        <option value="default" <?php if ($_smarty_tpl->tpl_vars['config']->value['pdf_font'] == 'default') {?>selected="selected" <?php }?>>Default
                                            [Faster PDF Creation with Less Memory]
                                        </option>
                                        <option value="Helvetica" <?php if ($_smarty_tpl->tpl_vars['config']->value['pdf_font'] == 'Helvetica') {?>selected="selected" <?php }?>>
                                            Helvetica
                                        </option>
                                        <option value="dejavusanscondensed"
                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['pdf_font'] == 'dejavusanscondensed') {?>selected="selected" <?php }?>>
                                            dejavusanscondensed [Embed fonts with supports UTF8]
                                        </option>

                                        <option value="AdobeCJK" <?php if ($_smarty_tpl->tpl_vars['config']->value['pdf_font'] == 'AdobeCJK') {?>selected="selected" <?php }?>>
                                            AdobeCJK [Adobe Asian Font pack]
                                        </option>

                                    </select>
                                </div>

                                <!-- Payment Terms -->
                                <div class="mb-3">
                                    <label for="invoice_default_date"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Terms'];?>
</label>
                                    <select name="invoice_default_date" id="invoice_default_date" class="form-select">
                                        <option value="due_on_receipt" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'due_on_receipt')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due On Receipt'];?>
</option>
                                        <option value="days3" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days3')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_3'];?>
</option>
                                        <option value="days5" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days5')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_5'];?>
</option>
                                        <option value="days7" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days7')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_7'];?>
</option>
                                        <option value="days10" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days10')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_10'];?>
</option>
                                        <option value="days15" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days15')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_15'];?>
</option>
                                        <option value="days30" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days30')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_30'];?>
</option>
                                        <option value="days45" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days45')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_45'];?>
</option>
                                        <option value="days60" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'])) && ($_smarty_tpl->tpl_vars['config']->value['invoice_default_date'] == 'days60')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_60'];?>
</option>
                                    </select>
                                </div>

                            <?php }?>

                            <button type="submit" class="btn btn-primary w-100"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>

                    </div>
                </div>

            </div>

            <!-- Panel - Google reCAPTCHA -->
            <!-- <div class="panel">
                <div class="panel-hdr">
                    <h2>Google reCAPTCHA (V3)</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/recaptcha_post/">

                            <div class="mb-3">
                                <label for="recaptcha"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Recaptcha'];?>
</label>
                                <select name="recaptcha" id="recaptcha" class="form-select">
                                    <option value="1"
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['recaptcha'] == '1') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
</option>
                                    <option value="0"
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['recaptcha'] == '0') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="recaptcha_sitekey"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recaptcha'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Site Key'];?>
</label>
                                <input type="text" class="form-control" id="recaptcha_sitekey" name="recaptcha_sitekey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'];?>
">

                            </div>

                            <div class="mb-3">
                                <label for="recaptcha_secretkey"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recaptcha'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Secret Key'];?>
</label>
                                <input type="text" class="form-control" id="recaptcha_secretkey" name="recaptcha_secretkey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['recaptcha_secretkey'];?>
">

                            </div>

                            <button type="submit" class="btn btn-primary w-100"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                    </div>


                </div>
            </div> -->

            <!-- Panel - Other Settings -->
            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoicing'])) {?>
                <div class="panel">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Other Settings'];?>
</h2>
                    </div>
                    <div class="panel-container">

                        <div class="panel-content">

                            <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/other-settings-post/">


                                <div class="mb-3">
                                    <label for="customer_code_prefix"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Code Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="customer_code_prefix" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['customer_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="customer_code_current_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Code Number'];?>
</label>
                                    <input type="text" class="form-control" name="customer_code_current_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['customer_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="invoice_code_prefix"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="invoice_code_prefix" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['invoice_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="invoice_code_current_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Number'];?>
</label>
                                    <input type="text" class="form-control" name="invoice_code_current_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['invoice_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="purchase_code_prefix"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchase Order Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="purchase_code_prefix" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['purchase_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="purchase_code_current_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchase Order Number'];?>
</label>
                                    <input type="text" class="form-control" name="purchase_code_current_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['purchase_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="quotation_code_prefix"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="quotation_code_prefix" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['quotation_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="quotation_code_current_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Number'];?>
</label>
                                    <input type="text" class="form-control" name="quotation_code_current_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['quotation_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="income_code_prefix"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Code Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="income_code_prefix" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['income_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="income_code_current_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Code Number'];?>
</label>
                                    <input type="text" class="form-control" name="income_code_current_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['income_code_current_number'];?>
">

                                </div>


                                <div class="mb-3">
                                    <label for="expense_code_prefix"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Code Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="expense_code_prefix" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['expense_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="expense_code_current_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Code Number'];?>
</label>
                                    <input type="text" class="form-control" name="expense_code_current_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['expense_code_current_number'];?>
">

                                </div>

                                <!-- <div class="mb-3">
                                    <label for="ticket_code_prefix"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="ticket_code_prefix" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['ticket_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="ticket_code_current_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket Number'];?>
</label>
                                    <input type="text" class="form-control" name="ticket_code_current_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['ticket_code_current_number'];?>
">
                                </div>

                                <div class="mb-3">
                                    <label for="contact_extra_field"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact Extra Field Name'];?>
</label>
                                    <input type="text" class="form-control" name="contact_extra_field" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['contact_extra_field'];?>
">
                                </div>

                                <div class="mb-3">
                                    <label for="gmap_api_key"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Google Maps'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['API Key'];?>
</label>
                                    <input type="text" class="form-control" id="gmap_api_key" name="gmap_api_key" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['gmap_api_key'];?>
">
                                </div>

                                <div class="mb-3">
                                    <label for="slack_webhook_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Slack Webhook URL'];?>
</label>
                                    <input type="text" class="form-control" id="slack_webhhok_url" name="slack_webhook_url" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['slack_webhook_url'];?>
">
                                </div> -->

                                <button type="submit" class="btn btn-primary w-100"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </form>

                        </div>

                    </div>
                </div>
            <?php }?>

            <!-- Panel - Additional Settings -->
            <!-- <div class="panel" id="additional_settings">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Additional Settings'];?>
</h5>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-hover">
                            <tbody>

                            <tr>
                                <td width="80%"><label for="url_rewrite"><?php echo $_smarty_tpl->tpl_vars['_L']->value['URL Rewrite'];?>
 </label>
                                    <br>
                                    <p>Please do not enable this, unless you are sure.</p>
                                </td>
                                <td><input type="checkbox" <?php if (get_option('url_rewrite') == '1') {?>checked<?php }?>
                                           data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
"
                                           id="url_rewrite"></td>
                            </tr>


                            </tbody>
                        </table>

                    </div>



                </div>
            </div> -->

        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_211545884664555d0d954df8_85715241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_211545884664555d0d954df8_85715241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {

            $('#invoice_terms').redactor({
                minHeight: 200,
                buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'link', 'unorderedlist', 'orderedlist']
            });

            $('#console_notify_invoice_created').change(function() {

                $('#additional_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( base_url+'settings/update_option/', { opt: "console_notify_invoice_created", val: "1" })
                        .done(function( data ) {
                            $('#additional_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( base_url+'settings/update_option/', { opt: "console_notify_invoice_created", val: "0" })
                        .done(function( data ) {
                            $('#additional_settings').unblock();
                            location.reload();
                        });
                }
            });

        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
