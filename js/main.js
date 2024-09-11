jQuery(document).ready(function($) {


  
    $('.accordion .active').find('.accord-content').slideDown();

    // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    //     anchor.addEventListener('click', function (e) {
    //         e.preventDefault();
    
    //         document.querySelector(this.getAttribute('href')).scrollIntoView({
    //             behavior: 'smooth'
    //         });
    //     });
    // });


    $(document).on('click', 'a[href^="#"]', function (e) {
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: 50
        }, 650, 'linear');
    });

    $('.hover').hover(

        function () {

            let id = $(this).attr('id');
            if(id == 'hover2' || id == 'hover5'){
                $('#path-orbit-hover-3').addClass('filter-shadow');
            } else if (id == 'hover1' || id == 'hover3') {
                $('#path-orbit-hover-1').addClass('filter-shadow');
            } else {
                $('#path-orbit-hover-2').addClass('filter-shadow');
            }

            if(id == 'hover1'){
                $('#hover-avatar-2').addClass('filter-shadow');
            } else if (id == 'hover2'){
                $('#hover-avatar-5').addClass('filter-shadow');
            } else if (id == 'hover3'){
                $('#hover-avatar-4').addClass('filter-shadow');
            } else if (id == 'hover4'){
                $('#hover-avatar-3').addClass('filter-shadow');
            } else if (id == 'hover5'){
                $('#hover-avatar-6').addClass('filter-shadow');
            } else {
                $('#hover-avatar-1').addClass('filter-shadow');
            }
        }, 
        function () {
            $('path, g').removeClass('filter-shadow');
        }
        
    );
    
    jQuery('.accordion h3').click(function() {
        if ($(this).parent().find('.accord-content').text().length > 50) {
            if (jQuery(this).parent().hasClass('active')) {
                jQuery(this).parent().find('.accord-content').slideUp();
                jQuery('.accord-item').each(function() {
                    jQuery(this).find('.accord-content').slideUp();
                    jQuery('.accord-item').removeClass('active');
                });
            } else {
                jQuery('.accord-item').each(function() {
                    jQuery(this).find('.accord-content').slideUp();
                    jQuery('.accord-item').removeClass('active');
                });

                jQuery(this).parent().addClass('active');
                jQuery(this).parent().find('.accord-content').slideDown();
            }
        }

    });

    jQuery('.simple-nav li').click(function() {
        jQuery('.simple-nav li').removeClass('active');
        $(this).addClass('active');
        let page = jQuery(this).attr('data-page');
        jQuery('.uber-page div').removeClass('active-page');
        jQuery('.uber-page').find('.uber-page-inner-' + page).addClass('active-page');
    });

    $('.col-services-cat').click(function() {
        if ($(this).hasClass('active-service')) {
            $('.col-services-cat').removeClass('active-service');
            // $(this).find('button').html('Mehr anzeigen');
        } else {
            $('.col-services-cat').removeClass('active-service');
            $(this).addClass('active-service');
            // $(this).find('button').html($(this).find('button').attr('data-active'));
        }

    });

    // $(document).click(function(event) {
    //     let $target = $(event.target);
    //     if (!$target.closest('.active-service').length && $('.active-service').is(":visible")) {
    //         $('.col-services-cat').removeClass('active-service');
    //     }
    // });

    // $('#partnersvg image').hover(function(e) {
    //     $('.hover-area-block').
    // });

    // jQuery.fn.popupDiv = function(divToPop) {
    //     var pos = $(this).offset();
    //     console.log(pos);
    //     var h = $(this).height();
    //     var w = $(this).width();

    //     $(divToPop).css({ left: pos.left + 100, top: pos.top + h + 10 });

    //     // $(this).click(function(e) {
    //     //     // $(divToPop).css({ left: pos.left + 100, top: pos.top + h + 10 });
    //     //     if ($(divToPop).css('display') !== 'none') {
    //     //         $(divToPop).hide();
    //     //     } else {
    //     //         $(divToPop).show();
    //     //     }
    //     // });
    // };

    $(window).resize(function() {
        $('#partnersvg .hover').removeClass('current-ball');
        $('.hover-area-block').fadeOut();
    });

    $('#partnersvg .hover').click(function() {
        let j = $(this).find('text').position();
        let h = $(this).find('text').height();
        let w = $(this).find('text').width();
        let h3 = $(this).find('text').text();
        let id = $(this).get(0).id;

        switch (h3.replace(/-| |\s/gi, '')) {
            case 'Ablauforganisation':
                var val = '<li>Organisationsstruktur</li> <li>Dynam. Arbeitsprozesse</li> <li>Prozessbeschreibungen</li> <li>Prozessorganisation</li> <li>Dienstleistungshandbücher</li> <li>Dienstanweisungen</li>';
                break;
            case 'Startup':
                var val = '<li>Gründerhandbuch</li> <li>Businessplan</li> <li>Finanzplanung</li>';
                break;
            case 'BetriebsundGeschäftsausstattung':
                var val = '<li>Büroeinrichtung</li> <li>Hard- und Software</li> <li>Ausrüstung</li> <li>Fuhrpark</li> <li>Schutz- und Sicherheitstechnik</li> <li>Kommunikationstechnik</li> <li>Notwehrmittel</li> <li>Leitstellentechnik</li>';
                break;
            case 'Marketing':
                var val = '<li>Corporate Design</li> <li>Werbung, PR</li> <li>Vertrieb</li> <li>Web-Präsenz</li> <li>Social Media</li> <li>Messe</li> <li>Reklamationen</li> <li>Firmenpräsentation</li>';
                break;
            case 'Geschäftsführung':
                var val = '<li>Rechtsform</li> <li>Finanzierung</li> <li>Controlling</li>';
                break;
            case 'Arbeitsschutz':
                var val = '<li>UVV, PSA</li> <li>ArbSchB</li> <li>Erste Hilfe</li>';
                break;
            case 'Datenschutz':
                var val = '<li>Datenschutz-Beauftragter</li> <li>Datenschutz Konzept</li> <li>Datenschutzhandbuch</li>';
                break;
            case 'Qualitätsmanagement':
                var val = '<li>QM-System</li> <li>Audits</li> <li>DIN 77200</li>';
                break;
            case 'Administration':
                var val = '<li>Allgemeine Verwaltung</li> <li>Rechnungswesen/Inkasso</li> <li>Buchhaltung (vorb.)</li> <li>Versicherungen</li> <li>Behördenkommunikation</li> <li>Lokistik/Beschaffung</li> <li>Banking</li> <li>Auftragbearbeitung</li> <li>Statistik</li>';
                break;
            case 'Personal':
                var val = '<li>Stellenprofile</li> <li>Personalplanung</li> <li>Personalbeschaffung</li> <li>Personalentwicklung</li> <li>L+G-Abrechnung</li>';
                break;
            case 'Zusatzleistungen':
                var val = '<li>NSL Alarmprovider</li> <li>Interventionsservice</li> <li>Versicherung</li> <li>Rechtsberatung</li> <li>IT Beratung</li> <li>Steuerberatung</li>';
                break;
            default:
        }

        const divToPop = $('.hover-area-block');
        if (h3.replace(/-| |\s/gi, '') == 'Qualitätsmanagement') {
            divToPop.find('h3').html(h3.replace(/-| |\s/gi, ''));
            divToPop.find('ul').html(val);
        } else {
            divToPop.find('h3').html(h3);
            divToPop.find('ul').html(val);

        }




        let te = j.left + w;

        if ($(divToPop).css('display') == 'none' || !$(this).hasClass('current-ball')) {
            $('#partnersvg .hover').removeClass('current-ball');
            $(this).addClass('current-ball');
            if (id == '_1783945813840_2_') {
                $(divToPop).css({ left: j.left + (w / 2), top: j.top - 145, right: 'unset' });
            } else {
                $(divToPop).css({ left: j.left + (w / 2), top: j.top - 180, right: 'unset' });
            }
            $(divToPop).fadeIn();
        } else if ($(this).hasClass('current-ball')) {
            $('#partnersvg .hover').removeClass('current-ball');
            $(divToPop).fadeOut();
        } else {
            $('#partnersvg .hover').removeClass('current-ball');
            $(divToPop).fadeOut();
        }

        var win = divToPop;
        var width = win.width();
        var pos = win.position();
        var rightpos = pos.left + width;

        var screenwidth = $('.svg-orbit-partner').width();
        if (screenwidth <= 1150) {
            if (rightpos > screenwidth) {
                var moveleft = rightpos - screenwidth;
                win.css({ left: 'unset', right: '0' });
            }
        }

    })

    $('.hover-area-block').click(function() {
        $(this).fadeOut();
    });

    // $(function() {
    //     $('.hvrpop-link').hover(function() {
    //         var win=$(this).find('.hvrpop-win:visible');
    //         if(win.length>0) {
    //             var screenwidth=$('body').width();
    //             var width=win.width();
    //             var pos=win.position();
    //             var rightpos=width+pos.left;
    //             if(rightpos>screenwidth) {
    //                 var moveleft=rightpos-screenwidth;
    //                 win.css('margin-left','-'+moveleft+'px');
    //             } else {
    //                 win.css('margin-left','0px');
    //             }
    //         }
    //     });
    // });




    // $("#partnersvg #test").popupDiv(".hover-area-block");

});