package hn.proyecto.tienda.Servicios;

import java.util.List;

import hn.proyecto.tienda.Modelos.Clientes;



public interface ClientesService {  

    public Clientes crearCliente(Clientes cliente); 

    public String eliminarClientePorId (Integer numeroCliente) ; 

    public List<Clientes> obtenerTodos();

    public String actualizarCliente(Integer idCliente,Clientes cliente); 
   
    public Clientes obtenerClientePorId(int idCliente, Clientes cliente);
}
