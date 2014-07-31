<div id="popup" class="modal hide fade in" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <div class="modal-body">
        <div class="cfrom-wapper">
            {{ asset('img/create-form-flow.png'); }}
            {{ Form::open(array('url' => URL::route('create'))) }}
            <div class="setpl">
                <div class="message create-form">
                    <textarea rows="4" class="enter-message required" placeholder="Enter Your Message: *" name="message" cols="50">

                    </textarea>
                    <br>You have <span id="charsLeft">1200</span> chars left.
                    <div class="clear"></div>
                    <div id="thumbnail">
                        {{ asset('img/placeholder.gif') }}
                    </div>
                    <input type="file" style="display:none;" id="upload-image" name="image"  class="required">
                    <div id="upload" class="drop-area">
                        <span class="uploadfile">Upload file</span>
                        <p class="help-block">Files must be less than <span>8 MB</span></p>
                        <p class="help-block">Allowed file types: <span>png gif jpg jpeg</span></p>
                    </div>
                </div>
            </div>


            <div class="address">
                <div class="photocreate-form recipient_address_wrapper">
                    <div class="recipient_address" id="recip_1">
                        <h3>Recipient's Address <span class="acount" style="display:none;">-1</span></h3>
                        <input placeholder="Full name* :" class="required" type="text" name="add[0][fullname]" value="">
                        <textarea placeholder="Enter Recipient's Address here *:" rows="8" class="required" name="add[0][address_one]" cols="50">
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="submit">
                <div class="submit-content">
                    <button class="add btn-large btn" type="button">Add Another Address</button>
                    <button class="add btn-large btn" type="button">Remove Address</button>
                    <button class="add btn-large btn" type="button">Save</button>
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>