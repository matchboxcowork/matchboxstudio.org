(function () {
  var bindings = {
    'app': showMemebershipApplication,
    'virtualTour': showVirtualTour
  };

  function showMemebershipApplication() {
    window.manageSection('membershipApplication');
  }

  function showVirtualTour() {
    window.manageSection('virtualTour');
  }

  function dispatchAnchor(hash) {
    var handler = bindings[hash];
    if (handler !== undefined) {
      return handler();
    }
  }

  function clickAnchor(event) {
    if ('href' in event.target) {
      var href = event.target.href;
      var idx = href.indexOf('#');
      if (idx > -1)
        return dispatchAnchor(href.substr(idx+1));
    }
  }


  if (document.location.hash.length > 0) {
    dispatchAnchor(document.location.hash.substr(1));
  }

  window.clickAnchor = clickAnchor;
})()
