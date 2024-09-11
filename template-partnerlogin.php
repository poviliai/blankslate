<?php
/*
* Template Name: Partnerlogin
*/

get_header(); 

$dataPage = get_fields(get_the_ID());

// echo '<pre>';
// var_dump($dataPage['second_section']);
// echo '</pre>';

?>

<main id="content" class="partnerlogin-page">

    <div class="partnerlogin-block">
        <section class="partnerlogin-block_inner1" id="bg-image_MO"
            style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>)">
            <div class="container">
               
                <!-- <?php echo do_shortcode('[3d-flip-book template="short-white-book-view"  mode="link-lightbox" id="508" classes="btn-download"]FLYER HIER HERUNTERLADEN <i class="fa fa-download"
                        aria-hidden="true"></i>[/3d-flip-book]');?> -->
            </div>
        </section>
        <section class="partnerlogin-block_inner2">
            <div class="container">
                <h2 class="decor-line"><?php echo prepareTitle($dataPage['second_section']['title_second_section']); ?>
                </h2>
                <div class="wrapper_img">
                    <img src="<?php echo $dataPage['second_section']['images_second_section_big']; ?>" alt="">
                    <img class="under-image"
                        src="<?php echo $dataPage['second_section']['images_second_section_small']; ?>" alt="">
                    <blockquote><?php echo $dataPage['second_section']['info_quotes']; ?><span class="author-qoute">HANS
                            GIESSER, CEO ZSD</span></blockquote>
                </div>
                <div class="content-info">
                    <?php echo $dataPage['second_section']['info_second_section']; ?>
                </div>
                <div class="wrapper-partner-but">
                    <a href="https://www.zsd-resulting.eu/" target="_blank"
                        class="partner_bi_2_link"><img src="/wp-content/uploads/2020/10/smalliconlogo.png"> Zertifizierung & Beratung</a>
                    <!-- <a href="<?php echo $dataPage['second_section']['button_link_second_double_section']; ?>" -->
                        <!-- class="partner_bi_2_link"><img src="/wp-content/uploads/2020/10/smalliconlogo.png"> Zertifizierung & Beratung</a> -->
                    <a href="<?php echo $dataPage['second_section']['button_link_second_section']; ?>" target="blank"
                        class="partner_bi_2_link">Anfrage</a>
                </div>

            </div>
        </section>

        <section class="partnerlogin-block_inner3" id="orbit-block">
            <div class="container">
                <h2 class="decor-line" ><?php echo prepareTitle($dataPage['third_section']['title_third_section']); ?>
                </h2>
                <!-- <div class="partner_b_i_3_desc">
                    <?php echo prepareTitle($dataPage['third_section']['desc_third_section']); ?>
                </div> -->

                <div class="svg-orbit-partner">

                    <!-- <svg version="1.1" id="partnersvg" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                        xmlns:xodm="http://www.corel.com/coreldraw/odm/2003" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2189.9 2029.5"
                        style="enable-background:new 0 0 2189.9 2029.5;" xml:space="preserve">
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
                            fill: #E7C681;
                        }

                        .st6 {
                            font-family: 'Arimo-Bold';
                        }

                        .st7 {
                            font-size: 48px;
                        }

                        .st8 {
                            letter-spacing: 1;
                        }

                        .st9 {
                            enable-background: new;
                        }

                        .st10 {
                            fill: url(#SVGID_5_);
                        }

                        .st11 {
                            fill: url(#SVGID_6_);
                            filter: url(#Adobe_OpacityMaskFilter);
                        }

                        .st12 {
                            mask: url(#id32_2_);
                            fill: url(#SVGID_7_);
                        }

                        .st13 {
                            fill: url(#SVGID_8_);
                            filter: url(#Adobe_OpacityMaskFilter_1_);
                        }

                        .st14 {
                            mask: url(#id34_2_);
                            fill: url(#SVGID_9_);
                        }

                        .st15 {
                            fill: url(#SVGID_10_);
                            filter: url(#Adobe_OpacityMaskFilter_2_);
                        }

                        .st16 {
                            mask: url(#id36_2_);
                            fill: url(#SVGID_11_);
                        }

                        .st17 {
                            fill: url(#SVGID_12_);
                            filter: url(#Adobe_OpacityMaskFilter_3_);
                        }

                        .st18 {
                            mask: url(#id38_2_);
                            fill: url(#SVGID_13_);
                        }

                        .st19 {
                            fill: url(#SVGID_14_);
                        }

                        .st20 {
                            fill: url(#SVGID_15_);
                            filter: url(#Adobe_OpacityMaskFilter_4_);
                        }

                        .st21 {
                            mask: url(#id32_1_);
                            fill: url(#SVGID_16_);
                        }

                        .st22 {
                            fill: url(#SVGID_17_);
                            filter: url(#Adobe_OpacityMaskFilter_5_);
                        }

                        .st23 {
                            mask: url(#id34_1_);
                            fill: url(#SVGID_18_);
                        }

                        .st24 {
                            fill: url(#SVGID_19_);
                            filter: url(#Adobe_OpacityMaskFilter_6_);
                        }

                        .st25 {
                            mask: url(#id36_1_);
                            fill: url(#SVGID_20_);
                        }

                        .st26 {
                            fill: url(#SVGID_21_);
                            filter: url(#Adobe_OpacityMaskFilter_7_);
                        }

                        .st27 {
                            mask: url(#id38_1_);
                            fill: url(#SVGID_22_);
                        }

                        .st28 {
                            fill: url(#SVGID_23_);
                        }

                        .st29 {
                            fill: url(#SVGID_24_);
                            filter: url(#Adobe_OpacityMaskFilter_8_);
                        }

                        .st30 {
                            mask: url(#id32_3_);
                            fill: url(#SVGID_25_);
                        }

                        .st31 {
                            fill: url(#SVGID_26_);
                            filter: url(#Adobe_OpacityMaskFilter_9_);
                        }

                        .st32 {
                            mask: url(#id34_3_);
                            fill: url(#SVGID_27_);
                        }

                        .st33 {
                            fill: url(#SVGID_28_);
                            filter: url(#Adobe_OpacityMaskFilter_10_);
                        }

                        .st34 {
                            mask: url(#id36_3_);
                            fill: url(#SVGID_29_);
                        }

                        .st35 {
                            fill: url(#SVGID_30_);
                            filter: url(#Adobe_OpacityMaskFilter_11_);
                        }

                        .st36 {
                            mask: url(#id38_3_);
                            fill: url(#SVGID_31_);
                        }

                        .st37 {
                            fill: url(#SVGID_32_);
                        }

                        .st38 {
                            fill: url(#SVGID_33_);
                            filter: url(#Adobe_OpacityMaskFilter_12_);
                        }

                        .st39 {
                            mask: url(#id32_4_);
                            fill: url(#SVGID_34_);
                        }

                        .st40 {
                            fill: url(#SVGID_35_);
                            filter: url(#Adobe_OpacityMaskFilter_13_);
                        }

                        .st41 {
                            mask: url(#id34_4_);
                            fill: url(#SVGID_36_);
                        }

                        .st42 {
                            fill: url(#SVGID_37_);
                            filter: url(#Adobe_OpacityMaskFilter_14_);
                        }

                        .st43 {
                            mask: url(#id36_4_);
                            fill: url(#SVGID_38_);
                        }

                        .st44 {
                            fill: url(#SVGID_39_);
                            filter: url(#Adobe_OpacityMaskFilter_15_);
                        }

                        .st45 {
                            mask: url(#id38_4_);
                            fill: url(#SVGID_40_);
                        }

                        .st46 {
                            fill: url(#SVGID_41_);
                        }

                        .st47 {
                            fill: url(#SVGID_42_);
                            filter: url(#Adobe_OpacityMaskFilter_16_);
                        }

                        .st48 {
                            mask: url(#id32_5_);
                            fill: url(#SVGID_43_);
                        }

                        .st49 {
                            fill: url(#SVGID_44_);
                            filter: url(#Adobe_OpacityMaskFilter_17_);
                        }

                        .st50 {
                            mask: url(#id34_5_);
                            fill: url(#SVGID_45_);
                        }

                        .st51 {
                            fill: url(#SVGID_46_);
                            filter: url(#Adobe_OpacityMaskFilter_18_);
                        }

                        .st52 {
                            mask: url(#id36_5_);
                            fill: url(#SVGID_47_);
                        }

                        .st53 {
                            fill: url(#SVGID_48_);
                            filter: url(#Adobe_OpacityMaskFilter_19_);
                        }

                        .st54 {
                            mask: url(#id38_5_);
                            fill: url(#SVGID_49_);
                        }

                        .st55 {
                            fill: url(#SVGID_50_);
                        }

                        .st56 {
                            fill: url(#SVGID_51_);
                            filter: url(#Adobe_OpacityMaskFilter_20_);
                        }

                        .st57 {
                            mask: url(#id32_6_);
                            fill: url(#SVGID_52_);
                        }

                        .st58 {
                            fill: url(#SVGID_53_);
                            filter: url(#Adobe_OpacityMaskFilter_21_);
                        }

                        .st59 {
                            mask: url(#id34_6_);
                            fill: url(#SVGID_54_);
                        }

                        .st60 {
                            fill: url(#SVGID_55_);
                            filter: url(#Adobe_OpacityMaskFilter_22_);
                        }

                        .st61 {
                            mask: url(#id36_6_);
                            fill: url(#SVGID_56_);
                        }

                        .st62 {
                            fill: url(#SVGID_57_);
                            filter: url(#Adobe_OpacityMaskFilter_23_);
                        }

                        .st63 {
                            mask: url(#id38_6_);
                            fill: url(#SVGID_58_);
                        }

                        .st64 {
                            fill: url(#SVGID_59_);
                        }

                        .st65 {
                            fill: url(#SVGID_60_);
                            filter: url(#Adobe_OpacityMaskFilter_24_);
                        }

                        .st66 {
                            mask: url(#id32_7_);
                            fill: url(#SVGID_61_);
                        }

                        .st67 {
                            fill: url(#SVGID_62_);
                            filter: url(#Adobe_OpacityMaskFilter_25_);
                        }

                        .st68 {
                            mask: url(#id34_7_);
                            fill: url(#SVGID_63_);
                        }

                        .st69 {
                            fill: url(#SVGID_64_);
                            filter: url(#Adobe_OpacityMaskFilter_26_);
                        }

                        .st70 {
                            mask: url(#id36_7_);
                            fill: url(#SVGID_65_);
                        }

                        .st71 {
                            fill: url(#SVGID_66_);
                            filter: url(#Adobe_OpacityMaskFilter_27_);
                        }

                        .st72 {
                            mask: url(#id38_7_);
                            fill: url(#SVGID_67_);
                        }

                        .st73 {
                            fill: url(#SVGID_68_);
                        }

                        .st74 {
                            fill: url(#SVGID_69_);
                            filter: url(#Adobe_OpacityMaskFilter_28_);
                        }

                        .st75 {
                            mask: url(#id32_8_);
                            fill: url(#SVGID_70_);
                        }

                        .st76 {
                            fill: url(#SVGID_71_);
                            filter: url(#Adobe_OpacityMaskFilter_29_);
                        }

                        .st77 {
                            mask: url(#id34_8_);
                            fill: url(#SVGID_72_);
                        }

                        .st78 {
                            fill: url(#SVGID_73_);
                            filter: url(#Adobe_OpacityMaskFilter_30_);
                        }

                        .st79 {
                            mask: url(#id36_8_);
                            fill: url(#SVGID_74_);
                        }

                        .st80 {
                            fill: url(#SVGID_75_);
                            filter: url(#Adobe_OpacityMaskFilter_31_);
                        }

                        .st81 {
                            mask: url(#id38_8_);
                            fill: url(#SVGID_76_);
                        }

                        .st82 {
                            fill: url(#SVGID_77_);
                        }

                        .st83 {
                            fill: url(#SVGID_78_);
                            filter: url(#Adobe_OpacityMaskFilter_32_);
                        }

                        .st84 {
                            mask: url(#id32_9_);
                            fill: url(#SVGID_79_);
                        }

                        .st85 {
                            fill: url(#SVGID_80_);
                            filter: url(#Adobe_OpacityMaskFilter_33_);
                        }

                        .st86 {
                            mask: url(#id34_9_);
                            fill: url(#SVGID_81_);
                        }

                        .st87 {
                            fill: url(#SVGID_82_);
                            filter: url(#Adobe_OpacityMaskFilter_34_);
                        }

                        .st88 {
                            mask: url(#id36_9_);
                            fill: url(#SVGID_83_);
                        }

                        .st89 {
                            fill: url(#SVGID_84_);
                            filter: url(#Adobe_OpacityMaskFilter_35_);
                        }

                        .st90 {
                            mask: url(#id38_9_);
                            fill: url(#SVGID_85_);
                        }

                        .st91 {
                            fill: url(#SVGID_86_);
                        }

                        .st92 {
                            fill: url(#SVGID_87_);
                            filter: url(#Adobe_OpacityMaskFilter_36_);
                        }

                        .st93 {
                            mask: url(#id32_10_);
                            fill: url(#SVGID_88_);
                        }

                        .st94 {
                            fill: url(#SVGID_89_);
                            filter: url(#Adobe_OpacityMaskFilter_37_);
                        }

                        .st95 {
                            mask: url(#id34_10_);
                            fill: url(#SVGID_90_);
                        }

                        .st96 {
                            fill: url(#SVGID_91_);
                            filter: url(#Adobe_OpacityMaskFilter_38_);
                        }

                        .st97 {
                            mask: url(#id36_10_);
                            fill: url(#SVGID_92_);
                        }

                        .st98 {
                            fill: url(#SVGID_93_);
                            filter: url(#Adobe_OpacityMaskFilter_39_);
                        }

                        .st99 {
                            mask: url(#id38_10_);
                            fill: url(#SVGID_94_);
                        }

                        .st100 {
                            fill: url(#SVGID_95_);
                        }

                        .st101 {
                            fill: url(#SVGID_96_);
                            filter: url(#Adobe_OpacityMaskFilter_40_);
                        }

                        .st102 {
                            mask: url(#id32_11_);
                            fill: url(#SVGID_97_);
                        }

                        .st103 {
                            fill: url(#SVGID_98_);
                            filter: url(#Adobe_OpacityMaskFilter_41_);
                        }

                        .st104 {
                            mask: url(#id34_11_);
                            fill: url(#SVGID_99_);
                        }

                        .st105 {
                            fill: url(#SVGID_100_);
                            filter: url(#Adobe_OpacityMaskFilter_42_);
                        }

                        .st106 {
                            mask: url(#id36_11_);
                            fill: url(#SVGID_101_);
                        }

                        .st107 {
                            fill: url(#SVGID_102_);
                            filter: url(#Adobe_OpacityMaskFilter_43_);
                        }

                        .st108 {
                            mask: url(#id38_11_);
                            fill: url(#SVGID_103_);
                        }
                        </style>
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
                        <switch>
                            <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
                                <i:pgfRef xlink:href="#adobe_illustrator_pgf">
                                </i:pgfRef>
                            </foreignObject>
                            <g i:extraneous="self">
                                <path id="uniqAxis1" class="st0"
                                    d="M275.9,1536.9c309.3,253.7,1927.3-738.3,1705-1027.1C1685.2,278.8,64.2,1208.6,275.9,1536.9z" />
                                <path id="uniqAxis2" class="st0"
                                    d="M256.7,593c37.9,367.9,1446.7,1161.4,1725.5,942.1C2132,1280.8,1145.4,613.6,586.5,492.4
			c-22.1-4.8-80.3-18.1-121.5-20.3c-67.3-3.6-105.7-1.2-133.7,6.8c-17.6,5-35.5,14-52.7,29.3C247.2,536.4,255.3,580.3,256.7,593z" />
                                <path id="uniqAxis3" class="st0"
                                    d="M1121.1,2012.8c-346.1,0-365.3-1963.8,6.8-1980C1498.2,32.8,1495.3,2012.8,1121.1,2012.8z" />
                                <g id="_1819496994368">

                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="986.2197"
                                        y1="-1717.8441" x2="1267.7596" y2="-1230.1942"
                                        gradientTransform="matrix(1 0 0 1 0 2495.8403)">
                                        <stop offset="0" style="stop-color:#EBEBEB" />
                                        <stop offset="1" style="stop-color:#4E4E4E" />
                                    </linearGradient>
                                    <path class="st1" d="M1986.4,532.5c31,65.1-28.7,179.1-154.4,307.3c-130.4,133-329.8,283.8-567.1,420.8s-467.6,234.3-648,280.7
				c-178.6,46-309.5,39.1-346.5-25c-3.2-5.5-5.6-11.3-7.3-17.5l-8.6,4.8c1.9,6.1,4.4,12,7.6,17.5c39.4,68.3,172.3,73.3,355.3,26.1
				c181.2-46.7,412.4-144.3,650.4-281.7c238.1-137.4,438.1-288.8,569.2-422.4c128.9-131.5,191.2-246.5,157.8-315.5L1986.4,532.5
				L1986.4,532.5z" />

                                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="845.6"
                                        y1="-1474.0402" x2="1408.6" y2="-1474.0402"
                                        gradientTransform="matrix(1 0 0 1 0 2495.8403)">
                                        <stop offset="0" style="stop-color:#EBEBEB" />
                                        <stop offset="1" style="stop-color:#4E4E4E" />
                                    </linearGradient>
                                    <path class="st2" d="M1127.1,2010.9c74,0,145.4-109.9,194.8-287.6c50-179.4,80.9-427.5,80.9-701.5c0-274.1-30.9-522.1-80.9-701.5
				C1272.4,142.6,1201,32.7,1127.1,32.7s-141.6,109.9-191,287.6c-50,179.4-80.9,427.5-80.9,701.5c0,274.1,30.9,522.1,80.9,701.5
				C985.5,1901,1053.1,2010.9,1127.1,2010.9z M1327.4,1725.9c-50.7,182.1-121.5,294.7-200.3,294.7S977.5,1908,926.8,1725.9
				c-50.2-180.3-81.2-429.2-81.2-704.1s31-523.8,81.2-704.1C977.5,135.6,1048.3,23,1127.1,23c78.8,0,149.6,112.6,200.3,294.7
				c50.2,180.3,81.2,429.2,81.2,704.1S1377.6,1545.6,1327.4,1725.9z" />

                                    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1267.8705"
                                        y1="-1717.8573" x2="986.3546" y2="-1230.2665"
                                        gradientTransform="matrix(1 0 0 1 0 2495.8403)">
                                        <stop offset="0" style="stop-color:#EBEBEB" />
                                        <stop offset="1" style="stop-color:#4E4E4E" />
                                    </linearGradient>
                                    <path class="st3" d="M270.5,527.2c-37,64.1,22.5,180.9,151.6,312.5c130.4,133,329.8,283.8,567.1,420.8s467.6,234.3,648,280.7
				c178.6,46,309.5,39.1,346.5-25s-24.4-177.6-153.5-309.2c-130.4-133-329.8-283.8-567.1-420.8s-467.6-234.3-648-280.7
				C436.5,459.6,307.5,463.2,270.5,527.2L270.5,527.2z M417.2,843.2C284.8,708.3,222.7,590.7,262.1,522.4s172.3-73.3,355.3-26.1
				c181.3,46.6,412.4,144.2,650.5,281.7c238,137.4,438.1,288.8,569.2,422.4c132.3,134.9,194.4,252.5,155,320.8
				c-39.4,68.3-172.3,73.3-355.3,26.1c-181.2-46.7-412.3-144.3-650.4-281.7S548.2,976.8,417.2,843.2L417.2,843.2z" />

                                    <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="987.3346"
                                        y1="-1718.3798" x2="1268.8746" y2="-1230.7299"
                                        gradientTransform="matrix(1 0 0 1 0 2495.8403)">
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
                                        <animateMotion dur="6.6s" restart="always" rotate="auto"
                                            repeatCount="indefinite">
                                            <mpath xlink:href="#uniqAxis1"></mpath>
                                        </animateMotion>
                                    </circle>
                                </g>
                                <g>
                                    <circle cx="0" cy="0" r="15" fill="#ffffff" id="dot2" class="uniqIDAxis3">
                                        <animateMotion dur="7.5s" restart="always" rotate="auto" begin="0s"
                                            repeatCount="indefinite">
                                            <mpath xlink:href="#uniqAxis2"></mpath>
                                        </animateMotion>
                                    </circle>
                                </g>

                                <g filter="url(#blur)">
                                    <circle cx="0" cy="0" r="15" fill="#ffffff" id="dot3" class="uniqIDAxis3">
                                        <animateMotion dur="6.6s" restart="always" rotate="auto"
                                            repeatCount="indefinite">
                                            <mpath xlink:href="#uniqAxis3"></mpath>
                                        </animateMotion>
                                    </circle>
                                </g>

                                <g id="blackpath1"></g>
                                <g id="blackpath2"></g>
                                <g id="blackpath3"></g>

                                <g id="_1783945813840" class="hover">
                                    <text transform="matrix(1 0 0 1 1334.8328 140.7286)"
                                        class="st5 st6 st7">Ablauforganisation</text>
                                    <radialGradient id="SVGID_5_" cx="2900.7783" cy="325.7636" r="33.6873"
                                        gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1760.344 4408.8408)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <circle class="st10" cx="1264.2" cy="162.1" r="56.4" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="1207.7"
                                            y="136.2" width="108.4" height="82.4">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1207.7" y="136.2" width="108.4" height="82.4"
                                        id="id32_2_">

                                        <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="1252.9183"
                                            y1="1846.8488" x2="1211.4229" y2="1827.7947"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1206.8" y="135.2" class="st11" width="110.3" height="84.4" />
                                    </mask>

                                    <radialGradient id="SVGID_7_" cx="2607.665" cy="1046.0752" r="40.0919"
                                        gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 95.9982 4325.3555)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.8196" style="stop-color:#757675" />
                                        <stop offset="0.8863" style="stop-color:#959696" />
                                        <stop offset="1" style="stop-color:#B5B6B6" />
                                    </radialGradient>
                                    <path class="st12" d="M1264.2,218.6c22.1,0,41.3-12.7,50.5-31.2c7.5-18.3-16.8-34-40.2-15.9c-24.1,18.7-52.7,4.7-57.1-17
				c-2.1-10.3,0.1-22.5-4.1-16.8c-3.6,7.4-5.6,15.7-5.6,24.5C1207.7,193.3,1233,218.6,1264.2,218.6L1264.2,218.6z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_1_" filterUnits="userSpaceOnUse" x="1258.5"
                                            y="105.7" width="62.1" height="88.6">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1258.5" y="105.7" width="62.1" height="88.6"
                                        id="id34_2_">

                                        <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="1302.429"
                                            y1="1892.4988" x2="1320.8864" y2="1912.7548"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1257.6" y="104.7" class="st13" width="64.1" height="90.5" />
                                    </mask>

                                    <radialGradient id="SVGID_9_" cx="2656.2339" cy="307.2661" r="44.2776"
                                        gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1469.6899 5124.2598)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                        <stop offset="1" style="stop-color:#CBCBCB" />
                                    </radialGradient>
                                    <path class="st14" d="M1310.6,194.2c6.3-9.1,10-20.2,10-32.1c0-31.2-25.3-56.4-56.4-56.4c-1.9,0-3.8,0.1-5.7,0.3
				c8.9,3.9,15,4.5,20.1,8.4c5.4,4.1,15.7,10.7,19.3,16.8c3.5,6.1,8.7,6.9,6.9,14.2c-1.8,7.3-4.7,8.8-2.7,12.6
				c2,3.8,3.7,4.2,7.1,6.9c3.4,2.7,4.2,5.6,4.2,9c0,3.4-0.4,7.9-0.5,9.9c-0.1,2,0.1,6-1.1,8C1311.4,192.3,1311,193.2,1310.6,194.2
				L1310.6,194.2z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_2_" filterUnits="userSpaceOnUse" x="1207.7"
                                            y="132.7" width="107.4" height="85.7">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1207.7" y="132.7" width="107.4" height="85.7"
                                        id="id36_2_">

                                        <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="1199.2604"
                                            y1="1874.9944" x2="1260.9951" y2="1853.0068"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1206.8" y="131.7" class="st15" width="109.4" height="87.7" />
                                    </mask>

                                    <radialGradient id="SVGID_11_" cx="2989.9619" cy="284.6912" r="53.7248"
                                        gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1761.8594 4350.3633)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.451" style="stop-color:#B3B3B3" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <path class="st16" d="M1301.6,204.3l0.5-0.4l0.1-0.1c5.4-4.9,9.9-10.9,13-17.5c-9.7,17.1-28,28.7-49,28.7
				c-31.1,0-56.4-25.3-56.4-56.5c0-9.3,2.2-18.1,6.2-25.8c-5.2,8.6-8.3,18.7-8.3,29.4c0,7.2,1.3,14.1,3.8,20.4
				c8.4,21,28.8,35.9,52.8,35.9C1278.6,218.4,1291.7,213.1,1301.6,204.3L1301.6,204.3z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_3_" filterUnits="userSpaceOnUse" x="1207.8"
                                            y="105.7" width="110.6" height="58.5">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1207.8" y="105.7" width="110.6" height="58.5"
                                        id="id38_2_">

                                        <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="1263.7614"
                                            y1="1889.2311" x2="1260.1808" y2="1911.1597"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1206.8" y="104.7" class="st17" width="112.6" height="60.4" />
                                    </mask>

                                    <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="1272.1318"
                                        y1="1849.3256" x2="1238.7388" y2="1945.1847"
                                        gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                        <stop offset="0" style="stop-color:#696868" />
                                        <stop offset="1" style="stop-color:#FEFEFE" />
                                    </linearGradient>
                                    <path class="st18" d="M1318.4,146.1c-6.9-23.4-28.5-40.5-54.2-40.5c-30.5,0-55.3,24.2-56.4,54.4c8.8-3.3,14.9,2.3,24.6,3.6
				c21.7,3,24.6-11.9,40.1-7.4c8.3,2.4,15.3-4.5,28.1-2.7C1307.3,154.7,1312.4,146.7,1318.4,146.1L1318.4,146.1z" />
                                </g>
                                
                                <g id="_1783945813840_2_" class="hover">
                                    <text transform="matrix(1 0 0 1 161.6625 321.0997)" class="st9">
                                        <tspan x="0" y="0" class="st5 st6 st7">Betriebs- und</tspan>
                                        <tspan x="0" y="67.6" class="st5 st6 st7">Geschäftsausstattung</tspan>
                                    </text>
                                    <radialGradient id="SVGID_23_" cx="2533.178" cy="1002.2298" r="33.6873"
                                        gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1760.344 4408.8408)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <circle class="st28" cx="447.9" cy="474.6" r="56.4" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_8_" filterUnits="userSpaceOnUse" x="391.4"
                                            y="448.7" width="108.4" height="82.4">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="391.4" y="448.7" width="108.4" height="82.4"
                                        id="id32_3_">

                                        <linearGradient id="SVGID_24_" gradientUnits="userSpaceOnUse" x1="436.5791"
                                            y1="1534.3654" x2="395.0836" y2="1515.3113"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="390.4" y="447.7" class="st29" width="110.3" height="84.4" />
                                    </mask>

                                    <radialGradient id="SVGID_25_" cx="2221.3755" cy="1402.3571" r="40.0919"
                                        gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 95.9982 4325.3555)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.8196" style="stop-color:#757675" />
                                        <stop offset="0.8863" style="stop-color:#959696" />
                                        <stop offset="1" style="stop-color:#B5B6B6" />
                                    </radialGradient>
                                    <path class="st30" d="M447.9,531c22.1,0,41.3-12.7,50.5-31.2c7.5-18.3-16.8-34-40.2-15.9c-24.1,18.7-52.7,4.7-57.1-17
				c-2.1-10.3,0.1-22.5-4.1-16.8c-3.6,7.4-5.6,15.7-5.6,24.5C391.4,505.8,416.7,531,447.9,531L447.9,531z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_9_" filterUnits="userSpaceOnUse" x="442.2"
                                            y="418.1" width="62.1" height="88.6">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="442.2" y="418.1" width="62.1" height="88.6"
                                        id="id34_3_">

                                        <linearGradient id="SVGID_26_" gradientUnits="userSpaceOnUse" x1="486.0897"
                                            y1="1580.0155" x2="504.5471" y2="1600.2715"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="441.2" y="417.1" class="st31" width="64.1" height="90.5" />
                                    </mask>

                                    <radialGradient id="SVGID_27_" cx="2458.9893" cy="745.5652" r="44.2776"
                                        gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1469.6899 5124.2598)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                        <stop offset="1" style="stop-color:#CBCBCB" />
                                    </radialGradient>
                                    <path class="st32" d="M494.3,506.7c6.3-9.1,10-20.2,10-32.1c0-31.2-25.3-56.4-56.4-56.4c-1.9,0-3.8,0.1-5.7,0.3
				c8.9,3.9,15,4.5,20.1,8.4c5.4,4.1,15.7,10.7,19.3,16.8c3.5,6.1,8.7,6.9,6.9,14.2c-1.8,7.3-4.7,8.8-2.7,12.6
				c2,3.8,3.7,4.2,7.1,6.9c3.4,2.7,4.2,5.6,4.2,9c0,3.4-0.4,7.9-0.5,9.9c-0.1,2,0.1,6-1.1,8C495.1,504.8,494.7,505.7,494.3,506.7
				L494.3,506.7z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_10_" filterUnits="userSpaceOnUse" x="391.4"
                                            y="445.2" width="107.4" height="85.7">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="391.4" y="445.2" width="107.4" height="85.7"
                                        id="id36_3_">

                                        <linearGradient id="SVGID_28_" gradientUnits="userSpaceOnUse" x1="382.9211"
                                            y1="1562.5111" x2="444.6559" y2="1540.5236"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="390.4" y="444.2" class="st33" width="109.4" height="87.7" />
                                    </mask>

                                    <radialGradient id="SVGID_29_" cx="2731.9216" cy="886.3712" r="53.7248"
                                        gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1761.8594 4350.3633)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.451" style="stop-color:#B3B3B3" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <path class="st34" d="M485.3,516.8l0.5-0.4l0.1-0.1c5.4-4.9,9.9-10.9,13-17.5c-9.7,17.1-28,28.7-49,28.7
				c-31.1,0-56.4-25.3-56.4-56.5c0-9.3,2.2-18.1,6.2-25.8c-5.2,8.6-8.3,18.7-8.3,29.4c0,7.2,1.3,14.1,3.8,20.4
				c8.4,21,28.8,35.9,52.8,35.9C462.3,530.8,475.3,525.6,485.3,516.8L485.3,516.8z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_11_" filterUnits="userSpaceOnUse" x="391.4"
                                            y="418.1" width="110.6" height="58.5">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="391.4" y="418.1" width="110.6" height="58.5"
                                        id="id38_3_">

                                        <linearGradient id="SVGID_30_" gradientUnits="userSpaceOnUse" x1="447.422"
                                            y1="1576.7477" x2="443.8415" y2="1598.6764"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="390.5" y="417.1" class="st35" width="112.6" height="60.4" />
                                    </mask>

                                    <linearGradient id="SVGID_31_" gradientUnits="userSpaceOnUse" x1="455.7925"
                                        y1="1536.8423" x2="422.3994" y2="1632.7014"
                                        gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                        <stop offset="0" style="stop-color:#696868" />
                                        <stop offset="1" style="stop-color:#FEFEFE" />
                                    </linearGradient>
                                    <path class="st36" d="M502,458.6c-6.9-23.4-28.5-40.5-54.2-40.5c-30.5,0-55.3,24.2-56.4,54.4c8.8-3.3,14.9,2.3,24.6,3.6
				c21.7,3,24.6-11.9,40.1-7.4c8.3,2.4,15.3-4.5,28.1-2.7C490.9,467.1,496.1,459.2,502,458.6L502,458.6z" />
                                </g>
                                
                                <g id="_1783945813840_4_" class="hover">
                                    <text transform="matrix(1 0 0 1 1494.7589 742.9636)"
                                        class="st5 st6 st7">Arbeitsschutz</text>
                                    <radialGradient id="SVGID_41_" cx="2508.7859" cy="-95.6516" r="33.6873"
                                        gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1760.344 4408.8408)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <circle class="st46" cx="1796.9" cy="859.1" r="56.4" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_16_" filterUnits="userSpaceOnUse" x="1740.4"
                                            y="833.2" width="108.4" height="82.4">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1740.4" y="833.2" width="108.4" height="82.4"
                                        id="id32_5_">

                                        <linearGradient id="SVGID_42_" gradientUnits="userSpaceOnUse" x1="1785.6047"
                                            y1="1149.835" x2="1744.1093" y2="1130.7809"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1739.4" y="832.2" class="st47" width="110.3" height="84.4" />
                                    </mask>

                                    <radialGradient id="SVGID_43_" cx="2363.7495" cy="437.5647" r="40.0919"
                                        gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 95.9982 4325.3555)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.8196" style="stop-color:#757675" />
                                        <stop offset="0.8863" style="stop-color:#959696" />
                                        <stop offset="1" style="stop-color:#B5B6B6" />
                                    </radialGradient>
                                    <path class="st48" d="M1796.9,915.6c22.1,0,41.3-12.7,50.5-31.2c7.5-18.3-16.8-34-40.2-15.9c-24.1,18.7-52.7,4.7-57.1-17
				c-2.1-10.3,0.1-22.5-4.1-16.8c-3.6,7.4-5.6,15.7-5.6,24.5C1740.4,890.3,1765.7,915.6,1796.9,915.6L1796.9,915.6z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_17_" filterUnits="userSpaceOnUse" x="1791.2"
                                            y="802.7" width="62.1" height="88.6">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1791.2" y="802.7" width="62.1" height="88.6"
                                        id="id34_5_">

                                        <linearGradient id="SVGID_44_" gradientUnits="userSpaceOnUse" x1="1835.1154"
                                            y1="1195.4851" x2="1853.5728" y2="1215.7411"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1790.2" y="801.7" class="st49" width="64.1" height="90.5" />
                                    </mask>

                                    <radialGradient id="SVGID_45_" cx="2302.0513" cy="-12.3474" r="44.2776"
                                        gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1469.6899 5124.2598)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                        <stop offset="1" style="stop-color:#CBCBCB" />
                                    </radialGradient>
                                    <path class="st50" d="M1843.3,891.2c6.3-9.1,10-20.2,10-32.1c0-31.2-25.3-56.4-56.4-56.4c-1.9,0-3.8,0.1-5.7,0.3
				c8.9,3.9,15,4.5,20.1,8.4c5.4,4.1,15.7,10.7,19.3,16.8c3.5,6.1,8.7,6.9,6.9,14.2c-1.8,7.3-4.7,8.8-2.7,12.6
				c2,3.8,3.7,4.2,7.1,6.9c3.4,2.7,4.2,5.6,4.2,9c0,3.4-0.4,7.9-0.5,9.9c-0.1,2,0.1,6-1.1,8C1844.1,889.3,1843.7,890.2,1843.3,891.2
				L1843.3,891.2z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_18_" filterUnits="userSpaceOnUse" x="1740.4"
                                            y="829.7" width="107.4" height="85.7">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1740.4" y="829.7" width="107.4" height="85.7"
                                        id="id36_5_">

                                        <linearGradient id="SVGID_46_" gradientUnits="userSpaceOnUse" x1="1731.9468"
                                            y1="1177.9807" x2="1793.6815" y2="1155.9932"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1739.4" y="828.7" class="st51" width="109.4" height="87.7" />
                                    </mask>

                                    <radialGradient id="SVGID_47_" cx="2513.4148" cy="-88.9431" r="53.7248"
                                        gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1761.8594 4350.3633)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.451" style="stop-color:#B3B3B3" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <path class="st52" d="M1834.3,901.4l0.5-0.4l0.1-0.1c5.4-4.9,9.9-10.9,13-17.5c-9.7,17.1-28,28.7-49,28.7
				c-31.1,0-56.4-25.3-56.4-56.5c0-9.3,2.2-18.1,6.2-25.8c-5.2,8.6-8.3,18.7-8.3,29.4c0,7.2,1.3,14.1,3.8,20.4
				c8.4,21,28.8,35.9,52.8,35.9C1811.3,915.4,1824.3,910.1,1834.3,901.4L1834.3,901.4z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_19_" filterUnits="userSpaceOnUse" x="1740.5"
                                            y="802.7" width="110.6" height="58.5">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1740.5" y="802.7" width="110.6" height="58.5"
                                        id="id38_5_">

                                        <linearGradient id="SVGID_48_" gradientUnits="userSpaceOnUse" x1="1796.4476"
                                            y1="1192.2173" x2="1792.8672" y2="1214.146"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1739.5" y="801.7" class="st53" width="112.6" height="60.4" />
                                    </mask>

                                    <linearGradient id="SVGID_49_" gradientUnits="userSpaceOnUse" x1="1804.8181"
                                        y1="1152.3119" x2="1771.425" y2="1248.171"
                                        gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                        <stop offset="0" style="stop-color:#696868" />
                                        <stop offset="1" style="stop-color:#FEFEFE" />
                                    </linearGradient>
                                    <path class="st54" d="M1851,843.2c-6.9-23.4-28.5-40.5-54.2-40.5c-30.5,0-55.3,24.2-56.4,54.4c8.8-3.3,14.9,2.3,24.6,3.6
				c21.7,3,24.6-11.9,40.1-7.4c8.3,2.4,15.3-4.5,28.1-2.7C1840,851.7,1845.1,843.7,1851,843.2L1851,843.2z" />
                                </g>
                                
                                <g id="_1783945813840_6_" class="hover">
                                    <text transform="matrix(1 0 0 1 442.55 1366.6036)"
                                        class="st5 st6 st7">Datenschutz</text>
                                    <radialGradient id="SVGID_59_" cx="1920.1212" cy="1119.2034" r="33.6873"
                                        gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1760.344 4408.8408)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <circle class="st64" cx="328.1" cy="1317.6" r="56.4" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_24_" filterUnits="userSpaceOnUse" x="271.6"
                                            y="1291.7" width="108.4" height="82.4">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="271.6" y="1291.7" width="108.4" height="82.4"
                                        id="id32_7_">

                                        <linearGradient id="SVGID_60_" gradientUnits="userSpaceOnUse" x1="316.7749"
                                            y1="691.3215" x2="275.2794" y2="672.2674"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="270.6" y="1290.7" class="st65" width="110.3" height="84.4" />
                                    </mask>

                                    <radialGradient id="SVGID_61_" cx="1725.8116" cy="1121.915" r="40.0919"
                                        gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 95.9982 4325.3555)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.8196" style="stop-color:#757675" />
                                        <stop offset="0.8863" style="stop-color:#959696" />
                                        <stop offset="1" style="stop-color:#B5B6B6" />
                                    </radialGradient>
                                    <path class="st66" d="M328.1,1374.1c22.1,0,41.3-12.7,50.5-31.2c7.5-18.3-16.8-34-40.2-15.9c-24.1,18.7-52.7,4.7-57.1-17
				c-2.1-10.3,0.1-22.5-4.1-16.8c-3.6,7.4-5.6,15.7-5.6,24.5C271.6,1348.8,296.9,1374.1,328.1,1374.1L328.1,1374.1z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_25_" filterUnits="userSpaceOnUse" x="322.4"
                                            y="1261.2" width="62.1" height="88.6">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="322.4" y="1261.2" width="62.1" height="88.6"
                                        id="id34_7_">

                                        <linearGradient id="SVGID_62_" gradientUnits="userSpaceOnUse" x1="366.2855"
                                            y1="736.9715" x2="384.7429" y2="757.2275"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="321.4" y="1260.2" class="st67" width="64.1" height="90.5" />
                                    </mask>

                                    <radialGradient id="SVGID_63_" cx="2002.7524" cy="780.149" r="44.2776"
                                        gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1469.6899 5124.2598)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                        <stop offset="1" style="stop-color:#CBCBCB" />
                                    </radialGradient>
                                    <path class="st68" d="M374.5,1349.7c6.3-9.1,10-20.2,10-32.1c0-31.2-25.3-56.4-56.4-56.4c-1.9,0-3.8,0.1-5.7,0.3
				c8.9,3.9,15,4.5,20.1,8.4c5.4,4.1,15.7,10.7,19.3,16.8c3.5,6.1,8.7,6.9,6.9,14.2c-1.8,7.3-4.7,8.8-2.7,12.6
				c2,3.8,3.7,4.2,7.1,6.9c3.4,2.7,4.2,5.6,4.2,9c0,3.4-0.4,7.9-0.5,9.9c-0.1,2,0.1,6-1.1,8C375.3,1347.8,374.9,1348.7,374.5,1349.7
				L374.5,1349.7z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_26_" filterUnits="userSpaceOnUse" x="271.6"
                                            y="1288.2" width="107.4" height="85.7">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="271.6" y="1288.2" width="107.4" height="85.7"
                                        id="id36_7_">

                                        <linearGradient id="SVGID_64_" gradientUnits="userSpaceOnUse" x1="263.1169"
                                            y1="719.4671" x2="324.8517" y2="697.4796"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="270.6" y="1287.2" class="st69" width="109.4" height="87.7" />
                                    </mask>

                                    <radialGradient id="SVGID_65_" cx="2123.3845" cy="991.4673" r="53.7248"
                                        gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1761.8594 4350.3633)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.451" style="stop-color:#B3B3B3" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <path class="st70" d="M365.5,1359.9l0.5-0.4l0.1-0.1c5.4-4.9,9.9-10.9,13-17.5c-9.7,17.1-28,28.7-49,28.7
				c-31.1,0-56.4-25.3-56.4-56.5c0-9.3,2.2-18.1,6.2-25.8c-5.2,8.6-8.3,18.7-8.3,29.4c0,7.2,1.3,14.1,3.8,20.4
				c8.4,21,28.8,35.9,52.8,35.9C342.5,1373.9,355.5,1368.6,365.5,1359.9L365.5,1359.9z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_27_" filterUnits="userSpaceOnUse" x="271.6"
                                            y="1261.2" width="110.6" height="58.5">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="271.6" y="1261.2" width="110.6" height="58.5"
                                        id="id38_7_">

                                        <linearGradient id="SVGID_66_" gradientUnits="userSpaceOnUse" x1="327.6178"
                                            y1="733.7038" x2="324.0373" y2="755.6324"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="270.7" y="1260.2" class="st71" width="112.6" height="60.4" />
                                    </mask>

                                    <linearGradient id="SVGID_67_" gradientUnits="userSpaceOnUse" x1="335.9883"
                                        y1="693.7983" x2="302.5952" y2="789.6574"
                                        gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                        <stop offset="0" style="stop-color:#696868" />
                                        <stop offset="1" style="stop-color:#FEFEFE" />
                                    </linearGradient>
                                    <path class="st72" d="M382.2,1301.7c-6.9-23.4-28.5-40.5-54.2-40.5c-30.5,0-55.3,24.2-56.4,54.4c8.8-3.3,14.9,2.3,24.6,3.6
				c21.7,3,24.6-11.9,40.1-7.4c8.3,2.4,15.3-4.5,28.1-2.7C371.1,1310.2,376.3,1302.2,382.2,1301.7L382.2,1301.7z" />
                                </g>
                                
                                <g id="_1783945813840_9_" class="hover">
                                    <text transform="matrix(1 0 0 1 1486.1106 1663.6998)"
                                        class="st5 st6 st7">Zusatzleistungen</text>
                                    <radialGradient id="SVGID_86_" cx="2001.4498" cy="81.7847" r="33.6873"
                                        gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1760.344 4408.8408)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <circle class="st91" cx="1598.7" cy="1531.1" r="56.4" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_36_" filterUnits="userSpaceOnUse" x="1542.3"
                                            y="1505.2" width="108.4" height="82.4">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1542.3" y="1505.2" width="108.4" height="82.4"
                                        id="id32_10_">

                                        <linearGradient id="SVGID_87_" gradientUnits="userSpaceOnUse" x1="1587.4501"
                                            y1="477.8423" x2="1545.9546" y2="458.7882"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1541.3" y="1504.2" class="st92" width="110.3" height="84.4" />
                                    </mask>

                                    <radialGradient id="SVGID_88_" cx="1941.7903" cy="275.229" r="40.0919"
                                        gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 95.9982 4325.3555)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.8196" style="stop-color:#757675" />
                                        <stop offset="0.8863" style="stop-color:#959696" />
                                        <stop offset="1" style="stop-color:#B5B6B6" />
                                    </radialGradient>
                                    <path class="st93"
                                        d="M1598.7,1587.6c22.1,0,41.3-12.7,50.5-31.2c7.5-18.3-16.8-34-40.2-15.9c-24.1,18.7-52.7,4.7-57.1-17
				c-2.1-10.3,0.1-22.5-4.1-16.8c-3.6,7.4-5.6,15.7-5.6,24.5C1542.3,1562.3,1567.5,1587.6,1598.7,1587.6L1598.7,1587.6z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_37_" filterUnits="userSpaceOnUse" x="1593.1"
                                            y="1474.7" width="62.1" height="88.6">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1593.1" y="1474.7" width="62.1" height="88.6"
                                        id="id34_10_">

                                        <linearGradient id="SVGID_89_" gradientUnits="userSpaceOnUse" x1="1636.9607"
                                            y1="523.4924" x2="1655.4181" y2="543.7484"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1592.1" y="1473.7" class="st94" width="64.1" height="90.5" />
                                    </mask>

                                    <radialGradient id="SVGID_90_" cx="1934.642" cy="71.8035" r="44.2776"
                                        gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1469.6899 5124.2598)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                        <stop offset="1" style="stop-color:#CBCBCB" />
                                    </radialGradient>
                                    <path class="st95" d="M1645.2,1563.2c6.3-9.1,10-20.2,10-32.1c0-31.2-25.3-56.4-56.4-56.4c-1.9,0-3.8,0.1-5.7,0.3
				c8.9,3.9,15,4.5,20.1,8.4c5.4,4.1,15.7,10.7,19.3,16.8c3.5,6.1,8.7,6.9,6.9,14.2c-1.8,7.3-4.7,8.8-2.7,12.6
				c2,3.8,3.7,4.2,7.1,6.9c3.4,2.7,4.2,5.6,4.2,9c0,3.4-0.4,7.9-0.5,9.9c-0.1,2,0.1,6-1.1,8
				C1645.9,1561.3,1645.6,1562.2,1645.2,1563.2L1645.2,1563.2z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_38_" filterUnits="userSpaceOnUse" x="1542.3"
                                            y="1501.7" width="107.4" height="85.7">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1542.3" y="1501.7" width="107.4" height="85.7"
                                        id="id36_10_">

                                        <linearGradient id="SVGID_91_" gradientUnits="userSpaceOnUse" x1="1533.7921"
                                            y1="505.988" x2="1595.5269" y2="484.0005"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1541.3" y="1500.7" class="st96" width="109.4" height="87.7" />
                                    </mask>

                                    <radialGradient id="SVGID_92_" cx="2024.0288" cy="69.6654" r="53.7248"
                                        gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1761.8594 4350.3633)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.451" style="stop-color:#B3B3B3" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <path class="st97" d="M1636.2,1573.4l0.5-0.4l0.1-0.1c5.4-4.9,9.9-10.9,13-17.5c-9.7,17.1-28,28.7-49,28.7
				c-31.1,0-56.4-25.3-56.4-56.5c0-9.3,2.2-18.1,6.2-25.8c-5.2,8.6-8.3,18.7-8.3,29.4c0,7.2,1.3,14.1,3.8,20.4
				c8.4,21,28.8,35.9,52.8,35.9C1613.1,1587.4,1626.2,1582.1,1636.2,1573.4L1636.2,1573.4z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_39_" filterUnits="userSpaceOnUse" x="1542.3"
                                            y="1474.7" width="110.6" height="58.5">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="1542.3" y="1474.7" width="110.6" height="58.5"
                                        id="id38_10_">

                                        <linearGradient id="SVGID_93_" gradientUnits="userSpaceOnUse" x1="1598.2931"
                                            y1="520.2246" x2="1594.7125" y2="542.1533"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="1541.3" y="1473.7" class="st98" width="112.6" height="60.4" />
                                    </mask>

                                    <linearGradient id="SVGID_94_" gradientUnits="userSpaceOnUse" x1="1606.6636"
                                        y1="480.3192" x2="1573.2705" y2="576.1783"
                                        gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                        <stop offset="0" style="stop-color:#696868" />
                                        <stop offset="1" style="stop-color:#FEFEFE" />
                                    </linearGradient>
                                    <path class="st99" d="M1652.9,1515.2c-6.9-23.4-28.5-40.5-54.2-40.5c-30.5,0-55.3,24.2-56.4,54.4c8.8-3.3,14.9,2.3,24.6,3.6
				c21.7,3,24.6-11.9,40.1-7.4c8.3,2.4,15.3-4.5,28.1-2.7C1641.8,1523.7,1646.9,1515.7,1652.9,1515.2L1652.9,1515.2z" />
                                </g>
                                <g id="_1783945813840_10_" class="hover">
                                    <text transform="matrix(1 0 0 1 1023.1246 1766.5997)"
                                        class="st5 st6 st7">Personal</text>
                                    <radialGradient id="SVGID_95_" cx="1673.7343" cy="601.8794" r="33.6873"
                                        gradientTransform="matrix(-3.886510e-02 -1.4359 -1.2279 -0.3183 1760.344 4408.8408)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3412" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.7804" style="stop-color:#7C7C7B" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <circle class="st100" cx="972.8" cy="1836.1" r="56.4" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_40_" filterUnits="userSpaceOnUse" x="916.4"
                                            y="1810.2" width="108.4" height="82.4">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="916.4" y="1810.2" width="108.4" height="82.4"
                                        id="id32_11_">

                                        <linearGradient id="SVGID_96_" gradientUnits="userSpaceOnUse" x1="961.5677"
                                            y1="172.8487" x2="920.0722" y2="153.7946"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="915.4" y="1809.2" class="st101" width="110.3" height="84.4" />
                                    </mask>

                                    <radialGradient id="SVGID_97_" cx="1609.6118" cy="521.0854" r="40.0919"
                                        gradientTransform="matrix(0.9534 -1.3619 -1.2576 -0.5995 95.9982 4325.3555)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3882" style="stop-color:#CDCDCE" />
                                        <stop offset="0.651" style="stop-color:#90908F" />
                                        <stop offset="0.8196" style="stop-color:#757675" />
                                        <stop offset="0.8863" style="stop-color:#959696" />
                                        <stop offset="1" style="stop-color:#B5B6B6" />
                                    </radialGradient>
                                    <path class="st102" d="M972.8,1892.6c22.1,0,41.3-12.7,50.5-31.2c7.5-18.3-16.8-34-40.2-15.9c-24.1,18.7-52.7,4.7-57.1-17
				c-2.1-10.3,0.1-22.5-4.1-16.8c-3.6,7.4-5.6,15.7-5.6,24.5C916.4,1867.3,941.7,1892.6,972.8,1892.6L972.8,1892.6z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_41_" filterUnits="userSpaceOnUse" x="967.2"
                                            y="1779.7" width="62.1" height="88.6">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="967.2" y="1779.7" width="62.1" height="88.6"
                                        id="id34_11_">

                                        <linearGradient id="SVGID_98_" gradientUnits="userSpaceOnUse" x1="1011.0784"
                                            y1="218.4988" x2="1029.5358" y2="238.7548"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="966.2" y="1778.7" class="st103" width="64.1" height="90.5" />
                                    </mask>

                                    <radialGradient id="SVGID_99_" cx="1748.3535" cy="405.4044" r="44.2776"
                                        gradientTransform="matrix(0.1257 -1.8571 -1.806 -0.1228 1469.6899 5124.2598)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.3686" style="stop-color:#E4E4E4" />
                                        <stop offset="1" style="stop-color:#CBCBCB" />
                                    </radialGradient>
                                    <path class="st104" d="M1019.3,1868.2c6.3-9.1,10-20.2,10-32.1c0-31.2-25.3-56.4-56.4-56.4c-1.9,0-3.8,0.1-5.7,0.3
				c8.9,3.9,15,4.5,20.1,8.4c5.4,4.1,15.7,10.7,19.3,16.8c3.5,6.1,8.7,6.9,6.9,14.2c-1.8,7.3-4.7,8.8-2.7,12.6
				c2,3.8,3.7,4.2,7.1,6.9c3.4,2.7,4.2,5.6,4.2,9c0,3.4-0.4,7.9-0.5,9.9c-0.1,2,0.1,6-1.1,8
				C1020.1,1866.3,1019.7,1867.2,1019.3,1868.2L1019.3,1868.2z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_42_" filterUnits="userSpaceOnUse" x="916.4"
                                            y="1806.7" width="107.4" height="85.7">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="916.4" y="1806.7" width="107.4" height="85.7"
                                        id="id36_11_">

                                        <linearGradient id="SVGID_100_" gradientUnits="userSpaceOnUse" x1="907.9097"
                                            y1="200.9944" x2="969.6445" y2="179.0068"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="915.4" y="1805.7" class="st105" width="109.4" height="87.7" />
                                    </mask>

                                    <radialGradient id="SVGID_101_" cx="1779.3636" cy="532.348" r="53.7248"
                                        gradientTransform="matrix(-4.044040e-02 -1.3993 -1.3741 -8.076540e-02 1761.8594 4350.3633)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#FEFEFE" />
                                        <stop offset="0.451" style="stop-color:#B3B3B3" />
                                        <stop offset="1" style="stop-color:#696868" />
                                    </radialGradient>
                                    <path class="st106" d="M1010.3,1878.3l0.5-0.4l0.1-0.1c5.4-4.9,9.9-10.9,13-17.5c-9.7,17.1-28,28.7-49,28.7
				c-31.1,0-56.4-25.3-56.4-56.5c0-9.3,2.2-18.1,6.2-25.8c-5.2,8.6-8.3,18.7-8.3,29.4c0,7.2,1.3,14.1,3.8,20.4
				c8.4,21,28.8,35.9,52.8,35.9C987.3,1892.4,1000.3,1887.1,1010.3,1878.3L1010.3,1878.3z" />
                                    <defs>
                                        <filter id="Adobe_OpacityMaskFilter_43_" filterUnits="userSpaceOnUse" x="916.4"
                                            y="1779.7" width="110.6" height="58.5">
                                            <feColorMatrix type="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" />
                                        </filter>
                                    </defs>
                                    <mask maskUnits="userSpaceOnUse" x="916.4" y="1779.7" width="110.6" height="58.5"
                                        id="id38_11_">

                                        <linearGradient id="SVGID_102_" gradientUnits="userSpaceOnUse" x1="972.4106"
                                            y1="215.231" x2="968.8301" y2="237.1597"
                                            gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                            <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0" />
                                            <stop offset="0.3294" style="stop-color:#FFFFFF;stop-opacity:0.502" />
                                            <stop offset="1" style="stop-color:#FFFFFF" />
                                        </linearGradient>
                                        <rect x="915.4" y="1778.7" class="st107" width="112.6" height="60.4" />
                                    </mask>

                                    <linearGradient id="SVGID_103_" gradientUnits="userSpaceOnUse" x1="980.7812"
                                        y1="175.3255" x2="947.3881" y2="271.1847"
                                        gradientTransform="matrix(1 0 0 -1 0 2028.3546)">
                                        <stop offset="0" style="stop-color:#696868" />
                                        <stop offset="1" style="stop-color:#FEFEFE" />
                                    </linearGradient>
                                    <path class="st108" d="M1027,1820.1c-6.9-23.4-28.5-40.5-54.2-40.5c-30.5,0-55.3,24.2-56.4,54.4c8.8-3.3,14.9,2.3,24.6,3.6
				c21.7,3,24.6-11.9,40.1-7.4c8.3,2.4,15.3-4.5,28.1-2.7C1015.9,1828.7,1021.1,1820.7,1027,1820.1L1027,1820.1z" />
                                </g>
                            </g>
                        </switch>


                        <image xlink:href="/wp-content/uploads/2020/11/Gummiadler-ZSD_05_final_1500px.png" x="827"
                            y="741" height="600" width="600px" />

<!-- 
<style type="text/css">
	.st0{fill:#666666;}
	.st1{fill:url(#SVGID_1_);}
	.st2{fill:url(#SVGID_2_);}
	.st3{fill:url(#SVGID_3_);}
	.st4{fill:url(#SVGID_4_);}
	.st5{fill:url(#SVGID_5_);}
	.st6{fill:url(#SVGID_6_);}
	.st7{fill:url(#SVGID_7_);}
	.st8{fill:url(#SVGID_8_);}
	.st9{fill:url(#SVGID_9_);}
	.st10{fill:url(#SVGID_10_);}
	.st11{fill:#CCCCCC;}
	.st12{fill:none;}
	.st13{font-family:'Arimo-Bold';}
	.st14{font-size:30px;}
	.st15{font-family:'Arimo-Regular';}
	.st16{font-size:24px;}
</style>
<switch>
	<foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
		<i:pgfRef  xlink:href="#adobe_illustrator_pgf">
		</i:pgfRef>
	</foreignObject>
	<g i:extraneous="self">
		<path id="uniqAxis1" class="st0" d="M1186.3,2095.7c-346.1,0-365.3-1963.8,6.8-1980C1563.4,115.7,1560.5,2095.7,1186.3,2095.7z"/>
		<path id="uniqAxis2" class="st0" d="M342.7,1618.2C652,1871.9,2270,879.9,2047.7,591.1C1752,360.1,131,1289.9,342.7,1618.2z"/>
		<path id="uniqAxis3" class="st0" d="M338.3,597.9C130,912.9,1745.4,1854.7,2046.1,1618.2C2233,1301.1,653,337.8,338.3,597.9z"/>
		<g id="_1819496994368">
			
				<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1052.2196" y1="2650.8442" x2="1333.7596" y2="2163.1943" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
				<stop  offset="0" style="stop-color:#EBEBEB"/>
				<stop  offset="1" style="stop-color:#4E4E4E"/>
			</linearGradient>
			<path class="st1" d="M2052.4,615.5c31,65.1-28.7,179.1-154.4,307.3c-130.4,133-329.8,283.8-567.1,420.8s-467.6,234.3-648,280.7
				c-178.6,46-309.5,39.1-346.5-25c-3.2-5.5-5.6-11.3-7.3-17.5l-8.6,4.8c1.9,6.1,4.4,12,7.6,17.5c39.4,68.3,172.3,73.3,355.3,26.1
				c181.2-46.7,412.4-144.3,650.4-281.7c238.1-137.4,438.1-288.8,569.2-422.4c128.9-131.5,191.2-246.5,157.8-315.5L2052.4,615.5
				L2052.4,615.5z"/>
			
				<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="911.6" y1="2407.04" x2="1474.6" y2="2407.04" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
				<stop  offset="0" style="stop-color:#EBEBEB"/>
				<stop  offset="1" style="stop-color:#4E4E4E"/>
			</linearGradient>
			<path class="st2" d="M1193.1,2093.9c74,0,145.4-109.9,194.8-287.6c50-179.4,80.9-427.5,80.9-701.5c0-274.1-30.9-522.1-80.9-701.5
				c-49.5-177.7-120.9-287.6-194.8-287.6s-141.6,109.9-191,287.6c-50,179.4-80.9,427.5-80.9,701.5c0,274.1,30.9,522.1,80.9,701.5
				C1051.5,1984,1119.1,2093.9,1193.1,2093.9z M1393.4,1808.9c-50.7,182.1-121.5,294.7-200.3,294.7s-149.6-112.6-200.3-294.7
				c-50.2-180.3-81.2-429.2-81.2-704.1s31-523.8,81.2-704.1c50.7-182.1,121.5-294.7,200.3-294.7c78.8,0,149.6,112.6,200.3,294.7
				c50.2,180.3,81.2,429.2,81.2,704.1S1443.6,1628.6,1393.4,1808.9z"/>
			
				<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1333.8705" y1="2650.8572" x2="1052.3546" y2="2163.2664" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
				<stop  offset="0" style="stop-color:#EBEBEB"/>
				<stop  offset="1" style="stop-color:#4E4E4E"/>
			</linearGradient>
			<path class="st3" d="M336.5,610.2c-37,64.1,22.5,180.9,151.6,312.5c130.4,133,329.8,283.8,567.1,420.8s467.6,234.3,648,280.7
				c178.6,46,309.5,39.1,346.5-25s-24.4-177.6-153.5-309.2c-130.4-133-329.8-283.8-567.1-420.8s-467.6-234.3-648-280.7
				C502.5,542.6,373.5,546.2,336.5,610.2L336.5,610.2z M483.2,926.2C350.8,791.3,288.7,673.7,328.1,605.4s172.3-73.3,355.3-26.1
				c181.3,46.6,412.4,144.2,650.5,281.7c238,137.4,438.1,288.8,569.2,422.4c132.3,134.9,194.4,252.5,155,320.8
				c-39.4,68.3-172.3,73.3-355.3,26.1c-181.2-46.7-412.3-144.3-650.4-281.7S614.2,1059.8,483.2,926.2L483.2,926.2z"/>
			
				<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="1053.3346" y1="2651.3799" x2="1334.8746" y2="2163.73" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
				<stop  offset="0" style="stop-color:#EBEBEB"/>
				<stop  offset="1" style="stop-color:#4E4E4E"/>
			</linearGradient>
			<path class="st4" d="M2049.7,610.2c1,1.7,1.9,3.5,2.8,5.3l8.4-4.7c-0.9-1.8-1.8-3.6-2.8-5.4c-39.4-68.3-172.3-73.3-355.3-26.1
				C1521.6,626,1290.5,723.6,1052.4,861c-238,137.4-438.1,288.8-569.2,422.4c-121.6,124-183.9,233.4-162.6,303.3l8.6-4.8
				c-18.6-66.1,42.8-171.3,160.9-291.7c130.4-133,329.8-283.8,567.1-420.8c237.4-137,467.6-234.3,648-280.7
				C1883.7,542.6,2012.7,546.2,2049.7,610.2L2049.7,610.2z"/>
		</g>
		
			<radialGradient id="SVGID_5_" cx="3627.25" cy="-464.1432" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FEFEFE"/>
			<stop  offset="0.3412" style="stop-color:#CDCDCE"/>
			<stop  offset="0.651" style="stop-color:#90908F"/>
			<stop  offset="0.7804" style="stop-color:#7C7C7B"/>
			<stop  offset="1" style="stop-color:#696868"/>
		</radialGradient>
		<circle class="st5" cx="692.1" cy="588.7" r="67.2">
		<feGaussianBlur  in="SourceAlpha" result="blur" stdDeviation="1.7"></feGaussianBlur>
		<feOffset  dx="3" dy="3" in="blur" result="offsetBlur"></feOffset>
		<feFlood  flood-color="#3D4574" flood-opacity="0.5" result="offsetColor"></feFlood>
		<feComposite  in="offsetColor" in2="offsetBlur" operator="in" result="offsetBlur"></feComposite>
		</circle>
		
			<radialGradient id="SVGID_6_" cx="3643.1853" cy="543.8204" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FEFEFE"/>
			<stop  offset="0.3412" style="stop-color:#CDCDCE"/>
			<stop  offset="0.651" style="stop-color:#90908F"/>
			<stop  offset="0.7804" style="stop-color:#7C7C7B"/>
			<stop  offset="1" style="stop-color:#696868"/>
		</radialGradient>
		<circle class="st6" cx="1929.2" cy="886.7" r="67.2"/>
		
			<radialGradient id="SVGID_7_" cx="3087.7815" cy="382.051" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FEFEFE"/>
			<stop  offset="0.3412" style="stop-color:#CDCDCE"/>
			<stop  offset="0.651" style="stop-color:#90908F"/>
			<stop  offset="0.7804" style="stop-color:#7C7C7B"/>
			<stop  offset="1" style="stop-color:#696868"/>
		</radialGradient>
		<circle class="st7" cx="1752.1" cy="1632.7" r="67.2"/>
		
			<radialGradient id="SVGID_8_" cx="2825.6367" cy="-230.1318" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FEFEFE"/>
			<stop  offset="0.3412" style="stop-color:#CDCDCE"/>
			<stop  offset="0.651" style="stop-color:#90908F"/>
			<stop  offset="0.7804" style="stop-color:#7C7C7B"/>
			<stop  offset="1" style="stop-color:#696868"/>
		</radialGradient>
		<circle class="st8" cx="1010.6" cy="1814.2" r="67.2"/>
		
			<radialGradient id="SVGID_9_" cx="3090.4097" cy="-655.2679" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FEFEFE"/>
			<stop  offset="0.3412" style="stop-color:#CDCDCE"/>
			<stop  offset="0.651" style="stop-color:#90908F"/>
			<stop  offset="0.7804" style="stop-color:#7C7C7B"/>
			<stop  offset="1" style="stop-color:#696868"/>
		</radialGradient>
		<circle class="st9" cx="478.3" cy="1298.7" r="67.2"/>
		
			<radialGradient id="SVGID_10_" cx="3940.7258" cy="111.5642" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FEFEFE"/>
			<stop  offset="0.3412" style="stop-color:#CDCDCE"/>
			<stop  offset="0.651" style="stop-color:#90908F"/>
			<stop  offset="0.7804" style="stop-color:#7C7C7B"/>
			<stop  offset="1" style="stop-color:#696868"/>
		</radialGradient>

                        <circle class="st10" cx="1386.9" cy="321.9" r="67.2"/>
                        <rect x="1474.5" y="210" class="st11" width="475" height="290"/>
                        <rect x="1494" y="241" class="st12" width="438" height="249"/>
                        <text transform="matrix(1 0 0 1 1494.0109 262.7719)"><tspan x="0" y="0" class="st13 st14">Gerald Farnleitner</tspan><tspan x="0" y="32" class="st15 st16">- Langjähriger VdS Auditor, Prüfer  und </tspan><tspan x="0" y="64" class="st15 st16">Verfahrensexperte,  sehr gute </tspan><tspan x="0" y="96" class="st15 st16">Branchenkenntnisse</tspan><tspan x="0" y="128" class="st15 st16">- Schwerpunkte VdS Zertifizierungen und </tspan><tspan x="0" y="160" class="st15 st16">Anerkennungen, Managementsysteme </tspan><tspan x="0" y="192" class="st15 st16">und Arbeitsschutz</tspan></text>
                        <circle cx="1535" cy="116" r="85"/>
                        <rect x="479" y="210" class="st11" width="475" height="290"/>
                        <rect x="498.5" y="241" class="st12" width="438" height="249"/>
                        <text transform="matrix(1 0 0 1 498.511 262.7719)"><tspan x="0" y="0" class="st13 st14">Stefan Pufe</tspan><tspan x="0" y="32" class="st15 st16">- Langjährige Expertise in der Beratung </tspan><tspan x="0" y="64" class="st15 st16">und Unternehmensführung. </tspan><tspan x="0" y="96" class="st15 st16">- Spezialisiert auf VdS 2172 IS,  VdS </tspan><tspan x="0" y="128" class="st15 st16">NSL 3138 und DIN EN 50518, Risk </tspan><tspan x="0" y="160" class="st15 st16">Management,  Datenschutz und </tspan><tspan x="0" y="192" class="st15 st16">Qualitätsmanagement ISO 9001</tspan></text>
                        <circle cx="539" cy="116" r="85"/>
                        <rect x="467" y="1879" class="st11" width="475" height="234"/>
                        <rect x="486.5" y="1910" class="st12" width="438" height="194"/>
                        <text transform="matrix(1 0 0 1 486.511 1931.772)"><tspan x="0" y="0" class="st13 st14">Marius A. Rossel</tspan><tspan x="0" y="32" class="st15 st16">- Bachelor of Safety and Security (CCI)</tspan><tspan x="0" y="64" class="st15 st16">- Experte für Führung, </tspan><tspan x="0" y="96" class="st15 st16">Personalentwicklung  sowie </tspan><tspan x="0" y="128" class="st15 st16">Produktdesign und Konzeption</tspan></text>
                        <circle cx="527" cy="1785" r="85"/>
                        <rect x="1460" y="1879" class="st11" width="475" height="234"/>
                        <rect x="1479.5" y="1910" class="st12" width="438" height="184"/>
                        <text transform="matrix(1 0 0 1 1479.511 1931.772)"><tspan x="0" y="0" class="st13 st14">Sergej Malij</tspan><tspan x="0" y="32" class="st15 st16">- Bachelor of Safety and Security (CCI)</tspan><tspan x="0" y="64" class="st15 st16">- Experte für Projektierung im Bereich </tspan><tspan x="0" y="96" class="st15 st16">der strategischen Unternehmensplanung </tspan><tspan x="0" y="128" class="st15 st16">und deren operativer Umsetzung</tspan></text>
                        <circle cx="1520" cy="1785" r="85"/>
                        <rect x="1919.5" y="979" class="st11" width="475" height="290"/>
                        <rect x="1939" y="1009" class="st12" width="438" height="249"/>
                        <text transform="matrix(1 0 0 1 1939.011 1030.7715)"><tspan x="0" y="0" class="st13 st14">Ralf Müller</tspan><tspan x="0" y="32" class="st15 st16">- Spezialist für den Einsatz von </tspan><tspan x="0" y="64" class="st15 st16">Flugrobotern </tspan><tspan x="0" y="96" class="st15 st16">- Planung und Beratung für den Einsatz </tspan><tspan x="0" y="128" class="st15 st16">von autonom fliegenden Drohnen für die </tspan><tspan x="0" y="160" class="st15 st16">Überwachung von gewerblichen </tspan><tspan x="0" y="192" class="st15 st16">Freiflächen mit Videoverifikation durch KI</tspan></text>
                        <circle cx="2142" cy="883" r="85"/>
                        <rect x="1.5" y="979" class="st11" width="475" height="238"/>
                        <rect x="21" y="1015" class="st12" width="438" height="185"/>
                        <text transform="matrix(1 0 0 1 21.011 1036.7715)"><tspan x="0" y="0" class="st13 st14">Karl-Heinz Danninger</tspan><tspan x="0" y="32" class="st15 st16">- Praktiker mit langjähriger Erfahrung </tspan><tspan x="0" y="64" class="st15 st16">- Schwerpunkt DIN 77200, Sicherheits- </tspan><tspan x="0" y="96" class="st15 st16">und Dienstleistungskonzepte AZAV, DIN </tspan><tspan x="0" y="128" class="st15 st16">EN ISO 9001, Aus- und Weiterbildung</tspan></text>
                        <circle cx="211" cy="883" r="85"/> -->
                <!-- </svg>  -->

<svg version="1.1" id="orbit" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2400px" height="2200px"
   viewBox="0 0 2400 2200" style="enable-background:new 0 0 2400 2200;" xml:space="preserve">
   <image xlink:href="/wp-content/uploads/2020/11/Gummiadler-ZSD_05_final_1500px.png" x="890"
      y="821" height="600" width="600px" />
   <style type="text/css">
      .st0{fill:#666666;}
      .st1{fill:url(#SVGID_1_);}
      .st2{fill:url(#SVGID_2_);}
      .st3{fill:url(#SVGID_3_);}
      .st4{fill:url(#SVGID_4_);}
      .st5{fill:url(#SVGID_5_);}
      .st6{fill:url(#SVGID_6_);}
      .st7{fill:url(#SVGID_7_);}
      .st8{fill:url(#SVGID_8_);}
      .st9{fill:url(#SVGID_9_);}
      .st10{fill:url(#SVGID_10_);}
      .st11{fill:#3e382a;}
      .st12{fill:none;}
      <!-- .st13{font-family:'Arimo-Bold';} -->
      .st14{font-size:44px;}
      .st15{font-family:'Arimo-Regular';}
      .st16{font-size:25px;}
   </style>
   <!-- <switch> -->
   <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
      <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
      </i:pgfRef>
   </foreignObject>
   <g i:extraneous="self">
      <path id="uniqAxis1" class="st0" d="M1186.3,2095.7c-346.1,0-365.3-1963.8,6.8-1980C1563.4,115.7,1560.5,2095.7,1186.3,2095.7z"/>
      <path id="uniqAxis2" class="st0" d="M342.7,1618.2C652,1871.9,2270,879.9,2047.7,591.1C1752,360.1,131,1289.9,342.7,1618.2z"/>
      <path id="uniqAxis3" class="st0" d="M338.3,597.9C130,912.9,1745.4,1854.7,2046.1,1618.2C2233,1301.1,653,337.8,338.3,597.9z"/>
      <g id="_1819496994368">
         <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1052.2196" y1="2650.8442" x2="1333.7596" y2="2163.1943" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
            <stop  offset="0" style="stop-color:#EBEBEB"/>
            <stop  offset="1" style="stop-color:#4E4E4E"/>
         </linearGradient>
       
         <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="911.6" y1="2407.04" x2="1474.6" y2="2407.04" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
            <stop  offset="0" style="stop-color:#EBEBEB"/>
            <stop  offset="1" style="stop-color:#4E4E4E"/>
         </linearGradient>
         <path id="path-orbit-hover-2" class="st2" d="M1193.1,2093.9c74,0,145.4-109.9,194.8-287.6c50-179.4,80.9-427.5,80.9-701.5c0-274.1-30.9-522.1-80.9-701.5
            c-49.5-177.7-120.9-287.6-194.8-287.6s-141.6,109.9-191,287.6c-50,179.4-80.9,427.5-80.9,701.5c0,274.1,30.9,522.1,80.9,701.5
            C1051.5,1984,1119.1,2093.9,1193.1,2093.9z M1393.4,1808.9c-50.7,182.1-121.5,294.7-200.3,294.7s-149.6-112.6-200.3-294.7
            c-50.2-180.3-81.2-429.2-81.2-704.1s31-523.8,81.2-704.1c50.7-182.1,121.5-294.7,200.3-294.7c78.8,0,149.6,112.6,200.3,294.7
            c50.2,180.3,81.2,429.2,81.2,704.1S1443.6,1628.6,1393.4,1808.9z"/>
         <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1333.8705" y1="2650.8572" x2="1052.3546" y2="2163.2664" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
            <stop  offset="0" style="stop-color:#EBEBEB"/>
            <stop  offset="1" style="stop-color:#4E4E4E"/>
         </linearGradient>
         <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="1053.3346" y1="2651.3799" x2="1334.8746" y2="2163.73" gradientTransform="matrix(1 0 0 -1 0 3511.8403)">
            <stop  offset="0" style="stop-color:#EBEBEB"/>
            <stop  offset="1" style="stop-color:#4E4E4E"/>
         </linearGradient>

         <path id="path-orbit-hover-1" class="st3" d="M336.5,610.2c-37,64.1,22.5,180.9,151.6,312.5c130.4,133,329.8,283.8,567.1,420.8s467.6,234.3,648,280.7
                c178.6,46,309.5,39.1,346.5-25s-24.4-177.6-153.5-309.2c-130.4-133-329.8-283.8-567.1-420.8s-467.6-234.3-648-280.7
                C502.5,542.6,373.5,546.2,336.5,610.2L336.5,610.2z M483.2,926.2C350.8,791.3,288.7,673.7,328.1,605.4s172.3-73.3,355.3-26.1
                c181.3,46.6,412.4,144.2,650.5,281.7c238,137.4,438.1,288.8,569.2,422.4c132.3,134.9,194.4,252.5,155,320.8
                c-39.4,68.3-172.3,73.3-355.3,26.1c-181.2-46.7-412.3-144.3-650.4-281.7S614.2,1059.8,483.2,926.2L483.2,926.2z"/>

         <g id="path-orbit-hover-3">
         <path class="st1" d="M2052.4,615.5c31,65.1-28.7,179.1-154.4,307.3c-130.4,133-329.8,283.8-567.1,420.8s-467.6,234.3-648,280.7
            c-178.6,46-309.5,39.1-346.5-25c-3.2-5.5-5.6-11.3-7.3-17.5l-8.6,4.8c1.9,6.1,4.4,12,7.6,17.5c39.4,68.3,172.3,73.3,355.3,26.1
            c181.2-46.7,412.4-144.3,650.4-281.7c238.1-137.4,438.1-288.8,569.2-422.4c128.9-131.5,191.2-246.5,157.8-315.5L2052.4,615.5
            L2052.4,615.5z"/>
            <path class="st4" d="M2049.7,610.2c1,1.7,1.9,3.5,2.8,5.3l8.4-4.7c-0.9-1.8-1.8-3.6-2.8-5.4c-39.4-68.3-172.3-73.3-355.3-26.1
                C1521.6,626,1290.5,723.6,1052.4,861c-238,137.4-438.1,288.8-569.2,422.4c-121.6,124-183.9,233.4-162.6,303.3l8.6-4.8
                c-18.6-66.1,42.8-171.3,160.9-291.7c130.4-133,329.8-283.8,567.1-420.8c237.4-137,467.6-234.3,648-280.7
                C1883.7,542.6,2012.7,546.2,2049.7,610.2L2049.7,610.2z"/>
        </g>
      </g>
      
      <g id="blackpath1"></g>
      <g id="blackpath3"></g>
      <g id="blackpath2"></g>

        <g class="hover" id="hover1">
            <radialGradient id="SVGID_5_" cx="3627.25" cy="-464.1432" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
                <stop  offset="0" style="stop-color:#FEFEFE"/>
                <stop  offset="0.3412" style="stop-color:#CDCDCE"/>
                <stop  offset="0.651" style="stop-color:#90908F"/>
                <stop  offset="0.7804" style="stop-color:#7C7C7B"/>
                <stop  offset="1" style="stop-color:#696868"/>
            </radialGradient>
            <circle class="st5" cx="692.1" cy="588.7" r="67.2">
                <feGaussianBlur  in="SourceAlpha" result="blur" stdDeviation="1.7"></feGaussianBlur>
                <feOffset  dx="3" dy="3" in="blur" result="offsetBlur"></feOffset>
                <feFlood  flood-color="#3D4574" flood-opacity="0.5" result="offsetColor"></feFlood>
                <feComposite  in="offsetColor" in2="offsetBlur" operator="in" result="offsetBlur"></feComposite>
            </circle>
        </g>
      
        <g class="hover" id="hover2">
            <radialGradient id="SVGID_6_" cx="3643.1853" cy="543.8204" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
                <stop  offset="0" style="stop-color:#FEFEFE"/>
                <stop  offset="0.3412" style="stop-color:#CDCDCE"/>
                <stop  offset="0.651" style="stop-color:#90908F"/>
                <stop  offset="0.7804" style="stop-color:#7C7C7B"/>
                <stop  offset="1" style="stop-color:#696868"/>
            </radialGradient>
            <circle class="st6" cx="1929.2" cy="886.7" r="67.2"/>
        </g>
      
        <g class="hover" id="hover3">
            <radialGradient id="SVGID_7_" cx="3087.7815" cy="382.051" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
                <stop  offset="0" style="stop-color:#FEFEFE"/>
                <stop  offset="0.3412" style="stop-color:#CDCDCE"/>
                <stop  offset="0.651" style="stop-color:#90908F"/>
                <stop  offset="0.7804" style="stop-color:#7C7C7B"/>
                <stop  offset="1" style="stop-color:#696868"/>
            </radialGradient>
            <circle class="st7" cx="1752.1" cy="1632.7" r="67.2"/>
        </g>

        <g class="hover" id="hover4">
            <radialGradient id="SVGID_8_" cx="2825.6367" cy="-230.1318" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
                <stop  offset="0" style="stop-color:#FEFEFE"/>
                <stop  offset="0.3412" style="stop-color:#CDCDCE"/>
                <stop  offset="0.651" style="stop-color:#90908F"/>
                <stop  offset="0.7804" style="stop-color:#7C7C7B"/>
                <stop  offset="1" style="stop-color:#696868"/>
            </radialGradient>
            <circle class="st8" cx="1010.6" cy="1814.2" r="67.2"/>
        </g>
        
        <g class="hover" id="hover5">
            <radialGradient id="SVGID_9_" cx="3090.4097" cy="-655.2679" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
                <stop  offset="0" style="stop-color:#FEFEFE"/>
                <stop  offset="0.3412" style="stop-color:#CDCDCE"/>
                <stop  offset="0.651" style="stop-color:#90908F"/>
                <stop  offset="0.7804" style="stop-color:#7C7C7B"/>
                <stop  offset="1" style="stop-color:#696868"/>
            </radialGradient>
            <circle class="st9" cx="478.3" cy="1298.7" r="67.2"/>
        </g>
      
        <g class="hover" id="hover6">
            <radialGradient id="SVGID_10_" cx="3940.7258" cy="111.5642" r="40.08" gradientTransform="matrix(-3.886510e-02 -1.4359 1.2279 0.3183 1383.2683 5918.4585)" gradientUnits="userSpaceOnUse">
                <stop  offset="0" style="stop-color:#FEFEFE"/>
                <stop  offset="0.3412" style="stop-color:#CDCDCE"/>
                <stop  offset="0.651" style="stop-color:#90908F"/>
                <stop  offset="0.7804" style="stop-color:#7C7C7B"/>
                <stop  offset="1" style="stop-color:#696868"/>
            </radialGradient>
            <circle class="st10" cx="1386.9" cy="321.9" r="67.2"/>
        </g>
        <g id="hover-avatar-1">
      <rect x="1474.5" y="210" class="st11" width="530" height="290"/>
      <rect x="1494" y="241" class="st12" width="447" height="249"/>
      <text transform="matrix(1 0 0 1 1494.0109 262.7719)">
         <tspan x="0" y="0" class="st13 st14">Gerald Farnleitner</tspan>
         <tspan x="0" y="40" class="st15 st16">- Langjähriger VdS Auditor, Prüfer  und </tspan>
         <tspan x="17" y="68" class="st15 st16">Verfahrensexperte,  sehr gute </tspan>
         <tspan x="17" y="97" class="st15 st16">Branchenkenntnisse</tspan>
         <tspan x="0" y="133" class="st15 st16">- Schwerpunkte VdS Zertifizierungen und </tspan>
         <tspan x="17" y="160" class="st15 st16">Anerkennungen, Managementsysteme </tspan>
         <tspan x="17" y="188" class="st15 st16">und Arbeitsschutz</tspan>
      </text>
      <!-- <circle cx="1535" cy="116" r="85" id="avatar-svg-1"/> -->
      <image xlink:href="/wp-content/uploads/2022/07/Gerald-Farnleitner-слева-1.png" x="1622" y="10" height="186px" width="186px" />
        </g>
      <g id="hover-avatar-2">
      <rect x="465" y="210" class="st11" width="495" height="290"/>
      <rect x="498.5" y="241" class="st12" width="438" height="249"/>
      <text transform="matrix(1 0 0 1 480.511 262.7719)">
         <tspan x="0" y="0" class="st13 st14">Stefan Pufe</tspan>
         <tspan x="0" y="40" class="st15 st16">- Langjährige Expertise in der </tspan>
         <tspan x="16" y="68" class="st15 st16">  Beratung und Unternehmensführung. </tspan>
         <tspan x="0" y="105" class="st15 st16">- Spezialisiert auf VdS 2172 IS,  VdS </tspan>
         <tspan x="16" y="133" class="st15 st16">  NSL 3138 und DIN EN 50518, Risk </tspan>
         <tspan x="16" y="160" class="st15 st16">  Management,  Datenschutz und </tspan>
         <tspan x="16" y="188" class="st15 st16">  Qualitätsmanagement ISO 9001</tspan>
      </text>
      <!-- <circle cx="539" cy="116" r="85" id="avatar-svg-2"/> -->
      <image xlink:href="/wp-content/uploads/2022/07/Stefan-Pufe-1.png" x="625" y="9" height="186px" width="186px" />
    </g>
    <g id="hover-avatar-3">
      <rect x="467" y="1901" class="st11" width="510" height="234"/>
      <rect x="486.5" y="1910" class="st12" width="438" height="194"/>
      <text transform="matrix(1 0 0 1 486.511 1953.772)">
         <tspan x="0" y="0" class="st13 st14">Marius A. Rossel</tspan>
         <tspan x="0" y="40" class="st15 st16">- Bachelor of Safety and Security (CCI)</tspan>
         <tspan x="0" y="77" class="st15 st16">- Experte für Führung, </tspan>
         <tspan x="16" y="107" class="st15 st16">  Personalentwicklung  sowie </tspan>
         <tspan x="16" y="137" class="st15 st16">  Produktdesign und Konzeption</tspan>
      </text>
      <!-- <circle cx="527" cy="1785" r="85" id="avatar-svg-3"/> -->
      <image xlink:href="/wp-content/uploads/2022/07/Rossel-слева-1.png" x="606" y="1683" height="186px" width="186px" />
    </g>
    <g id="hover-avatar-4">
      <rect x="1460" y="1901" class="st11" width="510" height="240"/>
      <rect x="1479.5" y="1910" class="st12" width="441" height="184"/>
      <text transform="matrix(1 0 0 1 1479.511 1953.772)">
         <tspan x="0" y="0" class="st13 st14">Sergej Malij</tspan>
         <tspan x="0" y="40" class="st15 st16">- Bachelor of Safety and Security (CCI)</tspan>
         <tspan x="0" y="77" class="st15 st16">- Experte für Projektierung im</tspan>
         <tspan x="17" y="107" class="st15 st16">  Bereich der strategischen </tspan>
         <tspan x="17" y="137" class="st15 st16">  Unternehmensplanung und deren </tspan>
         <tspan x="17" y="167" class="st15 st16">  operativer Umsetzung</tspan>
      </text>
      <!-- <circle cx="1520" cy="1785" r="85" id="avatar-svg-4"/> -->
      <image xlink:href="/wp-content/uploads/2022/07/Rossel-слева-1-1.png" x="1611" y="1704" height="186px" width="186px" />
    </g>
    <g id="hover-avatar-5">
      <rect x="1919.5" y="979" class="st11" width="495" height="290"/>
      <rect x="1939" y="1009" class="st12" width="435" height="249"/>
      <text transform="matrix(1 0 0 1 1939.011 1030.7715)">
         <tspan x="0" y="0" class="st13 st14">Ralf Müller</tspan>
         <tspan x="0" y="40" class="st15 st16">- Spezialist für den Einsatz von </tspan>
         <tspan x="17" y="68" class="st15 st16">  Flugrobotern </tspan>
         <tspan x="0" y="105" class="st15 st16">- Planung und Beratung für den </tspan>
         <tspan x="17" y="134" class="st15 st16">  Einsatz von autonom fliegenden  </tspan>
         <tspan x="17" y="161" class="st15 st16">  Drohnen für die Überwachung von </tspan>
         <tspan x="17" y="187" class="st15 st16">  gewerblichen Freiflächen mit </tspan>
         <tspan x="17" y="214" class="st15 st16">  Videoverifikation durch KI</tspan>
      </text>
      <!-- <circle cx="2142" cy="883" r="85" id="avatar-svg-5"/> -->
      <image xlink:href="/wp-content/uploads/2022/07/Ralf-Mueller-1.png" x="2070" y="780" height="186px" width="186px" />
    </g>
    <g id="hover-avatar-6">
      <rect x="1.5" y="979" class="st11" width="525" height="238"/>
      <rect x="21" y="1015" class="st12" width="441" height="185"/>
      <text transform="matrix(1 0 0 1 21.011 1036.7715)">
         <tspan x="0" y="0" class="st13 st14">Karl-Heinz Danninger</tspan>
         <tspan x="0" y="40" class="st15 st16">- Praktiker mit langjähriger Erfahrung </tspan>
         <tspan x="0" y="77" class="st15 st16">- Schwerpunkt DIN 77200, Sicherheits- </tspan>
         <tspan x="16" y="107" class="st15 st16">  und Dienstleistungskonzepte AZAV, DIN </tspan>
         <tspan x="16" y="137" class="st15 st16">  EN ISO 9001, Aus- und Weiterbildung</tspan>
      </text>
      <!-- <circle cx="211" cy="883" r="85" id="avatar-svg-6" fill="url(#ava-6)"/> -->
      <image xlink:href="/wp-content/uploads/2022/07/Karl-Heinz-Danninger-1.png" x="148" y="770" height="186px" width="186px" />
    </g>
      <g>
         <circle cx=0 cy="0" r="15" fill="#ffffff" id="dot1" class="uniqIDAxis1">
            <animateMotion dur="6.6s" restart="always" rotate="auto"
               repeatCount="indefinite">
               <mpath xlink:href="#uniqAxis1"></mpath>
            </animateMotion>
         </circle>
      </g>
      <g>
         <circle cx="0" cy="0" r="15" fill="#ffffff" id="dot2" class="uniqIDAxis3">
            <animateMotion dur="7.5s" restart="always" rotate="auto" begin="0s"
               repeatCount="indefinite">
               <mpath xlink:href="#uniqAxis2"></mpath>
            </animateMotion>
         </circle>
      </g>
      <g filter="url(#blur)">
         <circle cx="0" cy="0" r="15" fill="#ffffff" id="dot3" class="uniqIDAxis3">
            <animateMotion dur="6.6s" restart="always" rotate="auto"
               repeatCount="indefinite">
               <mpath xlink:href="#uniqAxis3"></mpath>
            </animateMotion>
         </circle>
      </g>
   </g>
   <!-- </switch> -->
 
  

   <defs>
      <filter id="blur">
         <feGaussianBlur in="SourceGraphic" stdDeviation="3" />
      </filter>
      
        <filter id="dropshadow_path" height="130%">
            <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
            <feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->
            <feComponentTransfer>
                <feFuncA type="linear" slope="0.5"/> <!-- slope is the opacity of the shadow -->
            </feComponentTransfer>
            <feMerge> 
                <feMergeNode/> <!-- this contains the offset blurred image -->
                <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
            </feMerge>
            </filter>
        <!-- <circle r="10" style="filter:url(#dropshadow)"/> -->

      <filter xmlns="http://www.w3.org/2000/svg" id="dropshadow" filterUnits="userSpaceOnUse"
        color-interpolation-filters="sRGB">
        <feComponentTransfer in="SourceAlpha">
            <!-- <feFuncR type="discrete" tableValues="209" />
            <feFuncG type="discrete" tableValues="180" />
            <feFuncB type="discrete" tableValues="121" /> -->
            <feFuncA type="table" tableValues="0 1"></feFuncA>
            <feFuncR type="table" tableValues="0.8196078431372549 0.5294117647058824"></feFuncR>
            <feFuncG type="table" tableValues="0.7058823529411765 0.5176470588235295"></feFuncG>
            <feFuncB type="table" tableValues="0.4745098039215686 0.2901960784313726"></feFuncB>
        </feComponentTransfer>
        <feGaussianBlur stdDeviation="50" />
        <feOffset dx="0" dy="0" result="shadow" />
        <feComposite in="SourceGraphic" in2="shadow" operator="over" />
      </filter>

      <pattern id="ava-6" x="0" y="0" patternUnits="userSpaceOnUse" height="186px" width="186px">
         <image x="0" y="320" height="186px" width="186px" xlink:href="/wp-content/uploads/2022/07/ava.png"></image>
      </pattern>
   </defs>
</svg>

<div class="flayer-alone-button">
    <a href="/wp-content/uploads/2022/07/p02_ZSD-Consulting_Flyer_Image_220705_print.pdf" target="_blank" class="partner_bi_2_link">DOWNLOAD FLYER</a>
</div>

<div id="mobile-svg" class="">
        <div class="partner-item">
            <div class="wrapper_img">
                <img src="/wp-content/uploads/2022/07/Gerald-Farnleitner-слева-1.png" alt="">
            </div>
            <h3> Gerald Farnleitner</h3>
            <div class="partner-content">
                <p>- Langjähriger VdS Auditor, Prüfer  und Verfahrensexperte,  sehr gute Branchenkenntnisse</p>
                <p>- Schwerpunkte VdS Zertifizierungen und Anerkennungen, Managementsysteme und Arbeitsschutz</p>
            </div>
        </div>
        <div class="partner-item">
            <div class="wrapper_img">
                <img src="/wp-content/uploads/2022/07/Karl-Heinz-Danninger-1.png" alt="">
            </div>
            <h3>Karl-Heinz Danninger</h3>
            <div class="partner-content">
                    <p>- Praktiker mit langjähriger Erfahrung </p>
                    <p>- Schwerpunkt DIN 77200, Sicherheits- und Dienstleistungskonzepte AZAV, DIN EN ISO 9001, Aus- und Weiterbildung</p>
            </div>
        </div>
        <div class="partner-item">
            <div class="wrapper_img">
                <img src="/wp-content/uploads/2022/07/Stefan-Pufe-1.png" alt="">
            </div>
            <h3>Stefan Pufe</h3>
            <div class="partner-content">
                    <p>- Langjährige Expertise in der Beratung und Unternehmensführung.</p>
                    <p>- Spezialisiert auf VdS 2172 IS,  VdS NSL 3138 und DIN EN 50518, Risk Management,  Datenschutz und Qualitätsmanagement ISO 9001</p>
            </div>
        </div>
        <div class="partner-item">
            <div class="wrapper_img">
                <img src="/wp-content/uploads/2022/07/Ralf-Mueller-1.png" alt="">
            </div>
            <h3>Ralf Müller</h3>
            <div class="partner-content">
                    <p>- Spezialist für den Einsatz von Flugrobotern  </p>
                    <p>- Planung und Beratung für den Einsatz von autonom fliegenden Drohnen für die Überwachung von gewerblichen Freiflächen mit Videoverifikation durch KI</p>
            </div>
        </div>
        <div class="partner-item">
            <div class="wrapper_img">
                <img src="/wp-content/uploads/2022/07/Rossel-слева-1.png" alt="">
            </div>
            <h3>Marius A. Rossel</h3>
            <div class="partner-content">
                    <p>- Bachelor of Safety and Security (CCI)</p>
                    <p>- Experte für Führung, Personalentwicklung  sowie Produktdesign und Konzeption</p>
            </div>
        </div>
        <div class="partner-item">
            <div class="wrapper_img">
                <img src="/wp-content/uploads/2022/07/Rossel-слева-1-1.png" alt="">
            </div>
            <h3>Sergej Malij</h3>
            <div class="partner-content">
                    <p>- Bachelor of Safety and Security (CCI)</p>
                    <p>- Experte für Projektierung im Bereich der strategischen Unternehmensplanung und deren operativer Umsetzung</p>
            </div>
        </div>
</div>

</div>

                <div class="accordion">
                    <div class="first-accordion">
                        <div class="accord-item accord-1 active">
                            <h3><span class="vert-divider"></span>Zertifizierungs-Management</h3>
                            <div class="accord-content">
                                <p>Mit der ZSD Zertifizierungsempfehlung erhalten Sie Ihre Erfolgsgarantie für Ihre Zertifizierung. Die Umsetzung erfolgt praxisorientiert mit dem vollständigen Lösungskonzept von ZSD. Die erfahrenen ZSD Berater kümmern sich vom Antrag bis zum Zertifikat um Ihre Zertifizierung/Anerkennung. Erfahren Sie in den nächsten Punkten bei welchen Projekten wir Sie zum Erfolg begleiten.</p>
                            </div>
                        </div>
                        <div class="accord-item accord-2">
                            <h3><span class="vert-divider"></span>IHRE DIN 77200 ZERTIFIZIEUNG</h3>
                            <div class="accord-content">
                                <p>Als Ihre Beratungspartner haben wir nur ein Ziel: Ihre erfolgreiche Zertifizierung! Vertrauen Sie auf die Zuverlässigkeit und jahrelange Erfahrung der ZSD Berater. Praxisorientiert und mit Kompetenz unterstützen wir Sie im Rahmen der Zertifizierung und danach.</p>
                            </div>
                        </div>
                        <div class="accord-item accord-3">
                            <h3><span class="vert-divider"></span>Qualitätsmanagement (ISO 9001)</h3>
                            <div class="accord-content">
                                <p>Das „all inclusive Paket“ enthält die erforderliche Dokumentation wie z.B. Handbuch, Prozessbeschreibungen, Dienstanweisungen, Verfahrensanweisungen, Formblätter und Berichtsvorlagen. Ein internes Audit und die Management-Bewertung schließt die Zertifizierungsvorbereitung ab. Wir begleiten Sie beim externen Audit der Zertifizierungsstelle.</p>
                            </div>
                        </div>
                    </div>
                    <div class="second-accordion">
                        <div class="accord-item accord-4">
                            <h3><span class="vert-divider"></span>Ihre VdS 2172 IS Anerkennung</h3>
                            <div class="accord-content">
                                <p>Die VdS 2172 Anerkennung als Interventionsstelle dokumentiert Ihre Qualität und Professionalität. Das bereits mehrfach zertifizierte Konzept bringt Sie schnell und sicher an Ihr Ziel. Selbstverständlich inklusive vollständiger Dokumentation und GMS Software Lösung. Wir digitalisieren Ihre Prozesse und sorgen für die vollständige Umsetzung der VdS Sicherungskette sowie der erforderlichen Zeitstempel, Berichte und Auswertungen.</p>
                                <div class="accord-item-nav">
                                    <div class="wrapper-image">
                                        <img src="/wp-content/uploads/2022/07/NSL-neuVdSLogo.jpg" style="width: 168px">
                                    </div>

                                    <a href="/wp-content/uploads/2022/07/doc123.pdf" target="_blank" class="partner_bi_2_link">DOWNLOAD FLYER</a>
                                </div>
                            </div>
                        </div>
                        <div class="accord-item accord-5">
                            <h3><span class="vert-divider"></span>Ihre VdS 3138 NSL Anerkennung</h3>
                            <div class="accord-content">
                                <p>Wir realisieren Ihre vollständige NSL Anerkennung gemäß VdS 3138. Dafür liefern wir alle erforderlichen Prozesse, Dokumente und den ZSD AES und Alarmprovider Service. Alternativ bieten wir das Betreiber Modell zu einem Bruchteil der üblichen Kosten. Dafür benötigen Sie weder eigene NSL Räume oder Technik sowie kein eigenes Personal.</p>
                                <div class="accord-item-nav">
                                    <div class="wrapper-image">
                                        <img src="/wp-content/uploads/2022/07/image003.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accord-item accord-6">
                            <h3><span class="vert-divider"></span>Datenschutz DSGVO</h3>
                            <div class="accord-content">
                                <p>Mit dem ZSD DSGVO System erfüllen Sie einfach und sicher die gesetzlichen Datenschutz-Anforderungen. Wir erarbeiten für Sie Ihr individuelles Datenschutzkonzept. Und bei Bedarf stellen wir den externen Datenschutzbeauftragten. Aufwand und Kosten sind für Sie gering!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="hover-area-block" style="z-index:500;position:absolute;display:none">
        <h3>Ablauforganisation</h3>
        <ul>
            <li>Organisationsstruktur</li>
            <li>Dynam. Arbeitsprozesse</li>
            <li>Prozessbeschreibungen</li>
            <li>Prozessorganisation</li>
            <li>Dienstleistungshandbücher</li>
            <li>Dienstanweisungen</li>
        </ul>
    </div>

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
            svg.appendChild(newDot);
        }
        setTimeout(() => {
            dot.style.cssText = "opacity: 1;";
            svg.style.cssText = "opacity: 1;";
        }, 2300);
    }
    </script>

    <div class="hidden">
        <?php echo do_shortcode('[flipbook pdf="https://zsd.eu/wp-content/uploads/2020/11/ZSD-Broschu%CC%88re_12112020.pdf" lightbox="true"]');?>
    </div>

</main>

<?php get_footer(); ?>