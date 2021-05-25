@extends('layouts.header')

    <!-- Sayfa content -->
    <div class="w3-content" style="max-width:2000px;margin-top:46px;min-height:570px;">

        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1000px" id="band">
            <h2 class="w3-wide">KODUNUZUN ÜRETİLME AMACINI SEÇİNİZ</h2>
            <p class="w3-opacity"><i>Teşekkür Ederiz..</i></p>
            <a href="{{ route('mail') }}" title="MAİL"><i class="fa fa-envelope" style="margin: 4%; font-size:100px"></i></a>
            <a href="{{ route('vcard') }}" title="VCARD"><i class="fa fa-vcard" style="margin: 4%; font-size:100px"></i></a>
            <a href="{{ route('geo') }}" title="LOCATİON"><i class="fa fa-map-marker" style="margin: 4%; font-size:100px"></i></a>
            <a href="{{ route('url') }}" title="URL AND TEXT"><i  class="fa fa-file-text" style="margin: 4%; font-size:100px"></i></a>
            <a href="{{ route('phone') }}" title="PHONE NUMBER"><i  class="fa fa-mobile" style="margin: 4%; font-size:120px"></i></a>
        </div>
        <!-- End Sayfa Content -->
    </div>

@extends('layouts.footer')

</body>

</html>
