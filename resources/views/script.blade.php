@if(Astrogoat\Blackcart\Settings\BlackcartSettings::isEnabled())
    <!-- Start of BlackCart script -->
    <script type="text/javascript" src="{{ settings(Astrogoat\Blackcart\Settings\BlackcartSettings::class, 'url') }}"></script>
    <!-- End of BlackCart script -->
@endif
