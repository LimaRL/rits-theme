export default {
  init() {

    // block-services actions
    const  servicesBtn = document.getElementsByClassName('btn-filter');
    const servicesList = document.querySelector('.block-services-list').children;

    Array.from(servicesBtn).forEach(element => {
      element.addEventListener('click', filterServices);
    })

    function filterServices() {
      const category = this.getAttribute('data-value');

      Array.from(servicesBtn).forEach(element => {
        element.classList.remove('active');
      })

      this.classList.add('active')

      Array.from(servicesList).forEach(element => {
        if (category) {
          element.style.display = 'none'

          const categories = element.getAttribute('data-value');

          if (categories.includes(category)) {
            element.style.display = 'block'
          }
        } else {
          element.style.display = 'block'
        }
      });
    }
  },
  finalize() {

  },
};
