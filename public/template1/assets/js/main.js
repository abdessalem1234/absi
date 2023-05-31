window.addEventListener('load', (e) => {

   /* ---------------- libraries initialized ---------------- */

   loadLoader();
   loadMixitup();
   loadNoUiSlider();
   loadNiceSelect2();
   loadIziToast();
   loadSwiperSlider();
   loadMetismenu();

   /* ----> Tabs <---- */


   const tabs_container = document.querySelectorAll('.tabs-container');

   tabs_container.forEach((e) => {
      const tabs_buttons = e.querySelectorAll('.btn-tabs');
      const tabs_content = e.querySelectorAll('.tab-content');

      //contains all tabs
      tabs_buttons && tabs_buttons.forEach((element, i) => {
         //an event is added to each of the tabs
         element.addEventListener('click', (event) => {
            //remove the active state along with its transition
            tabs_buttons.forEach((button, i) => {
               tabs_content[i].style.cssText = '';
               tabs_content[i].classList.remove('active');
               button.classList.remove('active');
            });

            //we activate and add the transition to the clicked element
            tabs_content[i].style.cssText = 'transition : all .8s ease';
            tabs_content[i].classList.add('active');
            element.classList.add('active');
         });
      });
   });

   /* ----> Checked all checkbox <---- */

   element = document.querySelector('#check-all');
   element && element.addEventListener('click', (e) => {
      const checkbox = e.currentTarget;
      const check_product = document.querySelectorAll('.check-product');
      check_product.forEach((e) => {
         if (checkbox.checked) {
            e.checked = true;
         } else {
            e.checked = false;
         }
      });
   });

   /* ----> Increment / Decrement <---- */

   element = document.querySelectorAll('.quantity');
   element && element.forEach((element) => {
      const quantity_value = element.querySelector('.quantity-value');
      const quantity_buttons = element.querySelectorAll('.quantity-btn');

      quantity_buttons.forEach((btn) => {
         btn.addEventListener('click', (e) => {
            const element = e.currentTarget.classList;
            if (element.contains('increment')) {
               quantity_value.value++;
            }
            if (element.contains('decrement') && quantity_value.value > 0) {
               quantity_value.value--;
            }
         });
      });
   });

   /* ----> Input #number <---- */

   element = document.querySelectorAll('.input-number');
   element && element.forEach((element) => {
      element.addEventListener('onpaste', (e) => e.preventDefault());

      element.addEventListener('keydown', (e) => {
         if (isNaN(parseInt(e.key)) && e.keyCode != 8) {
            return e.preventDefault();
         }
      });
   });
});

/* ----> See more <---- */

element = document.querySelectorAll('.btn-see-more');
element && element.forEach((element) => {
   element.addEventListener('click', (e) => {
    console.log('see more');
      const father = e.currentTarget.closest('.see-more');
      const see_more_container = father.querySelector('.see-more-container');
      const see_more_content = father.querySelector('.see-more-content');
      const icon_rotate = father.querySelector('i');

      see_more_container.classList.toggle('gradient-bottom');
      icon_rotate.classList.toggle('rotate-180');

      see_more_container.style.transition = 'max-height 1s ease';
      see_more_container.style.maxHeight = see_more_content.offsetHeight + 'px';

      let duration = see_more_container.style.transitionDuration;

      if (duration.includes('ms')) {
         duration = parseInt(duration);
      } else if (duration.includes('s')) {
         duration = 1000 * parseFloat(duration);
      }

      if (icon_rotate.classList.contains('rotate-180')) {
         setTimeout(() => (see_more_container.style.maxHeight = 'max-content'), duration);
      } else {
         setTimeout(() => (see_more_container.style.maxHeight = ''), 10);
      }
   });
});

/* ---- Close Modals ---- */

/* All Modals */
element = document.querySelectorAll('.btn-close-modal');
element && element.forEach((element) => {
   element.addEventListener('click', (e) => {
      const modal = e.target.closest('.modal');
      const modal_content = modal.querySelector('.modal-content');
      document.querySelector('body').classList.remove('overflow-hidden');

      modal.classList.replace('opacity-100', 'opacity-0');
      modal.classList.replace('visible', 'invisible');

      if (modal_content.classList.contains('scale-100')) {
         modal_content.classList.replace('scale-100', 'scale-0');
         modal_content.classList.replace('opacity-100', 'opacity-0');
      }

      if (modal_content.classList.contains('right-0')) {
         modal_content.classList.replace('right-0', 'right-[-999px]');
      }
      if (modal_content.classList.contains('left-0')) {
         modal_content.classList.replace('left-0', 'left-[-999px]');
      }
   });
});

/* ---------------- Go Top Button ---------------- */

