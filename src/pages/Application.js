import logo from "../img/MegaLogo.png";
import logo2 from "../img/TECHTAB.png";

export const Application = () => {
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
            <a href="/Calculate ">CALCULATE</a>
          </li>
          <li>
            <a className="selected" href="/Application">
              APPLICATION
            </a>
          </li>
          <li>
            <a href="/JoinUs">JOIN US</a>
          </li>
        </ul>
        <img width="80px" height="70px" src={logo} alt="Logo" />
        <div id="under-logo">by TechTab</div>
      </nav>
      <div id="header">
        <div id="to-help">WE ARE HERE TO HELP YOU !</div>
        <div id="appl-left">
          <div id="appl-package">1st Package</div>
          <div id="appl-100">$100</div>
          <div id="appl-features">Features:</div>
          <div id="appl-list">
            <ul>
              <li>Capital Recovery Within 44 Days</li>
              <li>Social Development</li>
              <li>Working Time: 20 Min Per Day</li>
              <li>Daily Profit Around 2%</li>
            </ul>
          </div>
          <div id="appl-get-started">
            <input type="button" class="button" value="GET STARTED"/>
          </div>
        </div>
        <div id="appl-right">
          <div id="appl-reg">To Register successfully!</div>
          <div id="appl-please">Please, read The Following!</div>
          <div id="appl-paragraph">
            <ul>
              <li>
                Candidates will be registered upon face-to-face meeting at a
                specific agreed upon location.
              </li>
              <li>Please bring your ID or any proof of identity.</li>
              <li>
                The appropriate registration plan will be selected for each
                accepted candidate at the time of the Meeting.
              </li>
              <li>
                Other details will be discussed at the time of the meeting (at
                the time of registration).
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  );
};
