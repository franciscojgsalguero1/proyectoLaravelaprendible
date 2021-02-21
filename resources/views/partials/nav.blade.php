
<nav>
    <!--<pre>{{ request() }}</pre>
    <pre>{{ dump(request()) }}</pre>
    {{ dump(request())->url() }}
    {{ dump(request())->path() }}
    {{ dump(request()->routeIs('home')) }}-->

    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">@lang('Home')</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">@lang('About')</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}"> @lang('Project')</a></li>
        <li class="{{ setActive('create') }}"><a href="{{ route('create') }}"> @lang('Create Projects')</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}"> @lang('Contact')</a></li>
    </ul>
</nav>