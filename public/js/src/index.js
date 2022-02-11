import React from 'react';
import ReactDOM from 'react-dom';
import { Home } from './pages/Home';
import { Login } from './pages/Login';
import { Switch, Route, Link, HashRouter } from 'react-router-dom';

const App = () => {
    return (
        <HashRouter>
            <div>
                <ul>
                    <Link to="/">
                        <li>Home</li>
                    </Link>
                    <Link to="/login">
                        <li>Login</li>
                    </Link>
                </ul>
                <Switch>
                    <Route path="/" exact component={Home} />
                    <Route path="/login" component={Login} />
                </Switch>
            </div>
        </HashRouter>
    );
};

ReactDOM.render(<App />, document.getElementById('app'));
