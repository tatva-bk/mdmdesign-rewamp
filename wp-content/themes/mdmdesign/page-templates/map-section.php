<section class="mdm-map-section" >
	<div class="container"><?php
        if(get_field('map_section_heading') || get_field('map_section_sub_content') || get_field('map_section_content')) { ?>
            <div class="map-info-block">
                <span class="mdm-small-title"><?php echo get_field('map_section_heading'); ?></span>
                <h2><?php echo get_field('map_section_sub_content'); ?></h2>
                <p><?php echo get_field('map_section_content'); ?></p>
            </div><?php
        } ?>
		<div class="map-block" data-aos="fade-up"><?php
            if(get_field('map_image')) { ?>
                <img  src="<?php echo get_field('map_image'); ?>" alt="map">
            <?php } else { ?>
                <img  src="<?php echo get_template_directory_uri(); ?>/public/images/mdm-map.png" alt="map">
            <?php }  ?>
			<svg version="1.1" id="animated-map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 1603.9 635.4" style="enable-background:new 0 0 1603.9 635.4;" xml:space="preserve">
                    <style type="text/css">
                        #animated-map .st0{fill:#464547;}
                        #animated-map .st1{fill:#3D3D3E;}
                        #animated-map .st2{fill:#545456;}
                        #animated-map .st3{clip-path:url(#SVGID_00000182491969151337516980000013238496645193827259_);}
                        #animated-map .st4{clip-path:url(#SVGID_00000059273724476069950170000006285266514142129062_);}
                        #animated-map .st5{clip-path:url(#SVGID_00000128484949296933327620000009876252478889087924_);}
                        #animated-map .st6{clip-path:url(#SVGID_00000010306289230249306350000015219593064291905973_);}
                        #animated-map .st7{clip-path:url(#SVGID_00000066484210481073307660000001313494648468102845_);}
                        #animated-map .st8{clip-path:url(#SVGID_00000136409728916715365320000016063715114066323884_);}
                        #animated-map .st9{clip-path:url(#SVGID_00000168820314642746521260000009139050316176505239_);}
                        #animated-map .st10{clip-path:url(#SVGID_00000029012167092716233950000007800579442439593633_);}
                        #animated-map .st11{clip-path:url(#SVGID_00000003072350338403232430000018142361270932383127_);}
                        #animated-map .st12{clip-path:url(#SVGID_00000044862175425246410100000010033479346554938785_);}
                        #animated-map .st13{clip-path:url(#SVGID_00000007427783460468611610000004633016116023420822_);}
                        #animated-map .st14{clip-path:url(#SVGID_00000066513212810277179770000003123604121617221050_);}
                        #animated-map .st15{fill:#FFFFFF;}
                        #animated-map .st16{clip-path:url(#SVGID_00000010998382450370592060000002278311287342500738_);}
                        #animated-map .st17{clip-path:url(#SVGID_00000030477711654109092500000018217603994125680055_);}
                        #animated-map .st18{clip-path:url(#SVGID_00000005248805976929819420000006206496657611660219_);}
                        #animated-map .st19{clip-path:url(#SVGID_00000025400741199742455460000014291414160805332646_);}
                        #animated-map .st20{clip-path:url(#SVGID_00000078758562760890591990000008728005111136116384_);}
                        #animated-map .st21{clip-path:url(#SVGID_00000098940264741547755490000010027450726358783637_);}
                        #animated-map .st22{clip-path:url(#SVGID_00000041279500964166694410000001071781961303644813_);}
                        #animated-map .st23{clip-path:url(#SVGID_00000145044539621420121950000017636455824551582350_);}
                        #animated-map .st24{clip-path:url(#SVGID_00000002382833146740510670000010802922334602489473_);}
                        #animated-map .st25{clip-path:url(#SVGID_00000149362489856816363460000016886564079631001494_);}
                        #animated-map .st26{clip-path:url(#SVGID_00000044879725137518641520000010900459246234082966_);}
                        #animated-map .st27{clip-path:url(#SVGID_00000130631782930743809270000005571804149291464352_);}
                        #animated-map .st28{clip-path:url(#SVGID_00000049210496683579097000000014930538125144058264_);}
                        #animated-map .st29{fill:none;stroke:#D1D3D4;stroke-width:0.5;stroke-miterlimit:10;}
                        #animated-map .st30{fill:url(#pin1_00000155135141929819739320000000949723359772536252_);}
                        #animated-map .st31{fill:url(#pin2_00000056420463247917645840000001472393023918842529_);}
                        #animated-map .st32{fill:url(#pin3_00000144322605511229084010000000149941228100176263_);}
                        #animated-map .st33{fill:url(#pin4_00000172423909257646708560000005213097606023846300_);}
                        #animated-map .st34{fill:url(#pin5_00000024706132711856927400000000478469863122793394_);}
                        #animated-map .st35{fill:none;stroke:#D1D3D4;stroke-miterlimit:10;}
                        #animated-map .st36{fill:url(#pin6_00000032618410758810382890000009155024986710214040_);}
                        #animated-map .st37{fill:url(#pin7_00000163788476283937764660000004312788519930529971_);}
                        #animated-map .st38{fill:url(#pin8_00000177446058410686378140000014760717692495207821_);}
                        #animated-map .st39{fill:url(#pin9_00000105407298628036700450000016954961561149555340_);}
                        #animated-map .st40{fill:url(#pin10_00000167381867722896654980000002059050279469453491_);}
                        #animated-map .st41{fill:url(#pin11_00000141439950412339611850000001760999786349468855_);}
                        #animated-map .st42{fill:url(#pin12_00000037651885808773232870000012418617632259642783_);}
                        #animated-map .st43{fill:url(#pin13_00000023239574566632464070000007471611844494125984_);}
                        #animated-map .st44{fill:url(#pin14_00000160181404533619509350000002612877000123785660_);}
                        #animated-map .st45{fill:url(#pin15_00000064344722449270764350000017641542431592215211_);}
                        #animated-map .st46{fill:url(#pin16_00000026133705665636462820000000981473826566117274_);}
                        #animated-map .st47{fill:url(#pin17_00000129923467824154668600000007421833413404386204_);}
                        #animated-map .st48{fill:url(#pin18_00000067954364145168733870000006951006591501382301_);}
                        #animated-map .st49{fill:url(#pin19_00000049915805849641481980000016491610755751611572_);}
                        #animated-map .st50{fill:url(#pin20_00000089550434270626166860000012229792191124971940_);}
                        #animated-map .st51{fill:url(#pin21_00000111905324967053706960000004923656374633486221_);}
                        #animated-map .st52{fill:url(#pin22_00000049206340981450771670000003167434931021765811_);}
                        #animated-map .st53{fill:url(#pin23_00000170245753871377025670000006733636661100548769_);}
                        #animated-map .st54{fill:url(#pin24_00000034802130228578965890000016518906020086406326_);}
                        #animated-map .st55{fill:url(#pin25_00000137095881831859756750000003483371025457039511_);}
                        #animated-map .st56{fill:url(#pin26_00000120558812061026875560000003890270293921502344_);}
                        #animated-map .st57{fill:url(#pin27_00000012450395256043830040000000472399617350122164_);}
                        #animated-map .st58{fill:url(#pin28_00000079473143321275106900000001968226952930533251_);}
                        #animated-map .st59{fill:url(#pin29_00000016066575916642296270000018116684538830032267_);}
                        #animated-map .st60{fill:url(#pin30_00000086679090053162929370000009029041666603196582_);}
                        #animated-map .st61{fill:url(#pin31_00000041261242366699402380000009358091549423100080_);}
                        #animated-map .st62{fill:url(#pin32_00000048469394088697115260000005372528305431550628_);}
                        #animated-map .st63{fill:url(#pin33_00000150798212401882104330000016830837039228867227_);}
                        #animated-map .st64{fill:url(#pin34_00000176749919738382801990000010768060895746040218_);}
                        #animated-map .st65{fill:url(#pin35_00000003068940237081831880000000632136785520983217_);}
                        #animated-map .st66{fill:url(#pin36_00000091005263240820126130000013084531026419611027_);}
                        #animated-map .st67{fill:url(#pin37_00000161611445089541657130000014599727030802451357_);}
                        #animated-map .st68{fill:url(#pin38_00000139994112648523052110000011621317087057656504_);}
                        #animated-map .st69{fill:url(#pin39_00000049917563748741034690000000196967978152200371_);}
                        #animated-map .st70{fill:url(#pin40_00000057116329972155692610000005408190816423807138_);}
                        #animated-map .st71{fill:url(#pin41_00000169539745046163150290000004444679609718874794_);}
                        #animated-map .st72{fill:url(#pin42_00000147928364976216208800000013796217523052708760_);}
                        #animated-map .st73{fill:url(#main_x5F_pin_00000127731632408762673680000018347954775931269534_);}
                    </style>

                <g id="animation1">
                    <path id="path1" class="st29 map-line map-line1" d="M1432,536.9c0,0-355.7-536.6-805.5-536.6c-307.1,0-490.2,223.2-490.2,223.2"/>
                    <linearGradient id="pin1_00000045580586138028190980000002784003516500322738_" gradientUnits="userSpaceOnUse" x1="137.484" y1="227.022" x2="137.484" y2="219.022">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin1"  class="map-dot map-dot1" style="fill:url(#pin1_00000045580586138028190980000002784003516500322738_);" d="M137.5,227c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C133.5,225.2,135.3,227,137.5,227L137.5,227z"/>
                </g>
                <g id="animation2">
                    <path id="path2" class="st29 map-line map-line2" d="M144.3,235.8c0,0,184.7-223.7,478.2-223.7c461.9,0,809.5,526,809.5,526"/>
                    
                        <linearGradient id="pin2_00000009579430350625141250000000554606125356235933_" gradientUnits="userSpaceOnUse" x1="145.484" y1="238.696" x2="145.484" y2="230.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin2" class="map-dot map-dot2" style="fill:url(#pin2_00000009579430350625141250000000554606125356235933_);" d="M145.5,238.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4s-4,1.8-4,4C141.5,236.9,143.3,238.7,145.5,238.7L145.5,238.7z"/>
                </g>
                <g id="animation3">
                    <path id="path3" class="st29 map-line map-line3" d="M1434.7,538.6c0,0-347.4-513.7-813.8-513.7c-253.2,0-443.5,200.2-443.5,200.2"/>
                    
                        <linearGradient id="pin3_00000007415882615098596100000003311949563382158982_" gradientUnits="userSpaceOnUse" x1="177.443" y1="229.126" x2="177.443" y2="221.126">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin3" class="map-dot map-dot3" style="fill:url(#pin3_00000007415882615098596100000003311949563382158982_);" d="M177.4,229.1c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4s-4,1.8-4,4S175.2,229.1,177.4,229.1L177.4,229.1z"/>
                </g>
                <g id="animation4">
                    <path id="path4" class="st29 map-line map-line4" d="M203.1,281.7c0,0,159-226.3,445.8-226.3c464.8,0,789.1,481.9,789.1,481.9"/>
                    
                        <linearGradient id="pin4_00000113355295176953062050000007688746002393604494_" gradientUnits="userSpaceOnUse" x1="203.734" y1="284.932" x2="203.734" y2="276.932">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin4" class="map-dot map-dot4" style="fill:url(#pin4_00000113355295176953062050000007688746002393604494_);" d="M203.7,284.9c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4s-4,1.8-4,4C199.7,283.1,201.5,284.9,203.7,284.9L203.7,284.9z"/>
                </g>
                <g id="animation5">
                    <path id="path5" class="st29 map-line map-line5" d="M233.7,302.8c0,0,166.3-230.1,491.4-230.1c362.2,0,705.8,465,705.8,465"/>
                    
                        <linearGradient id="pin5_00000139988164611369656160000007681249263370366639_" gradientUnits="userSpaceOnUse" x1="233.734" y1="305.151" x2="233.734" y2="297.151">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin5" class="map-dot map-dot5" style="fill:url(#pin5_00000139988164611369656160000007681249263370366639_);" d="M233.7,305.2c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4s-4,1.8-4,4S231.5,305.2,233.7,305.2L233.7,305.2z"/>
                </g>
                <g id="animation6">
                    <path id="path6" class="st35 map-line map-line6" d="M340.6,189c0,0,114.5-107.6,323.1-107.6c368,0,769.9,456.9,769.9,456.9"/>
                    
                        <linearGradient id="pin6_00000143608636751787515260000009259606148518172565_" gradientUnits="userSpaceOnUse" x1="341.738" y1="191.808" x2="341.738" y2="183.808">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin6" class="map-dot map-dot6" style="fill:url(#pin6_00000143608636751787515260000009259606148518172565_);" d="M341.7,191.8c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C337.7,190,339.5,191.8,341.7,191.8L341.7,191.8z"/>
                </g>
                <g id="animation7">
                    <path id="path7" class="st29 map-line map-line7" d="M347.6,211.7c0,0,145.3-113.9,324.2-113.9c441.5,0,760.3,439.1,760.3,439.1"/>
                    
                        <linearGradient id="pin7_00000173844939053045311290000004384922100691934872_" gradientUnits="userSpaceOnUse" x1="348.734" y1="215.731" x2="348.734" y2="207.731">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin7" class="map-dot map-dot7" style="fill:url(#pin7_00000173844939053045311290000004384922100691934872_);" d="M348.7,215.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4s-4,1.8-4,4C344.7,213.9,346.5,215.7,348.7,215.7L348.7,215.7z"/>
                </g>
                <g id="animation8">
                    <path id="path8" class="st29 map-line map-line8" d="M355.9,318c0,0,220.2-200.1,442.4-200.1c418.6,0,635.7,419.6,635.7,419.6"/>
                    
                        <linearGradient id="pin8_00000148648635752899894290000006466054826930572704_" gradientUnits="userSpaceOnUse" x1="356.912" y1="320.696" x2="356.912" y2="312.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin8" class="map-dot map-dot8" style="fill:url(#pin8_00000148648635752899894290000006466054826930572704_);" d="M356.9,320.7c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S354.7,320.7,356.9,320.7L356.9,320.7z"/>
                </g>
                <g id="animation9">
                    <path id="path9" class="st29 map-line map-line9" d="M416.6,414.7c0,0,216.4-178.7,480.6-178.7c350,0,523.7,289.7,534.8,300.9"/>
                    
                        <linearGradient id="pin9_00000180341420265148682710000018151018785144493970_" gradientUnits="userSpaceOnUse" x1="417.734" y1="417.696" x2="417.734" y2="409.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin9" class="map-dot map-dot9" style="fill:url(#pin9_00000180341420265148682710000018151018785144493970_);" d="M417.7,417.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C413.7,415.9,415.5,417.7,417.7,417.7L417.7,417.7z"/>
                </g>
                <g id="animation10">
                    <path id="path10" class="st29 map-line map-line10" d="M261.8,484.6c0,0,282.4-272.9,579.2-272.9c436.7,0,593.1,325.6,593.1,325.6"/>
                    
                        <linearGradient id="pin10_00000124155270979458895440000012177563175374240676_" gradientUnits="userSpaceOnUse" x1="262.938" y1="486.491" x2="262.938" y2="478.4911">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin10" class="map-dot map-dot10" style="fill:url(#pin10_00000124155270979458895440000012177563175374240676_);" d="M262.9,486.5c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C258.9,484.7,260.7,486.5,262.9,486.5L262.9,486.5z"/>
                </g>
                <g id="animation11">
                    <path id="path11" class="st29 map-line map-line11" d="M325.3,510.8c0,0,301.2-269.8,594.5-269.8c371.6,0,511.8,296.7,511.8,296.7"/>
                    
                        <linearGradient id="pin11_00000156577619011637800460000002947990995164698757_" gradientUnits="userSpaceOnUse" x1="326.025" y1="513.822" x2="326.025" y2="505.8221">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin11" class="map-dot map-dot11" style="fill:url(#pin11_00000156577619011637800460000002947990995164698757_);" d="M326,513.8c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S323.8,513.8,326,513.8L326,513.8z"/>
                </g>
                <g id="animation12">
                    <path id="path12" class="st29 map-line map-line12" d="M788.6,471.4c0,0,103.4-152.8,277.8-152.8c203,0,367.2,219.8,367.2,219.8"/>
                    
                        <linearGradient id="pin12_00000137847042081853875610000016769534760582983341_" gradientUnits="userSpaceOnUse" x1="789.064" y1="474.791" x2="789.064" y2="466.791">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin12" class="map-dot map-dot12" style="fill:url(#pin12_00000137847042081853875610000016769534760582983341_);" d="M789.1,474.8c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4s-4,1.8-4,4S786.9,474.8,789.1,474.8L789.1,474.8z"/>
                </g>
                <g id="animation13">
                    <path id="path13" class="st29 map-line map-line13" d="M880.7,270.4c0,0,80.2-113.3,224.2-113.3c197.3,0,326.8,380.7,326.8,380.7"/>
                    
                        <linearGradient id="pin13_00000098906182968334774760000003581191163182015641_" gradientUnits="userSpaceOnUse" x1="880.7289" y1="272.696" x2="880.7289" y2="264.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin13" class="map-dot map-dot13" style="fill:url(#pin13_00000098906182968334774760000003581191163182015641_);" d="M880.7,272.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C876.7,270.9,878.5,272.7,880.7,272.7L880.7,272.7z"/>
                </g>
                <g id="animation14">
                    <path id="path14" class="st29 map-line map-line14" d="M621.6,183.6c0,0,129.2-117.2,279-117.2c336.1,0,531.5,470.6,531.5,470.6"/>
                    
                        <linearGradient id="pin14_00000042719591579843299130000012448803800511711158_" gradientUnits="userSpaceOnUse" x1="622.458" y1="186.696" x2="622.458" y2="178.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin14" class="map-dot map-dot14" style="fill:url(#pin14_00000042719591579843299130000012448803800511711158_);" d="M622.5,186.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C618.5,184.9,620.2,186.7,622.5,186.7L622.5,186.7z"/>
                </g>
                <g id="animation15">
                    <path id="path15" class="st29 map-line map-line15" d="M642.6,201.8c0,0,98.4-124.8,260.1-124.8c304.5,0,529.4,460.1,529.4,460.1"/>
                    
                        <linearGradient id="pin15_00000007410717473645743020000000083726937394467244_" gradientUnits="userSpaceOnUse" x1="642.5651" y1="204.696" x2="642.5651" y2="196.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin15" class="map-dot map-dot15" style="fill:url(#pin15_00000007410717473645743020000000083726937394467244_);" d="M642.6,204.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C638.6,202.9,640.4,204.7,642.6,204.7L642.6,204.7z"/>
                </g>
                <g id="animation16">
                    <path id="path16" class="st29 map-line map-line16" d="M663.7,184c0,0,106.2-96,217-96c331.7,0,497.1,373.4,550.9,449.6"/>
                    
                        <linearGradient id="pin16_00000073686805882748923640000007787590786273798812_" gradientUnits="userSpaceOnUse" x1="663.7339" y1="186.696" x2="663.7339" y2="178.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin16" class="map-dot map-dot16" style="fill:url(#pin16_00000073686805882748923640000007787590786273798812_);" d="M663.7,186.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C659.7,184.9,661.5,186.7,663.7,186.7L663.7,186.7z"/>
                </g>
                <g id="animation17">
                    <path id="path17" class="st29 map-line map-line17" d="M667.7,205.2c0,0,81.1-101.2,259.7-101.2c273.2,0,492.5,412.7,504.2,433.7"/>
                    
                        <linearGradient id="pin17_00000052084160400490493410000008989572393760257676_" gradientUnits="userSpaceOnUse" x1="667.734" y1="208.696" x2="667.734" y2="200.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin17" class="map-dot map-dot17" style="fill:url(#pin17_00000052084160400490493410000008989572393760257676_);" d="M667.7,208.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C663.7,206.9,665.5,208.7,667.7,208.7L667.7,208.7z"/>
                </g>
                <g id="animation18">
                    <path id="path18" class="st29 map-line map-line18" d="M705,215c0,0,57.3-86.5,188.4-86.5c267,0,501.3,356.5,538.3,409.1"/>
                    
                        <linearGradient id="pin18_00000129889901529911944360000007920460894320841365_" gradientUnits="userSpaceOnUse" x1="704.9821" y1="219.022" x2="704.9821" y2="211.022">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin18" class="map-dot map-dot18" style="fill:url(#pin18_00000129889901529911944360000007920460894320841365_);" d="M705,219c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S702.8,219,705,219L705,219z"/>
                </g>
                <g id="animation19">
                    <path id="path19" class="st29 map-line map-line19" d="M737.6,183.8c0,0,26.8-37.9,131.6-37.9c240.6,0,562.6,391.8,562.6,391.8"/>
                    
                        <linearGradient id="pin19_00000123411231914453276580000011875673765427197118_" gradientUnits="userSpaceOnUse" x1="738.7339" y1="186.696" x2="738.7339" y2="178.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin19" class="map-dot map-dot19" style="fill:url(#pin19_00000123411231914453276580000011875673765427197118_);" d="M738.7,186.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C734.7,184.9,736.5,186.7,738.7,186.7L738.7,186.7z"/>
                </g>
                <g id="animation20">
                    <path id="path20" class="st29 map-line map-line20" d="M983.9,301.9c0,0,49.2-60.9,125.6-60.9c171.8,0,321.7,296.7,321.7,296.7"/>
                    
                        <linearGradient id="pin20_00000101063570137169798430000014819526595141641110_" gradientUnits="userSpaceOnUse" x1="983.919" y1="305.151" x2="983.919" y2="297.151">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin20" class="map-dot map-dot20" style="fill:url(#pin20_00000101063570137169798430000014819526595141641110_);" d="M983.9,305.2c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S981.7,305.2,983.9,305.2L983.9,305.2z"/>
                </g>
                <g id="animation21">
                    <path id="path21" class="st29 map-line map-line21" d="M1012.4,334.2c0,0,38.3-70.2,113.7-70.2c146,0,306.2,274,306.2,274"/>
                    
                        <linearGradient id="pin21_00000064340576409612632360000011332912039161544067_" gradientUnits="userSpaceOnUse" x1="1012.4391" y1="337.417" x2="1012.4391" y2="329.417">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin21" class="map-dot map-dot21" style="fill:url(#pin21_00000064340576409612632360000011332912039161544067_);" d="M1012.4,337.4c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4s-4,1.8-4,4C1008.4,335.6,1010.2,337.4,1012.4,337.4L1012.4,337.4z"/>
                </g>
                <g id="animation22">
                    <path id="path22" class="st29 map-line map-line22" d="M1034.6,220.2c0,0,66.8-64.9,158.2-49.4c175,29.7,233.2,337.8,239,366.9"/>
                    
                        <linearGradient id="pin22_00000044879334123459989420000012547875411954829454_" gradientUnits="userSpaceOnUse" x1="1035.7289" y1="223.022" x2="1035.7289" y2="215.022">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin22" class="map-dot map-dot22" style="fill:url(#pin22_00000044879334123459989420000012547875411954829454_);" d="M1035.7,223c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S1033.5,223,1035.7,223L1035.7,223z"/>
                </g>
                <g id="animation23">
                    <path id="path23" class="st29 map-line map-line23" d="M1075.6,212.5c0,0,41.9-30.3,88.7-24.7c166.3,19.9,262.3,332.7,266.5,348.7"/>
                    
                        <linearGradient id="pin23_00000093874819442343063300000007318084701189357704_" gradientUnits="userSpaceOnUse" x1="1076.3191" y1="215.731" x2="1076.3191" y2="207.731">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin23" class="map-dot map-dot23" style="fill:url(#pin23_00000093874819442343063300000007318084701189357704_);" d="M1076.3,215.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1072.3,213.9,1074.1,215.7,1076.3,215.7L1076.3,215.7z"/>
                </g>
                <g id="animation24">
                    <path id="path24" class="st29 map-line map-line24" d="M1131.8,223.1c0,0,58.9-27.4,129.2,9.8c129.1,68.4,170.7,304.8,170.7,304.8"/>
                    
                        <linearGradient id="pin24_00000119083994385277280320000008247510997837131960_" gradientUnits="userSpaceOnUse" x1="1132.899" y1="226.314" x2="1132.899" y2="218.314">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin24" class="map-dot map-dot24" style="fill:url(#pin24_00000119083994385277280320000008247510997837131960_);" d="M1132.9,226.3c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S1130.7,226.3,1132.9,226.3L1132.9,226.3z"/>
                </g>
                <g id="animation25">
                    <path id="path25" class="st29 map-line map-line25" d="M1143.7,276.2c0,0,18.2-18.8,63.2,4c107.2,54.2,224.5,257.6,224.5,257.6"/>
                    
                        <linearGradient id="pin25_00000046330523920258964280000001205269597492968839_" gradientUnits="userSpaceOnUse" x1="1143.7289" y1="280.223" x2="1143.7289" y2="272.223">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin25" class="map-dot map-dot25" style="fill:url(#pin25_00000046330523920258964280000001205269597492968839_);" d="M1143.7,280.2c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S1141.5,280.2,1143.7,280.2L1143.7,280.2z"/>
                </g>
                <g id="animation26">
                    <path id="path26" class="st29 map-line map-line26" d="M1221.7,232.8c0,0,35.8,32.2,58.1,56.5c81.4,88.6,151.1,245.9,151.1,245.9"/>
                    
                        <linearGradient id="pin26_00000175294528887677957680000018384597618521623218_" gradientUnits="userSpaceOnUse" x1="1222.2289" y1="237.696" x2="1222.2289" y2="229.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin26" class="map-dot map-dot26" style="fill:url(#pin26_00000175294528887677957680000018384597618521623218_);" d="M1222.2,237.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1218.2,235.9,1220,237.7,1222.2,237.7L1222.2,237.7z"/>
                </g>
                <g id="animation27">
                    <path id="path27" class="st29 map-line map-line27" d="M1091.3,310.5c0,0,1.4-21.4,50-9.2c91.8,23.1,290.3,236.5,290.3,236.5"/>
                    
                        <linearGradient id="pin27_00000058573895342887376990000008670007053208982966_" gradientUnits="userSpaceOnUse" x1="1091.3191" y1="313.151" x2="1091.3191" y2="305.151">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin27" class="map-dot map-dot27" style="fill:url(#pin27_00000058573895342887376990000008670007053208982966_);" d="M1091.3,313.2c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1087.3,311.4,1089.1,313.2,1091.3,313.2L1091.3,313.2z"/>
                </g>
                <g id="animation28">
                    <path id="path28" class="st29 map-line map-line28" d="M1094.1,346.9c0,0,8.2-21.6,53.8-12.8c95.8,18.6,284.4,203.8,284.4,203.8"/>
                    
                        <linearGradient id="pin28_00000034787108203259136500000000575588452700015280_" gradientUnits="userSpaceOnUse" x1="1095.3191" y1="350.696" x2="1095.3191" y2="342.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin28" class="map-dot map-dot28" style="fill:url(#pin28_00000034787108203259136500000000575588452700015280_);" d="M1095.3,350.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1091.3,348.9,1093.1,350.7,1095.3,350.7L1095.3,350.7z"/>
                </g>
                <g id="animation29">
                    <path id="path29" class="st29 map-line map-line29" d="M1111.6,359.9c0,0,10-15.2,43-12.5c97.1,7.8,277.1,190.4,277.1,190.4"/>
                    
                        <linearGradient id="pin29_00000181795680393485942650000014205800659944784295_" gradientUnits="userSpaceOnUse" x1="1113.7289" y1="363.893" x2="1113.7289" y2="355.893">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin29" class="map-dot map-dot29" style="fill:url(#pin29_00000181795680393485942650000014205800659944784295_);" d="M1113.7,363.9c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S1111.5,363.9,1113.7,363.9L1113.7,363.9z"/>
                </g>
                <g id="animation30">
                    <path id="path30" class="st29 map-line map-line30" d="M1131.7,393.1c0,0,9.7-16.3,45-15.3c91,2.7,256.9,160.5,256.9,160.5"/>
                    
                        <linearGradient id="pin30_00000042694934012375352290000004045650522427959475_" gradientUnits="userSpaceOnUse" x1="1132.899" y1="395.696" x2="1132.899" y2="387.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin30" class="map-dot map-dot30" style="fill:url(#pin30_00000042694934012375352290000004045650522427959475_);" d="M1132.9,395.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1128.9,393.9,1130.7,395.7,1132.9,395.7L1132.9,395.7z"/>
                </g>
                <g id="animation31">
                    <path id="path31" class="st29 map-line map-line31" d="M1247.7,500.6c0,0,8.9-39.5,53.9-39.5c45,0,105.1,50.4,130,76.6"/>
                    
                        <linearGradient id="pin31_00000018218950700035773720000014096061970033713830_" gradientUnits="userSpaceOnUse" x1="1247.7289" y1="503.543" x2="1247.7289" y2="495.5431">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin31" class="map-dot map-dot31" style="fill:url(#pin31_00000018218950700035773720000014096061970033713830_);" d="M1247.7,503.5c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1243.7,501.8,1245.5,503.5,1247.7,503.5L1247.7,503.5z"/>
                </g>
                <g id="animation32">
                    <path id="path32" class="st29 map-line map-line32" d="M1290.8,410c0,0,2.6-8.3,19.2-2.7c42.3,14.5,123.5,131.9,123.5,131.9"/>
                    
                        <linearGradient id="pin32_00000126287007046144596750000008567269003512180157_" gradientUnits="userSpaceOnUse" x1="1291.4391" y1="413.113" x2="1291.4391" y2="405.113">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin32" class="map-dot map-dot32" style="fill:url(#pin32_00000126287007046144596750000008567269003512180157_);" d="M1291.4,413.1c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1287.4,411.3,1289.2,413.1,1291.4,413.1L1291.4,413.1z"/>
                </g>
                <g id="animation33">
                    <path id="path33" class="st29 map-line map-line33" d="M1370.6,433.4c0,0,10.1-7.4,27.7,11s31.4,76.2,33.3,93.3"/>
                    
                        <linearGradient id="pin33_00000072279791342373590020000016844553811910559897_" gradientUnits="userSpaceOnUse" x1="1371.7289" y1="436.53" x2="1371.7289" y2="428.53">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin33" class="map-dot map-dot33" style="fill:url(#pin33_00000072279791342373590020000016844553811910559897_);" d="M1371.7,436.5c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1367.7,434.7,1369.5,436.5,1371.7,436.5L1371.7,436.5z"/>
                </g>
                <g id="animation34">
                    <path id="path34" class="st29 map-line map-line34" d="M1439.4,478.4c0,0-10.8,0.9-14.5,13.3c-4.5,15.2,5.6,43.9,5.6,43.9"/>
                    
                        <linearGradient id="pin34_00000052064746637482012570000007173006361939040702_" gradientUnits="userSpaceOnUse" x1="1439.4391" y1="482.696" x2="1439.4391" y2="474.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin34" class="map-dot map-dot34" style="fill:url(#pin34_00000052064746637482012570000007173006361939040702_);" d="M1439.4,482.7
                        c-1.8,0-3.3-1.2-3.8-2.9c-0.1-0.2-0.1-0.3-0.1-0.5c0,0,0-0.1,0-0.1c0-0.2,0-0.4,0-0.5c0-2.2,1.8-4,4-4c2.2,0,4,1.8,4,4
                        c0,1.7-1.1,3.1-2.5,3.7C1440.4,482.6,1440,482.7,1439.4,482.7"/>
                </g>
                <g id="animation35">
                    <path id="path35" class="st29 map-line map-line35" d="M1442.6,499.3c0,0-8.9,0.4-12.5,9.1s0,25.8,0.5,27.8"/>
                    
                        <linearGradient id="pin35_00000014600393828273685700000014165533544384519052_" gradientUnits="userSpaceOnUse" x1="1442.0291" y1="503.543" x2="1442.0291" y2="495.5431">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin35" class="map-dot map-dot35" style="fill:url(#pin35_00000014600393828273685700000014165533544384519052_);" d="M1442,503.5
                        c-1.8,0-3.3-1.2-3.8-2.7c-0.1-0.2-0.1-0.3-0.1-0.5c0-0.2-0.1-0.5-0.1-0.8c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.6,1c0.9,0.7,1.4,1.8,1.4,3
                        c0,1.4-0.7,2.6-1.8,3.3C1443.6,503.3,1442.8,503.5,1442,503.5"/>
                </g>
                <g id="animation36">
                    <path id="path36" class="st29 map-line map-line36" d="M1383,517.5c0,0,5.1-7.2,18-2.5c12.9,4.7,23.9,16.7,29.2,21.3"/>
                    
                        <linearGradient id="pin36_00000005266841277993264750000009139771278647046589_" gradientUnits="userSpaceOnUse" x1="1383.9391" y1="520.697" x2="1383.9391" y2="512.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin36" class="map-dot map-dot36" style="fill:url(#pin36_00000005266841277993264750000009139771278647046589_);" d="M1383.9,520.7
                        c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4c1.4,0,2.5,0.7,3.3,1.7c0.1,0.1,0.2,0.3,0.3,0.4c0.3,0.6,0.5,1.2,0.5,1.9
                        C1387.9,518.9,1386.1,520.7,1383.9,520.7"/>
                </g>
                <g id="animation37">
                    <path id="path37" class="st29 map-line map-line37" d="M1442.8,555.3c0,0,3.6-2,0-8c-3.6-5.9-9.2-9-9.2-9"/>
                    
                        <linearGradient id="pin37_00000056405949022859242700000009327673416125028280_" gradientUnits="userSpaceOnUse" x1="1443.4392" y1="558.696" x2="1443.4392" y2="550.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin37" class="map-dot map-dot37" style="fill:url(#pin37_00000056405949022859242700000009327673416125028280_);" d="M1443.4,558.7
                        c-2.2,0-4-1.8-4-4c0-0.2,0-0.3,0-0.5c0.2-2,1.9-3.5,4-3.5c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0.1,0.5,0.1c1.5,0.4,2.7,1.7,3,3.2
                        c0,0.2,0.1,0.4,0.1,0.6C1447.4,556.9,1445.6,558.7,1443.4,558.7"/>
                </g>
                <g id="animation38">
                    <path id="path38" class="st29 map-line map-line38" d="M1456,562.7c0,0,5.5-6.8-1.5-13.6c-7-6.7-21.4-10.6-21.4-10.6"/>
                    
                        <linearGradient id="pin38_00000168096337494295017580000017184275686391956896_" gradientUnits="userSpaceOnUse" x1="1456.0291" y1="565.987" x2="1456.0291" y2="557.987">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin38" class="map-dot map-dot38" style="fill:url(#pin38_00000168096337494295017580000017184275686391956896_);" d="M1456,566c-2.2,0-4-1.8-4-4
                        c0-2.1,1.7-3.9,3.8-4c0.1,0,0.1,0,0.2,0c0.6,0,1.1,0.1,1.6,0.3c0.2,0.1,0.3,0.1,0.5,0.2c1.2,0.7,1.9,2,1.9,3.4
                        c0,1.7-1.1,3.2-2.7,3.8C1456.9,565.9,1456.5,566,1456,566"/>
                </g>
                <g id="animation39">
                    <path id="path39" class="st29 map-line map-line39" d="M1577.7,510.1c0,0-6.1-14.8-27.8-15c-21.6-0.2-68.4,13.3-120.9,43.7"/>
                    
                        <linearGradient id="pin39_00000139257767943408861870000009155477582756805006_" gradientUnits="userSpaceOnUse" x1="1577.7289" y1="512.696" x2="1577.7289" y2="504.696">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin39" class="map-dot map-dot39" style="fill:url(#pin39_00000139257767943408861870000009155477582756805006_);" d="M1577.7,512.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4c-2.2,0-4,1.8-4,4C1573.7,510.9,1575.5,512.7,1577.7,512.7L1577.7,512.7z"/>
                </g>
                <g id="animation40">
                    <path id="path40" class="st29 map-line map-line40" d="M1581,548.9c0,0,0.1-27.7-35.2-31.2c-39.4-3.9-101.3,14.2-113.6,19.8"/>
                    
                        <linearGradient id="pin40_00000125600104181009689730000017119385110132077453_" gradientUnits="userSpaceOnUse" x1="1581.0291" y1="551.6511" x2="1581.0291" y2="543.651">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin40" class="map-dot map-dot40" style="fill:url(#pin40_00000125600104181009689730000017119385110132077453_);" d="M1581,551.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4s-4,1.8-4,4C1577,549.9,1578.8,551.7,1581,551.7L1581,551.7z"/>
                </g>
                <g id="animation41">
                    <path id="path41" class="st29 map-line map-line41" d="M1560.8,571.1c0,0,5.2-9.7-11.2-19.4c-23.9-14.1-92.4-15-116.3-13.7"/>
                    
                        <linearGradient id="pin41_00000106127164157588656370000008228775396417454519_" gradientUnits="userSpaceOnUse" x1="1562.4391" y1="573.9871" x2="1562.4391" y2="565.987">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin41" class="map-dot map-dot41" style="fill:url(#pin41_00000106127164157588656370000008228775396417454519_);" d="M1562.4,574c2.2,0,4-1.8,4-4
                        s-1.8-4-4-4c-2.2,0-4,1.8-4,4S1560.2,574,1562.4,574L1562.4,574z"/>
                </g>
                <g id="animation42">
                    <path id="path42" class="st29 map-line map-line42" d="M1536.2,584.8c0,0,5.8-12.4-24.3-25.4s-83.2-22.2-83.2-22.2"/>
                    
                        <linearGradient id="pin42_00000041272157739448244940000015017035925573683611_" gradientUnits="userSpaceOnUse" x1="1536.3191" y1="586.735" x2="1536.3191" y2="578.735">
                        <stop  offset="0" style="stop-color:#006EFF"/>
                        <stop  offset="1" style="stop-color:#00FFFF"/>
                    </linearGradient>
                    <path id="pin42" class="map-dot map-dot42" style="fill:url(#pin42_00000041272157739448244940000015017035925573683611_);" d="M1536.3,586.7c2.2,0,4-1.8,4-4
                        c0-2.2-1.8-4-4-4s-4,1.8-4,4C1532.3,584.9,1534.1,586.7,1536.3,586.7L1536.3,586.7z"/>
                </g>
                <linearGradient id="main_x5F_pin_00000028284635212055753830000003246258482439373445_" gradientUnits="userSpaceOnUse" x1="1431.4441" y1="543.818" x2="1431.4441" y2="530.768">
                    <stop  offset="0" style="stop-color:#006EFF"/>
                    <stop  offset="1" style="stop-color:#00FFFF"/>
                </linearGradient>
                <path id="main_x5F_pin" style="fill:url(#main_x5F_pin_00000028284635212055753830000003246258482439373445_);" d="M1431.4,543.8
                    c3.6,0,6.5-2.9,6.5-6.5c0-3.6-2.9-6.5-6.5-6.5c-3.6,0-6.5,2.9-6.5,6.5C1424.9,540.9,1427.8,543.8,1431.4,543.8L1431.4,543.8z"/>
                </svg>

		</div>
	</div>
</section>