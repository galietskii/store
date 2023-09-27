$(function () {
    $(".menu").on("click", "li", function () {
        let is_active = false;

        if ($(this).hasClass('active')) { is_active = true; }

        $(".menu-item").removeClass('active');

        if (!is_active) { $(this).addClass('active'); }


    });
    /* Hamburger menu*/

    $('.hamburger').on('click', function () {
        $(this).toggleClass('is-active');
        $('.mobile-nav').toggleClass('is-active');
    })

    //    Categories and subcategories

    const categoryButtons = document.querySelectorAll(".category-button");
    const subcategoriesContainer = document.querySelector(".categories__sub");
    const cachedSubcategories = {};

    categoryButtons.forEach(button => {
        button.addEventListener("click", function () {
            const selectedCategory = this.getAttribute("data-category");
            const currentActiveButton = document.querySelector(".category-button.active");
            if (currentActiveButton) {
                currentActiveButton.classList.remove("active");
            }
            this.classList.add("active");
            updateSubcategories(selectedCategory);
        });
    });

    function updateSubcategories(category) {
        subcategoriesContainer.innerHTML = 'Загрузка...';
        if (cachedSubcategories[category]) {
            // Если подкатегории уже есть в кэше, используем их
            subcategoriesContainer.innerHTML = cachedSubcategories[category];
        } else {
            const data = new FormData();
            data.append('action', 'load_subcategories');
            data.append('category', category);

            fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: data
            })
                .then(response => response.text())
                .then(data => {
                    cachedSubcategories[category] = data;
                    subcategoriesContainer.innerHTML = data;
                })
                .catch(error => {
                    console.error('Ошибка при загрузке подкатегорий:', error);
                });
        }
    }
    const defaultActiveCategory = document.querySelector(".category-button.active");
    if (defaultActiveCategory) {
        const selectedCategory = defaultActiveCategory.getAttribute("data-category");
        updateSubcategories(selectedCategory);
    }
});

