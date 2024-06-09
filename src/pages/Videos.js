import logo from "../img/MegaLogo.png";
import logo2 from "../img/TECHTAB.png";

export const Videos = () => {
  const videoDescriptions = ["Description 1", "Description 2", "Description 3"];

  const videoUrls = [
    "https://www.youtube.com/embed/tgbNymZ7vqY",
    "https://www.youtube.com/embed/tgbNymZ7vqY",
    "https://www.youtube.com/embed/tgbNymZ7vqY",
  ];

  return (
    <div className="App">
      <nav id="side-menu">
        <img width="30%" height="3.2%" src={logo2} alt="Logo" />
        <ul>
          <li>
            <a href="/">HOME</a>
          </li>
          <li>
            <a className="selected" href="/Videos">
              VIDEOS
            </a>
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
      <div id="header-application">
        <div id="signals-videos">Videos</div>
        <div id="signals-videos-category">Category 1</div>
        <main>
          <ul className="video-list">
            {videoUrls.map((url, index) => (
              <li key={index}>
                <iframe
                  width="100%"
                  height="100%"
                  src={`${url}`}
                  frameBorder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowFullScreen
                />
                <div className="video-description">
                  {videoDescriptions[index]} - {index + 1}
                </div>
              </li>
            ))}
          </ul>
        </main>
        <div id="signals-videos-category">Category 2</div>
        <main>
          <ul className="video-list">
            {videoUrls.map((url, index) => (
              <li key={index}>
                <iframe
                  width="100%"
                  height="100%"
                  src={`${url}`}
                  frameBorder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowFullScreen
                />
                <div className="video-description">
                  {videoDescriptions[index]} - {index + 1}
                </div>
              </li>
            ))}
          </ul>
        </main>
        <div id="signals-videos-category">Category 3</div>
        <main>
          <ul className="video-list">
            {videoUrls.map((url, index) => (
              <li key={index}>
                <iframe
                  width="100%"
                  height="100%"
                  src={`${url}`}
                  frameBorder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowFullScreen
                />
                <div className="video-description">
                  {videoDescriptions[index]} - {index + 1}
                </div>
              </li>
            ))}
          </ul>
        </main>
      </div>
    </div>
  );
};
