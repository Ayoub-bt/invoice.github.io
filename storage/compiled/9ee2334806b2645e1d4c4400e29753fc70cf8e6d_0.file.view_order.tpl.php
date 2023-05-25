<?php
/* Smarty version 4.3.0, created on 2023-01-01 04:33:57
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b15385f04db8_04345100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee2334806b2645e1d4c4400e29753fc70cf8e6d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_order.tpl',
      1 => 1650269446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b15385f04db8_04345100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211535457963b15385ed1ab6_78551673', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192546110163b15385f033b6_56332849', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_211535457963b15385ed1ab6_78551673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_211535457963b15385ed1ab6_78551673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">
            <h3><?php echo $_smarty_tpl->tpl_vars['order']->value->tracking_id;?>
</h3>
            <div class="hr-line-dashed"></div>
            <strong><?php echo __('Status');?>
:</strong> <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['order']->value->status);?>



            <?php if (count($_smarty_tpl->tpl_vars['buttons']->value)) {?>

                <div class="my-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['button']->value['text'];?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value->login_url) {?>
                <div class="mt-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
</a>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value->username) {?>
                <div class="mt-3">
                    <strong><?php echo __('Username');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->username;?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value->password) {?>
                <div class="mt-3">
                    <strong><?php echo __('Password');?>
:</strong> <span id="password_view_holder"><a href="#" id="view_password" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value->password;?>
"><?php echo __('View');?>
</a></span>
                </div>
            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['server']->value) && $_smarty_tpl->tpl_vars['server']->value->type == 'cpanel') {?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/one-click-login/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value->tracking_id;?>
" target="_blank" class="btn btn-primary mt-3"><?php echo __('Login');?>
</a>

            <?php }?>





            <div class="mt-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['order']->value->activation_subject;?>
</h4>
            </div>
            <div class="mt-3">
                <?php echo $_smarty_tpl->tpl_vars['order']->value->activation_message;?>

            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_192546110163b15385f033b6_56332849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_192546110163b15385f033b6_56332849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            let $view_password = $('#view_password');
            let $password_view_holder = $('#password_view_holder');

            $view_password.on('click',function (event) {
                event.preventDefault();
                let password = $view_password.attr('data-value');
                $password_view_holder.html('<code>' + password + '</code>')
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