element = document.querySelector('.go-top-container');
element && element.addEventListener('click', (e) => {
   window.scrollTo({
      top: 0,
      behavior: 'smooth'
   });
});

window.addEventListener('resize', (e) => {
   if (window.innerWidth <= 1023) { return }

   const menu = document.querySelector('.menu-responsive.visible');
   if (menu) { menu.querySelector('#closed-menu').click(); }
});

window.addEventListener('scroll', (e) => {
   if (document.documentElement.scrollTop > 500) {
      document.querySelector('.go-top-container').classList.remove('-bottom-16');
      document.querySelector('.go-top-container').classList.add('show-gotop');
   } else {
      document.querySelector('.go-top-container').classList.remove('show-gotop');
      document.querySelector('.go-top-container').classList.add('-bottom-16');
   }
});

/* ----------------------------------------------------------------------- */

showModal = (modal) => {
   const modal_content = modal.querySelector('.modal-content');

   modal.classList.replace('opacity-0', 'opacity-100');
   modal.classList.replace('invisible', 'visible');

   if (modal_content.classList.contains('scale-0')) {
      modal_content.classList.replace('scale-0', 'scale-100');
      modal_content.classList.replace('opacity-0', 'opacity-100');
      modal_content.classList.add('opacity-transform');
   }

   if (modal_content.classList.contains('right-[-999px]')) {
      modal_content.classList.replace('right-[-999px]', 'right-0');
   } else if (modal_content.classList.contains('left-[-999px]')) {
      modal_content.classList.replace('left-[-999px]', 'left-0');
   }
}

window.addEventListener('click', (e) => {
   const element = e.target;

   /* ----> Open Modals <---- */
   /* Gral modals */
   if (e.target.classList.contains('btn-open-modal')) {
      const button = e.target;
      const modal = document.querySelector(button.getAttribute('data-target'));
      document.querySelector('body').classList.add('overflow-hidden');

      showModal(modal);

   } if (e.target.classList.contains('btn-toggle-modal')) {
      const button = e.target;
      const new_modal = document.querySelector(button.getAttribute('data-target'));
     /*  button.closest('.modal').querySelector('.btn-close-modal').click(); */
      document.querySelector('body').classList.add('overflow-hidden');

      showModal(new_modal);
   }

   /* ----> Heart Wishlist Animation <---- */

   if (e.target.classList.contains('btn-wishlist')) {
      const heart_icon = e.target.children[0];

      if (heart_icon.classList.contains('bi-heart')) {
         heart_icon.classList.replace('bi-heart', 'bi-heart-fill');
         heart_icon.classList.add('heartscale');
      } else {
         heart_icon.classList.replace('bi-heart-fill', 'bi-heart');
         heart_icon.classList.remove('heartscale');
      }
   }

   /* ----> Chckboxes <---- */
   if (e.target.classList.contains('check-product')) {
      const check_all = document.querySelector('#check-all');
      const checkboxes = document.querySelectorAll('.check-product');
      const checkboxes_checked = document.querySelectorAll('.check-product:checked');

      if (checkboxes_checked.length === checkboxes.length) {
         check_all.checked = true;
      } else {
         check_all.checked = false;
      }
   }

});

loadLoader = () => {
   setTimeout(() => {
      const loader_content = document.querySelector('.loader-content');
      loader_content.classList.add('transition-all', 'duration-500', 'opacity-0', 'invisible');
   }, 500);

   setTimeout(() => {
      const loader = document.querySelector('.loader');
      const body = document.querySelector('body');
      loader.classList.add('transition-all', 'duration-1000', 'opacity-0', 'invisible');
      body.classList.remove('overflow-hidden');
   }, 800);
}

/* ---------------- Auxiliary functions ---------------- */

/* ----> Nice Select2 <---- */

loadNiceSelect2 = () => {
   element = document.querySelectorAll('.nice-select');
   element && element.forEach((element) => {
      if (element.classList.contains('country')) {
         NiceSelect.bind(element, {
            placeholder: 'Country',
         });
      }
      if (element.classList.contains('order-by')) {
         NiceSelect.bind(element, {
            placeholder: 'Trier par',
         });
      }
   });
};

loadMixitup = () => {
   element = document.querySelector('.products');
   if (!element) { return; }

   const params = {
      load: {
         filter: element.classList.contains('products') ? '.mix-main' : 'all',
      }
   }

   mixitup(element, params);
}

