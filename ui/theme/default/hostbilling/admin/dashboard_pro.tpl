{extends file="$layouts_admin"}

{block name="head"}

<style>
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #F7F9FC;
    }

    .h2,
    h2 {
        font-size: 1.25rem;
    }

    .text-info {
        color: #0152FF !important;
    }

    .text-success {
        color: #2CCE89 !important;
    }

    .icon-shape {
        padding: 12px;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .icon {
        width: 3rem;
        height: 3rem;
    }

    .text-white {
        color: #fff !important;
    }

    .text-white {
        color: #fff !important;
    }

    .shadow {
        box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
    }

    .rounded-circle,
    .avatar.rounded-circle img {
        border-radius: 50% !important;
    }

    .bg-gradient-red {
        background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
    }

    .bg-gradient-success {
        background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
    }

    .bg-gradient-info {
        background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
    }

    .bg-gradient-blue {
        background: linear-gradient(90deg, rgba(10, 6, 68, 1) 0%, rgba(7, 13, 46, 1) 0%, rgba(41, 20, 110, 1) 44%, rgba(35, 10, 112, 1) 50%, rgba(69, 28, 144, 1) 100%, rgba(215, 246, 247, 1) 100%);
         !important;

    }

    .bg-gradient-pink {
        background: linear-gradient(90deg, rgba(10, 6, 68, 1) 0%, rgba(204, 147, 5, 1) 0%, rgba(189, 123, 10, 1) 100%, rgba(237, 227, 200, 1) 100%, rgba(240, 133, 219, 1) 100%, rgba(215, 246, 247, 1) 100%);

    }
</style>
{/block}


{block name="content"}

<div class="row mb-3">

    <!-- Total quotes -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #002393">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow text-white" style="background: transparent; border: 1px solid #fff; font-weight: 600;">
                    <i class="fal fa-file"></i>
                </div>
                <h6 class="mt-4 mb-1 text-white">{$_L['Total Quotes']}</h6>
                <h2 class="mb-2  number-font text-white">{$total_quotes}</h2>
            </div>
        </div>
    </div>

    <!-- Total invoices -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #ffc500">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow" style="color: #002393; background: transparent; border: 1px solid #002393; font-weight: 600;">
                    <i class="fal fa-file"></i>
                </div>
                <h6 class="mt-4 mb-1" style="color: #002393">{$_L['Total Invoices']}</h6>
                <h2 class="mb-2  number-font" style="color: #002393">{$recent_invoices->count()}</h2>
            </div>
        </div>
    </div>

    <!-- Total Paid Invoice Amount -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #002393">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow text-white" style="background: transparent; border: 1px solid #fff; font-weight: 600;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-clock">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h6 class="mt-4 mb-1 text-white">{$_L['Total Paid Invoice Amount']}</h6>
                <h2 class="mb-2 number-font text-white">
                    {formatCurrency($total_paid_invoice_amount,$config['home_currency'])}</h2>

            </div>
        </div>
    </div>
    
    <!-- Total customers -->
    <div class="col-sm-3 mb-3">
        <div class="card" style="background: #ffc500">
            <div class="card-body text-center statistics-info">
                <div class="icon icon-shape rounded-circle shadow" style="color: #002393; background: transparent; border: 1px solid #002393; font-weight: 600;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <h6 class="mt-4 mb-1" style="color: #002393">{$_L['Total Customers']}</h6>
                <h2 class="mb-2  number-font" style="color: #002393">{$total_customers}</h2>
            </div>
        </div>
    </div>

</div>

<style>
    #recent_posts th,
    #recent_posts td {
        padding: 5px;
        text-align: center;
    }
</style>

