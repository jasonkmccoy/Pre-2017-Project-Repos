// Toggle Placeholder on focus & Blur       

jQuery('.customer-chat-content-message-input-field').on('focus', function() {
    var currentPlaceholder;
    currentPlaceholder = jQuery(this).attr('placeholder');

    jQuery(this).removeAttr('placeholder');

}).on('blur', function() {
    var currentPlaceholder;
    currentPlaceholder = jQuery(this).attr('placeholder');
    jQuery(this).attr('placeholder', currentPlaceholder);

});

// Reposition users caret in correct position when textarea is clicked

jQuery('#message-textarea').on('focus', function(event) {

    var str = jQuery(this).val();
    var strLen = str.length;
    var emptyTextarea = (strLen > 0) ? true : false;

    if (emptyTextarea) {

        jQuery(this).removeClass('textarea-ph-padding')
            .addClass('textarea-ph-focus');

    }

}).on('blur', function(event) {

    var str = jQuery(this).val();
    var strLen = str.length;
    var emptyTextarea = (strLen > 0) ? true : false;

    if (emptyTextarea) {

        jQuery(this).removeClass('textarea-ph-focus')
            .addClass('textarea-ph-padding');

    }

});

// Submit Message

jQuery('#customer-chat-contact-send').on('click', function() {

    /* Send AJAX Request
       
       
       
        url: 'ajax_routers/chat.php',
        type: 'POST',     
        data: {
                action: 'start_chat',
                name: jQuery('.customer-chat-content-message-input-field[name='name']').val();
                email: jQuery('.customer-chat-content-message-input-field[name='email']').val();
                message: jQuery('.customer-chat-content-message-input-field[name='message']').val();
        },

        beforeSend : Hide content-info
                     Show Loading Gif on Top
                     
        success    : Hide Loading Gif
                     TransformBox()
                        Append Sent Message to Chatbox

        error      : Hide Loading Gif
                     Append ticket has been submitted
                     
                     
    */



});

function transformChatWindow(revert) {

    var aniDur = 500;

    if (revert) {

        jQuery('#chat-window').animate({
            top: '+=277',
            height: '-=228'
        }, {

            duration: aniDur,
            queue: false,

        });


    } else {

        jQuery('#chat-window').animate({
            top: '-=277',
            height: '+=228'
        }, {

            duration: aniDur,
            queue: false,

        });


    }


}

// Expand / Collapse Window

jQuery('#chat-tab-image').on('click', function() {

    jQuery('#success-info-message, #error-info-message, #notification_placeholder').addClass('hide-on-load');
    jQuery('#loading-gif').removeClass('hide-on-load');

    var tabCurPos = jQuery('#customer-chat-widget').position();
    var tabWidth = jQuery('#chat-side-tab').width();
    var bodyWidth = jQuery('body').width();
    var combinedWidth = tabCurPos.left + tabWidth + 5;
    var widthToScroll;
    var px;
    var boxOpening;
    var widthString;

    if (combinedWidth > bodyWidth) {

        widthToScroll = 1;

        px = 'px';
        widthString = widthToScroll + px;

        jQuery('#customer-chat-widget').animate({
            marginRight: widthString
        }, 800);

        boxOpening = true;


    } else {

        var right = '-';
        widthToScroll = jQuery('#customer-chat-content-contact-form').width() + 3;

        px = 'px';
        widthString = right + widthToScroll + px;

        jQuery('#customer-chat-widget').animate({
            marginRight: widthString
        }, 800);

        boxOpening = false;

    }

    if (boxOpening) {

        jQuery.ajax({

            // the URL for the request
            url: 'ajax_routers/chat.php',

            // whether this is a POST or GET request
            type: 'POST',

            // the data to send to the server-side
            data: {
                action: 'is_agent_online'
            },



            // If 'Success'
            success: function(data) {

                jQuery('#loading-gif').addClass('hide-on-load');

                var response = JSON.parse(data);



                if (response.isAgentOnline) {

                    jQuery('#notification_placeholder').removeClass('admin-offline-img').addClass('admin-online-img');
                    jQuery('#success-info-message, #notification_placeholder').removeClass('hide-on-load');


                } else {

                    jQuery('#notification_placeholder').removeClass('admin-online-img').addClass('admin-offline-img');
                    jQuery('#error-info-message, #notification_placeholder').removeClass('hide-on-load');
                }

            }, // End Success Function


        }); // End JQuery.ajax()

    } // End If Box Opening

});




function transformToChatBox() {

    var textareaContainer = jQuery('.customer-chat-content-message-textarea');
    var textarea = document.getElementById('message-textarea');
    var textareapos = textareaContainer.position().top;
    var textareaheight = textarea.clientHeight;
    var button = jQuery('#customer-chat-contact-send').position();
    var buttonTop = button.top;
    var total = textareapos + textareaheight;
    var str = '+=';
    var growth = buttonTop - total - 1;
    var animateStr = str + growth;




    // Animate Content off chat box
    jQuery('.chat_slider_el').animate({

        left: '+=330'

    }, {

        duration: 750,
        queue: false

    });


    // Animate Message Box Down

    jQuery('#message-textarea').animate({
        top: animateStr,
    }, {

        duration: 750,
        queue: false,
        always: function() {
            var shrinkDistance;
            shrinkDistance = growth;



            jQuery('#chat-window').removeClass('collapsed-window');

            transformChatWindow(0);


        }

    });



}

function revertToChatForm() {

    var textareaContainer = jQuery('.customer-chat-content-message-textarea');
    var textarea = document.getElementById('message-textarea');
    var textareapos = textareaContainer.position().top;
    var textareaheight = textarea.clientHeight;
    var button = jQuery('#customer-chat-contact-send').position();
    var buttonTop = button.top;
    var total = textareapos + textareaheight;
    var str = '-=';
    var growth = buttonTop - total - 1;
    var shrinkDistance;
    shrinkDistance = growth;
    var animateStr = str + shrinkDistance;



    jQuery('#chat-window').animate({
        top: '+=277',
        height: '-=228'
    }, {

        start: function() {

            setTimeout(function() { //calls click event after a certain time
                jQuery('#chat-window').addClass('collapsed-window');
            }, 600);

        },
        duration: 750,
        queue: false,
        always: function() {

            // Animate Content off chat box
            jQuery('.chat_slider_el').animate({

                left: '-=330'

            }, {

                duration: 750,
                queue: false,


            });

        }

    });

    // Animate Message Box Down

    jQuery('#message-textarea').animate({
        top: animateStr,
    }, {

        duration: 750,
        queue: false,


    });


}
