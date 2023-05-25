<?php
/* Smarty version 4.3.0, created on 2023-05-02 20:36:51
  from '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/hostbilling/admin/contact_quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64516653ba2578_77908501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23bd1d0aed0b4cf30e38586f7342202021e02078' => 
    array (
      0 => '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/hostbilling/admin/contact_quotes.tpl',
      1 => 1682984960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64516653ba2578_77908501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138485471864516653b96446_68358834', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_138485471864516653b96446_68358834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_138485471864516653b96446_68358834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quotes']->value, 'recent_quote');
$_smarty_tpl->tpl_vars['recent_quote']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_quote']->value) {
$_smarty_tpl->tpl_vars['recent_quote']->do_else = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/view/7/<?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->id;?>
">
                        <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_quote']->value);?>

                    </a>
                </td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->userid;?>
/summary/">
                        <?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->account;?>

                    </a>
                </td>
                <td>
                    <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_quote']->value->status);?>

                </td>
                <td>
                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_quote']->value->created_at));?>

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
