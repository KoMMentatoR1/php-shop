INSERT INTO dynamic_html (name, content) VALUES ('main_page', '<div class="welcome_container">
    <h1 class="content_header">Добро пожаловать в Магазин фототехники</h1>
    <p class="description">
        Мы рады представить вам лучшие решения для фотографии и видеосъемки.
    </p>
    <p class="count">
        Уже более <span class="customer_count">10,000</span> довольных
        клиентов выбрали нас.
    </p>
    <p class="products">У нас вы найдете широкий ассортимент:</p>
    <ul class="product-list">
        <li class="product-list-item">Фотокамер</li>
        <li class="product-list-item">Объективов</li>
        <li class="product-list-item">Аксессуаров и оборудования</li>
    </ul>
</div>');

INSERT INTO dynamic_html (name, content) VALUES ('footer', '<footer class="footer">
    <div class="copyright">© А.М. Щербина, 2023</div>
    <a class="email" href="mailto:leshasherbina@gmail.com">leshasherbina@gmail.com</a>
</footer>');

INSERT INTO dynamic_html (name, content) VALUES ('aboutUs_page', '<div class="info_container">
    <h2 class="content_header">Об авторе</h2>
    <div class="about_author_container">
        <p class="about_author_item">ФИО: Щербина Алексей Михайлович</p>
        <p class="about_author_item">Опыт работы: Frontend разработчек более года</p>
        <p class="about_author_item">Телефон: 8 900 777 77 77</p>
        <p class="about_author_item">Email: leshasherbina@gmail.com</p>
    </div>
</div>
');

INSERT INTO dynamic_html (name, content) VALUES ('aboutCompany_page', '<div class="info_container">
    <h2 class="content_header">О фирме</h2>
    <div class="about_company_container">
        <p class="about_company_text">
            г. Ростов-на-Дону, площадь Гагарина, 1
        </p>
        <p class="about_company_text">Телефон: 8 (900) 999-99-99</p>
        <p class="about_company_text">На рынке более 3-х лет</p>
    </div>
</div>
');