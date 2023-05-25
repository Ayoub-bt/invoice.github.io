<?php
/* Smarty version 4.3.0, created on 2023-05-01 19:57:05
  from '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/invoices_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645051d11b8d12_30206626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c104f4a08071e356058d1e04b3f5284069e2b1d4' => 
    array (
      0 => '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/invoices_filter.tpl',
      1 => 1682984910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645051d11b8d12_30206626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371578176645051d1192162_18502722', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1653090532645051d11b7058_77387714', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_371578176645051d1192162_18502722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_371578176645051d1192162_18502722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'credit-notes') {?>
                <h2><?php echo __('Credit Notes');?>
</h2>
            <?php } else { ?>
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>
            <?php }?>


            <div class="panel-toolbar">
                <div class="btn-group">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'credit-notes') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/credit-note" class="btn btn-primary  btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Credit Note'];?>
</a>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/" class="btn btn-primary  btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Invoice'];?>
</a>
                    <?php }?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices/" class="btn btn-warning btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View Reports'];?>
</a>
                </div>
            </div>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <div class="row">
                                
                    <!-- Invoices - Paid -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2" style="background: linear-gradient(87deg,#2dce89 0,#2dcecc 100%)!important;border-radius: .375rem; min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">

                                    <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_paid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                </h3>
                                <small class="h5  mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
%;" class="progress-bar bg-info"></span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Invoices - Unpaid -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2" style="background: linear-gradient(87deg,#f5365c 0,#f56036 100%)!important;    border-radius: .375rem;min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">
                                    <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_unpaid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                </h3>
                                <small class="h5 mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%;" class="progress-bar  bg-success">
                                        <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%</span>
                                    </span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Invoices - Partially Paid -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#5e72e4 0,#825ee4 100%)!important;    border-radius: .375rem; rgba(0,0,0,.05); min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">
                                    <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_partially_paid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                </h3>
                                <small class="h5 mb-0 text-white""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%;" class="progress-bar  bg-success">
                                        <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%</span>
                                    </span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Invoices - Cancelled -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#172b4d 0,#1a174d 100%)!important;   border-radius: .375rem;min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">
                                    <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_cancelled_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                </h3>
                                <small class="h5  mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%;" class="progress-bar bg-success">
                                        <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%</span>
                                    </span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['action']->value !== 'credit-notes') {?>
                    <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/unpaid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/partially_paid/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/paid/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/cancelled/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/all/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>
                    </ul>
                <?php }?>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <!-- Date Range -->
                                    <div class="mb-3">
                                        <label for="reportrange"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Range'];?>
</label>
                                        <input type="text" name="reportrange" class="form-control" id="reportrange">
                                    </div>

                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label for="payment_status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>
                                        <select class="form-select" name="status" id="payment_status">
                                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</option>
                                            <option value="Paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</option>
                                            <option value="Unpaid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</option>
                                            <option value="Partially Paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</option>
                                            <option value="Cancelled"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</option>

                                        </select>
                                    </div>

                                    <!-- Invoice Group -->
                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_group'])) {?>
                                        <div class="mb-3">
                                            <label for="invoice_group_id"><?php echo __('Group');?>
</label>
                                            <select class="form-select" id="invoice_group_id" name="invoice_group_id">
                                                <option value="0"><?php echo __('None');?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoice_groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected_group_id']->value == $_smarty_tpl->tpl_vars['group']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>

                                    <!-- Invoice single service -->
                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_single_service'])) {?>
                                        <div class="mb-3">
                                            <label for="invoice_single_service_id"><?php echo __('Service');?>
</label>
                                            <select class="form-select" id="invoice_single_service_id" name="service_id">
                                                <option value="0"><?php echo __('None');?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value->name;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>

                                    <!-- Staff -->
                                    <!-- <div class="mb-3">
                                        <label for="staff_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</label>
                                        <select class="form-select" name="staff_id" id="staff_id">
                                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['staff']->value['fullname'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div> -->

                                    <!-- Purchase Status -->
                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>
                                        <div class="mb-3">
                                            <label for="purchase_status"><?php echo __('Purchase Status');?>
</label>
                                            <select class="form-select" name="purchase_status" id="purchase_status">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</option>
                                                <option value="Purchased"><?php echo __('Purchased');?>
</option>
                                                <option value="On Hold"><?php echo __('On Hold');?>
</option>
                                                <option value="Arrived"><?php echo __('Arrived');?>
</option>
                                                <option value="Collected"><?php echo __('Collected');?>
</option>
                                            </select>
                                        </div>
                                    <?php }?>

                                    <!-- Shipping Status -->
                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>
                                        <div class="mb-3">
                                            <label for="shipping_status"><?php echo __('Shipping Status');?>
</label>
                                            <select class="form-select" name="shipping_status" id="shipping_status">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</option>
                                                <option value="Purchased"><?php echo __('In Progress');?>
</option>
                                                <option value="Shipped"><?php echo __('Shipped');?>
</option>
                                            </select>
                                        </div>
                                    <?php }?>

                                    <!-- Customer -->
                                    <div class="mb-3">
                                        <label for="customer"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                                        <select class="form-select" name="customer" id="customer">
                                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'customer');
$_smarty_tpl->tpl_vars['customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value['account'];?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <!-- Customer Group -->
                                    <div class="mb-3">
                                        <label for="group_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Group'];?>
</label>
                                        <select class="form-select" name="group_id" id="group_id">
                                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['gname'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <input type="hidden" name="type" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">

                                    <!-- Filter button -->
                                    <button type="submit" id="sp_filter" class="btn btn-primary"><?php echo __('Filter');?>
</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body" id="result_div">

                            </div>
                        </div>
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
class Block_1653090532645051d11b7058_77387714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1653090532645051d11b7058_77387714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>



        $(function () {

            let $app = $('#cloudonex_body');

            let $customer = $('#customer').select2();

            var start = moment().subtract(29, 'days');
            var end = moment();



            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            var $reportrange = $("#reportrange");

            $reportrange.daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    format: 'YYYY/MM/DD'
                }
            }, cb);

            cb(start, end);

            let $result_div = $('#result_div');


            function loadResult() {

                $result_div.html('<img src="<?php echo APP_URL;?>
/storage/system/fsubmit.gif">');

                let $form = $('form');
                let data = $form.serialize();

                $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/filter', data, function (data) {
                    $result_div.html(data);
                });
            }

            loadResult();

            $('#sp_filter').on('click', function (e) {
                e.preventDefault();

                loadResult();

            });

            $app.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                app.confirm("<?php echo __('are_you_sure');?>
", function(result) {
                    if(result){
                        window.location.href = base_url + "delete/invoice/" + id;
                    }
                });


            });


        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
