<?php
/* Smarty version 4.3.0, created on 2023-01-05 10:07:22
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b6e7aa8c1175_36139822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9959d22dc3cb9d0ff5ddb38cda5a52b137912cc7' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_templates.tpl',
      1 => 1623941459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b6e7aa8c1175_36139822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86097032563b6e7aa8a6895_67265247', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85580507763b6e7aa8b9903_05560489', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_86097032563b6e7aa8a6895_67265247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_86097032563b6e7aa8a6895_67265247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Templates'];?>
</h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <table class="table table-condensed table-hover table-bordered" id="clx_datatable">
                    <thead>
                    <tr>


                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                        <th width="70%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                        <tr>

                            <td><?php echo $_smarty_tpl->tpl_vars['template']->value->tpl;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['template']->value->sms;?>
</td>
                            <td> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/edit/<?php echo $_smarty_tpl->tpl_vars['template']->value->id;?>
" class="btn btn-sm btn-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a> </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_85580507763b6e7aa8b9903_05560489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_85580507763b6e7aa8b9903_05560489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
