<?php
/* Smarty version 4.3.0, created on 2023-05-05 16:47:46
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\client-quote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6455252201e4e9_37414475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '768b3d54c260c5d73057a15807317d169b14b507' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\client-quote.tpl',
      1 => 1683301355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6455252201e4e9_37414475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187778214964552521f30d02_94108574', "content_body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "content_body"} */
class Block_187778214964552521f30d02_94108574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_187778214964552521f30d02_94108574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="mx-auto" style="max-width: 980px; width: 100%; margin-top: 50px;">
        <section class="panel">

            <div class="panel-container p-2">
                <div class="panel-content">

                    <div class="invoice">
                        <header class="clearfix mb-5">
                            <div class="text-center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/" class="btn btn-success my-2"><i class="fal fa-caret-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back'];?>
</a>
                                <br>
                                <div class="btn-group">
                                    <!-- View Pdf -->
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-primary"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a>
                                    <!-- Download Pdf -->
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/" class="btn btn-info"><i class="fal fa-file-pdf-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a>

                                    <!-- Accept -->
                                    <!-- <?php if (($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Accepted')) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q_accept/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accept'];?>
</a>
                                    <?php }?> -->

                                    <!-- Decline -->
                                    <!-- <?php if (($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Lost')) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q_decline/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Decline'];?>
</a>
                                    <?php }?> -->
                                </div>

                                <div class="hr-line-dashed"></div>
                            </div>
                        </header>

                        <style>
                            .invoice * {
                                font-size: 96%;
                            }
                        </style>

                        <div class="bill-info">
                            <div class="row">

                                <!-- Company info -->
                                <div class="col-6">
                                    <div class="bill-data">

                                        <!-- Logo -->
                                        <div class="ib">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" class="img-fluid" style="margin-bottom: 15px;">
                                        </div>

                                        <h4 class="h4 mb-0 mt-none text-dark"><b><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</b></h4>

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
                                                <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                <br>
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                <br>
                                            <?php }?>

                                            <!-- Address -->
                                            <?php if ($_smarty_tpl->tpl_vars['a']->value['address'] != '') {?>
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

                                            <?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

                                        </address>

                                    </div>
                                </div>

                                <!-- Quote number -->
                                <span class="h4 m-none text-dark text-bold mb-0">
                                    <b>
                                        <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {
echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?>
                                    </b>
                                </span>
                                
                                <!-- Quote date -->
                                <span class="m-none text-dark text-bold">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
:</strong>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['datecreated']));?>

                                </span>
                            </div>
                        </div>

                        <!-- Subject -->
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

                        <hr>
                        
                        <style>
                            #summary th,
                            #summary td,
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
                                        <th id="cell-item" class="text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service Ref'];?>
</th>
                                        <th id="cell-item" class="text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                        <th id="cell-qty" class="text-center text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
                                        <th id="cell-price" class="text-center text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PU Vente'];?>
</th>
                                        <th id="cell-price" class="text-center text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax'];?>
</th>
                                        <th id="cell-total" class="text-center text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                        <th id="cell-total" class="text-center text-decoration-underline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
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
                                            <td class="text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['ref'];?>
</td>
                                            <td class="text-dark">
                                                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
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

                        <!-- Summary -->
                        <div class="invoice-summary mb-3">
                            <div class="row" style="justify-content: right;" id="summary">
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
                                                    <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['discount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                                </tr>
                                            <?php }?>
                                            <tr>
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax'];?>
 (<?php echo round($_smarty_tpl->tpl_vars['d']->value['taxrate'],1);?>
%)</td>
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

        </section>
    </div>
<?php
}
}
/* {/block "content_body"} */
}
