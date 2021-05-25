@extends('layouts.header')

    <!-- Sayfa content -->
    <div class="w3-content spa">
    <div class="container">
        <form action="{{route('phonecode')}}">
        @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname">Telefon Numaranız</label>
                </div>
                <div class="col-75">
                    <input type="text" required placeholder="+90 (555) 555 5555" name="phone">
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
