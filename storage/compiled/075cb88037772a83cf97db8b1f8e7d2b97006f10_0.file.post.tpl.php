<?php
/* Smarty version 4.3.0, created on 2023-01-12 10:28:45
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c0272dda2227_10168782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075cb88037772a83cf97db8b1f8e7d2b97006f10' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/post.tpl',
      1 => 1673537322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0272dda2227_10168782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96360493763c0272dd6b1f2_19400514', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82521960663c0272dd964b4_33862896', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_96360493763c0272dd6b1f2_19400514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96360493763c0272dd6b1f2_19400514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h3>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form method="post" id="app_form">
                    <div class="mb-3">
                        <label for="input_title"><?php echo __('Title');?>
</label>
                        <input type="text" class="form-control" id="input_title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
">
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['post']->value->is_home_page) {?>
                        <h4><?php echo __('Hero Section');?>
</h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_title"><?php echo __('Title');?>
</label>
                                    <input type="text" class="form-control" id="input_hero_title" name="settings[hero_title]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <div class="mb-3">
                                    <label for="input_hero_description"><?php echo __('Description');?>
</label>
                                    <textarea class="form-control" id="input_hero_description" name="settings[hero_description]"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_primary_button_text"><?php echo __('Primary Button Text');?>
</label>
                                            <input type="text" class="form-control" id="input_primary_button_text" name="settings[primary_button_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['primary_button_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_primary_button_url"><?php echo __('Primary Button URL');?>
</label>
                                            <input type="text" class="form-control" id="input_primary_button_url" name="settings[primary_button_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['primary_button_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_secondary_button_text"><?php echo __('Secondary Button Text');?>
</label>
                                            <input type="text" class="form-control" id="input_secondary_button_text" name="settings[secondary_button_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['secondary_button_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_secondary_button_url"><?php echo __('Secondary Button URL');?>
</label>
                                            <input type="text" class="form-control" id="input_secondary_button_url" name="settings[secondary_button_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['secondary_button_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_image"><?php echo __('Hero Image');?>
</label>
                                    <input type="hidden" id="input_hero_image" name="settings[hero_image]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_image'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                    <div id="hero_image_renderer">
                                        <?php if ($_smarty_tpl->tpl_vars['post_settings']->value['hero_image']) {?>
                                            <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['hero_image'];?>
" class="img-fluid">
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="button" id="choose_hero_image" class="btn btn-secondary btn-sm"><?php echo __('Choose Media');?>
</button>
                                </div>
                            </div>
                        </div>





                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
">

                        <button type="submit" id="btnSavePost" class="btn btn-primary"><?php echo __('Save');?>
</button>


                    <?php }?>


                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_82521960663c0272dd964b4_33862896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_82521960663c0272dd964b4_33862896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        window.addEventListener('DOMContentLoaded', function () {
            const chooseHeroImage = document.getElementById('choose_hero_image');
            const heroImageRenderer = document.getElementById('hero_image_renderer');
            const heroImageInput = document.getElementById('input_hero_image');

            chooseHeroImage.addEventListener('click', function () {
                $.fancybox.open({
                    src  :  base_url + 'media/choose',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
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
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });
            });


            const $cloudonex_body = $('#cloudonex_body');

            $cloudonex_body.on('click', '.choose_media', function () {
                const media_path = $(this).data('path');
                heroImageInput.value = media_path;
                heroImageRenderer.innerHTML = `<img src="<?php echo APP_URL;?>
${ '/storage/' + media_path }" class="img-fluid">`;
                $.fancybox.close();
            });

            const btnSavePost = document.getElementById('btnSavePost');

            btnSavePost.addEventListener('click', function (e) {
                e.preventDefault();

                axios.post('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/post', new FormData(document.getElementById('app_form')))
                    .then(function (response) {
                        if (response.data.status === 'success') {
                            toastr.success(response.data.message);
                        } else {
                            toastr.error(response.data.message);
                        }
                    })
                    .catch(function (error) {
                        toastr.error(error);
                    });

            });


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
