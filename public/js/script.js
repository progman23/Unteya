document.addEventListener('DOMContentLoaded', () => {

    /*---------Реализация Показа/Скрытия форм Регистрации/Входа---------*/
    function showForm(form) {
        return function () { form.style.display = 'flex' }
    }
    
    function hideForm(form) {
        return function () { form.style.display = '' }
    }

    // При нажатии на иконку человечка открывает форму выбора для Входа/Регистрации
    let loginButton = document.querySelector('.header_login');
    let choiceForm = document.querySelector('.choiceForm__wrapper');
    loginButton.addEventListener('click', showForm(choiceForm));

    // Закрывает форму выбора для Входа/Регистрации
    let choiceFormClose = document.querySelector('.choiceForm_close');
    choiceFormClose.addEventListener('click', hideForm(choiceForm));

    
    // Открывает форму входа
    let choiceFormlogin = document.querySelector('.choiceForm_enter');
    let loginForm = document.querySelector('.loginForm__wrapper');
    choiceFormlogin.addEventListener('click', function () {
        loginForm.style.display = 'flex';
        choiceForm.style.display = '';
    });

    // Закрывает форму входа
    let loginFormClose = document.querySelector('.loginForm_close');
    loginFormClose.addEventListener('click', hideForm(loginForm));

    
    // Открывает форму регистрации
    let choiceFormRegistration = document.querySelector('.choiceForm_registration');
    let registrationForm = document.querySelector('.registrationForm__wrapper');
    choiceFormRegistration.addEventListener('click', function () {
        registrationForm.style.display = 'flex';
        choiceForm.style.display = '';
    });
    
    // Закрывает форму регистрации
    let registrationFormClose = document.querySelector('.registrationForm_close');
    registrationFormClose.addEventListener('click', hideForm(registrationForm));


    // При нажатии на иконку плюса открывает форму добавления объявления
    let plusButton = document.querySelector('.header_add');
    let addAdForm = document.querySelector('.addAdForm__wrapper');
    plusButton.addEventListener('click', showForm(addAdForm));

    // Закрывает форму добавления объявления
    let addAdFormClose = document.querySelector('.addAdForm_close');
    addAdFormClose.addEventListener('click', hideForm(addAdForm));


    
    /*---------Реализация поисковика---------*/
    function hideAllAds() {
        const allAds = document.querySelectorAll('.content__adverts__item');
        allAds.forEach((ad) => {
            ad.classList.add('content__adverts__item_hidden');
        })
    }

    function filterAds(ads) {
        ads.forEach((ad) => {
            ad.classList.remove('content__adverts__item_hidden');
        })
    }

    let headerButton = document.querySelector('.header_search');
    headerButton.addEventListener('click', (e) => {
        e.preventDefault();
        let headerInput = document.querySelector('.header__control__form__input').value;
        const allAds = Array.from(document.querySelectorAll('.content__adverts__item'));
      
        hideAllAds();
        filterAds(allAds.filter(ad => {
            const filtredByDescription = ad.querySelector('.content__adverts__item__description');
            const filtredByPrice = ad.querySelector('.content__adverts__item__price');
            
            const rgx = new RegExp(headerInput, 'i')
            if (rgx.test(ad.innerHTML) || rgx.test(ad.innerHTML)) {
                return ad;
            }
        }));
    });

    /*Кнопка удаления объявления
    let deleteAd = document.querySelector('.content__adverts__item__delete');
    deleteAd.addEventListener('click', e => {
        e.target.closest('.content__adverts__item').remove();
    })*/
});

