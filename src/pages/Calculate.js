import logo from "../img/MegaLogo.png";
import logo2 from "../img/TECHTAB.png";
import bg from "../img/Phone.png";
import React, { useState } from "react";

const calculateValue = (D, T, A) => {
  let x = 0;
  if (isNaN(D) || isNaN(T) || isNaN(A)) {
    return 0;
  }
  while (D--) {
    x = 0.0085 * parseFloat(T);
    T = parseFloat(T) + parseFloat(x);
  }
  let value = T - A;
  return value.toExponential(5);
};

export const Calculate = () => {
  const buttons = document.querySelectorAll(".button");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      buttons.forEach((btn) => btn.classList.toggle("active"));
      buttons.forEach((btn) => btn.classList.toggle("inactive"));
    });
  });

  const [adjustableSize] = useState("100%");
  const myStyle = {
    backgroundImage: "url(" + bg + ")",
    backgroundRepeat: "no-repeat",
    backgroundSize: adjustableSize,
  };
  const [isCalculate1Visible, setIsCalculate1Visible] = useState(true);
  const [first1, setFirst1] = useState("");
  const [second1, setSecond1] = useState("");
  const [first2, setFirst2] = useState("");
  const [second2, setSecond2] = useState("");
  const [result1, setResult1] = useState(0);
  const [result2, setResult2] = useState(0);

  const handleFirst1Change = (e) => {
    const value = parseFloat(e.target.value);
    setFirst1(value);
    setResult1(
      calculateValue(value * 2, parseFloat(second1), parseFloat(second1))
    );
  };

  const handleSecond1Change = (e) => {
    const value = parseFloat(e.target.value);
    setSecond1(value);
    setResult1(calculateValue(parseFloat(first1) * 2, value, value));
  };

  const handleFirst2Change = (e) => {
    const value = parseFloat(e.target.value);
    setFirst2(value);
    setResult2(
      calculateValue(value * 3, parseFloat(second2), parseFloat(second2))
    );
  };

  const handleSecond2Change = (e) => {
    const value = parseFloat(e.target.value);
    setSecond2(value);
    setResult2(calculateValue(parseFloat(first2) * 3, value, value));
  };

  const showCalculate1 = () => {
    setIsCalculate1Visible(true);
  };

  const showCalculate2 = () => {
    setIsCalculate1Visible(false);
  };

  const [redButton, setRedButton] = useState(true);

  const handleCalculate1Click = () => {
    showCalculate1();
    setRedButton(true);
  };

  const handleCalculate2Click = () => {
    showCalculate2();
    setRedButton(false);
  };

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
            <a className="selected" href="/Calculate">
              CALCULATE
            </a>
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
      <div id="header">
        <div id="calculate-container">
          <div id="calculate-content">
            <div style={{ display: isCalculate1Visible ? "block" : "none" }}>
              <div id="signals">Two Signals</div>
              <div id="container" className="container">
                <label htmlFor="noOfDays">NO. OF DAYS</label>
                <input
                  type="number"
                  id="first1"
                  min={1}
                  value={first1}
                  onChange={handleFirst1Change}
                />
                <br />
                <label htmlFor="value">VALUE</label>
                <br />
                <input
                  type="number"
                  id="second1"
                  min={1}
                  value={second1}
                  onChange={handleSecond1Change}
                />
              </div>
            </div>

            <div style={{ display: !isCalculate1Visible ? "block" : "none" }}>
              <div id="signals">Three Signals</div>
              <div id="container" className="container">
                <label htmlFor="noOfDays">NO. OF DAYS</label>
                <br />
                <input
                  type="number"
                  id="first2"
                  min={1}
                  value={first2}
                  onChange={handleFirst2Change}
                />
                <br />
                <label htmlFor="value">VALUE</label>
                <br />
                <input
                  type="number"
                  id="second2"
                  min={1}
                  value={second2}
                  onChange={handleSecond2Change}
                />
              </div>
            </div>
            <div
              id="calculate-buttons"
              style={{ display: "flex", justifyContent: "center", gap: "10px" }}
            >
              <input
                type="button"
                className="button"
                id="Calculate1"
                style={{
                  backgroundColor: redButton ? "red" : "gray",
                  color: "white",
                  borderRadius: "20px",
                  padding: "10px 17px",
                  border: "none",
                  cursor: "pointer",
                }}
                onClick={handleCalculate1Click}
              />
              <input
                type="button"
                className="button"
                id="Calculate2"
                style={{
                  backgroundColor: redButton ? "gray" : "red",
                  color: "white",
                  borderRadius: "20px",
                  padding: "10px 17px",
                  border: "none",
                  cursor: "pointer",
                }}
                onClick={handleCalculate2Click}
              />
            </div>
            <div style={{ display: isCalculate1Visible ? "block" : "none" }}>
              <div id="calculate-values">
                <div id="phone-screen" disabled style={myStyle}>
                  <div id="demo1">{result1}</div>
                </div>
              </div>
            </div>
            <div style={{ display: !isCalculate1Visible ? "block" : "none" }}>
              <div id="calculate-values">
                <div id="phone-screen" disabled style={myStyle}>
                  <div id="demo2">{result2}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};
