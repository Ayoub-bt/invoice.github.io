{extends file="hostbilling/layouts/client.tpl"}
{block name="content"}
    <div class="row">
        <div class="col-md-3">
            <a href="{$base_url}client/hosting-orders/">
                <div class="card card-body border">
                    <h2>{$hosting_orders_count}</h2>
                    <span>{__('Services')}</span>
                </div>

            </a>
        </div>
        <div class="col-md-3">

            <a href="{$base_url}client/tickets/all">
                <div class="card card-body border">
                    <h2>{$tickets_count}</h2>
                    <span>{__('Tickets')}</span>
                </div>

            </a>

        </div>

        <div class="col-md-3">
            <a href="{$base_url}client/invoices/">
                <div class="card card-body border">
                    <h2>{$invoices_count}</h2>
                    <span>{$_L['Invoices']}</span>
                </div>

            </a>
        </div>
        <div class="col-md-3">
            <a href="{$base_url}client/domain-orders/">
                <div class="card card-body border">
                    <h2>{$domains_count}</h2>
                    <span>{__('Domains')}</span>
                </div>

            </a>
        </div>

    </div>

    <div class="card border mt-4">
        <div class="card-header border-bottom">
            <h5 class="card-header-title">{$_L['Recent Orders']}</h5>
        </div>
        <div class="card-body p-3">

            <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                <tbody>
                <tr>
                    <th>
                        <strong>{$_L['Order']}</strong>
                    </th>
                    <th>
                        <strong>{$_L['Domain']}</strong>
                    </th>
                    <th>
                        <strong>{$_L['Date']}</strong>
                    </th>
                    <th>
                        <strong>{$_L['Total']}</strong>
                    </th>
                    <th>
                        <strong>{$_L['Status']}</strong>
                    </th>
                </tr>
                {foreach $recent_orders as $recent_order}

                    <tr>
                        <td>
                            <a href="{$base_url}client/view-order/{$recent_order->id}/" class="font-weight-bold">
                                {$recent_order->tracking_id|escape}
                            </a>
                        </td>
                        <td>
                            {{$recent_order->domain|escape}}
                        </td>
                        <td>
                            {date( $config['df'], strtotime($recent_order->created_at))}
                        </td>
                        <td>
                            {formatCurrency($recent_order->total,$config['home_currency'])}
                        </td>
                        <td>
                            {cloudonex_get_order_status_with_badge($recent_order->status)}
                        </td>
                    </tr>


                {/foreach}

                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="">


                <div class="card border mb-3">
                    <div class="card-header border-bottom">


                        <h5 class="card-header-title">{$_L['Recent Invoices']}</h5>


                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">

                            <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                <tbody>

                                <tr>
                                    <th>
                                        <strong>{$_L['Invoice']}</strong>
                                    </th>
                                    <th>
                                        <strong>{$_L['Status']}</strong>
                                    </th>
                                    <th>
                                        <strong>{$_L['Created']}</strong>
                                    </th>
                                </tr>

                                {foreach $invoices as $recent_invoice}

                                    <tr>
                                        <td>
                                            <a target="_blank" href="{$base_url}client/iview/{$recent_invoice->id}/token_{$recent_invoice->vtoken}/">
                                                {cloudonex_get_invoice_number($recent_invoice)}
                                            </a>
                                        </td>
                                        <td>
                                            {cloudonex_get_invoice_status_with_badge($recent_invoice->status)}
                                        </td>
                                        <td>
                                            {date( $config['df'], strtotime($recent_invoice->date))}
                                        </td>
                                    </tr>

                                {/foreach}


                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header">
                    <h5>{$_L['Recent Domains']}</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>

                        <tr>
                            <th>
                                <strong>{$_L['Order']}</strong>
                            </th>
                            <th>
                                <strong>{$_L['Domain']}</strong>
                            </th>
                            <th>
                                <strong>{$_L['Date']}</strong>
                            </th>
                            <th>
                                <strong>{$_L['Total']}</strong>
                            </th>
                            <th>
                                <strong>{$_L['Status']}</strong>
                            </th>
                        </tr>

                        {foreach $recent_domains as $recent_order}

                            <tr>
                                <td>
                                    <a href="{$base_url}client/view-domain/{$recent_order->id}/" class="font-weight-bold">
                                        {$recent_order->tracking_id|escape}
                                    </a>
                                </td>
                                <td>
                                    {{$recent_order->domain|escape}}
                                </td>
                                <td>
                                    {date( $config['df'], strtotime($recent_order->created_at))}
                                </td>
                                <td>
                                    {formatCurrency($recent_order->total,$config['home_currency'])}
                                </td>
                                <td>
                                    {cloudonex_get_order_status_with_badge($recent_order->status)}
                                </td>
                            </tr>


                        {/foreach}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card border mt-4">
        <div class="card-header border-bottom">

            <h5 class="card-header-title">{$_L['Recent Tickets']}</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>
                        <strong>{$_L['Ticket']}</strong>
                    </th>
                    <th>
                        <strong>{$_L['Subject']}</strong>
                    </th>
                    <th>
                        <strong>{$_L['Status']}</strong>
                    </th>
                    <th>
                        <strong>{$_L['Last Update']}</strong>
                    </th>
                </tr>
                {foreach $recent_tickets as $recent_ticket}
                    <tr>
                        <td>
                            <a href="{$base_url}client/tickets/view/{$recent_ticket->tid}" class="font-weight-bold">
                                {$recent_ticket->tid}
                            </a>
                        </td>
                        <td>
                            <a href="{$base_url}client/tickets/view/{$recent_ticket->tid}" class="font-weight-bold">
                                {$recent_ticket->subject|escape}
                            </a>
                        </td>
                        <td>
                            {cloudonex_get_ticket_status_with_badge($recent_ticket->status|escape)}
                        </td>
                        <td>
                            {date( $config['df'], strtotime($recent_ticket->updated_at))}
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>


{/block}
