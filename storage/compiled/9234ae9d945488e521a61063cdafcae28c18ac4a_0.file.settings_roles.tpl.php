<?php
/* Smarty version 4.3.0, created on 2023-04-29 03:12:27
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\settings_roles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644cc35b7d8ab7_50409751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9234ae9d945488e521a61063cdafcae28c18ac4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\settings_roles.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644cc35b7d8ab7_50409751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1472699430644cc35b7cfc03_36676107', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1472699430644cc35b7cfc03_36676107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1472699430644cc35b7cfc03_36676107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Roles'];?>
</h2>

                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_role/" class="btn btn-success" id="add_new_group"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Role'];?>
</a>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-bordered roles no-margin">
                                <thead>
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                                    <tr data-id="1">
                                        <td><?php echo $_smarty_tpl->tpl_vars['role']->value['rname'];?>
</td>
                                        <td class="text-end">

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit_role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
/" class="btn btn-primary"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
/" class="btn btn-danger" id="uid118"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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







                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
