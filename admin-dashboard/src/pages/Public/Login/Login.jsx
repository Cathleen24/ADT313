import React, { useState, useRef, useEffect } from 'react';
import './Login.css'; // Ensure the styling is in the same directory as the component
import { useNavigate } from 'react-router-dom';
import axios from 'axios';

function Login() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [error, setError] = useState('');
  const [status, setStatus] = useState('idle');
  const [isFieldsDirty, setIsFieldsDirty] = useState(false);
  const emailRef = useRef();
  const passwordRef = useRef();
  const navigate = useNavigate();

  const handleOnChange = (e, type) => {
    setIsFieldsDirty(true);
    if (type === 'email') {
      setEmail(e.target.value);
    } else if (type === 'password') {
      setPassword(e.target.value);
    }
  };

  const handleLogin = async () => {
    const data = { email, password };
    setStatus('loading');

    try {
      const response = await axios.post('/admin/login', data, {
        headers: { 'Access-Control-Allow-Origin': '*' },
      });
      localStorage.setItem('accessToken', response.data.access_token);
      navigate('/main/movies');
      setStatus('idle');
    } catch (error) {
      setError('Invalid email or password');
      setStatus('idle');
    }
  };

  return (
    <div className='Login'>
      <div className='form-container'>
        <h3>Login</h3>
        {error && <span className='error'>{error}</span>}
        <div className='form-group'>
          <label htmlFor='email'>Email:</label>
          <input
            type='text'
            id='email'
            name='email'
            ref={emailRef}
            onChange={(e) => handleOnChange(e, 'email')}
            value={email}
            autoFocus
          />
          {isFieldsDirty && !email && <span className='error'>This field is required</span>}
        </div>
        <div className='form-group'>
          <label htmlFor='password'>Password:</label>
          <input
            type='password'
            id='password'
            name='password'
            ref={passwordRef}
            onChange={(e) => handleOnChange(e, 'password')}
            value={password}
          />
          {isFieldsDirty && !password && <span className='error'>This field is required</span>}
        </div>
        <div className='submit-container'>
          <button
            type='button'
            disabled={status === 'loading'}
            onClick={handleLogin}
          >
            {status === 'loading' ? 'Loading...' : 'Login'}
          </button>
        </div>
        <div className='register-container'>
          <p>
            Don't have an account? <a href='/register'>Register</a>
          </p>
        </div>
      </div>
    </div>
  );
}

export default Login;
