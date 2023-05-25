<?php
/* Smarty version 4.3.0, created on 2023-05-05 17:38:09
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\hostbilling\admin\ps_modal_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645530f13ce8e5_36813035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df4e6187b60aad54b332ccb921213dd2ed451b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\hostbilling\\admin\\ps_modal_list.tpl',
      1 => 1683300932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645530f13ce8e5_36813035 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products n Services'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <table class="table table-striped table-bordered" id="modal_items_table">
                    <thead>
                    <tr>
                        <th width="10%">#</th>
                        <th width="55%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service Ref'];?>
</th>
                        <th width="55%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                        <th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_and_services']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td><input type="checkbox" class="si"></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->ref;?>
</td>
                            <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>

                            <br>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['item']->value->features), 'feature_line');
$_smarty_tpl->tpl_vars['feature_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_line']->value) {
$_smarty_tpl->tpl_vars['feature_line']->do_else = false;
?>
                                <span>- <?php echo $_smarty_tpl->tpl_vars['feature_line']->value;?>
</span>
                                <br>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </td>
                            <td class="price"><?php echo formatCurrency(get_pricing_term_first_price($_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>

                <div class="mb-3">
                    <button type="button" data-bs-dismiss="modal" class="btn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button class="btn btn-primary update"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select'];?>
</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
