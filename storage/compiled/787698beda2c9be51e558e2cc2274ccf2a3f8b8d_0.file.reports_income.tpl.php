<?php
/* Smarty version 4.3.0, created on 2023-04-28 19:35:02
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\reports_income.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c582652ca46_32111970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '787698beda2c9be51e558e2cc2274ccf2a3f8b8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\reports_income.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c582652ca46_32111970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1438067014644c582645df88_84599134', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182634621644c582645f179_51615264', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10796761644c582651cde2_84372225', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1438067014644c582645df88_84599134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1438067014644c582645df88_84599134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_182634621644c582645f179_51615264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_182634621644c582645f179_51615264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Reports'];?>
 </h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">
                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Summary'];?>
</h4>


                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                            <div class="">
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['total_income_all_time']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
</small>
                                </h5>
                                <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>


                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                            <div class="details">
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo formatCurrency(Transaction::totalAmount('Income',0,'current_month',$_smarty_tpl->tpl_vars['all_data']->value),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income This Month'];?>
 </small>
                                </h5>
                                <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>


                            </div>
                        </div>


                    </div>


                </div>




                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3 bg-primary-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo formatCurrency(Transaction::totalAmount('Income',0,'last_30_days',$_smarty_tpl->tpl_vars['all_data']->value),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income Last 30 days'];?>
  </small>
                                </h5>
                                <i class="fal fa-credit-card position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo formatCurrency(Transaction::totalAmount('Income',0,'current_week',$_smarty_tpl->tpl_vars['all_data']->value),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income This Week'];?>
  </small>
                                </h5>
                                <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-striped w-100" id="clx_datatable">

                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                            <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</th>

                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>

                            <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                        </tr>
                        </thead>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a class="fw-bold" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['type']);?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['category'] == 'Uncategorized') {
echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['category'];?>
 <?php }?></td>
                                <td>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['payerid']) && !empty($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['payerid']])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['payerid'];?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['payerid']]['account'];?>
</a>
                                    <?php }?>
                                </td>
                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['amount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['payer'];?>
</td>



                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>

                                <td>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['ds']->value['item_id']])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['ds']->value['item_id']]['name'];?>

                                    <?php }?>
                                </td>

                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['cr'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>


                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </table>

                </div>



                <div id="income_by_month"></div>
                <hr>

                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income by Category'];?>
</h4>

                <div id="category_pie_chart"></div>

            </div>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_10796761644c582651cde2_84372225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_10796761644c582651cde2_84372225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {

            $('.amount').autoNumeric('init', {


                dGroup: 3,
                aPad: true,
                pSign: 'p',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });


           // var myChart = echarts.init(document.getElementById('placeholder'));

            // specify chart configuration item and data


            var income_by_months = {
                chart: { height: 500, type: "area", zoom: { enabled: !1 } },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                dataLabels: { enabled: !1 },
                stroke: { curve: "straight" },
                series: [{ name: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Income'];?>
", data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['d']->value['value'];?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>] }],
                title: { text: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports by Month'];?>
", align: "left"},
                grid: { row: { colors: ["#f3f3f3", "transparent"], opacity: .5 } },
                xaxis: { categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        "<?php echo $_smarty_tpl->tpl_vars['d']->value['month'];?>
",
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ] },
                yaxis: { tickAmount: 5 }
            };

            new ApexCharts(document.querySelector("#income_by_month"), income_by_months).render();


            var category_pie_chart_options = {
                chart: { type: "donut", height: 500 },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                labels: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                    '<?php echo $_smarty_tpl->tpl_vars['d']->value['category'];?>
',
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                series: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['d']->value['value'];?>
,
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                legend: { itemMargin: { horizontal: 2 } },
                responsive: [ { breakpoint: 576, options: { chart: { width: 300 }, legend: { position: "bottom" } } }]
            };

            new ApexCharts(document.querySelector("#category_pie_chart"), category_pie_chart_options).render();

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger-light btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success-light btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary-light btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-info-light btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary-light btn-sm'
                        }
                    ],
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );


        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
