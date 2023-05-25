<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:35:45
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/dashboard_pro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c991d8e257_36307007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62630ccbfa9e4164f2636d04962dbd9260dfd823' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/dashboard_pro.tpl',
      1 => 1673120144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c991d8e257_36307007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82843258163b9c991cb57d4_87642478', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46733455463b9c991cc1164_21586142', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12728105163b9c991d5b612_02278507', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_82843258163b9c991cb57d4_87642478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_82843258163b9c991cb57d4_87642478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }

        .text-info{
            color: #0152FF!important;
        }
        .text-success{
            color: #2CCE89!important;
        }

        .icon-shape {
            padding: 12px;
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .icon {
            width: 3rem;
            height: 3rem;
        }
        .text-white {
            color: #fff !important;
        }
        .text-white {
            color: #fff !important;
        }
        .shadow {
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
        }
        .rounded-circle, .avatar.rounded-circle img {
            border-radius: 50% !important;
        }
        .bg-gradient-red {
            background: linear-gradient(
                    87deg
                    , #f5365c 0, #f56036 100%) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(
                    87deg
                    , #2dce89 0, #2dcecc 100%) !important;
        }
        .bg-gradient-info {
            background: linear-gradient(
                    87deg
                    , #11cdef 0, #1171ef 100%) !important;
        }

        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_46733455463b9c991cc1164_21586142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_46733455463b9c991cc1164_21586142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">
        <div class="col-sm-3">
            <div class="card" style="background: #16254D">
                <div class="card-body text-center statistics-info">
                    <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    </div>

                    <h6 class="mt-4 mb-1 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total value of Active Orders'];?></h6>
                    <h2 class="mb-2 number-font text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_active_order_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?></h2>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="background: #16254D">
                <div class="card-body text-center statistics-info">
                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h6 class="mt-4 mb-1 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid Invoice Amount'];?>
</h6>
                    <h2 class="mb-2 number-font text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_paid_invoice_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h2>

                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card" style="background: #16254D">
                <div class="card-body text-center statistics-info">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
                    </div>
                    <h6 class="mt-4 mb-1 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Orders'];?>
</h6>
                    <h2 class="mb-2  number-font text-white"><?php echo $_smarty_tpl->tpl_vars['total_orders']->value;?>
</h2>

                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card" style="background: #16254D">
                <div class="card-body text-center statistics-info">
                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                    <h6 class="mt-4 mb-1 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Customers'];?>
</h6>
                    <h2 class="mb-2  number-font text-white"><?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>
</h2>
                </div>
            </div>
        </div>



    </div>

    <div class="row">
        <div class="col-lg-12">
            <div id="panel-1" class="panel" data-panel-lock="false" data-panel-close="false" data-panel-collapsed="false"  data-panel-locked="false" data-panel-refresh="false" data-panel-reset="false">
                <div class="panel-hdr">
                    <h2 class="fw-bolder">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>

                    </h2>

                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" data-bs-toggle="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Refresh'];?>
">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                        </a>
                    </div>

                </div>

                <div class="panel-container show">
                    <div class="panel-content border-left-0 border-right-0 border-top-0"

                            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                style="background: #232F47;"
                            <?php } else { ?>
                                style="background: #fff;"
                            <?php }?>

                    >
                        <div class="row no-gutters">

                            <div class="col-lg-4 col-xl-4">

                                <div class="p-8  mb-2 flex-grow-1" style="
                                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                        background: #232F47;
                                <?php } else { ?>
                                        background: #0152FF;
                                <?php }?>
                                        border-radius: 8px; padding: 26px 20px; margin-left:1rem; margin-right:1rem;
                                        box-shadow: 0 0.1rem 1rem 0.25rem rgb(0 0 0 / 5%);
                                        ">

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="symbol symbol-circle symbol-light-success symbol-40 flex-shrink-0 me-3">
                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg><!--end::Svg Icon--></span>                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_income']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                            <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="symbol symbol-circle symbol-light-danger symbol-40 flex-shrink-0 me-3">
                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right-square-fill" viewBox="0 0 16 16">
  <path d="M14 16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12zM5.904 5.197 10 9.293V6.525a.5.5 0 0 1 1 0V10.5a.5.5 0 0 1-.5.5H6.525a.5.5 0 0 1 0-1h2.768L5.197 5.904a.5.5 0 0 1 .707-.707z"/>
</svg>
                                    </span>                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_expense']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                            <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
</div>
                                        </div>
                                    </div>

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="symbol symbol-circle symbol-light-success symbol-40 flex-shrink-0 me-3">
                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#14B981" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
</svg>
                                </span>                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['income_today']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                            <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Today'];?>
</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="symbol symbol-circle symbol-light-warning symbol-40 flex-shrink-0 me-3">
                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>
                                    </span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['expense_today']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                            <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Today'];?>
</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="symbol symbol-circle symbol-light-primary symbol-40 flex-shrink-0 me-3">
                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#5046E4" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>
                                    </span>                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['income_this_month']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                            <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income This Month'];?>
</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-light-danger symbol-40 flex-shrink-0 me-3">
                                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
  <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
</svg>
                                    </span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h3 class="text-white"><?php echo formatCurrency($_smarty_tpl->tpl_vars['expense_this_month']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h3>
                                            <div class="font-size-sm text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense This Month'];?>
</div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="col-lg-8 col-xl-8">

                                <div class="position-relative">



                                    <div class="col-md-12 mt-3">
                                        <h3 class="mb-0">
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Orders'];?>

                                        </h3>
                                        <h5 class="mt-2"><?php echo __('Last 30 days');?>
 <?php echo formatCurrency($_smarty_tpl->tpl_vars['total_last_30_days']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>

                                        <div id="orders_chart"></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>



        </div>
    </div>


    <div id="panel-2" class="panel" data-panel-lock="false" data-panel-close="false" data-panel-collapsed="false"  data-panel-locked="false" data-panel-refresh="false" data-panel-reset="false">
        <div class="panel-hdr">
            <h2 class="fw-bolder">
                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Cash Flow'];?>

            </h2>

            <div class="panel-toolbar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" data-bs-toggle="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Refresh'];?>
">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                </a>
            </div>

        </div>

        <div class="panel-container show">
            <div class="panel-content border-left-0 border-right-0 border-top-0"

                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                        style="background: #232F47;"
                    <?php } else { ?>
                        style="background: #fff;"
                    <?php }?>

            >

                <div id="cash_flow_chart">

                </div>


            </div>
        </div>

    </div>






    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Tickets'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Update'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_tickets']->value, 'recent_ticket');
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_ticket']->value) {
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->id;?>
" class="font-weight-bold">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->id;?>
" class="font-weight-bold">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_ticket']->value->subject, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->userid;?>
/summary/">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_ticket']->value->account, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo cloudonex_get_ticket_status_with_badge(htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_ticket']->value->status, ENT_QUOTES, 'UTF-8', true));?>

                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['recent_ticket']->value->updated_at) {?>
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_ticket']->value->updated_at));?>

                                    <?php }?>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Orders'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Order</th>
                            <th>Domain</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_orders']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/order/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                </td>
                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_order']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                </td>
                                <td>
                                    <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

                                </td>
                            </tr>


                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_invoices']->value, 'recent_invoice');
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_invoice']->value) {
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->id;?>
/">
                                        <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_invoice']->value);?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->userid;?>
/summary/">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->account;?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_invoice']->value->status);?>

                                </td>
                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_invoice']->value->date));?>

                                </td>
                            </tr>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Clients'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>

                            </th>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>

                            </th>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>

                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_customers']->value, 'recent_customer');
$_smarty_tpl->tpl_vars['recent_customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_customer']->value) {
$_smarty_tpl->tpl_vars['recent_customer']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->id;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->account;?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->email;?>

                                </td>


                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['recent_customer']->value->created_at) {?>
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_customer']->value->created_at));?>

                                    <?php }?>
                                </td>
                            </tr>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_12728105163b9c991d5b612_02278507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12728105163b9c991d5b612_02278507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            let orders_chart_options = {
                chart: {
                    type: 'bar',
                    height: 360,
                    sparkline: {
                        enabled: true
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                series: [{
                    name: 'sales',
                    data: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders_for_chart']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ]
                }],
                xaxis: {
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders_for_chart']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
',
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    markers: {
                        strokeWidth: 3,
                        colors: "#ffffff",
                        strokeColors: [ '#387CFF' , '#f73164' ],
                        hover: {
                            size: 6,
                        }
                    },
                },
                yaxis: {
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                        bottom: 0,
                        top: 35
                    }
                },
                colors: [ '#387CFF' , '#f73164' ],
                fill: {
                    type: 'solid',
                },
                legend: {
                    show: false,
                },
                tooltip: {
                    x: {
                        format: 'MM'
                    },
                },
            };

            let chart = new ApexCharts(document.querySelector("#orders_chart"), orders_chart_options);
            chart.render();

            $.getJSON( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/json-income-vs-expense", function( data ) {
                var options1 = {
                    chart: {
                        fontFamily: 'Open Sans, sans-serif',
                        height: 400,
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                        foreColor: '#fff',
                        <?php }?>
                        toolbar: {
                            show: false
                        },
                        events: {
                            mounted: function(ctx, config) {
                                const highest1 = ctx.getHighestValueInSeries(0);
                                const highest2 = ctx.getHighestValueInSeries(1);

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                                    y: highest1,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
                                    y: highest2,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })
                            },
                        }
                    },
                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                    colors: ["#4586DB", "#C23C3E"],
                    <?php } else { ?>
                    colors: ["#387CFF", "#FB8141"],
                    <?php }?>

                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        width: [0, 2, 5],
                        curve: 'smooth'
                    },
                    fill: {
                        opacity: [0.5, 0.25, 1],
                        gradient: { shade: '#387CFF', shadeIntensity: .8, opacityFrom: .8, opacityTo: .25, stops: [0, 95, 100] }
                    },

                    markers: {
                        discrete: [{
                            seriesIndex: 0,
                            dataPointIndex: 7,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 5
                        }, {
                            seriesIndex: 2,
                            dataPointIndex: 11,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 4
                        }]
                    },
                    subtitle: {
                        text: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth'];?>
',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 35,
                        floating: false,
                        style: {
                            fontSize: '14px',
                            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                            color:  '#fff',
                            <?php } else { ?>
                            color:  '#565674',
                            <?php }?>
                        }
                    },
                    title: {
                        text: '<?php echo formatCurrency($_smarty_tpl->tpl_vars['net_worth']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 0,
                        floating: false,
                        style: {
                            fontSize: '25px',
                            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                            color:  '#fff',
                            <?php } else { ?>
                            color:  '#0e1726'
                            <?php }?>
                        },
                    },

                    series: [{
                        type: 'area',
                        name: 'Income',
                        data: data.Income,

                    }, {
                        type: 'area',
                        name: 'Expenses',
                        data: data.Expense,
                    }],
                    labels: data.Months,
                    xaxis: {


                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: 0,
                            offsetY: 5,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-xaxis-title',
                            },
                        }
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value, index) {
                                return (value / 1000) + 'K'
                            },
                            offsetX: -22,
                            offsetY: 0,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-yaxis-title',
                            },
                        }
                    },
                    grid: {
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                        borderColor: "#2B2C3F",
                        <?php } else { ?>
                        borderColor: "#f1f1f1",
                        <?php }?>
                        padding: {
                            top: 10
                        },
                        strokeDashArray: 4,
                        yaxis: {
                            lines: {
                                show: true
                            }
                        }

                    },
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right',
                        offsetY: -50,
                        fontSize: '16px',
                        fontFamily: 'Open Sans, sans-serif',
                        markers: {
                            width: 10,
                            height: 10,
                            strokeWidth: 0,
                            strokeColor: '#fff',
                            fillColors: undefined,
                            radius: 12,
                            onClick: undefined,
                            offsetX: 0,
                            offsetY: 0
                        },
                        itemMargin: {
                            horizontal: 0,
                            vertical: 20
                        }
                    },
                    tooltip: {
                        theme: 'dark',
                        marker: {
                            show: true,
                        },
                        x: {
                            show: false,
                        }
                    },
                    responsive: [{
                        breakpoint: 575,
                        options: {
                            legend: {
                                offsetY: -30,
                            },
                        },
                    }],
                    plotOptions: { bar: { horizontal: !1, columnWidth: "15%", endingShape: "rounded" } },
                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                    background: '#000',
                    foreColor: '#fff',
                    <?php }?>
                };


                var chart1 = new ApexCharts(
                    document.querySelector("#cash_flow_chart"),
                    options1
                );

                chart1.render();
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
