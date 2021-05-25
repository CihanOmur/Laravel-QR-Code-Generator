@extends('layouts.header')

    <!-- Sayfa content -->
    <div class="w3-content spa">

        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <h2  class="w3-wide">QR KODUNUZ</h2>
            <p class="w3-opacity"><i>Teşekkür Ederiz..</i></p>
            <span>{{$data}}</span>
                <div class="w3-row w3-padding-32">
                <a href="">
                    <div class="w3-third">
                        <p>Paylaş</p>
                        <i class="fa fa-share fa-5x"></i>
                    </div>
                </a>
                <a href="">
                    <div class="w3-third">
                        <p>İndir</p>
                        <i class="fa fa-download fa-5x"></i>
                    </div>
                </a>
                <a href="">
                    <div class="w3-third">
                        <p>Gönder</p>
                        <i class="fa fa-envelope fa-5x"></i>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Sayfa Content -->
    </div>

    @extends('layouts.footer')
</body>

</html>
