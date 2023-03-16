@extends('master')

@section('content')
    <div id="show" class="signup">
        <div id="hero">
            <figure>

                <img src="/img/horse-fog-meadow-1.jpg" alt="background">
                <div class="overlay"></div>
                <figcaption>
                    <div class="container-fluid">
                        <h1>Inschrijven</h1>
                    </div>
                </figcaption>
            </figure>
        </div>
        <section id="content" class="last-item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="form-blok">
                            <h2>Inschrijven</h2>
                            <p>Vul het onderstaande formulier om in te schrijven</p>
                            @include('flash::message')

                            <form method="POST" id="signupForm" action="{{ route('signup.send') }}">

                                @csrf
                                <input placeholder="Naam *" class="form-control" id="name" name="name" type="text"
                                       value="">
                                @error('name')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="Straat *" class="form-control" id="street" name="street"
                                       type="text" value="">
                                @error('street')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="Postcode *" class="form-control" id="zipcode" name="zipcode"
                                       type="text" value="">
                                @error('zipcode')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="Plaats *" class="form-control" id="place" name="place"
                                       type="text" value="">
                                @error('place')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="Telefoonnummer *" class="form-control" id="phone" name="phone"
                                       type="text" value="">
                                @error('phone')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="E-mailadres *" class="form-control" id="email" name="email"
                                       type="email" value="">
                                @error('email')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <div id="multipleInputsHorse" class="multipleInputs">
                                    <p>Paard(en)</p>
                                    <div class="input-group" style="padding: 0">
                                        <input type="text" class="form-control" name="horses[0][]" placeholder="Naam"
                                               style="margin: 0">
                                        <input type="text" class="form-control" name="horses[0][]"
                                               placeholder="Geboren" style="margin: 0">
                                        <input type="text" class="form-control" name="horses[0][]"
                                               placeholder="UBN" style="margin: 0">
                                        <select class="form-select" style="width: 100%; background-color: #f5f5f5; border-radius: 5px;" name="horses[0][]" aria-label="Default select example">
                                            <option selected>Geslacht</option>
                                            <option value="Hengst">Hengst</option>
                                            <option value="Merrie">Merrie</option>
                                            <option value="Ruin">Ruin</option>
                                        </select>
                                        @error('horses[0][]')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                        <div class="input-group-append" style="display: flex; align-items: center">
                                            <span class="input-group-text" id="basic-addon2"
                                                  onClick="addInputHorse();">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="multipleInputsDoctor" class="multipleInputs">
                                    <p>Dierenarts</p>
                                    <div class="input-group" style="padding: 0">
                                        <input type="text" class="form-control" name="vets[0][]" placeholder="Naam"
                                               style="margin: 0">
                                        <input type="text" class="form-control" name="vets[0][]"
                                               placeholder="Telefoonnummer" style="margin: 0">
                                        <div class="input-group-append" style="display: flex; align-items: center">
                                            <span class="input-group-text" id="basic-addon2"
                                                  onClick="addInputVet();">+</span>
                                        </div>
                                    </div>
                                </div>

                                <div id="multipleInputsFarrier" class="multipleInputs">
                                    <p>Hoefsmid</p>
                                    <div class="input-group" style="padding: 0">
                                        <input type="text" class="form-control" name="farriers[0][]" placeholder="Naam"
                                               style="margin: 0">
                                        <input type="text" class="form-control" name="farriers[0][]"
                                               placeholder="Telefoonnummer" style="margin: 0">
                                        <div class="input-group-append" style="display: flex; align-items: center">
                                            <span class="input-group-text" id="basic-addon2"
                                                  onClick="addInputFarrier();">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div><textarea placeholder="Opmerkingen" rows="6" class="form-control" id="msg"
                                               name="msg" cols="50"></textarea></div>
                                <div class="row bottom">
                                    <div class="col-12 col-md-8">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <div class="container-fluid">
                                                    <input class="form-check-input" style="width: auto;" type="checkbox"
                                                           value="true" name="avg" id="checkVoorwaarden" required="">
                                                </div>
                                                <label class="form-check-label" for="checkVoorwaarden">
                                                    Ik ga akkoord met de <a
                                                        href="/Privacy statement">privacyverklaring</a>.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <button class="btn">
                                            Versturen
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        var v = 1
        var f = 1
        var h = 1

        function addInputVet() {
            var newdiv = document.createElement('div');
            //newdiv.id = dynamicInput[counter];
            newdiv.innerHTML = '<div class="input-group" id="input-group-extra" style="padding: 0">' +
                '<input type="text" class="form-control" name="vets[' + (v) + '][]" placeholder="Naam" style="margin: 0">' +
                '<input type="text" class="form-control" name="vets[' + (v) + '][]" placeholder="Telefoonnummer" style="margin: 0">' +
                '<div class="input-group-append" style="display: flex; align-items: center">' +
                '<span class="input-group-text" id="basic-addon2" onClick="removeInputVet(this);">-</span>' +
                '</div>' +
                '</div>'
            // newdiv.innerHTML = "<div class='input-group' style='padding: 0; margin: 10px 0'><input type='text' class='form-control' name='doctors[1][]' placeholder='Hoefsmid / Veearts " + (counter + 1) + " ' style='margin: 0;'>" +
            //     "<div class='input-group-append' style='display: flex; align-items: center'>" +
            //     "<input type='text' class='form-control' name='doctors[1][]' placeholder='TEL : Hoefsmid / Veearts' style='margin: 0'> <span class='input-group-text' onclick='removeInput(this);'>-</span></div></div>";
            document.getElementById('multipleInputsDoctor').appendChild(newdiv);
            v++
        }

        function addInputFarrier() {
            var newdiv = document.createElement('div');
            //newdiv.id = dynamicInput[counter];
            newdiv.innerHTML = '<div class="input-group" id="input-group-extra" style="padding: 0">' +
                '<input type="text" class="form-control" name="farriers[' + (f) + '][]" placeholder="Naam" style="margin: 0">' +
                '<input type="text" class="form-control" name="farriers[' + (f) + '][]" placeholder="Telefoonnummer" style="margin: 0">' +
                '<div class="input-group-append" style="display: flex; align-items: center">' +
                '<span class="input-group-text" id="basic-addon2" onClick="removeInputFarrier(this);">-</span>' +
                '</div>' +
                '</div>'
            // newdiv.innerHTML = "<div class='input-group' style='padding: 0; margin: 10px 0'><input type='text' class='form-control' name='doctors[1][]' placeholder='Hoefsmid / Veearts " + (counter + 1) + " ' style='margin: 0;'>" +
            //     "<div class='input-group-append' style='display: flex; align-items: center'>" +
            //     "<input type='text' class='form-control' name='doctors[1][]' placeholder='TEL : Hoefsmid / Veearts' style='margin: 0'> <span class='input-group-text' onclick='removeInput(this);'>-</span></div></div>";
            document.getElementById('multipleInputsFarrier').appendChild(newdiv);
            f++
        }

        function addInputHorse() {
            var newdiv = document.createElement('div');
            //newdiv.id = dynamicInput[counter];
            newdiv.innerHTML = '<div class="input-group" id="input-group-extra" style="padding: 0">' +
                '<input type="text" class="form-control" name="horses[' + (h) + '][]" placeholder="Naam" style="margin: 0">' +
                '<input type="text" class="form-control" name="horses[' + (h) + '][]" placeholder="Geboren" style="margin: 0"> ' +
                '<input type="text" class="form-control" name="horses[' + (h) + '][]" placeholder="UBN" style="margin: 0"> ' +
                '<select class="form-select" style="width: 100%; background-color: #f5f5f5; border-radius: 5px;" name="horses[' + (h) + '][]" aria-label="Default select example">' +
                '<option selected>Geslacht</option>' +
                '<option value="Hengst">Hengst</option>' +
                '<option value="Merrie">Merrie</option>' +
                '<option value="Ruin">Ruin</option>' +
                '</select>' +
                '<div class="input-group-append" style="display: flex; align-items: center">' +
                '<span class="input-group-text" id="basic-addon2" onClick="removeInputHorse(this);">-</span>' +
                '</div>' +
                '</div>'
            document.getElementById('multipleInputsHorse').appendChild(newdiv);
            h++
        }

        function removeInputVet(btn) {
            btn.parentNode.parentNode.parentNode.remove();
            v--;
        }

        function removeInputFarrier(btn) {
            btn.parentNode.parentNode.parentNode.remove();
            f--;
        }

        function removeInputHorse(btn) {
            btn.parentNode.parentNode.parentNode.remove();
            h--;
        }

    </script>
@stop
