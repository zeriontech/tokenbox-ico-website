if (!sr.tools.isMobile()) {
  sr.reveal('.from-bottom', {
    distance: '-50px',
    origin: 'top'
  })
  sr.reveal('.topblock .fade-in-item', { viewFactor: 0 }, 100)
  // sr.reveal('.countdown', { viewFactor: 0 }, 100)
  sr.reveal('.technology .fade-in-item', { viewFactor: 0 }, 100)
  sr.reveal('.get-notified');
  sr.reveal('.invest-in-pro');
  sr.reveal('.pay-with');
  sr.reveal('.become-legal');
  sr.reveal('.trading-app');
  sr.reveal('.issue');
  sr.reveal('.big-title');
  sr.reveal('.send-request-body');
  sr.reveal('.roadmap .top');
  sr.reveal('.technology');
  sr.reveal('.team .member', {
    distance: '-50px',
    origin: 'top'
  }, 100);
  sr.reveal('.advisors .member', {
    distance: '-50px',
    origin: 'top'
  }, 100);
  sr.reveal('.pay-with-screen', {
    distance: '50px'
  }, 150)
  sr.reveal('.multi-crypto');
  sr.reveal('.media');
  sr.reveal('.footer');
  // sr.reveal('.milestone');
  sr.reveal('.footer-social .link', 50)
  sr.reveal('.background-icon', {
    scale: 0.1,
    easing: 'ease-in-out'
  });
  sr.reveal('.fade-in-left', {
    distance: '50px',
    origin: 'left'
  });
  sr.reveal('.fade-in-right', {
    distance: '50px',
    origin: 'right'
  });
}
