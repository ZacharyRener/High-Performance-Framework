<footer class="content-info">
    <div class="container">
        <div class='footer-left-side'>
            <div class='footer-row-one'>
                <p>{!! $copyright_text !!}</p>
            </div>
            @if($footer_has_disclaimer)
            <div class='footer-row-two'>
                {!! $footer_disclaimer !!}
            </div>
            @endif
        </div>
        <div class='footer-right-side'>
            <div class='footer-row-two'>
                {!! $footer_menu !!}
            </div>
        </div>
    </div>
</footer>
