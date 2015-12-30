<!doctype html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="������� � ������ ������� �� ����. ������������, ���������������, �������������� ������� �������. �������� �������� ������� �������." name="Description" />
    <meta content="��������, ��������, ������, �������, �����������, ������������, �����, ����, �����, ������������" name="keywords" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <title>������ �������. ���������������, �������������� ������� �������. �������� �������� ������� �������.</title>
    <link rel="shortcut icon" href="/img/intsc-marker32.gif" type="image/gif" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/marquee.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/jquery.cookie.js"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-31648705-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <script src="http://www.google-analytics.com/ga.js" type="text/javascript">
    </script>
    <script type="text/javascript">
        var pageTracker = _gat._getTracker('UA-31648705-1');
        pageTracker._trackPageview();
    </script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-31648705-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <script type="text/javascript">
        $(function() {

            var marquee = $("#marquee");
            marquee.css({"overflow": "hidden", "width": "100%"});

            // �������� ��� ������ ����� span (IE �� ����� ���� � inline-block)
            marquee.wrapInner("<span>");
            marquee.find("span").css({ "width": "50%", "display": "inline-block", "text-align":"center" });
            marquee.append(marquee.find("span").clone()); // ��� � ��� ��� span � �������

            marquee.wrapInner("<div>");
            marquee.find("div").css("width", "200%");

            var reset = function() {
                $(this).css("margin-left", "0%");
                $(this).animate({ "margin-left": "-100%" }, 12000, 'linear', reset);
            };

            reset.call(marquee.find("div"));

        });
    </script>

</head>
<body>

<script type="text/javascript" language="JavaScript">
    if( $.cookie('showIntro') == null ) {
        location.href = "intro.html";
        $.cookie("showIntro", "TRUE", { expires: 180});
    }
</script>

<div id="top" class="row">
    <div class="large-12 columns">
        <div class="header_panel">
            <div class="row">
                <div class="large-7 medium-7 columns">
                    <a href="#" ><img src="img/header.png" width="100%" height="auto" alt="introscoping.ru" style="padding-left: 15px" /></a>
                </div>
                <div class="large-3 medium-3 columns">
                    <div class="row" style="float: right">
                    </div>
                </div>
                <div class="large-2 medium-2 columns right">
                    <a href="#" ><img style="padding: 5px" height="89" src="img/LogoIS090.png" width="116" alt="introscoping.ru" /></a>
                </div>
            </div>
            <div id="MenuBar" class="large-12 columns my_menu">
                <ul class="button-group small-centered">
                    <li><a href="index.html" class="button">�������</a></li>
                    <li><a href="service.html" class="button">������ � ����</a></li>
                    <li><a href="article.html" class="button">������</a></li>
                    <li><a href="stuff.html" class="button">���������</a></li>
                    <li><a href="review.html" class="button">������</a></li>
                    <li><a href="map.html" class="button">�����</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="main" class="row">
    <div class="large-12 columns">
        <div class="content_panel">
        </div>
    </div>
</div>

<footer class="row">
    <div class="large-12 columns">
        <hr/>
        <div class="row">
            <div class="large-4 columns">
                <p>&copy; Copyright VHY&Co, 2015</p>
            </div>
            <div class="large-8 columns my_menu">
                <ul class="inline-list right">
                    <li><a href="index.html">�������</a></li>
                    <li><a href="service.html">������ � ����</a></li>
                    <li><a href="article.html">������</a></li>
                    <li><a href="stuff.html">���������</a></li>
                    <li><a href="review.html">������</a></li>
                    <li><a href="map.html">�����</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

</body>
</html>
