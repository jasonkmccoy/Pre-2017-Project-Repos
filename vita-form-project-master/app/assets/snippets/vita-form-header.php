<!-- START : Header -->
<div class="customer-chat-header">
    <div class="customer-chat-header-title">
        Contact Us
    </div>
    <div class="customer-chat-header-indicator">
        Contact Us
    </div>
    <div class="customer-chat-header-title" id="customer-chat-button">
    </div>
</div>
<!-- END   : Header -->

<!-- START : Content -->
<div class="customer-chat-content" id="customer-chat-content-contact-form">
    <div class="customer-chat-content-info chat_slider_el" style="left: 0px;">

        <!-- Error Notification Content -->
        <span id="error-info-message" class="chat-content hide-on-load">
                    <span class="display-chat-response info-offline">
                      Chat System is offline
                    </span>
        <span class="user-todo-error">
                      Please submit a support ticket.
                    </span>
        </span>

        <!-- Success Notification Content -->
        <span id="success-info-message" class="chat-content hide-on-load">
                    <span class="display-chat-response info-online">
                      Welcome to Live Chat!
                    </span>
        <span class="user-todo-success">
                      To start a live chat, provide us the following:
                    </span>
        </span>

        <!-- Notification Image -->
        <div class="admin-offline-img hide-on-load" id="notification_placeholder"></div>

    </div>

    <!-- Loading Gif -->
    <img src="assets/img/default-loader.gif" class="hide-on-load" id="loading-gif">

    <!-- Input / Textarea Fields -->
    <div class="customer-chat-content-message-input chat_slider_el" style="left: 0px;">
        <input type="text" class="customer-chat-content-message-input-field" placeholder="Name" name="name">
    </div>

    <div class="customer-chat-content-message-input chat_slider_el" style="left: 0px;">
        <input type="text" placeholder="Email" class="customer-chat-content-message-input-field" name="email">
    </div>

    <div class="customer-chat-content-message-textarea">
        <textarea style="top: 0px;" id="message-textarea" name="message" class="customer-chat-content-message-input-field textarea-ph-padding" placeholder="Message"></textarea>
        <div id="chat-window" style="top: 0px; height: 0px;" class="collapsed-window">
            <div id="window-header">
                <span id="status-message">Status: In Queue</span>
            </div>
            <div id="window-display"></div>
        </div>
    </div>

    <!-- Send Button -->
    <div class="customer-chat-content-row">
        <a src="#" class="customer-chat-content-button" id="customer-chat-contact-send">
                    Send
                  </a>
    </div>
</div>
<!-- END   : Content -->

<!-- START : Side Tab -->
<div id="chat-side-tab">
    <img src="chat/img/chat-tab.svg" id="chat-tab-image">
</div>
<!-- END   : Side Tab -->

</div>
<!------------------------------------------- END : Chat Widget --------------------------------------------------->


<!-- Page Container -->
<div id="page-container">
    <!-- Header -->
    <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
    <!-- STATIC -->
    <header class="navbar navbar-inverse">
        <!-- Navbar Inner -->
        <div class="navbar-inner remove-radius remove-box-shadow">
            <!-- div#container-fluid -->
            <div class="container-fluid">
                <!-- Mobile Navigation, Shows up  on smaller screens -->
                <ul class="nav pull-right visible-phone visible-tablet">
                    <li class="divider-vertical remove-margin"></li>
                    <li>
                        <!-- It is set to open and close the main navigation on smaller screens. The class .nav-collapse was added to aside#page-sidebar -->
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                            <i class="icon-reorder"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Mobile Navigation -->

                <!-- Logo -->
                <a href="index.php" class="brand"><img src="assets/img/template/logo.png" alt="logo">
                </a>

                <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
                <div id="loading" class="hide pull-left"><i class="icon-certificate icon-spin"></i>
                </div>

                <!-- Header Widgets -->
                <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
                <ul id="widgets" class="nav pull-right">

                    <!-- User Menu -->

                    <li class="dropdown dropdown-user">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/template/avatar.png" alt="avatar"> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Just a button demostrating how loading of widgets could happen, check main.js- - uiDemo() -->
                            <li>
                                <a href="#" class="loading-on" onClick="location.reload();"><i class="icon-refresh"></i> Refresh</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="logout.php" class="exit"><i class="icon-lock"></i> Log out</a>
                            </li>
                        </ul>
                    </li>

                    <!-- END User Menu -->

                </ul>
                <!-- END Header Widgets -->
            </div>
            <!-- END div#container-fluid -->
        </div>
        <!-- END Navbar Inner -->
    </header>
    <!-- STATIC HEADER END -->
    <!-- END Header -->
