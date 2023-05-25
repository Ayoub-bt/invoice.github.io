<?php
/* Smarty version 4.3.0, created on 2023-05-01 16:24:33
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\settings_edit_role.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64502001e44bd4_67490966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28764ecaf9b0bbb1ff72fd0dd1363f35b86bf7bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\settings_edit_role.tpl',
      1 => 1682966980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64502001e44bd4_67490966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116340781864502001e2f968_89298128', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_116340781864502001e2f968_89298128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_116340781864502001e2f968_89298128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Role'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit_role_post/" method="post" accept-charset="utf-8">
                            <div class="mb-3"><label for="rname" class="control-label"> <small class="req text-danger">* </small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Role Name'];?>
</label><input type="text" id="rname" name="rname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->rname;?>
"></div>

                            <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['role_all_data_help_text'];?>
</p>

                            <div class="hr-line-dashed"></div>

                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-bordered roles no-margin">
                                        <thead>
                                            <tr>
                                                <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Permission'];?>
</th>
                                                <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</th>
                                                <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</th>
                                                <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create'];?>
</th>
                                                <th class="text-center text-danger bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>
                                                <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Data'];?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>

                                            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['id'];?>
">
                                                <td class="bold"><?php echo $_smarty_tpl->tpl_vars['permission']->value['pname'];?>
</td>
                                                
                                                <!-- View -->
                                                <td class="text-center">
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'view')) {?>checked<?php }?>>
                                                        <!-- <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</label> -->
                                                    </div>
                                                </td>

                                                <!-- Edit -->
                                                <td class="text-center">
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'edit')) {?>checked<?php }?>>
                                                        <!-- <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</label> -->
                                                    </div>
                                                </td>

                                                <!-- Create -->
                                                <td class="text-center">
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'create')) {?>checked<?php }?>>
                                                        <!-- <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create'];?>
</label> -->
                                                    </div>
                                                </td>

                                                <!-- Delete -->
                                                <td class="text-center">
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'delete')) {?>checked<?php }?>>
                                                        <!-- <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</label> -->
                                                    </div>
                                                </td>

                                                <!-- All Data -->
                                                <td class="text-center">
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_all_data" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_all_data" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'all_data')) {?>checked<?php }?>>
                                                        <!-- <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_all_data"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Data'];?>
</label> -->
                                                    </div>
                                                </td>

                                            </tr>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </tbody>
                                    </table>

                                    <input type="hidden" name="rid" id="rid" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
">

                                    <button class="btn btn-primary" type="submit" id="submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>                        </div>

                            </div>

                        </form>
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
