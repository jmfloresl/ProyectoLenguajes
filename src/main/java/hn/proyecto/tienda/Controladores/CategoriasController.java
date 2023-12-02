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

import hn.proyecto.tienda.Modelos.Categorias;
import hn.proyecto.tienda.Servicios.Impl.CategoriasServiceImpl;

@RestController
@RequestMapping("/api/categorias")

public class CategoriasController {
    @Autowired
    private CategoriasServiceImpl categoriasServiceImpl;

      @PostMapping("/crear")
    public Categorias crearCategoria(@RequestBody Categorias nvacategoria){

        return this.categoriasServiceImpl.crearCategoria(nvacategoria);
    }

    @GetMapping("/todos")
    public List<Categorias> obtenerTodos(){
        return this.categoriasServiceImpl.obtenerTodos();
    }
    

    @DeleteMapping("/eliminar")
    public String eliminarCategoriaPorId(@RequestParam(name= "Id_Categoria") Integer idcategoria){ 
        return this.categoriasServiceImpl.eliminarCategoriaPorId(idcategoria); 

    }
    
    @PutMapping("/actualizar")
    public String actualizarPorId(@RequestParam(name="Id_Categoria")Integer idcategoria,
                                  @RequestBody Categorias categoria){
            return this.categoriasServiceImpl.actualizarCategoria(idcategoria,categoria);


    }

}
