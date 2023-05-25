<?php
/* Smarty version 4.3.0, created on 2023-01-12 04:28:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/media_choose.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bfd2ae709ac0_94736382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd03d097ef467a518c4c2dbe10c43479cc0150eff' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/media_choose.tpl',
      1 => 1673515686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfd2ae709ac0_94736382 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="card">
        <div class="card-body">

            <h3><?php ob_start();
echo __('Media');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h3>

            <div class="table-responsive">
                <table class="table table-condensed table-hover table-bordered" id="clx_datatable">
                    <thead>
                    <tr>
                        <th><strong><?php echo __('Media');?>
</strong></th>
                        <th><strong><?php echo __('Title');?>
</strong></th>
                        <th class="text-end"><strong><?php echo __('Manage');?>
</strong></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['media_files']->value, 'media_file');
$_smarty_tpl->tpl_vars['media_file']->iteration = 0;
$_smarty_tpl->tpl_vars['media_file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['media_file']->value) {
$_smarty_tpl->tpl_vars['media_file']->do_else = false;
$_smarty_tpl->tpl_vars['media_file']->iteration++;
$__foreach_media_file_0_saved = $_smarty_tpl->tpl_vars['media_file'];
?>
                        <tr>
                            <td data-order="<?php echo $_smarty_tpl->tpl_vars['media_file']->iteration;?>
">
                                <?php if ($_smarty_tpl->tpl_vars['media_file']->value->extension == 'png' || $_smarty_tpl->tpl_vars['media_file']->value->extension == 'jpg' || $_smarty_tpl->tpl_vars['media_file']->value->extension == 'jpeg' || $_smarty_tpl->tpl_vars['media_file']->value->extension == 'gif') {?>
                                    <img src="<?php echo BASE_URL_ALT;?>
media/image/<?php echo $_smarty_tpl->tpl_vars['media_file']->value->path;?>
&h=50" class="img-responsive" style="max-width: 100px; max-height: 100px;" />
                                <?php } else { ?>
                                    <i class="fal fa-file fa-5x"></i>
                                <?php }?>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['media_file']->value->title;?>

                            </td>
                            <td class="text-end">
                                <button data-path="media/<?php echo $_smarty_tpl->tpl_vars['media_file']->value->path;?>
" class="btn btn-primary btn-sm choose_media mb-2" data-path="<?php echo $_smarty_tpl->tpl_vars['media_file']->value->path;?>
"><?php echo __('Choose');?>
</button>
                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['media_file'] = $__foreach_media_file_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?php }
}
