package hn.proyecto.tienda.Servicios.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.proyecto.tienda.Modelos.Categorias;
import hn.proyecto.tienda.Repositorios.CategoriasRepository;
import hn.proyecto.tienda.Servicios.CategoriasService;

@Service
public class CategoriasServiceImpl implements CategoriasService {

    @Autowired 
    private CategoriasRepository  CategoriasRepository;

    @Override
    public Categorias crearCategoria(Categorias nvacategoria) {
        Categorias CategoriaGuardado = CategoriasRepository.save(nvacategoria);
        return CategoriaGuardado; 
    }

    @Override
    public String eliminarCategoriaPorId(Integer idCategoria) {
         Categorias CategoriaEliminar = this.CategoriasRepository.findById(idCategoria).get();

        if(CategoriaEliminar != null){
            this.CategoriasRepository.delete(CategoriaEliminar);
            return "Se ha eliminado la categoria" + CategoriaEliminar.getIdCategoria();
        }

        return "No existe la categoria con id " + idCategoria;
    }

    

    @Override
    public List<Categorias> obtenerTodos() {
        return this.CategoriasRepository.findAll();
    }

    @Override
    public String actualizarCategoria(Integer idCategoria, Categorias categoria) {
         Categorias CategoriaActualizar = this.CategoriasRepository.findById(idCategoria).get();

        if(CategoriaActualizar != null){
            CategoriaActualizar.setNombre(categoria.getNombre()); 
            this.CategoriasRepository.save(CategoriaActualizar); //se guardan los cambios que tengamos hechos 

            return "se Ha actualizado la categoria: " + idCategoria;
        }
        return "No Existe la categoria con id: " + idCategoria;
                       

    }

    @Override
    public Categorias obtenerCategoriaPorId(int idCategoria, Categorias categoria) {
        Categorias cteEncontrado = this.CategoriasRepository.findById(idCategoria).get();
        return cteEncontrado;
    }
    
}
