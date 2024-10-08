/* 
 *
 *
 * UI - HEADER - DEV
 *
 * 
 */ 




// BUTTON ACTIONS (NOT DROPDOWNS, LIKE FDARK MODE TOGGLE...

/*
// FULLSCREEN TOGGLE
$(document).ready(function() {
  $('[role=trigger_fullscreen]').click(function() {
      if (document.fullscreenElement) {
          document.exitFullscreen();
      } else {
          document.documentElement.requestFullscreen();
      }
  });
});
*/

// FULLSCREEN TOGGLE - now actually toggling the icon as well !
$(document).ready(function() {
    $('[role=trigger_fullscreen]').click(function() {
        if (document.fullscreenElement) {
            document.exitFullscreen();
            $('[role=trigger_fullscreen] span').text('fullscreen');
        } else {
            document.documentElement.requestFullscreen();
            $('[role=trigger_fullscreen] span').text('fullscreen_exit');
        }
    });
  
    $(document).on('fullscreenchange', function() {
        if (document.fullscreenElement) {
            $('[role=trigger_fullscreen] span').text('fullscreen_exit');
        } else {
            $('[role=trigger_fullscreen] span').text('fullscreen');
        }
    });
  });
  
  
  
  
  // DISABEL ALL CSS - FOR ACCESIBILITY CHEKCS
  $(document).ready(function() {
    $('[role=trigger_css]').click(function() {
        $('link[rel=stylesheet], style').remove(); // Remove all stylesheets and style tags
    });
  });
  
  
  
  // js/jq to disable the viewport meta tag- RESPONISVE, SO THAT DESKTOP SITE CAN VBE SEEN (AND SCREENHOTETD ) ON MOBIEL !!!
  /*
  $(document).ready(function() {
    function createViewportMeta(content) {
        const meta = $('<meta>', {
            name: 'viewport',
            content: content
        });
        $('head').append(meta);
        return meta;
    }
  
    function toggleViewportMeta() {
        let meta = $('meta[name="viewport"]');
  
        if (meta.length === 0) {
            meta = createViewportMeta('width=device-width, initial-scale=1');
        } else {
            if (meta.attr('content') === 'width=device-width, initial-scale=1') {
                // meta.attr('content', 'width=1024'); // TESTING WIDTH
                meta.attr('content', 'width=1920');
            } else {
                meta.attr('content', 'width=device-width, initial-scale=1');
            }
        }
    }
    
    $('[role=trigger_responsive]').on('click', function() {
        toggleViewportMeta();
    });
  });
  */
  // VERSION 2 - CHEKCING FIRTS IF THERE ALREADY IS A META VIEWPORT TAG, SO WE DONT HAVE TO CLICK 2 TIMES FOR THE TAG TO BE REMOVED.
  $(document).ready(function() {
    function toggleViewportMeta() {
        let meta = $('meta[name="viewport"]');
  
        if (meta.length === 0) {
            console.error('No viewport meta tag found!');
            return;
        }
  
        // Toggle the content of the existing meta tag
        if (meta.attr('content') === 'width=device-width, initial-scale=1') {
            meta.attr('content', 'width=1920');
        } else {
            meta.attr('content', 'width=device-width, initial-scale=1');
        }
    }
  
    $('[role=trigger_responsive]').on('click', function() {
        toggleViewportMeta();
    });
  });
  
  
  // NEW, BUIDING IN WP_COWOW, TO LATER TRANSFER INTO Cb WHEN i MOVE SETTINGS RELATED THINGEES INTO THE SETTINSG DROPDOWNS THAT I HAVE RO BUILD !!!
  
  // (CSS) DEBUGGING . ADDS A CLASS MODIFIER TO THE BODY TAG, SO THAT ALL ITEMS HAVE AN OUTLINE
  $(document).ready(function() {
    $('[role=trigger_debugging]').click(function() {
        $('body').toggleClass("debugging");
    });
  });