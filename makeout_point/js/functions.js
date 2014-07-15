var isSmartphone = false;
var menuIsOpen = false;

function testSmartphone() {
    // Test if client is a smartphone. UA sniffing is iffy.
    var mob = 'mobile-device-test';
    $('body').append('<div class="' + mob + '">');
    isSmartphone = ($('.' + mob).css('display') === 'none') ? true : false;
    $('body').remove('.' + mob);
}

function openMenu(obj, btn) {
    // Same code in closeMenu(). I don't want to animate menu on phones.
    // It looks juddery, depending on the handset. 
    if (!isSmartphone) {
        $(obj).slideDown();
    } else {
        $(obj).toggle();
    }

    $(btn).css('background-color', '#ba3434');
    menuIsOpen = true;
}

function closeMenu(obj, btn) {
    if (!isSmartphone) {
        $(obj).slideUp();
    } else {
        $(obj).toggle();
    }

    $(btn).css('background-color', '#343537');
    menuIsOpen = false;
}

$(function() {
    // For google-code-prettify
    $('pre').each(function() {
        $(this).addClass('prettyprint');
    });    
    
    testSmartphone();

    // Pop open the menu if the comments link was followed.
    if (document.URL.indexOf('#comments') >= 0)
        openMenu('.comments .wrap', $(this));
});

$('nav .button').click(function() {
    if (!menuIsOpen) {
        openMenu('nav .wrap', $(this));
    } else {
        closeMenu('nav .wrap', $(this));
    }
});

$('.comments .button').click(function() {
    if (!menuIsOpen) {
        openMenu('.comments .wrap', $(this));
    } else {
        closeMenu('.comments .wrap', $(this));
    }
});
