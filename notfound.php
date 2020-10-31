<?php
$search = $_GET['title'];
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.png">
    <title>Search Results for <?= $search ?> | Fresh Tomatoes</title>
    <link rel='dns-prefetch' href='//maps.googleapis.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Welcome to Philosophy WP Theme &raquo; Feed" href="https://demo.colorlib.com/philosophy/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Welcome to Philosophy WP Theme &raquo; Comments Feed" href="https://demo.colorlib.com/philosophy/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Welcome to Philosophy WP Theme &raquo; Search Results for &#8220;wkwkwkkw&#8221; Feed" href="https://demo.colorlib.com/philosophy/search/wkwkwkkw/feed/rss2/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.colorlib.com\/philosophy\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"
            }
        };
        ! function(e, a, t) {
            var r, n, o, i, p = a.createElement("canvas"),
                s = p.getContext && p.getContext("2d");

            function c(e, t) {
                var a = String.fromCharCode;
                s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                var r = p.toDataURL();
                return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
            }

            function l(e) {
                if (!s || !s.fillText) return !1;
                switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                    case "flag":
                        return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
                    case "emoji":
                        return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }

            function d(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (i = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='sb_instagram_styles-css' href='https://demo.colorlib.com/philosophy/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=2.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='https://demo.colorlib.com/philosophy/wp-includes/css/dist/block-library/style.min.css?ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='https://demo.colorlib.com/philosophy/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='google-font-css' href='//fonts.googleapis.com/css?family=Libre+Baskerville%3A400%2C400i%2C700%7CMontserrat%3A300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C800&#038;ver=5.5.3#038;subset=latin%2C+latin-text' type='text/css' media='all' />
    <link rel='stylesheet' id='base-css' href='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/css/base.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='https://demo.colorlib.com/philosophy/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='vendor-css' href='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/css/vendor.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css' href='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/css/main.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='philosophy-style-css' href='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/style.css?ver=5.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='philosophy-common-css' href='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/css/common.css?ver=5.5.3' type='text/css' media='all' />
    <style id='philosophy-common-inline-css' type='text/css'>
        .s-pageheader:before {
            background-color: ;
        }

        .header__nav li.has-children>a::after {
            border-color: ;
        }

        .header__nav li a {
            color: ;
        }

        .header__nav li:hover>a,
        .header__nav li:focus>a {
            color: ;
        }

        .header__nav li ul {
            background: ;
        }

        .header__nav li ul li a {
            color: ;
        }

        .header__nav li ul li a:hover,
        .header__nav li ul li a:focus {
            color: ;
        }

        .header__search-trigger::before,
        .header__social a {
            color: ;
        }

        #preloader {
            background-color:
        }

        .line-scale>div {
            background-color: ;
        }

        .go-top a,
        .go-top a:visited {
            background-color: ;
        }

        .go-top a:hover,
        .go-top a:focus {
            background-color: ;
        }

        .s-footer {
            background-color: ;
        }

        .s-footer,
        abbr {
            color:
        }

        .s-footer__main h4 {
            color:
        }

        footer a {
            color: ;
        }

        footer a:hover {
            color: ;
        }

        #f0f {
            background-color: ;
        }

        .f0f-content .h1 {
            color: ;
        }

        .f0f-content p {
            color: ;
        }
    </style>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key&#038;ver=5.5.3' id='maps-googleapis-js'></script>
    <link rel="https://api.w.org/" href="https://demo.colorlib.com/philosophy/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.colorlib.com/philosophy/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.colorlib.com/philosophy/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.5.3" />
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body id="top" class="search search-no-results wp-custom-logo elementor-default elementor-kit-76">

    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <section class="s-pageheader">
        <!-- ***** Header Area Start ***** -->
        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="home.php"><img src="logo.png" alt="machothemes logo36420600" style="width:auto;"></a>
                </div>
                <!-- end header__logo -->
                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">
                    <form role="search" method="get" class="header__search-form" action="search.php">
                        <label>
                            <span class="hide-content">Search for:</span>
                            <input type="search" class="search-field" placeholder="Type Keywords" name="search" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>

                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div> <!-- end header__search -->

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>
                    <ul id="menu-primary-menu" class="header__nav">
                        <li id="menu-item-17" class="Home menu-item menu-item-type-custom menu-item-object-custom menu-item-17 nav-item depth-0"><a class="nav-link" title="Home" href="home.php">Home</a></li>
                        <li id="menu-item-18" class="About menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18 nav-item depth-0 dropdown has-children"><a class="dropdown-toggle nav-link" title="Categories" href="#" data-toggle="dropdown" aria-haspopup="true">Categories <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-67" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-67 nav-item depth-1"><a class="dropdown-item" title="Health" href="https://demo.colorlib.com/philosophy/category/health/">Health</a></li>
                                <li id="menu-item-68" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-68 nav-item depth-1"><a class="dropdown-item" title="Lifestyle" href="https://demo.colorlib.com/philosophy/category/lifestyle/">Lifestyle</a></li>
                                <li id="menu-item-69" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-69 nav-item depth-1"><a class="dropdown-item" title="Family" href="https://demo.colorlib.com/philosophy/category/family/">Family</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-19" class="Pages menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19 nav-item depth-0 dropdown has-children"><a class="dropdown-toggle nav-link" title="Blog" href="#" data-toggle="dropdown" aria-haspopup="true">Blog <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-64 nav-item depth-1"><a class="dropdown-item" title="Video Post" href="https://demo.colorlib.com/philosophy/dapibus-faucibus-neque-suscipit-ultrices/">Video Post</a></li>
                                <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-63 nav-item depth-1"><a class="dropdown-item" title="Audio Post" href="https://demo.colorlib.com/philosophy/massa-dictum-habitant-nulla-etiam/">Audio Post</a></li>
                                <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-62 nav-item depth-1"><a class="dropdown-item" title="Gallery Post" href="https://demo.colorlib.com/philosophy/aptent-per-accumsan-congue-dis/">Gallery Post</a></li>
                                <li id="menu-item-59" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-59 nav-item depth-1"><a class="dropdown-item" title="Standard Post" href="https://demo.colorlib.com/philosophy/nostra-cursus-dapibus-tellus-curae/">Standard Post</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73 nav-item depth-0"><a class="nav-link" title="About" href="https://demo.colorlib.com/philosophy/about/">About</a></li>
                        <li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70 nav-item depth-0"><a class="nav-link" title="Contact" href="https://demo.colorlib.com/philosophy/contact/">Contact</a></li>
                    </ul>
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->
    </section>
    <section class="s-content">
        <div class="row masonry-wrap">
            <div class="masonry">
                <article>
                    <div class="text-center">
                        <h1 class="blog-item-title p-b-30">No results found for "<?= $search ?>"</h1>
                        <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                        <div class="backtohome">
                            <a href="home.php">Back to home page</a> </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="s-extra">
    <div class="row top">
            <div class="col-eight md-six tab-full popular">
                <div id="philosophy_popular_post_widget-1" class="single-footer-widget widget mb-100 widget_philosophy_popular_post_widget">

                    <h3>Popular Streaming Movies</h3>

                    <div class="block-1-2 block-m-full popular__posts">

                        <?php
                        $movie_popular_array = array("Rebecca", "On the Rocks", "The Trial of the Chicago 7", "Love and Monsters");
                        for ($i = 0; $i < count($movie_popular_array); $i++) {
                            $movie_popular_encode = urlencode($movie_popular_array[$i]);
                            ${"url_popular$i"} = file_get_contents("http://www.omdbapi.com/?t=" . $movie_popular_encode . "&y=&apikey=36eb9564");
                            $data_popular = json_decode(${"url_popular$i"}, true);
                            ${"title_popular$i"} = $data_popular['Title'];
                            ${"year_popular$i"} = $data_popular['Year'];
                            ${"plot_popular$i"} = $data_popular['Plot'];
                            ${"poster_popular$i"} = $data_popular['Poster'];
                            ${"imdb_popular$i"} = $data_popular['imdbRating'];
                        }
                        ?>

                        <article class="col-block popular__post">
                            <a href="detail.php?title=<?= $title_popular0 ?>" class="popular__thumb">
                                <img width="800" height="530" src="<?= $poster_popular0 ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="<?= $poster_popular0 ?> 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
                            <h5><a href="detail.php?title=<?= $title_popular0 ?>"><?= $title_popular0 ?></a></h5>
                            <section class="popular__meta">
                                <p>IMDb Rating: <?= $imdb_popular0 ?></p>
                            </section>
                        </article>

                        <article class="col-block popular__post">
                            <a href="detail.php?title=<?= $title_popular1 ?>" class="popular__thumb">
                                <img width="800" height="530" src="<?= $poster_popular6 ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="<?= $poster_popular1 ?> 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
                            <h5><a href="detail.php?title=<?= $title_popular1 ?>"><?= $title_popular1 ?></a></h5>
                            <section class="popular__meta">
                                <p>IMDb Rating: <?= $imdb_popular1 ?></p>
                            </section>
                        </article>

                        <article class="col-block popular__post">
                            <a href="detail.php?title=<?= $title_popular2 ?>" class="popular__thumb">
                                <img width="800" height="530" src="<?= $poster_popular8 ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="<?= $poster_popular2 ?> 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
                            <h5><a href="detail.php?title=<?= $title_popular2 ?>"><?= $title_popular2 ?></a></h5>
                            <section class="popular__meta">
                                <p>IMDb Rating: <?= $imdb_popular2 ?></p>
                            </section>
                        </article>

                        <article class="col-block popular__post">
                            <a href="detail.php?title=<?= $title_popular3 ?>" class="popular__thumb">
                                <img width="800" height="530" src="<?= $poster_popular9 ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="<?= $poster_popular3 ?> 768w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
                            <h5><a href="detail.php?title=<?= $title_popular3 ?>"><?= $title_popular3 ?></a></h5>
                            <section class="popular__meta">
                                <p>IMDb Rating: <?= $imdb_popular3 ?></p>
                            </section>
                        </article>

                    </div>
                    <!-- end popular_posts -->

                </div>
            </div>
            <div class="col-four md-six tab-full about">
                <div id="text-1" class="single-footer-widget widget mb-100 widget_text">
                    <h3>About Fresh Tomatoes</h3>
                    <div class="textwidget">
                        <p style="text-align:justify">Fresh Tomatoes is a rip off of American review-aggregation website for film and television, <i>Rotten Tomatoes</i>. This site is built using data get from OMDB API, hoping to provide movie recommendations and ease search for movie information. This site is purposed for EAI (Enterprise Application Integration) course mid-semester test, by Idellia Muthia Nurbaisa (1202174372) class SI-41-08.</p>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- end s-extra -->
    <footer class="s-footer">
        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>Copyright &copy; 2020 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
                    </div>
                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->
    </footer><!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://demo.colorlib.com/philosophy/wp-admin/admin-ajax.php";
    </script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/demo.colorlib.com\/philosophy\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.3' id='contact-form-7-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/js/modernizr.js?ver=3.3.1' id='modernizr-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/js/pace.min.js?ver=1.0.0' id='pace-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/js/plugins.js?ver=1.0' id='plugins-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-content/themes/philosophy-theme/assets/js/main.js?ver=1.0' id='philosophy-main-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-includes/js/wp-embed.min.js?ver=5.5.3' id='wp-embed-js'></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js?ver=5.5.3' id='mc-validate-js'></script>
    <script>
        window.GA_ID = '';
    </script>
    <script src='https://demo.colorlib.com/philosophy/wp-content/plugins/flying-analytics/js/minimal-analytics.js' defer></script>
</body>

</html>