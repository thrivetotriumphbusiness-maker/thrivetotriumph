class Nav {
  constructor() {
    this._init();
    this.nav_cookie = $.cookie("thrivetotriumph_nav");
  }
  _init() {
    this._initEventHandlers();
  }

  _initEventHandlers() {
    document.addEventListener("DOMContentLoaded", (e) => {
      if (document.getElementById(this.nav_cookie)) {
        // const dataTarget = navLink.data("target");
        // history.pushState(null, "", `#${this.nav_cookie}`);
        document.getElementById(this.nav_cookie).scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
        history.pushState(null, "", `#${this.nav_cookie}`);
        switch (this.nav_cookie) {
          case "service":
            // remove active from all nav items
            $("header .nav-item").removeClass("active");
            // add active to service nav item
            $(
              'header .nav-item:has(a.nav-link[data-target="service"])'
            ).addClass("active");
            break;
        }
      }
    });
    $(".nav-link").on("click", function (e) {
      $.removeCookie("thrivetotriumph_nav");
      $(".navbar-collapse.collapse").collapse("hide");
      const navLink = $(e.target).closest(".nav-link");
      navLink.parents('li.nav-item').addClass('active').siblings().removeClass('active');
      const dataTarget = navLink.data("target");
      if (dataTarget) {
        $.cookie("thrivetotriumph_nav", dataTarget, {
          path: "/",
        });
        if (document.getElementById(dataTarget)) {
          document.getElementById(dataTarget).scrollIntoView({
            behavior: "smooth",
            block: "start",
          });
          history.pushState(null, "", `#${dataTarget}`);
        }
        if (siteLocalData.is_home) {
          return false;
        }
      }
      return true;
    });
  }
}
export default Nav;
