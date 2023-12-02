package hn.proyecto.tienda.Controladores;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;
import hn.proyecto.tienda.Modelos.Productos;
import hn.proyecto.tienda.Servicios.Impl.ProductosServiceImpl;

@RestController
@RequestMapping("/api/productos")
public class ProductosController {
    @Autowired
    private ProductosServiceImpl productosServiceImpl;

     @PostMapping("/crear")
    public Productos crearProducto(@RequestBody Productos nvoproducto){

        return this.productosServiceImpl.crearProducto(nvoproducto);
    }

    @GetMapping("/todos")
    public List<Productos> obtenerTodos(){
        return this.productosServiceImpl.obtenerTodos();
    }
    

    @DeleteMapping("/eliminar")
    public String eliminarProductoPorId(@RequestParam(name= "Id_Producto") Integer idproducto){ 
        return this.productosServiceImpl.eliminarProductoPorId(idproducto); 

    }
    
    @PutMapping("/actualizar")
    public String actualizarPorId(@RequestParam(name="Id_Producto")Integer idproducto,
                                  @RequestBody Productos producto){
            return this.productosServiceImpl.actualizarProducto(idproducto,producto);


    }

}
