let targets = document.querySelectorAll(`input[type='checkbox'][name='menu_btn']`);

for (let target of targets) {
	target.addEventListener('change', function () {
        checked = target.checked
        if (checked) {
            $('.header_1').addClass('header_1_after');
            $('.header_2').addClass('header_2_after');
            $('.header_3').addClass('header_3_after');
            $('.header_4').addClass('header_4_after');
            $('.header_5').addClass('header_5_after');
            $('.header_6').addClass('header_6_after');
            $('.header_7').addClass('header_7_after');
            $('.menu-content_work').css( 'display', 'block' );
            setTimeout( ()=>{    $('.menu-content_work').css( 'opacity', '1' );} ,10);




        } else {
            $('.menu-btn').css( 'pointer-events', 'none' );
            $('.header_1').removeClass('header_1_after');
            $('.header_2').removeClass('header_2_after');
            $('.header_3').removeClass('header_3_after');
            $('.header_4').removeClass('header_4_after');
            $('.header_5').removeClass('header_5_after');
            $('.header_6').removeClass('header_6_after');
            $('.header_7').removeClass('header_7_after');
            $('.menu-content_work').css( 'opacity', '0' );
            setTimeout( ()=>{    $('.menu-content_work').css( 'display', 'none' );} ,500);
            setTimeout( ()=>{    $('.menu-btn').css( 'pointer-events', 'auto' );} ,500);

        }
    });
}