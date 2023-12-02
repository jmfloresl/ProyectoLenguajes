package hn.proyecto.tienda.Servicios;

import java.util.List;

import hn.proyecto.tienda.Modelos.Categorias;

public interface CategoriasService {

    public Categorias crearCategoria(Categorias categoria); 

    public String eliminarCategoriaPorId (Integer idCategoria) ; 

    public List<Categorias> obtenerTodos();

    public String actualizarCategoria(Integer idCategoria ,Categorias categoria); 
   
    public Categorias obtenerCategoriaPorId(int idCategoria, Categorias categoria);
    
}
