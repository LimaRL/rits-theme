export default {
  init() {

  },
  finalize() {
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
    });
  },
};
