/**
 * Created by Carmichael on 2016-03-03.
 */




function toggleChevron(el) {
    if ($(el).find('i').hasClass('glyphicon-chevron-down'))
        $(el).find('.glyphicon-chevron-down').removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
    else
        $(el).find('.glyphicon-chevron-right').removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
}