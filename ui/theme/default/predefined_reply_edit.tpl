{extends file="$layouts_admin"}

{block name="content"}


    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <form method="post" action="{$_url}tickets/admin/predefined_reply_edit_post">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="title" value="{$reply->title}">
                            </div>
                            <div class="mb-3">
                                <textarea id="message" name="message" class="form-control" rows="5">{$reply->message}</textarea>
                            </div>

                            <div class="mb-3">
                                <input type="hidden" name="id" value="{$reply->id}">
                                <button type="submit" class="btn btn-primary">{$_L['Save']}</button>
                            </div>


                        </form>

                        <div class="hr-line-dashed"></div>

                        <a class="btn btn-danger" href="{$_url}tickets/admin/predefined_replies/">{$_L['Back To The List']}</a>



                    </div>




                </div>
            </div>
        </div>
    </div>

{/block}

{block name=script}

    <script>

        $(function () {
            var $message = $('#message');
            $message.redactor({
                minHeight: 200,
                paragraphize: false,
                replaceDivs: false,
                linebreaks: true
            });
        })

    </script>


{/block}
