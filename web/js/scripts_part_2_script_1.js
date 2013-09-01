$(function() {
     $('.confirmation').on('click', function (e) {
         var msg = $(e.currentTarget).data("confirmation");
         if (msg == '') {
            msg = "You're about to delete this item. Are you sure?";
         }
         return confirm(msg);
     });
});

$(document).ready(function () {
        $('ul.menu > li').click(function (e) {
            e.preventDefault();
            $('ul.menu > li').removeClass('active');
            $(this).addClass('active');                
        });            
    });