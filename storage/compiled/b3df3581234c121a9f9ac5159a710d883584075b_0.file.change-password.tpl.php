<?php
/* Smarty version 4.3.0, created on 2023-04-28 22:49:44
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\change-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c85c8810ed5_56292083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3df3581234c121a9f9ac5159a710d883584075b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\change-password.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c85c8810ed5_56292083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1648046226644c85c880b6b4_62611094', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1648046226644c85c880b6b4_62611094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1648046226644c85c880b6b4_62611094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>
</h5>
                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password-post">
                        <div class="mb-3">
                            <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Current Password'];?>
</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="npass"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Password'];?>
</label>
                            <input type="password" class="form-control" id="npass" name="npass">
                        </div>
                        <div class="mb-3">
                            <label for="cnpass"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm New Password'];?>
</label>
                            <input type="password" class="form-control" id="cnpass" name="cnpass">
                        </div>




                        <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>

                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
