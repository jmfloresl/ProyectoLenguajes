package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.Categorias;

public interface CategoriasRepository extends JpaRepository<Categorias, Integer> {
    
}
