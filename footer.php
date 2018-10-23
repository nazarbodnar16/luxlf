<?php global $webshowcase; ?>

<footer id="footer">
    <div class="footer-container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-6 col-sm-12"><div class="text-block"><p>All site visitors should consult the legal notice for detailed local legal requirements applicable to your country and links to specific entities of the  which are able to operate under those restrictions.</p></div>
            </div>
            <div class="col-md-6 col-sm-12 clearfix">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="">Our Funds</a></li>
                        <li><a href="">About US</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">​​​​​​​Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
     <div class="row">
        <div class="col-md-6 col-sm-12"><div class="text-block">
            <p>&copy; Carlisle SCA, Luxembourg Life Fund 2018-2019.  All rights reserved</p>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 clearfix">
        <nav class="footer-nav">
            <ul>
                <li><a href="">Disclaimer </a></li>
                <li><a href="">Terms &amp; Conditions</a></li>
                <li><a href="">Complaint Policy</a></li>
            </ul>
        </nav>
    </div>
</div>
</div>
</div>
</footer>

<?php wp_footer(); ?>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=<?php if( !empty($webshowcase['gmap_api_key']) ) echo $webshowcase['gmap_api_key'];?>&callback=initMap">
</script>

</body>
</html>