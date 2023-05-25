{extends file="$layouts_admin"}

{block name="content"}

    <div class="panel">
        <div class="panel-hdr">
            {if $action == 'credit-notes'}
                <h2>{__('Credit Notes')}</h2>
            {else}
                <h2>{$_L['Invoices']}</h2>
            {/if}


            <div class="panel-toolbar">
                <div class="btn-group">
                    {if $action == 'credit-notes'}
                        <a href="{$_url}invoices/credit-note" class="btn btn-primary  btn-sm"> {$_L['New Credit Note']}</a>
                    {else}
                        <a href="{$_url}invoices/add/" class="btn btn-primary  btn-sm"> {$_L['Add Invoice']}</a>
                    {/if}
                    <!-- <a href="{$_url}reports/invoices/" class="btn btn-warning btn-sm"> {$_L['View Reports']}</a> -->
                </div>
            </div>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <div class="row">
                                
                    <!-- Invoices - Paid -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2" style="background: linear-gradient(87deg,#2dce89 0,#2dcecc 100%)!important;border-radius: .375rem; min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">

                                    <span>{formatCurrency($invoice_paid_amount,$config['home_currency'])}</span>
                                </h3>
                                <small class="h5  mb-0 text-white">{$_L['Paid']}</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: {$p['Paid']['percentage']}%;" class="progress-bar bg-info"></span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> {$p['Paid']['percentage']}% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Invoices - Unpaid -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2" style="background: linear-gradient(87deg,#f5365c 0,#f56036 100%)!important;    border-radius: .375rem;min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">
                                    <span>{formatCurrency($invoice_unpaid_amount,$config['home_currency'])}</span>
                                </h3>
                                <small class="h5 mb-0 text-white">{$_L['Unpaid']}</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: {$p['Unpaid']['percentage']}%;" class="progress-bar  bg-success">
                                        <span class="sr-only">{$p['Unpaid']['percentage']}%</span>
                                    </span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> {$p['Unpaid']['percentage']}% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Invoices - Partially Paid -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#5e72e4 0,#825ee4 100%)!important;    border-radius: .375rem; rgba(0,0,0,.05); min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">
                                    <span>{formatCurrency($invoice_partially_paid_amount,$config['home_currency'])}</span>
                                </h3>
                                <small class="h5 mb-0 text-white"">{$_L['Partially Paid']}</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: {$p['Partially Paid']['percentage']}%;" class="progress-bar  bg-success">
                                        <span class="sr-only">{$p['Partially Paid']['percentage']}%</span>
                                    </span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> {$p['Partially Paid']['percentage']}% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Invoices - Cancelled -->
                    <div class="col-md-3">
                        <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#172b4d 0,#1a174d 100%)!important;   border-radius: .375rem;min-height: 1px; padding: 1.5rem; flex: 1 1 auto">
                            <div class="number">
                                <h3 class="h2 font-weight-bold mb-0 text-white">
                                    <span class="amount" data-a-sign="{$config['currency_code']} ">{formatCurrency($invoice_cancelled_amount,$config['home_currency'])}</span>
                                </h3>
                                <small class="h5  mb-0 text-white">{$_L['Cancelled']}</small>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: {$p['Cancelled']['percentage']}%;" class="progress-bar bg-success">
                                        <span class="sr-only">{$p['Cancelled']['percentage']}%</span>
                                    </span>
                                </div>
                                <div class="progress-status">
                                    <div class="text-nowrap text-white font-weight-600"> {$p['Cancelled']['percentage']}% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {if $action !== 'credit-notes'}
                    <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="{$base_url}invoices/list/">{$_L['Filter']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/unpaid">{$_L['Unpaid']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/partially_paid/">{$_L['Partially Paid']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/paid/">{$_L['Paid']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/cancelled/">{$_L['Cancelled']}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$base_url}invoices/list/0/all/">{$_L['All']}</a></li>
                    </ul>
                {/if}

                <div class="row">
                    <!-- Date filter -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <!-- Date Range -->
                                    <div class="mb-3">
                                        <label for="reportrange">{$_L['Date Range']}</label>
                                        <input type="text" name="reportrange" class="form-control" id="reportrange">
                                    </div>

                                    <!-- Status -->
                                    <div class="mb-3">
                                        <label for="payment_status">{$_L['Status']}</label>
                                        <select class="form-select" name="status" id="payment_status">
                                            <option value="">{$_L['All']}</option>
                                            <option value="Paid">{$_L['Paid']}</option>
                                            <option value="Unpaid">{$_L['Unpaid']}</option>
                                            <option value="Partially Paid">{$_L['Partially Paid']}</option>
                                            <option value="Cancelled">{$_L['Cancelled']}</option>

                                        </select>
                                    </div>

                                    <!-- Invoice Group -->
                                    {if !empty($config['invoice_group'])}
                                        <div class="mb-3">
                                            <label for="invoice_group_id">{__('Group')}</label>
                                            <select class="form-select" id="invoice_group_id" name="invoice_group_id">
                                                <option value="0">{__('None')}</option>
                                                {foreach $invoice_groups as $group}
                                                    <option value="{$group->id}" {if $selected_group_id == $group->id}selected{/if}>{$group->name}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    {/if}

                                    <!-- Invoice single service -->
                                    {if !empty($config['invoice_single_service'])}
                                        <div class="mb-3">
                                            <label for="invoice_single_service_id">{__('Service')}</label>
                                            <select class="form-select" id="invoice_single_service_id" name="service_id">
                                                <option value="0">{__('None')}</option>
                                                {foreach $services as $service}
                                                    <option value="{$service->id}">{$service->name}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    {/if}

                                    <!-- Staff -->
                                    <!-- <div class="mb-3">
                                        <label for="staff_id">{$_L['Staff']}</label>
                                        <select class="form-select" name="staff_id" id="staff_id">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $staffs as $staff}
                                                <option value="{$staff.id}">{$staff.fullname}</option>
                                            {/foreach}

                                        </select>
                                    </div> -->

                                    <!-- Purchase Status -->
                                    {if !empty($config['invoice_items_purchasing'])}
                                        <div class="mb-3">
                                            <label for="purchase_status">{__('Purchase Status')}</label>
                                            <select class="form-select" name="purchase_status" id="purchase_status">
                                                <option value="">{$_L['All']}</option>
                                                <option value="Purchased">{__('Purchased')}</option>
                                                <option value="On Hold">{__('On Hold')}</option>
                                                <option value="Arrived">{__('Arrived')}</option>
                                                <option value="Collected">{__('Collected')}</option>
                                            </select>
                                        </div>
                                    {/if}

                                    <!-- Shipping Status -->
                                    {if !empty($config['invoice_items_shipping'])}
                                        <div class="mb-3">
                                            <label for="shipping_status">{__('Shipping Status')}</label>
                                            <select class="form-select" name="shipping_status" id="shipping_status">
                                                <option value="">{$_L['All']}</option>
                                                <option value="Purchased">{__('In Progress')}</option>
                                                <option value="Shipped">{__('Shipped')}</option>
                                            </select>
                                        </div>
                                    {/if}

                                    <!-- Customer -->
                                    <div class="mb-3">
                                        <label for="customer">{$_L['Customer']}</label>
                                        <select class="form-select" name="customer" id="customer">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $customers as $customer}
                                                <option value="{$customer.id}">{$customer.account} {$customer.email}</option>
                                            {/foreach}
                                        </select>
                                    </div>

                                    <!-- Customer Group -->
                                    <div class="mb-3">
                                        <label for="group_id">{$_L['Customer Group']}</label>
                                        <select class="form-select" name="group_id" id="group_id">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $contact_groups as $group}
                                                <option value="{$group.id}">{$group.gname}</option>
                                            {/foreach}
                                        </select>
                                    </div>

                                    <input type="hidden" name="type" value="{{$action}}">

                                    <!-- Filter button -->
                                    <button type="submit" id="sp_filter" class="btn btn-primary">{__('Filter')}</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Invoices -->
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body" id="result_div">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


{/block}

{block name=script}

    <script>



        $(function () {

            let $app = $('#cloudonex_body');

            let $customer = $('#customer').select2();

            var start = moment().subtract(29, 'days');
            var end = moment();



            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            var $reportrange = $("#reportrange");

            $reportrange.daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    format: 'YYYY/MM/DD'
                }
            }, cb);

            cb(start, end);

            let $result_div = $('#result_div');


            function loadResult() {

                $result_div.html('<img src="{APP_URL}/storage/system/fsubmit.gif">');

                let $form = $('form');
                let data = $form.serialize();

                $.post('{$_url}invoices/filter', data, function (data) {
                    $result_div.html(data);
                });
            }

            loadResult();

            $('#sp_filter').on('click', function (e) {
                e.preventDefault();

                loadResult();

            });

            $app.on('click', '.cdelete', function(e){
                e.preventDefault();
                var id = this.id;
                app.confirm("{__('are_you_sure')}", function(result) {
                    if(result){
                        window.location.href = base_url + "delete/invoice/" + id;
                    }
                });

            });


        });
    </script>


{/block}
