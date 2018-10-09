class Search {
  // 1. describe and create/initiate our object
  constructor() {
    this.openButton = jQuery(".js-search-trigger");
    this.closeButton = jQuery(".search-overlay__close");
    this.searchOverlay = jQuery(".search-overlay");
    this.events();
    console.log(this.openButton);
  }

  // 2. events
  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
  }

  // 3. methods (function, action...)
  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
  }
}

var search = new Search();
