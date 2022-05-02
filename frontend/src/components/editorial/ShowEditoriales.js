import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

const ShowEditoriales = () => {
    
    const [ editoriales, setEditoriales ] = useState([]);
    const endpoint = 'http://127.0.0.1:8000/api/editoriales';

    const getAllEditoriales = async () => {
        const response = await axios.get(endpoint);
        setEditoriales(response.data);
    }

    const deleteEditorial = async (id) => {
        await axios.delete(`${ endpoint }/${id}`);
        getAllEditoriales();
    }

    useEffect( () => {
        getAllEditoriales();
    }, [])

    return(
        <div className='container'>
            <h1 className='text-center'>Editoriales</h1>
            <div className='d-flex justify-content-end'>
                <Link to={"/agregar"} className='btn btn-primary'>Agregar editorial</Link>
            </div>
            <table className='table table-responsive mt-4'>
                <thead>
                    <tr>
                        <th>Codigo Editorial</th>
                        <th>Nombre Editorial</th>
                        <th>Contacto</th>
                        <th>Telefono</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    {
                        editoriales.map( editorial => (
                            <tr key={ editorial.id }>
                                <td>{ editorial.codigo_editorial }</td>
                                <td>{ editorial.nombre_editorial }</td>
                                <td>{ editorial.contacto }</td>
                                <td>{ editorial.telefono }</td>
                                <td>
                                    <Link className='btn btn-success' to={`/editar/${ editorial.codigo_editorial }`}>Editar</Link>
                                    <button className='btn btn-danger ms-2' onClick={ () => deleteEditorial(editorial.id) }>Eliminar</button>
                                </td>
                            </tr>
                        ))
                    }
                    
                </tbody>
            </table>
        </div>
    )
}

export default ShowEditoriales;