

  <section class="bg-white" style="background: rgba(255,255,255,0);">
        <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;background: var(--bs-light);">
            <div style="text-align: center;background: rgba(87,101,242,0.09);margin: 60px;border-radius: 26px;margin-top: 25px;margin-right: 60px;margin-left: 60px;">
                <h6 class="text-dark" style="padding-top: 11px;padding-left: 15px;padding-right: 15px;margin-bottom: -6px;font-size: 19px;">Seller Account</h6>
                <hr style="margin-bottom: 15px;">
                <div class="row" style="padding-right: 66px;padding-left: 66px;">
                    <div class="col"><a href="{{ route('accountindex') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Account Index</a></div>
                   
                  
                    <div class="col"><a href="{{ route('statistics') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Statistics</a></div>
                    <div class="col"><a href="{{ route('history') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Account history</a></div>
                    <div class="col"><a href="{{ route('settings') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Account settings</a></div>
                    
                    <div class="col"><a href="{{ route('affiliate') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Affiliate system</a></div>

                     @seller
                       <div class="col"><a href="{{ route('seller.dashboard') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Dashboard</a></div>
                       <div class="col"><a href="{{ route('seller', ['seller' => auth()->user()->username]) }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Vendor profile</a></div>
                    @else
                     <div class="col"><a href="{{ route('becomeseller') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Become a vendor</a></div>
                    @endif
                     
                    <div class="col"><a href="{{ route('support') }}" style="font-size: 16px;color: var(--bs-blue);padding-right: 0px;">Support</a></div>
                </div>
                <p class="text-black-50" style="padding-left: 34px;padding-right: 34px;padding-bottom: 0px;"><br></p>
            </div>
        </div>
    </section>