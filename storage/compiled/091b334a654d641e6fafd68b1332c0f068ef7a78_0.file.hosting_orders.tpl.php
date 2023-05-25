<?php
/* Smarty version 4.3.0, created on 2023-01-01 04:28:57
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/hosting_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b15259e5b818_79003842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '091b334a654d641e6fafd68b1332c0f068ef7a78' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/hosting_orders.tpl',
      1 => 1670858173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b15259e5b818_79003842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186312773063b15259e25bb6_83708752', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194158201963b15259e53bd5_73677614', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_186312773063b15259e25bb6_83708752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_186312773063b15259e25bb6_83708752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="subheader">
        <h2 class="subheader-title">
            <i class='subheader-icon fal fa-database'></i>
            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hosting Orders'];?>
</strong>

        </h2>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-striped w-100 sys_table">
                                <thead style="background: #f0f2ff">
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
                                                <span class="badge bg-success">Approved</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Fraud') {?>
                                                <span class="badge bg-danger">Fraud</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Pending') {?>
                                                <span class="badge bg-primary">Pending</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Cancelled') {?>
                                                <span class="badge bg-secondary">Cancelled</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status === 'Expired') {?>
                                                <span class="badge bg-warning">Expired</span>
                                            <?php } else { ?>
                                                <span class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['order']->value->status;?>
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
/* {/block "content"} */
/* {block 'script'} */
class Block_194158201963b15259e53bd5_73677614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_194158201963b15259e53bd5_73677614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
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
