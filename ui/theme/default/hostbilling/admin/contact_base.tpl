{extends file="$layouts_admin"}
{block name="head"}

    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;
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
        .rounded-circle, .avatar.rounded-circle img {
            border-radius: 50% !important;
        }
        .bg-gradient-red {
            background: linear-gradient(
                    87deg
                    , #f5365c 0, #f56036 100%) !important;
        }

        .bg-gradient-success {
            background: #E9F9EE !important;
            color: #27C76F;
        }
        .bg-gradient-warning {
            background: #FFF4E9 !important;
            color: #FF9F43;
        }
        .bg-gradient-info{
            background: #E8F9FD !important;
            color: #E8F9FD;
        }
        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }
        .bg-gradient-primary {
            background: linear-gradient(
                    87deg
                    , #5e72e4 0, #825ee4 100%) !important;
        }
        .bg-info {
            background: #EFEDFD !important;
        }
        .clx-avatar {
            display: inline-block;
            font-size: 1.3em;
            width: 42px;
            height: 42px;
            line-height: 2;
            text-align: center;
            border-radius: 0%;
            background: #eee5ff;
            vertical-align: middle;
            color: #a47dfd;
        }


        .user-info-title {
            width: 11.785rem;
        }
        .nav-link {
            display: block;
            padding: 0.5rem 1.125rem;
            color: #4d4c5d;
            text-decoration: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

    </style>
{/block}


{block name="content"}

<div class="row">
    <!-- User Card starts-->
    <div class="col-md-4 mb-3">
        <div class="card user-card">
            <div class="card-body">
                <div class="">
                    <div class=" flex-column justify-content-between border-container-lg">
                        <div class="user-avatar-section ">
                            <div class="d-flex justify-content-center">

                                <div class="thumb-info mb-md">
                                    <!-- Profile pic -->
                                    {if $contact['img'] eq 'gravatar'}
                                        <img src="http://www.gravatar.com/avatar/{md5($d['email'])}?s=400"  style="max-width: 120px;" class="img-thumbnail img-responsive" alt="{$contact['fname']} {$contact['lname']}">
                                    {elseif $contact['img'] eq ''}
                                        <img src="{$app_url}storage/system/profile-icon.png" class="img-thumbnail img-fluid" alt="{$contact['fname']} {$contact['lname']}">
                                    {else}
                                        <img src="{{APP_URL}}/{$contact['img']}" class="img-thumbnail img-fluid" style="font-size: 50px;" alt="{$contact['fname']} {$contact['lname']}">
                                    {/if}
                                    <div class="thumb-info-title">
                                        <span class="thumb-info-inner">{$contact['fname']} {$contact['lname']}</span>
                                    </div>

                                    <!-- Full Name -->
                                    <div class="user-info mt-3">
                                        <h4 class="mb-0">{$contact->account}</h4>
                                        <span class="card-text">{$contact->email}</span>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center user-total-numbers mt-4" style="place-content: center;">

                            <!-- Invoices -->
                            <div class="d-flex align-items-center" style="margin-right: 10px;">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <g fill="none" stroke="#27C76F" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6m-4 5H8m8 4H8m2-8H8"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div style="margin-left: 10px;">
                                    <h5 class="mb-0">{$invoices_count}</h5>
                                    <small>{$_L['Invoices']}</small>
                                </div>
                            </div>

                            <!-- Quotes -->
                            <div class="d-flex align-items-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="none" stroke="#07CFE7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/>
                                        </svg>
                                    </div>
                                </div>
                                <div style="margin-left: 10px;">
                                    <h5 class="mb-0">{$quotes_count}</h5>
                                    <small>{$_L['Total Quotes']} </small>
                                </div>
                            </div>

                        </div>

                        <hr>
                    </div>
                    <div class="user-info-wrapper mt-3">

                        <!-- Company -->
                        {if $contact->company}
                        <div class="d-flex flex-wrap my-50 mb-2">
                            <div class="user-info-title text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <b class="card-text user-info-title text-muted font-weight-bold mb-0 ms-3">{$_L['Company Name']}</b>
                            </div>
                            <p class="card-text mb-0">
                                {$contact->company}
                            </p>
                        </div>
                        {/if}

                        <!-- Tags -->
                        {if $contact->tags}
                        <div class="d-flex flex-wrap my-50 mb-2">
                            <div class="user-info-title text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                <b class="card-text user-info-title text-muted  font-weight-bold mb-0 ms-3">{$_L['Tags']}</b>
                            </div>
                            <p class="card-text mb-0">
                                {$contact->tags}
                            </p>
                        </div>
                        {/if}

                        <!-- Group -->
                        {if $contact->gname}
                            <div class="d-flex flex-wrap my-50 mb-2">
                                <div class="user-info-title text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                    <b class="card-text user-info-title text-muted  font-weight-bold mb-0 ms-3">{$_L['Group']}</b>
                                </div>
                                <p class="card-text mb-0">
                                    {$contact->gname}
                                </p>
                            </div>
                        {/if}

                        <!-- Address -->
                        {if $contact->address}
                            <div class="d-flex flex-wrap my-50 mb-2">
                                <div class="user-info-title text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    <b class="card-text user-info-title text-muted font-weight-bold mb-0 ms-3">{$_L['Address']}</b>
                                </div>
                                <p class="card-text mb-0">{$contact->address}</p>
                            </div>
                        {/if}

                        <!-- City -->
                        {if $contact->city}
                            <div class="d-flex flex-wrap mb-2">
                                <div class="user-info-title text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                    <b class="card-text user-info-title  text-muted font-weight-bold mb-0 ms-3">{$_L['City']}</b>
                                </div>
                                <p class="card-text mb-0">{$contact->city}</p>
                            </div>
                        {/if}

                        <!-- Country -->
                        {if $contact->country}
                        <div class="d-flex flex-wrap mb-2">
                            <div class="user-info-title text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                                <b class="card-text user-info-title  text-muted font-weight-bold mb-0 ms-3">{$_L['Country']}</b>
                            </div>
                            <p class="card-text mb-0">{$contact->country}</p>
                        </div>
                        {/if}

                    </div>
                    {if $config['client_dashboard'] eq '1'}
                        <!-- <hr>

                        {if $contact->autologin neq ''}
                            <div class="mb-3 h5">
                                <label for="auto_login_url">{$_L['Auto Login URL']}</label>
                                <input class="form-control" type="text" id="auto_login_url" onClick="this.setSelectionRange(0, this.value.length)" name="auto_login_url" value="{$_url}client/autologin/{$contact->autologin}">
                            </div>
                            <p class="help-block">
                                <a class="h6 text-info" href="{$_url}client/autologin/{$contact->autologin}" target="_blank">{$_L['Login As Customer']}</a> |
                                <a href="{$_url}contacts/revoke_auto_login/{$contact->id}/">{$_L['Revoke Auto Login']}</a> |
                                <a href="{$_url}contacts/gen_auto_login/{$contact->id}/">{$_L['Re Generate URL']}</a>
                            </p>
                        {else}
                            <a href="{$_url}contacts/gen_auto_login/{$contact->id}/" class="md-btn md-btn-primary"> {$_L['Create Auto Login URL']}</a>
                        {/if} -->
                    {/if}
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-8">
        <div  class="card ">

            <div class="card-body">
                <div class="panel-content">

                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item"><a class="nav-link {if $tab == 'invoices'}active{/if}" href="{$base_url}contacts/view/{$contact->id}/invoices/"><strong>{$_L['Invoices']}</strong></a></li>
                            <li class="nav-item"><a class="nav-link {if $tab == 'quotes'}active{/if}" href="{$base_url}contacts/view/{$contact->id}/quotes/"><strong>{$_L['Quotes']}</strong></a></li>
                        <li class="nav-item"><a class="nav-link {if $tab == 'edit'}active{/if}" href="{$base_url}contacts/view/{$contact->id}/edit/"><strong>{$_L['Edit_Account']}</strong></a></li>

                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade show active">
                            {block name="inner_content"}{/block}
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

                $('.add_fund').on('click',function (e) {
                    e.preventDefault();

                    bootbox.prompt({
                        title: "Add Fund",
                        value: "",
                        buttons: {
                            'cancel': {
                                label: 'Cancel'
                            },
                            'confirm': {
                                label: 'OK'
                            }
                        },
                        callback: function(result) {
                            if (result === null) {

                            } else {

                                $.redirectPost(base_url + "contacts/add_fund/",{ amount: result, cid: '{$contact->id}' });

                            }
                        }
                    });
                });


                $('.return_fund').on('click',function (e) {
                    e.preventDefault();

                    bootbox.prompt({
                        title: "Return Fund",
                        value: "",
                        buttons: {
                            'cancel': {
                                label: 'Cancel'
                            },
                            'confirm': {
                                label: 'OK'
                            }
                        },
                        callback: function(result) {
                            if (result === null) {

                            } else {
                                $.redirectPost(base_url + "contacts/return_fund/",{ amount: result, cid: '{$contact->id}' });

                            }
                        }
                    });
                });



            });

        </script>


    {/block}
