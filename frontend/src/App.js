import { Route, Routes } from 'react-router-dom';
import './App.css';
import NewEditorial from './components/editorial/NewEditorial';
import EditEditorial from './components/editorial/EditEditorial';
import ShowEditoriales from './components/editorial/ShowEditoriales';

function App() {
    return (
        <div className="App">
            <Routes>
                <Route path='/' element={ <ShowEditoriales /> } />
                <Route path='/agregar' element={ <NewEditorial /> }/>
                <Route path='/editar/:codigo' element={ <EditEditorial /> }/>
            </Routes>
            
        </div>
    );
}

export default App;
