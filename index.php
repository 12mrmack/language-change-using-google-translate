
<div class="header__translate">
      <div id="google_translate_element"></div>

      <button class="translate-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="translate-menu"
        aria-label="Toggle translation options">
        <div class="globe">
          <div class="globe-inner"></div>
        </div>
        <span class="translate-text notranslate">EN</span>
      </button>
</div>

<ul class="list-style">
               <li><a href="javascript:void(0)" class="en" data-translate="en">EN</a></li>
               <li><a href="javascript:void(0)" class="ar" data-translate="ar">AR</a></li>
             </ul>
             
<script>
        var r = document.getElementById("google_translate_element"),
            e = document.querySelector('.list-style'),
            i = document.querySelector('[aria-controls="translate-menu"]'),
            s = i.querySelector(".translate-text");
        document.cookie.split("; ").forEach(function (e) {
                        var t = e.split("=");
                        if (1 < t.length) {
                            var n = t[0],
                                r = t[1];
                            if ("googtrans" === n.toLowerCase() && -1 < r.indexOf("/")) {
                                var i = r.substr(1).split("/"),
                                    o = i[i.length - 1];
                                s.innerText = o;
                            }
                        }
                    });
        $(document).on('click','[data-translate]',function(){
            var t = this.dataset.translate,
                e = r.querySelector("select");
            if ("en" === t) {
                $(".goog-te-banner-frame").contents().find("#\\:1\\.restore").click();
            }else if (e) {
                var n;
                    $(e).val(t).trigger("change"), "function" == typeof Event ? (n = new Event("change")) : (n = document.createEvent("Event")).initEvent("change", !0, !0), e.dispatchEvent(n);
            }
            
        });
</script>
<script type="text/javascript">

function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: 'en',
      includedLanguages: 'ar,en',
      layout: google.translate.TranslateElement.InlineLayout.VERTICAL,
      autoDisplay: false,
    },
    'google_translate_element'
  );
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- END Google Translate -->
