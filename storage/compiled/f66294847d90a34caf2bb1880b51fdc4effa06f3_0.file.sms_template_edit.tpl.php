<?php
/* Smarty version 4.3.0, created on 2023-04-29 10:27:31
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\sms_template_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644d2953d40b40_07097653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f66294847d90a34caf2bb1880b51fdc4effa06f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\sms_template_edit.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644d2953d40b40_07097653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1750696723644d2953d3b096_80424759', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1822709463644d2953d40362_89821638', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1750696723644d2953d3b096_80424759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1750696723644d2953d3b096_80424759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="mx-auto" style="max-width: 600px; width: 100%;">
        <div class="panel">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Templates'];?>
</h2>
            </div>

            <div class="panel-container">
                <div class="panel-content">
                    <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/edit_post/" method="post" id="spForm">


                        <div class="mb-3"><label for="message">SMS </label>
                            <textarea class="form-control" name="message" id="message" rows="4"><?php echo $_smarty_tpl->tpl_vars['template']->value->sms;?>
</textarea>

                            <input type="hidden" name="template_id" id="template_id" value="<?php echo $_smarty_tpl->tpl_vars['template']->value->id;?>
">

                            <p class="help-block" id="sms-counter">
                                Remaining: <span class="remaining"></span> | Length: <span class="length"></span> | Messages: <span class="messages"></span>
                            </p>
                        </div>


                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" id="save"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1822709463644d2953d40362_89821638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1822709463644d2953d40362_89821638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>
        $(function () {




            $('#message').countSms('#sms-counter');

            var $save = $("#save");

            $save.on('click', function (e) {
                e.preventDefault();

                $save.prop('disabled',true);

                $.post(base_url + 'sms/init/edit_post/', $('#spForm').serialize()).done(function (data) {

                    toastr.success(data);
                    $save.prop('disabled',false);


                });

            })
        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
