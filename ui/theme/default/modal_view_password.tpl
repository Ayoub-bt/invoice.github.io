<div class="modal-header">
    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="txt_modal_header">
        {$p->name}
    </h3>
</div>
<div class="modal-body">


<div class="well">
    <p>URL: <a href="{$p->url}" target="_blank">{$p->url}</a> </p>
    <p>Username: {$p->username} <a href="javascript:void(0);" class="copy_to_clipboard" aria-label="{$p->username}"><i class="fal fa-clipboard"></i> <small>Copy</small></a> </p>
    <p>Password: {$p->password} <a href="javascript:void(0);" class="copy_to_clipboard" aria-label="{$p->password}"><i class="fal fa-clipboard"></i> <small>Copy</small></a> </p>

</div>

</div>
<div class="modal-footer">


    <button type="button" data-bs-dismiss="modal" class="btn btn-danger">{$_L['Close']}</button>

</div>
