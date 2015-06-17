jQuery(function($){
    var BLlotw = function(){
      var lotw_content = $('.lotw-content'),
          lotw_data = $('.std'),
          tab_data = $('.tab', lotw_data),
          tab = $('.tab', lotw_content),
          tab_size = tab_data.length,
          tab_nav = $('.lotw-content-nav ul', lotw_content),
          item_customizations = $('.item-customizations', lotw_data),
          custom_links = [],
          customizer_url = 'process_product_customize/index/view/id/index.html',
          counter = 0,

        // {{{ presetCustomizations
        presetCustomizations = function(){
          // store custom links
          $('li', item_customizations).each(function(){
              custom_links.push($(this).html());
          });
          if(custom_links.length){
              $('#Products .item a').each(function(k, v){
                  var el = $(this);
                  if(custom_links[k].trim()){
                      el.attr('href', customizer_url + el.data('id')+ '/' + custom_links[k].replace(/&amp;/g,'&').trim());
                      el.find('.item-name').after( '<p class="">Styled as above</p>');
                  }
              });
          }
        },
        // }}}
        // {{{ bindArrowKeys
        bindArrowKeys = function(){
          $(document).keydown(function(e){
            var lotw_nav_links = $('.lotw-content-nav').find('a'),
              active_link = lotw_nav_links.filter('.active');
              if(e.keyCode === 37 && active_link.parent().prev().prev().length){
                  active_link.parent().prev().prev().find('a').click();
              }
              else if(e.keyCode === 39 && active_link.parent().next().next().length){
                  active_link.parent().next().next().find('a').click();
              }
          });
          var lotw_nav_links = $('.lotw-content-nav').find('a'),
              content_next = $('.content-next'),
              content_prev = $('.content-prev'),
              active_link = lotw_nav_links.filter('.active');
          if(!active_link.parent().next().next().length ){
              content_next.hide();
              content_prev.hide();
          }
          content_prev.addClass('inactive');
          content_next.on({
              click: function(){
                  var lotw_nav_links = $('.lotw-content-nav').find('a'),
                    active_link = lotw_nav_links.filter('.active'),
                    next_link = active_link.parent().next().next();
                  if(next_link.length){
                      next_link.find('a').click();
                      if(!next_link.next().length){
                          content_next.addClass('inactive');
                      }
                  }
                  content_prev.removeClass('inactive');
              }
          });
          content_prev.on({
              click: function(){
                  var lotw_nav_links = $('.lotw-content-nav').find('a'),
                    active_link = lotw_nav_links.filter('.active'),
                    prev_link = active_link.parent().prev().prev();
                  if(prev_link.length){
                      prev_link.find('a').click();
                      if(!prev_link.prev().length){
                          content_prev.addClass('inactive');
                      }
                  }
                  content_next.removeClass('inactive');
              }
          });
        },
        // }}}
        // {{{ bindLightboxImages
        bindLightboxImages = function(){
          $('.image').on({
              click : function(){
                  var el = $(this),
                  full_img = el.find('.full'),
                  full_img_popup = $('<img src="'+ full_img.attr('src') +'"/>').css({
                      position: 'absolute',
                      top: '204px',
                      display: 'none',
                      width: '100%',
                      minWidth: '1000px'
                  }).zIndex(3002),

                  overlay = $('<div class="overlay"></div>').css({
                      height : '100%',
                      width: '100%',
                      display: 'none',
                      position: 'fixed',
                      left: '0',
                      top: '0',
                      backgroundColor: '#000',
                      opacity: '0.85'
                  }).zIndex(3000).on({
                      click : function(){
                          $(this).fadeOut(300, function(){$(this).remove()});
                          full_img_popup.fadeOut(300, function(){$(this).remove();});
                      }
                  });
                  full_img_popup.on({
                    click: function(){ overlay.click(); }
                  });
                  $(document).bind('keydown', function(e) { 
                      if (e.which == 27) { overlay.click(); }
                  }); 

                  if(full_img.length){
                      $('body').append(overlay).append(full_img_popup);
                      overlay.delay(100).fadeIn(200);
                      full_img_popup.delay(100).fadeIn(200);
                  }
              }
          })
          // add full screen icon
          .each(function(){
            var el = $(this),
              fullscreen_icon = $('<div class="fullscreen-icon"><img width="20px" alt="full-screen image" src="skin/frontend/default/blacklapel/img/fullscreen-icon.png"/></div>');
              el.append(fullscreen_icon);
          }).hover(
            function(){
              $('.fullscreen-icon', $(this)).find('img').stop().clearQueue().animate({
                width: '25px' }, 200, function(){
                  $(this).animate({ width: '20px' }, 200, function(){
                    $(this).animate({ width: '25px' }, 200);
                  });
              });
            },
            function(){
              $('.fullscreen-icon', $(this)).find('img').stop().clearQueue().animate({
                width: '20px'
              }, 200);
            }
          );
        },
        // }}}
        // {{{ loadContent
        loadContent = function(){
          tab_data.each(function(){
              var el = $(this),
                  el_id = el.attr('id'),
                  active_arrow = $('<img src="skin/frontend/default/blacklapel/img/arrow_up.png"/>').css({
                    position: 'relative',
                    marginLeft: '-15px',
                    left: '50%',
                    display: 'block'
                  }),
                  active_arrow_container = $('<div class="active_arrow_container"></div>').css({
                    position : 'absolute',
                    width: 'inherit',
                    top: '-11px'
                  }).append(active_arrow),
                  el_title = el.data('title') ? el.data('title') : el_id,
                  nav_item = $('<li class="nav-item"><a data-id="'+el_id+'" href="javascript:;">'+el_title+'</a></li>').on({
                      click: function(){
                          tab = $('.tab', lotw_content).removeClass('active');
                          $('#' + el_id, lotw_content).addClass('active');
                          $('li a', tab_nav).removeClass('active');
                          $(this).parent().find('.active_arrow_container').remove();
                          $(this).find('a').addClass('active').after(active_arrow_container);
                          $('.image', $('.lotw-content')).trigger('mouseenter');
                          // add active div
                      }
                  }).css({
                      width: (100 / tab_size)-1 + '%'
                  });
                  tab_nav.append(nav_item);
                  counter++;
                  if(counter < tab_size){
                      tab_nav.append(
                          $('<li class="separator">|</li>')
                      );
                  }
                  if(counter === 1){
                      nav_item.click();
                  }
                  if(tab_size <= 1){
                      tab_nav.css({
                          visibility : 'hidden'
                      });
                  }
          });
        },
        // }}}
        // {{{ buildArchiveListing
        buildArchiveListing = function(){
          $('.lotw-archive').each(function(){
              var el = $(this),
                  pages = $('.pages', el).data('page'),
                  cur_page = 1,
                  lotw_nav = $('.lotw-nav', el),
                  lotw_ul = $('.lotw-listing ul', el),
                  list_li = lotw_ul.find('li'),
                  padding_height = parseInt(list_li.css('padding-bottom').slice(0, -2)),
                  margin_width = parseInt(list_li.css('margin-left').slice(0, -2)),
                  grid_max_height = padding_height + list_li.height(),
                  scroll_width = lotw_ul.parent().width() + (margin_width*2),
                  lotw_next = $('.next', lotw_nav).on({
                      click: function(){
                          if(cur_page !== pages){
                              lotw_ul.animate({
                                  marginLeft : '-='+scroll_width
                              }, 500);
                              cur_page++;
                          }

                          if(cur_page === pages){
                              lotw_next.css({ visibility : 'hidden' });
                          }
                          else{
                              lotw_next.css({ visibility : 'visible' });
                          }
                          lotw_prev.css({ visibility : 'visible' });
                      }
                  }),
                  lotw_prev = $('.prev', lotw_nav).on({
                      click: function(){
                          if(cur_page !== 1){
                              cur_page--;
                              lotw_ul.animate({
                                  marginLeft : '+='+scroll_width
                              }, 500);
                          }
                          if(cur_page === 1){
                              lotw_prev.css({ visibility : 'hidden' });
                          }
                          else{
                              lotw_prev.css({ visibility : 'visible' });
                          }
                          lotw_next.css({ visibility : 'visible' });
                      }
                  }),
                  lotw_load_more = $('.load-more', el).on({
                      click : function(){
                          if(cur_page !== pages){
                              cur_page++;
                              $('.lotw-listing ul').animate({
                                  maxHeight: (grid_max_height * 2 * cur_page) - padding_height/2 + 'px'
                              }, 500);
                          }
                          if(cur_page === pages){
                              lotw_load_more.parent().hide();
                          }
                      }
                  });
                  if(pages === 1){
                      lotw_load_more.hide();
                      lotw_prev.css({ visibility : 'hidden' });
                      lotw_next.css({ visibility : 'hidden' });
                  }
                  else if(cur_page === 1){
                      lotw_prev.css({ visibility : 'hidden' });
                  }
          });
        },
        // }}}

        init = function(){
          lotw_content.prepend(lotw_data.html());
          presetCustomizations();
          bindLightboxImages();
          loadContent();
          buildArchiveListing();
          bindArrowKeys();
        };
        return {
          init: init
        }
    }();
    BLlotw.init();

    $(window).load(function(){
        $('.image', $('.lotw-content')).trigger('mouseenter');
    });
});
