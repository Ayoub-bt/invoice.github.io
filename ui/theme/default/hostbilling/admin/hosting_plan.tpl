{extends file="$layouts_admin"}

{block name="content"}

    <div class="row">
        <div class="col">

            {if $hosting_plan}
               <h3>{__('Edit')}</h3>
                {else}
                {if $type === 'service'}
                    <h3>{$_L['Add Service']}</h3>
                {else}
                    <h3>{$_L['Add Hosting Plan']}</h3>
                {/if}
            {/if}

        </div>
        <div class="col text-end">
            <a
                    {if $type === 'service'}
                        href="{$base_url}hostbilling/services"
                    {else}
                        href="{$base_url}hostbilling/hosting-plans"
                    {/if}
                    class="btn btn-sm btn-danger mb-3">{$_L['Back to the List']}</a>
        </div>
    </div>

    <div class="row" style="justify-content: center;">
        <div class="col-md-8">

            <div class="card">
                <div class="card-body">

                    <style>
                        #form_save_service label {
                            margin-bottom: 7px;
                        }
                    </style>

                    <form id="form_save_service">

                        <!-- Service Ref -->
                        <div class="mb-3">
                            <label>{$_L['Service Ref']}*</label>
                            <input class="form-control" name="ref" {if $hosting_plan}value="{$hosting_plan->ref}" {/if} >
                        </div>

                        <!-- Service Name -->
                        <div class="mb-3">
                            <label>{$_L['Service Name']}*</label>
                            <input class="form-control" name="name" {if $hosting_plan}value="{$hosting_plan->name}" {/if} >
                        </div>

                        <!-- Group -->
                        <div class="mb-3" style="display: none;">
                            <label>{$_L['Group']}</label>
                            <select class="form-select" name="group_id">
                                <option value="">--</option>
                                <option value="1" selected>1</option>
                            </select>
                        </div>

                        <!-- Service Fee -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>{$_L['Service Fee']}*</label>
                                    <input class="form-control" name="one_time_fee"
                                        {if $hosting_plan && $hosting_plan->one_time_fee > 0}value="{numberFormatUsingCurrency($hosting_plan->one_time_fee,$config['home_currency'])}" {/if}>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3" style="display: none;">
                            <label>{$_L['Description']}</label>
                            <textarea class="form-control" name="description" id="description">{if $hosting_plan && $hosting_plan->description}{$hosting_plan->description}{/if}</textarea>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <!-- Features -->
                        <h4>{$_L['Features']}</h4>
                        <div id="div_features">

                            {if $hosting_plan && $hosting_plan->features}

                                {foreach json_decode($hosting_plan->features) as $feature_line}
                                    <div class="mb-3">
                                        <input class="form-control" name="features[]" value="{$feature_line}">
                                    </div>
                                {/foreach}

                            {else}

                                <div class="mb-3">
                                    <input class="form-control" name="features[]">
                                </div>

                                <div class="mb-3">
                                    <input class="form-control" name="features[]">
                                </div>

                            {/if}

                        </div>

                        <div class="my-3">
                            <button id="btn_add_features" type="button" class="btn btn-success btn-icon waves-effect waves-themed"><i class="fal fa-plus"></i> </button>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="mb-3">

                            {if $hosting_plan}
                                <input type="hidden" name="id" value="{$hosting_plan->id}">
                            {/if}

                            <button type="submit" class="btn btn-primary">{$_L['Save']}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            {if $hosting_plan}
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="input_item_details">{__('Item Details')}:</label>
                            <input type="text" class="form-control mb-3" id="input_item_details" onClick="this.setSelectionRange(0, this.value.length)" value="{$base_url}client/item/{$hosting_plan->slug}">
                        </div>
                        <div class="mb-3">
                            <label for="input_cart_link">{__('Link to the Cart')}:</label>
                            <input type="text" class="form-control mb-3" id="input_cart_link" onClick="this.setSelectionRange(0, this.value.length)" value="{$base_url}client/buy-now/{$hosting_plan->slug}">
                        </div>
                    </div>
                </div>
            {/if}
        </div> -->
    </div>

{/block}

{block name=script}

    <script>

        $(function () {

            $btn_add_features = $('#btn_add_features');
            $div_features = $('#div_features');

            $btn_add_features.on('click',function () {
                $div_features.append('<div class="mb-3">\
                    <input class="form-control" name="features[]">\
                    </div>');
            });

            $('#description').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            let $form_save_service = $('#form_save_service');

            $form_save_service.on('submit',function (event) {
                event.preventDefault();

                axios.post(base_url + 'hostbilling/{$type}', $form_save_service.serialize()).then(function (response) {
                    window.location = base_url + 'hostbilling/{$type}/' + response.data.id;
                }).catch(function (error) {
                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });
                });
            });
        });

    </script>


{/block}
