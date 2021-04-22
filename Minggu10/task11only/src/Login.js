import React, {useState, useContext} from "react";
import { AuthContext } from "./index";
import firebase from "firebase";

const Login = () =>{
    const [email,setEmail] = useState("");
    const [password,setPassword] = useState("");
    const [error,setErrors] = useState("");

    const Auth = useContext(AuthContext);
    const handleForm = e => {
        e.preventDefault();
        firebase
        .auth()
        .createUserWithEmailAndPassword(email, password)
        .then(res => {
            if (res.user) Auth.setLoggedIn(true);
        })
        .catch(e => {
            setErrors(e.message);
        });
};

    return(
        <div>
            <h1>Login</h1>
            <form onSubmit={e => handleForm(e)}>
                <input
                value={email}
                onChange={e=> setEmail(e.target.value)}
                name="email"
                type="email"
                placeholder="email"
                />
            <input
            onChange={e=> setPassword(e.target.value)}
            name="password"
            value={password}
            type="password"
            placeholder="password"
            />
            <hr />
            <button class="googleBtn" type="button">
                <img src="file:///C:/Users/Asus/Downloads/google_black_logo_icon_147125.svg"
                alt="logo"/>
                Login with Google
            </button>
            <button type="submit">Login</button>
            <span>{error}</span>
            </form>
        </div>
    );
};

export default Login;