<div class="row mt-3" id="recent_posts">

    <!-- Recent Quotes -->
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body p-3">
                <h3>{$_L['Recent Quotes']}</h3>
                <div class="hr-line-dashed"></div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{$_L['Quote']}</th>
                                <th>{$_L['Client']}</th>
                                <th>{$_L['Subject']}</th>
                                <th>{$_L['Amount']}</th>
                                <th>{$_L['Created']}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $recent_quotes as $recent_quote}
                            <tr>
                                <td>
                                    <a href="{$_url}quotes/view/{$recent_quote->id}/">{$recent_quote->invoicenum}{if $recent_quote->cn neq ''} {$recent_quote->cn} {else} {$recent_quote->id} {/if}</a>
                                </td>
                                <td>
                                    <a href="{$base_url}contacts/view/{$recent_quote->userid}/summary/">
                                        {$recent_quote->account}
                                    </a>
                                </td>
                                <td>
                                    {$recent_quote->subject}
                                </td>
                                <td>
                                    {formatCurrency($recent_quote->total,$config['home_currency'])}
                                </td>
                                <td>
                                    {if $recent_quote->datecreated}
                                        {date( $config['df'], strtotime($recent_quote->datecreated))}
                                    {/if}
                                </td>
                            </tr>

                            {/foreach}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Invoices -->
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body p-3">
                <h3>{$_L['Recent Invoices']}</h3>
                <div class="hr-line-dashed"></div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{$_L['Invoice']}</th>
                                <th>{$_L['Customer']}</th>
                                <th>{$_L['Status']}</th>
                                <th>{$_L['Created']}</th>
                            </tr>
                        </thead>
                        <tbody>

                            {foreach $recent_invoices as $recent_invoice}

                            <tr>
                                <td>
                                    <a href="{$base_url}invoices/view/{$recent_invoice->id}/">
                                        {cloudonex_get_invoice_number($recent_invoice)}
                                    </a>
                                </td>
                                <td>
                                    <a href="{$base_url}contacts/view/{$recent_invoice->userid}/summary/">
                                        {$recent_invoice->account}
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

    <!-- Recent Clients -->
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body p-3">
                <h3>{$_L['Recent Clients']}</h3>
                <div class="hr-line-dashed"></div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>
                                    {$_L['Client']}
                                </th>
                                <th>
                                    {$_L['Company']}
                                </th>
                                <th>
                                    {$_L['Phone']}
                                </th>
                                <th>
                                    {$_L['Created']}
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            {foreach $recent_customers as $recent_customer}
                            <tr>
                                <td>
                                    <a href="{$base_url}contacts/view/{$recent_customer->id}">
                                        {$recent_customer->account}
                                    </a>
                                </td>
                                <td>
                                    {$recent_customer->company}
                                </td>
                                <td>
                                    {$recent_customer->phone}
                                </td>
                                <td>
                                    {if $recent_customer->created_at}
                                    {date( $config['df'], strtotime($recent_customer->created_at))}
                                    {/if}
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


{/block}

{block name=script}

