<?php
$page_title = "Главная";
$page_description = "Navitroxa - эксперты по оптимизации продаж онлайн-бизнеса. Увеличиваем конверсию на 40-200%, автоматизируем процессы продаж, растим прибыль.";
include 'partials/header.php';
?>

<section class="hero-section" id="hero">
    <div class="hero-background">
        <img src="/img/hero-bg.webp" alt="Оптимизация онлайн-продаж" class="hero-bg-image" loading="lazy">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Увеличиваем продажи<br>
                    <span class="gradient-text">вашего онлайн-бизнеса</span><br>
                    на 40-200%
                </h1>
                <p class="hero-subtitle">
                    Превращаем посетителей в клиентов с помощью науки о конверсии, 
                    автоматизации процессов и глубокой аналитики
                </p>
                <div class="hero-cta">
                    <a href="/contacts.php" class="btn btn-primary btn-large">
                        Получить консультацию
                        <span class="btn-arrow">→</span>
                    </a>
                    <a href="#why-us" class="btn btn-secondary btn-large">
                        Узнать больше
                    </a>
                </div>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Успешных проектов</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">150%</div>
                    <div class="stat-label">Средний рост продаж</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Лет опыта</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us-section" id="why-us">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Почему выбирают нас</h2>
            <p class="section-subtitle">
                Мы не просто консультируем — мы получаем результат
            </p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card" data-animate>
                <div class="benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7v10c0 5.55 3.84 9.95 9 11 5.16-1.05 9-5.45 9-11V7l-10-5z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="benefit-title">Гарантированный результат</h3>
                <p class="benefit-description">
                    Работаем на результат с гарантией увеличения конверсии 
                    минимум на 40% или возвращаем деньги
                </p>
            </div>
            
            <div class="benefit-card" data-animate>
                <div class="benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                    </svg>
                </div>
                <h3 class="benefit-title">Научный подход</h3>
                <p class="benefit-description">
                    Каждое решение основано на данных, A/B-тестировании 
                    и проверенных методологиях оптимизации
                </p>
            </div>
            
            <div class="benefit-card" data-animate>
                <div class="benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <h3 class="benefit-title">Полная автоматизация</h3>
                <p class="benefit-description">
                    Настраиваем системы, которые работают 24/7, 
                    увеличивая продажи без вашего участия
                </p>
            </div>
        </div>
    </div>
</section>

<section class="stats-section" id="stats">
    <div class="stats-background"></div>
    <div class="container">
        <div class="stats-grid">
            <div class="stat-big" data-animate>
                <div class="stat-number-big">42М₽</div>
                <div class="stat-label-big">Дополнительной прибыли принесли клиентам</div>
            </div>
            <div class="stat-big" data-animate>
                <div class="stat-number-big">98%</div>
                <div class="stat-label-big">Клиентов продлевают сотрудничество</div>
            </div>
            <div class="stat-big" data-animate>
                <div class="stat-number-big">30</div>
                <div class="stat-label-big">Дней до первых результатов</div>
            </div>
        </div>
    </div>
</section>

<section class="process-preview-section" id="process-preview">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Как мы работаем</h2>
            <p class="section-subtitle">
                Простой и понятный процесс с гарантированным результатом
            </p>
        </div>
        
        <div class="process-grid">
            <div class="process-step" data-animate>
                <div class="step-number">01</div>
                <h3 class="step-title">Аудит</h3>
                <p class="step-description">
                    Глубокий анализ вашего сайта, воронки продаж и точек роста
                </p>
            </div>
            
            <div class="process-step" data-animate>
                <div class="step-number">02</div>
                <h3 class="step-title">Стратегия</h3>
                <p class="step-description">
                    Разработка персональной стратегии оптимизации под ваш бизнес
                </p>
            </div>
            
            <div class="process-step" data-animate>
                <div class="step-number">03</div>
                <h3 class="step-title">Внедрение</h3>
                <p class="step-description">
                    Пошаговая реализация изменений с контролем каждого этапа
                </p>
            </div>
            
            <div class="process-step" data-animate>
                <div class="step-number">04</div>
                <h3 class="step-title">Результат</h3>
                <p class="step-description">
                    Увеличение конверсии и автоматизация процессов продаж
                </p>
            </div>
        </div>
    </div>
</section>

<section class="clients-marquee-section" id="clients">
    <div class="container">
        <h2 class="section-title">Нам доверяют</h2>
    </div>
    
    <div class="marquee-container">
        <div class="marquee-content">
            <div class="client-type">E-commerce</div>
            <div class="client-type">SaaS</div>
            <div class="client-type">Финтех</div>
            <div class="client-type">Образование</div>
            <div class="client-type">Медицина</div>
            <div class="client-type">B2B сервисы</div>
            <div class="client-type">Ритейл</div>
            <div class="client-type">Недвижимость</div>
            <div class="client-type">E-commerce</div>
            <div class="client-type">SaaS</div>
            <div class="client-type">Финтех</div>
            <div class="client-type">Образование</div>
        </div>
    </div>
</section>

<section class="cta-section" id="cta">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <h2 class="cta-title">
                    Готовы увеличить продажи <span class="gradient-text">уже в этом месяце?</span>
                </h2>
                <p class="cta-subtitle">
                    Получите бесплатный аудит вашего сайта и персональную стратегию роста
                </p>
            </div>
            <div class="cta-action">
                <a href="/contacts.php" class="btn btn-primary btn-large">
                    Получить бесплатный аудит
                    <span class="btn-arrow">→</span>
                </a>
                <p class="cta-note">
                    Первые результаты уже через 30 дней
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>