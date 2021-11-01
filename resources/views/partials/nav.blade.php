





<nav>
    <li><a class="{{ setActive('home') }}" href="{{ route('home') }}">@lang('Inicio')</a></li>
    <li><a class="{{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
    <li><a class="{{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Project')</a></li>
    <li><a class="{{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
</nav>
