<!--Contact form 1 on Wordpress-->
<div class="row">
    <input type="hidden" name="page" placeholder=""/>
    <div class="col-12">
        <input type="text" name="NAME" placeholder="Full Name" required/>
    </div>
    <div class="col-12">
        <input type="email" name="EMAIL" placeholder="Email" required/>
    </div>
    <div class="col-12">
        <input type="tel" name="tel" placeholder="Telephone number" required/>
    </div>
    <div class="col-12 form-group">
        <select name="reason" class="form-control">
            <option value="" disabled selected>Enquiry reason</option>
            <option value="Handset enquiry">Handset enquiry</option>
            <option value="Tariff and Data enquiry">Tariff and Data enquiry</option>
            <option value="Connect and Telephony">Connect and Telephony</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="col-12">
        <textarea rows="5" name="MESSAGE" placeholder="Message" required></textarea>
    </div>

</div>


<div class="row justify-content-between">
    <div class="col-9">
        <label class="d-flex text-left margin-bottom-0">
            <input type="checkbox" required name="privacy" style=" margin-top: 5px;width: 10%; margin-right: 10px;">
            <div class="tick-box"></div>
            <span class="text-white i-agree">I consent to Aerial Direct collecting and securely storing the above contact details, processing them with O2 and contacting me in response to my interest, in accordance with our <a
                        class="text-yellow" href="/privacy-policy/">privacy&nbsp;policy</a>.</span>
        </label>
    </div>
    <div class="col-3 text-right">
        <button class="btn-yellow contact-submit-btn" type="submit">Submit</button>
    </div>
</div>
