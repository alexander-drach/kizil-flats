<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <a class="logo logo--footer" href="/">
                <img width="93" height="86" src="assets-gulp/build/img/svg/logo.svg" alt="Логотип Квартиры посуточно в Кызыле">
            </a>
            <ul class="list footer__menu">
                <li class="footer__menu__item">
                    <a href="#">О нас</a>
                </li>
                <li class="footer__menu__item">
                    <a href="#">Правила проживания</a>
                </li>
                <li class="footer__menu__item">
                    <a href="#">Бронирование и оплата</a>
                </li>
            </ul>
            <ul class="list footer__contact">
                <div class="group">
                    <li class="footer__whatsapp">
                        <?php require 'includes/link-whatsapp.php' ?>
                    </li>
                    <li class="footer__phone">
                        <?php require 'includes/link-phone.php' ?>
                    </li>
                </div>

                <li class="footer__email">
                    <?php require 'includes/link-email.php' ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            &copy;<?php echo date('Y') ?>, Все права защищены
        </div>
    </div>
</footer>
</div>

<script src="assets-gulp/build/js/vendor.min.js"></script>
<script src="assets-gulp/build/js/main.min.js"></script>
</body>

</html>