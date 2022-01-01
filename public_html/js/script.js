$(function () {
    // Link logo inside nav to homepage
    $('nav img').click(function () {
        $(location).attr('href', '/index.php');
    });

    // Open external links in new window
    $('a[href^="http://"], a[href^="https://"]').filter('a:not([target])').attr('target', '_blank');

    // Images: copy alt attribute to title attribute
    $('img:not([title])').each(function () {
        $(this).attr('title', $(this).attr('alt'))
    });

    // Equal width labels inside a form
    let labelWidht = 0;
    $('form div label:first-child')
    // .css('border', 'solid 1px red')
        .each(function () {
            $(this).width() > labelWidht ? labelWidht = $(this).width() : '';
        })
        .promise()
        .done(function () {
            $('form div label:first-child').width(labelWidht).css('text-align', 'right');
        });

    $('pre').each(function () {
        let code = $(this).html();
        let res = code.replace(/>/g, '&gt;').replace(/</g, '&lt;');
        $(this).html(res);
    });

    // Grid: find last column on a row and set padding-right to 0 (class .last-in-row)
    $(window).resize(resize).resize();

    function resize() {
        $('*[class^=col-]').removeClass('last-in-row');
        $('.row').each(function () {
            let offset = 0;
            $(this).find('*[class^=col-]').each(function (i, el) {
                let left = $(el).position().left;
                if (left > offset) {
                    offset = left;
                } else {
                    offset = 0;
                    $(this).prev().addClass('last-in-row');
                }
            });
        });
    }

    // Lightbox
    $('main img').css('cursor', 'zoom-in').click(function () {
        let src = $(this).attr('src');
        let lightbox = `<div id="lightbox">
            <img src="${src}" alt="">
            </div>`;
        $(lightbox).appendTo('body').hide().fadeIn(500);
    });
    $('body').on('click', '#lightbox img', function () {
        $('#lightbox').fadeOut(500, function () {
                $('#lightbox').remove();
            }
        );
    });
});