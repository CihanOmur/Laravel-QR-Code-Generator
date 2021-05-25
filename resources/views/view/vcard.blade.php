@extends('layouts.header')

    <!-- Sayfa content -->
    <div class="w3-content spa">
    <div class="container">
        <form action="{{ route('vcardcode') }}">
        @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname">Adınız</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" placeholder="Cihan" required  name="name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Soy Adınız</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" placeholder="Omur" required name="surname">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Telefon No</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" placeholder="+90 (555) 555 5555" required name="phone">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">E-mail</label>
                </div>
                <div class="col-75">
                    <input type="email" id="fname" placeholder="mail@cihanomur.net" required name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Adres</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" placeholder="Adresin" required name="adress">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Url / Website</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" placeholder="www.cihanomur.net" name="url">
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-25">
                    <label for="country">Country</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
                </div>
            </div> -->

            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    </div>
    @extends('layouts.footer')
</body>

