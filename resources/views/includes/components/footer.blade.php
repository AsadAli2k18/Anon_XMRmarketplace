

   <footer class="page-footer" style="height: 100%;padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col"><a href="#">1 XMR = {{ \App\Tools\Converter::currencyConverter(\App\Tools\Converter::moneroLastPrice(), auth()->user()->currency) }} {{ \App\Tools\Converter::getSymbol(auth()->user()->currency) }}</a></div>
                <div class="col">
                    <div class="footer-legal">
                        <div class="region" style="text-align: center;">
                            <div class="d-inline-block legal-links" style="text-align: center;">
                                <div class="d-inline-block item">
                                 <a href="{{ config('general.wiki_link') }}">Wiki</a>
                                </div>
                                <div class="d-inline-block item">
                                   <a href="{{ asset('pgp.txt') }}" target="_blank">PGP key</a>
                                </div>
                                <div class="d-inline-block item">
                                <a href="{{ route('support') }}" class="footer-link">Support</a>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>