<?php
$url = 'https://t.me/+ErQglga3d1k2YjVl';

// Fetch HTML content
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3');
$html = curl_exec($ch);
curl_close($ch);

// Parse HTML
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);

// Extract page title (from nested <span>)
$title = $xpath->query('//div[@class="tgme_page_title" and @dir="auto"]/span[@dir="auto"]');
$pageTitle = ($title->length > 0) ? trim($title->item(0)->nodeValue) : 'Not found';

// Extract page extra text
$pageExtra = $xpath->query('//div[@class="tgme_page_extra"]');
$pageExtraText = ($pageExtra->length > 0) ? trim($pageExtra->item(0)->nodeValue) : 'Not found';

// Extract page description
$pageDesc = $xpath->query('//div[@class="tgme_page_description"]');
$pageDescription = 'Not found';
if ($pageDesc->length > 0) {
    $descriptionDiv = $pageDesc->item(0);
    $innerHTML = '';
    foreach ($descriptionDiv->childNodes as $child) {
        $innerHTML .= $descriptionDiv->ownerDocument->saveHTML($child);
    }
    $pageDescription = trim($innerHTML); // Retains <br> tags
}

// Extract image URL
$img = $xpath->query('//img[@class="tgme_page_photo_image"]');
$imageUrl = ($img->length > 0) ? $img->item(0)->getAttribute('src') : 'Not found';


?>

<!DOCTYPE html>
<!-- saved from url=(0030)https://t.me/+ErQglga3d1k2YjVl -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Telegram: Join Group Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>try{if(window.parent!=null&&window!=window.parent){window.parent.postMessage(JSON.stringify({eventType:'web_app_open_tg_link',eventData:{path_full:"\/+ErQglga3d1k2YjVl"}}),'https://web.telegram.org');}}catch(e){}</script>
    
<meta property="og:title" content="Polo Cricket Prediction">
<meta property="og:image" content="https://cdn5.cdn-telegram.org/file/aqg02UmU4ttOO5YSGahBcJkXY92ggXzIISK97Kmr7ZcNZgCgfticOMHVNHUDkmOVRR1LwYaNb_He3Dm_XLs61YqfcMKDfDER7aqYbLkZg0ixFj9EcFNCUclMXdAgUMbYH5r5zl1Bu4KbYNGSDHEU0eI3VGjWvaQFgMdkQZcpZHxxk3PMSUK5T4pKT-_uQ67pqxqh8oN4LI5svTUeZ2mpNaOE_X3P4XhB8Pyt64KBz7-tfpm0gCDyJ4M1a19D_x3HISu1sHKKuxaTPuHE6AH4w7-5jbwZLbDkgp-ujiOlUTp1_47I3ZklzNNAVoD12X6lHB3r941j6PwjRHU0vi56tg.jpg">
<meta property="og:site_name" content="Telegram">
<meta property="og:description" content="Official website links 	Message me WhatsApp 	https://wa.me/918094773757		#You Dreamed for WIN. KRISHNA CRICKET GURU  work for it..# ₹💵💴		#STAY CONNECTED WITH KRISHNA CRICKET GURU $	Join us..@Kpsingh010	https://wa.me/918094773757">

<meta property="twitter:title" content="Polo Cricket Prediction">
<meta property="twitter:image" content="https://cdn5.cdn-telegram.org/file/aqg02UmU4ttOO5YSGahBcJkXY92ggXzIISK97Kmr7ZcNZgCgfticOMHVNHUDkmOVRR1LwYaNb_He3Dm_XLs61YqfcMKDfDER7aqYbLkZg0ixFj9EcFNCUclMXdAgUMbYH5r5zl1Bu4KbYNGSDHEU0eI3VGjWvaQFgMdkQZcpZHxxk3PMSUK5T4pKT-_uQ67pqxqh8oN4LI5svTUeZ2mpNaOE_X3P4XhB8Pyt64KBz7-tfpm0gCDyJ4M1a19D_x3HISu1sHKKuxaTPuHE6AH4w7-5jbwZLbDkgp-ujiOlUTp1_47I3ZklzNNAVoD12X6lHB3r941j6PwjRHU0vi56tg.jpg">
<meta property="twitter:site" content="@Telegram">

<meta property="al:ios:app_store_id" content="686449807">
<meta property="al:ios:app_name" content="Telegram Messenger">
<meta property="al:ios:url" content="tg://join?invite=ErQglga3d1k2YjVl">

