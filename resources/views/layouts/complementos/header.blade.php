<div class="first-header mobile-none">
    <content class="content-header">
        <nav>
            <a href="{{ url('/') }}#alianzas">{{ __('nav.alianzas') }}</a>
            <a href="{{ route('exito') }}">{{ __('nav.casosexito') }}</a>
            <a href="{{ route('talento') }}">{{ __('nav.talento') }}</a>
            <a href="{{ route('medios') }}">{{ __('nav.medios') }}</a>
            <a href="{{ route('cert') }}">{{ __('nav.cert') }}</a>
            <a href="#pie-page">Newsletter</a>
            <a href="{{ route('metaverso') }}">{{ __('nav.meta') }}</a>
        </nav>
        <div class="language-switcher">
            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="language-link">EN</a>
            <span>|</span>
            <a href="{{ LaravelLocalization::getLocalizedURL('es') }}" class="language-link">ES</a>
        </div>
        <div class="redes">
            <a href="https://www.instagram.com/team.s4b/" target="_blank"><i class="fa-brands fa-instagram"
                    title="Instragram"></i></a>
            <a href="https://www.linkedin.com/company/silent4business/mycompany/" target="_blank"><i
                    class="fa-brands fa-linkedin" title="-Linkedin"></i></a>
            <a href="https://twitter.com/silent4business" target="_blank"><i class="fa-brands fa-x-twitter"
                    title="x"></i></a>
            <a href="https://www.youtube.com/@silent4business944" target="_blank"><i class="fa-brands fa-youtube"
                    title="Youtube"></i></a>
        </div>
    </content>
</div>
@include('layouts.navs.navbar')
