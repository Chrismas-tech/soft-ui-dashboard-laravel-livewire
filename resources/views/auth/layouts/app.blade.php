<x-layouts.base>

    {{--
        @auth()
            @if (in_array(
        request()->route()->getName(),
        ['static-sign-up', 'sign-up'],
    ))
            @include('auth.layouts.navbars.guest.sign-up')
            {{ $slot }}
            @include('auth.layouts.footers.guest.with-socials')
        @else
        @if (in_array(
        request()->route()->getName(),
        ['sign-in', 'login'],
    ))
            @include('auth.layouts.navbars.login')
            {{ $slot }}
            @include('auth.layouts.footers.description')
        @elseif (in_array(request()->route()->getName(),
                ['profile', 'my-profile']))
            @include('auth.layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100">
                @include('auth.layouts.navbars.auth.nav-profile')
                <div>
                    {{ $slot }}
                    @include('auth.layouts.footers.auth.footer')
                </div>
            </div>
            @include('components.plugins.fixed-plugin')
        @else
            @include('auth.layouts.navbars.auth.sidebar')
            @include('auth.layouts.navbars.auth.nav')
            @include('components.plugins.fixed-plugin')
            {{ $slot }}
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('auth.layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @endif
    @endauth
    --}}

    @guest
        @if (
            !auth()->check() &&
                in_array(request()->route()->getName(),
                    ['login']))
            @include('auth.layouts.navbars.login')
            {{ $slot }}
            <div class="mt-5">
                @include('auth.layouts.footers.with-socials')
            </div>
            {{-- @elseif (
            !auth()->check() &&
                in_array(request()->route()->getName(),
                    ['sign-up']))
            <div>
                @include('auth.layouts.navbars.sign-up')
                {{ $slot }}
                @include('auth.layouts.footers.with-socials')
            </div> --}}
        @endif
    @endguest
</x-layouts.base>
