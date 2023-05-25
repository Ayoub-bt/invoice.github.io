<?php
/* Smarty version 4.3.0, created on 2023-05-02 20:36:48
  from '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/hostbilling/admin/contact_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6451665020d997_22861040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e27e47b98fe6b51fa46637fe5c113279b8ec1eb9' => 
    array (
      0 => '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/hostbilling/admin/contact_orders.tpl',
      1 => 1682984960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6451665020d997_22861040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_559171398645166501ffd47_47000552', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_559171398645166501ffd47_47000552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_559171398645166501ffd47_47000552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>


        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/order/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['recent_order']->value->tracking_id;?>

                    </a>
                </td>
                <td>
                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['recent_order']->value->total;?>

                </td>
                <td>
                    <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

                </td>
            </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </tbody>
    </table>


<?php
}
}
/* {/block "inner_content"} */
}
