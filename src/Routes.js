import { BrowserRouter, Switch, Route } from "react-router-dom";
import { Application } from "./pages/Application";
import { Calculate } from "./pages/Calculate";
import { JoinUs } from "./pages/JoinUs";
import { Videos } from "./pages/Videos";
import { NotFound } from "./pages/NotFound";
import { Home } from "./pages/Home";

export const Routes = () => {
  return (
    <BrowserRouter>
      <Switch>
        <Route exact path="/">
          <Home />
        </Route>
        <Route exact path="/Home">
          <Home />
        </Route>
        <Route exact path="/Application">
          <Application />
        </Route>
        <Route exact path="/Calculate">
          <Calculate />
        </Route>
        <Route exact path="/JoinUs">
          <JoinUs />
        </Route>
        <Route exact path="/Videos">
          <Videos />
        </Route>
        <Route>
          <NotFound />
        </Route>
      </Switch>
    </BrowserRouter>
  );
};
