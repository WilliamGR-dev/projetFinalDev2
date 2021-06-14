<section style="height: 90vh;width: 15%;background-color: #182131" class="">
    <div class="h-50">
        <div  class="w-100 d-flex justify-content-evenly align-items-center" style="padding-top: 15px">
           <a href="{{ url('profile') }}" class="text-white text-decoration-none">
               <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                   <circle id="Oval_4" data-name="Oval 4" cx="17.5" cy="17.5" r="17.5" fill="#616161"/>
               </svg>
               <span>{{session('user')->name}}</span>
           </a>
            <a href="{{ url('logout') }}" class="text-white text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                    <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="text-center">
        <div>
            <a class="btn btn-light rounded-pill fw-bold w-75 upgrade" style="background: linear-gradient(to left, #1E64D7, #1ED761);border: none" href="{{ url('upgrade') }}">UPGRADE</a>
        </div>
    </div>
</section>
