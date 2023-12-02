package hn.proyecto.tienda.Servicios.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.proyecto.tienda.Modelos.Productos;
import hn.proyecto.tienda.Repositorios.ProductosRepository;
import hn.proyecto.tienda.Servicios.ProductosService;

@Service
public class ProductosServiceImpl implements ProductosService {

    @Autowired
    private ProductosRepository ProductosRepository;

    @Override
    public Productos crearProducto(Productos nvoProducto) {
       Productos ProductoGuardado = ProductosRepository.save(nvoProducto);
        return ProductoGuardado; 
    }

    @Override
    public String eliminarProductoPorId(Integer idProducto) {
        Productos ProductoEliminar = this.ProductosRepository.findById(idProducto).get();

        if(ProductoEliminar != null){
            this.ProductosRepository.delete(ProductoEliminar);
            return "Se ha eliminado el Producto" + ProductoEliminar.getIdProducto();
        }

        return "No existe el Producto con id " + idProducto;
    }

    @Override
    public List<Productos> obtenerTodos() {
        return this.ProductosRepository.findAll();
    }

    @Override
    public String actualizarProducto(Integer idProducto, Productos Producto) {
         Productos ProductoActualizar = this.ProductosRepository.findById(idProducto).get();

        if(ProductoActualizar != null){
            ProductoActualizar.setNombre(Producto.getNombre()); 
            ProductoActualizar.setPrecioUnidad(Producto.getPrecioUnidad()); 
            ProductoActualizar.setPuntoReorden(Producto.getPuntoReorden()); 
            ProductoActualizar.setStock(Producto.getStock()); 
            this.ProductosRepository.save(ProductoActualizar); 

            return "se Ha actualizado el Producto: " + idProducto;
        }
        return "No Existe el producto con dni: " + idProducto;
    }

    @Override
    public Productos obtenerProductoPorId(int idProducto, Productos Producto) {
       Productos productoEncontrado = this.ProductosRepository.findById(idProducto).get();
        return productoEncontrado;
    }
    
}