<script>

        $(function () {
            let orders_chart_options = {
                chart: {
                    type: 'bar',
                    height: 360,
                    sparkline: {
                        enabled: true
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                series: [{
                    name: 'sales',
                    data: [
                        {foreach $orders_for_chart as $key => $value}
                        {$value},
                        {/foreach}
                    ]
                }],
                xaxis: {
                    categories: [
                        {foreach $orders_for_chart as $key => $value }
                        '{$key}',
                        {/foreach}
                    ],
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    markers: {
                        strokeWidth: 3,
                        colors: "#ffffff",
                        strokeColors: [ '#387CFF' , '#f73164' ],
                        hover: {
                            size: 6,
                        }
                    },
                },
                yaxis: {
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                        bottom: 0,
                        top: 35
                    }
                },
                colors: [ '#387CFF' , '#f73164' ],
                fill: {
                    type: 'solid',
                },
                legend: {
                    show: false,
                },
                tooltip: {
                    x: {
                        format: 'MM'
                    },
                },
            };

            let chart = new ApexCharts(document.querySelector("#orders_chart"), orders_chart_options);
            chart.render();

            $.getJSON( "{$_url}accounts/json-income-vs-expense", function( data ) {
                var options1 = {
                    chart: {
                        fontFamily: 'Open Sans, sans-serif',
                        height: 400,
                        {if !empty($config['admin_dark_theme'])}
                        foreColor: '#fff',
                        {/if}
                        toolbar: {
                            show: false
                        },
                        events: {
                            mounted: function(ctx, config) {
                                const highest1 = ctx.getHighestValueInSeries(0);
                                const highest2 = ctx.getHighestValueInSeries(1);

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                                    y: highest1,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
                                    y: highest2,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })
                            },
                        }
                    },
                    {if !empty($config['admin_dark_theme'])}
                    colors: ["#4586DB", "#C23C3E"],
                    {else}
                    colors: ["#387CFF", "#FB8141"],
                    {/if}

                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        width: [0, 2, 5],
                        curve: 'smooth'
                    },
                    fill: {
                        opacity: [0.5, 0.25, 1],
                        gradient: { shade: '#387CFF', shadeIntensity: .8, opacityFrom: .8, opacityTo: .25, stops: [0, 95, 100] }
                    },

                    markers: {
                        discrete: [{
                            seriesIndex: 0,
                            dataPointIndex: 7,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 5
                        }, {
                            seriesIndex: 2,
                            dataPointIndex: 11,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 4
                        }]
                    },
                    subtitle: {
                        text: '{$_L['Net Worth']}',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 35,
                        floating: false,
                        style: {
                            fontSize: '14px',
                            {if !empty($config['admin_dark_theme'])}
                            color:  '#fff',
                            {else}
                            color:  '#565674',
                            {/if}
                        }
                    },
                    title: {
                        text: '{formatCurrency($net_worth,$config['home_currency'])}',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 0,
                        floating: false,
                        style: {
                            fontSize: '25px',
                            {if !empty($config['admin_dark_theme'])}
                            color:  '#fff',
                            {else}
                            color:  '#0e1726'
                            {/if}
                        },
                    },

                    series: [{
                        type: 'area',
                        name: 'Income',
                        data: data.Income,

                    }, {
                        type: 'area',
                        name: 'Expenses',
                        data: data.Expense,
                    }],
                    labels: data.Months,
                    xaxis: {


                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: 0,
                            offsetY: 5,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-xaxis-title',
                            },
                        }
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value, index) {
                                return (value / 1000) + 'K'
                            },
                            offsetX: -22,
                            offsetY: 0,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-yaxis-title',
                            },
                        }
                    },
                    grid: {
                        {if !empty($config['admin_dark_theme'])}
                        borderColor: "#2B2C3F",
                        {else}
                        borderColor: "#f1f1f1",
                        {/if}
                        padding: {
                            top: 10
                        },
                        strokeDashArray: 4,
                        yaxis: {
                            lines: {
                                show: true
                            }
                        }

                    },
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right',
                        offsetY: -50,
                        fontSize: '16px',
                        fontFamily: 'Open Sans, sans-serif',
                        markers: {
                            width: 10,
                            height: 10,
                            strokeWidth: 0,
                            strokeColor: '#fff',
                            fillColors: undefined,
                            radius: 12,
                            onClick: undefined,
                            offsetX: 0,
                            offsetY: 0
                        },
                        itemMargin: {
                            horizontal: 0,
                            vertical: 20
                        }
                    },
                    tooltip: {
                        theme: 'dark',
                        marker: {
                            show: true,
                        },
                        x: {
                            show: false,
                        }
                    },
                    responsive: [{
                        breakpoint: 575,
                        options: {
                            legend: {
                                offsetY: -30,
                            },
                        },
                    }],
                    plotOptions: { bar: { horizontal: !1, columnWidth: "15%", endingShape: "rounded" } },
                    {if !empty($config['admin_dark_theme'])}
                    background: '#000',
                    foreColor: '#fff',
                    {/if}
                };


                var chart1 = new ApexCharts(
                    document.querySelector("#cash_flow_chart"),
                    options1
                );

                chart1.render();
            });

        });

    </script>


{/block}