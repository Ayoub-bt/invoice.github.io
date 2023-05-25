<?php
/* Smarty version 4.3.0, created on 2023-01-05 10:45:42
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/media.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b6f0a69b12d3_82437736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92c6292025190950a148ae500b3db62d3ab2ddeb' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/media.tpl',
      1 => 1672933540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b6f0a69b12d3_82437736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74996812963b6f0a69818c4_23989895', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88174511963b6f0a69a1cb7_26868064', "scripts");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_74996812963b6f0a69818c4_23989895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74996812963b6f0a69818c4_23989895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-hdr">
                <h3 class="card-title"><?php echo __('Upload');?>
</h3>
            </div>
            <div class="panel-container">
                <div class="panel-content">
                    <form class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo __('Drop a media file.');?>
</h3>
                            <br />
                            <span class="note"><?php echo __('or, click to upload');?>
</span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel">
            <div class="panel-hdr">
                <h3 class="card-title"><?php echo __('Media');?>
</h3>
            </div>
            <div class="panel-container">
                <div class="panel-content">
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
                                    <button class="btn btn-primary btn-sm copy_media_url mb-2" data-path="<?php echo $_smarty_tpl->tpl_vars['media_file']->value->path;?>
"><?php echo __('Copy URL');?>
</button>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'media/delete/<?php echo $_smarty_tpl->tpl_vars['media_file']->value->id;?>
')" class="btn btn-sm btn-danger mb-2"><?php echo __('Delete');?>
</a>
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
</div>

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_88174511963b6f0a69a1cb7_26868064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_88174511963b6f0a69a1cb7_26868064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        window.addEventListener('DOMContentLoaded', ()=> {

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

            const upload = new Dropzone('#upload_container', {
                url: base_url + 'media/upload',
                maxFiles: 1,
                acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg,.webp,.mp4',
            });

            upload.on("success", function(file) {
                location.reload();
            });

            const copy_media_url = document.querySelectorAll('.copy_media_url');

            copy_media_url.forEach((btn) => {
                btn.addEventListener('click', (e) => {
                    const path = e.target.getAttribute('data-path');
                    const url = '<?php echo APP_URL;?>
/storage/media/' + path;
                    app.copyToClipboard(url);
                    toastr.success('<?php echo __('Copied');?>
');
                });
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
