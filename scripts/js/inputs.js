var typingTimer;
var usernameInputDoneTypingInterval = 5000;
var $input = $('#myInput');

$input.on('keyup', function() {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(usernameInputDoneTyping, usernameInputDoneTypingInterval);
});

$input.on('keydown', function() {
    clearTimeout(typingTimer);
});

function usernameInputDoneTyping() {
    //do something
}

$("#show_hide_password a").on('click', function(event) {
    event.preventDefault();
    if ($('#show_hide_password input').attr("type") == "text") {
        $('#show_hide_password input').attr('type', 'password');
        $('#show_hide_password i').addClass("fa-eye-slash");
        $('#show_hide_password i').removeClass("fa-eye");
    } else if ($('#show_hide_password input').attr("type") == "password") {
        $('#show_hide_password input').attr('type', 'text');
        $('#show_hide_password i').removeClass("fa-eye-slash");
        $('#show_hide_password i').addClass("fa-eye");
    }
});

var removeText = $("<div>X</div>");
removeText.on("click", function() {
    var current = $(this);
    current.prev().val("");
});

$("input:text").on("keypress", function() {
    $(this).next(removeText.clone());
})