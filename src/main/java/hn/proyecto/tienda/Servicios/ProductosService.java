package hn.proyecto.tienda.Servicios;

import java.util.List;

import hn.proyecto.tienda.Modelos.Productos;

public interface ProductosService {
     public Productos crearProducto(Productos Producto); 

    public String eliminarProductoPorId (Integer numeroProducto) ; 

    public List<Productos> obtenerTodos();

    public String actualizarProducto(Integer idProducto,Productos Producto); 
   
    public Productos obtenerProductoPorId(int idProducto, Productos Producto);
}
