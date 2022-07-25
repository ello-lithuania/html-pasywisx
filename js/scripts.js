$( document ).ready(function() {
    $('.fee-method-select').change(function() {
        let newID = $('.fee-method-select option:selected').attr( "data-id" );

        if ($(".fee-selection-active")[0]){
            $('.fee-selection-active').removeClass('fee-selection-active');
        }
        $(`#${newID}`).addClass('fee-selection-active');
    });
    $('.main-menu-toggle').click(function() {
        $('body').toggleClass('body-navbar-small');
        $('.navbar-brand-div').toggleClass('navbar-brand-small');
        $('aside').toggleClass('aside-sidebar-small');
    });
    /* */
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
    /* */
    $(".disabled-agents-edit-submit").click(function() {
        $(".disabled-agents-edit-submit-btns").addClass("hidden");
        $(".disabled-agents-edit-submit-btns2").addClass("hidden");
    });
    $(".enable-agents-edit-submit").click(function() {
        $(".disabled-agents-edit-submit-btns").removeClass("hidden");
        $(".disabled-agents-edit-submit-btns2").removeClass("hidden");
    });
});