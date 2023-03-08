<?php 
ff_share_page('mykeyword');

function ff_share_page( string $keyword) {
    // $keyword = 'p2iq8';
    $title = "Share page for $keyword";
    $long_url = 'https://addons.mozilla.org/en-US/firefox/addon/tailwind-css-devtools/?utm_source=addons.mozilla.org&utm_medium=referral&utm_content=search&yourls=PLACEHOLDER';
    $text = 'PLACEHOLDER description text for now. Fill thsi from <br> THE FORM<br> later.';
    $img = 'https://yourls.wickedfruit.com/images/bad.idea.png';
    $short_url = yourls_site_url() . '/' . $keyword;
    $walink = $twlink = $fblink = $iglink = 'https://greens-efa.eu/PLACEHOLDER';
    
    $buttonclasses = " w-4/5 my-3 px-6 py-3 rounded-lg text-white no-underline font-semibold text-center";

    $walink = "https://api.whatsapp.com/send?text=$title : $text $short_url";

    $twlink = "https://twitter.com/intent/tweet?url=$short_url&text=$title : $text&via=&hashtags=";

    $fblink = "http://www.facebook.com/sharer.php?u=$short_url";

    $iglink = "https://developers.facebook.com/docs/instagram/sharing-to-feed/";

#NIET NODIG WARSCHIJNLJK :
    // <!-- You can use Open Graph tags to customize link previews.
    // Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    // <meta property="og:url"           content="$short_url/$keyword" />
    // <meta property="og:type"          content="website" />
    // <meta property="og:title"         content="$title" />
    // <meta property="og:description"   content="$text" />
    // <meta property="og:image"         content="$img" />


        
echo <<<SHAREPAGE
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet' type='text/css'>
    <link href='/css/main.css' rel='stylesheet' type='text/css'>
    <title>$title</title>
</head>
<body class="">
<div class="mb-3 bg-leaf h-20 flex items-center">
    <div class="shrink-0 mx-auto">
        <img class="h-15 w-60" src="/images/greens_efa_en.svg" alt="Greens EFA Logo">
    </div>
</div>
<div class="container mx-auto flex flex-col items-center lg:w-1/3 md:w-1/2 w-full">
    <div  class=" text-leaf font-bold uppercase p-2 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl mt-8">
        Share this 👇
    </div>
    <div class="p-8 my-3 max-w-lg">
        <p class=""> I just emailed my MEPs and asked them to stop dragging animals all across Europe. The European Paliament needs to end this cruel pratice. Join me! </p>
    </div>
    <div class="p-8 my-3 rounded-xl border-2 border-leaf">
        <img class="mb-4 shadow-md mx-auto h-auto w-full" alt="Use any sample image here..." src="/images/bad.idea.png">
        <p class="font-semibold">posttitle: $title</p> 
        <p class="">posttext:<br> $text</p>
    </div>
    <?php $buttonclasses = " w-4/5 my-3 px-6 py-3 rounded-lg text-white no-underline  font-semibold text-center"; ?>

    <p class="text-base italic">link $short_url</p> 
    <a href="$walink" class="bg-bgwa $buttonclasses" target="_blank">
        Share on WhatsApp</a>

    <a href="$twlink" class="bg-bgtw $buttonclasses" target="_blank">
        Share on Twitter</a>

    <a href="$fblink" class="bg-bgfb $buttonclasses" target="_blank">
        Share on Facebook</a>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your share button code -->
    <div class="fb-share-button bg-bgfb $buttonclasses target="_blank"" 
    data-href="$short_url" 
    data-layout="button_count">
    </div>

    <a href="$iglink" class="bg-bgig $buttonclasses" target="_blank">
        Share on Instagram</a>

</div>
</body>
</html>
SHAREPAGE;
}


