<?php
namespace Common\Facebook {
    class Like {

        public static function button($url) {
            return '<div id="fb-root" style="float:left"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<div class="fb-like" data-href="'.$url.'" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial">';
        }
    }
}
