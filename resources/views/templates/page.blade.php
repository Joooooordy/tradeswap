<!DOCTYPE html>
<html lang="en">

<body>

@include('templates.nav')
<div class="content">
    @yield('content')
    @livewire('cart')
</div>
@include('templates.footer')
</body>

</html>
