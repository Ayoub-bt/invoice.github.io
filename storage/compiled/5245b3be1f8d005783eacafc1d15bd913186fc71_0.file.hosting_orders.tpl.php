<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:33
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/hosting_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9c1dc9296_22336443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5245b3be1f8d005783eacafc1d15bd913186fc71' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/hosting_orders.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9c1dc9296_22336443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27215758163b9c9c1d9b055_20465814', 'account_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block 'account_content'} */
class Block_27215758163b9c9c1d9b055_20465814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_27215758163b9c9c1d9b055_20465814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <h5 class="mb-3"><?php ob_start();
echo __('Hosting Orders');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h5>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">


                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-hover w-100 sys_table">
                                <thead class="table-light">
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</th>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                    <th>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>

                                    </th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->iteration = 0;
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
$_smarty_tpl->tpl_vars['order']->iteration++;
$__foreach_order_0_saved = $_smarty_tpl->tpl_vars['order'];
?>
                                    <tr>
                                        <td data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['order']->iteration;?>
">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['order']->value->tracking_id;?>
</a>
                                        </td>

                                        <td>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['invoices']->value[$_smarty_tpl->tpl_vars['order']->value->invoice_id]))) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['order']->value->invoice_id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['invoices']->value[$_smarty_tpl->tpl_vars['order']->value->invoice_id]->vtoken;?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['invoices']->value[$_smarty_tpl->tpl_vars['order']->value->invoice_id]->invoicenum;
echo $_smarty_tpl->tpl_vars['invoices']->value[$_smarty_tpl->tpl_vars['order']->value->invoice_id]->cn;?>

                                                </a>
                                            <?php }?>
                                        </td>
                                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['order']->value->date);?>
">
                                            <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['order']->value->date));?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->domain;?>

                                        </td>
                                        <td>

                                            <?php if ($_smarty_tpl->tpl_vars['order']->value->status === 'Approved') {?>
                                                <span class="badge badge-success">Approved</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Fraud') {?>
                                                <span class="badge badge-danger">Fraud</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Pending') {?>
                                                <span class="badge badge-primary">Pending</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Cancelled') {?>
                                                <span class="badge badge-secondary">Cancelled</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Expired') {?>
                                                <span class="badge badge-secondary">Expired</span>
                                            <?php } else { ?>
                                                <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['order']->value->status;?>
</span>
                                            <?php }?>


                                        </td>


                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>



                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block 'account_content'} */
}
