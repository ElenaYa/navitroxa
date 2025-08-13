<?php
$page_title = "Решения";
$page_description = "Комплексные решения для оптимизации онлайн-продаж: аудит, CRO, автоматизация, аналитика. Увеличиваем конверсию на 40-200% с гарантией результата.";
include 'partials/header.php';
?>

<section class="page-hero-section">
    <div class="page-hero-background">
        <img src="/img/solutions-hero.webp" alt="Решения для оптимизации продаж" class="page-hero-bg-image" loading="lazy">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-hero-title">
                Решения для роста <span class="gradient-text">ваших продаж</span>
            </h1>
            <p class="page-hero-subtitle">
                Комплексный подход к оптимизации онлайн-бизнеса с гарантией результата
            </p>
        </div>
    </div>
</section>

<section class="services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Наши услуги</h2>
            <p class="section-subtitle">
                Каждое решение направлено на максимальный рост ваших продаж
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card" data-animate>
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11H1l8-8 8 8h-8z"/>
                        <circle cx="12" cy="14" r="3"/>
                        <path d="M12 14v7"/>
                    </svg>
                </div>
                <h3 class="service-title">Аудит продаж</h3>
                <p class="service-description">
                    Глубокий анализ воронки продаж, выявление точек роста 
                    и барьеров для конверсии
                </p>
                <ul class="service-features">
                    <li>Анализ поведения пользователей</li>
                    <li>Исследование конкурентов</li>
                    <li>Карта клиентского пути</li>
                    <li>Приоритизация изменений</li>
                </ul>
            </div>
            
            <div class="service-card" data-animate>
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 3v18h18"/>
                        <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/>
                    </svg>
                </div>
                <h3 class="service-title">Оптимизация конверсии</h3>
                <p class="service-description">
                    Научно обоснованное улучшение каждого элемента 
                    сайта для максимальной конверсии
                </p>
                <ul class="service-features">
                    <li>A/B и многовариантное тестирование</li>
                    <li>Оптимизация форм и CTA</li>
                    <li>Улучшение UX/UI</li>
                    <li>Персонализация контента</li>
                </ul>
            </div>
            
            <div class="service-card" data-animate>
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <h3 class="service-title">Автоматизация процессов</h3>
                <p class="service-description">
                    Настройка систем, которые работают 24/7, 
                    увеличивая продажи без вашего участия
                </p>
                <ul class="service-features">
                    <li>Email и SMS воронки</li>
                    <li>Чат-боты для продаж</li>
                    <li>CRM интеграции</li>
                    <li>Автоматический ретаргетинг</li>
                </ul>
            </div>
            
            <div class="service-card" data-animate>
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 20V4"/>
                        <path d="M5 12H3a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7"/>
                        <path d="M19 12h2a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2"/>
                    </svg>
                </div>
                <h3 class="service-title">Аналитика и отчетность</h3>
                <p class="service-description">
                    Полная прозрачность результатов с детальными 
                    отчетами и рекомендациями
                </p>
                <ul class="service-features">
                    <li>Настройка аналитики</li>
                    <li>Дашборды в реальном времени</li>
                    <li>Еженедельные отчеты</li>
                    <li>Прогнозирование роста</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="process-section" id="process">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Процесс работы</h2>
            <p class="section-subtitle">
                Структурированный подход с контролем каждого этапа
            </p>
        </div>
        
        <div class="process-timeline">
            <div class="process-step-detailed" data-animate>
                <div class="step-icon">
                    <div class="step-number">1</div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Анализ и аудит</h3>
                    <p class="step-description">
                        Глубокое исследование вашего бизнеса, анализ текущих показателей 
                        и выявление точек роста
                    </p>
                    <div class="step-duration">1-2 недели</div>
                </div>
            </div>
            
            <div class="process-step-detailed" data-animate>
                <div class="step-icon">
                    <div class="step-number">2</div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Стратегия оптимизации</h3>
                    <p class="step-description">
                        Разработка персональной стратегии с приоритизацией изменений 
                        и планом внедрения
                    </p>
                    <div class="step-duration">1 неделя</div>
                </div>
            </div>
            
            <div class="process-step-detailed" data-animate>
                <div class="step-icon">
                    <div class="step-number">3</div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Тестирование гипотез</h3>
                    <p class="step-description">
                        Проведение A/B-тестов, валидация решений и измерение 
                        влияния на конверсию
                    </p>
                    <div class="step-duration">2-4 недели</div>
                </div>
            </div>
            
            <div class="process-step-detailed" data-animate>
                <div class="step-icon">
                    <div class="step-number">4</div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Внедрение и автоматизация</h3>
                    <p class="step-description">
                        Реализация успешных решений, настройка автоматических 
                        процессов и систем мониторинга
                    </p>
                    <div class="step-duration">1-3 недели</div>
                </div>
            </div>
            
            <div class="process-step-detailed" data-animate>
                <div class="step-icon">
                    <div class="step-number">5</div>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Масштабирование результата</h3>
                    <p class="step-description">
                        Постоянная оптимизация, масштабирование успешных решений 
                        и долгосрочная поддержка
                    </p>
                    <div class="step-duration">Постоянно</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="results-section" id="results">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Результаты в цифрах</h2>
        </div>
        
        <div class="results-grid">
            <div class="result-item" data-animate>
                <div class="result-number">+187%</div>
                <div class="result-label">Средний рост конверсии</div>
            </div>
            
            <div class="result-item" data-animate>
                <div class="result-number">42М₽</div>
                <div class="result-label">Дополнительной прибыли</div>
            </div>
            
            <div class="result-item" data-animate>
                <div class="result-number">30</div>
                <div class="result-label">Дней до первых результатов</div>
            </div>
            
            <div class="result-item" data-animate>
                <div class="result-number">200+</div>
                <div class="result-label">Успешных проектов</div>
            </div>
        </div>
    </div>