<meta property="al:android:url" content="tg://join?invite=ErQglga3d1k2YjVl">
<meta property="al:android:app_name" content="Telegram">
<meta property="al:android:package" content="org.telegram.messenger">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@Telegram">
<meta name="twitter:description" content="Official website links 	Message me WhatsApp 	https://wa.me/918094773757		#You Dreamed for WIN. KRISHNA CRICKET GURU  work for it..# ₹💵💴		#STAY CONNECTED WITH KRISHNA CRICKET GURU $	Join us..@Kpsingh010	https://wa.me/918094773757
">
<meta name="twitter:app:name:iphone" content="Telegram Messenger">
<meta name="twitter:app:id:iphone" content="686449807">
<meta name="twitter:app:url:iphone" content="tg://join?invite=ErQglga3d1k2YjVl">
<meta name="twitter:app:name:ipad" content="Telegram Messenger">
<meta name="twitter:app:id:ipad" content="686449807">
<meta name="twitter:app:url:ipad" content="tg://join?invite=ErQglga3d1k2YjVl">
<meta name="twitter:app:name:googleplay" content="Telegram">
<meta name="twitter:app:id:googleplay" content="org.telegram.messenger">
<meta name="twitter:app:url:googleplay" content="https://t.me/+ErQglga3d1k2YjVl">

<meta name="apple-itunes-app" content="app-id=686449807, app-argument: tg://join?invite=ErQglga3d1k2YjVl">
    <script>window.matchMedia&&window.matchMedia('(prefers-color-scheme: dark)').matches&&document.documentElement&&document.documentElement.classList&&document.documentElement.classList.add('theme_dark');</script>
    <link rel="icon" type="image/svg+xml" href="https://telegram.org/img/website_icon.svg?4">
