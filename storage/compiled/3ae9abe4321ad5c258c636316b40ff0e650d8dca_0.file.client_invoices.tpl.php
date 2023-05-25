<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:35
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9c3651b74_45346265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae9abe4321ad5c258c636316b40ff0e650d8dca' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_invoices.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9c3651b74_45346265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170125170163b9c9c361c470_92586333', "account_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block "account_content"} */
class Block_170125170163b9c9c361c470_92586333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_170125170163b9c9c361c470_92586333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h5 class=" card-header-title mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h5>
        <div class="card shadow mb-3">

            <div class="card-body">


                <div class="table-responsive">

                    <table class="table table-hover  sys_table">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                            </th>
                                                        <th class="text-end" width="100px"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr>
                                <td><a target="_blank"
                                       href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a>
                                </td>
                                                                <td class="amount h6"
                                    data-a-sign="<?php if ($_smarty_tpl->tpl_vars['ds']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                                <td>

                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                        <span class="badge badge-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
                                        <span class="badge badge-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Partially Paid') {?>
                                        <span class="badge badge-info"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
                                        <span class="label"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                    <?php } else { ?>
                                        <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

                                    <?php }?>


                                </td>
                                                                                                                                                                                                                                                                <td class="text-center">
                                    <div class="btn-group">
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/"
                                           class="btn btn-primary btn-xs"><i class="fal fa-check"></i> </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/dl/"
                                           class="btn btn-warning btn-xs "><i class="fal fa-file"></i> </a>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/"
                                           class="btn btn-danger btn-xs"><i class="fal fa-print"></i> </a>

                                    </div>
                                </td>

                            </tr>
                            <?php
}
if ($_smarty_tpl->tpl_vars['ds']->do_else) {
?>
                            <tr>
                                <td colspan="8">
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

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
/* {/block "account_content"} */
}
