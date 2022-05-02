import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link, useNavigate, useParams } from 'react-router-dom';

const EditEditorial = () => {

    const [ editorialInfo, setEditorialInfo ] = useState({
        codigo_editorial: '',
        nombre_editorial: '',
        contacto: '',
        telefono: ''
    });
    const endpoint = 'http://127.0.0.1:8000/api/editoriales';
    const navigate = useNavigate();
    const { codigo } = useParams();

    const getEditorialForCodigo = async () => {
        const response = await axios.get(`${ endpoint }/bycode/${ codigo }`);
        setEditorialInfo({
            id: response.data[0].id,
            codigo_editorial: response.data[0].codigo_editorial,
            nombre_editorial: response.data[0].nombre_editorial,
            contacto: response.data[0].contacto,
            telefono: response.data[0].telefono
        });
    }

    const updateEditorial = async () => {
        await axios.put(endpoint, editorialInfo)
        navigate('/');
    }

    useEffect( () => {
        getEditorialForCodigo();
    }, [])

    return(
        <div className='container'>
            <h1 className='my-4 text-center'>Editar Editorial</h1>
            <div className='row'>
                <div className="mb-3 col-12 col-md-6">
                    <label className="form-label">Codigo del editorial</label>
                    <input 
                        type="text" 
                        className="form-control" 
                        id="codigo" 
                        placeholder="Ingrese el codigo del editorial"
                        value={ editorialInfo.codigo_editorial }
                        onChange={ (e) => setEditorialInfo({ ...editorialInfo, codigo_editorial: e.target.value }) }
                    />
                </div>
                <div className="mb-3 col-12 col-md-6">
                    <label className="form-label">Nombre del editorial</label>
                    <input 
                        type="text" 
                        className="form-control" 
                        id="nombre" 
                        placeholder="Ingrese el nombre del editorial"
                        value={ editorialInfo.nombre_editorial }
                        onChange={ (e) => setEditorialInfo({ ...editorialInfo, nombre_editorial: e.target.value }) }
                    />
                </div>
                <div className="mb-3 col-12 col-md-6">
                    <label className="form-label">Contacto</label>
                    <input 
                        type="text" 
                        className="form-control" 
                        id="contacto" 
                        placeholder="Ingrese el contacto"
                        value={ editorialInfo.contacto }
                        onChange={ (e) => setEditorialInfo({ ...editorialInfo, contacto: e.target.value }) }
                    />
                </div>
                <div className="mb-3 col-12 col-md-6">
                    <label className="form-label">Telefono</label>
                    <input 
                        type="text" 
                        className="form-control" 
                        id="telefono" 
                        placeholder="Ingrese el telefono del contacto"
                        value={ editorialInfo.telefono }
                        onChange={ (e) => setEditorialInfo({ ...editorialInfo, telefono: e.target.value }) }
                    />
                </div>
            </div>
            <div className='d-flex justify-content-end'>
                <button className='btn btn-primary' onClick={ () => updateEditorial() }>Editar</button>
                <Link to={'/'} className='btn btn-secondary ms-3'>Cancelar</Link>
            </div>
        </div>
    )
}

export default EditEditorial;