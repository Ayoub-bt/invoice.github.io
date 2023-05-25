<?php
/* Smarty version 4.3.0, created on 2023-01-04 05:58:42
  from '/Users/razib/Documents/valet/business-suite/apps/updater/views/canvas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b55be24f8354_33620592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e860d2ad7b8af54ab6b547004ed418e8d49393d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/updater/views/canvas.tpl',
      1 => 1672829916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b55be24f8354_33620592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185826279963b55be24e1d52_21095257', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199527738663b55be24f1265_45629476', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_185826279963b55be24e1d52_21095257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_185826279963b55be24e1d52_21095257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="card mb-3">
        <div class="card-body p-3">
            <h4>Tools</h4>
            <a class="btn btn-primary" href="<?php echo BASE_URL;?>
updater/app/download-database-backup">Download the database backup</a>
            <a class="btn btn-primary" id="download_the_update_from_url" href="javascript:;">Download the update from URL</a>
            <a class="btn btn-primary" id="edit_a_file" href="javascript:;">Edit a File</a>

            <?php if (APP_STAGE == 'Dev') {?>
                <a class="btn btn-primary" id="enable_disable_dev_mode" href="javascript:;">Disable Dev Mode</a>
                <?php } else { ?>
                <a class="btn btn-primary" id="enable_disable_dev_mode" href="javascript:;">Enable Dev Mode</a>
            <?php }?>


        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card" id="uploading_inside">
                <div class="card-body">
                    <div class="mb-2">
                        <strong><?php echo __('Your version');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['installed_version']->value;?>

                    </div>
                    <p>To check the latest version, visit- <a target="_blank" href="https://www.cloudonex.com/">CloudOnex</a> </p>

                    <h5>System Status</h5>
                    <div class="mb-2">
                        <strong><?php echo __('PHP version');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['php_version']->value;?>

                    </div>
                    <div class="mb-2">
                        <strong><?php echo __('Maximum upload size');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value;?>

                    </div>
                    <div class="mb-2">
                        <strong><?php echo __('Maximum post size');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['max_post_size']->value;?>

                    </div>
                    <div class="mb-2">
                        <strong><?php echo __('Zip support');?>
:</strong> <?php if ($_smarty_tpl->tpl_vars['zip_support']->value) {?><span class="badge bg-success">Yes</span><?php } else { ?><span class="badge bg-danger">No</span><?php }?>
                        <p>zip is required to unzip the uploaded file.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" id="uploading_holder">
                <div class="card-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/csv_upload/" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  Drop the zip file, or click here.</h3>
                            <br />
                            <span class="note">To update, download the latest version from your profile and drop the zip file here.</span>
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
/* {block "scripts"} */
class Block_199527738663b55be24f1265_45629476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_199527738663b55be24f1265_45629476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        window.addEventListener('DOMContentLoaded', ()=> {

            const upload = new Dropzone('#upload_container', {
                url: base_url + 'updater/app/upload',
                maxFiles: 1,
                acceptedFiles: '.zip',
            });

            const uploading_holder = document.getElementById('uploading_holder');

            function unzipTheUpdate() {
                axios.post(base_url + 'updater/app/unzip').then(function (response) {

                    window.location.href = base_url + 'updating/schema';

                }).catch(function (error) {

                    let error_message = error.response.data.errors.file;

                    if(error_message)
                    {
                        uploading_holder.innerHTML = '<div class="alert alert-danger">'+error_message+'</div>';
                    }
                    else
                    {
                        uploading_holder.innerHTML = '<div class="alert alert-danger">An error occurred while unzipping the file.</div>';
                    }

                });
            }

            upload.on("success", function(file) {
                uploading_holder.innerHTML = '<div class="alert alert-success">The file has been uploaded successfully. Please wait while the system is unzipping the file.</div>';

                unzipTheUpdate();

            });

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

            const download_the_update_from_url = document.getElementById('download_the_update_from_url');

            download_the_update_from_url.addEventListener('click',async function () {

                const {
                    value: download_url
                } = await Swal.fire({
                    title: 'Enter download URL',
                    input: 'text',
                    inputLabel: 'URL',
                    showCancelButton: true,
                    inputValidator: (value) => {
                        if (!value) {
                            return 'You need to write something!'
                        }
                    }
                });

                if (download_url) {
                    let formData = new FormData();
                    formData.append('download_url', download_url);
                    toastr.options.closeDuration = 10000;
                    toastr.success('File is downloading. Please wait....');
                    axios.post(base_url + 'updater/app/download-from-url',formData).then(function (response) {
                        toastr.success('File downloaded successfully. Please wait while the system is unzipping the file.');
                        unzipTheUpdate();
                    }).catch(function (error) {
                        swal({
                            title: "Error!",
                            text: error.response.data.message || 'Something went wrong!',
                            icon: "error",
                            button: "Ok",
                        });

                    });
                }

            });


            const enable_disable_dev_mode = document.getElementById('enable_disable_dev_mode');

            enable_disable_dev_mode.addEventListener('click', () => {
                axios.post(base_url + 'updater/app/toggle-dev-mode').then(function (response) {
                    enable_disable_dev_mode.disabled = true;
                    enable_disable_dev_mode.innerHTML = 'Please wait...';
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);
                }).catch(function (error) {
                    swal({
                        title: "Error!",
                        text: error.response.data.message || 'Something went wrong!',
                        icon: "error",
                        button: "Ok",
                    });
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
