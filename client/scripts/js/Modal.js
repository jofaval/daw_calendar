class Modal {
    static genericModalWithForm(formName, readonly = false, whenLoaded = null) {
        $("<div id='test'></div>").load("../server/templates/forms/form" + formName + ".html", {}, function () {
            var content = $(this);

            var modalContent = $.sweetModal({
                title: formName,
                content: content.html(),
                theme: $.sweetModal.THEME_DARK
            });

            whenLoaded(modalContent);

            if (readonly) {
                modalContent.content.find("form *[type=submit]").remove();
                modalContent.content.find("form input").attr("readonly", true);
            }
        });
    }

    static modalError(message) {
        $.sweetModal({
            content: message,
            icon: $.sweetModal.ICON_ERROR
        });
    }

    static confirmModal(actionAfterConfirm, buttonText = "Remove", title = "Are you sure?") {
        $.sweetModal({
            title: title,
            theme: $.sweetModal.THEME_DARK,
            buttons: [{
                label: buttonText,
                classes: 'redB',
                action: function () {
                    actionAfterConfirm();
                }
            }, {
                label: 'Cancel',
                classes: 'button greenB bordered flat'
            }]
        });
    }
}