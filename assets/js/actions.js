!function(){
  $(document).ready(() => {
    //-- Modal image display
    $('.box-projects').find('a[data-display]').click(e => {
      e.preventDefault();
      let $current = $(e.currentTarget),
      link = $current.attr('data-display') + '-lg.jpg';

      $('#display').addClass('active');
      $('#display').find('.loaded').removeClass('loaded');
      $('#display').addClass('loading');

      $('#display').find('img')
        .on('load', () => {
          $('#display').find('.loading').removeClass('loading');
          $('#display').find('.view').addClass('loaded')
        })
        .attr('src', link)
        .each(() => {
          if ( document.querySelector('#display img').complete ) $('#display').find('img').trigger('load');
        })
      
    })

    $('#display').find('.view').click(() => {
      $('#display').removeClass('active');
      $('#display').find('img').attr('src', '');
      setTimeout(() => {
        $('#display').find('.loaded').removeClass('loaded')
      }, 300);
    })

    $('#display').find('#close').click(() => {
      $('#display').removeClass('active');
      $('#display').find('img').attr('src', '');
      setTimeout(() => {
        $('#display').find('.loaded').removeClass('loaded')
      }, 300);
    })

    //-- Menu fixed bar
    $(window).scroll(() => {
      let $fetchDistance = $('#banner').height() + $('#little-menu').height();

      window.scrollY > Math.floor($fetchDistance + 200) ?
      $('header').find('#little-menu').addClass('fixed') : $('header').find('#little-menu').removeClass('fixed');    
    });

    //-- Local Scroll
    $('a.local-scroll').click(e => {
      e.preventDefault();
      let selector = $(e.currentTarget).attr('href'),
      dist = $(selector).offset().top; dist = dist - 100; 
      dist = dist <= 0 ? 0 : dist;
      
      window.scrollTo({
        top: dist,
        behavior: 'smooth'
      })
    });

    //-- Tradutor
    if ( $('.pt-br').length > 0 ){
      // Footer
      $('footer').find('.pull-bottom .row > div').eq(0).find('h3').text('Comece um projeto');
      $('footer').find('.pull-bottom .row > div').eq(1).find('p').text('Interessado em trabalhar juntos ou quer contratar meus serviços? Vamos conversar, o café é por minha conta.')
      $('footer').find('.pull-bottom .row > div').eq(2).find('a').text('Entre em contato');

      $('footer').find('h4').html('<span class="d-block">Vivo em sempre na</span>do crescimento pessoal.');

      // Header
      $('header').find('#little-menu').find('li a').eq(0).text('habilidades');
      $('header').find('#little-menu').find('li a').eq(1).text('currículo');
      $('header').find('#little-menu').find('li a').eq(2).text('portfólio');
    }

    //-- Mailer
    !function(){
      if ( $('main.contact').length == 0 ) return
      let scope = document.createElement('script'),
      sitelink = $('header').find('.logo a').attr('href');
      scope.src = `${sitelink}assets/js/mailer.js`;
      window.sitelink = sitelink;
      $('header').append(scope);
    }()
  })
}()