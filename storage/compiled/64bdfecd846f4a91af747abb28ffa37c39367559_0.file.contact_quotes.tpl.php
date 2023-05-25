<?php
/* Smarty version 4.3.0, created on 2023-05-03 20:31:48
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\hostbilling\admin\contact_quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6452b6a4499427_61222800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64bdfecd846f4a91af747abb28ffa37c39367559' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\hostbilling\\admin\\contact_quotes.tpl',
      1 => 1683142082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6452b6a4499427_61222800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19756792496452b6a448e5d4_01914373', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_19756792496452b6a448e5d4_01914373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_19756792496452b6a448e5d4_01914373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quotes']->value, 'recent_quote');
$_smarty_tpl->tpl_vars['recent_quote']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_quote']->value) {
$_smarty_tpl->tpl_vars['recent_quote']->do_else = false;
?>

            <tr>
                <td>
                    <!-- <?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/ -->
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->id;?>
/">
                        <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_quote']->value);?>

                    </a>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->subject;?>

                </td>
                <td>
                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_quote']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                </td>
                <td>
                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_quote']->value->datecreated));?>

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
