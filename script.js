function loadGapi() {
    var loaderScript = document.createElement('script');
    loaderScript.setAttribute('src', 'https://apis.google.com/js/api.js?checkCookie=1');
    loaderScript.onload = function () {
      this.onload = function () {};
      loadGapiClient();
    };
    loaderScript.onreadystatechange = function () {
      if (this.readyState === 'complete') {
        this.onload();
      }
    };
    (document.head || document.body || document.documentElement).appendChild(loaderScript);
  }
  
  function updateInnerFrame(url, enableInteraction, forceIosScrolling) {
    var urlEl = document.createElement('a');
    urlEl.setAttribute('href', url);
    if (urlEl.protocol != "https:" && urlEl.protocol != "http:") {
      return;
    }
    var iframe = document.getElementById('innerFrame');
    iframe.src = url;
    iframe.onload = function () {
      gapi.rpc.call('..', 'innerFrameLoaded');
    };
    if (enableInteraction) {
      if (forceIosScrolling) {
        var iframeParent = iframe.parentElement;
        iframeParent.classList.add('forceIosScrolling');
      } else {
        iframe.style.overflow = 'auto';
      }
    } else {
      iframe.style.pointerEvents = 'none';
    }
  }
  
  function updateInnerIframeCode(userCode, enableInteraction, forceIosScrolling) {
    gapi.rpc.setup('innerFrame');
    gapi.rpc.call('innerFrame', 'updateUserHtmlFrame', undefined, userCode, enableInteraction, forceIosScrolling);
  }
  
  function onPostMessage(ev) {
    if (ev.data['magic'] != 'SHIC') {
      return;
    }
    var type = ev.data['type'];
    switch (type) {
      case 'resize':
        var height = ev.data['height'];
        gapi.rpc.call('..', 'resize', undefined, height);
        break;
    }
  }
  
  function onGapiInitialized() {
    gapi.rpc.call('..', 'gapiInitialized');
    gapi.rpc.register('updateInnerFrame', updateInnerFrame);
    gapi.rpc.register('updateInnerIframeCode', updateInnerIframeCode);
    window.addEventListener('message', onPostMessage);
  }
  
  function loadGapiClient() {
    gapi.load('gapi.rpc', onGapiInitialized);
  }
  
  if (document.readyState == 'complete') {
    loadGapi();
  } else {
    self.addEventListener('load', loadGapi);
  }

// Function to show the info modal
function showInfo() {
  document.getElementById('info-modal').style.display = 'flex'; // Use 'flex' for centering
}

// Function to hide the info modal
function hideInfo() {
  document.getElementById('info-modal').style.display = 'none';
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
  const modal = document.getElementById('info-modal');
  if (event.target === modal) {
    modal.style.display = 'none';
  }
};

console.log("Page loaded"); // Check if this appears in the console when the page loads

function showInfo() {
  console.log("Info button clicked"); // Check if this appears when you click the info button
  document.getElementById('info-modal').style.display = 'flex';
}

function hideInfo() {
  console.log("Modal closed"); // Check if this appears when you close the modal
  document.getElementById('info-modal').style.display = 'none';
}