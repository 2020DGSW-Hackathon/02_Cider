import React from 'react';
import { Switch, Route, Redirect } from 'react-router-dom';
import NavBar from 'components/Common/NavBar/NavBar';

const App = () => {
  return (
    <>
    <Switch>
      <Route
      exact path='/' component={NavBar}
      />
    </Switch>
    </>
  );
};

export default App;
