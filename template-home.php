<?php
/*
* Template Name: Homepage
*/

get_header(); 

$dataHome = get_fields(get_the_ID());

?>


<main id="content">
    <div class="top_section">

        <div class="container top_section-inner">
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>

                <div class="menu__box">
                    <div class="logo">
                        <a href="/" class="wrapper_img"><img src="/wp-content/uploads/2020/11/Gummiadler-ZSD_05_final_250px_mob.png" alt=""></a>
                    </div>
                    
                    <?php wp_nav_menu( [ 
                        'menu' => 'Mobile Main Menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ,
                        'container' => false ] ); ?>
                </div>

            </div>

            <?php if(!empty($dataHome['top_title_s'])){ ?>
            <h3><?php echo $dataHome['top_title_s']; ?></h2>
                <?php } ?>
                <div class="mo-width" style="position: relative;width:100vw;margin-left: calc(-50vw + 50%);">
                    <img  style="margin-bottom:20px; max-width:100%;height:auto;" src="/wp-content/uploads/2024/08/AryaS-Protection-UG-top-logo.png" alt="<?php echo $dataHome['top_title_n']; ?>" />
                    <!--
                    <h1 style="font-family:'BernardMTCondensed'"><?php echo $dataHome['top_title_n']; ?></h1>
                    -->

                    <a class="total_link_block" style="display:none!important;" href="/totmannschaltung/">
                        <div class="intro-block">
                            <div class="monitor">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 500 200" style="enable-background:new 0 0 500 200;" xml:space="preserve">
                                <g>
                                    <polyline class="ekg" points="486.6,113.8 328.2,113.8 310.3,132.3 296,70.7 246.8,127.4 241.6,120.2 233.9,166.4 227,27.6 
                                        213.2,118.3 211.8,112.3 205.1,126.1 198.2,108.5 194.1,124.4 184.5,92.9 174.1,113 4.3,113    "/>
                                </g>
                                </svg>
                            </div>
                        </div>
                        <span class="total_title">Sonderaktion Totmannschaltung</span>
                    </a>

                </div>
                
                <div class="top_section_wrapper_img">
                    <svg version="1.1" id="orbit" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="2189.9px" height="2029.5px" viewBox="0 0 2189.9 2029.5"
                        style="enable-background:new 0 0 2189.9 2029.5;" xml:space="preserve">
                        <defs>
                            <filter id="blur">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="3" />
                            </filter>

                            <filter xmlns="http://www.w3.org/2000/svg" id="dropshadow" filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB">
                                <feComponentTransfer in="SourceAlpha">
                                    <feFuncR type="discrete" tableValues="255" />
                                    <feFuncG type="discrete" tableValues="255" />
                                    <feFuncB type="discrete" tableValues="255" />
                                </feComponentTransfer>
                                <feGaussianBlur stdDeviation="30" />
                                <feOffset dx="0" dy="0" result="shadow" />
                                <feComposite in="SourceGraphic" in2="shadow" operator="over" />
                            </filter>
                        </defs>
                        <style type="text/css">
                        .st0 {
                            fill: #666666;
                        }

                        .st1 {
                            fill: url(#SVGID_1_);
                        }

                        .st2 {
                            fill: url(#SVGID_2_);
                        }

                        .st3 {
                            fill: url(#SVGID_3_);
                        }

                        .st4 {
                            fill: url(#SVGID_4_);
                        }

                        .st5 {
                            font-family: 'Arimo-Bold';
                        }

                        .st6 {
                            font-size: 64px;
                        }

                        .st7 {
                            fill: url(#SVGID_5_);
                        }

                        .st8 {
                            fill: url(#SVGID_6_);
                            filter: url(#Adobe_OpacityMaskFilter);
                        }

                        .st9 {
                            mask: url(#id32_2_);
                            fill: url(#SVGID_7_);
                        }

                        .st10 {
                            fill: url(#SVGID_8_);
                            filter: url(#Adobe_OpacityMaskFilter_1_);
                        }

                        .st11 {
                            mask: url(#id34_2_);
                            fill: url(#SVGID_9_);
                        }

                        .st12 {
                            fill: url(#SVGID_10_);
                            filter: url(#Adobe_OpacityMaskFilter_2_);
                        }

                        .st13 {
                            mask: url(#id36_2_);
                            fill: url(#SVGID_11_);
                        }

                        .st14 {
                            fill: url(#SVGID_12_);
                            filter: url(#Adobe_OpacityMaskFilter_3_);
                        }

                        .st15 {
                            mask: url(#id38_2_);
                            fill: url(#SVGID_13_);
                        }

                        .st16 {
                            fill: url(#SVGID_14_);
                        }

                        .st17 {
                            fill: url(#SVGID_15_);
                            filter: url(#Adobe_OpacityMaskFilter_4_);
                        }

                        .st18 {
                            mask: url(#id32_1_);
                            fill: url(#SVGID_16_);
                        }

                        .st19 {
                            fill: url(#SVGID_17_);
                            filter: url(#Adobe_OpacityMaskFilter_5_);
                        }

                        .st20 {
                            mask: url(#id34_1_);
                            fill: url(#SVGID_18_);
                        }

                        .st21 {
                            fill: url(#SVGID_19_);
                            filter: url(#Adobe_OpacityMaskFilter_6_);
                        }

                        .st22 {
                            mask: url(#id36_1_);
                            fill: url(#SVGID_20_);
                        }

                        .st23 {
                            fill: url(#SVGID_21_);
                            filter: url(#Adobe_OpacityMaskFilter_7_);
                        }

                        .st24 {
                            mask: url(#id38_1_);
                            fill: url(#SVGID_22_);
                        }

                        .st25 {
                            fill: url(#SVGID_23_);
                        }

                        .st26 {
                            fill: url(#SVGID_24_);
                            filter: url(#Adobe_OpacityMaskFilter_8_);
                        }

                        .st27 {
                            mask: url(#id32_3_);
                            fill: url(#SVGID_25_);
                        }

                        .st28 {
                            fill: url(#SVGID_26_);
                            filter: url(#Adobe_OpacityMaskFilter_9_);
                        }

                        .st29 {
                            mask: url(#id34_3_);
                            fill: url(#SVGID_27_);
                        }

                        .st30 {
                            fill: url(#SVGID_28_);
                            filter: url(#Adobe_OpacityMaskFilter_10_);
                        }

                        .st31 {
                            mask: url(#id36_3_);
                            fill: url(#SVGID_29_);
                        }

                        .st32 {
                            fill: url(#SVGID_30_);
                            filter: url(#Adobe_OpacityMaskFilter_11_);
                        }

                        .st33 {
                            mask: url(#id38_3_);
                            fill: url(#SVGID_31_);
                        }

                        .st34 {
                            fill: url(#SVGID_32_);
                        }

                        .st35 {
                            fill: url(#SVGID_33_);
                            filter: url(#Adobe_OpacityMaskFilter_12_);
                        }

                        .st36 {
                            mask: url(#id32_4_);
                            fill: url(#SVGID_34_);
                        }

                        .st37 {
                            fill: url(#SVGID_35_);
                            filter: url(#Adobe_OpacityMaskFilter_13_);
                        }

                        .st38 {
                            mask: url(#id34_4_);
                            fill: url(#SVGID_36_);
                        }

                        .st39 {
                            fill: url(#SVGID_37_);
                            filter: url(#Adobe_OpacityMaskFilter_14_);
                        }

                        .st40 {
                            mask: url(#id36_4_);
                            fill: url(#SVGID_38_);
                        }

                        .st41 {
                            fill: url(#SVGID_39_);
                            filter: url(#Adobe_OpacityMaskFilter_15_);
                        }

                        .st42 {
                            mask: url(#id38_4_);
                            fill: url(#SVGID_40_);
                        }

                        .st43 {
                            fill: url(#SVGID_41_);
                        }

                        .st44 {
                            fill: url(#SVGID_42_);
                            filter: url(#Adobe_OpacityMaskFilter_16_);
                        }

                        .st45 {
                            mask: url(#id32_5_);
                            fill: url(#SVGID_43_);
                        }

                        .st46 {
                            fill: url(#SVGID_44_);
                            filter: url(#Adobe_OpacityMaskFilter_17_);
                        }

                        .st47 {
                            mask: url(#id34_5_);
                            fill: url(#SVGID_45_);
                        }

                        .st48 {
                            fill: url(#SVGID_46_);
                            filter: url(#Adobe_OpacityMaskFilter_18_);
                        }

                        .st49 {
                            mask: url(#id36_5_);
                            fill: url(#SVGID_47_);
                        }

                        .st50 {
                            fill: url(#SVGID_48_);
                            filter: url(#Adobe_OpacityMaskFilter_19_);
                        }

                        .st51 {
                            mask: url(#id38_5_);
                            fill: url(#SVGID_49_);
                        }

                        .st52 {
                            fill: url(#SVGID_50_);
                        }

                        .st53 {
                            fill: url(#SVGID_51_);
                            filter: url(#Adobe_OpacityMaskFilter_20_);
                        }

                        .st54 {
                            mask: url(#id32_6_);
                            fill: url(#SVGID_52_);
                        }

                        .st55 {
                            fill: url(#SVGID_53_);
                            filter: url(#Adobe_OpacityMaskFilter_21_);
                        }

                        .st56 {
                            mask: url(#id34_6_);
                            fill: url(#SVGID_54_);
                        }

                        .st57 {
                            fill: url(#SVGID_55_);
                            filter: url(#Adobe_OpacityMaskFilter_22_);
                        }

                        .st58 {
                            mask: url(#id36_6_);
                            fill: url(#SVGID_56_);
                        }

                        .st59 {
                            fill: url(#SVGID_57_);
                            filter: url(#Adobe_OpacityMaskFilter_23_);
                        }

                        .st60 {
                            mask: url(#id38_6_);
                            fill: url(#SVGID_58_);
                        }
                        </style>


                        <path class="st0" id="uniqAxis1"
                            d="M1120.3,2012.7c-346.1,0-365.3-1963.8,6.8-1980C1497.4,32.7,1494.5,2012.7,1120.3,2012.7z" />
                        <path class="st0" id="uniqAxis2"
                            d="M276.7,1535.2C586,1788.9,2204,796.9,1981.7,508.1C1686,277.1,65,1206.9,276.7,1535.2z" />
                        <path class="st0" id="uniqAxis3"
                            d="M272.3,514.9C64,829.9,1679.4,1771.7,1980.1,1535.2C2167,1218.1,587,254.8,272.3,514.9z" />


                        <g id="_1819496994368">

                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="986.2141" y1="-531.841"
                                x2="1267.7542" y2="-44.1911" gradientTransform="matrix(1 0 0 1 0 1309.8402)">
                                <stop offset="0" style="stop-color:#EBEBEB" />
                                <stop offset="1" style="stop-color:#4E4E4E" />
                            </linearGradient>
                            <path class="st1" d="M1986.4,532.5c31,65.1-28.7,179.1-154.4,307.3c-130.4,133-329.8,283.8-567.1,420.8s-467.6,234.3-648,280.7
   c-178.6,46-309.5,39.1-346.5-25c-3.2-5.5-5.6-11.3-7.3-17.5l-8.6,4.8c1.9,6.1,4.4,12,7.6,17.5c39.4,68.3,172.3,73.3,355.3,26.1
   c181.2-46.7,412.4-144.3,650.4-281.7c238.1-137.4,438.1-288.8,569.2-422.4c128.9-131.5,191.2-246.5,157.8-315.5L1986.4,532.5
   L1986.4,532.5z" />

                            <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="845.5867" y1="-288.0502"
                                x2="1408.5867" y2="-288.0502" gradientTransform="matrix(1 0 0 1 0 1309.8402)">
                                <stop offset="0" style="stop-color:#EBEBEB" />
                                <stop offset="1" style="stop-color:#4E4E4E" />
                            </linearGradient>
                            <path class="st2" d="M1127.1,2010.9c74,0,145.4-109.9,194.8-287.6c50-179.4,80.9-427.5,80.9-701.5c0-274.1-30.9-522.1-80.9-701.5
   C1272.4,142.6,1201,32.7,1127.1,32.7s-141.6,109.9-191,287.6c-50,179.4-80.9,427.5-80.9,701.5c0,274.1,30.9,522.1,80.9,701.5
   C985.5,1901,1053.1,2010.9,1127.1,2010.9z M1327.4,1725.9c-50.7,182.1-121.5,294.7-200.3,294.7S977.5,1908,926.8,1725.9
   c-50.2-180.3-81.2-429.2-81.2-704.1s31-523.8,81.2-704.1C977.5,135.6,1048.3,23,1127.1,23c78.8,0,149.6,112.6,200.3,294.7
   c50.2,180.3,81.2,429.2,81.2,704.1S1377.6,1545.6,1327.4,1725.9z" />

                            <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1267.8572" y1="-531.8674"
                                x2="986.3413" y2="-44.2766" gradientTransform="matrix(1 0 0 1 0 1309.8402)">
                                <stop offset="0" style="stop-color:#EBEBEB" />
                                <stop offset="1" style="stop-color:#4E4E4E" />
                            </linearGradient>
                            <path class="st3" d="M270.5,527.2c-37,64.1,22.5,180.9,151.6,312.5c130.4,133,329.8,283.8,567.1,420.8s467.6,234.3,648,280.7
   c178.6,46,309.5,39.1,346.5-25s-24.4-177.6-153.5-309.2c-130.4-133-329.8-283.8-567.1-420.8s-467.6-234.3-648-280.7
   C436.5,459.6,307.5,463.2,270.5,527.2L270.5,527.2z M417.2,843.2C284.8,708.3,222.7,590.7,262.1,522.4s172.3-73.3,355.3-26.1
   c181.3,46.6,412.4,144.2,650.5,281.7c238,137.4,438.1,288.8,569.2,422.4c132.3,134.9,194.4,252.5,155,320.8
   c-39.4,68.3-172.3,73.3-355.3,26.1c-181.2-46.7-412.3-144.3-650.4-281.7S548.2,976.8,417.2,843.2L417.2,843.2z" />

                            <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="987.3214" y1="-532.39"
                                x2="1268.8615" y2="-44.7401" gradientTransform="matrix(1 0 0 1 0 1309.8402)">
                                <stop offset="0" style="stop-color:#EBEBEB" />
                                <stop offset="1" style="stop-color:#4E4E4E" />
                            </linearGradient>
                            <path class="st4" d="M1983.7,527.2c1,1.7,1.9,3.5,2.8,5.3l8.4-4.7c-0.9-1.8-1.8-3.6-2.8-5.4c-39.4-68.3-172.3-73.3-355.3-26.1
   C1455.6,543,1224.5,640.6,986.4,778c-238,137.4-438.1,288.8-569.2,422.4c-121.6,124-183.9,233.4-162.6,303.3l8.6-4.8
   c-18.6-66.1,42.8-171.3,160.9-291.7c130.4-133,329.8-283.8,567.1-420.8c237.4-137,467.6-234.3,648-280.7
   C1817.7,459.6,1946.7,463.2,1983.7,527.2L1983.7,527.2z" />
                        </g>

                        <g>
                            <circle cx=0 cy="0" r="15" fill="#ffffff" id="dot1" class="uniqIDAxis1">
                                <animateMotion dur="6.6s" restart="always" rotate="auto" repeatCount="indefinite">
                                    <mpath xlink:href="#uniqAxis1"></mpath>
                                </animateMotion>
                            </circle>
                        </g>
                        <g>
                            <!-- <path d="M-55,0a15,15 0 1,0 30,0a15,15 0 1,0 -30,0" fill="#ffffff" id="sometest1" class="uniqIDAxis2">
<animateMotion dur="4.6s" restart="always" repeatCount="indefinite">
   <mpath xlink:href="#uniqAxis2"></mpath>
</animateMotion>
</path> -->

                            <circle cx="0" cy="0" r="15" fill="#ffffff" id="dot2" class="uniqIDAxis3">
                                <animateMotion dur="7.5s" restart="always" rotate="auto" begin="0s"
                                    repeatCount="indefinite">
                                    <mpath xlink:href="#uniqAxis2"></mpath>
                                </animateMotion>
                            </circle>
                        </g>

                        <g filter="url(#blur)">
                            <circle cx="0" cy="0" r="15" fill="#ffffff" id="dot3" class="uniqIDAxis3">
                                <animateMotion dur="6.6s" restart="always" rotate="auto" repeatCount="indefinite">
                                    <mpath xlink:href="#uniqAxis3"></mpath>
                                </animateMotion>
                            </circle>
                        </g>

                        <g id="blackpath1"></g>
                        <g id="blackpath2"></g>
                        <g id="blackpath3"></g>

                        <a href="/kontakt/">
                            <g id="_1783945813840" class="hover">
                                <text transform="matrix(1 0 0 1 322.3093 377.7286)" class="st5 st6">Kontakt</text>
                                <radialGradient id="SVGID_5_" cx="2222.5354" cy="1016.4588" r="40.08"
                                    gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1940.8623 3994.2307)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <circle class="st7" cx="626.1" cy="505.7" r="67.2">
                                    <feGaussianBlur in="SourceAlpha" stdDeviation="1.7" result="blur" />
                                    <feOffset in="blur" dx="3" dy="3" result="offsetBlur" />
                                    <feFlood flood-color="#3D4574" flood-opacity="0.5" result="offsetColor" />
                                    <feComposite in="offsetColor" in2="offsetBlur" operator="in" result="offsetBlur" />
                                </circle>
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="559" y="474.9"
                                        width="128.9" height="98">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="559" y="474.9" width="128.9" height="98"
                                    id="id32_2_">

                                    <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="612.7076"
                                        y1="1499.1385" x2="563.3376" y2="1476.4686"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="557.8" y="473.7" class="st8" width="131.3" height="100.4" />
                                </mask>

                                <radialGradient id="SVGID_7_" cx="1983.8655" cy="1353.379" r="47.7"
                                    gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 439.5898 4000.7402)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.8196" style="stop-color:#757675" />
                                    <stop offset="0.8863" style="stop-color:#959696" />
                                    <stop offset="1" style="stop-color:#B5B6B6" />
                                </radialGradient>
                                <path class="st9" d="M626.1,572.9c26.3,0,49.1-15.1,60.1-37.2c8.9-21.8-20-40.5-47.8-18.9c-28.7,22.2-62.8,5.6-68-20.2
   c-2.5-12.3,0.2-26.8-4.9-20c-4.3,8.8-6.6,18.7-6.6,29.1C559,542.8,589,572.9,626.1,572.9L626.1,572.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_1_" filterUnits="userSpaceOnUse" x="619.4"
                                        y="438.5" width="73.9" height="105.4">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="619.4" y="438.5" width="73.9" height="105.4"
                                    id="id34_2_">

                                    <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="671.6137"
                                        y1="1553.4514" x2="693.5737" y2="1577.5514"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="618.2" y="437.4" class="st10" width="76.3" height="107.7" />
                                </mask>

                                <radialGradient id="SVGID_9_" cx="2149.4834" cy="830.4202" r="52.68"
                                    gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1837.1587 4589.3809)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                    <stop offset="1" style="stop-color:#CBCBCB" />
                                </radialGradient>
                                <path class="st11"
                                    d="M681.4,543.9c7.5-10.8,11.9-24,11.9-38.2c0-37.1-30.1-67.2-67.2-67.2c-2.3,0-4.5,0.1-6.7,0.3
   c10.5,4.7,17.9,5.4,23.9,9.9c6.5,4.8,18.7,12.8,22.9,20c4.2,7.3,10.3,8.2,8.2,16.9c-2.1,8.7-5.7,10.5-3.2,15c2.4,4.5,4.4,5,8.4,8.2
   c4,3.2,5,6.6,5,10.7c0,4-0.5,9.4-0.7,11.8c-0.2,2.4,0.2,7.1-1.3,9.5C682.3,541.6,681.9,542.7,681.4,543.9L681.4,543.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_2_" filterUnits="userSpaceOnUse" x="559"
                                        y="470.7" width="127.8" height="101.9">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="559" y="470.7" width="127.8" height="101.9"
                                    id="id36_2_">

                                    <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="548.8671"
                                        y1="1532.6252" x2="622.3171" y2="1506.4652"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="557.8" y="469.5" class="st12" width="130.2" height="104.3" />
                                </mask>

                                <radialGradient id="SVGID_11_" cx="2370.095" cy="930.1622" r="63.92"
                                    gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1982.9274 3875.1746)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.451" style="stop-color:#B3B3B3" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <path class="st13" d="M670.7,556l0.6-0.5l0.1-0.1c6.4-5.8,11.7-12.9,15.5-20.9c-11.5,20.4-33.3,34.1-58.3,34.1
   c-37,0-67-30.1-67-67.2c0-11.1,2.7-21.5,7.4-30.7c-6.2,10.2-9.8,22.2-9.8,35c0,8.6,1.6,16.7,4.5,24.2c9.9,25,34.3,42.7,62.8,42.7
   C643.3,572.6,658.8,566.3,670.7,556L670.7,556z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_3_" filterUnits="userSpaceOnUse" x="559"
                                        y="438.5" width="131.5" height="69.5">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="559" y="438.5" width="131.5" height="69.5"
                                    id="id38_2_">

                                    <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="625.6082"
                                        y1="1549.5636" x2="621.3481" y2="1575.6536"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="557.8" y="437.4" class="st14" width="133.9" height="71.9" />
                                </mask>

                                <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="635.5671"
                                    y1="1502.0853" x2="595.8371" y2="1616.1354"
                                    gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                    <stop offset="0" style="stop-color:#696868" />
                                    <stop offset="1" style="stop-color:#FEFEFE" />
                                </linearGradient>
                                <path class="st15" d="M690.6,486.7c-8.2-27.8-33.9-48.2-64.4-48.2c-36.3,0-65.8,28.8-67.1,64.8c10.4-3.9,17.7,2.7,29.3,4.3
   c25.8,3.5,29.2-14.2,47.7-8.8c9.8,2.9,18.3-5.4,33.4-3.2C677.4,496.8,683.5,487.4,690.6,486.7L690.6,486.7z" />
                            </g>
                        </a>
                        <a href="/aufschaltung-fernueberwachung/">
                            <g id="_1783945813840_1_" class="hover">

                                <text transform="matrix(1 0 0 1 1853.009 954.7286)" class="st5 st6">
                                <!-- <text transform="matrix(1 0 0 1 1637.009 995.7286)" class="st5 st6"> -->
                                    <tspan x="-80" y="0" class="">Aufschaltung &</tspan>
                                     <tspan x="-130" y="77.6" class="">Fernüberwachung</tspan>
<!--                                    <tspan x="-120" y="67.6" class="">Sicherungskette</tspan>-->
                                </text>
                                <radialGradient id="SVGID_14_" cx="2238.4707" cy="8.4952" r="40.08"
                                    gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1940.8623 3994.2307)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <circle class="st16" cx="1863.2" cy="803.7" r="67.2" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_4_" filterUnits="userSpaceOnUse" x="1796"
                                        y="772.9" width="128.9" height="98">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1796" y="772.9" width="128.9" height="98"
                                    id="id32_1_">

                                    <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="1849.7567"
                                        y1="1201.1385" x2="1800.3867" y2="1178.4686"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1794.8" y="771.7" class="st17" width="131.3" height="100.4" />
                                </mask>

                                <radialGradient id="SVGID_16_" cx="2144.4873" cy="491.4637" r="47.7"
                                    gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 439.5898 4000.7402)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.8196" style="stop-color:#757675" />
                                    <stop offset="0.8863" style="stop-color:#959696" />
                                    <stop offset="1" style="stop-color:#B5B6B6" />
                                </radialGradient>
                                <path class="st18" d="M1863.2,870.9c26.3,0,49.1-15.1,60.1-37.2c8.9-21.8-20-40.5-47.8-18.9c-28.7,22.2-62.8,5.6-68-20.2
   c-2.5-12.3,0.2-26.8-4.9-20c-4.3,8.8-6.6,18.7-6.6,29.1C1796,840.8,1826.1,870.9,1863.2,870.9L1863.2,870.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_5_" filterUnits="userSpaceOnUse" x="1856.4"
                                        y="736.5" width="73.9" height="105.4">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1856.4" y="736.5" width="73.9" height="105.4"
                                    id="id34_1_">

                                    <linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="1908.6628"
                                        y1="1255.4514" x2="1930.6228" y2="1279.5514"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1855.3" y="735.4" class="st19" width="76.3" height="107.7" />
                                </mask>

                                <radialGradient id="SVGID_18_" cx="2034.8442" cy="137.4559" r="52.68"
                                    gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1837.1587 4589.3809)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                    <stop offset="1" style="stop-color:#CBCBCB" />
                                </radialGradient>
                                <path class="st20"
                                    d="M1918.4,841.9c7.5-10.8,11.9-24,11.9-38.2c0-37.1-30.1-67.2-67.2-67.2c-2.3,0-4.5,0.1-6.7,0.3
   c10.5,4.7,17.9,5.4,23.9,9.9c6.5,4.8,18.7,12.8,22.9,20c4.2,7.3,10.3,8.2,8.2,16.9s-5.7,10.5-3.2,15s4.4,5,8.4,8.2
   c4,3.2,5,6.6,5,10.7c0,4-0.5,9.4-0.7,11.8c-0.2,2.4,0.2,7.1-1.3,9.5C1919.3,839.6,1918.9,840.7,1918.4,841.9L1918.4,841.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_6_" filterUnits="userSpaceOnUse" x="1796"
                                        y="768.7" width="127.8" height="101.9">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1796" y="768.7" width="127.8" height="101.9"
                                    id="id36_1_">

                                    <linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="1785.9163"
                                        y1="1234.6252" x2="1859.3662" y2="1208.4652"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1794.8" y="767.5" class="st21" width="130.2" height="104.3" />
                                </mask>

                                <radialGradient id="SVGID_20_" cx="2208.8198" cy="34.6538" r="63.92"
                                    gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1982.9274 3875.1746)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.451" style="stop-color:#B3B3B3" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <path class="st22" d="M1907.7,854l0.6-0.5l0.1-0.1c6.4-5.8,11.7-12.9,15.5-20.9c-11.5,20.4-33.3,34.1-58.3,34.1
   c-37,0-67-30.1-67-67.2c0-11.1,2.7-21.5,7.4-30.7c-6.2,10.2-9.8,22.2-9.8,35c0,8.6,1.6,16.7,4.5,24.2c9.9,25,34.3,42.7,62.8,42.7
   C1880.3,870.6,1895.8,864.3,1907.7,854L1907.7,854z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_7_" filterUnits="userSpaceOnUse" x="1796.1"
                                        y="736.5" width="131.5" height="69.5">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1796.1" y="736.5" width="131.5" height="69.5"
                                    id="id38_1_">

                                    <linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="1862.6572"
                                        y1="1251.5636" x2="1858.3972" y2="1277.6536"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1794.9" y="735.4" class="st23" width="133.9" height="71.9" />
                                </mask>

                                <linearGradient id="SVGID_22_" gradientUnits="userSpaceOnUse" x1="1872.6162"
                                    y1="1204.0853" x2="1832.8862" y2="1318.1354"
                                    gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                    <stop offset="0" style="stop-color:#696868" />
                                    <stop offset="1" style="stop-color:#FEFEFE" />
                                </linearGradient>
                                <path class="st24" d="M1927.6,784.7c-8.2-27.8-33.9-48.2-64.4-48.2c-36.3,0-65.9,28.8-67.1,64.8c10.4-3.9,17.7,2.7,29.3,4.3
   c25.8,3.5,29.2-14.2,47.7-8.8c9.8,2.9,18.3-5.4,33.4-3.2C1914.4,794.8,1920.5,785.4,1927.6,784.7L1927.6,784.7z" />
                            </g>
                        </a>
                        <a href="/geld-werttransport/">
                            <g id="_1783945813840_2_" class="hover">
                                <text transform="matrix(1 0 0 1 1607.3586 1699)" class="st5 st6">Geld & Werttransport</text>
                                <radialGradient id="SVGID_23_" cx="1683.0669" cy="170.2646" r="40.08"
                                    gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1940.8623 3994.2307)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <circle class="st25" cx="1686.1" cy="1549.7" r="67.2" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_8_" filterUnits="userSpaceOnUse" x="1619"
                                        y="1518.9" width="128.9" height="98">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1619" y="1518.9" width="128.9" height="98"
                                    id="id32_3_">

                                    <linearGradient id="SVGID_24_" gradientUnits="userSpaceOnUse" x1="1672.7075"
                                        y1="455.1385" x2="1623.3375" y2="432.4686"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1617.8" y="1517.7" class="st26" width="131.3" height="100.4" />
                                </mask>

                                <radialGradient id="SVGID_25_" cx="1687.3245" cy="285.6557" r="47.7"
                                    gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 439.5898 4000.7402)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.8196" style="stop-color:#757675" />
                                    <stop offset="0.8863" style="stop-color:#959696" />
                                    <stop offset="1" style="stop-color:#B5B6B6" />
                                </radialGradient>
                                <path class="st27" d="M1686.1,1616.9c26.3,0,49.1-15.1,60.1-37.2c8.9-21.8-20-40.5-47.8-18.9c-28.7,22.2-62.8,5.6-68-20.2
   c-2.5-12.3,0.2-26.8-4.9-20c-4.3,8.8-6.6,18.7-6.6,29.1C1619,1586.8,1649,1616.9,1686.1,1616.9L1686.1,1616.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_9_" filterUnits="userSpaceOnUse" x="1679.4"
                                        y="1482.5" width="73.9" height="105.4">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1679.4" y="1482.5" width="73.9" height="105.4"
                                    id="id34_3_">

                                    <linearGradient id="SVGID_26_" gradientUnits="userSpaceOnUse" x1="1731.6136"
                                        y1="509.4514" x2="1753.5737" y2="533.5514"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1678.2" y="1481.4" class="st28" width="76.3" height="107.7" />
                                </mask>

                                <radialGradient id="SVGID_27_" cx="1628.5364" cy="207.2127" r="52.68"
                                    gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1837.1587 4589.3809)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                    <stop offset="1" style="stop-color:#CBCBCB" />
                                </radialGradient>
                                <path class="st29"
                                    d="M1741.4,1587.9c7.5-10.8,11.9-24,11.9-38.2c0-37.1-30.1-67.2-67.2-67.2c-2.3,0-4.5,0.1-6.7,0.3
   c10.5,4.7,17.9,5.4,23.9,9.9c6.5,4.8,18.7,12.8,22.9,20c4.2,7.3,10.3,8.2,8.2,16.9c-2.1,8.7-5.6,10.5-3.2,15c2.4,4.5,4.4,5,8.4,8.2
   c4,3.2,5,6.6,5,10.7c0,4-0.5,9.4-0.7,11.8c-0.2,2.4,0.2,7.1-1.3,9.5C1742.3,1585.6,1741.9,1586.7,1741.4,1587.9L1741.4,1587.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_10_" filterUnits="userSpaceOnUse" x="1619"
                                        y="1514.7" width="127.8" height="101.9">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1619" y="1514.7" width="127.8" height="101.9"
                                    id="id36_3_">

                                    <linearGradient id="SVGID_28_" gradientUnits="userSpaceOnUse" x1="1608.8671"
                                        y1="488.6253" x2="1682.3171" y2="462.4652"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1617.8" y="1513.5" class="st30" width="130.2" height="104.3" />
                                </mask>

                                <radialGradient id="SVGID_29_" cx="1667.3434" cy="179.436" r="63.92"
                                    gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1982.9274 3875.1746)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.451" style="stop-color:#B3B3B3" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <path class="st31" d="M1730.7,1600l0.6-0.5l0.1-0.1c6.4-5.8,11.7-12.9,15.5-20.9c-11.5,20.4-33.3,34.1-58.4,34.1
   c-37,0-67-30.1-67-67.2c0-11.1,2.7-21.5,7.4-30.7c-6.2,10.2-9.9,22.2-9.9,35c0,8.6,1.6,16.7,4.5,24.2c9.9,25,34.3,42.7,62.8,42.7
   C1703.3,1616.6,1718.8,1610.3,1730.7,1600L1730.7,1600z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_11_" filterUnits="userSpaceOnUse" x="1619"
                                        y="1482.5" width="131.5" height="69.5">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1619" y="1482.5" width="131.5" height="69.5"
                                    id="id38_3_">

                                    <linearGradient id="SVGID_30_" gradientUnits="userSpaceOnUse" x1="1685.6082"
                                        y1="505.5636" x2="1681.3481" y2="531.6536"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1617.8" y="1481.4" class="st32" width="133.9" height="71.9" />
                                </mask>

                                <linearGradient id="SVGID_31_" gradientUnits="userSpaceOnUse" x1="1695.5671"
                                    y1="458.0854" x2="1655.8372" y2="572.1354"
                                    gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                    <stop offset="0" style="stop-color:#696868" />
                                    <stop offset="1" style="stop-color:#FEFEFE" />
                                </linearGradient>
                                <path class="st33" d="M1750.6,1530.7c-8.2-27.8-33.9-48.2-64.4-48.2c-36.3,0-65.8,28.8-67.1,64.8c10.4-3.9,17.7,2.7,29.3,4.3
   c25.8,3.5,29.2-14.2,47.7-8.8c9.8,2.9,18.3-5.4,33.4-3.2C1737.4,1540.8,1743.5,1531.4,1750.6,1530.7L1750.6,1530.7z" />
                            </g>
                        </a>
                        <a href="/impressum/">
                            <g id="_1783945813840_3_" class="hover">
                                <text transform="matrix(1 0 0 1 450.0092 1771.7286)" class="st5 st6">Impressum</text>
                                <radialGradient id="SVGID_32_" cx="1420.9222" cy="782.4474" r="40.08"
                                    gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1940.8623 3994.2307)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <circle class="st34" cx="944.6" cy="1731.2" r="67.2" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_12_" filterUnits="userSpaceOnUse" x="877.5"
                                        y="1700.4" width="128.9" height="98">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="877.5" y="1700.4" width="128.9" height="98"
                                    id="id32_4_">

                                    <linearGradient id="SVGID_33_" gradientUnits="userSpaceOnUse" x1="931.2026"
                                        y1="273.6135" x2="881.8326" y2="250.9436"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="876.3" y="1699.2" class="st35" width="131.3" height="100.4" />
                                </mask>

                                <radialGradient id="SVGID_34_" cx="1392.7723" cy="651.9803" r="47.7"
                                    gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 439.5898 4000.7402)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.8196" style="stop-color:#757675" />
                                    <stop offset="0.8863" style="stop-color:#959696" />
                                    <stop offset="1" style="stop-color:#B5B6B6" />
                                </radialGradient>
                                <path class="st36" d="M944.6,1798.4c26.3,0,49.1-15.1,60.1-37.2c8.9-21.8-20-40.5-47.8-18.9c-28.7,22.2-62.8,5.6-68-20.2
   c-2.5-12.3,0.2-26.8-4.9-20c-4.3,8.8-6.6,18.7-6.6,29.1C877.5,1768.3,907.5,1798.4,944.6,1798.4L944.6,1798.4z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_13_" filterUnits="userSpaceOnUse" x="937.9"
                                        y="1664.1" width="73.9" height="105.4">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="937.9" y="1664.1" width="73.9" height="105.4"
                                    id="id34_4_">

                                    <linearGradient id="SVGID_35_" gradientUnits="userSpaceOnUse" x1="990.1087"
                                        y1="327.9265" x2="1012.0687" y2="352.0265"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="936.7" y="1662.9" class="st37" width="76.3" height="107.7" />
                                </mask>

                                <radialGradient id="SVGID_36_" cx="1504.2126" cy="609.1496" r="52.68"
                                    gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1837.1587 4589.3809)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                    <stop offset="1" style="stop-color:#CBCBCB" />
                                </radialGradient>
                                <path class="st38"
                                    d="M999.9,1769.4c7.5-10.8,11.9-24,11.9-38.2c0-37.1-30.1-67.2-67.2-67.2c-2.3,0-4.5,0.1-6.7,0.3
   c10.5,4.7,17.9,5.4,23.9,9.9c6.5,4.8,18.7,12.8,22.9,20c4.2,7.3,10.3,8.2,8.2,16.9c-2.1,8.7-5.7,10.5-3.2,15c2.4,4.5,4.4,5,8.4,8.2
   c4,3.2,5,6.6,5,10.7c0,4-0.5,9.4-0.7,11.8c-0.2,2.4,0.2,7.1-1.3,9.5C1000.8,1767.1,1000.3,1768.2,999.9,1769.4L999.9,1769.4z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_14_" filterUnits="userSpaceOnUse" x="877.5"
                                        y="1696.2" width="127.8" height="101.9">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="877.5" y="1696.2" width="127.8" height="101.9"
                                    id="id36_4_">

                                    <linearGradient id="SVGID_37_" gradientUnits="userSpaceOnUse" x1="867.3621"
                                        y1="307.1003" x2="940.8121" y2="280.9403"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="876.3" y="1695" class="st39" width="130.2" height="104.3" />
                                </mask>

                                <radialGradient id="SVGID_38_" cx="1506.199" cy="723.8041" r="63.92"
                                    gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1982.9274 3875.1746)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.451" style="stop-color:#B3B3B3" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <path class="st40" d="M989.2,1781.5l0.6-0.5l0.1-0.1c6.4-5.8,11.7-12.9,15.5-20.9c-11.5,20.4-33.3,34.1-58.3,34.1
   c-37,0-67-30.1-67-67.2c0-11.1,2.7-21.5,7.4-30.7c-6.2,10.2-9.8,22.2-9.8,35c0,8.6,1.6,16.7,4.5,24.2c9.9,25,34.3,42.7,62.8,42.7
   C961.8,1798.2,977.3,1791.9,989.2,1781.5L989.2,1781.5z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_15_" filterUnits="userSpaceOnUse" x="877.5"
                                        y="1664.1" width="131.5" height="69.5">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="877.5" y="1664.1" width="131.5" height="69.5"
                                    id="id38_4_">

                                    <linearGradient id="SVGID_39_" gradientUnits="userSpaceOnUse" x1="944.1031"
                                        y1="324.0386" x2="939.8431" y2="350.1286"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="876.3" y="1662.9" class="st41" width="133.9" height="71.9" />
                                </mask>

                                <linearGradient id="SVGID_40_" gradientUnits="userSpaceOnUse" x1="954.0621"
                                    y1="276.5604" x2="914.3322" y2="390.6104"
                                    gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                    <stop offset="0" style="stop-color:#696868" />
                                    <stop offset="1" style="stop-color:#FEFEFE" />
                                </linearGradient>
                                <path class="st42" d="M1009.1,1712.2c-8.2-27.8-33.9-48.2-64.4-48.2c-36.3,0-65.8,28.8-67.1,64.8c10.4-3.9,17.7,2.7,29.3,4.3
   c25.8,3.5,29.2-14.2,47.7-8.8c9.8,2.9,18.3-5.4,33.4-3.2C995.9,1722.4,1002,1712.9,1009.1,1712.2L1009.1,1712.2z" />
                            </g>
                        </a>
                        <a href="/datenschutz/">
                            <g id="_1783945813840_4_" class="hover">
                                <text transform="matrix(1 0 0 1 100 1130)" class="st5 st6">Datenschutz</text>
                                <!-- <text transform="matrix(1 0 0 1 40 1070)" class="st5 st6">Dienstleistungen</text> -->
                                <radialGradient id="SVGID_41_" cx="1685.6951" cy="1207.5835" r="40.08"
                                    gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1940.8623 3994.2307)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <circle class="st43" cx="412.3" cy="1215.7" r="67.2" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_16_" filterUnits="userSpaceOnUse" x="345.1"
                                        y="1184.9" width="128.9" height="98">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="345.1" y="1184.9" width="128.9" height="98"
                                    id="id32_5_">

                                    <linearGradient id="SVGID_42_" gradientUnits="userSpaceOnUse" x1="398.8919"
                                        y1="789.1385" x2="349.5219" y2="766.4686"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="344" y="1183.7" class="st44" width="131.3" height="100.4" />
                                </mask>

                                <radialGradient id="SVGID_43_" cx="1536.8717" cy="1184.5171" r="47.7"
                                    gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 439.5898 4000.7402)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.8196" style="stop-color:#757675" />
                                    <stop offset="0.8863" style="stop-color:#959696" />
                                    <stop offset="1" style="stop-color:#B5B6B6" />
                                </radialGradient>
                                <path class="st45" d="M412.3,1282.9c26.3,0,49.1-15.1,60.1-37.2c8.9-21.8-20-40.5-47.8-18.9c-28.7,22.2-62.8,5.6-68-20.2
   c-2.5-12.3,0.2-26.8-4.9-20c-4.3,8.8-6.6,18.7-6.6,29.1C345.1,1252.8,375.2,1282.9,412.3,1282.9L412.3,1282.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_17_" filterUnits="userSpaceOnUse" x="405.6"
                                        y="1148.5" width="73.9" height="105.4">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="405.6" y="1148.5" width="73.9" height="105.4"
                                    id="id34_5_">

                                    <linearGradient id="SVGID_44_" gradientUnits="userSpaceOnUse" x1="457.798"
                                        y1="843.4514" x2="479.758" y2="867.5514"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="404.4" y="1147.4" class="st46" width="76.3" height="107.7" />
                                </mask>

                                <radialGradient id="SVGID_45_" cx="1761.1313" cy="921.7854" r="52.68"
                                    gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1837.1587 4589.3809)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                    <stop offset="1" style="stop-color:#CBCBCB" />
                                </radialGradient>
                                <path class="st47"
                                    d="M467.6,1253.9c7.5-10.8,11.9-24,11.9-38.2c0-37.1-30.1-67.2-67.2-67.2c-2.3,0-4.5,0.1-6.7,0.3
   c10.5,4.7,17.9,5.4,23.9,9.9c6.5,4.8,18.7,12.8,22.9,20c4.2,7.3,10.3,8.2,8.2,16.9c-2.1,8.7-5.7,10.5-3.2,15c2.4,4.5,4.4,5,8.4,8.2
   c4,3.2,5,6.6,5,10.7c0,4-0.5,9.4-0.7,11.8c-0.2,2.4,0.2,7.1-1.3,9.5C468.5,1251.6,468,1252.7,467.6,1253.9L467.6,1253.9z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_18_" filterUnits="userSpaceOnUse" x="345.1"
                                        y="1180.7" width="127.8" height="101.9">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="345.1" y="1180.7" width="127.8" height="101.9"
                                    id="id36_5_">

                                    <linearGradient id="SVGID_46_" gradientUnits="userSpaceOnUse" x1="335.0514"
                                        y1="822.6253" x2="408.5014" y2="796.4653"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="344" y="1179.5" class="st48" width="130.2" height="104.3" />
                                </mask>

                                <radialGradient id="SVGID_47_" cx="1852.8423" cy="1100.9882" r="63.92"
                                    gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1982.9274 3875.1746)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.451" style="stop-color:#B3B3B3" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <path class="st49" d="M456.9,1266l0.6-0.5l0.1-0.1c6.4-5.8,11.7-12.9,15.5-20.9c-11.5,20.4-33.3,34.1-58.3,34.1
   c-37,0-67-30.1-67-67.2c0-11.1,2.7-21.5,7.4-30.7c-6.2,10.2-9.8,22.2-9.8,35c0,8.6,1.6,16.7,4.5,24.2c9.9,25,34.3,42.7,62.8,42.7
   C429.5,1282.6,445,1276.3,456.9,1266L456.9,1266z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_19_" filterUnits="userSpaceOnUse" x="345.2"
                                        y="1148.5" width="131.5" height="69.5">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="345.2" y="1148.5" width="131.5" height="69.5"
                                    id="id38_5_">

                                    <linearGradient id="SVGID_48_" gradientUnits="userSpaceOnUse" x1="411.7924"
                                        y1="839.5636" x2="407.5324" y2="865.6536"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="344" y="1147.4" class="st50" width="133.9" height="71.9" />
                                </mask>

                                <linearGradient id="SVGID_49_" gradientUnits="userSpaceOnUse" x1="421.7514"
                                    y1="792.0853" x2="382.0214" y2="906.1354"
                                    gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                    <stop offset="0" style="stop-color:#696868" />
                                    <stop offset="1" style="stop-color:#FEFEFE" />
                                </linearGradient>
                                <path class="st51" d="M476.7,1196.7c-8.2-27.8-33.9-48.2-64.4-48.2c-36.3,0-65.8,28.8-67.1,64.8c10.4-3.9,17.7,2.7,29.3,4.3
   c25.8,3.5,29.2-14.2,47.7-8.8c9.8,2.9,18.3-5.4,33.4-3.2C463.6,1206.8,469.7,1197.4,476.7,1196.7L476.7,1196.7z" />
                            </g>
                        </a>
                        <a href="/uber-uns/">
                            <g id="_1783945813840_5_" class="hover">
                                <text transform="matrix(1 0 0 1 1350.842 145.7286)" class="st5 st6 hover">Über uns</text>
                                <radialGradient id="SVGID_50_" cx="2536.0112" cy="440.7514" r="40.08"
                                    gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1940.8623 3994.2307)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <circle class="st52" cx="1320.9" cy="238.9" r="67.2" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_20_" filterUnits="userSpaceOnUse" x="1253.7"
                                        y="208" width="128.9" height="98">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1253.7" y="208" width="128.9" height="98"
                                    id="id32_6_">

                                    <linearGradient id="SVGID_51_" gradientUnits="userSpaceOnUse" x1="1307.4297"
                                        y1="1765.9811" x2="1258.0597" y2="1743.3112"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1252.5" y="206.8" class="st53" width="131.3" height="100.4" />
                                </mask>

                                <radialGradient id="SVGID_52_" cx="2313.1086" cy="1050.5565" r="47.7"
                                    gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 439.5898 4000.7402)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                    <stop offset="0.651" style="stop-color:#90908F" />
                                    <stop offset="0.8196" style="stop-color:#757675" />
                                    <stop offset="0.8863" style="stop-color:#959696" />
                                    <stop offset="1" style="stop-color:#B5B6B6" />
                                </radialGradient>
                                <path class="st54" d="M1320.9,306c26.3,0,49.1-15.1,60.1-37.2c8.9-21.8-20-40.5-47.8-18.9c-28.7,22.2-62.8,5.6-68-20.2
   c-2.5-12.3,0.1-26.8-4.9-20c-4.3,8.8-6.6,18.7-6.6,29.1C1253.7,276,1283.8,306,1320.9,306L1320.9,306z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_21_" filterUnits="userSpaceOnUse" x="1314.1"
                                        y="171.7" width="73.9" height="105.4">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1314.1" y="171.7" width="73.9" height="105.4"
                                    id="id34_6_">

                                    <linearGradient id="SVGID_53_" gradientUnits="userSpaceOnUse" x1="1366.3358"
                                        y1="1820.2941" x2="1388.2958" y2="1844.394"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1312.9" y="170.5" class="st55" width="76.3" height="107.7" />
                                </mask>

                                <radialGradient id="SVGID_54_" cx="2317.832" cy="457.4524" r="52.68"
                                    gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1837.1587 4589.3809)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                    <stop offset="1" style="stop-color:#CBCBCB" />
                                </radialGradient>
                                <path class="st56"
                                    d="M1376.1,277.1c7.5-10.8,11.9-24,11.9-38.2c0-37.1-30.1-67.2-67.2-67.2c-2.3,0-4.5,0.1-6.7,0.3
   c10.6,4.7,17.9,5.4,23.9,9.9c6.5,4.8,18.7,12.8,22.9,20c4.2,7.3,10.3,8.2,8.2,16.9c-2.1,8.7-5.7,10.5-3.2,15c2.4,4.5,4.4,5,8.4,8.2
   c4,3.2,5,6.6,5,10.7c0,4-0.5,9.4-0.7,11.8c-0.2,2.4,0.2,7.1-1.3,9.5C1377,274.8,1376.6,275.8,1376.1,277.1L1376.1,277.1z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_22_" filterUnits="userSpaceOnUse" x="1253.7"
                                        y="203.8" width="127.8" height="101.9">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1253.7" y="203.8" width="127.8" height="101.9"
                                    id="id36_6_">

                                    <linearGradient id="SVGID_55_" gradientUnits="userSpaceOnUse" x1="1243.5892"
                                        y1="1799.4679" x2="1317.0392" y2="1773.3079"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1252.5" y="202.7" class="st57" width="130.2" height="104.3" />
                                </mask>

                                <radialGradient id="SVGID_56_" cx="2590.3459" cy="418.1005" r="63.92"
                                    gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1982.9274 3875.1746)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" style="stop-color:#FEFEFE" />
                                    <stop offset="0.451" style="stop-color:#B3B3B3" />
                                    <stop offset="1" style="stop-color:#696868" />
                                </radialGradient>
                                <path class="st58" d="M1365.4,289.1l0.6-0.5l0.1-0.1c6.4-5.8,11.7-12.9,15.5-20.9c-11.5,20.4-33.3,34.1-58.3,34.1
   c-37,0-67.1-30.1-67.1-67.2c0-11.1,2.7-21.5,7.4-30.7c-6.2,10.2-9.8,22.2-9.8,35c0,8.6,1.6,16.7,4.5,24.2
   c9.9,25,34.3,42.7,62.8,42.7C1338,305.8,1353.5,299.5,1365.4,289.1L1365.4,289.1z" />
                                <defs>
                                    <filter id="Adobe_OpacityMaskFilter_23_" filterUnits="userSpaceOnUse" x="1253.7"
                                        y="171.7" width="131.5" height="69.5">
                                        <feColorMatrix type="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                    </filter>
                                </defs>
                                <mask maskUnits="userSpaceOnUse" x="1253.7" y="171.7" width="131.5" height="69.5"
                                    id="id38_6_">

                                    <linearGradient id="SVGID_57_" gradientUnits="userSpaceOnUse" x1="1320.3302"
                                        y1="1816.4061" x2="1316.0702" y2="1842.4961"
                                        gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                        <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                        <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                        <stop offset="1" style="stop-color:#FFFFFF" />
                                    </linearGradient>
                                    <rect x="1252.6" y="170.5" class="st59" width="133.9" height="71.9" />
                                </mask>

                                <linearGradient id="SVGID_58_" gradientUnits="userSpaceOnUse" x1="1330.2892"
                                    y1="1768.928" x2="1290.5592" y2="1882.978"
                                    gradientTransform="matrix(1 0 0 -1 0 2027.9248)">
                                    <stop offset="0" style="stop-color:#696868" />
                                    <stop offset="1" style="stop-color:#FEFEFE" />
                                </linearGradient>
                                <path class="st60" d="M1385.3,219.9c-8.2-27.8-33.9-48.2-64.4-48.2c-36.3,0-65.8,28.8-67.1,64.8c10.4-3.9,17.7,2.7,29.3,4.3
   c25.8,3.5,29.2-14.2,47.7-8.8c9.8,2.9,18.3-5.4,33.4-3.2C1372.1,230,1378.2,220.6,1385.3,219.9L1385.3,219.9z" />
                            </g>
                        </a>
                        <image xlink:href="/wp-content/uploads/2020/11/Gummiadler-ZSD_05_final_250px_mob.png" x="673" y="606" height="900"
                            width="900px" />
                    </svg>


                </div>
        </div>
<!--//
        <video autoplay muted loop id="myVideo">
            <source src="/wp-content/uploads/2020/10/ZSD-final-Coming-Soon-V220920-web-3.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
 //-->
    </div>

</main>

<script>
const radius = 15;
const opacity = 1;
const points = 99;
for (let j = 1; j <= 3; j++) {
    const dot = document.getElementById(`dot${j}`);
    const svg = document.getElementById(`blackpath${j}`);
    for (let i = 0; i < points; i++) {
        const newDot = dot.cloneNode(true);
        newDot.setAttribute('r', radius - (i / points) * radius);
        newDot.setAttribute('opacity', opacity - i / points);
        newDot.id = `dotNew${i}`;
        const seconds = i + 1 > 9 ? i + 1 : `0${i + 1}`;
        newDot.childNodes[1].setAttribute('begin', `0.${seconds}s`);
        // svg.querySelector('a[href="/partner-login/"]').before(newDot);
        svg.appendChild(newDot);
    }
    setTimeout(() => {
        dot.style.cssText = "opacity:1;";
        svg.style.cssText = "opacity:1;";
    }, 3900);
   
}
</script>

    <div id="confirmation-popup" style="display:none;">
        <div class="popup-overlay">
            <div class="popup-content">
                <h4>Systemmeldung</h4>
                <p>Ihr Account wurde erfolgreich gelöscht.</p>
                <button class="btn-register" onclick="closePopup()">OK</button>
            </div>
        </div>
    </div>

    <script>
        function showConfirmationPopup() {
            document.getElementById('confirmation-popup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('confirmation-popup').style.display = 'none';
        }

        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        // Функція для відображення попапу, якщо activated=1 в URL
        function checkActivation() {
            var activated = getParameterByName('account_deleted');
            if (activated === '1') {
                showConfirmationPopup();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            checkActivation();
        });

    </script>

<?php get_footer(); ?>