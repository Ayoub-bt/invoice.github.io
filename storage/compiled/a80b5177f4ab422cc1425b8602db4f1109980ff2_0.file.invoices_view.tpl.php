<?php
/* Smarty version 4.3.0, created on 2023-05-05 17:14:04
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\invoices_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64552b4cc65444_63445825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a80b5177f4ab422cc1425b8602db4f1109980ff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\invoices_view.tpl',
      1 => 1683302547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64552b4cc65444_63445825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134793449064552b4cc206a9_88122823', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30978839264552b4cc5d586_78624498', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_134793449064552b4cc206a9_88122823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134793449064552b4cc206a9_88122823',
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
                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-primary btn-sm dropdown-toggle" style="border-radius: 0;" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-check"></i>  <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>
</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Paid') {?>
                                        <li class="dropdown-item set_invoice_status" data-status="Paid"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Unpaid') {?>
                                        <li class="dropdown-item set_invoice_status" data-status="Unpaid"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Partially Paid') {?>
                                        <li class="dropdown-item set_invoice_status set_invoice_status" data-status="Partially Paid"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Cancelled') {?>
                                        <li class="dropdown-item set_invoice_status" data-status="Cancelled"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
                                    <?php }?>
                                </ul>
                            </div>

                            <!-- Preview -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary  btn-sm"><i class="fal fa-file-alt"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Preview'];?>
</span></a>

                            <!-- Edit -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-info btn-sm"><i class="fal fa-pencil"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</span></a>

                            <!-- PDF -->
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-download"></i>
                                    <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF'];?>
</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" target="_blank">
                                        <li class="dropdown-item">
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>

                                        </li>
                                    </a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/">
                                        <li class="dropdown-item">
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>

                                        </li>
                                    </a>
                                </ul>
                            </div>
                            
                            <!-- Clone -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/clone/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-warning btn-sm" style="border-radius: 0;"><i class="fal fa-copy"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
</span></a>

                        </div>
                    </div>
                </div>
                
                <!-- Status -->
                <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Unpaid') {?>
                    <h5 class="alert alert-danger py-2 my-3 w-100 text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</h5>
                <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Paid') {?>
                    <h5 class="alert alert-success py-2 my-3 w-100 text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</h5>
                <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Partially Paid') {?>
                    <h5 class="alert alert-info py-2 my-3 w-100 text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</h5>
                <?php } else { ?>
                    <h5 class="alert alert-info py-2 my-3 w-100 text-center"><?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
</h5>
                <?php }?>

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

                                            <b><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</b>

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
                                                <!-- Full Name - Company -->
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

                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['country'];?>


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
echo $_smarty_tpl->tpl_vars['d']->value['cn'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['id'];
}?></b>
                                            
                                    <!-- Quote date -->
                                    <p>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
:</strong>
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>

                                    </p>
                                </div>
                            </div>

                            <!-- Title -->
                            <?php if ($_smarty_tpl->tpl_vars['d']->value['title']) {?>
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>

                                </div>
                            </div>
                            <?php }?>

                            <!-- Proposal -->
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['proposal']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>

                                        <hr>
                                    <?php }?>
                                </div>
                            </div>

                            <!-- Services -->
                            <div class="table-responsive">
                                <table class="table table-bordered invoice-items">
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
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['taxed']) {?>
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

                            <!-- Invoice Summary -->
                            <div class="invoice-summary mb-3">
                                <div class="row" style="justify-content: right;">
                                    <div class="col-6 offset-md-8">
                                        <table class="table h5 text-dark">

                                            <tbody>
                                                <!-- Subtotal -->
                                                <tr class="b-top-none">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
                                                    <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['subtotal'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                </tr>

                                                <!-- Discount -->
                                                <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                                    <tr>
                                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                                        <td class="text-left">-<?php echo number_format($_smarty_tpl->tpl_vars['d']->value['discount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                    </tr>
                                                <?php }?>

                                                <!-- Tax -->
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax'];?>
</td>
                                                    <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['tax'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                </tr>

                                                <!-- Grand Total -->
                                                <tr class="h4">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                                    <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                </tr>

                                                <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                                    <!-- Total paid -->
                                                    <tr>
                                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</td>
                                                        <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['credit'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                    </tr>

                                                    <!-- Amount Due -->
                                                    <tr class="h4">
                                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
                                                        <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['i_due']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                    </tr>
                                                <?php }?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0 text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Terms'];?>
</h6>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>

                                </div>
                            </div>
                        </div>

                                                                                                                        
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1"  role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Document'];?>

                    </h4>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="doc_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="is_global" name="is_global"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Available for all Customers'];?>

                            </label>
                        </div>

                    </form>

                    <hr>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                        </div>

                    </form>
                    <hr>
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Server Config'];?>
:</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['upload_max_size']->value;?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['POST Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
</p>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="file_link" id="file_link" value="">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button type="button" id="btn_add_file" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </div>
            </div>
        </div>


    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>

        <div class="modal fade" id="purchaseInfo" tabindex="-1" aria-labelledby="purchaseInfoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/save-purchase-info">
                       <div class="modal-header">
                           <h1 class="modal-title fs-5" id="purchaseInfoLabel">Purchase Info</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">

                           <div class="mb-3">
                               <label for="purchase_id">Purchase ID</label>
                               <input type="text" class="form-control" id="purchase_id" name="purchase_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_id'];?>
">
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="mb-3">
                                       <label for="purchase_date">Purchase Date</label>
                                       <input type="text" class="form-control" id="purchase_date" datepicker
                                              data-date-format="yyyy-mm-dd" data-auto-close="true" name="purchase_date"

                                              <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['purchase_date'])) {?>
                                                  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_date'];?>
"
                                                  <?php } else { ?>
                                                    value="<?php echo date('Y-m-d');?>
"
                                              <?php }?>


                                       >
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="mb-3">
                                       <label for="purchase_cost">Purchase Cost</label>
                                       <input type="text" class="form-control" id="purchase_cost" name="purchase_cost" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_cost'];?>
">
                                   </div>
                               </div>
                           </div>

                           <div class="mb-3">
                               <label for="staff_id"><?php echo __('Staff');?>
</label>
                               <select name="staff_id" id="staff_id" class="form-select">
                                   <option value="0"><?php echo __('Select Staff');?>
</option>
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                       <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
"
                                               <?php if ($_smarty_tpl->tpl_vars['staff']->value['id'] == $_smarty_tpl->tpl_vars['d']->value['purchase_staff_id']) {?>
                                                   selected="selected"
                                               <?php } else { ?>
                                                   <?php if ($_smarty_tpl->tpl_vars['staff']->value['id'] == $_smarty_tpl->tpl_vars['user']->value['id']) {?>
                                                       selected="selected"
                                                   <?php }?>
                                               <?php }?>
                                       ><?php echo $_smarty_tpl->tpl_vars['staff']->value['fullname'];?>
</option>
                                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               </select>
                           </div>

                           <div class="mb-3">
                               <label for="purchase_notes">Purchase Notes</label>
                               <textarea class="form-control" id="purchase_notes" rows="5" name="purchase_notes"><?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_notes'];?>
</textarea>
                           </div>


                       </div>
                       <div class="modal-footer">
                           <input type="hidden" name="invoice_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Save</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>

    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>

        <div class="modal fade" id="shippingInfo" tabindex="-1" aria-labelledby="shippingInfoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/save-shipping-info">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="shippingInfoLabel">Shipping Info</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="shipping_weight">Weight</label>
                                <input type="text" class="form-control" id="shipping_weight" name="shipping_weight" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_weight'];?>
">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shipping_date">Shipping Date</label>
                                        <input type="text" class="form-control" id="shipping_date" datepicker
                                               data-date-format="yyyy-mm-dd" data-auto-close="true" name="shipping_date"

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['shipping_date'])) {?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_date'];?>
"
                                                <?php } else { ?>
                                                    value="<?php echo date('Y-m-d');?>
"
                                                <?php }?>


                                        >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shipping_cost">Shipping Cost</label>
                                        <input type="text" class="form-control" id="shipping_cost" name="shipping_cost" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_cost'];?>
">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="shipping_notes">Shipping Notes</label>
                                <textarea class="form-control" id="shipping_notes" rows="5" name="shipping_notes"><?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_notes'];?>
</textarea>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="invoice_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php }?>


    <input type="hidden" id="_lan_msg_confirm" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">
    <input type="hidden" id="admin_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_30978839264552b4cc5d586_78624498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_30978839264552b4cc5d586_78624498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>


        Dropzone.autoDiscover = false;
        $(document).ready(function () {

            var _url = $("#_url").val();

            var $modal = $('#cloudonex_body');

            var sysrender = $modal;

            $('.amount').autoNumeric('init', {

                aSign: "<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
",
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });

            var iid = $("#iid").val();
            sysrender.on('click', '#add_payment', function(e){
                e.preventDefault();

                <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] === 'Credit Note') {?>
                let url = base_url + 'transactions/modal-expense/' + iid;
                <?php } else { ?>
                let url = base_url + 'invoices/add-payment/' + iid;
                <?php }?>

                $.fancybox.open({
                    src  :  url,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $(".datepicker").datepicker();
                            $("#account").select2({

                            });
                            $("#cats").select2({

                            });
                            $("#pmethod").select2({

                            });
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });


            sysrender.on('click', '#mail_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/created',
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

            sysrender.on('click', '#mail_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/reminder',
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

            sysrender.on('click', '#mail_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/overdue',
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

            sysrender.on('click', '#mail_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/confirm',
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

            sysrender.on('click', '#mail_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/refund',
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



            sysrender.on('click', '#sms_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });




            });

            sysrender.on('click', '#sms_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/reminder',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/overdue',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });

            sysrender.on('click', '#sms_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/confirm',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/refund',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });




            $modal.on('click', '#btnModalSMSSend', function(event){

                event.preventDefault();

                $.post(base_url + 'sms/init/send_invoice', {


                    message: $('#message').val(),
                    to: $("#sms_to").val(),
                    from: $("#sms_from").val(),
                    invoice_id: $("#smsInvoiceId").val()

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



                $.post(base_url + 'invoices/send_email', $('#email_form').serialize()).done(function (data) {
                    toastr.success(data);
                });

            });

            $modal.on('click', '#save_payment', function(e){
                e.preventDefault();

                <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] === 'Credit Note') {?>

                let save_payment_url = base_url + 'transactions/expense-post/' + iid;
                <?php } else { ?>
                let save_payment_url = base_url + 'invoices/add-payment-post/' + iid;
                <?php }?>

                $.post(save_payment_url, $("#form_add_payment").serialize())

                    .done(function (data) {


                        if ($.isNumeric(data)) {
                            location.reload();
                        }
                        else {
                            toastr.error(data);

                        }
                    });


            });

            $("#mark_paid").click(function (e) {
                e.preventDefault();


                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });


            $("#mark_unpaid").click(function (e) {
                e.preventDefault();


                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markunpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_cancelled").click(function (e) {
                e.preventDefault();
                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markcancelled", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_partially_paid").click(function (e) {
                e.preventDefault();
                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markpartiallypaid", { iid: iid })
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
            });


            $('[data-bs-toggle="tooltip"]').tooltip();

            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;




            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "documents/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( _url + "documents/post/", { title: $doc_title.val(), file_link: $file_link.val(), rid: iid, rtype: 'invoice' })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }




                    });


            });

            const set_invoice_status = document.querySelectorAll('.set_invoice_status');


            if (set_invoice_status){
                set_invoice_status.forEach((item) => {
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        const status = item.getAttribute('data-status');
                        const invoice_id = '<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
';
                        app.confirm($("#_lan_msg_confirm").val(), function(result) {
                            if(result){

                                $.post(  base_url + "invoices/set-status", {
                                    status: status,
                                    invoice_id: invoice_id,
                                })
                                    .done(function( data ) {
                                        location.reload();
                                    });
                            }
                        });

                    });
                });
            }


            const set_invoice_purchase_status = document.querySelectorAll('.set_invoice_purchase_status');

            if (set_invoice_purchase_status) {
                    set_invoice_purchase_status.forEach((item) => {
                        item.addEventListener('click', (e) => {
                            e.preventDefault();
                            const status = item.getAttribute('data-status');
                            const invoice_id = '<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
';
                            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                                if(result){

                                    $.post(  base_url + "invoices/set-purchase-status", {
                                        status: status,
                                        invoice_id: invoice_id,
                                    })
                                        .done(function( data ) {
                                            location.reload();
                                        });
                                }
                            });

                        });
                    });
                }

            const set_invoice_shipping_status = document.querySelectorAll('.set_invoice_shipping_status');

            if (set_invoice_shipping_status) {
                    set_invoice_shipping_status.forEach((item) => {
                        item.addEventListener('click', (e) => {
                            e.preventDefault();
                            const status = item.getAttribute('data-status');
                            const invoice_id = "<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
";
                            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                                if(result){

                                    $.post(  base_url + "invoices/set-shipping-status", {
                                        status: status,
                                        invoice_id: invoice_id,
                                    })
                                        .done(function( data ) {
                                            location.reload();
                                        });
                                }
                            });

                        });
                    });
                }



        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
