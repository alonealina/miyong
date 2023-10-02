let targets = document.querySelectorAll(`input[type='checkbox'][name='menu_btn']`);

for (let target of targets) {
	target.addEventListener('change', function () {
        checked = target.checked
        if (checked) {
            $('.menu-content_work').css( 'display', 'block' );
            setTimeout( ()=>{    $('.menu-content_work').css( 'opacity', '1' );} ,10);

        } else {
            $('.menu-btn').css( 'pointer-events', 'none' );
            $('.menu-content_work').css( 'opacity', '0' );
            setTimeout( ()=>{    $('.menu-content_work').css( 'display', 'none' );} ,500);
            setTimeout( ()=>{    $('.menu-btn').css( 'pointer-events', 'auto' );} ,500);

        }
    });
}

function clickOpenSp() {
    $('#right_menu_close').css( 'display', 'none' );
    $('#right_menu_open').css( 'display', 'block' );
    $('#right_menu_close').css( 'opacity', '0' );
    setTimeout( ()=>{    $('#right_menu_open').css( 'opacity', '1' );} ,100);
    $('.right_menu').css( 'height', '520px' );
}

function clickCloseSp() {
    $('#right_menu_close').css( 'display', 'block' );
    $('#right_menu_open').css( 'display', 'none' );
    $('#right_menu_open').css( 'opacity', '0' );
    setTimeout( ()=>{    $('#right_menu_close').css( 'opacity', '1' );} ,100);
    $('.right_menu').css( 'height', '85px' );
}