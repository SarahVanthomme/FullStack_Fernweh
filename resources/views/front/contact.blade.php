<form action="{{action('ContactController@store')}}" method="POST">
    @csrf
    <div class="form-group d-flex flex-column justify-content-center text-center">
        <input type="text" class="form-control form-control-sm" id="contact_name" name="name"
               placeholder="Vul hier je volledig naam in.">
    </div>
    <div class="form-group d-flex flex-column justify-content-center text-center">
        <input type="email" class="form-control form-control-sm" id="contact_email" name="email"
               placeholder="Vul hier jeemaiil in.">
    </div>
    <div class="form-group d-flex flex-column justify-content-center text-center">
                                <textarea rows="6" cols="80" class="form-control form-control-sm" name="message" id="message"
                                          placeholder="Recentie of boodschap"></textarea>
    </div>
    <div class=" d-flex justify-content-center align-items-center">
        <button type="submit" class="btn btnContact"> Submit Now </button>
    </div>
</form>
