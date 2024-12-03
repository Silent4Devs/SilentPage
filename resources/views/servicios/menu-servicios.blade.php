<ul>
    <li>
        <a href="{{ route('servicios/soc-noc') }}"
            class="{{ url()->current() === route('servicios/soc-noc') ? 'active' : '' }}">
            SOC / NOC
        </a>
    </li>
    <li>
        <a href="{{ route('servicios/ciberinteligencia') }}"
            class="{{ url()->current() === route('servicios/ciberinteligencia') ? 'active' : '' }}">
            {{ __('services_ce.ciberinteligencia') }}
        </a>
    </li>
    <li>
        <a href="{{ route('servicios/consultoria-estrategica') }}"
            class="{{ url()->current() === route('servicios/consultoria-estrategica') ? 'active' : '' }}">
            {{ __('services_ce.ce') }}
        </a>
    </li>
    <li>
        <a href="{{ route('servicios/otras-soluciones') }}"
            class="{{ url()->current() === route('servicios/otras-soluciones') ? 'active' : '' }}">
            {{ __('services_ce.soluciones') }}
        </a>
    </li>
</ul>
