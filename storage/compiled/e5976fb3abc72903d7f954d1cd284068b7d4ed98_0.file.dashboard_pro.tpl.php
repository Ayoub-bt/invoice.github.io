<?php
/* Smarty version 4.3.0, created on 2023-05-05 05:20:42
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\hostbilling\admin\dashboard_pro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6454841a6e4a02_30783350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5976fb3abc72903d7f954d1cd284068b7d4ed98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\hostbilling\\admin\\dashboard_pro.tpl',
      1 => 1683251416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6454841a6e4a02_30783350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2497675896454841a6c32c7_40968767', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4134393456454841a6c4784_39562383', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4597364486454841a6db891_12419700', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_2497675896454841a6c32c7_40968767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2497675896454841a6c32c7_40968767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<style>
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #F7F9FC;
    }

    .h2,
    h2 {
        font-size: 1.25rem;
    }

    .text-info {
        color: #0152FF !important;
    }

    .text-success {
        color: #2CCE89 !important;
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

    .rounded-circle,
    .avatar.rounded-circle img {
        border-radius: 50% !important;
    }

    .bg-gradient-red {
        background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
    }

    .bg-gradient-success {
        background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
    }

    .bg-gradient-info {
        background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
    }

    .bg-gradient-blue {
        background: linear-gradient(90deg, rgba(10, 6, 68, 1) 0%, rgba(7, 13, 46, 1) 0%, rgba(41, 20, 110, 1) 44%, rgba(35, 10, 112, 1) 50%, rgba(69, 28, 144, 1) 100%, rgba(215, 246, 247, 1) 100%);
         !important;

    }

    .bg-gradient-pink {
        background: linear-gradient(90deg, rgba(10, 6, 68, 1) 0%, rgba(204, 147, 5, 1) 0%, rgba(189, 123, 10, 1) 100%, rgba(237, 227, 200, 1) 100%, rgba(240, 133, 219, 1) 100%, rgba(215, 246, 247, 1) 100%);

    }
</style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_4134393456454841a6c4784_39562383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4134393456454841a6c4784_39562383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row mb-3">

    <!-- Total quotes -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #002393">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow text-white" style="background: transparent; border: 1px solid #fff; font-weight: 600;">
                    <i class="fal fa-file"></i>
                </div>
                <h6 class="mt-4 mb-1 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Quotes'];?>
</h6>
                <h2 class="mb-2  number-font text-white"><?php echo $_smarty_tpl->tpl_vars['total_quotes']->value;?>
</h2>
            </div>
        </div>
    </div>

    <!-- Total invoices -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #ffc500">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow" style="color: #002393; background: transparent; border: 1px solid #002393; font-weight: 600;">
                    <i class="fal fa-file"></i>
                </div>
                <h6 class="mt-4 mb-1" style="color: #002393"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoices'];?>
</h6>
                <h2 class="mb-2  number-font" style="color: #002393"><?php echo $_smarty_tpl->tpl_vars['recent_invoices']->value->count();?>
</h2>
            </div>
        </div>
    </div>

    <!-- Total Paid Invoice Amount -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #002393">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow text-white" style="background: transparent; border: 1px solid #fff; font-weight: 600;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-clock">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h6 class="mt-4 mb-1 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid Invoice Amount'];?>
</h6>
                <h2 class="mb-2 number-font text-white">
                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['total_paid_invoice_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h2>

            </div>
        </div>
    </div>
    
    <!-- Total customers -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #ffc500">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow" style="color: #002393; background: transparent; border: 1px solid #002393; font-weight: 600;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <h6 class="mt-4 mb-1" style="color: #002393"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Customers'];?>
</h6>
                <h2 class="mb-2  number-font" style="color: #002393"><?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>
</h2>
            </div>
        </div>
    </div>

</div>

<style>
    #recent_posts th,
    #recent_posts td {
        padding: 5px;
        text-align: center;
    }
</style>

<div class="row mt-3" id="recent_posts">

    <!-- Recent Quotes -->
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body p-3">
                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Quotes'];?>
</h3>
                <div class="hr-line-dashed"></div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_quotes']->value, 'recent_quote');
$_smarty_tpl->tpl_vars['recent_quote']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_quote']->value) {
$_smarty_tpl->tpl_vars['recent_quote']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->invoicenum;
if ($_smarty_tpl->tpl_vars['recent_quote']->value->cn != '') {?> <?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->cn;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->id;?>
 <?php }?></a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->userid;?>
/summary/">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->account;?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->subject;?>

                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_quote']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['recent_quote']->value->datecreated) {?>
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_quote']->value->datecreated));?>

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

    <!-- Recent Invoices -->
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body p-3">
                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h3>
                <div class="hr-line-dashed"></div>
                <div class="table-responsive">
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
    </div>

    <!-- Recent Clients -->
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body p-3">
                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Clients'];?>
</h3>
                <div class="hr-line-dashed"></div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Client'];?>

                                </th>
                                <th>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>

                                </th>
                                <th>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>

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
                                    <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->company;?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->phone;?>

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

</div>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_4597364486454841a6db891_12419700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4597364486454841a6db891_12419700',
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
