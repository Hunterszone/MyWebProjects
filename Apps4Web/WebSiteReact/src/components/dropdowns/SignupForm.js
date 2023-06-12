import styles from './SignupForm.module.css';
import { useState } from 'react';
import { useNavigate } from 'react-router-dom'


function SignupForm(props) {
    const [usernamefield, setUsernameField] = useState('');
    const [emailfield, setEmailField] = useState('');
    const [passwordfield, setPasswordField] = useState('');
    const [confirmPasswordfield, setConfirmPasswordField] = useState('');
    const [isSuccessul, setIsSuccessful] = useState(false);

    const navigate = useNavigate();

    const usernameChangeHandler = (e) => {
        setUsernameField(e.target.value);
        console.log(usernamefield);
    };

    const emailChangeHandler = (e) => {
        setEmailField(e.target.value);
    };

    const passwordChangeHandler = (e) => {
        setPasswordField(e.target.value);
    };

    const confirmPasswordChangeHandler = (e) => {
        setConfirmPasswordField(e.target.value);
    };

    async function submitHandler(e) {
        e.preventDefault();

        if (document.getElementById('password').value !== document.getElementById('confirmPassword').value) {
            alert('passwords must match');
            return;
        }

        let userName = document.getElementById('uname').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        const userData = await fetch('http://localhost:8000/auth/signup', {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify({
                userName: userName,
                email: email,
                password: password
            })
        });
        console.log(userData);
        if (!userData.ok) {
            alert('Something went wrong!')
        } else {
            alert('Registration sucessfull!');
            navigate('/');
        }
        setUsernameField('');
        setEmailField('');
        setPasswordField('');
        setConfirmPasswordField('');

    }



    return (
        <div className={styles.container}>
            <form className={styles.form} onSubmit={submitHandler} >
                <label htmlFor='userName'>User Name</label>
                <input
                    onChange={usernameChangeHandler}
                    value={usernamefield}
                    type='text'
                    id='uname'
                    name='userName'
                    placeholder='Your user name'
                    required />

                <label htmlFor='email'>Email</label>
                <input
                    onChange={emailChangeHandler}
                    value={emailfield}
                    type='text'
                    id='email'
                    name='email'
                    placeholder='Your email adress'
                    required />

                <label htmlFor='password'>Password</label>
                <input
                    onChange={passwordChangeHandler}
                    value={passwordfield}
                    type='password'
                    id='password'
                    name='password'
                    placeholder='Your password'
                    required />

                <label htmlFor='confirmPassword'>Confirm Password</label>
                <input
                    onChange={confirmPasswordChangeHandler}
                    value={confirmPasswordfield}
                    type='password'
                    id='confirmPassword'
                    name='confirmPassword'
                    placeholder='Confirm your password'
                    required />

                <input type="submit" value="Submit" />
            </form>
        </div>
    );
};

export default SignupForm;