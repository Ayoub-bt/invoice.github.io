<?php
/* Smarty version 4.3.0, created on 2023-05-03 19:04:56
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\hostbilling\admin\contact_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6452a24810d6f4_76768109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8c82898de5e8eb74f70d3a31aede58dc2d01f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\hostbilling\\admin\\contact_orders.tpl',
      1 => 1682984960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6452a24810d6f4_76768109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12209885516452a248103021_55472802', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_12209885516452a248103021_55472802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_12209885516452a248103021_55472802',
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
