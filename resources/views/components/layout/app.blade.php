<x-layout.dashboard>
    <div class="super_container">
        <header class="header">
            <x-navigation.topbar />
            <x-navigation.header />
        </header>
        <x-navigation.navbar />
            {{$slot}}
        <x-navigation.footer />
    </div>
</x-layout.dashboard>