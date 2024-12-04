<ul>
    <li>
        <a href="{{ route('servicios/soc-noc') }}"
            class="{{ url()->current() === route('servicios/soc-noc') ? 'active' : '' }}">
            {{__('soc-noc.menu.option1')}}
        </a>
    </li>
    <li>
        <a href="{{ route('servicios/ciberinteligencia') }}"
            class="{{ url()->current() === route('servicios/ciberinteligencia') ? 'active' : '' }}">
            {{__('soc-noc.menu.option2')}}
        </a>
    </li>
    <li>
        <a href="{{ route('servicios/consultoria-estrategica') }}"
            class="{{ url()->current() === route('servicios/consultoria-estrategica') ? 'active' : '' }}">
            {{__('soc-noc.menu.option3')}}
        </a>
    </li>
    <li>
        <a href="{{ route('servicios/otras-soluciones') }}"
            class="{{ url()->current() === route('servicios/otras-soluciones') ? 'active' : '' }}">
            {{__('soc-noc.menu.option4')}}
        </a>
    </li>
</ul>
