import "../assets/css/responsive.css";
import "../assets/css/template.css";
import "../assets/scss/main.scss";
import "../assets/js/main";
import Nav  from "./nav";
import IconManager from './icon-manager';

if (process.env.NODE_ENV === "production") {
  console.log = function () {};
}

const nav = new Nav();
const iconManager = new IconManager();