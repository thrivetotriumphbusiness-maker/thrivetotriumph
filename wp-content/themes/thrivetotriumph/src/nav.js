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
      console.log("WKWKWKOAIRA", this.nav_cookie, document.getElementById(this.nav_cookie));
      if (document.getElementById(this.nav_cookie)) {
        // const dataTarget = navLink.data("target");
        // history.pushState(null, "", `#${this.nav_cookie}`);
        console.log("WKWKWKOAIRA 2", this.nav_cookie);
        document.getElementById(this.nav_cookie).scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
        history.pushState(null, "", `#${this.nav_cookie}`);
        $.removeCookie('thrivetotriumph_nav');
      }
    });
    $(".nav-link").on("click", function (e) {
      const navLink = $(e.target).closest(".nav-link");
      const dataTarget = navLink.data("target");
      console.log("AKORAA", navLink, dataTarget);
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
