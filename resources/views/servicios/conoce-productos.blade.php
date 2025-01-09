<div class="box-escencial-servs" style="margin-top: 100px;">
    <span style="font-size: 35px; color: #fff;">{{ __('servicios.desc_3') }}</span>

    <a href="#" class="btn-solicita-reunion">{{ __('servicios.link') }}</a>
</div>

<div>
    <p class="title-conoce-product" style="margin-top: 100px;">
        {{ __('servicios.desc_4') }}
    </p>
    <div class="box-flex-conoce-product">
        <a href="https://www.4you.mx/" target="_blanck">
            <img src="{{ asset('img/4you.png') }}" alt="logo 4you">
        </a>
        <a href="{{ route('productos') }}">
            <img src="{{ asset('img/tabantaj.png') }}" alt="logo tabantaj">
        </a>
    </div>
    <div class="box-escencial-servs linke-box" style="margin-top: 100px; backdrop-filter: blur(4px);">
        <div class="flex-newsLinke">
            <div style="text-align: left;">
                <strong>{{ __('servicios.desc_5') }}</strong><br>
                <span>{{ __('servicios.desc_6') }}</span>
                <br><br>
                <a href="https://www.linkedin.com/newsletters/informaci%C3%B3n-segura-en-un-clic-7085440629945561088/"
                    target="_blanck">
                    <img src="{{ asset('img/btn-linkedin.png') }}" alt="" style="width: 200px; height:auto;">
                </a>
            </div>
            {{-- <div class="card-linked">

            </div> --}}
        </div>
    </div>
</div>
