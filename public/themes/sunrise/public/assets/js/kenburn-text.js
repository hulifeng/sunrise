// VEGAS
// Background SLideShow
// Codepen Demo
// http://vegas.jatysalvat.com



$('.kenbarn').vegas({
  overlay: true,
  transition: 'fade', 
  transitionDuration: 4000,
  delay: 10000,
  animation: 'random',
  animationDuration: 20000,
  slides: [
    { src: '/themes/sunrise/public/assets/images/slider/kenburn-1.jpg' },
    { src: '/themes/sunrise/public/assets/images/slider/kenburn-2.jpg' },
    { src: '/themes/sunrise/public/assets/images/slider/kenburn-3.jpg' },
    /*{ src: 'images/slider/kenburn-4.jpg' }*/
  ]
});