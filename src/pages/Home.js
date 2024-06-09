import "../App.css";
import logo from "../img/MegaLogo.png";
import logo2 from "../img/TECHTAB.png";
import bg from "../img/HomePage.png";

export const Home = () => {
  const myStyle = {
    backgroundImage: "url(" + bg + ")",
    backgroundPosition: "fixed",
    backgroundRepeat: "no-repeat",
    backgroundSize: "cover",
  };
  return (
    <div className="App">
      <nav id="side-menu">
        <img width="30%" height="3.2%" src={logo2} alt="Logo" />
        <ul>
          <li>
            <a className="selected" href="/">
              HOME
            </a>
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
            <a href="/JoinUs">JOIN US</a>
          </li>
        </ul>
        <img width="80px" height="70px" src={logo} alt="Logo" />
        <div id="under-logo">by TechTab</div>
      </nav>
      <div id="left-content">
        <div id="header">
          <div style={myStyle}>
            <div id="content">
              <h1>
                Join Us in <span>The TechTab Team</span>
              </h1>
            </div>
            <div id="home-content">
              TechTab is a Sub-Team for Mega Team with investment experts in
              financial consultancy business about 2139 exchange
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};
