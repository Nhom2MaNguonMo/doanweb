<?php
include "config.php";
?>
<!DOCTYPE html>

<html lang="en">
    
    <head>
    <?php
    include ROOT."/include/head.php";
    ?>
    </head>
    <?php
    include ROOT."/include/menu.php";
    ?>
    <body>
        <!-- Newsletter section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Have You Seen our Works?</h1>
                    <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                </div>
                </div>
            </div>
        <div class="section primary-section">
            <div class="container newsletter">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Góp ý</h3>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span3">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <div class="span9 contact-form centered">
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Cảm ơn</strong> đóng góp của bạn!</div>
                                <div id="errorSend" class="alert alert-error invisible">Lỗi xảy ra.</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                                            <div class="error left-align" id="err-name">Nhập tên của bạn</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                                            <div class="error left-align" id="err-email">Nhập email của bạn.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                            <div class="error left-align" id="err-comment">Viết góp ý của bạn cho chúng tôi .</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Gửi</button>
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
</div>
        <!-- Newsletter section end -->
        <!-- Contact section start -->
        <div id="contact" class="contact">
                    <?php
                    include ROOT."/include/contact.php";
                    ?>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
                    <?php
                    include ROOT."/include/footer.php";
                    ?>
        <!-- Footer section end -->
    </body>
</html>