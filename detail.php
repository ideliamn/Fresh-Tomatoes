<?php
$title_get = $_GET['title'];
// var_dump($title_get);
$title_encode = urlencode($title_get);
$url = file_get_contents("http://www.omdbapi.com/?t=" . $title_encode . "&y=&apikey=36eb9564");
$data = json_decode($url, true);
$response = $data['Response'];
$title = $data['Title'];
$year = $data['Year'];
$rated = $data['Rated'];
$released = $data['Released'];
$runtime = $data['Runtime'];
$genre = $data['Genre'];
$director = $data['Director'];
$writer = $data['Writer'];
$actors = $data['Actors'];
$plot = $data['Plot'];
$language = $data['Language'];
$country = $data['Country'];
$awards = $data['Awards'];
$poster_popular = $data['Poster'];
$imdb = $data['imdbRating'];
$metascore = $data['Metascore'];
$type = $data['Type'];
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="pingback" href="https://demo.colorlib.com/philosophy/xmlrpc.php">
    <link rel="icon" href="favicon.png">

    <title><?= $title . ' (' . $year . ')' ?> | Fresh Tomatoes</title>
    <link rel='dns-prefetch' href='//maps.googleapis.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Welcome to Philosophy WP Theme &raquo; Feed" href="https://demo.colorlib.com/philosophy/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Welcome to Philosophy WP Theme &raquo; Comments Feed" href="https://demo.colorlib.com/philosophy/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Welcome to Philosophy WP Theme &raquo; Aptent per accumsan congue dis Comments Feed" href="https://demo.colorlib.com/philosophy/aptent-per-accumsan-congue-dis/feed/" />
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
    <link rel="alternate" type="application/json" href="https://demo.colorlib.com/philosophy/wp-json/wp/v2/posts/9" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.colorlib.com/philosophy/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.colorlib.com/philosophy/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.5.3" />
    <link rel="canonical" href="https://demo.colorlib.com/philosophy/aptent-per-accumsan-congue-dis/" />
    <link rel='shortlink' href='https://demo.colorlib.com/philosophy/?p=9' />
    <link rel="alternate" type="application/json+oembed" href="https://demo.colorlib.com/philosophy/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.colorlib.com%2Fphilosophy%2Faptent-per-accumsan-congue-dis%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://demo.colorlib.com/philosophy/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.colorlib.com%2Fphilosophy%2Faptent-per-accumsan-congue-dis%2F&#038;format=xml" />
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body id="top" class="post-template-default single single-post postid-9 single-format-standard wp-custom-logo elementor-default elementor-kit-76">

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
                </div> <!-- end header__logo -->
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
                                <li id="menu-item-68" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-68 nav-item depth-1"><a class="dropdown-item" title="Lifestyle" href="https://demo.colorlib.com/philosophy/category/lifestyle/">Lifestyle</a></li>
                                <li id="menu-item-69" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-69 nav-item depth-1"><a class="dropdown-item" title="Family" href="https://demo.colorlib.com/philosophy/category/family/">Family</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-19" class="Pages menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-19 nav-item depth-0 dropdown has-children"><a class="dropdown-toggle nav-link" title="Blog" href="#" data-toggle="dropdown" aria-haspopup="true">Blog <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-64 nav-item depth-1"><a class="dropdown-item" title="Video Post" href="https://demo.colorlib.com/philosophy/dapibus-faucibus-neque-suscipit-ultrices/">Video Post</a></li>
                                <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-63 nav-item depth-1"><a class="dropdown-item" title="Audio Post" href="https://demo.colorlib.com/philosophy/massa-dictum-habitant-nulla-etiam/">Audio Post</a></li>
                                <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-post current-menu-item menu-item-62 nav-item depth-1 active"><a class="dropdown-item" title="Gallery Post" href="https://demo.colorlib.com/philosophy/aptent-per-accumsan-congue-dis/">Gallery Post</a></li>
                                <li id="menu-item-59" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-59 nav-item depth-1"><a class="dropdown-item" title="Standard Post" href="https://demo.colorlib.com/philosophy/nostra-cursus-dapibus-tellus-curae/">Standard Post</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73 nav-item depth-0"><a class="nav-link" title="About" href="https://demo.colorlib.com/philosophy/about/">About</a></li>
                        <li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70 nav-item depth-0"><a class="nav-link" title="Contact" href="https://demo.colorlib.com/philosophy/contact/">Contact</a></li>
                    </ul>
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav>
                <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->
    </section>
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <!-- Post Item Start -->
        <article id="post_9" class="row format-standard single-post post-9 post type-post status-publish has-post-thumbnail hentry category-family category-lifestyle">
            <div class="s-content__header col-full">
                <h1 class="s-content__header col-full" style="text-align: left;"><?= $title . ' (' . $year . ')' ?></h1>
                <p style="text-align: left;"><?= $plot ?></p>
                <!-- <ul class="s-content__header-meta"> -->
                <!-- <li class="date"><a href="https://demo.colorlib.com/philosophy/2020/02/23/">February 23, 2020,</a></li> -->
                <!-- <li class="cat">In<a href="https://demo.colorlib.com/philosophy/category/family/">Family</a><a href="https://demo.colorlib.com/philosophy/category/lifestyle/">Lifestyle</a></li> -->
                <!-- </ul> -->
            </div>
            <!-- <div class="s-content__media col-full"> -->
            <!-- <div class="s-content__post-thumb"><img src="https://demo.colorlib.com/philosophy/wp-content/uploads/sites/14/2020/02/unsplash69447551.jpg" alt="unsplash69447551" /></div> -->
            <!-- </div> -->
            <div class="col-full s-content__main column-2" style="margin-top: 0rem!important;">
                <!-- <figure class="wp-block-gallery columns-2 is-cropped"> -->
                <ul class="blocks-gallery-grid">
                    <li style="padding-right: 50px;">
                        <!-- <figure><img loading="lazy"  style="text-align: center; " width="800" height="530" src="" alt="" data-id="12" data-full-url="http://demo.colorlib.com/philosophy/wp-content/uploads/sites/14/2020/02/unsplash5738422.jpg" data-link="http://demo.colorlib.com/philosophy/turpis-mi-cursus-risus-platea/automatically-downloaded-from-unsplash-com-4/" class="wp-image-12" srcset=" 768w" sizes="(max-width: 800px) 100vw, 800px" /></figure> -->
                        <img src="<?= $poster_popular ?>" alt="">
                    </li>
                    <li class="blocks-gallery-item" style="text-align: left;">
                        <div>
                            <table>
                                <tr>
                                    <td>Title: </td>
                                    <td><?= $title ?></td>
                                </tr>
                                <tr>
                                    <td>Year: </td>
                                    <td><?= $year ?></td>
                                </tr>
                                <tr>
                                    <td>Rated: </td>
                                    <td><?= $rated ?></td>
                                </tr>
                                <tr>
                                    <td>Released: </td>
                                    <td><?= $released ?></td>
                                </tr>
                                <tr>
                                    <td>Runtime: </td>
                                    <td><?= $runtime ?></td>
                                </tr>
                                <tr>
                                    <td>Genre: </td>
                                    <td><?= $genre ?></td>
                                </tr>
                                <tr>
                                    <td>Director: </td>
                                    <td><?= $director ?></td>
                                </tr>
                                <tr>
                                    <td>Writer: </td>
                                    <td><?= $writer ?></td>
                                </tr>
                                <tr>
                                    <td>Actors: </td>
                                    <td><?= $actors ?></td>
                                </tr>
                                <tr>
                                    <td>Language: </td>
                                    <td><?= $language ?></td>
                                </tr>
                                <tr>
                                    <td>Country: </td>
                                    <td><?= $country ?></td>
                                </tr>
                                <tr>
                                    <td>Type: </td>
                                    <td><?= $type ?></td>
                                </tr>
                                <tr>
                                    <td>IMDb Rating: </td>
                                    <td><?= $imdb ?></td>
                                </tr>
                                <tr>
                                    <td>Metacritic Rating: </td>
                                    <td><?= $metascore ?></td>
                                </tr>
                            </table>
                        </div>
                    </li>
                </ul>
                <!-- </figure> -->
                <!-- <div class="saboxplugin-wrap" itemtype="http://schema.org/Person" itemscope itemprop="author">
                    <div class="saboxplugin-gravatar"><img alt='' src='https://secure.gravatar.com/avatar/ac202ef13a6e63998ce0d138c108c829?s=100&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/ac202ef13a6e63998ce0d138c108c829?s=200&#038;d=mm&#038;r=g 2x' class='avatar avatar-100 photo' height='100' width='100' itemprop="image" loading='lazy' /></div>
                    <div class="saboxplugin-authorname"><a href="https://demo.colorlib.com/philosophy/author/colorlibdemo/" class="vcard author" rel="author" itemprop="url"><span class="fn" itemprop="name">colorlibdemo</span></a></div>
                    <div class="saboxplugin-desc">
                        <div itemprop="description">
                            <p>Second divided from form fish beast made. Every of seas all gathered use saying you&#8217;re, he our dominion twon Second divided from</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> -->
                <!-- <div class="s-content__author">
                    <img alt='' src='https://secure.gravatar.com/avatar/ac202ef13a6e63998ce0d138c108c829?s=70&#038;d=mm&#038;r=g' class='avatar avatar-70 photo' height='70' width='70' loading='lazy' />
                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                            <a href="https://demo.colorlib.com/philosophy/author/colorlibdemo/">colorlibdemo</a>
                        </h4>

                        <p>
                            Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from </p>
                    </div>
                </div> -->
                <!-- <div class="s-content__pagenav">
                    <div class="s-content__nav">
                        <div class="s-content__prev">
                            <a href="https://demo.colorlib.com/philosophy/massa-dictum-habitant-nulla-etiam/" rel="prev"><span>Previous Post</span> Massa dictum habitant nulla etiam</a> </div>
                        <div class="s-content__next">
                            <a href="https://demo.colorlib.com/philosophy/turpis-mi-cursus-risus-platea/" rel="next"><span>Next Post</span> Turpis mi cursus risus platea</a> </div>
                    </div>
                </div> -->
                <!-- end s-content__pagenav -->
            </div>
        </article>
        <!-- <div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">
                    <div id="respond" class="comment-respond">
                        <h4>LEAVE A COMMENT <small><a rel="nofollow" id="cancel-comment-reply-link" href="/philosophy/aptent-per-accumsan-congue-dis/#respond" style="display:none;">Cancel reply</a></small></h4>
                        <form action="https://demo.colorlib.com/philosophy/wp-comments-post.php" method="post" id="contactForm" class="" novalidate>
                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                            <div class="form-field"><input class="full-width" placeholder="Your Name" type="text" name="author" value="" id="cName" required='required'></div>
                            <div class="form-field"><input class="full-width" placeholder="Your Email" type="text" name="email" value="" id="cEmail" required='required'></div>
                            <div class="form-field"><input class="full-width" placeholder="Website" type="text" name="url" value="" id="cWebsite"></div>
                            <div class="form-field">
                                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" value="yes" type="checkbox"><label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                            </div>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                            <div class="message form-field"><textarea id="cMessage" class="full-width" rows="10" name="comment" placeholder="Comment..."></textarea></div>
                            <p class="form-submit"><button type="submit" name="submit" id="submit" class="submit btn--primary btn--large full-width">Post Comment</button> <input type='hidden' name='comment_post_ID' value='9' id='comment_post_ID' />
                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                            </p>
                        </form>
                    </div>
                    #respond
                    .comments-area
                </div>
            </div>
        </div> -->
    </section>

    <section class="s-extra" style="margin-bottom: 0rem;!important">
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

    </section>

    <!-- end s-extra -->
    <footer class="s-footer">
        <!-- <div class="s-footer__main">
            <div class="row">
                <div class="col-two md-four mob-full"></div>
                <div class="col-two md-four mob-full">
                    <div id="archives-3" class="single-footer-widget widget mb-100 widget_archive">
                        <h4>ARCHIVES</h4>
                        <ul>
                            <li><a href='https://demo.colorlib.com/philosophy/2020/02/'>February 2020</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-two md-four mob-full">
                    <div id="nav_menu-2" class="single-footer-widget widget mb-100 widget_nav_menu">
                        <h4>SOCIAL</h4>
                        <div class="menu-social-menu-container">
                            <ul id="menu-social-menu-1" class="menu">
                                <li id="menu-item-24" class="Facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-24"><a href="https://www.facebook.com/">Facebook</a></li>
                                <li id="menu-item-25" class="Twitter menu-item menu-item-type-custom menu-item-object-custom menu-item-25"><a href="https://twitter.com/">Twitter</a></li>
                                <li id="menu-item-26" class="Instagram menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="https://www.instagram.com/">Instagram</a></li>
                                <li id="menu-item-27" class="linkedin menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="https://www.linkedin.com/">linkedin</a></li>
                                <li id="menu-item-28" class="pinterest menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="https://www.pinterest.com/">pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-five md-full end">
                    <div id="philosophy_newsletter_widget-1" class="single-footer-widget widget mb-100 widget_philosophy_newsletter_widget">
                        <h4>OUR NEWSLETTER</h4>

                        <div class="s-footer__subscribe">
                            <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>
                            <div class="subscribe-form">
                                <div id="mc-form">
                                    <form id="mc-embedded-subscribe-form" class="group validate" name="mc-embedded-subscribe-form" method="post" action="" target="_blank" novalidate>

                                        <input type="email" name="EMAIL" class="email required" id="mce-EMAIL" placeholder="Email Address" required>

                                        <input type="submit" id="mc-embedded-subscribe" name="subscribe" value="Send">

                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end s-footer__subscribe -->

        </div>
        </div>
        </div>
        <!-- </div> -->
        <!-- Fotter Bottom Area -->
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
    <style type="text/css">
        .saboxplugin-wrap {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            border: 1px solid #eee;
            width: 100%;
            clear: both;
            display: block;
            overflow: hidden;
            word-wrap: break-word;
            position: relative
        }

        .saboxplugin-wrap .saboxplugin-gravatar {
            float: left;
            padding: 20px
        }

        .saboxplugin-wrap .saboxplugin-gravatar img {
            max-width: 100px;
            height: auto;
            border-radius: 0;
        }

        .saboxplugin-wrap .saboxplugin-authorname {
            font-size: 18px;
            line-height: 1;
            margin: 20px 0 0 20px;
            display: block
        }

        .saboxplugin-wrap .saboxplugin-authorname a {
            text-decoration: none
        }

        .saboxplugin-wrap .saboxplugin-authorname a:focus {
            outline: 0
        }

        .saboxplugin-wrap .saboxplugin-desc {
            display: block;
            margin: 5px 20px
        }

        .saboxplugin-wrap .saboxplugin-desc a {
            text-decoration: underline
        }

        .saboxplugin-wrap .saboxplugin-desc p {
            margin: 5px 0 12px
        }

        .saboxplugin-wrap .saboxplugin-web {
            margin: 0 20px 15px;
            text-align: left
        }

        .saboxplugin-wrap .sab-web-position {
            text-align: right
        }

        .saboxplugin-wrap .saboxplugin-web a {
            color: #ccc;
            text-decoration: none
        }

        .saboxplugin-wrap .saboxplugin-socials {
            position: relative;
            display: block;
            background: #fcfcfc;
            padding: 5px;
            border-top: 1px solid #eee
        }

        .saboxplugin-wrap .saboxplugin-socials a svg {
            width: 20px;
            height: 20px
        }

        .saboxplugin-wrap .saboxplugin-socials a svg .st2 {
            fill: #fff;
            transform-origin: center center;
        }

        .saboxplugin-wrap .saboxplugin-socials a svg .st1 {
            fill: rgba(0, 0, 0, .3)
        }

        .saboxplugin-wrap .saboxplugin-socials a:hover {
            opacity: .8;
            -webkit-transition: opacity .4s;
            -moz-transition: opacity .4s;
            -o-transition: opacity .4s;
            transition: opacity .4s;
            box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-color {
            box-shadow: none;
            padding: 0;
            border: 0;
            -webkit-transition: opacity .4s;
            -moz-transition: opacity .4s;
            -o-transition: opacity .4s;
            transition: opacity .4s;
            display: inline-block;
            color: #fff;
            font-size: 0;
            text-decoration: inherit;
            margin: 5px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            overflow: hidden
        }

        .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-grey {
            text-decoration: inherit;
            box-shadow: none;
            position: relative;
            display: -moz-inline-stack;
            display: inline-block;
            vertical-align: middle;
            zoom: 1;
            margin: 10px 5px;
            color: #444;
            fill: #444
        }

        .clearfix:after,
        .clearfix:before {
            content: ' ';
            display: table;
            line-height: 0;
            clear: both
        }

        .ie7 .clearfix {
            zoom: 1
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-twitch {
            border-color: #38245c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-addthis {
            border-color: #e91c00
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-behance {
            border-color: #003eb0
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-delicious {
            border-color: #06c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-deviantart {
            border-color: #036824
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-digg {
            border-color: #00327c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-dribbble {
            border-color: #ba1655
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-facebook {
            border-color: #1e2e4f
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-flickr {
            border-color: #003576
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-github {
            border-color: #264874
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-google {
            border-color: #0b51c5
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-googleplus {
            border-color: #96271a
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-html5 {
            border-color: #902e13
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-instagram {
            border-color: #1630aa
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-linkedin {
            border-color: #00344f
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-pinterest {
            border-color: #5b040e
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-reddit {
            border-color: #992900
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-rss {
            border-color: #a43b0a
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-sharethis {
            border-color: #5d8420
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-skype {
            border-color: #00658a
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-soundcloud {
            border-color: #995200
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-spotify {
            border-color: #0f612c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-stackoverflow {
            border-color: #a95009
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-steam {
            border-color: #006388
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-user_email {
            border-color: #b84e05
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-stumbleUpon {
            border-color: #9b280e
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-tumblr {
            border-color: #10151b
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-twitter {
            border-color: #0967a0
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-vimeo {
            border-color: #0d7091
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-windows {
            border-color: #003f71
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-whatsapp {
            border-color: #003f71
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-wordpress {
            border-color: #0f3647
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-yahoo {
            border-color: #14002d
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-youtube {
            border-color: #900
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-xing {
            border-color: #000202
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-mixcloud {
            border-color: #2475a0
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-vk {
            border-color: #243549
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-medium {
            border-color: #00452c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-quora {
            border-color: #420e00
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-meetup {
            border-color: #9b181c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-goodreads {
            border-color: #000
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-snapchat {
            border-color: #999700
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-500px {
            border-color: #00557f
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-mastodont {
            border-color: #185886
        }

        .sabox-plus-item {
            margin-bottom: 20px
        }

        @media screen and (max-width:480px) {
            .saboxplugin-wrap {
                text-align: center
            }

            .saboxplugin-wrap .saboxplugin-gravatar {
                float: none;
                padding: 20px 0;
                text-align: center;
                margin: 0 auto;
                display: block
            }

            .saboxplugin-wrap .saboxplugin-gravatar img {
                float: none;
                display: inline-block;
                display: -moz-inline-stack;
                vertical-align: middle;
                zoom: 1
            }

            .saboxplugin-wrap .saboxplugin-desc {
                margin: 0 10px 20px;
                text-align: center
            }

            .saboxplugin-wrap .saboxplugin-authorname {
                text-align: center;
                margin: 10px 0 20px
            }
        }

        body .saboxplugin-authorname a,
        body .saboxplugin-authorname a:hover {
            box-shadow: none;
            -webkit-box-shadow: none
        }

        a.sab-profile-edit {
            font-size: 16px !important;
            line-height: 1 !important
        }

        .sab-edit-settings a,
        a.sab-profile-edit {
            color: #0073aa !important;
            box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        .sab-edit-settings {
            margin-right: 15px;
            position: absolute;
            right: 0;
            z-index: 2;
            bottom: 10px;
            line-height: 20px
        }

        .sab-edit-settings i {
            margin-left: 5px
        }

        .saboxplugin-socials {
            line-height: 1 !important
        }

        .rtl .saboxplugin-wrap .saboxplugin-gravatar {
            float: right
        }

        .rtl .saboxplugin-wrap .saboxplugin-authorname {
            display: flex;
            align-items: center
        }

        .rtl .saboxplugin-wrap .saboxplugin-authorname .sab-profile-edit {
            margin-right: 10px
        }

        .rtl .sab-edit-settings {
            right: auto;
            left: 0
        }

        img.sab-custom-avatar {
            max-width: 75px;
        }

        .saboxplugin-wrap .saboxplugin-desc a,
        .saboxplugin-wrap .saboxplugin-desc {
            color: 0 !important;
        }

        .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-grey {
            color: 0;
            fill: 0;
        }

        .saboxplugin-wrap .saboxplugin-authorname a,
        .saboxplugin-wrap .saboxplugin-authorname span {
            color: 0;
        }

        .saboxplugin-wrap {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px
        }

        .saboxplugin-wrap .saboxplugin-authorname {
            font-size: 18px;
            line-height: 25px;
        }

        .saboxplugin-wrap .saboxplugin-desc p,
        .saboxplugin-wrap .saboxplugin-desc {
            font-size: 14px !important;
            line-height: 21px !important;
        }

        .saboxplugin-wrap .saboxplugin-web {
            font-size: 14px;
        }

        .saboxplugin-wrap .saboxplugin-socials a svg {
            width: 18px;
            height: 18px;
        }
    </style>
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
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-includes/js/comment-reply.min.js?ver=5.5.3' id='comment-reply-js'></script>
    <script type='text/javascript' src='https://demo.colorlib.com/philosophy/wp-includes/js/wp-embed.min.js?ver=5.5.3' id='wp-embed-js'></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js?ver=5.5.3' id='mc-validate-js'></script>
    <script>
        window.GA_ID = '';
    </script>
    <script src='https://demo.colorlib.com/philosophy/wp-content/plugins/flying-analytics/js/minimal-analytics.js' defer></script>
</body>

</html>