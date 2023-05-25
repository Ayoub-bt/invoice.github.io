<?php
/* Smarty version 4.3.0, created on 2023-05-05 17:16:35
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\client-iview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64552be31e0141_67718178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ca54185415de09e162bdd97913f1d7fb8ba3e1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\client-iview.tpl',
      1 => 1683302618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64552be31e0141_67718178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
 - <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></title>

    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-32','icon-32x32.png');?>
" sizes="32x32" />
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-192','icon-192x192.png');?>
" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-180','icon-180x180.png');?>
" />
    <meta name="msapplication-TileImage" content="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-270','icon-270x270.png');?>
" />

    <?php if (APP_STAGE == 'Dev') {?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/ui/theme/default/css/app-rtl.min.css?v=<?php ob_start();
echo _raid();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/ui/theme/default/css/app.min.css?v=<?php ob_start();
echo _raid();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
">
        <?php }?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=<?php ob_start();
echo _raid();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" rel="stylesheet">
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/ui/theme/default/css/app-rtl.min.css?v=2">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/ui/theme/default/css/app.min.css?v=2">
        <?php }?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=13" rel="stylesheet">
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31152218464552be31a3653_29478131', 'style');
?>


    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['config']->value['header_scripts'];?>


    <style type="text/css">
        body {
            background-color: #e9ebee;
            overflow-x: visible;
        }
        .paper {
            margin: 20px auto;
            max-width: 980px;
            background-color: #FFF;
            position: relative;
        }

        .fancybox-slide--iframe .fancybox-content {
            width  : 600px;
            max-width  : 80%;
            max-height : 80%;
            margin: 0;
        }
        .panel {
            /*box-shadow: none;*/
            -webkit-box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
            box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
        }

        .panel-body {
            padding: 25px;
        }

        <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>

            .StripeElement {
                background-color: white;
                height: 40px;
                padding: 10px 12px;
                border-radius: 4px;
                border: 1px solid transparent;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
            }

            .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
            }

            .StripeElement--invalid {
                border-color: #fa755a;
            }

            .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
            }

        <?php }?>

        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }

    </style>

    <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>
        <?php echo '<script'; ?>
 src="https://js.stripe.com/v3/"><?php echo '</script'; ?>
>
    <?php }?>

</head>

<body class="fixed-nav">

    <div class="paper">
        <section class="panel">
            <div class="panel-body">
                <div class="invoice">
                    
                    <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                    <?php }?>

                    <header class="clearfix">

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="text-center">

                                    <!-- Back button -->
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-success my-2"><i class="fal fa-caret-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back'];?>
</a>
                                    <br>

                                    <?php if ($_smarty_tpl->tpl_vars['has_login_token']->value) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/" class="btn btn-primary ml-sm no-shadow no-border"><i class="fal fa-long-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back to Client Area'];?>
</a>
                                    <?php }?>

                                    <div class="btn-group">
                                        <!-- View Pdf -->
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" class="btn btn-primary"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a>
                                        
                                        <!-- Download Pdf -->
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/" class="btn btn-info"><i class="fal fa-file-pdf-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                            </div>
                        </div>

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
echo $_smarty_tpl->tpl_vars['d']->value['cn'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?>
                                    </b>
                                </span>
                                
                                <!-- Quote date -->
                                <p class="m-none text-dark text-bold">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
:</strong>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>

                                </p>
                            </div>
                        </div>
                    </header>

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
                            <tbody style="border-top: 0">
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

                    <!-- Summary -->
                    <div class="invoice-summary">
                        <div class="row" style="justify-content: right;">
                            <div class="col-6 offset-md-8 ">
                                <table class="table h5 text-dark" id="summary">
                                    <tbody>
                                    <tr class="b-top-none">
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
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
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
</td>
                                        <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['tax'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                    </tr>

                                    <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                        <tr>
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</td>
                                            <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</td>
                                            <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['d']->value['credit'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                        </tr>

                                        <?php if ($_smarty_tpl->tpl_vars['i_due']->value > 0) {?>
                                            <tr class="h4">
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
                                                <td class="text-left"><?php echo number_format($_smarty_tpl->tpl_vars['i_due']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
</td>
                                            </tr>
                                        <?php }?>

                                    <?php }?>

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

                </div>

                <!-- Notes -->
                <?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) != '') {?>
                    <div class="well m-t">
                    <h6 style="text-decoration: underline; margin-bottom: 0;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Terms'];?>
</h6>
                        <?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>

                    </div>
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['invoice_append_footer']->value)) {?>
                    <div class="hr-line-dashed"></div>
                    <div class="my-3">
                        <?php echo $_smarty_tpl->tpl_vars['invoice_append_footer']->value;?>

                    </div>
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'])) && $_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'] == 1) {?>

                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="signaturePadArea">

                            </div>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4><?php echo __('Sign above');?>
</h4>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" id="clearSignature" class="btn btn-danger btn-sm"><?php echo __('Clear signature');?>
</button>
                        </div>
                    </div>

                <?php }?>

            </div>
        </section>
    </div>

    <input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
    <input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['df'];?>
">
    <input type="hidden" id="_lan" name="_lan" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['language'];?>
">

    <?php echo '<script'; ?>
