<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:36
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9c451e8b4_05410839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee6c79eff9b0767b08bef356346afe42416ad38' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_quotes.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9c451e8b4_05410839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186447146263b9c9c44ff7c5_91086069', "account_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block "account_content"} */
class Block_186447146263b9c9c44ff7c5_91086069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_186447146263b9c9c44ff7c5_91086069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h5 class="card-header-title mb-3"><?php echo __('Quotes');?>
</h5>
        <div class="card shadow mb-3">

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover sys_table">
                        <thead class="table-light">
                        <tr>

                            <th width="30%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</th>
                            
                            <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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

                                <td class="h5"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</a> </td>
                                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['datecreated']));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['validuntil']));?>
</td>


                                <td class="text-end">
                                    <div class="btn-group">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank" class="btn btn-primary"><i class="fal fa-check"></i></a>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/dl/" class="btn btn-success " ><i class="fal fa-file"></i> </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank" class="btn btn-warning"><i class="fal fa-print"></i> </a>
                                    </div>
                                </td>
                            </tr>

                            <?php
}
if ($_smarty_tpl->tpl_vars['ds']->do_else) {
?>

                            <tr>
                                <td colspan="7">
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
