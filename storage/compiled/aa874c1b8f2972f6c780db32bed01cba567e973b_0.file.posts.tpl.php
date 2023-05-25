<?php
/* Smarty version 4.3.0, created on 2023-01-04 14:45:01
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b5d73de72279_90109536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa874c1b8f2972f6c780db32bed01cba567e973b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/posts.tpl',
      1 => 1672861498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b5d73de72279_90109536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170117286563b5d73de5c587_43541008', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_170117286563b5d73de5c587_43541008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_170117286563b5d73de5c587_43541008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h3 class="card-title"><?php echo __('Pages');?>
</h3>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th><?php echo __('Page');?>
</th>
                            <th><?php echo __('Manage');?>
</th>
                        </tr>
                        <tr>
                            <td>
                                <?php if (!empty($_smarty_tpl->tpl_vars['home_page']->value)) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/post/<?php echo $_smarty_tpl->tpl_vars['home_page']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['home_page']->value->title;?>
</a>
                                    <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/create-post/home"><?php echo __('Create Home Page');?>
</a>
                                <?php }?>

                            </td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
