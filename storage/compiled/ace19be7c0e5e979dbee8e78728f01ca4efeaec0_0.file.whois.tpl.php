<?php
/* Smarty version 4.3.0, created on 2023-01-01 04:28:04
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/whois.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b15224f249e9_93517392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ace19be7c0e5e979dbee8e78728f01ca4efeaec0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/whois.tpl',
      1 => 1672565281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b15224f249e9_93517392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33047225163b15224f16798_19132086', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117364329363b15224f1d606_33274469', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43187033163b15224f227a4_50264968', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "head"} */
class Block_33047225163b15224f16798_19132086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_33047225163b15224f16798_19132086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .input-domain-search{
            padding: 20px 12px 20px 12px;
            width: 85%;
            float: left;
            display: table-cell;
            border-radius: 10px 0 0 10px;
            -moz-border-radius: 10px 0 0 10px;
            -webkit-border-radius: 10px 0 0 10px;
            border-color: #EBEBEB;
            background: #EBEBEB;
            height: 56px;
            font-size: 1.25rem;
        }
        .btn-domain-submit{
            text-align: center;
            font-size: 30px;
            float: left;
            width: 15%;
            background: <?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['frontend_primary_button_color'] ?? null)===null||$tmp==='' ? '#4C3CB8' ?? null : $tmp);?>
;
            color: #ffffff;
            display: table-cell;
            padding: 5px 0 6px 0;
            border-radius: 0 10px 10px 0;
            -moz-border-radius: 0 10px 10px 0;
            -webkit-border-radius: 0 10px 10px 0;
            height: 56px;
        }
        .btn:hover {
            color: #fff;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_117364329363b15224f1d606_33274469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_117364329363b15224f1d606_33274469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">

        <div class="mx-auto" style="max-width: 800px; width: 100%">

            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center my-3"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Start your domain name search'];?>
</h1>
                </div>
            </div>

            <form id="form_domain_search" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/whois-post/">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <input class="form-control input-domain-search" id="domain_name" name="domain_name" placeholder=" <?php echo $_smarty_tpl->tpl_vars['_L']->value['Find your domain'];?>
" type="text">
                        <?php echo csrf_field();?>

                        <button class="btn btn-domain-submit" id="btn_domain_submit"><i class="fal fa-search"></i></button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12" id="domain_search_result" style="display: none;">

                    </div>
                </div>
            </form>

        </div>


    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_43187033163b15224f227a4_50264968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_43187033163b15224f227a4_50264968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $form_domain_search = $('#form_domain_search');
            let $domain_search_result = $('#domain_search_result');
            let $domain_name = $('#domain_name');
            let $btn_domain_submit = $('#btn_domain_submit');
            $form_domain_search.on('submit',function (event) {
                event.preventDefault();
                $btn_domain_submit.prop('disabled',true);
                axios.post(base_url + 'client/whois-post',$form_domain_search.serialize()).then(function (response) {
                    $btn_domain_submit.prop('disabled',false);
                    $domain_search_result.show();
                    $domain_search_result.html('<div class="card"><div class="card-body">' + response.data + '</div></div>');
                }).catch(function (error) {

                    $btn_domain_submit.prop('disabled',false);

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });

            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
