<div class="mx-auto" style="max-width: 400px;">
    <div class="panel mb-0 rounded-0">
      <div class="panel-hdr">
          <h2>
              {$_L['Send SMS']}
          </h2>
      </div>
        <div class="panel-container">
            <div class="panel-content">
                <form id="ib-modal-form" method="post">

                    <input type="hidden" id="smsQuoteId" name="smsQuoteId" value="{$quote_id}">

                    <div class="mb-3"><label for="from">From </label>

                        <input type="text" name="sms_from" id="sms_from" class="form-control " value="{$config['sms_sender_name']}">
                    </div>

                    <div class="mb-3">
                        <label for="sms_to">To </label>

                        <input type="text" name="sms_to" id="sms_to" class="form-control " value="{$to}">
                    </div>

                    <div class="mb-3">
                        <label for="message">SMS </label>

                        <textarea class="form-control" name="message" id="message" rows="4">{$message}</textarea>

                        <input type="hidden" name="template_id" id="template_id" value="">

                        <p class="help-block" id="sms-counter">
                            Remaining: <span class="remaining"></span> | Length: <span class="length"></span> | Messages: <span class="messages"></span>
                        </p>
                    </div>
                    <div class="modal-footer">



                        <button type="button" data-bs-dismiss="modal" class="btn btn-danger">{$_L['Cancel']}</button>
                        <button class="btn btn-primary modal_submit" type="submit" id="btnModalSMSSend"><i class="fal fa-check"></i> {$_L['Send']}</button>
                    </div>


                </form>

            </div>


        </div>

    </div>

</div>




