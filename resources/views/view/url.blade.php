@extends('layouts.header')
    <!-- Sayfa content -->
    <div class="w3-content spa">
    <div class="container">
        <form action="{{ route('urlcode') }}" >
        @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname">URL veya Mesajınız </label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" required placeholder="www.cihanomur.net" name="url-text">
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
