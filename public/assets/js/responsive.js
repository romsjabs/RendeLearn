function updateImageBasedOnZoom() {
    const imageElement = document.getElementById('responsive_image');
    
    // Detect zoom level
    const zoomLevel = Math.round(window.devicePixelRatio * 100);
  
    if (zoomLevel < 100) {
      imageElement.src = 'assets/img/logo_horizontal.png'; // Image for zoom out
    } else if (zoomLevel === 100) {
      imageElement.src = 'assets/img/logo_horizontal.png'; // Default image
    } else if (zoomLevel >= 400) {
      imageElement.src = 'assets/img/logo.png';
      imageElement.width = 50; // Image for zoom in
    } else if (zoomLevel <= 400) {
        imageElement.src = 'assets/img/logo_horizontal.png';
        imageElement.width = 300;
    }
  }
  
  // Event listener for zoom change
  window.addEventListener('resize', updateImageBasedOnZoom);
  window.addEventListener('load', updateImageBasedOnZoom); // Check on page load
  
  let previousZoomLevel = window.devicePixelRatio;

  window.addEventListener('resize', function() {
    
    let currentZoomLevel = window.devicePixelRatio;

    if (previousZoomLevel === 2 && currentZoomLevel === 1.75) {
      this.window.scrollTo({top: 0, behavior: 'auto'});
    }

    previousZoomLevel = currentZoomLevel;

  }
);