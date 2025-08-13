<?php
$page_title = "Контакты";
$page_description = "Свяжитесь с экспертами Navitroxa для бесплатной консультации по оптимизации продаж. Офис в Софии, онлайн-встречи по всему миру.";
include 'partials/header.php';
?>

<section class="page-hero-section">
    <div class="page-hero-background">
        <img src="/img/contacts-hero.webp" alt="Контакты Navitroxa" class="page-hero-bg-image" loading="lazy">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-hero-title">
                Готовы <span class="gradient-text">увеличить продажи?</span>
            </h1>
            <p class="page-hero-subtitle">
                Получите бесплатную консультацию и персональную стратегию роста
            </p>
        </div>
    </div>
</section>

<section class="contact-info-section" id="contact-info">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-details">
                <h2 class="section-title">Свяжитесь с нами</h2>
                <p class="contact-description">
                    Мы всегда готовы обсудить ваш проект и найти оптимальное решение 
                    для роста вашего бизнеса.
                </p>
                
                <div class="contact-items">
                    <div class="contact-item" data-animate>
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <h4>Адрес офиса</h4>
                            <p>бул. „Васил Левски" 150<br>1504 София, Болгария</p>
                        </div>
                    </div>
                    
                    <div class="contact-item" data-animate>
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <h4>Телефон</h4>
                            <p><a href="tel:+359249283330">+359 2 492 8330</a></p>
                            <small>Пн-Пт: 9:00-18:00 (UTC+2)</small>
                        </div>
                    </div>
                    
                    <div class="contact-item" data-animate>
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <div class="contact-content">
                            <h4>Email</h4>
                            <p><a href="mailto:info@navitroxa.com">info@navitroxa.com</a></p>
                            <small>Ответим в течение 24 часов</small>
                        </div>
                    </div>
                </div>
                
                <div class="working-hours" data-animate>
                    <h4>Часы работы</h4>
                    <div class="hours-grid">
                        <div class="hours-item">
                            <span>Понедельник - Пятница</span>
                            <span>9:00 - 18:00</span>
                        </div>
                        <div class="hours-item">
                            <span>Суббота</span>
                            <span>10:00 - 14:00</span>
                        </div>
                        <div class="hours-item">
                            <span>Воскресенье</span>
                            <span>Выходной</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container">
                <div class="contact-form-wrapper">
                    <h3 class="form-title">Получить консультацию</h3>
                    <p class="form-description">
                        Расскажите о своем проекте, и мы предложим оптимальное решение
                    </p>
                    
                    <form class="contact-form" id="contact-form">
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
                            <label for="website">Сайт</label>
                            <input type="url" id="website" name="website" placeholder="https://">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Сообщение *</label>
                            <textarea id="message" name="message" rows="5" placeholder="Расскажите о вашем проекте, целях и задачах..." required></textarea>
                        </div>
                        
                        <div class="form-checkbox">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">
                                Я соглашаюсь с <a href="/privacy.php" target="_blank">политикой конфиденциальности</a> 
                                и <a href="/terms.php" target="_blank">условиями использования</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-large">
                            Отправить заявку
                            <span class="btn-arrow">→</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-section" id="map">
    <div class="container">
        <h2 class="section-title">Как нас найти</h2>
    </div>
    
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.5234567890123!2d23.3419!3d42.7006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2sVasil%20Levski%20Blvd%20150%2C%201504%20Sofia%2C%20Bulgaria!5e0!3m2!1sen!2sbg!4v1234567890123"
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Офис Navitroxa в Софии">
        </iframe>
    </div>
</section>

<section class="consultation-benefits-section" id="consultation-benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Что вы получите на консультации</h2>
        </div>
        
        <div class="benefits-consultation-grid">
            <div class="benefit-consultation-item" data-animate>
                <div class="benefit-consultation-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12,6 12,12 16,14"/>
                    </svg>
                </div>
                <h4>30 минут экспертного времени</h4>
                <p>Персональная консультация с экспертом по оптимизации продаж</p>
            </div>
            
            <div class="benefit-consultation-item" data-animate>
                <div class="benefit-consultation-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11H1l8-8 8 8h-8z"/>
                        <circle cx="12" cy="14" r="3"/>
                        <path d="M12 14v7"/>
                    </svg>
                </div>
                <h4>Экспресс-аудит сайта</h4>
                <p>Быстрый анализ основных проблем и точек роста</p>
            </div>
            
            <div class="benefit-consultation-item" data-animate>
                <div class="benefit-consultation-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 3v18h18"/>
                        <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/>
                    </svg>
                </div>
                <h4>План роста конверсии</h4>
                <p>Персональные рекомендации для увеличения продаж</p>
            </div>
            
            <div class="benefit-consultation-item" data-animate>
                <div class="benefit-consultation-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7v10c0 5.55 3.84 9.95 9 11 5.16-1.05 9-5.45 9-11V7l-10-5z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h4>Оценка потенциала</h4>
                <p>Прогноз возможного роста продаж в вашей нише</p>
            </div>
        </div>
        
        <div class="consultation-cta">
            <p class="consultation-guarantee">
                <strong>100% бесплатно.</strong> Никаких скрытых платежей или обязательств.
            </p>
        </div>
    </div>
</section>

<section class="faq-section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Часто задаваемые вопросы</h2>
        </div>
        
        <div class="faq-grid">
            <div class="faq-item" data-animate>
                <div class="faq-question">
                    <h4>Сколько времени займет увеличение продаж?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Первые результаты вы увидите уже через 30 дней. Значительное увеличение конверсии (40-100%) обычно достигается в течение 90 дней работы.</p>
                </div>
            </div>
            
            <div class="faq-item" data-animate>
                <div class="faq-question">
                    <h4>Какие гарантии вы предоставляете?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Мы гарантируем увеличение конверсии минимум на 40% в течение первых 90 дней. Если этого не произойдет — возвращаем 100% стоимости услуг.</p>
                </div>
            </div>
            
            <div class="faq-item" data-animate>
                <div class="faq-question">
                    <h4>Подходят ли ваши услуги для небольшого бизнеса?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Да, мы работаем с компаниями любого размера — от стартапов до крупных корпораций. У нас есть решения для любого бюджета.</p>
                </div>
            </div>
            
            <div class="faq-item" data-animate>
                <div class="faq-question">
                    <h4>Нужно ли мне техническое образование для работы с вами?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Нет, мы берем на себя всю техническую работу. От вас требуется только предоставить доступы и обратную связь по результатам.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>