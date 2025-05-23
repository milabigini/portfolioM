if (!self._FC2COUNTER38590160_1) {
    self._FC2COUNTER38590160_1 = {
        id: 38590160,
        graph_img: null,
        show_graph: function(e) {
            if (this.graph_img == null) {
                var img = this.graph_img = document.createElement('img');
                img.src = 'https://counter1-cdn-ssl.fc2.com/popup.php?id=38590160&main=1&lang=0';
                img.style.visibility = 'hidden';
                img.style.position = 'absolute';
                img.style.zIndex = 10000;
                img.style.margin = '0px';
                img.style.padding = '0px';
                img.width = 260;
                img.height = 130;
                document.body.insertBefore(img, document.body.firstChild);
            }
            var counterh = 25;
            var X, Y, L, T, W, H;
            if (document.all && !window.opera) {
                var csscompat = ((document.compatMode || "").indexOf("CSS") != -1);
                var b = (csscompat ? document.documentElement : document.body);
                X = b.scrollLeft;
                Y = b.scrollTop;
                L = (e.clientX - e.offsetX - 2 + X);
                T = (e.clientY - e.offsetY - 2 + Y);
                W = b.clientWidth - 16;
                H = b.clientHeight - 16;
            } else {
                X = window.pageXOffset;
                Y = window.pageYOffset;
                L = e.pageX;
                T = e.pageY;
                W = window.innerWidth - 16;
                H = window.innerHeight - 16;
            }
            T += counterh;
            if (W > 0 && L + this.graph_img.width > X + W) L = X + W - this.graph_img.width;
            if (L < X) L = X;
            if (T < Y) T = Y;
            this.graph_img.style.left = L + 'px';
            this.graph_img.style.top = T + 'px';
            this.graph_img.style.display = "inline";
            this.graph_img.style.visibility = "visible";
        },
        hide_graph: function(e) {
            if (this.graph_img) {
                this.graph_img.style.visibility = "hidden";
            }
        },
        visit_info: function() {
            var time = new Date();
            var now = Math.floor(time.getTime() / 1000);
            var version = 1, is_first, is_unique;
            var info = [version, 0];
            var cookie_name = "fc2cnt_" + this.id;
            var reg = (" " + document.cookie + ";").match(new RegExp(" " + cookie_name + "=([\\d\\-]+);"));
            if (reg) {
                info = reg[1].split("-");
                is_first = false;
                is_unique = (now - info[1] > 60 * 60 * 24);
            } else {
                is_first = true;
                is_unique = true;
            }
            time.setTime(time.getTime() + 30 * 86400 * 1000);
            document.cookie = cookie_name + "="
                + [
                    version,
                    (is_unique ? now : info[1])
                ].join("-")
                + " ; expires=" + time.toGMTString();
            return (is_first ? '2' : (is_unique ? '1' : '0'));
        },
        disp_js: function() {
            var current = false;
            if ('currentScript' in document && 'parentNode' in document.currentScript && document.currentScript.parentNode != null && 'tagName' in document.currentScript.parentNode && document.currentScript.parentNode.tagName.toUpperCase() != 'HEAD') {
                current = document.currentScript;
            } else {
                current = false;
            }
            var scriptUrl = "https://counter1.fc2.com/counter_js.php?id=38590160&main=1&lang=0&visitor=" + this.visit_info();
            if (!current) {
                var script = document.createElement('script');
                script.src = scriptUrl;
                script.charset = "UTF-8";
                document.body.appendChild(script);
            } else {
                const script = document.createElement('script');
                script.src = scriptUrl;
                script.charset = "UTF-8";
                current.parentNode.appendChild(script);
            }
        }
    };
}
self._FC2COUNTER38590160_1.disp_js();
