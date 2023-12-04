package hn.proyecto.tienda.Servicios.Impl;

import java.util.List;
import java.util.Optional;

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
    public boolean crearCliente(Clientes nvocliente) {
        try {
            // Lógica para crear el cliente en la base de datos
            ClientesRepository.save(nvocliente);
            return true;
        } catch (Exception e) {
            // Manejar cualquier excepción que pueda ocurrir al crear el cliente
            e.printStackTrace(); // Puedes imprimir la excepción para fines de depuración
            return false;
        }
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

    @Override
    public boolean validarCliente(Clientes cliente) {
        if (cliente != null && cliente.getCorreo() != null && cliente.getContrasenia() != null) {
            Optional<Clientes> optionalClientes = ClientesRepository.findByCorreo(cliente.getCorreo());
    
            if (optionalClientes.isPresent()) {
                Clientes clientes = optionalClientes.get();
    
                if (cliente.getContrasenia().equals(clientes.getContrasenia())) {
                    return true;
                }
            }
        }
        return false;
    }
}
