<?php
$page_title = "Контакты";
$page_description = "Свяжитесь с командой Navitroxa для обсуждения оптимизации вашего онлайн-бизнеса. Офис в Софии, Болгария.";
include 'partials/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="fade-in">Контакты</h1>
        <p class="fade-in">Свяжитесь с нами для обсуждения вашего проекта</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info fade-in">
                <h2>Как с нами связаться</h2>
                
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div>
                        <h3>Адрес</h3>
                        <p>бул. „Васил Левски" 150<br>1504 София, Болгария</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div>
                        <h3>Телефон</h3>
                        <p><a href="tel:+359249283330">+359 2 492 8330</a></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <h3>Email</h3>
                        <p><a href="mailto:info@navitroxa.com">info@navitroxa.com</a></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">🕒</div>
                    <div>
                        <h3>Часы работы</h3>
                        <p>Пн-Пт: 9:00 - 18:00<br>Сб-Вс: По договоренности</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form fade-in">
                <h2>Напишите нам</h2>
                
                <form id="contact-form" method="POST" action="/contacts.php">
                    <div class="form-group">
                        <label for="name">Имя *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Компания</label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Сообщение *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Расскажите о вашем проекте..."></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="privacy" required>
                            <span class="checkmark"></span>
                            Я согласен с <a href="/privacy.php" target="_blank">политикой конфиденциальности</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg">Отправить сообщение</button>
                </form>
                
                <?php
                if ($_POST) {
                    $name = htmlspecialchars($_POST['name'] ?? '');
                    $email = htmlspecialchars($_POST['email'] ?? '');
                    $phone = htmlspecialchars($_POST['phone'] ?? '');
                    $company = htmlspecialchars($_POST['company'] ?? '');
                    $message = htmlspecialchars($_POST['message'] ?? '');
                    
                    if ($name && $email && $message) {
                        // В реальном проекте здесь была бы отправка email
                        echo '<div class="success-message">Спасибо за сообщение! Мы свяжемся с вами в ближайшее время.</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <h2 class="section-title fade-in">Как нас найти</h2>
    </div>
    <div class="map-container fade-in">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.4089476043837!2d23.33191831568455!3d42.69307672617401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2sBul.%20%E2%80%9EVasil%20Levski%E2%80%9C%20150%2C%201504%20Sofia%2C%20Bulgaria!5e0!3m2!1sen!2sus!4v1635789012345!5m2!1sen!2sus"
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Navitroxa офис на карте">
        </iframe>
    </div>
</section>

<?php include 'partials/footer.php'; ?>