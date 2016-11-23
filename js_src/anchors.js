(function () {
  // Mappings of hash URLs to a function that transitions to that hash's
  // content.
  var bindings = {
    'app': showMemebershipApplication,
    'virtualTour': showVirtualTour
  };

  // Expands the membership application section and scrolls to it.
  function showMemebershipApplication(animated) {
    $('#membershipApplication').addClass('expanded').removeClass('collapsed');
    $('body').scrollTo($('#app'), {
      duration: animated ? 500 : 0,
      onAfter: function (target, settings) {
        window.location.hash = '#app';
      }
    });
  }

  // Embeds the virtual tour and scroll to it.
  function showVirtualTour(animated) {
    window.manageSection('virtualTour');
  }

  function dispatchAnchor(hash, animated) {
    var handler = bindings[hash];
    if (handler !== undefined) {
      // Call the handler. If it doesn't return anything, return `false` to
      // prevent event bubbling by default.
      return handler(animated) || false;
    }
  }

  // Expected to be called as the onclick event of a link. This function looks
  // for a handler function defined in `bindings` above; if it finds one it
  // calls it and return the result.
  function clickAnchor(event) {
    if ('href' in event.target) {
      var href = event.target.href;
      var idx = href.indexOf('#');
      if (idx > -1)
        return dispatchAnchor(href.substr(idx+1), true);
    }
  }


  // On page load, call an anchor handler if the page has a hash parameter.
  // This expands/configures any elements that were linked to. For example,
  // loading matchboxstudio.org/#app will expand the application and open
  // scrolled to it.
  if (document.location.hash.length > 0) {
    dispatchAnchor(document.location.hash.substr(1), false);
  }

  // Bind the onclick event of any anchor link on the page (any link beginning
  // with '#') to clickAnchor.
  $('a[href^="#"]').click(clickAnchor);
})()
