{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title">{$_L['Edit_Account']}</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="{$_url}accounts/edit-post">
                            <div class="mb-3">
                                <label for="account">{$_L['Account_Title']}</label>
                                <input type="text" class="form-control" id="account" name="account" value="{$d->account}">
                            </div>
                            <div class="mb-3">
                                <label for="description">{$_L['Description']}</label>
                                <input type="text" class="form-control" id="description" name="description" value="{$d->description}">
                            </div>


                            <div class="mb-3">
                                <label for="account_number">{$_L['Account Number']}</label>
                                <input type="text" class="form-control" id="account_number" name="account_number" value="{$d->account_number}">
                            </div>

                            <div class="mb-3">
                                <label for="contact_person">{$_L['Contact Person']}</label>
                                <input type="text" class="form-control" id="contact_person" name="contact_person" value="{$d->contact_person}">
                            </div>

                            <div class="mb-3">
                                <label for="contact_phone">{$_L['Phone']}</label>
                                <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{$d->contact_phone}">
                            </div>

                            <div class="mb-3">
                                <label for="ib_url">{$_L['Internet Banking URL']}</label>
                                <input type="text" class="form-control" id="ib_url" name="ib_url" value="{$d->ib_url}">
                            </div>


                            <input type="hidden" name="id" value="{$d['id']}">
                            <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> {$_L['Submit']}</button>
                        </form>
                    </div>


                </div>
            </div>
        </div> <!-- Widget-1 end-->

        <!-- Widget-2 end-->
    </div>
{/block}


