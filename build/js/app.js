window.addEventListener("load", function () {

  const burgerBtn = document.querySelector('.header__burger');
  const burgerBtnShow = document.querySelector('[data-open]');
  const burgerBtnClose = document.querySelector('[data-close]');
  const mobileMenu = document.querySelector('.header__mobile-menu');
  const headerMobileItems = document.querySelectorAll('.header__mobile-menu li');
  const faqBtns = document.querySelectorAll('.faq__item-headline');
  const formBtn = document.querySelector('.form__submit');
  const dayBtn = document.querySelector('.price__item-btn--day');
  const dayParttime = document.querySelector('.price__item-btn--parttime');
  const overlayDay = document.querySelector('.overlay__day');
  const popupDay = document.querySelector(".popup__day");
  const overlayParttime = document.querySelector('.overlay__parttime');
  const popupParttime = document.querySelector(".popup__parttime");
  const closeBtnDay = document.querySelector('.close__day');
  const closeBtnPartTime = document.querySelector('.close__parttime');
  const formDay = document.querySelector('.form__day');
  const partTime = document.querySelector('.form__parttime');
  const formApplication = document.querySelector('.form__application');
  const faqBtnClose = document.querySelectorAll('.faq__btn-close');

  burgerBtn.addEventListener('click', burgerMenuToggle);
  faqBtns.forEach(item => item.addEventListener('click', openThisInfoFaq));
  if (formBtn) {
    formBtn.addEventListener('click', formSubmit);
  }
  headerMobileItems.forEach(link => link.addEventListener('click', burgerMenuToggle))
  if (dayBtn) {
    dayBtn.addEventListener('click', () => openPopup(overlayDay, popupDay));
  }
  if (dayParttime) {
    dayParttime.addEventListener('click', () => openPopup(overlayParttime, popupParttime));
  }
  if (overlayDay) {
    overlayDay.addEventListener('click', popupCloseOpen);
  }
  if (overlayParttime) {
    overlayParttime.addEventListener('click', popupCloseOpen);
  }
  if (faqBtnClose) {
    faqBtnClose.forEach(item => item.addEventListener('click', closeBtnFaqInfo))
  }

  function closeBtnFaqInfo(e) {
    e.currentTarget.previousElementSibling.classList.toggle('faq-active')
    if (e.currentTarget.previousElementSibling.classList.contains('faq-active')) {
      e.currentTarget.previousElementSibling.style.height = 'auto';
      if (window.innerWidth >= 1262) {
        e.currentTarget.previousElementSibling.style.padding = '45px';
      } else {
        e.currentTarget.previousElementSibling.style.padding = '15px';
      }
      e.currentTarget.previousElementSibling.style.transform = 'translateY(0)';
      e.currentTarget.style.transform = 'rotateZ(0)'
    } else {
      e.currentTarget.previousElementSibling.style.transform = 'translateY(-100%)';
      e.currentTarget.previousElementSibling.style.padding = '0';

      e.currentTarget.previousElementSibling.style.height = '0';
      e.currentTarget.previousElementSibling.style.padding = '0';
      e.currentTarget.style.transform = 'rotateZ(45deg)'
    }


  }

  function openPopup(overlay, popup) {
    overlay.style.zIndex = '99';
    overlay.style.opacity = '1';
    popup.style.opacity = '1';
    popup.style.transform = 'translateY(0)';
  }


  function popupCloseOpen(e) {
    const target = e.target;
    if (target === overlayDay || target === closeBtnDay) {
      closePopup(overlayDay, popupDay)
    } else if (target === overlayParttime || target === closeBtnPartTime) {
      closePopup(overlayParttime, popupParttime)
    }
  }


  function closePopup(overlay, popup) {
    overlay.style.zIndex = '-1';
    overlay.style.opacity = '0';
    popup.style.opacity = '0';
    popup.style.transform = 'translateY(-100vh)';
  }

  function openThisInfoFaq(e) {
    const target = e.target.nextElementSibling;
    let btnCloseInfo = target.parentElement.lastElementChild;
    target.classList.toggle('faq-active');

    if (target.classList.contains('faq-active')) {
      e.target.nextElementSibling.style.height = 'auto';
      if (window.innerWidth >= 1262) {
        e.target.nextElementSibling.style.padding = '45px';
      } else {
        e.target.nextElementSibling.style.padding = '15px';
      }
      e.target.nextElementSibling.style.transform = 'translateY(0)';
      btnCloseInfo.style.transform = 'rotateZ(0)'
    } else {
      e.target.nextElementSibling.style.transform = 'translateY(-100%)';
      e.target.nextElementSibling.style.padding = '0';

      e.target.nextElementSibling.style.height = '0';
      e.target.nextElementSibling.style.padding = '0';
      btnCloseInfo.style.transform = 'rotateZ(45deg)'
    }
  }

  function burgerMenuToggle() {
    burgerBtn.classList.toggle('header__active-menu');
    if (burgerBtn.classList.contains('header__active-menu')) {
      burgerBtnShow.style.display = "none";
      burgerBtnClose.style.display = "block";

      mobileMenu.style.transform = 'translateY(0)'
    } else {
      burgerBtnShow.style.display = "block";
      burgerBtnClose.style.display = "none";
      mobileMenu.style.transform = 'translateY(-100%)'
    }
  }
  if (formDay) {
    formDay.addEventListener('submit', () => {
      setTimeout(() => {
        closePopup(overlayDay, popupDay);
        document.querySelector('.form__day .wpcf7-response-output').innerHTML = ''
      }, 5000)
    });
  }
  if (partTime) {
    partTime.addEventListener('submit', () => {
      setTimeout(() => {
        closePopup(overlayParttime, popupParttime);
        document.querySelector('.form__parttime .wpcf7-response-output').innerHTML = ''
      }, 5000)
    });
  }
  if (formApplication) {
    formApplication.addEventListener('submit', () => {
      setTimeout(() => {
        document.querySelector('.form__application .wpcf7-response-output').innerHTML = ''
      }, 6000)
    })
  }

  function animationGsapScroll(elemAnim, blockTrigger, y = 250, start) {
    gsap.from(elemAnim, {
      opacity: 0,
      y: y,
      duration: 0.5,
      stagger: 0.1,
      scrollTrigger: {
        trigger: blockTrigger,
        start: start || 'top 50%',
      },
    });
  }
  if (document.querySelector('.day__item')) {
    animationGsapScroll('.day__item', ".day");
  }
  if (document.querySelector('.hero__anim')) {
    animationGsapScroll('.hero__anim', ".hero", 50, 'top 90%');
    animationGsapScroll('.kids__subtext', ".kids__benefits", 50, 'top 30%');
    animationGsapScroll('.kids__benefits', ".kids__headline", 50, 'top 60%');
    animationGsapScroll('.education__slider', ".education__headline");
    animationGsapScroll('.education__slogan', ".education__slider");
    animationGsapScroll('.education__link', ".education__slogan", 50, 'top 90%');
    animationGsapScroll('.price__headline', ".price", 50, 'top 90%');
    animationGsapScroll('.price__item-info', ".price__headline", 50, 'top 30%');
    animationGsapScroll('.price__subtext', ".price__item-btn", 50, 'top 60%');
    animationGsapScroll('.boss__headline', ".boss", 50, 'top 30%');
    animationGsapScroll('.boss__item', ".boss__headline", 150, 'top 30%');
    animationGsapScroll('.boss__slogan', ".boss__item", 150, 'top 30%');
    animationGsapScroll('.request__headline', ".request", 50, 'top 90%');
    animationGsapScroll('.request__qr-text', ".request", 50, 'top 90%');
    animationGsapScroll('.request__qr-wrapper', ".request", 50, 'top 90%');
    animationGsapScroll('.form__application', ".request__qr-wrapper", 50, 'top 30%');
    animationGsapScroll('.request__info', ".request__qr-text", 50, 'top 30%');
    animationGsapScroll('.gallary__headline', ".gallary", 50, 'top 30%');
    animationGsapScroll('.gallary__item', ".gallary__headline", 50, 'top 30%');
    animationGsapScroll('.gallary__info', ".gallary__item", 50, 'top 30%');
    animationGsapScroll('.gallary__btn', ".gallary__info", 50, 'top 30%');
    animationGsapScroll('.faq__headline', ".faq", 50, 'top 30%');
    animationGsapScroll('.faq__item', ".faq__headline", 50, 'top 30%');
    animationGsapScroll('.faq__slogan', ".faq__list", 150, 'top 90%');
    animationGsapScroll('.map__adress', ".map", 50, 'top 90%');
    animationGsapScroll('.map__contact', ".map__adress", 150, 'top 90%');
    animationGsapScroll('.footer__inner', ".footer", 250, 'top 90%');
  }
});