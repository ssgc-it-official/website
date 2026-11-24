<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">

<div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
    <div class="flex w-full max-w-sm flex-col items-center gap-2">

        <!-- Light mode logo -->
        <a href="{{ route('home') }}"
           class="flex flex-col items-center gap-2 font-medium dark:hidden"
           wire:navigate>
            <span class="mb-1 flex h-25 w-50 items-center justify-center rounded-md">
                <x-app-logo-icon class="size-9 fill-current text-black"/>
            </span>
        </a>

        <!-- Dark mode logo -->
        <a href="{{ route('home') }}"
           class="hidden flex-col items-center gap-2 font-medium dark:flex"
           wire:navigate>
            <span class="mb-1 flex h-25 w-50 items-center justify-center rounded-md">
                <x-app-logo-icon-white class="size-9 fill-current text-white"/>
            </span>
        </a>

        <!-- Form content -->
        <div class="flex w-full flex-col gap-6">
            {{ $slot }}
        </div>

    </div>
</div>


@persist('toast')
<flux:toast.group>
    <flux:toast/>
</flux:toast.group>
@endpersist

@fluxScripts
</body>
</html>
