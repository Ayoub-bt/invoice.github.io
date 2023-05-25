{extends file="hostbilling/admin/contact_base.tpl"}


{block name="inner_content"}

    <style>
        #edit_form label {
            margin-bottom: 10px;
        }
    </style>

    <div class="alert alert-danger" id="emsg" style="display: none;">
        <span id="emsgbody"></span>
    </div>

    <form class="form-horizontal" id="edit_form">

        <!-- Full Name / Company -->
        <div class="row mt-2">
            <div class="col-md-6 ">
                <div class="mb-3"><label for="account"><span class="h6">{$_L['Account Name']}</span></label>
                    <input type="text" id="account" name="account" class="form-control" value="{$contact->account}">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3 h6"><label for="company_id"><span class="h6">{$_L['Company']}</span></label>
                    <select id="company_id" name="company_id" class="form-control">
                        <option value="0">{$_L['None']}</option>
                        {foreach $companies as $company}
                            <option value="{$company['id']}" {if $contact->cid eq ($company['id'])}selected{/if}>{$company['company_name']}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
        </div>

        <!-- Email / Secondary Email -->
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="mb-3 h6"><label for="edit_email"><span class="h6">{$_L['Email']}</span></label>
                    <input type="text" id="edit_email" name="edit_email" class="form-control" value="{$contact['email']}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 h6"><label for="edit_secondary_email"><span class="h6">{$_L['Secondary Email']}</span></label>
                    <input type="text" id="edit_secondary_email" name="secondary_email" class="form-control" value="{$contact['secondary_email']}">
                </div>
            </div>
        </div>

        <!-- Phone / Business number -->
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="mb-3 h6">
                    <label for="phone"><span class="h6">{$_L['Phone']}</span></label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{$contact['phone']}">
                </div>
            </div>

            <div class="col-md-6">
                {if $config['show_business_number'] eq '1'}
                    <div class="mb-3 h6">
                        <label for="business_number"><span class="h6">{$_L['Business Number']}</span></label>
                        <input type="text" id="business_number" name="business_number" class="form-control" value="{$contact['business_number']}">
                    </div>
                {/if}
            </div>
        </div>

        

        <!-- Fax -->
        {if $config['fax_field']}
            <div class="mb-3 h6"><label for="phone"><span class="h6">{$_L['Fax']}</span></label>
                <input type="text" id="fax" name="fax" class="form-control" value="{$contact['fax']}">
            </div>
        {/if}

        <!-- Adress -->
        <div class="mb-3 h6"><label for="address"><span class="h6">{$_L['Address']}</span></label>
            <input type="text" id="address" name="address" class="form-control" value="{$contact['address']}">
        </div>

        <!-- Country / State-Region / City -->
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="mb-3 h6"><label for="country"><span class="h6">{$_L['Country']}</span></label>
                    <select name="country" id="country" class="form-control">
                        <option value="">{$_L['Select Country']}</option>
                        {$countries}
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mb-3 h6"><label for="state"><span class="h6">{$_L['State Region']}</span></label>
                    <input type="text" id="state" name="state" class="form-control" value="{$contact['state']}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3 h6"><label for="city"><span class="h6">{$_L['City']}</span></label>
                    <input type="text" id="city" name="city" class="form-control" value="{$contact['city']}">
                </div>
            </div>
        </div>

        <!-- Group / ZIP Postal Code -->
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="mb-3 h6"><label for="zip"><span class="h6">{$_L['ZIP Postal Code']} </span></label>
                    <input type="text" id="zip" name="zip" class="form-control" value="{$contact['zip']}">
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3 h6"><label for="group"><span class="h6">{$_L['Group']} </span></label>
                    <select class="form-select" name="group" id="group">
                        <option value="0" {if ($contact['gid']) eq 0}selected{/if}>{$_L['None']}</option>
                        {foreach $gs as $g}
                            <option value="{$g['id']}" {if ($contact['gid']) eq ($g['id'])}selected{/if}>{$g['gname']}</option>
                        {/foreach}
                    </select>
                </div>

            </div>
        </div>

        {foreach $fs as $f}
            <div class="mb-3"><label for="cf{$f['id']}">{$f['fieldname']}</label>
                {if ($f['fieldtype']) eq 'text'}


                    <input type="text" id="cf{$f['id']}" name="cf{$f['id']}" class="form-control" value="{if get_custom_field_value($f['id'],$contact['id']) neq ''} {get_custom_field_value($f['id'],$contact['id'])}{/if}">
                    {if ($f['description']) neq ''}
                        <span class="help-block">{$f['description']}</span>
                    {/if}

                {elseif ($f['fieldtype']) eq 'password'}

                    <input type="password" id="cf{$f['id']}" name="cf{$f['id']}" class="form-control" value="{if get_custom_field_value($f['id'],$contact['id']) neq ''} {get_custom_field_value($f['id'],$contact['id'])}{/if}">
                    {if ($f['description']) neq ''}
                        <span class="help-block">{$f['description']}</span>
                    {/if}

                {elseif ($f['fieldtype']) eq 'dropdown'}
                    <select id="cf{$f['id']}" name="cf{$f['id']}" class="form-control">
                        {foreach explode(',',$f['fieldoptions']) as $fo}
                            <option value="{$fo}" {if get_custom_field_value($f['id'],$contact['id']) eq $fo} selected="selected" {/if}>{$fo}</option>
                        {/foreach}
                    </select>
                    {if ($f['description']) neq ''}
                        <span class="help-block">{$f['description']}</span>
                    {/if}

                {elseif ($f['fieldtype']) eq 'textarea'}

                    <textarea id="cf{$f['id']}" name="cf{$f['id']}" class="form-control" rows="3">{if get_custom_field_value($f['id'],$contact['id']) neq ''} {get_custom_field_value($f['id'],$contact['id'])}{/if}</textarea>
                    {if ($f['description']) neq ''}
                        <span class="help-block">{$f['description']}</span>
                    {/if}

                {else}
                {/if}
            </div>
        {/foreach}

        <div class="mb-3"><label for="tags"><span class="h6">{$_L['Tags']}</span></label>
            <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                {foreach $tags as $tag}
                    <option value="{$tag['text']}" {if in_array($tag['text'],$contacttags)}selected="selected"{/if}>{$tag['text']}</option>
                {/foreach}
            </select>
        </div>



        <div class="mb-3">
            <button class="btn btn-primary" type="submit" id="submit"><i class="fal fa-check"></i> {$_L['Submit']}</button>
        </div>



        <input type="hidden" name="fcid" id="fcid" value="{$contact['id']}">


    </form>


{/block}

{block name="script"}
    <script>
        $(function () {

            $("#country").select2();


            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
            });

            $('#company_id').select2();


            let $edit_form = $('#edit_form');

            $edit_form.on('submit',function (event) {
                event.preventDefault();
                $.post(base_url + 'contacts/edit-post/', $edit_form.serialize())
                    .done(function (data) {

                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {

                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });


        });
    </script>
{/block}
