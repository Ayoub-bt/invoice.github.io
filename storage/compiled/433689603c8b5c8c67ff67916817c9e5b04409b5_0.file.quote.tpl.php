<?php
/* Smarty version 4.3.0, created on 2023-05-05 17:51:14
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\quote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645534026d46f3_96817811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '433689603c8b5c8c67ff67916817c9e5b04409b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\quote.tpl',
      1 => 1683305397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645534026d46f3_96817811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119432271364553402691689_89657305', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1751783836645534026d1d31_01110872', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_119432271364553402691689_89657305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_119432271364553402691689_89657305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row" style="justify-content: center;">
        <div class="col-lg-10" id="application_ajaxrender">
            <div class="panel px-2" id="ibox">
                <div class="panel-hdr" style="justify-content: center;">
                    <div class="panel-toolbar pt-3 pb-3">
                        <input type="hidden" name="iid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="iid">
                        <div class="btn-group flex-wrap" role="group" aria-label="...">

                            <!-- Mark As -->
                            <div class="btn-group" style="display: none;" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-check"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Draft') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_draft"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Delivered') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_delivered"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'On Hold') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_on_hold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['On Hold'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Accepted') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_accepted"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</a></li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Lost') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_lost"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</a></li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Dead') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_dead"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</a></li>
                                    <?php }?>

                                </ul>
                            </div>

                            <!-- Preview -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-primary btn-sm"><i class="fal fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Preview'];?>
</a>

                            <!-- Edit -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/" class="btn btn-warning  btn-sm"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                            <!-- PDF -->
                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-download"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF'];?>

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
                                        <li class="dropdown-item">
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>

                                        </li>
                                    </a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/">
                                        <li class="dropdown-item">
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>

                                        </li>
                                    </a>
                                </ul>
                            </div>

                            <!-- Convert to Invoice -->
                            <button type="button" class="btn btn-danger btn-sm" style="border-radius: 0;" id="convert_invoice"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Convert to Invoice'];?>
</button>
                            
                            <!-- Print -->
                            <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary  btn-sm"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</a> -->
                        </div>
                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <style>
                            .invoice * {
                                font-size: 96%;
                            }
                        </style>

                        <div class="invoice">

                            <div class="bill-info">
                                <div class="row">

                                    <!-- Company info -->
                                    <div class="col-6">
                                        <div class="bill-data">

                                            <!-- Logo -->
                                            <div class="ib">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo" style="margin-bottom: 15px;">
                                            </div>

                                            <h4 class="h4 mt-none text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</h4>

                                            <!-- Address -->
                                            <address class="ib mr-xlg">
                                                <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>

                                                <!-- Phone -->
                                                <!-- <?php if (($_smarty_tpl->tpl_vars['config']->value['CompanyPhone'])) {?>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong>
                                                    <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyPhone'];?>

                                                <?php }?> -->

                                                <!-- Email -->
                                                <?php if (($_smarty_tpl->tpl_vars['config']->value['sysEmail'])) {?>
                                                    <br>
                                                    <?php echo $_smarty_tpl->tpl_vars['config']->value['sysEmail'];?>

                                                <?php }?>

                                                <br>
                                                № TVA intracommunautaire: FR47920784766
                                                <br>
                                                № Siret: 92078476600015
                                                <br>
                                                Code NAF: 8121Z
                                            </address>


                                            <!-- Expiry Date -->
                                            <!-- <p class="mb-none">
                                                <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
:</span>
                                                <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['validuntil']));?>
</span>
                                            </p> -->

                                            <!-- Total -->
                                            <!-- <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 </h2> -->

                                        </div>
                                    </div>

                                    <!-- Client info -->
                                    <div class="col-6">
                                        <div class="bill-to">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                            <address>
                                                <!-- Company -->
                                                <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                                    <b><?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>
</b>
                                                    <br>
                                                    <span class="text-capitalize">
                                                        <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    </span>
                                                    <br>
                                                <?php } else { ?>
                                                    <span class="text-capitalize">
                                                        <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    </span>
                                                    <br>
                                                <?php }?>

                                                <!-- Address -->
                                                <?php if (($_smarty_tpl->tpl_vars['a']->value['address'])) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
,
                                                <?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['city'];?>

                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['zip'];?>

                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>


                                                <!-- Phone -->
                                                <?php if (($_smarty_tpl->tpl_vars['a']->value['phone'])) {?>
                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong>
                                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>

                                                <?php }?>

                                                <!-- Email -->
                                                <?php if (($_smarty_tpl->tpl_vars['a']->value['email'])) {?>
                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>

                                                <?php }?>

                                                <!-- Custum fields -->
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            </address>
                                        </div>
                                    </div>
                                    
                                    <!-- Quote number -->
                                    <b class="h4 mb-0"><?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {
echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></b>
                                    
                                    <!-- Quote date -->
                                    <p>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
:</strong>
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['datecreated']));?>

                                    </p>
                                </div>
                            </div>

                            <!-- Object -->
                            <?php if ($_smarty_tpl->tpl_vars['d']->value['subject']) {?>
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>

                                </div>
                            </div>
                            <?php }?>

                            <!-- Proposal -->
                            <?php if ($_smarty_tpl->tpl_vars['d']->value['proposal']) {?>
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                            <?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>

                                    </div>
                                </div>
                            <?php }?>

                            <style>
                                #services th,
                                #services td {
                                    padding: 5px;
                                }
                            </style>

                            <!-- Services -->
                            <div class="table-responsive">
                                <table class="table table-bordered invoice-items" id="services">
                                    <thead>
                                        <tr class="h4 text-dark">
                                            <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service Ref'];?>
</th>
                                            <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                            <th id="cell-qty" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
                                            <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PU Vente'];?>
</th>
                                            <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax'];?>
</th>
                                            <th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total HT'];?>
</th>
                                            <th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <tr>
                                                <td class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['item']->value['ref'];?>
</td>
                                                <td class="text-semibold">
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                                                    <br>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['item']->value['features']), 'feature_line');
$_smarty_tpl->tpl_vars['feature_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_line']->value) {
$_smarty_tpl->tpl_vars['feature_line']->do_else = false;
?>
                                                        <span>- <?php echo $_smarty_tpl->tpl_vars['feature_line']->value;?>
</span>
                                                        <br>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </td>
                                                <td class="text-center nowrap"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                                <td class="text-center nowrap"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['amount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                <td class="text-center nowrap">
                                                    <?php $_smarty_tpl->_assignInScope('taxAmount', 20/100);?>
                                                    <?php $_smarty_tpl->_assignInScope('finalAmount', $_smarty_tpl->tpl_vars['taxAmount']->value*$_smarty_tpl->tpl_vars['item']->value['amount']);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['taxable']) {?>
                                                        <?php echo number_format($_smarty_tpl->tpl_vars['finalAmount']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>

                                                    <?php } else { ?>
                                                        <?php echo number_format(0,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>

                                                    <?php }?>
                                                </td>
                                                <td class="text-center nowrap"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                <td></td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Quote Summary -->
                            <div class="invoice-summary mb-3">
                                <div class="row" style="justify-content: right;">
                                    <div class="col-6 offset-md-8">
                                        <table class="table h5 text-dark">
                                            <tbody>
                                                <tr class="b-top-none">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
                                                    <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['subtotal'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                </tr>
                                                <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                                    <tr>
                                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                                        <td class="text-left">-<?php echo number_format($_smarty_tpl->tpl_vars['d']->value['discount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                    </tr>
                                                <?php }?>
                                                <tr>
                                                    <!-- <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['taxname'];?>
</td> -->
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax'];?>
</td>
                                                    <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['tax1'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                </tr>

                                                <tr class="h4">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                                    <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Notes -->
                            <?php if ($_smarty_tpl->tpl_vars['d']->value['customernotes']) {?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="mb-0 text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Terms'];?>
</h6>
                                        <?php echo $_smarty_tpl->tpl_vars['d']->value['customernotes'];?>

                                    </div>
                                </div>
                            <?php }?>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <input type="hidden" id="_lan_msg_confirm" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

    <input type="hidden" id="admin_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1751783836645534026d1d31_01110872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1751783836645534026d1d31_01110872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
    $(document).ready(function () {



        var $modal = $('#cloudonex_body');


        var sysrender = $('#application_ajaxrender');

        var _url = base_url;


        sysrender.on('click', '#mail_quote_created', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/mail_invoice_/' + iid + '/created',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').redactor();
                    },
                    touch: false,
                    autoFocus: false,
                    keyboard: false,
                },
            });




        });



        sysrender.on('click', '#sms_quote_created', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/created',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });


        sysrender.on('click', '#sms_quote_accepted', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/accepted',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });


        sysrender.on('click', '#sms_quote_cancelled', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/cancelled',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });



        $modal.on('click', '#btnModalSMSSend', function(){



            $.post(base_url + 'sms/init/send_quote', {


                message: $('#message').val(),
                to: $("#sms_to").val(),
                from: $("#sms_from").val(),
                invoice_id: $("#smsQuoteId").val()

            }).done(function (data) {

                toastr.success(data);
            });

        });


        $modal.on('click', '#send', function(e){
            e.preventDefault();
            var attach_pdf = 'No';
            if($("#attach_pdf").prop('checked') == true){
                attach_pdf = 'Yes';
            }
            $('#send').prop('disabled',true);
            $.post(base_url + 'quotes/send_email', $('#email_form').serialize()).done(function (data) {
                toastr.success(data);
            });
        });

        $("#convert_invoice").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    $('#ibox').block({ message: null });
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/convert_invoice/", { iid: iid })
                        .done(function( data ) {
                        window.location = _url + 'invoices/view/' + data + '/';
                        // console.log(data);
                        $('#ibox').unblock();
                    });
                }
            });
        });

        $("#mark_draft").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_draft/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                    });
                }
            });
        });

        $("#mark_delivered").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_delivered/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                    });
                }
            });

        });

        $("#mark_on_hold").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_on_hold/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });
        });

        $("#mark_accepted").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_accepted/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });
        });

        $("#mark_lost").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_lost/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });
        });

        $("#mark_dead").click(function (e) {
            e.preventDefault();
            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_dead/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });
        });

        $modal.on('click', '#send_bcc_to_admin', function(e){
            e.preventDefault();
            $("#bccemail").val($("#admin_email").val());
        });

        $modal.on('hidden.bs.modal', function () {
            location.reload();
        })

    });
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