loadNoUiSlider = () => {
   const snapSlider = document.querySelector('.slider-handles');

   if (!snapSlider) { return }

   noUiSlider.create(snapSlider, {
      start: [0, 500],
      connect: true,
      step: 10,
      range: {
         'min': [0],
         'max': [500]
      }
   });

   const snapValues = [
      document.querySelector('.min-price'),
      document.querySelector('.max-price')
   ];

   const snapValuesSpan = [
      document.querySelector('.span-min-price'),
      document.querySelector('.span-max-price')
   ];

   snapSlider.noUiSlider.on('update', function (values, handle) {
      snapValues[handle].value = parseInt(values[handle]);
      snapValuesSpan[handle].innerHTML = `${parseInt(values[handle])} €`;
   });
}

/* ----> Swiper Slider <---- */

loadSwiperSlider = () => {
   element = document.querySelector('.swiper');

   /* Slider Banner */
   element && new Swiper('.swiper-banner', {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      effect: 'fade',
      fadeEffect: {
         crossFade: true,
      },
      autoplay: {
         delay: 3500,
         disableOnInteraction: false,
      },
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
      },
      navigation: {
         nextEl: '.button-next',
         prevEl: '.button-prev',
      },
   });
   element && new Swiper('.swiper-banner', {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      effect: 'fade',
      fadeEffect: {
         crossFade: true,
      },
      autoplay: {
         delay: 3500,
         disableOnInteraction: false,
      },
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
      },
      navigation: {
         nextEl: '.button-next',
         prevEl: '.button-prev',
      },
   });
   element && new Swiper('.swiper-etape', {
    spaceBetween: 30,
    centeredSlides: true,
    loop: false,
    effect: 'fade',
    fadeEffect: {
       crossFade: true,
    },
    autoplay: {
       delay: 8500,
       disableOnInteraction: false,
    },
    pagination: {
       el: '.swiper-pagination',
       clickable: true,
    },
    navigation: {
       nextEl: '.button-next',
       prevEl: '.button-prev',
    },
 });

   /* Slider Cards */
   element && new Swiper('.swiper-cards', {
      slidesPerView: 1,
      spaceBetween: 20,
      freeMode: true,
      loop: true,
      autoplay: {
         delay: 5000,
         disableOnInteraction: false,
      },
      breakpoints: {
         640: {
            slidesPerView: 2,
            spaceBetween: 20,
         },
         1024: {
            slidesPerView: 3,
            spaceBetween: 20,
         },
         1280: {
            slidesPerView: 4,
            spaceBetween: 20,
         },
      },
      navigation: {
         nextEl: '.button-next',
         prevEl: '.button-prev',
      },
   });

   /* Slider Products */
   element = document.querySelectorAll('.swiper-thumbs');
   swipper_top = document.querySelectorAll('.swiper-top');

   element && element.forEach((element, index) => {
      if (!element) { return; }
      const gallery = new Swiper(element, {
         spaceBetween: 10,
         slidesPerView: 4,
         freeMode: true,
         watchSlidesProgress: true,
      });

      const swiper = new Swiper(swipper_top[index], {
         spaceBetween: 10,
         effect: 'fade',
         allowTouchMove: false,
         zoom: {
            maxRatio: 2,
            toggle: true,
         },
         fadeEffect: {
            crossFade: true,
         },
         navigation: {
            nextEl: '.button-next',
            prevEl: '.button-prev',
         },
         thumbs: {
            swiper: gallery,
         },
      });

      swiper.slides.forEach((element) => {
         element.addEventListener('mouseover', function (e) {
            swiper.zoom.in();
         });

         element.addEventListener('mouseout', function (e) {
            swiper.zoom.out();
         });
      });
   });
};

/* ----> Izi Toast <---- */

loadIziToast = () => {
//    element = document.querySelector('.form-send-message');
//    element && element.addEventListener('submit', (e) => {
//       iziToast.success({
//          title: 'OK',
//          position: 'topRight',
//          message: 'Message Envoyé',
//       });
//    });
};

/* ----> Metismenu <---- */

loadMetismenu = () => {
   element = document.querySelectorAll('.metismenu');
   element && element.forEach((element) => {
      if (!element) {
         return;
      }

      new MetisMenu(element, {
         triggerElement: '.metismenu-btn',
         subMenu: '.metismenu-content',
      });
   });
};
var btncopy = document.querySelector('.js-copy');
if(btncopy) {
    btncopy.addEventListener('click', docopy);
}

function docopy() {

    // Cible de l'élément qui doit être copié
    var target = this.dataset.target;
    var fromElement = document.querySelector(target);
    if(!fromElement) return;

    // Sélection des caractères concernés
    var range = document.createRange();
    var selection = window.getSelection();
    range.selectNode(fromElement);
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        // Exécution de la commande de copie
        var result = document.execCommand('copy');
        if (result) {
            // La copie a réussi
            alert('Copié !');
        }
    }
    catch(err) {
        // Une erreur est surevnue lors de la tentative de copie
        alert(err);
    }

    // Fin de l'opération
    selection = window.getSelection();
    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
}