>
        var _L = [];
        _L['Save'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
";
        _L['Submit'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
";
        _L['Loading'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Loading'];?>
";
        _L['Media'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Media'];?>
";
        _L['OK'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
";
        _L['Cancel'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
";
        _L['Close'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
";
        _L['Close'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
";
        _L['are_you_sure'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
";
        _L['Saved Successfully'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successful"y'];?>
';
        _L['Empty'] = "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Empty'];?>
";

        var app_url = '<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
';
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';

        <?php if (($_smarty_tpl->tpl_vars['config']->value['animate']) == '1') {?>
        var config_animate = 'Oui';
        <?php } else { ?>
        var config_animate = 'Non';
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['jsvar']->value;?>

    <?php echo '</script'; ?>
>

    <?php if (APP_STAGE == 'Dev') {?>
        <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/ui/theme/default/js/app.min.js?v=<?php echo _raid();?>
"><?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
/ui/theme/default/js/app.min.js?v=2"><?php echo '</script'; ?>
>
    <?php }?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98212471264552be31d90f5_48904837', 'script');
?>


    <?php echo '<script'; ?>
>
        $(function () {
            $('.amount').autoNumeric('init');
        });
    <?php echo '</script'; ?>
>

    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'])) && $_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'] == 1) {?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/jSignature.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>



            $(function () {

                var $signaturePadArea = $("#signaturePadArea");

                $signaturePadArea.jSignature({
                    color:"#000",


                });

                <?php if ($_smarty_tpl->tpl_vars['d']->value['signature_data_base64'] != '') {?>

                $signaturePadArea.jSignature("setData","<?php echo $_smarty_tpl->tpl_vars['d']->value['signature_data_base64'];?>
");

                <?php }?>

                $signaturePadArea.bind('change', function(e){
                    var signData = $signaturePadArea.jSignature("getData");
                    $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/save-invoice-signature", {
                        invoice_id: '<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
',
                        view_token: '<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
',
                        signData: signData,
                    });
                });


                $('#clearSignature').on('click',function () {
                    $signaturePadArea.jSignature("reset");
                });



            });
        <?php echo '</script'; ?>
>

    <?php }?>

    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            // initiate layout and plugins

            var $paymentGateway = $('#paymentGateway');

            <?php if ((isset($_smarty_tpl->tpl_vars['xjq']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

            <?php }?>

            if(document.getElementById('btnPayNow'))
                {
                    $('#btnPayNow').on('click',function (e) {
                        <?php echo $_smarty_tpl->tpl_vars['plugin_extra_js']->value;?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>
                        $stripeDiv = $('#stripeDiv');

                        if($paymentGateway.val() === 'stripe')
                            {
                                e.preventDefault();

                                $stripeDiv.show('slow');
                            }
                        <?php }?>
                    });

                    <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>

                        // Create a Stripe client.
                        var stripe = Stripe('<?php echo $_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']['value'];?>
');

                        // Create an instance of Elements.
                        var elements = stripe.elements();

                        // Custom styling can be passed to options when creating an Element.
                        // (Note that this demo uses a wider set of styles than the guide below.)
                        var style = {
                            base: {
                                color: '#32325d',
                                lineHeight: '18px',
                                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                fontSmoothing: 'antialiased',
                                fontSize: '16px',
                                '::placeholder': {
                                    color: '#aab7c4'
                                }
                            },
                            invalid: {
                                color: '#fa755a',
                                iconColor: '#fa755a'
                            }
                        };

                        // Create an instance of the card Element.
                        var card = elements.create('card', { style: style });

                        // Add an instance of the card Element into the `card-element` <div>.
                        card.mount('#card-element');

                        // Handle real-time validation errors from the card Element.
                        card.addEventListener('change', function(event) {
                            var displayError = document.getElementById('card-errors');
                            if (event.error) {
                                displayError.textContent = event.error.message;
                            } else {
                                displayError.textContent = '';
                            }
                        });

                        // Handle form submission.
                        var form = document.getElementById('payment-form');
                        var $btnStripeSubmit = $('#btnStripeSubmit');
                        form.addEventListener('submit', function(event) {
                            event.preventDefault();
                            $btnStripeSubmit.prop('disabled',true);
                            stripe.createToken(card).then(function(result) {
                                if (result.error) {
                                    // Inform the user if there was an error.
                                    var errorElement = document.getElementById('card-errors');
                                    errorElement.textContent = result.error.message;
                                    $btnStripeSubmit.prop('disabled',false);
                                } else {
                                    // Send the token to your server.
                                    stripeTokenHandler(result.token);

                                }
                            });
                        });

                        // Submit the form with the token ID.
                        function stripeTokenHandler(token) {
                            // Insert the token ID into the form so it gets submitted to the server
                            var form = document.getElementById('payment-form');
                            var hiddenInput = document.createElement('input');
                            hiddenInput.setAttribute('type', 'hidden');
                            hiddenInput.setAttribute('name', 'stripeToken');
                            hiddenInput.setAttribute('value', token.id);
                            form.appendChild(hiddenInput);

                            // Submit the form
                            form.submit();
                        }

                    <?php }?>
                }
        });
    <?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['config']->value['footer_scripts'];?>

</body>

</html><?php }
/* {block 'style'} */
class Block_31152218464552be31a3653_29478131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_31152218464552be31a3653_29478131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'script'} */
class Block_98212471264552be31d90f5_48904837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_98212471264552be31d90f5_48904837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'script'} */
}
