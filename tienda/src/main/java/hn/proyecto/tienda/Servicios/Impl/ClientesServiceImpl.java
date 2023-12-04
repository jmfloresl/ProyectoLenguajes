package hn.proyecto.tienda.Servicios.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.proyecto.tienda.Modelos.Clientes;
import hn.proyecto.tienda.Repositorios.ClientesRepository;
import hn.proyecto.tienda.Servicios.ClientesService;

@Service
public class ClientesServiceImpl implements ClientesService {
    
    @Autowired
    private ClientesRepository ClientesRepository;

    @Override
    public Clientes crearCliente(Clientes nvocliente) {
        Clientes clienteGuardado = ClientesRepository.save(nvocliente);
        return clienteGuardado; 
    }

    @Override
    public String eliminarClientePorId(Integer numeroCliente) {
        Clientes cteEliminar = this.ClientesRepository.findById(numeroCliente).get();

        if(cteEliminar != null){
            this.ClientesRepository.delete(cteEliminar);
            return "Se ha eliminado el cliente " + cteEliminar.getIdCliente();
        }

        return "No existe el cliente con dni " + numeroCliente;
    }

    @Override
    public List<Clientes> obtenerTodos() {
        return this.ClientesRepository.findAll();
    }

    @Override
    public String actualizarCliente(Integer idCliente, Clientes cliente) {
        Clientes cteActualizar = this.ClientesRepository.findById(idCliente).get();

        if(cteActualizar != null){
            cteActualizar.setNombre(cliente.getNombre()); 
            cteActualizar.setDireccion(cliente.getDireccion()); 
            cteActualizar.setApellido(cliente.getApellido()); 
            cteActualizar.setContrasenia(cliente.getContrasenia());
            cteActualizar.setCorreo(cliente.getCorreo()); 
            cteActualizar.setTelefono(cliente.getTelefono());
            this.ClientesRepository.save(cteActualizar); 

            return "se Ha actualizado el cliente: " + idCliente;
        }
        return "No Existe el cliente con dni: " + idCliente;
    }

    @Override
    public Clientes obtenerClientePorId(int idCliente, Clientes cliente) {
        Clientes cteEncontrado = this.ClientesRepository.findById(idCliente).get();
        return cteEncontrado;
    }
}
