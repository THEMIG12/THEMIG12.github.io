import logo from "../img/MegaLogo.png";
import logo2 from "../img/TECHTAB.png";

export const JoinUs = () => {
  return (
    <div className="App">
      <nav id="side-menu">
        <img width="30%" height="3.2%" src={logo2} alt="Logo" />
        <ul>
          <li>
            <a href="/">HOME</a>
          </li>
          <li>
            <a href="/Videos">VIDEOS</a>
          </li>
          <li>
            <a href="/Calculate">CALCULATE</a>
          </li>
          <li>
            <a href="/Application">APPLICATION</a>
          </li>
          <li>
            <a className="selected" href="/JoinUs">
              JOIN US
            </a>
          </li>
        </ul>
        <img width="80px" height="70px" src={logo} alt="Logo" />
        <div id="under-logo">by TechTab</div>
      </nav>
      <div id="header">
        <div id="follow">Follow Us:</div>
        <div id="main-container">
          <div id="grid-container">
            <ul>
              <li class="image-item">
                <a href="#">FACEBOOK PAGE</a>
              </li>
              <li class="image-item">
                <a href="#">FACEBOOK GROUP</a>
              </li>
              <li class="image-item">
                <a href="#">INSTAGRAM</a>
              </li>
              <li>
                <a href="#">TELEGRAM</a>
              </li>
              <li class="image-item">
                <a href="#">ZOOM</a>
              </li>
              <li class="image-item">
                <a href="#">MESSENGER</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  );
};
