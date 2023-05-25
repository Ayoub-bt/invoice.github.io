<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:38
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/knowledgebase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9c69f9cf6_96035465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e895e1cc929bad33981768f0dd25940e24ea15d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/knowledgebase.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9c69f9cf6_96035465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114041685863b9c9c69e93a3_19654199', "account_content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block "account_content"} */
class Block_114041685863b9c9c69e93a3_19654199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_114041685863b9c9c69e93a3_19654199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card  mb-3" >


        <div class="card-body">

            <h4 class=""> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Articles'];?>
 </h4>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['knowledgebases_group_relations']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['knowledgebases_groups']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                    <h5 class="my-3"><?php echo $_smarty_tpl->tpl_vars['knowledgebases_groups']->value[$_smarty_tpl->tpl_vars['key']->value]->gname;?>
</h5>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'kb_relation');
$_smarty_tpl->tpl_vars['kb_relation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kb_relation']->value) {
$_smarty_tpl->tpl_vars['kb_relation']->do_else = false;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['knowledgebases']->value[$_smarty_tpl->tpl_vars['kb_relation']->value->kbid])) {?>
                            <p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-article/<?php echo $_smarty_tpl->tpl_vars['kb_relation']->value->kbid;?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['knowledgebases']->value[$_smarty_tpl->tpl_vars['kb_relation']->value->kbid]->title;?>
</strong></a>
                            </p>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





        </div>
    </div>


<?php
}
}
/* {/block "account_content"} */
}
