import SignupForm from './components/dropdowns/SignupForm';
import Main from './components/main/Main';
import { Route, Routes } from 'react-router';

function App() {

 

  return (
      <Routes>
        <Route path='/' element={<Main />} />
        <Route path='/signup' element={ <SignupForm />} />
      </Routes>
  );
}

export default App;
