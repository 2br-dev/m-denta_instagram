{strip}

<!-- <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> -->

{* type   = 'inline' *}

{compress
    attr   = 'data-no-instant'
    mode   = 'js'
    source = [
        [ 'file' => '/js/vendor.min.js' ],
        [ 'file' => '/js/app.min.js' ]
    ]
}

{if isset($suggestions)}
    <!--[if lt IE 10]><script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script><![endif]-->
    <script src="https://dadata.ru/static/js/lib/jquery.suggestions-15.12.min.js"></script>
{/if}
  
<!-- Dependencies -->
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="/apps/libs/jquery.maskedinput-master/src/jquery.maskedinput.js"></script>
  <script src="/apps/libs/lightbox/dist/js/lightbox.js"></script>
  <script src="/static/js/libs/simple-lightbox.min.js"></script>
  <script src="/slick/slick.min.js"></script>
  <script src="/apps/libs/WOW-master/dist/wow.min.js"></script>

<!-- Main JavaScript File -->
  <script src="/static/js/script.js"></script>

</body>
</html>
{/strip}