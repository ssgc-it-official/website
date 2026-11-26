<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white">
    <flux:sidebar sticky collapsible="mobile"
        class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.header>
            <x-app-logo :sidebar="true" href="{{ route('dashboard') }}" wire:navigate />
            <flux:sidebar.collapse class="lg:hidden" />
        </flux:sidebar.header>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Site')" class="grid">
                <flux:sidebar.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')"
                    wire:navigate>
                    {{ __('Dashboard') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Board of Directors')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('admin.director.index')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
                <flux:sidebar.item icon="plus" :href="route('admin.director.create')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Add') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('SGMs')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('admin.sgms.index')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
                <flux:sidebar.item icon="plus" :href="route('admin.sgms.create')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Add') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('GMs')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('admin.gms.index')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
                <flux:sidebar.item icon="plus" :href="route('admin.gms.create')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Add') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Capacity Info')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('admin.capacity-info.edit')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Update') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Blacklisted Firms')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('admin.blacklist.index')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
                <flux:sidebar.item icon="plus" :href="route('admin.blacklist.create')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Add') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Menus')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('admin.menus.index')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
                <flux:sidebar.item icon="plus" :href="route('admin.menus.create')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Add') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:menu.separator />

        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Website')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('home')" :current="request()->routeIs('dashboard')"
                    wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>
        <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('PDF Section')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('document-sections.index')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
                <flux:sidebar.item icon="plus" :href="route('document-sections.create')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Add') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>
         <flux:sidebar.nav>
            <flux:sidebar.group :heading="__('Flame Magazine')" class="grid">
                <flux:sidebar.item icon="plus" :href="route('flame-magazines.index')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('View') }}
                </flux:sidebar.item>
                <flux:sidebar.item icon="plus" :href="route('flame-magazines.create')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Add') }}
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>
        <flux:spacer />

        <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <flux:avatar :name="auth()->user()->name" :initials="auth()->user()->initials()" />

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                        {{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                        class="w-full cursor-pointer" data-test="logout-button">
                        {{ __('Log out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}

    @persist('toast')
    <flux:toast.group>
        <flux:toast />
    </flux:toast.group>
    @endpersist

    @fluxScripts
</body>

</html>