</section>

<section class="cases-section" id="cases">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Кейсы клиентов</h2>
            <p class="section-subtitle">
                Реальные истории успеха наших клиентов
            </p>
        </div>
        
        <div class="cases-grid">
            <div class="case-card" data-animate>
                <div class="case-image">
                    <img src="/img/case-1.webp" alt="Кейс интернет-магазина" loading="lazy">
                </div>
                <div class="case-content">
                    <div class="case-category">E-commerce</div>
                    <h3 class="case-title">Интернет-магазин электроники</h3>
                    <p class="case-description">
                        Увеличили конверсию на 240% за 3 месяца через оптимизацию 
                        карточек товаров и процесса оформления заказа
                    </p>
                    <div class="case-results">
                        <div class="case-metric">
                            <span class="metric-value">+240%</span>
                            <span class="metric-label">Конверсия</span>
                        </div>
                        <div class="case-metric">
                            <span class="metric-value">+180%</span>
                            <span class="metric-label">Прибыль</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="case-card" data-animate>
                <div class="case-image">
                    <img src="/img/case-2.webp" alt="Кейс SaaS платформы" loading="lazy">
                </div>
                <div class="case-content">
                    <div class="case-category">SaaS</div>
                    <h3 class="case-title">B2B SaaS платформа</h3>
                    <p class="case-description">
                        Оптимизировали воронку регистрации и снизили отток пользователей 
                        на 65% в первые 30 дней
                    </p>
                    <div class="case-results">
                        <div class="case-metric">
                            <span class="metric-value">-65%</span>
                            <span class="metric-label">Отток</span>
                        </div>
                        <div class="case-metric">
                            <span class="metric-value">+120%</span>
                            <span class="metric-label">LTV</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="case-card" data-animate>
                <div class="case-image">
                    <img src="/img/case-3.webp" alt="Кейс образовательной платформы" loading="lazy">
                </div>
                <div class="case-content">
                    <div class="case-category">Образование</div>
                    <h3 class="case-title">Онлайн-школа</h3>
                    <p class="case-description">
                        Автоматизировали процесс продаж курсов и увеличили 
                        количество покупок на 310%
                    </p>
                    <div class="case-results">
                        <div class="case-metric">
                            <span class="metric-value">+310%</span>
                            <span class="metric-label">Продажи</span>
                        </div>
                        <div class="case-metric">
                            <span class="metric-value">-80%</span>
                            <span class="metric-label">Время на продажи</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="case-card" data-animate>
                <div class="case-image">
                    <img src="/img/case-4.webp" alt="Кейс финтех стартапа" loading="lazy">
                </div>
                <div class="case-content">
                    <div class="case-category">Финтех</div>
                    <h3 class="case-title">Финтех стартап</h3>
                    <p class="case-description">
                        Оптимизировали процесс онбординга пользователей и повысили 
                        активацию на 195%
                    </p>
                    <div class="case-results">
                        <div class="case-metric">
                            <span class="metric-value">+195%</span>
                            <span class="metric-label">Активация</span>
                        </div>
                        <div class="case-metric">
                            <span class="metric-value">+85%</span>
                            <span class="metric-label">Удержание</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Отзывы клиентов</h2>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card" data-animate>
                <div class="testimonial-content">
                    <p>
                        "Navitroxa увеличила наши продажи на 280% за первые 2 месяца работы. 
                        Их научный подход и внимание к деталям впечатляют."
                    </p>
                </div>
                <div class="testimonial-author">
                    <div class="author-name">Анна Смирнова</div>
                    <div class="author-position">Основатель интернет-магазина "Технодом"</div>
                </div>
            </div>
            
            <div class="testimonial-card" data-animate>
                <div class="testimonial-content">
                    <p>
                        "Команда не просто выполнила техническую работу — они стали нашими 
                        партнерами в росте. ROI от сотрудничества составил 450%."
                    </p>
                </div>
                <div class="testimonial-author">
                    <div class="author-name">Михаил Волков</div>
                    <div class="author-position">CEO SaaS-платформы "CloudFlow"</div>
                </div>
            </div>
            
            <div class="testimonial-card" data-animate>
                <div class="testimonial-content">
                    <p>
                        "Автоматизация продаж, которую настроил Navitroxa, работает как часы. 
                        Теперь продажи растут даже ночью, пока мы спим."
                    </p>
                </div>
                <div class="testimonial-author">
                    <div class="author-name">Елена Кузнецова</div>
                    <div class="author-position">Директор онлайн-школы "EduPro"</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Пакеты услуг</h2>
            <p class="section-subtitle">
                Выберите оптимальный вариант для вашего бизнеса
            </p>
        </div>
        
        <div class="pricing-grid">
            <div class="pricing-card" data-animate>
                <div class="pricing-header">
                    <h3 class="pricing-title">Аудит</h3>
                    <div class="pricing-price">
                        <span class="price-amount">2,500</span>
                        <span class="price-currency">лв</span>
                    </div>
                    <p class="pricing-description">
                        Глубокий анализ вашего сайта и рекомендации по улучшению
                    </p>
                </div>
                <div class="pricing-features">
                    <ul>
                        <li>Анализ воронки продаж</li>
                        <li>Исследование пользователей</li>
                        <li>Технический аудит</li>
                        <li>План оптимизации</li>
                        <li>Презентация результатов</li>
                    </ul>
                </div>
                <div class="pricing-cta">
                    <a href="/contacts.php" class="btn btn-outline">Заказать аудит</a>
                </div>
            </div>
            
            <div class="pricing-card pricing-featured" data-animate>
                <div class="pricing-badge">Популярный</div>
                <div class="pricing-header">
                    <h3 class="pricing-title">Оптимизация</h3>
                    <div class="pricing-price">
                        <span class="price-amount">8,500</span>
                        <span class="price-currency">лв/мес</span>
                    </div>
                    <p class="pricing-description">
                        Комплексная оптимизация с гарантией результата
                    </p>
                </div>
                <div class="pricing-features">
                    <ul>
                        <li>Все из пакета "Аудит"</li>
                        <li>A/B тестирование</li>
                        <li>Оптимизация конверсии</li>
                        <li>Еженедельные отчеты</li>
                        <li>Прямая связь с экспертом</li>
                        <li>Гарантия +40% конверсии</li>
                    </ul>
                </div>
                <div class="pricing-cta">
                    <a href="/contacts.php" class="btn btn-primary">Начать оптимизацию</a>
                </div>
            </div>
            
            <div class="pricing-card" data-animate>
                <div class="pricing-header">
                    <h3 class="pricing-title">Автоматизация</h3>
                    <div class="pricing-price">
                        <span class="price-amount">15,000</span>
                        <span class="price-currency">лв/мес</span>
                    </div>
                    <p class="pricing-description">
                        Полная автоматизация процессов продаж
                    </p>
                </div>
                <div class="pricing-features">
                    <ul>
                        <li>Все из пакета "Оптимизация"</li>
                        <li>Настройка CRM</li>
                        <li>Email/SMS воронки</li>
                        <li>Чат-боты для продаж</li>
                        <li>Интеграция с системами</li>
                        <li>Обучение команды</li>
                    </ul>
                </div>
                <div class="pricing-cta">
                    <a href="/contacts.php" class="btn btn-outline">Обсудить проект</a>
                </div>
            </div>
        </div>
        
        <div class="pricing-note">
            <p>
                <strong>Гарантия результата:</strong> Если мы не увеличим вашу конверсию минимум на 40% 
                в течение первых 90 дней — вернем 100% стоимости услуг.
            </p>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>