<link rel="apple-touch-icon" sizes="180x180" href="https://telegram.org/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://telegram.org/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://telegram.org/img/favicon-16x16.png">
<link rel="alternate icon" href="https://telegram.org/img/favicon.ico" type="image/x-icon">
    <link href="./TG/font-roboto.css" rel="stylesheet" type="text/css">
    <!--link href="/css/myriad.css" rel="stylesheet"-->
    <link href="./TG/bootstrap.min.css" rel="stylesheet">
    <link href="./TG/telegram.css" rel="stylesheet" media="screen">
  <style>@font-face {
              font-family: 'Open Sans Regular';
              font-style: normal;
              font-weight: 400;
              src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-regular.woff');
          }</style><style>@font-face {
              font-family: 'Open Sans Bold';
              font-style: normal;
              font-weight: 800;
              src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/OpenSans-Bold.woff');
          }</style><style>@font-face {
              font-family: 'Open Sans ExtraBold';
              font-style: normal;
              font-weight: 800;
              src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-800.woff');
          }</style><style type="text/css">
    @font-face{font-family:"Roboto";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-100.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-100.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-100.ttf) format("truetype");font-style:normal;font-weight:100;font-display:swap}@font-face{font-family:"Roboto";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-300.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-300.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-300.ttf) format("truetype");font-style:normal;font-weight:300;font-display:swap}@font-face{font-family:"Roboto";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-400.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-400.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-400.ttf) format("truetype");font-style:normal;font-weight:400;font-display:swap}@font-face{font-family:"Roboto";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-500.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-500.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-500.ttf) format("truetype");font-style:normal;font-weight:500;font-display:swap}@font-face{font-family:"Roboto";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-700.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-700.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-700.ttf) format("truetype");font-style:normal;font-weight:700;font-display:swap}@font-face{font-family:"Roboto";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-900.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-900.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Roboto/roboto-900.ttf) format("truetype");font-style:normal;font-weight:900;font-display:swap}@font-face{font-family:"Rebond";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-400.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-400.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-400.ttf) format("truetype");font-style:normal;font-weight:400;font-display:swap}@font-face{font-family:"Rebond";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-500.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-500.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-500.ttf) format("truetype");font-style:normal;font-weight:500;font-display:swap}@font-face{font-family:"Rebond";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-600.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-600.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-600.ttf) format("truetype");font-style:normal;font-weight:600;font-display:swap}@font-face{font-family:"Rebond";src:url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-700.woff) format("woff"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-700.woff2) format("woff2"),url(chrome-extension://jkagfomdekeocgkicjolfkpciipclpkb/fonts/Rebond/rebond-700.ttf) format("truetype");font-style:normal;font-weight:700;font-display:swap}
    #__wikibuy__ .__wikibuy.__onTop,body~div:not(#gdx-bubble-host),#piggyWrapper,#honeyContainer,#earny-root{position:absolute !important;z-index:100000 !important}.mm-slideout{z-index:initial}.sorry-for-this__empty-styles{position:relative;z-index:10000}
    #adcedhhdbadafafiaebhdaidcdebdedi div:empty {
      display: block !important;
    }
  </style><style>.keyword-info-container{box-sizing:border-box;width:92%;margin-bottom:20px;font-size:12px;border-bottom:1px solid #dee1e5;border:1px solid #f1f3f4;margin:14px 16px;border-radius:2px;padding:20px;position:relative;-webkit-font-smoothing:antialiased}body[data-dt="1"] .keyword-info-container,html[dark] .keyword-info-container{border-color:#3d4042}.keyword-info-container .title{color:#26282d;font-size:16px;font-weight:bold}.keyword-info-container .tabs{list-style:none;display:flex;justify-content:flex-start;border-bottom:1px solid #dee1e5;margin-top:-10px;padding:0px 16px;align-items:center}.keyword-info-container .tabs.tip{border-color:#f8b199 !important;border-radius:2px;border:1px solid}.keyword-info-container .tabs li{padding:8px;padding-left:0;color:#000;cursor:pointer;font-size:12px}.keyword-info-container .tabs li.small{font-size:10px}.keyword-info-container .tabs li:last-child{overflow:hidden}.keyword-info-container .tabs li.active{color:#4285f4;margin:20px 0}table.keyword-info-table{border-collapse:collapse;width:100%;color:#000;font-size:12px;position:relative}.keyword-info-table thead{height:50px}.keyword-info-table th{padding:10px;padding-left:0;font-weight:bold;color:#000;font-size:12px}.keyword-info-table th:first-child{padding-left:16px}.keyword-info-table th:last-child{padding-right:0px}.keyword-info-table td{border-bottom:1px solid #f1f3f4;padding:10px;padding-left:0;height:50px;box-sizing:border-box}.keyword-info-table tr{border-bottom:1px solid #f1f3f4}body[data-dt="1"] .keyword-info-table td,html[dark] .keyword-info-table td{border-color:#3d4042}body[data-dt="1"] .keyword-info-table tr,html[dark] .keyword-info-table tr{border-color:#3d4042}body[data-dt="1"] .keyword-info-table tfoot tr,body[data-dt="1"] .keyword-info-table tfoot td,html[dark] .keyword-info-table tfoot tr,html[dark] .keyword-info-table tfoot td{border:none}.keyword-info-table td:first-child{padding-left:16px}.keyword-info-table td:last-child{padding-right:0px}.keyword-info-table tfoot tr,.keyword-info-table tfoot td{border:none}.ubersuggest-button{color:#0086f7;font-family:Figtree;font-size:14px;font-weight:bold;line-height:29px;padding:8px 30px;border:1px solid #0086f7;background-color:#fff;border-radius:2px;outline:none;border:none;cursor:pointer;margin:4px}.ubersuggest-logo-wrapper{display:flex;align-items:center;justify-content:flex-end;margin:10px 10px 0 0;font-weight:bold;color:#26282d}.ubersuggest-logo{width:182px;height:33px;cursor:pointer}.keyword-info-container .row{display:flex;justify-content:space-between;align-items:center;margin:0;padding:20px 16px}.header h2{color:#000;font-family:Figtree;font-size:24px;font-weight:500}html[dark] .keyword-info-container .title{color:#fff}html[dark] table.keyword-info-table{color:#fff}html[dark] .keyword-info-table th{color:#fff}html[dark] .keyword-info-table tfoot tr:last-child td .button-arrow{border-color:#fff}body[data-dt="1"] .keyword-info-container .title{color:#fff}body[data-dt="1"] .keyword-info-container .tabs{border-color:rgba(255,255,255,.0509803922)}body[data-dt="1"] table.keyword-info-table{color:#fff}body[data-dt="1"] .keyword-info-table th{color:#fff}</style><style>.tippy-box[data-theme~=tip-dark] .tippy-content,.tippy-box[data-theme~=tip-light] .tippy-content{padding:0}.tippy-box[data-theme~=tip-dark]>.tippy-backdrop{background-color:#fff}.tippy-box[data-theme~=tip-dark]>.tippy-arrow:after{border-color:#fff;border-style:solid}.tippy-box[data-theme~=tip-dark][data-placement^=top]>.tippy-arrow:before{border-top-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=top]>.tippy-arrow:after{border-top-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=bottom]>.tippy-arrow:before{border-bottom-color:#fff;bottom:16px}.tippy-box[data-theme~=tip-dark][data-placement^=bottom]>.tippy-arrow:after{border-bottom-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=left]>.tippy-arrow:before{border-left-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=left]>.tippy-arrow:after{border-left-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=right]>.tippy-arrow:before{border-right-color:#fff}.tippy-box[data-theme~=tip-dark][data-placement^=right]>.tippy-arrow:after{border-right-color:#fff}.tippy-box[data-theme~=tip-dark]>.tippy-svg-arrow{fill:#fff}.tippy-box[data-theme~=tip-light]>.tippy-backdrop{background-color:#202020}.tippy-box[data-theme~=tip-light]>.tippy-arrow:after{border-color:#202020;border-style:solid}.tippy-box[data-theme~=tip-light][data-placement^=top]>.tippy-arrow:before{border-top-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=top]>.tippy-arrow:after{border-top-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=bottom]>.tippy-arrow:before{border-bottom-color:#202020;bottom:16px}.tippy-box[data-theme~=tip-light][data-placement^=bottom]>.tippy-arrow:after{border-bottom-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=left]>.tippy-arrow:before{border-left-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=left]>.tippy-arrow:after{border-left-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=right]>.tippy-arrow:before{border-right-color:#202020}.tippy-box[data-theme~=tip-light][data-placement^=right]>.tippy-arrow:after{border-right-color:#202020}.tippy-box[data-theme~=tip-light]>.tippy-svg-arrow{fill:#202020}</style><style>.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;white-space:normal;outline:0;transition-property:transform,visibility,opacity}.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}.tippy-box[data-placement^=top]>.tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}.tippy-box[data-placement^=bottom]>.tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}.tippy-box[data-placement^=left]>.tippy-arrow{right:0}.tippy-box[data-placement^=left]>.tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}.tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(0.54, 1.5, 0.38, 1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:rgba(0,0,0,0);border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}</style><style>.tippy-box[data-theme~=light]{color:#26323d;box-shadow:0 0 20px 4px rgba(154,161,177,.15),0 4px 80px -8px rgba(36,40,47,.25),0 4px 4px -2px rgba(91,94,105,.15);background-color:#fff}.tippy-box[data-theme~=light][data-placement^=top]>.tippy-arrow:before{border-top-color:#fff}.tippy-box[data-theme~=light][data-placement^=bottom]>.tippy-arrow:before{border-bottom-color:#fff}.tippy-box[data-theme~=light][data-placement^=left]>.tippy-arrow:before{border-left-color:#fff}.tippy-box[data-theme~=light][data-placement^=right]>.tippy-arrow:before{border-right-color:#fff}.tippy-box[data-theme~=light]>.tippy-backdrop{background-color:#fff}.tippy-box[data-theme~=light]>.tippy-svg-arrow{fill:#fff}</style><style id="_goober"> @keyframes go2264125279{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go3020080000{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}@keyframes go463499852{from{transform:scale(0) rotate(90deg);opacity:0;}to{transform:scale(1) rotate(90deg);opacity:1;}}@keyframes go1268368563{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}@keyframes go1310225428{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go651618207{0%{height:0;width:0;opacity:0;}40%{height:0;width:6px;opacity:1;}100%{opacity:1;height:10px;}}@keyframes go901347462{from{transform:scale(0.6);opacity:0.4;}to{transform:scale(1);opacity:1;}}.go4109123758{z-index:9999;}.go4109123758 > *{pointer-events:auto;}</style><style>.ubersuggest-header-container{box-sizing:border-box;width:100%;font-size:12px;-webkit-font-smoothing:antialiased}@keyframes slideInFromLeft{from{transform:translateX(100%);opacity:0}to{transform:translateX(-4%);opacity:1}}.ubersuggest-header-container .toast-container{animation:slideInFromLeft .5s ease forwards}.ubersuggest-header-container .row{margin:0;padding:15px 16px 15px 16px;display:flex;justify-content:space-between;align-items:center;min-height:30px}.ubersuggest-header-container .row>div{display:flex;flex-wrap:wrap;gap:8px}.ubersuggest-header-container .row>div:first-child>div{flex-wrap:wrap;align-content:space-around}.ue-enable{display:block}.ue-disable,.ue-enable.hide-settings{display:none !important}.ue-disable.hide-settings{display:flex !important}.ubersuggest-header-container .settings{display:flex;align-items:center}.ubersuggest-header-container .settings-label{margin-right:21px}.ubersuggest-header-container .settings-icon{width:21px;height:21px;margin-right:7px}</style><style>.rr--group{display:flex;width:100%;position:relative}.rr--box{display:flex;width:100%;flex-grow:1;-webkit-tap-highlight-color:rgba(0,0,0,0)}.rr--svg{display:flex;aspect-ratio:1;width:100%;flex-grow:1;overflow:clip;pointer-events:none}@supports not (overflow: clip){.rr--svg{overflow:auto}}.rr--box:focus,.rr--box:focus-visible,.rr-reset:focus-visible,.rr-reset:focus{outline:none;box-shadow:none}.rr--focus-reset{outline:6px double #0079ff}.rr--box:focus-visible .rr--svg{outline:6px double #0079ff;isolation:isolate}.rr--reset{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0;right:0;bottom:50%}[dir=rtl] .rr--reset{left:0;right:auto}.rr--dir-y .rr--reset{bottom:0;right:50%}.rr--disabled{opacity:.5;cursor:not-allowed}.rr--disabled .rr--svg{pointer-events:none}.rr--pointer .rr--box{cursor:pointer}.rr--dir-x{flex-direction:row}.rr--dir-y{flex-direction:column}.rr--space-sm .rr--svg{padding:8%}.rr--space-md .rr--svg{padding:12.5%}.rr--space-lg .rr--svg{padding:17.5%}.rr--dir-x.rr--gap-sm .rr--svg{margin:0 6.25%}.rr--dir-x.rr--gap-sm .rr--box:focus-visible:after{width:87.5%;left:6.25%}.rr--dir-x.rr--gap-md .rr--svg{margin:0 12.5%}.rr--dir-x.rr--gap-md .rr--box:focus-visible:after{width:75%;left:12.5%}.rr--dir-x.rr--gap-lg .rr--svg{margin:0 25%}.rr--dir-x.rr--gap-lg .rr--box:focus-visible:after{width:50%;left:25%}.rr--dir-y.rr--gap-sm .rr--svg{margin:6.25% 0}.rr--dir-y.rr--gap-md .rr--svg{margin:12.5% 0}.rr--dir-y.rr--gap-lg .rr--svg{margin:25% 0}.rr--rx-sm .rr--svg{border-radius:5%}.rr--rx-md .rr--svg{border-radius:15%}.rr--rx-lg .rr--svg{border-radius:20%}.rr--rx-full .rr--svg{border-radius:100%}.rr--has-stroke .rr--svg{stroke-linecap:round;stroke-linejoin:round}.rr--has-border .rr--svg{border-width:var(--rr--border-width);border-style:solid}.rr--on .rr--svg{fill:var(--rr--fill-on-color, none)}.rr--off .rr--svg{fill:var(--rr--fill-off-color, none)}.rr--has-stroke .rr--on .rr--svg{stroke:var(--rr--stroke-on-color, currentColor)}.rr--has-stroke .rr--off .rr--svg{stroke:var(--rr--stroke-off-color, currentColor)}.rr--on .rr--svg{background-color:var(--rr--box-on-color, none)}.rr--off .rr--svg{background-color:var(--rr--box-off-color, none)}.rr--has-border .rr--off .rr--svg{border-color:var(--rr--border-off-color, currentColor)}.rr--has-border .rr--on .rr--svg{border-color:var(--rr--border-on-color, currentColor)}.rr--fx-colors{--rr--easing: .2s cubic-bezier(.61, 1, .88, 1)}.rr--fx-colors .rr--svg{transition-duration:.2s;transition-timing-function:var(--rr--easing);transition-property:background-color,border-color,fill,stroke}.rr--fx-opacity .rr--off{opacity:.35;transition:opacity var(--rr--easing)}.rr--fx-opacity .rr--on{opacity:1}@media(hover: hover){.rr--fx-opacity .rr--box:hover{opacity:1}}@media(hover: hover){.rr--fx-zoom .rr--box{transition:transform var(--rr--easing);transform:scale(1)}.rr--fx-zoom .rr--box:hover{transform:scale(1.2)}}@media(hover: hover)and (prefers-reduced-motion){.rr--fx-zoom .rr--box:hover{transform:scale(1)}}@media(hover: hover){.rr--fx-position .rr--box{transition:transform var(--rr--easing);transform:translateY(0)}.rr--fx-position .rr--box:hover{transform:translateY(-15%)}}@media(hover: hover)and (prefers-reduced-motion){.rr--fx-position .rr--box:hover{transform:translateY(0)}}.rr--svg-stop-1{stop-color:var(--rr--fill-on-color, rgba(0, 0, 0, 0))}[dir=rtl] .rr--svg-stop-1,.rr--svg-stop-2{stop-color:var(--rr--fill-off-color, rgba(0, 0, 0, 0))}[dir=rtl] .rr--svg-stop-2{stop-color:var(--rr--fill-on-color, rgba(0, 0, 0, 0))}.rr--hf-svg-on{fill:var(--rr--fill-on-color, none)}.rr--hf-svg-off{fill:var(--rr--fill-off-color, none)}.rr--has-stroke .rr--hf-svg-on{stroke:var(--rr--stroke-on-color, currentColor)}.rr--has-stroke .rr--hf-svg-off{stroke:var(--rr--stroke-off-color, currentColor)}.rr--hf-svg-on .rr--svg,.rr--hf-svg-off .rr--svg{background-color:var(--rr--box-off-color, none)}.rr--has-border .rr--hf-svg-on .rr--svg{border-color:var(--rr--border-on-color, currentColor)}.rr--has-border .rr--hf-svg-off .rr--svg{border-color:var(--rr--border-off-color, currentColor)}.rr--dir-x .rr--hf-box-int .rr--svg{background:linear-gradient(to right, var(--rr--box-on-color, none) 50%, var(--rr--box-off-color, none) 50%)}[dir=rtl] .rr--dir-x .rr--hf-box-int .rr--svg{background:linear-gradient(to left, var(--rr--box-on-color, none) 50%, var(--rr--box-off-color, none) 50%)}.rr--dir-y .rr--hf-box-int .rr--svg{background:linear-gradient(to bottom, var(--rr--box-on-color, none) 50%, var(--rr--box-off-color, none) 50%)}.rr--hf-box-on .rr--svg{background-color:var(--rr--box-on-color, none)}.rr--hf-box-off .rr--svg{background-color:var(--rr--box-off-color, none)}.rr--hf-box-on .rr--svg,.rr--hf-box-off .rr--svg,.rr--hf-box-int .rr--svg{fill:var(--rr--fill-off-color, none)}.rr--has-stroke .rr--hf-box-on .rr--svg,.rr--has-stroke .rr--hf-box-off .rr--svg,.rr--has-stroke .rr--hf-box-int .rr--svg{stroke:var(--rr--stroke-off-color, currentColor)}.rr--has-border .rr--hf-box-on .rr--svg,.rr--has-border .rr--hf-box-int .rr--svg{border-color:var(--rr--border-on-color, currentColor)}.rr--has-border .rr--hf-box-off .rr--svg{border-color:var(--rr--border-off-color, currentColor)}</style><style>.keyword-info-section{color:#26282d;font-family:Figtree;font-size:12px;height:100%;display:flex;align-items:center;-webkit-font-smoothing:antialiased}.keyword-info-section img{max-width:none}.keyword-info-section>li{font-weight:600;position:relative;display:flex;align-items:center;gap:6px}.keyword-info-section>li:first-child::after{content:"";width:6px;height:6px;background-color:#e8ebec;border-radius:50%;margin:0px 10px 0px 4px}body[data-dt="1"] .keyword-info-section>li:first-child::after{background-color:#636363}.keyword-info-section.hidden{display:none}.keyword-info-section.google{background-color:rgba(0,0,0,0)}.keyword-info-section.youtube{margin-right:15px;padding:0 0 0 10px;height:100%;background-color:#fff}.keyword-info-section.amazon{padding:13px 0;background-color:#fff}</style><style>.kw-overview-container{box-sizing:border-box;width:673px;padding:0;margin:0;margin-top:14px;font-size:12px;font-family:Figtree;-webkit-font-smoothing:antialiased}.kw-overview-container.youtube{box-sizing:border-box;width:645px;padding:0;margin:0;font-size:12px}</style><style>.bl-info-container{box-sizing:border-box;width:100%;padding:0;margin:0;font-size:12px;font-family:"Figtree";-webkit-font-smoothing:antialiased}.bl-info-header{display:flex;min-height:24px;width:100%;padding:0;justify-content:space-between;box-sizing:border-box;margin-bottom:5px}.bl-info-header .row{display:flex;margin:0;width:100%;justify-content:space-between}.bl-info-header .row.youtube{justify-content:flex-start}.bl-info-content,.kw-info-content{width:97%;display:flex;flex-direction:column;border:1px solid #dee1e5;border-radius:4px;padding-block:16px 10px;justify-items:center;align-items:center;margin-bottom:16px;position:relative}body[data-dt="1"] .kw-info-content,body[data-dt="1"] .bl-info-content{background:rgba(0,0,0,0);border-color:#292929}.bl-info-content img.loading{width:50px;margin:0 auto;margin-bottom:10px}.kw-info-content img.loading{width:50px;margin:0 auto;margin-top:10px;margin-bottom:10px}table.bl-info-table,table.kw-info-table{border-collapse:collapse;width:calc(100% - 32px);color:#808185;font-size:12px}body[data-dt="1"] table.bl-info-table,body[data-dt="1"] table.kw-info-table{color:#fff}.bl-info-table thead,.kw-info-table thead{height:50px;background:#f6f7f7}body[data-dt="1"] table.bl-info-table thead,body[data-dt="1"] table.kw-info-table thead{background:#36373a}.bl-info-table tr,.kw-info-table tr{width:100%;max-width:600px}.bl-info-table th,.kw-info-table th{padding:10px;padding-left:0;font-weight:600;color:#000;font-size:12px;border-bottom:1px solid #f6f7f7}body[data-dt="1"] .bl-info-table th,body[data-dt="1"] .kw-info-table th{color:#fff;border-color:#3d4043}.bl-info-table th:first-child,.kw-info-table th:first-child{padding-left:16px}.bl-info-table th:last-child,.kw-info-table th:last-child{border-right:none;padding-right:16px}.bl-info-table td,.kw-info-table td{border-bottom:1px solid #dee1e5;padding:10px;padding-left:0;max-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;color:#000}body[data-dt="1"] .bl-info-table td,body[data-dt="1"] .kw-info-table td{color:#fff;border-color:#3d4043}.bl-info-table td:first-child,.kw-info-table td:first-child{border-left:none;padding-left:16px}.bl-info-table tfoot td:first-child,.kw-info-table tfoot td:first-child{padding-left:0;padding-top:12px}.bl-info-table tfoot td:last-child,.kw-info-table tfoot td:last-child{padding-right:0;padding-top:12px}.bl-info-table td:last-child,.kw-info-table td:last-child{border-right:none;padding-right:16px}.bl-info-table tfoot tr:last-child td,.kw-info-table tfoot tr:last-child td{border-bottom:none}.bl-info-container .row{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap}.bl-info-container .row.start{justify-content:flex-start;gap:10px}.bl-info-container .row.start.tip{border:1px solid #f8b199;border-radius:2px;width:fit-content;padding-right:10px}</style><style>.statistics-graph-container{box-sizing:border-box;width:92%;font-size:12px;border-bottom:1px solid #dee1e5;border:1px solid #f1f3f4;margin:24px 16px;border-radius:2px;padding:20px;padding-bottom:10px;position:relative;-webkit-font-smoothing:antialiased}body[data-dt="1"] .statistics-graph-container{border-color:#3d4042}.statistics-graph-container.tip{border:1px solid #f8b199;border-radius:2px}.statistics-graph-container .row{display:flex;justify-content:space-between;align-items:center;margin:0 0 20px 0}.statistics-graph-container .row.closed{margin-bottom:10px}.statistics-graph-container .row .title{color:#26282d;font-size:16px;font-weight:bold}body[data-dt="1"] .statistics-graph-container .row .title{color:#fff}body[data-dt="1"] .statistics-graph-container .tabs{border-bottom:1px solid #dee1e5}body[data-dt="1"] .statistics-graph-container .tabs li{color:#fff}body[data-dt="1"] .statistics-graph-container .tabs li.active{color:#fff;border-bottom:3px solid #fff}</style><style data-styled="active" data-styled-version="5.3.9">.dWTrLf{visibility:hidden;}.igvzJt{font-family:roboto;font-weight:100;}.igvzJr{font-family:roboto;font-weight:300;}.igvzJo{font-family:roboto;font-weight:400;}.igvzJp{font-family:roboto;font-weight:500;}.igvzJn{font-family:roboto;font-weight:700;}.igvzJl{font-family:roboto;font-weight:900;}.uAvZv{font-family:rebond;font-weight:400;}.uAvZu{font-family:rebond;font-weight:500;}.uAvZx{font-family:rebond;font-weight:600;}.uAvZw{font-family:rebond;font-weight:700;}</style>
      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16944569676"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16944569676');
</script>

  </head>
  <body class="">
      <div class="tgme_background_wrap">
    <canvas id="tgme_background" class="tgme_background default" width="50" height="50" data-colors="dbddbb,6ba587,d5d88d,88b884"></canvas>
    <div class="tgme_background_pattern default"></div>
  </div>
    <div class="tgme_page_wrap">
      <div class="tgme_head_wrap">
        <div class="tgme_head">
          <a href="https://telegram.org/" class="tgme_head_brand">
            <svg class="tgme_logo" height="34" viewBox="0 0 133 34" width="133" xmlns="http://www.w3.org/2000/svg">
              <g fill="none" fill-rule="evenodd">
                <circle cx="17" cy="17" fill="var(--accent-btn-color)" r="17"></circle><path d="m7.06510669 16.9258959c5.22739451-2.1065178 8.71314291-3.4952633 10.45724521-4.1662364 4.9797665-1.9157646 6.0145193-2.2485535 6.6889567-2.2595423.1483363-.0024169.480005.0315855.6948461.192827.1814076.1361492.23132.3200675.2552048.4491519.0238847.1290844.0536269.4231419.0299841.65291-.2698553 2.6225356-1.4375148 8.986738-2.0315537 11.9240228-.2513602 1.2428753-.7499132 1.5088847-1.2290685 1.5496672-1.0413153.0886298-1.8284257-.4857912-2.8369905-1.0972863-1.5782048-.9568691-2.5327083-1.3984317-4.0646293-2.3321592-1.7703998-1.0790837-.212559-1.583655.7963867-2.5529189.2640459-.2536609 4.7753906-4.3097041 4.755976-4.431706-.0070494-.0442984-.1409018-.481649-.2457499-.5678447-.104848-.0861957-.2595946-.0567202-.3712641-.033278-.1582881.0332286-2.6794907 1.5745492-7.5636077 4.6239616-.715635.4545193-1.3638349.6759763-1.9445998.6643712-.64024672-.0127938-1.87182452-.334829-2.78737602-.6100966-1.12296117-.3376271-1.53748501-.4966332-1.45976769-1.0700283.04048-.2986597.32581586-.610598.8560076-.935815z" fill="#fff"></path><path d="m49.4 24v-12.562h-4.224v-2.266h11.198v2.266h-4.268v12.562zm16.094-4.598h-7.172c.066 1.936 1.562 2.772 3.3 2.772 1.254 0 2.134-.198 2.97-.484l.396 1.848c-.924.396-2.2.682-3.74.682-3.476 0-5.522-2.134-5.522-5.412 0-2.97 1.804-5.764 5.236-5.764 3.476 0 4.62 2.86 4.62 5.214 0 .506-.044.902-.088 1.144zm-7.172-1.892h4.708c.022-.99-.418-2.618-2.222-2.618-1.672 0-2.376 1.518-2.486 2.618zm9.538 6.49v-15.62h2.706v15.62zm14.84-4.598h-7.172c.066 1.936 1.562 2.772 3.3 2.772 1.254 0 2.134-.198 2.97-.484l.396 1.848c-.924.396-2.2.682-3.74.682-3.476 0-5.522-2.134-5.522-5.412 0-2.97 1.804-5.764 5.236-5.764 3.476 0 4.62 2.86 4.62 5.214 0 .506-.044.902-.088 1.144zm-7.172-1.892h4.708c.022-.99-.418-2.618-2.222-2.618-1.672 0-2.376 1.518-2.486 2.618zm19.24-1.144v6.072c0 2.244-.462 3.85-1.584 4.862-1.1.99-2.662 1.298-4.136 1.298-1.364 0-2.816-.308-3.74-.858l.594-2.046c.682.396 1.826.814 3.124.814 1.76 0 3.08-.924 3.08-3.234v-.924h-.044c-.616.946-1.694 1.584-3.124 1.584-2.662 0-4.554-2.2-4.554-5.236 0-3.52 2.288-5.654 4.862-5.654 1.65 0 2.596.792 3.102 1.672h.044l.11-1.43h2.354c-.044.726-.088 1.606-.088 3.08zm-2.706 2.948v-1.738c0-.264-.022-.506-.088-.726-.286-.99-1.056-1.738-2.2-1.738-1.518 0-2.64 1.32-2.64 3.498 0 1.826.924 3.3 2.618 3.3 1.012 0 1.892-.66 2.2-1.65.088-.264.11-.638.11-.946zm5.622 4.686v-7.26c0-1.452-.022-2.508-.088-3.454h2.332l.11 2.024h.066c.528-1.496 1.782-2.266 2.948-2.266.264 0 .418.022.638.066v2.53c-.242-.044-.484-.066-.814-.066-1.276 0-2.178.814-2.42 2.046-.044.242-.066.528-.066.814v5.566zm16.05-6.424v3.85c0 .968.044 1.914.176 2.574h-2.442l-.198-1.188h-.066c-.638.836-1.76 1.43-3.168 1.43-2.156 0-3.366-1.562-3.366-3.19 0-2.684 2.398-4.07 6.358-4.048v-.176c0-.704-.286-1.87-2.178-1.87-1.056 0-2.156.33-2.882.792l-.528-1.76c.792-.484 2.178-.946 3.872-.946 3.432 0 4.422 2.178 4.422 4.532zm-2.64 2.662v-1.474c-1.914-.022-3.74.374-3.74 2.002 0 1.056.682 1.54 1.54 1.54 1.1 0 1.87-.704 2.134-1.474.066-.198.066-.396.066-.594zm5.6 3.762v-7.524c0-1.232-.044-2.266-.088-3.19h2.31l.132 1.584h.066c.506-.836 1.474-1.826 3.3-1.826 1.408 0 2.508.792 2.97 1.98h.044c.374-.594.814-1.034 1.298-1.342.616-.418 1.298-.638 2.2-.638 1.76 0 3.564 1.21 3.564 4.642v6.314h-2.64v-5.918c0-1.782-.616-2.838-1.914-2.838-.924 0-1.606.66-1.892 1.43-.088.242-.132.594-.132.902v6.424h-2.64v-6.204c0-1.496-.594-2.552-1.848-2.552-1.012 0-1.694.792-1.958 1.518-.088.286-.132.594-.132.902v6.336z" fill="var(--tme-logo-color)" fill-rule="nonzero"></path>
              </g>
            </svg>
          </a>
          <a class="tgme_head_right_btn" href="https://telegram.org/dl?tme=fa53b76e9d3ebda0ef_9779601450530288372">
            Download
          </a>
        </div>
      </div>
      <div class="tgme_body_wrap">
        <div class="tgme_page">
          <div class="tgme_page_photo">
<a href="tg://join?invite=ErQglga3d1k2YjVl"><img class="tgme_page_photo_image" src="<?php echo $imageUrl;?>"></a>
</div>
<div class="tgme_page_title" dir="auto">
<span dir="auto"> <?php echo $pageTitle; ?></span>
</div>
<div class="tgme_page_extra"><?php echo $pageExtraText; ?></div>
<div class="tgme_page_description" dir="auto">
    <?php echo $pageDescription; ?>
</div>
<div class="tgme_page_action">
<a class="tgme_action_button_new shine" href="tg://join?invite=ErQglga3d1k2YjVl">Join Channel</a>
</div>
<!-- WEBOGRAM_BTN -->
<div class="tgme_page_additional">
You are invited to the channel <strong dir="auto">Polo Cricket Prediction</strong>. Click above to join.
</div>
        </div>
        
      </div>
    </div>

    <div id="tgme_frame_cont"></div>

    <script src="./TG/tgwallpaper.min.js.download"></script>

    <script type="text/javascript">

var protoUrl = "tg:\/\/join?invite=ErQglga3d1k2YjVl";
if (false) {
  var iframeContEl = document.getElementById('tgme_frame_cont') || document.body;
  var iframeEl = document.createElement('iframe');
  iframeContEl.appendChild(iframeEl);
  var pageHidden = false;
  window.addEventListener('pagehide', function () {
    pageHidden = true;
  }, false);
  window.addEventListener('blur', function () {
    pageHidden = true;
  }, false);
  if (iframeEl !== null) {
    iframeEl.src = protoUrl;
  }
  !false && setTimeout(function() {
    if (!pageHidden) {
      window.location = protoUrl;
    }
  }, 2000);
}
else if (protoUrl) {
  setTimeout(function() {
    window.location = protoUrl;
  }, 100);
}

var tme_bg = document.getElementById('tgme_background');
if (tme_bg) {
  TWallpaper.init(tme_bg);
  TWallpaper.animate(true);
  window.onfocus = function(){ TWallpaper.update(); };
}
document.body.classList.remove('no_transition');

function toggleTheme(dark) {
  document.documentElement.classList.toggle('theme_dark', dark);
  window.Telegram && Telegram.setWidgetOptions({dark: dark});
}
if (window.matchMedia) {
  var darkMedia = window.matchMedia('(prefers-color-scheme: dark)');
  toggleTheme(darkMedia.matches);
  darkMedia.addListener(function(e) {
    toggleTheme(e.matches);
  });
}

    
    </script>
