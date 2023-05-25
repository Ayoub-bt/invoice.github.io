<?php
/* Smarty version 4.3.0, created on 2023-01-04 05:33:44
  from '/Users/razib/Documents/valet/business-suite/apps/updater/views/edit-file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b55608064db5_34428105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f86eb8a7feb700abb51eb12d8f18666e70b363ee' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/updater/views/edit-file.tpl',
      1 => 1672828395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b55608064db5_34428105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66134819463b55608058135_32900496', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202387203063b5560805fe31_75217189', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_66134819463b55608058135_32900496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_66134819463b55608058135_32900496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body p-2">

            <h4 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['actual_path']->value;?>
</h4>

            <div class="mb-3">
                <button type="button" class="btn btn-primary" id="save_file"><?php echo __('Save');?>
</button>
                <a class="btn btn-primary" id="edit_a_file" href="javascript:;">Edit another File</a>
            </div>

            <div id="editor" style="min-height: 800px;"><?php echo $_smarty_tpl->tpl_vars['file_content']->value;?>
</div>


        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_202387203063b5560805fe31_75217189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_202387203063b5560805fe31_75217189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ext-modelist.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>



        window.addEventListener('DOMContentLoaded', ()=> {

            const btn_edit_a_file = document.getElementById('edit_a_file');

            btn_edit_a_file.addEventListener('click',async function () {

                const { value: edit_file_path } = await Swal.fire({
                    title: 'Enter file path',
                    input: 'text',
                    inputLabel: 'path/to/file',
                    showCancelButton: true,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'You need to write something!'
                        }
                    }
                });

                if(edit_file_path) {
                    let path = edit_file_path.replace(/\\/g, '/');
                    path = path.replace('/', '*');
                    window.location.href = base_url + 'updater/app/edit-file/' + path;
                }

            });

            ace.config.set("basePath", 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/');
            const editor = ace.edit("editor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/php");

            const btn_save_file = document.getElementById('save_file');

            function saveFile() {
                const formData = new FormData();
                formData.append('file_content', editor.getValue());
                formData.append('file_path', '<?php echo $_smarty_tpl->tpl_vars['actual_path']->value;?>
');
                btn_save_file.disabled = true;
                axios.post(base_url + 'updater/app/save-file',formData).then(function (response) {

                    btn_save_file.disabled = false;
                    toastr.success('File saved successfully');

                }).catch(function (error) {
                    btn_save_file.disabled = false;
                    swal({
                        title: "Error!",
                        text: error.response.data.message || 'Something went wrong!',
                        icon: "error",
                        button: "Ok",
                    });

                });
            }

            btn_save_file.addEventListener('click', ()=> {
                saveFile();
            });

            //listen ctrl + s and cmd + s
            window.addEventListener('keydown', function(e) {
                if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                    e.preventDefault();
                    saveFile();
                }
            }, false);


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
