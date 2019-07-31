 
jQuery(document).ready(function(){
    jQuery("#toFooter").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = jQuery(this).attr('href'),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = jQuery(id).offset().top;
        
        //анимируем переход на расстояние - top за 1500 мс
        jQuery('body,html').animate({scrollTop: top}, 1500);
    });
});