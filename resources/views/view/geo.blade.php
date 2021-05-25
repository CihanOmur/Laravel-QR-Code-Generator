@extends('layouts.header')
    <!-- Sayfa content -->
    <div class="w3-content spa">
    <div class="container">
        <form action="{{ route('geocode') }}">
        @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname">Enlem</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" required placeholder="1,1111" name="enlem">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Boylam</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" required placeholder="1,1111" name="boylam">
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

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="#" target="_blank">Cihan</a></p>
    </footer>


</body>
