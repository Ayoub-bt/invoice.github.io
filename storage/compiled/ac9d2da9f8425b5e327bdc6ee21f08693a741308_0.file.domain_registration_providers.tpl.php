<?php
/* Smarty version 4.3.0, created on 2023-04-28 19:48:08
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\hostbilling\admin\domain_registration_providers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c5b3835d2c8_52862461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac9d2da9f8425b5e327bdc6ee21f08693a741308' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\hostbilling\\admin\\domain_registration_providers.tpl',
      1 => 1673649394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c5b3835d2c8_52862461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_490125765644c5b38345e27_28745932', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1346923814644c5b3835cb91_04866383', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_490125765644c5b38345e27_28745932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_490125765644c5b38345e27_28745932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain Registration Providers'];?>
</h3>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-domain-registration-provider/">Add New Provider</a>
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domain_registration_providers']->value, 'domain_registration_provider');
$_smarty_tpl->tpl_vars['domain_registration_provider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain_registration_provider']->value) {
$_smarty_tpl->tpl_vars['domain_registration_provider']->do_else = false;
?>
                    <tr>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->type;?>
</a>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->name;?>
</a>
                        </td>
                        <td>
                            <a href="javascript:;" class="btn btn-danger" onclick="confirmThenGoToUrl(event,'hostbilling/delete-domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
')">
                                Delete
                            </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1346923814644c5b3835cb91_04866383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1346923814644c5b3835cb91_04866383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
