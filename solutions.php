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
            <div class="service-card" id="audit" data-animate>
                <div class="service-image">
                    <img src="/img/service-audit.webp" alt="Аудит продаж — анализ воронки и точки роста" loading="lazy">
                </div>
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11H1l8-8 8 8h-8z"/>
                        <circle cx="12" cy="14" r="3"/>
                        <path d="M12 14v7"/>
                    </svg>
                </div>
                <h3 class="service-title">Аудит продаж</h3>
                <p class="service-description">
                    Глубокий анализ воронки продаж с картированием ключевых шагов, 
                    выявлением точек роста и барьеров для конверсии. Подготовим 
                    приоритизированный план улучшений по методу ICE и оценим 
                    потенциал роста в вашей нише.
                </p>
                <ul class="service-features">
                    <li>Анализ поведения пользователей</li>
                    <li>Исследование конкурентов</li>
                    <li>Карта клиентского пути</li>
                    <li>Приоритизация изменений и roadmap</li>
                </ul>
                <div class="service-badges">
                    <span class="service-badge">UX research</span>
                    <span class="service-badge">ICE scoring</span>
                    <span class="service-badge">Benchmarks</span>
                </div>
                <div class="service-metrics">
                    <div class="metric">
                        <div class="metric-value">7–14 дн</div>
                        <div class="metric-label">срок аудита</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">10–15</div>
                        <div class="metric-label">ключевых инсайтов</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">2–3</div>
                        <div class="metric-label">быстрых побед</div>
                    </div>
                </div>
                <p class="service-note">Получите отчёт с конкретными изменениями, оценкой влияния на конверсию и планом внедрения по спринтам.</p>
                <div class="service-cta">
                    <a href="/contacts.php" class="btn btn-outline">Обсудить аудит</a>
                </div>
            </div>
            
            <div class="service-card" id="cro" data-animate>
                <div class="service-image">
                    <img src="/img/service-cro.webp" alt="Оптимизация конверсии — UX/UI, формы и CTA" loading="lazy">
                </div>
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 3v18h18"/>
                        <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/>
                    </svg>
                </div>
                <h3 class="service-title">Оптимизация конверсии</h3>
                <p class="service-description">
                    Системная CRO: оптимизация UX/UI, форм и CTA на основе данных 
                    и поведенческой аналитики. Запускаем цикл A/B и мультивариантных 
                    тестов, сокращаем трение и повышаем скорость принятия решения.
                </p>
                <ul class="service-features">
                    <li>A/B и многовариантное тестирование</li>
                    <li>Оптимизация форм и CTA</li>
                    <li>Улучшение UX/UI</li>
                    <li>Персонализация контента и сегментация</li>
                </ul>
                <div class="service-badges">
                    <span class="service-badge">AB tests</span>
                    <span class="service-badge">UX writing</span>
                    <span class="service-badge">Heuristics</span>
                </div>
                <div class="service-metrics">
                    <div class="metric">
                        <div class="metric-value">10–30</div>
                        <div class="metric-label">тестов/квартал</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">40%+</div>
                        <div class="metric-label">рост конверсии</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">14–21 дн</div>
                        <div class="metric-label">TTF (первые победы)</div>
                    </div>
                </div>
                <p class="service-note">Собираем гипотезы, проводим исследования, проектируем варианты и валидируем решения данными.</p>
                <div class="service-cta">
                    <a href="/contacts.php" class="btn btn-outline">Запустить оптимизацию</a>
                </div>
            </div>
            
            <div class="service-card" id="automation" data-animate>
                <div class="service-image">
                    <img src="/img/service-automation.webp" alt="Автоматизация процессов — CRM, воронки, чат-боты" loading="lazy">
                </div>
                <div class="service-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <h3 class="service-title">Автоматизация процессов</h3>
                <p class="service-description">
                    Встраиваем CRM, чат-боты и триггерные воронки Email/SMS, которые 
                    работают 24/7. Снижаем стоимость лида, ускоряем обработку заявок 
                    и возвращаем пользователей через ретаргетинг и ремаркетинг.
                </p>
                <ul class="service-features">
                    <li>Email и SMS воронки</li>
                    <li>Чат-боты для продаж</li>
                    <li>CRM интеграции</li>
                    <li>Автоматический ретаргетинг</li>
                </ul>
                <div class="service-badges">
                    <span class="service-badge">CRM</span>
                    <span class="service-badge">Chatbots</span>
                    <span class="service-badge">Trigger flows</span>
                </div>
                <div class="service-metrics">
                    <div class="metric">
                        <div class="metric-value">–30%</div>
                        <div class="metric-label">CAC</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">×2</div>
                        <div class="metric-label">скорость ответа</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">99.9%</div>
                        <div class="metric-label">аптайм</div>
                    </div>
                </div>
                <p class="service-note">Строим автоворонки, синхронизируем каналы, обеспечиваем масштабируемость и отказоустойчивость.</p>
                <div class="service-cta">
                    <a href="/contacts.php" class="btn btn-outline">Автоматизировать продажи</a>
                </div>
            </div>
            
            <div class="service-card" id="analytics" data-animate>
                <div class="service-image">
                    <img src="/img/service-analytics.webp" alt="Аналитика и отчетность — дашборды и прогнозы" loading="lazy">
                </div>
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
                    Настраиваем устойчивую аналитику: сбор событий, 
                    дашборды в реальном времени и отчеты по unit-экономике. 
                    Даем прозрачность и прогнозы, необходимые для управленческих решений.
                </p>
                <ul class="service-features">
                    <li>Настройка аналитики</li>
                    <li>Дашборды в реальном времени</li>
                    <li>Еженедельные отчеты</li>
                    <li>Прогнозирование роста</li>
                </ul>
                <div class="service-badges">
                    <span class="service-badge">Realtime</span>
                    <span class="service-badge">Attribution</span>
                    <span class="service-badge">Forecast</span>
                </div>
                <div class="service-metrics">
                    <div class="metric">
                        <div class="metric-value">100%</div>
                        <div class="metric-label">наблюдаемость</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">24/7</div>
                        <div class="metric-label">мониторинг</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">ROI</div>
                        <div class="metric-label">сквозная аналитика</div>
                    </div>
                </div>
                <p class="service-note">Корректные данные без потерь, удобные дашборды, единые метрики и коннекторы под ваши системы.</p>
                <div class="service-cta">
                    <a href="/contacts.php" class="btn btn-outline">Настроить аналитику</a>
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
        
        <div class="cases-compare" data-animate>
            <div class="cases-row cases-row--header">
                <div class="case-cell">
                    <div class="case-header">
                        <div class="case-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1 7H7L6 6z"/><path d="M7 6l-1-3H3"/><circle cx="9" cy="20" r="1"/><circle cx="18" cy="20" r="1"/></svg>
                        </div>
                        <div class="case-category">E-commerce</div>
                        <h3 class="case-title">Интернет-магазин электроники</h3>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-header">
                        <div class="case-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 15a4 4 0 0 0 4 4h10a4 4 0 0 0 4-4"/><path d="M7 15V9a5 5 0 0 1 10 0v6"/></svg>
                        </div>
                        <div class="case-category">SaaS</div>
                        <h3 class="case-title">B2B SaaS платформа</h3>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-header">
                        <div class="case-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5V5a2 2 0 0 1 2-2h9l5 5v11.5"/><path d="M9 13h6"/><path d="M9 17h6"/></svg>
                        </div>
                        <div class="case-category">Образование</div>
                        <h3 class="case-title">Онлайн‑школа</h3>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-header">
                        <div class="case-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/><path d="M6 15h2"/><path d="M10 15h4"/></svg>
                        </div>
                        <div class="case-category">Финтех</div>
                        <h3 class="case-title">Финтех стартап</h3>
                    </div>
                </div>
            </div>

            <div class="cases-row">
                <div class="case-cell"><div class="case-goal">Увеличить конверсию и средний чек</div></div>
                <div class="case-cell"><div class="case-goal">Снизить отток и повысить активацию</div></div>
                <div class="case-cell"><div class="case-goal">Увеличить продажи курсов</div></div>
                <div class="case-cell"><div class="case-goal">Повысить активацию и удержание</div></div>
            </div>

            <div class="cases-row">
                <div class="case-cell">
                    <ul class="case-actions">
                        <li>Оптимизация карточек товаров</li>
                        <li>Ускорение checkout</li>
                        <li>Блоки доверия и гарантии</li>
                    </ul>
                </div>
                <div class="case-cell">
                    <ul class="case-actions">
                        <li>Онбординг и пустые состояния</li>
                        <li>Подсказки в ключевых шагах</li>
                        <li>Триггеры возврата</li>
                    </ul>
                </div>
                <div class="case-cell">
                    <ul class="case-actions">
                        <li>Автоворонки Email/SMS</li>
                        <li>Социальное доказательство</li>
                        <li>Упрощение записи</li>
                    </ul>
                </div>
                <div class="case-cell">
                    <ul class="case-actions">
                        <li>Улучшение онбординга и KYC</li>
                        <li>Подсказки и микровзаимодействия</li>
                        <li>Релевантные уведомления</li>
                    </ul>
                </div>
            </div>

            <div class="cases-row">
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">+240%</div>
                        <div class="label">Конверсия</div>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">-65%</div>
                        <div class="label">Отток</div>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">+310%</div>
                        <div class="label">Продажи</div>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">+195%</div>
                        <div class="label">Активация</div>
                    </div>
                </div>
            </div>

            <div class="cases-row">
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">+180%</div>
                        <div class="label">Прибыль</div>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">+120%</div>
                        <div class="label">LTV</div>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">-80%</div>
                        <div class="label">Время на продажи</div>
                    </div>
                </div>
                <div class="case-cell">
                    <div class="case-metric-large">
                        <div class="value">+85%</div>
                        <div class="label">Удержание</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
 <section class="cta-section" id="cta">
     <div class="container">
         <div class="cta-content">
             <div class="cta-text">
                 <h2 class="cta-title">Готовы увеличить конверсию на <span class="gradient-text">40%+</span>?</h2>
                 <p class="cta-subtitle">Получите бесплатную консультацию и персональный план роста с быстрыми победами уже в первый месяц.</p>
                 <ul class="service-features">
                     <li>Экспресс-аудит и карта точек роста</li>
                     <li>Четкий roadmap внедрения по спринтам</li>
                     <li>Прозрачные метрики и прогнозируемый результат</li>
                 </ul>
             </div>
             <div class="cta-action">
                 <a href="/contacts.php" class="btn btn-primary btn-large">Получить консультацию <span class="btn-arrow">→</span></a>
                 <p class="cta-note"><strong>100% бесплатно.</strong> Без обязательств и скрытых платежей.</p>
             </div>
         </div>
     </div>
 </section>
 
 <?php include 'partials/footer.php'; ?>