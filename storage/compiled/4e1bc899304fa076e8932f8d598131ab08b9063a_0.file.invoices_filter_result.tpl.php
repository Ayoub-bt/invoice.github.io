<?php
/* Smarty version 4.3.0, created on 2023-05-05 08:03:31
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\invoices_filter_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6454aa436cc911_22568320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e1bc899304fa076e8932f8d598131ab08b9063a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\invoices_filter_result.tpl',
      1 => 1683270209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6454aa436cc911_22568320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row mb-3">
    <div class="col">
        <?php if ($_smarty_tpl->tpl_vars['type']->value == 'credit-notes') {?>

            <h2><?php echo __('Credit Notes');?>
</h2>

        <?php } else { ?>

            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>


        <?php }?>
    </div>
            
        
                </div>

<style>
    #clx_datatable th,
    #clx_datatable td {
        padding: 5px;
    }
</style>

<div class="table-responsive">
    <table id="clx_datatable" class="table table-striped">
        <thead style="background: #f0f2ff">
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_group'])) {?>
                <th>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>

                </th>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_single_service'])) {?>
                <th>
                    <?php echo __('Service');?>

                </th>
            <?php }?>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
            <th>
                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

            </th>
            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>
                <th><?php echo __('Purchase Status');?>
</th>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>
                <th><?php echo __('Shipping Status');?>
</th>
            <?php }?>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
            <th class="text-end" width="140px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
            <tr>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['invoice']->value->invoicenum;
if ($_smarty_tpl->tpl_vars['invoice']->value->cn != '') {?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value->cn;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
 <?php }?></a> </td>
                <td>
                    <?php if ((isset($_smarty_tpl->tpl_vars['customers']->value[$_smarty_tpl->tpl_vars['invoice']->value->id]))) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/">
                            <strong>
                                <?php echo $_smarty_tpl->tpl_vars['invoice']->value->account;?>

                                <?php if ($_smarty_tpl->tpl_vars['customers']->value[$_smarty_tpl->tpl_vars['invoice']->value->userid]->company != '') {?>
                                    <br>  <?php echo $_smarty_tpl->tpl_vars['customers']->value[$_smarty_tpl->tpl_vars['invoice']->value->userid]->company;?>

                                <?php }?>
                            </strong>
                        </a>
                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['invoice']->value->account)) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/">
                            <strong>
                                <?php echo $_smarty_tpl->tpl_vars['invoice']->value->account;?>

                            </strong>
                        </a>
                    <?php }?>
                </td>

                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_group'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['invoice_groups']->value[$_smarty_tpl->tpl_vars['invoice']->value->group_id])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['invoice_groups']->value[$_smarty_tpl->tpl_vars['invoice']->value->group_id]->name;?>

                        <?php }?>
                    </td>
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_single_service'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['invoice']->value->service_id])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['invoice']->value->service_id]->name;?>

                        <?php }?>
                    </td>
                <?php }?>

                <td>
                    <?php if (!empty($_smarty_tpl->tpl_vars['invoice']->value->title)) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/">
                            <?php echo $_smarty_tpl->tpl_vars['invoice']->value->title;?>

                        </a>
                    <?php }?>
                </td>
                <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice']->value->total,$_smarty_tpl->tpl_vars['invoice']->value->currency_iso_code);?>
</td>
                <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['invoice']->value->date);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['invoice']->value->date));?>
</td>
                <td>

                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Unpaid') {?>
                        <span class="badge bg-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Paid') {?>
                        <span class="badge bg-primary"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Partially Paid') {?>
                        <span class="badge bg-warning"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Cancelled') {?>
                        <span class="badge bg-secondary"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                    <?php } else { ?>
                        <span class="badge bg-info text-white"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                    <?php }?>



                </td>



                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['invoice']->value->purchase_status)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['invoice']->value->purchase_status == 'Purchased') {?>
                                <span class="badge bg-success text-white"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->purchase_status);?>
</span>
                            <?php } else { ?>
                                <span class="badge bg-info text-white"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->purchase_status);?>
</span>
                            <?php }?>
                        <?php }?>
                    </td>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['invoice']->value->shipping_status)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['invoice']->value->shipping_status == 'Shipped') {?>
                                <span class="badge bg-success text-white"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->shipping_status);?>
</span>
                            <?php } else { ?>
                                <span class="badge bg-info text-white"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->shipping_status);?>
</span>
                            <?php }?>
                        <?php }?>
                    </td>
                <?php }?>

                <td>
                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value->r == '0') {?>
                        <span class="badge bg-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Onetime'];?>
</span>
                    <?php } else { ?>
                        <span class="badge bg-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
</span>
                    <?php }?>
                </td>
                <td class="text-end">


                    <div class="btn-group">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-primary btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file-alt"></i></a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/clone/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-success btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fal fa-copy"></i></a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-file-edit"></i></a>

                        <?php if ($_smarty_tpl->tpl_vars['invoice']->value['r'] != '0') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/stop_recurring/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Stop Recurring'];?>
"><i class="fal fa-stop"></i></a>
                        <?php }?>
                        
                        <a href="#" class="btn btn-danger btn-icon cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>
                    </div>


                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>

    </table>
</div>
<?php }
}
